<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];

$pasien = get_where("SELECT * FROM pasien WHERE id = '$id' ");
$dokters = get("SELECT * FROM dokter");
$obats = get("SELECT * FROM obat");
?>

<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Tambah Rekam Medis</h4>
           <a href="?Status page=Pasien" class="btn btn-light float-right mt-1">Kembali</a>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/rekam-medis/proses/create.php" method="post">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Pasien</label>
                      </div>
                      <div class="col-md-8">
                        <input type="hidden" name="pasien_id" value="<?= $pasien['id']; ?>" readonly class="form-control">
                        <input type="text"  value="<?= $pasien['nama_pasien']; ?>" readonly class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Keluhan</label>
                      </div>
                      <div class="col-md-8">
                        <input type="hidden" name="keluhan" value="<?= $pasien['id']; ?>" readonly class="form-control">
                        <input type="text" value="<?= $pasien['keluhan']; ?>" readonly class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Dokter</label>
                      </div>
                      <div class="col-md-8">
                        <select class="form-control" name="dokter_id" required>
                          <?php foreach ($dokters as $dokter) : ?>
                            <option value="<?= $dokter['id']; ?>"><?= $dokter['nama_dokter']; ?> </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Diagnosa</label>
                      </div>
                      <div class="col-md-8">
                        <textarea class="form-control" id="basicTextarea" rows="3" placeholder="Diagnosa" name="diagnosa" required autocomplete="off"></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Obat</label>
                      </div>
                      <div class="col-md-8">
                        <select class="form-control" multiple name="obat_id[]" required>
                          <option value="pilih">Pilih Obat</option>
                          <?php foreach ($obats as $obat) : ?>
                            <option value="<?= $obat['id']; ?>"><?= $obat['nama_obat']; ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Tanggal Periksa</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="tanggal" value="<?= date('Y-m-d'); ?>" readonly class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

$addon_script = ['assets/vendors/js/forms/select/select2.full.min.js', 'assets/js/scripts/forms/select/form-select2.js'];

?>