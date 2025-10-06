<?php

use Illuminate\Support\Facades\Route;

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route BARU untuk halaman detail
Route::get('/homestay/{id}', function ($id) {
    // Untuk saat ini, kita hanya menampilkan view statis 'detail'.
    // Nanti, kita akan menggunakan variabel $id untuk mengambil data
    // homestay yang spesifik dari database.
    return view('detail');
});