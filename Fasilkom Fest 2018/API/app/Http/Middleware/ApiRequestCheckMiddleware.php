<?php

namespace App\Http\Middleware;

use Closure;
use GlobalController;
use StringCollection;

class ApiRequestCheckMiddleware
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
        $arrinput = [];
        $arrback = [];
        if (GlobalController::cekMaintenance()) {
            return $next($request);            
        }else{
            $arrback['status_code'] = "-200";
            $arrback['message'] = StringCollection::maintenance;
        }
        $requestSend = GlobalController::getRequestJSON($request,$arrinput);
        GlobalController::addLog($request->url(),json_encode($requestSend),json_encode($arrback),"Unknown");
        return response()->json($arrback, 200);
    }
}
