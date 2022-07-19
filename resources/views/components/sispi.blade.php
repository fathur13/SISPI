<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> SISPI</title>
    <link rel="icon" href="/img/Logo_Politap_kecil.png" />

    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <script src="/vendor/datepicker/js/jquery-1.11.3.min.js"></script>



</head>

<body id="page-top">

    <div id="wrapper">
        <x-template.sidebar :menu="$menu" header="{{ $header }}" />
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <x-template.header />
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <x-template.notif />
                            </div>
                        </div>
                    </div>
                    {{-- @include('Pesan.pesan') --}}
                    {{ $slot }}
                </div>
            </div>
            <x-template.footer />
        </div>

    </div>

    <script src="js/demo/datatables-demo.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin-2.min.js"></script>


    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>
    <script src="/vendor/datepicker/js/bootstrap.js"></script>

    <!-- Page level plugins -->
    <script src="/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>
    <script src="/js/demo/chart-bar-demo.js"></script>


</body>

</html>
