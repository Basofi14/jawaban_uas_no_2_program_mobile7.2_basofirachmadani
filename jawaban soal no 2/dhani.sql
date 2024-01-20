-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2024 pada 06.32
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhani`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jeniskelamin` enum('Pria','Wanita') NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `Nama`, `Jeniskelamin`, `Alamat`, `Email`, `Username`, `Password`, `Level`) VALUES
(0, 'Rio', 'Pria', 'Rawa makmur', 'Rio', 'Rio', 'Rio', 'Pengguna'),
(13, 'degea', 'Pria', 'bengkulu', 'degea1@gmaul.com', 'degea', 'degea', 'Pengguna'),
(14, 'ronaldo', 'Pria', 'Bengkulu', 'ronaldo1@gmail.com', 'ronaldo', 'ronaldo', 'Pengguna'),
(15, 'dhani', 'Pria', 'bentiring', 'dhani@gmail.com', 'op', 'op', 'Operator'),
(999, 'Admin', 'Wanita', 'Jakarta', 'ADM@gmail.com', 'adm', 'adm', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nohp` decimal(50,0) NOT NULL,
  `alamat` text NOT NULL,
  `harga` enum('Ambil sendiri Rp.5.000','Diantar Rp.7.000') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `nohp`, `alamat`, `harga`) VALUES
(5, 'Rio', '82250923445', 'Rawa makmur', 'Ambil sendiri Rp.5.000'),
(6, 'Agus', '81234567890', 'Nakau', 'Diantar Rp.7.000'),
(29, '', '0', '', 'Ambil sendiri Rp.5.000'),
(30, '', '0', '', 'Ambil sendiri Rp.5.000'),
(31, '', '0', '', 'Ambil sendiri Rp.5.000'),
(32, 'degea', '85767263574', 'bengkulu', 'Diantar Rp.7.000'),
(33, '', '0', '', 'Ambil sendiri Rp.5.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
