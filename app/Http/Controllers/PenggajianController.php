<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // wajib di-use untuk pakai DB::table()

class PenggajianController extends Controller {

    // METHOD INDEX — menampilkan semua data
    public function index() {
        $data = DB::table('penggajian')->get(); // ambil semua baris dari tabel
        return view('index_penggajian', ['data' => $data]); // kirim ke view
    }

    // METHOD TAMBAH — menampilkan form kosong
    public function tambah() {
        return view('Tambah_Penggajian'); // cukup tampilkan view form
    }

    // METHOD STORE — menyimpan data dari form
    public function store(Request $request) {
        DB::table('penggajian')->insert([
            'NIP'         => $request->NIP,        // ambil input field name="nrp"
            'GajiPokok'  => $request->GajiPokok, // ambil input field name="nilaiangka"
            'Potongan'         => $request->Potongan         // ambil input field name="sks"
            // TIDAK perlu simpan NilaiHuruf & Bobot — dihitung langsung di view
        ]);
        return redirect('/penggajian'); // setelah simpan, kembali ke index
    }

    // METHOD HAPUS — menghapus 1 baris berdasarkan ID
    public function hapus($id) {
        DB::table('penggajian')->where('ID', $id)->delete(); // hapus baris dengan ID tertentu
        return redirect('/penggajian'); // kembali ke index
    }
}
