@extends('layouts.app')

@section('title', 'Form Laporan Banjir')

@section('content')

<h2>Form Pelaporan Banjir</h2>

<form action="{{ route('laporan.proses') }}" method="POST">

    @csrf

    <label>Nama Pelapor</label>
    <br>
    <input type="text" name="nama" required>

    <br><br>

    <label>Lokasi Kejadian</label>
    <br>
    <input type="text" name="lokasi" required>

    <br><br>

    <label>Tinggi Genangan (cm)</label>
    <br>
    <input type="number" name="tinggi" required>

    <br><br>

    <button type="submit">Kirim Laporan</button>

</form>

@endsection