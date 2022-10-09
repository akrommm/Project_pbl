<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('/') }}/dist/img/Politap.jpg" alt="Logo" class="brand-image mb-0" style="opacity: .8">
        <span class="brand-text font-weight-bold"> SiTukiman</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-3 mb-3 d-flex">
            <nav class="mt-2 ml-3">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-header brand-text font-weight-bold">Si Tukiman | {{ $title }}</li>
                </ul>
            </nav>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            @include($menu)
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>