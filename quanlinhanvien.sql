-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2024 at 12:44 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlinhanvien`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuong_trinh_dao_tao`
--

CREATE TABLE `chuong_trinh_dao_tao` (
  `chuong_trinh_id` int(11) NOT NULL,
  `ten_chuong_trinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doi_tuong` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thoi_luong` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinh_thuc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuong_trinh_dao_tao`
--

INSERT INTO `chuong_trinh_dao_tao` (`chuong_trinh_id`, `ten_chuong_trinh`, `doi_tuong`, `thoi_luong`, `hinh_thuc`) VALUES
(1, 'Chương trình 2', 'Đối tượng 1', '120p', 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `dang_ky_dao_tao`
--

CREATE TABLE `dang_ky_dao_tao` (
  `dang_ky_id` int(11) NOT NULL,
  `nhan_vien_id` int(11) DEFAULT NULL,
  `lich_trinh_id` int(11) DEFAULT NULL,
  `ngay_dang_ky` date DEFAULT NULL,
  `trang_thai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dang_ky_dao_tao`
--

INSERT INTO `dang_ky_dao_tao` (`dang_ky_id`, `nhan_vien_id`, `lich_trinh_id`, `ngay_dang_ky`, `trang_thai`) VALUES
(2, 4, 1, '2024-06-15', '1');

-- --------------------------------------------------------

--
-- Table structure for table `danh_gia_dao_tao`
--

CREATE TABLE `danh_gia_dao_tao` (
  `danh_gia_id` int(11) NOT NULL,
  `nhan_vien_id` int(11) DEFAULT NULL,
  `chuong_trinh_id` int(11) DEFAULT NULL,
  `loai_danh_gia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diem_danh_gia` int(11) DEFAULT NULL,
  `nhan_xet` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giang_vien`
--

CREATE TABLE `giang_vien` (
  `giang_vien_id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chuyen_mon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thong_tin_lien_he` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giang_vien`
--

INSERT INTO `giang_vien` (`giang_vien_id`, `ten`, `chuyen_mon`, `thong_tin_lien_he`) VALUES
(1, 'Ngô Thanh Tânn', 'XXX', '0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `lich_trinh_dao_tao`
--

CREATE TABLE `lich_trinh_dao_tao` (
  `lich_trinh_id` int(11) NOT NULL,
  `chuong_trinh_id` int(11) DEFAULT NULL,
  `ngay_bat_dau` date DEFAULT NULL,
  `ngay_ket_thuc` date DEFAULT NULL,
  `dia_diem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lich_trinh_dao_tao`
--

INSERT INTO `lich_trinh_dao_tao` (`lich_trinh_id`, `chuong_trinh_id`, `ngay_bat_dau`, `ngay_ket_thuc`, `dia_diem`) VALUES
(1, 1, '2024-05-30', '2024-07-06', 'Cần Thơ');

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `nhan_vien_id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phong_ban` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vi_tri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_dien_thoai` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhan_vien`
--

INSERT INTO `nhan_vien` (`nhan_vien_id`, `ten`, `phong_ban`, `vi_tri`, `email`, `so_dien_thoai`) VALUES
(4, 'Ngô Thanh Tân', '123', '123', 'nttan2001042@student.ctuet.edu.vn', '09999999999');

-- --------------------------------------------------------

--
-- Table structure for table `nhu_cau_dao_tao`
--

CREATE TABLE `nhu_cau_dao_tao` (
  `nhu_cau_id` int(11) NOT NULL,
  `nhan_vien_id` int(11) DEFAULT NULL,
  `loai_ky_nang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `muc_ky_nang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhan_xet_quan_ly` text COLLATE utf8_unicode_ci,
  `ket_qua_khao_sat` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhu_cau_dao_tao`
--

INSERT INTO `nhu_cau_dao_tao` (`nhu_cau_id`, `nhan_vien_id`, `loai_ky_nang`, `muc_ky_nang`, `nhan_xet_quan_ly`, `ket_qua_khao_sat`) VALUES
(2, 4, 'Kỹ năng mềmm', '3', 'Tuyệt vời', '10đ');

-- --------------------------------------------------------

--
-- Table structure for table `noi_dung_dao_tao`
--

CREATE TABLE `noi_dung_dao_tao` (
  `noi_dung_id` int(11) NOT NULL,
  `chuong_trinh_id` int(11) DEFAULT NULL,
  `loai_noi_dung` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tieu_de` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci,
  `duong_dan_tap_tin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chu_de` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noi_dung_dao_tao`
--

INSERT INTO `noi_dung_dao_tao` (`noi_dung_id`, `chuong_trinh_id`, `loai_noi_dung`, `tieu_de`, `mo_ta`, `duong_dan_tap_tin`, `chu_de`) VALUES
(1, 1, '1', '222', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `phan_cong_giang_vien`
--

CREATE TABLE `phan_cong_giang_vien` (
  `chuong_trinh_id` int(11) NOT NULL,
  `giang_vien_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `tai_khoan_id` int(11) NOT NULL,
  `nhan_vien_id` int(11) DEFAULT NULL,
  `ten_dang_nhap` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mat_khau` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vai_tro` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`tai_khoan_id`, `nhan_vien_id`, `ten_dang_nhap`, `mat_khau`, `vai_tro`) VALUES
(1, 1, 'admin', 'admin', 'nhanvien'),
(2, 2, 'tranthib', 'password456', 'nhanvien'),
(3, 3, 'levanc', 'password789', 'quanly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuong_trinh_dao_tao`
--
ALTER TABLE `chuong_trinh_dao_tao`
  ADD PRIMARY KEY (`chuong_trinh_id`);

--
-- Indexes for table `dang_ky_dao_tao`
--
ALTER TABLE `dang_ky_dao_tao`
  ADD PRIMARY KEY (`dang_ky_id`),
  ADD KEY `nhan_vien_id` (`nhan_vien_id`),
  ADD KEY `lich_trinh_id` (`lich_trinh_id`);

--
-- Indexes for table `danh_gia_dao_tao`
--
ALTER TABLE `danh_gia_dao_tao`
  ADD PRIMARY KEY (`danh_gia_id`),
  ADD KEY `nhan_vien_id` (`nhan_vien_id`),
  ADD KEY `chuong_trinh_id` (`chuong_trinh_id`);

--
-- Indexes for table `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD PRIMARY KEY (`giang_vien_id`);

--
-- Indexes for table `lich_trinh_dao_tao`
--
ALTER TABLE `lich_trinh_dao_tao`
  ADD PRIMARY KEY (`lich_trinh_id`),
  ADD KEY `chuong_trinh_id` (`chuong_trinh_id`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`nhan_vien_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `nhu_cau_dao_tao`
--
ALTER TABLE `nhu_cau_dao_tao`
  ADD PRIMARY KEY (`nhu_cau_id`),
  ADD KEY `nhan_vien_id` (`nhan_vien_id`);

--
-- Indexes for table `noi_dung_dao_tao`
--
ALTER TABLE `noi_dung_dao_tao`
  ADD PRIMARY KEY (`noi_dung_id`),
  ADD KEY `chuong_trinh_id` (`chuong_trinh_id`);

--
-- Indexes for table `phan_cong_giang_vien`
--
ALTER TABLE `phan_cong_giang_vien`
  ADD PRIMARY KEY (`chuong_trinh_id`,`giang_vien_id`),
  ADD KEY `giang_vien_id` (`giang_vien_id`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`tai_khoan_id`),
  ADD UNIQUE KEY `ten_dang_nhap` (`ten_dang_nhap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuong_trinh_dao_tao`
--
ALTER TABLE `chuong_trinh_dao_tao`
  MODIFY `chuong_trinh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dang_ky_dao_tao`
--
ALTER TABLE `dang_ky_dao_tao`
  MODIFY `dang_ky_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `danh_gia_dao_tao`
--
ALTER TABLE `danh_gia_dao_tao`
  MODIFY `danh_gia_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `giang_vien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lich_trinh_dao_tao`
--
ALTER TABLE `lich_trinh_dao_tao`
  MODIFY `lich_trinh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `nhan_vien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nhu_cau_dao_tao`
--
ALTER TABLE `nhu_cau_dao_tao`
  MODIFY `nhu_cau_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `noi_dung_dao_tao`
--
ALTER TABLE `noi_dung_dao_tao`
  MODIFY `noi_dung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `tai_khoan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dang_ky_dao_tao`
--
ALTER TABLE `dang_ky_dao_tao`
  ADD CONSTRAINT `dang_ky_dao_tao_ibfk_1` FOREIGN KEY (`nhan_vien_id`) REFERENCES `nhan_vien` (`nhan_vien_id`),
  ADD CONSTRAINT `dang_ky_dao_tao_ibfk_2` FOREIGN KEY (`lich_trinh_id`) REFERENCES `lich_trinh_dao_tao` (`lich_trinh_id`);

--
-- Constraints for table `danh_gia_dao_tao`
--
ALTER TABLE `danh_gia_dao_tao`
  ADD CONSTRAINT `danh_gia_dao_tao_ibfk_1` FOREIGN KEY (`nhan_vien_id`) REFERENCES `nhan_vien` (`nhan_vien_id`),
  ADD CONSTRAINT `danh_gia_dao_tao_ibfk_2` FOREIGN KEY (`chuong_trinh_id`) REFERENCES `chuong_trinh_dao_tao` (`chuong_trinh_id`);

--
-- Constraints for table `lich_trinh_dao_tao`
--
ALTER TABLE `lich_trinh_dao_tao`
  ADD CONSTRAINT `lich_trinh_dao_tao_ibfk_1` FOREIGN KEY (`chuong_trinh_id`) REFERENCES `chuong_trinh_dao_tao` (`chuong_trinh_id`);

--
-- Constraints for table `nhu_cau_dao_tao`
--
ALTER TABLE `nhu_cau_dao_tao`
  ADD CONSTRAINT `nhu_cau_dao_tao_ibfk_1` FOREIGN KEY (`nhan_vien_id`) REFERENCES `nhan_vien` (`nhan_vien_id`);

--
-- Constraints for table `noi_dung_dao_tao`
--
ALTER TABLE `noi_dung_dao_tao`
  ADD CONSTRAINT `noi_dung_dao_tao_ibfk_1` FOREIGN KEY (`chuong_trinh_id`) REFERENCES `chuong_trinh_dao_tao` (`chuong_trinh_id`);

--
-- Constraints for table `phan_cong_giang_vien`
--
ALTER TABLE `phan_cong_giang_vien`
  ADD CONSTRAINT `phan_cong_giang_vien_ibfk_1` FOREIGN KEY (`chuong_trinh_id`) REFERENCES `chuong_trinh_dao_tao` (`chuong_trinh_id`),
  ADD CONSTRAINT `phan_cong_giang_vien_ibfk_2` FOREIGN KEY (`giang_vien_id`) REFERENCES `giang_vien` (`giang_vien_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;