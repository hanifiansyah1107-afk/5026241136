<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller {
    public function index() {
        // 1. Ambil data dari tabel 'nilaimahasiswa'
        $nilaimahasiswa = DB::table('nilaimahasiswa')->get();

        // 2. Kirim variabel '$nilaimahasiswa' ke view
        return view('index_nilai', ['nilaimahasiswa' => $nilaimahasiswa]);
    }

    public function tambah() {
        return view('tambah_nilai');
    }

    public function store(Request $request) {
        // 3. Insert ke tabel 'nilaimahasiswa'
        DB::table('nilaimahasiswa')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilai,
            'SKS' => $request->sks
        ]);
        return redirect('/nilaikuliah');
    }
}
