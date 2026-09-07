<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/internship/dashboard', [DashboardController::class, 'internship']);

Route::get('/internship/absensi', [AbsensiController::class, 'index']);

Route::get('/internship/nilai', [NilaiController::class, 'index']);

Route::get('/internship/laporan', [LaporanController::class, 'index']);

Route::get('/internship/profil', [ProfilController::class, 'internship']);



Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/password-request', function () {
    return view('auth.forgot-password');
});

Route::post('/register', [AuthController::class, 'register']);
