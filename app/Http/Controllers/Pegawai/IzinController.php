<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\Izin;
use App\Models\Admin\MasterData\Pegawai;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    public function index()
    {
        $data['list_izin'] = Izin::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.izin.index', $data);
    }

    public function create()
    {
        return view('pegawai.izin.create');
    }

    public function store()
    {
        $izin = new izin();
        $izin->perihal = request('perihal');
        $izin->qr = request('qr');
        $izin->dari_tanggal = request('dari_tanggal');
        $izin->sampai_tanggal = request('sampai_tanggal');
        $izin->id_pegawai = request()->user()->id;
        $izin->nama = request()->user()->nama;
        $izin->nip = request()->user()->nip;
        $izin->jabatan = request()->user()->jabatan;
        $izin->status = 1;
        $izin->save();

        $izin->handleUploadFoto();

        return redirect('pegawai/izin')->with('success', 'Berhasil Menambahkan Pengajuan');
    }

    public function update(Izin $izin)
    {
        $izin->komen = request('komen');
        $izin->status = request('status');
        $izin->save();

        $izin->handleUploadFile();

        return redirect('pegawai/izin');
    }

    public function show(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('pegawai.izin.izin_detail', $data);
    }

    public function edit(Izin $izin)
    {
        $data['izin'] = $izin;
        return view('pegawai.izin.izin_detail', $data);
    }

    function destroy(izin $izin)
    {
        $izin->handleDeleteFile();
        $izin->delete();
        return redirect('pegawai/izin')->with('danger', 'berhasil di hapus');
    }

    public function setuju($id)
    {
        $izin = izin::find($id);
        $izin->status = 2;
        $izin->save();
        return redirect('admin/master-data/izin')->with('success', 'Data Disetujui');
    }

    public function tolak($id)
    {
        $izin = izin::find($id);
        $izin->status = 3;
        $izin->save();
        return redirect('admin/master-data/izin')->with('danger', 'Data Ditolak');
    }
}
