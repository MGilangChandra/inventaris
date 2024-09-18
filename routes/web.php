<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/admin/laporan/cetak', function () {
    return view('auth::print-report');
})->name('laporan.cetak');