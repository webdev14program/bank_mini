<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>Dashboard_pj">
            <div class="sidebar-brand-text mx-3 text-uppercase font-weight-bolder">PJ Harian<br>bank mini</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard_pj -->
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_pj">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Setting Teller
        </div>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_pj/setting_teller">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Setting Teller</span></a>
        </li>


        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Transaksi
        </div>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_pj/transaksi">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Transaksi</span></a>
        </li>
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Laporan
        </div>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_pj/laporan_perhari">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Laporan Perhari</span></a>
        </li>


        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Logout
        </div>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Dashboard_pj/logout">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>




    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
            </nav>
            <div class="container-fluid">
                <?php $this->load->view($content); ?>
            </div>

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-danger">
            <div class="container my-auto">
                <div class="copyright text-center text-white text-uppercase font-weight-bolder my-auto">
                    <span>Copyright &copy; Bank Mini SMK Tunas Hartapan</span>
                </div>
            </div>
        </footer>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>