<?php

namespace App\Models\Kajur;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Izin extends ModelAuthenticate
{
    protected $table = 'admin__izin';
    protected $primaryKey = 'id';
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'nip',
        'jabatan'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('qr_kj')) {
            $qr_kj = request()->file('qr_kj');
            $destination = "images/pegawai/qr/kajur";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $qr_kj->extension();
            $url = $qr_kj->storeAs($destination, $filename);
            $this->qr_kj = "app/" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $qr_kj = $this->qr_kj;
        if ($qr_kj) {
            $path = public_path($qr_kj);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
