-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 07:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duanmot2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `dongia` int(20) NOT NULL,
  `soluong` int(100) NOT NULL,
  `thanhtien` int(100) NOT NULL,
  `id_donhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `tensp`, `image`, `dongia`, `soluong`, `thanhtien`, `id_donhang`) VALUES
(1, 'Bò Xào', '0', 350000, 1, 350000, 24),
(2, 'Bò Xào', '0', 350000, 1, 350000, 25),
(3, 'Cá Nướng', 'Cá Nướng.jpg', 199000, 1, 199000, 26),
(4, 'Bò Xào', 'Bò xào.jpg', 350000, 1, 350000, 27),
(5, 'Bò Xào', 'Bò xào.jpg', 350000, 1, 350000, 28);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `dm_id` int(10) NOT NULL,
  `dm_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`dm_id`, `dm_name`) VALUES
(38, 'Đồ Nướng'),
(46, 'Đồ Xào'),
(47, 'Đồ Lẩu'),
(49, 'Đồ Chiên');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `name`, `address`, `phone`, `email`, `total`) VALUES
(26, 'Nguyễn Ngọc Hùng', 'Quảng Trị', 859313123, 'leronalluom@gmail.com', 0),
(27, 'Nguyên Tuấn Hải', '68 Hòa Nam 2', 87461233, 'tuanhai@gmail.com', 0),
(28, 'Nguyên Tuấn Hải', '68 Hòa Nam 2', 87461233, 'tuanhai@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_id` int(10) NOT NULL,
  `sp_name` varchar(50) NOT NULL,
  `sp_price` int(20) NOT NULL,
  `sp_img` varchar(255) DEFAULT NULL,
  `sp_mota` text DEFAULT NULL,
  `sp_iddm` int(10) NOT NULL,
  `sp_quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `sp_name`, `sp_price`, `sp_img`, `sp_mota`, `sp_iddm`, `sp_quantity`) VALUES
(22, 'Lẩu Bò', 345000, 'Lẩu Bò.jpg', 'Nước lẩu ngon', 47, 0),
(23, 'Ốc Xào', 125000, 'Ốc xào.jpg', 'Ốc ngon', 46, 0),
(24, 'Bò Xào', 350000, 'Bò xào.jpg', 'Bò ngon', 46, 0),
(25, 'Cá Nướng', 199000, 'Cá Nướng.jpg', 'Ngon', 38, 0),
(27, 'Cơm Chiên Dương Châu', 35000, 'com chien duong chau.jpg', 'Cơm Ngon', 49, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `lienket_sanpham_danhmuc` (`sp_iddm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `dm_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lienket_sanpham_danhmuc` FOREIGN KEY (`sp_iddm`) REFERENCES `danhmuc` (`dm_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
