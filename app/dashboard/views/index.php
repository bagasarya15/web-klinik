<?php
require_once 'app/functions/MY_model.php';

$dokter = mysqli_query($conn, "SELECT * FROM dokter");
$count_dokter = mysqli_num_rows($dokter);

$pasien = mysqli_query($conn, "SELECT * FROM pasien");
$count_pasien = mysqli_num_rows($pasien);

$rkmedis = mysqli_query($conn, "SELECT * FROM rekam_medis");
$count_rkmedis = mysqli_num_rows($rkmedis);

$obat = mysqli_query($conn, "SELECT * FROM obat");
$count_obat = mysqli_num_rows($obat);

// $_SESSION['title'] = 'Dashboard';
?>
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-primary p-50 m-0">
            <div class="avatar-content">
             <a href="#"><i class="fa-solid fa-user-doctor text-primary font-medium-5"></i></a> 
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_dokter; ?></h2>
          <p class="mb-0">Total Dokter</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-success p-50 m-0">
            <div class="avatar-content">
             <a href="#"> <i class="fa-solid fa-users text-success font-medium-5"></i></a>
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_pasien; ?></h2>
          <p class="mb-0">Total Pendaftaran Pasien</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-warning p-50 m-0">
            <div class="avatar-content">
             <a href="#"><i class="fa-solid fa-pills text-warning font-medium-5"></i></a>
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25"><?= $count_obat; ?></h2>
          <p class="mb-0">Total Obat</p>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
          <div class="card-header d-flex flex-column align-items-start pb-0">
            <div class="avatar bg-rgba-danger p-50 m-0">
              <div class="avatar-content">
              <a href="#"> <i class="fa-solid fa-book-medical text-danger font-medium-5"></i></a> 
              </div>
            </div>
            <h2 class="text-bold-700 mt-1 mb-25"><?= $count_rkmedis; ?></h2>
            <p class="mb-0">Total Rekam Medis</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- Dashboard Analytics end -->
<script>
  var count_dokter = '<?php echo $count_dokter; ?>';
</script>
<?php
$addon_script = ['assets/vendors/js/charts/apexcharts.min.js', 'assets/js/pages/dashboard.js'];
$prepend_style = ['assets/css/pages/dashboard.css'];
?>