<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Team;
use App\Models\Member;
use App\Models\BuktiPembayaran;
use App\Models\CompetitionTeam;
use App\Models\Competition;
use App\Models\Mailer;
use GlobalController;
use StringCollection;
use Validator;

class AdminController extends Controller
{
    public function fetchTeam(Request $request){
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $statusCode = 1;
        $message = 'Successfully fetch team';
        $data = array();

        $valid = Validator::make((array)$reqData, [
                            'filter_bayar' => 'required|integer',
                            'filter_register_data' => 'required|integer',
                            'filter_online_offline' => 'required|integer',
                            'filter_qualified_final' => 'required|integer',
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
            $data = Team::where('flag','=',1);
            
            if($reqData->filter_register_data != 0){
                $data = $data->where('valid_register_data','=',$reqData->filter_register_data);
            }
            if($reqData->filter_bayar != 0){
                $data = $data->where('valid_bayar','=',$reqData->filter_bayar);
            }
            if($reqData->filter_online_offline != 0){
                $data = $data->where('valid_on_off','=',$reqData->filter_online_offline);
            }
            if($reqData->filter_qualified_final != 0){
                $data = $data->where('qualified_final','=',$reqData->filter_qualified_final);
            }

            $data = $data->get();

            if(count($data) == 0){
                $statusCode = -1;
                $message = 'Data kosong';
            }
            
            for($a=0;$a<count($data);$a++){
                $data[$a]['competition_team'] = CompetitionTeam::where('team_id','=',$data[$a]->id)->get();
                $data[$a]['competition'] = Competition::find($data[$a]['competition_team'][0]->competition_id);
                $data[$a]['member'] = Member::where('team_id','=',$data[$a]->id)
                                            ->where('flag','=',1)
                                            ->get();
                $data[$a]['bukti_pembayaran'] = BuktiPembayaran::where('competition_team_id','=',$data[$a]['competition_team'][0]->id)->get();
                $data[$a]['valid_bayar_string'] = GlobalController::getStatusBayar($data[$a]->valid_bayar);
                $data[$a]['valid_register_data_string'] = GlobalController::getRegisterStatus($data[$a]->valid_register_data);
                $data[$a]['valid_on_off_string'] = GlobalController::getStatusOnlineOffline($data[$a]->valid_on_off);
                $data[$a]['qualified_final_string'] = GlobalController::getQualified($data[$a]->qualified_final);
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data
        ];
        return $arrResponse;
    }

    public function updateRegisterStatusTeam(Request $request){
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $statusCode = 1;
        $message = 'Successfully update register valid data team';

        $valid = Validator::make((array)$reqData, [
                            'status_register' => 'required|integer|max:3',
                            'team_id' => 'required|integer',
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
            $fetchTeam = Team::find($reqData->team_id);
            if($fetchTeam == NULL){
                $statusCode = -1;
                $message = 'Team tidak ditemukan';  
            // }else if($fetchTeam->valid_register_data >= $reqData->status_register){
            //     $statusCode = -1;
            //     $message = 'Status registrasi sudah diupdate sebelumnya';
            }
        }

        if($statusCode > 0){
            $fetchTeam->note_register_data = '';
            if(isset($reqData->note) && $reqData->status_register == 1){
                $fetchTeam->note_register_data = $reqData->note;
            }
            $fetchTeam->valid_register_data = $reqData->status_register;

            if(isset($reqData->delete_account)){
                $fetchTeam->token = '';
                $getMember = Member::where('team_id','=',$reqData->team_id)
                                    ->where('ketua_tim','!=','1')
                                    ->where('flag','=','1')
                                    ->get();
                for($a=0;$a<count($getMember);$a++){
                    $getMember[$a]->flag = -1;
                    $getMember[$a]->save();
                }
                if($reqData->delete_account == 1){
                    $fetchTeam->flag = -1;
                }
            }
            $fetchTeam->save();
            //mailer
            if($reqData->status_register == 1 || $reqData->status_register == 3){
                $textOnMail = 'Selamat, tim '.$reqData->name.' telah berhasil terdaftar dalam sistem untuk mengikuti lomba '.$fetchCompetition->name.'. Mohon melengkapi data tim Anda pada halaman dashboard dan transfer ke rekening 1234567890 a.n. Lugito Michael sebesar '.$createCompetitionTeam->price_to_compete.' paling lambat 31 Agustus 2018, jika sudah mentransfer sesuai nominal yang dicantumkan mohon untuk konfirmasi admin bisa menghubungi langsung ke 089676653098 (call/WA) maupun klik button Lapor Sudah Bayar pada menu dashboard akun Anda';
                $keterangan = 'Register Sukses';
                if($reqData->status_register == 1){
                    $alasan = '';
                    if(isset($reqData->note)){
                        $alasan = '('.$reqData->note.')';
                    }
                    $textOnMail = 'Maaf, tim Anda belum berhasil terdaftar '.$alasan.'. Silahkan lakukan register ulang hingga muncul pemberitahuan selanjutnya. Jika tetap mengalami kegagalan mohon hubungi : 089676653098';
                    $keterangan = 'Register Belum Valid';
                }

                // GlobalController::sentEmail($fetchTeam->email,$keterangan,$textOnMail,'htmlviewsuccessregisterteam');

                $logMail = new Mailer;
                $logMail->team_id = $fetchTeam->id;
                $logMail->subject = $keterangan;
                $logMail->content = $textOnMail;
                $logMail->save();
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function updateStatusBayarTeam(Request $request){
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $statusCode = 1;
        $message = 'Successfully update status bayar team';

        $valid = Validator::make((array)$reqData, [
                            'status_bayar' => 'required|integer|max:3',
                            'team_id' => 'required|integer',
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
            $fetchTeam = Team::find($reqData->team_id);
            if($fetchTeam == NULL){
                $statusCode = -1;
                $message = 'Team tidak ditemukan';  
            }else if($fetchTeam->valid_bayar >= $reqData->status_bayar){
                if($fetchTeam->valid_bayar != 2){
                    $statusCode = -1;
                    $message = 'Status bayar sudah diupdate sebelumnya';
                }
            }
        }

        if($statusCode > 0){
            $fetchTeam->valid_bayar = $reqData->status_bayar;
            $fetchTeam->save();
            //mailer
            if($reqData->status_bayar == 1 || $reqData->status_bayar == 3){
                $getCompetition = new \StdClass;
                $getCompetition->price_to_compete = '';

                $getCompetitionTeam = CompetitionTeam::where('team_id','=',$reqData->team_id)->first();
                if($getCompetitionTeam != NULL){
                    $getCompetition->price_to_compete = 'sebesar '.$getCompetitionTeam->price_to_compete.' ke BCA dengan no rek. 01022983288 a.n. Lugito';
                }
                if($reqData->status_bayar == 1){
                    $textOnMail = 'Tim Anda belum melakukan pembayaran registrasi, diharapkan untuk segera melakukan pembayaran'.$getCompetition->price_to_compete.' paling lambat 31 Agustus 2018';
                    $keterangan = 'Tim Anda belum bayar';
                }else{
                    $textOnMail = 'Terima kasih tim Anda telah melakukan pembayaran dan sudah dikonfirmasi admin';
                    $keterangan = 'Pembayaran berhasil';
                }
                // GlobalController::sentEmail($fetchTeam->email,$keterangan,$textOnMail,'htmlviewsuccessregisterteam');

                $logMail = new Mailer;
                $logMail->team_id = $fetchTeam->id;
                $logMail->subject = $keterangan;
                $logMail->content = $textOnMail;
                $logMail->save();
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function updateOnOffTeam(Request $request){
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $statusCode = 1;
        $message = 'Successfully update on off team';

        $valid = Validator::make((array)$reqData, [
                            'status_on_off' => 'required|integer|max:3',
                            'team_id' => 'required|integer',
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
            $fetchTeam = Team::find($reqData->team_id);
            if($fetchTeam == NULL){
                $statusCode = -1;
                $message = 'Team tidak ditemukan';  
            }
        }

        if($statusCode > 0){
            $fetchTeam->valid_on_off = $reqData->status_on_off;
            $fetchTeam->save();
            //mailer
            if($reqData->status_on_off == 2 || $reqData->status_on_off == 3){
                $getCompetition = new \StdClass;
                $getCompetition->name = '';
                $getCompetition->date_time_start = '';

                $getCompetitionTeam = CompetitionTeam::where('team_id','=',$reqData->team_id)->first();
                if($getCompetitionTeam != NULL){
                    $getCompetition = Competition::find($getCompetitionTeam->competition_id);
                }

                if($reqData->status_on_off == 2){
                    $textOnMail = 'Sehubungan dengan pelaksanaan lomba '.$getCompetition->name.' , tim Anda bisa melaksanakan kompetisi tersebut secara offline di Gedung Giri Santika UPN "Veteran Jawa Timur" pada '.$getCompetition->date_time_start;
                    $keterangan = 'Tempat Lomba Offline/On The Spot';
                }else{
                    $textOnMail = 'Sehubungan dengan pelaksanaan lomba '.$getCompetition->name.' , tim Anda bisa melaksanakan kompetisi tersebut secara online pada '.$getCompetition->date_time_start.' melalui akun Anda dan pilih menu CSO';
                    $keterangan = 'Tempat Lomba Online';
                }
                // GlobalController::sentEmail($fetchTeam->email,$keterangan,$textOnMail,'htmlviewsuccessregisterteam');

                $logMail = new Mailer;
                $logMail->team_id = $fetchTeam->id;
                $logMail->subject = $keterangan;
                $logMail->content = $textOnMail;
                $logMail->save();
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function updateQualifiedFinalTeam(Request $request){
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $statusCode = 1;
        $message = 'Successfully update qualified final team';

        $valid = Validator::make((array)$reqData, [
                            'status_qualified_final' => 'required|integer|max:4',
                            'team_id' => 'required|integer',
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
            $fetchTeam = Team::find($reqData->team_id);
            if($fetchTeam == NULL){
                $statusCode = -1;
                $message = 'Team tidak ditemukan';
            }else if($fetchTeam->qualified_final == 1){
                $statusCode = -1;
                $message = 'Team sudah diskualifikasi sebelumnya';
            }
        }

        if($statusCode > 0){
            $fetchTeam->qualified_final = $reqData->status_qualified_final;
            $fetchTeam->save();
            //mailer
            if($reqData->status_qualified_final == 1 || $reqData->status_qualified_final == 3 || $reqData->status_qualified_final == 4){
                if($reqData->status_qualified_final == 1){
                    $textOnMail = 'Mohon maaf kami selaku panitia harus mendiskualifikasi tim Anda karena melanggar aturan yang berlaku';
                    $keterangan = 'Tim Anda didiskualifikasi';
                }else if($reqData->status_qualified_final == 3){
                    $textOnMail = 'Selamat tim Anda lolos kualifikasi untuk melaju ke TAHAP 2 yang akan dilaksanakan secara online maupun offline (dapat dilihat pada dashboard website akun tim Anda). Untuk rundown acara dapat dilihat di linkwebsite.com';
                    $keterangan = 'Tim Anda sukses menuju TAHAP 2';
                }else{
                    $textOnMail = 'Selamat tim Anda lolos kualifikasi untuk melaju ke FINAL yang akan dilaksanakan secara offline di Gedung Giri Santika UPN "Veteran" Jawa Timur. Jangan lupa untuk membawa alat tulis. Untuk rundown acara dapat dilihat di linkwebsite.com';
                    $keterangan = 'Tim Anda sukses menuju FINAL';
                }
                // GlobalController::sentEmail($fetchTeam->email,$keterangan,$textOnMail,'htmlviewsuccessregisterteam');
            
                $logMail = new Mailer;
                $logMail->team_id = $fetchTeam->id;
                $logMail->subject = $keterangan;
                $logMail->content = $textOnMail;
                $logMail->save();
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }
}
