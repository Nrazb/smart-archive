<?php

use App\Http\Controllers\Api\LetterController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

//AUTH
Route::post('/register', [AuthController::class, 'registerApi']);
Route::post('/login', [AuthController::class, 'loginApi']);
Route::post('/logout', [AuthController::class, 'logoutApi']);

// Route::middleware('auth')->group(function () {
//     Route::apiResource('letters', LetterController::class);
// });
