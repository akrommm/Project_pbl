<?php

use App\Http\Controllers\Kepegawaian\BerandaController;
use App\Http\Controllers\Kepegawaian\IzinController;
use App\Http\Controllers\Kepegawaian\QrController;
use App\Models\Kepegawaian\Izin;
use Illuminate\Support\Facades\Route;

Route::get('beranda', BerandaController::class);
Route::resource('izin', IzinController::class);
Route::get('cetak_izin/{id}', [IzinController::class, 'cetak']);

Route::get('qr', [QrController::class, 'index']);
Route::post('pengajuan-izin', [PengajuanController::class, 'generateizin']);
Route::post('pengajuan-sakit', [PengajuanController::class, 'generatesakit']);
Route::post('persetujuan-izin', [PersetujuanController::class, 'generateizin']);
Route::post('persetujuan-sakit', [PersetujuanController::class, 'generatesakit']);
