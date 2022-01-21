-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2022 at 09:27 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
  `alamat` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `sekolah_asal` varchar(20) NOT NULL,
  `foto_maba` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calon_mhs`
--

INSERT INTO `calon_mhs` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `foto_maba`) VALUES
(3, 'Denisa Handayani', 'Jayanegra 1', 'perempuan', 'Islam', '', 'foto2.png'),
(4, 'Ricky', 'Pulosari 5', 'laki-laki', 'Islam', 'SMAN 4', 'foto1.png'),
(6, 'Rafli Abi', 'Karang 2', 'laki-laki', 'Islam', 'SMAN 5 ', 'foto1.png'),
(7, 'Rikas Prawira', 'Newton 8 ', 'laki-laki', 'Islam', 'SMAN 2', 'foto1.png'),
(8, 'Adinda Marwah', 'Ujung Kulon 42', 'perempuan', 'Islam', '', 'foto2.png');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_dosen`
--

CREATE TABLE `daftar_dosen` (
  `foto_dosen` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nidn` int(11) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat_rumah` varchar(223) NOT NULL,
  `agama` varchar(9) NOT NULL,
  `pendidikans1` varchar(30) NOT NULL,
  `pendidikans2` varchar(30) NOT NULL,
  `pendidikans3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_dosen`
--

INSERT INTO `daftar_dosen` (`foto_dosen`, `nama`, `nidn`, `jenis_kelamin`, `email`, `alamat_rumah`, `agama`, `pendidikans1`, `pendidikans2`, `pendidikans3`) VALUES
('foto3.png', 'Djamaludin', 401099003, 'laki-laki', 'Djamaludin@unis.ac.id', 'Sepatan Tangerang', 'Islam', 'Universita Budi Luhur', 'Universitas Esa Unggul', 'Universitas Pelita Harapan'),
('foto4.png', 'Risma Ningsih', 401099014, 'perempuan', 'risma@unis.ac.id', 'Babakan Tangerang', 'Kristen', 'Universita Esa Unggul', 'Universitas Pelita Harapan', 'Universitas Budi Luhur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_dosen`
--
ALTER TABLE `daftar_dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_mhs`
--
ALTER TABLE `calon_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
