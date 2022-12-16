-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 03:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se-project-221`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresslist`
--

CREATE TABLE `addresslist` (
  `id` int(10) UNSIGNED NOT NULL auto_increment PRIMARY KEY,
  `name` char(255) NOT NULL,
  `ward` char(255) NOT NULL,
  `district` char(100) NOT NULL,
  `diachi_phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `addresslist` (`id`, `name`, `ward`, `district`, `diachi_phone`) VALUES
('1', 'KTX khu A DHQG', 'Linh Trung', 'Thu Duc', '0219883236'),
('2', '268 Ly Thuong Kiet', '14', '10', '0602949213'),
('3', '1 Vo Van Ngan', 'Linh Chieu', 'Thu Duc', '0672182711'),
('4', 'KTX Dai hoc Ngan hang', 'Linh chieu', 'Thu Duc', '0726183978'),
('5', '15 D5', '25', 'Binh Thanh', '0781658690'),
('6', '59C Nguyen Dinh Chieu', '6', '3', '0870482906'),
('7', '145 Dien Bien Phu', '15', 'Binh Thanh', '0904890565');
-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL auto_increment PRIMARY KEY,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Rau'),
(2, 'Nước uống');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `phone` varchar(10) NOT NULL,
  `fname` char(255) NOT NULL,
  `lname` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `customer` (`phone`, `fname`, `lname`) VALUES
('0219883236', 'Bao', 'Tien'),
('0602949213', 'Nhat', 'Duy'),
('0672182711', 'Khanh', 'Hung'),
('0726183978', 'Duc', 'Quang'),
('0781658690', 'Quoc', 'Duy'),
('0870482906', 'Minh', 'Quan'),
('0904890565', 'Minh', 'Tuan'),
('0978678523', 'Cong', 'Thanh');
-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) UNSIGNED NOT NULL auto_increment PRIMARY KEY,
  `emp_lname` char(255) NOT NULL,
  `emp_fname` char(255) NOT NULL,
  `emp_phone` varchar(10) NOT NULL,
  `mail` char(50) NOT NULL,
  `username` char(30) NOT NULL,
  `password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `employee` (`emp_id`, `emp_lname`, `emp_fname`, `emp_phone`, `mail`, `username`, `password`) VALUES
('1', 'cong', 'cong', '0312167832', 'cong@gmail.com', 'congcong', '1'),
('2', 'cong', 'hung', '0312871832', 'chung@gmail.com', 'hung', '1'),
('3', 'cong', 'thanh', '0312162341', 'thanh@gmail.com', 'thanhcong', '1'),
('4', 'duy', 'cong', '0312167432', 'duy@gmail.com', 'congduy', '1'),
('5', 'cong', 'quang', '0312112832', 'quang@gmail.com', 'quang', '1'),
('6', 'tien', 'cong', '0312123432', 'tien@gmail.com', 'congg', '1'),
('7', 'cong', 'chua', '0312162342', 'congchua@gmail.com', 'congchua', '1'),
('8', 'quan', 'cong', '0134467832', 'quan@gmail.com', 'congng', '1'),
('9', 'tuong', 'cong', '0312734532', 'coong@gmail.com', 'coong', '1'),
('10', 'cong', 'tuan', '0312534832', 'congo@gmail.com', 'congo', '1');
-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL auto_increment PRIMARY KEY,
  `order_phone` varchar(10) NOT NULL,
  `price` float UNSIGNED NOT NULL,
  `diachi_id` int(10) UNSIGNED NOT NULL,
  `time` datetime NOT NULL DEFAULT curtime(),
  `payment` enum('cash','momo','credit_card') NOT NULL DEFAULT 'cash',
  `status` enum('waiting','paid','canceled','not_paid') NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `orders_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_qt` int(11) NOT NULL,
  `price` double UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL auto_increment PRIMARY KEY,
  `name` char(255) NOT NULL,
  `description` char(255) DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `imgURL` varchar(500) DEFAULT NULL,
  `product_category` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--
INSERT INTO `products` (`id`, `name`, `description`, `price`, `imgURL`, `product_category`) VALUES
('1', 'Banh gạo cay', 'bánh gạo phô mai', 15000, 'Banh-gao-cay.png',1),
('2', 'Bánh mâm xôi', 'Bánh được làm từ quả mâm xôi', 35000, 'Banh-mam-xoi.png',1),
('3', 'Bò lúc lắc', 'Bò lúc lắc miền nam', 50000, 'Bo-luc-lac.png',1);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresslist`
--
ALTER TABLE `addresslist`
  ADD KEY `address_fk_1` (`diachi_phone`);

--
-- Indexes for table `category`
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `employee`
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `order_fk_1` (`diachi_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`product_id`) USING BTREE,
  ADD KEY `order_fk_2` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD KEY `products_fk_01` (`product_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresslist`
--

-- AUTO_INCREMENT for table `orders_detail`
--
--
-- AUTO_INCREMENT for table `products`
--


--
-- Constraints for dumped tables
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_fk_3` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Constraints for table `addresslist`
--
ALTER TABLE `addresslist`
  ADD CONSTRAINT `address_fk_1` FOREIGN KEY (`diachi_phone`) REFERENCES `customer` (`phone`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_fk_1` FOREIGN KEY (`diachi_id`) REFERENCES `addresslist` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `order_fk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_fk_01` FOREIGN KEY (`product_category`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;