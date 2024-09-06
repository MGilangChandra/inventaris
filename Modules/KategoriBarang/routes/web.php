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

Route::group([], function () {
    Route::resource('kategoribarang', KategoriBarangController::class)->names('kategoribarang');
});
