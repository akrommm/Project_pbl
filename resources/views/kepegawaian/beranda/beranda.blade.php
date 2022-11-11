<x-module.kepegawaian>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="font-size: 30px"> SELAMAT DATANG, {{ auth()->user()->nama }},{{ auth()->user()->gelar_belakang }}
        </h5>
    </div>

    <div class="row mt-5">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="card">
                <div class="card-body">
                    <div class="media align-items-center">
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-profile"></i>
                        </div>
                        <div class="m-l-15">
                            <h2 class="m-b-0">5</h2>
                            <p class="m-b-0 text-muted">Pengajuan Baru</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.kepegawaian>