<?php

// QR CODE

use App\Http\Controllers\Qr\PengajuanController;
use App\Http\Controllers\Qr\PersetujuanController;
use App\Http\Controllers\Qr\QrController;
use Illuminate\Support\Facades\Route;

Route::get('qr', [QrController::class, 'index']);
Route::post('pengajuan-izin', [PengajuanController::class, 'generateizin']);
Route::post('pengajuan-sakit', [PengajuanController::class, 'generatesakit']);
Route::post('persetujuan-izin', [PersetujuanController::class, 'generateizin']);
Route::post('persetujuan-sakit', [PersetujuanController::class, 'generatesakit']);
