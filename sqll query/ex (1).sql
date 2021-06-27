-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 24, 2021 at 06:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ex`
--

-- --------------------------------------------------------

--
-- Table structure for table `agreemeent_status`
--

CREATE TABLE `agreemeent_status` (
  `agreement_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `agreemeent_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agreemeent_status`
--

INSERT INTO `agreemeent_status` (`agreement_id`, `client_id`, `agreemeent_status`) VALUES
(2, 4, 'as');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `client_id` int(11) NOT NULL,
  `Client_name` varchar(50) NOT NULL,
  `contact_person_name` varchar(30) NOT NULL,
  `contact_person_designation` varchar(30) NOT NULL,
  `contact_person_number` varchar(50) NOT NULL,
  `r_percent` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`client_id`, `Client_name`, `contact_person_name`, `contact_person_designation`, `contact_person_number`, `r_percent`) VALUES
(4, 'sfsf', 'abc', 'HR', '123456890', 57);

-- --------------------------------------------------------

--
-- Table structure for table `open_positions`
--

CREATE TABLE `open_positions` (
  `position_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `position_title` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `experience` int(11) NOT NULL,
  `position_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `open_positions`
--

INSERT INTO `open_positions` (`position_id`, `client_id`, `position_title`, `salary`, `location`, `experience`, `position_status`) VALUES
(5, 4, 'hr', 2000, 'das', 4, 'open-position');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(3, 'yuti', 'yuti10', '2021-06-01 00:10:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agreemeent_status`
--
ALTER TABLE `agreemeent_status`
  ADD PRIMARY KEY (`agreement_id`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `open_positions`
--
ALTER TABLE `open_positions`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agreemeent_status`
--
ALTER TABLE `agreemeent_status`
  MODIFY `agreement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `open_positions`
--
ALTER TABLE `open_positions`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
