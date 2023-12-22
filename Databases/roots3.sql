-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 04:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roots3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(20) DEFAULT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `investment_amount` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `admin_password`, `first_name`, `last_name`, `phone_number`, `gender`, `country`, `city`, `zip_code`, `investment_amount`) VALUES
('admin1@gmail.com', 'admin1', 'Abid', 'Hasan', '11', 'Male', 'BD', 'Dhaka', 1219, 1000000),
('admin3@gmail.com', 'admin3', 'Akib', 'Ahmed', '55', 'male', '', 'Dhaka', 1219, 129999),
('admin@gmail.com', 'admin', 'Dhrubo', 'Hossain', '01998504858', 'Male', 'BD', 'Dhaka', 1219, 12000),
('superadmin@gmail.com', 'superadmin', 'Hasan', 'Ahmed', '33', 'Male', 'BD', 'Dhaka', 1219, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_email` varchar(50) NOT NULL,
  `employee_password` varchar(20) DEFAULT NULL,
  `e_first_name` varchar(20) DEFAULT NULL,
  `e_last_name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `work_hour` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `house_no` varchar(20) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `join_date` varchar(20) NOT NULL,
  `salary` float NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `coupon_code` varchar(20) NOT NULL,
  `j_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_email`, `employee_password`, `e_first_name`, `e_last_name`, `gender`, `phone_number`, `work_hour`, `city`, `zip_code`, `house_no`, `date_of_birth`, `join_date`, `salary`, `admin_email`, `coupon_code`, `j_status`) VALUES
('employee1@gmail.com', 'employee1', 'Shakib', 'AL Hasan', 'Male', '55', 12, 'Dhaka', 1219, '21', '20.01.1999', '21.02.22', 2000, 'admin@gmail.com', '12', NULL),
('employee@gmail.com', 'employee', 'Abid', 'Hasan', 'Male', '11', 12, 'Dhaka', 1219, '21', '20.01.1999', '21.02.22', 1200, 'admin@gmail.com', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `email` varchar(50) NOT NULL,
  `serial_number` int(11) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `date_of_birth` varchar(15) NOT NULL,
  `sector_name` varchar(20) NOT NULL,
  `instute_name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`email`, `serial_number`, `phone_number`, `first_name`, `last_name`, `date_of_birth`, `sector_name`, `instute_name`, `city`, `zip_code`, `admin_email`) VALUES
('bcd@gmail.com', 2, '33', 'Sakib', 'Hasan', '20.01.1999', 'abc', 'NSU', 'Dhaka', 1219, 'admin@gmail.com'),
('onno@gmail.com', 3, '44', 'Onno', 'Kamal', '20.01.1999', 'abc', 'UIU', 'Dhaka', 1219, 'admin@gmail.com'),
('saad@gmail.com', 1, '22', 'Saad', 'Ahmed', '20.01.1999', 'abc', 'NSU', 'Dhaka', 1219, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker_computer_skill`
--

CREATE TABLE `job_seeker_computer_skill` (
  `computer_skill` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seeker_computer_skill`
--

INSERT INTO `job_seeker_computer_skill` (`computer_skill`, `email`) VALUES
('ms word', 'saad@gmail.com'),
('Ai', 'onno@gmail.com'),
('UI', 'bcd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `earn_point` int(11) NOT NULL,
  `join_date` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `town` varchar(30) NOT NULL,
  `house_no` varchar(20) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `coupon_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_email`, `user_password`, `earn_point`, `join_date`, `last_name`, `first_name`, `town`, `house_no`, `zip_code`, `gender`, `email`, `coupon_code`) VALUES
('user@gmail.com', 'user', 10, '21.02.22', 'Karim', 'Abdul', 'Dhaka', '21', 1219, 'Male', 'admin@gmail.com', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_email`),
  ADD KEY `admin_email` (`admin_email`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`email`),
  ADD KEY `admin_email` (`admin_email`);

--
-- Indexes for table `job_seeker_computer_skill`
--
ALTER TABLE `job_seeker_computer_skill`
  ADD KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`admin_email`) REFERENCES `admin` (`admin_email`);

--
-- Constraints for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD CONSTRAINT `job_seeker_ibfk_1` FOREIGN KEY (`admin_email`) REFERENCES `admin` (`admin_email`);

--
-- Constraints for table `job_seeker_computer_skill`
--
ALTER TABLE `job_seeker_computer_skill`
  ADD CONSTRAINT `job_seeker_computer_skill_ibfk_1` FOREIGN KEY (`email`) REFERENCES `job_seeker` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
