<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];

if (delete("DELETE FROM rekam_medis WHERE id = '$id'") > 0) {
  Flasher::setFlash('Rekam Medis','Berhasil', 'Dihapus !', 'success');
  echo "<script>location= '?page=Rekam-Medis';</script>";
} else {
  echo mysqli_error($conn);
}
