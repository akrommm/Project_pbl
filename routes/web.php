<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Profile\PegawaiProfileController;
use App\Http\Controllers\Kajur\SkpController;
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

// login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

// profile
Route::resource('profile/pegawai', PegawaiProfileController::class);


Route::prefix('admin')->middleware('auth')->group(function () {
    include "_/admin.php";
});

Route::prefix('pegawai')->middleware('auth')->group(function () {
    include "_/pegawai.php";
});

Route::prefix('kajur')->middleware('auth')->group(function () {
    include "_/kajur.php";
});

Route::prefix('kepegawaian')->middleware('auth')->group(function () {
    include "_/kepegawaian.php";
});

Route::prefix('simantap')->middleware('auth')->group(function () {
    include "_/qr.php";
});
