@extends('template')

@section('title', 'Form Tambah Belanja')

@section('konten')
    <div class="card mt-4">
        <div class="card-body">
            <form action="/eas/store" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Kode Barang</label>
                    <input type="number" name="KodeBarang" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Jumlah</label>
                    <input type="number" name="Jumlah" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Harga</label>
                    <input type="number" name="Harga" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success">Simpan Data</button>
            </form>
        </div>
    </div>
@endsection
