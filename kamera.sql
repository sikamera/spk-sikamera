-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 07:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `id_kamera` int(10) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `type` varchar(12) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `release_date` date DEFAULT NULL,
  `price` int(225) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `max_resolution` varchar(20) DEFAULT NULL,
  `pixels` int(10) DEFAULT NULL,
  `sensor_size` varchar(20) DEFAULT NULL,
  `iso` varchar(20) DEFAULT NULL,
  `lens` varchar(20) DEFAULT NULL,
  `focus` int(5) DEFAULT NULL,
  `screen` int(5) DEFAULT NULL,
  `shutter` varchar(20) DEFAULT NULL,
  `weight` int(5) DEFAULT NULL,
  `dimension` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamera`
--

INSERT INTO `kamera` (`id_kamera`, `brand`, `type`, `slug`, `release_date`, `price`, `image`, `max_resolution`, `pixels`, `sensor_size`, `iso`, `lens`, `focus`, `screen`, `shutter`, `weight`, `dimension`, `description`, `created_at`, `updated_at`) VALUES
(21, 'Canon', 'EOS 1500D', 'canon-1200d', '2014-02-02', 4500000, '1500d.jpg', '5148 X 3456', 18, 'crop frame', '100-6400', 'Canon EF', 9, 3, '30-1/4000', 480, '130x100x78', 'ini adalah kamera pemula yang murah dikelasnya', '2020-10-16 11:34:54', '2020-10-16 11:34:54'),
(22, 'Nikon', 'D3300', 'nikon-d3300', '2014-02-02', 5000000, 'nikon-d3300.jpg', '5148 X 3456', 24, 'crop frame', '100-12400', 'Nikor', 9, 3, '30-1/4000', 480, '130x100x78', 'ini adalah kamera terbaik dikelasnya', '2020-10-16 11:37:31', '2020-10-16 11:37:31'),
(23, 'Canon', 'EOS 200D II', 'canon-eos-200d-ii', '2019-05-22', 6000000, '200d ii.jpg', '6000 x 4000', 24, 'APS-C', '100 - 25600', '', 9, 3, '30-1/4000', 654, '122.4x92.6x69.8', 'Jika Anda sedang mencari kamera ringkas dengan kemampuan merekam video 4K, maka Canon EOS 200D II berikut ini bisa menjadi salah satu pilihan yang tepat untuk masuk daftar belanja.', '2020-10-22 10:46:50', '2020-10-22 10:46:50'),
(24, 'Canon', 'EOS 3000D', 'canon-eos-3000d', '2018-06-01', 3000000, '3000d.JPG', '5184 x 3456', 18, 'APS-C', '100-6400', '', 9, 3, '30-1/4000', 436, '129x101.6x77.1', '', '2020-10-22 11:13:54', '2020-10-22 11:13:54'),
(25, 'Canon', 'EOS 800D', 'canon-eos-800d', '0000-00-00', 10000000, '800d.JPG', '6000 x 4000', 24, 'crop frame', '100-25600', '', 9, 3, '30-1/4000', 532, '131x 99.9x76.2', '', '2020-10-22 12:42:02', '2020-10-22 12:42:02'),
(26, 'Canon', 'EOS 77D', 'canon-eos-77d', '2017-07-22', 14000000, '77d.JPG', '6000 x 4000', 24, 'crop frame', '100-25600', '', 9, 3, '30-1/4000', 540, '131x 99.9x76.2 ', '', '2020-10-22 12:47:36', '2020-10-22 12:47:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`),
  ADD KEY `type` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
