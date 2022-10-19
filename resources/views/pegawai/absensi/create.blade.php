<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Tambah Rekap Absensi
        </h5>
    </div>

    <a href="{{ url('pegawai/absensi') }}" class="btn btn-dark btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pegawai/absensi') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Jabatan</label>
                            @if ($errors->has('jabatan'))
                            <label for="" class="label text-danger">{{ $errors->get('jabatan')[0] }}</label>
                            @endif
                            <input type="text" name="jabatan" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Data Absensi Bulan</label>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <fieldset class="row mb-0">
                                <div class="col-sm-10" name="status">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="status" value="ASN">
                                        <label class="form-check-label" for="inlineCheckbox1">ASN</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="status" value="No-ASN">
                                        <label class="form-check-label" for="inlineCheckbox2">No-ASN</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Kehadiran</label>
                            @if ($errors->has('jumlah_kehadiran'))
                            <label for="" class="label text-danger">{{ $errors->get('jumlah_kehadiran')[0] }}</label>
                            @endif
                            <input type="number" name="jumlah_kehadiran" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Izin</label>
                            @if ($errors->has('jumlah_izin'))
                            <label for="" class="label text-danger">{{ $errors->get('jumlah_izin')[0] }}</label>
                            @endif
                            <input type="number" name="jumlah_izin" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Sakit</label>
                            @if ($errors->has('jumlah_sakit'))
                            <label for="" class="label text-danger">{{ $errors->get('jumlah_sakit')[0] }}</label>
                            @endif
                            <input type="number" name="jumlah_sakit" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="control-label">Jumlah Libur</label>
                            @if ($errors->has('jumlah_libur'))
                            <label for="" class="label text-danger">{{ $errors->get('jumlah_libur')[0] }}</label>
                            @endif
                            <input type="number" name="jumlah_libur" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <label for="exampleFormControlTextarea1" class="form-label">Jumlah Kehadiran</label>
                        <div class="">
                            <input type="number" name="jumlah_kehadiran" class="form-control col-md-1" id="exampleFormControlInput1">
                        </div>
                        <label for="exampleFormControlTextarea1" class="form-label">Jumlah Sakit</label>
                        <div class="">
                            <input type="number" name="jumlah_sakit" class="form-control col-md-1" id="exampleFormControlInput1">
                        </div>
                    </div>
                </div>
                <label for="exampleFormControlTextarea1" class="form-label">Jumlah Izin</label>
                <div class="">
                    <input type="number" name="jumlah_izin" class="form-control col-md-1" id="exampleFormControlInput1">
                </div>
                <label for="exampleFormControlTextarea1" class="form-label">Jumlah Libur</label>
                <div class="mb-5">
                    <input type="number" name="jumlah_libur" class="form-control col-md-1" id="exampleFormControlInput1">
                </div> -->
                <button type="submit" class="btn btn-dark float-right">Tambah Rekap</button>
            </form>
        </div>
    </div>
</x-module.pegawai>