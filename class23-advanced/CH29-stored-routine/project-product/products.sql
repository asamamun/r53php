-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 07:06 PM
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
  `quantity` int(6) NOT NULL,
  `discount` int(2) NOT NULL,
  `hot` set('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `name`, `description`, `sku`, `images`, `price`, `quantity`, `discount`, `hot`, `created_at`) VALUES
(6, 5, 7, 'Watch Tower', '', 'wt1234', '', 2222.00, 120, 20, '0', '2022-12-26 09:01:10'),
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
(73, 1, 9, 'Asus vivobook 15 ', 'Ryzen7. 5700u\r\nRam 8Gb,512 gb ssd', 'Ananta er personal Laptop', '63ae8b99e1e51.png', 82500.00, 1, 0, '1', '2022-12-30 06:56:25'),
(74, 1, 1, 'Apple iPad Pro 11 (2022)', 'Apple iPad Pro 11 (2022) Full Specifications\r\nName	Apple iPad Pro 11 (2022)\r\nBrand	Apple\r\nModel	iPad Pro 11 (2022), iPad Pro (11-inch, 6th Generation)\r\nPrice	135,000.00 Taka (approx)\r\nCategory	Tablet\r\nShowroom	Click Here\r\nNetwork\r\nNetwork Type\r\nGSM / CDMA / HSPA / EVDO / LTE / 5G\r\nNetwork 2G\r\nGSM 850 / 900 / 1800 / 1900\r\nNetwork 3G\r\nHSDPA 850 / 900 / 1700(AWS) / 1900 / 2100\r\nNetwork 4G\r\nLTE\r\nNetwork 5G\r\nSA/NSA/Sub6/mmWave\r\nSpeed\r\nHSPA, LTE-A, 5G\r\nGPRS\r\nYes\r\nEDGE\r\nYes\r\nLaunch\r\nLaunch Announcement\r\n2022, October\r\nLaunch Date\r\nExp. Release 2022, October\r\nBody\r\nBody Dimensions\r\n247.6 x 178.5 x 5.9 mm (9.75 x 7.03 x 0.23 in)\r\nBody Weight\r\n470 g\r\nBuild\r\nGlass Front, Aluminum Back, Aluminum Frame\r\nNetwork Sim\r\nNano-SIM, eSIM\r\nDisplay\r\nDisplay Type\r\nLiquid Retina IPS LCD, 120Hz, HDR10, Dolby Vision, 600 nits (typ)\r\nDisplay Size\r\n11.0 inches, 366.5 cm2 (~82.9% screen-to-body ratio)\r\nDisplay Resolution\r\n1668 x 2388 pixels\r\nDisplay Multitouch\r\nYes\r\nDisplay Density\r\n265 ppi\r\nDisplay Screen Protection\r\nScratch-Resistant Glass, Oleophobic Coating\r\nPlatform\r\nOperating System\r\niPadOS\r\nOS Version\r\n16\r\nChipset\r\nApple M2\r\nCPU\r\nOcta-core\r\nGPU\r\nApple GPU (10-core graphics)\r\nMemory\r\nMemory Internal\r\n128 GB, 256 GB, 512 GB, 1 TB, 2 TB\r\nMemory External\r\nNo\r\nRam\r\n8 GB, 16 GB\r\nCamera\r\nPrimary Camera\r\nDual: 12 MP, (wide), Dual Pixel PDAF\r\n10 MP, (ultrawide)\r\nTOF 3D LiDAR Scanner (depth)\r\nSecondary Camera\r\n12 MP\r\nCamera Features\r\nQuad-LED Dual-tone Flash, HDR\r\nVideo\r\n4K@24/25/30/60fps, 1080p@25/30/60/120/240fps; gyro-EIS, ProRes, Cinematic mode (4K, 1080p)\r\nSound\r\nAudio\r\nYes\r\nLoudspeaker\r\nYes with Stereo Speakers\r\n3.5mm Jack\r\nNo\r\nConnectivity\r\nWiFi\r\nWi-Fi 802.11 a/b/g/n/ac/6e, dual-band, Hotspot\r\nBluetooth\r\n5.3, A2DP, LE, EDR\r\nUSB\r\nUSB Type-C 4 (Thunderbolt 4), DisplayPort, Magnetic Connector\r\nGPS\r\nYes with A-GPS\r\nFm Radio\r\nNo\r\nFeatures\r\nSensors\r\nFace ID, accelerometer, gyro, barometer\r\nMessaging\r\nYes\r\nBattery\r\nBattery Type\r\nNon-removable Li-Po Battery (28.65 Wh)\r\nBattery Capacity\r\n7538 mAh\r\nCharging\r\nFast Charging 18W\r\nMore\r\nBody Color\r\nSilver, Space Gray', 'Apple iPad1', 'Apple-iPad-Pro-11-2022-Silver.jpg', 120000.00, 11, 10, '', '2023-01-21 11:23:23'),
(75, 22, 22, 'Vegetables', 'asdkf adlfk asdfkl', 'asdf', '2-2-2-2foodgroups_vegetables_detailfeature-removebg-preview.png', 120.00, 85, 2, '', '2023-01-21 11:23:59'),
(76, 5, 7, 'birds', 'birds', ' fxcg', 'download (1).jpg', 50.00, 2, 0, '', '2023-01-21 11:25:10'),
(77, 5, 7, 'Phone', 'lagbe naki phone?', 'a', 'pexels-photo-1786433.jpeg', 150.00, 1, 0, '', '2023-01-21 11:25:38'),
(78, 5, 7, 'pen', '', '', 'pen.jpg', 150.00, 50, 5, '', '2023-01-21 11:26:09'),
(79, 5, 7, 'birds', 'birds1', 'tg', 'download (2).jpg', 65.00, 4, 4523, '', '2023-01-21 11:26:13'),
(80, 5, 7, 'Phone and Camera', 'joldi nen', 'www', 'e252c6f562e5441a5356d4fceefa0fae--camera-phone-reflex-camera.jpg', 10100.00, 1, 10, '', '2023-01-21 11:26:41'),
(81, 5, 7, 'Apple iPhone 14 Pro Max', 'Apple iPhone 14 Plus Full Specifications\r\nName	Apple iPhone 14 Plus\r\nBrand	Apple\r\nModel	iPhone 14 Plus, A2886, A2632, A2885, A2896, A2887, iphone14,8\r\nPrice	128,000.00 Taka (approx)\r\nCategory	Smartphone\r\nShowroom	Click Here\r\nNetwork\r\nNetwork Type\r\nGSM / CDMA / HSPA / EVDO / LTE / 5G\r\nNetwork 2G\r\nGSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2\r\nNetwork 3G\r\nHSDPA 850 / 900 / 1700(AWS) / 1900 / 2100\r\nNetwork 4G\r\nLTE\r\nNetwork 5G\r\nSA/NSA/Sub6\r\nSpeed\r\nHSPA, LTE-A, 5G\r\nGPRS\r\nYes\r\nEDGE\r\nYes\r\nLaunch\r\nLaunch Announcement\r\n2022, September\r\nLaunch Date\r\nAvailable. Released 2022, October\r\nBody\r\nBody Dimensions\r\n160.8 x 78.1 x 7.8 mm (6.33 x 3.07 x 0.31 in)\r\nBody Weight\r\n203 g\r\nBuild\r\nGlass Front (Gorilla Glass), Glass Back (Gorilla Glass), Aluminum Frame\r\nNetwork Sim\r\nNano-SIM and/or multiple eSIMs or Dual SIM (Nano-SIM, dual stand-by) | eSIM only for USA\r\nDisplay\r\nDisplay Type\r\nSuper Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak)\r\nDisplay Size\r\n6.7 inches, 109.8 cm2 (~87.4% screen-to-body ratio)\r\nDisplay Resolution\r\n1284 x 2778 pixels, 19.5:9 ratio\r\nDisplay Multitouch\r\nYes\r\nDisplay Density\r\n458 ppi\r\nDisplay Screen Protection\r\nScratch-Resistant Ceramic Glass, Oleophobic Coating\r\nPlatform\r\nOperating System\r\niOS\r\nOS Version\r\n16\r\nChipset\r\nApple A15 Bionic (5 nm)\r\nCPU\r\nHexa-core (2x3.23 GHz Avalanche + 4x1.82 GHz Blizzard)\r\nGPU\r\nApple GPU (5-core graphics)\r\nMemory\r\nMemory Internal\r\n128 GB, 256 GB, 512 GB\r\nMemory External\r\nNo\r\nRam\r\n4 GB\r\nCamera\r\nPrimary Camera\r\nDual: 12 MP, (wide)\r\n12 MP, (ultrawide)\r\nSecondary Camera\r\nDual: 12 MP, (wide)\r\nSL 3D, (Depth/biometrics Sensor)\r\nCamera Features\r\nLED Flash, HDR (photo/panorama)\r\nVideo\r\n4K@24/25/30/60fps, 1080p@25/30/60/120/240fps\r\nSound\r\nAudio\r\nYes\r\nLoudspeaker\r\nYes with Stereo Speakers\r\n3.5mm Jack\r\nNo\r\nConnectivity\r\nWiFi\r\nWi-Fi 802.11 a/b/g/n/ac/6, dual-band, Hotspot\r\nBluetooth\r\n5.3, A2DP, LE\r\nNFC\r\nYes\r\nUSB\r\nLightning, USB 2.0\r\nGPS\r\nYes, with A-GPS\r\nFm Radio\r\nNo\r\nFeatures\r\nSensors\r\nFace ID, accelerometer, gyro, proximity, compass, barometer\r\nMessaging\r\nYes\r\nBattery\r\nBattery Type\r\nNon-removable Li-Ion Battery\r\nCharging\r\nFast Charging, 50% in 30 min (advertised)\r\nMore\r\nBody Color\r\nMidnight, Purple, Starlight, Blue, Red\r\nOther Features\r\nUltra Wideband (UWB) Support.\r\nEmergency SOS via Satellite (SMS sending/receiving).\r\nUSB Power Delivery 2.0.\r\nMagSafe Wireless Charging 15W.\r\nQi magnetic fast Wireless Charging 7.5W.', 'Apple iPhone 14 Plus', 'Apple-iPhone-14-Plus-Red.jpg', 125100.00, 12, 2, '', '2023-01-21 11:26:50'),
(83, 5, 7, 'birds', 'dfhtrfh', 'rthjnreu', 'download (3).jpg', 66.00, 55, 53, '', '2023-01-21 11:27:37'),
(85, 5, 7, 'logo', 'nice logo', 'fghfhhhh', 'logo.png', 200.00, 1, 20, '', '2023-01-21 11:27:56'),
(86, 5, 7, '', 'abnmop', 'uiyuhk', 'images (1).jfif', 100.00, 3, 10, '', '2023-01-21 11:28:03'),
(88, 5, 7, 'Apple iPhone 14 Pro', 'Apple iPhone 14 Pro Price in Bangladesh\r\nApple iPhone 14 Pro price starts from BDT. 183,499. Apple iPhone 14 Pro internal storage base variant of 6 GB Ram, 128 GB, 256 GB, 512 GB, 1 TB Internal Memory (ROM). Apple iPhone 14 Pro which is available in Space Black, Silver, Gold, Deep Purple colour.\r\n\r\nApple iPhone 14 Pro Full Specifications\r\nName	Apple iPhone 14 Pro\r\nBrand	Apple\r\nModel	iPhone 14 Pro, A2890, A2650, A2889, A2892, iphone15,2\r\nPrice	183,499.00 Taka (approx)\r\nCategory	Smartphone\r\nShowroom	Click Here\r\nNetwork\r\nNetwork Type\r\nGSM / CDMA / HSPA / EVDO / LTE / 5G\r\nNetwork 2G\r\nGSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (Dual-SIM)\r\nNetwork 3G\r\nHSDPA 850 / 900 / 1700(AWS) / 1900 / 2100\r\nNetwork 4G\r\nLTE\r\nNetwork 5G\r\nSA/NSA/Sub6\r\nSpeed\r\nHSPA, LTE-A, 5G\r\nGPRS\r\nYes\r\nEDGE\r\nYes\r\nLaunch\r\nLaunch Announcement\r\n2022, September\r\nLaunch Date\r\nAvailable. Released 2022, September\r\nBody\r\nBody Dimensions\r\n147.5 x 71.5 x 7.9 mm (5.81 x 2.81 x 0.31 in)\r\nBody Weight\r\n206 g\r\nBuild\r\nGlass Front (Gorilla Glass), Glass Back (Gorilla Glass), Stainless Steel Frame\r\nNetwork Sim\r\nNano-SIM and/or multiple eSIMs or Dual SIM (Nano-SIM, Dual stand-by) | eSIM only for USA\r\nDisplay\r\nDisplay Type\r\nLTPO Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision, 1000 nits (typ), 2000 nits (HBM)\r\nDisplay Size\r\n6.1 inches, 91.7 cm2 (~87.0% screen-to-body ratio)\r\nDisplay Resolution\r\n1179 x 2556 pixels, 19.5:9 ratio\r\nDisplay Multitouch\r\nYes\r\nDisplay Density\r\n460 ppi\r\nDisplay Screen Protection\r\nScratch-Resistant Ceramic Glass, Oleophobic Coating\r\nPlatform\r\nOperating System\r\niOS\r\nOS Version\r\n16\r\nChipset\r\nApple A16 Bionic (4 nm)\r\nCPU\r\nHexa-core\r\nGPU\r\nApple GPU (5-core graphics)\r\nMemory\r\nMemory Internal\r\n128 GB, 256 GB, 512 GB, 1 TB\r\nMemory External\r\nNo\r\nRam\r\n6 GB\r\nCamera\r\nPrimary Camera\r\nQuad: 48 MP, (wide), dual pixel PDAF, sensor-shift OIS\r\n12 MP, (telephoto), 3X Optical Zoom\r\n12 MP, (ultrawide), Dual Pixel PDAF\r\nTOF 3D LiDAR scanner (depth)\r\nSecondary Camera\r\nDual: 12 MP, (wide)\r\nSL 3D, (depth/biometrics sensor)\r\nCamera Features\r\nLED Flash (adaptive), HDR (photo/panorama)\r\nVideo\r\n4K@24/25/30/60fps, 1080p@25/30/60/120/240fps\r\nSound\r\nAudio\r\nYes\r\nLoudspeaker\r\nYes with Stereo Speakers\r\n3.5mm Jack\r\nNo\r\nConnectivity\r\nWiFi\r\nWi-Fi 802.11 a/b/g/n/ac/6, dual-band, Hotspot\r\nBluetooth\r\n5.3, A2DP, LE\r\nNFC\r\nYes\r\nUSB\r\nLightning, USB 2.0\r\nGPS\r\nYes, with Dual Band A-GPS\r\nFm Radio\r\nNo\r\nFeatures\r\nSensors\r\nFace ID, accelerometer, gyro, proximity, compass, barometer\r\nMessaging\r\nYes\r\nBattery\r\nBattery Type\r\nNon-removable Li-Ion Battery (12.38 Wh)\r\nBattery Capacity\r\n3200 mAh\r\nCharging\r\nFast Charging, 50% in 30 min (advertised)\r\nMore\r\nBody Color\r\nSpace Black, Silver, Gold, Deep Purple\r\nOther Features\r\nAlways-On Display.\r\nUltra Wideband (UWB) Support.\r\nEmergency SOS via Satellite (SMS sending/receiving).\r\nUSB Power Delivery 2.0.\r\nMagSafe Wireless Charging 15W.\r\nQi magnetic fast Wireless Charging 7.5W.', 'Apple iPhone 14 Pro', 'Apple-iPhone-14-Pro-Purple.jpg', 120000.00, 5, 2, '', '2023-01-21 11:28:19'),
(89, 5, 7, 'penguin', 'srtfgfjhhgjuyj', 'qwyk', 'images (1).jfif', 100.00, 3, 10, '', '2023-01-21 11:28:47'),
(91, 5, 7, 'Brand New phone', 'olpo kicu ache', 'awetqgeuy awrfadv', 'Hillbilly-Cell-Phone-Funny-Technology.jpg', 150.00, 3, 4, '', '2023-01-21 11:28:57'),
(93, 5, 7, 'Attar', 'original perfume', 'xyz2', 'arabic-perfume-known-attar-essential-260nw-697544122.webp', 550.00, 1, 0, '', '2023-01-21 11:29:04'),
(94, 5, 7, 'baby doll', 'i like baby doll!', '1', '0d52c4fd0656b4f20dee76bc29ddd5b6.jpg', 2000.00, 1, 200, '', '2023-01-21 11:29:09'),
(95, 5, 7, 'strsdy', 'tsryhty', 'fgjhgfj', 'download (3).jpg', 694.00, 7, 10, '', '2023-01-21 11:29:15'),
(98, 5, 7, 'Fruits Phone', 'Good for your health.', 'tt', '107960938-funny-mobile-banana-phone.webp', 852.00, 56, 22, '', '2023-01-21 11:30:16'),
(100, 5, 7, 'Apple iPad Air (2022) ', 'Apple iPad Air (2022) Price in Bangladesh\r\nApple iPad Air (2022) price starts from BDT. 58,990. Apple iPad Air (2022) internal storage base variant of 8 GB Ram, 64 GB, 256 GB Internal Memory (ROM). Apple iPad Air (2022) which is available in Space Gray, Starlight, Pink, Purple, Blue colour.\r\n\r\nApple iPad Air (2022) Full Specifications\r\nName	Apple iPad Air (2022)\r\nBrand	Apple\r\nModel	iPad Air (2022)\r\nPrice	58,990.00 Taka (approx)\r\nCategory	Tablet\r\nShowroom	Click Here\r\nNetwork\r\nNetwork Type\r\nGSM / HSPA / LTE / 5G\r\nNetwork 2G\r\nGSM 850 / 900 / 1800 / 1900\r\nNetwork 3G\r\nHSDPA 850 / 900 / 1700(AWS) / 1900 / 2100\r\nNetwork 4G\r\nLTE\r\nNetwork 5G\r\nSA/NSA/Sub6\r\nSpeed\r\nHSPA, LTE-A, 5G\r\nGPRS\r\nYes\r\nEDGE\r\nYes\r\nLaunch\r\nLaunch Announcement\r\n2022, March\r\nLaunch Date\r\nExp. Release 2022, March\r\nBody\r\nBody Dimensions\r\n247.6 x 178.5 x 6.1 mm (9.75 x 7.03 x 0.24 in)\r\nBody Weight\r\n461 g\r\nBuild\r\nGlass Front, Aluminum Back, Aluminum Frame\r\nNetwork Sim\r\nNano-SIM, eSIM\r\nDisplay\r\nDisplay Type\r\nLiquid Retina IPS LCD, 500 nits (typ)\r\nDisplay Size\r\n10.9 inches, 359.2 cm2 (~81.3% screen-to-body ratio)\r\nDisplay Resolution\r\n1640 x 2360 pixels\r\nDisplay Multitouch\r\nYes\r\nDisplay Density\r\n264 ppi\r\nDisplay Screen Protection\r\nScratch-Resistant Glass, Oleophobic Coating\r\nPlatform\r\nOperating System\r\niPadOS\r\nOS Version\r\n15.3\r\nChipset\r\nApple M1\r\nCPU\r\nOcta-core\r\nMemory\r\nMemory Internal\r\n64 GB, 256 GB\r\nMemory External\r\nNo\r\nRam\r\n8 GB\r\nCamera\r\nPrimary Camera\r\n12 MP\r\nSecondary Camera\r\n12 MP\r\nCamera Features\r\nHDR\r\nVideo\r\n4K@24/25/30/60fps, 1080p@25/30/60/120/240fps\r\nSound\r\nAudio\r\nYes\r\nLoudspeaker\r\nYes with Stereo Speakers\r\n3.5mm Jack\r\nNo\r\nConnectivity\r\nWiFi\r\nWi-Fi 802.11 a/b/g/n/ac/6, dual-band, Hotspot\r\nBluetooth\r\n5.0, A2DP, EDR\r\nUSB\r\nUSB Type-C 3.1 Gen2\r\nGPS\r\nYes with A-GPS\r\nFm Radio\r\nNo\r\nFeatures\r\nSensors\r\nFingerprint (top-mounted), accelerometer, gyro, compass, barometer\r\nMessaging\r\nYes\r\nBattery\r\nBattery Type\r\nNon-removable Li-Ion Battery (28.6 Wh)\r\nMore\r\nBody Color\r\nSpace Gray, Starlight, Pink, Purple, Blue', 'Apple iPad Air (2022) ', 'Apple-iPad-Air-2022.jpg', 56000.00, 6, 2, '', '2023-01-21 11:31:04'),
(101, 5, 7, 'bike', 'bajaj company\r\n150cc', 'fgfdhfgh', 'bike.jpg', 200000.00, 1, 10000, '', '2023-01-21 11:31:11'),
(104, 5, 7, 'jacket', 'MENS JACKET ', ' 22MHJ01F', 'jacket.png', 1550.00, 15, 2, '', '2023-01-21 11:31:51'),
(105, 5, 7, 'pencil', 'art pen', 'apn', 'pencil.jpg', 25.00, 50, 5, '', '2023-01-21 11:32:31'),
(106, 5, 7, 'Attar saudi arabia', 'original perfume..', 'xyz1234', 'images.jpeg', 450.00, 2, 0, '', '2023-01-21 11:32:36'),
(111, 5, 7, 'Apple Watch Series 8', 'Apple Watch Series 8 Price in Bangladesh\r\nApple Watch Series 8 price starts from BDT. 48,500. Apple Watch Series 8 internal storage base variant of 1 GB Ram, 32 GB Internal Memory (ROM). Apple Watch Series 8 which is available in Midnight, Starlight, Silver, Red colour.\r\n\r\nApple Watch Series 8 Full Specifications\r\nName	Apple Watch Series 8\r\nBrand	Apple\r\nModel	Watch Series 8\r\nPrice	48,500.00 Taka (approx)\r\nCategory	Smart Watch\r\nShowroom	Click Here\r\nNetwork\r\nNetwork Type\r\nGSM / HSPA / LTE\r\nNetwork 2G\r\nGSM 850 / 900 / 1800 / 1900\r\nNetwork 3G\r\nHSDPA 850 / 900 / 1700(AWS) / 1900 / 2100\r\nNetwork 4G\r\nLTE\r\nSpeed\r\nHSPA, LTE\r\nLaunch\r\nLaunch Announcement\r\n2022, September\r\nLaunch Date\r\nAvailable. Released 2022, October\r\nBody\r\nBody Dimensions\r\n45 x 38 x 10.7 mm (1.77 x 1.50 x 0.42 in)\r\nBody Weight\r\n32 g\r\nBuild\r\nGlass Front, Ceramic/sapphire Crystal Back, Aluminum Frame\r\nNetwork Sim\r\neSIM\r\nDisplay\r\nDisplay Type\r\nRetina LTPO OLED, 1000 nits (peak)\r\nDisplay Size\r\n1.9 inches\r\nDisplay Resolution\r\n484 x 396 pixels\r\nDisplay Multitouch\r\nYes\r\nDisplay Density\r\n326 ppi\r\nDisplay Screen Protection\r\nIon-X Strengthened Glass\r\nPlatform\r\nOperating System\r\nwatchOS\r\nOS Version\r\n9.0\r\nChipset\r\nApple S8\r\nCPU\r\nDual-core\r\nGPU\r\nPowerVR\r\nMemory\r\nMemory Internal\r\n32 GB\r\nMemory External\r\nNo\r\nRam\r\n1 GB\r\nCamera\r\nSound\r\nAudio\r\nYes\r\nLoudspeaker\r\nYes\r\n3.5mm Jack\r\nNo\r\nConnectivity\r\nWiFi\r\nWi-Fi 802.11 b/g/n, dual-band\r\nBluetooth\r\n5.0, A2DP, LE\r\nNFC\r\nYes\r\nUSB\r\nNo\r\nGPS\r\nYes with A-GPS\r\nFeatures\r\nSensors\r\nAccelerometer, gyro, heart rate, barometer, always-on altimeter, compass, SpO2, VO2max, temperature\r\nBattery\r\nBattery Type\r\nNon-removable Li-Ion Battery (1.19 Wh)\r\nBattery Capacity\r\n309 mAh\r\nCharging\r\nWireless Fast Charging\r\nMore\r\nBody Color\r\nMidnight, Starlight, Silver, Red\r\nOther Features\r\nIP6X Certified.\r\n50m Water Resistant.\r\nECG certified (region dependent SW application; HW available on all models).\r\nAlways-on Display.\r\nTemperature Sensing (0.01˚ accuracy).\r\nNatural Language Commands and Dictation (talking mode).\r\nUltra Wideband (UWB) Support.', 'Apple Watch Series 8', 'Apple-Watch-Series-8.jpg', 48000.00, 8, 1, '', '2023-01-21 11:33:07'),
(112, 5, 7, 'baby doll2', 'i like it!!!', 'abc', '7af6b858b32815b94eccd3dc4aa3c8a9.jpg', 5000.00, 500, 1, '', '2023-01-21 11:33:24'),
(113, 5, 7, 'Huawei Watch D', 'Huawei Watch D Full Specifications\r\nName	Huawei Watch D\r\nBrand	Huawei\r\nModel	Watch D\r\nPrice	49,000.00 Taka (approx)\r\nCategory	Smart Watch\r\nShowroom	Click Here\r\nNetwork\r\nNetwork Type\r\nNo Cellular Connectivity\r\nGPRS\r\nNo\r\nEDGE\r\nNo\r\nLaunch\r\nLaunch Announcement\r\n2022, May\r\nLaunch Date\r\nAvailable. Released 2022, October\r\nBody\r\nBody Dimensions\r\n51 x 38 x 13.6 mm (2.01 x 1.50 x 0.54 in)\r\nBody Weight\r\n40.9 g\r\nBuild\r\nGlass Front, Aluminum Frame\r\nNetwork Sim\r\nNo\r\nDisplay\r\nDisplay Type\r\nAMOLED\r\nDisplay Size\r\n1.64 inches\r\nDisplay Resolution\r\n456 x 280 pixels\r\nDisplay Multitouch\r\nYes\r\nDisplay Density\r\n326 ppi\r\nPlatform\r\nOperating System\r\nProprietary OS\r\nMemory\r\nMemory External\r\nNo\r\nCamera\r\nPrimary Camera\r\nNo\r\nSound\r\nAudio\r\nYes\r\nLoudspeaker\r\nNo\r\nConnectivity\r\nWiFi\r\nNo\r\nBluetooth\r\nYes\r\nUSB\r\nNo\r\nGPS\r\nYes\r\nFm Radio\r\nNo\r\nFeatures\r\nSensors\r\nAccelerometer, gyro, heart rate, SpO2, thermometer (skin temperature), differential pressure sensor\r\nBattery\r\nCharging\r\nWireless\r\nMore\r\nBody Color\r\nGraphite Black', 'Huawei Watch D', 'Huawei-Watch-D.jpg', 55000.00, 2, 1, '', '2023-01-21 11:34:12'),
(115, 5, 7, 'Watch', 'smart', 'jhydg563', 'Screenshot 2023-01-21 173416.png', 1250.00, 10, 2, '', '2023-01-21 11:34:48'),
(116, 5, 7, 'Samsung Galaxy Watch5', 'Samsung Galaxy Watch5 Pro Full Specifications\r\nName	Samsung Galaxy Watch5 Pro\r\nBrand	Samsung\r\nModel	Galaxy Watch5 Pro, SM-R925F\r\nPrice	46,000.00 Taka (approx)\r\nCategory	Smart Watch\r\nShowroom	Click Here\r\nNetwork\r\nNetwork Type\r\nGSM / HSPA / LTE\r\nNetwork 2G\r\nGSM 850 / 900 / 1800 / 1900\r\nNetwork 3G\r\nHSDPA 850 / 900 / 2100\r\nNetwork 4G\r\nLTE\r\nSpeed\r\nHSPA, LTE\r\nGPRS\r\nYes\r\nEDGE\r\nYes\r\nLaunch\r\nLaunch Announcement\r\n2022, August\r\nLaunch Date\r\nAvailable. Released 2022, August\r\nBody\r\nBody Dimensions\r\n45.4 x 45.4 x 10.5 mm (1.79 x 1.79 x 0.41 in)\r\nBody Weight\r\n46.5 g\r\nBuild\r\nGlass Front (Sapphire crystal), Titanium Frame\r\nNetwork Sim\r\neSIM\r\nDisplay\r\nDisplay Type\r\nSuper AMOLED\r\nDisplay Size\r\n1.4 inches\r\nDisplay Resolution\r\n450 x 450 pixels\r\nDisplay Multitouch\r\nYes\r\nDisplay Density\r\n321 ppi\r\nDisplay Screen Protection\r\nSapphire Crystal\r\nPlatform\r\nOperating System\r\nAndroid\r\nOS Version\r\nWear OS 3.5\r\nUser Interface (ui)\r\nOne UI Watch 4.5\r\nChipset\r\nExynos W920 (5 nm)\r\nCPU\r\nDual-core 1.18 GHz Cortex-A55\r\nGPU\r\nMali-G68\r\nMemory\r\nMemory Internal\r\n16 GB\r\nMemory External\r\nNo\r\nRam\r\n1.5 GB\r\nCamera\r\nSound\r\nAudio\r\nYes\r\nLoudspeaker\r\nYes\r\n3.5mm Jack\r\nNo\r\nConnectivity\r\nWiFi\r\nWi-Fi 802.11 a/b/g/n, dual-band\r\nBluetooth\r\n5.2, A2DP, LE\r\nNFC\r\nYes\r\nUSB\r\nNo\r\nGPS\r\nYes with A-GPS\r\nFm Radio\r\nNo\r\nFeatures\r\nSensors\r\nAccelerometer, gyro, heart rate, barometer, thermometer (body temperature)\r\nMessaging\r\nYes\r\nBattery\r\nBattery Type\r\nNon-removable Li-Ion Battery\r\nBattery Capacity\r\n590 mAh\r\nCharging\r\nQi Wireless Charging 10W\r\nMore\r\nBody Color\r\nBlack Titanium, Gray Titanium', 'Samsung Galaxy Watch5', 'Samsung-Galaxy-Watch5-Pro.jpg', 46000.00, 3, 1, '', '2023-01-21 11:35:53'),
(117, 5, 7, 'pencil box', 'store box', 'sbx', 'pencil box.jpg', 90.00, 50, 5, '', '2023-01-21 11:36:11'),
(118, 5, 7, 'cartoon', 'hello', 'lohgjhgh', 'images.jfif', 5.00, 1, 40, '', '2023-01-21 11:37:28'),
(120, 5, 7, 'Gun', 'trrui', 'yityi', 'download (4).jpg', 500000.00, 0, 0, '', '2023-01-21 11:37:45'),
(122, 5, 7, 'baby', 'So cute!!!', 'abcd', 'screen-0.webp', 40000.00, 2, 400, '', '2023-01-21 11:37:51'),
(123, 5, 7, 'Phone', '', 'jkeh123', 'Phone.jfif', 10000.00, 2, 100, '', '2023-01-21 11:38:26'),
(125, 5, 7, 'Woman pink Jacket', 'Winter super deal for girls', 'KJKI2583', 'Screenshot 2023-01-21 173755.png', 1750.00, 25, 5, '', '2023-01-21 11:39:13'),
(126, 5, 7, 'baby', 'baby', '969', '1121098-pink-nature-wallpaper-1920x1080-lockscreen.jpg', 520.00, 1, 20, '', '2023-01-21 11:39:36'),
(129, 5, 7, 'mercedes', 'yuirtyuijuyuy', 'rtuyiotruyyt', 'download.jfif', 1000000.00, 7, 40, '', '2023-01-21 11:40:06'),
(132, 5, 7, 'baby', 'baby', '988', '1121098-pink-nature-wallpaper-1920x1080-lockscreen.jpg', 520.00, 1, 20, '', '2023-01-21 11:40:43'),
(133, 5, 7, 'school bag', 'books carrier bag', 'bcb', 'school bag.png', 800.00, 100, 5, '', '2023-01-21 11:41:04'),
(134, 5, 7, 'mercedes', 'ytrtsterxcfgtc', 'ouhuftrcvhgv', 'images.jfif', 9000.00, 4, 4, '', '2023-01-21 11:41:34'),
(136, 5, 7, 'Tangail Sharee', '', 'jkj', 'tangail-handloom-saree.webp', 1200.00, 15, 0, '', '2023-01-21 11:41:54'),
(137, 5, 7, 'cycle', 'kids cycle', 'ksd', 'kids cycle.jpg', 7000.00, 100, 5, '', '2023-01-21 11:42:10'),
(138, 5, 7, 'Tangail Sharee.', 'Tangail taat sharee.', 'hkjhn', '0002839_tangail-cotton-sharee_1300.jpeg', 1500.00, 12, 0, '', '2023-01-21 11:42:42'),
(140, 5, 7, 'Tab', 'woooh', 'rtujgh', 'download (1).jfif', 500.00, 8, 0, '', '2023-01-21 11:43:31'),
(143, 5, 7, 'Tangail Sharee.', 'Tangail taat sharee', 'sdfsdf', 'images.jpeg', 1400.00, 1, 120, '', '2023-01-21 11:44:06'),
(145, 5, 7, 'Hondai', 'wooo', 'iohlkui', 'Hyundai-Tucson-Limited-2021.jpg', 8000.00, 1, 0, '', '2023-01-21 11:45:36'),
(147, 5, 7, 'Hondai', 'woo', 'dfhjukytu', 'tucson-suv-find-a-car-thumbnail-pc.webp', 90000.00, 3, 50, '', '2023-01-21 11:48:18'),
(149, 5, 7, 'Black Pajero', 'wooooooo', 'srgtdh', '2020-mitsubishi-pajero-sport-debuts-india-launch-price-14-1200x900.jpg', 70000.00, 7, 0, '', '2023-01-21 11:50:15'),
(151, 5, 7, 'Pajero', 'weee', 'hjkfyujiuyjk', 'Pajero SportModelImage.jpg', 80000.00, 2, 0, '', '2023-01-21 11:52:27'),
(153, 5, 7, 'Mitsubishi Pajero', 'weee', 'gcfcvfgv', 'S0005F3V.jpg', 90000.00, 1, 1231, '', '2023-01-21 11:54:20'),
(155, 5, 7, 'Red Pajero', 'weeeeee', 'fghgfjh', 'images (2).jfif', 80000.00, 4, 70, '', '2023-01-21 11:56:54'),
(157, 5, 7, 'BluePajero', 'whooop', 'dfhnbfjnfhfg', 'images (3).jfif', 80000.00, 79, 0, '', '2023-01-21 11:58:06'),
(159, 5, 7, 'WhitePajero', 'qwqewfrhy', 'hfyjuhg', 'Mitsubishi-Pajero-white-1-64-Xcartoys-diecast-scale-model-collective-1.webp', 7000.00, 60, 0, '', '2023-01-21 11:59:52');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
