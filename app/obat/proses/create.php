<?php
session_start();
require_once '../../functions/MY_model.php';
$nama_obat = $_POST['nama_obat'];
$keterangan = $_POST['keterangan'];
$created_at = date('Y-m-d H:i:s');
$created_by = $_SESSION['user']['id'];
// $query = "INSERT INTO obat VALUES('', '$nama_obat', '$keterangan', '$created_at', '', '', '$created_by', '', '')";
$query = "INSERT INTO obat VALUES(default, '$nama_obat', '$keterangan', '$created_at', null, null, '$created_by', null, null)";
if (create($query) === 1) {
  Flasher::setFlash('Data Obat','Berhasil', 'Ditambah !', 'success');
  echo '<script>document.location.href="../../../?page=Obat";</script>';
} else {
  echo mysqli_error($conn);
}
