<x-module.kepegawaian>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL REKAP ABSENSI
        </h5>
    </div>
    <a href="{{ url('kepegawaian/absensi') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('kepegawaian/absensi', $absensi->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NAMA PEGAWAI</dt>
                        <dd>{{ $absensi->nama }}, {{ $absensi->pegawai->gelar_belakang}}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NIP/NIK</dt>
                        <dd>{{ $absensi->pegawai->nip }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">JABATAN</dt>
                        <dd>{{ $absensi->golongan->jabatan }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">UNIT KERJA</dt>
                        <dd>{{ $absensi->pegawai->unitkerja->nama_unit }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">REKAPAN BULAN</dt>
                        <dd>{{ $absensi->bulan }}</dd>
                    </div>
                </div>
                <hr>
                <a href="{{ url('kepegawaian/exportabsensi', $absensi->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2"><i class="fas fa-download "></i> Download</a>
            </form>
        </div>
    </div>
</x-module.kepegawaian>