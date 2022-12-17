<?php

namespace App\Models\RekapAbsen;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai;

class Rekap extends ModelAuthenticate
{
    protected $table = 'admin__rekap';
    protected $primaryKey = 'id';

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

    function handleUploadFile()
    {
        $this->handleDeleteFile();
        if (request()->hasFile('rekap')) {
            $rekap = request()->file('rekap');
            $destination = "SiMantaprekap";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $rekap->extension();
            $url = $rekap->storeAs($destination, $filename);
            $this->rekap = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteFile()
    {
        $rekap = $this->rekap;
        if ($rekap) {
            $path = public_path($rekap);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
