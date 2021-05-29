-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2021 pada 12.16
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penitipanhewan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booing` int(11) NOT NULL,
  `ktp` varchar(120) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `nama_penitip` varchar(60) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `kode_pembayaran` char(35) NOT NULL,
  `slot_kdg` int(11) NOT NULL,
  `kode_hewan` int(11) NOT NULL,
  `status_kdg` int(1) NOT NULL,
  `nama_hewan` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` int(11) NOT NULL,
  `kode_hewan` int(11) NOT NULL,
  `jenis_hewan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_id`
--

CREATE TABLE `role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_id`
--

INSERT INTO `role_id` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_penitipan` int(11) NOT NULL,
  `tgl_pengembalian` int(11) NOT NULL,
  `status_penitipan` int(11) NOT NULL,
  `nama_hewan` varchar(120) NOT NULL,
  `kode_hewan` int(11) NOT NULL,
  `nama_penitip` varchar(120) NOT NULL,
  `status_pembayaran` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `no_telp` char(20) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `email` varchar(120) NOT NULL,
  `image` varchar(60) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `no_telp`, `alamat`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'Iis Fitria', '12345678909', '', 'iisfitria123@gmail.com', 'default.jpg', '$2y$10$DaCBKJuDLG.sNfYJUtfKgeAV3bX7UlynFrT3k0h/Q1vW5DRg12.YC', 2, 1, 1615878813),
(3, 'Iis Fitria', '', '', 'sukasuka123@gmail.com', 'default.jpg', '$2y$10$OdDGBQDZavIaBnArcYf66.t5JUplC4Q.YUdKJnxb9mVZFIMcgZaau', 1, 1, 1615972036),
(4, 'Fitria', '', '', 'nggatau123@gmail.com', 'default.jpg', '$2y$10$VeIUcKd6axJfAIgoPvz7P.LScul64eQkyYGcPWerfAg4094LukLKO', 2, 1, 1616132226),
(5, 'admin', '', '', 'admin@gmail.com', 'default.jpg', '$2y$10$yl1g/5sov1iuVuRCu/Z33e8hnEYrcCBXxZW159GGzalj5I1unambO', 1, 1, 1619333703);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booing`);

--
-- Indeks untuk tabel `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indeks untuk tabel `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booing` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id_hewan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
