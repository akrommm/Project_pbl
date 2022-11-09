<?php

namespace App\Models\Kajur;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PengajuanAktif extends ModelAuthenticate
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
}
