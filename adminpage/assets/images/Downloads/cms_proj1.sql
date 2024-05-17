-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 05:10 PM
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
(1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit ame', 'images/img-2.png', '2024-05-16');

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
(1, 'Best Design of Furnitur', 'It is a long established fact that a reader will bedistracted by the readable content of ', 'images/img-1.png', '2024-05-16', '22:52:32', 1),
(2, 'Best Design of Furnitur2', 'It is a long established fact that a reader will bedistracted by the readable content of 2', 'images/img-3.png', '2024-05-16', '22:52:32', 1),
(3, 'Best Design of Furnitur3', 'It is a long established fact that a reader will bedistracted by the readable content of 3', 'images/img-5.png', '2024-05-16', '22:52:32', 1);

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
(8, 'Chair 08', '100', 'images/img-3.png', '2024-05-16', '12:46:13', 1),
(9, 'Chair 09', '100', 'images/img-4.png', '2024-05-16', '12:50:46', 1);

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
(1, 'Newsletter', 'images/img-6.png', 1),
(2, 'Google_map', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9924.77797891102!2d-0.0754105!3d51.5463325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761c8df1bb0557%3A0xf6a4ab5b0dd4257f!2sSheer%20Bliss!5e0!3m2!1sen!2sph!4v1715869605843!5m2!1sen!2sph\"', 1),
(3, 'Design_section_head', 'Our Designs', 1),
(4, 'Design_section_body', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration', 1),
(5, 'Company_Logo', 'images/logo.png', 1),
(6, 'Address', 'GMA, Cavite', 1),
(7, 'Phone_number', '09090909099', 1),
(8, 'Gmail', 'sample@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `Date_added` int(11) NOT NULL,
  `Time_added` int(11) NOT NULL,
  `Status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  MODIFY `Banner_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Item_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `Sett_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
