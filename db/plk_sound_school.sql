-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 07:53 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `sound`
--

CREATE TABLE `sound` (
  `id` int(11) NOT NULL,
  `sound_id` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `play` int(11) NOT NULL DEFAULT 1,
  `inserted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sound_list`
--

CREATE TABLE `sound_list` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `inserted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sound_list`
--

INSERT INTO `sound_list` (`id`, `code`, `inserted_at`) VALUES
(1, 'MAS1', '2023-04-25 17:50:36'),
(2, 'RIS1', '2023-04-25 17:50:58'),
(3, 'ELV1', '2023-04-25 17:53:35'),
(4, 'EUP1', '2023-04-25 17:53:35'),
(5, 'WEF2', '2023-04-25 17:53:35'),
(6, 'WEY2', '2023-04-25 17:53:35'),
(7, 'ANE2', '2023-04-25 17:53:35'),
(8, 'MAP2', '2023-04-25 17:53:35'),
(9, 'JOK3', '2023-04-25 17:53:35'),
(10, 'MIE3', '2023-04-25 17:53:35'),
(11, 'JAA3', '2023-04-25 17:53:35'),
(12, 'AMM3', '2023-04-25 17:53:35'),
(13, 'FAM4', '2023-04-25 17:53:35'),
(14, 'JAR4', '2023-04-25 17:53:35'),
(15, 'STZ4', '2023-04-25 17:53:35'),
(16, 'DAL4', '2023-04-25 17:53:35'),
(17, 'KEJ5', '2023-04-25 17:53:35'),
(18, 'ASK5', '2023-04-25 17:53:35'),
(19, 'AMC5', '2023-04-25 17:53:35'),
(20, 'ALV5', '2023-04-25 17:53:35'),
(21, 'CHV6', '2023-04-25 17:53:35'),
(22, 'JUL6', '2023-04-25 17:53:35'),
(23, 'MIL6', '2023-04-25 17:53:35'),
(24, 'BEB6', '2023-04-25 17:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `inserted_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
