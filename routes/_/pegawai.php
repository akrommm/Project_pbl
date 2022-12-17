<?php

use App\Http\Controllers\Pegawai\AbsensiController;
use App\Http\Controllers\Pegawai\BerandaController;
use App\Http\Controllers\Pegawai\CutiController;
use App\Http\Controllers\Pegawai\DinasLuarController;
use App\Http\Controllers\Pegawai\IzinController;
use App\Http\Controllers\Pegawai\PengajuanAktifController;
use App\Http\Controllers\Pegawai\PengajuanSelesaiController;
use App\Http\Controllers\Pegawai\SakitController;
use Illuminate\Support\Facades\Route;

// Menu
Route::get('beranda', BerandaController::class);
Route::resource('absensi', AbsensiController::class);
Route::get('exportabsensi/{id}', [AbsensiController::class, 'absensiexport']);
Route::resource('izin', IzinController::class);
Route::resource('cuti', CutiController::class);
Route::resource('dinas', DinasLuarController::class);
Route::resource('pengajuan-aktif', PengajuanAktifController::class);
Route::resource('pengajuan-selesai', PengajuanSelesaiController::class);

// Cetak Izin
Route::get('cetak_izin/word-export10/{id}', [IzinController::class, 'wordExport10']);
Route::get('cetak_izin/word-export11/{id}', [IzinController::class, 'wordExport11']);
Route::get('cetak_izin/word-export/{id}', [IzinController::class, 'wordExport']);

// Cetak Sakit
Route::get('cetak_sakit/word-export3/{id}', [SakitController::class, 'wordExport3']);
Route::get('cetak_sakit/word-export2/{id}', [SakitController::class, 'wordExport2']);
Route::get('cetak_sakit/word-export/{id}', [SakitController::class, 'wordExport']);

// Cetak Cuti
Route::get('cetak_cuti/word-export3/{id}', [CutiController::class, 'wordExport3']);
Route::get('cetak_cuti/word-export2/{id}', [CutiController::class, 'wordExport2']);
Route::get('cetak_cuti/word-export1/{id}', [CutiController::class, 'wordExport1']);
