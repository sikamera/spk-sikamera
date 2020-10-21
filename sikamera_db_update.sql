-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 05:31 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikamera_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternative`
--

CREATE TABLE `alternative` (
  `id_alternative` int(10) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE `criteria` (
  `id_criteria` varchar(5) NOT NULL,
  `information` varchar(30) NOT NULL,
  `weight` int(5) NOT NULL,
  `atribute` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`id_criteria`, `information`, `weight`, `atribute`) VALUES
('C1', 'ISO Maksimum', 2, 'Benefit'),
('C2', 'Resolusi Foto', 1, 'Benefit'),
('C3', 'Ukuran sensor', 2, 'Benefit'),
('C4', 'Titik Fokus', 1, 'Benefit'),
('C5', 'Shutter Speed Maksimum', 1, 'Benefit'),
('C6', 'Harga', 3, 'Cost');

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `id_kamera` int(10) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
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
(21, 'Canon', '1200D', 'canon-1200d', '2014-02-02', 4500000, '1500d.jpg', '5148 X 3456', 18, 'crop frame', '100-6400', 'Canon EF', 9, 3, '30-1/4000', 480, '130x100x78', 'ini adalah kamera murah', '2020-10-16 11:34:54', '2020-10-16 11:34:54'),
(22, 'Nikon', 'D3300', 'nikon-d3300', '2014-02-02', 5000000, 'nikon-d3300.jpg', '5148 X 3456', 24, 'crop frame', '100-12400', 'Nikor', 9, 3, '30-1/4000', 480, '130x100x78', 'ini adalah kamera terbaik dikelasnya', '2020-10-16 11:37:31', '2020-10-16 11:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `first_name` varchar(10) NOT NULL,
  `last_name` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthday` date DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `username`, `email`, `password`, `birthday`, `gender`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Rois', 'Dwi', 'roisadmj', 'rois.da.silva@gmail.com', 'masukbos', '1998-08-17', 'M', NULL, '2020-10-16 02:43:34', '2020-10-16 02:43:34'),
(4, 'Yuli', 'Dwi', 'ydwi', 'yulica@gmail.com', 'masukbos', '1998-08-17', 'M', NULL, '2020-10-16 02:44:42', '2020-10-16 02:44:42'),
(5, 'mery', 'kristiani', 'merkris', 'merkris@gmail.com', 'masukbos', '1998-08-17', 'F', NULL, '2020-10-16 03:30:44', '2020-10-16 03:30:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternative`
--
ALTER TABLE `alternative`
  ADD PRIMARY KEY (`id_alternative`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
  ADD PRIMARY KEY (`id_criteria`);

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
