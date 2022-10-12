<?php

use App\Http\Controllers\Admin\MasterData\ModuleController;
use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Admin\MasterData\SkpController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/master-data/pegawai');
Route::redirect('skp', 'admin/master-data/skp');

Route::resource('master-data/pegawai', PegawaiController::class);
Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('master-data/module', ModuleController::class);
Route::resource('master-data/skp', SkpController::class);
Route::put('setuju/{id}', [SkpController::class, 'setuju']);
Route::put('tolak/{id}', [SkpController::class, 'tolak']);
