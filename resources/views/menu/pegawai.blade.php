<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-header font-weight-bold">Menu</li>
    <li class="nav-item">
        <a href="{{ url('pegawai/beranda') }}" class="nav-link {{request()->is('pegawai/beranda') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-home"></i>
            <p class="font-weight-bold">
                Beranda
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-line"></i>
            <p class="font-weight-bold">
                Kinerja
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <x-template.menu.menu-item title="Tukin" url="pegawai/tukin" icon="money-bill-wave" />
            <x-template.menu.menu-item title="Skp" url="pegawai/skp" icon="file-alt" />
        </ul>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-alt"></i>
            <p class="font-weight-bold">
                Absensi
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <x-template.menu.menu-item title="Rekap Absensi" url="pegawai/absensi" icon="file-alt" />
            <x-template.menu.menu-item title="Pengajuan Izin" url="pegawai/izin" icon="file-alt" />
            <x-template.menu.menu-item title="Pengajuan Sakit" url="pegawai/sakit" icon="file-alt" />
        </ul>
    </li>
</ul>