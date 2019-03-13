-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 08:07 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ups_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ups_retail_center`
--

CREATE TABLE `ups_retail_center` (
  `id` int(10) NOT NULL,
  `off_name` varchar(100) NOT NULL,
  `address` varchar(230) NOT NULL,
  `city` varchar(100) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `office_time` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ups_retail_center`
--

INSERT INTO `ups_retail_center` (`id`, `off_name`, `address`, `city`, `ph_no`, `office_time`, `contact_person`) VALUES
(1, 'UPS - Dhaka', 'Motijheel,Dhaka-1000', 'Dhaka', '0257-25125', '10.00 am - 9.00 pm', 'Rashedul Hasan'),
(2, 'UPS - Chittagong ', '20/12, sector 12,Chittagong', 'Chittagong', '0245-858521', '10.00 am - 9.00 pm', 'Asraful Islam'),
(3, 'Ups - Feni', 'Mohipal, Feni', 'Feni', '020-25125', '10.00 am - 9.00 pm', 'Sharif Adnan'),
(4, 'Ups - Comilla', 'Comilla', 'Comilla', '2121212', '10.00 am - 9.00 pm', 'Raz');

-- --------------------------------------------------------

--
-- Table structure for table `ups_retail_center_man`
--

CREATE TABLE `ups_retail_center_man` (
  `cid` int(10) NOT NULL,
  `officer_name` varchar(40) NOT NULL,
  `off_pwd` varchar(40) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(12) NOT NULL,
  `office` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ups_retail_center_man`
--

INSERT INTO `ups_retail_center_man` (`cid`, `officer_name`, `off_pwd`, `address`, `email`, `ph_no`, `office`, `reg_date`) VALUES
(1, 'pingu', 'pingu', 'motijheel, dhaka', 'pingu@gmail.com', '9890989989', 'UPS - Dhaka', '2017-03-30 09:25:21'),
(2, 'asraful', 'asraful', 'chittagong', 'asraful@gmail.com', '9854254125', 'UPS - Chittagong', '2017-03-30 09:40:42'),
(3, 'sharif', 'sharif', 'Feni', 'sharif@gmail.com', '9890989989', 'UPS - Feni', '2017-03-30 17:50:34'),
(4, 'Raz', 'raz', 'comilla', 'raz@gmail.com', 'sssss', 'Ups - Comilla', '2017-04-20 01:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `ups_shipped_item`
--

CREATE TABLE `ups_shipped_item` (
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `ship_name` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `s_add` varchar(200) NOT NULL,
  `rev_name` varchar(100) NOT NULL,
  `r_phone` varchar(12) NOT NULL,
  `r_add` varchar(200) NOT NULL,
  `type` varchar(40) NOT NULL,
  `weight` double NOT NULL,
  `invice_no` varchar(20) NOT NULL,
  `qty` int(10) NOT NULL,
  `book_mode` varchar(20) NOT NULL,
  `freight` double NOT NULL,
  `mode` varchar(20) NOT NULL,
  `pick_date` varchar(20) NOT NULL,
  `pick_time` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `book_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ups_shipped_item`
--

INSERT INTO `ups_shipped_item` (`cid`, `cons_no`, `ship_name`, `phone`, `s_add`, `rev_name`, `r_phone`, `r_add`, `type`, `weight`, `invice_no`, `qty`, `book_mode`, `freight`, `mode`, `pick_date`, `pick_time`, `status`, `comments`, `book_date`) VALUES
(5, 'EP5QBHHQ', 'asd', '11111111111', 'asdasda', 'asdasdf', '2222222222', 'sadad', 'Documents', 12, '232324', 12, 'ToPay', 241, 'Air', '2017-04-30', '12:12:12', 'Landed', 'gfgfgf', '2017-04-17'),
(6, 'Y7CV4VI9', 'Rashedul Hasan', '1673591736', 'Dhaka', 'Asraful Isalm', '01515654', 'Chittagong ', 'Parcel', 1, '22556', 2, 'Paid', 240, 'Road', '2017-04-30', '12:12:12', 'Delivered', 'Emer', '2017-04-17'),
(7, 'ZLJIQ8Z0', 'shovon', '64556565', 'sdfsfsdf', 'sojib', '454565454', 'sfsfsdffs', 'Documents', 855555, '55', 95, 'Paid', 58958585965, 'Air', '12/12/12', '12:12:12', 'In Transit', 'asdfg', '2017-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `ups_shipped_item_track`
--

CREATE TABLE `ups_shipped_item_track` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cons_no` varchar(20) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `bk_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ups_shipped_item_track`
--

INSERT INTO `ups_shipped_item_track` (`id`, `cid`, `cons_no`, `current_city`, `status`, `comments`, `bk_time`) VALUES
(1, 1, 'M22P7KHM', 'UPS - Dhaka', 'Delayed', 'Delay due to rain', '2017-04-30 10:23:04'),
(3, 1, 'M22P7KHM', 'UPS - Dhaka', 'Delayed', 'Delayed due to rain', '2017-04-30 10:26:43'),
(4, 4, '2THBV8UM', 'UPS - Feni', 'Delayed', 'Due to rain', '2017-04-30 10:26:43'),
(5, 1, 'M22P7KHM', 'UPS - Chittagong ', 'Completed', 'Completed', '2017-04-30 10:26:43'),
(6, 5, 'EP5QBHHQ', 'UPS - Chittagong ', 'Delayed', 'rain', '2017-04-18 00:35:46'),
(7, 5, 'EP5QBHHQ', 'UPS - Dhaka', 'Landed', 'soon', '2017-04-18 00:40:23'),
(8, 6, 'Y7CV4VI9', 'UPS - Chittagong ', 'Completed', 'ok', '2017-04-18 18:51:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ups_retail_center`
--
ALTER TABLE `ups_retail_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ups_retail_center_man`
--
ALTER TABLE `ups_retail_center_man`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `ups_shipped_item`
--
ALTER TABLE `ups_shipped_item`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `ups_shipped_item_track`
--
ALTER TABLE `ups_shipped_item_track`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ups_retail_center`
--
ALTER TABLE `ups_retail_center`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ups_retail_center_man`
--
ALTER TABLE `ups_retail_center_man`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ups_shipped_item`
--
ALTER TABLE `ups_shipped_item`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ups_shipped_item_track`
--
ALTER TABLE `ups_shipped_item_track`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
