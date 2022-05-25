-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 02:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(40) NOT NULL,
  `admin_type` varchar(20) NOT NULL,
  `admin_datereg` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_type`, `admin_datereg`) VALUES
(1, 'nushi irru', 'nushi@gmail.com', 'CF91B9009C9309555B6F5065760DC585723D109E', 'super', '2022-05-24 22:22:59.000000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usersreg`
--

CREATE TABLE `tbl_usersreg` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_ic` int(12) NOT NULL,
  `user_age` int(2) NOT NULL,
  `user_phnum` varchar(20) NOT NULL,
  `user_homeAdd` varchar(500) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_studyfield` varchar(50) NOT NULL,
  `user_subscription` varchar(40) NOT NULL,
  `user_regDate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_usersreg`
--

INSERT INTO `tbl_usersreg` (`user_id`, `user_name`, `user_ic`, `user_age`, `user_phnum`, `user_homeAdd`, `user_email`, `user_password`, `user_studyfield`, `user_subscription`, `user_regDate`) VALUES
(1, 'irru', 2147483647, 54, '0195695918', 'no 16 lorong 16', 'irru@gmail.com', '7cf1eceb1ebfd8678d584c89645b1282981bb3bd', 'Networking ', 'oneyear', '2022-05-25 19:03:31.352355'),
(2, 'anushiya', 2147483647, 21, '01116550117', 'labuan ', 'anushiyairrulappen@yahoo.com', '23184834f9bd2f915e807378dd2b9ac56de24d28', 'Data Science Management ', 'onemonth', '2022-05-25 19:06:49.373502');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `tbl_usersreg`
--
ALTER TABLE `tbl_usersreg`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_usersreg`
--
ALTER TABLE `tbl_usersreg`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
