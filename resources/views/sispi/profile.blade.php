<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> SISPI</title>
    <link rel="icon" href="{{ url('public/assets') }}/img/Logo_Politap_kecil.png" />
    <link href="{{ url('public/assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ url('public/assets') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="{{ url('public/assets') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="{{ url('public/assets') }}/vendor/datepicker/js/jquery-1.11.3.min.js"></script>



</head>

<body id="page-top">

    <div id="wrapper">

        {{-- <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <img src="/img/Logo_Politap_kecil.png" alt="" style="height: 220%">
                <div class="sidebar-brand-text mx-3"
                style="font-size: 40px; font-family: 'Times New Roman', Times, serif;">SISPI</div>
            </a>
            <div class="sidebar-heading" style="text-align: center; margin-bottom:20px">
                PROFILE 
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            
        </ul> --}}

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <x-template.header />
                <div class="container-fluid" style="padding-left: 10%; padding-right:10%">

                    <h1 style="padding-left:10px;">PROFILE</h1><br>
                    <div class="card shadow mb-4">
                        <div class="card-body" style="padding: 80px; padding-top:50px">

                            {{-- Button back --}}
                            <button onclick="goBack()" class="btn btn-xs btn-secondary" style="margin-bottom: 10px">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </button>
                            <script>
                                function goBack() {
                                    window.history.back();
                                }
                            </script>
                            {{-- \\Button back --}}

                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="">
                                        <div class="card">
                                            @if (auth()->user()->foto)
                                                <img src="{{ url('public',auth()->user()->foto) }}"
                                                    class="img-fluid profile-pic-container" style="width: 100%">
                                            @else
                                                <img src="{{ url('public/assets') }}/img/profile.jpg"
                                                    class="img-fluid profile-pic-container" style="width: 100%">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="card card-default">
                                        <div class="col-md-12">
                                            <x-template.notif />
                                        </div>
                                        <div class="card-header">

                                            <h2 class="h2 m-0 font-weight-bold text-secondary">
                                                Data
                                                {{ auth()->user()->unit_kerja }}
                                                <x-template.button.editProfile-button url="sispi/edit-profile"
                                                    id="{{ auth()->user()->id }}" />
                                            </h2>
                                        </div>
                                        <hr class="no-margin">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Nama
                                                                Lengkap</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->nama }}
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <label for=""
                                                                class="control-label col-md-4">NIP</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->nip }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for=""
                                                                class="control-label col-md-4">NIK</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->nik }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for=""
                                                                class="control-label col-md-4">Nuup</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->nup }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Unit
                                                                Kerja</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->unit_kerja }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Tempat
                                                                Lahir</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->tempat_lahir }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">No
                                                                HP</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->no_hp }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">NIK KTP</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->nik_ktp }}
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Gelar
                                                                Depan</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->gelar_depan }}
                                                            </p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Gelar
                                                                Belakang</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->gelar_belakang }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for="" class="control-label col-md-4">Jenis
                                                                Kelamin</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->jenis_kelamin }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for=""
                                                                class="control-label col-md-4">Agama</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->agama }}</p>
                                                        </div>
                                                        <div class="row">
                                                            <label for=""
                                                                class="control-label col-md-4">Tanggal
                                                                Lahir</label>
                                                            <p type="text" class="form-control-static col-md-8">
                                                                {{ auth()->user()->tanggal_lahir }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="no-margin">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label for="" class="control-label col-md-12"
                                                        style="text-align: center">Riwayat Pendidikan :</label>
                                                    <div class="row">
                                                        <label for=""
                                                            class="control-label col-md-3">SD</label>
                                                        <label for=""
                                                            class="control-label col-md-3">SMP</label>
                                                        <label for=""
                                                            class="control-label col-md-3">SMA</label>
                                                        <label for="" class="control-label col-md-3">Perguruan
                                                            Tinggi</label>
                                                    </div>
                                                    <div class="row">
                                                        @foreach (explode(',', auth()->user()->riwayat) as $h)
                                                            <label for=""
                                                                class="control-label col-md-3">{{ $h }}</label>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade slide-right" id="modalConfirmDelete" tabindex="-1"
                                role="dialog" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content-wrapper">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true"><i class="pg-close fs-14"></i></button>
                                            <div class="container-xs-height full-height">
                                                <div class="row-xs-height">
                                                    <div class="modal-body col-xs-height col-middle text-center">
                                                        <h5 class="text-danger">Yakin Menghapus Data Ini?</h5>
                                                        <br>
                                                        <small class="text-default">Data yang telah dihapus tidak
                                                            akan
                                                            dapat dikembalikan</small>
                                                        <br>
                                                        <br>
                                                        <a href="#" id="btn_delete_conf" data-method="delete"
                                                            data-token="njuftNBw4Y2NcdrVNFqg39cVyrCEc0sxDQ6AKfwT"
                                                            class="btn btn-danger btn-block">Continue</a>
                                                        <button type="button" class="btn btn-default btn-block"
                                                            data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-template.footer />
        </div>
    </div>

    <script src="{{ url('public/assets') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ url('public/assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('public/assets') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{ url('public/assets') }}/js/sb-admin-2.min.js"></script>
    <script src="{{ url('public/assets') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/assets') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public/assets') }}/js/demo/datatables-demo.js"></script>
    <script src="{{ url('public/assets') }}/vendor/datepicker/js/bootstrap.js"></script>
    <script src="{{ url('public/assets') }}/vendor/chart.js/Chart.min.js"></script>
    <script src="{{ url('public/assets') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ url('public/assets') }}/js/demo/chart-pie-demo.js"></script>
    <script src="{{ url('public/assets') }}/js/demo/chart-bar-demo.js"></script>


</body>

</html>
