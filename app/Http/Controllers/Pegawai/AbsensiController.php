<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\Absensi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {

        $data['bulan_awal'] = $bulan_awal = request('bulan_awal');
        $data['bulan_akhir'] = $bulan_akhir = request('bulan_akhir');
        $data['tahun_awal'] = $tahun_awal = request('tahun_awal');
        $data['tahun_akhir'] = $tahun_akhir = request('tahun_akhir');
        $date1 = Carbon::create($bulan_awal, 1);
        $date2 = Carbon::create($bulan_akhir)->endOfMonth();
        $weekday = $date1->diffInDaysFiltered(function (Carbon $date) {
            return $date->isWeekday();
        }, $date2);

        $data['jumlah_hari_aktif'] = $weekday;
        $data['list_absensi'] = Absensi::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.absensi.index', $data);
    }

    public function create()
    {
        return view('pegawai.absensi.create');
    }

    public function store()
    {
        $absensi = new Absensi();
        $absensi->id_pegawai = request()->user()->id;
        $absensi->nama = request()->user()->nama;
        $absensi->jabatan = request('jabatan');
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

    function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return redirect('pegawai/absensi')->with('danger', 'berhasil di hapus');
    }
}
