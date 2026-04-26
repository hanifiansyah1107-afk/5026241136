<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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
