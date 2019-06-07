-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2019 at 02:39 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `applicationNo` mediumint(10) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` longtext NOT NULL,
  `creation_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`applicationNo`, `fullname`, `mobileno`, `email`, `password`, `creation_time`) VALUES
(1, 'sanjeev', 9812535422, 'sanjeev@gmail.com', 'hello', '2019-06-06 00:00:00.000000'),
(5, 'asd', 9812523666, 'ssingh2525@nic.in', '123456', '2019-06-07 15:17:57.000000'),
(6, 'asdss', 9813523666, 'sssingh2525@nic.in', '123456', '2019-06-07 16:05:05.000000'),
(7, 'asd', 9812823666, 'ssingh82525@nic.in', '123456', '2019-06-07 16:05:38.000000'),
(8, 'asd', 9812824666, 'ssinghs82525@nic.in', '123456', '2019-06-07 16:07:17.000000'),
(9, 'asd', 9822523666, 'ssisngh2525@nic.in', '123456', '2019-06-07 16:22:21.000000'),
(10, 'asd', 9222523666, 'sasisngh2525@nic.in', '123456', '2019-06-07 16:23:19.000000'),
(11, 'asd', 9522523666, 'sasissangh2525@nic.in', '123456', '2019-06-07 16:33:45.000000'),
(12, 'asd', 7522523666, 'saassissangh2525@nic.in', '123456', '2019-06-07 16:34:46.000000'),
(13, 'aa', 9632587410, 'sasa@g.com', '123456', '2019-06-07 16:35:35.000000'),
(14, 'aa', 9632527410, 'saasa@g.com', '123456', '2019-06-07 16:36:05.000000'),
(15, 'asdfasf', 1234522223, 'a@f.com', '123456', '2019-06-07 16:36:42.000000'),
(16, 'sanjeev', 9812556254, 's@gp.com', '123456', '2019-06-07 16:57:59.000000'),
(17, 'sanjeev', 9812534522, 'sanjeefsddfv@gmail.com', '123456', '2019-06-07 17:34:57.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`applicationNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `applicationNo` mediumint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
