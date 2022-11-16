-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 10, 2022 lúc 07:01 AM
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
-- Cơ sở dữ liệu: `qlsv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `id_diem` int(11) NOT NULL,
  `MaSV` int(11) NOT NULL,
  `TongTC` int(11) NOT NULL,
  `DiemRL` float NOT NULL,
  `TBCHocKy` float NOT NULL,
  `TBCTichLuy` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`id_diem`, `MaSV`, `TongTC`, `DiemRL`, `TBCHocKy`, `TBCTichLuy`) VALUES
(1, 2019001, 12, 80, 3.13, 3.2),
(2, 2019002, 19, 85, 3, 3.12),
(3, 2019003, 12, 70, 2.13, 2.5),
(4, 2019004, 19, 80, 3.34, 3.5),
(5, 2019005, 12, 70, 3.13, 3.1),
(6, 2019006, 19, 90, 3.34, 3.3),
(7, 2019007, 14, 80, 2.5, 2.5),
(8, 2019008, 17, 85, 3.34, 2.8),
(9, 2019009, 14, 70, 2, 2.4),
(10, 2019010, 19, 90, 3.1, 2.8),
(11, 2019011, 14, 40, 1.9, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` varchar(11) NOT NULL,
  `TenKhoa` varchar(225) NOT NULL,
  `NgayTL` date NOT NULL,
  `MoTa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `NgayTL`, `MoTa`) VALUES
('CK', 'Khoa cơ khí', '2001-10-29', 'Khoa CK'),
('CNOT', 'Công nghệ ô tô', '1999-09-19', 'Khoa CNOT'),
('CNTT', 'Công nghệ thông tin', '1999-09-16', 'Khoa CNTT'),
('DIEN', 'Điện', '2000-06-14', 'Khoa Điện'),
('DL', 'Du Lịch', '2002-03-14', 'Khoa DL'),
('NN', 'Ngoại Ngữ', '2001-10-04', 'Khoa NN'),
('QTKD', 'Quản trị kinh doanh', '1999-09-30', 'Khoa QTKD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `MaLop` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `TenLop` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `GVCN` varchar(225) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `MaKhoa` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`MaLop`, `TenLop`, `GVCN`, `MaKhoa`) VALUES
('CK01', 'Cơ khí 1', 'Nguyễn Xuân Trường', 'CK'),
('CNOT01', 'Công nghệ kỹ thuật ô tô 1', 'Vũ Thái Tuấn', 'CNOT'),
('CNTT01', 'Công nghệ thông tin 1', 'Nguyễn Văn Tiến', 'CNTT'),
('CNTT02', 'Công nghệ thông tin 2', 'Nguyễn Xuân Tình', 'CNTT'),
('DIEN01', 'Điện 1', 'Đỗ Duy Tuân', 'DIEN'),
('DL01', 'Du Lịch 1', 'Nguyễn Hồng Anh', 'DL'),
('KTPM01', 'Kỹ thuật phần mềm 1', 'Lê Ngọc Thức', 'CNTT'),
('NNA01', 'Ngôn Ngữ Anh 1', 'Hoàng Minh Tuyến', 'NN'),
('QTKD01', 'Quản trị kinh doanh 1', 'Lê Văn Tuyến', 'QTKD'),
('QTKD02', 'Quản trị kinh doanh 2', 'Lê Văn Tuyến', 'QTKD');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` int(11) NOT NULL,
  `TenSV` varchar(225) NOT NULL,
  `MaLop` varchar(11) NOT NULL,
  `MaKhoa` varchar(11) NOT NULL,
  `NgaySinh` date NOT NULL,
  `QueQuan` varchar(225) NOT NULL,
  `GioiTinh` varchar(11) NOT NULL,
  `DanToc` varchar(11) NOT NULL,
  `TonGiao` varchar(11) NOT NULL,
  `SoCMT` varchar(11) NOT NULL,
  `NoiCapCMT` varchar(225) NOT NULL,
  `SDT` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` text NOT NULL,
  `DoiTuongMG` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `TenSV`, `MaLop`, `MaKhoa`, `NgaySinh`, `QueQuan`, `GioiTinh`, `DanToc`, `TonGiao`, `SoCMT`, `NoiCapCMT`, `SDT`, `Email`, `DoiTuongMG`) VALUES
(2019001, 'Nguyễn Thị Anh', 'CNTT01', 'CNTT', '2001-03-02', 'Hữu Lũng -Lạng Sơn', 'Nữ', 'Kinh', 'Không', '03331000564', 'Lạng Sơn', '0384157479', 'nguyenanh2001@gmail.com', 1),
(2019002, 'Nguyễn Tiến An', 'DL01', 'DL', '2001-03-31', 'Tiền Hải - Thái Bình', 'Nam', 'Kinh', 'Không', '04351024512', 'Thái Bình', '0964157421', 'tienan2001@gmail.com', 1),
(2019003, 'Nguyễn Tuấn Anh', 'CNTT02', 'CNTT', '2001-10-02', 'Ninh Giang - Hải Dương', 'Nam', 'Kinh', 'Không', '04335607531', 'Hải Dương', '0335657469', 'tuananh2001@gmail.com', 0),
(2019004, 'Trần Ngọc Anh', 'QTKD01', 'QTKD', '2001-10-09', 'Hoàng Hóa - Thanh Hóa', 'Nữ', 'Kinh', 'Thiên Chúa ', '03451780554', 'Thanh Hóa', '0384157479', 'na2001@gmail.com', 0),
(2019005, 'Phạm Bá Chiên', 'KTPM01', 'CNTT', '2001-02-02', 'Lương Tài - Bắc Ninh', 'Nam', 'Kinh', 'Không', '03231367004', 'Bắc Ninh', '0312346479', 'bachien01@gmail.com', 0),
(2019006, 'Trịnh Quý Công', 'CNTT02', 'CNTT', '2001-05-03', 'Cẩm Thuỷ - Thanh Hóa', 'Nam', 'Dao', 'Không', '03111345621', 'Thanh Hóa', '0993317443', 'quycong111@gmail.com', 2),
(2019007, 'Ngô Quốc Đại', 'DIEN01', 'DIEN', '2001-01-01', 'Đống Đa - Hà Nội', 'Nam', 'Kinh', 'Không', '02231340166', 'Hà Nội', '0954257469', 'ngodai01@gmail.com', 0),
(2019008, 'Nguyễn Mạnh Toàn', 'NNA01', 'NN', '2001-12-08', 'Hưng Hà - Thái Bình', 'Nam', 'Kinh', 'Phật Giáo', '03350004564', 'Thái Bình', '0374057769', 'nguyenmanhtoan2001@gmail.com', 0),
(2019009, 'Nguyễn Văn Tiến', 'CNOT01', 'CNOT', '2001-12-02', 'Đông Hưng - Thái Bình', 'Nam', 'Kinh', 'Không', '01346070064', 'Thái Bình', '0974452233', 'tiendzl@gmail.com', 0),
(2019010, 'Mai Đình Vinh', 'CK01', 'CK', '2001-03-11', 'Định Hóa - Thái Nguyên', 'Nam', 'Tày', 'Không', '04951004552', 'Thái Nguyên', '0360057189', 'vinhtay201@gmail.com', 2),
(2019011, 'Lê Thị Vân', 'DL01', 'DL', '2001-09-20', 'Đắk Tô - Kon Tum', 'Nữ', 'Gia Rai', 'Không', '04344756089', 'Kon Tum', '0314552719', 'vandak201@gmail.com', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` text NOT NULL,
  `full_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `full_name`) VALUES
(1, 'Nguyenvantien2001', 'Tien123456', 'Nguyễn Văn Tiến'),
(2, 'Levantuyen', 'Letuyen2001', 'Lê Văn Tuyến'),
(3, 'manhtoan2001', '08122001tT', 'Nguyễn Mạnh Toàn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`id_diem`),
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
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaKhoa` (`MaKhoa`);

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
  MODIFY `id_diem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `sinhvien_ibfk_2` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
