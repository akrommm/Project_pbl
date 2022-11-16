<?php

namespace App\Models\Kajur;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai;

class Sakit extends ModelAuthenticate
{
    protected $table = 'admin__sakit';
    protected $primaryKey = 'id';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }

    public function getDariTanggalStringAttribute()
    {
        return Carbon::parse($this->attributes['dari_tanggal'])->translatedFormat('d F Y');
    }

    public function getTanggalSuratStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_surat'])->translatedFormat('d F Y');
    }

    public function getSampaiTanggalStringAttribute()
    {
        return Carbon::parse($this->attributes['sampai_tanggal'])->translatedFormat('d F Y');
    }

    function handleUploadFile()
    {
        $this->handleDelete();
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $destination = "file";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $file->extension();
            $url = $file->storeAs($destination, $filename);
            $this->file = "app/" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $file = $this->file;
        if ($file) {
            $path = public_path($file);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }
}
