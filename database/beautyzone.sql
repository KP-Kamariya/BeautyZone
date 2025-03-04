-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 06:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautyzone`
--
CREATE DATABASE IF NOT EXISTS `beautyzone` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `beautyzone`;

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `id` int(20) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`id`, `itemname`, `price`, `quantity`, `total`, `image`, `username`) VALUES
(17, 'Foundation', 424, 2, 848, 'fouswiss1.jpg', 'hiral'),
(18, 'Eyeshadow', 1450, 2, 2900, 'Eyeshadowswiss.jpg', 'vinisha');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `mno` varchar(20) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `city`, `mno`, `feedback`, `email`) VALUES
(1, 'hiral', 'junagadh', '9876543212', 'good', 'hiral@gmail.com'),
(2, 'jalu', 'junagadh', '4589621037', 'your product is good.', 'js@gmail.com'),
(3, 'mansi', 'rajkot', '7890675344', 'your product quality is very nice.', 'mansi@gmail.com'),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemname`, `company`, `price`, `image`) VALUES
(1, 'Foundation', 'Huda', '320', 'fouhuda1.jpg'),
(2, 'Compact', 'Huda', '710', 'comphuda2.jpg'),
(3, 'Eyeshadow', 'Huda', '3200', 'Eyeshadowhuda1.jpg'),
(4, 'Lipstick', 'Huda', '500', 'liphuda1.jpg'),
(5, 'Foundation', 'Lakme', '450', 'foulakme1.webp'),
(6, 'Compact', 'Lakme', '420', 'complakme1.webp'),
(7, 'Eyeshadow', 'Lakme', '450', 'Eyeshadowlakme3.webp'),
(8, 'Lipstick', 'Lakme', '371', 'liplakme2.jpg'),
(9, 'Foundation', 'Swiss Beauty', '424', 'fouswiss1.jpg'),
(10, 'Compact', 'Swiss beauty', '322', 'compswiss2.webp                             '),
(11, 'Eyeshadow', 'Swiss beauty', '1450', 'Eyeshadowswiss.jpg'),
(12, 'Lipstick', 'Swiss beauty', '320', 'lipswiss4.webp'),
(13, 'Foundation', 'Sugar', '424', 'fousugar.jpg'),
(14, 'Compact', 'Sugar', '322', 'compsugar3.jpg'),
(15, 'Lipstick', 'Sugar ', '342', 'lipsugar4.jpg'),
(16, 'Eyeshadow', 'Sugar  ', '1450', 'Eyeshadowsugar2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'hiral', 'hiral123'),
(2, 'vinisha', 'vini123'),
(3, 'khushbu', 'kk123'),
(4, 'jensi', 'jensi123'),
(5, 'jensi', 'jensi123'),
(6, 'jensi', 'jensi123'),
(7, 'jensi', 'jensi123');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `total` int(50) NOT NULL,
  `payment` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `address`, `city`, `itemname`, `total`, `payment`) VALUES
(2, 'hir', 'motibag', 'junagadh', 'Foundation', 320, 320),
(5, 'jalu', 'motibag', 'junagadh', 'Foundation', 650, 650),
(6, 'mansi', 'motibag', 'junagadh', 'Foundation', 450, 450),
(8, 'Zoya', 'motibag', 'junagadh', 'Foundation', 106560, 106560),
(9, 'pooja', 'Bhutnath', 'junagadh', 'Foundation', 32000000, 32000000),
(10, 'hitiksha', 'sardar chok', 'Ahamdabad', 'Foundation', 450, 450),
(16, 'mitva', 'rayji bag', 'junagadh', 'Eyeshadow', 1450, 1450),
(17, 'jensi', 'gondal road', 'rajkot', 'Eyeshadow', 1450, 1450);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `address`, `city`, `pincode`, `state`, `country`, `username`, `password`, `gender`, `mobileno`, `email`, `dob`) VALUES
(1, 'hiral', 'motibag', 'junagadh', 362001, 'gujarat', 'india', 'hiral', 'hiral1234', 'female', '987654321', 'hiral@gmail.com', '0000-00-00'),
(2, 'vini', 'motibag', 'junagadh', 360001, 'gujarat', 'india', 'vini', 'vini123', 'female', '9876543211', 'vini@gmail.com', '2004-10-29'),
(3, 'khushi', 'sumin park', 'Ahamdabad', 360058, 'gujarat', 'india', 'kk', 'kk2409', 'female', '2368450697', 'hiral@gmail.com', '2004-09-24'),
(4, 'pooja', 'anjna soc.', 'junagadh', 362001, 'gujarat', 'india', 'pooja', 'p123', 'female', '987654321', 'p123@gmail.com', '0000-00-00'),
(5, 'mitva', 'rayji bag', 'junagadh', 362001, 'gujarat', 'india', 'mitu', 'mitu123', 'female', '9925187744', 'mitu@gmail.com', '0000-00-00'),
(6, '', '', '', 0, '', '', '', '', '', '', '', '0000-00-00'),
(7, 'jensi', 'gondal road', 'rajkot', 360001, 'gujrat', 'india', 'jensi', 'jensi123', 'female', '0567426481', 'jensi@gmail.com', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
