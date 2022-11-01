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
            <x-template.menu.menu-item title="Pengajuan Izin" url="kajur/izin" icon="file-alt" />
            <x-template.menu.menu-item title="Pengajuan Sakit" url="kajur/sakit" icon="file-alt" />
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="nav-icon fas fa-qrcode"></i>
            </span>
            <span class="title">QR Generator</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <x-template.menu.menu-item title="New-QR" url="kajur/qr" icon="file-alt" />
        </ul>
    </li>
</ul>