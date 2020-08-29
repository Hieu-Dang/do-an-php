-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 25, 2020 lúc 05:22 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_tmdt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `content`, `amount`) VALUES
(1, 'Samsung Galaxy Note 10', 'note10.jpg', 10990000, '	                        		                        	Điện thoại Samsung Galaxy Note 10 – Trải nghiệm máy tính trong chính smartphone của bạn\r\nVới hàng loạt những siêu phẩm từng tung ra thị trường, điện thoại Samsung lại một lần nữa làm cộng đồng người yêu công nghệ phải đứng ngồi không yên khi trình làng bộ đôi Samsung Galaxy Note 10 và Note 10 Plus mang đến những trải nghiệm tuyệt đỉnh như máy tính ngay từ chính chiếc smartphone của bạn, giúp bạn có thể làm mọi thứ chỉ bằng một chiếc điện thoại.', 8),
(2, 'Samsung Galaxy S9+', 's9plus.jpg', 6990000, 'Chiếc S9 Plus có thể nói là chiếc điện thoại tốt nhất mà Samsung có thể đáp ứng. Nó lấy mọi thứ mà chiếc Galaxy S9 có và ném thêm vào dung lượng RAM và một chiếc màn 6.2 inch AMOLED đẹp tuyệt đỉnh với tỉ lệ 18.5:9.\r\n\r\nViệc thêm chiếc tele camera của máy Note 8 vào cùng với camera khẩu độ kép góc rộng của máy S9 cho người dùng một chiếc máy Galaxy S đầu tiên với camera kép. Nhà thiết kế cũng đã dời miếng cảm ứng vân tay từ vị trí bên cạnh camera đến vị trí bên dưới  -  một thay đổi tốt đã được rấ', 8),
(4, 'Samsung Galaxy S9', 's9.jpg', 5490000, 'Màn hình\r\nCông nghệ màn hình:	Super AMOLED\r\nĐộ phân giải:	2K+ (1440 x 2960 Pixels)\r\nMàn hình rộng:	5.8\"\r\nMặt kính cảm ứng:	Kính cường lực Corning Gorilla Glass 5\r\nCamera sau\r\nĐộ phân giải:	12 MP\r\nQuay phim:	Quay phim siêu chậm 960 fps, Quay phim FullHD 1080p@240fps, Quay phim 4K 2160p@60fps\r\nĐèn Flash:	Có\r\nChụp ảnh nâng cao:	Phơi sáng (Exposure), Xoá phông, Ban đêm (Night Mode), Lấy nét theo pha (PDAF), Điều chỉnh khẩu độ, Quay siêu chậm (Super Slow Motion), Tự động lấy nét (AF), Chạm lấy nét, H', 8),
(5, 'Samsung Galaxy S10 Lite\r\n\r\n', 's10lite.jpg', 14990000, 'Màn hình:Super AMOLED, 6.7\", Full HD+\r\nHệ điều hành:Android 10\r\nCamera sau:Chính 48 MP & Phụ 12 MP, 5 MP\r\nCamera trước:32 MP\r\nCPU:Snapdragon 855 8 nhân\r\nRAM:8 GB\r\nBộ nhớ trong:128 GB\r\nThẻ nhớ:MicroSD, hỗ trợ tối đa 1 TB\r\nThẻ SIM:2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G SIM VNMB Siêu sim (5GB/ngày)\r\nDung lượng pin:4500 mAh, có sạc nhanh\r\n', 7),
(6, 'Samsung Galaxy S20+', 's20+.jpg', 23990000, ' Màn hình:Dynamic AMOLED 2X, 6.7\", Quad HD+ (2K+)\r\n Hệ điều hành:Android 10\r\n Camera sau:Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n Camera trước:10 MP\r\n CPU:Exynos 990 8 nhân\r\n RAM:8 GB\r\n Bộ nhớ trong:128 GB\r\n Thẻ nhớ:MicroSD, hỗ trợ tối đa 1 TB\r\n Thẻ SIM:2 Nano SIM HOẶC 1 Nano SIM + 1 eSIM, Hỗ trợ 4G HOTSIM VNMB Siêu sim (5GB/ngày)\r\n Dung lượng pin:4500 mAh, có sạc nhanh\r\n', 9),
(7, 'Samsung Galaxy S20', 's20.jpg', 18490000, 'Màn hình:Dynamic AMOLED 2X, 6.2\", Quad HD+ (2K+)\r\nHệ điều hành:Android 10\r\nCamera sau:Chính 12 MP & Phụ 64 MP, 12 MP\r\nCamera trước:10 MP\r\nCPU:Exynos 990 8 nhân\r\nRAM:8 GB\r\nBộ nhớ trong:128 GB\r\nThẻ nhớ:MicroSD, hỗ trợ tối đa 1 TB\r\nThẻ SIM:2 Nano SIM HOẶC 1 Nano SIM + 1 eSIM, Hỗ trợ 4GHOTSIM VNMB Sieu sim (5GB/ngày)\r\nDung lượng pin:4000 mAh, có sạc nhanh\r\n', 9),
(8, 'Samsung Galaxy A11\r\n', 'a11.jpg', 3390000, 'Màn hình:PLS TFT LCD, 6.4\", HD+\r\nHệ điều hành:Android 10\r\nCamera sau:Chính 13 MP & Phụ 5 MP, 2 MP\r\nCamera trước:8 MP\r\nCPU:Snapdragon 450 8 nhân\r\nRAM:3 GB\r\nBộ nhớ trong:32 GB\r\nThẻ nhớ:MicroSD, hỗ trợ tối đa 512 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G SIM VNMB Siêu sim (5GB/ngày)\r\nDung lượng pin:4000 mAh, có sạc nhanh\r\n', 9),
(10, 'Samsung Galaxy A51', 'a51.jpg', 7990000, 'Màn hình:Super AMOLED, 6.5\", Full HD+\r\nHệ điều hành:Android 10\r\nCamera sau:Chính 48 MP & Phụ 12 MP, 5 MP, 5 MP\r\nCamera trước:32 MP\r\nCPU:Exynos 9611 8 nhân\r\nRAM:6 GB\r\nBộ nhớ trong:128 GB\r\nThẻ nhớ:MicroSD, hỗ trợ tối đa 512 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G SIM VNMB Siêu sim (5GB/ngày)\r\nDung lượng pin:4000 mAh, có sạc nhanh\r\n', 9);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
