<?php
session_start();
require_once '../../functions/MY_model.php';
$kode_daftar = $_POST['kode_daftar'];
$nama_pasien = $_POST['nama_pasien'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_daftar = date('Y-m-d H:i:s');
$keluhan = $_POST['keluhan'];
$jadwal_periksa = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];

// $query = "INSERT INTO pasien VALUES('', '$nomor_identitas', '$nama_pasien', '$jenis_kelamin',  '$alamat', '$telephone', '$created_at', '', '', '$created_by', '', '')";

$query = "INSERT INTO pasien VALUES( default, '$kode_daftar', '$nama_pasien', '$jenis_kelamin',  '$tgl_daftar', '$keluhan', '$jadwal_periksa','$created_by', null, null, null, null)";

if (create($query) === 1) {
  echo '<script>document.location.href="../../../?page=pasien";</script>';
} else {
  echo mysqli_error($conn);
}
