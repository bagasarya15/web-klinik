<?php
if (isset($_GET['page'])) {

	switch ($_GET['page']) {
		case 'Dashboard':
			require_once 'app/dashboard/views/index.php';
			break;
		case 'Dokter':
			require_once 'app/dokter/views/index.php';
			break;
		case 'tambah-dokter':
			require_once 'app/dokter/views/create.php';
			break;
		case 'edit-dokter':
			require_once 'app/dokter/views/edit.php';
			break;
		case 'hapus-dokter':
			require_once 'app/dokter/proses/delete.php';
			break;
		case 'Pendaftaran Pasien':
			require_once 'app/pasien/views/index.php';
			break;
		case 'tambah-pasien':
			require_once 'app/pasien/views/create.php';
			break;
		case 'edit-pasien':
			require_once 'app/pasien/views/edit.php';
			break;
		case 'hapus-pasien':
			require_once 'app/pasien/proses/delete.php';
			break;
		case 'Jadwal Kunjungan':
			require_once 'app/pasien/views/detail.php';
			break;
		case 'Obat':
			require_once 'app/obat/views/index.php';
			break;
		case 'tambah-obat':
			require_once 'app/obat/views/create.php';
			break;
		case 'edit-obat':
			require_once 'app/obat/views/edit.php';
			break;
		case 'hapus-obat':
			require_once 'app/obat/proses/delete.php';
			break;
		case 'Rekam-Medis':
			require_once 'app/rekam-medis/views/index.php';
			break;
		case 'Status Pasien':
			require_once 'app/pasien/detail_rm/index.php';
			break;
		case 'tambah-rekam-medis':
			require_once 'app/rekam-medis/views/create.php';
			break;
		case 'update-status':
			require_once 'app/rekam-medis/views/status.php';
			break;
		case 'hapus-rekam-medis':
			require_once 'app/rekam-medis/proses/delete.php';
			break;
		case 'lap-rekam-medis':
			require_once 'app/laporan/views/rekam-medis.php';
			break;
	}
} else {
	require_once 'app/dashboard/views/index.php';
}
