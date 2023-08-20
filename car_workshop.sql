-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 04:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'miraj', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_info`
--

CREATE TABLE `appointment_info` (
  `id` bigint(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phon_num` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `car_licence_num` varchar(100) DEFAULT NULL,
  `car_engine_num` varchar(100) DEFAULT NULL,
  `machanic_name` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment_info`
--

INSERT INTO `appointment_info` (`id`, `name`, `phon_num`, `email`, `address`, `car_licence_num`, `car_engine_num`, `machanic_name`, `date`) VALUES
(26, 'Md Miraj Hossain', '01719991988', 'qlab@gmail.com', 'Mirpur', 'dhaka-1216', 'first123', 'Sadik Mohammad Omi', '2022-03-20'),
(27, 'Shipn', '123455', 'qlab@gmail.com', '123456', 'dhaka-1216', '123644', 'Ashraful Shuvon', '2022-03-19'),
(28, 'Shipn', '123455', 'qlab@gmail.com', '123456', '12365', '123644', 'Sufian Leon', '2022-03-19'),
(29, 'rakib', '123455', 'qlab@gmail.com', '123456', 'dhaka-1216', '123644', 'Sadik Mohammad Omi', '2022-03-19'),
(30, 'shiraj', '123455', 'qlab@gmail.com', '123456', 'dhaka-1216', '123644', 'Sufian Leon', '2022-03-19'),
(31, 'Liton', '123455', 'qlab@gmail.com', '123456', '12365', '123644', 'Sufian Leon', '2022-03-19'),
(32, 'ripon', '123455', 'qlab@gmail.com', '123456', '12365', '123644', 'Sadik Mohammad Omi', '2022-03-19'),
(33, 'm', '123455', 'qlab@gmail.com', '123456', '12365', '123644', 'Sadik Mohammad Omi', '2022-03-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_info`
--
ALTER TABLE `appointment_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_info`
--
ALTER TABLE `appointment_info`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
