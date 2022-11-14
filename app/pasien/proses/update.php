<?php
session_start();
require_once '../../functions/MY_model.php';

$id = $_POST['id'];
$kode_daftar = $_POST['kode_daftar'];
$nama_pasien = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
// $tgl_daftar = date('Y-m-d H:i:s');
$keluhan = $_POST['keluhan'];
$jadwal_periksa = $_POST['jadwal_periksa'];
$status = $_POST['status'];
$updated_at = date('Y-m-d H:i:s');
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE pasien SET kode_daftar = '$kode_daftar', nama_pasien = '$nama_pasien', jenis_kelamin = '$jenis_kelamin', keluhan = '$keluhan', jadwal_periksa = '$jadwal_periksa', status= '$status', updated_at = '$updated_at', updated_by = '$updated_by' WHERE id = '$id'";
if (create($query) === 1) {
  Flasher::setFlash('Pendaftaran Pasien','Berhasil', 'Diupdate !', 'warning');
  echo '<script>document.location.href="../../../?page=Pendaftaran Pasien";</script>';
} else {
  echo mysqli_error($conn);
}
