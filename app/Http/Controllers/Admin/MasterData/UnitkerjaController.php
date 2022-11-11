<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\Role;
use App\Models\Admin\MasterData\Unitdetail;
use App\Models\Admin\MasterData\Unitkerja;

class UnitkerjaController extends Controller
{
    public function index()
    {
        $data['list_unitkerja'] = Unitkerja::withCount('unitdetail')->get();
        return view('admin.master-data.unitkerja.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.unitkerja.create');
    }

    public function store()
    {
        $unitkerja = new Unitkerja();
        $unitkerja->nama_unit = request('nama_unit');
        $unitkerja->save();

        return redirect('admin/master-data/unitkerja')->with('success', 'Unit Kerja Berhasil Ditambahkan');
    }

    public function show(Unitkerja $unitkerja)
    {
        $data['unitkerja'] = $unitkerja;
        $data['list_pegawai'] = Pegawai::all();

        return view('admin.master-data.unitkerja.show', $data);
    }

    public function destroy(Unitkerja $unitkerja)
    {

        $unitkerja->delete();

        return redirect('admin/master-data/unitkerja')->with('danger', 'Unit Kerja Berhasil Dihapus');
    }

    public function addUnit()
    {
        $unit = new Unitdetail();
        $unit->id_pegawai = request('id_pegawai');
        $unit->id_unitkerja = request('id_unitkerja');
        $unit->jabatan = request('jabatan');
        $unit->save();

        return back()->with('success', 'Data Berhasil Ditambahkan');
    }

    public function deleteUnit(Unitdetail $unit)
    {
        $unit->delete();

        return back()->with('danger', 'Data Berhasil Dihapus');
    }
}
