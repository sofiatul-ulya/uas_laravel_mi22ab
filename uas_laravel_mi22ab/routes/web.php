<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Halaman Home
Route::get('/', function () {
    return view('home');
});

// Halaman Produk
Route::get('/produk', function () {
    return view('produk');
});

// Halaman Tentang
Route::get('/tentang', function () {
    return view('tentang');
});

// Halaman Login
Route::get('/login', function () {
    return view('login');
});