-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 07:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbsunidaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `last_log` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nama`, `email`, `password`, `last_log`) VALUES
(1, 'Administrator', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '2024-02-03 15:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mk` int(11) NOT NULL,
  `kode_mk` varchar(100) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mk`, `kode_mk`, `mata_kuliah`) VALUES
(1, 'PBS 104', 'Pengantar Akuntasi'),
(2, 'PBS 104', 'Pengantar Perbankan'),
(3, 'PBS 106', 'Teori Organisasi'),
(4, 'PBS 108', 'Sej. Pemikiran Ekonomi'),
(5, 'PBS 201', 'Akuntasi Perbankan Syariah'),
(6, 'PBS 203', 'Matematika Ekonomi'),
(7, 'PBS 206', 'Ekonomi Mikro'),
(8, 'PBS 210', 'Statistik');

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `id_pj` int(11) NOT NULL,
  `kode_penjadwalan` varchar(100) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL,
  `kode_mk` varchar(50) NOT NULL,
  `mata_kuliah` varchar(100) DEFAULT NULL,
  `hari` varchar(50) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `nip` varchar(100) NOT NULL,
  `dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjadwalan`
--

INSERT INTO `penjadwalan` (`id_pj`, `kode_penjadwalan`, `kode_kelas`, `kode_mk`, `mata_kuliah`, `hari`, `jam_mulai`, `jam_selesai`, `nip`, `dosen`) VALUES
(3, 'PBS203', 'PBS204', 'UNI403', 'Akuntansi Perpajakan', 'Rabu', '19:34:00', '22:34:00', '45678910', 'Cut Nyak,S.E'),
(4, 'PBS203', 'WKW123', 'PB106', 'Teori Organisasi', 'Jumat', '12:00:00', '13:00:00', '32453245', 'Kimmingyu,M.Kom'),
(5, 'PBS203', 'PO123', 'PB109', 'Bahasa Arab', 'Jumat', '10:00:00', '10:30:00', '1134590', 'Lala,S.Pd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`id_pj`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  MODIFY `id_pj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
