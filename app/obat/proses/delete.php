<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];

if (delete("DELETE FROM obat WHERE id = '$id'") > 0) {
  Flasher::setFlash('Data Obat','Berhasil', 'Dihapus !', 'success');
  echo "<script>location= '?page=Obat';</script>";
} else {
  Flasher::setFlash('Data Obat','Gagal', 'Dihapus !', 'danger');
  echo "<script>location= '?page=Obat';</script>";
}
