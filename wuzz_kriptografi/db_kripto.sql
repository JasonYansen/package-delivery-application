-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 04:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kripto`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_kirim`
--

CREATE TABLE `bukti_kirim` (
  `id` int(11) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `url_asli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukti_kirim`
--

INSERT INTO `bukti_kirim` (`id`, `file_url`, `url_asli`) VALUES
(1, 'file_enkrip/32638-603c4e5d20169f1b0e1d6480_mgm-logo-1536x864.rda', ''),
(2, 'file_enkrip/40970-5572e8_1_christie_ai_hso-com.rda', ''),
(7, 'file_enkrip/46588-amd-procie.rda', ''),
(8, 'file_enkrip/62975-amd-building.rda', '9575-amd-building.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id`, `username`, `password`) VALUES
(2, 'kurir', 'bb31e9f1f03ad601eb8fb53e4f663039');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status_kirim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `nama_pengirim`, `nama_penerima`, `alamat`, `status_kirim`) VALUES
(4, 'he6FU+nXwt4nzIFCOMhS4Q==', 'KiEu94/Ja5tEJwGBSEyE2w==', 'nCxZHEi9Q7BrR5eP7H4sEA==', ''),
(5, 'j5kd7tZB6qZ3NAGyMoVeOA==', '5Eqs59mnaGrtO2dAzkPUFA==', '5Eqs59mnaGrtO2dAzkPUFA==', ''),
(6, 'j5kd7tZB6qZ3NAGyMoVeOA==', 'iIrpljm3EJHGGswZ6DiMRw==', 'Gh9KJBSH8Gv5i322Gnozdw==', ''),
(7, 'eNGOQw4J5IX+RfFbr9XWuw==', 'HsA0IhV/ZhOoor7+OA+Jzg==', 'f2bzYbVKdrQRiHAWyeerBWTX6i+Fek/1ycxcHiAyzAQ=', 'selesai'),
(8, 'c/r9x6GnCRE4Y/+5b4k24w==', '2ypNtXmyJMallOCG6fz7mQ==', 'uFADb5KEcEKt2LwKvjEaKuorktkON1GFOoYk6UTmW1k=', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_kirim`
--
ALTER TABLE `bukti_kirim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_kirim`
--
ALTER TABLE `bukti_kirim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
