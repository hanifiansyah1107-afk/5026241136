<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Harus pakai ini

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')->get();
        return view('eas', ['keranjang' => $keranjang]);
    }

    public function create()
    {
        return view('eas_tambah');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);
        return redirect('/eas');
    }

    public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();
        return redirect('/eas');
    }
}
