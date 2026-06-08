@extends('master')
@section('konten')
    <form action="/nilaikuliah/store" method="POST">
        @csrf
        <div class="mb-3"><label>NRP</label><input type="text" name="nrp" class="form-control" required></div>
        <div class="mb-3"><label>Nilai Angka</label><input type="number" name="nilai" class="form-control" required></div>
        <div class="mb-3"><label>SKS</label><input type="number" name="sks" class="form-control" required></div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
