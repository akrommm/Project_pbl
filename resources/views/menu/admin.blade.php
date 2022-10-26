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
            <x-template.menu.menu-item title="Pegawai" url="admin/master-data/pegawai" icon="users" />
            <x-template.menu.menu-item title="Module" url="admin/master-data/module" icon="clone" />
            <x-template.menu.menu-item title="Unit Kerja" url="admin/master-data/unitkerja" icon="university" />
        </ul>
    </li>
</ul>