<?php

use Illuminate\Support\Facades\Route;
use Modules\BarangOut\Http\Controllers\BarangOutController;

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
    Route::resource('barang-out', BarangOutController::class, [
        'names' => [
            'store' => 'pegawai.barang-out.store',
            'create' => 'pegawai.barang-out.create',
        ],
        'only' => ['create', 'store'],
    ]);
});