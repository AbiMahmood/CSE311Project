-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 06:37 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminUser`, `adminEmail`, `adminPass`, `level`) VALUES
(1, 'Rhythm Ahir', 'rhythm', 'ahirhussain@gmail.com', '12345', 0),
(2, 'Abi Mahmood', 'Abi', 'AbiMahmood.bd@gmail.com', '5226', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(16, 'v1opgduoipcdig2pfm0agdr87f', 30, 'rrrrrrr', 1111.00, 1, 'uploads/c3667719bb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(5, 'Anniversary Cake'),
(6, 'Birthday Cake'),
(7, 'Rhythm'),
(8, 'Chocolate Cake');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zip`, `phone`, `email`, `pass`) VALUES
(1, 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
(2, 'name', 'address', 'city', 'country', 'zip', 'phone', 'email', 'pass'),
(3, 'namesdsd', 'adddddress', 'citysdsda', 'coasdasduntry', 'zipasdasd', 'phoneasdasd', 'emailasdas', 'passasdasd'),
(4, 'sdfsdf', 'dfsdf', 'sdfsdf', 'sdfsdf', 'dsfsdf', 'dsfs', 'sdfs', 'sdfs'),
(5, 'rhythmAAA', 'adddddress', 'Cox\'s Bazar', 'coasdasduntry', 'dsfsdf', '123123123', 'ahirhussain@gmail.com', '12345'),
(6, 'rhythm', 'Mirpur', 'Dhaka', 'Bangladesh', '1206', '0123456789', 'rhythm@gmail.com', '123456'),
(7, 'Rhythm', 'Mirpur', 'Dhaka', 'Bangladesh', '1206', '0123456789', 'rhythm@gmail.com', ''),
(8, 'Rhythm', 'Mirpur', 'Dhaka', 'Bangladesh', '1206', '0123456789', 'rhythm@gmail.com', ''),
(9, 'Rhythm', 'Mirpur', 'Dhaka', 'Bangladesh', '1206', '0123456789', 'rhythm@gmail.com', ''),
(10, 'Rhythm', 'Mirpur', 'Dhaka', 'Bangladesh', '1206', '0123456789', 'rhythm@gmail.com', ''),
(11, 'm', 'Mirpur', 'Dhaka', 'Bangladesh', '1206', '0123456789', 'o', ''),
(12, 'Abi Mahmood', 'sdf', 'dhaka', 'sdf', '123', 'sdf', 'sdfsdf', 'sdf'),
(13, 'rizu', 'uttara , dhaka', 'Dhaka', 'Bangladesh', '1230', '01674990944', 'rizuislam@gmail.com', 'rizu'),
(14, 'abi', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa'),
(15, 'Abi Mahmood', 'dhaka', 'Dhaka', 'Bangladesh', '1219', '01788810008', 'abi@gmail.com', '5226');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cmrId`, `productId`, `productName`, `quantity`, `price`, `image`) VALUES
(1, 6, 28, 'sdsdfsdfs', 1, 1111.00, 'uploads/a7d235c3fe.jpg'),
(2, 6, 27, 'Vanilla Sunday', 1, 232.00, 'uploads/8cd265963c.jpg'),
(3, 6, 28, 'sdsdfsdfs', 1, 1111.00, 'uploads/a7d235c3fe.jpg'),
(4, 6, 27, 'Vanilla Sunday', 1, 232.00, 'uploads/8cd265963c.jpg'),
(5, 6, 30, 'rrrrrrr', 2, 1111.00, 'uploads/c3667719bb.jpg'),
(6, 6, 29, 'Vanilla Sunday', 1, 10.00, 'uploads/43b8078319.jpg'),
(7, 6, 30, 'rrrrrrr', 1, 1111.00, 'uploads/c3667719bb.jpg'),
(8, 6, 30, 'rrrrrrr', 1, 1111.00, 'uploads/c3667719bb.jpg'),
(9, 13, 23, 'Vanilla Sunday', 10, 500.00, 'uploads/5004e8e8ff.jpg'),
(10, 1, 30, 'rrrrrrr', 3, 1111.00, 'uploads/c3667719bb.jpg'),
(11, 15, 29, 'Vanilla Sunday', 1, 10.00, 'uploads/43b8078319.jpg'),
(12, 15, 29, 'Vanilla Sunday', 1, 10.00, 'uploads/43b8078319.jpg'),
(13, 15, 29, 'Vanilla Sunday', 1, 10.00, 'uploads/43b8078319.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `body` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `body`, `price`, `image`, `size`) VALUES
(21, 'Vanilla Sunday', 5, '<p>This is a rich sundae made with brownies, vanilla ice cream, chocolate syrup, peanuts, hot fudge, and whipped cream, often topped with maraschino cherry. If a blondie replaces the brownie, then caramel sauce is used as a topping instead of chocolate sauce. &nbsp;</p>', 500.00, 'uploads/b92ec5eefc.jpg', 'Small'),
(22, 'rhythm', 7, '<p>This is a rich sundae made with brownies, vanilla ice cream, chocolate syrup, peanuts, hot fudge, and whipped cream, often topped with maraschino cherry. If a blondie replaces the brownie, then caramel sauce is used as a topping instead of chocolate sauce.</p>', 500.00, 'uploads/bd85b14390.png', 'Smalll'),
(23, 'Vanilla Sunday', 6, '<p>&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;</p>', 500.00, 'uploads/5004e8e8ff.jpg', 'Smalll'),
(24, 'asasa', 7, '<p>&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;&lt;?php } } ?&gt;</p>', 222.00, 'uploads/700ca29a19.jpg', 'Smalll'),
(25, 'Vanilla Sunday', 6, '<p>asdasdasdasdasdasdasasdasdasdasda</p>', 500.00, 'uploads/73e9e79059.jpg', 'Small'),
(26, 'Vanilla Sunday', 7, '<p>asxascaxcxzczxczxczxczxc</p>', 500.00, 'uploads/1096466a31.jpg', 'Smalll'),
(27, 'Vanilla Sunday', 6, '<p>sfdgsdgdfgdfgdfgdfg</p>', 232.00, 'uploads/8cd265963c.jpg', 'Smalll'),
(28, 'sdsdfsdfs', 6, '<p>style=\"padding-top: 50px, padding-bottom: 50px\"style=\"padding-top: 50px, padding-bottom: 50px\"style=\"padding-top: 50px, padding-style=\"padding-top: 50px, padding-bottom: 50px\"bottom: 50px\"style=\"padding-top: 50px, padding-bottom: 50px\"style=\"padding-top: 50px, padding-bottom: 50px\"style=\"padding-top: 50px, padding-bottom: 50px\"style=\"padding-top: 50px, padding-bottom: 50px\"style=\"padding-top: 50px, padding-bottom: 50px\"</p>', 1111.00, 'uploads/a7d235c3fe.jpg', 'Smalll'),
(29, 'Vanilla Sunday', 8, '<p>sdfasdgfdsfgdsfgdsfgdsfgdsfgdsfgsdfgdfgsdfgdsfgh</p>', 10.00, 'uploads/43b8078319.jpg', 'Large'),
(30, 'rrrrrrr', 8, '<p>sadcsxcsxcsxcsxcxcsxcsxc</p>', 1111.00, 'uploads/c3667719bb.jpg', 'Large');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
