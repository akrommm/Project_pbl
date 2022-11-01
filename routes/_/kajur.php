<?php

use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Kajur\AbsensiController;
use App\Http\Controllers\Kajur\BerandaController;
use App\Http\Controllers\Kajur\IzinController;
use App\Http\Controllers\Kajur\KinerjaController;
use App\Http\Controllers\Kajur\SakitController;
use App\Http\Controllers\Kajur\SkpController;
use Illuminate\Support\Facades\Route;

Route::get('beranda', BerandaController::class);
Route::resource('absensi', AbsensiController::class);
Route::resource('kinerja', KinerjaController::class);
Route::resource('skp', SkpController::class);
Route::resource('sakit', SakitController::class);
Route::resource('izin', IzinController::class);
Route::get('cetak_izin/{id}', [IzinController::class, 'cetak']);
Route::get('izin_detail/{id}', [IzinController::class, 'izin_detail']);

Route::put('setuju/{id}', [IzinController::class, 'setuju']);
Route::put('tolak/{id}', [IzinController::class, 'tolak']);
