<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\BagianController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('Pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('pert1', function () {
    return view('Pertemuan1');
});

Route::get('pert2', function () {
    return view('Pertemuan2');
});

Route::get('pert3', function () {
    return view('Pertemuan3');
});

Route::get('pert4', function () {
    return view('Pertemuan4');
});

Route::get('main', function () {
    return view('main');
});

Route::get('/pegawai/nama', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// Blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// CRUD Tabel Pegawai
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

// CRUD Tabel Keranjang Belanja (EAS)
Route::get('/eas', [KeranjangController::class, 'index']);
Route::get('/eas/tambah', [KeranjangController::class, 'create']);
Route::post('/eas/store', [KeranjangController::class, 'store']);
Route::get('/eas/batal/{id}', [KeranjangController::class, 'destroy']);


Route::get('/nilaikuliah', [NilaiController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiController::class, 'store']);



Route::get('/bagian', [BagianController::class, 'index']);
Route::get('/bagian/tambah', [BagianController::class, 'tambah']);
Route::post('/bagian/store', [BagianController::class, 'store']);
