<?php

namespace App\Models\Kajur;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use App\Models\Admin\MasterData\Pegawai;
use App\Models\Admin\MasterData\Unitkerja;
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

    public function unitkerja()
    {
        return $this->belongsTo(Unitkerja::class, 'id_unitkerja');
    }

    public function getTanggalSuratStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_surat'])->translatedFormat('d F Y');
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
        if (request()->hasFile('qr_kj')) {
            $qr_kj = request()->file('qr_kj');
            $destination = "SiMantapQR";
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
