<x-module.unit>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="font-size: 30px"> SELAMAT DATANG, {{ auth()->user()->nama }}, {{ auth()->user()->gelar_belakang }}
        </h5>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header" style="background-color: #ffff">
                    <div class="card-title float-center">
                        <h5 class="font-weight-bold" style="color:black;" style="font-size: 21px"> DESKRIPSI</h5>
                    </div>
                </div>
                <div class="card-body" style="background-color: #ffff">
                    <div class="row">
                        <div class="col-md-12">
                            <dl class="row" style="color:black;">
                                <dt class="col-2">NAMA</dt>
                                <dd class="col-10">: {{ auth()->user()->nama }}, {{ auth()->user()->gelar_belakang}}</dd>
                                <dt class="col-2">NIP</dt>
                                <dd class="col-10">: {{ auth()->user()->nip }}</dd>
                                <dt class="col-2">UNIT KERJA</dt>
                                <dd class="col-10">: {{ auth()->user()->unitkerja->nama_unit }}</dd>
                                <dt class="col-2">JABATAN</dt>
                                <dd class="col-10">: {{ auth()->user()->jabatan }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.unit>