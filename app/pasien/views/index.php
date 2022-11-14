<?php
require_once 'app/functions/MY_model.php';
$pasiens = get("SELECT * FROM pasien");

$no = 1;

$title = 'Pendaftaran Pasien';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="ml-1"><?php Flasher::flash() ?></div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?= $title  ?></h4>
          <a href="?page=tambah-pasien" class="btn btn-primary round waves-effect waves-light">
            Tambah Pendaftaran Pasien
          </a>
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
                    <th>Aksi</th>
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
                      
                      <td class="d-flex justify-content-center">
                        <a href="?page=Jadwal Kunjungan&id=<?= $pasien['id']; ?>"><i class="feather icon-eye"></i></a>
                        <a href="?page=edit-pasien&id=<?= $pasien['id']; ?>"><i class="feather icon-edit-2 mx-2"></i></a>
                        <a href="?page=hapus-pasien&id=<?= $pasien['id']; ?>" class="btn-hapus">
                          <i class="feather icon-trash"></i>
                        </a>
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
<!-- User Table -->
<!-- <?php $title = 'Pendaftaran Pasien'; ?> -->