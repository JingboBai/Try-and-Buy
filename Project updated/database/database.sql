-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2015 at 05:46 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try&buy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `CartInfo`
--

CREATE TABLE IF NOT EXISTS `CartInfo` (
  `BillId` int(11) DEFAULT NULL,
  `ProductId` varchar(100) DEFAULT NULL,
  `Count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `CustomerShoppingInfo`
--

CREATE TABLE IF NOT EXISTS `CustomerShoppingInfo` (
  `BillId` int(11) DEFAULT NULL,
  `CustomerId` int(11) DEFAULT NULL,
  `ProductId` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE IF NOT EXISTS `Products` (
  `ProductId` varchar(100) NOT NULL DEFAULT '',
  `ProductName` varchar(255) NOT NULL,
  `ProductType` varchar(100) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `ProductReview` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `TryCount`
--

CREATE TABLE IF NOT EXISTS `TryCount` (
  `BillId` int(11) DEFAULT NULL,
  `ProductId` varchar(100) DEFAULT NULL,
  `Count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `UserInfo`
--


CREATE TABLE `UserInfo` (
  `UserId` int(255) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `RewardPoints` int(255) DEFAULT '3',
  `Street` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Zip` varchar(255) DEFAULT NULL,
  `Type` int(100) DEFAULT NULL,
  `Flag` tinyint(1) DEFAULT NULL,
  `IssueDate` date DEFAULT NULL,
  `ExpiryDate` date DEFAULT NULL,
  `VisaCompanyName` varchar(255) DEFAULT NULL,
  `cardNumber` int(255) DEFAULT NULL,
  `TypeOfCard` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `UserInfo`
--

INSERT INTO `UserInfo` (`UserId`, `FirstName`, `LastName`, `email`, `password`, `RewardPoints`, `Street`, `City`, `State`, `Zip`, `Type`, `Flag`, `IssueDate`, `ExpiryDate`, `VisaCompanyName`, `cardNumber`, `TypeOfCard`) VALUES
(1, 'Jingbo', 'Bai', 'jbai@scu.com', '123', 3, 'b', 'b', 'b', 'b', 13, 1, '2015-11-18', '2015-11-18', 'ggg', 13, 'tyy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `UserInfo`
--
ALTER TABLE `UserInfo`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `cardNumber` (`cardNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `UserInfo`
--
ALTER TABLE `UserInfo`
  MODIFY `UserId` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
