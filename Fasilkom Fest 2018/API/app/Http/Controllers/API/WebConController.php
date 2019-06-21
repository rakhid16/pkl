<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use App\GlobalFunction\StringCollection;
use App\GlobalFunction\GlobalController;
use App\Models\UploadWeb;
use App\Models\Team;
use App\Models\CompetitionTeam;
use App\Models\Setting;

class WebConController extends Controller
{
    public function uploadZip(Request $request){
        $statusCode = 1;
        $message = 'Successfully upload answer team';
        $reqData = json_decode($request->get('data'));
        $user = $request->get('user_acc');
        $valid = Validator::make((array)$reqData, [
                            'tahap' => 'required|integer|min:1|max:2',
                            'project_base_64' => 'required',//base 64
                            'project_name' => 'required',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }
        
        if($statusCode > 0){
            if(!isset($user->name)){//admin
                $statusCode = -1;
                $message = StringCollection::userNotAuthorized;
            }
        }

        if($statusCode > 0){
            $checkTeam = CompetitionTeam::where('team_id','=',$user->id)
                                        ->where('competition_id','=',2)
                                        ->first();
            if($checkTeam == NULL){
                $statusCode = -1;
                $message = 'Tim tidak mengikuti kompetisi ini';
            }
        }

        if($statusCode > 0){
            if(($reqData->tahap == 2 && $user->qualified_final < 3) || ($reqData->tahap == 1 && $user->qualified_final < 2)){
                $statusCode = -1;
                $message = 'Maaf tim Anda tidak berhak mengikuti seleksi tahap ini';
            }
        }

        if($statusCode > 0){
            $checkUpload = UploadWeb::where('team_id','=',$user->id)
                                    ->where('tahap','=',$reqData->tahap)
                                    ->first();
            if($checkUpload != NULL){
                $statusCode = -1;
                $message = 'Tim Anda sudah upload berkas pada tahap ini';
            }
        }

        if($statusCode > 0){
            $validTime = false;

            if($reqData->tahap == 1){
                $statusTahap1 = Setting::find(6);
                $statusTahap1 = $statusTahap1->content;
                if($statusTahap1 == 2){
                    $validTime = true;
                }
            }else{
                $statusTahap2 = Setting::find(7);
                $statusTahap2 = $statusTahap2->content;
                if($statusTahap2 == 2){
                    $validTime = true;
                }
            }

            if(!$validTime){
                $statusCode = -1;
                $message = 'Kompetisi tahap ini belum dimulai';
            }
        }

        if($statusCode > 0){
            $explodeProject = explode('.', $reqData->project_name);
            $extension = $explodeProject[count($explodeProject) - 1];

            $createUploadWeb = new UploadWeb;
            $createUploadWeb->team_id = $user->id;
            $createUploadWeb->tahap = $reqData->tahap;
            $createUploadWeb->save();

            $getProjectName = GlobalController::saveFileBase64Any($reqData->project_base_64, $explodeProject[0].$createUploadWeb->id, 'upload_web_project',$extension);
            $createUploadWeb->project_name = $getProjectName;
            $createUploadWeb->save();
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function fetchUploadZipTeam(Request $request){
        $statusCode = 1;
        $message = 'Successfully fetch upload zip webcon team';
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $data = array();

        $statusTahap1 = Setting::find(6);
        $statusTahap1 = $statusTahap1->content;

        $statusTahap2 = Setting::find(7);
        $statusTahap2 = $statusTahap2->content;

        $valid = Validator::make((array)$reqData, [
                            'tahap' => 'required|integer|min:0|max:2',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
            if(isset($user->name)){//not admin
                $statusCode = -1;
                $message = StringCollection::userNotAuthorized;
            }
        }
        
        if($statusCode > 0){
            if($reqData->tahap == 0){
                $data = UploadWeb::all();
            }else{
                $data = UploadWeb::where('tahap','=',$reqData->tahap)->get();
            }
            if(count($data) == 0){
                $statusCode = -1;
                $message = 'Data kosong';
            }
            for ($i=0; $i<count($data) ; $i++) {
                $getTeam = Team::find($data[$i]->team_id); 
                $data[$i]['team_name'] = $getTeam->name;
                $data[$i]['team_email'] = $getTeam->email;
                $data[$i]['team_qualified_final'] = $getTeam->qualified_final;
                $data[$i]['team_qualified_final_string'] = GlobalController::getQualified($getTeam->qualified_final);
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data,
            'status_tahap_1'=>$statusTahap1,
            'status_tahap_2'=>$statusTahap2,
        ];
        return $arrResponse;
    }
}
