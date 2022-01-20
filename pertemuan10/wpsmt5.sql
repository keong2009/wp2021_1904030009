-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 12:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpsmt5`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_mhs`
--

CREATE TABLE `calon_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(1, 'Anggun Lestari', 'Kp Duyung Rt 02/04 Kel Laut biru Kec Batu karang', 'Perempuan', 'Islam', 'SMA Selam Indah', 'foto1.jpg'),
(2, 'Putra Mahesa', 'Kp Perang Rt 03/04 Kel Majapahit Kec Mataram', 'Laki-laki', 'Budha', 'SMA Tanah Pasundan', 'foto2.jpg'),
(3, 'Raden Kian Santang', 'Kp Pandawa Rt 04/04 Kel Sunda Kec Pulau Sunda', 'Laki-laki', 'Islam', 'SMA Pasundan Raya', 'foto2.jpg'),
(4, 'Raden Mahesa', 'Kp Sundaraya Rt 04/04 Kec Pasundan Kel Pulau Sunda', 'Laki-laki', 'Budha', 'SMA Pasundan Raya', 'foto2.jpg'),
(5, 'Prabu Amuk Marugul', 'Kp Pasundan Raya Rt 01/05 Kp Jatiasih Kec Pandawa', 'Laki-laki', 'Islam', 'SMA Pandawa Raya', 'foto2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
