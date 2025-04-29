-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2025 at 09:52 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypham`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminacount`
--

CREATE TABLE `adminacount` (
  `id` int(11) NOT NULL,
  `tenAdmin` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `emailAdmin` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `passAdmin` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminacount`
--

INSERT INTO `adminacount` (`id`, `tenAdmin`, `emailAdmin`, `passAdmin`) VALUES
(5, 'Nguyễn Lưu', 'Thanhluu@gmail.com', 'Luuadmin'),
(6, 'Văn Quân', 'Vanquan@gmail.com', 'Quanadmin');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `idsp` int(11) DEFAULT NULL,
  `tenKH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `noidung` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `ngayBL` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `idsp`, `tenKH`, `noidung`, `ngayBL`) VALUES
(20, 1, ' Thành Luân', 'sản phẩm tốt lắm', '20-11-23 16:24:57'),
(22, 1, ' Thành Luân', 'tốt', '20-11-23 16:31:02'),
(23, 1, ' Thành Luân', 'san pham mới', '20-11-23 16:33:15'),
(24, 1, ' Thành Luân', 'mới nhất', '20-11-23 16:34:02'),
(26, 1, ' Văn Thái', 'giá hợp lý', '20-11-23 16:40:29'),
(28, 1, ' Thành Lưu', 'san pham ngon\n', '20-11-23 16:50:21'),
(29, 4, ' Thành Luân', 'Sản phẩm giá hợp lý với chất lượng.\n', '20-11-23 16:54:39'),
(30, 4, ' Thành Lưu', 'sản phẩm này tốt\n', '30-11-23 00:12:45'),
(31, 2, ' Thành Lưu', 'phong đẹp tr đã mua\n', '06-12-23 08:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `ImgUrl` text DEFAULT NULL,
  `evaluate` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `sold` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `priceOld` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `priceNew` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `discount` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `size` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `available` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `idsp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`id`, `title`, `ImgUrl`, `evaluate`, `sold`, `priceOld`, `priceNew`, `discount`, `size`, `available`, `idsp`) VALUES
(1, 'Sữa dưỡng cấp nước chuyên sâu Sum37 Water-full balancing', 'https://bizweb.dktcdn.net/100/487/946/products/sua-duong-cap-nuoc-chuyen-sau-sum37-water-full-balancing.jpg?v=1689323163843', '1.5k', '999', '1.400.000', '1.100.000', 'Giảm 50k', '100ml', '580', 1),
(2, 'Sữa dưỡng ẩm da Whoo Gongjinhyang Essential Nourishing Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/51105024-essential-nourishing-emulsion.jpg?v=1686648681990', '1.2k', '897', '1.650.000', '1.200.000', 'Giảm 70k', '120ml', '760', 2);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `loaisanpham` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `loaisanpham`) VALUES
(1, 'Sữa dưỡng da'),
(2, 'Son môi'),
(3, 'Mặt nạ dưỡng'),
(4, 'Chăm sóc cơ thể'),
(5, 'Chống nắng');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `yourAddress` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `productName` varchar(150) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalAmount` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `urlImg` text DEFAULT NULL,
  `priceOld` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `priceNew` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `sold` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `brand` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `nation` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `evaluate` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `discount` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `size` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `available` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `iddm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `title`, `urlImg`, `priceOld`, `priceNew`, `sold`, `brand`, `nation`, `evaluate`, `discount`, `size`, `available`, `iddm`) VALUES
(1, 'Sữa dưỡng cấp nước chuyên sâu Sum37 Water-full balancing', 'https://bizweb.dktcdn.net/100/487/946/products/sua-duong-cap-nuoc-chuyen-sau-sum37-water-full-balancing.jpg?v=1689323163843', '1.400.000', '1.100.000', '999', 'Ohui', 'Hàn Quốc', '867', '50', '100ml', '580', 1),
(2, 'Sữa dưỡng ẩm da Whoo Gongjinhyang Essential Nourishing Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/51105024-essential-nourishing-emulsion.jpg?v=1686648681990', '1.650.000', '1.200.000', '897', 'Ohui', 'Hàn Quốc', '663', '70', '120ml', '670', 1),
(3, 'Sữa dưỡng tái sinh Cheongidan Radiant Rejuvenating Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/51103541-cheongidan-emulsion-110-ml-2700000.png?v=1686901408943', '2.900.000', '2.350.000', '668', 'Ohui', 'Hàn Quốc', '580', '40', '110ml', '480', 1),
(4, 'Sữa dưỡng cân bằng Su:m37 Losec Summa Elixir Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/losec-summa-elixir-emulsion-51903335.jpg?v=1687849812480', '2.600.000', '1.950.000', '2.4k', 'Ohui', 'Hàn Quốc', '2.2k', '35', '100ml', '980', 1),
(5, 'Sữa Dưỡng Chống Lão Hóa Su:m37 Secret Enhancing Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/secret-emulsion-51903820.jpg?v=1687417702293', '1.500.000', '1.200.000', '3.6k', 'Ohui', 'Hàn Quốc', '867', '50', '100ml', '580', 1),
(6, 'Sữa dưỡng tái sinh Cheongidan Radiant Rejuvenating Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/51103541-cheongidan-emulsion-110-ml-2700000.png?v=1686901408943', '5.100.000', '3.570.000', '1.3k', 'Ohui', 'Hàn Quốc', '1.1k', '55', '120ml', '540', 1),
(7, 'Sữa dưỡng ngăn ngừa nếp nhăn OHUI Prime Advancer Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/prime-advancer-emulsion-300x300.png?v=1686641915200', '1.700.000', '1.400.000', '5.4k', 'Ohui', 'Hàn Quốc', '4.8k', '60', '110ml', '760', 1),
(8, 'Sữa dưỡng trẻ hóa làn da OHUI The First Geniture Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/the-first-geniture-emulsion-300x300.png?v=1686641110570', '2.700.000', '2.200.000', '1.6k', 'Ohui', 'Hàn Quốc', '1.2k', '45', '100ml', '1.1k', 1),
(9, 'Sữa dưỡng trắng da OHUI Extreme White Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/o-hui-extreme-white-emulsion-300x300.png?v=1686640768230', '2.100.000', '1.700.000', '887', 'Ohui', 'Hàn Quốc', '788', '40', '110ml', '760', 1),
(10, 'Sữa dưỡng cải thiện nếp nhăn OHUI Age Recovery Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/age-recovery-emulsion-300x300.png?v=1686640653947', '1.600.000', '1.200.000', '4.7k', 'Ohui', 'Hàn Quốc', '3.8k', '70', '100ml', '340', 1),
(11, 'Son Môi Cao Cấp Đông Y Whoo Mi Luxury Lip Rouge', 'https://bizweb.dktcdn.net/100/487/946/products/son-moi-cao-cap-dong-y-whoo-mi-luxury-lip-rouge-1.png?v=1697453377317', '990.000', '700.000', '7.5k', 'Ohui', 'Hàn Quốc', '6.9k', '55', '4G', '261', 2),
(12, 'Mặt nạ trẻ hóa da OHUI The First Geniture Ampoule Mask', 'https://bizweb.dktcdn.net/100/487/946/products/ohui-the-first-geniture-ampoule-mask-300x300.png?v=1686714208953', '350.000', '280.000', '5.7k', 'Ohui', 'Hàn Quốc', '4.7k', '50', '6M', '587', 3),
(13, 'Bộ Sữa Tắm Và Dưỡng Cơ Thể Whoo Spa Body Set 4pcs', 'https://bizweb.dktcdn.net/100/487/946/products/bo-sua-tam-va-duong-co-the-whoo-spa-body-set-4pcs.png?v=1697446996977', '1.850.000', '1.300.000', '1.7k', 'Ohui', 'Hàn Quốc', '867', '35', '150ml', '390', 4),
(14, 'Bộ Kem Chống Nắng Sum37 Sun-Away Velvet Sun Stick', 'https://bizweb.dktcdn.net/100/487/946/products/bo-kem-chong-nang-sum37-sun-away-velvet-sun-stick.png?v=1698725004647', '780.000', '600.000', '3.7k', 'Ohui', 'Hàn Quốc', '2.7k', '60', '100ml', '550', 5),
(15, 'Sữa dưỡng cao cấp Cheonyuldan Ultimate Rejuvenative Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/51106051-110ml-23.jpg?v=1686884860030', '3.850.000', '3.272.500', '1.4k', 'Ohui', 'Hàn Quốc', '1.1k', '55', '110ml', '380', 1),
(16, 'Sữa dưỡng tái sinh Cheongidan Radiant Rejuvenating Emulsion', 'https://bizweb.dktcdn.net/100/487/946/products/51105739-110ml-2108.jpg?v=1686821863037', '5.100.000', '4.080.000', '990', 'Ohui', 'Hàn Quốc', '765', '30', '100ml', '764', 1),
(17, 'Dưỡng Thể Victoria Secret Bombshell Intense Body Lotion', 'https://admin.vuahanghieu.com/upload/product/2023/09/duong-the-victoria-s-secret-bombshell-intense-body-lotion-250ml-65152e1486627-28092023144108.jpg', '1.400.000', '1.090.000', '3.6k', 'Victoria', 'Mỹ', '2.2k', '45', '250ml', '980', 1),
(18, 'Sữa Dưỡng Thể Victoria Secret Amber Romance Fragrance Lotion', 'https://admin.vuahanghieu.com/upload/product/2023/08/sua-duong-the-victoria-s-secret-amber-romance-fragrance-lotion-236ml-64e6f536bf53e-24082023131414.jpg', '970.000', '600.000', '2.8k', 'Victoria', 'Mỹ', '2.2k', '35', '100ml', '526', 1),
(19, 'Kem Dưỡng Thể Bath & Body Works BBW Body Cream Cherry Blossom', 'https://admin.vuahanghieu.com/upload/product/2023/05/kem-duong-the-bath-body-works-bbw-body-cream-cherry-blossom-226g-645df74058766-12052023152224.jpg', '890.000', '700.000', '778', 'Bath', 'Mỹ', '565', '30', '110ml', '670', 1),
(20, 'Dưỡng Thể Nước Hoa Chanel No.5 Body Lotion', 'https://admin.vuahanghieu.com/upload/product/2022/02/duong-the-nuoc-hoa-chanel-no-5-body-lotion-200ml-620df03587147-17022022135029.jpg', '2.200.000', '1.640.000', '1.7k', 'Chanel', 'Pháp', '1.2k', '50', '100ml', '810', 1),
(21, 'Son Burberry Kisses Matte 93 Russet Màu Đỏ Đất', 'https://admin.vuahanghieu.com/upload/product/2023/04/son-burberry-kisses-matte-93-russet-mau-do-dat-new-2022-643a15076db46-15042023100751.jpg', '1.500.000', '1.140.000 ', '1.5k', 'Burberry', 'Anh', '1.3k', '30', '4G', '1.3k', 2),
(22, 'Son Kem Burberry Kisses Liquid Matte Fire Red No.118 Màu Đỏ', 'https://admin.vuahanghieu.com/upload/product/2023/08/son-kem-burberry-kisses-liquid-matte-fire-red-no-118-mau-do-64ddcad2c8a1d-17082023142258.jpg', ' 1.600.000', '1.190.000', '2.5k', 'Burberry', 'Anh', '2.2k', '45', '5G', '1.2k', 2),
(23, 'Charlotte Tilbury – Hot Lips in Kim K.W Hồng nude', 'https://admin.vuahanghieu.com/upload/product/2019/03/5c80ca825fa2e-07032019143842.jpg', '990.000', '860.000', '1.1k', 'Charlotte ', 'Anh', '989', '55', '4G', '881', 2),
(24, 'Son Charlotte Tilbury Sexy Sienna Màu Hồng Cam Đất', 'https://admin.vuahanghieu.com/upload/product/2019/05/son-charlotte-tilbury-sexy-sienna-mau-hong-cam-dat-5cd3950fc775e-09052019094847.jpg', ' 980.000', '700.000', '2.1k', 'Charlotte', 'Anh', '1.7k', '40', '4G', '1.1k', 2),
(25, 'Son Burberry Lip Velvet Crush 25 Cinnamon Màu Đỏ Nâu', 'https://admin.vuahanghieu.com/upload/product/2021/08/son-burberry-lip-velvet-crush-25-cinnamon-mau-do-nau-610a02cec8a95-04082021100030.jpg', ' 850.000', '690.000', '680', 'Burberry', 'Anh', '595', '35', '4G', '941', 2),
(26, 'Son Kem Burberry Kisses Lip Lacquer No.45 Dark Russet Màu Đỏ Nâu', 'https://admin.vuahanghieu.com/upload/product/2021/08/son-kem-burberry-kisses-lip-lacquer-no-45-dark-russet-mau-do-nau-612c32bc3aba4-30082021082204.jpg', '1.700.000', '1.100.000', '1.5k', 'Burberry', 'Anh', '1.4k', '55', '5G', '805', 2),
(27, 'Son Gucci Rouge À Lèvres Mat 312 Nàu Cam Đất', 'https://admin.vuahanghieu.com/upload/product/2023/06/son-gucci-rouge-a-levres-mat-312-nau-cam-dat-64882b83ef965-13062023154035.jpg', ' 1.490.000', '1.190.000', '1.5k', 'Gucci', 'Ý', '1.2k', '35', '4G', '678', 2),
(28, 'Son Kem Lì Gucci Rouge Liquid Matte 203 Mildred Rosewood Màu Hồng Đất ', 'https://admin.vuahanghieu.com/upload/product/2022/09/son-kem-li-gucci-rouge-liquid-matte-203-mildred-rosewood-mau-hong-dat-new-2022-631befd73ee2d-10092022090055.jpg', ' 1.300.000', '1.090.000', '659', 'Gucci ', 'Ý', '486', '45', '3G', '480', 2),
(29, 'Set Son Gucci Matte Trio Lipstick Gift Set ', 'https://admin.vuahanghieu.com/upload/product/2022/12/set-son-gucci-matte-trio-lipstick-gift-set-3-x-3-5g-63a547e5db259-23122022131709.jpg', ' 3.600.000', '2.400.000', '1.8k', 'Gucci', 'ý', '1.5k', '55', '4G', '659', 2),
(30, 'Son Gucci Rouge À Lèvres Voile Lipstick 213 Love Is Better Màu Hồng Nâu', 'https://admin.vuahanghieu.com/upload/product/2022/02/son-gucci-rouge-a-levres-voile-lipstick-213-love-is-better-mau-hong-nau-620763ee5fe3b-12022022143822.jpg', ' 1.250.000', '1.050.000', '2.5k', 'Gucci', 'ý', '2.2k', '40', '3G', '280', 2),
(31, 'Son Gucci 516 Margaret Ruby Rouge De Beauté Brillant Màu Đỏ Lạnh', 'https://admin.vuahanghieu.com/upload/product/2021/09/son-gucci-516-margaret-ruby-rouge-de-beaute-brillant-mai-do-neon-612f1d41ecb90-01092021132713.jpg', '990.000', '740.000', '3.5k', 'Gucci', 'ý', '3.2k', '40', '4G', '310', 2),
(32, 'Son Ohui The First Geniture Lipstick Mood Rose 50708367 Màu Hồng Đất', 'https://admin.vuahanghieu.com/upload/product/2023/03/son-ohui-the-first-geniture-lipstick-mood-rose-50708367-mau-hong-dat-64240c26ca977-29032023170006.jpg', '1.270.000', '1.090.000', '1.9k', 'Ohui', 'Hàn Quốc', '1.4k', '45', '5G', '569', 2),
(33, 'Son Whoo Velvet Lip Rouge 18 Rose Pink Màu Hồng Đào', 'https://admin.vuahanghieu.com/upload/product/2023/03/son-whoo-velvet-lip-rouge-18-rose-pink-mau-hong-dao-64240603a84a6-29032023163355.jpg', ' 1.590.000', '1.290.000', '1.1k', 'Whoo', 'Hàn Quốc', '879', '45', '3G', '380', 2),
(34, 'Mặt Nạ Dưỡng Ẩm Trắng Da Martiderm The Originals Moisturising Mask', 'https://admin.vuahanghieu.com/upload/product/2023/10/mat-na-duong-am-trang-da-martiderm-the-originals-moisturising-mask-hop-10-mieng-6528c1a5f0194-13102023110349.jpg', '1.680.000', '1.359.000', '5.7k', 'Martiderm ', 'Tây Ban Nha', '4.2k', '55', '10M', '679', 3),
(35, 'Set 5 Miếng Mặt Nạ Phục Hồi Cấp Ẩm SMAS Peptide Silk Mask', 'https://admin.vuahanghieu.com/upload/product/2022/05/set-5-mieng-mat-na-phuc-hoi-cap-am-smas-peptide-silk-mask-5-x-25g-629479b6b5363-30052022150054.jpg', '980.000', '690.000', '3.7k', 'Smas', 'Hàn Quốc', '3.2k', '50', '5M', '780', 3),
(36, 'Mặt nạ ngủ Whoo cho mặt và cổ Gongjinhyang Neck & Face Sleeping Repair', 'https://bizweb.dktcdn.net/100/487/946/products/51105028-gongjinhyang-neck-face-sleeping-repair.jpg?v=1686648516293', '1.800.000', '1.500.000', '3.5k', 'Ohui', 'Hàn Quốc', '2.2k', '30', '90ml', '528', 3),
(37, 'Mặt nạ Su:m37 Mini Waterfull Radiant', 'https://bizweb.dktcdn.net/100/487/946/products/sum005-aa4c5ac35359478ab1ee272c3.jpg?v=1686216999317', '680.000', '450.000', '2.1k', 'Ohui', 'Hàn Quốc', '1.6k', '55', '90ml', '1.5k', 3),
(38, 'Mặt nạ dưỡng trắng OHUI Extreme White 3D Black Mask', 'https://bizweb.dktcdn.net/100/487/946/products/ohui-extreme-white-3d-black-mask-300x300.png?v=1686710897133', '750.000', '480.000', '3.8k', 'Ohui', 'Hàn Quốc', '2.6k', '50', '6M', '760', 3),
(39, 'Mặt Nạ Cung Cấp Collagen Foreo Youth Junkie 6 Miếng', 'https://admin.vuahanghieu.com/upload/product/2022/02/mat-na-cung-cap-collagen-foreo-youth-junkie-6-mieng-620b1dbe7d8b6-15022022102758.jpg', '850.000', '590.000', '2.3k', 'Foreo ', 'Thụy Điển', '2.2k', '60', '6M', '807', 3),
(40, 'Mặt Nạ Ngủ Thải Độc Da Image Vital C Hydrating Overnight Masque', 'https://admin.vuahanghieu.com/upload/product/2023/09/mat-na-ngu-thai-doc-da-image-vital-c-hydrating-overnight-masque-57g-64f6e67d4687d-05092023152741.jpg', '2.950.000', '1.999.000', '3.2k', 'Image ', 'Mỹ', '2.2k', '80', '110ml', '190', 3),
(41, 'Combo Mặt Nạ Tế Bào Gốc Hỗ Trợ Trẻ Hóa Da Kor Japan ', 'https://admin.vuahanghieu.com/upload/product/2022/08/combo-mat-na-te-bao-goc-ho-tro-tre-hoa-da-the-stem-cell-facial-treatment-mask-set-2-goi-62ea39ac99e14-03082022160236.jpg', '830.000', '449.000', '3.7k', 'Kor', 'Japan', '2.2k', '345', '5M', '150', 3),
(42, 'Mặt Nạ Chăm Sóc Vùng Mắt Valmont Eye Instant Stress Relieving Mask', 'https://admin.vuahanghieu.com/upload/product/2022/12/mat-na-cham-soc-vung-mat-valmont-eye-instant-stress-relieving-mask-5-bo-1-hop-63a3faf941b96-22122022133641.jpg', '6.700.000', '4.905.000', '1.9k', 'Valmont', 'Pháp', '2.2k', '75', '110ml', '764', 3),
(43, 'Mặt Nạ Hỗ Trợ Phục Hồi Da Mask Rejuran Healing', 'https://admin.vuahanghieu.com/upload/product/2022/11/mat-na-ho-tro-phuc-hoi-da-mask-rejuran-healing-hop-5-mieng-636c515435fd0-10112022081812.jpg', '690.000', '360.000', '4.3k', 'Rejuran ', 'Hàn Quốc', '3.2k', '25', '5M', '180', 3),
(44, 'Mặt Nạ Tảo Xoắn Volayon Spinnem Powder', 'https://admin.vuahanghieu.com/upload/product/2022/07/mat-na-tao-xoan-volayon-spinnem-powder-500mg-62e20d1220d4c-28072022111410.jpg', '1.390.000', '1.080.000 ', '4.7k', 'Ohui', 'Hàn Quốc', '3.2k', '35', '50G', '487', 3),
(45, 'Bộ Kem Tay Sum37 Time Energy Hand Cream', 'https://bizweb.dktcdn.net/100/487/946/products/bo-kem-tay-sum37-time-energy-hand-cream.png?v=1698656672347', '670.000', '603.000', '5.4k', 'Ohui', 'Hàn Quốc', '3.8k', '25', '100ml', '758', 4),
(46, 'Kem Dưỡng Thể Đông Y Whoo Spa Body Cream', 'https://bizweb.dktcdn.net/100/487/946/products/kem-duong-the-dong-y-whoo-spa-body-cream.png?v=1697446160793', '1.350.000', '1.115.000', '1.1k', 'Ohui', 'Hàn Quốc', '864', '30', '110ml', '980', 4),
(47, 'Sữa dưỡng thể Đông y WhooSpa Essential Moisturizer', 'https://bizweb.dktcdn.net/100/487/946/products/51104810-1901-220ml.jpg?v=1686796649653', '950.000', '855.000', '1.7k', 'Ohui', 'Hàn Quốc', '1.2k', '20', '120ml', '680', 4),
(48, 'Dầu gội thảo dược Đông y WhooSpa Essence Shampoo', 'https://bizweb.dktcdn.net/100/487/946/products/51104811-1901-350ml.jpg?v=1686796502223', '870.000', '603.000', '1.4k', 'Ohui', 'Hàn Quốc', '1k', '25', '100ml', '820', 4),
(49, 'Sữa tắm liệu pháp hải dương OHUI Delight Therapy Body Wash', 'https://bizweb.dktcdn.net/100/487/946/products/delight-therapy-body-wash-new-300x300.png?v=1686728847190', '700.000', '630.000', '1.9k', 'Ohui', 'Hàn Quốc', '1.6k', '30', '100ml', '350', 4),
(50, 'Kem dưỡng da tay Whoo Gongjinhyang Royal Hand Cream', 'https://bizweb.dktcdn.net/100/487/946/products/royal-hand-cream.jpg?v=1686650904730', '830.000', '567.000', '1.6k', 'Ohui', 'Hàn Quốc', '1.4k', '30', '110ml', '803', 4),
(51, 'Sữa tắm thảo dược Đông y Whoo Spa Oil Shower', 'https://bizweb.dktcdn.net/100/487/946/products/51104809-1901-220ml.jpg?v=1686737515357', '900.000', '710.000', '1.3k', 'Ohui', 'Hàn Quốc', '1.2k', '40', '100ml', '450', 4),
(52, 'Kem Dưỡng Hỗ Trợ Phục Hồi Và Làm Dịu Da', 'https://admin.vuahanghieu.com/upload/product/2023/07/kem-duong-ho-tro-phuc-hoi-va-lam-diu-da-obagi-clinical-kinetin-hydrating-cream-50ml-64b4b3c303964-17072023102139.jpg', '1.560.000', '1.190.000', '3.2k', 'Obagi ', 'Hàn Quốc', '2.2k', '50', '110ml', '805', 4),
(53, 'Kem Dưỡng Hỗ Trợ Trắng Da Ban Đêm', 'https://admin.vuahanghieu.com/upload/product/2023/03/kem-duong-ho-tro-trang-da-ban-dem-martiderm-pigment-zero-dsp-renovation-cream-40ml-641975adf1f6c-21032023161525.jpg', '1.980.000', '1.290.000 ', '4.1k', 'MartiDerm ', 'Anh', '3.2k', '55', '120ml', '437', 4),
(54, 'Kem Trẻ Hóa, Nâng Cơ Và Săn Chắc Da Image The Max Contour Gel Crème', 'https://admin.vuahanghieu.com/upload/product/2023/10/kem-tre-hoa-nang-co-va-san-chac-da-image-the-max-contour-gel-creme-50ml-651b71a2e1f61-03102023084258.jpg', '3.500.000', '2.990.000', '2.7k', 'Image ', 'Mỹ', '2.2k', '45', '100ml', '764', 4),
(55, 'Kem chống nắng nâng tone OHUI UV Force Tone Up', 'https://bizweb.dktcdn.net/100/487/946/products/kem-chong-nang-nang-tone-ohui-uv-force-tone-up.png?v=1698653541473', '1.400.000', '1.150.000', '1.5k', 'Ohui', 'Hàn Quốc', '1.2k', '20', '90ml', '652', 5),
(56, 'Kem Chống Nắng Đa Tính Năng Cao Cấp Sum37', 'https://bizweb.dktcdn.net/100/487/946/products/kem-chong-nang-da-tinh-nang-cao-cap-sum37-losecsumma-lumiere-sun-protector-spf50-pa.png?v=1695977290473', '1.500.000', '1.250.000', '1.7k', 'Ohui', 'Hàn Quốc', '1.5k', '30', '90ml', '390', 5),
(57, 'Kem Chống Nắng OHUI Miracle Toning Daily Sun', 'https://bizweb.dktcdn.net/100/487/946/products/kem-chong-nang-ohui-miracle-toning-daily-sun-spf50-pa.png?v=1693993670037', '830.000', '747.000', '3.3k', 'Ohui', 'Hàn Quốc', '2.8k', '20', '80ml', '650', 5),
(58, 'Lăn chống nắng Su:m 37 Sun-Away Velvet Sun Stick SPF50 ', 'https://bizweb.dktcdn.net/100/487/946/products/sum-37-sun-away-velvet-sun-stick-spf50-82e1c44ce6744636a701c9b052c3aa28-master.jpg?v=1689655332793', '690.000', '600.000', '5.7k', 'Ohui', 'Hàn Quốc', '5.5k', '25', '80ml', '764', 5),
(59, 'Kem chống nắng Su:m37 Sun-away Cooling Sun', 'https://bizweb.dktcdn.net/100/487/946/products/kem-chong-nang-sum37-sun-away-cooling-sun-cc-ex-spf50-plus-pa-plus-plus-plus.jpg?v=1689653959897', '1.200.000', '1.080.000', '1.8k', 'Ohui', 'Hàn Quốc', '1.4k', '35', '90ml', '380', 5),
(60, 'Phấn chống nắng dạng cushion Jin Hae Yoon Cushion Sun Balm SPF50+, PA+++', 'https://bizweb.dktcdn.net/100/487/946/products/51102997-cushion-sun-balm.jpg?v=1686716086370', '1.400.000', '1.260.000', '1.2k', 'Ohui', 'Hàn Quốc', '769', '30', '100ml', '780', 5),
(61, 'Kem chống nắng kiểm soát dầu OHUI Day Shield Perfect Sun Black', 'https://bizweb.dktcdn.net/100/487/946/products/day-shield-perfect-sun-black-spf50-pa-300x300.png?v=1686726453197', '950.000', '855.000', '2.7k', 'Ohui', 'Hàn Quốc', '2.4k', '40', '90ml', '463', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `tenKH` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `pass` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `tenKH`, `email`, `pass`) VALUES
(14, 'Thành Lưu', 'Thanhluu@gmail.com', 'Luu2004'),
(15, 'Thành Luân', 'Thanhluan@gmail.com', 'Luan0911'),
(16, 'Văn Thái', 'Vanthai@gmail.com', 'Thai2005'),
(17, 'Văn Quân', 'Vanquan@gmail.com', 'Quan1996'),
(18, 'Phan Đạt', 'Phandat@gmail.com', 'Dat2005'),
(19, 'Ngọc Anh', 'Ngocanh@gmail.com', 'Anh2001'),
(20, 'Thúy Nga', 'Thuynga@gmail.com', 'Nga2001'),
(21, 'Thanh Thúy', 'Thanhthuy@gmail.com', 'Thuy1998');

-- --------------------------------------------------------

--
-- Table structure for table `xacnhandonhang`
--

CREATE TABLE `xacnhandonhang` (
  `id` int(11) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalAmount` text NOT NULL,
  `actions` varchar(50) NOT NULL,
  `statuss` varchar(50) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `xacnhandonhang`
--

INSERT INTO `xacnhandonhang` (`id`, `customerName`, `img`, `productName`, `quantity`, `totalAmount`, `actions`, `statuss`, `userId`) VALUES
(2, 'Nguyễn Thành Lưu', 'https://bizweb.dktcdn.net/100/487/946/products/age-recovery-emulsion-300x300.png?v=1686640653947', 'Sữa dưỡng cải thiện nếp nhăn OHUI Age Recovery Emulsion', 5, '5,650,000đ', 'Đã Xác Nhận', 'Đang Giao', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminacount`
--
ALTER TABLE `adminacount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `xacnhandonhang`
--
ALTER TABLE `xacnhandonhang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminacount`
--
ALTER TABLE `adminacount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `xacnhandonhang`
--
ALTER TABLE `xacnhandonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
