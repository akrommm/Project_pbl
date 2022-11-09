<?php

use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Pegawai\AbsensiController;
use App\Http\Controllers\Pegawai\BerandaController;
use App\Http\Controllers\Pegawai\IzinController;
use App\Http\Controllers\Pegawai\KinerjaController;
use App\Http\Controllers\Pegawai\PengajuanController;
use App\Http\Controllers\Pegawai\PersetujuanController;
use App\Http\Controllers\Pegawai\QrController;
use App\Http\Controllers\Pegawai\SakitController;
use App\Http\Controllers\Pegawai\SkpController;
use Illuminate\Support\Facades\Route;

// Menu
Route::get('beranda', BerandaController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('sakit', SakitController::class);
Route::resource('izin', IzinController::class);

// Validasi
Route::put('setuju/{id}', [IzinController::class, 'setuju']);
Route::put('tolak/{id}', [IzinController::class, 'tolak']);

// Cetak Izin
Route::get('cetak_izin/word-export3/{id}', [IzinController::class, 'wordExport3']);
Route::get('cetak_izin/word-export2/{id}', [IzinController::class, 'wordExport2']);
Route::get('cetak_izin/word-export/{id}', [IzinController::class, 'wordExport']);

// Cetak Sakit
Route::get('cetak_sakit/word-export3/{id}', [SakitController::class, 'wordExport3']);
Route::get('cetak_sakit/word-export2/{id}', [SakitController::class, 'wordExport2']);
Route::get('cetak_sakit/word-export/{id}', [SakitController::class, 'wordExport']);
