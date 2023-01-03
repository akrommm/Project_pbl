<?php

namespace App\Models\Kepegawaian;

use App\Models\Admin\MasterData\Pegawai;
use App\Models\Golongan\Golongan;
use App\Models\ModelAuthenticate;
use Illuminate\Database\Eloquent\Model;


class Absensi extends ModelAuthenticate
{
    protected $table = 'admin__absensi';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'id_golongan');
    }
}
