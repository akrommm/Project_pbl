<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $data['list_absensi'] = Absensi::all();
        return view('pegawai.absensi.index', $data);
    }

    public function create()
    {
        return view('pegawai.absensi.create');
    }

    public function store()
    {
        $absensi = new Absensi();
        $absensi->nama = request('nama');
        $absensi->Jabatan = request('Jabatan');
        $absensi->status = request('status');
        $absensi->jumlah_kehadiran = request('jumlah_kehadiran');
        $absensi->jumlah_sakit = request('jumlah_sakit');
        $absensi->jumlah_izin = request('jumlah_izin');
        $absensi->jumlah_libur = request('jumlah_libur');
        $absensi->save();

        return redirect('pegawai/absensi')->with('success', 'Berhasil Rekap Data');
    }

    public function show(Absensi $absensi)
    {
        $data['absensi'] = $absensi;
        return view('pegawai.absensi.show', $data);
    }
}
