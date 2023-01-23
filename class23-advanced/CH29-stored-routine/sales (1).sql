-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 10:43 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r42_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `empid` int(5) NOT NULL,
  `revenue` float(10,2) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `empid`, `revenue`, `created`) VALUES
(1, 1, 5000.00, '2019-10-09 12:33:51'),
(2, 2, 10000.00, '2019-10-09 12:34:10'),
(3, 1, 15000.00, '2019-10-09 12:34:10'),
(4, 2, 2500.00, '2019-10-09 12:34:28'),
(5, 2, 30000.00, '2019-10-09 12:34:28'),
(6, 3, 15000.00, '2019-10-09 12:34:46'),
(7, 4, 25000.00, '2019-10-09 12:34:46'),
(8, 2, 25000.00, '2019-10-13 09:42:15'),
(9, 4, 45000.00, '2019-10-13 09:42:15'),
(10, 10, 50000.00, '2019-10-13 10:57:45'),
(11, 123, 5000.00, '2019-10-21 12:37:24'),
(12, 123, 5500.00, '2019-10-21 12:39:35'),
(13, 123, 5000.00, '2019-10-21 12:39:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
