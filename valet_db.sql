-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2022 at 04:48 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_status` int(11) NOT NULL,
  `ticket_no` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_status`, `ticket_no`, `userid`, `status`, `time`) VALUES
(1, '324141234', 1, 0, '2020-02-20 06:36:02'),
(1, '324141234', 5, 0, '2020-02-20 06:45:37'),
(1, '2341234123', 1, 0, '2020-02-20 06:36:02'),
(1, '2341234123', 5, 0, '2020-02-20 06:45:37'),
(1, '2341234123', 1, 1, '2020-09-25 17:56:19'),
(1, '2341234123', 5, 1, '2020-02-20 06:45:37'),
(1, '2341234123', 1, 3, '2020-09-25 17:56:19'),
(1, '2341234123', 5, 3, '2020-09-25 17:58:24'),
(1, '1024', 1, 1, '2020-09-25 17:56:19'),
(1, '1024', 5, 1, '2020-09-25 17:58:24'),
(1, '1024', 1, 1, '2020-09-25 17:56:19'),
(1, '1024', 5, 1, '2020-09-25 17:58:24'),
(1, '1024', 1, 1, '2020-09-25 17:56:19'),
(1, '1024', 5, 1, '2020-09-25 17:58:24'),
(1, '2341241234', 1, 1, '2020-09-25 17:56:19'),
(1, '2341241234', 5, 1, '2020-09-25 17:58:24'),
(1, '2341241234', 1, 1, '2020-09-25 17:56:19'),
(1, '2341241234', 5, 1, '2020-09-25 17:58:24'),
(1, '324141234', 1, 1, '2020-09-25 17:56:19'),
(1, '324141234', 5, 1, '2020-09-25 17:58:24'),
(1, '324141234', 1, 1, '2020-09-25 17:56:19'),
(1, '324141234', 5, 1, '2020-09-25 17:58:24'),
(1, '10241231', 1, 1, '2020-09-25 17:56:19'),
(1, '10241231', 5, 1, '2020-09-25 17:58:24'),
(1, '10241231', 1, 1, '2020-09-25 17:56:19'),
(1, '10241231', 5, 1, '2020-09-25 17:58:24'),
(0, '8', 1, 0, '2020-09-26 05:44:49'),
(0, '8', 5, 0, '2020-09-26 05:44:49'),
(0, '24', 1, 0, '2020-09-26 05:47:41'),
(0, '24', 5, 0, '2020-09-26 05:47:41'),
(0, '58', 1, 0, '2020-09-26 05:52:31'),
(0, '58', 5, 0, '2020-09-26 05:52:31'),
(0, '1012', 1, 0, '2020-09-26 05:57:23'),
(0, '1012', 5, 0, '2020-09-26 05:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `message`, `currency`) VALUES
(1, 'Vortex Mall', 'Madri', 'Thank your purchase please come back soon', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `email`, `name`, `date_added`) VALUES
(1, 'usman@gmail.com', 'usman', '2019-11-14'),
(2, 'zeeshan@gmail.com', 'zeeshan', '2019-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `ticket_no` varchar(255) NOT NULL,
  `parking_no` varchar(255) NOT NULL,
  `vehicle_cat_id` int(11) NOT NULL DEFAULT '1',
  `driver_id` int(11) NOT NULL,
  `in_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `request_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `on_the_way_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cashier_name` varchar(255) DEFAULT NULL,
  `earned_amount` int(255) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`ticket_no`, `parking_no`, `vehicle_cat_id`, `driver_id`, `in_time`, `request_time`, `on_the_way_time`, `out_time`, `cashier_name`, `earned_amount`, `status`) VALUES
('\'asddf\'', '\'asdfa\'', 0, 11, '2019-11-17 14:48:29', '2019-11-17 04:00:00', '0000-00-00 00:00:00', '2019-11-17 10:23:21', '', 0, 4),
('000000001', '2', 0, 2, '2019-11-18 19:18:36', '2020-02-05 19:24:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abdul ', 18960, 1),
('00000001', '2', 0, 2, '2019-11-18 19:18:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('000000012', '1', 0, 2, '2020-02-05 19:20:59', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('00001', '1', 0, 2, '2020-02-05 19:21:33', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('1', '1002', 0, 2, '2020-02-05 19:36:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('1000000000000000', '1002', 0, 1, '2020-02-05 19:36:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('1012', 'abc123', 1, 2, '2020-09-25 22:57:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0, 0),
('1024', '12356cas', 0, 2, '2020-02-20 10:08:25', '2020-02-26 10:49:37', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abdul ', 1450, 1),
('10241231', '12356cas', 0, 2, '2020-02-20 10:08:44', '2020-02-26 10:50:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abdul ', 1450, 1),
('11223221', '2', 0, 2, '2019-11-18 19:18:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('2341234123', '234124', 0, 2, '2020-02-20 10:19:43', '2020-02-20 10:43:44', '0000-00-00 00:00:00', '2020-02-20 10:47:19', 'usman', 10, 3),
('2341241234', '32412342134', 0, 2, '2020-02-20 10:14:17', '2020-02-26 10:49:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abdul ', 1450, 1),
('24', 'abc123', 1, 1, '2020-09-25 22:47:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0, 0),
('25', '1002', 0, 1, '2020-02-05 19:32:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('3', '2456', 0, 2, '2019-11-17 11:42:48', '2019-11-17 09:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'abc', 20, 1),
('324141234', '32412342134', 0, 2, '2020-02-20 10:19:03', '2020-02-26 10:50:16', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Abdul ', 1450, 1),
('4', '2', 0, 2, '2019-11-18 09:29:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('5', '2', 0, 2, '2019-11-18 09:38:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('565', '115', 0, 1, '2019-11-18 19:21:20', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('56598753453', '115', 0, 1, '2019-11-18 19:21:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('58', 'ABC123', 1, 1, '2020-09-25 22:52:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0, 0),
('6', '6', 0, 2, '2019-11-18 09:41:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('6500', '1', 0, 2, '2020-02-05 19:21:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('7', '7', 0, 1, '2019-11-18 09:42:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0, 0),
('8', 'asdfas', 1, 2, '2020-09-25 22:44:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, 0, 0),
('asddf', 'asdfa', 0, 11, '2019-11-17 12:30:19', '2019-11-17 10:00:00', '0000-00-00 00:00:00', '2019-11-17 05:13:13', '', 40, 3),
('asddfs', 'asdfa', 0, 11, '2019-11-17 14:49:11', '2019-11-17 19:00:00', '0000-00-00 00:00:00', '2019-11-17 20:49:11', '', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `rate_one_time` varchar(255) NOT NULL,
  `rate_one` int(20) NOT NULL,
  `rate_two_time` varchar(255) NOT NULL,
  `rate_two` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `rate_one_time`, `rate_one`, `rate_two_time`, `rate_two`) VALUES
(1, '08:00-20:00', 10, '08:00-20:00', 20);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `slot_name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  `availability_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `slot_name`, `active`, `availability_status`) VALUES
(1, 'Parking Location 1', 1, 1),
(2, 'Parking Location 2', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `Name`) VALUES
(0, 'Checked-in'),
(1, 'Requested'),
(2, 'On the way'),
(3, 'Checked-out');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` int(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `role`, `password`) VALUES
(1, 'viewer@gmail.com', 'ahsan', 112, '25d55ad283aa400af464c76d713c07ad'),
(5, 'manager@gmail.com', 'driver', 113, '25d55ad283aa400af464c76d713c07ad'),
(6, 'abubkr.akram@gmail.com', 'usman', 101, '25d55ad283aa400af464c76d713c07ad'),
(7, 'abcd@gmail.com', 'waqas', 111, '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `Reg_no` varchar(255) NOT NULL,
  `ticket_no` varchar(100) DEFAULT NULL,
  `reg_country` int(11) NOT NULL,
  `Model` varchar(100) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `brand`, `color`, `Reg_no`, `ticket_no`, `reg_country`, `Model`, `Description`) VALUES
(1, 62, 3, '0', 'asddf', 2, 'asdf', 'asdf'),
(3, 62, 3, '\'adsf\'', '\'asddf\'', 2, '\'asdf\'', '\'asdf\''),
(5, 62, 3, 'adsf', '2', 2, 'asdf', 'asdf'),
(8, 59, 3, 'FK 4024', '3', 2, 'SA 70', 'dent on rear bumper'),
(9, 59, 3, 'AD 2040', '4', 4, 'SP 270', 'Clear'),
(10, 59, 3, 'AD 2040', '5', 4, 'SP 270', 'Clear'),
(11, 59, 3, 'AD 2040', '5', 4, 'SP 270', 'Clear'),
(12, 59, 3, 'AD 2040', '5', 4, 'SP 270', 'Clear'),
(13, 59, 11, 'AD 2040', '6', 3, 'SP 270', 'Clear'),
(14, 63, 11, 'adsf', '7', 6, 'SA 70', 'adsf'),
(15, 63, 11, 'adsf', '7', 6, 'SA 70', 'adsf'),
(16, 62, 6, '079166', '00000001', 4, 'v6', 'good'),
(17, 62, 6, '079166', '000000001', 4, 'v6', 'good'),
(18, 62, 6, '079166', '11223221', 4, 'v6', 'good'),
(19, 7, 13, '079166', '565', 5, 'v6', 'good'),
(20, 7, 13, '079166', '56598753453', 5, 'v6', 'good'),
(21, 59, 9, '079166', '000000012', 4, 'v6', 'good'),
(22, 59, 9, '079166', '6500', 4, 'v6', 'good'),
(23, 59, 9, '079166', '00001', 4, 'v6', 'good'),
(24, 58, 3, '079167', '25', 4, 'Classic', 'Front Bumper scratches '),
(25, 58, 3, '079167', '1', 4, 'Classic', 'Front Bumper scratches '),
(26, 58, 3, '079167', '1000000000000000', 4, 'Classic', 'Front Bumper scratches '),
(27, 59, 3, 'FK 4024', '1024', 2, 'SP 270', 'dent on rear bumper'),
(28, 59, 3, 'FK 4024', '10241231', 2, 'SP 270', 'dent on rear bumper'),
(29, 63, 3, 'FK 4024', '2341241234', 6, 'SP 27012', 'Clear'),
(30, 63, 3, 'FK 4024', '324141234', 6, 'SP 27012', 'Clear'),
(31, 63, 13, 'adsf', '2341234123', 4, 'asdf', 'dent on rear bumper'),
(32, 62, 13, 'adfa', '8', 5, 'asdfas', 'asdfaf'),
(33, 59, 9, 'AD 2040', '24', 2, 'SA 70', 'Clear'),
(34, 59, 6, 'AD 2040', '58', 3, 'SP 270', 'adsf'),
(35, 59, 11, 'FK 4024', '1012', 2, 'SA 70', 'Clear');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`ticket_no`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
