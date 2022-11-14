<?php
session_start();
require_once '../../functions/MY_model.php';
$pasien_id = $_POST['pasien_id'];
$dokter_id = $_POST['dokter_id'];
// $ruang_id = $_POST['ruang_id'];
$keluhan = $_POST['keluhan'];
$diagnosa = $_POST['diagnosa'];
$tanggal = $_POST['tanggal'];
$obat_id = $_POST['obat_id'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
// $query = "INSERT INTO rekam_medis VALUES('', '$pasien_id', '$dokter_id',  '$ruang_id', '$keluhan', '$diagnosa', '$tanggal', '$created_at', '', '', '$created_by', '', '')";
$query = "INSERT INTO rekam_medis VALUES(default , '$pasien_id', '$dokter_id', '$keluhan', '$diagnosa', '$tanggal', '$created_at', null, null, '$created_by', null, null)";
if (create($query) === 1) {
  $rm_id = mysqli_insert_id($conn);
  foreach ($obat_id as $obat) {
    $save_rmobat = "INSERT INTO rm_obat(obat_id, rm_id) VALUES('$obat', '$rm_id')";
    if (create($save_rmobat) > 0) {
    } else {
      echo mysqli_error($conn);
    }
    Flasher::setFlash('Rekam Medis','Berhasil', 'Ditambah ! Silahkan Update Status Pasien', 'success');
    echo '<script>document.location.href="../../../?page=Status Pasien";</script>';
  }
} else {
  echo mysqli_error($conn);
}
