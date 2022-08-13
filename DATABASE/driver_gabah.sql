-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Agu 2022 pada 08.38
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driver_gabah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `nopol` varchar(15) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `driver`
--

INSERT INTO `driver` (`id`, `nama`, `alamat`, `kabupaten`, `nopol`, `jenis`, `foto`, `email`, `nohp`) VALUES
(1, 'will', 'kayu', 'makassar', 'DD 2322 AM', 'Pic Up', '', 'driver@gmail.com', '0987654345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fpetani`
--

CREATE TABLE `fpetani` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fpetani`
--

INSERT INTO `fpetani` (`id`, `nama`, `alamat`, `kabupaten`, `foto`, `email`) VALUES
(1, 'alsa', 'pasang kayu', 'sidrap', 'ww', 'petani@gmail.com'),
(2, 'fhfh', 'jdf', 'DNFE', '', 'FNFNR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gabah`
--

CREATE TABLE `gabah` (
  `id` int(11) NOT NULL,
  `id_petani` int(11) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `kontak` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gabah`
--

INSERT INTO `gabah` (`id`, `id_petani`, `foto`, `lokasi`, `tujuan`, `jumlah`, `satuan`, `kontak`) VALUES
(1, 1, '', 'Sidrap', 'Makassar', '1 Ton', '30 Karun', '34567890');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petani`
--

CREATE TABLE `petani` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `petani`
--

INSERT INTO `petani` (`id`, `nama`, `alamat`, `kabupaten`, `foto`, `email`) VALUES
(0, 'tono', 'langkura, desan kayu, kecematan pasang kayi', 'sidrap', '.', 'tono@gmail.com'),
(1, 'tono', 'dfddd', 'sfss', 'sdwe', 'sdweff'),
(2, 'FF', 'NJK', 'JKK', 'JKN', 'JKBJK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fpetani`
--
ALTER TABLE `fpetani`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gabah`
--
ALTER TABLE `gabah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petani`
--
ALTER TABLE `petani`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fpetani`
--
ALTER TABLE `fpetani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `gabah`
--
ALTER TABLE `gabah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
