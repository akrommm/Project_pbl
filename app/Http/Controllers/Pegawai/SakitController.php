<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use App\Models\Pegawai\Sakit;
use App\Models\Admin\MasterData\Pegawai;
use Illuminate\Http\Request;

class SakitController extends Controller
{
    public function index()
    {
        $data['list_sakit'] = Sakit::all();
        $data['pegawai'] = auth()->user();
        return view('pegawai.sakit.index', $data);
    }

    public function create()
    {
        return view('pegawai.sakit.create');
    }

    public function store()
    {
        $sakit = new sakit();
        $sakit->file = request('file');
        $sakit->id_pegawai = request()->user()->id;
        $sakit->nama = request()->user()->nama;
        $sakit->nip = request()->user()->nip;
        $sakit->status = 1;
        $sakit->save();

        $sakit->handleUploadFile();

        return redirect('pegawai/sakit')->with('success', 'Berhasil Menambahkan sakit');
    }

    function destroy(sakit $sakit)
    {
        $sakit->handleDeleteFile();
        $sakit->delete();
        return redirect('pegawai/sakit')->with('danger', 'berhasil di hapus');
    }

    public function setuju($id)
    {
        $sakit = sakit::find($id);
        $sakit->status = 2;
        $sakit->save();
        return redirect('admin/master-data/sakit')->with('success', 'Data Disetujui');
    }

    public function tolak($id)
    {
        $sakit = sakit::find($id);
        $sakit->status = 3;
        $sakit->save();
        return redirect('admin/master-data/sakit')->with('danger', 'Data Ditolak');
    }
}
