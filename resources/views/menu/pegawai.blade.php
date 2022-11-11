<ul class="side-nav-menu scrollable ps-theme-dark">
    <br>
    <li class="font-weight-bold ml-3">Menu</li>
    <!-- <li class=" ml-3">Menu</li> -->
    <li class="nav-item">
        <a href=" {{ url('pegawai/beranda') }}">
            <span class="icon-holder">
                <i class="nav-icon fas fa-home"></i>
            </span>
            <span class="title">DASHBOARD</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="nav-icon fas fa-file-alt"></i>
            </span>
            <span class="title">ABSENSI</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li class="{{request()->is('pegawai/absensi') ? 'active' : ''}} ">
                <a href="{{ url('pegawai/absensi') }}"><i class="fas fa-clipboard-list"></i> REKAP ABSENSI</a>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="nav-icon fas fas fa-paper-plane"></i>
            </span>
            <span class="title">PENGAJUAN</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li class="{{request()->is('pegawai/izin') ? 'active' : ''}} ">
                <a href="{{ url('pegawai/izin') }}"><i class="fas fa-file-word"></i> PENGAJUAN IZIN</a>
            </li>
            <li class="{{request()->is('pegawai/sakit') ? 'active' : ''}} ">
                <a href="{{ url('pegawai/sakit') }}"><i class="fas fa-file-medical-alt"></i> PENGAJUAN SAKIT</a>
            </li>
        </ul>
    </li>
</ul>