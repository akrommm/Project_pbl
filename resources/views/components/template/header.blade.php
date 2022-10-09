<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links  -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <div class="d-flex align-items-center">
            <div class="float-left p-r-10 fs-10 font-heading d-lg-block d-none">
                <span class="semi-bold">
                    @if (auth()->check())
                    {{ auth()->user()->nama }}
                    @endif
                </span>
            </div>
            <li class="nav-item dropdown">
                <a class="nav-link mb-2" data-toggle="dropdown" href="#">
                    @if (auth()->user()->foto)
                    <img src="{{ url(auth()->user()->foto) }}" alt="User Avatar" height="33px" width="33px" class="img-circle">
                    @else
                    <i class="fas fa-user-alt"></i>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu" x-placement="top-end" style="position: absolute; transform: translate3d(-10px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="dropdown-item dropdown-profile-pic" href="#" style="display:table-cell; vertical-align:middle; text-align:center">
                        <img src="{{ url(auth()->user()->foto) }}" height="150px" width="150px" class="img-circle">
                        <p class="text-center mt-3 m-t-10 m-b-20">{{ auth()->user()->nama }}</p>
                    </div>
                    <a class="dropdown-item" href="{{ url('profile/pegawai') }}">
                        <span class="pull-left">Profile</span>
                        <span class="float-right"><i class="fas fa-user"></i></span>
                    </a>
                    <a class="clearfix bg-master-lighter dropdown-item mt-2" href="{{url('logout')}}">
                        <span class="pull-left">Logout</span>
                        <span class="float-right"><i class="fas fa-sign-out-alt"></i></span>
                    </a>
                </div>
                <!-- <div class="dropdown-menu  dropdown-menu-right">
                    <a href="{{ url('profile/pegawai') }}" class="dropdown-item">
                        <i class="fa fa-user"></i> Profile
                    </a>
                    <a href="{{url('setting')}}" class="dropdown-item">
                        <i class="fa fa-cog"></i> Setting
                    </a>
                    <a href="{{url('logout')}}" class="dropdown-item">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div> -->
            </li>
            <a class="nav-link" data-widget="control-sidebar" data-slide="false" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </div>
    </ul>
</nav>
<div class="dropdown-menu dropdown-menu-right::before"></div>