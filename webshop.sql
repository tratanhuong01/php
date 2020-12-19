-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2020 lúc 02:29 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donghoadon`
--

CREATE TABLE `donghoadon` (
  `IDDongHoaDon` varchar(12) NOT NULL,
  `IDHoaDon` varchar(12) DEFAULT NULL,
  `IDSanPham` varchar(12) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `Giam` float DEFAULT NULL,
  `TinhTrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dongsanpham`
--

CREATE TABLE `dongsanpham` (
  `IDDongSanPham` varchar(50) NOT NULL,
  `TenDongSanPham` varchar(100) DEFAULT NULL,
  `IDNhomSanPham` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dongsanpham`
--

INSERT INTO `dongsanpham` (`IDDongSanPham`, `TenDongSanPham`, `IDNhomSanPham`) VALUES
('DAYXACANDROID', 'Dây Xạc Andorid ', 'IDNSP1000003'),
('DAYXACAPPLE', 'Dây Xạc Apple', 'IDNSP1000003'),
('IPAD', 'IPad', 'IDNSP1000006'),
('IPADPRO', 'Ipad Pro', 'IDNSP1000006'),
('IPHONE11', 'IPhone 11', 'IDNSP1000001'),
('IPHONE12MINI', 'Iphone 12 Mini', 'IDNSP1000001'),
('IPHONE7PLUS', 'Iphone 7 Plus', 'IDNSP1000001'),
('IPHONESE', 'Iphone SE', 'IDNSP1000001'),
('IPHONEXS', 'Iphone XS', 'IDNSP1000001'),
('LAPTOPASUS', 'Asus', 'IDNSP1000002'),
('LAPTOPDELL', 'Dell', 'IDNSP1000002'),
('LAPTOPHP', 'HP', 'IDNSP1000002'),
('OPPORENO', 'Oppo Reno', 'IDNSP1000001'),
('PINXACDUPHONG', 'Pin Xạc Dự Phòng', 'IDNSP1000003'),
('REALME', 'Realme', 'IDNSP1000001'),
('SAMSUNGGALAXY', 'Samsung Galaxy', 'IDNSP1000001'),
('SAMSUNGGALAXYTABLET', 'Samsung Galaxy Tab', 'IDNSP1000006'),
('TAINGHECODAY', 'Tai Nghe Có Dây', 'IDNSP1000003'),
('TAINGHEKHONGDAY', 'Tai Nghe Không Dây', 'IDNSP1000003'),
('XIAOMIMI', 'Xiaomi Mi', 'IDNSP1000001'),
('XIAOMIPOCO', 'Xiaomi POCO', 'IDNSP1000001'),
('XIAOMIREDMI', 'Xiaomi Redmi', 'IDNSP1000001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `STT` int(11) NOT NULL,
  `IDSanPham` varchar(12) DEFAULT NULL,
  `IDKhachHang` varchar(12) DEFAULT NULL,
  `SoLuong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `IDHoaDon` varchar(12) NOT NULL,
  `NgayTao` datetime DEFAULT NULL,
  `IDKhachHang` varchar(12) DEFAULT NULL,
  `TongTien` float DEFAULT NULL,
  `Giam` float DEFAULT NULL,
  `IDPTThanhToan` varchar(12) DEFAULT NULL,
  `TinhTrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `IDKhachHang` varchar(12) NOT NULL,
  `Ho` varchar(30) DEFAULT NULL,
  `Ten` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `SoDienThoai` varchar(10) DEFAULT NULL,
  `DiaChi` varchar(100) DEFAULT NULL,
  `GioiTinh` varchar(5) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`IDKhachHang`, `Ho`, `Ten`, `Email`, `SoDienThoai`, `DiaChi`, `GioiTinh`, `NgaySinh`) VALUES
('KH1000000001', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('KH1000000002', 'Trà', 'Hưởng', 'tratanhuong01@gmail.com', '0354114665', 'Quang Nam', 'Nam', '2001-10-01'),
('KH1000000003', 'Hồ', 'Hà', 'hongocha@gmail.com', '0999999999', 'Quang Nam', 'Nam', '1989-12-11'),
('KH1000000004', 'Nguyễn', 'Văn Đàn', 'dan123@gmail.com', '0888888888', 'Quang Nam', 'Nam', '1989-12-11'),
('KH1000000005', 'Lê', 'Trọng Nguyên', 'letrongnguyen@gmail.com', '0383654321', 'Quang Nam', 'Nam', '2001-11-11'),
('KH1000000006', 'Cao', 'Trung Hiếu', 'caotrunghieu@gmail.com', '0928765432', 'Quang Nam', 'Nam', '2002-02-11'),
('KH1000000007', 'Trà', 'Hưởng', 'tratanhuong011@gmail.com', '0792786543', 'Quang Nam', 'Nam', '2020-12-01'),
('KH1000000008', '1', '1', '1@gmail.com', '1', 'Quang Nam', 'Nam', '2020-12-02'),
('KH1000000009', 'Phạm', 'Cảnh', 'canhpham@gmail.com', '0987252456', 'Quang Nam', 'Nam', '2001-01-01'),
('KH1000000010', 'NGuyễn', 'Tỉnh', 'tinhnguyen@gmail.com', '0938364345', 'Quang Nam', 'Nam', '2000-11-11'),
('KH1000000011', 'Nguyễn', 'Hiếu', 'nguyenvanhieu@gmail.com', '0972514321', 'Quang Nam', 'Nam', '2001-01-01'),
('KH1000000012', 'Nguyễn', 'Hưng', 'nguyenhung@gmail.com', '0987265123', 'Quang Nam', 'Nam', '2001-10-01'),
('KH1000000013', 'Chu', 'Hoài Lễ', 'chuhoaile@gmail.com', '0982625212', 'Quang Nam', 'Nữ', '1999-11-11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausanpham`
--

CREATE TABLE `mausanpham` (
  `IDMau` varchar(12) NOT NULL,
  `TenMau` varchar(50) DEFAULT NULL,
  `rgbcolor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `mausanpham`
--

INSERT INTO `mausanpham` (`IDMau`, `TenMau`, `rgbcolor`) VALUES
('BAC', 'Bạc', '#C0C0C0'),
('DEN', 'DEN', '#000000'),
('DO', 'Đỏ', '#FF0000'),
('HONG', 'Hồng', '#2A2A2A'),
('TIM', 'Tím', '#A349A3'),
('TRANG', 'Trắng', '#FEFEFE'),
('VANG', 'Vàng', '#FFFF00'),
('XANH', 'Xanh', '#21E231');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomsanpham`
--

CREATE TABLE `nhomsanpham` (
  `IDNhomSanPham` varchar(12) NOT NULL,
  `TenNhom` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhomsanpham`
--

INSERT INTO `nhomsanpham` (`IDNhomSanPham`, `TenNhom`) VALUES
('IDNSP1000001', 'Điện Thoại'),
('IDNSP1000002', 'Laptop'),
('IDNSP1000003', 'Phụ Kiện'),
('IDNSP1000004', 'Đồng Hồ Thông Minh'),
('IDNSP1000005', 'Đồng Hồ Thời Trang'),
('IDNSP1000006', 'Tablet');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthucthanhtoan`
--

CREATE TABLE `phuongthucthanhtoan` (
  `IDPTThanhToan` varchar(12) NOT NULL,
  `TenPTThanhToan` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phuongthucthanhtoan`
--

INSERT INTO `phuongthucthanhtoan` (`IDPTThanhToan`, `TenPTThanhToan`) VALUES
('TTATM1000', 'ATM'),
('TTTM1001', 'Tiền Mặt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `IDSanPham` varchar(12) NOT NULL,
  `IDDongSanPham` varchar(50) DEFAULT NULL,
  `TenSanPham` varchar(100) DEFAULT NULL,
  `DonGia` float DEFAULT NULL,
  `Giam` float DEFAULT NULL,
  `AnhSanPham` varchar(200) DEFAULT NULL,
  `IDMau` varchar(12) DEFAULT NULL,
  `ThuongHieu` varchar(30) DEFAULT NULL,
  `BoNho` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`IDSanPham`, `IDDongSanPham`, `TenSanPham`, `DonGia`, `Giam`, `AnhSanPham`, `IDMau`, `ThuongHieu`, `BoNho`) VALUES
('SP1000000001', 'IPHONE7PLUS', 'Iphone 7 Plus 32GB Màu Đen', 7240000, 5, 'IPHONE7PLUS_', 'DEN', 'Apple', 32),
('SP1000000002', 'IPHONE11', 'Iphone 11 64GB Màu Đen', 13990000, 3, 'IPHONE11_', 'DEN', 'Apple', 64),
('SP1000000006', 'IPHONE7PLUS', 'Iphone 7 Plus 32GB Màu Đỏ', 7740000, 5, 'IPHONE7PLUS_', 'DO', 'Apple', 32),
('SP1000000007', 'IPHONE7PLUS', 'Iphone 7 Plus 32GB Màu Vàng', 7440000, 5, 'IPHONE7PLUS_', 'VANG', 'Apple', 32),
('SP1000000008', 'IPHONE7PLUS', 'Iphone 7 Plus 32GB Màu Bạc', 7440000, 5, 'IPHONE7PLUS_', 'BAC', 'Apple', 32),
('SP1000000009', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Bạc', 8140000, 5, 'IPHONE7PLUS_', 'BAC', 'Apple', 128),
('SP1000000010', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Vàng', 8190000, 5, 'IPHONE7PLUS_', 'VANG', 'Apple', 128),
('SP1000000011', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Vàng', 8190000, 5, 'IPHONE7PLUS_', 'VANG', 'Apple', 128),
('SP1000000012', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Đỏ', 8190000, 5, 'IPHONE7PLUS_', 'DO', 'Apple', 128),
('SP1000000013', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Đen', 8190000, 5, 'IPHONE7PLUS_', 'DEN', 'Apple', 128),
('SP1000000014', 'IPHONE7PLUS', 'Iphone 7 Plus 256GB Màu Vàng', 8990000, 5, 'IPHONE7PLUS_', 'VANG', 'Apple', 256),
('SP1000000015', 'IPHONE7PLUS', 'Iphone 7 Plus 256GB Màu Đỏ', 8990000, 5, 'IPHONE7PLUS_', 'DO', 'Apple', 256),
('SP1000000016', 'IPHONE7PLUS', 'Iphone 7 Plus 256GB Màu Đen', 8990000, 5, 'IPHONE7PLUS_', 'DEN', 'Apple', 256),
('SP1000000017', 'IPHONE7PLUS', 'Iphone 7 Plus 256GB Màu Bạc', 8990000, 5, 'IPHONE7PLUS_', 'BAC', 'Apple', 256),
('SP1000000018', 'IPAD', 'iPad 10.2 2020 32GB 4G Wifi ', 11990000, 4, 'IPAD10_2_20204GWIFI_', 'HONG', 'Apple', 32),
('SP1000000019', 'IPAD', 'iPad 10.2 2020 32GB 4G Wifi ', 11990000, 4, 'IPAD10_2_20204GWIFI_', 'DEN', 'Apple', 32),
('SP1000000020', 'IPAD', 'iPad 10.2 2020 32GB 4G Wifi ', 11990000, 4, 'IPAD10_2_20204GWIFI_', 'TRANG', 'Apple', 32),
('SP1000000022', 'IPHONE11', 'Iphone 11 64GB Màu Đỏ', 14990000, 3, 'IPHONE11_', 'DO', 'Apple', 64),
('SP1000000023', 'IPHONE11', 'Iphone 11 64GB Màu Tím', 14990000, 3, 'IPHONE11_', 'TIM', 'Apple', 64),
('SP1000000024', 'IPHONE11', 'Iphone 11 64GB Màu Trắng', 14990000, 3, 'IPHONE11_', 'TRANG', 'Apple', 64),
('SP1000000025', 'IPHONE11', 'Iphone 11 64GB Màu Vàng', 14990000, 3, 'IPHONE11_', 'VANG', 'Apple', 64),
('SP1000000026', 'IPHONE11', 'Iphone 11 64GB Màu Đen', 14990000, 3, 'IPHONE11_', 'DEN', 'Apple', 64),
('SP1000000028', 'IPHONE11', 'Iphone 11 128GB Màu Đỏ', 14990000, 3, 'IPHONE11_', 'DO', 'Apple', 128),
('SP1000000029', 'IPHONE11', 'Iphone 11 128GB Màu Tím', 14990000, 3, 'IPHONE11_', 'TIM', 'Apple', 128),
('SP1000000030', 'IPHONE11', 'Iphone 11 128GB Màu Trắng', 14990000, 3, 'IPHONE11_', 'TRANG', 'Apple', 128),
('SP1000000031', 'IPHONE11', 'Iphone 11 128GB Màu Vàng', 14990000, 3, 'IPHONE11_', 'VANG', 'Apple', 64),
('SP1000000032', 'IPHONE11', 'Iphone 11 128GB Màu Đen', 14990000, 3, 'IPHONE11_', 'DEN', 'Apple', 128),
('SP1000000033', 'IPHONE11', 'Iphone 11 256GB Màu Đỏ', 14990000, 3, 'IPHONE11_', 'DO', 'Apple', 256);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `STT` int(11) NOT NULL,
  `IDKhachHang` varchar(12) DEFAULT NULL,
  `MatKhau` varchar(100) DEFAULT NULL,
  `TinhTrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`STT`, `IDKhachHang`, `MatKhau`, `TinhTrang`) VALUES
(1, 'KH1000000002', '8f4b4f8d10b7606b8f65f50259a4b3ac', 1),
(2, 'KH1000000003', '54e193277215c92570bc9659bd48ff40', 1),
(3, 'KH1000000004', '202cb962ac59075b964b07152d234b70', 1),
(4, 'KH1000000005', '59ec5983e698b882c1b306bf2ed88759', 1),
(5, 'KH1000000006', '59ec5983e698b882c1b306bf2ed88759', 1),
(6, 'KH1000000007', '202cb962ac59075b964b07152d234b70', 1),
(7, 'KH1000000008', 'c4ca4238a0b923820dcc509a6f75849b', 1),
(8, 'KH1000000009', 'f3e3daad00d4547a60a7d9e485426156', 1),
(9, 'KH1000000010', '202cb962ac59075b964b07152d234b70', 1),
(10, 'KH1000000011', 'e36a688e4838c0f47f7eca369706d43b', 1),
(11, 'KH1000000012', '87cfe89dd6e63c2ae0a206cecc4c3b64', 1),
(12, 'KH1000000013', '8b82bd2ef31d867db598fba5014e1762', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donghoadon`
--
ALTER TABLE `donghoadon`
  ADD PRIMARY KEY (`IDDongHoaDon`),
  ADD KEY `IDHoaDon` (`IDHoaDon`),
  ADD KEY `IDSanPham` (`IDSanPham`);

--
-- Chỉ mục cho bảng `dongsanpham`
--
ALTER TABLE `dongsanpham`
  ADD PRIMARY KEY (`IDDongSanPham`),
  ADD KEY `IDNhomSanPham` (`IDNhomSanPham`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `IDKhachHang` (`IDKhachHang`),
  ADD KEY `IDSanPham` (`IDSanPham`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`IDHoaDon`),
  ADD KEY `IDKhachHang` (`IDKhachHang`),
  ADD KEY `IDPTThanhToan` (`IDPTThanhToan`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`IDKhachHang`);

--
-- Chỉ mục cho bảng `mausanpham`
--
ALTER TABLE `mausanpham`
  ADD PRIMARY KEY (`IDMau`);

--
-- Chỉ mục cho bảng `nhomsanpham`
--
ALTER TABLE `nhomsanpham`
  ADD PRIMARY KEY (`IDNhomSanPham`);

--
-- Chỉ mục cho bảng `phuongthucthanhtoan`
--
ALTER TABLE `phuongthucthanhtoan`
  ADD PRIMARY KEY (`IDPTThanhToan`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IDSanPham`),
  ADD KEY `IDMau` (`IDMau`),
  ADD KEY `IDDongSanPham` (`IDDongSanPham`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `IDKhachHang` (`IDKhachHang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donghoadon`
--
ALTER TABLE `donghoadon`
  ADD CONSTRAINT `donghoadon_ibfk_1` FOREIGN KEY (`IDHoaDon`) REFERENCES `hoadon` (`IDHoaDon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donghoadon_ibfk_2` FOREIGN KEY (`IDSanPham`) REFERENCES `sanpham` (`IDSanPham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dongsanpham`
--
ALTER TABLE `dongsanpham`
  ADD CONSTRAINT `dongsanpham_ibfk_1` FOREIGN KEY (`IDNhomSanPham`) REFERENCES `nhomsanpham` (`IDNhomSanPham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`IDSanPham`) REFERENCES `sanpham` (`IDSanPham`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`IDKhachHang`) REFERENCES `khachhang` (`IDKhachHang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`IDKhachHang`) REFERENCES `khachhang` (`IDKhachHang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`IDMau`) REFERENCES `mausanpham` (`IDMau`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`IDDongSanPham`) REFERENCES `dongsanpham` (`IDDongSanPham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `taikhoan_ibfk_1` FOREIGN KEY (`IDKhachHang`) REFERENCES `khachhang` (`IDKhachHang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
