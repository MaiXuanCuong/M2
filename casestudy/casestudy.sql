-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2022 at 07:28 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casestudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`) VALUES
(1, 'Realme'),
(2, 'Xiaomi'),
(3, 'Apple'),
(4, 'Sam Sung'),
(6, 'Phá»¥ Kiá»‡n');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `name_customer` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender_customer` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_customer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_customer` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail_customer` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `name_customer`, `gender_customer`, `address_customer`, `phone_customer`, `gmail_customer`, `pass`, `role`) VALUES
(4, 'Mai XuÃ¢n CÆ°á»ng', 'KhÃ¡c', 'Quáº£ng Trá»‹-Cam Lá»™-Cam Hiáº¿u', '0843442357', 'maixuancuong@gmail.com', '1', 'Admin'),
(5, 'LÃª Kim ChÆ¡n', 'Nam', 'Tá»‰nh/ThÃ nh Phá»‘: Quáº£ng Trá»‹ Quáº­n/Huyá»‡n: Cam Lá»™ XÃ£/PhÆ°á»ng: Cam Hiáº¿u', '0843442357', 'lechon@gmail.com', '1', 'User'),
(7, 'ÄoÃ n Thá»‹ Thanh PhÆ°Æ¡ng ', 'Ná»¯', 'Tá»‰nh/ThÃ nh Phá»‘: Quáº£ng Trá»‹ Quáº­n/Huyá»‡n: Cam Lá»™ XÃ£/PhÆ°á»ng: Cam Hiáº¿u', '0843442357', 'thanhphuong@gmail.com', '1', 'User'),
(8, 'HoÃ ng Thá»‹ BÃ¬nh', 'Ná»¯', 'Tá»‰nh/ThÃ nh Phá»‘: Quáº£ng Trá»‹ Quáº­n/Huyá»‡n: Cam Lá»™ XÃ£/PhÆ°á»ng: Cam Hiáº¿u', '0843442357', 'hoangthibinh@gmail.com', '1', 'User'),
(9, 'Nguyá»…n TÃ¢n', 'KhÃ¡c', '', '', 'tannguyen99@gmail.com', '1', 'User'),
(10, 'Nguyá»…n Äá»©c  TÃ¢n', 'Nam', 'Tá»‰nh/ThÃ nh Phá»‘ Quáº£ng Trá»‹ Quáº­n/Huyá»‡n Cam  Lá»™ XÃ£/PhÆ°á»ng Cam Hiáº¿u', '213456789', 'nguyentan123@gmail.com', '123', 'Admin'),
(11, 'HoÃ ng Tháº¯ng', 'Nam', 'Tá»‰nh/ThÃ nh Phá»‘: Quáº£ng Trá»‹ Quáº­n/Huyá»‡n: Cam Lá»™ XÃ£/PhÆ°á»ng: Cam Hiáº¿u', '0843442357', 'xuanthang@gmail.com', '2', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id_orders_detail` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`id_orders_detail`, `total_price`, `product_id`, `order_product_id`) VALUES
(29, 7700000, 1, 29),
(32, 7700000, 1, 32),
(41, 7700000, 1, 41),
(42, 7700000, 1, 42),
(48, 7700000, 1, 48),
(49, 7700000, 1, 49),
(51, 45000000, 2, 51);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id_order_product` int(11) NOT NULL,
  `date_borrow` datetime DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `quantity_order` int(11) DEFAULT NULL,
  `note` text,
  `delivery_address` varchar(255) DEFAULT NULL,
  `configuration_order` varchar(255) DEFAULT NULL,
  `color_order` varchar(255) DEFAULT NULL,
  `name_order` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id_order_product`, `date_borrow`, `customer_id`, `quantity_order`, `note`, `delivery_address`, `configuration_order`, `color_order`, `name_order`) VALUES
(29, '2022-09-03 09:34:57', 5, 1, 'Not Notes', 'Cam Lá»™', '8GB/256GB;7700000', 'Äen', 'LÃª Kim ChÆ¡n'),
(32, '2022-09-04 08:53:35', 8, 1, 'Not Notes', 'Cam Lá»™', '8GB/256GB;7700000', 'Äen', 'HoÃ ng Thá»‹ BÃ¬nh'),
(41, '2022-09-06 09:23:17', 7, 1, 'Not Notes', 'Cam Lá»™', '8GB/256GB;7700000', 'Äen', 'Mai XuÃ¢n CÆ°á»ng'),
(42, '2022-09-06 09:35:24', 7, 1, 'Not Notes', 'Cam Lá»™', '8GB/256GB;7700000', 'Äen', 'Mai XuÃ¢n CÆ°á»ng'),
(48, '2022-09-06 11:16:41', 11, 1, 'Not Notes', 'Cam Lá»™', '8GB/256GB;7700000', 'Äen', 'Mai XuÃ¢n CÆ°á»ng'),
(49, '2022-09-06 11:17:27', 11, 1, 'Not Notes', 'Cam Lá»™', '8GB/256GB;7700000', 'Äen', 'HoÃ ng Tháº¯ng'),
(51, '2022-09-06 12:54:17', 11, 1, 'Not Notes', 'Cam Lá»™', '1TB;45000000', 'Tráº¯ng', 'Mai XuÃ¢n CÆ°á»ng');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `describe` text,
  `category_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `specifications` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `configuration` varchar(255) DEFAULT NULL,
  `price_product` varchar(255) DEFAULT NULL,
  `cart` varchar(255) DEFAULT NULL,
  `garbage_can` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price`, `describe`, `category_id`, `quantity`, `specifications`, `image`, `color`, `configuration`, `price_product`, `cart`, `garbage_can`) VALUES
(1, 'Realme GT Neo 2T', 7000000, 'Äáº¶C ÄIá»‚M Ná»”I Báº¬T Cá»¦A REALME GT NEO 2T 5G\r\nRa máº¯t GT Neo 2 cÃ¡ch Ä‘Ã¢y chÆ°a Ä‘Æ°á»£c bao lÃ¢u thÃ¬ má»›i Ä‘Ã¢y nhÃ  sáº£n xuáº¥t realme láº¡i tiáº¿p tá»¥c cho ra máº¯t máº«u rÃºt gá»n cá»§a sáº£n pháº©m nÃ y vá»›i tÃªn gá»i realme GT Neo 2T vá»›i má»™t chÃºt thay Ä‘á»•i vá» máº·t mÃ n hÃ¬nh, vi xá»­ lÃ½ vÃ  pin. Váº­y nhá»¯ng thay Ä‘á»•i Ä‘Ã³ cÃ³ tháº­t sá»± khÃ¡c biá»‡t vÃ  realme GT Neo 2T váº«n táº¡o sá»©c hÃºt nhÆ° nhá»¯ng sáº£n pháº©m trÆ°á»›c Ä‘Ã³? Äáº·c biá»‡t khi giÃ¡ realme GT Neo 2T chá»‰ hÆ¡n 6 triá»‡u thÃ¬ sáº£n pháº©m nÃ y ráº¥t Ä‘Ã¡ng Ä‘á»ƒ ngÆ°á»i dÃ¹ng cÃ¢n nháº¯c chá»n mua. Sau Ä‘Ã¢y má»i cÃ¡c báº¡n cÃ¹ng theo dÃµi Ä‘Ã¡nh giÃ¡ chi tiáº¿t.', 1, 98, 'Tháº» SIM: 2 nano sim, 2 sÃ³ng online;\r\nKiá»ƒu thiáº¿t káº¿: Khung nhá»±a, máº·t lÆ°ng nhá»±a giáº£ kÃ­nh;\r\nMÃ n hÃ¬nh: 6.43 inches, Super AMOLED, 120Hz;\r\nÄá»™ phÃ¢n giáº£i:	Full HD+, 1080 x 2400 pixels, tá»· lá»‡ 20:9;\r\nCPU: Dimensity 1200 5G (6 nm) tÃ¡m lÃµi;\r\nRAM: 8GB;\r\nBá»™ nhá»›/ Tháº» nhá»›: 128/256GB, KhÃ´ng tháº» nhá»›;\r\nCamera sau: 64 MP, f/1.8 +  8 MP +  2 MP;\r\nCamera trÆ°á»›c:	16 MP, f/2.5, HDR, panorama, 1080p@30fps;\r\nJack 3.5mm/ Loa: CÃ³/ Loa kÃ©p Stereo;\r\nPin: Li-Po 4500 mAh, Sáº¡c nhanh 65W', 'gt-neo-2t-thumb_1634697894.jpg', 'Tráº¯ng;Äen', '8GB/128GB;8GB/256GB', '7000000;7700000', NULL, NULL),
(2, 'Iphone 13 pro max', 25000000, 'MÃ´ táº£ sáº£n pháº©m:\r\n\r\niPhone 13 Pro Max chÃ­nh hÃ£ng VN/A má»›i siÃªu lÆ°á»›t chÃ­nh hÃ£ng Ä‘á»•i/ tráº£ báº£o hÃ nh, hÃ ng xuáº¥t Viettel. Bá»™ sáº£n pháº©m chuáº©n Fullbox gá»“m há»™p chÃ­nh hÃ£ng Viá»‡t Nam, thÃ¢n mÃ¡y, dÃ¢y sáº¡c USB C to Lightning, sÃ¡ch HDSD, que chá»c sim. Sáº£n pháº©m Ä‘Ã£ kÃ­ch hoáº¡t/ chÆ°a kÃ­ch hoáº¡t, báº£o hÃ nh cÃ²n ráº¥t dÃ i\r\n\r\nSá»‘ lÆ°á»£ng cÃ³ háº¡n, má»i cÃ¡c báº¡n Ä‘áº·t hÃ ng sá»›m trÃ¡nh tÃ¬nh tráº¡ng háº¿t hÃ ng.', 3, 1, 'Tháº» SIM:	Nano + eSim;\r\nMÃ n hÃ¬nh:  6.7 inches, Super Retina XDR OLED, 120Hz, HDR10, Dolby Vision;\r\nÄá»™ phÃ¢n giáº£i:	1284 x 2778 pixels, tá»· lá»‡ 19.5:9;\r\nCPU:  Apple A15 Bionic (5 nm);\r\nRAM:  6GB;\r\nBá»™ nhá»›/ Tháº» nhá»›:  128/256/512GB/1TB;\r\nCamera sau:  12 MP, f/1.5, 26mm (wide), 1.9Âµm, dual pixel PDAF, sensor-shift OIS, 12 MP, 12 MP;\r\nCamera trÆ°á»›c:	12 MP, f/2.2, 23mm (wide), 1/3.6\";\r\nJack 3.5mm/ Loa:	KhÃ´ng/ Loa kÃ©p Stereo;\r\nPin:	4373mAh, sáº¡c nhanh 27W;\r\nMÃ u sáº¯c:	Xanh, XÃ¡m, VÃ ng, Tráº¯ng', 'xanh_1637555141.jpg.jpg', 'Tráº¯ng;Äen;VÃ ng;Xanh ', '128GB;256GB;512GB;1TB', '25000000;29000000;37000000;45000000', NULL, NULL),
(4, 'Realme GT 2 Pro', 11000000, 'sá»Ÿ há»¯u cáº¥u hÃ¬nh máº¡nh máº½ vá»›i Snapdragon 8 Gen 1, bá»™ vi xá»­ lÃ½ máº¡nh nháº¥t cá»§a Qualcomm á»Ÿ thá»i Ä‘iá»ƒm hiá»‡n táº¡i. Vá»›i bá»™ vi xá»­ lÃ½ nÃ y thÃ¬ mÃ¬nh tin cháº¯c Realme GT 2 Pro sáº½ Ä‘Ã¡p á»©ng cá»±c ká»³ tá»‘t cÃ¡c nhu cáº§u cÆ¡ báº£n hoáº·c nÃ¢ng cao cá»§a ngÆ°á»i dÃ¹ng nhÆ° xem phim hoáº·c chiáº¿n cÃ¡c tá»±a game trÃªn thá»‹ trÆ°á»ng hiá»‡n nay. Há»— trá»£ cho hiá»‡u nÄƒng tuyá»‡t Ä‘á»‰nh cá»§a Snapdragon 8 Gen 1 trÃªn Realme GT 2 Pro lÃ  dung lÆ°á»£ng RAM lÃªn Ä‘áº¿n 12 GB Ä‘i kÃ¨m vá»›i bá»™ nhá»› trong lÃªn Ä‘áº¿n 512 GB, cho báº¡n kháº£ nÄƒng sá»­ dá»¥ng Ä‘a nhiá»‡m vá»›i nhiá»u á»©ng dá»¥ng vÃ  thoáº£i mÃ¡i lÆ°u trá»¯ dá»¯ liá»‡u mÃ  khÃ´ng gáº·p báº¥t ká»³ tÃ¬nh tráº¡ng giáº­t lag nÃ o cáº£n trá»Ÿ.DÃ nh cho nhá»¯ng báº¡n nÃ o chÆ°a biáº¿t thÃ¬ tÃ¬nh tráº¡ng quÃ¡ nhiá»‡t chÃ­nh lÃ  Ä‘iá»ƒm yáº¿u cá»§a chip Snapdragon 8 Gen 1 nÃªn Realme Ä‘Ã£ kháº¯c phá»¥c tÃ¬nh tráº¡ng nÃ y báº±ng viá»‡c trang bá»‹ cho Realme GT 2 Pro há»‡ thá»‘ng táº£n nhiá»‡t VC cÃ³ diá»‡n tÃ­ch 36.761 mm vuÃ´ng, trÃ¡nh viá»‡c con chip vÃ¬ bá»‹ quÃ¡ nhiá»‡t mÃ  lÃ m áº£nh hÆ°á»Ÿng Ä‘áº¿n quÃ¡ trÃ¬nh tráº£i nghiá»‡m cá»§a ngÆ°á»i dÃ¹ng.Vá» pháº§n hiá»ƒn thá»‹, Realme GT 2 Pro Ä‘Æ°á»£c trang bá»‹ mÃ n hÃ¬nh 6.7 inch vá»›i Ä‘á»™ phÃ¢n giáº£i 2K, hoáº¡t Ä‘á»™ng trÃªn táº¥m ná»n LTPO tiáº¿t kiá»‡m Ä‘iá»‡n cÃ¹ng táº§n sá»‘ quÃ©t 120 Hz. MÃ¬nh tin cháº¯c vá»›i thÃ´ng sá»‘ mÃ n hÃ¬nh nhÆ° tháº¿ nÃ y sáº½ Ä‘em láº¡i cho báº¡n tráº£i nghiá»‡m mÆ°á»£t mÃ , sáº¯c nÃ©t, hiá»‡u á»©ng uyá»ƒn chuyá»ƒn khi xem phim, lÆ°á»›t web hoáº·c náº·ng Ä‘Ã´ hÆ¡n lÃ  chiáº¿n game Ä‘áº¥y. ', 1, 38, 'Tháº» SIM:  2 Nano SIM- 2 sÃ³ng online;\r\nMÃ n hÃ¬nh:  6.7 inches, LTPO2 AMOLED, 1B colors, 120Hz, HDR10+;\r\nÄá»™ phÃ¢n giáº£i:	1440 x 3216 pixels;\r\nCPU:  Snapdragon 8 Gen1 (4 nm);\r\nRAM: 8/12GB;\r\nBá»™ nhá»›/ Tháº» nhá»›: 128/256/512GB;\r\nCamera sau:  Triple 50 MP, f/1.8, 50MP, 3MP;\r\nCamera trÆ°á»›c:	 32 MP, f/2.4, 1080p@30fps;\r\nJack 3.5mm/ Loa:	KhÃ´ng / Loa kÃ©p Stereo;\r\nPin:	Li-Po 5000 mAh, sáº¡c nhanh 65W;\r\nMÃ u sáº¯c:	Xanh, Tráº¯ng, Äen', 'thumb_1641460322.jpg', 'Xanh CÃ¢y;Xanh DÆ°Æ¡ng;Äen', '8GB/128GB;8GB/256GB;12GB/256GB', '11000000;11700000;12900000', NULL, NULL),
(6, 'Samsung Galaxy Z Flip3', 13000000, 'Äáº¿n chiáº¿c Samsung Galaxy Z Flip3, Samsung Ä‘Ã£ mang Ä‘áº¿n má»™t cÃ¡i nhÃ¬n hoÃ n toÃ n má»›i vá» Ä‘iá»‡n thoáº¡i gáº­p vá»›i nhá»¯ng nÃ¢ng cáº¥p tá»‘t hÆ¡n vÃ  thá»±c táº¿ vá»›i nhu cáº§u sá»­ dá»¥ng hÆ¡n. \r\n\r\nLiá»‡u vá»›i nhá»¯ng thay Ä‘á»•i má»›i nÃ y há» cÃ³ khiáº¿n cho ngÆ°á»i ngÆ°á»i dÃ¹ng, chÃ­nh chÃºng ta bÆ°á»›c vÃ o thá»i Ä‘iá»ƒm dáº§n pháº£i táº¡m biá»‡t nhá»¯ng chiáº¿c Ä‘iá»‡n thoáº¡i mÃ n hÃ¬nh pháº³ng khÃ´ng?', 4, 50, 'Tháº» SIM:  2 SIM (1 nano sim, 1 esim);\r\nMÃ n hÃ¬nh:  6.7 inches, Foldable Dynamic AMOLED 2X, 120Hz, HDR10+;\r\nÄá»™ phÃ¢n giáº£i:  Full HD+, 1080 x 2640 pixels;\r\nCPU:  Snapdragon 888 5G (5 nm);\r\nRAM:  8GB;\r\nBá»™ nhá»›/ Tháº» nhá»›:  128GB/256GB;\r\nCamera sau:  12 MP, f/1.8 + 12 MP, f/2.2;\r\nCamera trÆ°á»›c:  10 MP, f/2.4, 4K@30fps;\r\nJack 3.5mm/ Loa:  KhÃ´ng/ Loa kÃ©p Stereo;\r\nPin:  Li-Po 3300 mAh, Sáº¡c nhanh 15W;\r\nMÃ u sáº¯c:  Kem, Äen, TÃ­m, Xanh RÃªu', 'tim_1642756047.jpg', 'Äen;VÃ ng;Xanh CÃ¢y', '8GB/128GB;8GB/256GB', '13000000;15600000', NULL, NULL),
(7, 'Sam Sung Galaxy Note 20', 12900000, 'TÃ­nh nÄƒng báº£o máº­t tiÃªn tiáº¿n cháº¯c cháº¯n khÃ´ng thá»ƒ thiáº¿u trÃªn Note 20, vá»›i cÃ´ng nghá»‡ má»Ÿ khÃ³a báº±ng vÃ¢n tay ngay trÃªn mÃ n hÃ¬nh giÃºp báº¡n má»Ÿ khÃ³a nhanh mÃ¡y chá»‰ vá»›i má»™t láº§n cháº¡m vÃ´ cÃ¹ng nhanh chÃ³ng vÃ  tiá»‡n lá»£i. cÃ²n cÃ³ hiá»‡u nÄƒng vÆ°á»£t trá»™i vá»›i tá»‘c Ä‘á»™ xá»­ lÃ½ máº¡nh máº½, Ä‘Ã¡p á»©ng má»i thao tÃ¡c tÃ¡c vá»¥ má»™t cÃ¡ch nhanh chÃ³ng nhá» chip xá»­ lÃ½ Exynos 990 8 nhÃ¢n, RAM 8 GB/ROM 256 GB, ngÆ°á»i dÃ¹ng cÃ³ thá»ƒ sá»­ dá»¥ng nhiá»u tÃ¡c vá»¥ cÃ¹ng lÃºc má»™t cÃ¡ch dá»… dÃ ng, mÆ°á»£t mÃ .', 4, 19, 'Tháº» SIM:  2 Nano sim - 2 sÃ³ng online;\r\nMÃ n hÃ¬nh:  6.7 inches, Super AMOLED Plus, HDR10+;\r\nÄá»™ phÃ¢n giáº£i:  FullHD+ 1080 x 2400 pixels;\r\nCPU:  Exynos 990 (7 nm+) 8 lÃµi;\r\nRAM:  8GB;\r\nBá»™ nhá»›/ Tháº» nhá»›:  256GB;\r\nCamera sau:  12 MP, f/1.8, 26mm (wide), 1/1.76\", 1.8Âµm, Dual Pixel PDAF, OIS - 64MP - 12MP;\r\nCamera trÆ°á»›c:  10 MP, f/2.2, 26mm (wide), 1/3.2\", 1.22Âµm, Dual Pixel PDAF;\r\nJack 3.5mm/ Loa:  KhÃ´ng/ Loa kÃ©p Stereo tinh chá»‰nh bá»Ÿi AKG;\r\nPin:  Li-Ion 4300 mAh, Sáº¡c nhanh 25W;\r\nMÃ u sáº¯c:  XÃ¡m, Xanh, Äá», Äá»“ng', 'note-20-thumb_1608607458.jpg', 'Xanh CÃ¢y', '8GB/256GB', '12900000', NULL, NULL),
(8, 'Sam Sung Galaxy A52', 6900000, 'ÄÆ°á»£c khoÃ¡c lÃªn má»™t diá»‡n máº¡o má»›i, khÃ´ng cÃ²n váº» bÃ³ng báº©y nhÆ° tháº¿ há»‡ trÆ°á»›c, máº«u Ä‘iá»‡n thoáº¡i quay vá» vá»›i máº·t lÆ°ng pháº³ng Ä‘Æ°á»£c phá»§ nhÃ¡m háº¡n cháº¿ dáº¥u vÃ¢n tay, kÃ¨m theo nhiá»u mÃ u sáº¯c tráº» trung, phÃ¹ há»£p cho giá»›i tráº» hiá»‡n nay.Máº·t lÆ°ng cá»§a Galaxy A52 sá»­ dá»¥ng phong cÃ¡ch thiáº¿t káº¿ tá»‘i giáº£n, loáº¡i bá» cÃ¡c chi tiáº¿t thá»«a khÃ´ng cáº§n thiáº¿t, chá»‰ cÃ²n láº¡i logo Samsung vÃ  cá»¥m camera, chÃ­nh Ä‘iá»u nÃ y Ä‘Ã£ táº¡o sá»± cao cáº¥p cho thiáº¿t bá»‹.Pháº§n cáº¡nh viá»n váº«n Ä‘Æ°á»£c bo cong dÃ¹ khÃ´ng quÃ¡ nhiá»u, nhÆ°ng váº«n cho tráº£i nghiá»‡m cáº§m khÃ¡ tá»‘t, trá»ng lÆ°á»£ng nháº¹ chá»‰ 189 g giÃºp báº¡n thoáº£i mÃ¡i mang Ä‘i báº¥t cá»© Ä‘Ã¢u.KhÃ´ng chá»‰ cÃ³ Ä‘á»™ hoÃ n thiá»‡n cao, máº«u Ä‘iá»‡n thoáº¡i má»›i cá»§a Samsung cÃ²n Ä‘áº¡t chá»‰ sá»‘ khÃ¡ng nÆ°á»›c vÃ  bá»¥i IP67, giÃºp mÃ¡y trÃ¡nh khá»i nhá»¯ng hÆ° há»ng khi tiáº¿p xÃºc vá»›i nÆ°á»›c trong quÃ¡ trÃ¬nh sá»­ dá»¥ng.', 4, 9, 'Tháº» SIM:  2 nano sim - 2 sÃ³ng online;\r\nMÃ n hÃ¬nh:  6.5 inches, Super AMOLED, 90Hz, 800 nits;\r\nÄá»™ phÃ¢n giáº£i:  1080 x 2400 pixels, tá»· lá»‡ 20:9;\r\nCPU:  Snapdragon 720G (8 nm);\r\nRAM:  8GB;\r\nBá»™ nhá»›/ Tháº» nhá»›:  128GB;\r\nCamera sau:  64MP - 12MP - 5MP - 5MP;\r\nCamera trÆ°á»›c:  32MP\r\nJack 3.5mm/ Loa:  CÃ³/ Loa kÃ©p Stereo;\r\nPin:  Li-Ion 4500 mAh, Sáº¡c nhanh 25W;\r\nMÃ u sáº¯c:  Äen, Tráº¯ng, Xanh, TÃ­m', 'tim_1624413347.jpg', 'Äen;Xanh DÆ°Æ¡ng', '8GB/128GB', '6900000', NULL, NULL),
(10, 'iPhone 12 Pro', 19900000, 'Sá»©c nÃ³ng cá»§a bá»™ ba iPhone 11 cÃ²n chÆ°a giáº£m thÃ¬ má»›i Ä‘Ã¢y sá»± ra máº¯t cá»§a bá»™ bá»‘n iPhone 12 láº¡i mang Ä‘áº¿n cho ngÆ°á»i dÃ¹ng thÃªm ráº¥t nhiá»u sá»± lá»±a chá»n á»Ÿ phÃ¢n khÃºc Ä‘iá»‡n thoáº¡i cao cáº¥p. Thá»i Ä‘iá»ƒm hiá»‡n táº¡i khi mÃ  giÃ¡ cá»§a iPhone 12 Pro chá»‰ tá»« hÆ¡n 23 triá»‡u cho phiÃªn báº£n hÃ ng ÄÃ£ kÃ­ch hoáº¡t táº¡i Dienthoaihay.vn thÃ¬ má»©c giÃ¡ nÃ y cÃ³ thá»ƒ tiáº¿p cáº­n vá»›i ráº¥t nhiá»u ngÆ°á»i dÃ¹ng mong muá»‘n cÃ³ Ä‘Æ°á»£c má»™t sáº£n pháº©m má»›i nháº¥t Ä‘áº¿n  tá»« nhÃ  TÃ¡o khuyáº¿t.', 3, 40, 'Tháº» SIM:  2 sim (nano + esim);\r\nMÃ n hÃ¬nh:  6.1 inches, Super Retina XDR OLED, HDR10, Dolby Vision, 1200 nits;\r\nÄá»™ phÃ¢n giáº£i:  1170 x 2532 pixels, tá»· lá»‡ 19.5:9;\r\nCPU:  Apple A14 Bionic (5 nm);\r\nRAM:  6GB;\r\nBá»™ nhá»›/ Tháº» nhá»›:  128/256/512GB;\r\nCamera sau:  12 MP, f/1.6, 26mm (wide), 1.4Âµm, dual pixel PDAF, OIS, 12 MP, 12 MP;\r\nCamera trÆ°á»›c:  12 MP, f/2.2, HDR, 4K@60fps;\r\nJack 3.5mm/ Loa:  KhÃ´ng/ Loa kÃ©p Stereo;\r\nPin:   2815 mAh, sáº¡c nhanh 20W;\r\nMÃ u sáº¯c:  Äen, Tráº¯ng, Xanh, VÃ ng', 'den_1602733772-copy.jpg', 'VÃ ng;Xanh DÆ°Æ¡ng;Tráº¯ng', '128GB;256GB;512GB', '19900000;23500000;26000000', NULL, NULL),
(11, 'Realme Q5 Pro', 6200000, 'Thiáº¿t káº¿: Ngoáº¡i hÃ¬nh cá»§a realme Q5 Pro: hiá»‡n Ä‘áº¡i, tráº» trung nhÆ°ng khÃ´ng kÃ©m pháº§n sang trá»ng.\r\nNgoáº¡i hÃ¬nh cá»§a realme Q5 Pro khÃ¡ áº¥n tÆ°á»£ng vá»›i thiáº¿t káº¿ Ä‘áº¹p máº¯t, báº¯t trend, khung viá»n Ä‘Æ°á»£c vÃ¡t pháº³ng, cá»©ng cÃ¡p, Ä‘áº­m cháº¥t nam tÃ­nh.', 1, 60, 'Tháº» SIM:	2 nano sim, 2 sÃ³ng online;\r\nKiá»ƒu thiáº¿t káº¿:	Khung viá»n nhá»±a, máº·t lÆ°ng nhá»±a;\r\nMÃ n hÃ¬nh:  6.62 inches, AMOLED, 120Hz, HDR10+, 1300 nits;\r\nÄá»™ phÃ¢n giáº£i:  FullHD+ 1080 x 2400 pixels, 20:9 ratio;\r\nCPU:  Snapdragon 870 5G (7 nm) 8 lÃµi;\r\nRAM:  6GB/8GB;\r\nBá»™ nhá»›/ Tháº» nhá»›:  128/256GB;\r\nCamera sau:  64 MP, f/1.8, 25mm (wide), 8 MP, 2 MP;\r\nCamera trÆ°á»›c:	 16 MP, f/2.5, 26mm (wide), HDR, panorama;\r\nJack 3.5mm/ Loa:  KhÃ´ng/ Loa kÃ©p Stereo;\r\nPin:	Li-Po 5000 mAh, Sáº¡c nhanh 80W', 'vang_1650506568jpg_1656295802.jpg', 'VÃ ng;Tráº¯ng', '6GB/128GB;8GB/128GB', '6200000;6700000', NULL, NULL),
(12, 'Realme GT Neo 3', 8000000, 'Pháº§n thiáº¿t káº¿ há»™p cá»§a Realme GT Neo 3 khÃ¡ lÃ  Ä‘Æ¡n giáº£n, giá»¯ nhá»¯ng thiáº¿t káº¿ cá»§a chiáº¿c há»™p cÅ© vá»›i pháº§n há»™p mÃ u Ä‘en nhÃ¡m kÃ¨m dÃ²ng chá»¯ GT Neo 3 á»Ÿ ngay chÃ­nh giá»¯a, phÃ­a trÃªn lÃ  kÃ­ hiá»‡u 5G biá»ƒu hiá»‡n cho viá»‡c chiáº¿c mÃ¡y nÃ y Ä‘Ã£ Ä‘Æ°á»£c tÃ­ch há»£p cÃ´ng nghá»‡ 5G. NgoÃ i ra, á»Ÿ báº£n Ä‘áº·c biá»‡t, Realme cÃ²n nháº¥n máº¡nh chi tiáº¿t â€œ150Wâ€™ - khi mÃ  GT Neo 3 lÃ  chiáº¿c mÃ¡y Ä‘áº§u tiÃªn trÃªn tháº¿ giá»›i cÃ³ cÃ´ng nghá»‡ sáº¡c siÃªu nhanh UltraDart cÃ´ng suáº¥t 150W. VÃ  cÅ©ng nhÆ° táº¥t cáº£ cÃ¡c hÃ£ng Ä‘iá»‡n thoáº¡i Ä‘áº¿n tá»« Trung, GT Neo 3 cÃ³ pháº§n phá»¥ kiá»‡n Ä‘i kÃ¨m ráº¥t Ä‘áº§y Ä‘á»§ bao gá»“m má»™t chiáº¿c á»‘p lÆ°ng silicon, bá»™ bá»™ sáº¡c gá»“m cáº£ dÃ¢y vÃ  cá»§ sáº¡c, má»™t que chá»c sim. ', 1, 90, 'Tháº» SIM:	2 nano sim, 2 sÃ³ng online;\r\nMÃ n hÃ¬nh:  6.7 inches, AMOLED, 120Hz, HDR10+;\r\nÄá»™ phÃ¢n giáº£i:	FullHD+ 1080 x 2412 pixels, 20:9 ratio;\r\nCPU:  MediaTek Dimensity 8100 (5 nm);\r\nRAM:  6GB/8GB/12GB;\r\nBá»™ nhá»›/ Tháº» nhá»›:	128GB/256GB;\r\nCamera sau:  50 MP + 8 MP + 2MP;\r\nCamera trÆ°á»›c:	16 MP, f/2.5, 1080p@30fps, gyro-EIS;\r\nJack 3.5mm/ Loa:	KhÃ´ng/ Loa kÃ©p Stereo;\r\nPin:	Li-Po 5000 mAh (phiÃªn báº£n thÆ°á»ng)/ 4500 mAh (phiÃªn báº£n 150W);\r\nMÃ u sáº¯c:	Äen, Xanh, Báº¡c', 'thumbnailgtneo3_1648906082.jpg', 'Äen;Tráº¯ng;Xanh DÆ°Æ¡ng', '6GB/128GB;8GB/128GB', '8000000;8900000', NULL, NULL),
(15, 'Xiaomi Redmi Note 11T Pro', 6900000, 'ÄÆ°á»£c trang bá»‹ vi xá»­ lÃ½ Dimensity 8100 Ä‘áº¿n tá»« MediaTek. ÄÃ¢y lÃ  con chip Ä‘Æ°á»£c sáº£n xuáº¥t trÃªn tiáº¿n trÃ¬nh 5 nm mang láº¡i hiá»‡u suáº¥t máº¡nh máº½ cÃ¹ng nhiá»u tÃ­nh nÄƒng cao cáº¥p nhÆ°ng láº¡i cÃ³ giÃ¡ thÃ nh pháº£i chÄƒng. ÄÃ¢y cÅ©ng lÃ  Ä‘iá»u lÃ m mÃ¬nh áº¥n tÆ°á»£ng nháº¥t Ä‘á»‘i vá»›i cáº¥u hÃ¬nh cá»§a Redmi Note 11T Pro khi mÃ  Xiaomi Ä‘Ã£ trang bá»‹ ráº¥t máº¡nh tay vá» khoáº£n hiá»‡u nÄƒng cho mÃ¡y. KhÃ´ng nhá»¯ng tháº¿, bÃ i toÃ¡n nhiá»‡t Ä‘á»™ cá»§a Redmi Note 11T Pro cÅ©ng Ä‘Æ°á»£c hÃ£ng giáº£i quyáº¿t ráº¥t tá»‘t thÃ´ng qua viá»‡c trang bá»‹ há»‡ thá»‘ng táº£n nhiá»‡t VC giÃºp mÃ¡y hoáº¡t Ä‘á»™ng mÆ°á»£t mÃ  vÃ  giáº£m tÃ¬nh tráº¡ng quÃ¡ nhiá»‡t khi ngÆ°á»i dÃ¹ng sá»­ dá»¥ng lÃ¢u.KhÃ´ng nhá»¯ng tháº¿, Redmi Note 11T Pro cÃ²n Ä‘Æ°á»£c trang bá»‹ táº§n sá»‘ quÃ©t 144 Hz vÃ  tá»‘c Ä‘á»™ láº¥y máº«u cáº£m á»©ng 270 Hz. Äiá»ƒm Ä‘áº·c biá»‡t á»Ÿ Redmi Note 11T Pro chÃ­nh lÃ  kháº£ nÄƒng tá»± Ä‘á»™ng Ä‘iá»u chá»‰nh táº§n sá»‘ quÃ©t sao cho phÃ¹ há»£p vá»›i á»©ng dá»¥ng mÃ  báº¡n sá»­ dá»¥ng. Vá»›i 7 má»©c Ä‘á»™ khÃ¡c nhau lÃ : 30 Hz, 48 Hz, 50 Hz, 60 Hz, 90 Hz, 120 Hz, 144 Hz, trong Ä‘Ã³ khi sá»­ dá»¥ng tÃ¡c vá»¥ lÆ°á»›t web hoáº·c xem video thÃ¬ Redmi Note 11T Pro sáº½ dao Ä‘á»™ng á»Ÿ 4 má»©c táº§n sá»‘ quÃ©t lÃ  30 Hz, 48 Hz, 50 Hz, 60 Hz. CÃ²n vá» nhá»¯ng tÃ¡c vá»¥ náº·ng hÆ¡n nhÆ° chÆ¡i game mÃ¡y sáº½ tá»± Ä‘iá»u chá»‰nh trong 4 má»©c tá»‘c Ä‘á»™ lÃ m má»›i cao hÆ¡n nhÆ°: 60 Hz, 90 Hz, 120 Hz vÃ  144 Hz, Ä‘iá»u nÃ y giÃºp thiáº¿t bá»‹ cÃ³ thá»ƒ hoáº¡t Ä‘á»™ng tá»‘i Æ°u, tiáº¿t kiá»‡m pin vÃ  giáº£m thiá»ƒu tÃ¬nh tráº¡ng giáº­t lag mang láº¡i cho báº¡n tráº£i nghiá»‡m sá»­ dá»¥ng mÆ°á»£t mÃ  hÆ¡n.', 2, 29, 'Tháº» SIM:	2 Nano SIM, 2 sÃ³ng Online;\r\nMÃ n hÃ¬nh:  6.6 inches, IPS LCD, 144Hz, HDR10;\r\nÄá»™ phÃ¢n giáº£i:	FullHD+ 1080 x 2460 pixels;\r\nCPU:  MediaTek Dimensity 8100 (5 nm);\r\nRAM: 8GB\r\nBá»™ nhá»›/ Tháº» nhá»›: 128GB/ 256GB/ 512GB;\r\nCamera sau: 64 MP + 8 MP + 2 MP;\r\nCamera trÆ°á»›c:	 16 MP, (wide), 1080p@30/60fps;\r\nJack 3.5mm/ Loa:  CÃ³, Loa kÃ©p Stereo;\r\nPin:	Li-Po 4400 mAh, sáº¡c nhanh 120W;\r\nMÃ u sáº¯c:	Xanh, Báº¡c, Äen', 'baÌ£c_1653530771.jpg', 'Äen;Xanh DÆ°Æ¡ng;Tráº¯ng', '8GB/128GB;8GB/256GB', '6900000;7400000', NULL, NULL),
(16, 'Xiaomi Black Shark 5 Pro', 15400000, 'thiáº¿t káº¿ mang Ä‘áº­m hÆ¡i hÆ°á»›ng cá»§a sá»± máº¡nh máº½ vÃ  nam tÃ­nh vá»›i hai lá»±a chá»n Ä‘en vÃ  tráº¯ng. Máº·t sau cá»§a mÃ¡y lÃ m báº±ng kim loáº¡i nhÃ¡m vÃ  há»a tiáº¿t Ä‘Æ°á»£c thiáº¿t káº¿ má»™t cÃ¡ch tá»‰ má»‰. ÄÆ°á»£c káº¿t há»£p tá»« hai máº·t kÃ­nh vá»›i nhau, kÃ¨m theo Ä‘Ã³ lÃ  logo hÃ¬nh chá»¯ S Ä‘Æ°á»£c lá»“ng ghÃ©p vÃ o nhá»¯ng nÃ©t Ä‘áº­m nháº¡t sáº¯c sáº£o mang Ä‘áº¿n cho Ä‘iá»‡n thoáº¡i cáº£m giÃ¡c vÃ´ cÃ¹ng cháº¥t chÆ¡i.', 2, 20, 'Tháº» SIM:	2 nano sim, 2 sÃ³ng online;\r\nMÃ n hÃ¬nh: 6.67 inches, OLED, 1B colors, 144Hz, HDR10+;\r\nÄá»™ phÃ¢n giáº£i:	FulHD+ 1080 x 2400 pixels, 20:9 ratio;\r\nCPU:  Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm);\r\nRAM:  8GB/12GB/16GB;\r\nBá»™ nhá»›/ Tháº» nhá»›:  256GB/521GB;\r\nCamera sau:  108 MP, f/1.8 + 13 MP, f/2.4 + 5 MP, f/2.4;\r\nCamera trÆ°á»›c:	 16 MP, HDR, 1080p@30fps;\r\nJack 3.5mm/ Loa:  KhÃ´ng/ Loa kÃ©p Stereo;\r\nPin:	Li-Po 4650 mAh, Fast charging 120W;\r\nMÃ u sáº¯c:	Tráº¯ng, Äen', 'thumbnailbs5protrang_1648973763.jpg', 'Äen;Tráº¯ng', '8GB/256GB;12GB/256GB', '15400000;16300000', NULL, NULL),
(17, 'Xiaomi Redmi K50 Gaming', 8000000, 'Trong tá»‘i ngÃ y 16/02, Xiaomi Ä‘Ã£ chÃ­nh thá»©c ra máº¯t Xiaomi Redmi K50 Gaming Edition - máº«u smartphone Ä‘Æ°á»£c tá»‘i Æ°u dÃ nh riÃªng cho nhá»¯ng game thá»§. Váº­y Redmi K50 Gaming Edition cÃ³ gÃ¬ má»›i? Redmi K50 Gaming Edition cáº¥u hÃ¬nh ra sao? Redmi K50 Gaming Edition giÃ¡ bao nhiÃªu? HÃ£y cÃ¹ng mÃ¬nh Ä‘iá»ƒm qua thÃ´ng sá»‘ cáº¥u hÃ¬nh cÅ©ng nhÆ° nhá»¯ng Ä‘iá»ƒm Ä‘áº·c biá»‡t trÃªn Redmi K50 Gaming Edition qua bÃ i viáº¿t dÆ°á»›i Ä‘Ã¢y nhÃ©.', 2, 40, 'Tháº» SIM: 2 Nano SIM, 2 sÃ³ng Online; Kiá»ƒu thiáº¿t káº¿: Khung viá»n kim loáº¡i, máº·t lÆ°ng kÃ­nh; MÃ n hÃ¬nh: 6.67 inches, OLED, 1 tá»· mÃ u, 120Hz, HDR10+; Äá»™ phÃ¢n giáº£i: Full HD+ 1080 x 2400 pixels, tá»· lá»‡ 20:9; CPU: Snapdragon 8 Gen 1 (4 nm); RAM: 8/12GB; Bá»™ nhá»›/ Tháº» nhá»›: 128GB/256GB; Camera sau: 64 MP, f/1.7, 26mm (wide), 8 MP, 2 MP; Camera trÆ°á»›c: 20MP, 1080p@30/60fps, 720p@120fps, HDR; Jack 3.5mm/ Loa: KhÃ´ng/ 4 loa Stereo tinh chá»‰nh bá»Ÿi JBL; Pin: Li-Po 4700mAh, Sáº¡c nhanh 120W', 'k50g-thumb_1645068336.jpg', 'Äen;Xanh DÆ°Æ¡ng;XÃ¡m', '8GB/128GB;12GB/128GB', '8000000;9100000', NULL, NULL),
(18, 'iPhone 12', 15000000, 'Káº¿t há»£p vá»›i cháº¥t liá»‡u kim loáº¡i sang trá»ng, iPhone 12 Ä‘Ã£ gÃ¢y Ä‘Æ°á»£c sá»± chÃº Ã½ cá»§a ngÆ°á»i Ä‘á»‘i diá»‡n khi báº¡n cáº§m trÃªn tay. Máº·t lÆ°ng iPhone 12 Ä‘Æ°á»£c trang bá»‹ gia cÃ´ng bÃ³ng báº©y Ä‘áº§y cuá»‘n hÃºt, tuy nhiÃªn khi cáº§m lÃ¢u báº¡n sáº½ tháº¥y thiáº¿t bá»‹ bÃ¡m Ä‘áº§y dáº¥u vÃ¢n tay. Do Ä‘Ã³ báº¡n nÃªn lau chÃ¹i thÆ°á»ng xuyÃªn Ä‘á»ƒ mÃ¡y luÃ´n sÃ¡ng bÃ³ng nhÃ©. VÃ  thÃªm má»™t Ä‘iá»ƒm ná»¯a mÃ  chÃºng ta cáº§n chÃº Ã½ á»Ÿ pháº§n máº·t lÆ°ng Ä‘Ã³ lÃ  cá»¥m camera kÃ©p vá»›i cháº¥t lÆ°á»£ng Ä‘Æ°á»£c nÃ¢ng cáº¥p lÃªn má»™t báº­c.Cáº£m giÃ¡c cáº§m náº¯m iPhone 12 ráº¥t sÆ°á»›ng vÃ  khÃ¡c láº¡ so vá»›i cÃ¡c thiáº¿t bá»‹ sá»Ÿ há»¯u cÃ¡c cáº¡nh bÃªn bo cong. NhÆ°ng khi cáº§m lÃ¢u, báº¡n sáº½ cáº£m tháº¥y hÆ¡i Ä‘au tay má»™t tÃ­ vÃ  náº¿u Ä‘Æ°á»£c, mÃ¬nh khuyÃªn báº¡n nÃªn trang bá»‹ thÃªm á»‘p lÆ°ng Ä‘á»ƒ cáº§m dá»… chá»‹u hÆ¡n.', 3, 100, 'Tháº» SIM: 2 sim (nano + esim); MÃ n hÃ¬nh: 6.1 inches, Super Retina XDR OLED, HDR10, Dolby Vision, 1200 nits; Äá»™ phÃ¢n giáº£i: 1170 x 2532 pixels, tá»· lá»‡ 19.5:9; CPU: Apple A14 Bionic (5 nm); RAM: 4GB; Bá»™ nhá»›/ Tháº» nhá»›: 64GB, 128GB, 256GB; Camera sau: 12 MP, f/1.6, 26mm (wide), 1.4Âµm, dual pixel PDAF, OIS, 12 MP; Camera trÆ°á»›c: 12 MP, f/2.2, HDR, 4K@60fps; Jack 3.5mm/ Loa: KhÃ´ng/ Loa kÃ©p Stereo; Pin: 2815 mAh, sáº¡c nhanh 20W; MÃ u sáº¯c: Äá», Xanh, Äen, Tráº¯ng', 'iphone-12-xanh_1614830057jpg_1647858237.jpg', 'Tráº¯ng;Äen;Xanh DÆ°Æ¡ng;TÃ­m;Xanh ', '64GB;128GB;256GB', '15000000;18200000;22000000', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id_orders_detail`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_product_id` (`order_product_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id_order_product`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id_orders_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id_order_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `orders_detail_ibfk_2` FOREIGN KEY (`order_product_id`) REFERENCES `order_product` (`id_order_product`);

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
