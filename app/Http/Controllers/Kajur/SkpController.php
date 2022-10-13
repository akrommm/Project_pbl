<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Skp;

class SkpController extends Controller
{
    public function index()
    {
        $data['list_skp'] = Skp::all();
        $data['pegawai'] = auth()->user();
        return view('kajur.skp.index', $data);
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

        return redirect('kajur/skp')->with('success', 'Berhasil Menambahkan SKP');
    }

    public function setuju($id)
    {
        $skp = skp::find($id);
        $skp->status = 2;
        $skp->save();
        return redirect('kajur/skp')->with('success', 'Data Disetujui');
    }

    public function tolak($id)
    {
        $skp = skp::find($id);
        $skp->status = 3;
        $skp->save();
        return redirect('kajur/skp')->with('danger', 'Data Ditolak');
    }
}
