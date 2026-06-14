<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BagianController extends Controller {
    public function index() {
        $bagian = DB::table('bagian')->get();
        return view('index_bagian', ['bagian' => $bagian]);
    }

    public function tambah() {
        return view('tambah_bagian');
    }

    public function store(Request $request) {
        DB::table('bagian')->insert([
            'namabagian' => $request->nama,
            'jumlahbagian' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
        return redirect('/bagian');
    }
}
