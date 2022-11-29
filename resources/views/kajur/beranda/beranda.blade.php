<x-module.kajur>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="font-size: 30px"> SELAMAT DATANG, {{ auth()->user()->nama }},{{ auth()->user()->gelar_belakang }}
        </h5>
    </div>
    <div class="row mt-5">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-profile"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">{{$izin}}</h2>
                            <p class="m-b-0 text-muted">Pengajuan Izin Baru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-blue">
                            <i class="anticon anticon-profile"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">{{$sakit}}</h2>
                            <p class="m-b-0 text-muted">Pengajuan Cuti Baru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header" style="background-color: #ffff">
                    <div class="card-title float-center">
                        <h5 class="font-weight-bold" style="color:black;" style="font-size: 21px"> Deskripsi</h5>
                    </div>
                </div>
                <div class="card-body" style="background-color: #ffff">
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row" style="color:black;">
                                <dt class="col-2">Nama</dt>
                                <dd class="col-10">: {{ auth()->user()->nama }}</dd>
                                <dt class="col-2">NIP</dt>
                                <dd class="col-10">: {{ auth()->user()->nip }}</dd>
                                <dt class="col-2">Jabatan</dt>
                                <dd class="col-10">: {{ auth()->user()->jabatan }}</dd>
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
    </div>
</x-module.kajur>