-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2024 at 04:53 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_proj1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `About_Id` int(11) NOT NULL AUTO_INCREMENT,
  `About_desc` varchar(255) NOT NULL,
  `About_img` text NOT NULL,
  `Last_updated` date NOT NULL,
  PRIMARY KEY (`About_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`About_Id`, `About_desc`, `About_img`, `Last_updated`) VALUES
(1, 'Lorem Ipsum Dolor Sit Amet', 'images/img-2.png', '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `Item_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Item_name` varchar(255) NOT NULL,
  `Item_price` varchar(255) NOT NULL,
  `Item_img` text NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Item_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_Id`, `Item_name`, `Item_price`, `Item_img`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 'Chair 01', '100', 'images/img-3.png', '2024-05-16', '12:46:13', 1),
(2, 'Chair 02', '100', 'images/img-4.png', '2024-05-16', '12:50:46', 1),
(3, 'Chair 02', '100', 'images/img-4.png', '2024-05-16', '12:50:46', 1),
(4, 'Table', '300', 'images/img-5.png', '2024-05-16', '12:50:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `Sett_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Sett_name` varchar(255) NOT NULL,
  `Sett_val` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`Sett_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Fullname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `Date_added` int(11) NOT NULL,
  `Time_added` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`User_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
