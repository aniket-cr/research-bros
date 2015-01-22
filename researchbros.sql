-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2015 at 12:47 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `researchbros`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `equipmentID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(250) NOT NULL,
  `owner_name` varchar(45) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `availability` varchar(15) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `site` varchar(45) NOT NULL,
  `location` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipmentID`, `name`, `description`, `owner_name`, `contact`, `availability`, `photo`, `site`, `location`) VALUES
(1, 'CNC', 'This is a short description about the machine. It should not be more than 2 lines. Should be kept in mind.', 'Ankit', '9569884636', 'free', 'img/cr7.jpg', 'www.google.com', 'Ropar'),
(2, 'cnc', 'This is a short description about the machine. It should not be more than 2 lines.', 'aniket', '9501651223', 'free', 'img/cr7.jpg', 'http://google.com', 'IIT Ropar'),
(3, 'lathe', 'This is a short description about the machine. It should not be more than 2 lines.', 'ankit', '999999999', 'restricted', 'img/cr7.jpg', 'http://google.com', 'IIT Roorkee'),
(4, 'dredmel', 'This is a short description about the machine. It should not be more than 2 lines.', 'mohit garg', '9501652710', 'free', 'img/cr7.jpg', 'google.com', 'A-205 Mercury Hostel, IIT Ropar'),
(5, 'dredmel', 'This is a short description about the machine. It should not be more than 2 lines.', 'mohit garg', '9501652710', 'free', 'img/cr7.jpg', 'google.com', 'A-205 Mercury Hostel, IIT Ropar'),
(6, 'dredmel', 'This is a short description about the machine. It should not be more than 2 lines.', 'mohit garg', '9501652710', 'free', 'img/cr7.jpg', 'google.com', 'A-205 Mercury Hostel, IIT Ropar');

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE IF NOT EXISTS `sells` (
  `equipmentID` int(11) NOT NULL,
  `emailID` varchar(45) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `equipmentID` int(11) NOT NULL,
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`equipmentID`, `tags`) VALUES
(1, 'cnc cnc machine cnc machine in chandigarh cnc machine freely available'),
(2, 'cnc second machine aniket'),
(3, 'lathe machine'),
(4, 'dredmel machine mohit garg'),
(5, 'dredmel machine mohit garg'),
(6, 'dredmel machine mohit garg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `emailID` varchar(45) NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(45) NOT NULL,
  `contact` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`emailID`, `password`, `name`, `contact`) VALUES
('ankitk94@yahoo.com', 'c4ca4238a0b923820dcc509a6f75849b', 'Ankit', '9569884636');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `emailID` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
 ADD PRIMARY KEY (`equipmentID`), ADD UNIQUE KEY `equipmentID_UNIQUE` (`equipmentID`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
 ADD PRIMARY KEY (`equipmentID`,`emailID`), ADD UNIQUE KEY `equipmentID_UNIQUE` (`equipmentID`), ADD KEY `emailIDf_idx` (`emailID`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`equipmentID`), ADD UNIQUE KEY `equipmentID_UNIQUE` (`equipmentID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`emailID`), ADD UNIQUE KEY `emailID_UNIQUE` (`emailID`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
 ADD PRIMARY KEY (`emailID`), ADD UNIQUE KEY `emailID_UNIQUE` (`emailID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sells`
--
ALTER TABLE `sells`
ADD CONSTRAINT `equipmentIDf` FOREIGN KEY (`equipmentID`) REFERENCES `equipment` (`equipmentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `emailIDf` FOREIGN KEY (`emailID`) REFERENCES `vendor` (`emailID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
ADD CONSTRAINT `equipmentIDtf` FOREIGN KEY (`equipmentID`) REFERENCES `equipment` (`equipmentID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
ADD CONSTRAINT `emailIDvf` FOREIGN KEY (`emailID`) REFERENCES `user` (`emailID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
