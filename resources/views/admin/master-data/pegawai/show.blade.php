<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Detail Pegawai
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/master-data/pegawai" />
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
                    <a href="{{ url('admin/master-data/pegawai', $pegawai->id) }}/edit" class="btn btn-dark btn-sm float-right"><i class="fas fa-edit"></i> Edit</a>
                    <div class="card-title">
                        Detail Pegawai
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4">Nama Lengkap</dt>
                                <dd class="col-md-8">: {{ $pegawai->nama }}</dd>
                                <dt class="col-md-4">NIP</dt>
                                <dd class="col-md-8">: {{ $pegawai->nip }}</dd>
                                <dt class="col-md-4">Status</dt>
                                <dd class="col-md-8">: {{ $pegawai->status_pegawai }}</dd>
                                <dt class="col-md-4">Jenis Kelamin</dt>
                                <dd class="col-md-8">: {{ $pegawai->jenis_kelamin }}</dd>
                                <dt class="col-md-4">Tempat Lahir</dt>
                                <dd class="col-md-8">: {{ $pegawai->tempat_lahir }}</dd>
                            </dl>
                        </div>
                        <div class="col-md-6">
                            <dl class="row">
                                <dt class="col-md-4">Tanggal Lahir</dt>
                                <dd class="col-md-8">: {{ $pegawai->tanggal_lahir_string }}</dd>
                                <dt class="col-md-4">Agama</dt>
                                <dd class="col-md-8">: {{ $pegawai->agama }}</dd>
                                <dt class="col-md-4">Username</dt>
                                <dd class="col-md-8">: {{ $pegawai->username }}</dd>
                                <dt class="col-md-4">Email</dt>
                                <dd class="col-md-8">: {{ $pegawai->email }}</dd>
                                <dt class="col-md-4">No. Handphone</dt>
                                <dd class="col-md-8">: {{ $pegawai->no_hp }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>