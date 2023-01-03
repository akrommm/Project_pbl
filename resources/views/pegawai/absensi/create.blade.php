<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> REKAP ABSENSI
        </h5>
    </div>

    <a href="{{ url('pegawai/absensi') }}" class="btn btn-primary btn-tone btn-sm mt-4"><i class="fas fa-arrow-left"></i> Kembali</a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pegawai/absensi') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">NAMA </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" class="form-control" name="" readonly value="{{ auth()->user()->nama }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">NIP/NIK </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" class="form-control" name="" readonly value="{{ auth()->user()->nip }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">JABATAN </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <select class="form-control default-select" name="jabatan">
                                <option selected>Pilih Jabatan</option>
                                @foreach ($list_golongan as $golongan)
                                </option>
                                <option value="{{ $golongan->id }}">{{ $golongan->jabatan }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">DATA ABSENSI BULAN </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
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
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">JUMLAH HARI KERJA EFEKTIF </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="number" class="form-control" name="jumlah_kerja" placeholder="..hari">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">JUMLAH KEHADIRAN </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="number" class="form-control" name="jumlah_kehadiran" placeholder="..hari">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">JUMLAH ALFA </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="number" class="form-control" name="jumlah_alfa" placeholder="..hari">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">JUMLAH IZIN </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="number" class="form-control" name="jumlah_izin" placeholder="..hari">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="" class="control-label mt-3">JUMLAH SAKIT </label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="number" class="form-control" name="jumlah_sakit" placeholder="..hari">
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
                <br>
                <button type="submit" class="btn btn-primary btn-tone float-right"><i class="fas fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
</x-module.pegawai>