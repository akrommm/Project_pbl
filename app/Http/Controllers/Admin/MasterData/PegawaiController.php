<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pegawai\StoreRequest;
use App\Http\Requests\Admin\Pegawai\UpdateRequest;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\Role;
use App\Models\Admin\MasterData\Unitkerja;
use App\Models\SimaduPegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.master-data.pegawai.index', $data);
    }

    public function create()
    {
        $data['list_unitkerja'] = UnitKerja::all();
        return view('admin.master-data.pegawai.create', $data);
    }

    public function store()
    {
        $pegawai = new Pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nik = request('nik');
        $pegawai->nama = request('nama');
        $pegawai->id_unitkerja = request('unitkerja');
        $pegawai->jenis_kelamin = request('jenis_kelamin');
        $pegawai->tempat_lahir = request('tempat_lahir');
        $pegawai->tanggal_lahir = request('tanggal_lahir');
        $pegawai->jabatan = request('jabatan');
        $pegawai->gelar_depan = request('gelar_depan');
        $pegawai->gelar_belakang = request('gelar_belakang');
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        $pegawai->password = request('password');
        $pegawai->save();

        $pegawai->handleUploadFoto();

        return redirect('admin/master-data/pegawai')->with('success', 'Data Pegawai Berhasil Ditambahkan');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.edit', $data);
    }

    public function update(Pegawai $pegawai)
    {
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

        return redirect('admin/master-data/pegawai')->with('success', 'Data Pegawai Berhasil Diedit');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->handleDelete();

        $list_role = Role::where('id_pegawai', $pegawai->id)->get();
        if ($list_role->count() > 0) {
            $list_role->each(function ($role) {
                $role->delete();
            });
        }

        $pegawai->delete();

        return redirect('admin/master-data/pegawai')->with('danger', 'Data Pegawai Berhasil Dihapus');
    }
}
