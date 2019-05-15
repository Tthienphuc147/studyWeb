-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 03:33 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoctructuyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `baihoc`
--
Drop table if exists `baihoc`; 
CREATE TABLE `baihoc` (
  `id` int(11) NOT NULL,
  `id_chitietlophoc_monhoc` int(11) NOT NULL,
  `tenbaihoc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `thoigian` datetime NOT NULL,
  `anh` text NOT NULL,
  `id_loaibai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `chitietbaihoc`
--
Drop table if exists `chitietbaihoc`;
CREATE TABLE `chitietbaihoc` (
  `id` int(11) NOT NULL,
  `id_baihoc` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `video` text NOT NULL,
  `audio` text NOT NULL,
  `noidungbaihoc` text NOT NULL,
  `id_mucdo` int(11) NOT NULL,
  `id_loaitracnghiem` int(11) NOT NULL,
  `anh` text NOT NULL,
  `noidungdapan` text NOT NULL,
  `ten` text NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `chitietlophoc_monhoc`
--
Drop table if exists `chitietlophoc_monhoc`;
CREATE TABLE `chitietlophoc_monhoc` (
  `id` int(11) NOT NULL,
  `id_monhoc` int(11) NOT NULL,
  `id_lophoc` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `chitietlop_user`
--
Drop table if exists `chitietlop_user`;
CREATE TABLE `chitietlop_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_chitietlophoc_monhoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `dapan`
--
Drop table if exists `dapan`;
CREATE TABLE `dapan` (
  `id` int(11) NOT NULL,
  `id_chitietbaihoc` int(11) NOT NULL,
  `dapan` tinyint(1) NOT NULL,
  `luachon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `loaibaihoc`
--
Drop table if exists `loaibaihoc`;
CREATE TABLE `loaibaihoc` (
  `id` int(11) NOT NULL,
  `tenloaibaihoc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaitracnghiem`
--
Drop table if exists `loaitracnghiem`;
CREATE TABLE `loaitracnghiem` (
  `id` int(11) NOT NULL,
  `tenloai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--
Drop table if exists `lophoc`;
CREATE TABLE `lophoc` (
  `id` int(11) NOT NULL,
  `tenlophoc` text NOT NULL,
  `anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--
Drop table if exists `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--
Drop table if exists `monhoc`;
CREATE TABLE `monhoc` (
  `id` int(11) NOT NULL,
  `tenmonhoc` text NOT NULL,
  `anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `mucdo`
--
Drop table if exists `mucdo`;
CREATE TABLE `mucdo` (
  `id` int(11) NOT NULL,
  `tenmucdo` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--
Drop table if exists `phanquyen`;
CREATE TABLE `phanquyen` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `phanquyen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `submit`
--
Drop table if exists `submit`;
CREATE TABLE `submit` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_chitietbaihoc` int(11) NOT NULL,
  `ketqua` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--
Drop table if exists `taikhoan`;
CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `tenloaitk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
Drop table if exists `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `sdt` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ngaysinh` datetime
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



--
-- Indexes for dumped tables
--

--
-- Indexes for table `baihoc`
--
ALTER TABLE `baihoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietbaihoc`
--
ALTER TABLE `chitietbaihoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietlophoc_monhoc`
--
ALTER TABLE `chitietlophoc_monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietlop_user`
--
ALTER TABLE `chitietlop_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dapan`
--
ALTER TABLE `dapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaibaihoc`
--
ALTER TABLE `loaibaihoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaitracnghiem`
--
ALTER TABLE `loaitracnghiem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mucdo`
--
ALTER TABLE `mucdo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit`
--
ALTER TABLE `submit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
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
-- AUTO_INCREMENT for table `baihoc`
--
ALTER TABLE `baihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietbaihoc`
--
ALTER TABLE `chitietbaihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietlophoc_monhoc`
--
ALTER TABLE `chitietlophoc_monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietlop_user`
--
ALTER TABLE `chitietlop_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dapan`
--
ALTER TABLE `dapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaibaihoc`
--
ALTER TABLE `loaibaihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaitracnghiem`
--
ALTER TABLE `loaitracnghiem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mucdo`
--
ALTER TABLE `mucdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `submit`
--
ALTER TABLE `submit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `id_taikhoan`, `sdt`, `created_at`, `updated_at`) VALUES
(NULL, 'Phan Đinh THiên Phuc', 'dthienphuc147@gmail.com', NULL, 'phuc123456', NULL, 1, 1111111111, NULL, NULL),
(NULL, 'a', 'a@gmail.com', NULL, '1', NULL, 1, 1, NULL, NULL),
(NULL, 'Bùi Trọng Nghĩa', 'nghiadh2016@gmail.com', NULL, 'nghia', NULL, 1, 1, NULL, NULL);

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `id_user`, `phanquyen`) VALUES
(NULL, 1, 'user'),
(NULL, 2, 'admin');
--
-- Dumping data for table `mucdo`
--

INSERT INTO `mucdo` (`id`, `tenmucdo`, `created_at`, `updated_at`) VALUES
(NULL, 'Dễ', '2019-05-10 17:00:00', '0000-00-00 00:00:00'),
(NULL, 'Bình Thường', '2019-05-11 04:34:50', '0000-00-00 00:00:00');

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`id`, `tenmonhoc`, `anh`) VALUES
(NULL, 'Toán', '0'),
(NULL, 'Văn', '0');

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`id`, `tenlophoc`, `anh`) VALUES
(NULL, 'LỚP 1', ''),
(NULL, 'LỚP 2', '');

--
-- Dumping data for table `loaitracnghiem`
--

INSERT INTO `loaitracnghiem` (`id`, `tenloai`) VALUES
(NULL, 'Trắc Nghiệm'),
(NULL, 'Điền');

--
-- Dumping data for table `dapan`
--

INSERT INTO `dapan` (`id`, `id_chitietbaihoc`, `dapan`, `luachon`) VALUES
(NULL, 2, 0, '200'),
(NULL, 2, 1, '100'),
(NULL, 1, 1, '70'),
(NULL, 1, 0, '60'),
(NULL, 1, 0, '80'),
(NULL, 1, 0, '90'),
(NULL, 3, 1, '200'),
(NULL, 3, 0, '300'),
(NULL, 4, 1, '200');

--
-- Dumping data for table `chitietlophoc_monhoc`
--

INSERT INTO `chitietlophoc_monhoc` (`id`, `id_monhoc`, `id_lophoc`, `created_at`, `updated_at`) VALUES
(NULL, 1, 1, '2019-05-09 17:00:00', '0000-00-00 00:00:00'),
(NULL, 2, 1, '2019-05-09 17:00:00', '0000-00-00 00:00:00'),
(NULL, 1, 2, '2019-05-09 17:00:00', '0000-00-00 00:00:00');

--
-- Dumping data for table `chitietbaihoc`
--

INSERT INTO `chitietbaihoc` (`id`, `id_baihoc`, `created_at`, `updated_at`, `video`, `audio`, `noidungbaihoc`, `id_mucdo`, `id_loaitracnghiem`, `anh`, `noidungdapan`, `ten`, `diem`) VALUES
(NULL, 1, '2019-05-10 10:08:56', '2019-05-11 06:16:15', '<iframe width=\"80%\" height=\"304\" src=\"https://www.youtube.com/embed/bj0NZxzprZQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1.mp3', '<p><span style=\"font-size:18px\">Trong vườn cây ăn quả nhà bác Hồng trước đây có tất cả 50 cây vải. Mùa xuân vừa rồi bác trồng thêm 2 chục cây vải nữa. \r\nVậy hiện nay số cây vải có trong vườn nhà bác Hồng có tất cả ........... cây.</span></p>\r\n', 1, 1, '/public/img/course/1.jpg', '<p><span style=\"font-size:18px\">50+20=70 vậy đáp án là 70</span></p>', 'Phép Cộng 1', 20),
(NULL, 1, '2019-05-10 17:00:00', '2019-05-11 06:16:30', '<iframe width=\"80%\" height=\"304\" src=\"https://www.youtube.com/embed/bj0NZxzprZQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1.mp3', '<p><span style=\"font-size:18px\">Trong vườn cây ăn quả nhà bác Hồng trước đây có tất cả 50 cây vải. Mùa xuân vừa rồi bác trồng thêm 50 cây vải nữa. \r\nVậy hiện nay số cây vải có trong vườn nhà bác Hồng có tất cả ........... cây.</span></p>\r\n', 1, 1, '/public/img/course/1.jpg', '<p><span style=\"font-size:18px\">50+50=100 vậy đáp án là 100</span></p>', 'Phép Cộng 2', 20),
(NULL, 1, '2019-05-10 17:00:00', '2019-05-11 06:16:44', '<iframe width=\"80%\" height=\"304\" src=\"https://www.youtube.com/embed/bj0NZxzprZQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1.mp3', '<p><span style=\"font-size:18px\">Trong vườn cây ăn quả nhà bác Hồng trước đây có tất cả 50 cây vải. Mùa xuân vừa rồi bác trồng thêm 150 cây vải nữa. \r\nVậy hiện nay số cây vải có trong vườn nhà bác Hồng có tất cả ........... cây.</span></p>\r\n', 2, 1, '/public/img/course/1.jpg', '<p><span style=\"font-size:18px\">50+150=200 vậy đáp án là 200</span></p>', 'Phép Cộng 3', 20),
(NULL, 1, '2019-05-10 17:00:00', '2019-05-11 06:37:58', '<iframe width=\"80%\" height=\"304\" src=\"https://www.youtube.com/embed/bj0NZxzprZQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1.mp3', '<p><span style=\"font-size:18px\">Trong vườn cây ăn quả nhà bác Hồng trước đây có tất cả 50 cây vải. Mùa xuân vừa rồi bác trồng thêm 150 cây vải nữa.  Vậy hiện nay số cây vải có trong vườn nhà bác Hồng có tất cả ........... cây.</span></p>', 1, 2, '/public/img/course/1.jpg', '<p><span style=\"font-size:18px\">50+150=200 vậy đáp án là 200</span></p>', 'Phép Cộng 4', 20);

--
-- Dumping data for table `baihoc`
--

INSERT INTO `baihoc` (`id`, `id_chitietlophoc_monhoc`, `tenbaihoc`, `created_at`, `updated_at`, `thoigian`, `anh`, `id_loaibai`) VALUES
(NULL, 1, 'Bài 1', '2019-05-09 17:00:00', '0000-00-00 00:00:00', '2019-05-10 00:00:00', '', 0),
(NULL, '1', 'Thi Giữa Khóa', '2019-05-15 00:00:00', '0000-00-00 00:00:00.000000', '2019-05-20 00:00:00', '', '1');

--
-- Dumping data for table `loaibaihoc`
--

INSERT INTO `baihoc` (`id`, `tenloaibaihoc`) VALUES
(NULL, 'Các Cuộc Thi'),
(NULL, 'Bài Học');
--
-- Dumping data for table `chitietlop_user`
--
INSERT INTO `chitietlop_user` (`id`, `id_user`, `id_chitietlophoc_monhoc`) 
VALUES (NULL, '3', '1'), 
(NULL, '1', '1');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
