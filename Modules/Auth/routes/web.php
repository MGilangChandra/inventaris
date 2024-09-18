<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

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

// Admin
Route::middleware(['guest:admin'])->group(function () {
    Route::get('admin/login', [AuthController::class, 'index'])->middleware('auth.check')->name('login');
    Route::post('admin/proses-login', [AuthController::class, 'login'])->name('proses-login');
});

Route::middleware(['auth:admin', 'auth.session'])->group(function () {
    Route::post('admin/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('admin', [AuthController::class, 'adminDashboard'])->name('dashboard');  
    Route::get('admin/profile', [AuthController::class, 'adminProfile'])->name('profile');  
    Route::put('admin/profile/{id}', [AuthController::class, 'adminEdit'])->name('profile.edit');  
    Route::get('admin/laporan', [AuthController::class, 'laporan'])->name('laporan');
});


// Pegawai
Route::middleware(['guest:pegawai'])->group(function () {
    Route::get('pegawai/login', [AuthController::class, 'pegawaiIndex'])->middleware('auth.check')->name('pegawai.login');
    Route::post('pegawai/proses-login', [AuthController::class, 'pegawaiLogin'])->name('pegawai.proses-login');
});

Route::middleware(['auth:pegawai', 'auth.session'])->group(function () {
    Route::post('pegawai/logout', [AuthController::class, 'pegawaiLogout'])->name('pegawai.logout');
    Route::get('pegawai', [AuthController::class, 'pegawaiDashboard'])->name('pegawai.dashboard');
    Route::get('pegawai/profile', [AuthController::class, 'pegawaiProfile'])->name('pegawai.profile');
    Route::put('pegawai/profile/{id}', [AuthController::class, 'pegawaiEdit'])->name('pegawai.profile.edit');  

});