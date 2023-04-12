-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 08:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `att`
--

CREATE TABLE `att` (
  `id` int(255) NOT NULL,
  `prn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `sem` int(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `att`
--

INSERT INTO `att` (`id`, `prn`, `name`, `mob`, `branch`, `sem`, `faculty`, `date`, `timestamp`) VALUES
(9, '2019015200071923', 'Pratk Joshi ', '7219573379', 'BCS', 5, 'BCG', '2021-10-23', '2021-10-23 18:19:18.842349'),
(10, '2019015200071923', 'Pratk Joshi ', '7219573379', 'BCS', 5, 'BCG', '2021-10-23', '2021-10-23 18:26:23.947596');

-- --------------------------------------------------------

--
-- Table structure for table `sdnt`
--

CREATE TABLE `sdnt` (
  `id` int(255) NOT NULL,
  `prn` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `sem` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sdnt`
--

INSERT INTO `sdnt` (`id`, `prn`, `name`, `mob`, `branch`, `sem`) VALUES
(1, '2019015200071923', 'Pratk Joshi ', '7219573379', 'BCS', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `att`
--
ALTER TABLE `att`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sdnt`
--
ALTER TABLE `sdnt`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `att`
--
ALTER TABLE `att`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sdnt`
--
ALTER TABLE `sdnt`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
