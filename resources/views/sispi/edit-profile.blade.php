<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> SISPI</title>
    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="/vendor/datepicker/js/jquery-1.11.3.min.js"></script>



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

                    <h1 style="padding-left:10px">PROFILE</h1><br>
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

                            <form action="{{ url('sispi/edit-profile', $pegawai->id) }}" id="add_form" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="" class="control-label">NIP</label>
                                            <input type="text" class="form-control" value="{{ $pegawai->nip }}"
                                                name="nip">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Nama Lengkap</label>
                                            <input type="text" class="form-control" value="{{ $pegawai->nama }}"
                                                name="nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir"
                                                        value="{{ $pegawai->tanggal_lahir }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Tempat Lahir</label>
                                                    <input type="text" class="form-control"
                                                        name="tempat_lahir"value="{{ $pegawai->tempat_lahir }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Email</label>
                                                    <input type="text" class="form-control" name="email"
                                                        value="{{ $pegawai->email }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">NIK</label>
                                                    <input type="text" class="form-control" name="nik"
                                                        value="{{ $pegawai->nik }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">NUP</label>
                                                    <input type="text" class="form-control" name="nup"
                                                        value="{{ $pegawai->nup }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">NIK KTP</label>
                                                    <input type="text" class="form-control" name="nik_ktp"
                                                        value="{{ $pegawai->nik_ktp }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 hidden" id="periode_tertentu">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Username</label>
                                                        <input type="text" class="form-control" name="username"
                                                            value="{{ $pegawai->username }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Password</label>
                                                    <input type="password" class="form-control" name="password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Agama</label>
                                                    <input type="text" class="form-control" name="agama"
                                                        value="{{ $pegawai->agama }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Jenis Kelamin</label>
                                                    <select name="jenis_kelamin" class="form-control">
                                                        <option value="{{ $pegawai->jenis_kelamin }}">
                                                            {{ $pegawai->jenis_kelamin }}</option>
                                                        <option value="Laki Laki">Laki Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Unit Kerja</label>
                                                        <input type="text" class="form-control" name="unit_kerja"
                                                            value="{{ $pegawai->unit_kerja }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">No Handpone</label>
                                                    <input type="text" class="form-control" name="no_hp"
                                                        value="{{ $pegawai->no_hp }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row no-gutters">
                                            <label>Foto</label>
                                            <div class="col-md-12">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="foto"
                                                        id="foto" accept="image/png,image/jpeg">
                                                    <label class="custom-file-label " for="customFile">Pilih</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="" class="control-label">Gelar
                                                            Depan</label>
                                                        <input type="text" class="form-control" name="gelar_depan"
                                                            value="{{ $pegawai->gelar_depan }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="control-label">Gelar Belakang</label>
                                                    <input type="text" class="form-control" name="gelar_belakang"
                                                        value="{{ $pegawai->gelar_belakang }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h6>Riwayat Pendidikan</h6>
                                {{-- <div class="col-md-12">
                                    <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="" class="control-label">SD</label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="" class="control-label">SMP</label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="" class="control-label">SMA</label>
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="" class="control-label">Perguruan Tinggi</label>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach (explode(',', auth()->user()->riwayat) as $h)
                                            <div class="form-group col-md-3">
                                                <input type="text" class="form-control" name="riwayat[]" value="{{ $h }}">
                                            </div>
                                        @endforeach
                                    </div>
                                </div> --}}
                                <button class="btn btn-dark float-right"><i class="fa fa-save"></i>
                                    Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <x-template.footer />
        </div>
    </div>

    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="/js/sb-admin-2.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="/js/demo/datatables-demo.js"></script>
    <script src="/vendor/datepicker/js/bootstrap.js"></script>
    <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="/js/demo/chart-area-demo.js"></script>
    <script src="/js/demo/chart-pie-demo.js"></script>
    <script src="/js/demo/chart-bar-demo.js"></script>


</body>

</html>
