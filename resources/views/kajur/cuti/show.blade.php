<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> DETAIL PENGAJUAN CUTI
        </h5>
    </div>

    <a href="{{ url('kajur/cuti') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('kajur/cuti', $cuti->id) }}" method="post">
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
                <a href="{{ url('kajur/cetak_cuti/word-export', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                @if ($cuti->status == 2)
                <a href="{{ url('kajur/cetak_cuti/word-export2', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                @if ($cuti->status == 3)
                <a href="{{ url('kajur/cetak_cuti/word-export3', $cuti->id) }}" target="_blank" class="text-white btn btn-block btn-dark fas fa-download col-md-2">
                    <span> Download Dokumen</span>
                </a>
                @endif
                <hr>
                <br>
                <div class="form-grup">
                    <label for="" class="control-label">Keterangan</label>
                    <textarea name="keterangan" id="deskripsi" class="form-control"></textarea>
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