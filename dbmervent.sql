-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 04:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbmervent`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` mediumtext NOT NULL,
  `date` date NOT NULL,
  `lastupdated` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `date`, `lastupdated`, `location`, `description`, `category`, `photo`) VALUES
(7, 'Dimabuk asmara', '2024-06-11', '2024-06-11', 'Kota Istimewa', '<p>with upload library you can do it with this instruction i have put and without upload&nbsp;</p><p>library you do it with Christian Giupponi.&nbsp;</p><p>YOu ahave tag of Codeigniter so i thought you might be using it because it is too much</p>', 'concert', '867da6bc6ec9559e3ec10839cd92bdd9.png'),
(8, 'Aku kepingin main billiard', '2024-06-12', '2024-06-12', 'Amorty', '<h2>Hallo teman teman</h2><p>Ini paragraf</p><p>a</p><p>a</p><p>a</p><p>a</p><p>&nbsp;</p>', 'festival', 'Screenshot_2023-06-01_130055.png'),
(9, 'Astor', '2024-06-13', '2024-06-13', 'Kota Batu', '<p>Wonderful sensation</p><p>Chocolate</p>', 'wedding', 'Screenshot_2023-05-03_203120.png'),
(10, 'JAPUTAAAAA', '2024-06-12', '2024-06-12', 'Dau', '<p>Chiken onion flavor</p>', 'wedding', 'Screenshot_2023-05-21_093400.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(32) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `last_login`) VALUES
('6118b2a943acc2.78631959', 'Administrator', 'admin@mail.com', 'admin', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', NULL, '2021-08-14 23:22:33', '2024-06-19 09:47:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
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
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
