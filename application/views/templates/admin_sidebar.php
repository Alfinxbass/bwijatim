<!-- Sidebar -->
<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center mr-3"
        href="<?= base_url('core/dashboard'); ?>">
        <div class="sidebar-brand-icon ">
            <i class="far fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">BWI JATIM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">
    <!-- Heading -->
    <div class="sidebar-heading">
        Admin
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('core/dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider ">
    <!-- Heading -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('core/profil'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Identity</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Post
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-paste"></i>
            <span>Posting</span>
        </a>
        <div id="collapseTwo" class="collapse animate__animated animate__backInDown animate__slow"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('core/listpost'); ?>"><i
                        class="mr-2 bi bi-pin-fill"></i>Posting Port</a>
                <a class="collapse-item" href="<?= base_url('core/kategori') ?>"><i
                        class="mr-2 bi bi-card-list"></i>Kategori Posting</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fab fa-fw fa-accusoft"></i>
            <span>Wakaf</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('core/regulasi'); ?>"><i class="mr-2 bi bi-stack"></i>Regulasi</a>
                <a class="collapse-item" href="<?= base_url('core/literasiwakaf'); ?>"><i class="mr-2 bi bi-list"></i>Literasi Wakaf</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUt"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fab fa-fw fa-accusoft"></i>
            <span>Profil</span>
        </a>
        <div id="collapseUt" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('core/sejarah'); ?>"><i class="mr-2 bi bi-eyeglasses"></i>Sejarah</a>
                <a class="collapse-item" href="<?= base_url('core/visimisi'); ?>"><i class="mr-2 bi bi-clipboard2-data"></i>Visi & Misi</a>
                <a class="collapse-item" href="<?= base_url('core/susorganisasi'); ?>"><i class="mr-2 bi bi-arrows-move"></i>Susunan Pengurus</a>
                <a class="collapse-item" href="<?= base_url('core/tugas'); ?>"><i class="mr-2 bi bi-list-task"></i></i>Tugas & Wewenang</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Keluar</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->