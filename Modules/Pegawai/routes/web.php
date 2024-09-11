<?php

use Illuminate\Support\Facades\Route;
use Modules\Pegawai\Http\Controllers\PegawaiController;

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
    Route::resource('pegawai', PegawaiController::class, [
        'names' => [
            'index' => 'admin.pegawai.list',
            'show' => 'admin.pegawai.show',
            'store' => 'admin.pegawai.store',
            'create' => 'admin.pegawai.create',
            'edit' => 'admin.pegawai.edit',
            'update' => 'admin.pegawai.update',
            'destroy' => 'admin.pegawai.delete',
        ],
    ]);
});
