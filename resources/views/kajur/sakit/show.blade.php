<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN SAKIT
        </h5>
    </div>

    <a href="{{ url('kajur/sakit') }}" class="btn btn-dark btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('kajur/sakit', $sakit->id) }}" method="post" enctype="multipart/form-data">
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
                        <dt class="font-weight-bold">PERIODE</dt>
                        <dd>{{ $sakit->dari_tanggal_string }} - {{ $sakit->sampai_tanggal_string}}</dd>
                    </div>
                </div>
                <br>
                @if ($sakit->status == 1)
                <a href="{{ url('kajur/cetak_sakit/word-export1', $sakit->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                    <span><i class="fas fa-download"></i> Download Dokumen</span>
                </a>
                @endif
                @if ($sakit->status == 2)
                <a href="{{ url('kajur/cetak_sakit', $sakit->id) }}" target="_blank" class="text-white btn btn-block btn-dark col-md-2">
                    <span><i class="fas fa-download"></i> Download Dokumen</span>
                </a>
                @endif
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="control-label">Nomor Surat</label>
                        @if ($errors->has('nomor_surat'))
                        <label for="" class="label text-danger">{{ $errors->get('nomor_surat')[0] }}</label>
                        @endif
                        <input type="text" name="nomor_surat" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="control-label">Tanggal Surat</label>
                        @if ($errors->has('tanggal_surat'))
                        <label for="" class="label text-danger">{{ $errors->get('tanggal_surat')[0] }}</label>
                        @endif
                        <input type="date" name="tanggal_surat" class="form-control" required>
                    </div>
                </div>
                <br>
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
                            <button class="btn btn-danger ml-4 btn-tone" name="status" value="4"><span class="fa fa-times"></span> Tolak</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</x-module.kajur>