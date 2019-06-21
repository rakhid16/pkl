<?php

namespace App\Http\Middleware;

use Closure;
use GlobalController;
use StringCollection;
use App\Models\Admin;
use App\Models\Team;

class ApiAuthCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $arrinput = ["token"];
        $arrback = [];
        $validate = true;
        if (GlobalController::cekParameterInput($arrinput,$request)) {
            $fetchUser = Admin::where('token','=',$request->get('token'))->first();
            if($fetchUser == NULL){
                $fetchUser = Team::where('token','=',$request->get('token'))->first();
                if($fetchUser == NULL){
                    $arrback['status_code'] = "-300";
                    $arrback['message'] = StringCollection::tokenExpired;
                    $validate = false;
                }
            }
        }else{
            $arrback['status_code'] = "-100";
            $arrback['message'] = StringCollection::parameterNotComplete;
            $validate = false;
        }
        if(!$validate){
            $requestSend = GlobalController::getRequestJSON($request,$arrinput);
            GlobalController::addLog($request->route()->getName(),json_encode($requestSend),json_encode($arrback),"Unknown");
            return response()->json($arrback,200);
        }
        $request->attributes->add(['user_acc' => $fetchUser]);
        return $next($request);
    }
}
