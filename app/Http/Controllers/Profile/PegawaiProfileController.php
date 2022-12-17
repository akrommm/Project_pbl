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
        if (request('agama')) $pegawai->agama = request('agama');
        if (request('nip')) $pegawai->nip = request('nip');
        if (request('nama')) $pegawai->nama = request('nama');
        if (request('agama')) $pegawai->agama = request('agama');
        if (request('jenis_kelamin')) $pegawai->jenis_kelamin = request('jenis_kelamin');
        if (request('tempat_lahir')) $pegawai->tempat_lahir = request('tempat_lahir');
        if (request('tanggal_lahir')) $pegawai->tanggal_lahir = request('tanggal_lahir');
        if (request('jabatan')) $pegawai->jabatan = request('jabatan');
        if (request('gelar_depan')) $pegawai->gelar_depan = request('gelar_depan');
        if (request('gelar_belakang')) $pegawai->gelar_belakang = request('gelar_belakang');
        if (request('username')) $pegawai->username = request('username');
        if (request('email')) $pegawai->email = request('email');
        if (request('password')) $pegawai->password = request('password');
        $pegawai->save();

        if (request('foto')) $pegawai->handleUploadFoto();

        return redirect('profile/pegawai')->with('success', 'Data Pegawai Berhasil Diedit');
    }
}
