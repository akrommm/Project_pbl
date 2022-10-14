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
                <span class="semi-bold" style="font:Segue Ui;">
                    Halo, @if (auth()->check())
                    {{ auth()->user()->nama }}
                    @endif
                </span>
            </div>
            <div class="dropdown pull-right">
                <button aria-expanded="false" aria-haspopup="true" class="profile-dropdown-toggle" style="display:table-cell; vertical-align:middle; text-align:center" data-toggle="dropdown" type="button">
                    <span class="thumbnail-wrapper d32 circular inline">
                        @if (auth()->user()->foto)
                        <img height="33" width="33" src="{{ url(auth()->user()->foto) }}" style="object-fit: cover; object-position: 0px 10%;">
                        @else
                        <img height="33" width="33" src="https://simadu.politap.ac.id/assets/img/template/default-person.jpg" style="object-fit: cover; object-position: 0px 10%;">
                        @endif
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu" x-placement="top-end" style="position: absolute; transform: translate3d(-1px, 38px, 0px); top: 0px; left: 0px; will-change: transform;">
                    <div class="dropdown-item dropdown-profile-pic" href="#" style="display:table-cell; vertical-align:middle; text-align:center">
                        @if (auth()->user()->foto)
                        <img src="{{ url(auth()->user()->foto) }}" height="150px" width="150px" class="img-circle mb-2">
                        @else
                        <img src="https://simadu.politap.ac.id/assets/img/template/default-person.jpg" height="150px" width="150px" class="img-circle mb-2">
                        @endif
                        <p class="text-center m-t-10 m-b-20">{{ auth()->user()->nama }}</p>
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
            </div>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link thumbnail-wrapper d32 circular inline" data-toggle="dropdown" href="#">
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
            </li> -->

            <a class="nav-link" data-widget="control-sidebar" data-slide="false" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </div>
    </ul>
</nav>
<div class="dropdown-menu dropdown-menu-right::before"></div>