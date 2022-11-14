<?php
require_once 'app/functions/MY_model.php';
$pasiens = get("SELECT * FROM pasien");

$no = 1;

$title = 'Status Pasien';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="ml-1"><?php Flasher::flash() ?></div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?= $title  ?></h4>
          <a href="?page=Rekam-Medis" class="btn btn-light float-right mt-1">Kembali</a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped" id="datatable">
                <thead>
                  <tr>
                    <th>Kode Pendaftaran</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Daftar</th>
                    <th>Keluhan</th>
                    <th>Jadwal Periksa</th>
                    <th>Status</th>
                    <th>Tambah Rekam Medis</th>
                    <th>Update Status Pasien</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pasiens as $pasien) : ?>
                    <tr>
                      <td><?= $pasien['kode_daftar'] ?></td>
                      <td><?= $pasien['nama_pasien']; ?></td>
                      <td><?= ($pasien['jenis_kelamin'] == 'l' ? 'Laki-laki' : 'Perempuan'); ?></td>
                      <td><?= $pasien['tgl_daftar']; ?></td>
                      <td><?= $pasien['keluhan']; ?></td>
                      <td><?= $pasien['jadwal_periksa']; ?></td>
                      <td><?= $pasien['status']; ?></td>
                      <td>
                        <a href="?page=tambah-rekam-medis&id=<?= $pasien['id']; ?>" class="btn btn-primary btn-sm ml-1"><i class="fas fa-plus"></i></a>
                      </td>
                      <td>
                        <a href="?page=update-status&id=<?= $pasien['id']; ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>