-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2020 lúc 07:41 AM
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
('APPLEWATCHSE40', 'Apple Watch SE 40mm', 'IDNSP1000004'),
('APPLEWATCHSE44', 'Apple Watch SE 44mm', 'IDNSP1000004'),
('APPLEWATCHSERI6THEP', 'Apple Watch Series 6 Thép', 'IDNSP1000004'),
('DAYXACANDROID', 'Dây Xạc Andorid ', 'IDNSP1000003'),
('DAYXACAPPLE', 'Dây Xạc Apple', 'IDNSP1000003'),
('DELLLATITUDEE7470', 'Dell Latitude E7470', 'IDNSP1000002'),
('DONGHONAMCITIZEN', 'Đồng Hồ Nam Citizen', 'IDNSP1000005'),
('IPAD', 'IPad', 'IDNSP1000006'),
('IPADPRO', 'Ipad Pro', 'IDNSP1000006'),
('IPHONE11', 'IPhone 11', 'IDNSP1000001'),
('IPHONE12MINI', 'Iphone 12 Mini', 'IDNSP1000001'),
('IPHONE7PLUS', 'Iphone 7 Plus', 'IDNSP1000001'),
('LAPTOPASUSSTRIX', 'Asus Strix', 'IDNSP1000002'),
('LAPTOPASUSVIVOBOOK', 'Asus ViVoBook', 'IDNSP1000002'),
('LAPTOPASUSZENBOOKDUO', 'Asus Zenbook Duo', 'IDNSP1000002'),
('MACBOOKPRO', 'Macbook Pro', 'IDNSP1000002'),
('PINXACDUPHONGREMAX', 'Pin Xạc Dự Phòng Remax', 'IDNSP1000003'),
('PINXACDUPHONGSAMSUNG', 'Pin Xạc Dự Phòng SamSung', 'IDNSP1000003'),
('PINXACDUPHONGSAMSUNGEB', 'Pin Xạc Dự Phòng SamSung EB', 'IDNSP1000003'),
('REALME7PRO', 'Realme 7 Pro', 'IDNSP1000001'),
('SAMSUNGGALAXY', 'Samsung Galaxy', 'IDNSP1000001'),
('SAMSUNGGALAXYTABLET', 'Samsung Galaxy Tab', 'IDNSP1000006'),
('SAMSUNGGALAXYTABS7', 'Samsung Galaxy Tab S7', 'IDNSP1000006'),
('TAINGHECODAY', 'Tai Nghe Có Dây', 'IDNSP1000003'),
('TAINGHEKHONGDAY', 'Tai Nghe Không Dây', 'IDNSP1000003'),
('XIAOMIMI', 'Xiaomi Mi', 'IDNSP1000001'),
('XIAOMIMI10TPRO5G', 'Xiaomi Mi 10T Pro 5GB', 'IDNSP1000001'),
('XIAOMINOTE8', 'Xiaomi Note 8', 'IDNSP1000001'),
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

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`STT`, `IDSanPham`, `IDKhachHang`, `SoLuong`) VALUES
(34, 'SP1000000015', 'KH1000000002', 1),
(35, 'SP1000000025', 'KH1000000002', 1),
(36, 'SP1000000019', 'KH1000000002', 6),
(37, 'SP1000000014', 'KH1000000002', 1),
(38, 'SP1000000001', 'KH1000000002', 1),
(39, 'SP1000000008', 'KH1000000002', 1),
(40, 'SP1000000008', 'KH1000000002', 1),
(41, 'SP1000000009', 'KH1000000002', 1),
(42, 'SP1000000008', 'KH1000000002', 1),
(43, 'SP1000000020', 'KH1000000002', 1),
(44, 'SP1000000025', 'KH1000000015', 4),
(45, 'SP1000000006', 'KH1000000015', 1),
(46, 'SP1000000008', 'KH1000000015', 3),
(47, 'SP1000000020', 'KH1000000015', 6),
(48, 'SP1000000034', 'KH1000000015', 4),
(49, 'SP1000000043', 'KH1000000015', 1),
(50, 'SP1000000050', 'KH1000000015', 4),
(51, 'SP1000000039', 'KH1000000015', 5),
(52, 'SP1000000058', 'KH1000000015', 4),
(53, 'SP1000000054', 'KH1000000015', 1),
(54, 'SP1000000042', 'KH1000000015', 11);

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
('KH1000000013', 'Chu', 'Hoài Lễ', 'chuhoaile@gmail.com', '0982625212', 'Quang Nam', 'Nữ', '1999-11-11'),
('KH1000000014', 'Lee', 'Rock', 'rock@gmail.com', '0916412351', 'Quang Nam', 'Nam', '1988-11-11'),
('KH1000000015', 'Anh', 'Khánh', 'khanh@gmail.com', '0972632538', 'Quang Nam', 'Nam', '1998-11-11');

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
('HONG', 'Hồng', '#F96B65'),
('TIM', 'Tím', '#A349A3'),
('TRANG', 'Trắng', '#FEFEFE'),
('VANG', 'Vàng', '#FFFF00'),
('XAM', 'Xám', '#D9D9D9'),
('XANHDUONG', 'Xanh Dương', '#2455AF'),
('XANHLA', 'Xanh Lá', '#33A56E');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomsanpham`
--

CREATE TABLE `nhomsanpham` (
  `IDNhomSanPham` varchar(12) NOT NULL,
  `TenNhom` varchar(100) DEFAULT NULL,
  `Icon` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhomsanpham`
--

INSERT INTO `nhomsanpham` (`IDNhomSanPham`, `TenNhom`, `Icon`, `type`) VALUES
('IDNSP1000001', 'Điện Thoại', '<i class=\"fas fa-mobile-alt\"></i>', 'dien-thoai'),
('IDNSP1000002', 'Laptop', '<i class=\"fas fa-laptop\"></i>', 'lap-top'),
('IDNSP1000003', 'Phụ Kiện', '<i class=\"fas fa-headphones\"></i>', 'phu-kien'),
('IDNSP1000004', 'Đồng Hồ Thông Minh', '<img src=\"https://img.icons8.com/wired/30/000000/apple-watch-apps.png\"/>', 'dong-ho-thong-minh'),
('IDNSP1000005', 'Đồng Hồ Thời Trang', '<img src=\"https://img.icons8.com/wired/30/000000/apple-watch-apps.png\"/>', 'dong-ho-thoi-trang'),
('IDNSP1000006', 'Tablet', '<i class=\"fas fa-tablet-alt\"></i>', 'tablet');

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
  `BoNho` int(10) NOT NULL,
  `Loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`IDSanPham`, `IDDongSanPham`, `TenSanPham`, `DonGia`, `Giam`, `AnhSanPham`, `IDMau`, `ThuongHieu`, `BoNho`, `Loai`) VALUES
('SP1000000001', 'IPHONE7PLUS', 'Iphone 7 Plus 32GB Màu Đen', 7240000, 5, 'IPHONE7PLUS_', 'DEN', 'Apple', 32, 0),
('SP1000000002', 'IPHONE11', 'Iphone 11 64GB Màu Đen', 13990000, 3, 'IPHONE11_', 'DEN', 'Apple', 64, 0),
('SP1000000006', 'IPHONE7PLUS', 'Iphone 7 Plus 32GB Màu Đỏ', 7740000, 5, 'IPHONE7PLUS_', 'DO', 'Apple', 32, 0),
('SP1000000007', 'IPHONE7PLUS', 'Iphone 7 Plus 32GB Màu Vàng', 7440000, 5, 'IPHONE7PLUS_', 'VANG', 'Apple', 32, 0),
('SP1000000008', 'IPHONE7PLUS', 'Iphone 7 Plus 32GB Màu Bạc', 7440000, 5, 'IPHONE7PLUS_', 'BAC', 'Apple', 32, 0),
('SP1000000009', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Bạc', 8140000, 5, 'IPHONE7PLUS_', 'BAC', 'Apple', 128, 0),
('SP1000000010', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Vàng', 8190000, 5, 'IPHONE7PLUS_', 'VANG', 'Apple', 128, 0),
('SP1000000011', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Vàng', 8190000, 5, 'IPHONE7PLUS_', 'VANG', 'Apple', 128, 0),
('SP1000000012', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Đỏ', 8190000, 5, 'IPHONE7PLUS_', 'DO', 'Apple', 128, 0),
('SP1000000013', 'IPHONE7PLUS', 'Iphone 7 Plus 128GB Màu Đen', 8190000, 5, 'IPHONE7PLUS_', 'DEN', 'Apple', 128, 0),
('SP1000000014', 'IPHONE7PLUS', 'Iphone 7 Plus 256GB Màu Vàng', 8990000, 5, 'IPHONE7PLUS_', 'VANG', 'Apple', 256, 0),
('SP1000000015', 'IPHONE7PLUS', 'Iphone 7 Plus 256GB Màu Đỏ', 8990000, 5, 'IPHONE7PLUS_', 'DO', 'Apple', 256, 0),
('SP1000000016', 'IPHONE7PLUS', 'Iphone 7 Plus 256GB Màu Đen', 8990000, 5, 'IPHONE7PLUS_', 'DEN', 'Apple', 256, 0),
('SP1000000017', 'IPHONE7PLUS', 'Iphone 7 Plus 256GB Màu Bạc', 8990000, 5, 'IPHONE7PLUS_', 'BAC', 'Apple', 256, 0),
('SP1000000018', 'IPAD', 'iPad 10.2 2020 32GB 4G Wifi ', 11990000, 4, 'IPAD10_2_20204GWIFI_', 'HONG', 'Apple', 32, 0),
('SP1000000019', 'IPAD', 'iPad 10.2 2020 32GB 4G Wifi ', 11990000, 4, 'IPAD10_2_20204GWIFI_', 'DEN', 'Apple', 32, 0),
('SP1000000020', 'IPAD', 'iPad 10.2 2020 32GB 4G Wifi ', 11990000, 4, 'IPAD10_2_20204GWIFI_', 'TRANG', 'Apple', 32, 0),
('SP1000000022', 'IPHONE11', 'Iphone 11 64GB Màu Đỏ', 14990000, 3, 'IPHONE11_', 'DO', 'Apple', 64, 0),
('SP1000000023', 'IPHONE11', 'Iphone 11 64GB Màu Tím', 14990000, 3, 'IPHONE11_', 'TIM', 'Apple', 64, 0),
('SP1000000024', 'IPHONE11', 'Iphone 11 64GB Màu Trắng', 14990000, 3, 'IPHONE11_', 'TRANG', 'Apple', 64, 0),
('SP1000000025', 'IPHONE11', 'Iphone 11 64GB Màu Vàng', 14990000, 3, 'IPHONE11_', 'VANG', 'Apple', 64, 0),
('SP1000000026', 'IPHONE11', 'Iphone 11 64GB Màu Đen', 14990000, 3, 'IPHONE11_', 'DEN', 'Apple', 64, 0),
('SP1000000028', 'IPHONE11', 'Iphone 11 128GB Màu Đỏ', 14990000, 3, 'IPHONE11_', 'DO', 'Apple', 128, 0),
('SP1000000029', 'IPHONE11', 'Iphone 11 128GB Màu Tím', 14990000, 3, 'IPHONE11_', 'TIM', 'Apple', 128, 0),
('SP1000000030', 'IPHONE11', 'Iphone 11 128GB Màu Trắng', 14990000, 3, 'IPHONE11_', 'TRANG', 'Apple', 128, 0),
('SP1000000031', 'IPHONE11', 'Iphone 11 128GB Màu Vàng', 14990000, 3, 'IPHONE11_', 'VANG', 'Apple', 64, 0),
('SP1000000032', 'IPHONE11', 'Iphone 11 128GB Màu Đen', 14990000, 3, 'IPHONE11_', 'DEN', 'Apple', 128, 0),
('SP1000000033', 'IPHONE11', 'Iphone 11 256GB Màu Đỏ', 14990000, 3, 'IPHONE11_', 'DO', 'Apple', 256, 0),
('SP1000000034', 'LAPTOPASUSVIVOBOOK', 'Laptop Asus VivoBook  i5 1035G1/8GB/512GB/Win10 (EK052T)', 16200000, 3, 'LAPTOPASUSVIVOBOOKX409JA_', 'TRANG', 'Asus', 512, 0),
('SP1000000035', 'LAPTOPASUSSTRIX', 'Laptop Asus Strix G512 IAL001T i7 10750H/8GB/512G SSD/15.6 FHD/WIN10', 16200000, 3, 'LAPTOPASUSSTRIX_', 'DEN', 'Asus', 512, 0),
('SP1000000036', 'LAPTOPASUSZENBOOKDUO', 'Laptop Asus ZenBook Duo UX481FL BM048T i5 10210U/8GB/512GB SSD/WIN10', 31200000, 3, 'LAPTOPASUSZENBOOKDUO_', 'BAC', 'Asus', 512, 0),
('SP1000000037', 'MACBOOKPRO', 'MacBook Pro 16\" 2019 Touch Bar 2.3GHz Core i9 1TB Bạc', 70200000, 5, 'MACBOOKPRO_', 'BAC', 'Apple', 1024, 0),
('SP1000000038', 'MACBOOKPRO', 'MacBook Pro 16\" 2019 Touch Bar 2.3GHz Core i9 1TB Xám', 70200000, 5, 'MACBOOKPRO_', 'XAM', 'Apple', 1024, 0),
('SP1000000039', 'DELLLATITUDEE7470', 'Dell Latitude E7470', 8200000, 5, 'DELLLATITUDEE7470_', 'DEN', 'Apple', 128, 0),
('SP1000000040', 'PINXACDUPHONGSAMSUNG', 'Dell Latitude E7470', 299000, 5, 'PINXACDUPHONGSAMSUNG_', 'BAC', 'Samsung', 10000, 0),
('SP1000000041', 'PINXACDUPHONGSAMSUNGEB', 'Pin Sạc Dự Phòng Kiêm Sạc Không Dây Samsung EB-U1200 10.000 mAh Chính Hãng', 890000, 5, 'PINXACDUPHONGSAMSUNGEB_', 'XAM', 'Samsung', 10000, 0),
('SP1000000042', 'PINXACDUPHONGREMAX', 'Pin Sạc Dự Phòng Remax 5.000mAh (hình thú)', 340000, 5, 'PINXACDUPHONGREMAX_', 'DO', 'Remax', 5000, 0),
('SP1000000043', 'APPLEWATCHSE40', 'Apple Watch SE 44mm GPS Nhôm VN/A', 7440000, 5, 'APPLEWATCHSE40_', 'DEN', 'Apple', 0, 0),
('SP1000000044', 'APPLEWATCHSE40', 'Apple Watch SE 404mm GPS Nhôm VN/A', 7540000, 5, 'APPLEWATCHSE40_', 'HONG', 'Apple', 0, 0),
('SP1000000045', 'APPLEWATCHSE40', 'Apple Watch SE 40mm GPS Nhôm VN/A', 7440000, 5, 'APPLEWATCHSE40_', 'TRANG', 'Apple', 0, 0),
('SP1000000046', 'APPLEWATCHSE44', 'Apple Watch SE 44mm GPS Nhôm VN/A', 7940000, 5, 'APPLEWATCHSE40_', 'HONG', 'Apple', 0, 0),
('SP1000000047', 'APPLEWATCHSE44', 'Apple Watch SE 44mm GPS Nhôm VN/A', 7940000, 5, 'APPLEWATCHSE40_', 'TRANG', 'Apple', 0, 0),
('SP1000000048', 'APPLEWATCHSE44', 'Apple Watch SE 44mm GPS Nhôm VN/A', 7940000, 5, 'APPLEWATCHSE40_', 'DEN', 'Apple', 0, 0),
('SP1000000049', 'APPLEWATCHSERI6THEP', 'Apple Watch Series 6 Thép 44mm LTE Milanese', 20000000, 5, 'APPLEWATCHSERI6THEP44_', 'BAC', 'Apple', 0, 0),
('SP1000000050', 'APPLEWATCHSERI6THEP', 'Apple Watch Series 6 Thép 44mm LTE Milanese', 20000000, 5, 'APPLEWATCHSERI6THEP44_', 'VANG', 'Apple', 0, 0),
('SP1000000051', 'APPLEWATCHSERI6THEP', 'Apple Watch Series 6 Thép 44mm LTE Milanese', 20000000, 5, 'APPLEWATCHSERI6THEP44_', 'TRANG', 'Apple', 0, 0),
('SP1000000052', 'DONGHONAMCITIZEN', 'Đồng hồ Nam Citizen BI5000-87L', 2220000, 5, 'DONGHONAMCITIZEN_', 'BAC', 'Citizen', 0, 0),
('SP1000000054', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 64GB Màu Đen', 19800000, 3, 'IPHONE12MINI_', 'DEN', 'Apple', 64, 3),
('SP1000000055', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 64GB Màu Trắng', 19800000, 3, 'IPHONE12MINI_', 'TRANG', 'Apple', 64, 0),
('SP1000000056', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 64GB Màu Xanh', 19900000, 3, 'IPHONE12MINI_', 'XANHDUONG', 'Apple', 64, 0),
('SP1000000058', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 64GB Màu Đỏ', 19900000, 3, 'IPHONE12MINI_', 'DO', 'Apple', 64, 0),
('SP1000000059', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 128GB Màu Trắng', 19800000, 3, 'IPHONE12MINI_', 'TRANG', 'Apple', 128, 0),
('SP1000000060', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 128GB Màu Xanh', 20700000, 3, 'IPHONE12MINI_', 'XANHDUONG', 'Apple', 128, 0),
('SP1000000062', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 128GB Màu Xanh', 20900000, 3, 'IPHONE12MINI_', 'DO', 'Apple', 128, 0),
('SP1000000063', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 128GB Màu Đen', 20900000, 3, 'IPHONE12MINI_', 'DEN', 'Apple', 128, 0),
('SP1000000064', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 256GB Màu Trắng', 23800000, 3, 'IPHONE12MINI_', 'TRANG', 'Apple', 256, 0),
('SP1000000065', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 256GB Màu Xanh', 23700000, 3, 'IPHONE12MINI_', 'XANHDUONG', 'Apple', 256, 0),
('SP1000000067', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 256GB Màu Xanh', 23900000, 3, 'IPHONE12MINI_', 'DO', 'Apple', 256, 0),
('SP1000000068', 'IPHONE12MINI', 'Điện thoại iPhone 12 mini 256GB Màu Đen', 23900000, 3, 'IPHONE12MINI_', 'DEN', 'Apple', 256, 0),
('SP1000000069', 'REALME7PRO', 'Realme 7 Pro 8GB/128GB Chính Hãng Màu Xanh Lá', 7590000, 5, 'REALME7PRO_', 'XANHDUONG', 'Realme', 128, 3),
('SP1000000070', 'REALME7PRO', 'Realme 7 Pro 8GB/128GB Chính Hãng Màu Xanh Lá', 7590000, 5, 'REALME7PRO_', 'XANHLA', 'Realme', 128, 0),
('SP1000000071', 'XIAOMIMI10TPRO5G', 'Xiaomi Mi 10T Pro 5G Chính Hãng Màu Trắng', 11300000, 4, 'XIAOMIMI10TPRO5G_', 'TRANG', 'Xiaomi', 128, 3),
('SP1000000072', 'XIAOMIMI10TPRO5G', 'Xiaomi Mi 10T Pro 5G Chính Hãng Màu Đen', 11300000, 4, 'XIAOMIMI10TPRO5G_', 'DEN', 'Xiaomi', 128, 3),
('SP1000000073', 'XIAOMINOTE8', 'Xiaomi Redmi Note 8 Ram 4GB/64GB Màu Đen', 3490000, 2, 'XIAOMINOTE8_', 'DEN', 'Xiaomi', 64, 3),
('SP1000000074', 'XIAOMINOTE8', 'Xiaomi Redmi Note 8 Ram 4GB/64GB Màu Tím', 3490000, 2, 'XIAOMINOTE8_', 'TIM', 'Xiaomi', 64, 0),
('SP1000000075', 'XIAOMINOTE8', 'Xiaomi Redmi Note 8 Ram 4GB/64GB Màu Trắng', 3490000, 2, 'XIAOMINOTE8_', 'TRANG', 'Xiaomi', 64, 0),
('SP1000000076', 'XIAOMINOTE8', 'Xiaomi Redmi Note 8 Ram 4GB/64GB Màu Xanh Dương', 3490000, 2, 'XIAOMINOTE8_', 'XANHDUONG', 'Xiaomi', 64, 0),
('SP1000000077', 'SAMSUNGGALAXYTABS7', 'Samsung Galaxy Tab S7 Chính Hãng Màu Vàng', 16900000, 2, 'SAMSUNGGALAXYTABS7_', 'VANG', 'Samsung', 128, 3),
('SP1000000078', 'SAMSUNGGALAXYTABS7', 'Samsung Galaxy Tab S7 Chính Hãng Màu Đen', 16900000, 2, 'SAMSUNGGALAXYTABS7_', 'DEN', 'Samsung', 128, 0);

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
(12, 'KH1000000013', '8b82bd2ef31d867db598fba5014e1762', 1),
(13, 'KH1000000014', '202cb962ac59075b964b07152d234b70', 1),
(14, 'KH1000000015', '46c9a651ec34e9118b64e72ae13b067f', 1);

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
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
