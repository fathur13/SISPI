<hr class="sidebar-divider my-0">

<x-template.menu.menu-item title="Dasboard" url="sispi/keluhan-koordinator/dashboard" icon="chart-line" />
<x-template.menu.menu-item title="Keluhan" url="sispi/keluhan-koordinator/keluhan" icon="box" />
<hr class="sidebar-divider my-0">

<li class="nav-item">
    <a class="nav-link " href="#" data-toggle="collapse" data-target="#management-data" aria-expand*ed="true"
        aria-controls="management-data">
        <i class="fas fa-fw fa-archive"></i>
        <span>Management Data</span>
    </a>
    <div id="management-data" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <x-template.menu.menu-dropdown title="Jenis Laporan" url="sispi/keluhan-koordinator/jenis-laporan" />
        </div>
    </div>
</li>
