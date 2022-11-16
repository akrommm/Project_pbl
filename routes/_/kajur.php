<?php

use App\Http\Controllers\Kajur\AbsensiController;
use App\Http\Controllers\Kajur\BerandaController;
use App\Http\Controllers\Kajur\IzinController;
use App\Http\Controllers\Kajur\PengajuanAktifController;
use App\Http\Controllers\Kajur\PengajuanSelesaiController;
use App\Http\Controllers\Kajur\SakitController;
use App\Models\Kajur\PengajuanSelesai;
use Illuminate\Support\Facades\Route;

Route::get('beranda', BerandaController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('pengajuan-aktif', PengajuanAktifController::class);
Route::resource('pengajuan-selesai', PengajuanSelesaiController::class);
Route::resource('sakit', SakitController::class);
Route::resource('izin', IzinController::class);
Route::get('izin_detail/{id}', [IzinController::class, 'izin_detail']);

Route::get('pengajuan-aktif1/{id}', [PengajuanAktifController::class, 'show1']);
Route::get('pengajuan-selesai1/{id}', [PengajuanSelesaiController::class, 'show1']);

// Cetak Izin
Route::get('cetak_izin/word-export/{id}', [IzinController::class, 'wordExport']);
Route::get('cetak_izin/word-export1/{id}', [IzinController::class, 'wordExport1']);
Route::get('cetak_izin/word-export3/{id}', [PengajuanSelesaiController::class, 'wordExport3']);
Route::get('cetak_izin/word-export2/{id}', [PengajuanAktifController::class, 'wordExport2']);
// Cetak Sakit
Route::get('cetak_sakit/word-export1/{id}', [SakitController::class, 'wordExport1']);
Route::get('cetak_sakit/word-export2/{id}', [SakitController::class, 'wordExport2']);
Route::get('cetak_sakit/word-export3/{id}', [SakitController::class, 'wordExport3']);
