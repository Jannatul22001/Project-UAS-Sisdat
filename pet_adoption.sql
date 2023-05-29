-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 29, 2023 at 08:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_adoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` int(6) NOT NULL,
  `jenis_hewan` char(30) DEFAULT NULL,
  `nama_hewan` char(30) DEFAULT NULL,
  `harga_hewan` int(9) DEFAULT NULL,
  `umur` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `jenis_hewan`, `nama_hewan`, `harga_hewan`, `umur`) VALUES
(410001, 'Anjing', 'Husky Siberia', 2000000, 5),
(410002, 'Anjing', 'Golden Retriever', 1500000, 7),
(430001, 'Kelinci', 'Netherland Dwarf', 500000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(6) NOT NULL,
  `nama_pelanggan` char(30) DEFAULT NULL,
  `alamat_pelanggan` text DEFAULT NULL,
  `telp_pelanggan` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `telp_pelanggan`) VALUES
(101010, 'sabila', 'cibe', 88888),
(112234, 'joy', 'bandung', 12345667),
(172282, 'dora', 'pndok raditya', 909055);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `no_penjualan` int(3) NOT NULL,
  `id_pelanggan` int(6) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`no_penjualan`, `id_pelanggan`, `tgl_transaksi`, `total`) VALUES
(1, 123456, '2023-05-28', 200000),
(12, 121345, '2023-05-31', 1231231),
(13, 112233, '2023-05-29', 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan_detail`
--

CREATE TABLE `penjualan_detail` (
  `no_penjualan_detail` int(11) NOT NULL,
  `no_penjualan` int(4) NOT NULL,
  `id_hewan` int(6) NOT NULL,
  `qty` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan_detail`
--

INSERT INTO `penjualan_detail` (`no_penjualan_detail`, `no_penjualan`, `id_hewan`, `qty`) VALUES
(1, 2, 410008, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`no_penjualan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `penjualan_detail`
--
ALTER TABLE `penjualan_detail`
  ADD PRIMARY KEY (`no_penjualan_detail`),
  ADD KEY `no_penjualan` (`no_penjualan`),
  ADD KEY `id_hewan` (`id_hewan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
