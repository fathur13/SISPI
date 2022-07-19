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
    <!-- Favicon Icon -->
    <link rel="icon" href="https://via.placeholder.com/64x64" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="mahasiswa/css/bootstrap.min.css" />
    <link rel="stylesheet" href="mahasiswa/css/fontawesome.css" />
    <link rel="stylesheet" href="mahasiswa/css/flaticon.css" />
    <link rel="stylesheet" href="mahasiswa/css/slick.css" />
    <link rel="stylesheet" href="mahasiswa/css/lightgallery.min.css" />
    <link rel="stylesheet" href="mahasiswa/css/animate.css" />
    <link rel="stylesheet" href="mahasiswa/css/style.css" />
</head>

<body class="st-green">
    <!-- Start Header Section -->
    <header class="st-site-header st-style1 st-sticky-header">
        <div class="st-top-header">
            <div class="container">
                <div class="st-top-header-in">
                    <ul class="st-top-header-list">
                        <li><i class="fas fa-envelope"></i>Email: <a href="#">fathur34rahman56@gmail.com</a></li>
                        <li><i class="fas fa-phone-volume"></i>Kontak: <a href="#">0895-6031-11989 </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="st-main-header">
            <div class="container">
                <div class="st-main-header-in">
                    <div class="st-main-header-left ">
                        <a class="st-site-branding st-white-logo" href="index.html">
                            {{-- <span class="h1"
                                style="font-family: 'Times New Roman', Times, serif">SISPI</span> --}}
                            <img src="img/sispi1.png" alt="Vorosha"></a>

                    </div>
                    <div class="st-main-header-right">
                        <div class="st-nav">
                            <ul class="st-nav-list st-onepage-nav">
                                {{-- <li class="menu-item-has-children"><a href="#home" class="st-smooth-move">Home</a>
                                    <ul>
                                        <li><a href="index.html">Default Demo</a></li>
                                        <li><a href="index3.html">Full Screen Slider</a></li>
                                        <li><a href="index2.html">Landing Version 1</a></li>
                                        <li><a href="index4.html">Landing Version 2</a></li>
                                    </ul>
                                </li> --}}
                                <li><a href="#" class="st-smooth-move">Home</a></li>
                                <li><a href="#services" class="st-smooth-move">Keluhan</a></li>
                                <li><a href="{{ url('logout') }}" class="st-smooth-move">Login</a></li>
                                {{-- <li><a href="#portfolio" class="st-smooth-move">Portfolio</a></li>
                                <li><a href="#team" class="st-smooth-move">Team</a></li>
                                <li><a href="#price" class="st-smooth-move">Price</a></li>
                                <li class="menu-item-has-children"><a href="#blog" class="st-smooth-move">Blog</a>
                                    <ul>
                                        <li class="menu-item-has-children"><a href="blog.html">Blog Grid List</a></li>
                                        <li class="menu-item-has-children"><a href="blog-details.html">Single
                                                Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#contact" class="st-smooth-move">Contact</a></li> --}}
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
                            SISPI
                        </h1>
                        <div class="st-hero-subtitle">Aplikasi Managment Data Keangan Dan Laporkan Keluhan <br>
                            SATUAN PENGAWAS INTERNAL</div>
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
                                    <img src="mahasiswa/img/3.jpg" style="" alt="Hero img">
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-hero st-style1 st-gray-bg">
                                <div class="st-hero-img">
                                    <img src="mahasiswa/img/4.jpg" alt="Hero img">
                                </div>
                            </div>
                        </div>
                        <div class="slick-slide-in">
                            <div class="st-hero st-style1 st-gray-bg">
                                <div class="st-hero-img">
                                    <img src="mahasiswa/img/2.jpg" alt="Hero img">
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
        <section id="services">
            <form action="{{ url('public') }}" id="add_form" method="post" enctype="multipart/form-data">
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
                                    <div class="row">
                                        <div class="col-sm"></div>

                                        @foreach ($list_jenislaporan as $h)
                                            <label class="btn mr-1" style="background-color: rgb(75, 162, 243); width:15%; color:white"
                                                for="btn-check{{ $h->id }}">{{ $h->nama }}</label>
                                        @endforeach
                                        <div class="col-sm"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm"></div>
                                        @foreach ($list_jenislaporan as $h)
                                            <input type="checkbox" value="{{ $h->id }}" name="jenis"
                                                class="btn-check" style="width:15%" id="btn-check{{ $h->id }}"
                                                @error('jenis') is-invalid @enderror />
                                        @endforeach
                                        <div class="col-sm"></div>
                                    </div>


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
                                                    <button type="button" class="close bg-danger m-1"
                                                        style="top: 11px;" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <img src="https://www.lapor.go.id/themes/lapor/assets/images/how-to-pengaduan.jpg"
                                                    width="100%">
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
                                        <br>
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
                                        </div>
                                        <div class="text-dark pl-2 font-weight-bold" for="file">
                                            <p style="font-size: 13px; float:left">Upload File</p>
                                        </div>
                                        <div class="custom-file pb-5">
                                            <input type="file"
                                                class="custom-file-input @error('file') is-invalid @enderror"
                                                name="file" id="file" accept="application/pdf">
                                            <label class="custom-file-label " for="customFile"><span
                                                    class="float-left">Pilih</span> </label>
                                            <div class="text-danger pl-2" for="file">
                                                <p style="font-size: 13px; float:left">Berkas PDF*</p>
                                            </div>
                                            @error('file')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <br>
                                        <br>
                                        <button class="btn btn-xs "
                                            style="color:white; background-color: rgb(110, 180, 246)"
                                            type=""><i class="fa fa-save"></i>
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
                    background-image: url("mahasiswa/img/2.webp");
                    background-size: cover;
                }
            </style>
            <hr>
            {{-- </section>
        <section class="foto" > --}}
            <div class="st-height-b120 st-height-lg-b80"></div>
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
                    </div><!-- .col -->
                    <div class="col-lg-3">
                        <div class="st-funfact st-style1">
                            <div class="st-funfact-icon wow bounce" data-wow-duration="1s" data-wow-delay="0.9s"><i
                                    class="flaticon-code"></i></div>
                            <h2 class="st-funfact-number st-counter">185</h2>
                            <div class="st-funfact-title">Staf 2</div>
                        </div>
                        <div class="st-height-b30 st-height-lg-b30"></div>
                    </div><!-- .col -->
                    <div class="col-lg-3">
                        <div class="st-funfact st-style1">
                            <div class="st-funfact-icon wow bounce" data-wow-duration="1s" data-wow-delay="0.8s"><i
                                    class="flaticon-laptop"></i></div>
                            <h2 class="st-funfact-number st-counter">100</h2>
                            <div class="st-funfact-title">Staf 3</div>
                        </div>
                        <div class="st-height-b30 st-height-lg-b30"></div>
                    </div><!-- .col -->
                    <div class="col-lg-3">
                        <div class="st-funfact st-style1">
                            <div class="st-funfact-icon wow bounce" data-wow-duration="1s" data-wow-delay="1s"><i
                                    class="flaticon-win"></i></div>
                            <h2 class="st-funfact-number st-counter">20</h2>
                            <div class="st-funfact-title">Staf 3</div>
                        </div>
                        <div class="st-height-b30 st-height-lg-b30"></div>
                    </div><!-- .col -->
                </div>
            </div>
            <div class="st-height-b90 st-height-lg-b50"></div>
        </section>
        <!-- End FunFact Aection -->

        <!-- Start Project Section -->

        <!-- End Project Section -->
        <hr>
        <!-- Start Skill Section -->

        <!-- End Skill Section -->
        <hr>
    </div>

    <!-- Start Footer -->
    <footer class="st-site-footer st-sticky-footer">
        {{-- <div class="st-main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="st-footer-widget">
                            <div class="st-text-field">
                                <img src="https://via.placeholder.com/208x41" alt="Vorosha" class="st-white-logo">
                                <img src="https://via.placeholder.com/208x41" alt="Vorosha" class="st-dark-logo">
                                <div class="st-height-b25 st-height-lg-b25"></div>
                                <div class="st-footer-text">Lorem ipsum dolor sit consectetur adipisicing sed do
                                    eiusmod tempor incididunt ut labore. Lorem Ipsum is simply dummy.</div>
                                <div class="st-height-b25 st-height-lg-b25"></div>
                                <ul class="st-social-btn st-style1 st-mp0">
                                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble-square"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-3">
                        <div class="st-footer-widget">
                            <h2 class="st-footer-widget-title">Useful Links</h2>
                            <ul class="st-footer-widget-nav st-mp0">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>FAQs</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Blog</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Weekly timetable</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-3">
                        <div class="st-footer-widget">
                            <h2 class="st-footer-widget-title">Company Info</h2>
                            <ul class="st-footer-widget-nav st-mp0">
                                <li><a href="#"><i class="fas fa-chevron-right"></i>About Us</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Our Services</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Support</a></li>
                                <li><a href="#"><i class="fas fa-chevron-right"></i>Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-3">
                        <div class="st-footer-widget">
                            <h2 class="st-footer-widget-title">Recent Post</h2>
                            <ul class="st-post-widget-list st-mp0">
                                <li>
                                    <div class="st-post st-style1">
                                        <a href="#" class="st-post-thumb st-zoom"><img
                                                src="https://via.placeholder.com/80x70" alt="post1"
                                                class="st-zoom-in"></a>
                                        <div class="st-post-info">
                                            <ul class="st-categories st-style1 st-mp0">
                                                <li><a href="#">Lifestyle</a></li>
                                            </ul>
                                            <h2 class="st-post-title"><a href="blog-details.html">Business
                                                    Consultancy</a></h2>
                                            <div class="st-post-date">1 Hours Ago</div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="st-post st-style1">
                                        <a href="#" class="st-post-thumb st-zoom"><img
                                                src="https://via.placeholder.com/80x70" alt="post2"
                                                class="st-zoom-in"></a>
                                        <div class="st-post-info">
                                            <ul class="st-categories st-style1 st-mp0">
                                                <li><a href="#">Lifestyle</a></li>
                                            </ul>
                                            <h2 class="st-post-title"><a href="blog-details.html">Accessible New
                                                    Design</a></h2>
                                            <div class="st-post-date">3 Hours Ago</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .col -->
                </div>
            </div>
        </div> --}}
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
    <script src="mahasiswa/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="mahasiswa/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="mahasiswa/js/isotope.pkg.min.js"></script>
    <script src="mahasiswa/js/jquery.slick.min.js"></script>
    <script src="mahasiswa/js/mailchimp.min.js"></script>
    <script src="mahasiswa/js/counter.min.js"></script>
    <script src="mahasiswa/js/lightgallery.min.js"></script>
    <script src="mahasiswa/js/wow.min.js"></script>
    <script src="mahasiswa/js/main.js"></script>

</html>
