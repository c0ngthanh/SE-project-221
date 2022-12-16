-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 11:43 AM
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
  `diachi_id` int(11) NOT NULL,
  `diachi_name` char(255) NOT NULL,
  `ward` char(255) NOT NULL,
  `district` char(100) NOT NULL,
  `diachi_phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------
INSERT INTO `addresslist` (`diachi_id`, `diachi_name`, `ward`, `district`, `diachi_phone`) VALUES
(5000, 'KTX khu A DHQG', 'Linh Trung', 'Thu Duc', '0219883236'),
(5001, '268 Ly Thuong Kiet', '14', '10', '0602949213'),
(5002, '1 Vo Van Ngan', 'Linh Chieu', 'Thu Duc', '0672182711'),
(5003, 'KTX Dai hoc Ngan hang', 'Linh chieu', 'Thu Duc', '0726183978'),
(5004, '15 D5', '25', 'Binh Thanh', '0781658690'),
(5005, '59C Nguyen Dinh Chieu', '6', '3', '0870482906'),
(5006, '145 Dien Bien Phu', '15', 'Binh Thanh', '0904890565');
--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `phone` varchar(10) NOT NULL,
  `fname` char(255) NOT NULL,
  `lname` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--
INSERT INTO `customer` (`phone`, `fname`, `lname`) VALUES
('0219883236', 'Bao', 'Tien'),
('0602949213', 'Nhat', 'Duy'),
('0672182711', 'Khanh', 'Hung'),
('0726183978', 'Duc', 'Quang'),
('0781658690', 'Quoc', 'Duy'),
('0870482906', 'Minh', 'Quan'),
('0904890565', 'Minh', 'Tuan'),
('0978678523', 'Cong', 'Thanh');
CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_lname` char(255) NOT NULL,
  `emp_fname` char(255) NOT NULL,
  `emp_phone` varchar(10) NOT NULL,
  `mail` char(50) NOT NULL,
  `username` char(30) NOT NULL,
  `password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------
INSERT INTO `employee` (`emp_id`, `emp_lname`, `emp_fname`, `emp_phone`, `mail`, `username`, `password`) VALUES
(1000, 'cong', 'cong', '0312167832', 'cong@gmail.com', 'congcong', '1'),
(1001, 'cong', 'hung', '0312871832', 'chung@gmail.com', 'hung', '1'),
(1002, 'cong', 'thanh', '0312162341', 'thanh@gmail.com', 'thanhcong', '1'),
(1003, 'duy', 'cong', '0312167432', 'duy@gmail.com', 'congduy', '1'),
(1004, 'cong', 'quang', '0312112832', 'quang@gmail.com', 'quang', '1'),
(1005, 'tien', 'cong', '0312123432', 'tien@gmail.com', 'congg', '1'),
(1006, 'cong', 'chua', '0312162342', 'congchua@gmail.com', 'congchua', '1'),
(1007, 'quan', 'cong', '0134467832', 'quan@gmail.com', 'congng', '1'),
(1008, 'tuong', 'cong', '0312734532', 'coong@gmail.com', 'coong', '1'),
(1009, 'cong', 'tuan', '0312534832', 'congo@gmail.com', 'congo', '1');
--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `orders_phone` varchar(10) NOT NULL,
  `orders_product_id` int(11) NOT NULL,
  `product_qt` int(11) NOT NULL,
  `text` varchar(500) NOT NULL,
  `orders_diachi` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT curtime(),
  `payment` enum('cash','momo','credit_card') NOT NULL DEFAULT 'cash',
  `status` enum('waiting','paid','canceled','not_paid') NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
INSERT INTO `orders` (`orders_id`, `orders_phone`, `orders_product_id`, `dish_qt`, `text`, `orders_diachi`, `time`, `payment`, `status`) VALUES
(20001, '0914536233', 1001, 1, '', 2001, '0000-00-00 00:00:00', 'momo', 'waiting'),
(20003, '[value-2]', 0, 0, '[value-5]', 0, '0000-00-00 00:00:00', '', 'paid');
-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` char(255) NOT NULL,
  `description` char(255) DEFAULT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `img` varchar(500) DEFAULT NULL,
  `prod_category` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `description`, `price`, `img`, `prod_category`) VALUES
(10000, 'Banh gạo cay', 'bánh gạo phô mai', 15000, 'Banh-gao-cay.png',1),
(10001, 'Bánh mâm xôi', 'Bánh được làm từ quả mâm xôi', 35000, 'Banh-mam-xoi.png',1),
(10002, 'Bò lúc lắc', 'Bò lúc lắc miền nam', 50000, 'Bo-luc-lac.png',1);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresslist`
--
ALTER TABLE `addresslist`
  ADD PRIMARY KEY (`diachi_id`),
  ADD KEY `address_fk_1` (`diachi_phone`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`) USING BTREE,
  ADD KEY `order_fk_1` (`orders_phone`),
  ADD KEY `order_fk_2` (`orders_product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_fk_01` (`prod_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresslist`
--
ALTER TABLE `addresslist`
  MODIFY `diachi_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=500;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2000;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresslist`
--
ALTER TABLE `addresslist`
  ADD CONSTRAINT `address_fk_1` FOREIGN KEY (`diachi_phone`) REFERENCES `customer` (`phone`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_fk_1` FOREIGN KEY (`orders_phone`) REFERENCES `customer` (`phone`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_fk_2` FOREIGN KEY (`orders_product_id`) REFERENCES `products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_fk_01` FOREIGN KEY (`prod_category`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
