-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 07:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marina_fleet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `mail`, `password`) VALUES
(1, 'nvhai272', 'nvhai272@gmail.com', '1'),
(2, 'admin', 'admin@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `assess`
--

CREATE TABLE `assess` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `service` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assess`
--

INSERT INTO `assess` (`id`, `name`, `comment`, `service`, `img`) VALUES
(1, 'Hải Đô La', 'Bản thân mình rất hài lòng với Du Thuyền Sài Gòn. Chăm chút và lo lắng cho khách hàng trên mọi chuyến đi.', 'Ăn tối', 'img/cmt1.jpg'),
(2, 'Hải Siêu Nhân', 'Du thuyền đẹp, đồ ăn ngon, dịch vụ tốt, nhân viên tận tình chuyên nghiệp. Công ty luôn luôn quan tâm tới hành khách, cảm ơn các bạn nhiều.', 'Ăn tối - Đặt tiệc', 'img/cmt2.jpg'),
(3, 'Test', 'Rất ra gì và này nọ', 'Ăn tối - Đặt tiệc', 'img/cmt3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers_eat`
--

CREATE TABLE `customers_eat` (
  `id` int(11) NOT NULL,
  `lichkhoihanh` varchar(100) DEFAULT NULL,
  `vitringoi` varchar(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `tau` varchar(50) DEFAULT NULL,
  `people` int(3) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `menu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers_eat`
--

INSERT INTO `customers_eat` (`id`, `lichkhoihanh`, `vitringoi`, `name`, `phone`, `tau`, `people`, `email`, `address`, `menu`) VALUES
(1, '22/07/2023', 'Tầng 1', 'Hải', 357769040, 'Du Thuyền Princess', 15, 'nvhai272@gmail.com', 'số 4 ngõ 55/10 Dương Văn Bé, Hai Bà Trưng, Hà Nội', 'MENU TRẺ EM - PLUTO KID (Từ 5-11 tuổi)'),
(2, '25/07/2023', 'Tầng 2', 'Nguyễn Sơn', 357769040, 'Du Thuyền King', 2, 'nvhai272@gmail.com', 'số 4 ngõ 55/10 Dương Văn Bé, Hai Bà Trưng, Hà Nội', 'Menu - Du Thuyền King'),
(3, '22/07/2023', 'Tầng 3', 'Vẫn Thế', 16576913, 'Tàu Viễn Đông', 3, 'kco@gmail.com', 'HBT,HN', 'Menu 3 - Tàu Viễn Đông');

-- --------------------------------------------------------

--
-- Table structure for table `info_contact`
--

CREATE TABLE `info_contact` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_contact`
--

INSERT INTO `info_contact` (`id`, `name`, `phone`, `address`, `mail`, `content`) VALUES
(1, 'Nguyen Van Hái', 357769040, 'số 4 ngõ 55/10 Dương Văn Bé, Hai Bà Trưng, Hà Nội', 'nvhai272@gmail.com', 'Tôi muốn được tư vấn tình cảm '),
(2, 'meomeomeo', 113, 'Không nhớ', 'meomeo123@gmailcom', 'Biết nói tiếng mèo không'),
(3, 'Nguyễn Sơn', 357768555, 'Hai Bà Trưng, Hà Nội', 'know@gmail.com', 'cần tư vấn về dịch vụ thuê ');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `giaTien` varchar(50) NOT NULL,
  `tau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `ten`, `giaTien`, `tau`) VALUES
(1, 'Buffet - Tiệc Buffet', '500.000đ', 'Tàu Thống Nhất'),
(2, 'MENU TRẺ EM - PLUTO KID(Từ 5-11 tuổi) ', '700.000đ', 'Du Thuyền Princess'),
(3, 'INTERNATIONAL 3 MÓN', '850.000đ', 'Du Thuyền Princess'),
(4, 'ASIAN SEAFOOD 4 MÓN', '1.150.000đ', 'Du Thuyền Princess');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `content`) VALUES
(1, 'Bữa tối đặc biệt trong ngày của cha', 'img/cha-con.jpg', 'Kỉ niệm ngày của cha, Marina tri nhân những người thương yêu trong gia đình bạn và nhất là những người cha, người ông một ngày vui vẻ...'),
(2, 'Kỉ niệm 30/4-1/5', 'img/bg2.jpg', 'Marina Fleet tổ chức chương trình kỉ niệm trên siêu du thuyền 5 sao với các chương trình đặc sắc như múa hát, thổi sáo, thường thức các cảnh đẹp và món ăn hấp dẫn...'),
(3, 'Hawaii địa điểm du lịch không thể bỏ lỡ', 'img/hawai.jpg', 'Đến Hawaii, du khách không chỉ được khám phá đại dương kỳ thú, tận hưởng những khoảng khắc thư giãn bên bờ biển ngập nắng vàng mà còn có cơ hội thưởng thức món đá bào Hawaii trứ danh, nổi tiếng khắp thế giới. Không chỉ có biển, Hawaii còn mang đến cho du khách những cung đường đi bộ khám phá đầy thú vị, hấp dẫn!');

-- --------------------------------------------------------

--
-- Table structure for table `yatchboat`
--

CREATE TABLE `yatchboat` (
  `id` int(11) NOT NULL,
  `tau` varchar(50) NOT NULL,
  `diaDiem` varchar(50) NOT NULL,
  `loaiTau` varchar(100) NOT NULL,
  `sucChua` int(4) NOT NULL,
  `giaTien` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `yatchboat`
--

INSERT INTO `yatchboat` (`id`, `tau`, `diaDiem`, `loaiTau`, `sucChua`, `giaTien`) VALUES
(2, 'Du Thuyền King', 'Vịnh Hạ Long', 'Nhà hàng du thuyền', 900, '0'),
(1, 'Du Thuyền Princess', 'Vũng Tàu', 'Nhà hàng du thuyền', 1000, '0'),
(5, 'Du Thuyền Yatch 12', 'Đà Nẵng', 'Du thuyền cho thuê', 200, '27.500.000đ'),
(3, 'Tàu Thống Nhất', 'Hà Nội', 'Nhà hàng du thuyền', 600, '0'),
(4, 'Tàu Viễn Đông', 'Sài Gòn', 'Nhà hàng du thuyền', 300, '0'),
(6, 'Tàu đi biển', 'Hạ Long', 'Tàu cho thuê', 12, '11.750.000đ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assess`
--
ALTER TABLE `assess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_eat`
--
ALTER TABLE `customers_eat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tau` (`tau`);

--
-- Indexes for table `info_contact`
--
ALTER TABLE `info_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tau` (`tau`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yatchboat`
--
ALTER TABLE `yatchboat`
  ADD PRIMARY KEY (`tau`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assess`
--
ALTER TABLE `assess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customers_eat`
--
ALTER TABLE `customers_eat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `info_contact`
--
ALTER TABLE `info_contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers_eat`
--
ALTER TABLE `customers_eat`
  ADD CONSTRAINT `customers_eat_ibfk_1` FOREIGN KEY (`tau`) REFERENCES `yatchboat` (`tau`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`tau`) REFERENCES `yatchboat` (`tau`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
