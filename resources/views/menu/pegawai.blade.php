<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-header font-weight-bold">Menu</li>
    <li class="nav-item">
        <a href="{{ url('pegawai/beranda') }}" class="nav-link {{request()->is('pegawai/beranda') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Beranda
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('pegawai/kinerja') }}" class="nav-link {{request()->is('pegawai/kinerja') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-pencil-alt"></i>
            <p>
                Kinerja
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('pegawai/skp') }}" class="nav-link {{request()->is('pegawai/skp') ? 'active' : ''}} ">
            <i class="nav-icon far fa-file-alt"></i>
            <p>
                SKP
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('pegawai/absensi') }}" class="nav-link {{request()->is('pegawai/absensi') ? 'active' : ''}} ">
            <i class="nav-icon far fa-list-alt"></i>
            <p>
                Absensi
            </p>
        </a>
    </li>
</ul>