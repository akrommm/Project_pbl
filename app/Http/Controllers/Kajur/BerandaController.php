<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\PengajuanIzin\Izin;
use App\Models\PengajuanSakit\Sakit;
use App\Models\SuperAdmin\MasterData\Pegawai;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function __invoke()
    {
        $sakit = Sakit::where('status', '=', '1')->count();
        $izin = Izin::where('status', '=', '1')->count();
        return view('kajur.beranda.beranda', compact('izin', 'sakit'));
    }
}
