<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->nama }}</span>
                @if (auth()->user()->foto)
                    <img class="img-profile rounded-circle" src="{{ url(auth()->user()->foto) }}" frameborder="0"
                        type="image/jpeg">
                @else
                    <img class="img-profile rounded-circle" src="/img/profile.jpg" frameborder="0" type="image/jpeg">
                @endif
            </a>

            <!-- Dropdown - User Information -->
            @if (auth()->user()->foto)
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <div class="dropdown-item dropdown-profile-pic" href="" terget="popup"
                            onclick="window.open('{{ url(auth()->user()->foto) }}','popup','width=800,height=600'); return false;"
                            style="text-align: center; padding: 1%;">
                        <img src="{{ url(auth()->user()->foto) }}" height="150px" width="150px"
                            class="circularimage" />
                        <p class="text-center m-t-10 m-b-20 pt-2">
                            {{ auth()->user()->nama }}
                        </p>
                    </div>
                @else
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <div class="dropdown-item dropdown-profile-pic" href="" terget="popup"
                            onclick="window.open('{{ url('/img/profile.jpg') }}','popup','width=800,height=600'); return false;"
                            style="text-align: center; padding: 1%;">
                            <img src="/img/profile.jpg" height="150px" width="150px" class="circularimage" />
                            <p class="text-center m-t-10 m-b-20 pt-2">
                                {{ auth()->user()->nama }}
                            </p>
                        </div>
            @endif

            <a class="dropdown-item" href="{{ url('sispi/profile') }}">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ url('logout') }}">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Keluar
            </a>
            </div>
            <style>
                .circularimage {
                    border: 1 px solid #000000;
                    width: 150px;
                    height: 150px;
                    overflow: hidden;
                    border-radius: 50%;
                    /* Tambahkan baris berikut */
                }
            </style>
        </li>
    </ul>
</nav>
