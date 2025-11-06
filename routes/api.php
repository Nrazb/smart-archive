<?php

use App\Http\Controllers\Api\LetterApiController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthApiToken;
use Illuminate\Support\Facades\Route;

//AUTH
Route::post('/register', [AuthController::class, 'registerApi']);
Route::post('/login', [AuthController::class, 'loginApi']);
Route::post('/logout', [AuthController::class, 'logoutApi']);


Route::middleware(AuthApiToken::class)->group(function () {
    Route::get('/letters', [LetterApiController::class, 'index']);
    Route::get('/letters/{id}', [LetterApiController::class, 'show']);
});


