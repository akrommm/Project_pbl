<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN CUTI
        </h5>
    </div>

    <a href="{{ url('pegawai/cuti') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pegawai/cuti', $cuti->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NAMA PENGAJU</dt>
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
                    <div class="col-md-6">
                        <dt class="font-weight-bold">LAMANYA CUTI</dt>
                        <dd>{{ $cuti->lamanya_cuti }}</dd>
                    </div>
                </div>
                <br>
                @if ($cuti->status == 1)
                <a href="{{ url('pegawai/cetak_cuti/word-export', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                @if ($cuti->status == 2)
                <a href="{{ url('pegawai/cetak_cuti/word-export2', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                @if ($cuti->status == 3)
                <a href="{{ url('pegawai/cetak_cuti/word-export3', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                <br>
            </form>
        </div>
    </div>
</x-module.pegawai>