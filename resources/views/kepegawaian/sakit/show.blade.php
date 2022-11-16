<x-module.kepegawaian>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN SAKIT
        </h5>
    </div>

    <a href="{{ url('kepegawaian/izin') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('kepegawaian/sakit', $sakit->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
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
                        <dt class="font-weight-bold">PERIODE sakit</dt>
                        <dd>{{ $sakit->dari_tanggal_string }} - {{ $sakit->sampai_tanggal_string }}</dd>
                    </div>
                </div>
                <br>
                @if ($sakit->status == 2)
                <a href="{{ url('kepegawaian/cetak_sakit/word-export2', $sakit->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                @if ($sakit->status == 3)
                <a href="{{ url('kepegawaian/cetak_sakit/word-export1', $sakit->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
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
                            <button class="btn btn-success btn-tone"><span class="fa fa-check"></span> Terima</button>
                            <button class="btn btn-danger ml-4 btn-tone" name="status" value="5"><span class="fa fa-times"></span> Tolak</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</x-module.kepegawaian>