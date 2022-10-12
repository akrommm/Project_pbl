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
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Pegawai</label>
                    <input type="text" name="nama" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="exampleFormControlInput1">
                </div>
                <fieldset class="row mb-3">
                    <div class="col-sm-10" name="status">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="ASN">
                            <label class="form-check-label" for="inlineCheckbox1">ASN</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No-ASN">
                            <label class="form-check-label" for="inlineCheckbox2">No-ASN</label>
                        </div>
                    </div>
                </fieldset>
                <label for="exampleFormControlTextarea1" class="form-label">Jumlah Kehadiran</label>
                <div class="">
                    <input type="number" name="jumlah_kehadiran" class="form-control col-md-1" id="exampleFormControlInput1">
                </div>
                <label for="exampleFormControlTextarea1" class="form-label">Jumlah Sakit</label>
                <div class="">
                    <input type="number" name="jumlah_sakit" class="form-control col-md-1" id="exampleFormControlInput1">
                </div>
                <label for="exampleFormControlTextarea1" class="form-label">Jumlah Izin</label>
                <div class="">
                    <input type="number" name="jumlah_izin" class="form-control col-md-1" id="exampleFormControlInput1">
                </div>
                <label for="exampleFormControlTextarea1" class="form-label">Jumlah Libur</label>
                <div class="mb-5">
                    <input type="number" name="jumlah_libur" class="form-control col-md-1" id="exampleFormControlInput1">
                </div>
                <button type="submit" class="btn btn-dark float-right">Tambah Rekap</button>
            </form>
        </div>
    </div>
</x-module.pegawai>