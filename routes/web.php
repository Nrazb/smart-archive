<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuratKeluarController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// surat masuk
Route::get('/surat-masuk', function () {
    return view('surat-masuk.index');
})->name('surat-masuk');

Route::get('/surat-masuk/show', function () {
    return view('surat-masuk.show');
})->name('show-surat-masuk');

Route::get('/surat-masuk/edit', function () {
    return view('surat-masuk.edit');
})->name('edit-surat-masuk');

Route::get('/surat-masuk/create', function () {
    return view('surat-masuk.create');
})->name('create-surat-masuk');

// surat keluar
Route::get('/surat-keluar', function () {
    return view('surat-keluar.index');
})->name('surat-keluar');

Route::get('/surat-keluar/create', function () {
    return view('surat-keluar.create');
})->name('create-surat-keluar');

Route::get('/surat-keluar/edit', function () {
    return view('surat-keluar.edit');
})->name('edit-surat-keluar');

Route::get('/surat-keluar/show', function () {
    return view('surat-keluar.show');
})->name('show-surat-keluar');

Route::delete('/surat-keluar', [SuratKeluarController::class, 'destroy'])->name('destroy-surat-keluar');
