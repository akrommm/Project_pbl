<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN IZIN
        </h5>
    </div>

    <a href="{{ url('kajur/pengajuan-selesai') }}" class="btn btn-dark btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">Nama Pengaju</dt>
                    <dd>{{ $izin->nama }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NIP/NIK</dt>
                    <dd>{{ $izin->nip }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">Jabatan</dt>
                    <dd>{{ $izin->jabatan }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">Perihal</dt>
                    <dd>{{ $izin->perihal }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">Periode Izin</dt>
                    <dd>{{ $izin->dari_tanggal_string }} - {{ $izin->sampai_tanggal_string }}</dd>
                </div>
            </div>
            <br>
            @if ($izin->status == 1)
            <a href="{{ url('kajur/cetak_izin/word-export1', $izin->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                <span> Download Dokumen</span>
            </a>
            @endif
            @if ($izin->status == 2)
            <a href="{{ url('kajur/cetak_izin', $izin->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                <span> Download Dokumen</span>
            </a>
            @endif
            @if ($izin->status == 3)
            <a href="{{ url('kajur/cetak_izin/word-export3', $izin->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                <span> Download Dokumen</span>
            </a>
            @endif
            <hr>
        </div>
    </div>
</x-module.kajur>