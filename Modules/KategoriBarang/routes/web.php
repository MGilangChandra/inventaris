<?php

use Illuminate\Support\Facades\Route;
use Modules\KategoriBarang\Http\Controllers\KategoriBarangController;

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
    Route::resource('kategori', KategoriBarangController::class, [
        'names' => [
            'index' => 'admin.kategori.list',
            'show' => 'admin.kategori.show',
            'store' => 'admin.kategori.store',
            'create' => 'admin.kategori.create',
            'edit' => 'admin.kategori.edit',
            'update' => 'admin.kategori.update',
            'destroy' => 'admin.kategori.destroy',
        ],
    ]);
});
