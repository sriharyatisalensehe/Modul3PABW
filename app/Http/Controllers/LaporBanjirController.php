<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('laporan.form');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $lokasi = $request->input('lokasi');
        $tinggi = $request->input('tinggi');

        return view('laporan.konfirmasi', compact('nama', 'lokasi', 'tinggi'));
    }

    public function laporan()
    {
        $laporan = [
            [
                'nama' => 'Sri',
                'lokasi' => 'Cimahi',
                'tinggi' => 10,
            ],
            [
                'nama' => 'Haryati',
                'lokasi' => 'Dayeuhkolot',
                'tinggi' => 35,
            ],
            [
                'nama' => 'dabukke',
                'lokasi' => 'Bojongsoang',
                'tinggi' => 20,
            ],
        ];

        return view('laporan.index', compact('laporan'));
    }
}