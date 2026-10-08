<div>
    <h3>{{ $laporan['nama'] }}</h3>

    <p>Lokasi: {{ $laporan['lokasi'] }}</p>

    <p>Tinggi Genangan: {{ $laporan['tinggi'] }} cm</p>

    @if($status == 'Waspada')
        <p style="color: green; font-weight: bold;">
            Status: {{ $status }}
        </p>
    @elseif($status == 'Siaga')
        <p style="color: orange; font-weight: bold;">
            Status: {{ $status }}
        </p>
    @else
        <p style="color: red; font-weight: bold;">
            Status: {{ $status }}
        </p>
    @endif
</div>

<hr>