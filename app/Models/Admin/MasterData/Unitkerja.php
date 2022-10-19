<?php

namespace App\Models\Admin\MasterData;

use App\Models\ModelAuthenticate;

class Unitkerja extends ModelAuthenticate
{
    protected $table = 'admin__unitkerja';

    public function unitdetail()
    {
        return $this->hasMany(Unitdetail::class, 'id_unitkerja');
    }
}
