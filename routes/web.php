<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{Nayna}', function ($param1) {
    return 'Nama Saya: ' .$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'Nim Saya: '.$param1;
});

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);
Route::get('/matakuliahA', [MahasiswaController::class, 'show']);
Route::get('/matakuliahA', [MahasiswaController::class, 'index']);
Route::get('/matakuliahA', [MahasiswaController::class, 'create']);
Route::get('/matakuliahA', [MahasiswaController::class, 'store']);
Route::get('/matakuliahA', [MahasiswaController::class, 'edit']);
Route::get('/matakuliahA', [MahasiswaController::class, 'update']);
Route::get('/matakuliahA', [MahasiswaController::class, 'destroy']);
