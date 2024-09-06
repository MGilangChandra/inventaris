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

Route::prefix('admin')->group(function () {
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
