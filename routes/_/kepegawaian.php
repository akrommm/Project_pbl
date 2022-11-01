<?php

use App\Http\Controllers\Kepegawaian\BerandaController;
use App\Http\Controllers\Kepegawaian\IzinController;
use App\Models\Kepegawaian\Izin;
use Illuminate\Support\Facades\Route;

Route::get('beranda', BerandaController::class);
Route::resource('izin', IzinController::class);
Route::get('cetak_izin/{id}', [IzinController::class, 'cetak']);
