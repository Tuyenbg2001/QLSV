-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 10, 2022 lúc 06:47 AM
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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaLop` (`MaLop`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Các ràng buộc cho các bảng đã đổ
--

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
