<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Detail Pengajuan Izin
        </h5>
    </div>

    <a href="{{ url('pegawai/izin') }}" class="btn btn-dark btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pegawai/izin', $izin->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="{{ $izin->nama}}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIP/NIK</label>
                            <input type="text" class="form-control" placeholder="{{ $izin->nip}}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jabatan</label>
                            <input type="text" class="form-control" placeholder="{{ $izin->jabatan}}" disabled="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Perihal</label>
                            <input type="text" class="form-control" placeholder="{{ $izin->perihal}}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Dari Tanggal</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" class="form-control datepicker-input" placeholder="{{ $izin->dari_tanggal }}" disabled="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Sampai Tanggal</label>
                            <div class="input-affix m-b-10">
                                <i class="prefix-icon anticon anticon-calendar"></i>
                                <input type="text" class="form-control datepicker-input" placeholder="{{ $izin->sampai_tanggal }}" disabled="">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row col-3">

                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group float-right">
                            <button class="btn btn-dark" name="status" value="2"><span class="fa fa-save"></span> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</x-module.pegawai>