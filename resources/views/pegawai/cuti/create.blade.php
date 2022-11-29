<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> TAMBAH PENGAJUAN CUTI
        </h5>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('pegawai/cuti') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('pegawai/cuti') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3 class="text-center">FORMULIR PENGAJUAN CUTI POLITAP</h3>
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
                                <label for="" class="control-label mt-3">MASA KERJA</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('masa_kerja') is-invalid @enderror" name="masa_kerja">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">JENIS CUTI YANG DIAMBIL</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="jenis_cuti" class="form-control">
                                        <option disabled selected>Pilih Jenis Cuti</option>
                                        <option value="Cuti Tahunan">Cuti Tahunan</option>
                                        <option value="Cuti Sakit">Cuti Sakit</option>
                                        <option value="Cuti Karena Alasan Penting">Cuti Karena Alasan Penting</option>
                                        <option value="Cuti Besar">Cuti Besar</option>
                                        <option value="Cuti Melahirkan">Cuti Melahirkan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">LAMANYA CUTI</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="lamanya_cuti" class="form-control">
                                        <option disabled selected>Pilih Lamanya Cuti</option>
                                        <option value="Hari">Hari</option>
                                        <option value="Bulan">Bulan</option>
                                        <option value="Tahun">Tahun</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">PERIODE</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="d-flex align-items-center">
                                        <input type="text" class="form-control datepicker-input" name="dari_tanggal" placeholder="Dari Tanggal">
                                        <span class="p-h-10">-</span>
                                        <input type="text" class="form-control datepicker-input" name="sampai_tanggal" placeholder="Sampai Tanggal">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">ALAMAT SELAMA MENJALANKAN CUTI</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('alamat') is-invalid @enderror" name="alamat">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">TELP</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <input type="text" class="form-control  @error('telp') is-invalid @enderror" name="telp">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="" class="control-label mt-3">ALASAN CUTI
                                    :</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <textarea name="alasan" id="" cols="20" rows="3" class="form-control @error('alasan') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-primary btn-tone float-right"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-module.pegawai>