-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Sep 2020 pada 16.37
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_server`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email`, `password`, `nama`) VALUES
(1, 'softwareincom@gmail.com', '$2y$10$Juz6pmgrfpWrjPvBCOqG0ut1VMp.o2pIJ6UrVAospuFjQKFzw9wKu', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nip` int(18) DEFAULT NULL,
  `jk` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tempatlahir` varchar(128) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Khonghucu') DEFAULT NULL,
  `warganegara` varchar(50) DEFAULT NULL,
  `status` enum('Belum Kawin','Kawin','Lajang','') DEFAULT NULL,
  `pend_terakhir` enum('SD','SMP','SMA','SMK','D1','D2','D3','S1','S2','S3') DEFAULT NULL,
  `tlp` varchar(50) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `active` enum('0','1') NOT NULL,
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email`, `password`, `nama`, `nip`, `jk`, `tempatlahir`, `tgllahir`, `alamat`, `agama`, `warganegara`, `status`, `pend_terakhir`, `tlp`, `image`, `active`, `create`) VALUES
(1, 'ridwanpenjaga.surga6@gmail.com', '$2y$10$yBRZ5SrMWBT1RsZjPcVHnud.naVixT4as9e7icJK/iW4MWJYpObZq', 'Ridwan Ramadhan, S.m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default.png', '1', '2020-09-15 13:12:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
