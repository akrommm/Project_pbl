<?php

namespace App\Models\PengajuanDinas;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai;

class Dinas extends ModelAuthenticate
{
    protected $table = 'admin__dinas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama',
        'nip'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function getTanggalSuratStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_surat'])->translatedFormat('d F Y');
    }

    public function getCreatedAtStringAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }

    public function getWaktuStringAttribute()
    {
        return Carbon::parse($this->attributes['waktu'])->translatedFormat('l, d F Y');
    }

    function handleUploadLampiran()
    {
        $this->handleDelete();
        if (request()->hasFile('surat')) {
            $surat = request()->file('surat');
            $destination = "SiMantapsurat/pegawai";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $surat->extension();
            $url = $surat->storeAs($destination, $filename);
            $this->surat = "app/" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $surat = $this->surat;
        if ($surat) {
            $path = public_path($surat);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
