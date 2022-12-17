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
                        <dd>{{ $dinas->nama }}, {{ $dinas->pegawai->gelar_belakang }}</dd>
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
                <a href="{{ url($dinas->surat) }}" class="text-white btn btn-block btn-dark col-md-2" target="blank_"><i class="fas fa-download"></i> Download Dokumen</a>
                <br>
            </form>
        </div>
    </div>
</x-module.pegawai>