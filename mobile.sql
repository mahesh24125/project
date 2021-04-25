-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 10:31 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminname`, `password`, `created_date`) VALUES
(4, 'jayaram@gmail.com', 'jaya', '2021-04-25 12:43:49.400366'),
(5, 'anuram@gmail.com', 'anuram', '2021-04-25 12:44:00.655971');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `sinfo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pinfo` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `brand` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL,
  `created_date` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `sinfo`, `name`, `address`, `phone`, `pinfo`, `pname`, `price`, `brand`, `type`, `upload`, `created_date`) VALUES
(12, 'promodh mobile', 'Maheshwar V', 'No.8/117, North Street, keelaiyur, Thirukovilur, kallakurichi (DT)-605757', '09361442417', '4gb ram / 64 gb rom ', 'poco M15', 15000, 'Poco', 'used', 'image/poco.jpg', '2021-04-25 12:11:35.523779'),
(13, 'poorvika mobile', 'Mahesh', 'Viswanadhapuram Main Road, Kodambakkam', '9843864344', '8gb ram / 64gb rom', 'techno a30', 25000, 'Techno', 'new', 'image/techno.jpg', '2021-04-25 12:13:50.872626'),
(14, 'promodh mobile', 'Maheshwar V', 'No.8/117, North Street, keelaiyur, Thirukovilur, kallakurichi (DT)-605757', '09361442417', '4gb ram / 64 gb rom ', 'oppo A50', 25000, 'oppo', 'new', 'image/oppo.jpg', '2021-04-25 12:14:26.050504'),
(15, 'mobile care shop', 'manoj', 'thalambur road,navallur,chennai', '9846175421', 'fingerprint', 'iphone x10', 20000, 'apple', 'used', 'image/apple.jpg', '2021-04-25 12:15:35.274564'),
(16, 'chennai mobiles', 'jayaram', 'north street,keelaiyur', '9541237485', '4gb ram / 64 gb rom ', 'nokia f5', 7500, 'Nokia', 'used', 'image/nokia.jpg', '2021-04-25 12:16:42.787281'),
(17, 'usha mobile', 'muthulakshmi', 'voc street,chennai', '9754652215', 'fingerprint', 'oneplus i10', 35000, 'oneplus', 'new', 'image/one.jpg', '2021-04-25 12:18:13.073902');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(14, 'muthu@gmail.com', 'muthu', '2021-04-25 12:41:50'),
(15, 'magi@gmail.com', 'magi', '2021-04-25 12:42:14'),
(16, 'mahesh@gmail.com', 'mahesh', '2021-04-25 12:42:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
