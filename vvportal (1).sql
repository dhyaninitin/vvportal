-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 02:33 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_apply_leave`
--

CREATE TABLE `emp_apply_leave` (
  `id` int(11) NOT NULL,
  `emp_priid` int(11) DEFAULT NULL,
  `leave_type` varchar(80) DEFAULT NULL,
  `leave_from` date DEFAULT NULL,
  `leave_to` date DEFAULT NULL,
  `leave_days` varchar(80) DEFAULT NULL,
  `contact_num` varchar(80) DEFAULT NULL,
  `leave_reason` varchar(80) DEFAULT NULL,
  `leave_purpose` text DEFAULT NULL,
  `addressduring_leave` text DEFAULT NULL,
  `leave_status` int(11) DEFAULT 0,
  `add_updatedate` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_apply_leave`
--

INSERT INTO `emp_apply_leave` (`id`, `emp_priid`, `leave_type`, `leave_from`, `leave_to`, `leave_days`, `contact_num`, `leave_reason`, `leave_purpose`, `addressduring_leave`, `leave_status`, `add_updatedate`) VALUES
(25, 15, 'Full Day', '2021-05-07', '2021-05-08', '2 Days', '9759922112', 'urgent work', 'qwertyu', 'ertyjk', 1, '2021-05-06'),
(26, 15, 'Full Day', '2021-05-10', '2021-05-15', '6 Days', '9759922112', 'personal work', 'adad', 'dasdas', 1, '2021-05-06'),
(27, 15, 'Half Day', '2021-05-18', '2021-05-18', '1 Days', '9759922112', 'sick leave', 'sdsadsadsadasd', 'dsdsa', 1, '2021-05-06'),
(28, 15, 'Half Day', '2021-05-14', '2021-05-15', '2 Days', '9759922112', 'urgent work', 'sdfdssczx', 'sdsadadad', 1, '2021-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `emp_attendanceinfo`
--

CREATE TABLE `emp_attendanceinfo` (
  `id` int(11) NOT NULL,
  `emp_priid` int(11) DEFAULT NULL,
  `emp_id` varchar(80) DEFAULT NULL,
  `time_in` datetime DEFAULT NULL,
  `time_out` datetime DEFAULT NULL,
  `totel_time` varchar(80) DEFAULT NULL,
  `emp_status` int(11) DEFAULT NULL,
  `currentt_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_attendanceinfo`
--

INSERT INTO `emp_attendanceinfo` (`id`, `emp_priid`, `emp_id`, `time_in`, `time_out`, `totel_time`, `emp_status`, `currentt_date`) VALUES
(69, 15, 'VVT-002', '2021-04-15 10:00:01', '2021-04-15 19:05:28', '9 hours 5 minutes ', 1, '2021-04-15 10:00:01'),
(260, 19, 'VVT-004', '2021-04-16 10:00:00', '2021-04-16 16:00:22', '6 hours 0 minutes ', 1, '2021-04-16 10:00:00'),
(261, 19, 'VVT-004', '2021-04-15 10:00:01', '2021-04-15 18:05:28', '8 hours 5 minutes ', 1, '2021-04-15 10:00:01'),
(264, 15, 'VVT-002', '2021-04-16 10:00:00', '2021-04-16 18:57:06', '8 hours 57 minutes ', 1, '2021-04-16 10:00:00'),
(268, 15, 'VVT-002', '2021-04-20 10:00:00', NULL, NULL, 1, '2021-04-20 10:00:00'),
(272, 19, 'VVT-004', '2021-04-01 10:10:00', '2021-04-01 08:10:00', '10 hours 0 minutes ', 1, '2021-04-01 10:10:00'),
(275, 15, 'VVT-002', '2021-04-02 09:30:00', '2021-04-02 06:40:00', '9 hours 10 minutes ', 1, '2021-04-02 09:30:00'),
(279, 15, 'VVT-002', '2021-04-01 10:10:00', '2021-04-01 08:10:00', '10 hours 0 minutes ', 1, '2021-04-01 10:10:00'),
(280, 15, 'VVT-002', '2021-04-06 09:30:00', '2021-04-06 06:32:00', '9 hours 2 minutes ', 1, '2021-04-06 09:30:00'),
(281, 15, 'VVT-002', '2021-04-12 09:20:00', '2021-04-12 04:04:00', '6 hours 44 minutes ', 1, '2021-04-12 09:20:00'),
(282, 15, 'VVT-002', '2021-04-05 10:14:00', '2021-04-05 05:03:00', '6 hours 49 minutes ', 1, '2021-04-05 10:14:00'),
(283, 15, 'VVT-002', '2021-04-07 00:00:00', '2021-04-07 00:00:00', '00 hours 00 minutes', 3, '2021-04-07 00:00:00'),
(284, 15, 'VVT-002', '2021-04-08 10:10:00', '2021-04-08 09:06:00', '10 hours 56 minutes ', 1, '2021-04-08 10:10:00'),
(285, 15, 'VVT-002', '2021-04-09 10:03:00', '2021-04-09 09:14:00', '11 hours 11 minutes ', 1, '2021-04-09 10:03:00'),
(286, 15, 'VVT-002', '2021-04-14 10:11:00', '2021-04-14 08:05:00', '9 hours 54 minutes ', 1, '2021-04-14 10:11:00'),
(296, 19, 'VVT-004', '2021-04-17 09:11:00', '2021-04-17 11:09:00', '13 hours 58 minutes ', 1, '2021-04-17 09:11:00'),
(299, 15, 'VVT-002', '2021-04-13 10:14:00', '2021-04-13 06:14:00', '8 hours 0 minutes ', 1, '2021-04-13 10:14:00'),
(300, 15, 'VVT-002', '2021-04-19 00:00:00', '2021-04-19 00:00:00', '00 hours 00 minutes', 3, '2021-04-19 00:00:00'),
(301, 15, 'VVT-002', '2021-05-04 10:00:00', '2021-05-04 08:14:00', '10 hours 14 minutes ', 1, '2021-05-04 10:00:00'),
(302, 15, 'VVT-002', '2021-05-03 09:30:00', '2021-05-03 06:13:00', '8 hours 43 minutes ', 1, '2021-05-03 09:30:00'),
(304, 22, 'VVT-006', '2021-04-20 10:00:00', NULL, NULL, 1, '2021-04-20 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_information`
--

CREATE TABLE `emp_information` (
  `id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `emp_full_name` varchar(100) DEFAULT NULL,
  `emp_home_phone` varchar(150) DEFAULT NULL,
  `emp_cell_phone` varchar(150) DEFAULT NULL,
  `emp_email_address` varchar(100) DEFAULT NULL,
  `emp_goverment_id` varchar(100) DEFAULT NULL,
  `emp_birth_date` date DEFAULT NULL,
  `emp_marital_status` varchar(80) DEFAULT NULL,
  `emp_blood_group` varchar(80) DEFAULT NULL,
  `emp_father_name` varchar(80) DEFAULT NULL,
  `emp_father_occupation` varchar(80) DEFAULT NULL,
  `emp_father_phone` varchar(80) DEFAULT NULL,
  `emp_address` text DEFAULT NULL,
  `ed_highschool_name` varchar(80) DEFAULT NULL,
  `ed_hightschool_persentage` varchar(80) DEFAULT NULL,
  `ed_intermediateschool_name` varchar(100) DEFAULT NULL,
  `ed_intermediateschool_percentage` varchar(80) DEFAULT NULL,
  `ed_bachelor_collgename` varchar(80) DEFAULT NULL,
  `ed_bachelor_collgpesntg` varchar(80) DEFAULT NULL,
  `ed_mastercollge_name` varchar(80) DEFAULT NULL,
  `ed_mastercollge_percentage` varchar(80) DEFAULT NULL,
  `jobf_postion` varchar(80) DEFAULT NULL,
  `jobf_company_name` varchar(80) DEFAULT NULL,
  `jobf_location` varchar(80) DEFAULT NULL,
  `jobf_emailaddress` varchar(80) DEFAULT NULL,
  `jobf_workphone` varchar(80) DEFAULT NULL,
  `jobf_homephone` varchar(80) DEFAULT NULL,
  `jobf_startdate` date DEFAULT NULL,
  `jobf_enddate` date DEFAULT NULL,
  `jobl_postion` varchar(80) DEFAULT NULL,
  `jobl_company_name` varchar(80) DEFAULT NULL,
  `jobl_location` varchar(80) DEFAULT NULL,
  `jobl_emailaddress` varchar(80) DEFAULT NULL,
  `jobl_workphone` varchar(80) DEFAULT NULL,
  `jobl_homephone` varchar(80) DEFAULT NULL,
  `jobl_startdate` date DEFAULT NULL,
  `jobl_enddate` date DEFAULT NULL,
  `job_keyskill` varchar(80) DEFAULT NULL,
  `emg_fullname` varchar(80) DEFAULT NULL,
  `emg_primaryphone` varchar(80) DEFAULT NULL,
  `emg_cellphone` varchar(80) DEFAULT NULL,
  `emg_relationship` varchar(80) DEFAULT NULL,
  `emg_address` varchar(80) DEFAULT NULL,
  `bank_accountholder` varchar(80) DEFAULT NULL,
  `bank_accountnumber` int(80) DEFAULT NULL,
  `bank_pancard` varchar(80) DEFAULT NULL,
  `bank_ifsc` varchar(80) DEFAULT NULL,
  `bank_name` varchar(80) DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_information`
--

INSERT INTO `emp_information` (`id`, `added_by`, `emp_full_name`, `emp_home_phone`, `emp_cell_phone`, `emp_email_address`, `emp_goverment_id`, `emp_birth_date`, `emp_marital_status`, `emp_blood_group`, `emp_father_name`, `emp_father_occupation`, `emp_father_phone`, `emp_address`, `ed_highschool_name`, `ed_hightschool_persentage`, `ed_intermediateschool_name`, `ed_intermediateschool_percentage`, `ed_bachelor_collgename`, `ed_bachelor_collgpesntg`, `ed_mastercollge_name`, `ed_mastercollge_percentage`, `jobf_postion`, `jobf_company_name`, `jobf_location`, `jobf_emailaddress`, `jobf_workphone`, `jobf_homephone`, `jobf_startdate`, `jobf_enddate`, `jobl_postion`, `jobl_company_name`, `jobl_location`, `jobl_emailaddress`, `jobl_workphone`, `jobl_homephone`, `jobl_startdate`, `jobl_enddate`, `job_keyskill`, `emg_fullname`, `emg_primaryphone`, `emg_cellphone`, `emg_relationship`, `emg_address`, `bank_accountholder`, `bank_accountnumber`, `bank_pancard`, `bank_ifsc`, `bank_name`, `note`) VALUES
(25, 15, 'sdad', '24232132', '3211', 'ada@gmial.com', '232131', '2021-04-16', 'dsada', 'dsa', 'sad', 'dsad', 'dsad', 'dsada', 'dsada', '3123', 'dsa', '23', 'sadas', '313213', 'sadas', '432432', 'sdasd', 'dsa', 'dsada', 'dsadsa@gmial.com', '4432432', '432432', '2021-04-09', '2021-04-10', 'ddsad', 'dsadsa', 'dsadsa', 'sfdfs@gmial.com', '223213', '32131', '2021-04-23', '2021-04-22', 'sdsaa', 'dsad', '33213', '312321', '321321', 'dsadad', 'dsadsa', 2332321, '21321312', 'dsadas', 'dasdsa', 'dsadasds'),
(26, 19, 'Sandeep', '12121', '231321', 'sandeep@gmial.com', '232321', '2021-05-02', 'dsds', 'dsa', 'dsad', 'dsa', 'das', 'dsdas', 'sadsa', '213', 'dsdsa', '3213', 'dsad', '321', 'dsd', '213', 'sadsa', 'dsad', 'dasd', 'sandeep@virtuevise.com', '2123', '32132', '2021-04-25', '2021-04-30', 'dsadsad', 'dsadsa', 'sadsda', 'sandeep@virtuevise.com', '23213', '3213', '2021-04-24', '2021-04-25', 'dsdsa', 'dsdsa', '23213', '2321321', 'asda', 'adsdsa', 'dsadsa', 312321, '2133', '3dsad', 'asdas', 'dasd');

-- --------------------------------------------------------

--
-- Table structure for table `emp_satsun_holiday`
--

CREATE TABLE `emp_satsun_holiday` (
  `id` int(11) NOT NULL,
  `holidaydate` date DEFAULT NULL,
  `holidayname` varchar(80) DEFAULT NULL,
  `current_datetime` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_satsun_holiday`
--

INSERT INTO `emp_satsun_holiday` (`id`, `holidaydate`, `holidayname`, `current_datetime`) VALUES
(1, '2021-04-03', 'Saturday', '2021-04-03'),
(2, '2021-04-04', 'Sunday', '2021-04-04'),
(3, '2021-04-10', 'Saturday', '2021-04-10'),
(4, '2021-04-11', 'Sunday', '2021-04-11'),
(5, '2021-04-17', 'Saturday', '2021-04-17'),
(6, '2021-04-18', 'Sunday', '2021-04-18'),
(7, '2021-04-24', 'Saturday', '2021-04-24'),
(8, '2021-04-25', 'Sunday', '2021-04-25'),
(9, '2021-05-01', 'Saturday', '2021-05-01'),
(10, '2021-05-02', 'Sunday', '2021-05-02'),
(11, '2021-05-08', 'Saturday', '2021-05-08'),
(12, '2021-05-09', 'Sunday', '2021-05-09'),
(13, '2021-05-15', 'Saturday', '2021-05-15'),
(14, '2021-05-16', 'Sunday', '2021-05-16'),
(15, '2021-05-22', 'Saturday', '2021-05-22'),
(16, '2021-05-23', 'Sunday', '2021-05-23'),
(17, '2021-05-29', 'Saturday', '2021-05-29'),
(18, '2021-05-30', 'Sunday', '2021-05-30'),
(19, '2021-06-05', 'Saturday', '2021-06-05'),
(20, '2021-06-06', 'Sunday', '2021-06-06'),
(21, '2021-06-12', 'Saturday', '2021-06-12'),
(22, '2021-06-13', 'Sunday', '2021-06-13'),
(23, '2021-06-19', 'Saturday', '2021-06-19'),
(24, '2021-06-20', 'Sunday', '2021-06-20'),
(25, '2021-06-26', 'Saturday', '2021-06-26'),
(26, '2021-06-27', 'Sunday', '2021-06-27'),
(27, '2021-07-03', 'Saturday', '2021-07-03'),
(28, '2021-07-04', 'Sunday', '2021-07-04'),
(29, '2021-07-10', 'Saturday', '2021-07-10'),
(30, '2021-07-11', 'Sunday', '2021-07-11'),
(31, '2021-07-17', 'Saturday', '2021-07-17'),
(32, '2021-07-18', 'Sunday', '2021-07-18'),
(33, '2021-07-24', 'Saturday', '2021-07-24'),
(34, '2021-07-25', 'Sunday', '2021-07-25'),
(35, '2021-08-01', 'Sunday', '2021-08-01'),
(36, '2021-08-07', 'Saturday', '2021-08-07'),
(37, '2021-08-08', 'Sunday', '2021-08-08'),
(38, '2021-08-14', 'Saturday', '2021-08-14'),
(39, '2021-08-15', 'Sunday', '2021-08-15'),
(40, '2021-08-21', 'Saturday', '2021-08-21'),
(41, '2021-08-22', 'Sunday', '2021-08-22'),
(42, '2021-08-28', 'Saturday', '2021-08-28'),
(43, '2021-08-29', 'Sunday', '2021-08-29'),
(44, '2021-09-04', 'Saturday', '2021-09-04'),
(45, '2021-09-05', 'Sunday', '2021-09-05'),
(46, '2021-09-11', 'Saturday', '2021-09-11'),
(47, '2021-09-12', 'Sunday', '2021-09-12'),
(48, '2021-09-18', 'Saturday', '2021-09-18'),
(49, '2021-09-19', 'Sunday', '2021-09-19'),
(50, '2021-09-25', 'Saturday', '2021-09-25'),
(51, '2021-09-26', 'Sunday', '2021-09-26'),
(52, '2021-10-02', 'Saturday', '2021-10-02'),
(53, '2021-10-03', 'Sunday', '2021-10-03'),
(54, '2021-10-09', 'Saturday', '2021-10-09'),
(55, '2021-10-10', 'Sunday', '2021-10-10'),
(56, '2021-10-16', 'Saturday', '2021-10-16'),
(57, '2021-10-17', 'Sunday', '2021-10-17'),
(58, '2021-10-23', 'Saturday', '2021-10-23'),
(59, '2021-10-24', 'Sunday', '2021-10-24'),
(60, '2021-10-30', 'Saturday', '2021-10-30'),
(61, '2021-11-06', 'Saturday', '2021-11-06'),
(62, '2021-11-07', 'Sunday', '2021-11-07'),
(63, '2021-11-13', 'Saturday', '2021-11-13'),
(64, '2021-11-14', 'Sunday', '2021-11-14'),
(65, '2021-11-20', 'Saturday', '2021-11-20'),
(66, '2021-11-21', 'Sunday', '2021-11-21'),
(67, '2021-11-27', 'Saturday', '2021-11-27'),
(68, '2021-11-28', 'Sunday', '2021-11-28'),
(69, '2021-12-04', 'Saturday', '2021-12-04'),
(70, '2021-12-05', 'Sunday', '2021-12-05'),
(71, '2021-12-11', 'Saturday', '2021-12-11'),
(72, '2021-12-12', 'Sunday', '2021-12-12'),
(73, '2021-12-18', 'Saturday', '2021-12-18'),
(74, '2021-12-19', 'Sunday', '2021-12-19'),
(75, '2021-12-25', 'Saturday', '2021-12-25'),
(76, '2021-12-26', 'Sunday', '2021-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(80) DEFAULT NULL,
  `name` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `pass` varchar(80) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `country` varchar(80) DEFAULT NULL,
  `state` varchar(80) DEFAULT NULL,
  `pincode` varchar(80) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `mobile` varchar(80) DEFAULT NULL,
  `image` varchar(80) DEFAULT NULL,
  `status` varchar(80) DEFAULT '1',
  `user_type` varchar(80) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `emp_sallery` varchar(200) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `professional_email` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emp_id`, `name`, `email`, `password`, `pass`, `dob`, `country`, `state`, `pincode`, `address`, `mobile`, `image`, `status`, `user_type`, `start_date`, `joining_date`, `emp_sallery`, `updated_at`, `created_at`, `professional_email`) VALUES
(1, 'VVT-001', 'V V Admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, '2017-01-09', 'dehradun', 'uttarakhand', '2492044', '105 Shergarh Road Resham majari,near durga mandir  dehradun uttatakhand.', '9411120242', '21051.png', '1', 'superAdmin', NULL, NULL, NULL, '2020-12-26 21:04:19', '2016-12-14 01:51:49', 'mayank@gmail.com'),
(15, 'VVT-002', 'Nitin Dhyani', 'nitin.d@virtuevise.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234', NULL, NULL, NULL, NULL, NULL, '9759922112', 'avatar1.jpg', '1', 'WEB_DEVELOPER', '2021-01-04', '2021-03-07', '20000', NULL, NULL, 'nitindhyani1996@gmail.com'),
(16, 'VVT-003', 'HR', 'hr.info@virtuevise.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, NULL, NULL, NULL, NULL, '9759922112', 'avatar7.jpg', '1', 'HR', '2021-04-01', '2021-04-01', '10000', NULL, NULL, 'nitindhyani1996@gmail.com'),
(19, 'VVT-004', 'Sandeep', 'sandeep@virtuevise.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234', NULL, NULL, NULL, NULL, NULL, '1234567890', 'avatar5.jpg', '1', 'WEB_DESIGNER', '2021-04-01', '2021-04-01', '15000', NULL, NULL, 'sandeep@gmail.com'),
(20, 'VVT-005', 'Naman Thapa', 'naman@virtuevide.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234', NULL, NULL, NULL, NULL, NULL, '1234567890', 'avatar9.jpg', '1', 'WEB_DEVELOPER', '2021-05-01', '1970-01-01', '18000', NULL, NULL, 'namanthapa@gmail.com'),
(22, 'VVT-006', 'Demo', 'demo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1234', NULL, NULL, NULL, NULL, NULL, '97234567878', NULL, '1', 'ANDROID_DEVELOPER', '2021-05-01', '2021-05-10', '100000', NULL, NULL, 'dhyani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `vvallproject`
--

CREATE TABLE `vvallproject` (
  `id` int(11) NOT NULL,
  `add_by` int(11) DEFAULT NULL,
  `project_name` varchar(150) DEFAULT NULL,
  `client_name` varchar(150) DEFAULT NULL,
  `project_startdate` date DEFAULT NULL,
  `project_enddate` date DEFAULT NULL,
  `pro_dollerprice` varchar(255) DEFAULT NULL,
  `projectprice_doller` varchar(255) DEFAULT NULL,
  `projectprice_inr` varchar(255) DEFAULT NULL,
  `team_leader` varchar(100) DEFAULT NULL,
  `project_team` text DEFAULT NULL,
  `project_description` text DEFAULT NULL,
  `project_status` int(11) DEFAULT 0,
  `addddate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vvallproject`
--

INSERT INTO `vvallproject` (`id`, `add_by`, `project_name`, `client_name`, `project_startdate`, `project_enddate`, `pro_dollerprice`, `projectprice_doller`, `projectprice_inr`, `team_leader`, `project_team`, `project_description`, `project_status`, `addddate`) VALUES
(1, 1, 'Aldori1 ', 'Nitin Dhyani1', '2021-05-02', '2021-05-30', '73.60', '2000', '147200', '19', '15,16,20', '4proejct_descsadsad', 0, '2021-05-11 16:48:26'),
(2, 1, 'Demo ', 'Nitin Dhyani', '2021-05-07', '2021-05-08', '73.32', '1000', '73320', '19', '15,19', 'dsadsadsa sdsad sdsad ', 0, '2021-05-11 17:06:17'),
(4, 1, 'Demo 1', 'Nitin Dhyani', '2021-05-07', '2021-05-08', '73.32', '1000', '73320', '20', '19', 'dsadsadsa sdsad sdsad ', 0, '2021-05-11 23:08:16'),
(9, 1, 'Demo2', 'Nitin Dhyani', '2021-05-08', '2021-05-24', '73.20', '3000', '219600', '15', '15,19,20', 'project description', 0, '2021-05-13 20:23:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_apply_leave`
--
ALTER TABLE `emp_apply_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_attendanceinfo`
--
ALTER TABLE `emp_attendanceinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_information`
--
ALTER TABLE `emp_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp_satsun_holiday`
--
ALTER TABLE `emp_satsun_holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vvallproject`
--
ALTER TABLE `vvallproject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_apply_leave`
--
ALTER TABLE `emp_apply_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `emp_attendanceinfo`
--
ALTER TABLE `emp_attendanceinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `emp_information`
--
ALTER TABLE `emp_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `emp_satsun_holiday`
--
ALTER TABLE `emp_satsun_holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `vvallproject`
--
ALTER TABLE `vvallproject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
