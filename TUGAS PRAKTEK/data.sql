-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 12:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_selay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `ID_penerbit` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `telpon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`ID_penerbit`, `nama`, `alamat`, `kota`, `telpon`) VALUES
('SP01', 'Penerbit Informatika', 'Jl. Buah Batu No. 121', 'Bandung', '0813-2220-1946'),
('SP02', 'Andi Offset', 'Jl. Suryalaya IX No.3', 'Bandung', '0878-3903-0688'),
('SP03', 'Danendra', 'Jl Moch. Toha 44', 'Bandung', '022-5201215');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `ID_Buku` varchar(25) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Nama_Buku` varchar(100) NOT NULL,
  `Harga` int(20) NOT NULL,
  `Stok` int(20) NOT NULL,
  `Penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`ID_Buku`, `Kategori`, `Nama_Buku`, `Harga`, `Stok`, `Penerbit`) VALUES
('B1001 ', ' Bisnis ', 'Bisnis Online ', 75000, 9, 'Penerbit Informatika'),
('B1002 ', 'Bisnis', 'Etika Bisnis dan Tanggung\r\nJawab Sosial ', 67500, 20, 'Penerbit Informatika'),
('K1001', 'Keilmuan', 'Analisis & Perancangan Sistem\r\nInformasi', 50000, 60, 'Penerbit Informatika'),
('K1002', 'Keilmuan', 'Artifical Intelligence', 45000, 60, 'Penerbit Informatika'),
('K2003', 'Keilmuan', 'Autocad 3 Dimensi', 40000, 25, 'Penerbit Informatika'),
('K3004 ', 'Keilmua', 'Cloud Computing Technology ', 85000, 15, 'Penerbit Informatika'),
('N1001', 'Novel', 'Cahaya Di Penjuru Hati', 68000, 10, 'Andi Offset'),
('N1002', 'Novel', 'Aku Ingin Cerita', 48000, 12, 'Danendra');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`ID_penerbit`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`ID_Buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;