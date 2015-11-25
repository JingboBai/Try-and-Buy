-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2015 at 09:00 PM
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
  `ProductId` varchar(100) NOT NULL DEFAULT '',
  `Count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CartInfo`
--

INSERT INTO `CartInfo` (`BillId`, `ProductId`, `Count`) VALUES
(NULL, '001', 2);

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
  `Stock` int(11) DEFAULT NULL,
  `ProductReview` int(11) DEFAULT NULL,
  `src` varchar(50) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`ProductId`, `ProductName`, `ProductType`, `Price`, `Stock`, `ProductReview`, `src`, `Quantity`) VALUES
('001', 'Moringa Soap', 'Body Cleaner', 5, 5, NULL, '../images/soapBars/soap1.jpg', 3),
('002', 'Irish Spring', 'Body Cleaner', 4, 10, NULL, '../images/soapBars/soap2.jpg', NULL),
('003', 'Pangea Organic Soap', 'Body Cleaner', 6, 10, NULL, '../images/soapBars/soap3.jpg', NULL),
('004', 'Dead Sea Mineral Soap', 'Body Cleaner', 6, 10, NULL, '../images/soapBars/soap4.jpg', NULL),
('005', 'Rainforest Moisture', 'Hair Care', 12, 10, NULL, '../images/hair/hair1.jpg', NULL),
('006', 'Rainforest Balance Shampoo', 'Hair Care', 10, 10, NULL, '../images/hair/hair2.jpg', NULL),
('007', 'Wild Agran Oil', 'Hair Care', 25, 10, NULL, '../images/hair/hair3.jpg', NULL),
('008', 'Rainforest Moisture Shampoo', 'Hair Cair', 10, 10, NULL, '../images/hair/hair4.jpg', NULL),
('009', 'Vitamin C Glow Boosting Moisturizer', 'Moisturizer', 30, 10, NULL, '../images/moisturizer/moisturizer1.jpg', NULL),
('010', 'Vitamin C Daly Moisturizer', 'Moisturizer', 2, 10, NULL, '../images/moisturizer/moisturizer2.jpg', NULL),
('011', 'Green Deodorant', 'Deodorant', 10, 10, NULL, '../images/Deodorant/deo1.jpg', NULL),
('012', 'Lotus Bamboo', 'Deodorant', 12, 10, NULL, '../images/Deodorant/deo2.jpg', NULL),
('013', 'The Venus', 'Deodorant', 15, 10, NULL, '../images/Deodorant/deo3.jpg', NULL),
('014', 'Aorelle', 'Deodorant', 8, 10, NULL, '../images/Deodorant/deo5.jpg', NULL),
('015', 'Wholearth', 'Deorant', 18, 10, NULL, '../images/Deodorant/deo6.jpg', NULL),
('016', 'Red Flower', 'Deodorant', 26, 10, NULL, '../images/Deodorant/deo7.jpg', NULL),
('017', 'Red Flower', 'Perfume', 36, 10, NULL, '../images/perfume/perfume2.jpg', NULL),
('018', 'Vered', 'Perfume', 20, 10, NULL, '../images/perfume/perfume4.jpg', NULL),
('019', 'Juice Mist', 'Mist', 10, 10, NULL, '../images/mist/mist1.jpg', NULL),
('020', 'Rose Water Mist', 'Mist', 19, 10, NULL, '../images/mist/mist2.jpg', NULL),
('021', 'Organic Body Mist', 'Mist', 16, 10, NULL, '../images/mist/mist3.jpg', NULL),
('022', 'Sea Mist', 'Mist', 12, 10, NULL, '../images/mist/mist5.jpg', NULL);

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
-- Indexes for table `CartInfo`
--
ALTER TABLE `CartInfo`
  ADD PRIMARY KEY (`ProductId`);

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
