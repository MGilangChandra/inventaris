<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});

Route::get('/profile', function () {
    return view('pages.profile.profile');
});

Route::get('/profile/edit', function () {
    return view('pages.profile.edit');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/staff', function () {
    return view('pages.pegawai.pegawai');
});

Route::get('/staff/edit', function () {
    return view('pages.pegawai.edit');
});

Route::get('/staff/add', function () {
    return view('pages.pegawai.tambah');
});

Route::get('/item', function () {
    return view('pages.barang.barang');
});

Route::get('/item/add', function () {
    return view('pages.barang.tambah');
});

Route::get('/item/edit', function () {
    return view('pages.barang.edit');
});

Route::get('/category', function () {
    return view('pages.kategori.kategori');
});

Route::get('/category/edit', function () {
    return view('pages.kategori.edit');
});

Route::get('/category/add', function () {
    return view('pages.kategori.tambah');
});