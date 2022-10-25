<?php

namespace App\Http\Controllers\Kajur;

use App\Http\Controllers\Controller;
use App\Models\Kajur\Sakit;
use App\Models\Pegawai\Sakit as PegawaiSakit;

class SakitController extends Controller
{
    public function index()
    {
        $data['list_sakit'] = Sakit::all();
        $data['pegawai'] = auth()->user();
        return view('kajur.sakit.index', $data);
    }

    public function store()
    {
        $sakit = new sakit();
        $sakit->sakit = request('sakit');
        $sakit->file = request('file');
        $sakit->id_pegawai = request()->user()->id;
        $sakit->status = 1;
        $sakit->save();

        $sakit->handleUploadFile();

        return redirect('kajur/sakit')->with('success', 'Berhasil Menambahkan sakit');
    }

    public function setuju($id)
    {
        $sakit = sakit::find($id);
        $sakit->status = 2;
        $sakit->save();
        return redirect('kajur/sakit')->with('success', 'Data Disetujui');
    }

    public function tolak($id)
    {
        $sakit = sakit::find($id);
        $sakit->status = 3;
        $sakit->save();
        return redirect('kajur/sakit')->with('danger', 'Data Ditolak');
    }
}
