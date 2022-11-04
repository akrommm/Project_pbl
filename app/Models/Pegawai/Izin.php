<?php

namespace App\Models\Pegawai;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai;

class Izin extends ModelAuthenticate
{
    protected $table = 'admin__izin';
    protected $primaryKey = 'id';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('qr')) {
            $qr = request()->file('qr');
            $destination = "images/pegawai/qr/pegawai";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $qr->extension();
            $url = $qr->storeAs($destination, $filename);
            $this->qr = "app/" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $qr = $this->qr;
        if ($qr) {
            $path = public_path($qr);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
