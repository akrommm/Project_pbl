<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="font-size: 30px"> Selamat Datang, {{ auth()->user()->nama }}</h5>
    </div>

    <div class="row mt-5">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>89.9<sup style="font-size: 20px">%</sup></h3>

                    <p>Absensi</p>
                </div>
                <div class="icon">
                    <i class="far fa-calendar-alt"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Rp. 200.000</h3>

                    <p>Tunjangan Kinerja</p>
                </div>
                <div class="icon">
                    <i class="fas fa-wallet"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Rp. 200.000</h3>

                    <p>Uang Makan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-money-bill-wave"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <div class="card-title float-center">
                    <h5 class="font-weight-bold text-dark " style="font-size: 21px"> Deskripsi</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <dl class="row">
                            <dt class="col-2">Nama Lengkap</dt>
                            <dd class="col-10">: {{ auth()->user()->nama }}</dd>
                            <dt class="col-2">NIP</dt>
                            <dd class="col-10">: {{ auth()->user()->nip }}</dd>
                            <dt class="col-2">Kelas Jabatan</dt>
                            <dd class="col-10">: Mentri</dd>
                            <!-- <dt class="col-2">Jenis Kelamin</dt>
                            <dd class="col-10">: </dd>
                            <dt class="col-2">Tempat Lahir</dt>
                            <dd class="col-10">: </dd> -->
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.pegawai>