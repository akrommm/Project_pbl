<x-module.pegawai>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> TAMBAH PENGAJUAN IZIN
        </h5>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('pegawai/izin') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> kembali</a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('pegawai/izin') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center">FORMULIR PENGAJUAN IZIN POLITAP</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">NAMA </label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" readonly value="{{ auth()->user()->nama }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">UNIT KERJA</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="" readonly value="{{ auth()->user()->unitkerja->nama_unit }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">JABATAN</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('jabatan') is-invalid @enderror" name="" readonly value="{{ auth()->user()->jabatan }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">PANGKAT/GOL</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('pangkat') is-invalid @enderror" name="pangkat" required>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 mb-3">
                            <strong class="mt-3">Dengan ini mengajukan :</strong>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">PENGAJUAN IZIN UNTUK</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="perihal" class="form-control" required>
                                        <option disabled selected>Pilih Jenis Izin</option>
                                        <option value="tidak masuk bekerja">Tidak Masuk Kerja</option>
                                        <option value="izin pulang lebih cepat dari waktu kepulangan kerja">Izin pulang lebih cepat dari waktu kepulangan kerja</option>
                                        <option value="terlambat datang masuk kerja">Terlambat datang masuk kerja</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">SELAMA</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('selama') is-invalid @enderror" name="selama" placeholder="....../jam/menit*" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">PADA HARI</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="d-flex align-items-center">
                                        <input type="text" class="form-control datepicker-input" name="waktu" placeholder="Pada Hari" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">ALASAN IZIN
                                    :</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea name="alasan" id="" cols="20" rows="3" class="form-control @error('alasan') is-invalid @enderror" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-tone float-right">
                                    <i class="fa fa-save"></i>
                                    <span> Simpan</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-module.pegawai>