-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2021 pada 16.14
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengadilan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggotass`
--

CREATE TABLE `anggotass` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `no_hp` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `anggotass`
--

INSERT INTO `anggotass` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `created_at`, `updated_at`, `deleted_at`, `foto`) VALUES
(7, 'siti', 'samarinda', '2021-03-02', 'Jln. MT. HARYONO', '09876', '2021-03-02 05:22:42', '2021-03-02 06:59:32', NULL, 'timthumb (1).png'),
(8, 'siti', 'samarinda', '2021-03-02', 'Jln. MT. HARYONO', '09876', '2021-03-02 05:23:36', '2021-03-02 05:23:36', NULL, 'futsal.JPG'),
(9, 'Hamija', 'samarinda', '2021-03-04', 'jl. sungai dama', '085386022257', '2021-03-02 05:24:01', '2021-03-02 05:24:01', NULL, 'xca.JPG'),
(10, 'ari', 'buton', '2021-03-02', 'jl. sungai dama', '085386022257', '2021-03-02 07:07:23', '2021-03-02 07:07:23', NULL, '3D-Car-on-fire-HD-wallpaper.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukus`
--

CREATE TABLE `bukus` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(45) DEFAULT NULL,
  `judul_buku` varchar(45) DEFAULT NULL,
  `pegarang` varchar(45) DEFAULT NULL,
  `kota_terbit` varchar(45) DEFAULT NULL,
  `tahun_terbit` varchar(45) DEFAULT NULL,
  `cet_edisi_jilid` varchar(45) DEFAULT NULL,
  `no_klas` varchar(45) DEFAULT NULL,
  `sumber_pengadaan` varchar(45) DEFAULT NULL,
  `eks` varchar(45) DEFAULT NULL,
  `rak` varchar(45) DEFAULT NULL,
  `sipnosis` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(11) NOT NULL,
  `kode_peminjaman` varchar(45) DEFAULT NULL,
  `tanggal_peminjaman` date DEFAULT NULL,
  `tanggal_pengembalian` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `denda` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `anggotass_id` int(11) NOT NULL,
  `bukus_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ari', 'syarif@gmail.com', '$2y$10$t/mKFNc/HtFGDpFSabqqFOzUb67BLuE9DIciTYa65qbEzEkhV5WHG', '2021-02-25 18:41:07', '2021-02-25 18:41:07', NULL),
(2, 'Nurdiansyah', 'admin@gmail.com', '$2y$10$thV.1hpXCrgX8z7gNDNOc.D8yZHMkbOYiyMeA32/pVVlMcnVFl0h6', '2021-03-02 03:02:56', '2021-03-02 03:02:56', NULL),
(3, 'nur', 'all@gmail.com', '$2y$10$7cU/HclMQ8oVCTfu8AhzhO264R5NTEaZS3lL9toYIBmWX8xXYZQri', '2021-03-02 04:24:17', '2021-03-02 04:24:17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggotass`
--
ALTER TABLE `anggotass`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksis_anggotass_idx` (`anggotass_id`),
  ADD KEY `fk_transaksis_bukus1_idx` (`bukus_id`),
  ADD KEY `fk_transaksis_users1_idx` (`users_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggotass`
--
ALTER TABLE `anggotass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `fk_transaksis_anggotass` FOREIGN KEY (`anggotass_id`) REFERENCES `anggotass` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksis_bukus1` FOREIGN KEY (`bukus_id`) REFERENCES `bukus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksis_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
