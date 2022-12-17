<x-module.kepegawaian>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN CUTI
        </h5>
    </div>

    <a href="{{ url('kepegawaian/pengajuan-selesai') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">Nama Pengaju</dt>
                    <dd>{{ $cuti->nama }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NIP/NIK</dt>
                    <dd>{{ $cuti->nip }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">JABATAN</dt>
                    <dd>{{ $cuti->jabatan }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">JENIS CUTI</dt>
                    <dd>{{ $cuti->jenis_cuti }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">Periode cuti</dt>
                    <dd>{{ $cuti->dari_tanggal_string }} - {{ $cuti->sampai_tanggal_string }}</dd>
                </div>
            </div>
            <br>
            @if ($cuti->status_ak == 'SETUJUI.')
            <a href="{{ url('kepegawaian/cetak_cuti/word-export2', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                <span><i class="fas fa-download"></i> Download Dokumen</span>
            </a>
            @endif
            @if ($cuti->status_ak == 'PERUBAHAN.')
            <a href="{{ url('kepegawaian/cetak_cuti/word-export2', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                <span><i class="fas fa-download"></i> Download Dokumen</span>
            </a>
            @endif
            @if ($cuti->status_ak == 'DITANGGUHKAN.')
            <a href="{{ url('kepegawaian/cetak_cuti/word-export2', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                <span><i class="fas fa-download"></i> Download Dokumen</span>
            </a>
            @endif
            @if ($cuti->status_ak == 'TIDAK DISETUJUI.')
            <a href="{{ url('kepegawaian/cetak_cuti/word-export2', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                <span><i class="fas fa-download"></i> Download Dokumen</span>
            </a>
            @endif
            <hr>
        </div>
    </div>
</x-module.kepegawaian>