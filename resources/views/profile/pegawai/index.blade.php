<x-module.profile.pegawai>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> PROFILE
        </h5>
    </div>
    <br>
    <button onclick="goBack()" class="btn btn-sm btn-primary btn-tone"><i class="fas fa-arrow-left"></i>
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
                    @if ($pegawai->foto)
                    <img src="{{ url($pegawai->foto) }}" class="img-fluid" alt="">
                    @else
                    <img src="{{url('/')}}/images/profile.jpg" class="img-fluid" alt="">
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('profile/pegawai', $pegawai->id) }}/edit" class="btn btn-warning btn-tone btn-sm float-right mt-3 mb-3"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">DATA PEGAWAI</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row">
                                <dt class="col-2">NAMA LENGKAP</dt>
                                <dd class="col-10">: {{ $pegawai->nama }}</dd>
                                <dt class="col-2">NIP</dt>
                                <dd class="col-10">: {{ $pegawai->nip }}</dd>
                                <dt class="col-2">JENIS KELAMIN</dt>
                                <dd class="col-10">: {{ $pegawai->jenis_kelamin }}</dd>
                                <dt class="col-2">TEMPAT LAHIR</dt>
                                <dd class="col-10">: {{ $pegawai->tempat_lahir }}</dd>
                                <dt class="col-2">TANGGAL LAHIR</dt>
                                <dd class="col-10">: {{ $pegawai->tanggal_lahir_string }}</dd>
                                <dt class="col-2">USERNAMA</dt>
                                <dd class="col-10">: {{ $pegawai->username }}</dd>
                                <dt class="col-2">EMAIL</dt>
                                <dd class="col-10">: {{ $pegawai->email }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.profile.pegawai>