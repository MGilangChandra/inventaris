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

Route::get('/category', function () {
    return view('pages.kategori.kategori');
});

Route::get('/category/edit', function () {
    return view('pages.kategori.edit');
});

Route::get('/category/add', function () {
    return view('pages.kategori.tambah');
});

Route::get('/items-in', function () {
    return view('pages.barang-masuk.barang-masuk');
});

Route::get('/items-in/add', function () {
    return view('pages.barang-masuk.tambah');
});

Route::get('/items-in/edit', function () {
    return view('pages.barang-masuk.edit');
});