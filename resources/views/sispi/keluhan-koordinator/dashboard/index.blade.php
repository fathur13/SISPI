<x-module.sispi-keluhan-koordinator>
    <div class="container-xl">
        <div class="d-sm-flex align-items-center justify-content-between">
            <p class="h1 mb-0 text-gray-800"
                style="font-size: 40px; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Dashboard
            </p>
        </div>
        <hr class="sidebar-divider d-none d-md-block">

        <div class="d-sm-flex align-items-center justify-content-between">
            <p class="h4 mb-0 text-gray-800">Selamat Datang </p>
        </div>
        <div>
            <h4 class="h6 mb-0 text-gray-900" style="font-size: 40px; font-family:'Times New Roman', Times, serif">Admin
                SISPI {{ auth()->user()->gelar_depan }} {{ auth()->user()->nama }}
                {{ auth()->user()->gelar_belakang }} </h4>
        </div>

        <div class="row" style="margin-top: 5%;padding: 10px">

            <div class="col-xl col-md-6 mb-4 " >
                <a href="{{ url('sispi/keluhan-koordinator/keluhan') }}">
                    <div class="card border-bottom-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold text-primary text-uppercase mb-1">
                                        Arsip KEluhan Masuk</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800">{{ $jumlah_keluhan }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-download fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl col-md-6 mb-4 " >
                <a href="{{ url('sispi/keluhan-koordinator/keluhan') }}">
                    <div class="card border-bottom-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 font-weight-bold text-success text-uppercase mb-1">
                                        Arsip Keluhan Diterima</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800">{{ $jumlah_diterima }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-download fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl col-md-6 mb-4 " >
                <a href="{{ url('sispi/keluhan-koordinator/keluhan') }}">
                    <div class="card border-bottom-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h6 font-weight-bold text-warning text-uppercase mb-1">
                                        Arsip Keluhan Belum di Proses</div>
                                    <div class="h3 mb-0 font-weight-bold text-gray-800">{{ $jumlah_belumdiproses }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-download fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</x-module.sispi-keluhan-koordinator>