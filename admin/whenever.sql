-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 19, 2024 lúc 11:15 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `whenever`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `email`, `address`, `order_date`, `status`) VALUES
(1, 'Nguyễn Văn A', 'nguyenvana@example.com', '123 Đường ABC, Quận 1, TP.HCM', '2024-11-20 04:16:31', 'Đã Giao'),
(2, 'Trần Thị B', 'tranthib@example.com', '456 Đường XYZ, Quận 3, TP.HCM', '2024-11-20 04:16:31', 'Chờ Xử Lý'),
(3, 'Lê Minh C', 'leminhc@example.com', '789 Đường DEF, Quận 7, TP.HCM', '2024-11-20 04:16:31', 'Đã Giao'),
(4, 'Phan Hải D', 'phanhaid@example.com', '101 Đường GHI, Quận 10, TP.HCM', '2024-11-20 04:16:31', 'Chờ Xử Lý');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_products`
--

CREATE TABLE `order_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `description`, `image`, `created_at`) VALUES
(6, 'áo thun đem', 230.00, 'đẹp tuyệt vời', '1732053010_1b7587be-2ac2-4199-ade7-f56b902781b0_c9b5a0039d274a2995712af6dfe1c392_master.webp', '2024-11-19 21:50:10'),
(7, 'WHENEVER” SUPERSTAR ZIP-UP HOODIE / BLACK', 799.00, '“WHENEVER” SUPERSTAR ZIP-UP HOODIE\r\n\r\nCHẤT LIỆU : NỈ BÔNG\r\n\r\nDETAILS : ZIP 2 CHIỀU\r\n\r\n \r\n\r\nCÓ 2 TÚI ẨN BÊN TRONG RẤT TIỆN LỢI ĐỂ ĐỰNG ĐIỆN THOẠI, VÍ, VÀ CÁC VẬT DỤNG CÁ NHÂN KHÁC. ĐÂY LÀ MỘT CHI TIẾT MỚI MÀ WHENEVER ATELIER MUỐN GIỚI THIỆU ĐẾN CÁC BẠN.', '1732053991_5.1.webp', '2024-11-19 22:06:31'),
(8, '“WHENEVER” CIRCLE EMBROIDERED LOGO T-SHIRT / WHITE', 480000.00, 'Định lượng: 250gsm \r\nForm: Boxy \r\n4 size S M L XL \r\nSẢN PHẨM ĐÃ QUA XỬ LÝ VẢI - KHUYẾN KHÍCH KHÁCH HÀNG MUA VỀ SỬ DỤNG LUÔN.', '1732054089_e4bfbbdb-58e3-40c9-9620-45ab60bed07f_a0e5db7ee90e4375899b7dafcbce6e7b_master.webp', '2024-11-19 22:08:09'),
(9, '“WHENEVER” TANK TOP / BLACK', 280000.00, 'Detail: Thêu thân trước và thân sau', '1732054234_3.1.jpg', '2024-11-19 22:10:34'),
(10, '“WHENEVER” CIRCLE EMBROIDERED LOGO T-SHIRT / GREY', 500000.00, 'SẢN PHẨM ĐÃ QUA XỬ LÝ VẢI - KHUYẾN KHÍCH KHÁCH HÀNG MUA VỀ SỬ DỤNG LUÔN.', '1732054467_2.webp', '2024-11-19 22:14:27');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
