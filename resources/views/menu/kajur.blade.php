<ul class="side-nav-menu scrollable ps-theme-dark">
    <br>
    <li class="font-weight-bold ml-3">Menu</li>
    <!-- <li class=" ml-3">Menu</li> -->
    <li class="nav-item">
        <a href=" {{ url('kajur/beranda') }}">
            <span class="icon-holder">
                <i class="nav-icon fas fa-home"></i>
            </span>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="nav-icon fas fa-file-alt"></i>
            </span>
            <span class="title">Absensi</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <x-template.menu.menu-item title="Rekap Absensi" url="kajur/absensi" icon="file-alt" />
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="nav-icon fas fa-paper-plane"></i>
            </span>
            <span class="title">Pengajuan</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li class="{{request()->is('kajur/izin') ? 'active' : ''}} ">
                <a href="{{ url('kajur/izin') }}"><i class="fas fa-file-import"></i> Pengajuan Baru</a>
            </li>
            <li class="{{request()->is('kajur/pengajuan-aktif') ? 'active' : ''}} ">
                <a href="{{ url('kajur/pengajuan-aktif') }}"><i class="fas fa-clock"></i> Pengajuan Aktif</a>
            </li>
            <li class="{{request()->is('kajur/pengajuan-selesai') ? 'active' : ''}} ">
                <a href="{{ url('kajur/pengajuan-selesai') }}"><i class="fas fa-check-circle"></i> Pengajuan Selesai</a>
            </li>
        </ul>
    </li>
</ul>