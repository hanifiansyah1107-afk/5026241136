@extends('template')
@section('konten')
    <a href="/bagian/tambah" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>Kode</th><th>Nama Bagian</th><th>Jumlah</th><th>Tersedia (Y/T)</th>
        </tr>
        @foreach($bagian as $b)
        <tr>
            <td>{{ $b->kodebagian }}</td>
            <td>{{ $b->namabagian }}</td>
            <td>{{ $b->jumlahbagian }}</td>
            <td>{{ $b->tersedia }}</td>
        </tr>
        @endforeach
    </table>
@endsection
