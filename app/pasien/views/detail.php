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
                    <h4 class="card-title">Jadwal Kunjungan Pasien</h4>
                </div>

                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                            <table class="table table-striped" id="datatable">
                                <tr>
                                    <td>Kode Pendaftaran</td>
                                    <td><?= $pasien['kode_daftar'];?></td>
                                </tr>
                                <tr>
                                    <td>Nama Pasien</td>
                                    <td><?= $pasien['nama_pasien'];?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td><?= $pasien['jenis_kelamin'] == 'l' ? 'Laki-laki' : 'Perempuan';?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Daftar</td>
                                    <td><?= $pasien['tgl_daftar'];?></td>
                                </tr>
                                <tr>
                                    <td>Keluhan</td>
                                    <td><?= $pasien['keluhan'];?></td>
                                </tr>
                                <tr>
                                    <td>Jadwal Periksa</td>
                                    <td><?= $pasien['jadwal_periksa'];?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td><?= $pasien['status'];?></td>
                                </tr>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>