<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Skp;

class SkpController extends Controller
{
    public function index()
    {
        $data['list_skp'] = Skp::all();
        $data['pegawai'] = auth()->user();
        return view('admin.master-data.skp.index', $data);
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

        return redirect('admin/master-data/skp')->with('success', 'Berhasil Menambahkan SKP');
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
