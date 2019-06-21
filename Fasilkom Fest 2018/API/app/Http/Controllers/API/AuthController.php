<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Validator;
use StringCollection;
use GlobalController;
use Hash;
use App\Models\Admin;
use App\Models\Member;
use App\Models\Team;
use App\Models\CompetitionTeam;
use App\Models\Competition;
use App\Models\Mailer;

class AuthController extends Controller
{
    public function loginAdmin(Request $request){
        $data = '';
        $token = '';
        $statusCode = 1;
        $message = 'Successfully login as admin';
        $reqData = json_decode($request->get('data'));

        $valid = Validator::make((array)$reqData, [
                            'email' => 'required|email|max:100',
                            'password' => 'required|string|max:100'
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
        	$fetchEmail = Admin::where('email','=',$reqData->email)->first();
        	if($fetchEmail == NULL){
        		$statusCode = -1;
            	$message = StringCollection::userNotFound;
        	}
        }

        if($statusCode > 0){
        	if(strtoupper(md5($reqData->password)) == $fetchEmail->password){
        		$fetchEmail->token = GlobalController::getToken();
        		$fetchEmail->save();
                $fetchEmail->password = NULL;
        		$data = $fetchEmail;
        		$token = $fetchEmail->token;
        	}else{
        		$statusCode = -1;
            	$message = 'Password salah';
        	}
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data,
            'token'=>$token
        ];
    	return $arrResponse;
    }

    public function loginTeam(Request $request){
        $data = '';
        $token = '';
        $statusCode = 1;
        $message = 'Successfully login as team';
        $reqData = json_decode($request->get('data'));

        $valid = Validator::make((array)$reqData, [
                            'email' => 'required|email|max:150',
                            'password' => 'required|string|max:100',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
        	$fetchEmail = Team::where('email','=',$reqData->email)
                                ->where('flag','=','1')
                                ->first();
        	if($fetchEmail == NULL){
        		$statusCode = -1;
            	$message = StringCollection::userNotFound;
        	}
        }

        if($statusCode > 0){
            $getCompetition = CompetitionTeam::where('team_id','=',$fetchEmail->id)->first();
            if($getCompetition == NULL){
                $statusCode = -1;
                $message = 'Kompetisi tidak ditemukan';
            }
        }

        if($statusCode > 0){
        	if(strtoupper(md5($reqData->password)) == $fetchEmail->password){
        		$fetchEmail->token = GlobalController::getToken();
        		$fetchEmail->save();

        		$fetchMemberTeam = Member::where('team_id','=',$fetchEmail->id)
                                        ->where('flag','=',1)
                                        ->get();
        		$fetchEmail['detail_member'] = $fetchMemberTeam;

                $fetchEmail->password = NULL;
                $fetchEmail['competition_team'] = $getCompetition;

                $competitionData = Competition::find($getCompetition->competition_id);
                $fetchEmail['competition_team']['competition_name'] = $competitionData->name;

                $fetchEmail['valid_bayar_string'] = GlobalController::getStatusBayar($fetchEmail->valid_bayar);
                $fetchEmail['valid_register_data_string'] = GlobalController::getRegisterStatus($fetchEmail->valid_register_data);
                $fetchEmail['valid_on_off_string'] = GlobalController::getStatusOnlineOffline($fetchEmail->valid_on_off);
                $fetchEmail['qualified_final_string'] = GlobalController::getQualified($fetchEmail->qualified_final);
        		$data = $fetchEmail;
        		$token = $fetchEmail->token;
        	}else{
        		$statusCode = -1;
            	$message = 'Password salah';
        	}
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data,
            'token'=>$token
        ];
    	return $arrResponse;
    }

    public function logout(Request $request){
        $user = $request->get('user_acc');
        $user->token = '';
        $user->save();

        $statusCode = 1;
        $message = 'Logout success';

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function changePassword(Request $request){
        $user = $request->get('user_acc');
        $statusCode = 1;
        $message = 'Successfully change password';
        $reqData = json_decode($request->get('data'));

        $valid = Validator::make((array)$reqData, [
                            'password_old' => 'required|string|max:100',
                            'password_new' => 'required|string|max:100'
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
            if(strtoupper(md5($reqData->password_old)) != $user->password){
                $statusCode = -1;
                $message = 'Password lama salah';
            }
        }

        if($statusCode > 0){
            $user->password = strtoupper(md5($reqData->password_new));
            $user->save();
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function forgotPassword(Request $request){
        $statusCode = 1;
        $reqData = json_decode($request->get('data'));

        $valid = Validator::make((array)$reqData, [
                            'email' => 'required|email|max:150'
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
            $fetchTeam = Team::where('email','=',$reqData->email)
                            ->where('flag','=','1')
                            ->first();
            if($fetchTeam == NULL){
                $statusCode = -1;
                $message = 'Team tidak ditemukan';
            }
        }

        if($statusCode > 0){
            $getRandomPassword = GlobalController::getRandomPassword();
            $fetchTeam->password = strtoupper(md5($getRandomPassword));
            $fetchTeam->save();
            //mailer
            $subject = 'Reset Password';
            // GlobalController::sentEmail($reqData->email,$subject,$getRandomPassword,'htmlviewmail');
            $message = 'Cek email Anda: '.$reqData->email.' untuk mendapatkan password baru';

            $logMail = new Mailer;
            $logMail->team_id = $fetchTeam->id;
            $logMail->subject = $subject;
            $logMail->content = $getRandomPassword;
            $logMail->save();
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }
}
