<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [UserController::class,"home"]);

Route::get('/registration', function () {
    return view('registration');
});

Route::post('/add-user', [UserController::class,"addUser"]);

Route::get('/registor-end', function(){
    return view('registor_end');
});

Route::get('/activate/{id}/{hash}', [UserController::class,"activateUser"]);

Route::get('/show-rules', function () {
    return view('rules');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/do-login', [UserController::class,"doLogin"]);

Route::get('/restore-password', function(){
    return view('restore_password');
});

Route::post('/change-email', [UserController::class,"changeEmail"]);

Route::get('/one-time-code', function(){
    return view('check_the_client');
});

Route::post('/check-the-client', [UserController::class,"checkTheClient"]);

Route::get('/show-password-form', function(){
    return view('show_password_form');
});

Route::post('/new-password', [UserController::class,"newPassword"]);

Route::group(['middleware' => ['IsLogin']], function(){

    Route::get('/logout', [UserController::class,"logOut"]);
});

Route::get('/change-admin', function(){
    return view('admin/admin_login');
});

Route::post('/check-artak', [AdminController::class,"checkArtak"]);

Route::group(['middleware' => ['IsAdmin']], function(){

    Route::get('/show-active-users', [AdminController::class,"showActiveUsers"]);

    Route::get('/show-warned-users', [AdminController::class,"showWarnedUsers"]);

    Route::get('/show-blocked-users', [AdminController::class,"showBlockedUsers"]);

    Route::get('/show-deleted-users', [AdminController::class,"showDeletedUsers"]);

    Route::get('/show-inactive-users', [AdminController::class,"showInactiveUsers"]);

    Route::post('/warn-user', [AdminController::class,"warnUser"]);

    Route::post('/block-user', [AdminController::class,"blockUser"]);

    Route::post('/delete-user', [AdminController::class,"deleteUser"]);

    Route::get('/logout-admin', [AdminController::class,"logOutAdmin"]);
    
});