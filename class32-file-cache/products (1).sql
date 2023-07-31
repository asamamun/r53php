-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 04:17 PM
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `sku` varchar(128) NOT NULL,
  `images` varchar(512) NOT NULL,
  `price` float(10,2) NOT NULL,
  `newprice` float(10,2) NOT NULL,
  `quantity` int(6) NOT NULL,
  `discount` int(2) NOT NULL,
  `hot` set('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `name`, `description`, `sku`, `images`, `price`, `newprice`, `quantity`, `discount`, `hot`, `created_at`) VALUES
(2869, 1, 1, 'gffdgdfggf', '       sdfsdgffgfg                         ', '123', '20230606/1686056360_cfbf8a28e698feac771f.jpg', 22.00, 22.00, 22, 22, '', '2023-06-06 12:59:20'),
(2870, 1, 1, 'hhhhh', '                     hhhhhhhhhhh                                           ', 'hghghghgh', '20230607/1686137550_c45e0f69a40e97a9a793.jpg', 123.00, 123.00, 123, 5, '', '2023-06-07 11:32:31'),
(2871, 1, 1, 'testttt', '  asdsdg                              ', 'asdf45', '20230607/1686141334_72cd00838dc164655090.jpg', 5555.00, 5555.00, 123, 12, '', '2023-06-07 12:35:36'),
(2872, 1, 1, 'headphone', 'abc                                ', '998', '20230607/1686141352_ece4fbf5fc040c520e38.jpg', 23.00, 12.00, 43, 9, '', '2023-06-07 12:35:52'),
(2873, 1, 1, 'sadfdsfgdfg', '            dfgdfsgfdg                    ', 'asdasd', '20230607/1686141506_0e8b2a3449ac47f6df2c.jpg', 123.00, 123.00, 123, 12, '', '2023-06-07 12:38:30'),
(2874, 1, 1, 'Headphone', '                                abcdf', '9987', '20230607/1686141513_de7d67ed54dbbe6050b1.jpg', 89.00, 98.00, 78, 0, '', '2023-06-07 12:38:34'),
(2875, 1, 1, 'sdfsdafsdaf', '        sadfsdafsdf                        ', 'tyuiyiui', '20230607/1686141611_40aa41b6447c3c71f67c.jpg', 555.00, 556.00, 123, 12, '', '2023-06-07 12:40:15'),
(2876, 1, 1, 'sdfdfsgfg', 'asddsfdsf                        ', '234234324', '20230607/1686142078_4b5e329dcff8fd83f831.jpg', 123.00, 123.00, 123, 123, '', '2023-06-07 12:47:59'),
(2877, 1, 1, 'Nokia', '                                thpo  y ur   mr v dh5u6r i 68i 68iv mf ddth je u56u e eyucgnghj        tdyjc ytvd y   sdfg ykyh                                ', '154733', '20230611/1686482118_4263532078e332437545.png', 124.00, 11.00, 11, 1, '', '2023-06-11 11:15:19'),
(2879, 1, 1, 'Nokia2', '                                thpo  y ur   mr v dh5u6r i 68i 68iv mf ddth je u56u e eyucgnghj        tdyjc ytvd y   sdfg ykyh                                ', '154733sdfg', '20230611/1686482118_4263532078e332437545.png', 124.00, 11.00, 11, 1, '', '2023-06-11 11:15:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2880;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
