-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 07:00 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phenikaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `iddangnhap` int(10) NOT NULL,
  `tendangnhap` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `kichhoat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylap` date NOT NULL,
  `idphanquyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`iddangnhap`, `tendangnhap`, `matkhau`, `hoten`, `diachi`, `kichhoat`, `ngaylap`, `idphanquyen`) VALUES
(7, 'hung', '$2y$10$zLUQTLXBT6lswO4OkY/B.OjDQ9wJFt3URrD4OPGs/XOUpWYZx.5hm', 'Phạm Hưng', ' Hưng Yên', 'Đã kích hoạt', '2021-02-20', 1),
(8, 'Giang', '$2y$10$xOSxF1hNccbqsz/05xUOtu3JkJ.FHEuvIjXpJ0bd6w9tf/6p6L3ZO', 'Phạm Giang', ' Hà Nội', 'Đã kích hoạt', '2021-08-24', 3);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(10) NOT NULL,
  `tendanhmuc` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `iddangnhap` int(1) NOT NULL,
  `ngaydang` date NOT NULL,
  `idtinhtrang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `idphanquyen` int(10) NOT NULL,
  `tenquyen` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`idphanquyen`, `tenquyen`) VALUES
(1, 'Admin'),
(3, 'Giảng viên'),
(4, 'Trợ lí');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `idslide` int(11) NOT NULL,
  `idhinhanh` int(11) NOT NULL,
  `ngaydang` date NOT NULL,
  `iddangnhap` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `thuvien`
--

CREATE TABLE `thuvien` (
  `idhinhanh` int(10) NOT NULL,
  `tenanh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `idtinhtrang` int(10) NOT NULL,
  `tentinhtrang` varchar(259) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`idtinhtrang`, `tentinhtrang`) VALUES
(1, 'Đã kích hoạt'),
(2, 'Chưa kích hoạt');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `idtintuc` int(30) NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngayviet` date NOT NULL,
  `iddanhmuc` int(30) NOT NULL,
  `idhinhanh` int(10) NOT NULL,
  `iddangnhap` int(30) NOT NULL,
  `idtinhtrang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`iddangnhap`),
  ADD KEY `dangnhap_ibfk_1` (`idphanquyen`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`),
  ADD KEY `danhmuc_ibfk_1` (`iddangnhap`),
  ADD KEY `danhmuc_ibfk_2` (`idtinhtrang`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`idphanquyen`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`idslide`),
  ADD KEY `slideshow_ibfk_1` (`idhinhanh`),
  ADD KEY `slideshow_ibfk_2` (`iddangnhap`);

--
-- Indexes for table `thuvien`
--
ALTER TABLE `thuvien`
  ADD PRIMARY KEY (`idhinhanh`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`idtinhtrang`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtintuc`),
  ADD KEY `tintuc_ibfk_1` (`iddangnhap`),
  ADD KEY `tintuc_ibfk_3` (`iddanhmuc`),
  ADD KEY `tintuc_ibfk_4` (`idhinhanh`),
  ADD KEY `tintuc_ibfk_5` (`idtinhtrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `iddangnhap` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddanhmuc` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `idphanquyen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `idslide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thuvien`
--
ALTER TABLE `thuvien`
  MODIFY `idhinhanh` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `idtinhtrang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtintuc` int(30) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD CONSTRAINT `dangnhap_ibfk_1` FOREIGN KEY (`idphanquyen`) REFERENCES `phanquyen` (`idphanquyen`);

--
-- Constraints for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD CONSTRAINT `danhmuc_ibfk_1` FOREIGN KEY (`iddangnhap`) REFERENCES `dangnhap` (`iddangnhap`),
  ADD CONSTRAINT `danhmuc_ibfk_2` FOREIGN KEY (`idtinhtrang`) REFERENCES `tinhtrang` (`idtinhtrang`);

--
-- Constraints for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD CONSTRAINT `slideshow_ibfk_1` FOREIGN KEY (`idhinhanh`) REFERENCES `thuvien` (`idhinhanh`),
  ADD CONSTRAINT `slideshow_ibfk_2` FOREIGN KEY (`iddangnhap`) REFERENCES `dangnhap` (`iddangnhap`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_ibfk_1` FOREIGN KEY (`iddangnhap`) REFERENCES `dangnhap` (`iddangnhap`),
  ADD CONSTRAINT `tintuc_ibfk_2` FOREIGN KEY (`idtinhtrang`) REFERENCES `tinhtrang` (`idtinhtrang`),
  ADD CONSTRAINT `tintuc_ibfk_3` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`iddanhmuc`),
  ADD CONSTRAINT `tintuc_ibfk_4` FOREIGN KEY (`idhinhanh`) REFERENCES `thuvien` (`idhinhanh`),
  ADD CONSTRAINT `tintuc_ibfk_5` FOREIGN KEY (`idtinhtrang`) REFERENCES `tinhtrang` (`idtinhtrang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
