-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2016 at 11:07 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iii`
--

-- --------------------------------------------------------

--
-- Table structure for table `mainmenu`
--

CREATE TABLE `mainmenu` (
  `mainMenuId` int(11) NOT NULL,
  `mainMenuName` varchar(250) NOT NULL,
  `mainMenuLink` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainmenu`
--

INSERT INTO `mainmenu` (`mainMenuId`, `mainMenuName`, `mainMenuLink`) VALUES
(1, 'not access', '#'),
(2, 'Course Details', ''),
(3, 'Projects', ''),
(4, 'About Us', '');

-- --------------------------------------------------------

--
-- Table structure for table `smenu`
--

CREATE TABLE `smenu` (
  `smenuId` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `manu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smenu`
--

INSERT INTO `smenu` (`smenuId`, `name`, `link`, `manu`) VALUES
(1, 'Students', '', 2),
(2, 'Common Project', '#', 3),
(3, 'Students Information', '$', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userEmail` varchar(250) NOT NULL,
  `userPassword` varchar(250) NOT NULL,
  `userType` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userEmail`, `userPassword`, `userType`) VALUES
(1, 'test@gmail.com', '1', 1),
(2, 't@gmail.com', '1', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mainmenu`
--
ALTER TABLE `mainmenu`
  ADD PRIMARY KEY (`mainMenuId`);

--
-- Indexes for table `smenu`
--
ALTER TABLE `smenu`
  ADD PRIMARY KEY (`smenuId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mainmenu`
--
ALTER TABLE `mainmenu`
  MODIFY `mainMenuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `smenu`
--
ALTER TABLE `smenu`
  MODIFY `smenuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
