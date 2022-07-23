<ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <img src="{{ url('public/assets') }}/img/Logo_Politap_kecil.png" alt="" style="height: 220%">
        <div class="sidebar-brand-text mx-3"
            style="font-size: 40px; font-family: 'Times New Roman', Times, serif;">SISPI</div>
    </a>
    <div class="sidebar-heading" style="text-align: center; margin-bottom:20px">
        {{ $header }}
    </div>
    @if (!auth()->guard('mahasiswa')->check())
    <x-template.control-sidebar />
    @endif
    @include('menu.' . $menu)

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
