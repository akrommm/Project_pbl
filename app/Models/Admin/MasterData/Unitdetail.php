<?php

namespace App\Models\Admin\MasterData;

use App\Models\ModelAuthenticate;

class Unitdetail extends ModelAuthenticate
{
    protected $table = 'admin__unitkerja__detail';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function unitkerja()
    {
        return $this->belongsTo(Unitkerja::class, 'id_unitkerja');
    }
}
