-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2014 at 01:04 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(2, 'monirul', 'Dhaka', '123345'),
(6, 'ACI Ltd', 'Narayanganj', '027645825'),
(7, 'soap', 'dhaka', '123456'),
(8, 'dove', 'dhanmondi', '456789'),
(5, 'Squiare Ltd', 'Dhaka', '02769854'),
(4, 'Nestly', 'Chittagong', '01819653298');

--
-- Triggers `manufacturer`
--
DROP TRIGGER IF EXISTS `log_manu_del`;
DELIMITER //
CREATE TRIGGER `log_manu_del` AFTER DELETE ON `manufacturer`
 FOR EACH ROW BEGIN
DELETE FROM product
    WHERE product.manufacturer_id = old.id;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(14, 'cd rom', 2000, 5),
(13, 'mouse', 4700, 4),
(11, 'printer', 10000, 4),
(10, 'Laptop', 62000, 5),
(9, 'Computer', 5000, 4),
(7, 'Horlics', 200, 4),
(8, 'Noodles', 100, 4);

-- --------------------------------------------------------

--
-- Table structure for table `products_view`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `company`.`products_view` AS select `company`.`product`.`id` AS `id`,`company`.`product`.`name` AS `Name`,`company`.`product`.`price` AS `price`,`company`.`product`.`manufacturer_id` AS `manufacturer_id` from `company`.`product` where (`company`.`product`.`price` > 5000);

--
-- Dumping data for table `products_view`
--

INSERT INTO `products_view` (`id`, `Name`, `price`, `manufacturer_id`) VALUES
(11, 'printer', 10000, 4),
(10, 'Laptop', 62000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('md.faruk hossain', '12345'),
('md.monirul islam', '54321'),
('sohel', '11111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
