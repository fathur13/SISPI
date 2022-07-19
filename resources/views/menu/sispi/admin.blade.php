<hr class="sidebar-divider my-0">

<x-template.menu.menu-item title="Dasboard" url="sispi/admin/dashboard" icon="chart-line" />
<x-template.menu.menu-item title="Pengajuan Surat" url="sispi/admin/pengajuan-surat" icon="check-double" />
<hr class="sidebar-divider my-0">
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expand*ed="true"
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
<hr class="sidebar-divider my-0">
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#a" aria-expand*ed="true"
        aria-controls="a">
        <i class="fas fa-fw fa-archive"></i>
        <span>Management Data</span>
    </a>
    <div id="a" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <x-template.menu.menu-dropdown title="Jenis Dokumen" url="sispi/admin/jenis-dokumen" />
            <x-template.menu.menu-dropdown title="Jenis Surat" url="sispi/admin/jenis-surat" />
            <x-template.menu.menu-dropdown title="Kelengkapan" url="sispi/admin/kelengkapan" />
            <x-template.menu.menu-dropdown title="Template Surat" url="sispi/admin/template-surat" />
        </div>
    </div>
</li>
{{-- <li class="nav-item">
    <a class="nav-link" href="#" id="management-data" data-toggle="collapse" data-target="#management-data" aria-expand*ed="true"
        aria-controls="management-data">
        <i class="fas fa-fw fa-archive"></i>
        <span>Management Data</span>
    </a>
    <div id="management-data" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <x-template.menu.menu-dropdown title="Jenis Dokumen" url="sispi/admin/jenis-dokumen" />
            <x-template.menu.menu-dropdown title="Jenis Surat" url="sispi/admin/jenis-surat" />
            <x-template.menu.menu-dropdown title="Kelengkapan" url="sispi/admin/kelengkapan" />
            <x-template.menu.menu-dropdown title="Template Surat" url="sispi/admin/template-surat" />
        </div>
    </div>
</li> --}}
