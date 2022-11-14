-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Sep 2022 pada 18.51
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(128) NOT NULL,
  `alamat` text,
  `telephone` varchar(16) NOT NULL,
  `spesialis` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id`, `nama_dokter`, `alamat`, `telephone`, `spesialis`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(6, 'Hardhi Pranata', 'Jalan Siliwiangi 2', '08122163839', 'Syaraf', '2022-07-23 13:23:09', '2022-08-15 07:34:27', NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `group_id`
--

CREATE TABLE `group_id` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `definition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `group_id`
--

INSERT INTO `group_id` (`id`, `name`, `definition`) VALUES
(1, 'admin', 'akses role admin'),
(2, 'dokter', 'akses role untuk dokter'),
(3, 'resepsionis', 'akses role resepsionis'),
(4, 'apoteker', 'akses role apoteker');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(128) NOT NULL,
  `keterangan` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `keterangan`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(6, 'Sibelium', 'Mual', '2022-07-23 13:19:28', '2022-08-19 11:45:18', NULL, 1, 4, NULL),
(7, 'Nat B', 'Vitamin', '2022-07-23 13:19:42', NULL, NULL, 1, NULL, NULL),
(8, 'Trobesco', 'Penambah Darah', '2022-07-23 13:19:59', NULL, NULL, 1, NULL, NULL),
(9, 'Alpentin', 'Pusing', '2022-07-23 14:16:31', '2022-08-11 06:07:59', NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(11) NOT NULL,
  `kode_daftar` varchar(30) DEFAULT NULL,
  `nama_pasien` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `tgl_daftar` date NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `jadwal_periksa` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `kode_daftar`, `nama_pasien`, `jenis_kelamin`, `tgl_daftar`, `keluhan`, `jadwal_periksa`, `status`, `created_by`, `updated_at`, `deleted_at`, `updated_by`, `deleted_by`) VALUES
(3, 'REG001', 'Rima', 'p', '2022-09-04', 'Pusing', '2022-09-04', 'Telah Diperiksa', 1, '2022-09-04 18:29:11', NULL, 1, NULL),
(4, 'REG002', 'Bagas', 'l', '2022-09-04', 'Migran', '2022-09-04', 'Telah Diperiksa', 1, NULL, NULL, 1, NULL),
(6, 'REG003', 'Naura', 'p', '2022-09-04', 'Kepala Terasa Berat', '2022-09-04', 'Telah Diperiksa', 1, '2022-09-04 18:46:24', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` int(11) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `pasien_id`, `dokter_id`, `keluhan`, `diagnosa`, `tanggal`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(3, 3, 6, '3', 'KurangMinum', '2022-09-04', '2022-09-04 18:31:01', NULL, NULL, 1, NULL, NULL),
(5, 4, 6, '4', 'Kurang Minum Dan Tidur', '2022-09-04', '2022-09-04 18:39:28', NULL, NULL, 1, NULL, NULL),
(8, 6, 6, '6', 'Kurang Minum Dan Istirahat', '2022-09-04', '2022-09-04 18:46:59', NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_obat`
--

CREATE TABLE `rm_obat` (
  `id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `rm_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rm_obat`
--

INSERT INTO `rm_obat` (`id`, `obat_id`, `rm_id`) VALUES
(6, 7, 4),
(7, 6, 5),
(8, 7, 5),
(9, 8, 5),
(10, 6, 6),
(11, 7, 6),
(12, 8, 6),
(13, 7, 1),
(14, 7, 3),
(15, 6, 4),
(16, 6, 5),
(17, 6, 6),
(18, 6, 7),
(19, 6, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `group_id`, `username`, `password`, `name`, `last_login`, `created_at`) VALUES
(1, 1, 'admin', '$2y$10$msj6kYT7y2p66Tyg1z3AueFc.ueNcwSLgmXgm3RZLV8KjBqLsWoQS', 'Administrator', '2022-08-19 06:59:26', '2022-08-19 13:59:58'),
(2, 2, 'dokter', '$2y$10$msj6kYT7y2p66Tyg1z3AueFc.ueNcwSLgmXgm3RZLV8KjBqLsWoQS', 'Dr.Hardhi', '2022-08-19 07:23:03', '2022-08-19 14:23:22'),
(3, 3, 'resepsionis', '$2y$10$msj6kYT7y2p66Tyg1z3AueFc.ueNcwSLgmXgm3RZLV8KjBqLsWoQS', 'Rima Herliana', '2022-08-19 08:25:36', '2022-08-19 15:25:55'),
(4, 4, 'apoteker', '$2y$10$msj6kYT7y2p66Tyg1z3AueFc.ueNcwSLgmXgm3RZLV8KjBqLsWoQS', 'Naura', '2022-08-19 08:28:02', '2022-08-19 15:28:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `group_id`
--
ALTER TABLE `group_id`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dokter_id` (`dokter_id`),
  ADD KEY `pasien_id` (`pasien_id`);

--
-- Indeks untuk tabel `rm_obat`
--
ALTER TABLE `rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `obat_id` (`obat_id`),
  ADD KEY `rm_id` (`rm_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `group_id`
--
ALTER TABLE `group_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `rm_obat`
--
ALTER TABLE `rm_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group_id` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
