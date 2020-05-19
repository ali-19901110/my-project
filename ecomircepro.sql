-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 09:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomircepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpro`
--

CREATE TABLE `adminpro` (
  `admin_id` int(3) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(15) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminpro`
--

INSERT INTO `adminpro` (`admin_id`, `admin_email`, `admin_password`, `fullname`) VALUES
(2, 'alikasasbeh@gmail.com', '12345', 'Ali mohamad kasasbeh');

-- --------------------------------------------------------

--
-- Table structure for table `categorypro`
--

CREATE TABLE `categorypro` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorypro`
--

INSERT INTO `categorypro` (`cat_id`, `cat_name`, `cat_image`) VALUES
(4, 'watches', 'a.jpg'),
(6, 'books', 'books.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customerpro`
--

CREATE TABLE `customerpro` (
  `customer_id` int(3) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_password` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerpro`
--

INSERT INTO `customerpro` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `mobile`, `address`) VALUES
(1, 'ali', 'alikasasbeh@gmail.com', '12345', '0779482862', 'amman'),
(2, 'alimohd', 'alikasasbeh@yahoo.com', '123456', '0779482862', 'irbid');

-- --------------------------------------------------------

--
-- Table structure for table `orderpro`
--

CREATE TABLE `orderpro` (
  `order_id` int(3) NOT NULL,
  `order_date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `total_price` int(30) NOT NULL,
  `qty` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderpro`
--

INSERT INTO `orderpro` (`order_id`, `order_date`, `customer_id`, `product_id`, `status`, `total_price`, `qty`) VALUES
(2, '0000-00-00', 1, 21, 'under process', 60, 3),
(3, '0000-00-00', 1, 21, 'under process', 60, 3),
(4, '0000-00-00', 1, 17, 'under process', 12, 1),
(5, '0000-00-00', 1, 17, 'under process', 12, 1),
(6, '0000-00-00', 1, 17, 'under process', 12, 1),
(7, '0000-00-00', 1, 17, 'under process', 12, 1),
(8, '0000-00-00', 1, 17, 'under process', 12, 1),
(9, '0000-00-00', 1, 17, 'under process', 12, 1),
(10, '0000-00-00', 1, 17, 'under process', 12, 1),
(11, '0000-00-00', 1, 17, 'under process', 12, 1),
(12, '0000-00-00', 1, 17, 'under process', 12, 1),
(13, '0000-00-00', 1, 17, 'under process', 12, 1),
(14, '0000-00-00', 1, 17, 'under process', 12, 1),
(15, '0000-00-00', 1, 17, 'under process', 12, 1),
(16, '0000-00-00', 1, 17, 'under process', 12, 1),
(17, '0000-00-00', 1, 17, 'under process', 12, 1),
(18, '0000-00-00', 1, 17, 'under process', 12, 1),
(19, '0000-00-00', 1, 17, 'under process', 12, 1),
(20, '0000-00-00', 1, 17, 'under process', 12, 1),
(21, '0000-00-00', 1, 17, 'under process', 12, 1),
(22, '0000-00-00', 1, 17, 'under process', 12, 1),
(23, '0000-00-00', 1, 17, 'under process', 12, 1),
(24, '0000-00-00', 1, 17, 'under process', 12, 1),
(25, '0000-00-00', 1, 17, 'under process', 12, 1),
(26, '0000-00-00', 1, 21, 'under process', 20, 1),
(27, '0000-00-00', 1, 21, 'under process', 20, 1),
(28, '0000-00-00', 2, 21, 'under process', 20, 1),
(29, '0000-00-00', 2, 20, 'under process', 12, 1),
(30, '0000-00-00', 2, 20, 'under process', 12, 1),
(31, '0000-00-00', 2, 20, 'under process', 12, 1),
(32, '0000-00-00', 1, 20, 'under process', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `productpro`
--

CREATE TABLE `productpro` (
  `pro_id` int(3) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_price` int(15) NOT NULL,
  `pro_image` text NOT NULL,
  `pro_desc` varchar(150) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productpro`
--

INSERT INTO `productpro` (`pro_id`, `pro_name`, `pro_price`, `pro_image`, `pro_desc`, `cat_id`) VALUES
(17, 'The Alchemist (O Alquimista)', 12, 'b2.jpg', 'laptope and descktop', 6),
(20, 'The Lord of the Rings', 12, 'b1.jpg', 'The Lord of the Rings is a film series of three epic fantasy adventure films directed by Peter Jackson', 6),
(21, 'The Little Prince (Le Petit Prince)', 20, 'b3.jpg', ' is a novella by French aristocrat, writer, and aviator Antoine de Saint-Exupéry', 6),
(22, 'Breitling Superocean', 150, 'm17368d71c1s1-superocean-automatic-46-black-steel-soldier.png', 'Our list begins with the sporty yet elegant Superocean, ', 4),
(23, 'Tudor Pelagos', 90, 'p1.jpg', ' the Pelagos is one of the most complete traditional mechanical', 4),
(24, 'Longines HydroConquest', 120, 'b2.jpg', 'HydroConquest Automatic Black Dial Chronograph', 6),
(25, 'Longines HydroConquest', 120, 'b2.jpg', 'Longines HydroConquest', 6),
(26, 'Longines ', 120, 'bb2.jpg', 'laptope and descktop', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminpro`
--
ALTER TABLE `adminpro`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categorypro`
--
ALTER TABLE `categorypro`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customerpro`
--
ALTER TABLE `customerpro`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orderpro`
--
ALTER TABLE `orderpro`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `productpro`
--
ALTER TABLE `productpro`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpro`
--
ALTER TABLE `adminpro`
  MODIFY `admin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categorypro`
--
ALTER TABLE `categorypro`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customerpro`
--
ALTER TABLE `customerpro`
  MODIFY `customer_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderpro`
--
ALTER TABLE `orderpro`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `productpro`
--
ALTER TABLE `productpro`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
