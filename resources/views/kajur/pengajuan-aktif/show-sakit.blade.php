<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN SAKIT
        </h5>
    </div>

    <a href="{{ url('kajur/pengajuan-aktif') }}" class="btn btn-dark btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <dt class="font-weight-bold">NAMA PENGAJU</dt>
                    <dd>{{ $sakit->nama }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">NIP/NIK</dt>
                    <dd>{{ $sakit->nip }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">JABATAN</dt>
                    <dd>{{ $sakit->jabatan }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">PERIHAL</dt>
                    <dd>{{ $sakit->perihal }}</dd>
                </div>
                <div class="col-md-6">
                    <dt class="font-weight-bold">PERIODE SAKIT</dt>
                    <dd>{{ $sakit->dari_tanggal_string }} - {{ $sakit->sampai_tanggal_string }}</dd>
                </div>
            </div>
            <br>
            @if ($sakit->status == 2)
            <a href="{{ url('kajur/cetak_sakit/word-export2', $sakit->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                <span> Download Dokumen</span>
            </a>
            @endif
            <hr>
        </div>
    </div>
</x-module.kajur>