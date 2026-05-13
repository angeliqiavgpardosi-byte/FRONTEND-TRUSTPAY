<?php

use Illuminate\Support\Facades\Route;

// GPS ini harus bilang: Kalau buka halaman utama ('/'), tampilkan file 'login'
Route::get('/', function () {
    return view('login'); 
})->name('home');

// Alamat untuk halaman form masuk
Route::get('/masuk', function () {
    return view('masuk'); 
})->name('halaman.masuk');

// Alamat untuk halaman daftar
Route::get('/daftar', function () {
    return view('daftar');
})->name('halaman.daftar');

// Alamat dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('halaman.dashboard');