<x-module.kepegawaian>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN IZIN PERJALANAN DINAS LUAR
        </h5>
    </div>

    <a href="{{ url('kepegawaian/izin') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('kepegawaian/dinas', $dinas->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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
                </div>
                <br>
                @if ($dinas->status == 1)
                <a href="{{ url('kepegawaian/cetak_dinas/word-export2', $dinas->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                    <i class=" fas fa-download "></i><span> Download Dokumen</span>
                </a>
                @endif
                @if ($dinas->status == 'Menyetujui')
                <a href="{{ url('kepegawaian/cetak_dinas/word-export1', $dinas->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                @if ($dinas->status == 'Tidak Menyetujui')
                <a href="{{ url('kepegawaian/cetak_dinas/word-export1', $dinas->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                <hr>
                <div class="form-grup">
                    <label for="" class="control-label">Keterangan</label>
                    <textarea name="keterangan" id="deskripsi" class="form-control"></textarea>
                </div>
                <br>
                <div class="row col-3">

                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group float-right">
                            <button class="btn btn-success btn-tone" name="status" value="Menyetujui"><span class="fa fa-check"></span> Terima</button>
                            <button class="btn btn-danger ml-4 btn-tone" name="status" value="Tidak Menyetujui"><span class="fa fa-times"></span> Tolak</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.kepegawaian>