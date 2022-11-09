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
                        <dt class="font-weight-bold">Nama Pengaju</dt>
                        <dd>{{ $sakit->nama }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NIP/NIK</dt>
                        <dd>{{ $sakit->nip }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">Jabatan</dt>
                        <dd>{{ $sakit->jabatan }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">Perihal</dt>
                        <dd>{{ $sakit->perihal }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">Periode sakit</dt>
                        <dd>{{ $sakit->dari_tanggal_string }} - {{ $sakit->sampai_tanggal_string}}</dd>
                    </div>
                </div>
                <br>
                @if ($sakit->status == 1)
                <a href="{{ url('kajur/cetak_sakit/word-export1', $sakit->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                @if ($sakit->status == 2)
                <a href="{{ url('kajur/cetak_sakit', $sakit->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="control-label">QR Persetujuan</label>
                        @if ($errors->has('qr_kj'))
                        <label for="" class="label text-danger">{{ $errors->get('qr_kj')[0] }}</label>
                        @endif
                        <input type="file" name="qr_kj" accept=".jpg, .png, .jpeg" class="form-control" required>
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
                            <button class="btn btn-success btn-tone" name="status" value="2"><span class="fa fa-check"></span> Terima</button>
                            <button class="btn btn-danger ml-4 btn-tone" name="status" value="4"><span class="fa fa-times"></span> Tolak</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</x-module.kajur>