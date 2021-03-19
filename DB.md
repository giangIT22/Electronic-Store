-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th3 19, 2021 lúc 09:50 AM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `electronic shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `is_home` smallint(1) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `user_id`, `is_home`, `image`, `created_at`, `updated_at`) VALUES
(24, 'Smart Phone', 'Smart phone', 5, 1, '', '2020-09-30 16:34:31', '2020-09-30 16:34:31'),
(25, 'Sạc dự phòng', 'Sạc dự phòng', 5, 1, '', '2020-09-30 10:13:37', '2020-09-30 10:13:37'),
(26, 'Tai nghe', 'Tai nghe', 5, 1, '', '2020-09-30 10:13:40', '2020-09-30 10:13:40'),
(27, 'Ốp điện thoại', 'Ốp điện thoại', 5, 1, '', '2020-09-30 08:35:51', '2020-09-30 08:35:51'),
(28, 'Đồng hồ', 'Đòng hồ', 5, 1, '', '2020-09-30 10:13:41', '2020-09-30 10:13:41'),
(29, 'Smart TV', 'Smart TV', 5, 1, '', '2020-10-14 15:21:17', '2020-10-14 15:21:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `customer_name` varchar(100) DEFAULT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_phone` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `code`, `created_at`, `customer_name`, `customer_email`, `customer_phone`, `updated_at`) VALUES
(1, '12214', '2021-01-05 09:14:00', 'giang aa', 'giang22.fit@gmail.com', '0944837662', NULL),
(2, '21798', '2021-01-18 18:38:45', 'giang aa', 'giang22.fit@gmail.com', '0944837662', NULL),
(3, '7483', '2021-03-19 08:44:37', 'long honagf', 'giang22.fit@gmail.com', '0944837662', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_qty`) VALUES
(1, 1, 26, 'Iphone 12', 30000000, 10),
(2, 2, 26, 'Iphone 12', 30000000, 12),
(3, 3, 27, 'Iphone12 Promax', 44000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(20) DEFAULT NULL,
  `sku` varchar(32) DEFAULT NULL,
  `price_sale` int(20) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `sku`, `price_sale`, `description`, `user_id`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(12, 'SamSung note 10', 15000000, 'q123', 13000000, 'SamSung note 10', 5, 24, 'note_10_plus_xanh.jpg', '2020-10-16 17:06:52', '2020-10-16 17:06:52'),
(13, 'Iphone 11', 20000000, 'q123', 18000000, 'Iphone 11', 5, 24, 'big.png', '2020-10-16 17:28:27', '2020-10-16 17:28:27'),
(14, 'Iphone 11 Promax', 25000000, 'q123', 20000000, 'Iphone 11 Promax', 5, 24, 'ip11_ss3.png', '2020-10-16 17:32:55', '2020-10-16 17:32:55'),
(15, 'LG smart TV 4k 43inch', 15000000, 'q123', 13000000, 'LG smart TV 4k 43inch', 5, 29, 'ss1.jpg', '2020-10-17 14:11:32', '2020-10-17 14:11:32'),
(16, 'SamSung smart TV OLED', 17000000, 'q123', 13000000, 'SamSung smart TV OLED', 5, 29, 'ss2.jpg', '2020-10-17 14:11:49', '2020-10-17 14:11:49'),
(17, 'SONY Android TV 4k 50inch', 15000000, 'q123', 13000000, 'SONY Android TV 4k 50inch', 5, 29, 'big.png', '2020-10-17 14:12:02', '2020-10-17 14:12:02'),
(18, 'Airpords pro', 6000000, 'q123', 4000000, 'Airpords pro', 5, 26, 'ip11_ss2.png', '2020-10-17 14:12:10', '2020-10-17 14:12:10'),
(19, 'Galaxy burds', 3000000, 'q123', 2800000, 'Galaxy burds', 5, 26, 'ip11_ss4.png', '2020-10-17 14:12:28', '2020-10-17 14:12:28'),
(20, 'Watch active 2', 6000000, 'q123', NULL, 'Watch active 2', 5, 28, 'big.png', '2020-10-17 14:12:35', '2020-10-17 14:12:35'),
(21, 'Apple watch series 6', 15000000, 'q123', 13000000, 'Apple watch series 6', 5, 28, 'ss4.jpg', '2020-10-17 14:12:54', '2020-10-17 14:12:54'),
(22, 'Sạc dự phòng ENERGIER', 400000, 'q123', NULL, 'Sạc dự phòng ENERGIER', 5, 25, 'ss3.jpg', '2020-10-17 14:12:45', '2020-10-17 14:12:45'),
(23, 'Sạc dự phòng POLYMER', 480000, 'q123', NULL, 'Sạc dự phòng POLYMER', 5, 25, 'ss2.jpg', '2020-10-17 14:13:01', '2020-10-17 14:13:01'),
(24, 'Ốp lưng ESR Mimic', 500000, 'q123', NULL, 'Ốp lưng ESR Mimic', 5, 27, 'ss1.jpg', '2020-10-17 14:13:07', '2020-10-17 14:13:07'),
(26, 'Iphone 12', 30000000, 'q12345', NULL, 'Iphone 12', 5, 24, 'ss3.jpg', '2020-10-17 14:13:14', '2020-10-17 14:13:14'),
(27, 'Iphone12 Promax', 44000000, 'q123', NULL, 'Iphone12 Promax', 5, 24, 'ss4.jpg', '2020-10-17 14:13:20', '2020-10-17 14:13:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(13, 'ss1.jpg', 12, '2020-10-16 17:24:52', '2020-10-17 00:24:52'),
(14, 'ss2.jpg', 12, '2020-10-16 17:24:57', '2020-10-17 00:24:57'),
(15, 'ss3.jpg', 12, '2020-10-16 17:25:02', '2020-10-17 00:25:02'),
(16, 'ss4.jpg', 12, '2020-10-16 17:25:06', '2020-10-17 00:25:06'),
(19, 'big.png', 13, '2020-10-16 17:31:07', '2020-10-17 00:31:07'),
(20, 'ip11_ss2.png', 13, '2020-10-16 17:31:12', '2020-10-17 00:31:12'),
(21, 'ip11_ss3.png', 13, '2020-10-16 17:31:19', '2020-10-17 00:31:19'),
(22, 'ip11_ss4.png', 13, '2020-10-16 17:31:22', '2020-10-17 00:31:22'),
(23, 'ip11_ss3.png', 14, '2020-10-16 17:32:31', '2020-10-17 00:32:31'),
(24, 'big.png', 14, '2020-10-16 17:32:37', '2020-10-17 00:32:37'),
(25, 'ip11_ss2.png', 14, '2020-10-16 17:32:41', '2020-10-17 00:32:41'),
(26, 'ip11_ss4.png', 14, '2020-10-16 17:32:45', '2020-10-17 00:32:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `phone`, `age`, `address`, `gender`, `created_at`, `updated_at`) VALUES
(5, 'Nguyễn Trường Giang', 'giang22.fit@gmail.com', '60d3ed7339b72dfe345e642ed25cbc7a', '0944837882', 20, 'Hà Nội', 1, '2020-09-30 08:30:20', '2020-09-30 08:30:20'),
(6, 'Ngô Thị Anh', 'admin1@gmail.com', '60d3ed7339b72dfe345e642ed25cbc7a', '0944837882', 23, 'Hà Nội', 2, '2020-09-30 08:31:37', '2020-09-30 08:31:37'),
(7, 'Nguyễn Thị Thu Hiền', 'admin2@gmail.com', '60d3ed7339b72dfe345e642ed25cbc7a', '0944837882', 21, 'Bắc Giang', 2, '2020-09-30 08:32:23', '2020-09-30 08:32:23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categories_users` (`user_id`);

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
  ADD KEY `fk_orderDetail_order` (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_users` (`user_id`),
  ADD KEY `fk_products_categories` (`category_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `fk_categories_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_orderDetail_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `fk_products_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
