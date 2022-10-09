<?php

namespace App\Models\Admin\MasterData;

use App\Models\Admin\MasterData\Module;
use App\Models\Admin\MasterData\Pegawai;

use App\Models\Model;

class Role extends Model
{
    protected $table = 'admin__role';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'id_module');
    }
}
