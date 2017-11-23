-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 03:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE IF NOT EXISTS `auth` (
`ID` int(5) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `PRIVILEGE` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`ID`, `NAME`, `PASSWORD`, `PRIVILEGE`) VALUES
(2, 'Muhammad Noor Taufiq', '7532159', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_cucian`
--

CREATE TABLE IF NOT EXISTS `daftar_cucian` (
`id_order` int(20) NOT NULL,
  `nama_pelanggan` varchar(30) NOT NULL,
  `no_handphone` int(40) NOT NULL,
  `jenis_cucian` varchar(20) NOT NULL,
  `metode_pengerjaan` varchar(20) NOT NULL,
  `berat/ukuran` int(20) NOT NULL,
  `total_biaya` int(20) NOT NULL,
  `tanggal_order` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
`id_item` int(20) NOT NULL,
  `nama_item` varchar(21) NOT NULL,
  `satuan_ukur` varchar(10) NOT NULL,
  `harga_satuan` int(10) NOT NULL,
  `harga_setrika_saja` int(10) NOT NULL,
  `harga_cuci_saja` int(10) NOT NULL,
  `harga_cuci_setrika` int(10) NOT NULL,
  `waktu_pengerjaan` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_item`, `nama_item`, `satuan_ukur`, `harga_satuan`, `harga_setrika_saja`, `harga_cuci_saja`, `harga_cuci_setrika`, `waktu_pengerjaan`, `keterangan`) VALUES
(1, 'Pakaian', 'Kilogram', 0, 5000, 5000, 6500, '2 hari', 'Standar'),
(2, 'Selimut', 'Kilogram', 6500, 0, 6500, 0, '2 hari', 'Standar'),
(3, 'Pakaian(semiexpress)', 'Kilogram', 0, 8000, 8000, 10000, '1 hari', 'Semi Express'),
(4, 'Pakaian(express)', 'Kilogram', 0, 11000, 11000, 13000, '13 Jam', 'Express'),
(5, 'Karpet Karet Tipis', 'Meter2', 8000, 0, 8000, 0, 'Menyesuaikan', 'Standar'),
(6, 'Hambal', 'Meter2', 10000, 0, 10000, 0, 'Menyesuaikan', 'Standar'),
(7, 'Karpet tebal/berbulu', 'Meter2', 12000, 12000, 12000, 12000, 'Menyesuaikan', 'Standar'),
(8, 'Tikar', 'Meter2', 9000, 0, 9000, 0, 'Menyesuaikan', 'Standar'),
(9, 'Bedcover', 'Kilogram', 7500, 0, 7500, 0, 'Menyesuaikan', 'Standar'),
(10, 'Gorden', 'Kilogram', 10000, 0, 10000, 0, 'Menyesuaikan', 'Standar'),
(11, 'Bedcover(semiexpress)', 'Kilogram', 0, 0, 10500, 0, '1 hari', 'Semi Express'),
(12, 'Bedcover(express)', 'Kilogram', 0, 0, 13500, 0, '12 Jam', 'Express');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `daftar_cucian`
--
ALTER TABLE `daftar_cucian`
 ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
 ADD PRIMARY KEY (`id_item`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `daftar_cucian`
--
ALTER TABLE `daftar_cucian`
MODIFY `id_order` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
MODIFY `id_item` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
