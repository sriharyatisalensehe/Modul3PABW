<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/lapor', [LaporBanjirController::class, 'form'])->name('laporan.form');
Route::get('/laporan', [LaporBanjirController::class, 'laporan'])->name('laporan.index');
Route::post('/laporan/proses', [LaporBanjirController::class, 'proses'])->name('laporan.proses');

Route::get('/', function () {
    return view('welcome');
});
