<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];

if (delete("DELETE FROM dokter WHERE id = '$id'") > 0) {\
  Flasher::setFlash('Data Dokter','Berhasil', 'Dihapus !', 'success');
  echo "<script>location= '?page=Dokter';</script>";
} else {
  Flasher::setFlash('Data Dokter','Gagal', 'Dihapus !', 'danger');
  echo "<script>location= '?page=Dokter';</script>";
}
