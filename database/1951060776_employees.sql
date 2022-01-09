-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 02:04 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060776_employees`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(11) NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phongban` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luong` bigint(20) DEFAULT NULL,
  `ngayvaolam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
(1, 'Nguyễn Văn Anh', 'Quản lý', 'Phòng quản lý', 7000000, '2021-05-10'),
(2, 'Nguyễn Thị Vân Anh', 'Quản lý', 'Phòng nhân sự', 5000000, '2021-07-12'),
(3, 'Trần Đức Hiếu', 'Nhân viên', 'Phòng nhân viên', 4500000, '2021-08-01'),
(4, 'Đỗ Văn Đạt', 'Nhân viên', 'Phòng nhân viên', 4500000, '2021-08-02'),
(5, 'Hoàng Thu Uyên', 'Nhân viên', 'Phòng nhân viên', 4000000, '2021-08-07'),
(6, 'Lương Thế Anh', 'Nhân viên kĩ thuật', 'Phòng nhân viên', 4000000, '2021-09-10'),
(7, 'Đào Tiến Dũng', 'Nhân viên bảo vệ', 'Phòng bảo vệ', 3000000, '2021-10-17');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
