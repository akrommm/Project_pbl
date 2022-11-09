<?php

namespace App\Models\Kepegawaian;

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
        'nip'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('qr_ak')) {
            $qr_ak = request()->file('qr_ak');
            $destination = "SiMantapQR/kepegawaian";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $qr_ak->extension();
            $url = $qr_ak->storeAs($destination, $filename);
            $this->qr_ak = "app/" . $url;
            $this->save();
        }
    }

    public function getDariTanggalStringAttribute()
    {
        return Carbon::parse($this->attributes['dari_tanggal'])->translatedFormat('d F Y');
    }

    public function getSampaiTanggalStringAttribute()
    {
        return Carbon::parse($this->attributes['sampai_tanggal'])->translatedFormat('d F Y');
    }

    function handleDelete()
    {
        $qr_ak = $this->qr_ak;
        if ($qr_ak) {
            $path = public_path($qr_ak);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
