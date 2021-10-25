-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 25, 2021 at 08:19 PM
-- Server version: 5.7.34-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fipmamma_storyDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Activity`
--

CREATE TABLE `Activity` (
  `ID` int(255) NOT NULL,
  `Date_begin` date NOT NULL,
  `Date_end` date NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Program` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Activity`
--

INSERT INTO `Activity` (`ID`, `Date_begin`, `Date_end`, `Title`, `Program`) VALUES
(1, '2021-08-07', '2021-08-08', 'LATSE Imerintsiafindra', 'doc/latse1.pdf'),
(2, '2019-12-06', '2019-12-08', 'LATSE Imerintsiafindra', 'NULL'),
(3, '2021-09-03', '2021-09-05', 'LATSE Foibe ', ''),
(5, '2021-08-07', '2021-08-07', 'Andrana', 'NULL'),
(6, '2021-08-07', '2021-08-07', 'andrana2', 'NULL'),
(7, '2021-08-07', '2021-08-07', 'andrana2', 'NULL'),
(8, '2021-08-07', '2021-08-07', 'andrana3', 'NULL'),
(9, '2021-08-07', '2021-08-07', 'andrana3', 'NULL'),
(10, '2021-08-07', '2021-08-07', 'andrana3', 'NULL'),
(11, '2021-08-07', '2021-08-07', 'andrana4', 'NULL'),
(12, '2021-08-07', '2021-08-07', 'andrana6', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `Image_activity`
--

CREATE TABLE `Image_activity` (
  `ID` int(255) NOT NULL,
  `type` text NOT NULL,
  `adresse` text NOT NULL,
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Image_activity`
--

INSERT INTO `Image_activity` (`ID`, `type`, `adresse`, `activity_id`) VALUES
(1, 'title', 'images/1.jpg', 3),
(2, 'content', 'images/2.jpg', 3),
(3, 'content', 'images/3.jpg', 3),
(4, 'content', 'images/4.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Story`
--

CREATE TABLE `Story` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Activity`
--
ALTER TABLE `Activity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Image_activity`
--
ALTER TABLE `Image_activity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Story`
--
ALTER TABLE `Story`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Activity`
--
ALTER TABLE `Activity`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Image_activity`
--
ALTER TABLE `Image_activity`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Story`
--
ALTER TABLE `Story`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
