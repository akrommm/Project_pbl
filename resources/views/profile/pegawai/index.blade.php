<x-module.profile.pegawai>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> PROFILE
        </h5>
    </div>
    <br>
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
                        <div class="col-md-6">
                            <dt class="font-weight-bold">NAMA LENGKAP</dt>
                            <dd>{{ $pegawai->nama }}, {{ $pegawai->gelar_belakang }}</dd>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-bold">NIP/NIK</dt>
                            <dd>{{ $pegawai->nip }}</dd>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-bold">JENIS KELAMIN</dt>
                            <dd>{{ $pegawai->jenis_kelamin }}</dd>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-bold">TEMPAT LAHIR</dt>
                            <dd>{{ $pegawai->tempat_lahir }}</dd>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-bold">USERNAME</dt>
                            <dd>{{ $pegawai->username }}</dd>
                        </div>
                        <div class="col-md-6">
                            <dt class="font-weight-bold">EMAIL</dt>
                            <dd>{{ $pegawai->email }}</dd>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.profile.pegawai>