<?php

namespace App\Models\PengajuanCuti;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai;

class Cuti extends ModelAuthenticate
{
    protected $table = 'admin__cuti';
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
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }

    public function getDariTanggalStringAttribute()
    {
        return Carbon::parse($this->attributes['dari_tanggal'])->translatedFormat('d F Y');
    }

    public function getSampaiTanggalStringAttribute()
    {
        return Carbon::parse($this->attributes['sampai_tanggal'])->translatedFormat('d F Y');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if (request()->hasFile('qr')) {
            $qr = request()->file('qr');
            $destination = "SiMantapQR/pegawai";
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

    function handleUploadLampiran()
    {
        $this->handleDeleteLampiran();
        if (request()->hasFile('lampiran')) {
            $lampiran = request()->file('lampiran');
            $destination = "SiMantapQR/lampiran";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $lampiran->extension();
            $url = $lampiran->storeAs($destination, $filename);
            $this->lampiran = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteLampiran()
    {
        $lampiran = $this->lampiran;
        if ($lampiran) {
            $path = public_path($lampiran);
            if (file_exists($path)) {
                unlink($path);
            }
            return true;
        }
    }

    function handleUploadFotoKajur()
    {
        $this->handleDeleteKajur();
        if (request()->hasFile('qr_kj')) {
            $qr_kj = request()->file('qr_kj');
            $destination = "SiMantapQR/kajur";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $qr_kj->extension();
            $url = $qr_kj->storeAs($destination, $filename);
            $this->qr_kj = "app/" . $url;
            $this->save();
        }
    }

    function handleDeleteKajur()
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

    function handleUploadFotoKepegawaian()
    {
        $this->handleDeleteKepegawaian();
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
    function handleDeleteKepegawaian()
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
