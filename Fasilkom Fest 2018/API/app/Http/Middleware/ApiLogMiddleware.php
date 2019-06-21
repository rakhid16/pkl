<?php

namespace App\Http\Middleware;

use Closure;
use GlobalController;

class ApiLogMiddleware
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
        $response = $next($request);
        $arrinput = ["data"];
        $responseData=$response->getOriginalContent();
        $storedResponse = '-';
        if(is_array($responseData)){
            $storedResponse = json_encode($responseData); 
        }
        $requestSend = GlobalController::getRequestJSON($request,$arrinput);        
        GlobalController::addLog($request->route()->getName(),json_encode($requestSend),$storedResponse,"Unknown");
        return $response;
    }
}
