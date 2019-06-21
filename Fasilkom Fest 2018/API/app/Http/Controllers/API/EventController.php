<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Competition;
use App\Models\CompetitionTeam;
use App\Models\Member;
use App\Models\Event;
use GlobalController;
use StringCollection;
use Validator;
use Carbon;

class EventController extends Controller
{
    public function fetchEvent(Request $request){
        $statusCode = 1;
        $message = 'Successfully fetch event';        
        
        $data = Event::all();
        if(count($data) == 0){
            $statusCode = -1;
            $message = 'Data kosong';
        }else{
        	for($a=0;$a<count($data);$a++){
        		$detailCompetition = Competition::where('event_id','=',$data[$a]->id)->get();
                for($b=0;$b<count($detailCompetition);$b++){
                    $countPeserta = 0;
                    $countTeam = 0;
                    if($detailCompetition[$b]->id <= 2){
                        $getCompetitionTeam = CompetitionTeam::where('competition_id','=',$detailCompetition[$b]->id)->get();
                        $countTeam = count($getCompetitionTeam);

                        for($c=0;$c<count($getCompetitionTeam);$c++){
                            $getMember = Member::where('team_id','=',$getCompetitionTeam[$c]->team_id)->get();
                            $countPeserta = $countPeserta + count($getMember);
                        }
                    }
                    $detailCompetition[$b]['count_team'] = $countTeam;
                    $detailCompetition[$b]['count_peserta'] = $countPeserta;
                }
                $data[$a]['detail'] = $detailCompetition;
        	}
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data
        ];
        return $arrResponse;
    }
}
