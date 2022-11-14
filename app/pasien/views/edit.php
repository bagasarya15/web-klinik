<?php
require_once 'app/functions/MY_model.php';

$id = $_GET['id'];
$pasien = get_where("SELECT * FROM pasien WHERE id = '$id' ");

?>
<div class="content-header row">

  <div class="content-header-right col-md-12">
    <a href="?page=Pendaftaran Pasien" class="btn btn-light float-right mb-2">Kembali</a>
  </div>
</div>
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-12 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Pendaftaran</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form action="app/pasien/proses/update.php" method="post">
              <input type="hidden" name="id" value="<?= $pasien['id']; ?>">
              <div class="form-body">
                <div class="row">

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Kode Pendaftaran</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Kode Daftar" class="form-control" name="kode_daftar" value="<?=$pasien['kode_daftar'] ?>" required autocomplete="off" readonly>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Nama</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" placeholder="Nama Pasien" class="form-control" name="nama_pasien" value="<?=$pasien['nama_pasien'] ?>" required autocomplete="off">
                      </div>
                    </div>
                  </div>

                   <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Jenis Kelamin</label>
                      </div>
                      <div class="col-md-8">
                        <ul class="list-unstyled mb-0">
                          <li class="d-inline-block mr-2">
                           <fieldset>
                              <div class="vs-radio-con">
                                <input type="radio" <?= ($pasien['jenis_kelamin'] == 'l' ? 'checked' : ''); ?> name="jenis_kelamin" value="l">
                                <span class="vs-radio">
                                  <span class="vs-radio--border"></span>
                                  <span class="vs-radio--circle"></span>
                                </span>
                                <span class="">Laki-laki</span>
                              </div>
                            </fieldset>
                          </li>
                          <li class="d-inline-block mr-2">
                            <fieldset>
                              <div class="vs-radio-con">
                                 <input type="radio" name="jenis_kelamin" <?= ($pasien['jenis_kelamin'] == 'p' ? 'checked' : ''); ?> value="p">
                                <span class="vs-radio">
                                  <span class="vs-radio--border"></span>
                                  <span class="vs-radio--circle"></span>
                                </span>
                                <span class="">Perempuan</span>
                              </div>
                            </fieldset>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Tanggal Daftar</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="tgl_daftar" value="<?= date('Y-m-d'); ?>" readonly class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Keluhan</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="keluhan" class="form-control" placeholder="Keluhan" value="<?= $pasien['keluhan'] ?>" autocomplete="off"> 
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group row">
                      <div class="col-md-4">
                        <label>Jadwal Periksa</label>
                      </div>
                      <div class="col-md-8">
                        <input type="date" name="jadwal_periksa" class="form-control" value="<?= $pasien['jadwal_periksa'] ?>">
                      </div>
                    </div>
                  </div>

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
                    <button type="submit" name="save" class="btn btn-primary">Save</button>
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