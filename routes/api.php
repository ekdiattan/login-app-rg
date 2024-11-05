<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::group(['middleware' => 'auth:api'], function () {

    Route::apiResource('users', UserController::class)->except('create');
    
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/logout', [UserController::class, 'logout']);

});

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'create']);
