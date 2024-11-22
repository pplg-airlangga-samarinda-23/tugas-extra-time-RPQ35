-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2024 at 04:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `isi_data`
--

CREATE TABLE `isi_data` (
  `id` int NOT NULL,
  `barang` text NOT NULL,
  `pengadaan` text NOT NULL,
  `stok` int NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `isi_data`
--

INSERT INTO `isi_data` (`id`, `barang`, `pengadaan`, `stok`, `status`) VALUES
(1, 'laptop', '2/2/2022', 2, 'baik'),
(2, 'monitor', '2/2/2022', 3, 'baik'),
(3, 'PC', '21/4/2021', 1, 'rusak'),
(4, 'PC', '21/3/2021', 4, 'baik'),
(5, 'mini PC', '24/7/2023', 4, 'baik'),
(6, 'AIO', '20/9/2020', 8, 'baik'),
(7, 'monitor-touchscreen', '9/3/2023', 5, 'baik'),
(8, 'keabord kabel', '2/2/2019', 15, 'baik'),
(9, 'maouse kabel', '2/4/2022', 1, 'rusak'),
(10, 'mouse kabel', '2/2/2020', 14, 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`id`, `username`, `pass`) VALUES
(1, 'admin1', '54321'),
(2, 'admin2', '2123'),
(3, 'admin3', '123098'),
(4, 'adminilah', '@12ba'),
(5, 'admin-gedagedi', 'ambatuk4m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isi_data`
--
ALTER TABLE `isi_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isi_data`
--
ALTER TABLE `isi_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_data`
--
ALTER TABLE `login_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
