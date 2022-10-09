<x-module.profile.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Profile
        </h5>
    </div>
    <br>
    <button onclick="goBack()" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left"></i>
        Kembali</button>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <img src="{{ url($pegawai->foto) }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('profile/pegawai', $pegawai->id) }}/edit" class="btn btn-dark btn-sm float-right"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">Detail Pegawai</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row">
                                <dt class="col-2">Nama Lengkap</dt>
                                <dd class="col-10">: {{ $pegawai->nama }}</dd>
                                <dt class="col-2">NIP</dt>
                                <dd class="col-10">: {{ $pegawai->nip }}</dd>
                                <dt class="col-2">Status</dt>
                                <dd class="col-10">: {{ $pegawai->status_pegawai }}</dd>
                                <dt class="col-2">Jenis Kelamin</dt>
                                <dd class="col-10">: {{ $pegawai->jenis_kelamin }}</dd>
                                <dt class="col-2">Tempat Lahir</dt>
                                <dd class="col-10">: {{ $pegawai->tempat_lahir }}</dd>
                                <dt class="col-2">Tanggal Lahir</dt>
                                <dd class="col-10">: {{ $pegawai->tanggal_lahir_string }}</dd>
                                <dt class="col-2">Agama</dt>
                                <dd class="col-10">: {{ $pegawai->agama }}</dd>
                                <dt class="col-2">Username</dt>
                                <dd class="col-10">: {{ $pegawai->username }}</dd>
                                <dt class="col-2">Email</dt>
                                <dd class="col-10">: {{ $pegawai->email }}</dd>
                                <dt class="col-2">No. Handphone</dt>
                                <dd class="col-10">: {{ $pegawai->no_hp }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.profile.pegawai>