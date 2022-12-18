-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 05:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(255) NOT NULL,
  `ward` char(255) NOT NULL,
  `district` char(100) NOT NULL,
  `diachi_phone` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `addresslist`
--

INSERT INTO `addresslist` (`id`, `name`, `ward`, `district`, `diachi_phone`) VALUES
(1, 'KTX khu A DHQG', 'Linh Trung', 'Thu Duc', '0219883236'),
(2, '268 Ly Thuong Kiet', '14', '10', '0602949213'),
(3, '1 Vo Van Ngan', 'Linh Chieu', 'Thu Duc', '0672182711'),
(4, 'KTX Dai hoc Ngan hang', 'Linh chieu', 'Thu Duc', '0726183978'),
(5, '15 D5', '25', 'Binh Thanh', '0781658690'),
(6, '59C Nguyen Dinh Chieu', '6', '3', '0870482906'),
(7, '145 Dien Bien Phu', '15', 'Binh Thanh', '0904890565');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Đồ ăn vặt'),
(2, 'Nước uống'),
(3, 'Món chính'),
(4, 'Khai vị');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `phone` varchar(10) NOT NULL,
  `fname` char(255) NOT NULL,
  `lname` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
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

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(10) UNSIGNED NOT NULL,
  `emp_lname` char(255) NOT NULL,
  `emp_fname` char(255) NOT NULL,
  `emp_phone` varchar(10) NOT NULL,
  `mail` char(50) NOT NULL,
  `username` char(30) NOT NULL,
  `password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_lname`, `emp_fname`, `emp_phone`, `mail`, `username`, `password`) VALUES
(1, 'cong', 'cong', '0312167832', 'cong@gmail.com', 'congcong', '1'),
(2, 'cong', 'hung', '0312871832', 'chung@gmail.com', 'hung', '1'),
(3, 'cong', 'thanh', '0312162341', 'thanh@gmail.com', 'thanhcong', '1'),
(4, 'duy', 'cong', '0312167432', 'duy@gmail.com', 'congduy', '1'),
(5, 'cong', 'quang', '0312112832', 'quang@gmail.com', 'quang', '1'),
(6, 'tien', 'cong', '0312123432', 'tien@gmail.com', 'congg', '1'),
(7, 'cong', 'chua', '0312162342', 'congchua@gmail.com', 'congchua', '1'),
(8, 'quan', 'cong', '0134467832', 'quan@gmail.com', 'congng', '1'),
(9, 'tuong', 'cong', '0312734532', 'coong@gmail.com', 'coong', '1'),
(10, 'cong', 'tuan', '0312534832', 'congo@gmail.com', 'congo', '1'),
(11, 'Trương', 'Thành', '0987321678', 'otaku2k22@gmail.com', 'thanhpro', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `order_phone` varchar(10) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `district` varchar(50) NOT NULL,
  `ward` varchar(50) NOT NULL,
  `price` float UNSIGNED DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT curtime(),
  `payment` enum('cash','momo','credit_card') NOT NULL DEFAULT 'cash',
  `status` enum('waiting','paid','canceled','not_paid') NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fname`, `lname`, `order_phone`, `mail`, `diachi`, `district`, `ward`, `price`, `time`, `payment`, `status`) VALUES
(18, 'Nguyễn', 'Duy', '0775853703', 'duy.nguyen06051998@hcmut.edu', '3123', 'Quận Bình Tân', 'Phường 9', 190000, '2022-12-16 23:25:09', 'cash', 'paid'),
(19, 'Cong', 'Thanh', '0989789652', 'thanh@gmail.com', '231 ', 'Quận Tân Bình', 'Phường 8', 250000, '2022-12-17 09:24:08', 'cash', 'paid'),
(20, 'Cong', 'Thanh', '0987678321', 'thanh@gmail.com', '678', 'Quận 1', 'Phường 9', 240000, '2022-12-01 23:25:09', 'cash', 'paid'),
(21, 'Cong', 'Thanh', '0987678321', 'thanh@gmail.com', '678', 'Quận 1', 'Phường 9', 180000, '2022-12-01 23:25:09', 'cash', 'paid'),
(22, 'Cong', 'Thanh', '0987678321', 'thanh@gmail.com', '678', 'Quận 1', 'Phường 9', 165000, '2022-12-02 06:25:09', 'cash', 'paid'),
(23, 'Cong', 'Thanh', '0987678321', 'thanh@gmail.com', '678', 'Quận 1', 'Phường 9', 80000, '2022-12-03 10:00:00', 'momo', 'paid'),
(24, 'Cong', 'Thanh', '0987678321', 'thanh@gmail.com', '678', 'Quận 1', 'Phường 9', 100000, '2022-12-18 10:00:00', 'momo', 'paid'),
(25, 'Quoc', 'Duy', '0387678902', 'duy@gmail.com', '908', 'Quận Bình Thạnh', 'Phường 10', 105000, '2022-12-03 17:00:00', 'momo', 'paid'),
(26, 'Quoc', 'Duy', '0387678902', 'duy@gmail.com', '908', 'Quận Bình Thạnh', 'Phường 10', 180000, '2022-12-04 17:00:00', 'cash', 'canceled'),
(27, 'Quoc', 'Duy', '0387678902', 'duy@gmail.com', '908', 'Quận Bình Thạnh', 'Phường 10', 160000, '2022-12-05 17:00:00', 'momo', 'waiting'),
(28, 'Khanh', 'Hung', '0809789654', 'Hung@gmail.com', '1231', 'Quận 4', 'Phường 1', 120000, '2022-12-01 17:00:00', 'momo', 'waiting'),
(29, 'Khanh', 'Hung', '0809789654', 'Hung@gmail.com', '1231', 'Quận 4', 'Phường 1', 80000, '2022-12-01 19:00:00', 'cash', 'paid'),
(30, 'Khanh', 'Hung', '0809789654', 'Hung@gmail.com', '1231', 'Quận 4', 'Phường 1', 315000, '2022-12-01 20:00:00', 'momo', 'paid'),
(31, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-16 23:25:09', 'cash', 'paid'),
(32, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-01 23:25:09', 'cash', 'paid'),
(33, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-02 23:25:09', 'cash', 'paid'),
(34, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-03 23:25:09', 'cash', 'paid'),
(35, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-04 23:25:09', 'cash', 'paid'),
(36, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-05 23:25:09', 'cash', 'paid'),
(37, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-06 23:25:09', 'cash', 'paid'),
(38, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-07 23:25:09', 'cash', 'paid'),
(39, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-08 23:25:09', 'cash', 'paid'),
(40, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-09 23:25:09', 'cash', 'paid'),
(41, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-10 23:25:09', 'cash', 'paid'),
(42, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-11 23:25:09', 'cash', 'paid'),
(43, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-12 23:25:09', 'cash', 'paid'),
(44, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-13 23:25:09', 'cash', 'paid'),
(45, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-14 23:25:09', 'cash', 'paid'),
(46, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-16 23:25:09', 'cash', 'paid'),
(47, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-01 23:25:09', 'cash', 'paid'),
(48, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-02 23:25:09', 'cash', 'paid'),
(49, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-01 23:25:09', 'cash', 'paid'),
(50, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-04 23:25:09', 'cash', 'paid'),
(51, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-01 23:25:09', 'cash', 'paid'),
(52, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-06 23:25:09', 'cash', 'paid'),
(53, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-07 23:25:09', 'cash', 'paid'),
(54, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-19 23:25:09', 'cash', 'paid'),
(55, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-09 23:25:09', 'cash', 'paid'),
(56, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-20 23:25:09', 'cash', 'paid'),
(57, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-11 23:25:09', 'cash', 'paid'),
(58, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-25 23:25:09', 'cash', 'paid'),
(59, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-13 23:25:09', 'cash', 'paid'),
(60, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-27 23:25:09', 'cash', 'paid'),
(61, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-16 23:25:09', 'cash', 'paid'),
(62, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-12 23:25:09', 'cash', 'paid'),
(63, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-23 23:25:09', 'cash', 'paid'),
(64, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-11 23:25:09', 'cash', 'paid'),
(65, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-14 23:25:09', 'cash', 'paid'),
(66, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-08 23:25:09', 'cash', 'paid'),
(67, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-06 23:25:09', 'cash', 'paid'),
(68, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-07 23:25:09', 'cash', 'paid'),
(69, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-09 23:25:09', 'cash', 'paid'),
(70, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-09 23:25:09', 'cash', 'paid'),
(71, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-20 23:25:09', 'cash', 'paid'),
(72, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-11 23:25:09', 'cash', 'paid'),
(73, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-19 23:25:09', 'cash', 'paid'),
(74, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-13 23:25:09', 'cash', 'paid'),
(75, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-30 23:25:09', 'cash', 'paid'),
(76, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-16 23:25:09', 'cash', 'paid'),
(77, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-12 23:25:09', 'cash', 'paid'),
(78, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-23 23:25:09', 'cash', 'paid'),
(79, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-11 23:25:09', 'cash', 'paid'),
(80, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-14 23:25:09', 'cash', 'paid'),
(81, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-08 23:25:09', 'cash', 'paid'),
(82, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-06 23:25:09', 'cash', 'paid'),
(83, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-07 23:25:09', 'cash', 'paid'),
(84, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-09 23:25:09', 'cash', 'paid'),
(85, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-09 23:25:09', 'cash', 'paid'),
(86, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-20 23:25:09', 'cash', 'paid'),
(87, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-11 23:25:09', 'cash', 'paid'),
(88, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-19 23:25:09', 'cash', 'paid'),
(89, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-13 23:25:09', 'cash', 'paid'),
(90, 'fake', 'db', 'fake', 'fake', 'fake@mail.com', 'Quận 1', 'Phường 25', 0, '2022-12-30 23:25:09', 'cash', 'paid');

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

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`orders_id`, `product_id`, `product_qt`, `price`) VALUES
(18, 1, 1, 15000),
(18, 2, 5, 175000),
(19, 3, 5, 250000),
(20, 1, 3, 45000),
(20, 2, 1, 35000),
(20, 7, 3, 60000),
(20, 12, 1, 100000),
(21, 1, 3, 45000),
(21, 7, 3, 60000),
(21, 9, 3, 75000),
(22, 7, 3, 60000),
(22, 11, 3, 105000),
(23, 1, 3, 45000),
(23, 2, 1, 35000),
(24, 12, 1, 100000),
(25, 1, 3, 45000),
(25, 7, 3, 60000),
(26, 9, 3, 75000),
(26, 11, 3, 105000),
(27, 7, 3, 60000),
(27, 12, 1, 100000),
(28, 1, 3, 45000),
(28, 9, 3, 75000),
(29, 1, 3, 45000),
(29, 2, 1, 35000),
(30, 7, 3, 60000),
(30, 11, 3, 105000),
(30, 15, 3, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'Banh gạo', 'bánh gạo phô mai', 15000, 'Banh-gao-cay.png', 1),
(2, 'Bánh mâm xôi', 'Bánh được làm từ quả mâm xôi', 35000, 'Banh-mam-xoi.png', 1),
(3, 'Bò lúc lắc', 'Bò lúc lắc miền nam', 50000, 'Bo-luc-lac.png', 3),
(7, 'Trà sữa', 'Trà sữa trân châu', 20000, 'Tra-sua-chocolate.png', 2),
(8, 'tra dao', 'tra dao cam sa', 35000, 'Tra-dao.png', 2),
(9, 'tra sua matcha', 'matcha', 25000, 'Tra-sua-matcha.png', 2),
(11, 'Salad', 'Salad khai vị nhẹ nhàng', 35000, 'Rau-tron.png', 4),
(12, 'Kim bap chiên', 'Kim bap hàn quốc chiên', 100000, 'Kimbap-chien.png', 1),
(13, 'Pizza nấm', 'Pizza nấm đông cô', 150000, 'Pizza.png', 3),
(14, 'Cơm gà Hong Kong', 'Cơm gà quay sốt Hong Kong', 50000, 'Com-ga-HongKong.png', 3),
(15, 'Cơm trộn', 'Cơm trộn hàn quốc', 50000, 'Com-tron.png', 4),
(16, 'Salad cà chua', 'Salad cà chua +mayonase', 13000, 'salad ca chua.png', 4),
(17, 'Trứng luộc', 'Trứng luộc 2 quả', 10000, 'trung luoc.png', 4),
(18, 'bánh kép', 'bánh kép và shiro', 30000, 'banh kep.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresslist`
--
ALTER TABLE `addresslist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_fk_1` (`diachi_phone`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`orders_id`,`product_id`),
  ADD KEY `order_fk_2` (`product_id`),
  ADD KEY `orders_fk_3` (`orders_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_fk_01` (`product_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresslist`
--
ALTER TABLE `addresslist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresslist`
--
ALTER TABLE `addresslist`
  ADD CONSTRAINT `address_fk_1` FOREIGN KEY (`diachi_phone`) REFERENCES `customer` (`phone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `order_fk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_fk_3` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_fk_01` FOREIGN KEY (`product_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
