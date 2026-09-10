<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\InternshipController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/internship/dashboard', [DashboardController::class, 'internship']);

Route::get('/internship/absensi', [AbsensiController::class, 'index']);
Route::post('/internship/tambah/absensi', [AbsensiController::class, 'store']);
Route::put('/internship/absensi/{id}/pulang', [AbsensiController::class, 'pulang']);

Route::get('/internship/nilai', [NilaiController::class, 'index']);

Route::get('/internship/laporan', [LaporanController::class, 'index']);

Route::get('/internship/profil', [ProfilController::class, 'internship']);
Route::put('/internship/profil/edit', [ProfilController::class, 'createOrUpdate']);

Route::get('/internship/laporan/pdf', [LaporanController::class, 'PdfInternship']);



Route::get('/admin/dashboard', [DashboardController::class, 'admin']);

Route::get('/admin/internship', [InternshipController::class, 'index']);
Route::delete('/admin/delete/internship/{id}', [InternshipController::class, 'destroy']);
Route::put('/admin/status/internship/{id}', [InternshipController::class, 'update']);

Route::get('/admin/absensi', [AbsensiController::class, 'admin']);
Route::patch('/admin/absensi/{id}/status', [AbsensiController::class, 'updateStatus']);
Route::delete('/admin/absensi/{id}', [AbsensiController::class, 'destroy']);

Route::get('/admin/nilai', [NilaiController::class, 'admin']);
Route::put('/admin/nilai/{id}', [NilaiController::class, 'update']);

Route::get('/admin/laporan', [LaporanController::class, 'admin']);
Route::get('/admin/laporan/{id}/pdf', [LaporanController::class, 'PdfAdmin'])->name('admin.laporan.pdf');

Route::get('/admin/profil', [ProfilController::class, 'admin']);

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
