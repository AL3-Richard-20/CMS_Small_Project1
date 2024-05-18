-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 08:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

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

CREATE TABLE `about_us` (
  `About_Id` int(11) NOT NULL,
  `About_desc` text NOT NULL,
  `About_img` text NOT NULL,
  `Last_updated` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`About_Id`, `About_desc`, `About_img`, `Last_updated`) VALUES
(1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit ame', 'images/1716013407.png', '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `Banner_Id` int(11) NOT NULL,
  `Banner_head` varchar(255) NOT NULL,
  `Banner_body` varchar(255) NOT NULL,
  `Banner_img` text NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`Banner_Id`, `Banner_head`, `Banner_body`, `Banner_img`, `Date_added`, `Time_added`, `Status`) VALUES
(4, 'New Banner 1', 'Lorem IPsum Dolor Sit Amet as of May18, 2024', 'images/1716000340.png', '2024-05-18', '10:45:40', 1),
(5, 'New Banner 2', 'Lorem IPsum Dolor Sit Amet2 as of May18, 2024 ', 'images/1716000440.png', '2024-05-18', '10:47:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_Id` int(11) NOT NULL,
  `Item_name` varchar(255) NOT NULL,
  `Item_price` varchar(255) NOT NULL,
  `Item_img` text NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_Id`, `Item_name`, `Item_price`, `Item_img`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 'Chair 01', '100', 'images/img-3.png', '2024-05-16', '12:46:13', 1),
(2, 'Chair 02', '100', 'images/img-4.png', '2024-05-16', '12:50:46', 1),
(3, 'Chair 03', '100', 'images/img-4.png', '2024-05-16', '12:50:46', 1),
(4, 'Table 04', '300', 'images/img-5.png', '2024-05-16', '12:50:46', 1),
(5, 'Chair 05', '100', 'images/img-3.png', '2024-05-16', '12:46:13', 1),
(6, 'Chair 06', '100', 'images/img-4.png', '2024-05-16', '12:50:46', 1),
(7, 'Table 07', '300', 'images/img-5.png', '2024-05-16', '12:50:46', 1),
(9, 'Chair 09', '100', 'images/img-4.png', '2024-05-16', '12:50:46', 1),
(11, 'Sample item 3', '333', 'images/1716013483.png', '2024-05-18', '02:24:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `Sett_Id` int(11) NOT NULL,
  `Sett_name` varchar(255) NOT NULL,
  `Sett_val` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`Sett_Id`, `Sett_name`, `Sett_val`, `Status`) VALUES
(1, 'Newsletter', 'images/1716013397.png', 1),
(2, 'Google_map', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3866.2866780919976!2d121.00380297414378!3d14.294768784493062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d6148c981947%3A0x83d65d60e5d15702!2sPortal%20Mall%20-%20GMA!5e0!3m2!1sen!2sph!4v1716', 1),
(3, 'Design_section_head', 'Our Designs', 1),
(4, 'Design_section_body', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration', 1),
(5, 'Company_Logo', 'images/1715993968.png', 1),
(6, 'Address', 'GMA, Cavite, Brgy. Maderan', 1),
(7, 'Phone_number', '09090909090', 1),
(8, 'Gmail', 'sampleemail@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `Date_added` date NOT NULL,
  `Time_added` time NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `Fullname`, `Username`, `Password`, `Date_added`, `Time_added`, `Status`) VALUES
(1, 'Administrator', 'admin', 'admin123', '2024-05-17', '21:42:56', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`About_Id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`Banner_Id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_Id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`Sett_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `About_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `Banner_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Item_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `Sett_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
