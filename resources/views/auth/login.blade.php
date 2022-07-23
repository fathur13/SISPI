<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSPI | LogIn</title>
    <link rel="icon" href="{{ url('public/assets') }}/img/Logo_Politap_kecil.png" />


    <!-- Custom fonts for this template-->
    <link href="{{ url('public/assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('public/assets') }}/css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
    body {
        background-image: url("{{ url('public/assets') }}/img/abstract-blue-geometric-shapes-background_1035-17545.webp");
        background-size: cover;
    }
</style>

<body>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        @if (isset($message))
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @endif
                        <form action="{{ url('/login') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6"><img src="{{ url('public/assets') }}/img/login.jpg" alt="" style="height: 100%">
                                </div>
                                <div class="col-lg-6" style="padding-left: 40px">
                                    <div class="p-5">
                                        <div class="text-center text-gray-900">
                                            <h3>Selamat Datang !</h3>
                                            <h6>Di Aplikasi Sistem Satuan Pengawas Internal</h6><br>
                                        </div>
                                        <form class="user">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user"
                                                    name="userid" placeholder="User ID" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"
                                                    class="form-control form-control-user" placeholder="Password"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="remember"
                                                        name="remember">
                                                    <label class="custom-control-label" for="rememberch">Ingat
                                                        Saya</label>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block"
                                                style="margin-bottom: 10px">
                                                Masuk
                                            </button>

                                            <a href="{{ url('lapor') }}"><button type="button"
                                                    class="btn btn-secondary btn-user btn-block">
                                                    Lanjutkan Ke Web Keluhan
                                                </button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('public/assets') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('public/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('public/assets') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('public/assets') }}/js/sb-admin-2.min.js"></script>

</body>

</html>
