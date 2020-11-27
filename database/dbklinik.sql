-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 09:55 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nodokter` int(11) NOT NULL,
  `namadokter` text DEFAULT NULL,
  `jk` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` text DEFAULT NULL,
  `telp` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `spesialis` text DEFAULT NULL,
  `tarif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nodokter`, `namadokter`, `jk`, `tgl_lahir`, `email`, `telp`, `alamat`, `spesialis`, `tarif`) VALUES
(201, 'Agus', 'L', '2002-07-10', 'agus@gmail.com', '082125659020', 'Tambun', 'Umum', 500000),
(202, 'Jubaedah', 'P', '2002-07-12', 'Juabedah@gmail.com', '082125659020', 'Cikarang', 'Gigi', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nopasien` int(11) NOT NULL,
  `namapasien` text DEFAULT NULL,
  `jk` text DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` text DEFAULT NULL,
  `telp` text DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nopasien`, `namapasien`, `jk`, `tgl_lahir`, `agama`, `telp`, `alamat`) VALUES
(101, 'Bambang', 'L', '2002-07-12', 'Islam', '082125652279', 'Cibitung'),
(102, 'Wati', 'P', '2002-07-10', 'Islam', '082125659020', 'Tambun'),
(103, 'Siti', 'P', '2020-11-25', 'Islam', '08452761343', 'Bekasi'),
(105, 'Agus', 'L', '2020-11-18', 'Islam', '32421351', 'Bekasi Utara'),
(106, 'Budi', 'L', '2020-11-18', 'Islam', '048466199', 'Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `norekam` int(11) NOT NULL,
  `tgl_rekam` date DEFAULT NULL,
  `nopasien` int(11) DEFAULT NULL,
  `nodokter` int(11) DEFAULT NULL,
  `keluhan` text DEFAULT NULL,
  `diagnosa` text DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekammedis`
--

INSERT INTO `rekammedis` (`norekam`, `tgl_rekam`, `nopasien`, `nodokter`, `keluhan`, `diagnosa`, `biaya`) VALUES
(301, '2002-07-12', 101, 202, 'Batuk Pilek', 'Radang', 70000),
(302, '2002-07-15', 102, 201, 'sakit di bagian ulu hati', 'Maag', 70000),
(304, '2020-11-19', 0, 0, 'Batuk', 'Radang', 5243523),
(305, '2020-11-06', 0, 0, 'Panas', 'Demam', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`nodokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nopasien`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`norekam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
