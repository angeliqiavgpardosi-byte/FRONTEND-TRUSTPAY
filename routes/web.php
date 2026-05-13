<?php
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

// Halaman Welcome
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Halaman Daftar
Route::get('/daftar', function () {
    return view('daftar');
})->name('daftar');

// Proses Daftar → PIN
Route::post('/pin-daftar', function () {
    return view('pin');
})->name('pin.daftar');

// Halaman Masuk
Route::get('/masuk', function () {
    return view('masuk');
})->name('masuk');

// Proses Masuk → PIN
Route::post('/pin-masuk', function () {
    return view('pin');
})->name('pin.masuk');

// Setelah PIN → Dashboard
Route::post('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/addwallet', function () {
    return view('addwallet');
})->name('addwallet');

// Halaman Topup
Route::get('/topup', function () {
    return view('topup');
})->name('topup');

// Halaman Dashboard (simulasi)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// contoh tambahan
Route::get('/welcome', fn() => "Halaman Welcome")->name('welcome');
Route::get('/notifikasi', fn() => "Halaman Notifikasi")->name('notifikasi');
Route::get('/logout', fn() => "Halaman Logout")->name('logout');
Route::get('/pusatbantuan', fn() => "Halaman Pusat Bantuan")->name('pusatbantuan');

Route::get('/transaksi', function () {
    return "Halaman Transaksi"; 
})->name('transaksi');

Route::get('/notifikasi', function () {
    return "Halaman Notifikasi"; 
})->name('notifikasi');

Route::get('/pengaturan', function () {
    return "Halaman Pengaturan"; 
})->name('pengaturan');

=======

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
>>>>>>> 8bb86d9c38a8b77f38fc62449d04b40ca573611d
