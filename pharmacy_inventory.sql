-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2016 at 08:28 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_pinms`
--

CREATE TABLE `item_pinms` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` float NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `item_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_pinms`
--

INSERT INTO `item_pinms` (`item_id`, `item_name`, `item_price`, `item_quantity`, `item_des`) VALUES
(7, 'Blue Pill', 10, 22, 'blue pill'),
(8, 'red pill', 19, 24, 'red pill');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id_item` int(20) NOT NULL,
  `item_sold_id` varchar(255) DEFAULT NULL,
  `item_sold` varchar(30) DEFAULT NULL,
  `quantity_sold` varchar(30) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `day` varchar(30) DEFAULT NULL,
  `month` varchar(30) DEFAULT NULL,
  `year` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id_item`, `item_sold_id`, `item_sold`, `quantity_sold`, `price`, `day`, `month`, `year`) VALUES
(13, '7', 'Blue Pill', '1', 10, '15', 'Feb', '2016'),
(14, '8', 'red pill', '1', 19, '15', 'Feb', '2016'),
(15, '7', 'blue pill', '1', 10, '15', 'Feb', '2016'),
(16, '7', 'blue pill', '1', 10, '15', 'Feb', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `staff_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `staff_id`, `password`) VALUES
(3, 'admin', '111', 'admin'),
(4, 'user', '222', 'user'),
(7, '11311231123', 'Roberto carlos', 'saya kitamen'),
(8, '5', 'qaz', 'qaz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_pinms`
--
ALTER TABLE `item_pinms`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_pinms`
--
ALTER TABLE `item_pinms`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id_item` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
