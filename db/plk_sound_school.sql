-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 02:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plk_sound_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ip` varchar(150) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'sales',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `ip`, `image`, `email`, `password`, `role`, `updated_at`) VALUES
(1, 'Monoget Saha', '27.147.190.199', 'public/images/profile/monoget.png', 'monoget1@gmail.com', '@BCD1234', 'admin', '2022-02-06 11:16:17'),
(2, 'Super Admin', '103.107.160.134', 'public/images/avatar-01.jpg', 'admin@school.com', '@BCD1234', 'admin', '2023-06-24 11:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `sound`
--

CREATE TABLE `sound` (
  `id` int(11) NOT NULL,
  `sound_id` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `play` int(11) NOT NULL DEFAULT 1,
  `inserted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sound_list`
--

CREATE TABLE `sound_list` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `sound_name` varchar(100) NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sound_list`
--

INSERT INTO `sound_list` (`id`, `code`, `sound_name`, `inserted_at`) VALUES
(1, 'MAS1', 'assets/audio/MAS1.wav', '2023-06-24 12:03:42'),
(2, 'RIS1', 'assets/audio/RIS1.wav', '2023-06-24 12:03:42'),
(3, 'ELV1', 'assets/audio/ELV1.wav', '2023-06-24 12:03:42'),
(4, 'EUP1', 'assets/audio/EUP1.wav', '2023-06-24 12:03:42'),
(5, 'WEF2', 'assets/audio/WEF2.wav', '2023-06-24 12:03:42'),
(6, 'WEY2', 'assets/audio/WEY2.wav', '2023-06-24 12:03:42'),
(7, 'ANE2', 'assets/audio/ANE2.wav', '2023-06-24 12:03:42'),
(8, 'MAP2', 'assets/audio/MAP2.wav', '2023-06-24 12:03:42'),
(9, 'JOK3', 'assets/audio/JOK3.wav', '2023-06-24 12:03:42'),
(10, 'MIE3', 'assets/audio/MIE3.wav', '2023-06-24 12:03:42'),
(11, 'JAA3', 'assets/audio/JAA3.wav', '2023-06-24 12:03:42'),
(12, 'AMM3', 'assets/audio/AMM3.wav', '2023-06-24 12:03:42'),
(13, 'FAM4', 'assets/audio/FAM4.wav', '2023-06-24 12:03:42'),
(14, 'JAR4', 'assets/audio/JAR4.wav', '2023-06-24 12:03:42'),
(15, 'STZ4', 'assets/audio/STZ4.wav', '2023-06-24 12:03:42'),
(16, 'DAL4', 'assets/audio/DAL4.wav', '2023-06-24 12:03:42'),
(17, 'KEJ5', 'assets/audio/KEJ5.wav', '2023-06-24 12:03:42'),
(18, 'ASK5', 'assets/audio/ASK5.wav', '2023-06-24 12:03:42'),
(19, 'AMC5', 'assets/audio/AMC5.wav', '2023-06-24 12:03:42'),
(20, 'ALV5', 'assets/audio/ALV5.wav', '2023-06-24 12:03:42'),
(21, 'CHV6', 'assets/audio/CHV6.wav', '2023-06-24 12:03:42'),
(22, 'JUL6', 'assets/audio/JUL6.wav', '2023-06-24 12:03:42'),
(23, 'MIL6', 'assets/audio/MIL6.wav', '2023-06-24 12:03:42'),
(24, 'BEB6', 'assets/audio/BEB6.wav', '2023-06-24 12:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `inserted_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ip`, `inserted_at`) VALUES
(1, '::1', '2023-04-26 11:05:51'),
(2, '::1', '2023-04-26 11:06:01'),
(3, '::1', '2023-04-26 11:26:39'),
(4, '::1', '2023-04-26 11:26:41'),
(5, '127.0.0.1', '2023-04-26 11:27:25'),
(6, '127.0.0.1', '2023-04-26 11:29:06'),
(7, '::1', '2023-04-26 11:29:09'),
(8, '127.0.0.1', '2023-04-26 11:29:38'),
(9, '127.0.0.1', '2023-04-26 11:31:23'),
(10, '127.0.0.1', '2023-04-26 11:32:06'),
(11, '127.0.0.1', '2023-04-26 11:33:01'),
(12, '127.0.0.1', '2023-04-26 11:34:56'),
(13, '::1', '2023-04-26 11:35:25'),
(14, '::1', '2023-04-26 11:37:43'),
(15, '::1', '2023-04-26 11:37:45'),
(16, '127.0.0.1', '2023-06-24 15:36:04'),
(17, '127.0.0.1', '2023-06-24 15:36:09'),
(18, '127.0.0.1', '2023-06-24 16:34:06'),
(19, '127.0.0.1', '2023-06-24 16:34:19'),
(20, '127.0.0.1', '2023-06-24 16:36:10'),
(21, '127.0.0.1', '2023-06-24 16:36:20'),
(22, '127.0.0.1', '2023-06-24 16:37:37'),
(23, '127.0.0.1', '2023-06-24 16:40:50'),
(24, '127.0.0.1', '2023-06-24 16:41:36'),
(25, '127.0.0.1', '2023-06-24 17:24:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sound`
--
ALTER TABLE `sound`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sound_list`
--
ALTER TABLE `sound_list`
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
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sound`
--
ALTER TABLE `sound`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sound_list`
--
ALTER TABLE `sound_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
