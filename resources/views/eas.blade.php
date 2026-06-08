@extends('template')

@section('title', 'Daftar Keranjang Belanja')

@section('konten')
    <div class="mt-4">
        <a href="/eas/tambah" class="btn btn-primary mb-3">Beli Barang Baru</a>

        <table class="table table-bordered table-striped text-center">
            <thead class="table-dark">
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Pembelian</th>
                    <th>Harga per item</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($keranjang as $item)
                    {{-- Menghitung total per baris --}}
                    @php $total = $item->Jumlah * $item->Harga; @endphp
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->KodeBarang }}</td>
                        <td>{{ $item->Jumlah }}</td>
                        <td>{{ number_format($item->Harga, 0, ',', '.') }}</td>
                        <td>{{ number_format($total, 0, ',', '.') }}</td>
                        <td>
                            <a href="/eas/batal/{{ $item->id }}" class="btn btn-danger btn-sm">Batal</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
