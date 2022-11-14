<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];

if (delete("DELETE FROM pasien WHERE id = '$id'") > 0) {
  Flasher::setFlash('Pendaftaran Pasien','Berhasil', 'Dihapus !', 'success');
  echo "<script>location= '?page=Pendaftaran Pasien';</script>";
} else {
  Flasher::setFlash('Pendaftaran Pasien','Gagal', 'Dihapus !', 'danger');
  echo "<script>location= '?page=Pendaftaran Pasien';</script>";
}
