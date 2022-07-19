<hr class="sidebar-divider my-0">
<div class="sidebar-heading">
    <em>
        Akses Super Admin
    </em>
</div>
<x-template.menu.menu-item title="Dasboard Admin" url="admin/dashboard" icon="chart-line" />
<x-template.menu.menu-item title="Dasboard Keluhan Koor" url="sispi/keluhan-koordinator/dashboard" icon="chart-line" />
<x-template.menu.menu-item title="Dasboard Keluhan" url="sispi/keluhan/dashboard" icon="chart-line" />
<li class="nav-item ">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#managmentuser" aria-expanded="true"
        aria-controls="managmentdata">
        <i class="fas fa-fw fa-folder"></i>
        <span>managment User</span>
    </a>
    <div id="managmentuser" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <x-template.menu.menu-dropdown title="Data Pegawai" url="admin/managment-user/pegawai" />
            <x-template.menu.menu-dropdown title="Data Module" url="admin/managment-user/module" />
        </div>
    </div>
</li>

<hr class="sidebar-divider my-0">
<div class="sidebar-heading"><em>
        Akses Koordinator / Ketua
    </em>
</div>
<x-template.menu.menu-item title="Pengajuan-Surat" url="sispi/koordinator/pengajuan-surat" icon="check-double" />
<hr class="sidebar-divider my-0">
<div class="sidebar-heading"><em>
        Akses Koordinator / Keluhan
    </em>
</div>
<x-template.menu.menu-item title="Keluhan" url="sispi/keluhan-koordinator/keluhan" icon="box" />
<li class="nav-item">
    <a class="nav-link " href="#" data-toggle="collapse" data-target="#managment-data1"
        aria-expand*ed="true" aria-controls="managment-data">
        <i class="fas fa-fw fa-archive"></i>
        <span>managment Data</span>
    </a>
    <div id="managment-data1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <x-template.menu.menu-dropdown title="Jenis Laporan" url="sispi/keluhan-koordinator/jenis-laporan" />
            <x-template.menu.menu-dropdown title="Kategori Laporan" url="sispi/keluhan-koordinator/kategori-laporan" />
        </div>
    </div>
</li>


<hr class="sidebar-divider my-0">
<div class="sidebar-heading"><em>
        Akses Admin
    </em>
</div>
<li class="nav-item">
    <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapsePages" aria-expand*ed="true"
        aria-controls="collapsePages">
        <i class="fas fa-fw fa-archive"></i>
        <span>Arsip Surat</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <x-template.menu.menu-dropdown title="Surat Masuk" url="sispi/admin/surat-masuk" />
            <x-template.menu.menu-dropdown title="Surat Keluar" url="sispi/admin/surat-keluar" />
        </div>
    </div>
</li>
<x-template.menu.menu-item title="Dokumen" url="sispi/admin/dokumen" icon="folder-plus" />
<x-template.menu.menu-item title="Review Dokumen" url="sispi/admin/review-dokumen" icon="check" />

<li class="nav-item">
    <a class="nav-link " href="#" data-toggle="collapse" data-target="#managment-data" aria-expand*ed="true"
        aria-controls="managment-data">
        <i class="fas fa-fw fa-archive"></i>
        <span>managment Data</span>
    </a>
    <div id="managment-data" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <x-template.menu.menu-dropdown title="Jenis Dokumen" url="sispi/admin/jenis-dokumen" />
            <x-template.menu.menu-dropdown title="Jenis Surat" url="sispi/admin/jenis-surat" />
            <x-template.menu.menu-dropdown title="Kelengkapan" url="sispi/admin/kelengkapan" />
            <x-template.menu.menu-dropdown title="Template Surat" url="sispi/admin/template-surat" />
        </div>
    </div>
</li>
