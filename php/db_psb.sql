-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 09:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Umsu', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` char(10) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `th_ajaran` varchar(9) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `nm_peserta` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `almt_peserta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `th_ajaran`, `jurusan`, `nm_peserta`, `tmp_lahir`, `tgl_lahir`, `jk`, `agama`, `almt_peserta`) VALUES
('P202400001', '2024-12-16', '2024/2025', 'Ilmu Komputer Dan Teknologi Informasi', 'syahputra', 'kisaran', '2004-11-21', 'Laki-Laki', 'Islam', 'alfalah 1'),
('P202400003', '2024-12-16', '2024/2025', '0', '', '', '0000-00-00', '', '0', ''),
('P202400005', '2024-12-16', '2024/2025', 'Agama Islam', 'syahputra anugrah rijky', 'kisaran', '2004-11-21', 'Laki-Laki', 'Islam', 'kisaran'),
('P202400006', '2024-12-16', '2024/2025', 'Ilmu Komputer Dan Teknologi Informasi', 'syahputera', 'meadn', '2004-11-21', 'Laki-Laki', 'Islam', 'krasan'),
('P202400007', '2024-12-16', '2024/2025', '0', '', '', '0000-00-00', '', '0', ''),
('P202400008', '2024-12-17', '2024/2025', 'Ilmu Komputer Dan Teknologi Informasi', 'putra', 'kisaran', '2004-11-21', 'Laki-Laki', 'Islam', 'alfala'),
('P202400009', '2024-12-17', '2024/2025', '0', '', '', '0000-00-00', '', '0', ''),
('P202400010', '2024-12-17', '2024/2025', 'Agama Islam', 'syahputra', 'kisaran', '2004-11-21', 'Laki-Laki', 'Islam', 'alfala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
