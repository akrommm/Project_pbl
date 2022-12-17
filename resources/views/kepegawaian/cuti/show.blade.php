<x-module.kepegawaian>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN CUTI
        </h5>
    </div>

    <a href="{{ url('kepegawaian/izin') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('kepegawaian/cuti', $cuti->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NAMA PENGAJU</dt>
                        <dd>{{ $cuti->nama }}, {{ $cuti->pegawai->gelar_belakang }}</dd>
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
                        <dt class="font-weight-bold">PERIODE CUTI</dt>
                        <dd>{{ $cuti->dari_tanggal_string }} - {{ $cuti->sampai_tanggal_string }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">LAMANYA CUTI</dt>
                        <dd>{{ $cuti->lamanya_cuti }}</dd>
                    </div>
                </div>
                <br>
                @if ($cuti->status_kj == 'SETUJUI')
                <a href="{{ url('kepegawaian/cetak_cuti/word-export1', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                    <span><i class="fas fa-download"></i> Download Dokumen</span>
                </a>
                @endif
                <hr>
                <br>
                <div class="form-grup">
                    <label for="" class="control-label">Keterangan</label>
                    <textarea name="keterangan_ak" id="deskripsi" class="form-control"></textarea>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group float-right">
                            <button class="btn btn-success btn-tone" name="status_ak" value="SETUJUI."><span class="fa fa-check"></span> Setujui</button>
                            <button class="btn btn-warning  btn-tone" name="status_ak" value="PERUBAHAN."><span class="fa fa-edit"></span> Perubahan</button>
                            <button class="btn btn-primary btn-tone" name="status_ak" value="DITANGGUHKAN."><span class="fa fa-clock"></span> Ditangguhkan</button>
                            <button class="btn btn-danger btn-tone" name="status_ak" value="TIDAK DISETUJUI."><span class="fa fa-times"></span> Tolak</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.kepegawaian>