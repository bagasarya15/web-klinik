<?php
require_once 'app/functions/MY_model.php';
$dokters = get("SELECT * FROM dokter");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  
  <div class="row">
    <div class="ml-1"><?php Flasher::flash() ?></div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Dokter</h4>
          <a href="?page=tambah-dokter" class="btn btn-primary round waves-effect waves-light">
            Tambah Dokter
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped" id="datatable">
                <thead>
                  <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dokters as $dokter) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $dokter['nama_dokter']; ?></td>
                      <td><?= $dokter['spesialis']; ?></td>
                      <td><?= $dokter['alamat']; ?></td>
                      <td><?= $dokter['telephone']; ?></td>
                      <td>
                        <a href="?page=edit-dokter&id=<?= $dokter['id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-dokter&id=<?= $dokter['id']; ?>" class="btn-hapus">
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