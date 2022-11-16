-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 27, 2022 lúc 04:41 AM
-- Phiên bản máy phục vụ: 8.0.17
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `datasv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `banghi` int(11) NOT NULL,
  `MaMon` varchar(25) NOT NULL,
  `MaSV` int(11) NOT NULL,
  `DiemTX1` float NOT NULL,
  `DiemTX2` float NOT NULL,
  `DiemThi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`banghi`, `MaMon`, `MaSV`, `DiemTX1`, `DiemTX2`, `DiemThi`) VALUES
(1, 'IT0617', 2019001, 10, 8.5, 8),
(2, 'IT0622', 2019001, 7, 9, 8),
(3, 'IT0619', 2019001, 7, 7.5, 10),
(4, 'IT0619', 2019002, 8, 6.5, 6),
(5, 'IT0622', 2019002, 7, 6, 8),
(6, 'IT0617', 2019006, 7, 7.5, 7),
(7, 'IT0623', 2019013, 9, 8.5, 9),
(8, 'IT0619', 2019013, 9, 8.5, 8.5),
(9, 'IT0622', 2019015, 7, 6, 8.5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemdanh`
--

CREATE TABLE `diemdanh` (
  `BanGhi` int(11) NOT NULL,
  `MaMon` varchar(11) NOT NULL,
  `MaSV` int(11) NOT NULL,
  `TietNghi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `diemdanh`
--

INSERT INTO `diemdanh` (`BanGhi`, `MaMon`, `MaSV`, `TietNghi`) VALUES
(1, 'IT0617', 2019001, 0),
(2, 'IT0617', 2019006, 0),
(3, 'IT0619', 2019001, 0),
(4, 'IT0619', 2019002, 2),
(5, 'IT0619', 2019013, 0),
(6, 'IT0622', 2019001, 0),
(7, 'IT0622', 2019002, 0),
(8, 'IT0622', 2019013, 0),
(9, 'IT0622', 2019015, 4),
(10, 'IT0623', 2019013, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(11) NOT NULL,
  `TenKhoa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`) VALUES
('CNTT', 'Công nghệ thông tin'),
('HTTT', 'Hệ thống thông tin'),
('KHMT', 'Khoa học máy tính'),
('KTPM', 'Kỹ thuật phần mềm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(11) NOT NULL,
  `TenLop` varchar(255) NOT NULL,
  `MaKhoa` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `MaKhoa`) VALUES
('HT01', 'Hệ thống thông tin 1', 'HTTT'),
('IT01', 'Công nghệ thông tin 1', 'CNTT'),
('IT02', 'Công nghệ thông tin 2', 'CNTT'),
('KH01', 'Khoa học máy tính 1', 'KHMT'),
('PM01', 'Kỹ thuật phần mềm 1', 'KTPM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mon`
--

CREATE TABLE `mon` (
  `MaMon` varchar(11) NOT NULL,
  `TenMon` varchar(50) NOT NULL,
  `SoTC` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `mon`
--

INSERT INTO `mon` (`MaMon`, `TenMon`, `SoTC`) VALUES
('IT0617', 'Lập trình .Net', 3),
('IT0619', 'Lập trình Java', 3),
('IT0622', 'Lập trình web bằng PHP', 3),
('IT0623', 'Mạng máy tính', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Sex` varchar(25) NOT NULL,
  `Birthday` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `SDT` varchar(10) NOT NULL,
  `MaLop` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `FullName`, `Sex`, `Birthday`, `DiaChi`, `SDT`, `MaLop`) VALUES
(2019001, 'Nguyễn Thị Hồng Anh', 'Nữ', '22-11-2001', 'Hữu Lũng, Lạng Sơn', '0326760976', 'IT02'),
(2019002, 'Vũ Thị Ngọc Hà', 'Nữ', '05-10-2001', 'Ninh Giang, Hải Dương', '0382309012', 'IT01'),
(2019004, 'Lê Ngọc Thức', 'Nam', '12-02-2001', 'Hoằng Hóa, Thanh Hóa', '0822290980', 'IT02'),
(2019006, 'Nguyễn Xuân Tình', 'Nam', '27-07-2001', 'Lương Tài, Băc Ninh', '0856529972', 'IT02'),
(2019013, 'Hoàng Minh Tuyến', 'Nam', '04-07-2001', 'Tiền Hải, Thái Bình', '0969650089', 'PM01'),
(2019015, 'Mai Đình Vinh', 'Nam', '02-10-2001', 'Nga Sơn, Thanh Hóa', '0353680281', 'PM01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `full_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `full_name`) VALUES
(1, 'nguyenvantien', 'Tien123456', 'Nguyễn Văn Tiến'),
(2, 'nguyenmanhtoan', '08122001tT', 'Nguyễn Mạnh Toàn'),
(3, 'levantuyen', 'LeTuyen2001', 'Lê Văn Tuyến');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`banghi`),
  ADD KEY `MaSV` (`MaSV`),
  ADD KEY `MaMon` (`MaMon`);

--
-- Chỉ mục cho bảng `diemdanh`
--
ALTER TABLE `diemdanh`
  ADD PRIMARY KEY (`BanGhi`),
  ADD KEY `MaMon` (`MaMon`),
  ADD KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`MaMon`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `diem`
--
ALTER TABLE `diem`
  MODIFY `banghi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `diemdanh`
--
ALTER TABLE `diemdanh`
  MODIFY `BanGhi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`MaMon`) REFERENCES `mon` (`MaMon`);

--
-- Các ràng buộc cho bảng `diemdanh`
--
ALTER TABLE `diemdanh`
  ADD CONSTRAINT `diemdanh_ibfk_1` FOREIGN KEY (`MaMon`) REFERENCES `mon` (`MaMon`),
  ADD CONSTRAINT `diemdanh_ibfk_2` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
