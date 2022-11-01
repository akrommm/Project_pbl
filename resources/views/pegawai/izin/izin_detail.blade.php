<x-module.pegawai>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px"> Detail Pengajuan Izin
        </h5>
    </div>

    <a href="{{ url('pegawai/izin') }}" class="btn btn-dark btn-sm mt-4"><i class="fas fa-arrow-left"> Kembali</i></a>
    <div class="card">
        <div class="card-body">
            <form action="{{ url('pegawai/izin', $izin->id) }}" method="post">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <dt class="font-weight-bold">Nama Pengaju</dt>
                        <dd>{{ $izin->nama }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">NIP/NIK</dt>
                        <dd>{{ $izin->nip }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">Jabatan</dt>
                        <dd>{{ $izin->jabatan }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">Perihal</dt>
                        <dd>{{ $izin->perihal }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">Periode Izin</dt>
                        <dd>{{ $izin->dari_tanggal }} - {{ $izin->sampai_tanggal }}</dd>
                    </div>
                    <div class="col-md-6">
                        <dt class="font-weight-bold">Keterangan</dt>
                        <dd>{{ $izin->komen }}</dd>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group float-right">
                            <button class="btn btn-dark" name="status" value="2"><span class="fa fa-save"></span> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-module.pegawai>