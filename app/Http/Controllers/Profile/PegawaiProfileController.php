<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;
use Illuminate\Http\Request;

class PegawaiProfileController extends Controller
{
    public function index()
    {
        $data['pegawai'] = auth()->user();

        return view('profile.pegawai.index', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('profile.pegawai.edit', $data);
    }

    public function update(Pegawai $pegawai)
    {
        $pegawai->agama = request('agama');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->email = request('email');
        if (request('password')) $pegawai->password = request('password');
        $pegawai->save();

        if (request('foto')) $pegawai->handleUploadFoto();

        return redirect('profile/pegawai')->with('success', 'Data Berhasil Diedit');
    }
}
