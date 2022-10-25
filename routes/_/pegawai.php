<?php

use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Pegawai\AbsensiController;
use App\Http\Controllers\Pegawai\BerandaController;
use App\Http\Controllers\Pegawai\IzinController;
use App\Http\Controllers\Pegawai\KinerjaController;
use App\Http\Controllers\Pegawai\SakitController;
use App\Http\Controllers\Pegawai\SkpController;
use Illuminate\Support\Facades\Route;

Route::get('beranda', BerandaController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('kinerja', KinerjaController::class);
Route::resource('skp', SkpController::class);
Route::resource('sakit', SakitController::class);
Route::resource('izin', IzinController::class);
