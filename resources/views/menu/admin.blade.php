<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-header font-weight-bold">Menu</li>
    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fa fa-archive"></i>
            <p class="font-weight-bold">
                Master Data
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <x-template.menu.menu-item title="Pegawai" url="admin/master-data/pegawai" icon="users" />
            <x-template.menu.menu-item title="Module" url="admin/master-data/module" icon="clone" />
        </ul>
    </li>
</ul>