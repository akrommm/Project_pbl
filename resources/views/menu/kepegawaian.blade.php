<ul class="side-nav-menu scrollable ps-theme-dark">
    <br>
    <li class="font-weight-bold ml-3">Menu</li>
    <!-- <li class=" ml-3">Menu</li> -->
    <li class="nav-item">
        <a href=" {{ url('kepegawaian/beranda') }}">
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
            <x-template.menu.menu-item title="REKAP ABSENSI" url="kepegawaian/absensi" icon="file-alt" />
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="nav-icon fas fa-paper-plane"></i>
            </span>
            <span class="title">PENGAJUAN</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li class="{{request()->is('kepegawaian/izin') ? 'active' : ''}} ">
                <a href="{{ url('kepegawaian/izin') }}"><i class="fas fa-file-import"></i> PENGAJUAN MASUK</a>
            </li>
            <li class="{{request()->is('kepegawaian/pengajuan-selesai') ? 'active' : ''}} ">
                <a href="{{ url('kepegawaian/pengajuan-selesai') }}"><i class="fas fa-check-circle"></i> PENGAJUAN SELESAI</a>
            </li>
        </ul>
    </li>
</ul>