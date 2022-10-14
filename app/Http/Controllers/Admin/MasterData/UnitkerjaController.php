<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;

class UnitkerjaController extends Controller
{
    public function index()
    {
        return view('admin.master-data.unitkerja.index');
    }
}
