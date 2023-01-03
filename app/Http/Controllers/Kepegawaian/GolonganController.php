<?php

namespace App\Http\Controllers\Kepegawaian;

use App\Http\Controllers\Controller;
use App\Models\Golongan\Golongan;

class GolonganController extends Controller
{
    public function index()
    {
        $data['list_golongan'] = Golongan::all();
        return view('kepegawaian.golongan.index', $data);
    }

    public function create()
    {
        return view('kepegawaian.golongan.create');
    }

    public function edit(Golongan $golongan)
    {
        $data['golongan'] = $golongan;
        return view('kepegawaian.golongan.edit', $data);
    }

    public function update(Golongan $golongan)
    {
        if (request('jabatan')) $golongan->jabatan = request('jabatan');
        if (request('uang_makan')) $golongan->uang_makan = request('uang_makan');
        $golongan->save();

        return redirect('kepegawaian/golongan')->with('success', 'Berhasil Edit Data');
    }

    public function store()
    {
        $golongan = new Golongan();
        $golongan->jabatan = request('jabatan');
        $golongan->uang_makan = request('uang_makan');
        $golongan->save();

        return redirect('kepegawaian/golongan')->with('success', 'Berhasil Tambah Data');
    }

    function destroy(Golongan $golongan)
    {
        $golongan->delete();
        return redirect('kepegawaian/golongan')->with('danger', 'Berhasil Dihapus');
    }
}
