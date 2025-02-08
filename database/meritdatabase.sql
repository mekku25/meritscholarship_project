-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 05:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meritdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `meritapplication`
--

CREATE TABLE `meritapplication` (
  `id` int(20) NOT NULL,
  `email` varchar(225) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `COGimage` varchar(100) NOT NULL,
  `Assessmentimage` varchar(100) NOT NULL,
  `Schoolidimage` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tdpapplication`
--

CREATE TABLE `tdpapplication` (
  `id` int(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `permanentaddress` varchar(100) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `pob` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `citizenship` varchar(100) NOT NULL,
  `mobnumber` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `schoolattended` varchar(100) NOT NULL,
  `schoolidnumber` varchar(20) NOT NULL,
  `schooladdress` varchar(100) NOT NULL,
  `schoolsector` varchar(100) NOT NULL,
  `yearlevel` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `tribalmembership` varchar(100) NOT NULL,
  `parentsname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `parentsincome` varchar(20) NOT NULL,
  `numofsiblings` varchar(20) NOT NULL,
  `otherassistance` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tesapplication`
--

CREATE TABLE `tesapplication` (
  `id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `grantee` varchar(100) NOT NULL,
  `studentidnumber` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `extensionname` varchar(100) NOT NULL,
  `totalfees` varchar(100) NOT NULL,
  `upload` varchar(100) NOT NULL,
  `fourps` varchar(100) NOT NULL,
  `familymontlyincome` varchar(100) NOT NULL,
  `householdpercapitaincome` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeat_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `repeat_password`) VALUES
(1, 'admin', '$2y$10$aDbTn0NLw/uReujdS72dmezPupeZccjilIvW6LYJcxqytx0NKCmzS', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meritapplication`
--
ALTER TABLE `meritapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tdpapplication`
--
ALTER TABLE `tdpapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tesapplication`
--
ALTER TABLE `tesapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meritapplication`
--
ALTER TABLE `meritapplication`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tdpapplication`
--
ALTER TABLE `tdpapplication`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tesapplication`
--
ALTER TABLE `tesapplication`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
