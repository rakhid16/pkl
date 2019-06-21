<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Setting;
use App\Models\QuizCso;
use App\Models\CompetitionTeam;
use App\Models\Team;
use App\Models\AnswerCsoTeam;
use App\GlobalFunction\StringCollection;
use App\GlobalFunction\GlobalController;
use Validator;
use Storage;

class CsoController extends Controller
{
    public function updateQuiz(Request $request){
        $statusCode = 1;
        $message = 'Success';
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $valid = Validator::make((array)$reqData, [
                            'id' => 'required',
                            'question' => 'required',
                            'image' => 'required',
                            // 'multiple_choice_1' => 'required',
                            // 'multiple_choice_2' => 'required',
                            // 'multiple_choice_3' => 'required',
                            // 'multiple_choice_4' => 'required',
                            // 'multiple_choice_5' => 'required',
                            'answer_key' => 'required|string|max:1',
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
            $findQuiz = QuizCso::find($reqData->id);
            if($findQuiz == NULL){
                $statusCode = -1;
                $message = 'Quiz tidak ditemukan';
            }
        }

        if($statusCode > 0){
            $arrNumber = [$reqData->multiple_choice_1,$reqData->multiple_choice_2,$reqData->multiple_choice_3,$reqData->multiple_choice_4,$reqData->multiple_choice_5];

            $valid = true;
            for($a=0;$a<count($arrNumber)-1;$a++){
                for($b=$a+1;$b<count($arrNumber);$b++){
                    if($arrNumber[$a] == $arrNumber[$b]){
                        $valid = false;
                    }
                }
            }
            if(!$valid){
                $statusCode = -1;
                $message = 'Antar pilihan jawabannya tidak boleh kembar';
            }
        }

        if($statusCode > 0){
            $findQuiz->question = $reqData->question;
            // $findQuiz->multiple_choice_1 = $reqData->multiple_choice_1;
            // $findQuiz->multiple_choice_2 = $reqData->multiple_choice_2;
            // $findQuiz->multiple_choice_3 = $reqData->multiple_choice_3;
            // $findQuiz->multiple_choice_4 = $reqData->multiple_choice_4;
            // $findQuiz->multiple_choice_5 = $reqData->multiple_choice_5;
            $findQuiz->answer_key = $reqData->answer_key;
            $findQuiz->save();

            if($reqData->image != '-'){
                if($findQuiz->image != $_ENV['LOCAL_URL'].'storage/quiz_cso_image/no_pic.jpg'){
                    //delete image before
                    $explodePath = explode('/', $findQuiz->image);
                    $deleteImage = @unlink(public_path('storage\quiz_cso_image\\'.$explodePath[count($explodePath) - 1]));
                }
                $getImageName = GlobalController::saveFileBase64Any($reqData->image, $findQuiz->id, 'quiz_cso_image','jpg');
                $findQuiz->image = $getImageName;
                $findQuiz->save();
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function fetchPoint(Request $request){
        $statusCode = 1;
        $message = 'Successfully fetch point';    
        
        $data = Setting::whereIn('id', array(2,3,4))->get();

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data
        ];
        return $arrResponse;
    }

    public function updatePoint(Request $request){
        $statusCode = 1;
        $message = 'Successfully update point';
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
		$valid = Validator::make((array)$reqData, [
                            'arr_point' => 'required',
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
            $decodeRequest = $reqData->arr_point;
            $valid = 0;
        	for($a=0;$a<count($decodeRequest);$a++){
                if($decodeRequest[$a]->id >= 2 && $decodeRequest[$a]->id <= 4){
                    $update = Setting::find($decodeRequest[$a]->id);
                    if($update != NULL){
                        $update->content = $decodeRequest[$a]->content;
                        $update->save();
                        $valid++;
                    }
                }
            }
            if($valid != count($decodeRequest)){
                $statusCode = -1;
                $message = 'Ada data tidak valid';
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function fetchQuiz(Request $request){
        $statusCode = 1;
        $message = 'Successfully fetch quiz';   
        $user = $request->get('user_acc'); 
        $status = Setting::find(5);
        $status = $status->content;
        
        if(isset($user->name)){//not admin
            if($status != '2'){
                $statusCode = -1;
                $message = 'Kompetisi belum dimulai';
            }
            if($statusCode > 0){
                $data = QuizCso::all(array('id','question','image','multiple_choice_1','multiple_choice_2','multiple_choice_3','multiple_choice_4','multiple_choice_5'));
            }
        }else{
            $data = QuizCso::all();
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data,
            'status'=>$status,
        ];
        return $arrResponse;
    }

    public function fetchQuizOne(Request $request){
        $statusCode = 1;
        $message = 'Successfully fetch quiz';   
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $data = '';
        $valid = Validator::make((array)$reqData, [
                            'id' => 'required|integer|min:1',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
            if(isset($user->name)){//not admin
                $checkSetting = Setting::find(5);
                if($checkSetting->content != '2'){
                    $statusCode = -1;
                    $message = 'Kompetisi belum dimulai';
                }
                if($statusCode > 0){
                    $data = QuizCso::where('id','=',$reqData->id)->first(array('id','question','image','multiple_choice_1','multiple_choice_2','multiple_choice_3','multiple_choice_4','multiple_choice_5'));
                }
            }else{
                $data = QuizCso::find($reqData->id);
            }
            if($data == NULL){
                $statusCode = -1;
                $message = 'Quiz not found';
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data
        ];
        return $arrResponse;
    }

    public function uploadCsvQuiz(Request $request){
        $statusCode = 1;
        $message = 'Successfully upload csv quiz';   
        $user = $request->get('user_acc'); 
        $reqData = json_decode($request->get('data'));
        $valid = Validator::make((array)$reqData, [
                            'arr_quiz' => 'required|array|min:120|max:120',
                        ]);
        if($valid->fails()){
            $statusCode = -1;
            $message = $valid->messages()->first();
        }

        if($statusCode > 0){
            $quizData = $reqData->arr_quiz;
            if(isset($user->name)){//not admin
                $statusCode = -1;
                $message = StringCollection::userNotAuthorized;
            // }else if(count($quizData) != 120){
            //     $statusCode = -1;
            //     $message = 'Quiz harus berjumlah 120 soal, di dalam csv ini hanya ada '.count($quizData).' soal';
            }
        }

        if($statusCode > 0){
            $getQuiz = QuizCso::truncate();
            for($a=0;$a<count($quizData);$a++){
                $newQuiz = new QuizCso;
                $newQuiz->question = $quizData[$a]->question;
                $newQuiz->multiple_choice_1 = $quizData[$a]->multiple_choice_1;
                $newQuiz->multiple_choice_2 = $quizData[$a]->multiple_choice_2;
                $newQuiz->multiple_choice_3 = $quizData[$a]->multiple_choice_3;
                $newQuiz->multiple_choice_4 = $quizData[$a]->multiple_choice_4;
                $newQuiz->multiple_choice_5 = $quizData[$a]->multiple_choice_5;
                $newQuiz->answer_key = $quizData[$a]->answer_key;
                $newQuiz->save();
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function fetchPointTeam(Request $request){
        $statusCode = 1;
        $message = 'Successfully fetch point team';
        $user = $request->get('user_acc');
        $data = array();
        
        if(isset($user->name)){//not admin
            $statusCode = -1;
            $message = StringCollection::userNotAuthorized;
        }

        if($statusCode > 0){
            //fetch team yang ikut lomba cso
            $quiz = 120;
            $rightPoint = Setting::find(2);
            $wrongPoint = Setting::find(4);
            $noAnswerPoint = Setting::find(3);

            $getTeamCompete = CompetitionTeam::where('competition_id','=',1)->get();
            for($a=0;$a<count($getTeamCompete);$a++){
                $detailTeam = Team::find($getTeamCompete[$a]->team_id);
                $getRightAnswer = AnswerCsoTeam::where('team_id','=',$getTeamCompete[$a]->team_id)
                                                ->where('right_answer','=',3)
                                                ->get();
                $getWrongAnswer = AnswerCsoTeam::where('team_id','=',$getTeamCompete[$a]->team_id)
                                                ->where('right_answer','=',2)
                                                ->get();
                $detailTeam['right_answer'] = count($getRightAnswer);
                $detailTeam['wrong_answer'] = count($getWrongAnswer);
                $detailTeam['no_answer'] = $quiz - $detailTeam['right_answer'] - $detailTeam['wrong_answer'];
                $detailTeam['point'] = ((int)$rightPoint->content * $detailTeam['right_answer']) + ((int)$wrongPoint->content * $detailTeam['wrong_answer']) + ((int)$noAnswerPoint->content * $detailTeam['no_answer']);
                $detailTeam['qualified_final_string'] = GlobalController::getQualified($detailTeam['qualified_final']);
                $detailTeam['password'] = NULL;
                $detailTeam['token'] = NULL;

                $getLast = AnswerCsoTeam::where('team_id','=',$getTeamCompete[$a]->team_id)
                                        ->orderBy('id','DESC')
                                        ->first();
                $submit = '-';
                if($getLast != NULL){
                    $submit = $getLast->created_at;
                }
                $detailTeam['submit'] = $submit;
                $data[$a] = $detailTeam;
            }

            $sort = collect($data);
            $sorted = $sort->sortByDesc(function($item){
                        return $item['point'];
                    })->values();
            $data = $sorted;

            if(count($data) == 0){
                $statusCode = -1;
                $message = 'Empty data';
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'data'=>$data
        ];
        return $arrResponse;
    }

    public function uploadAnswerTeam(Request $request){
        $statusCode = 1;
        $message = 'Successfully upload answer team';
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $valid = Validator::make((array)$reqData, [
                            'arr_answer' => 'required',
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
                                        ->where('competition_id','=',1)
                                        ->first();
            if($checkTeam == NULL){
                $statusCode = -1;
                $message = 'Tim tidak mengikuti kompetisi ini';
            }
        }

        if($statusCode > 0){
            $checkAnswer = AnswerCsoTeam::where('team_id','=',$user->id)->get();
            if(count($checkAnswer) > 0){
                $statusCode = -1;
                $message = 'Tim sudah submit jawabannya';
            }
        }

        if($statusCode > 0){
            $arrAnswer = json_decode($reqData->arr_answer);
            for($a=0;$a<count($arrAnswer);$a++){
                if($arrAnswer[$a]->quiz_cso_id <= 120){
                    $createAnswer = new AnswerCsoTeam;
                    $createAnswer->team_id = $user->id;
                    $createAnswer->quiz_cso_id = $arrAnswer[$a]->quiz_cso_id;
                    $createAnswer->answer_key = 'F';
                    if(count($arrAnswer[$a]->answer_key) == 1){
                        $createAnswer->answer_key = $arrAnswer[$a]->answer_key;
                    }
                    $createAnswer->save();
                }
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function syncAnswerTeam(Request $request){
        $statusCode = 1;
        $message = 'Successfully sync answer team';
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $valid = Validator::make((array)$reqData, [
                            'flag' => 'required',//array, 1 = yang pending, 2 = yang salah, 3 = yang benar
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
            $flag = json_decode($reqData->flag);
            $checkData = AnswerCsoTeam::whereIn('right_answer',$flag)->get();
            for($a=0;$a<count($checkData);$a++){
                $findQuiz = QuizCso::find($checkData[$a]->quiz_cso_id);
                if($findQuiz != NULL){
                    $checkData[$a]->right_answer = 2;
                    if($findQuiz->answer_key == $checkData[$a]->answer_key){
                        $checkData[$a]->right_answer = 3;
                    }
                    $checkData[$a]->save();
                }
            }
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
        ];
        return $arrResponse;
    }

    public function startStopCompetition(Request $request){
        $statusCode = 1;
        $message = 'Success';
        $user = $request->get('user_acc');
        $reqData = json_decode($request->get('data'));
        $valid = Validator::make((array)$reqData, [
                            'id' => 'required|integer|min:5|max:7',
                            'flag' => 'required|integer|min:1|max:2',
                        ]);
        $status = 1;
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
            $checkSetting = Setting::find($reqData->id);
            $checkSetting->content = $reqData->flag;
            $checkSetting->save();
            $status = $checkSetting->content;
        }

        $arrResponse = [
            'status_code'=>$statusCode,
            'message'=>$message,
            'status'=>$status,
        ];
        return $arrResponse;
    }
}
