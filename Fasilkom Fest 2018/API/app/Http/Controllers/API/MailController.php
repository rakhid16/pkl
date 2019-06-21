<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Mailer;
use App\Models\Team;
use GlobalController;
use StringCollection;
use Validator;

class MailController extends Controller
{
    public function mailInfo(Request $request){
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $statusCode = 1;
        $message = 'Success';

        $valid = Validator::make((array)$reqData, [
                            'subject' => 'required',
                            'content' => 'required',
                            'arr_team_id' => 'required',
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
            $reqData->arr_team_id = json_decode($reqData->arr_team_id);
        	for($a=0;$a<count($reqData->arr_team_id);$a++){
        		$getTeam = Team::find($reqData->arr_team_id[$a]);
        		if($getTeam != NULL){
        			//mailer
		            // GlobalController::sentEmail($getTeam->email,$reqData->subject,$reqData->content,'htmlviewsuccessregisterteam');
		            $logMail = new Mailer;
		            $logMail->team_id = $reqData->arr_team_id[$a];
		            $logMail->subject = $reqData->subject;
		            $logMail->content = $reqData->content;
		            $logMail->save();
        		}
        	}
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }
}
