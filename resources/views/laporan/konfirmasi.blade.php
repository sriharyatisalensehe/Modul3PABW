@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')

<h2>Konfirmasi Laporan</h2>

<x-alert 
    type="success" 
    message="Laporan berhasil dikirim."
/>

<p>Nama Pelapor: {{ $nama }}</p>
<p>Lokasi Kejadian: {{ $lokasi }}</p>
<p>Tinggi Genangan: {{ $tinggi }} cm</p>

@endsection