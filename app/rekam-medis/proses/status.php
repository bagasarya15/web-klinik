<?php
session_start();
require_once '../../functions/MY_model.php';

$id = $_POST['id'];
$status = $_POST['status'];
$updated_by = $_SESSION['user']['id'];
$query = "UPDATE pasien SET status = '$status',  updated_by = '$updated_by' WHERE id = '$id'";

if (create($query) === 1) {
  Flasher::setFlash('Status Pasien','Berhasil', 'Diupdate !', 'warning');
  echo '<script>document.location.href="../../../?page=Rekam-Medis";</script>';
} else {
  echo mysqli_error($conn);
}
