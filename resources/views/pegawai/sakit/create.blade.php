<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Tambah Pengajuan Sakit
        </h5>
    </div>
    <a href="{{ url('pegawai/sakit') }}" class="btn btn-dark btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pegawai/sakit') }}" method="post" enctype="multipart/form-data" onsubmit="return confirm('Yakin ingin mengupload data ini?')">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Perihal</label>
                            <input type="text" name="perihal" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Periode</label>
                            <div class="d-flex align-items-center">
                                <input type="text" class="form-control datepicker-input" name="dari_tanggal" placeholder="Dari Tanggal">
                                <span class="p-h-10">to</span>
                                <input type="text" class="form-control datepicker-input" name="sampai_tanggal" placeholder="Sampai Tanggal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">QR Pengajuan</label>
                            @if ($errors->has('qr'))
                            <label for="" class="label text-danger">{{ $errors->get('qr')[0] }}</label>
                            @endif
                            <input type="file" name="qr" accept=".jpg, .png, .jpeg" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Surat Keterangan Dari Dokter Apabila lebih dari 2 Hari</label>
                            <input type="file" name="lampiran" accept=".pdf,.png,.jpg" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-dark float-right"><i class="fas fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.pegawai>