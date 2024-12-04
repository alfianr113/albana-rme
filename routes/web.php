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

Route::post('/admin/dashboard', function () {
    return view('admin/dashboard', [
        'title' => 'Albana | Admin Dashboard'
    ]);
});