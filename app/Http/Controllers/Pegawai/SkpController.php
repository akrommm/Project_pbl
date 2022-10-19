<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Skp;
use App\Models\Admin\MasterData\Pegawai;
use Illuminate\Http\Request;

class SkpController extends Controller
{
    public function index()
    {
        $data['list_skp'] = Skp::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.skp.index', $data);
    }

    public function create()
    {
        return view('pegawai.skp.create');
    }

    public function store()
    {
        $skp = new skp();
        $skp->tahun = request('tahun');
        $skp->bulan_akhir = request('bulan_akhir');
        $skp->bulan_awal = request('bulan_awal');
        $skp->file = request('file');
        $skp->id_pegawai = request()->user()->id;
        $skp->nama = request()->user()->nama;
        $skp->nip = request()->user()->nip;
        $skp->status = 1;
        $skp->save();

        $skp->handleUploadFile();

        return redirect('pegawai/skp')->with('success', 'Berhasil Menambahkan SKP');
    }

    function destroy(Skp $skp)
    {
        $skp->handleDeleteFile();
        $skp->delete();
        return redirect('pegawai/skp')->with('danger', 'berhasil di hapus');
    }

    public function setuju($id)
    {
        $skp = skp::find($id);
        $skp->status = 2;
        $skp->save();
        return redirect('admin/master-data/skp')->with('success', 'Data Disetujui');
    }

    public function tolak($id)
    {
        $skp = skp::find($id);
        $skp->status = 3;
        $skp->save();
        return redirect('admin/master-data/skp')->with('danger', 'Data Ditolak');
    }
}
