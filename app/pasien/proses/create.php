<?php
session_start();
require_once '../../functions/MY_model.php';
$kode_daftar = $_POST['kode_daftar'];
$nama_pasien = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_daftar = date('Y-m-d H:i:s');
$keluhan = $_POST['keluhan'];
$jadwal_periksa = date('Y-m-d H:i:s');
$status = $_POST['status'];
$created_by = $_SESSION['user']['id'];


$query = "INSERT INTO pasien VALUES( default, '$kode_daftar', '$nama_pasien', '$jenis_kelamin',  '$tgl_daftar', '$keluhan', '$jadwal_periksa', '$status', '$created_by', null, null, null, null)";

if (create($query) === 1) {
  Flasher::setFlash('Pendaftaran Pasien','Berhasil', 'Ditambah!', 'success');
  echo '<script>document.location.href="../../../?page=Pendaftaran Pasien";</script>';
} else {
  echo mysqli_error($conn);
}
