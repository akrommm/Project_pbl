<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-header font-weight-bold">Menu</li>
    <li class="nav-item">
        <a href="{{ url('kajur/beranda') }}" class="nav-link {{request()->is('kajur/beranda') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Beranda
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('kajur/kinerja') }}" class="nav-link {{request()->is('kajur/kinerja') ? 'active' : ''}} ">
            <i class="nav-icon fas fa-pencil-alt"></i>
            <p>
                Kinerja
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('kajur/skp') }}" class="nav-link {{request()->is('kajur/skp') ? 'active' : ''}} ">
            <i class="nav-icon far fa-file-alt"></i>
            <p>
                SKP
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('kajur/absensi') }}" class="nav-link {{request()->is('kajur/absensi') ? 'active' : ''}} ">
            <i class="nav-icon far fa-list-alt"></i>
            <p>
                Absensi
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('kajur/sakit') }}" class="nav-link {{request()->is('kajur/sakit') ? 'active' : ''}} ">
            <i class="nav-icon far fa-file-alt"></i>
            <p>
                Pengajuan Sakit
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ url('kajur/izin') }}" class="nav-link {{request()->is('kajur/izin') ? 'active' : ''}} ">
            <i class="nav-icon far fa-file-alt"></i>
            <p>
                Pengajuan Izin
            </p>
        </a>
    </li>
</ul>