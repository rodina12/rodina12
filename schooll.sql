-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 10:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooll`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `rolesID` int(11) NOT NULL,
  `name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`rolesID`, `name`) VALUES
(1, 'manager'),
(2, 'teacher'),
(3, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectID` int(11) NOT NULL,
  `sname` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectID`, `sname`) VALUES
(29, 'english'),
(34, 'french'),
(39, 'math'),
(41, 'science'),
(44, 'arabic');

-- --------------------------------------------------------

--
-- Table structure for table `substu`
--

CREATE TABLE `substu` (
  `substuID` int(11) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `subjectID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `substu`
--

INSERT INTO `substu` (`substuID`, `userID`, `subjectID`) VALUES
(32, 64, 29),
(39, 112, 39),
(44, 128, 41),
(45, 112, 34),
(46, 128, 34),
(47, 112, 44),
(48, 64, 44);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `passwordd` varchar(200) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `rolesID` int(11) DEFAULT NULL,
  `subjectID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `email`, `passwordd`, `address`, `phone`, `rolesID`, `subjectID`) VALUES
(1, 'ahmed', 'ahmed@gmail.com', '12qw', 'cairo', 234245, 1, NULL),
(5, 'rodina', 'rodina@gmail.com', '12346', 'cairo', 2541654, 1, NULL),
(64, 'amr', 'amr@gmail.comm', '   12345', 'alex', 123012, 3, NULL),
(112, 'yara', 'yara1@gmail.com', 'aszx', ' giza', 13434, 3, NULL),
(119, 'sara', 'sara@gmail.com', '  zxc', 'cairo', 5325455, 2, 41),
(122, 'resturant', 'rodinaamahmou@gmail.com', ' hhj', ' cairo', 2147483647, 2, 29),
(128, 'mohamed', 'mo@gmail.com', 'qwerty', ' cairo', 13456, 3, NULL),
(129, 'ali', 'ali@gmail.com', 'cvbn', ' giza', 980765, 2, 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rolesID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectID`);

--
-- Indexes for table `substu`
--
ALTER TABLE `substu`
  ADD PRIMARY KEY (`substuID`),
  ADD KEY `userID` (`userID`),
  ADD KEY `subjectID` (`subjectID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `rolesID` (`rolesID`),
  ADD KEY `subjectID` (`subjectID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `rolesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `substu`
--
ALTER TABLE `substu`
  MODIFY `substuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `substu`
--
ALTER TABLE `substu`
  ADD CONSTRAINT `substu_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `substu_ibfk_2` FOREIGN KEY (`subjectID`) REFERENCES `subject` (`subjectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`rolesID`) REFERENCES `roles` (`rolesID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`subjectID`) REFERENCES `subject` (`subjectID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
