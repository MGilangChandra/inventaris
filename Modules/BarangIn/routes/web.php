<?php

use Illuminate\Support\Facades\Route;
use Modules\BarangIn\Http\Controllers\BarangInController;

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

Route::middleware(['auth:pegawai', 'auth.session'])->prefix('pegawai')->group(function () {
    Route::resource('barang-in', BarangInController::class, [
        'names' => [
            'store' => 'pegawai.barang-in.store',
            'create' => 'pegawai.barang-in.create',
        ],
        'only' => ['create', 'store'],
    ]);
});