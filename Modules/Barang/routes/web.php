<?php

use Illuminate\Support\Facades\Route;
use Modules\Barang\Http\Controllers\BarangController;

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

Route::middleware(['auth:admin', 'auth.session'])->prefix('admin')->group(function () {
    Route::resource('barang', BarangController::class, [
        'names' => [
            'index' => 'admin.barang.list',
            'show' => 'admin.barang.show',
            'store' => 'admin.barang.store',
            'create' => 'admin.barang.create',
            'edit' => 'admin.barang.edit',
            'update' => 'admin.barang.update',
            'destroy' => 'admin.barang.destroy',
        ],
    ]);
});

Route::middleware(['auth:pegawai', 'auth.session'])->prefix('pegawai')->group(function () {
    Route::resource('barang', BarangController::class, [
        'names' => [
            'index' => 'pegawai.barang.list',
            'show' => 'pegawai.barang.show',
        ],
        'only' => ['index', 'show'],
    ]);
});
