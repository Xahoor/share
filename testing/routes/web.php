<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dbController;

Route::get('/', function () {
    return view('index');
});

Route::view('about/{name}','/about')->middleware('aboutPage');
Route::view('contact','/contact');


Route::group(['middleware'=> ['restrictPage']], function(){
    Route::get('users/{id}', [UserController::class, 'show']);
    Route::get('user/{name}', [UserController::class, 'loadView']);

});

Route::view('form', '/form');
Route::post('form_sub',[dbController::class, 'index']);


Route::get('data',[dbController::class, 'index']);
Route::get('customer',[dbController::class, 'getCustomer']);

// API for HTTP
Route::get('api',[UserController::class, 'hitAPI']);

Route::view('login','login');
Route::post('login-submit', [UserController::class, 'storeD']);

Route::post('/course-submit', [UserController::class, 'saveData']);
Route::post('login-profile',[UserController::class, 'login']);

Route::view('/profile','profile');