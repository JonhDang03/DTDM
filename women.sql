-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 13, 2021 lúc 05:31 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `women`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int(30) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(5) NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id_account`, `user_name`, `password`, `level`, `ho_ten`, `dien_thoai`, `gioi_tinh`, `dia_chi`) VALUES
(10, 'kha', '202cb962ac59075b964b07152d234b70', 3, 'kha', '01214578412', 'Nam', 'kha'),
(11, 'cuong', '123', 1, 'Lại Cường', '123', 'nam', ''),
(12, 'cuong1', '202cb962ac59075b964b07152d234b70', 0, '', '0123', 'nam', 'qẻ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(50) NOT NULL,
  `name_banner` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_banner` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id_banner`, `name_banner`, `image_banner`) VALUES
(3, '', 'banner2.png'),
(4, '', 'banner3.png'),
(5, '', 'banner4.png'),
(6, '', 'banner5.png'),
(7, '', '433ca0bf58683e11ee0106401a3c5d7c.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id_hd` int(50) NOT NULL,
  `ngay_dat_hang` datetime NOT NULL DEFAULT current_timestamp(),
  `dien_thoai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(50) NOT NULL,
  `id_product` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logo_website`
--

CREATE TABLE `logo_website` (
  `id_logo` int(50) NOT NULL,
  `name_logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image_logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(50) NOT NULL,
  `name_menu` varchar(100) NOT NULL,
  `id_type` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `id_type`) VALUES
(1, 'Son Dưỡng', 1),
(2, 'Son Kem', 1),
(3, 'Son Thỏi', 1),
(4, 'Phấn Má Hồng', 2),
(5, 'Phấn Nền', 2),
(6, 'Phấn Phủ', 2),
(7, 'Kem Dưỡng Ẩm', 2),
(8, 'Tẩy Trang', 2),
(13, 'Bấm Mi', 3),
(14, 'Mút Trang Điểm - Bông Phấn', 3),
(15, 'Cọ Trang Điểm', 3),
(16, 'Kềm - Nhíp', 3),
(25, 'acvbb', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(10) NOT NULL,
  `name_product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `describe_product` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price_product` int(10) NOT NULL,
  `image_product` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_nhap` datetime NOT NULL DEFAULT current_timestamp(),
  `xuatxu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tinh_trang` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_menu` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `slug`, `describe_product`, `price_product`, `image_product`, `ngay_nhap`, `xuatxu`, `noi_dung`, `tinh_trang`, `id_menu`) VALUES
(95, 'Son Đỏ', NULL, '- Thương hiệu: Black Rouge.\r\n- Xuất xứ: Hàn Quốc\r\nChất son mịn lì, hạn chế tối đa khô môi.\r\nGiữ màu lâu đến 8 tiếng. Độ kháng nước cao, không bị trôi khi ăn uống.', 150, 'uploads/son1.jpg', '2021-01-03 15:12:02', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Son đỏ</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 3),
(100, 'Son Hồng Cánh Sen', NULL, '- Thương hiệu: Black Rouge.\r\n- Xuất xứ: Hàn Quốc\r\nChất son mịn lì, hạn chế tối đa khô môi.\r\nGiữ màu lâu đến 8 tiếng. Độ kháng nước cao, không bị trôi khi ăn uống.', 120, 'uploads/son3.jpg', '2021-01-10 10:52:45', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Son Hồng C&aacute;nh Sen</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 3),
(101, 'Bộ Son 7 màu', NULL, '- Thương hiệu: Black Rouge.\r\n- Xuất xứ: Hàn Quốc\r\nChất son mịn lì, hạn chế tối đa khô môi.\r\nGiữ màu lâu đến 8 tiếng. Độ kháng nước cao, không bị trôi khi ăn uống.', 130, 'uploads/son4.jpg', '2021-01-10 11:02:11', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Bộ Son 7 m&agrave;u</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 2),
(102, 'Son Kem 077', NULL, '- Thương hiệu: Black Rouge.\r\n- Xuất xứ: Hàn Quốc\r\nChất son mịn lì, hạn chế tối đa khô môi.\r\nGiữ màu lâu đến 8 tiếng. Độ kháng nước cao, không bị trôi khi ăn uống.', 100, 'uploads/son5.jpg', '2021-01-10 11:07:40', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Son Kem 077</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 2),
(103, 'Phấn Nền 056', NULL, '- Thương hiệu: Black Rouge.\r\n- Xuất xứ: Hàn Quốc\r\nMịn màng làn da.\r\nKhó trôi, thích ứng với mọi loại da.', 110, 'uploads/phan1.jpg', '2021-01-10 11:10:09', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Phấn Nền 056</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nMịn m&agrave;ng l&agrave;n da.<br />\r\nKh&oacute; tr&ocirc;i, th&iacute;ch ứng với mọi loại da.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u phấn chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 5),
(104, 'Phấn Phủ 087', NULL, '- Thương hiệu: Black Rouge.\r\n- Xuất xứ: Hàn Quốc Mịn màng làn da. Khó trôi, thích ứng với mọi loại da.', 89, 'uploads/phan2.jpg', '2021-01-10 14:48:53', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Phấn Phủ 087</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nMịn m&agrave;ng l&agrave;n da.<br />\r\nKh&oacute; tr&ocirc;i, th&iacute;ch ứng với mọi loại da.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u phấn chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 6),
(106, 'Kem Dưỡng 098', NULL, '- Thương hiệu: Black Rouge. - Xuất xứ: Hàn Quốc Mịn màng làn da. Khó trôi, thích ứng với mọi loại da.', 199, 'uploads/phan4.jpg', '2021-01-10 14:51:10', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Phấn Nền 056</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nMịn m&agrave;ng l&agrave;n da.<br />\r\nKh&oacute; tr&ocirc;i, th&iacute;ch ứng với mọi loại da.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u phấn chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 7),
(107, 'Bộ Cọ Trang Điểm 145', NULL, '- Thương hiệu: Black Rouge.\r\n- Xuất xứ: Hàn Quốc mềm mịn, hạn chế tối đa làm xây xước da.', 50, 'uploads/dungcu8.jpg', '2021-01-10 16:10:47', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Bộ Cọ Trang Điểm 145</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 15),
(108, 'Cọ Chải Lông Mày 134', NULL, '- Thương hiệu: Black Rouge. - Xuất xứ: Hàn Quốc mềm mịn, hạn chế tối đa làm xây xước da.', 78, 'uploads/dungcu1.jpg', '2021-01-10 16:12:33', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Cọ Chải L&ocirc;ng M&agrave;y 134</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 15),
(109, 'Cọ Đánh Má 056', NULL, '- Thương hiệu: Black Rouge. - Xuất xứ: Hàn Quốc mềm mịn, hạn chế tối đa làm xây xước da.', 56, 'uploads/dungcu6.jpg', '2021-01-10 16:13:46', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Cọ Đ&aacute;nh M&aacute; 056</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 15),
(110, 'Cọ Lông Mi 086', NULL, '- Thương hiệu: Black Rouge. - Xuất xứ: Hàn Quốc mềm mịn, hạn chế tối đa làm xây xước da.', 25, 'uploads/dungcu5.jpg', '2021-01-10 16:15:17', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Cọ L&ocirc;ng Mi 086</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 15),
(111, 'Bấm Mi 135', NULL, '- Thương hiệu: Black Rouge. - Xuất xứ: Hàn Quốc mềm mịn, hạn chế tối đa làm xây xước da.', 52, 'uploads/dungcu3.jpg', '2021-01-10 16:16:23', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Bấm Mi 135</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 13),
(112, 'Hộp Đựng 099', NULL, '- Thương hiệu: Black Rouge. - Xuất xứ: Hàn Quốc chắc chắn', 250, 'uploads/dungcu9.jpg', '2021-01-10 16:17:54', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Hộp Đựng 099</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 16),
(113, 'Nhíp 088', NULL, '- Thương hiệu: Black Rouge. - Xuất xứ: Hàn Quốc', 20, 'uploads/dungcu4.jpg', '2021-01-10 16:18:52', 'Hàn Quốc', '<h2 style=\"text-align: center;\"><strong>Nh&iacute;p 088</strong></h2>\r\n\r\n<p><strong>Thương hiệu</strong>: Black Rouge.<br />\r\n<strong>Xuất xứ</strong>: H&agrave;n Quốc<br />\r\nChất son mịn l&igrave;, hạn chế tối đa kh&ocirc; m&ocirc;i.<br />\r\nGiữ m&agrave;u l&acirc;u đến 8 tiếng. Độ kh&aacute;ng nước cao, kh&ocirc;ng bị tr&ocirc;i khi ăn uống.<br />\r\nBộ sưu tập son kem H&agrave;n Quốc Air Fit Velvet thời thượng h&ograve;a c&ugrave;ng xu hướng trang điểm ấn<br />\r\ntượng đang cực k&igrave; thịnh h&agrave;nh trong thời gian gần đ&acirc;y. Sản phẩm son cao cấp đến từ thương hiệu Black Rouge H&agrave;n Quốc<br />\r\nmang đến cho c&aacute;c c&ocirc; g&aacute;i n&eacute;t cuốn h&uacute;t kh&oacute; cưỡng. (Hiện tại son c&oacute; 7 sắc m&agrave;u theo c&aacute;c phong c&aacute;ch kh&aacute;c nhau cho bạn lựa chọn từ hồng nữ t&iacute;nh đến đỏ rực rỡ)<br />\r\n<br />\r\n<strong>Hiệu quả:</strong><br />\r\nM&agrave;u son l&ecirc;n m&ocirc;i chuẩn từng centimet.<br />\r\nĐộ b&aacute;m d&iacute;nh cao, kh&aacute;ng nước vượt trội. M&agrave;u sắc giữ tr&ecirc;n m&ocirc;i đến 8 tiếng. Sau khi ăn uống chỉ tr&ocirc;i<br />\r\ntầm 20% nếu đ&aacute;nh to&agrave;n bộ m&ocirc;i, v&agrave; tr&ocirc;i khoảng 30% nếu đ&aacute;nh trong l&ograve;ng m&ocirc;i.<br />\r\nChe phủ vết v&acirc;n m&ocirc;i v&agrave; v&ugrave;ng da bong tr&oacute;c do kh&ocirc;. Bạn gần như kh&ocirc;ng thể thấy được c&aacute;c khuyết điểm tr&ecirc;n m&ocirc;i.<br />\r\nChất son kem H&agrave;n Quốc đặc trưng: mịn mướt kh&ocirc;ng g&acirc;y v&oacute;n cục.<br />\r\nSản phẩm 2 trong 1, c&oacute; thể sử dụng son thay thế phấn m&aacute; hồng</p>\r\n', 'Còn hàng', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_menu`
--

CREATE TABLE `type_menu` (
  `id_type` int(50) NOT NULL,
  `name_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type_menu`
--

INSERT INTO `type_menu` (`id_type`, `name_type`) VALUES
(1, 'SON MÔI'),
(2, 'PHẤN TRANG ĐIỂM'),
(3, 'DỤNG CỤ TRANG ĐIỂM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `diachi` varchar(150) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `gmail` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `password`, `hoten`, `phone`, `diachi`, `ngaysinh`, `gioitinh`, `gmail`) VALUES
(2, 'cuong1', '202cb962ac59075b964b07152d234b70', 'add', 976392553, '', '0000-00-00', 0, 'a@gmail.com'),
(3, 'cuong123', '202cb962ac59075b964b07152d234b70', 'Cường', 1234, '', '0000-00-00', 0, 'a@gmail.com'),
(5, 'cuong', '202cb962ac59075b964b07152d234b70', 'Lại Cường', 1234, 'X1 DH', '0000-00-00', 0, '123@gmail.c');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `logo_website`
--
ALTER TABLE `logo_website`
  ADD PRIMARY KEY (`id_logo`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_type` (`id_type`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_type` (`id_menu`);

--
-- Chỉ mục cho bảng `type_menu`
--
ALTER TABLE `type_menu`
  ADD PRIMARY KEY (`id_type`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id_hd` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `logo_website`
--
ALTER TABLE `logo_website`
  MODIFY `id_logo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT cho bảng `type_menu`
--
ALTER TABLE `type_menu`
  MODIFY `id_type` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_menu` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
