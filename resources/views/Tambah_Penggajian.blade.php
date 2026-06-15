@extends('master')
@section('konten')

<h4>Tambah Data</h4>

{{-- action = tujuan form dikirim, method POST = kirim data tersembunyi --}}
<form action="/penggajian/store" method="POST">
    @csrf {{-- wajib ada! token keamanan Laravel, tanpa ini error 419 --}}

    <div class="mb-3">
        <label>NIP</label>
        {{-- name="nrp" harus sama dengan $request->nrp di controller --}}
        <input type="text" name="NIP" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Gaji Pokok</label>
        {{-- type="number" supaya hanya bisa isi angka --}}
        <input type="text" name="GajiPokok" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Potongan</label>
        <input type="text" name="Potongan" class="form-control" required>
    </div>

    {{-- Tidak ada input NilaiHuruf & Bobot karena dihitung otomatis di view index --}}

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/penggajian" class="btn btn-secondary">Batal</a>
</form>

@endsection
