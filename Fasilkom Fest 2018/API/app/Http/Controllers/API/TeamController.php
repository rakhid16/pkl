<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Team;
use App\Models\Member;
use App\Models\Competition;
use App\Models\CompetitionTeam;
use App\Models\BuktiPembayaran;
use App\Models\Mailer;
use App\Models\AnswerCsoTeam;
use App\Models\UploadWeb;
use GlobalController;
use StringCollection;
use Carbon;
use Validator;

class TeamController extends Controller
{
    public function register(Request $request){
        $statusCode = 1;
        $message = 'Successfully register';
        $reqData = json_decode($request->get('data'));

        $valid = Validator::make((array)$reqData, [
                            'email' => 'required|email|max:150',
                            'password' => 'required|string|max:100',
                            'name' => 'required|string',
                            'school_name' => 'required|string',
                            'competition_id' => 'required|integer|min:1|max:2',
                            'hanya_ketua' => 'required|integer|min:0|max:1',

                            'full_name' => 'required',
                            'handphone' => 'required',
                            'line' => 'required',
                            'image_student_card' => 'required',
                            'gender' => 'required|string|max:1',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
            $fetchEmail = Team::where('email','=',$reqData->email)
                                ->where('flag','=',1)
                                ->first();
            $fetchCompetition = Competition::find($reqData->competition_id);
            if($fetchEmail != NULL){
                $statusCode = -1;
                $message = 'Team sudah registrasi sebelumnya';
            }else if($fetchCompetition == NULL){
                $statusCode = -1;
                $message = 'Kompetisi tidak ditemukan';
            }
        }

        if($statusCode > 0){
            $createTeam = new Team;
            $createTeam->email = $reqData->email;
            $createTeam->name = $reqData->name;
            $createTeam->school_name = $reqData->school_name;
            $createTeam->password = strtoupper(md5($reqData->password));
            if($reqData->hanya_ketua == 1){
                $createTeam->valid_register_data = 2;
            }
            $createTeam->save();

            $createMember = new Member;
            $createMember->team_id = $createTeam->id;
            $createMember->full_name = $reqData->full_name;
            $createMember->gender = $reqData->gender;
            $createMember->handphone = $reqData->handphone;
            $createMember->line = $reqData->line;
            $createMember->ketua_tim = 1;
            $createMember->save();

            $getImageName = GlobalController::saveFileBase64Any($reqData->image_student_card, $createMember->id, 'member_image','jpg');
            $createMember->image_student_card = $getImageName;
            $createMember->save();

            $lastId = 1;
            $getCompetitionTeam = CompetitionTeam::where('id','!=',-1)->orderBy('created_at','DESC')->first();
            if($getCompetitionTeam != NULL){
                $lastId = $getCompetitionTeam->id + 1;
            }

            $createCompetitionTeam = new CompetitionTeam;
            $createCompetitionTeam->competition_id = $reqData->competition_id;
            $createCompetitionTeam->team_id = $createTeam->id;
            $createCompetitionTeam->price_to_compete = $fetchCompetition->price_to_compete + $lastId;
            $createCompetitionTeam->save();

            //mailer successfully register dan keterangan jumlah yang harus dibayar+id nya
            $message .= '. Mohon cek email Anda : '.$reqData->email;
            $subject = 'Register Success';
            $textOnMail = 'Selamat, tim '.$reqData->name.' telah berhasil terdaftar dalam sistem untuk mengikuti lomba '.$fetchCompetition->name.'. Mohon melengkapi data tim Anda pada halaman dashboard dan transfer ke rekening 1234567890 a.n. Lugito Michael sebesar '.$createCompetitionTeam->price_to_compete.' paling lambat 31 Agustus 2018, jika sudah mentransfer sesuai nominal yang dicantumkan mohon untuk konfirmasi admin bisa menghubungi langsung ke 089676653098 (call/WA) maupun klik button Lapor Sudah Bayar pada menu dashboard akun Anda';//konfirmasi data
            // GlobalController::sentEmail($reqData->email,$subject,$textOnMail,'htmlviewsuccessregisterteam');
            
            $logMail = new Mailer;
            $logMail->team_id = $createTeam->id;
            $logMail->subject = $subject;
            $logMail->content = $textOnMail;
            $logMail->save();
        }
        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function addMember(Request $request){//sesuaikan isset dengan db
        $user = $request->get('user_acc');
        $statusCode = 1;
        $message = 'Successfully add member';
        $reqData = json_decode($request->get('data'));

        $valid = Validator::make((array)$reqData, [
                            'data_member' => 'required|array|max:2',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
        	if(!isset($user->name)){ // not team user
	        	$statusCode = -1;
				$message = StringCollection::userNotAuthorized;
	        }
        }

        if($statusCode > 0){
            //validate
            $memberData = $reqData->data_member;
            $validMember = true;
            for($a=0;$a<count($memberData);$a++){
                if($memberData[$a]->gender != 'L' && $memberData[$a]->gender != 'P'){
                    $validMember = false;
                }
            }
            if(!$validMember){
                $statusCode = -1;
                $message = 'Ada data tidak valid';
            }
        }

        if($statusCode > 0){
            //validate
            $maxMember = 3;
            $getCompetition = CompetitionTeam::where('team_id','=',$user->id)->first();
            if($getCompetition != NULL){
                if($getCompetition->competition_id == 2){
                    $maxMember = 2;
                }
            }

        	$fetchMember = Member::where('team_id','=',$user->id)
                                ->where('flag','=',1)
                                ->get();
        	if(count($fetchMember) + count($reqData->data_member) > $maxMember){
        		$statusCode = -1;
				$message = 'Member maksimal termasuk Anda untuk kompetisi ini adalah '.$maxMember.' orang';
        	}
        }

        if($statusCode > 0){
            for($a=0;$a<count($memberData);$a++){
                $createMember = new Member;
                $createMember->team_id = $user->id;
                $createMember->full_name = $memberData[$a]->full_name;
                $createMember->gender = $memberData[$a]->gender;
                $createMember->handphone = $memberData[$a]->handphone;
                $createMember->line = $memberData[$a]->line;
                $createMember->save();

                $getImageName = GlobalController::saveFileBase64Any($memberData[$a]->image_student_card, $createMember->id, 'member_image','jpg');
                $createMember->image_student_card = $getImageName;
                $createMember->save();

                $user->valid_register_data = 2;
                $user->save();
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function updateProfileTeam(Request $request){//sesuaikan dg db
        $user = $request->get('user_acc');
        $statusCode = 1;
        $message = 'Successfully update team profile';
        $reqData = json_decode($request->get('data'));

        $valid = Validator::make((array)$reqData, [
                            // 'email' => 'required',
                            'name' => 'required',
                            'school_name' => 'required',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
        	if(!isset($user->name)){
	        	$statusCode = -1;
				$message = StringCollection::userNotAuthorized;
	        }
        }

        // if($statusCode > 0){
        //     $fetchEmail = Team::where('email','=',$reqData->email)
        //     					->where('email','!=',$user->email)
        //     					->first();
        //     if($fetchEmail != NULL){
        //         $statusCode = -1;
        //         $message = 'Team sudah registrasi sebelumnya';
        //     }
        // }

        if($statusCode > 0){
        	// $user->email = $reqData->email;
        	$user->name = $reqData->name;
            $user->school_name = $reqData->school_name;
        	$user->save();
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function updateMember(Request $request){//sesuaikan dg db
        $user = $request->get('user_acc');
        $statusCode = 1;
        $message = 'Successfully update member';
        $reqData = json_decode($request->get('data'));

        $valid = Validator::make((array)$reqData, [
        					'member_id' => 'required',
                            'full_name' => 'required',
                            'gender' => 'required'
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
        	if(!isset($user->name)){
	        	$statusCode = -1;
				$message = StringCollection::userNotAuthorized;
	        }else if($reqData->gender != 'L' && $reqData->gender != 'P'){
	        	$statusCode = -1;
				$message = 'Jenis kelamin tidak valid';
	        }
        }

        if($statusCode > 0){
        	$fetchMember = Member::where('team_id','=',$user->id)
        						->where('id','=',$reqData->member_id)
                                ->where('flag','=',1)
        						->first();
        	if($fetchMember == NULL){
        		$statusCode = -1;
				$message = 'Anggota tidak ditemukan';
        	}else if($user->valid_register_data != 1){
                $statusCode = -1;
                $message = 'Tidak dapat update data karena team dalam proses atau sudah di validasi oleh admin';
            }
        }

        if($statusCode > 0){
        	$fetchMember->full_name = $reqData->full_name;
        	$fetchMember->gender = $reqData->gender;
        	if(isset($reqData->handphone)){
        		$fetchMember->handphone = $reqData->handphone;
        	}
        	if(isset($reqData->line)){
        		$fetchMember->line = $reqData->line;
        	}
        	$fetchMember->save();
            // if(isset($reqData->image_student_card)){
            //     $getImageName = GlobalController::saveFileBase64Any($reqData->image_student_card, $fetchMember->id, 'member_image','jpg');
            //     $fetchMember->image_student_card = $getImageName;
            //     $fetchMember->save();                
            // }
            $user->valid_register_data = 2;
            $user->save();
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function fetchMember(Request $request){
        $user = $request->get('user_acc');
        $statusCode = 1;
        $message = 'Successfully fetch member';
        $data = array();
        
        if($statusCode > 0){
            if(!isset($user->name)){
                $statusCode = -1;
                $message = StringCollection::userNotAuthorized;
            }
        }

        if($statusCode > 0){
            $data = Member::where('team_id','=',$user->id)
                            ->where('flag','=',1)
                            ->get();
            if(count($data) == 0){
                $statusCode = -1;
                $message = 'Data kosong';
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data
        ];
        return $arrResponse;
    }

    public function participateCompetition(Request $request){//sepertinya tidak perlu
        // $user = $request->get('user_acc');
        $statusCode = 1;
        $message = 'Successfully participate';
        // $reqData = json_decode($request->get('data'));
        // $valid = Validator::make((array)$reqData, [
        //                     'competition_id' => 'required',
        //                 ]);
        // if($valid->fails()){
        //     $statusCode = -1;
        //     $message = StringCollection::parameterNotComplete;
        // }
        // if($statusCode > 0){
        //     if(!isset($user->name)){
        //         $statusCode = -1;
        //         $message = StringCollection::userNotAuthorized;
        //     }
        // }
        // if($statusCode > 0){
        //     $fetchCompetition = Competition::find($reqData->competition_id);
        //     if($fetchCompetition == NULL){
        //         $statusCode = -1;
        //         $message = 'Competition not found';
        //     }
        // }
        // if($statusCode > 0){
        //     $fetchCompetitionTeam = CompetitionTeam::where('competition_id','=',$reqData->competition_id)
        //                                             ->where('team_id','=',$user->id)
        //                                             ->first();
        //     if($fetchCompetitionTeam != NULL){
        //         $statusCode = -1;
        //         $message = 'Tim already registered';
        //     }
        // }
        // if($statusCode > 0){
        //     $fetchCompetitionTeam = CompetitionTeam::where('competition_id','=',$reqData->competition_id)->get();
        //     if(count($fetchCompetitionTeam) >= $fetchCompetition->max_team){
        //         $statusCode = -1;
        //         $message = 'Quota of this competition has fullified';
        //     }
        // }
        // if($statusCode > 0){
        //     $createCompetitionTeam = new CompetitionTeam;
        //     $createCompetitionTeam->competition_id = $reqData->competition_id;
        //     $createCompetitionTeam->team_id = $user->id;
        //     $createCompetitionTeam->save();
        // }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function addBuktiPembayaran(Request $request){
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $statusCode = 1;
        $message = 'Successfully add bukti pembayaran';
        $data = array();

        $valid = Validator::make((array)$reqData, [
                            'competition_team_id' => 'required|integer|min:1',
                            'image' => 'required',
                            // 'note' => 'required',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }
        
        if($statusCode > 0){
            if(!isset($user->name)){
                $statusCode = -1;
                $message = StringCollection::userNotAuthorized;
            }
        }

        if($user->valid_bayar != 1){
            $statusCode = -1;
            $message = 'Anda sudah upload bukti pembayaran';
        }

        if($statusCode > 0){
            $checkData = CompetitionTeam::find($reqData->competition_team_id);
            $valid = false;
            if($checkData != NULL){
                if($checkData->team_id == $user->id){
                    $valid = true;
                }
            }
            if(!$valid){
                $statusCode = -1;
                $message = 'Data tidak ditemukan';
            }
        }

        if($statusCode > 0){
            $createBuktiPembayaran = new BuktiPembayaran;
            $createBuktiPembayaran->competition_team_id = $reqData->competition_team_id;
            $createBuktiPembayaran->note = '-';
            if(isset($reqData->note)){
                $createBuktiPembayaran->note = $reqData->note;
            }
            $createBuktiPembayaran->save();

            $getImageName = GlobalController::saveFileBase64Any($reqData->image, $createBuktiPembayaran->id, 'bukti_pembayaran_image','jpg');
            $createBuktiPembayaran->image = $getImageName;
            $createBuktiPembayaran->save();

            $user->valid_bayar = 2;
            $user->save();
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data
        ];
        return $arrResponse;
    }

    public function updateStatusBayarTeam(Request $request){
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $statusCode = 1;
        $message = 'Successfully update status bayar team';

        $valid = Validator::make((array)$reqData, [
                            'status_bayar' => 'required|integer|max:2',
                            // 'team_id' => 'required|integer',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
            if(!isset($user->name)){
                $statusCode = -1;
                $message = StringCollection::userNotAuthorized;
            }
        }

        if($statusCode > 0){
            $fetchTeam = Team::find($user->id);
            if($fetchTeam == NULL){
                $statusCode = -1;
                $message = 'Team tidak ditemukan';  
            }else if($fetchTeam->valid_bayar >= $reqData->status_bayar){
                $statusCode = -1;
                $message = 'Status bayar sudah diupdate sebelumnya';
            }
        }

        if($statusCode > 0){
            $fetchTeam->valid_bayar = $reqData->status_bayar;
            $fetchTeam->save();
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function getAllStatus(Request $request){
        $user = $request->get('user_acc');
        $statusCode = 1;
        $message = 'Success';

        $data = $user;
        $fetchMemberTeam = Member::where('team_id','=',$data->id)
                                ->where('flag','=',1)
                                ->get();
        $getCompetition = CompetitionTeam::where('team_id','=',$data->id)->first();
        $data['detail_member'] = $fetchMemberTeam;

        $data->password = NULL;
        $data['competition_team'] = $getCompetition;

        $competitionData = Competition::find($getCompetition->competition_id);
        $data['competition_team']['competition_name'] = $competitionData->name;

        $data['valid_bayar_string'] = GlobalController::getStatusBayar($data->valid_bayar);
        $data['valid_register_data_string'] = GlobalController::getRegisterStatus($data->valid_register_data);
        $data['valid_on_off_string'] = GlobalController::getStatusOnlineOffline($data->valid_on_off);
        $data['qualified_final_string'] = GlobalController::getQualified($data->qualified_final);
        $data['now'] = \Carbon\Carbon::now()->addHours(7)->toDateTimeString();
        $data['valid_tahap1'] = 2;
        $data['valid_tahap2'] = 2;

        if($getCompetition->competition_id == 1){//CSO
            $checkAnswer = AnswerCsoTeam::where('team_id','=',$data->id)->get();
            if(count($checkAnswer) > 0){
                $data['valid_tahap1'] = 3;
            }else if($data->valid_bayar == 3 && $data->valid_register_data == 3){
                $data['valid_tahap1'] = 1;
            }
        }else if($getCompetition->competition_id == 2){//WEBCON
            $checkUpload = UploadWeb::where('team_id','=',$data->id)->get();
            if($data->valid_bayar == 3 && $data->valid_register_data == 3){
                $data['valid_tahap1'] = 1;
                $data['valid_tahap2'] = 1;
                if(count($checkUpload) > 0){
                    $data['valid_tahap1'] = 3;
                    $checkUploadTahap2 = UploadWeb::where('team_id','=',$data->id)
                                            ->where('tahap','=',2)
                                            ->first();
                    if($checkUploadTahap2 != NULL){
                        $data['valid_tahap2'] = 3;
                    }
                }
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data,
        ];
        return $arrResponse;
    }
}
