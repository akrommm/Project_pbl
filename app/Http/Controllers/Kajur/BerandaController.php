<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\PengajuanCuti\Cuti;
use App\Models\PengajuanDinas\Dinas;
use App\Models\PengajuanIzin\Izin;
use App\Models\PengajuanSakit\Sakit;
use App\Models\SuperAdmin\MasterData\Pegawai;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function __invoke()
    {
        $cuti = Cuti::where('status', '=', '1')->count();
        $izin = Izin::where('status', '=', '1')->count();
        return view('kajur.beranda.beranda', compact('izin', 'cuti'));
    }
}
