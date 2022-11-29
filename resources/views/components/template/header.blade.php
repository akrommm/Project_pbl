<div class="header">
    <div class="logo logo-dark">
        <a href="">
            <img src="{{ url('/') }}/assets/images/logo/simantap1.png" alt="Logo" width="175" height="47" class="mt-2">
            <img class="logo-fold" src="{{ url('/') }}/assets/images/logo/simantap3.png" alt="Logo" width="70" height="57" class="">
        </a>
    </div>
    <div class="logo logo-white">
        <a href="index.html">
            <img src="{{ url('/') }}/assets/images/logo/logo-white.png" alt="Logo">
            <img class="logo-fold" src="{{ url('/') }}/assets/images/logo/logo-fold-white.png" alt="Logo">
        </a>
    </div>
    <div class="nav-wrap">
        <ul class="nav-left">
            <li class="desktop-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <li class="mobile-toggle">
                <a href="javascript:void(0);">
                    <i class="anticon"></i>
                </a>
            </li>
            <div class="sidebar-header font-weight-bold" style="display: block;background-color: #fff;color: #2A2A2A;width: 100%;padding: 0 20px;padding-left: 20px;clear: both;z-index: 10;position: relative;text-align:center;font-size: 16px;">
                SIMANTAP {{ $header }}
            </div>
        </ul>
        <ul class="nav-right">
            <li class="dropdown dropdown-animated scale-left" style="padding-left: 20px;">
                <div class="pointer" data-toggle="dropdown">
                    <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                        <span class="semi-bold">
                            @if (auth()->check())
                            Hallo, {{ auth()->user()->nama }}
                            @endif
                        </span>
                        <i class="anticon anticon-down"></i>
                    </div>
                </div>
                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                    <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                        <div class="d-flex m-r-25">
                            <div class="m-l-10">
                                <p class="m-b-0 text-dark font-weight-semibold">
                                    @if (auth()->check())
                                    {{ auth()->user()->nama }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('profile/pegawai') }}" class="dropdown-item d-block p-h-15 p-v-10">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                <span class="m-l-10">Edit Profile</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                    <a href="{{ url('logout') }}" class="dropdown-item d-block p-h-15 p-v-10">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                <span class="m-l-10">Logout</span>
                            </div>
                            <i class="anticon font-size-10 anticon-right"></i>
                        </div>
                    </a>
                </div>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                    <i class="anticon anticon-appstore"></i>
                </a>
            </li>
        </ul>
    </div>
</div>