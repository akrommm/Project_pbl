<?php

use App\Http\Controllers\Admin\MasterData\PegawaiController;
use App\Http\Controllers\Pegawai\BerandaController;
use App\Http\Controllers\SuperAdmin\MasterData\BerandaController as MasterDataBerandaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Profile\PegawaiProfileController;
use App\Http\Controllers\Admin\MasterData\SkpController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

// validasi
Route::put('setuju/{id}', [SkpController::class, 'setuju']);
Route::put('tolak/{id}', [SkpController::class, 'tolak']);

// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// profile
Route::resource('profile/pegawai', PegawaiProfileController::class);


Route::prefix('admin')->group(function () {
    include "_/admin.php";
});

Route::prefix('pegawai')->group(function () {
    include "_/pegawai.php";
});
