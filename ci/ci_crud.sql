-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 04:21 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `tanggalLahir`, `alamat`, `foto`) VALUES
(3, 'Beby Novia Putri', '1998-02-06', 'Blitar', 'girl.png'),
(4, 'Silvia Anggraeni', '1997-12-13', 'Sidoarjo', 'croupier.png'),
(5, 'Dinda Putri Ariyani', '1998-04-10', 'Kotanopan', 'girl (1).png'),
(6, 'Muh. Marsudiarto', '1998-03-08', 'Sidoarjo', 'student.png'),
(7, 'Raditya Bagus Wicaksono', '1998-05-02', 'Gianyar', 'man.png'),
(11, 'M. Yazid Riyadi', '1998-02-01', 'Bojonegoro', 'showman1.png');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `namaSekolah` varchar(50) NOT NULL,
  `tahunLulus` varchar(50) NOT NULL,
  `fk_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `namaSekolah`, `tahunLulus`, `fk_pegawai`) VALUES
(1, 'SD Negeri 03 Tulungagung', '2009', 3),
(3, 'SMP Negeri 2 Sidoarjo', '2010', 4),
(4, 'SMA Negeri 2 Sidoarjo', '2013', 4),
(5, 'SMP Negeri 02 Cabean', '2012', 3),
(6, 'SMP Negeri 1 Sidoarjo', '2013', 5),
(7, 'SMK Negeri 2 Buduran', '2016', 5),
(8, 'SMK Negeri 2 Buduran', '2016', 6),
(9, 'Politeknik Negeri Malang', '2020', 6),
(10, 'SMK Negeri 2 Buduran', '2016', 7),
(11, 'UPN Veteran Jatim', '2020', 7),
(12, 'SD Negeri 1 Bojonegoro', '2010', 11),
(13, 'SMP Negeri 2 Bojonegoro', '2013', 11),
(14, 'SMA 1 Bojonegoro', '2016', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pegawai` (`fk_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `fk_pegawai` FOREIGN KEY (`fk_pegawai`) REFERENCES `pegawai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
