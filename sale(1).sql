-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jul 2018 pada 06.27
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sale`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(5) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `alamat_cust` varchar(50) NOT NULL,
  `noktp_cust` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_cust`, `nama_cust`, `alamat_cust`, `noktp_cust`) VALUES
(1, 'ana', 'janti', 2147483647),
(3, 'jamal', 'bantul', 2147483647),
(4, 'dian', 'sleman', 2147483647),
(6, 'aliana', 'bantul', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jual`
--

CREATE TABLE `jual` (
  `id_jual` int(5) NOT NULL,
  `id_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `qty` int(5) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `id_cust` int(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jual`
--

INSERT INTO `jual` (`id_jual`, `id_produk`, `nama_produk`, `qty`, `harga_produk`, `id_cust`, `tanggal`) VALUES
(14, 'KAM', 'Kipas Angin Miyako', 0, 500000, 0, '0000-00-00'),
(15, 'MCS', 'Mesin Cuci Sharp', 0, 2000000, 0, '0000-00-00'),
(17, 'KAM', 'Kipas Angin Miyako', 0, 500000, 0, '0000-00-00'),
(18, 'MCS', 'Mesin Cuci Sharp', 0, 2000000, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tersedia`
--

CREATE TABLE `tersedia` (
  `id_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `stok_produk` int(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tersedia`
--

INSERT INTO `tersedia` (`id_produk`, `nama_produk`, `harga_produk`, `stok_produk`) VALUES
('KAM', 'Kipas Angin Miyako', 500000, 10),
('MCS', 'Mesin Cuci Sharp', 2000000, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `jual`
--
ALTER TABLE `jual`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tersedia`
--
ALTER TABLE `tersedia`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jual`
--
ALTER TABLE `jual`
  MODIFY `id_jual` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
