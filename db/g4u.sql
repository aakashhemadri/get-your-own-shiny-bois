-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2018 at 02:02 PM
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
  `pid` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `pprice` int(20) NOT NULL,
  `pmodel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` varchar(10) NOT NULL,
  `pmodel` varchar(10) NOT NULL,
  `pname` varchar(10) NOT NULL,
  `pdesc` varchar(50) NOT NULL,
  `pdimension` varchar(40) NOT NULL,
  `pweight` varchar(40) NOT NULL,
  `psoc` varchar(40) NOT NULL,
  `pcpu` varchar(40) NOT NULL,
  `pgpu` varchar(40) NOT NULL,
  `pram` varchar(40) NOT NULL,
  `pstorage` varchar(40) NOT NULL,
  `pmemory` varchar(40) NOT NULL,
  `pdisplay` varchar(40) NOT NULL,
  `pbattery` varchar(40) NOT NULL,
  `pos` varchar(40) NOT NULL,
  `pcamera` varchar(40) NOT NULL,
  `psim` varchar(40) NOT NULL,
  `pwifi` varchar(40) NOT NULL,
  `pbluetooth` varchar(40) NOT NULL,
  `pusb` varchar(40) NOT NULL,
  `ptag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(16) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(128) NOT NULL,
  `uemail` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
