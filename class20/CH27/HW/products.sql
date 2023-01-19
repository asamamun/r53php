-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 07:01 PM
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
-- Database: `web1ecomm`
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
  `quantity` int(6) NOT NULL,
  `discount` int(2) NOT NULL,
  `hot` set('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `name`, `description`, `sku`, `images`, `price`, `quantity`, `discount`, `hot`, `created_at`) VALUES
(6, 5, 7, 'Watch Tower', 'watch tower desc', 'wt1234', '63a962d666bc9.png', 2222.00, 120, 20, '0', '2022-12-26 09:01:10'),
(7, 2, 4, 'mobile', 'smartmobail', 'jgsiouoer', '63a962f236595.png', 25000.00, 40, 12, '1', '2022-12-26 09:01:38'),
(9, 1, 2, 'clock 1', 'clock 1', 'hfahfgualgk', '63aa928639de8.png', 600.00, 12, 10, '1', '2022-12-27 06:36:54'),
(10, 1, 1, 'mobile', 'clock', 'rtiuyiku', '63aa9366a58a2.png', 40000.00, 50, 10, '1', '2022-12-27 06:40:38'),
(11, 1, 1, 'Sony', 'jui9j9koikjui', 'fhyth4f', '63aa93acb6e49.png', 40000.00, 5, 10, '1', '2022-12-27 06:41:48'),
(12, 1, 1, 'Infinity', '\r\nSmart Telivesion', 'infinitySmartTelivision', '63aa947891098.png', 50000.00, 18, 15, '1', '2022-12-27 06:45:12'),
(15, 1, 2, 'LLOYD', 'air condiction', 'rytyuu', '63aa95c2689ac.png', 50000.00, 5, 10, '1', '2022-12-27 06:50:42'),
(16, 2, 4, 'Samsung y90', 'Smart', 'mobil', '63aa95efc4991.png', 30000.00, 100, 12, '1', '2022-12-27 06:51:27'),
(17, 1, 1, 'WRIDE', 'LAPTOP', 'tyjkuikikuj', '63aa967962abe.png', 100000.00, 8, 10, '1', '2022-12-27 06:53:45'),
(23, 1, 1, 'Canon', 'Canon Camera', 'fhhg', '63aa98fc78b02.png', 45990.00, 12, 15, '1', '2022-12-27 07:04:28'),
(24, 2, 3, 'phone', 'Vintage telecommunication technology and retro household items concept with a red push button telephone isolated on white background with a clipping path cut out', 'fhuhug', '63aa9a4981922.png', 10500.00, 22, 20, '0', '2022-12-27 07:10:01'),
(25, 2, 3, 'Nokia Mobile', 'Nokia Button Mobile ', 'jgkhjgkljhtioujreidk', '63aa9b4f9ce44.png', 7500.00, 30, 15, '1', '2022-12-27 07:14:23'),
(26, 2, 3, 'Mobile', '1111', '222', '63aaa6e8a2ded.png', 12000.00, 1, 2, '0', '2022-12-27 08:03:52'),
(29, 2, 4, 'Mobile', 'kjjuhunjn5', 'lplolklk0lll58582', '63aaab12cca8b.png', 500.00, 10, 15, '0', '2022-12-27 08:21:38'),
(32, 1, 1, 'Singer plus', 'Singer\r\n', '2315.11', '63aaabd1771e1.png', 25000.00, 8, 5, '1', '2022-12-27 08:24:49'),
(33, 1, 1, 'iron man suit', 'iron', 'omg', '63aaac1d479e9.png', 1000000.00, 5, 10, '1', '2022-12-27 08:26:05'),
(34, 2, 3, 'ghh', '1', 'rft', '63aaac2026f62.png', 500.00, 111, 2, '1', '2022-12-27 08:26:08'),
(35, 2, 4, 'poco m2 Pro Max', 'this is shahin user phone.', 'amiging phone', '63aaac289f7c5.png', 22999.00, 1, 10, '1', '2022-12-27 08:26:16'),
(36, 2, 4, 'iphone 14 promax', 'iphone', '2354', '63aaac74aa3d2.png', 150000.00, 8, 15, '1', '2022-12-27 08:27:32'),
(38, 1, 1, 'LLOY', 'GETTY I', '111', '63aaaceac28f1.png', 120.00, 3, 5, '0', '2022-12-27 08:29:30'),
(41, 2, 4, 'Samsung Galaxy A13', 'SAMSUNG GALAXY A13 - USER OPINIONS AND REVIEWS', 'ghfghkh', '63aaad8294529.png', 23.00, 20, 10, '1', '2022-12-27 08:32:02'),
(46, 1, 2, 'Walton', '1511', '41141', '63ae7a7a59f6a.png', 60000.00, 5, 25, '1', '2022-12-30 05:43:22'),
(48, 1, 1, 'LG', '1215', '5451', '63ae7b02da13d.png', 50000.00, 12, 23, '1', '2022-12-30 05:45:38'),
(49, 1, 1, 'acer ', 'Laptop', '1561', '63ae7b4b4be6b.png', 54000.00, 13, 10, '1', '2022-12-30 05:46:51'),
(50, 2, 4, 'MackBook pro', 'jfkhgu', 'fgerkgjioe', '63ae7b752cfa2.png', 219990.00, 2, 10, '1', '2022-12-30 05:47:33'),
(51, 2, 4, 'Redmi Note8', 'Redmi', '654845', '63ae7b859585d.png', 30000.00, 5, 12, '1', '2022-12-30 05:47:49'),
(56, 2, 4, 'Watch', 'clock', '5458', '63ae7bfeeb131.png', 200.00, 3, 5, '1', '2022-12-30 05:49:50'),
(58, 2, 4, 'as', 'asf', 'bb', '63ae7c773645e.png', 12000.00, 1, 20, '1', '2022-12-30 05:51:51'),
(59, 2, 4, 'Samsung Galaxy Z Fold3 5G', 'htjkghjmg', 'ukyjm67uij', '63ae7c91a4c26.png', 195.00, 21, 16, '1', '2022-12-30 05:52:17'),
(61, 1, 2, 'laptop', 'agfd', 'aa', '63ae7cd9c37a1.png', 50000.00, 1, 30, '1', '2022-12-30 05:53:29'),
(65, 1, 1, 'apple', 'asg', 'ss', '63ae7d231d6af.png', 1000000.00, 1, 50, '1', '2022-12-30 05:54:43'),
(66, 1, 1, 'Smart SEL-32L22KS 32\" HD Basic LED Television', 'Resolution: HD (1360x768) Resolution\r\n2x HDMI, 1x USB, Audio Out\r\nMaterial: Plastic Fiber\r\nPicture Modes: Dynamic, Standard,Soft, User', 'gfnhjgghn gfhjdth', '63ae7d28de59d.png', 14500.00, 14, 15, '1', '2022-12-30 05:54:48'),
(68, 1, 1, 'laptop', 'jjyt', 'jj', '63ae7d5292969.png', 50000.00, 2, 20, '1', '2022-12-30 05:55:30'),
(70, 1, 2, 'man of steel', 'jiot', 'sup', '63ae7dada67be.png', 400000.00, 1, 30, '1', '2022-12-30 05:57:01'),
(71, 2, 4, 'Samsung', 'ewsfa', 'rtfsf', '63ae7ddca3444.png', 200000.00, 1, 12, '0', '2022-12-30 05:57:48'),
(72, 5, 5, 'The world Best Player Jersey', 'The world Best Player Jersey.Messi.', 'The world Best Player Jersey', '63ae7f5c97821.png', 1000.00, 1, 5, '1', '2022-12-30 06:04:12'),
(73, 1, 9, 'Asus vivobook 15 ', 'Ryzen7. 5700u\r\nRam 8Gb,512 gb ssd', 'Ananta er personal Laptop', '63ae8b99e1e51.png', 82500.00, 1, 0, '1', '2022-12-30 06:56:25');

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
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
