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


//========================================================
//Route Dashboard
Route::post('/admin/dashboard', function () {
    return view('admin/dashboard', [
        'title' => 'Albana | Admin Dashboard',
        'amenu' => '',
        'bmenu' => ''
    ]);
});
Route::get('/admin/dashboard', function () {
    return view('admin/dashboard', [
        'title' => 'Albana | Admin Dashboard',
        'amenu' => '',
        'bmenu' => ''
    ]);
});

//========================================================
//Menu pendaftaran
//pasien
Route::get('/admin/pasien', function () {
    return view('admin/pasien', [
        'title' => 'Albana | Admin Pasien',
        'amenu' => 'dashboard',
        'bmenu' => 'pasien'
    ]);
});
Route::get('/admin/cariPasien2', function () {
    return view('admin/cariPasien2', [
        'title' => 'Albana | Admin Cari Data Pasien',
        'amenu' => 'dashboard',
        'bmenu' => 'Pasien'
    ]);
});
Route::get('/admin/ubahPasien', function () {
    return view('admin/ubahPasien', [
        'title' => 'Albana | Admin Ubah Data Pasien',
        'amenu' => 'dashboard',
        'bmenu' => 'Pasien'
    ]);
});
Route::get('/admin/detailPasien', function () {
    return view('admin/detailPasien', [
        'title' => 'Albana | Admin Detail Pasien',
        'amenu' => 'dashboard',
        'bmenu' => 'pasien'
    ]);
});
//pendaftaran
Route::get('/admin/pendaftaran', function () {
    return view('admin/pendaftaran', [
        'title' => 'Albana | Admin Pendaftaran',
        'amenu' => 'dashboard',
        'bmenu' => 'pendaftaran'
    ]);
});
Route::get('/admin/tambahPengunjungBaru', function () {
    return view('admin/tambahPengunjungBaru', [
        'title' => 'Albana | Admin Tambah Pengunjung Baru',
        'amenu' => 'dashboard',
        'bmenu' => 'pendaftaran'
    ]);
});
Route::get('/admin/tambahPengunjungLama', function () {
    return view('admin/tambahPengunjungLama', [
        'title' => 'Albana | Admin Tambah Pengunjung Lama',
        'amenu' => 'dashboard',
        'bmenu' => 'pendaftaran'
    ]);
});
Route::get('/admin/cariPasien', function () {
    return view('admin/cariPasien', [
        'title' => 'Albana | Admin Cari Pasien',
        'amenu' => 'dashboard',
        'bmenu' => 'pendaftaran'
    ]);
});
Route::get('/admin/daftarKunjungan', function () {
    return view('admin/daftarKunjungan', [
        'title' => 'Albana | Admin Tambah Kunjungan',
        'amenu' => 'dashboard',
        'bmenu' => 'pendaftaran'
    ]);
});
//antrian kunjungan
Route::get('/admin/antrianKunjungan', function () {
    return view('admin/antrianKunjungan', [
        'title' => 'Albana | Admin Antrian Kunjungan',
        'amenu' => 'dashboard',
        'bmenu' => 'antriankunjungan'
    ]);
});
//pelayanan kunjungan
Route::get('/admin/pelayananKunjungan', function () {
    return view('admin/pelayananKunjungan', [
        'title' => 'Albana | Admin Pelayanan Kunjungan',
        'amenu' => 'dashboard',
        'bmenu' => 'pelayanankunjungan'
    ]);
});


//========================================================
//Menu Manajemen
//Bridging Data





//========================================================
//Menu Master Data
//informasi klinik
Route::get('/admin/informasiKlinik', function () {
    return view('admin/informasiKlinik', [
        'title' => 'Albana | Admin Klinik',
        'amenu' => 'masterdata',
        'bmenu' => 'informasiklinik'
    ]);
});
//daftar pengguna
Route::get('/admin/daftarPengguna', function () {
    return view('admin/daftarPengguna', [
        'title' => 'Albana | Admin Pengguna',
        'amenu' => 'masterdata',
        'bmenu' => 'pengguna'
    ]);
});
Route::get('/admin/tambahAkun', function () {
    return view('admin/tambahAkun', [
        'title' => 'Albana | Admin Tambah Pengguna',
        'amenu' => 'masterdata',
        'bmenu' => 'pengguna'
    ]);
});
//jaminan kesehatan
Route::get('/admin/daftarPenjamin', function () {
    return view('admin/daftarPenjamin', [
        'title' => 'Albana | Admin Penjamin',
        'amenu' => 'masterdata',
        'bmenu' => 'penjamin'
    ]);
});
//poliklinik
Route::get('/admin/daftarPoliklinik', function () {
    return view('admin/daftarPoliklinik', [
        'title' => 'Albana | Admin Poliklinik',
        'amenu' => 'masterdata',
        'bmenu' => 'poli'
    ]);
});
//tenaga kesehatan
Route::get('/admin/tenagaKesehatan', function () {
    return view('admin/tenagaKesehatan', [
        'title' => 'Albana | Admin NaKes',
        'amenu' => 'masterdata',
        'bmenu' => 'nakes'
    ]);
});
Route::get('/admin/tambahNakes', function () {
    return view('admin/tambahNakes', [
        'title' => 'Albana | Admin NaKes',
        'amenu' => 'masterdata',
        'bmenu' => 'nakes'
    ]);
});

//========================================================
//Menu Laporan


//========================================================
//Menu Grafik


//========================================================
//Menu Klinik Pintar
//Bridging Data
Route::get('/admin/jadwalDokter', function () {
    return view('admin/jadwalDokter', [
        'title' => 'Albana | Admin Jadwal Dokter',
        'amenu' => 'klinikpintar',
        'bmenu' => 'jadwaldokter'
    ]);
});