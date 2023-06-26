-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 01:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_driver` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nopol` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_driver`, `id_mobil`, `nopol`, `tgl`, `pemasukan`, `pengeluaran`, `ket`) VALUES
(2, 648302, 1111, 'saxdcf', '2023-06-09', 23, 65432, 'ecxsa'),
(3, 5, 2, '2615', '2023-06-29', 2222, 3333, 'fajar'),
(100, 2, 2, '123456', '2023-06-12', 1234, 1234, 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `tbdriver`
--

CREATE TABLE `tbdriver` (
  `id_driver` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(11) NOT NULL,
  `tmplahir` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jkel` varchar(1) NOT NULL,
  `usia` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdriver`
--

INSERT INTO `tbdriver` (`id_driver`, `nama`, `nik`, `tmplahir`, `tgllahir`, `alamat`, `jkel`, `usia`, `email`) VALUES
(2, 'surabaya', 21323, 'nganjuk', '2023-06-16', 'kertosono', 'l', 30, 'agus@gmail.com'),
(3, 'Kediri', 21323, 'nganjuk', '2023-06-19', 'kertosono', 'l', 31, 'agus@gmail.com'),
(4, 'surabaya', 21323, 'nganjuk', '2023-06-30', 'kertosono', 'l', 30, 'agus@gmail.com'),
(5, 'adi', 21323, 'nganjuk', '2023-06-21', 'kertosono', 'l', 30, 'agus@gmail.com'),
(6, 'surabaya', 21323, 'nganjuk', '2023-06-22', 'kertosono', 'l', 30, 'agus@gmail.com'),
(7, 'cjdw', 132565747, 'sss', '2018-06-22', 'kertosono', 'l', 11, 'agus@gmail.com'),
(8, 'ahmad', 21212, 'nganjuk', '2017-03-08', 'kertosono', 'l', 30, 'ahmad@gmail.com'),
(19, 'riski ramadhan', 2147483647, 'sde', '2023-06-16', 'sby', 'L', 23, 'gowthaman.nkl1@gmail.com'),
(2323, 'surabaya', 0, 'nganjuk', '2023-06-21', 'kertosono', 's', 30000, 'ahmad@gmail.com'),
(4321, 'efkcjek', 54321, 'sdfrg', '2023-06-15', 'we', 'l', 2, 'hiyaalongor@gmail.com'),
(648302, '', 0, '', '0000-00-00', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbtrans`
--

CREATE TABLE `tbtrans` (
  `id_mobil` int(11) NOT NULL,
  `namaken` varchar(50) NOT NULL,
  `jken` varchar(50) NOT NULL,
  `nopol` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `thpajak` date NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbtrans`
--

INSERT INTO `tbtrans` (`id_mobil`, `namaken`, `jken`, `nopol`, `kapasitas`, `thpajak`, `gambar`) VALUES
(1, 'defr', 'vrf', 23, 23, '2023-06-01', ''),
(2, 'xenia 2013', 'mobil', 0, 3, '2023-06-15', ''),
(123, '23', '23', 123, 213, '2023-06-15', ''),
(321, '321', '321', 321, 321, '0000-00-00', ''),
(1111, 'aaaa', 'aaaa', 11111, 54, '0000-00-00', ''),
(4567, 'alphard', 'mobil', 0, 8, '2023-06-09', ''),
(12365, 'hgfd', 'hgfvdc', 0, 4532, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(0, 'fajar', 'fajar'),
(0, 'riski', 'riski');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_driver` (`id_driver`),
  ADD KEY `id_mobil` (`id_mobil`);

--
-- Indexes for table `tbdriver`
--
ALTER TABLE `tbdriver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indexes for table `tbtrans`
--
ALTER TABLE `tbtrans`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbdriver`
--
ALTER TABLE `tbdriver`
  MODIFY `id_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=648303;

--
-- AUTO_INCREMENT for table `tbtrans`
--
ALTER TABLE `tbtrans`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12366;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_driver`) REFERENCES `tbdriver` (`id_driver`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_mobil`) REFERENCES `tbtrans` (`id_mobil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
