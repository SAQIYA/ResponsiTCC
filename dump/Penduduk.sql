-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 07:53 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataPenduduk`
--

CREATE TABLE `dataPenduduk` (
  `id` int(11) NOT NULL,
  `noKTP` varchar(20) DEFAULT NULL,
  `namaPanjang` varchar(20) DEFAULT NULL,
  `jenisKelamin` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `statusKawin` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataPenduduk`
--

INSERT INTO `dataPenduduk` (`id`, `noKTP`,'namaPanjang', `jenisKelamin`, `alamat`, `statusKawin`, `pekerjaan`) VALUES
(10, '1716812828', 'Zilong Zizah', 'Perempuan', 'wakanda', 'Kawin', 'mahasiswa'),
(10, '1716812828', 'Zilong Zizah', 'Perempuan', 'wakanda', 'Kawin', 'mahasiswa'),
(18, '1371838', 'Yudi', 'Laki-Laki', 'Jogja', 'Kawin', 'solo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataPenduduk`
--
ALTER TABLE `dataPenduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataPenduduk`
--
ALTER TABLE `dataPenduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
