<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
    }

    public function biodata()
    {
        $nama = "Diki Alfarabi Hadi";
        $umur = 35;

        // Definisikan data array-nya dulu
        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];

        // Kirim semua variabel ke view 'biodata' dalam satu return
        return view('biodata', [
            'nama'   => $nama,
            'umur'   => $umur,
            'matkul' => $pelajaran // 'matkul' adalah nama yang dipanggil di Blade (@foreach)
        ]);
    }
}
