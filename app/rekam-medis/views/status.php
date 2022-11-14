<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];
$pasien = get_where("SELECT * FROM pasien WHERE id = '$id' ");
?>

<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Status Pasien</h4>
           <a href="?page=Status Pasien" class="btn btn-light float-right mt-1">Kembali</a>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/rekam-medis/proses/status.php" method="post">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group row">
                      <input type="hidden" name="id" value="<?= $pasien['id']; ?>">
                        <div class="col-12">
                            <div class="form-group row">
                            <div class="col-md-4">
                                <label>Status</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-control" name="status" required>
                                  <option value="Telah Diperiksa">Telah Diperiksa</option>
                                  <option value="Dalam Antrian">Dalam Antrian</option>
                                </select>
                            </div>
                            </div>
                        </div>
                  <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Update</button>
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