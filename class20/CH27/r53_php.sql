-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 06:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r53_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `bg` varchar(3) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `birthdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employees2`
--

CREATE TABLE `employees2` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `isamexample`
--

CREATE TABLE `isamexample` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `username` varchar(15) NOT NULL,
  `pswd` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mymemory`
--

CREATE TABLE `mymemory` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT 'anon',
  `password` varchar(128) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `create_at`) VALUES
(1, 'admin', '$2y$10$uVZIzBjYY6zlpcUsoHVzEe.M.vKNsvyKYe0bio3gANn3Tfo3VgVWm', '2023-01-10 10:35:20'),
(2, 'idb', '$2y$10$KGm1XQdza/ghIctopHFDKejctHLT9KMPVDYbiubYi22Tt9odLm5VC', '2023-01-10 10:39:07'),
(5, 'test251', '$2y$10$YjV1chTMDE7nr58.Gii1NeQ8Hrap54gXmraAJRJ3fjpKfvRM24yIu', '2023-01-19 11:33:44'),
(6, 'test979', '$2y$10$v.IBLfgXSD.zLuY6ZNaP7Owti1Rzc3M9/FrZ8fEas8kA/BOE89RbC', '2023-01-19 11:35:04'),
(7, 'test570', '$2y$10$k6N1n5y5XLKaOP4Mwl0Yg.an3kmqW/.AItdu.TtIfFNhhwjoTicV.', '2023-01-19 11:35:17'),
(8, 'test809', '$2y$10$1ooBJ0GTfen/xQVq39yseONfFQBdapQ2ZjWNLuiiPQlimGJzKY8q2', '2023-01-19 11:43:25'),
(9, 'test855', '$2y$10$e/e3qt5XD.k96OrXYAx4U..mxY4/7FtVT55RbEYsXhRt19IVdtKB.', '2023-01-19 11:50:03'),
(10, 'test319', '$2y$10$/RPiBL4WfPCTDvqUvaruHuzgFFnMUYUR9L4nEM3GX/Z1Q/pMU0WwW', '2023-01-19 11:50:05'),
(11, 'test296', '$2y$10$wDwrp20oMnRl7rOU6nyDLO3kEHwIyQg.XXeIvs2uuIotleyGt.PH6', '2023-01-19 11:50:05'),
(12, 'test951', '$2y$10$EEEzQiZK7HexMrOTvUzIQ.c2OHMXaoPisXQdv0DO/8F.WZJ9VGe.K', '2023-01-19 11:50:05'),
(13, 'test977', '$2y$10$vfRopW0588Fp8.rfUOT2meoYyEncHUqXItYBbPVldA2bZuRR.bEa2', '2023-01-19 11:50:05'),
(14, 'test482', '$2y$10$0pWhzYs.AnLU4X7abATtwe3Qw39sPTbJXxq6xle3SQfPHh2DB8SA6', '2023-01-19 11:50:06'),
(15, 'test550', '$2y$10$JDySyVz1vK9/s/V4s7v/iOBWSJ1ashWDABW2xqYVWZwtMzPq0wRXu', '2023-01-19 11:50:06'),
(16, 'test464', '$2y$10$Wh4Re7WJr./f0/2UUIoXyOx0aP/PYp1OntP.CQZTY6umIHV.H0R9G', '2023-01-19 11:50:06'),
(17, 'test199', '$2y$10$KXMkDy7k1F6Ft4KNsbKomeoHjLG8pp/MlAW2sZLsUXfUPnxMh6V1C', '2023-01-19 11:50:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees2`
--
ALTER TABLE `employees2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `isamexample`
--
ALTER TABLE `isamexample`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mymemory`
--
ALTER TABLE `mymemory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees2`
--
ALTER TABLE `employees2`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `isamexample`
--
ALTER TABLE `isamexample`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mymemory`
--
ALTER TABLE `mymemory`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
