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
        $skp->skp = request('skp');
        $skp->file = request('file');
        $skp->id_pegawai = request()->user()->id;
        $skp->status = 1;
        $skp->save();

        $skp->handleUploadFile();

        return redirect('pegawai/skp')->with('success', 'Berhasil Menambahkan SKP');
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
