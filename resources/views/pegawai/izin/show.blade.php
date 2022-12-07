<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN IZIN
        </h5>
    </div>

    <a href="{{ url('pegawai/izin') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pegawai/izin', $izin->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NAMA PENGAJU</dt>
                        <dd>{{ $izin->nama }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NIP/NIK</dt>
                        <dd>{{ $izin->nip }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">JABATAN</dt>
                        <dd>{{ $izin->jabatan }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">PERIHAL</dt>
                        <dd>{{ $izin->perihal }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">PADA HARI</dt>
                        <dd>{{ $izin->waktu_string }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">ALASAN IZIN</dt>
                        <dd>{{ $izin->alasan }}</dd>
                    </div>
                </div>
                <br>
                @if ($izin->status == 2)
                <a href="{{ url('pegawai/cetak_izin/word-export', $izin->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                    <span><i class="fas fa-download"></i> Download Dokumen</span>
                </a>
                @endif
                @if ($izin->status == 'Menyetujui')
                <a href="{{ url('pegawai/cetak_izin/word-export2', $izin->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                    <span><i class="fas fa-download"></i> Download Dokumen</span>
                </a>
                @endif
                @if ($izin->status == 'Tidak Menyetujui')
                <a href="{{ url('pegawai/cetak_izin/word-export3', $izin->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                    <span><i class="fas fa-download"></i> Download Dokumen</span>
                </a>
                @endif
                <br>
            </form>
        </div>
    </div>
</x-module.pegawai>