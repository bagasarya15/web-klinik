<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto">
          <a class="navbar-brand" href="?page=Dashboard">
            <div class="brand-logo fa-solid fa-house-medical"></div>
            <h2 class="brand-text mt-1"> Klinik -  Hardhi</h2>
          </a>
        </li>
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <!-- Start Akses User Admin -->
      <?php if ($_SESSION['user']['group_id'] == '1') {?>
        <li class="<?php echo is_active(''); ?> nav-item my-2">
          <a href="?page=Dashboard"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>

        <li class="<?php echo is_active('dokter'); ?> nav-item my-2">
          <a href="?page=Dokter">
            <i class="fa-solid fa-user-doctor"></i><span class="menu-title" data-i18n="Dokter">Dokter</span>
          </a>
        </li>

        <li class="<?php echo is_active('pasien'); ?> nav-item my-2"><a href="?page=Pendaftaran Pasien"><i class="fa-solid fa-users"></i><span class="menu-title" data-i18n="Pendaftaran">Pendaftaran</span></a>
        </li>

        <li class="<?php echo is_active('obat'); ?> nav-item my-2"><a href="?page=Obat"><i class="fa-solid fa-pills"></i><span class="menu-title" data-i18n="Obat">Obat</span></a>
        </li>

        <li class="<?php echo is_active('rekam-medis'); ?> nav-item my-2"><a href="?page=Rekam-Medis"><i class="fa-solid fa-book-medical"></i><span class="menu-title" data-i18n="Rekam Medis">Rekam Medis</span></a>
        </li>
      <!-- End Akses User Admin -->

      <!-- Start Akses User Dokter-->
      <?php }else if ($_SESSION['user']['group_id'] == '2') { ?>
        <li class="<?php echo is_active(''); ?> nav-item my-2">
          <a href="?page=Dashboard"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>

        <li class="<?php echo is_active('dokter'); ?> nav-item my-2">
          <a href="?page=Dokter">
            <i class="fa-solid fa-user-doctor"></i><span class="menu-title" data-i18n="Dokter">Dokter</span>
          </a>
        </li>
        
        <li class="<?php echo is_active('rekam-medis'); ?> nav-item my-2"><a href="?page=Rekam-Medis"><i class="fa-solid fa-book-medical"></i><span class="menu-title" data-i18n="Rekam Medis">Rekam Medis</span></a>
        </li>
      <!-- End Akses User Dokter -->

      <!-- Start Akses User Resepsionis  -->
      <?php }else if ($_SESSION['user']['group_id'] == '3') { ?>
        <li class="<?php echo is_active(''); ?> nav-item my-2">
          <a href="?page=Dashboard"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>
        
        <li class="<?php echo is_active('pasien'); ?> nav-item my-2"><a href="?page=Pendaftaran Pasien"><i class="fa-solid fa-users"></i><span class="menu-title" data-i18n="Pendaftaran">Pendaftaran</span></a>
        </li>
      <!-- End Akses User Resepsionis -->

      <!-- Start Akses User Apoteker  -->
      <?php }else { ?>
        <li class="<?php echo is_active(''); ?> nav-item my-2">
          <a href="?page=Dashboard"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
        </li>
        
        <li class="<?php echo is_active('obat'); ?> nav-item my-2"><a href="?page=Obat"><i class="fa-solid fa-pills"></i><span class="menu-title" data-i18n="Obat">Obat</span></a>
        </li>
      <!-- End Akses User Apoteker -->
      <?php } ?>    
    </ul>
  </div>
</div>
<!-- END: Main Menu-->