<?php

namespace App\Http\Controllers\Unit;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\Absensi;
use App\Models\RekapAbsen\Rekap;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $data['list_rekap'] = Rekap::all();
        $data['pegawai'] = auth()->user();
        return view('unit.absensi.index', $data);
    }

    public function create()
    {
        return view('unit.absensi.create');
    }

    public function store()
    {
        $rekap = new Rekap();
        // $rekap->id_pegawai = request()->user()->id;
        // $rekap->nama = request()->user()->nama;
        $rekap->file = request('file');
        $rekap->bulan = request('bulan');
        $rekap->save();

        $rekap->handleUploadFile();

        return redirect('unit/absensi')->with('success', 'Berhasil Rekap Absensi');
    }

    public function show(Absensi $absensi)
    {
        $data['absensi'] = $absensi;
        return view('pegawai.absensi.show', $data);
    }

    function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return redirect('pegawai/absensi')->with('danger', 'Berhasil Dihapus');
    }
}
