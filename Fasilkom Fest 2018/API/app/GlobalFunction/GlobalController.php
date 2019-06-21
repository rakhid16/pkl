<?php

namespace App\GlobalFunction;

use App\Http\Controllers\Controller;

use App\Models\Setting;
use App\Models\Log;
use App\Models\Team;
use App\Models\Admin;
use Mail;
use Storage;

class GlobalController extends Controller
{
    public static function getStatusBayar(int $statusBayar){
        $arrStatusBayar = ['empty','Anda belum melakukan pembayaran','Pembayaran Anda masih dalam pengecekan oleh admin','Anda sudah berhasil melakukan pembayaran'];
        return $arrStatusBayar[$statusBayar];
    }

    public static function getRegisterStatus(int $statusRegister){
        $arrStatusRegister = ['empty','Data anggota Anda belum dilengkapi','Data anggota Anda masih dalam pengecekan oleh admin','Data anggota Anda sudah lengkap'];
        return $arrStatusRegister[$statusRegister];
    }

    public static function getStatusOnlineOffline(int $statusOnOff){
        $arrStatusOnOff = ['empty','Pending','Offline','Online'];
        return $arrStatusOnOff[$statusOnOff];
    }

    public static function getQualified(int $statusQualified){
        $arrStatusQualified = ['empty','Diskualifikasi','Tahap Penyisihan','Tahap Penyisihan 2','Tahap Final'];
        return $arrStatusQualified[$statusQualified];
    }

	public static function cekMaintenance(){
        $statusBack = true;
        $setting = Setting::where("name","=","MAINTENANCE")->first();
        if ($setting->content == 1) {
            $statusBack = false;
        }
        return $statusBack;
    }

    public static function getRequestJSON($request, $arrinput){
        $requestSend = array();
        for ($i=0; $i < count($arrinput); $i++) { 
            $requestSend[$arrinput[$i]] = $request->get($arrinput[$i]);
        }
        return $requestSend;
    }

    public static function addLog($event, $request, $response, $user){
        $log = new Log;
        $log->event = $event;
        $log->request = $request;
        $log->response = $response;
        $log->user = $user;
        $log->save();
    }

    public static function getToken(){
        $arrayChar = "0123456789ABCDEFGHIJKLNMNOPQRSTUVWXYZ_abcdefghijklmnoprstuwvxyz";
        $valid = false;
        while($valid == false){ 
            $valid = true;
            $token = "";
            for ($i=0; $i<10; $i++){
                $token = $token . $arrayChar[rand(0,62)];
            }
            $dataTokenAdmin = Admin::where('token','=', $token)->first();
            $dataTokenTeam = Team::where('token','=', $token)->first();
            if($dataTokenAdmin == NULL && $dataTokenTeam == NULL){
                $valid = true;
            }
        }
        return $token;
    }

    public static function getRandomPassword(){
        $arrayChar = "0123456789ABCDEFGHIJKLNMNOPQRSTUVWXYZ_abcdefghijklmnoprstuwvxyz";
        $password = '';
        for ($i=0; $i<6; $i++){
            $password = $password . $arrayChar[rand(0,62)];
        }
        return $password;
    }

    public static function cekParameterInput($arrinput, $request){
        $statusBack = true;
        for($i = 0; $i < count($arrinput); $i++){
            if (empty($request->get($arrinput[$i]))) {
                $statusBack = false;
            }
        }
        return $statusBack;
    }

    public static function sentEmail($email, $messageSend, $kode, $view){
        Mail::send($view,['kode' => $kode], function($message) use($email,$messageSend){
            $message->to($email, '-')->subject($messageSend);
        });
    }

    public static function saveFileBase64Any(string $fileData, string $name, string $folder, string $extension):string{
        $imageName = $name .'-'.date('ymdhis').'.'.$extension;
        $arrData = explode(";base64,",$fileData);
        $imageData = base64_decode($arrData[count($arrData)-1]);
        $res = Storage::disk('public')->put($folder.'/'.$imageName, $imageData);
        if($res){
            return $imageName;
        } else return false;
    }
}
?>