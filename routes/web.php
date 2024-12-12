<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::post('/', function () {
    return view('index');
});

Route::get('/halamanAntrian', function () {
    return view('halamanAntrian');
});

//Route Dashboard
Route::post('/admin/dashboard', function () {
    return view('admin/dashboard', [
        'title' => 'Albana | Admin Dashboard'
    ]);
});
Route::get('/admin/dashboard', function () {
    return view('admin/dashboard', [
        'title' => 'Albana | Admin Dashboard'
    ]);
});

//Route Menu Pendaftaran
Route::get('/admin/pengunjung', function () {
    return view('admin/pengunjung', [
        'title' => 'Albana | Admin Pengunjung'
    ]);
});

Route::get('/admin/pasien', function () {
    return view('admin/pasien', [
        'title' => 'Albana | Admin Pasien'
    ]);
});

//Route Menu Master Data
Route::get('/admin/informasiKlinik', function () {
    return view('admin/informasiKlinik', [
        'title' => 'Albana | Admin Klinik'
    ]);
});

Route::get('/admin/daftarPengguna', function () {
    return view('admin/daftarPengguna', [
        'title' => 'Albana | Admin Pengguna'
    ]);
});

Route::get('/admin/tambahAkun', function () {
    return view('admin/tambahAkun', [
        'title' => 'Albana | Admin Tambah Pengguna'
    ]);
});

Route::get('/admin/daftarPenjamin', function () {
    return view('admin/daftarPenjamin', [
        'title' => 'Albana | Admin Penjamin'
    ]);
});

Route::get('/admin/daftarPoliklinik', function () {
    return view('admin/daftarPoliklinik', [
        'title' => 'Albana | Admin Poliklinik'
    ]);
});

Route::get('/admin/tenagaKesehatan', function () {
    return view('admin/tenagaKesehatan', [
        'title' => 'Albana | Admin NaKes'
    ]);
});

Route::get('/admin/tambahNakes', function () {
    return view('admin/tambahNakes', [
        'title' => 'Albana | Admin NaKes'
    ]);
});