@extends('layouts.app')

@section('title', 'Daftar Laporan Banjir')

@section('content')

<h2>Daftar Laporan Banjir</h2>

@foreach($laporan as $data)

    @if($data['tinggi'] < 30)
        @php
            $status = 'Waspada';
        @endphp
    @elseif($data['tinggi'] <= 70)
        @php
            $status = 'Siaga';
        @endphp
    @else
        @php
            $status = 'Awas';
        @endphp
    @endif

    @include('partials.laporan-card', [
        'laporan' => $data,
        'status' => $status
    ])

@endforeach

@endsection