<ul class="side-nav-menu scrollable ps-theme-dark">
    <br>
    <li class="font-weight-bold ml-3">Menu</li>
    <li class="nav-item dropdown closed">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="fas fa-archive"></i>
            </span>
            <span class="title">MASTER DATA</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li class="{{request()->is('admin/master-data/pegawai') ? 'active' : ''}} ">
                <a href="{{ url('admin/master-data/pegawai') }}"><i class="far fa-user"></i> PEGAWAI</a>
            </li>
            <li class="{{request()->is('admin/master-data/module') ? 'active' : ''}} ">
                <a href="{{ url('admin/master-data/module') }}"><i class="far fa-clone"></i> MODULE</a>
            </li>
            <li class="{{request()->is('admin/master-data/unitkerja') ? 'active' : ''}} ">
                <a href="{{ url('admin/master-data/unitkerja') }}"><i class="fas fa-university"></i> UNIT KERJA</a>
            </li>
        </ul>
    </li>
</ul>