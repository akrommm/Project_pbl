<?php

use App\Http\Controllers\Kepegawaian\BerandaController;
use App\Http\Controllers\Kepegawaian\DinasController;
use App\Http\Controllers\Kepegawaian\IzinController;
use App\Http\Controllers\Kepegawaian\PengajuanSelesaiController;
use App\Http\Controllers\Kepegawaian\QrController;
use App\Http\Controllers\Kepegawaian\SakitController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

Route::get('beranda', BerandaController::class);
Route::resource('izin', IzinController::class);
Route::resource('dinas', DinasController::class);

Route::get('cetak_izin/word-export/{id}', [IzinController::class, 'wordExport']);
Route::get('izin_detail/{id}', [IzinController::class, 'izin_detail']);
Route::resource('pengajuan-selesai', PengajuanSelesaiController::class);
Route::get('pengajuan-selesai1/{id}', [PengajuanSelesaiController::class, 'show1']);

Route::get('cetak_izin/word-export3/{id}', [PengajuanSelesaiController::class, 'wordExport3']);
Route::get('cetak_izin/word-export2/{id}', [IzinController::class, 'wordExport2']);
Route::get('cetak_sakit/word-export1/{id}', [SakitController::class, 'wordExport1']);
Route::get('cetak_sakit/word-export2/{id}', [SakitController::class, 'wordExport2']);

Route::get('qr', [QrController::class, 'index']);
Route::post('pengajuan-izin', [PengajuanController::class, 'generateizin']);
Route::post('pengajuan-sakit', [PengajuanController::class, 'generatesakit']);
Route::post('persetujuan-izin', [PersetujuanController::class, 'generateizin']);
Route::post('persetujuan-sakit', [PersetujuanController::class, 'generatesakit']);
