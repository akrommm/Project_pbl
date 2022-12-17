<?php

namespace App\Models\Pegawai;

use App\Models\Admin\MasterData\Pegawai;
use App\Models\ModelAuthenticate;
use Illuminate\Database\Eloquent\Model;


class Absensi extends ModelAuthenticate
{
    protected $table = 'admin__absensi';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
