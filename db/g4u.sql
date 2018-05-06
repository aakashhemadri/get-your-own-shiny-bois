-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2018 at 08:11 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `pmodel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pmodel` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `pdimension` varchar(100) NOT NULL,
  `pweight` varchar(100) NOT NULL,
  `psoc` varchar(100) NOT NULL,
  `pcpu` varchar(100) NOT NULL,
  `pgpu` varchar(100) NOT NULL,
  `pram` varchar(100) NOT NULL,
  `pstorage` varchar(100) NOT NULL,
  `pmemory` varchar(100) NOT NULL,
  `pdisplay` varchar(100) NOT NULL,
  `pbattery` varchar(100) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `pcamera` varchar(100) NOT NULL,
  `psim` varchar(100) NOT NULL,
  `pwifi` varchar(100) NOT NULL,
  `pbluetooth` varchar(100) NOT NULL,
  `pusb` varchar(100) NOT NULL,
  `ptag` varchar(100) NOT NULL,
  `pimage` longblob NOT NULL,
  `pprice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pmodel`, `pname`, `pdesc`, `pdimension`, `pweight`, `psoc`, `pcpu`, `pgpu`, `pram`, `pstorage`, `pmemory`, `pdisplay`, `pbattery`, `pos`, `pcamera`, `psim`, `pwifi`, `pbluetooth`, `pusb`, `ptag`, `pimage`, `pprice`) VALUES
(1, 'Galaxy S9+ Exynos', 'Samsung', '', '73.8 x 158.1 x8.5mm', '189 g', 'Samsung Exynos 9 9810', '4x 2.7 GHz Exynos M3 Mongoose, 4x 1.95 GHz ARM Cortex-A55, Cores: 8', 'ARM Mali-G72 MP18, 572 MHz, Cores: 18', '6 GB, 1794 MHz', '64 GB, 128 GB, 256 GB', 'microSD, microSDHC, microSDXC', '6.2 in, Super AMOLED, 1440 x 2960 pixels, 24 bit', '3500 mAh, Li-Polymer', 'Android 8.0 Oreo', '4032 x 3024 pixels, 3840 x 2160 pixels, 30 fps', 'Nano-SIM', 'a, b, g, n, n 5GHz, ac, Dual band, Wi-Fi Hotspot, Wi-Fi Direct', '5.0', '3.1, USB Type-C', 'PREMIUM', '', ''),
(2, 'Exynos 9 Octa 8895', 'Samsung', '', '73.4 x 159.5 x 8.1 mm', '173 g', 'Samsung Exynos 9 Octa 8895', '4x 2.3 GHz Exynos M2 Mongoose, 4x 1.7 GHz ARM Cortex-A53, Cores: 8', 'ARM Mali-G71 MP20,546 MHz, Cores: 20', '6 GB, 1794 MHz', '64 GB, 128 GB', 'microSD, microSDHC, microSDXC', '6.2 in, Super AMOLED, 1440 x 2960 pixels, 24 bit', '3500 mAh, Li-Polymer', 'Android 7.0 Nougat', '4032 x 3024 pixels, 3840 x 2160 pixels, 30 fps', 'Nano-SIM', 'a, b, g, n, n 5GHz, ac, Dual band, Wi-Fi Hotspot, Wi-Fi Direct', '5.0', '3.1, USB Type-C', 'PREMIUM', '', ''),
(3, 'Galaxy J7 Prime 2', 'Samsung', '', '75 x 151.7 x 8 mm', '170 g', 'Samsung Exynos 7 Octa 7870', 'ARM Cortex-A53, 1600MHz, Cores: 8', 'ARM Mali-T830 MHz, Cores: 2', '3 GB, 933 MHz', '32 GB', 'microSD, microSDHC, microSDXC', '5.5 in, PLS, 1080 x 1920 pixels, 24 bit', '3300 mAh, Li-ion', 'Android 7.1.1 Nougat', '4160 x 3120 pixels, 1920 x 1080 pixels, 30 fps', 'Nano-SIM', 'b, g, n, Wi-Fi Hotspot, Wi-Fi Direct', '4.1', '2.0, Micro USB', 'BUDGET', '', ''),
(4, 'iphone X', 'Apple', '', '70.9 x 143.6 x 7.7 mm', '174 g', 'Apple A11 Bionic APL1W72', 'Monsoon, 4x Mistral, 2100 MHz, Cores: 6', 'Cores: 3', '3 GB', '64 GB, 256 GB', '-', '5.8 in, OLED, 1125 x 2436 pixels, 24 bit', '2716 mAh, Li-lon', 'iOS 11', '4032 3024 pixels, 3840 x 2160 pixels, 60 fps', 'Nano-SIM', 'a, b, g, n, n 5GHz, ac, Dual band, Wi-Fi Hotspot', '5.0', '2.0', 'PREMIUM', '', ''),
(5, 'iphone 8Plus', 'Apple', '', '78.1 x 158.4 x 7.5 mm', '202 g', 'Apple A11 Bionic APL1W72', '2x Monsoon, 4x Mistral, 2100 MHz, Cores: 6', 'Cores: 3', '3 GB', '64 GB, 256 GB', '-', '5.5 in, IPS, 1080 x 1920 pixels, 24 bit', '2691 mAh, Li-ion', 'iOS 11', '4032 x 3024 pixels, 3840 x 2160 pixels, 60 fps', 'Nano-SIM', 'a, b, g, n, n 5GHz, ac, Dual band, Wi-Fi Hotspot', '5.0', '2.0', 'PREMIUM', '', ''),
(6, 'Galaxy S9+ SD845', 'Samsung', '', '73.8 x 158.1 x 8.5 mm ', '189 g', 'Qualcomm Snapdragon 845', '4x 2.8 GHz kryo 385,4x 1.8 GHz kryo 385,Cores 8', 'Qualcomm  Adreno 630', '6 GB,1866 MHz', '64 GB,128 GB,256 GB', 'micro SD,microSDHC,microSDXC', '6.2 in,Super AMOLED,1440x2960 pixels,24 ', '3500 mAh,Li-Polymer', 'Android 8.0 Oreo', '4032 x 3024 pixels,3440 x 2160 pixels,30fps', 'Nano-SIM', 'a,b,g,n,n 5Ghz,ac,Dual band,Wi-Fi Hotspot,\r\nWi-Fi Direct', '5.0 ', '3.1,USB Type-C', 'PREMIUM', '', '$769.99'),
(7, 'OnePlus 5T', 'OnePlus', '', '75 x156.1 x7.3 mm', '162 g', 'Qualcomm Snapdragon 835 MSM8998', '4 X2.45 GHz kryo 385,4x1.9 GHz kryo,Cores: 8', 'Qualcomm Adreno 540,710 MHz', '6 GB,8 GB,1866 MHz', '64 GB,128 GB', 'to be filled', '6.0in,Optic AMOLED,1080 x 2160 pixels,24 bit', '3300 mAh,Li-Polymer', 'Android 7.1.1 Nougat', '4608 x 3456 pixels , 3840 x 2160 pixels,30 fps', 'Nano-SIM', 'a,b,g,n,n 5Ghz,ac,Dual band,Wi-Fi Hotspot,Wi-Fi Direct', '5.0', '2.0,USB Tyoe-C', 'PREMIUM (Entry)', '', '$509.99'),
(8, 'iPhone 8', 'Apple', 'to be filled', '67.3 x 138.4 x 7.3 mm', '148 g', 'Apple A11 Bionic APL1W72', '2x Monsoon, 4x Mistral , 2100 MHz ,Cores :6', 'to be filled', '2 GB', '64 GB,256 GB', 'to be filled', '4.7 in,IPS,750 x 1334 pixels,24 bit', '1821 mAh,Li-Ion ', 'iOS 11', '4032 x 3024 pixel , 3840 x 2160 pixel, 60 fps', 'Nano-SIM', 'a,b,g,n,n,5GHz,ac,Dual band,Wi-Fi Hotspot', '5.0', '2.0', 'PREMIUM', '', '$688.00'),
(9, 'Moto G5s Plus', 'Motorola', '', '76.2 x 153.5 x 9.5 mm', '170 g', 'Qualcomm Snapdragon 625 MSM8953', 'ARM Cortex-A53,2000 MHz', 'Qualcommm Adreno 506,650 MHz', '3 GB,4 GB,933 MHz', '32 GB,64 GB', 'microSD,microSDHC,microSDXC', '5.5 in,IPS,1080 x 1920 pixel,24 bit', '3000 mAh,Li-Ion', 'Android 7,1 Nougat', '4160 x 3120 pixels,3480 x 2160 pixels,30 fps', 'Nano-SIM', 'a,b,g,n,n 5GHz,Dual band,Wi-F- Hotspot,Wi-Fi Direct', '4.1', '2.0,Micro USB', 'BUDGET', '', '$245.00'),
(10, 'Redmi Note 4MSM8953', 'Xiaomi', '', '76 x 151 x 8.45 mm', '165 g', 'Qualcomm Snapdragon 625 MSM8953', 'ARM Cortex-A53,2000 MHz,Cores:8', 'Qualcomm Adreno 506', '2 GB,3 GB,4 GB,933 MHz', '32 GB,64 GB', 'microSD,microSDHC,microSDXC', '5.5 in,IPS,1080 x 1920 pixels,24 bit', '4100 mAh,Li-Polymer', 'MIUI V8 (Marshmallow)', '4160 x 3120 pixels,1920 x 1080 pixels,30 fps', 'Micro-SIM,Nano-SIM/microSD', 'a,b,g,n,n 5GHz,Dual band,Wi-Fi Hotspot,Wi-Fi Direct', '4.1', '2.0,Micro USB', 'BUDGET', '', '$145.99');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `email`) VALUES
(1, 'aakashhemadri', '$2y$10$PQLwo/dLI3M2mokk6T02SObZNfgiqxq9VAo9TehNGL2UuxFIzWW7e', 'aakashhemadri123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `uid` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
