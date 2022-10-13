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
        $skp->orientasi_pelayanan = request('orientasi_pelayanan');
        $skp->inisiatif_kerja = request('inisiatif_kerja');
        $skp->komitmen = request('komitmen');
        $skp->kerja_sama = request('kerja_sama');
        $skp->kepemimpinan = request('kepemimpinan');
        $skp->sasaran_kerja = request('sasaran_kerja');
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
        $skp->handleDelete();
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
