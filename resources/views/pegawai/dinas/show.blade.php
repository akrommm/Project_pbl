<x-module.pegawai>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN IZIN PERJALANAN DINAS LUAR
        </h5>
    </div>
    <a href="{{ url('pegawai/dinas') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pegawai/dinas', $dinas->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NAMA PENGAJU</dt>
                        <dd>{{ $dinas->nama }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NIP/NIK</dt>
                        <dd>{{ $dinas->nip }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">JABATAN</dt>
                        <dd>{{ $dinas->jabatan }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">PERIHAL</dt>
                        <dd>{{ $dinas->perihal }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">KETERANGAN</dt>
                        <dd>{{ $dinas->keterangan }}</dd>
                    </div>
                </div>
                <hr>
                @if ($dinas->status == 1)
                <a href="{{ url('pegawai/cetak_dinas/word-export', $dinas->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                @if ($dinas->status == 2)
                <a href="{{ url('pegawai/cetak_dinas/word-export2', $dinas->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                @if ($dinas->status == 3)
                <a href="{{ url('pegawai/cetak_dinas/word-export3', $dinas->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                <br>
            </form>
        </div>
    </div>
</x-module.pegawai>