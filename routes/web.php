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
//pelayanan Pemeriksaan
//========= Pemeriksaan ===========
Route::get('/admin/anamnesis', function () {
    return view('admin/anamnesis', [
        'title' => 'Albana | Admin Anamnesis',
        'amenu' => 'dashboard',
        'bmenu' => 'pelayanankunjungan'
    ]);
});
Route::get('/admin/pemeriksaanAwal', function () {
    return view('admin/pemeriksaanAwal', [
        'title' => 'Albana | Admin Pemeriksaan Awal',
        'amenu' => 'dashboard',
        'bmenu' => 'pelayanankunjungan'
    ]);
});
Route::get('/admin/pemeriksaanLanjutan', function () {
    return view('admin/pemeriksaanLanjutan', [
        'title' => 'Albana | Admin Pemeriksaan Lanjutan',
        'amenu' => 'dashboard',
        'bmenu' => 'pelayanankunjungan'
    ]);
});
Route::get('/admin/pemeriksaanObat', function () {
    return view('admin/pemeriksaanObat', [
        'title' => 'Albana | Admin Pemeriksaan Obat',
        'amenu' => 'dashboard',
        'bmenu' => 'pelayanankunjungan'
    ]);
});
Route::get('/admin/pTambahObat', function () {
    return view('admin/pTambahObat', [
        'title' => 'Albana | Admin Tambah Obat',
        'amenu' => 'dashboard',
        'bmenu' => 'pelayanankunjungan'
    ]);
});
Route::get('/admin/pTambahAlkes', function () {
    return view('admin/pTambahAlkes', [
        'title' => 'Albana | Admin Tambah Alkes',
        'amenu' => 'dashboard',
        'bmenu' => 'pelayanankunjungan'
    ]);
});
Route::get('/admin/pemeriksaanTindakan', function () {
    return view('admin/pemeriksaanTindakan', [
        'title' => 'Albana | Admin Pemeriksaan Tindakan',
        'amenu' => 'dashboard',
        'bmenu' => 'pelayanankunjungan'
    ]);
});
Route::get('/admin/pemeriksaanPembayaran', function () {
    return view('admin/pemeriksaanPembayaran', [
        'title' => 'Albana | Admin Pemeriksaan Pembayaran',
        'amenu' => 'dashboard',
        'bmenu' => 'pelayanankunjungan'
    ]);
});
//========================================================
//Menu Manajemen
//Bridging Data
//BPJS
Route::get('/admin/integrasiBpjs', function () {
    return view('admin/integrasiBpjs', [
        'title' => 'Albana | Admin Integrasi BPJS',
        'amenu' => 'manajemen',
        'bmenu' => 'satusehat'
    ]);
});
//Satusehat
Route::get('/admin/integrasiSatusehat', function () {
    return view('admin/integrasiSatusehat', [
        'title' => 'Albana | Admin Integrasi SatuSehat',
        'amenu' => 'manajemen',
        'bmenu' => 'satusehat'
    ]);
});
Route::get('/admin/satusehatAwal', function () {
    return view('admin/satusehatAwal', [
        'title' => 'Albana | Admin Integrasi SatuSehat Awal',
        'amenu' => 'manajemen',
        'bmenu' => 'satusehat'
    ]);
});
Route::get('/admin/satusehatPemeriksaan', function () {
    return view('admin/satusehatPemeriksaan', [
        'title' => 'Albana | Admin Integrasi SatuSehat Pemeriksaan',
        'amenu' => 'manajemen',
        'bmenu' => 'satusehat'
    ]);
});
Route::get('/admin/satusehatDiagnosis', function () {
    return view('admin/satusehatDiagnosis', [
        'title' => 'Albana | Admin Integrasi SatuSehat Diagnosa',
        'amenu' => 'manajemen',
        'bmenu' => 'satusehat'
    ]);
});

//Farmasi
//obat
Route::get('/admin/obat', function () {
    return view('admin/obat', [
        'title' => 'Albana | Admin Farmasi Obat',
        'amenu' => 'manajemen',
        'bmenu' => 'mobat'
    ]);
});
Route::get('/admin/obatKadaluarsa', function () {
    return view('admin/obatKadaluarsa', [
        'title' => 'Albana | Admin Farmasi Obat Kadaluarsa',
        'amenu' => 'manajemen',
        'bmenu' => 'mobat'
    ]);
});
Route::get('/admin/obatHabis', function () {
    return view('admin/obatHabis', [
        'title' => 'Albana | Admin Farmasi Obat Habis',
        'amenu' => 'manajemen',
        'bmenu' => 'mobat'
    ]);
});
Route::get('/admin/obatRestock', function () {
    return view('admin/obatRestock', [
        'title' => 'Albana | Admin Farmasi Obat Restock',
        'amenu' => 'manajemen',
        'bmenu' => 'mobat'
    ]);
});
//alkes
Route::get('/admin/alkes', function () {
    return view('admin/alkes', [
        'title' => 'Albana | Admin Farmasi Alkes',
        'amenu' => 'manajemen',
        'bmenu' => 'malkes'
    ]);
});
Route::get('/admin/alkesKadaluarsa', function () {
    return view('admin/alkesKadaluarsa', [
        'title' => 'Albana | Admin Farmasi Alkes Kadaluarsa',
        'amenu' => 'manajemen',
        'bmenu' => 'malkes'
    ]);
});
Route::get('/admin/alkesHabis', function () {
    return view('admin/alkesHabis', [
        'title' => 'Albana | Admin Farmasi Alkes Habis',
        'amenu' => 'manajemen',
        'bmenu' => 'malkes'
    ]);
});
Route::get('/admin/alkesRestock', function () {
    return view('admin/alkesRestock', [
        'title' => 'Albana | Admin Farmasi Alkes Restock',
        'amenu' => 'manajemen',
        'bmenu' => 'malkes'
    ]);
});
//Transaksi
//Kunjungan
Route::get('/admin/transaksiKunjungan', function () {
    return view('admin/transaksiKunjungan', [
        'title' => 'Albana | Admin Transaksi Kunjungan',
        'amenu' => 'manajemen',
        'bmenu' => 'tkunjungan'
    ]);
});
Route::get('/admin/pembayaranKunjungan', function () {
    return view('admin/pembayaranKunjungan', [
        'title' => 'Albana | Admin Transaksi Kunjungan Print',
        'amenu' => 'manajemen',
        'bmenu' => 'tkunjungan'
    ]);
});
//Obat
Route::get('/admin/transaksiObat', function () {
    return view('admin/transaksiObat', [
        'title' => 'Albana | Admin Transaksi Obat',
        'amenu' => 'manajemen',
        'bmenu' => 'tobat'
    ]);
});
Route::get('/admin/transaksiObatNonKunjungan', function () {
    return view('admin/transaksiObatNonKunjungan', [
        'title' => 'Albana | Admin Transaksi Obat',
        'amenu' => 'manajemen',
        'bmenu' => 'tobat'
    ]);
});



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
//Pendapatan
Route::get('/admin/laporanPendapatan', function () {
    return view('admin/laporanPendapatan', [
        'title' => 'Albana | Admin Laporan Pendapatan',
        'amenu' => 'laporan',
        'bmenu' => 'lpendapatan'
    ]);
});
//Kunjungan
Route::get('/admin/laporanKunjungan', function () {
    return view('admin/laporanKunjungan', [
        'title' => 'Albana | Admin Laporan Kunjungan',
        'amenu' => 'laporan',
        'bmenu' => 'lkunjungan'
    ]);
});
//Obat
Route::get('/admin/laporanObat', function () {
    return view('admin/laporanObat', [
        'title' => 'Albana | Admin Laporan Obat',
        'amenu' => 'laporan',
        'bmenu' => 'lobat'
    ]);
});

//========================================================
//Menu Grafik
//Dashboard
Route::get('/admin/grafikDashboard', function () {
    return view('admin/grafikDashboard', [
        'title' => 'Albana | Admin Grafik Dashboard',
        'amenu' => 'grafik',
        'bmenu' => 'gdashboard'
    ]);
});
//Pasien
Route::get('/admin/grafikPasien', function () {
    return view('admin/grafikPasien', [
        'title' => 'Albana | Admin Grafik Pasien',
        'amenu' => 'grafik',
        'bmenu' => 'gpasien'
    ]);
});
//Kunjungan
Route::get('/admin/grafikKunjungan', function () {
    return view('admin/grafikKunjungan', [
        'title' => 'Albana | Admin Grafik Kunjungan',
        'amenu' => 'grafik',
        'bmenu' => 'gkunjungan'
    ]);
});
//Obat dan Alkes
Route::get('/admin/grafikObatAlkes', function () {
    return view('admin/grafikObatAlkes', [
        'title' => 'Albana | Admin Grafik Obat dan Alkes',
        'amenu' => 'grafik',
        'bmenu' => 'gobatalkes'
    ]);
});
//Obat dan Alkes
Route::get('/admin/grafikPendapatan', function () {
    return view('admin/grafikPendapatan', [
        'title' => 'Albana | Admin Grafik Pendapatan',
        'amenu' => 'grafik',
        'bmenu' => 'gpendapatan'
    ]);
});


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