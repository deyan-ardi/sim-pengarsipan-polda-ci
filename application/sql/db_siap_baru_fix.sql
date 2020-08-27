-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Agu 2020 pada 17.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siap_baru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disp` int(10) NOT NULL,
  `no_agenda` varchar(20) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `isi_disposisi` varchar(250) NOT NULL,
  `sifat` varchar(50) NOT NULL,
  `batas_waktu` date NOT NULL,
  `catatan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator Web'),
(2, 'members', 'General User'),
(3, 'pimpinan', 'Group User Pimpinan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_naskah_dinas`
--

CREATE TABLE `jenis_naskah_dinas` (
  `id` int(11) NOT NULL,
  `kode_naskah` varchar(11) NOT NULL,
  `jenis_naskah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_naskah_dinas`
--

INSERT INTO `jenis_naskah_dinas` (`id`, `kode_naskah`, `jenis_naskah`) VALUES
(18, 'NSKH001', 'naskah baru'),
(19, 'NSKH002', 'Testing'),
(20, 'NSKH003', 'TT'),
(21, 'NSKH004', 'TT'),
(22, 'NSKH005', 'T'),
(23, 'NSKH006', 'TT'),
(24, 'NSKH007', 'TT'),
(25, 'NSKH008', 'TT'),
(26, 'NSKH009', 'TT'),
(27, 'NSKH010', 'TT'),
(28, 'NSKH011', 'TT'),
(29, 'NSKH012', 'TT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id` int(11) NOT NULL,
  `kode_surat` varchar(20) NOT NULL,
  `nama_jenis` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_surat`
--

INSERT INTO `jenis_surat` (`id`, `kode_surat`, `nama_jenis`) VALUES
(4, 'SRT001', 'baru'),
(5, 'SRT002', 'Test 2'),
(7, 'SRT003', 'baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klasifikasi_surat`
--

CREATE TABLE `klasifikasi_surat` (
  `id` int(11) NOT NULL,
  `kode_klasifikasi` varchar(20) NOT NULL,
  `derajat` varchar(50) NOT NULL,
  `nama_klasifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klasifikasi_surat`
--

INSERT INTO `klasifikasi_surat` (`id`, `kode_klasifikasi`, `derajat`, `nama_klasifikasi`) VALUES
(6, 'KLSF001', 'baru', 'test baru'),
(7, 'KLSF002', 'baru', 'baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_arsip`
--

CREATE TABLE `kode_arsip` (
  `id` int(11) NOT NULL,
  `kode_arsip` varchar(50) DEFAULT NULL,
  `nama_arsip` varchar(50) NOT NULL,
  `primer` varchar(100) NOT NULL,
  `sekunder` varchar(100) NOT NULL,
  `tersier` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kode_arsip`
--

INSERT INTO `kode_arsip` (`id`, `kode_arsip`, `nama_arsip`, `primer`, `sekunder`, `tersier`) VALUES
(7, 'ARSP001', 'Surat Penting banget', '1', '2', '3'),
(8, 'ARSP002', 'testing 002', '1', '2', '3'),
(10, 'ARSP003', 'testing 001', 'testing 001', 'testing 001', 'testing 001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nrp` int(6) NOT NULL,
  `pangkat` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_satker` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `satker`
--

CREATE TABLE `satker` (
  `id_satker` int(11) NOT NULL,
  `kode_satker` varchar(20) NOT NULL,
  `nama_satker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `satker`
--

INSERT INTO `satker` (`id_satker`, `kode_satker`, `nama_satker`) VALUES
(9, 'STKR001', 'Satker Baru Diedit'),
(10, 'STKR002', 'Satker Baru Diedit 2'),
(12, 'STKR003', 'Fix');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(10) NOT NULL,
  `no_agenda` varchar(20) NOT NULL,
  `no_surat` int(20) NOT NULL,
  `jenis_surat` int(11) NOT NULL,
  `klasifikasi_surat` int(11) NOT NULL,
  `kode_arsip` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_kirim` datetime NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `isi_ringkas` varchar(250) NOT NULL,
  `lampiran` int(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `file` varchar(250) NOT NULL,
  `jenis_naskah_dinas` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `no_agenda`, `no_surat`, `jenis_surat`, `klasifikasi_surat`, `kode_arsip`, `tanggal_surat`, `tanggal_kirim`, `tujuan`, `perihal`, `isi_ringkas`, `lampiran`, `keterangan`, `file`, `jenis_naskah_dinas`, `id_user`) VALUES
(5, '20200814231822', 1234, 5, 6, 7, '2020-08-04', '2020-08-14 23:18:22', 'Ada Deh', 'Ada Deh', 'Pas', 2, 'ada', '20200814231822.pdf', 19, 1);

--
-- Trigger `surat_keluar`
--
DELIMITER $$
CREATE TRIGGER `triger_waktu` BEFORE INSERT ON `surat_keluar` FOR EACH ROW BEGIN
    IF NEW.tanggal_kirim = '0000-00-00 00:00:00' THEN
        SET NEW.tanggal_kirim = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(10) NOT NULL,
  `no_agenda` varchar(20) NOT NULL,
  `no_surat` int(20) NOT NULL,
  `jenis_surat` int(11) NOT NULL,
  `klasifikasi_surat` int(11) NOT NULL,
  `kode_arsip` int(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_terima` datetime NOT NULL,
  `asal_surat` int(11) NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `isi_ringkas` varchar(100) NOT NULL,
  `lampiran` int(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `jenis_naskah_dinas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `no_agenda`, `no_surat`, `jenis_surat`, `klasifikasi_surat`, `kode_arsip`, `tanggal_surat`, `tanggal_terima`, `asal_surat`, `perihal`, `isi_ringkas`, `lampiran`, `keterangan`, `file`, `jenis_naskah_dinas`) VALUES
(13, '20200814231455', 1234, 4, 6, 7, '2020-08-13', '2020-08-14 23:14:55', 9, '123', 'ada deh', 2, 'ada', '20200814231455.pdf', 18);

--
-- Trigger `surat_masuk`
--
DELIMITER $$
CREATE TRIGGER `trigger_tanggal_terima` BEFORE INSERT ON `surat_masuk` FOR EACH ROW BEGIN
    IF NEW.tanggal_terima = '0000-00-00 00:00:00' THEN
        SET NEW.tanggal_terima = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) DEFAULT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `gambar`, `first_name`, `last_name`, `jenis_kelamin`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$KCnFuVXmjd0pdXxmP/wAeu6pG2ZJCZklE/wpvBgCTOGhnPLXXXdiO', 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1268889823, 1597400871, 1, '20200813163136.png', 'Admin Web Inti', 'istrator', 'Laki-Laki', '081915656865');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(36, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disp`),
  ADD KEY `id_surat` (`id_surat`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_naskah_dinas`
--
ALTER TABLE `jenis_naskah_dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indeks untuk tabel `klasifikasi_surat`
--
ALTER TABLE `klasifikasi_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kode_arsip`
--
ALTER TABLE `kode_arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_satker` (`id_satker`);

--
-- Indeks untuk tabel `satker`
--
ALTER TABLE `satker`
  ADD PRIMARY KEY (`id_satker`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_surat` (`jenis_surat`),
  ADD KEY `klasifikasi_surat` (`klasifikasi_surat`),
  ADD KEY `kode_arsip` (`kode_arsip`),
  ADD KEY `tujuan` (`tujuan`),
  ADD KEY `jenis_naskah_dinas` (`jenis_naskah_dinas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_surat` (`jenis_surat`),
  ADD KEY `Klasifikasi_surat` (`klasifikasi_surat`),
  ADD KEY `kode_arsip` (`kode_arsip`),
  ADD KEY `jenis_naskah_dinas` (`jenis_naskah_dinas`),
  ADD KEY `surat_masuk_saker` (`asal_surat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenis_naskah_dinas`
--
ALTER TABLE `jenis_naskah_dinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `klasifikasi_surat`
--
ALTER TABLE `klasifikasi_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kode_arsip`
--
ALTER TABLE `kode_arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `satker`
--
ALTER TABLE `satker`
  MODIFY `id_satker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_ibfk_1` FOREIGN KEY (`id_surat`) REFERENCES `surat_masuk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_satker`) REFERENCES `satker` (`id_satker`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`jenis_surat`) REFERENCES `jenis_surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_keluar_ibfk_2` FOREIGN KEY (`klasifikasi_surat`) REFERENCES `klasifikasi_surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_keluar_ibfk_4` FOREIGN KEY (`jenis_naskah_dinas`) REFERENCES `jenis_naskah_dinas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_keluar_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_keluar_ibfk_6` FOREIGN KEY (`kode_arsip`) REFERENCES `kode_arsip` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`jenis_surat`) REFERENCES `jenis_surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_masuk_ibfk_2` FOREIGN KEY (`klasifikasi_surat`) REFERENCES `klasifikasi_surat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_masuk_ibfk_3` FOREIGN KEY (`kode_arsip`) REFERENCES `kode_arsip` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_masuk_ibfk_4` FOREIGN KEY (`jenis_naskah_dinas`) REFERENCES `jenis_naskah_dinas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_masuk_saker` FOREIGN KEY (`asal_surat`) REFERENCES `satker` (`id_satker`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1_idx	` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1_idx` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
