-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 09:26 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `musicaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE IF NOT EXISTS `category_tbl` (
`catid` int(10) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`catid`, `description`) VALUES
(1, 'Acoustic guitar'),
(2, 'Electric guitar'),
(3, 'Bass guitar'),
(4, 'Drums'),
(5, 'Violin'),
(6, 'Keyboards'),
(7, 'Piano'),
(8, 'Accessories'),
(9, 'Effects'),
(10, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `item_tbl`
--

CREATE TABLE IF NOT EXISTS `item_tbl` (
`itemid` int(10) NOT NULL,
  `catid` int(10) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `cost` float(10,2) NOT NULL,
  `stock` int(5) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_tbl`
--

INSERT INTO `item_tbl` (`itemid`, `catid`, `itemname`, `description`, `cost`, `stock`, `picture`) VALUES
(1, 1, 'Acoustic 1', 'Finest Acoustic Guitar', 7950.75, 12, '20120911172608.jpg'),
(2, 7, 'Studio Bass 1', 'ESP LTD B-206SM Bass ni islao', 11450.75, 3, '20120911173120.jpg'),
(3, 3, 'Bass Guitar Light', 'Bass Guitar ', 6550.00, 5, '20120911173337.jpg'),
(5, 4, 'Digital Drum', 'Quiet and responsive mesh pads for building transferable skills..', 24560.00, 6, '20181231091412.jpg'),
(6, 2, 'Electric Guitar', 'Includes Gig Bag and Jack Cable...', 21000.00, 9, '20181231092207.jpg'),
(7, 4, 'Drum Kit', 'Includes Hi-Hats And Crash Cymbal with Stands. Large, Powerful 22'' Bass Drum', 32450.00, 2, '20181231092400.jpg'),
(8, 8, 'Hickory Drumsticks, Black Finish', 'no descp', 850.00, 16, '20181231092549.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tbl`
--

CREATE TABLE IF NOT EXISTS `transaction_tbl` (
`tid` int(10) NOT NULL,
  `key` varchar(30) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `productid` int(10) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(50) NOT NULL,
  `stock` int(5) NOT NULL,
  `orderstat` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_tbl`
--

INSERT INTO `transaction_tbl` (`tid`, `key`, `fname`, `email`, `contact`, `location`, `productid`, `productname`, `quantity`, `price`, `stock`, `orderstat`) VALUES
(2, 'cUA2uubV6bu6', 'rodino topasi', 'em0_suck17@yahoo.com', '09106499713', 'Caloocan QC', 2, 'Studio Bass 1', 1, 11451, 3, 'paid'),
(3, 'mvig6EwABtuT', 'rodino topasi', 'em0_suck17@yahoo.com', '09106499713', 'Caloocan QC', 1, 'Acoustic 1', 2, 7951, 12, 'pending'),
(4, 'yqBoEDx6Kt5T', 'harry den', 'harryden@ourmail.com', '852741852', 'demoo', 2, 'Studio Bass 1', 1, 11451, 3, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
 ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `item_tbl`
--
ALTER TABLE `item_tbl`
 ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
 ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
MODIFY `catid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `item_tbl`
--
ALTER TABLE `item_tbl`
MODIFY `itemid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
