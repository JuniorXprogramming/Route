-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 05:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `route`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `log_detail` varchar(512) DEFAULT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mem_id` int(11) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `mem_user` varchar(20) DEFAULT NULL,
  `mem_pass` varchar(100) DEFAULT NULL,
  `mem_email` varchar(256) DEFAULT NULL,
  `mem_addr` varchar(512) DEFAULT NULL,
  `mem_speAcc` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `mem_user`, `mem_pass`, `mem_email`, `mem_addr`, `mem_speAcc`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'samutprakan', 1),
(7, 'Junior', '81dc9bdb52d04dc20036dbd8313ed055', 'thammarach.decutai@gmail.com', 'bang priang Bang bo samutprakan 10560', 0);

-- --------------------------------------------------------

--
-- Table structure for table `route_minibus`
--

CREATE TABLE `route_minibus` (
  `route_id` int(11) NOT NULL,
  `route_start` varchar(512) DEFAULT NULL,
  `route_des` varchar(512) DEFAULT NULL,
  `route_price` varchar(10) DEFAULT NULL,
  `route_detail` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `route_minibus`
--

INSERT INTO `route_minibus` (`route_id`, `route_start`, `route_des`, `route_price`, `route_detail`) VALUES
(55, 'สี่แยกบางนา', 'บางบ่อ', '8-16', 'สี่แยกบางนา-0-เซ็นทรัลบางนา-8-โลตัสบางนา-10-เมกาบางนา-10-โฮมโปร-12-รพ.บางนา2-14-ตลาดนัดบางบ่อ-16'),
(56, 'บางบ่อ', 'สี่แยกบางนา', '8-16', 'บางบ่อ-0-รพ.บางนา2-8-โฮมโปร-10-โลตัสบางนา-12-เมกาบางนา-12-เซ็นทรัลบางนา-14-สี่แยกบางนา-16'),
(57, 'สี่แยกบางนา', 'เมกาบางนา', '8-10', 'สี่แยกบางนา-0-เซ็นทรัลบางนา-8-โลตัสบางนา-10-เมกาบางนา-10'),
(58, 'เมกาบางนา', 'สี่แยกบางนา', '8-10', 'เมกาบางนา-0-เซ็นทรัลบางนา-8-สี่แยกบางนา-10'),
(59, 'สี่แยกบางนา', 'บางพลี', '8-14', 'สี่แยกบางนา-0-แบริ่ง-8-อิมสำโรง-10-เทพารักษ์-12-บิ๊กซีบางพลี-14'),
(60, 'บางพลี', 'สี่แยกบางนา', '8-14', 'บางพลี-0-เทพารักษ์-8-อิมสำโรง-10-แบริ่ง-12-สี่แยกบางนา-14'),
(61, 'สี่แยกบางนา', 'ปากน้ำ', '8-16', 'สี่แยกบางนา-0-แบริ่ง-8-อิมสำโรง-10-ปู่เจ้าสมิงพราย-10-ช้างเอราวัณ-12-โรงเรียนนายเรือ-14-ปากน้ำ-16'),
(62, 'ปากน้ำ', 'สี่แยกบางนา', '8-16', 'ปากน้ำ-0-โรงเรียนนายเรือ-8-ช้างเอราวัณ-10-ปู่เจ้าสมิงพราย-12-อิมสำโรง-12-แบริ่ง-14-สี่แยกบางนา-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `mem_id` (`mem_id`),
  ADD KEY `route_id` (`route_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `route_minibus`
--
ALTER TABLE `route_minibus`
  ADD PRIMARY KEY (`route_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `route_minibus`
--
ALTER TABLE `route_minibus`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `member` (`mem_id`),
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`route_id`) REFERENCES `route_minibus` (`route_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
