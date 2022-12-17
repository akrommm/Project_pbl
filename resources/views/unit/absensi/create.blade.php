<x-module.pegawai>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> UPLOAD REKAP ABSENSI
        </h5>
    </div>

    <a href="{{ url('unit/absensi') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('unit/absensi') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">UPLOAD FILE</label>
                            @if ($errors->has('file'))
                            <label for="" class="label text-danger">{{ $errors->get('file')[0] }}</label>
                            @endif
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">DATA ABSENSI BULAN</label>
                            <select name="bulan" id="" class="form-control">
                                <option value="">Pilih Bulan</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-tone float-right"><i class="fas fa-save"></i> Tambah Rekap</button>
            </form>
        </div>
    </div>
</x-module.pegawai>