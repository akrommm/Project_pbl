<?php

use App\Http\Controllers\Kepegawaian\BerandaController;
use App\Http\Controllers\Kepegawaian\IzinController;
use App\Http\Controllers\Kepegawaian\PengajuanSelesaiController;
use App\Http\Controllers\Kepegawaian\QrController;
use Illuminate\Support\Facades\Route;

Route::get('beranda', BerandaController::class);
Route::resource('izin', IzinController::class);
Route::get('cetak_izin/word-export/{id}', [IzinController::class, 'wordExport']);
Route::get('izin_detail/{id}', [IzinController::class, 'izin_detail']);
Route::resource('pengajuan-selesai', PengajuanSelesaiController::class);

Route::get('qr', [QrController::class, 'index']);
Route::post('pengajuan-izin', [PengajuanController::class, 'generateizin']);
Route::post('pengajuan-sakit', [PengajuanController::class, 'generatesakit']);
Route::post('persetujuan-izin', [PersetujuanController::class, 'generateizin']);
Route::post('persetujuan-sakit', [PersetujuanController::class, 'generatesakit']);
