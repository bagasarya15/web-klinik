<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="navbar-header">
    <ul class="nav navbar-nav flex-row">
        <li class="nav-item mr-auto">
          <a class="navbar-brand" href="html/ltr/vertical-menu-template-semi-dark/index.html">
            <!-- <div class="brand-logo"></div> -->
            <h2 class="brand-text"> Klinik -  Hardhi <i class="fa-solid fa-house-medical"></i></h2>
          </a>
        </li>
      <!-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li> -->
    </ul>
  </div>
  <div class="shadow-bottom"></div>
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="<?php echo is_active(''); ?> nav-item my-2">
        <a href="index.php"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
      </li>

      <li class="<?php echo is_active('dokter'); ?> nav-item my-2">
        <a href="?page=dokter">
          <i class="fa-solid fa-user-doctor"></i><span class="menu-title" data-i18n="Dokter">Dokter</span>
        </a>
      </li>

      <li class="<?php echo is_active('pasien'); ?> nav-item my-2"><a href="?page=pasien"><i class="fa-solid fa-users"></i><span class="menu-title" data-i18n="Pendaftaran">Pendaftaran</span></a>
      </li>

      <!-- <li class="<?php echo is_active('ruang'); ?> nav-item"><a href="?page=ruang"><i class="feather icon-check-square"></i><span class="menu-title" data-i18n="Ruang">Ruang</span></a>
      </li> -->

      <li class="<?php echo is_active('obat'); ?> nav-item my-2"><a href="?page=obat"><i class="fa-solid fa-pills"></i><span class="menu-title" data-i18n="Obat">Obat</span></a>
      </li>

      <li class="<?php echo is_active('rekam-medis'); ?> nav-item my-2"><a href="?page=rekam-medis"><i class="fa-solid fa-book-medical"></i><span class="menu-title" data-i18n="Rekam Medis">Rekam Medis</span></a>

      <!-- <li class="nav-item"><a href="javascript:;"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Laporan">Laporan</span></a>
        <ul class="menu-content">
          <li class="<?php echo is_active('lap-rekam-medis'); ?>"><a href="?page=lap-rekam-medis"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Rekam Medis">Rekam Medis</span></a>
          </li>
        </ul>
      </li> -->

    </ul>
  </div>
</div>
<!-- END: Main Menu-->