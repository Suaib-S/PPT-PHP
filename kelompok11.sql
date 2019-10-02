-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2019 at 02:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok11`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelompok11`
--

CREATE TABLE `kelompok11` (
  `NIM` bigint(20) NOT NULL,
  `NAMA` varchar(20) NOT NULL,
  `KELAS` varchar(15) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `JENIS_KELAMIN` char(2) NOT NULL,
  `ALAMAT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelompok11`
--

INSERT INTO `kelompok11` (`NIM`, `NAMA`, `KELAS`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `ALAMAT`) VALUES
(1729041023, 'SUAIB S', 'PTIK-D 2017', '1998-11-17', 'LK', 'JL.MUHAJIRIN 2'),
(1729041068, 'KURNIATI KUSNO', 'PTIK-D 2017', '1999-01-01', 'PR', 'PERDOS UNM PARTAM'),
(1729042048, 'ALDE OCTORIADE', 'PTIK-D 2017', '1999-01-01', 'LK', 'JL. SYEKH YUSUF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelompok11`
--
ALTER TABLE `kelompok11`
  ADD PRIMARY KEY (`NIM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
