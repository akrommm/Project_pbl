<x-module.kajur>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> QR Generate
        </h5>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Sistem generate tanda tangan digital</h4>
                </div>
                <div class="card-body">
                    <!-- Nav tabs -->
                    <div class="default-tab ">
                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">
                                    Pengajuan Izin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#profile">
                                    Persetujuan Izin</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#contact">
                                    Pengajuan Sakit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#message">
                                    Persetujuan Sakit</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home" role="tabpanel">
                                <div class="pt-4">
                                    <h4>Qr generate </h4>
                                    <br>
                                    <form action="{{ url('jneqr/pengajuan-izin') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Nama</h5>
                                                    <input type="text" class="form-control input-rounded @error('nama') is-invalid @enderror" name="nama">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Jabatan</h5>
                                                    <input type="text" class="form-control input-rounded @error('jabatan') is-invalid @enderror" name="jabatan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Devisi</h5>
                                                    <input type="text" class="form-control input-rounded @error('devisi') is-invalid @enderror" name="devisi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tanggal Pengajuan</h5>
                                                    <input type="date" class="form-control input-rounded @error('tanggal') is-invalid @enderror" name="tanggal">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-dark float-right">Generate</button>

                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="pt-4">
                                    <h4>Qr generate </h4>
                                    <br>
                                    <form action="{{ url('jneqr/persetujuan-izin') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tanggal Spl</h5>
                                                    <input type="date" class="form-control input-rounded @error('tanggal_spl') is-invalid @enderror" name="tanggal_spl">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Devisi</h5>
                                                    <input type="text" class="form-control input-rounded @error('devisi') is-invalid @enderror" name="devisi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Lokasi izin</h5>
                                                    <input type="text" class="form-control input-rounded @error('lokasi') is-invalid @enderror" name="lokasi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tanggal Persetujuan</h5>
                                                    <input type="date" class="form-control input-rounded @error('tanggal_izin') is-invalid @enderror" name="tanggal_izin">
                                                </div>
                                            </div>
                                        </div>


                                        <button class="btn btn-dark float-right">Generate</button>

                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <div class="pt-4">
                                    <h4>Qr generate </h4>
                                    <br>
                                    <form action="{{ url('jneqr/pengajuan-barang') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Nama</h5>
                                                    <input type="text" class="form-control input-rounded @error('nama') is-invalid @enderror" name="nama">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Jabatan</h5>
                                                    <input type="text" class="form-control input-rounded @error('jabatan') is-invalid @enderror" name="jabatan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Devisi</h5>
                                                    <input type="text" class="form-control input-rounded @error('devisi') is-invalid @enderror" name="devisi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tanggal pengajuan</h5>
                                                    <input type="date" class="form-control input-rounded @error('tanggal') is-invalid @enderror" name="tanggal">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-dark float-right">Generate</button>

                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="message">
                                <div class="pt-4">
                                    <h4>Qr generate </h4>
                                    <br>
                                    <form action="{{ url('jneqr/persetujuan-barang') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Nama</h5>
                                                    <input type="text" class="form-control input-rounded @error('tanggal_spb') is-invalid @enderror" name="tanggal_spb">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Jabatan</h5>
                                                    <input type="text" class="form-control input-rounded @error('jabatan') is-invalid @enderror" name="keperluan_devisi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Divisi</h5>
                                                    <input type="text" class="form-control input-rounded @error('divisi') is-invalid @enderror" name="lokasi_kantor">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tanggal Persetujuan</h5>
                                                    <input type="date" class="form-control input-rounded @error('tanggal_izin') is-invalid @enderror" name="tanggal_izin">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-dark float-right">Generate</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.kajur>