<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

use GlobalController;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        $reqData = json_encode(request()->all());
        $event = '';
        $responseMsg = '';
        $userName = '';

        if(get_class($exception)!='Symfony\Component\HttpKernel\Exception\NotFoundHttpException'){
            if(request()->route()){
                $event = request()->route()->getName();
            }
        }else{
            if($exception->getMessage() == ''){
                $event = request()->path();
            }
        }
        
        $sessionInfo = request()->get('user_acc');
        if($sessionInfo != null){
            $userName = $sessionInfo->user_name;
        }
        $responseMsg = 'Type: '.get_class($exception).'. Message: '.$exception->getMessage().'. File: '.$exception->getFile().'. Line: '.$exception->getLine();
        $exceptionType = get_class($exception);
        
        GlobalController::addLog('err_'.$event, $reqData, $responseMsg, $userName);
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
