<x-module.profile.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Edit Profile
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
                    <div class="card-title">
                        Edit Data Pegawai
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('profile/pegawai', $pegawai->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">NIP</label>
                                    <p class="form-control">{{ $pegawai->nip }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nama Lengkap</label>
                                    <p class="form-control">{{ $pegawai->nama }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Status</label>
                                    <p class="form-control">{{ $pegawai->status_pegawai }}</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Agama</label>
                                    <select name="agama" class="form-control" required>
                                        <option selected>{{ $pegawai->agama }}</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" required>
                                        <option selected>{{ $pegawai->jenis_kelamin }}</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" value="{{ $pegawai->tempat_lahir }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pegawai->tanggal_lahir }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="" class="control-label">No. Handphone</label>
                                    <input type="number" name="no_hp" class="form-control" value="{{ $pegawai->no_hp }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Foto</label>
                                    <input type="file" name="foto" accept=".jpg, .png, .jpeg" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Username</label>
                                    <p class="form-control">{{ $pegawai->username }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $pegawai->email }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-dark float-right"><i class="far fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-module.profile.pegawai>