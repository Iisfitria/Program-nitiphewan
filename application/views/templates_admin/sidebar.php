  <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('home') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">NitipHewan <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard'); ?>">
          <i class="fas fa-home"></i>
          <span>Dasboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin'); ?>">
          <i class="fas fa-user"></i>
          <span>My Profile</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/edit_profile'); ?>">
          <i class="fas fa-user"></i>
          <span>Edit Profile</span></a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('booking'); ?>">
          <i class="fas fa-adjust"></i>
          <span>Data Booking</span></a>
      </li>

       <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('booking'); ?>">
          <i class="fas fa-adjust"></i>
          <span>Data Transaksi</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('autentifikasi/logout') ?>">
          <i class=" fa fa-sign-out-alt"></i>
          <span>Logout </span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->