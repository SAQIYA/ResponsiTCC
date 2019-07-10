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
-- Database: `biodata2`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata2`
--

CREATE TABLE `biodata2` (
  `id` int(11) NOT NULL,
  `namaDepan` varchar(20) DEFAULT NULL,
  `namaBelakang` varchar(20) DEFAULT NULL,
  `jenisKelamin` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `noTelp` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata2`
--

INSERT INTO `biodata2` (`id`, `namaDepan`, `namaBelakang`, `jenisKelamin`, `alamat`, `noTelp`, `email`) VALUES
(10, 'sugeng', '123456789', 'waria', 'wakanda', '0878899112233', 'sugengmut@yahoo.com'),
(11, 'aaasd', '12345679', 'Laki-Laki', 'sleman', '08781818111', 'asdasd@yahoo.com'),
(12, 'fjar', '12345679', 'Laki', 'sleman', '08781818111', 'asdasd@yahoo.com'),
(17, 'aaaaaa', 'Yudi', 'Laki-Laki', 'Jogja', '99', 'dyanfajar0@gmail.com'),
(18, 'Fajar', 'Yudi', 'Laki-Laki', 'Jogja', '123', 'dyanfajar0@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata2`
--
ALTER TABLE `biodata2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata2`
--
ALTER TABLE `biodata2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
