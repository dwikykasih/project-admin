<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="border: 1px #e3edfa solid;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin');?>">
        <div class="sidebar-brand-icon">
          <img src="<?= base_url('assets/img/angsur1.png');?>" width="55px" height="55px">
        </div>
        <div class="sidebar-brand-text mx-0 text-dark">Administrator</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link text-dark" href="<?= base_url('admin')?>">
          <i class="fas fa-fw fa-tachometer-alt text-dark"></i>
          <span>Dashboard</span></a>
      </li>

       <hr class="sidebar-divider my-0 bg-light">
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item bg-light">
        <a class="text-dark nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog text-dark"></i>
          <span>Kelola</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner bg-dark rounded">
            <h6 class="collapse-header text-light">Komponen:</h6>
            <a class="collapse-item text-white" href="<?= base_url('kelola')?>">Pengajuan Angsuran</a>
            <a class="collapse-item text-white" href="<?= base_url('kelola/angsuran')?>">Angsuran Berjalan</a>
            <a class="collapse-item text-white" href="<?= base_url('kelola/asp')?>">Angsur Student Partner</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider my-0 bg-light">
       
      <li class="nav-item">
        <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fa fa-list-ul text-dark"></i>
          <span>Data</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-dark py-2 collapse-inner rounded">
            <h6 class="collapse-header text-light te">Komponen:</h6>
            <a class="collapse-item text-white" href="<?= base_url('data');?>">Daftar Pelanggan</a>
            <a class="collapse-item text-white" href="<?= base_url('data/daftar_asp');?>">Daftar ASP</a>
            <a class="collapse-item text-white" href="<?= base_url('data/daftar_log')?>">Log Aktifitas</a>
            <a class="collapse-item text-white" href="<?= base_url('admin/riwayat')?>">Riwayat Pemesanan</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider my-0 bg-light">
      <li class="nav-item bg-light">
        <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fa fa-credit-card text-dark"></i>
          <span>Pembayaran</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-dark py-2 collapse-inner rounded">
            <h6 class="collapse-header text-light te">Komponen:</h6>
            <a class="collapse-item text-white" href="<?= base_url('admin/down_payment')?>">Uang Muka</a>
            <a class="collapse-item text-white" href="<?= base_url('admin/progres')?>">Progres Pembayaran</a>
            <a class="collapse-item text-white" href="forgot-password.html">Statistik</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"><i class="fa fa-angle-right"></i></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
