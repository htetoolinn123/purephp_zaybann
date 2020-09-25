-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 24, 2020 at 03:00 PM
-- Server version: 10.3.20-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `htetoolinn_zaybann`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `logo` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `logo`, `name`, `create_at`, `update_at`) VALUES
(11, 'image/brand/samsung.jpg', 'SAMSAUNG', '2020-03-13 15:10:15', '0000-00-00 00:00:00'),
(12, 'image/brand/oppo.jpg', 'OPPO', '2020-03-13 15:10:27', '0000-00-00 00:00:00'),
(13, 'image/brand/Edited-Huawei-Logo.png', 'Huawei', '2020-03-13 15:10:50', '0000-00-00 00:00:00'),
(14, 'image/brand/maxresdefault.jpg', 'ARCER', '2020-03-13 15:11:29', '0000-00-00 00:00:00'),
(15, 'image/brand/iNfgXSefxEyhisXTzF2GcJ.jpg', 'DELL', '2020-03-13 15:11:48', '0000-00-00 00:00:00'),
(16, 'image/brand/images.png', 'HP', '2020-03-13 15:11:59', '0000-00-00 00:00:00'),
(17, 'image/brand/lg.png', 'LG', '2020-03-13 15:24:29', '0000-00-00 00:00:00'),
(18, 'image/brand/pana.jpg', 'PANASONIC', '2020-03-13 15:25:44', '0000-00-00 00:00:00'),
(19, 'image/brand/mi.jpg', 'MI', '2020-03-13 15:27:05', '0000-00-00 00:00:00'),
(20, 'image/brand/Dng.jpg', 'D&G', '2020-03-13 16:20:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `photo`, `name`, `create_at`, `update_at`) VALUES
(27, 'image/category/776323.jpg', 'Electronice', '2020-03-13 14:49:24', '0000-00-00 00:00:00'),
(28, 'image/category/837409.jpg', 'Men wears', '2020-03-13 14:52:56', '0000-00-00 00:00:00'),
(29, 'image/category/784718.jpg', 'Women Wears', '2020-03-13 14:56:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(100) NOT NULL,
  `codeno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `codeno`, `name`, `photo`, `price`, `discount`, `description`, `brand_id`, `subcategory_id`, `create_at`, `update_at`) VALUES
(37, 'ZB_293369', 'OPPO F7', 'image/item/806775.jpg', '300000', '295000', '<p>This is OPPO</p>', 12, 13, '2020-03-13 15:28:23', '0000-00-00 00:00:00'),
(38, 'ZB_631283', 'OPPO A11', 'image/item/557482.jpg', '400000', '499000', '<p>This is OPPO</p>', 12, 13, '2020-03-13 15:30:34', '0000-00-00 00:00:00'),
(39, 'ZB_576149', 'SAMSAUNG S10', 'image/item/874742.jpg', '300000', '', '<p>This is samsaung</p>', 11, 13, '2020-03-13 15:31:55', '0000-00-00 00:00:00'),
(40, 'ZB_165117', 'SAMSAUNG S11', 'image/item/367668.jpg', '400000', '386000', '<p>This is Samsaung</p>', 11, 13, '2020-03-13 15:33:22', '0000-00-00 00:00:00'),
(41, 'ZB_873930', 'SAMSAUNG S7', 'image/item/839347.jpg', '200000', '', '<p>This is Samsaung</p>', 11, 13, '2020-03-13 15:36:04', '0000-00-00 00:00:00'),
(42, 'ZB_297992', 'HUAWEI Nova 4', 'image/item/702308.png', '300000', '299000', '<p>This is huawei</p>', 13, 13, '2020-03-13 15:42:46', '0000-00-00 00:00:00'),
(43, 'ZB_947135', 'HUAWEI Y7 Pro', 'image/item/361475.jpg', '400000', '390000', '<p>very good</p>', 13, 13, '2020-03-13 15:43:59', '0000-00-00 00:00:00'),
(44, 'ZB_102075', 'ACER Nitro 7', 'image/item/336674.jpg', '600000', '590000', '', 14, 12, '2020-03-13 15:53:45', '0000-00-00 00:00:00'),
(45, 'ZB_703503', 'ACER Aspire 5', 'image/item/820972.jpg', '600000', '', '', 14, 12, '2020-03-13 15:55:29', '0000-00-00 00:00:00'),
(46, 'ZB_189276', 'DELL Inspiron', 'image/item/981443.jpg', '599956', '', '', 15, 12, '2020-03-13 15:57:05', '0000-00-00 00:00:00'),
(47, 'ZB_789415', 'HP Pivilison', 'image/item/419813.png', '650000', '640000', '', 16, 12, '2020-03-13 15:58:49', '0000-00-00 00:00:00'),
(48, 'ZB_151552', 'Hitari', 'image/item/193636.jpeg', '80000', '75000', '', 18, 15, '2020-03-13 16:01:53', '0000-00-00 00:00:00'),
(49, 'ZB_885120', 'HitaChi', 'image/item/754530.jpg', '49985', '', '', 18, 15, '2020-03-13 16:02:31', '0000-00-00 00:00:00'),
(50, 'ZB_494640', 'PANASONIC', 'image/item/805882.jpg', '50000', '', '', 18, 15, '2020-03-13 16:03:20', '0000-00-00 00:00:00'),
(51, 'ZB_827876', 'MI', 'image/item/934747.jpg', '400000', '', '', 19, 14, '2020-03-13 16:06:56', '0000-00-00 00:00:00'),
(52, 'ZB_263872', 'LG', 'image/item/120238.jpg', '500000', '', '', 17, 14, '2020-03-13 16:07:37', '0000-00-00 00:00:00'),
(53, 'ZB_620699', 'PANASONIC', 'image/item/807798.jpg', '600000', '', '', 18, 14, '2020-03-13 16:08:26', '0000-00-00 00:00:00'),
(54, 'ZB_875055', 'D&G', 'image/item/262569.jpeg', '30000', '', '', 20, 16, '2020-03-13 16:21:41', '0000-00-00 00:00:00'),
(55, 'ZB_804043', 'D&G', 'image/item/123949.jpg', '35000', '', '', 20, 16, '2020-03-13 16:22:23', '0000-00-00 00:00:00'),
(56, 'ZB_264388', 'D&G', 'image/item/146606.jpeg', '50000', '', '', 20, 18, '2020-03-13 16:23:16', '0000-00-00 00:00:00'),
(57, 'ZB_187682', 'D&G', 'image/item/887237.jpg', '5500', '', '', 20, 18, '2020-03-13 16:23:57', '0000-00-00 00:00:00'),
(58, 'ZB_401001', 'D&G', 'image/item/486246.jpg', '30000', '', '', 20, 17, '2020-03-13 16:26:14', '0000-00-00 00:00:00'),
(59, 'ZB_914287', 'D&G', 'image/item/144209.jpg', '30000', '29900', '', 20, 17, '2020-03-13 16:27:10', '0000-00-00 00:00:00'),
(60, 'ZB_814762', 'D&G', 'image/item/353023.jpeg', '80000', '', '', 20, 20, '2020-03-13 16:28:46', '0000-00-00 00:00:00'),
(62, 'ZB_784763', 'D&G', 'image/item/972626.jpg', '90000', '', '', 20, 19, '2020-03-13 16:31:17', '0000-00-00 00:00:00'),
(63, 'ZB_538066', 'D&G', 'image/item/989462.jpeg', '80000', '', '', 20, 19, '2020-03-13 16:32:03', '0000-00-00 00:00:00'),
(64, 'ZB_678709', 'D&G', 'image/item/640886.jpg', '80000', '', '', 20, 21, '2020-03-13 16:36:29', '0000-00-00 00:00:00'),
(65, 'ZB_397227', 'D&G', 'image/item/543912.jpg', '50000', '', '', 20, 21, '2020-03-13 16:37:04', '0000-00-00 00:00:00'),
(66, 'ZB_330980', 'D&G', 'image/item/410079.jpg', '100000', '', '', 20, 22, '2020-03-13 16:37:47', '0000-00-00 00:00:00'),
(67, 'ZB_341005', 'D&G', 'image/item/558756.jpeg', '120000', '110000', '', 20, 22, '2020-03-13 16:38:52', '0000-00-00 00:00:00'),
(68, 'ZB_710862', 'D&G', 'image/item/304696.jpg', '80000', '', '', 20, 20, '2020-03-13 16:39:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `vouncherno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `vouncherno`, `qty`, `item_id`, `create_at`, `update_at`) VALUES
(141, '1584074850', 2, 48, '2020-03-13 16:47:30', '0000-00-00 00:00:00'),
(142, '1584074850', 1, 49, '2020-03-13 16:47:31', '0000-00-00 00:00:00'),
(143, '1584074850', 1, 50, '2020-03-13 16:47:31', '0000-00-00 00:00:00'),
(144, '1584074931', 1, 44, '2020-03-13 16:48:51', '0000-00-00 00:00:00'),
(145, '1584074931', 1, 45, '2020-03-13 16:48:51', '0000-00-00 00:00:00'),
(146, '1584074931', 1, 46, '2020-03-13 16:48:51', '0000-00-00 00:00:00'),
(147, '1584074931', 1, 61, '2020-03-13 16:48:51', '0000-00-00 00:00:00'),
(148, '1584074931', 1, 47, '2020-03-13 16:48:51', '0000-00-00 00:00:00'),
(149, '1584075016', 4, 51, '2020-03-13 16:50:16', '0000-00-00 00:00:00'),
(150, '1584075016', 1, 52, '2020-03-13 16:50:16', '0000-00-00 00:00:00'),
(151, '1584075016', 1, 53, '2020-03-13 16:50:16', '0000-00-00 00:00:00'),
(152, '1584075043', 4, 62, '2020-03-13 16:50:43', '0000-00-00 00:00:00'),
(153, '1584075043', 2, 63, '2020-03-13 16:50:43', '0000-00-00 00:00:00'),
(154, '1584075043', 1, 55, '2020-03-13 16:50:45', '0000-00-00 00:00:00'),
(155, '1584075043', 1, 54, '2020-03-13 16:50:45', '0000-00-00 00:00:00'),
(156, '1584075046', 4, 62, '2020-03-13 16:50:46', '0000-00-00 00:00:00'),
(157, '1584075046', 2, 63, '2020-03-13 16:50:46', '0000-00-00 00:00:00'),
(158, '1584075046', 1, 55, '2020-03-13 16:50:46', '0000-00-00 00:00:00'),
(159, '1584075046', 1, 54, '2020-03-13 16:50:46', '0000-00-00 00:00:00'),
(160, '1584075137', 22, 66, '2020-03-13 16:52:17', '0000-00-00 00:00:00'),
(161, '1584075197', 4, 37, '2020-03-13 16:53:17', '0000-00-00 00:00:00'),
(162, '1584075197', 2, 38, '2020-03-13 16:53:17', '0000-00-00 00:00:00'),
(163, '1584075197', 2, 40, '2020-03-13 16:53:17', '0000-00-00 00:00:00'),
(164, '1584075197', 8, 43, '2020-03-13 16:53:18', '0000-00-00 00:00:00'),
(165, '1584075241', 7, 62, '2020-03-13 16:54:01', '0000-00-00 00:00:00'),
(166, '1584075256', 2, 51, '2020-03-13 16:54:16', '0000-00-00 00:00:00'),
(167, '1584075256', 7, 52, '2020-03-13 16:54:17', '0000-00-00 00:00:00'),
(168, '1584075279', 27, 67, '2020-03-13 16:54:39', '0000-00-00 00:00:00'),
(169, '1584075346', 13, 63, '2020-03-13 16:55:46', '0000-00-00 00:00:00'),
(170, '1584165938', 1, 48, '2020-03-13 18:05:38', '0000-00-00 00:00:00'),
(171, '1584165938', 1, 49, '2020-03-13 18:05:38', '0000-00-00 00:00:00'),
(172, '1587617899', 1, 67, '2020-04-23 16:58:19', '0000-00-00 00:00:00'),
(173, '1596222673', 1, 68, '2020-08-01 07:11:13', '0000-00-00 00:00:00'),
(174, '1596222673', 1, 67, '2020-08-01 07:11:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `vouncherno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `orderdate` date NOT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `vouncherno`, `orderdate`, `total`, `note`, `status`, `user_id`, `create_at`, `update_at`) VALUES
(75, '1584074850', '2020-03-13', '249985', 'Thank', 'Order', 2, '2020-03-13 16:47:32', '0000-00-00 00:00:00'),
(76, '1584074931', '2020-04-13', '2519956', 'Thank', 'Order', 1, '2020-03-13 16:51:12', '0000-00-00 00:00:00'),
(77, '1584075016', '2020-05-13', '2700000', 'gg', 'Order', 8, '2020-03-13 16:51:20', '0000-00-00 00:00:00'),
(78, '1584075043', '2020-06-13', '585000', 'well', 'Order', 8, '2020-03-13 16:51:26', '0000-00-00 00:00:00'),
(79, '1584075046', '2020-07-13', '585000', 'well', 'Order', 8, '2020-03-13 16:51:34', '0000-00-00 00:00:00'),
(80, '1584075137', '2020-08-13', '2200000', '', 'Order', 8, '2020-03-13 16:52:39', '0000-00-00 00:00:00'),
(81, '1584075197', '2020-09-13', '6070000', '', 'Order', 8, '2020-03-13 16:53:31', '0000-00-00 00:00:00'),
(82, '1584075241', '2020-10-13', '630000', '', 'Order', 8, '2020-03-13 16:55:02', '0000-00-00 00:00:00'),
(83, '1584075256', '2020-11-13', '4300000', '', 'Order', 8, '2020-03-13 16:55:11', '0000-00-00 00:00:00'),
(84, '1584075279', '2020-12-13', '2970000', '', 'Order', 8, '2020-03-13 16:55:18', '0000-00-00 00:00:00'),
(85, '1584075346', '2020-01-14', '1040000', '', 'Order', 8, '2020-03-13 16:56:05', '0000-00-00 00:00:00'),
(86, '1584165938', '2020-03-14', '124985', 'thank', 'Order', 2, '2020-03-13 18:05:38', '0000-00-00 00:00:00'),
(87, '1587617899', '2020-04-23', '110000', '', 'Order', 9, '2020-04-23 16:58:19', '0000-00-00 00:00:00'),
(88, '1596222673', '2020-08-01', '190000', '', 'Order', 11, '2020-08-01 07:11:13', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Admin', '2020-02-10 08:10:46', '0000-00-00 00:00:00'),
(2, 'Customer', '2020-02-10 08:10:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `category_id`, `create_at`, `update_at`) VALUES
(12, 'Laptops', 27, '2020-03-13 14:50:19', '0000-00-00 00:00:00'),
(13, 'Phone', 27, '2020-03-13 14:50:38', '0000-00-00 00:00:00'),
(14, 'Television', 27, '2020-03-13 14:51:36', '0000-00-00 00:00:00'),
(15, 'Fan', 27, '2020-03-13 14:52:21', '0000-00-00 00:00:00'),
(16, 'T-Shirt', 28, '2020-03-13 14:53:46', '0000-00-00 00:00:00'),
(17, 'Sport-Shirt', 28, '2020-03-13 14:55:01', '0000-00-00 00:00:00'),
(18, 'Trouser', 28, '2020-03-13 14:55:15', '0000-00-00 00:00:00'),
(19, 'Shoes', 28, '2020-03-13 14:55:42', '0000-00-00 00:00:00'),
(20, 'Shoes', 29, '2020-03-13 14:57:10', '0000-00-00 00:00:00'),
(21, 'Skirts', 29, '2020-03-13 14:57:35', '0000-00-00 00:00:00'),
(22, 'Wallet', 29, '2020-03-13 14:58:20', '0000-00-00 00:00:00'),
(23, 'lip Balm', 30, '2020-03-13 16:11:18', '0000-00-00 00:00:00'),
(24, 'MakeUp', 30, '2020-03-13 15:03:28', '0000-00-00 00:00:00'),
(25, 'Nail Polish', 30, '2020-03-13 15:04:43', '0000-00-00 00:00:00'),
(26, 'Roll-on', 30, '2020-03-13 15:08:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `phone`, `role_id`, `create_at`, `update_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456789', 'ygn', 91234567, 1, '2020-02-12 17:09:57', '0000-00-00 00:00:00'),
(2, 'Customer', 'customer@gmail.com', '123456789', 'ygn', 912345678, 2, '2020-03-13 16:46:32', '0000-00-00 00:00:00'),
(8, 'Htet Oo Linn', 'htetoolinn@gmail.com', '123456789', 'ygn', 912345789, 2, '2020-03-13 16:49:50', '0000-00-00 00:00:00'),
(9, 'aa', 'adfads@gmail.com', '000', 'afdsafdsa', 0, 2, '2020-04-23 16:57:49', '0000-00-00 00:00:00'),
(10, 'basai', 'basai@gmail.com', '11111111', 'yangon', 956677877, 2, '2020-05-29 11:01:05', '0000-00-00 00:00:00'),
(11, 'adf', 'adf@email.com', 'asdf', 'adffd', 0, 2, '2020-08-01 07:10:19', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
