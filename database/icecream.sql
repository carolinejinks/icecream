-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2017 at 02:26 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icecream`
--

-- --------------------------------------------------------

--
-- Table structure for table `icecream`
--

CREATE TABLE `icecream` (
  `id` int(11) NOT NULL,
  `flavor` text CHARACTER SET latin1 NOT NULL,
  `location` text CHARACTER SET latin1 NOT NULL,
  `vendor` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `icecream`
--

INSERT INTO `icecream` (`id`, `flavor`, `location`, `vendor`) VALUES
(1, 'Buttered Lobster', 'Maine', 'Ben and Bill Chocolate Emporium'),
(2, 'Buttermilk', 'Arkansas', 'Loblolly Creamery'),
(3, 'Cayenne Chocolate', 'Louisville', 'Homemade Ice Cream and Pie Kitchen'),
(4, 'Chai', 'Idaho', 'Toni Sun Valley Ice Cream Co'),
(5, 'Champagne and Violette', 'New Orleans', 'The Creole Creamery'),
(6, 'Goat Cheese Beet Swirl', 'Denver', 'Sweet Action Ice Cream'),
(7, 'Lavender Honey', 'Illinois', 'Capannari Ice Cream'),
(8, 'Sweet Corn', 'Arizona', 'Sweet Republic'),
(9, 'Ube Purple Yams', 'Hawaii', 'Dave''s Ice Cream'),
(10, 'Vietnamese Coffee with Frosted Almonds and Peanut Butter Curry', 'San Francisco', 'Humphry Slocombe'),
(11, 'Salted Caramel', 'Orlando', 'The Soda Fountain'),
(12, 'Vanilla', 'Gville', 'SD'),
(13, 'Maple Bacon', 'Savannah', 'River Street Sweets');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icecream`
--
ALTER TABLE `icecream`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icecream`
--
ALTER TABLE `icecream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
