@extends('template')
@section('konten')
    <form action="/bagian/store" method="POST">
        @csrf
        <div class="mb-3"><label>Nama Bagian</label><input type="text" name="nama" class="form-control" required></div>
        <div class="mb-3"><label>Jumlah</label><input type="number" name="jumlah" class="form-control" required></div>
        <div class="mb-3">
            <label>Tersedia</label>
            <select name="tersedia" class="form-control">
                <option value="Y">Y</option>
                <option value="T">T</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
