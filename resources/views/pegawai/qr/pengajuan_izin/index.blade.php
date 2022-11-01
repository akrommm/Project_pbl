<x-module.pegawai>
    <h1>Generate Tanda tangan digital</h1>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sistem generate tandda tangan digital</h4>
                </div>
                <div class="card-body">
                    <!-- Nav tabs -->
                    <div class="default-tab">
                        <ul class="nav nav-tabs" role="tablist">
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
                                    <form action="{{ url('jneqr/pengajuan-lembur') }}" method="post">
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
                                                    @include('utils.errors', ['item' => 'jabatan'])

                                                    <input type="text" class="form-control input-rounded @error('jabatan') is-invalid @enderror" name="jabatan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Devisi</h5>
                                                    @include('utils.errors', ['item' => 'devisi'])

                                                    <input type="text" class="form-control input-rounded @error('devisi') is-invalid @enderror" name="devisi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tanggal pengajuan</h5>
                                                    @include('utils.errors', ['item' => 'tanggal'])

                                                    <input type="date" class="form-control input-rounded @error('tanggal') is-invalid @enderror" name="tanggal">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-info float-right">Generate</button>

                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile">
                                <div class="pt-4">
                                    <h4>Qr generate </h4>
                                    <br>
                                    <form action="{{ url('jneqr/persetujuan-lembur') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tanggal Spl</h5>
                                                    @include('utils.errors', ['item' => 'tanggal_spl'])

                                                    <input type="date" class="form-control input-rounded @error('tanggal_spl') is-invalid @enderror" name="tanggal_spl">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Devisi</h5>
                                                    @include('utils.errors', ['item' => 'devisi'])

                                                    <input type="text" class="form-control input-rounded @error('devisi') is-invalid @enderror" name="devisi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Lokasi Lembur</h5>
                                                    @include('utils.errors', ['item' => 'lokasi'])

                                                    <input type="text" class="form-control input-rounded @error('lokasi') is-invalid @enderror" name="lokasi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tanggal Lembur</h5>
                                                    @include('utils.errors', ['item' => 'tanggal_lembur'])

                                                    <input type="date" class="form-control input-rounded @error('tanggal_lembur') is-invalid @enderror" name="tanggal_lembur">
                                                </div>
                                            </div>
                                        </div>


                                        <button class="btn btn-info float-right">Generate</button>

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
                                                    @include('utils.errors', ['item' => 'nama'])

                                                    <input type="text" class="form-control input-rounded @error('nama') is-invalid @enderror" name="nama">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Jabatan</h5>
                                                    @include('utils.errors', ['item' => 'jabatan'])

                                                    <input type="text" class="form-control input-rounded @error('jabatan') is-invalid @enderror" name="jabatan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Devisi</h5>
                                                    @include('utils.errors', ['item' => 'devisi'])

                                                    <input type="text" class="form-control input-rounded @error('devisi') is-invalid @enderror" name="devisi">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Tanggal pengajuan</h5>
                                                    @include('utils.errors', ['item' => 'tanggal'])

                                                    <input type="date" class="form-control input-rounded @error('tanggal') is-invalid @enderror" name="tanggal">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Jenis Permohonan Barang</h5>
                                                    @include('utils.errors', ['item' => 'barang'])

                                                    <input type="text" class="form-control input-rounded @error('barang') is-invalid @enderror" name="barang">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-info float-right">Generate</button>

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
                                                    <h5>Tanggal Spb</h5>
                                                    @include('utils.errors', ['item' => 'tanggal_spb'])

                                                    <input type="date" class="form-control input-rounded @error('tanggal_spb') is-invalid @enderror" name="tanggal_spb">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Keperluan Devisi</h5>
                                                    @include('utils.errors', ['item' => 'keperluan_devisi'])

                                                    <input type="text" class="form-control input-rounded @error('keperluan_devisi') is-invalid @enderror" name="keperluan_devisi">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Lokasi Kantor</h5>
                                                    @include('utils.errors', ['item' => 'lokasi_kantor'])

                                                    <input type="text" class="form-control input-rounded @error('lokasi_kantor') is-invalid @enderror" name="lokasi_kantor">
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-info float-right">Generate</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.pegawai>