-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 01:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `full_name`, `date`, `from`, `to`, `time`, `age`) VALUES
(1, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(2, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(3, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(4, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(5, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(6, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(7, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(8, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(9, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(10, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(11, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(12, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(15, 'red', '0000-00-00', 'TN', 'KA', '0000-00-00 00:00:00.000000', '23'),
(16, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(17, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(18, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(19, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(20, '', '0000-00-00', '', '', '0000-00-00 00:00:00.000000', ''),
(25, '', '0000-00-00', '', '', '2021-01-28 14:06:48.185459', ''),
(26, '', '0000-00-00', '', '', '2021-01-28 14:06:59.229735', ''),
(27, '', '0000-00-00', '', '', 'current_timestamp(6)', ''),
(28, '', '0000-00-00', '', '', 'current_timestamp(6)', ''),
(29, '', '0000-00-00', '', '', '', ''),
(30, '', '0000-00-00', '', '', '', ''),
(31, '', '0000-00-00', '', '', '', ''),
(32, '', '0000-00-00', '', '', '', ''),
(33, '', '0000-00-00', '', '', '', ''),
(34, '', '0000-00-00', '', '', '', ''),
(35, '', '0000-00-00', '', '', '', ''),
(36, '', '0000-00-00', '', '', '', ''),
(37, '', '0000-00-00', '', '', '', ''),
(38, '', '0000-00-00', '', '', '', ''),
(39, '', '0000-00-00', '', '', '', ''),
(40, '', '0000-00-00', '', '', '', ''),
(41, '', '0000-00-00', '', '', '', ''),
(42, '', '0000-00-00', '', '', '', ''),
(43, '', '0000-00-00', '', '', '', ''),
(44, '', '0000-00-00', '', '', '', ''),
(45, '', '0000-00-00', '', '', '', ''),
(46, '', '0000-00-00', '', '', '', ''),
(47, '', '0000-00-00', '', '', '', ''),
(48, '', '0000-00-00', '', '', '', ''),
(49, '', '0000-00-00', '', '', '', ''),
(50, '', '0000-00-00', '', '', '', ''),
(51, '', '0000-00-00', '', '', '', ''),
(52, '', '0000-00-00', '', '', '', ''),
(53, '', '0000-00-00', '', '', '', ''),
(54, '', '0000-00-00', '', '', '', ''),
(55, '', '0000-00-00', '', '', '', ''),
(56, '', '0000-00-00', '', '', '', ''),
(57, '', '0000-00-00', '', '', '', ''),
(58, '', '0000-00-00', '', '', '', ''),
(59, '', '0000-00-00', '', '', '', ''),
(60, '', '0000-00-00', '', '', '', ''),
(61, '', '0000-00-00', '', '', '', ''),
(62, '', '0000-00-00', '', '', '', ''),
(63, '', '0000-00-00', '', '', '', ''),
(64, '', '0000-00-00', '', '', '', ''),
(65, '', '0000-00-00', '', '', '', ''),
(66, '', '0000-00-00', '', '', '', ''),
(67, '', '0000-00-00', '', '', '', ''),
(68, '', '0000-00-00', '', '', '', ''),
(69, '', '0000-00-00', '', '', '', ''),
(70, '', '0000-00-00', '', '', '', ''),
(71, '', '0000-00-00', '', '', '', ''),
(72, '', '0000-00-00', '', '', '', ''),
(73, '', '0000-00-00', '', '', '', ''),
(74, '', '0000-00-00', '', '', '', ''),
(75, '', '0000-00-00', '', '', '', ''),
(76, '', '0000-00-00', '', '', '', ''),
(77, '', '0000-00-00', '', '', '', ''),
(78, '', '0000-00-00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phonenumber`, `date_of_birth`, `profile_pic`, `gender`, `password`) VALUES
(1, 'karthik', 'm', 'karthikeyan m', 'karthik.sam1221@gmail.com', '8668035241', '2021-01-21', '', 'male', ''),
(2, 'Karthikeyan', 'Sam', 'karthikeyan_sam', 'Karthik122112@gmail.com', '0ea82cb96d84a452dbd5d6a0e93bbb80', '2021-01-27', 'assets/files/images/profilepics/woman.png', '8668035241', ''),
(3, 'Karthikeyan', 'Ram', 'karthikeyan_ram', 'Karthik4444@gmail.com', '0ea82cb96d84a452dbd5d6a0e93bbb80', '2021-01-27', 'assets/files/images/profilepics/woman.png', '9976863614', ''),
(4, 'Karthikeyan', 'Mani', 'karthikeyan_mani', 'Karthiik8878@gmail.com', '8789889898\'0ea82cb96d84a452dbd5d6a0e93bbb80', '2021-01-27', 'assets/files/images/profilepics/woman.png', '', '0ea82cb96d84a452dbd5d6a0e93bbb80'),
(5, 'Karthik', 'Hari', 'karthik_hari', 'Karthikhari@gmail.com', '7676878787\'e2fe8628dad368cdd2aac64d218cc97e', '2021-01-27', 'assets/files/images/profilepics/woman.png', '', 'e2fe8628dad368cdd2aac64d218cc97e'),
(6, 'Karthik', 'Ram', 'karthik_ram', 'Karthikram1221@gmail.com', '8778988976', '0000-00-00', 'assets/files/images/profilepics/woman.png', 'female', '0ea82cb96d84a452dbd5d6a0e93bbb80'),
(7, 'Larthik', 'Suresh', 'larthik_suresh', 'Karthiksuresh@gmail.com', '9090989887', '0000-00-00', 'assets/files/images/profilepics/user.png', 'male', '0ea82cb96d84a452dbd5d6a0e93bbb80'),
(8, 'Suresh', 'Grinder', 'suresh_grinder', 'Grinder@gmail.com', '6756453423', '0000-00-00', 'assets/files/images/profilepics/user.png', 'male', '0ea82cb96d84a452dbd5d6a0e93bbb80'),
(9, 'Suresh', 'Ram', 'suresh_ram', 'Ram@gmail.com', '8776655455', '2021-01-13', 'assets/files/images/profilepics/woman.png', 'female', 'ed218e06b885297d0750b65be5e4041e'),
(10, 'Ramesh', 'Ravee', 'ramesh_ravee', 'Ravi12@gmail.com', '8798769887', '1990-08-25', 'assets/files/images/profilepics/user.png', 'male', 'e12dfb6e161412d75ca371afbcd95374'),
(11, 'Karthik', 'Manick', 'karthik_manick', 'Karthik7665@gmail.com', '99776863614', '1996-08-28', 'assets/files/images/profilepics/user.png', 'male', '0ea82cb96d84a452dbd5d6a0e93bbb80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
