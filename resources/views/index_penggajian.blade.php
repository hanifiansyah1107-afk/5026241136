@extends('Template') <!-- pakai layout master.blade.php -->
@section('konten') <!-- isi bagian @yield('konten') di master -->

<div class="p-4 mb-4 bg-light rounded-3 border">
    <h2 class="display-6">Kode Soal penggajian</h2>
    {{-- Judul Jumbotron sesuai permintaan soal --}}
</div>
<a href="/penggajian/tambah" class="btn btn-primary mb-3">Tambah Data</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>NIP</th>
            <th>Gaji pokok</th>
            <th>Potongan</th>
            <th>Gaji Bersih</th>
            <th>Presentase Potongan</th>  <!-- KOLOM KALKULASI — tidak ada di DB -->

        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)


        {{-- Hitung dulu sebelum ditampilkan, simpan di variabel blade --}}
        @php
            $gabersih    = $d->GajiPokok - $d->Potongan;
            // Gaji Bersih = Gaji Pokok - Potongan

            $persentase  = ($d->GajiPokok > 0)
                           ? ($gabersih / $d->GajiPokok) * 100
                           : 0;
            // Persentase = (Gaji Bersih / Gaji Pokok) × 100
            // Cek gajipokok > 0 agar tidak dibagi nol
        @endphp
        <tr>
            <td>{{ $d->NIP }}</td>
            <td>Rp {{ number_format($d->GajiPokok) }}</td>

            <td>Rp {{ number_format($d->Potongan, 0, ',', '.') }}</td>
            <td>Rp {{ number_format($gabersih, 0, ',', '.') }}</td>
            <td>{{ number_format($persentase, 2, ',', '.') }}%</td>





        </tr>
        @endforeach
    </tbody>
</table>
@endsection
