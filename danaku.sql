-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2022 pada 03.53
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20018032_danaku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `password`, `username`) VALUES
(1, 'kurniawatiagustina', '123', 'Nia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_budget`
--

CREATE TABLE `tb_budget` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `wishlist` varchar(50) NOT NULL,
  `pemasukan` varchar(50) NOT NULL,
  `tabungan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_budget`
--

INSERT INTO `tb_budget` (`id`, `tanggal`, `wishlist`, `pemasukan`, `tabungan`) VALUES
(19, '2022-12-08', 'Beli Rumah', '150.0000', '300.000'),
(20, '2023-01-20', 'Jalan-jalan', '200.000', '100.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_catat`
--

CREATE TABLE `tb_catat` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `pemasukan` varchar(10) NOT NULL,
  `pengeluaran` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_catat`
--

INSERT INTO `tb_catat` (`id`, `tanggal`, `pemasukan`, `pengeluaran`, `keterangan`) VALUES
(6, '2022-12-12', '70.000', '50.000', 'sumbangan'),
(7, '2022-12-12', '20.000', '10.000', 'Beli Aqua'),
(9, '2022-12-15', '50.000', '15.000', 'Nasi kotak'),
(13, '2022-12-14', '120.000', '10.000', 'Roti');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_budget`
--
ALTER TABLE `tb_budget`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_catat`
--
ALTER TABLE `tb_catat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_budget`
--
ALTER TABLE `tb_budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_catat`
--
ALTER TABLE `tb_catat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
