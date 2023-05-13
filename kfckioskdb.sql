-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 06:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `kfckioskdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categorieId` int(12) NOT NULL,
  `categorieName` varchar(255) NOT NULL,
  `categorieDesc` text NOT NULL,
  `categorieCreateDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `categories`

INSERT INTO `categories` (`categorieId`, `categorieName`, `categorieDesc`, `categorieCreateDate`) VALUES
(21, 'BURGERS', 'choose your favourite Special Burgers from KFC.', '2023-02-28 21:56:01'),
(22, 'HOT & CRISPY CHICKEN', 'Indulge into mouth-watering taste of HOT & CRISPY CHICKEN mania range, perfect answer to all your food cravings', '2023-02-28 21:57:24'),
(23, 'HOT DRUMLETS', 'A delight for HOT DRUMLETS lovers! Choose from our wide range of delicious HOT DRUMLETS, it is softer and tastier', '2023-02-28 21:58:11'),
(24, 'WRAPS & SUBMARINE', 'it is cheesy and tastier', '2023-02-28 21:59:21'),
(25, 'RICE', 'Special Biriyani for Rice lovers!', '2023-02-28 22:02:11'),
(26, 'SNACKS', 'Choose your snacks from the KFC menu.', '2023-02-28 22:03:22'),
(27, 'COMBOS', 'special combos are available', '2023-02-28 22:05:03'),
(28, 'ADD ONS', 'Perfect Add ons for you!', '2023-02-28 22:06:44'),
(29, 'BEVERAGE', 'wide range of beverages available at KFC', '2023-02-28 22:08:09'),
(30, 'PROMOTION', 'special promotion offers are available', '2023-02-28 22:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodId` int(12) NOT NULL,
  `foodName` varchar(255) NOT NULL,
  `foodPrice` int(12) NOT NULL,
  `foodDesc` text NOT NULL,
  `custom1` varchar(500) DEFAULT NULL,
  `custom2` varchar(500) DEFAULT NULL,
  `foodCategorieId` int(12) NOT NULL,
  `foodPubDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodId`, `foodName`, `foodPrice`, `foodDesc`, `custom1`, `custom2`, `foodCategorieId`, `foodPubDate`) VALUES
(113, 'Double Decker Burger', 1590, 'A hugely popular Double Decker Burger, with a deliciously tangy single cheese.', 'Extra Cheese', 'Medium Cheese', 21, '2023-02-28 22:14:58'),
(114, 'SNACKER + CHEESE', 510, 'The ever-popular SNACKER + CHEESE- loaded with extra cheese.', 'Extra Cheese', 'Medium Cheese', 21, '2023-02-28 22:17:34'),
(115, 'SNACKER', 430, 'special snacker', 'Extra Cheese', 'Medium Cheese', 21, '2023-02-28 22:20:05'),
(116, 'VEGIE BURGER + CHEESE', 860, 'Chunky vegie with crisp capsicum and cheese', 'Extra Cheese', 'Medium Spices', 21, '2023-02-28 22:22:23'),
(117, 'VEGIE BURGER', 780, 'special for VEGIE BURGER lovers!', 'Extra vegie', 'Medium vegie', 21, '2023-02-28 22:24:09'),
(118, 'Zinger Burger With Cheese', 1070, 'cheese loaded Zinger Burger With Cheese', 'Extra Cheese', 'Medium Cheese', 21, '2023-02-28 22:25:20'),
(119, 'Zinger Burger', 990, 'mouth watering Zinger Burger', 'Extra Cheese', 'Medium Cheese', 21, '2023-02-28 22:27:49'),
(120, 'GRAVY', 80, 'KFCspecial GRAVY', 'Extra Spicy', 'Medium Spicy', 28, '2023-02-28 22:30:58'),
(121, 'ONION SAMBOL', 180, 'KFC SPECIAL ONION SAMBOL', 'Extra lime & spicy', 'Medium lime & spicy', 28, '2023-02-28 22:32:22'),
(122, 'RICE PILLAF', 290, 'KFC SPECIAL RICE PILLAF', 'Extra Spicy', 'Medium Spicy', 28, '2023-02-28 22:33:42'),
(123, '7 UP ', 200, '500ML', 'Extra Cool', 'Medium Cool', 29, '2023-02-28 22:36:05'),
(124, 'PEPSI', 200, '500ML', 'Extra Cool', 'Medium Cool', 29, '2023-02-28 22:36:47'),
(125, 'MINERAL WATER', 90, '500ML', 'Extra Cool', 'Medium Cool', 29, '2023-02-28 22:37:47'),
(126, 'Double Decker Combo', 1900, 'SPECIAL Double Decker Combo', 'Extra Spicy', 'Medium Spicy', 27, '2023-02-28 22:38:55'),
(127, 'Twister COMBO', 1630, 'Special Twister COMBO', 'Extra Spicy', 'Medium Spicy', 27, '2023-02-28 22:39:50'),
(128, 'Zinger Burger COMBO', 1630, 'Special Zinger Burger COMBO', 'Extra Spicy', 'Medium Spicy', 27, '2023-02-28 22:40:34'),
(129, '1PC Chicken - CHOICE', 680, 'SPECIAL 1PC Chicken - CHOICE', 'Extra Spicy', 'Medium Spicy', 22, '2023-03-01 08:04:56'),
(130, '1PC Chicken', 580, 'SPECIAL 1PC Chicken', 'Extra Spicy', 'Medium Spicy', 22, '2023-03-01 08:05:50'),
(131, '2PC Chicken', 1060, 'SPECIAL 2PC Chicken', 'Extra Spicy', 'Medium Spicy', 22, '2023-03-01 08:06:51'),
(132, '4PC Chicken', 1990, 'SPECIAL 8PC Chicken', 'Extra Spicy', 'Medium Spicy', 22, '2023-03-01 08:07:38'),
(133, '8PC Chicken Bucket', 3880, 'SPECIAL 8PC Chicken', 'Extra Spicy', 'Medium Spicy', 22, '2023-03-01 08:08:52'),
(134, '12PC Chicken', 5650, 'SPECIAL 12PC Chicken', 'Extra Spicy', 'Medium Spicy', 22, '2023-03-01 08:09:58'),
(135, 'HOT DRUMLETS 3PCS', 490, 'SPECIAL HOT DRUMLETS 3PCS', 'Extra Crispy', 'Medium Crispy', 23, '2023-03-01 08:12:11'),
(136, 'HOT DRUMLETS 6PCS', 1090, 'SPECIAL HOT DRUMLETS 6PCS', 'Extra Crispy', 'Medium Crispy', 23, '2023-03-01 08:13:05'),
(137, 'HOT DRUMLETS 20PCS', 3490, 'SPECIAL HOT DRUMLETS 6PCS', 'Extra Crispy', 'Medium Crispy', 23, '2023-03-01 08:13:43'),
(138, 'KFC Double Down', 1490, 'Special KFC Double Down', 'Extra Spicy', 'Medium Spicy', 30, '2023-03-01 08:14:54'),
(139, 'KFC VALUE FAMILY COMBO', 3900, 'SPECIAL VALUE FAMILY COMBO', 'Extra Spicy', 'Medium Spicy', 30, '2023-03-01 08:15:50'),
(140, 'KFC BURIYANI - L', 700, 'SPECIAL KFC BURIYANI - L', 'Extra Spicy', 'Medium Spicy', 25, '2023-03-01 08:21:30'),
(141, 'KFC BURIYANI - R', 470, 'SPECIAL KFC BURIYANI - R', 'Extra Spicy', 'Medium Spicy', 25, '2023-03-01 08:22:19'),
(142, 'KFC SAWAN', 4690, 'KFC SPECIAL SAWAN', 'Extra Spicy', 'Medium Spicy', 25, '2023-03-01 08:23:03'),
(143, 'KFC SPICE RICE', 990, 'SPECIAL KFC SPICE RICE', 'Extra Spicy', 'Medium Spicy', 25, '2023-03-01 08:23:50'),
(144, 'CRISPY BITES 9PC', 940, 'KFC CRISPY BITES 9PC', 'Extra Spicy', 'Medium Spicy', 26, '2023-03-01 08:25:13'),
(145, 'CRISPY BITES 20PC', 1930, 'SPECIAL CRISPY BITES 20PC', 'Extra Crispy', 'Medium Crispy', 26, '2023-03-01 08:48:44'),
(146, 'CRISPY STRIPS 2PC', 630, 'SPECIAL CRISPY STRIPS 2PC', 'Extra Crispy', 'Medium Crispy', 26, '2023-03-01 08:49:30'),
(147, 'SUBMARINE REG.+ CHEESE', 730, 'SPECIAL SUBMARIN', 'Extra Cheese', 'Medium Cheese', 24, '2023-03-01 08:50:22'),
(148, 'SUBMARINE REGULAR', 650, 'SPECIAL SUBMARINE REGULAR', 'Extra Cheese', 'Medium Cheese', 24, '2023-03-01 08:51:13'),
(149, 'TWISTER + CHEESE', 1160, 'SPECIAL TWISTER + CHEESE', 'Extra Cheese', 'Medium Cheese', 24, '2023-03-01 08:51:59'),
(150, 'TWISTER', 1080, 'SPECIAL KFC TWISTER', 'Extra Cheese', 'Medium Cheese', 24, '2023-03-01 08:52:37');

-- --------------------------------------------------------

--
-- Table structure for table `k_user`
--

CREATE TABLE `k_user` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `k_user`
--

INSERT INTO `k_user` (`ID`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59),
(60),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75),
(76),
(77),
(78),
(79),
(80),
(81),
(82),
(83),
(84),
(85),
(86),
(87),
(88),
(89),
(90),
(91),
(92),
(93),
(94),
(95),
(96),
(97),
(98),
(99),
(100),
(101),
(102),
(103),
(104),
(105),
(106),
(107),
(108),
(109),
(110),
(111);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(21) NOT NULL,
  `orderId` int(21) NOT NULL,
  `foodId` int(21) NOT NULL,
  `customize` varchar(500) DEFAULT NULL,
  `itemQuantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `orderId`, `foodId`, `customize`, `itemQuantity`) VALUES
(37, 23, 1, NULL, 2),
(38, 23, 48, NULL, 1),
(39, 24, 1, NULL, 2),
(40, 24, 2, NULL, 2),
(41, 24, 14, NULL, 2),
(42, 25, 14, NULL, 2),
(43, 25, 15, NULL, 1),
(44, 25, 43, NULL, 2),
(45, 25, 45, NULL, 1),
(46, 26, 1, NULL, 2),
(47, 26, 2, NULL, 1),
(48, 27, 10, NULL, 1),
(49, 27, 38, NULL, 2),
(50, 27, 53, NULL, 4),
(51, 28, 1, NULL, 1),
(52, 28, 2, NULL, 1),
(53, 29, 1, NULL, 1),
(54, 29, 4, NULL, 1),
(55, 29, 38, NULL, 1),
(56, 30, 1, NULL, 1),
(57, 30, 48, NULL, 1),
(58, 31, 1, NULL, 1),
(59, 31, 3, NULL, 1),
(60, 32, 0, NULL, 2),
(61, 33, 1, NULL, 1),
(62, 33, 15, NULL, 1),
(63, 34, 14, NULL, 1),
(64, 34, 111, NULL, 1),
(65, 34, 10, NULL, 1),
(66, 34, 11, NULL, 1),
(67, 34, 3, NULL, 1),
(68, 34, 4, NULL, 1),
(69, 34, 2, NULL, 1),
(70, 34, 6, NULL, 1),
(71, 34, 7, NULL, 1),
(72, 34, 8, NULL, 1),
(73, 34, 5, NULL, 1),
(74, 34, 15, NULL, 1),
(75, 35, 111, NULL, 1),
(76, 36, 1, NULL, 1),
(77, 36, 111, NULL, 1),
(78, 36, 3, NULL, 1),
(79, 36, 2, NULL, 1),
(80, 37, 1, NULL, 1),
(81, 38, 15, NULL, 5),
(82, 38, 16, NULL, 4),
(83, 39, 111, NULL, 1),
(84, 40, 111, NULL, 1),
(85, 41, 15, NULL, 1),
(86, 41, 111, NULL, 2),
(87, 41, 2, NULL, 2),
(88, 42, 6, NULL, 1),
(89, 42, 111, NULL, 1),
(90, 42, 11, NULL, 1),
(91, 43, 111, '', 6),
(92, 44, 111, '', 1),
(93, 44, 10, '', 1),
(94, 44, 11, '', 1),
(95, 44, 12, '', 1),
(96, 44, 9, '', 1),
(97, 45, 1, '', 1),
(98, 45, 111, '', 1),
(99, 46, 1, '', 1),
(100, 46, 2, '', 1),
(101, 46, 111, '', 1),
(102, 47, 1, '', 1),
(103, 47, 9, '', 1),
(104, 47, 111, '', 1),
(105, 48, 111, '', 1),
(106, 49, 111, 'Extra Spices', 7),
(107, 50, 111, 'Medium Spices', 3),
(108, 51, 1, '', 1),
(109, 52, 2, '', 2),
(110, 52, 1, '', 1),
(111, 52, 23, '', 1),
(112, 52, 14, '', 1),
(113, 52, 16, '', 1),
(114, 52, 15, '', 1),
(115, 53, 23, '', 2),
(116, 53, 24, '', 1),
(117, 54, 23, '', 1),
(118, 54, 24, '', 1),
(119, 54, 22, '', 1),
(120, 55, 5, '', 1),
(121, 55, 111, 'Medium Spices', 1),
(122, 56, 112, 'Extra Cheese', 1),
(123, 57, 114, 'Extra Cheese', 1),
(124, 57, 119, 'Extra Cheese', 1),
(125, 57, 131, 'Extra Spicy', 1),
(126, 57, 147, 'Extra Cheese', 1),
(127, 57, 143, 'Extra Spicy', 1),
(128, 57, 123, 'Extra Cool', 1),
(129, 57, 125, 'Extra Cool', 1),
(130, 57, 139, 'Medium Spicy', 1),
(131, 58, 116, 'Extra Cheese', 1),
(132, 58, 149, 'Extra Cheese', 1),
(133, 58, 150, 'Extra Cheese', 1),
(134, 59, 137, 'Extra Crispy', 1),
(135, 60, 113, '', 1),
(136, 61, 130, 'Extra Spicy', 1),
(137, 61, 129, '', 1),
(138, 62, 130, 'Extra Spicy', 1),
(139, 62, 129, '', 1),
(140, 63, 114, '', 1),
(141, 64, 114, '', 1),
(142, 65, 114, '', 1),
(143, 66, 130, '', 1),
(144, 67, 113, '', 1),
(145, 68, 113, '', 1),
(146, 69, 147, '', 1),
(147, 70, 130, 'Extra Spicy', 1),
(148, 71, 147, 'Extra Cheese', 8),
(149, 72, 137, '', 1),
(150, 73, 136, 'Extra Crispy', 1),
(151, 74, 136, 'Extra Crispy', 1),
(152, 75, 131, '', 1),
(153, 76, 136, '', 1),
(154, 77, 137, 'Extra Crispy', 1),
(155, 78, 128, 'Extra Spicy', 2),
(156, 78, 144, 'Extra Spicy', 2),
(157, 78, 146, 'Extra Crispy', 1),
(158, 78, 125, 'Extra Cool', 1),
(159, 79, 136, 'Extra Crispy', 2),
(160, 79, 135, '', 2),
(161, 79, 125, 'Extra Cool', 1),
(162, 79, 126, 'Extra Spicy', 1),
(163, 80, 130, 'Extra Spicy', 1),
(164, 81, 115, '', 1),
(165, 82, 114, '', 2),
(166, 83, 115, 'Extra Cheese', 1),
(167, 84, 114, 'Extra Cheese', 1),
(168, 85, 136, 'Extra Crispy', 2),
(169, 86, 121, 'Medium lime & spicy', 1),
(170, 86, 124, 'Extra Cool', 1),
(171, 87, 114, 'Extra Cheese', 3),
(172, 87, 115, '', 1),
(173, 88, 135, '', 1),
(174, 89, 136, '', 2),
(175, 90, 136, 'Extra Crispy', 10),
(176, 91, 130, '', 4),
(177, 91, 131, '', 3),
(178, 91, 126, '', 1),
(179, 91, 127, '', 1),
(180, 91, 128, '', 1),
(181, 91, 134, '', 1),
(182, 91, 132, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(21) NOT NULL,
  `userId` int(21) NOT NULL,
  `amount` int(200) NOT NULL,
  `orderStatus` int(1) NOT NULL COMMENT '0= not ready\r\n1=ready\r\n2=collected',
  `orderDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `userId`, `amount`, `orderStatus`, `orderDate`) VALUES
(31, 2, 255, 0, '2023-02-27 17:23:41'),
(32, 6, 803, 0, '2023-02-27 20:08:28'),
(33, 7, 358, 0, '2023-02-27 20:56:46'),
(34, 10, 2938, 0, '2023-02-27 22:16:23'),
(35, 11, 353, 0, '2023-02-27 22:23:43'),
(36, 12, 814, 0, '2023-02-27 22:32:30'),
(37, 13, 102, 0, '2023-02-27 22:35:54'),
(38, 14, 2926, 0, '2023-02-27 22:42:02'),
(39, 15, 353, 0, '2023-02-27 22:42:41'),
(40, 16, 353, 0, '2023-02-27 23:13:55'),
(41, 19, 1373, 1, '2023-02-28 07:36:02'),
(42, 23, 835, 0, '2023-02-28 09:26:40'),
(43, 24, 2120, 0, '2023-02-28 09:40:52'),
(44, 26, 1400, 0, '2023-02-28 10:03:26'),
(45, 27, 455, 0, '2023-02-28 10:04:21'),
(46, 28, 660, 0, '2023-02-28 10:19:55'),
(47, 29, 681, 0, '2023-02-28 10:20:49'),
(48, 30, 353, 0, '2023-02-28 10:22:55'),
(49, 31, 2473, 0, '2023-02-28 10:27:42'),
(50, 32, 1060, 0, '2023-02-28 10:33:17'),
(51, 33, 102, 0, '2023-02-28 11:05:57'),
(52, 35, 1538, 0, '2023-02-28 14:06:38'),
(53, 37, 306, 0, '2023-02-28 14:13:49'),
(54, 39, 357, 0, '2023-02-28 20:40:07'),
(55, 41, 507, 0, '2023-02-28 21:34:02'),
(56, 42, 1123, 0, '2023-02-28 21:36:36'),
(57, 44, 8724, 1, '2023-03-01 09:14:20'),
(58, 55, 3193, 0, '2023-03-01 18:07:13'),
(59, 56, 3595, 0, '2023-03-01 18:08:22'),
(60, 60, 1638, 0, '2023-03-01 19:53:01'),
(61, 60, 1298, 0, '2023-03-01 20:14:49'),
(62, 60, 1298, 0, '2023-03-01 20:15:56'),
(63, 61, 525, 0, '2023-03-01 20:18:06'),
(64, 61, 525, 0, '2023-03-01 20:18:34'),
(65, 61, 525, 0, '2023-03-01 20:19:26'),
(66, 62, 597, 0, '2023-03-01 20:19:45'),
(67, 63, 1638, 1, '2023-03-01 20:20:53'),
(68, 64, 1638, 1, '2023-03-01 20:22:04'),
(69, 65, 752, 1, '2023-03-01 20:22:36'),
(70, 67, 597, 1, '2023-03-01 20:32:20'),
(71, 69, 6015, 1, '2023-03-02 07:52:40'),
(72, 70, 3595, 1, '2023-03-02 08:12:05'),
(73, 77, 1123, 1, '2023-03-02 09:12:19'),
(74, 77, 1123, 1, '2023-03-02 09:13:53'),
(75, 78, 1092, 1, '2023-03-02 09:20:13'),
(76, 80, 1123, 2, '2023-03-02 09:28:06'),
(77, 82, 3595, 1, '2023-03-02 10:52:23'),
(78, 85, 6036, 0, '2023-03-02 11:53:07'),
(79, 86, 5305, 1, '2023-03-02 12:02:44'),
(80, 87, 597, 1, '2023-03-02 12:07:25'),
(81, 88, 443, 0, '2023-03-02 13:59:11'),
(82, 90, 1051, 0, '2023-03-02 19:50:11'),
(83, 91, 443, 0, '2023-03-02 19:56:14'),
(84, 93, 525, 0, '2023-03-02 20:06:15'),
(85, 97, 2245, 2, '2023-03-03 09:53:20'),
(86, 98, 391, 0, '2023-03-03 09:55:44'),
(87, 100, 2019, 2, '2023-03-03 10:04:26'),
(88, 102, 505, 1, '2023-03-03 10:09:22'),
(89, 95, 2245, 0, '2023-03-08 20:57:31'),
(90, 109, 11227, 0, '2023-03-08 20:58:39'),
(91, 111, 18849, 0, '2023-03-08 22:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(21) NOT NULL,
  `username` varchar(21) NOT NULL,
  `firstName` varchar(21) NOT NULL,
  `lastName` varchar(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `userType` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=chef\r\n1=admin',
  `password` varchar(255) NOT NULL,
  `joinDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `phone`, `userType`, `password`, `joinDate`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@gmail.com', 1111111111, '1', '$2y$10$AAfxRFOYbl7FdN17rN3fgeiPu/xQrx6MnvRGzqjVHlGqHAM4d9T1i', '2021-04-11 11:40:58'),
(7, 'chef', 'chef1', 'chef2', 'chef@gmail.com', 0, '0', '$2y$10$bVqNRN2F/aJcgaHNDadRXuoWUM/64Vp7C1E4zbNB8vVixpPq2YAg2', '2023-02-26 11:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `viewcart`
--

CREATE TABLE `viewcart` (
  `cartItemId` int(11) NOT NULL,
  `foodId` int(11) NOT NULL,
  `itemQuantity` int(100) NOT NULL,
  `customize` varchar(500) DEFAULT NULL,
  `userId` int(11) NOT NULL,
  `addedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `viewcart`
--

INSERT INTO `viewcart` (`cartItemId`, `foodId`, `itemQuantity`, `customize`, `userId`, `addedDate`) VALUES
(103, 3, 1, NULL, 3, '2023-02-27 17:25:48'),
(104, 7, 1, NULL, 3, '2023-02-27 17:25:51'),
(105, 6, 1, NULL, 3, '2023-02-27 17:25:52'),
(106, 14, 1, NULL, 3, '2023-02-27 17:30:45'),
(107, 15, 1, NULL, 3, '2023-02-27 17:34:12'),
(108, 16, 1, NULL, 3, '2023-02-27 17:36:00'),
(109, 13, 1, NULL, 3, '2023-02-27 17:37:08'),
(110, 19, 1, NULL, 3, '2023-02-27 17:38:06'),
(111, 17, 1, NULL, 3, '2023-02-27 17:42:04'),
(112, 0, 1, 'Extra Spices', 4, '2023-02-27 19:31:09'),
(113, 0, 1, 'Extra Spices', 5, '2023-02-27 19:48:58'),
(117, 1, 1, '', 8, '2023-02-27 20:57:45'),
(118, 55, 1, '', 8, '2023-02-27 21:08:24'),
(119, 111, 1, 'Extra Spices', 8, '2023-02-27 21:16:36'),
(120, 1, 1, '', 9, '2023-02-27 21:25:10'),
(139, 15, 5, ' ', 14, '2023-02-27 22:36:32'),
(140, 16, 4, ' ', 14, '2023-02-27 22:36:34'),
(141, 111, 1, 'Extra Spices', 15, '2023-02-27 22:42:19'),
(142, 111, 1, 'Extra Spices', 16, '2023-02-27 22:48:22'),
(146, 15, 1, ' ', 19, '2023-02-28 07:34:02'),
(147, 111, 2, 'Extra Spices', 19, '2023-02-28 07:34:09'),
(148, 2, 2, ' ', 19, '2023-02-28 07:34:13'),
(153, 111, 1, 'Extra Spices', 21, '2023-02-28 08:23:37'),
(154, 111, 3, 'Extra Spices', 22, '2023-02-28 09:04:09'),
(155, 6, 1, ' ', 23, '2023-02-28 09:25:45'),
(156, 111, 1, 'Extra Spices', 23, '2023-02-28 09:25:48'),
(157, 11, 1, ' ', 23, '2023-02-28 09:25:50'),
(158, 111, 6, 'Extra Spices', 24, '2023-02-28 09:40:25'),
(159, 5, 1, '', 25, '2023-02-28 09:56:47'),
(160, 111, 1, '', 25, '2023-02-28 09:56:57'),
(161, 9, 1, '', 25, '2023-02-28 09:57:01'),
(162, 11, 1, '', 25, '2023-02-28 09:57:19'),
(163, 12, 1, '', 25, '2023-02-28 09:57:21'),
(164, 10, 1, '', 25, '2023-02-28 09:57:23'),
(165, 8, 1, '', 25, '2023-02-28 09:57:27'),
(166, 7, 1, '', 25, '2023-02-28 09:57:29'),
(167, 6, 1, '', 25, '2023-02-28 09:57:31'),
(168, 3, 1, '', 25, '2023-02-28 09:57:37'),
(169, 4, 1, '', 25, '2023-02-28 09:57:39'),
(170, 111, 1, 'Extra Spices', 26, '2023-02-28 10:01:28'),
(171, 10, 1, '', 26, '2023-02-28 10:01:29'),
(172, 11, 1, '', 26, '2023-02-28 10:01:31'),
(173, 12, 1, '', 26, '2023-02-28 10:01:33'),
(174, 9, 1, ' ', 26, '2023-02-28 10:02:57'),
(175, 1, 1, ' ', 27, '2023-02-28 10:03:45'),
(176, 111, 1, 'Extra Spices', 27, '2023-02-28 10:03:49'),
(177, 1, 1, '', 28, '2023-02-28 10:06:12'),
(178, 2, 1, 'null', 28, '2023-02-28 10:06:14'),
(179, 111, 1, 'Extra Spices', 28, '2023-02-28 10:06:25'),
(180, 1, 1, 'null', 29, '2023-02-28 10:20:20'),
(181, 9, 1, 'null', 29, '2023-02-28 10:20:23'),
(182, 111, 1, 'Extra Spices', 29, '2023-02-28 10:20:25'),
(183, 111, 1, 'Extra Spices', 30, '2023-02-28 10:22:36'),
(184, 111, 7, 'Extra Spices', 31, '2023-02-28 10:26:20'),
(185, 111, 3, 'Medium Spices', 32, '2023-02-28 10:32:54'),
(186, 1, 1, NULL, 33, '2023-02-28 11:05:34'),
(187, 111, 1, 'Extra Spices', 34, '2023-02-28 11:06:48'),
(188, 2, 2, NULL, 35, '2023-02-28 12:01:43'),
(190, 1, 1, NULL, 35, '2023-02-28 13:25:45'),
(191, 23, 1, NULL, 35, '2023-02-28 13:37:54'),
(192, 14, 1, NULL, 35, '2023-02-28 13:44:45'),
(193, 16, 1, NULL, 35, '2023-02-28 14:06:23'),
(194, 15, 1, NULL, 35, '2023-02-28 14:06:24'),
(195, 23, 2, NULL, 37, '2023-02-28 14:13:28'),
(196, 24, 1, NULL, 37, '2023-02-28 14:13:30'),
(197, 23, 1, NULL, 39, '2023-02-28 19:01:44'),
(198, 24, 1, NULL, 39, '2023-02-28 19:01:46'),
(199, 22, 1, NULL, 39, '2023-02-28 19:01:51'),
(200, 111, 1, 'Medium Spices', 40, '2023-02-28 20:42:38'),
(201, 5, 1, NULL, 41, '2023-02-28 21:20:51'),
(202, 111, 1, 'Medium Spices', 41, '2023-02-28 21:20:53'),
(203, 112, 1, 'Extra Cheese', 42, '2023-02-28 21:36:18'),
(206, 113, 1, 'Medium Cheese', 43, '2023-02-28 22:15:05'),
(207, 114, 1, 'Extra Cheese', 44, '2023-03-01 08:53:35'),
(208, 119, 1, 'Extra Cheese', 44, '2023-03-01 08:53:37'),
(209, 131, 1, 'Extra Spicy', 44, '2023-03-01 08:53:45'),
(210, 147, 1, 'Extra Cheese', 44, '2023-03-01 08:53:52'),
(211, 143, 1, 'Extra Spicy', 44, '2023-03-01 08:54:02'),
(213, 123, 1, 'Extra Cool', 44, '2023-03-01 08:54:16'),
(214, 125, 1, 'Extra Cool', 44, '2023-03-01 08:54:17'),
(215, 139, 1, 'Medium Spicy', 44, '2023-03-01 08:54:22'),
(216, 113, 3, 'Extra Cheese', 45, '2023-03-01 10:21:15'),
(217, 134, 1, NULL, 53, '2023-03-01 12:19:56'),
(218, 116, 1, 'Extra Cheese', 55, '2023-03-01 18:06:15'),
(219, 149, 1, 'Extra Cheese', 55, '2023-03-01 18:06:32'),
(220, 150, 1, 'Extra Cheese', 55, '2023-03-01 18:06:34'),
(221, 137, 1, 'Extra Crispy', 56, '2023-03-01 18:08:03'),
(223, 130, 1, 'Extra Spicy', 60, '2023-03-01 20:14:10'),
(224, 129, 1, NULL, 60, '2023-03-01 20:14:33'),
(225, 114, 1, NULL, 61, '2023-03-01 20:17:51'),
(226, 130, 1, NULL, 62, '2023-03-01 20:19:33'),
(227, 113, 1, NULL, 63, '2023-03-01 20:20:40'),
(228, 113, 1, NULL, 64, '2023-03-01 20:21:52'),
(229, 147, 1, NULL, 65, '2023-03-01 20:22:25'),
(230, 130, 1, 'Extra Spicy', 67, '2023-03-01 20:32:01'),
(231, 113, 1, NULL, 68, '2023-03-02 07:50:20'),
(232, 116, 1, NULL, 68, '2023-03-02 07:50:25'),
(233, 119, 1, NULL, 68, '2023-03-02 07:50:28'),
(234, 128, 1, NULL, 68, '2023-03-02 07:50:41'),
(235, 120, 1, NULL, 68, '2023-03-02 07:50:53'),
(236, 123, 1, NULL, 68, '2023-03-02 07:50:58'),
(237, 125, 1, NULL, 68, '2023-03-02 07:51:00'),
(238, 130, 1, NULL, 68, '2023-03-02 07:51:17'),
(239, 147, 8, 'Extra Cheese', 69, '2023-03-02 07:51:41'),
(240, 137, 1, NULL, 70, '2023-03-02 08:11:52'),
(241, 147, 1, NULL, 75, '2023-03-02 09:03:54'),
(242, 136, 1, 'Extra Crispy', 77, '2023-03-02 09:11:58'),
(243, 131, 1, NULL, 78, '2023-03-02 09:19:55'),
(244, 136, 1, NULL, 80, '2023-03-02 09:27:26'),
(247, 137, 1, 'Extra Crispy', 82, '2023-03-02 10:52:05'),
(248, 118, 1, NULL, 83, '2023-03-02 11:46:14'),
(249, 130, 1, NULL, 83, '2023-03-02 11:46:27'),
(251, 128, 2, 'Extra Spicy', 84, '2023-03-02 11:48:48'),
(252, 146, 2, 'Extra Crispy', 84, '2023-03-02 11:49:26'),
(253, 125, 1, NULL, 84, '2023-03-02 11:50:01'),
(254, 123, 1, NULL, 84, '2023-03-02 11:50:03'),
(256, 128, 2, 'Extra Spicy', 85, '2023-03-02 11:51:17'),
(257, 144, 2, 'Extra Spicy', 85, '2023-03-02 11:51:42'),
(258, 146, 1, 'Extra Crispy', 85, '2023-03-02 11:52:04'),
(259, 125, 1, 'Extra Cool', 85, '2023-03-02 11:52:20'),
(260, 136, 2, 'Extra Crispy', 86, '2023-03-02 12:01:22'),
(261, 135, 2, NULL, 86, '2023-03-02 12:01:29'),
(262, 125, 1, 'Extra Cool', 86, '2023-03-02 12:02:02'),
(263, 126, 1, 'Extra Spicy', 86, '2023-03-02 12:02:18'),
(264, 130, 1, 'Extra Spicy', 87, '2023-03-02 12:07:08'),
(265, 115, 1, NULL, 88, '2023-03-02 13:58:51'),
(270, 114, 2, NULL, 90, '2023-03-02 19:49:46'),
(271, 115, 1, 'Extra Cheese', 91, '2023-03-02 19:55:52'),
(276, 136, 2, 'Extra Crispy', 97, '2023-03-03 09:52:51'),
(277, 121, 1, 'Medium lime & spicy', 98, '2023-03-03 09:55:15'),
(278, 124, 1, 'Extra Cool', 98, '2023-03-03 09:55:21'),
(279, 114, 3, 'Extra Cheese', 100, '2023-03-03 10:03:29'),
(280, 115, 1, NULL, 100, '2023-03-03 10:03:35'),
(281, 135, 1, NULL, 102, '2023-03-03 10:09:09'),
(287, 114, 1, NULL, 106, '2023-03-08 17:56:39'),
(290, 136, 1, NULL, 107, '2023-03-08 18:01:23'),
(292, 130, 1, NULL, 93, '2023-03-08 18:40:44'),
(293, 113, 1, NULL, 108, '2023-03-08 19:00:17'),
(294, 130, 1, NULL, 94, '2023-03-08 19:17:29'),
(298, 136, 2, NULL, 95, '2023-03-08 20:53:37'),
(299, 136, 10, 'Extra Crispy', 109, '2023-03-08 20:58:03'),
(300, 113, 2, 'Extra Cheese', 110, '2023-03-08 21:02:20'),
(301, 114, 1, 'Extra Cheese', 110, '2023-03-08 21:02:24'),
(302, 115, 1, NULL, 110, '2023-03-08 21:02:31'),
(303, 130, 4, NULL, 111, '2023-03-08 22:26:08'),
(304, 131, 3, NULL, 111, '2023-03-08 22:29:24'),
(305, 126, 1, NULL, 111, '2023-03-08 22:33:45'),
(306, 127, 1, NULL, 111, '2023-03-08 22:34:14'),
(307, 128, 1, NULL, 111, '2023-03-08 22:34:17'),
(308, 134, 1, NULL, 111, '2023-03-08 22:35:05'),
(309, 132, 1, NULL, 111, '2023-03-08 22:35:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorieId`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodId`);

--
-- Indexes for table `k_user`
--
ALTER TABLE `k_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `viewcart`
--
ALTER TABLE `viewcart`
  ADD PRIMARY KEY (`cartItemId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorieId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `viewcart`
--
ALTER TABLE `viewcart`
  MODIFY `cartItemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
