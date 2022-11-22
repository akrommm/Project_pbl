<x-module.admin>
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                DATA PEGAWAI UNIT KERJA {{ $unitkerja->nama_unit }}
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ url('admin/master-data/unitkerja/add-unit') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="id_unitkerja" value="{{ $unitkerja->id }}">
                                <div class="form-group">
                                    <label for="" class="control-label">PEGAWAI</label>
                                    <select class="select2" name="id_pegawai" style="width: 100%;">
                                        <option selected="selected">Pilih Nama Pegawai</option>
                                        @foreach ($list_pegawai as $pegawai)
                                        <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                        @endforeach
                                    </select>
                                    <!-- <select name="id_pegawai" class="form-control">
                                    @foreach ($list_pegawai as $pegawai)
                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
                                    @endforeach
                                    </select> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">JABATAN</label>
                                    <select class="select2" name="jabatan" style="width: 100%;">
                                        <option selected="selected">Pilih Jabatan</option>
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
                        <div class="form-group">
                            <button class="btn btn-dark float-right"><i class="far fa-save"></i> Tambah</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <br>
                    <table id="data-table" class="table table-datatable table-bordered">
                        <thead class="bg-dark">
                            <th class="text-center" style="color: white;" width="10px">NO</th>
                            <th class="text-center" style="color: white;" width="100px">AKSI</th>
                            <th class="text-center" style="color: white;">NAMA PEGAWAI</th>
                            <th class="text-center" style="color: white;">JABATAN</th>
                        </thead>
                        <tbody>
                            @foreach ($unitkerja->unitdetail as $unitdetail)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ url('admin/master-data/unitkerja/delete-unit', $unitdetail->id) }}" class="btn btn-danger btn-tone"><i class="fas fa-trash"></i> Hapus</a>
                                    </div>
                                </td>
                                <td>{{ $unitdetail->pegawai->nama }}, {{ $unitdetail->pegawai->gelar_belakang }}</td>
                                <td class="text-center">{{ $unitdetail->jabatan }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>