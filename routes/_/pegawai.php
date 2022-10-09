<?php

use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Pegawai\AbsensiController;
use App\Http\Controllers\Pegawai\BerandaController;
use App\Http\Controllers\Pegawai\KinerjaController;
use Illuminate\Support\Facades\Route;

Route::get('beranda', BerandaController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('kinerja', KinerjaController::class);
