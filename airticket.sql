-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 11:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `dept_city` varchar(50) NOT NULL,
  `arr_city` varchar(50) NOT NULL,
  `dept_date` date NOT NULL,
  `passanger` int(11) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`dept_city`, `arr_city`, `dept_date`, `passanger`, `class`) VALUES
('Surat', 'Ahmedabad', '2023-10-10', 1, 'first'),
('Surat', 'Ahmedabad', '2023-09-19', 3, 'business'),
('Surat', 'Ahmedabad', '2023-09-19', 3, 'business');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` int(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mobile`, `password`, `user_type`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 8160545269, 87654321, 1, NULL),
(2, 'deep', 'deepmoradiya92@gmail.com', 7698130118, 12345678, 2, NULL),
(5, 'meet', 'meet@gmail.com', 7689564578, 12345678, 2, NULL),
(6, 'deva', 'deva@gmail.com', 8787653465, 12345678, 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
