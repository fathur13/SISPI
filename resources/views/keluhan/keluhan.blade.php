<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <!-- Page Title -->
    <title>SISPI - KELUHAN</title>

    <link rel="icon" href="img/Logo_Politap_kecil.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="app2/css/fontawesome.css" />
    <link rel="stylesheet" href="app2/css/flaticon.css" />
    <link rel="stylesheet" href="app2/css/slick.css" />
    <link rel="stylesheet" href="app2/css/lightgallery.min.css" />
    <link rel="stylesheet" href="app2/css/animate.css" />
    <link rel="stylesheet" href="app2/css/style.css" />
    <script src="/vendor/datepicker/js/jquery-1.11.3.min.js"></script>

</head>

<body class="st-green">
    <!-- Start Header Section -->
    <header class="st-site-header st-style1 st-sticky-header">
        <div class="st-top-header">
            <div class="container">
                <div class="st-top-header-in">
                    <ul class="st-top-header-list">
                        <li><i class="fas fa-envelope"></i>Email: <a
                                href="mailto:fathur34rahman56@gamil.com?subject=Tanya%20Keluhan&body=Saya%20Ingin%20Bertanya%20Tentang">fathur34rahman56@gmail.com</a>
                        </li>
                        <li><i class="fas fa-phone-volume"></i>Kontak: <a href="tel:+62895603111989">0895-6031-11989
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="st-main-header">
            <div class="container">
                <div class="st-main-header-in">
                    <div class="st-main-header-left ">
                        <a class="st-site-branding st-white-logo" href="index.html">
                            <img src="img/sispi1.png" alt="Vorosha"></a>

                    </div>
                    <div class="st-main-header-right">
                        <div class="st-nav">
                            <ul class="st-nav-list st-onepage-nav">
                                <li><a href="#home" class="st-smooth-move">Home</a></li>
                                <li><a href="#lapor" class="st-smooth-move">Lapor</a></li>
                                <li><a href="{{ url('logout') }}" target="_blank" class="st-smooth-move">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <div class="st-content">
        <!-- Start Hero Seciton -->
        <div class="st-height-b40 st-height-lg-b80"></div>
        <div class="st-hero-wrap st-gray-bg">
            <div class="st-hero st-style1">
                <div class="container">
                    <div class="st-hero-text">
                        <h1 class="st-hero-title">
                            Satuan Pengawasan<br>
                            Internal (SPI)<br>
                            Politeknik Negeri Ketapang
                        </h1>
                        <div class="st-hero-subtitle">Kami menyediakan Sistem Informasi Untuk Satuan Pengawas Internal
                            <br>
                            Guna untuk Membantu dalam pengarsipan Surat dan dokumen serta fitur keluhan
                        </div>
                        <div class="st-hero-btn">
                            <a href="#lapor" class="st-btn st-style1 st-color1 st-smooth-move">Laporkan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="st-slider st-style1 st-hero-slider1" id="home">
                <div class="slick-container" data-autoplay="1" data-loop="1" data-speed="800"
                    data-autoplay-timeout="1000" data-center="0" data-slides-per-view="1" data-fade-slide="1">
                    <div class="slick-wrapper">
                        <div class="slick-slide-in">
                            <div class="st-hero st-style1 st-gray-bg">
                                <div class="st-hero-img">
                                    <img src="app2/images/bg/111.jpg" alt="Hero img">
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-hero st-style1 st-gray-bg">
                                <div class="st-hero-img">
                                    <img src="app2/images/bg/112.jpg" alt="Hero img">
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-hero st-style1 st-gray-bg">
                                <div class="st-hero-img">
                                    <img src="app2/images/bg/113.jpeg" alt="Hero img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .slick-container -->
                <div class="pagination st-style1 container"></div>
                <!-- If dont need Pagination then add class .st-hidden -->
                <div class="swipe-arrow st-style1 st-hidden">
                    <!-- If dont need navigation then add class .st-hidden -->
                    <div class="slick-arrow-left"><i class="fa fa-angle-left"></i></div>
                    <div class="slick-arrow-right"><i class="fa fa-angle-right"></i></div>
                </div>
            </div><!-- .st-slider -->
        </div>
        <!-- End Hero Seciton -->


        <!-- Start About Seciton -->
        <section id="lapor">
            <form action="{{ url('lapor') }}" id="add_form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="st-height-b120 st-height-lg-b80"></div>
                <div class="container">
                    <div>
                        <div class="slick-slide-in "
                            style="width: 100%; display: inline-block;background-color:#EBEBEB">
                            <div class="st-imagebox st-style1 st-zoom">
                                <x-template.notif />

                                <div class="st-section-heading st-style1">
                                    <h2 class="st-section-heading-title pt-5">LAPORKAN KELUHAN</h2>
                                    <div class="st-section-heading-seperator left wow fadeInLeft animated"
                                        data-wow-duration="1s" data-wow-delay="0.2s"
                                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                    </div>
                                    <div class="st-section-heading-subtitle">Laporkan Keluhan Anda Di Sini</div>
                                </div>
                                <div style="text-align: center;">

                                    <label class="slider-title text-danger">Pilih Klasifikasi Laporan*</label>
                                    @error('jenis')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="">
                                        <div class="col-sm"></div>
                                        @foreach ($list_jenislaporan as $h)
                                            <div class="btn-group" role="group"
                                                aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="jenis"
                                                    id="{{ $h->nama }}" value="{{ $h->id }}"
                                                    autocomplete="off" @error('jenis') is-invalid @enderror>
                                                <label class="btn btn-success"
                                                    for="{{ $h->nama }}">{{ $h->nama }}</label>
                                            </div>
                                        @endforeach
                                        <div class="col-sm"></div>
                                    </div>
                                    {{-- <select name="" id="kelas1">
                                        <option value="nama">1</option>
                                        <option value="2">2</option>
                                    </select> --}}
                                    {{-- <div class="row" id="kelas2">
                                            <div class="col-10">
                                                <label for="" class="control-label">Jenis Kelengkapan</label>
                                            </div>
                                            <div class="col-2">
                                                <label for="">Aksi</label>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function() {

                                                $('#kelas2').hide();
                                                $('#kelas1').on("change", function() {
                                                    // $('#kelas1').prop('selectedIndex', 'pilih')
                                                    if ($(this).val() === "2") {
                                                        $('#kelas2').show();
                                                        // console.log('aria');
                                                    } else {
                                                        $('#kelas2').hide();
                                                    }
                                                })
                                            });
                                        </script> --}}


                                    <div class="complaint-help">
                                        Perhatikan Cara Menyampaikan <span id="classfication_name">Pengaduan</span>
                                        Yang
                                        Baik dan
                                        Benar
                                        <a href="#myModal" data-toggle="myModal" class="modalTrigger" id="myBtn"
                                            data-modal-name="myModal" data-target="#bannerformmodal"><img
                                                alt="info-complaint" class="info-complaint" style="width: 20px"
                                                src="https://www.lapor.go.id/themes/lapor/assets/images/info.svg"></a>
                                    </div>

                                    <!-- The Modal -->
                                    <div id="myModal" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-dialog modal-dialog-centered ">
                                            <div class="modal-content p-5">
                                                <div class="modal-header" style="text-align:center ">
                                                    <h4 class="modal-title ">PANDUAN PENGISIAN PENGADUAN</h4>
                                                    <button type="button" class="close bg-info m-1"
                                                        style="top: 11px;" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <img src="/img/handbook.png" width="100%">
                                            </div>
                                        </div>

                                    </div>

                                    <script>
                                        // Get the modal
                                        var modal = document.getElementById("myModal");

                                        // Get the button that opens the modal
                                        var btn = document.getElementById("myBtn");

                                        // Get the <span> element that closes the modal
                                        var span = document.getElementsByClassName("close")[0];

                                        // When the user clicks the button, open the modal 
                                        btn.onclick = function() {
                                            modal.style.display = "block";
                                        }

                                        // When the user clicks on <span> (x), close the modal
                                        span.onclick = function() {
                                            modal.style.display = "none";
                                        }

                                        // When the user clicks anywhere outside of the modal, close it
                                        window.onclick = function(event) {
                                            if (event.target == modal) {
                                                modal.style.display = "none";
                                            }
                                        }
                                    </script>
                                    <div class="container">
                                        <br>
                                        <hr>
                                        <div class="complaint-form-category ">
                                            <label class="float-left pl-2 font-weight-bold"
                                                for="">Judul</label>
                                            <input type="text"
                                                class="form-control @error('judul') is-invalid @enderror"
                                                name="judul" value="{{ old('judul') }}"
                                                placeholder="Ketik Judul Laporan Anda *">
                                            @error('judul')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="complaint-form-category ">
                                            <label class="float-left pl-2 font-weight-bold"
                                                for="">Nama</label>
                                            <input type="text" name="nama"
                                                class="form-control @error('nama') is-invalid @enderror"
                                                placeholder="Ketik Nama Anda *" value="{{ old('nama') }}">
                                            @error('nama')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="complaint-form-category">
                                            <label class="float-left pl-2 font-weight-bold" for="">Isian
                                                Keluhan</label>
                                            <textarea name="isi" id="" rows="6"
                                                class="form-control textarea-flex autosize @error('isi') is-invalid @enderror"
                                                placeholder="Ketik Isi Laporan Anda *" style="overflow: hidden; overflow-wrap: break-word; height: 158px;"
                                                value="{{ old('isi') }}"></textarea>
                                            @error('isi')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="complaint-form-category">
                                            <label class="float-left pl-2 font-weight-bold" for="">Tanggal
                                            </label>
                                            <input type="date" name="tanggal"
                                                class="form-control  @error('tanggal') is-invalid @enderror"
                                                value="{{ old('tanggal') }}">
                                            @error('tanggal')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <div class="complaint-form-category">
                                            <label class="float-left pl-2 font-weight-bold"
                                                for="">Lokasi</label>
                                            <input type="text" name="lokasi"
                                                class="form-control  @error('lokasi') is-invalid @enderror"
                                                placeholder="Ketik Lokasi Kejadian *" value="{{ old('lokasi') }}">
                                            @error('lokasi')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        {{-- <div class="complaint-form-category">
                                            <label class="float-left pl-2 font-weight-bold"
                                                for="">Kategori</label>
                                            <select class="form-control @error('kategori') is-invalid @enderror"
                                                name="kategori">
                                                <option value=""
                                                    @if (old('kategori') == '' or old('kategori') == 0) selected='selected' @endif
                                                    selected='selected'>
                                                    Pilih Kategori Laporan Anda * </option>
                                                @foreach ($list_kategorilaporan as $kategori)
                                                    <option
                                                        value='{{ $kategori->id }}'@if (old('kategori') == $kategori->id) selected="selected" @endif>
                                                        {{ $kategori->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('kategori')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div> --}}
                                        {{-- <br> --}}
                                        <div class="complaint-form-category">
                                            <label class="float-left pl-2 font-weight-bold"
                                                for="">Email</label>
                                            <input type="text" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Ketik Email yang valid *"
                                                value="{{ old('email') }}" />
                                            @error('email')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div><br>
                                        <div class="text-dark pl-2 font-weight-bold" for="file">
                                            <label for="file" style="font-size: 13px; float:left">Upload
                                                File</label>
                                        </div>
                                        <div class="custom-file pb-5">
                                            <input type="file"
                                                class="custom-file-input @error('file') is-invalid @enderror"
                                                name="file" id="file" accept="application/pdf">
                                            <label class="custom-file-label " for="customFile"><span
                                                    class="float-left">Pilih</span> </label>
                                            <div class="text-danger pl-2" for="file">
                                                {{-- <p style="font-size: 13px; float:left">Berkas PDF*</p> --}}
                                            </div>
                                            @error('file')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <br>
                                        <button class="btn btn-xs btn-info" type=""><i class="fa fa-save"></i>
                                            Kirim</button>
                                        <br>
                                        <br>
                                        <hr>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- .container -->
                <div class="st-height-b120 st-height-lg-b80"></div>
            </form>
        </section>
        <!-- End About Seciton -->
        <hr>
        <!-- Start Service Section -->
        <section class="foto">
            <div class="st-height-b115 st-height-lg-b80"></div>
            <div class="container ">
                <div class="row" style="text-align: center">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-sm ">
                        <div class="st-funfact st-style1">
                            <div class="st-funfact-icon wow bounce " data-wow-duration="1s" data-wow-delay="0.7s"><i
                                    class="flaticon-career"></i></div>
                            <h2 class=" st-funfact-number st-counter">{{ $jumlah_keluhan }}</h2>
                            <div class="st-funfact-title">JUMLAH KELUHAN</div>
                        </div>
                        <div class="st-height-b30 st-height-lg-b30"></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="st-height-b85 st-height-lg-b50"></div>
            <style>
                .foto {
                    background-image: url("app2/images/bg/back.jpg");
                    background-size: cover;
                }
            </style>
            <hr>
            {{-- </section>
        <section class="foto" > --}}
            {{-- <div class="st-height-b120 st-height-lg-b80"></div>
            <div class="container">
                <h2 class="st-section-heading-title pb-5"
                    style="text-align: center; font-family:'Times New Roman', Times, serif">INSTANSI YANG TERKAIT</h2>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="st-funfact st-style1">
                            <div class="st-funfact-icon wow bounce" data-wow-duration="1s" data-wow-delay="0.7s"><i
                                    class="flaticon-rate"></i></div>
                            <h2 class="st-funfact-number st-counter">999</h2>
                            <div class="st-funfact-title">Staf 1</div>
                        </div>
                        <div class="st-height-b30 st-height-lg-b30"></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="st-funfact st-style1">
                            <div class="st-funfact-icon wow bounce" data-wow-duration="1s" data-wow-delay="0.9s"><i
                                    class="flaticon-code"></i></div>
                            <h2 class="st-funfact-number st-counter">185</h2>
                            <div class="st-funfact-title">Staf 2</div>
                        </div>
                        <div class="st-height-b30 st-height-lg-b30"></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="st-funfact st-style1">
                            <div class="st-funfact-icon wow bounce" data-wow-duration="1s" data-wow-delay="0.8s"><i
                                    class="flaticon-laptop"></i></div>
                            <h2 class="st-funfact-number st-counter">100</h2>
                            <div class="st-funfact-title">Staf 3</div>
                        </div>
                        <div class="st-height-b30 st-height-lg-b30"></div>
                    </div>
                    <div class="col-lg-3">
                        <div class="st-funfact st-style1">
                            <div class="st-funfact-icon wow bounce" data-wow-duration="1s" data-wow-delay="1s"><i
                                    class="flaticon-win"></i></div>
                            <h2 class="st-funfact-number st-counter">20</h2>
                            <div class="st-funfact-title">Staf 3</div>
                        </div>
                        <div class="st-height-b30 st-height-lg-b30"></div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="st-height-b90 st-height-lg-b50"></div> --}}
        </section>
    </div>

    <!-- Start Footer -->
    <footer class="st-site-footer st-sticky-footer">
        <div class="st-main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="st-footer-widget">
                            <div class="st-text-field">
                                <a href="https://politap.ac.id/" target="_blank"><img src="app2/images/logo.png"
                                        alt="Vorosha" class="st-white-logo"></a>
                                <a href="https://politap.ac.id/" target="_blank" style="padding-left: 39px"><b>
                                        Satuan Pengawas Internal</b></a>

                                <a href="https://politap.ac.id/" target="_blank"><img src="app2/images/logo.png"
                                        alt="Vorosha" class="st-dark-logo"></a>
                                <div class="st-height-b25 st-height-lg-b25"></div>
                                <ul class="st-social-btn st-style1 st-mp0">
                                    <li><a href="https://www.facebook.com/poliketapang/" target="_blank"><i
                                                class="fab fa-facebook"></i></a></li>
                                    <li><a href="https://www.instagram.com/politekniknegeriketapang/"
                                            target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="st-footer-widget">
                            <h2 class="st-footer-widget-title">Useful Links</h2>
                            <ul class="st-footer-widget-nav st-mp0">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>FAQs</a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=62895603111989"><i
                                            class="fab fa-whatsapp"></i>WhatsApp Support</a></li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-4">
                        <div class="st-footer-widget">
                            <h2 class="st-footer-widget-title">SISPI Info</h2>
                            <ul class="st-footer-widget-nav st-mp0">
                                <li><a href="#about"><i class="fas fa-chevron-right"></i>Introduction</a></li>
                                <li><a href="#feature"><i class="fas fa-chevron-right"></i>Our Features</a></li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </div>
        <div class="st-copyright-wrap">
            <div class="container">
                <div class="st-copyright-in">
                    <div class="st-left-copyright">
                        <div class="st-copyright-text"><span>Copyright &copy; 2021-2022 <a
                                    href=https://politap.ac.id>POLITAP</a> by <b><a style="text-decoration: none; "
                                        href="https://www.instagram.com/_fathrrhman/">Fathur Rahman</a></b>
                            </span></div>
                    </div>
                    <div class="st-right-copyright">
                        <div id="st-backtotop"><i class="fas fa-angle-up"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Video Popup -->
    <div class="st-video-popup">
        <div class="st-video-popup-overlay"></div>
        <div class="st-video-popup-content">
            <div class="st-video-popup-layer"></div>
            <div class="st-video-popup-container">
                <div class="st-video-popup-align">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="about:blank"></iframe>
                    </div>
                </div>
                <div class="st-video-popup-close"></div>
            </div>
        </div>
    </div>
    <!-- End Video Popup -->

    <!-- Scripts -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="app2/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="app2/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="app2/js/isotope.pkg.min.js"></script>
    <script src="app2/js/jquery.slick.min.js"></script>
    <script src="app2/js/mailchimp.min.js"></script>
    <script src="app2/js/counter.min.js"></script>
    <script src="app2/js/lightgallery.min.js"></script>
    <script src="app2/js/wow.min.js"></script>
    <script src="app2/js/main.js"></script>

</html>
