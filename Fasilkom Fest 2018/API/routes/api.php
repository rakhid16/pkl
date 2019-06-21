<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(["apirequestcheck"])->prefix('funct/')->group(function() {
//auth
	Route::post('login_admin', [
        'uses' => 'API\AuthController@loginAdmin',
        'as' => 'api.auth.login_admin'
    ])->middleware('apilog');

    Route::post('login_team', [
        'uses' => 'API\AuthController@loginTeam',
        'as' => 'api.auth.login_team'
    ])->middleware('apilog');

    Route::post('forgot_password', [
        'uses' => 'API\AuthController@forgotPassword',
        'as' => 'api.auth.forgot_password'
    ])->middleware('apilog');

//event
    Route::post('event/fetch_event', [
        'uses' => 'API\EventController@fetchEvent',
        'as' => 'api.event.fetch_event'
    ])->middleware('apilog');

//team
    Route::post('team/register', [
        'uses' => 'API\TeamController@register',
        'as' => 'api.team.register'
    ])->middleware('apilog');
});

Route::middleware(["apirequestcheck","apiauthcheck",'apilog'])->prefix('funct')->group(function() {
//auth
	Route::post('logout', [
        'uses' => 'API\AuthController@logout',
        'as' => 'api.auth.logout'
    ]);

    Route::post('change_password', [
        'uses' => 'API\AuthController@changePassword',
        'as' => 'api.auth.change_password'
    ]);

//team
	Route::post('team/add_member', [
        'uses' => 'API\TeamController@addMember',
        'as' => 'api.team.add_member'
    ]);

    Route::post('team/update_profile_team', [
        'uses' => 'API\TeamController@updateProfileTeam',
        'as' => 'api.team.update_profile_team'
    ]);

    Route::post('team/update_member', [
        'uses' => 'API\TeamController@updateMember',
        'as' => 'api.team.update_member'
    ]);

    Route::post('team/fetch_member', [
        'uses' => 'API\TeamController@fetchMember',
        'as' => 'api.team.fetch_member'
    ]);

    // Route::post('team/participate_competition', [
    //     'uses' => 'API\TeamController@participateCompetition',
    //     'as' => 'api.team.participate_competition'
    // ]);

    Route::post('team/add_bukti_pembayaran', [
        'uses' => 'API\TeamController@addBuktiPembayaran',
        'as' => 'api.team.add_bukti_pembayaran'
    ]);

    Route::post('team/update_status_bayar_team', [
        'uses' => 'API\TeamController@updateStatusBayarTeam',
        'as' => 'api.team.update_status_bayar_team'
    ]);

    Route::post('team/get_all_status', [
        'uses' => 'API\TeamController@getAllStatus',
        'as' => 'api.team.get_all_status'
    ]);

//admin
    Route::post('admin/fetch_team', [
        'uses' => 'API\AdminController@fetchTeam',
        'as' => 'api.admin.fetch_team'
    ]);

    Route::post('admin/update_status_register_team', [
        'uses' => 'API\AdminController@updateRegisterStatusTeam',
        'as' => 'api.admin.update_status_register_team'
    ]);

    Route::post('admin/update_status_bayar_team', [
        'uses' => 'API\AdminController@updateStatusBayarTeam',
        'as' => 'api.admin.update_status_bayar_team'
    ]);

    Route::post('admin/update_status_on_off_team', [
        'uses' => 'API\AdminController@updateOnOffTeam',
        'as' => 'api.admin.update_status_on_off_team'
    ]);

    Route::post('admin/update_status_qualified_final_team', [
        'uses' => 'API\AdminController@updateQualifiedFinalTeam',
        'as' => 'api.admin.update_status_qualified_final_team'
    ]);

//mailer
    Route::post('mail/mail_info', [
        'uses' => 'API\MailController@mailInfo',
        'as' => 'api.mail.mail_info'
    ]);

//cso
    Route::post('cso/start_stop_competition', [
        'uses' => 'API\CsoController@startStopCompetition',
        'as' => 'api.cso.start_stop_competition'
    ]);

    Route::post('cso/update_point', [
        'uses' => 'API\CsoController@updatePoint',
        'as' => 'api.cso.update_point'
    ]);

    Route::post('cso/fetch_point', [
        'uses' => 'API\CsoController@fetchPoint',
        'as' => 'api.cso.fetch_point'
    ]);

    Route::post('cso/fetch_quiz', [
        'uses' => 'API\CsoController@fetchQuiz',
        'as' => 'api.cso.fetch_quiz'
    ]);

    Route::post('cso/fetch_quiz_one', [
        'uses' => 'API\CsoController@fetchQuizOne',
        'as' => 'api.cso.fetch_quiz_one'
    ]);

    Route::post('cso/upload_csv_quiz', [
        'uses' => 'API\CsoController@uploadCsvQuiz',
        'as' => 'api.cso.upload_csv_quiz'
    ]);

    Route::post('cso/update_quiz', [
        'uses' => 'API\CsoController@updateQuiz',
        'as' => 'api.cso.update_quiz'
    ]);

    Route::post('cso/fetch_point_team', [
        'uses' => 'API\CsoController@fetchPointTeam',
        'as' => 'api.cso.fetch_point_team'
    ]);

    Route::post('cso/upload_answer_team', [
        'uses' => 'API\CsoController@uploadAnswerTeam',
        'as' => 'api.cso.upload_answer_team'
    ]);

    Route::post('cso/sync_answer_team', [
        'uses' => 'API\CsoController@syncAnswerTeam',
        'as' => 'api.cso.sync_answer_team'
    ]);

//webcon
    Route::post('webcon/upload_zip', [
        'uses' => 'API\WebConController@uploadZip',
        'as' => 'api.webcon.upload_zip'
    ]);

    Route::post('webcon/fetch_upload_zip_team', [
        'uses' => 'API\WebConController@fetchUploadZipTeam',
        'as' => 'api.webcon.fetch_upload_zip_team'
    ]);
});