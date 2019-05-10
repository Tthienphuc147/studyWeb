-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 08:36 PM
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

CREATE TABLE `baihoc` (
  `id` int(11) NOT NULL,
  `id_chitietlophoc_monhoc` int(11) NOT NULL,
  `id_mucdo` int(11) NOT NULL,
  `tenbaihoc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `thoigian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baihoc`
--

INSERT INTO `baihoc` (`id`, `id_chitietlophoc_monhoc`, `id_mucdo`, `tenbaihoc`, `created_at`, `updated_at`, `thoigian`) VALUES
(1, 1, 1, 'Bài 1', '2019-05-09 17:00:00', '0000-00-00 00:00:00', '2019-05-10 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `chitietbaihoc`
--

CREATE TABLE `chitietbaihoc` (
  `id` int(11) NOT NULL,
  `id_baihoc` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `video` text NOT NULL,
  `audio` text NOT NULL,
  `noidungbaihoc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietbaihoc`
--

INSERT INTO `chitietbaihoc` (`id`, `id_baihoc`, `created_at`, `updated_at`, `video`, `audio`, `noidungbaihoc`) VALUES
(1, 1, '2019-05-10 10:08:56', '2019-05-10 17:56:26', '<iframe width=\"80%\" height=\"304\" src=\"https://www.youtube.com/embed/bj0NZxzprZQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1.mp3', '<p><span style=\"font-size:18px\">Trong vườn cây ăn quả nhà bác Hồng trước đây có tất cả 50 cây vải. Mùa xuân vừa rồi bác trồng thêm 2 chục cây vải nữa. \r\nVậy hiện nay số cây vải có trong vườn nhà bác Hồng có tất cả ........... cây.</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `chitietlophoc_monhoc`
--

CREATE TABLE `chitietlophoc_monhoc` (
  `id` int(11) NOT NULL,
  `id_monhoc` int(11) NOT NULL,
  `id_lophoc` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietlophoc_monhoc`
--

INSERT INTO `chitietlophoc_monhoc` (`id`, `id_monhoc`, `id_lophoc`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-05-09 17:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, '2019-05-09 17:00:00', '0000-00-00 00:00:00'),
(3, 1, 2, '2019-05-09 17:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dapan`
--

CREATE TABLE `dapan` (
  `id` int(11) NOT NULL,
  `id_chitietbaihoc` int(11) NOT NULL,
  `dapan` tinyint(1) NOT NULL,
  `luachon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dapan`
--

INSERT INTO `dapan` (`id`, `id_chitietbaihoc`, `dapan`, `luachon`) VALUES
(1, 0, 0, '1'),
(2, 0, 1, '2'),
(3, 1, 1, '70'),
(4, 1, 0, '60'),
(5, 1, 0, '80'),
(6, 1, 0, '90');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `id` int(11) NOT NULL,
  `tenlophoc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`id`, `tenlophoc`) VALUES
(1, 'LỚP 1'),
(2, 'LỚP 2');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `id` int(11) NOT NULL,
  `tenmonhoc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`id`, `tenmonhoc`) VALUES
(1, 'Toán'),
(2, 'Văn');

-- --------------------------------------------------------

--
-- Table structure for table `mucdo`
--

CREATE TABLE `mucdo` (
  `id` int(11) NOT NULL,
  `tenmucdo` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `dapan`
--
ALTER TABLE `dapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baihoc`
--
ALTER TABLE `baihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chitietbaihoc`
--
ALTER TABLE `chitietbaihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chitietlophoc_monhoc`
--
ALTER TABLE `chitietlophoc_monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dapan`
--
ALTER TABLE `dapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mucdo`
--
ALTER TABLE `mucdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
