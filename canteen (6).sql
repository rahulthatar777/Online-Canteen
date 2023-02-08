-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2022 at 06:21 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('user6065', 'Main123');

-- --------------------------------------------------------

--
-- Table structure for table `book_order`
--

DROP TABLE IF EXISTS `book_order`;
CREATE TABLE IF NOT EXISTS `book_order` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(50) NOT NULL,
  `sid` int(50) NOT NULL,
  `qty1` varchar(50) NOT NULL,
  `price1` int(11) NOT NULL,
  `stid` int(11) NOT NULL,
  `datetime` varchar(20) NOT NULL,
  `ontime` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `payment` varchar(50) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_order`
--

INSERT INTO `book_order` (`orderid`, `p_id`, `sid`, `qty1`, `price1`, `stid`, `datetime`, `ontime`, `status`, `payment`) VALUES
(1, 5, 20, '4', 48, 20, 'June 03, 2020 19:41', '20:41:00', 'Process', 'Done'),
(2, 1, 20, '3', 75, 20, 'June 03, 2020 19:42', '20:42:00', 'Reject', 'Returned'),
(3, 1, 20, '4', 100, 20, 'June 04, 2020 19:03', '20:03:00', 'Reject', 'Returned'),
(5, 4, 20, '4', 200, 20, 'June 08, 2020 11:40', '12:40:00', 'Process', 'Done'),
(4, 3, 20, '5', 300, 20, 'June 06, 2020 12:30', '13:30:00', 'Reject', 'Returned'),
(6, 1, 20, '5', 125, 20, 'June 09, 2020 11:39', '12:39:00', 'Delivered', 'Done'),
(7, 3, 20, '8', 480, 20, 'June 12, 2020 23:59', '00:59:00', 'Delivered', 'Done'),
(8, 1, 20, '3', 75, 20, 'June 13, 2020 15:01', '16:01:00', 'Accept', 'Done'),
(9, 1, 20, '3', 75, 20, 'June 13, 2020 15:01', '16:01:00', 'Pending', 'Done'),
(10, 1, 20, '3', 75, 20, 'June 14, 2020 15:57', '16:57:00', 'Pending', 'not'),
(12, 1, 20, '3', 75, 20, 'June 14, 2020 16:00', '17:00:00', 'Pending', 'not'),
(15, 3, 20, '2', 120, 20, 'June 14, 2020 16:23', '17:23:00', 'Pending', 'not'),
(16, 3, 20, '2', 120, 20, 'June 14, 2020 16:25', '17:25:00', 'Pending', 'not'),
(17, 3, 20, '2', 120, 20, 'June 14, 2020 16:27', '17:27:00', 'Pending', 'not'),
(18, 1, 20, '4', 100, 20, 'June 14, 2020 16:39', '17:39:00', 'Pending', 'Done'),
(19, 1, 20, '4', 100, 20, 'June 15, 2020 10:45', '11:45:00', 'Accept', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `catname`) VALUES
(2, 'BREAK FAST'),
(3, 'LUNCH');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

DROP TABLE IF EXISTS `city`;
CREATE TABLE IF NOT EXISTS `city` (
  `cityid` int(11) NOT NULL AUTO_INCREMENT,
  `stateid` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  PRIMARY KEY (`cityid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `stateid`, `cityname`) VALUES
(2, 21, 'thg'),
(4, 8, 'cerwr'),
(5, 12, 'surat'),
(6, 12, 'sfdvf'),
(7, 12, 'sacsdc');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `name`, `subject`, `email`, `mobile`, `message`) VALUES
(4, 'ghanshyam', 'meet', 'gbehera6@gmail.com', '7845127845', 'scscsdcs');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `type` varchar(30) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `name`, `email`, `mobile`, `type`, `feedback`) VALUES
(1, 'ghanshyam', 'gbehera674@gmail.com', '8160300695', 'EXCELLENT', 'cssadcsdcs'),
(2, 'vatsal', 'hana13@gmail.com', '7845127845', 'EXCELLENT', 'afwfadawef');

-- --------------------------------------------------------

--
-- Table structure for table `productupload`
--

DROP TABLE IF EXISTS `productupload`;
CREATE TABLE IF NOT EXISTS `productupload` (
  `p_id` int(50) NOT NULL AUTO_INCREMENT,
  `s_id1` int(50) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `category` int(50) NOT NULL,
  `subcategory` int(50) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productupload`
--

INSERT INTO `productupload` (`p_id`, `s_id1`, `productname`, `category`, `subcategory`, `qty`, `description`, `price`, `photo`) VALUES
(1, 20, 'Dosha', 2, 7, '1', 'Dosha made by rich puier ', 25, 'product/dosha.jpg'),
(3, 20, 'Manchuren', 2, 8, '1', 'THIS CONDUCT 1 PLAT', 60, 'product/chinese.jpg'),
(4, 20, 'Franki', 2, 8, '1', 'IT is a chinese food the vagise reped in a roti.', 50, 'product/franki.jpg'),
(5, 20, 'Dabeli', 2, 7, '1', 'This is the food india', 12, 'product/maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper_reg`
--

DROP TABLE IF EXISTS `shopkeeper_reg`;
CREATE TABLE IF NOT EXISTS `shopkeeper_reg` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `shopname` varchar(50) NOT NULL,
  `ownername` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `on_status` varchar(20) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopkeeper_reg`
--

INSERT INTO `shopkeeper_reg` (`s_id`, `shopname`, `ownername`, `address`, `city`, `state`, `mobileno`, `email`, `username`, `password`, `image`, `status`, `on_status`) VALUES
(23, 'ujjval', 'IT ghghghgg', 'hgasxyugyx', '5', '12', '7845127845', 'devreujjval77@gmail.com', 'yuyu45', 'ujjval456', 'regimg/1549546170281.jpg', 'Approve', 'on'),
(20, 'IT Locha vala', 'Ghanshyam Behera', '256,Ambika Niketan soc.,Pandesara', '5', '12', '8160300695', 'gbehera674@gmail.com', 'Ghanshyam1998', 'Lija@6065', 'regimg/1549615416126.jpg', 'Approve', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `statemaster`
--

DROP TABLE IF EXISTS `statemaster`;
CREATE TABLE IF NOT EXISTS `statemaster` (
  `stateid` int(11) NOT NULL AUTO_INCREMENT,
  `statename` varchar(50) NOT NULL,
  PRIMARY KEY (`stateid`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statemaster`
--

INSERT INTO `statemaster` (`stateid`, `statename`) VALUES
(1, 'Andaman and Nicobar Islands'),
(2, 'Andra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadar and Nagar Haveli'),
(9, 'Daman and Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadeep'),
(20, 'Madya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Orissa'),
(27, 'Pondicherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telagana'),
(33, 'Tripura'),
(34, 'Uttaranchal'),
(35, 'Uttar Pradesh'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `student_reg`
--

DROP TABLE IF EXISTS `student_reg`;
CREATE TABLE IF NOT EXISTS `student_reg` (
  `stid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `collegename` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`stid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_reg`
--

INSERT INTO `student_reg` (`stid`, `name`, `address`, `mobileno`, `email`, `collegename`, `department`, `username`, `password`, `city`, `state`, `gender`, `photo`) VALUES
(20, 'vatsal', 'b.m.p poly', '6355384430', 'gbehera674@gmail.com', 'b.m.p poly', 'it', 'vat123', 'vat456', '5', '12', 'male', 'regimg/1549615456833.jpg'),
(21, 'ghanshyam', 'ascshbcsag', '9913665189', 'gbehera674@gmail.com', 'm.p', 'i.t', 'hyyhy23', 'dfvdf20', '5', '12', 'male', 'regimg/1553078218728.jpg'),
(22, 'avdgcvg', 'asdcdcsc', '9913665189', 'gbehera674@gmail.com', 'acdcsc', 'asdscas', 'yuy456', 'yty123', '5', '12', 'male', 'regimg/1549380071120.jpg'),
(23, 'Himang', 'vesu', '772654326', 'himang@gmail.com', 'bhagwan ma', 'it', 'HEMS20', 'helloworld', '5', '12', 'male', 'regimg/1549683091701.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcatid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(100) NOT NULL,
  `subcatname` varchar(50) NOT NULL,
  PRIMARY KEY (`subcatid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcatid`, `catid`, `subcatname`) VALUES
(9, 3, 'GUJARATI'),
(7, 2, 'SOUTH INDIAN'),
(8, 2, 'CHIINESE'),
(10, 3, 'PUNJABI');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
