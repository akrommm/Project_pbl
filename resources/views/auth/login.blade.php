<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SITUKIN - Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('/')}}/assets/images/logo/favicon.png">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ url('/')}}/assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">
                <div class="col-lg-4 d-none d-lg-flex bg full-height" style="background-image:url('assets/images/others/wkwk.jpg')">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div>
                            <img src="{{ url('/')}}/assets/images/logo/logo1.png" alt="" width="175" height="47">
                        </div>
                        <div>
                            <h1 class="text-white m-b-20 font-weight-normal">Sistem Informasi Pembayaran Tukin Dan Uang Makan</h1>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span class="text-white">© 2022 Project Base Learning</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-12 col-xl-6 mx-auto">
                                <h2>Login</h2>
                                <form action="{{ url('/login') }}" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <x-template.utils.notif />
                                        </div>
                                    </div>
                                    @if (isset($message))
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @endif
                                    @csrf
                                    <div class="form-group" data-validate="Diperlukan User ID yang valid">
                                        <label class="font-weight-semibold" for="userid">User ID</label>
                                        <div class="input-affix">
                                            <i class="prefix-icon anticon anticon-user"></i>
                                            <input type="text" class="form-control" name="userid" placeholder="User ID">
                                        </div>
                                    </div>
                                    <div class="form-group" data-validate="Diperlukan Password">
                                        <label class="font-weight-semibold" for="password">Password:</label>
                                        <div class="input-affix m-b-10">
                                            <i class="prefix-icon anticon anticon-lock"></i>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button class="btn btn-primary">Sign In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Vendors JS -->
    <script src="{{ url('/')}}/assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{ url('/')}}/assets/js/app.min.js"></script>

</body>

</html>