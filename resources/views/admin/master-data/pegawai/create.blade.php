<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> TAMBAH DATA PEGAWAI
        </h5>
    </div>
    <br>
    <x-template.button.back-button url="admin/master-data/pegawai" />
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Tambah Data Pegawai
            </div>
        </div>
        <div class="card-body">
            <form action="{{ url('admin/master-data/pegawai') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIP</label>
                            @if ($errors->has('nip'))
                            <label for="" class="label text-danger">{{ $errors->get('nip')[0] }}</label>
                            @endif
                            <input type="number" name="nip" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Nama Lengkap</label>
                            @if ($errors->has('nama'))
                            <label for="" class="label text-danger">{{ $errors->get('nama')[0] }}</label>
                            @endif
                            <input type="text" name="nama" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">NIK</label>
                            @if ($errors->has('nik'))
                            <label for="" class="label text-danger">{{ $errors->get('nik')[0] }}</label>
                            @endif
                            <input type="number" name="nik" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label">Email</label>
                            @if ($errors->has('email'))
                            <label for="" class="label text-danger">{{ $errors->get('email')[0] }}</label>
                            @endif
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Gelar Depan</label>
                            @if ($errors->has('gelar_depan'))
                            <label for="" class="label text-danger">{{ $errors->get('gelar_depan')[0] }}</label>
                            @endif
                            <input type="number" name="gelar_depan" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Gelar Belakang</label>
                            @if ($errors->has('gelar_belakang'))
                            <label for="" class="label text-danger">{{ $errors->get('gelar_belakang')[0] }}</label>
                            @endif
                            <input type="text" name="gelar_belakang" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Agama</label>
                            @if ($errors->has('agama'))
                            <label for="" class="label text-danger">{{ $errors->get('agama')[0] }}</label>
                            @endif
                            <select name="agama" class="form-control">
                                <option disabled selected>Pilih Opsi</option>
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
                            @if ($errors->has('jenis_kelamin'))
                            <label for="" class="label text-danger">{{ $errors->get('jenis_kelamin')[0] }}</label>
                            @endif
                            <select name="jenis_kelamin" class="form-control">
                                <option disabled selected>Pilih opsi</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Username</label>
                            @if ($errors->has('username'))
                            <label for="" class="label text-danger">{{ $errors->get('username')[0] }}</label>
                            @endif
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Tempat Lahir</label>
                            @if ($errors->has('tempat_lahir'))
                            <label for="" class="label text-danger">{{ $errors->get('tempat_lahir')[0] }}</label>
                            @endif
                            <input type="text" name="tempat_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Tanggal Lahir</label>
                            @if ($errors->has('tanggal_lahir'))
                            <label for="" class="label text-danger">{{ $errors->get('tanggal_lahir')[0] }}</label>
                            @endif
                            <input type="date" name="tanggal_lahir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="control-label">Jabatan</label>
                            @if ($errors->has('jabatan'))
                            <label for="" class="label text-danger">{{ $errors->get('jabatan')[0] }}</label>
                            @endif
                            <select name="jabatan" class="form-control">
                                <option disabled selected>Pilih Jabatan</option>
                                <option value="Ketua Jurusan">Ketua Jurusan</option>
                                <option value="Sekretaris Jurusan">Sekretaris Jurusan</option>
                                <option value="Koordinator Prodi">Koordinator Prodi</option>
                                <option value="Kepala Lab">Kepala Lab</option>
                                <option value="Dosen">Dosen</option>
                                <option value="Administrasi">Administrasi</option>
                                <option value="Teknisi Laboratorium">Teknisi Laboratorium</option>
                                <option value="Teknisi">Teknisi</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="control-label">Foto</label>
                        @if ($errors->has('foto'))
                        <label for="" class="label text-danger">{{ $errors->get('foto')[0] }}</label>
                        @endif
                        <input type="file" name="foto" accept=".jpg, .png, .jpeg" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Password</label>
                            @if ($errors->has('password'))
                            <label for="" class="label text-danger">{{ $errors->get('password')[0] }}</label>
                            @endif
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
</x-module.admin>