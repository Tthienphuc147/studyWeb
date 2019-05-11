-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 11, 2019 lúc 08:50 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hoctructuyen`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihoc`
--

CREATE TABLE `baihoc` (
  `id` int(11) NOT NULL,
  `id_chitietlophoc_monhoc` int(11) NOT NULL,
  `tenbaihoc` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `thoigian` datetime NOT NULL,
  `anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baihoc`
--

INSERT INTO `baihoc` (`id`, `id_chitietlophoc_monhoc`, `tenbaihoc`, `created_at`, `updated_at`, `thoigian`, `anh`) VALUES
(1, 1, 'Bài 1', '2019-05-09 17:00:00', '0000-00-00 00:00:00', '2019-05-10 00:00:00', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietbaihoc`
--

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
  `ten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietbaihoc`
--

INSERT INTO `chitietbaihoc` (`id`, `id_baihoc`, `created_at`, `updated_at`, `video`, `audio`, `noidungbaihoc`, `id_mucdo`, `id_loaitracnghiem`, `anh`, `noidungdapan`, `ten`) VALUES
(1, 1, '2019-05-10 10:08:56', '2019-05-11 06:16:15', '<iframe width=\"80%\" height=\"304\" src=\"https://www.youtube.com/embed/bj0NZxzprZQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1.mp3', '<p><span style=\"font-size:18px\">Trong vườn cây ăn quả nhà bác Hồng trước đây có tất cả 50 cây vải. Mùa xuân vừa rồi bác trồng thêm 2 chục cây vải nữa. \r\nVậy hiện nay số cây vải có trong vườn nhà bác Hồng có tất cả ........... cây.</span></p>\r\n', 1, 1, '/public/img/course/1.jpg', '<p><span style=\"font-size:18px\">50+20=70 vậy đáp án là 70</span></p>', 'Phép Cộng 1'),
(3, 1, '2019-05-10 17:00:00', '2019-05-11 06:16:30', '<iframe width=\"80%\" height=\"304\" src=\"https://www.youtube.com/embed/bj0NZxzprZQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1.mp3', '<p><span style=\"font-size:18px\">Trong vườn cây ăn quả nhà bác Hồng trước đây có tất cả 50 cây vải. Mùa xuân vừa rồi bác trồng thêm 50 cây vải nữa. \r\nVậy hiện nay số cây vải có trong vườn nhà bác Hồng có tất cả ........... cây.</span></p>\r\n', 1, 1, '/public/img/course/1.jpg', '<p><span style=\"font-size:18px\">50+50=100 vậy đáp án là 100</span></p>', 'Phép Cộng 2'),
(4, 1, '2019-05-10 17:00:00', '2019-05-11 06:16:44', '<iframe width=\"80%\" height=\"304\" src=\"https://www.youtube.com/embed/bj0NZxzprZQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1.mp3', '<p><span style=\"font-size:18px\">Trong vườn cây ăn quả nhà bác Hồng trước đây có tất cả 50 cây vải. Mùa xuân vừa rồi bác trồng thêm 150 cây vải nữa. \r\nVậy hiện nay số cây vải có trong vườn nhà bác Hồng có tất cả ........... cây.</span></p>\r\n', 2, 1, '/public/img/course/1.jpg', '<p><span style=\"font-size:18px\">50+150=200 vậy đáp án là 200</span></p>', 'Phép Cộng 3'),
(5, 1, '2019-05-10 17:00:00', '2019-05-11 06:37:58', '<iframe width=\"80%\" height=\"304\" src=\"https://www.youtube.com/embed/bj0NZxzprZQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '1.mp3', '<p><span style=\"font-size:18px\">Trong vườn cây ăn quả nhà bác Hồng trước đây có tất cả 50 cây vải. Mùa xuân vừa rồi bác trồng thêm 150 cây vải nữa.  Vậy hiện nay số cây vải có trong vườn nhà bác Hồng có tất cả ........... cây.</span></p>', 1, 2, '/public/img/course/1.jpg', '<p><span style=\"font-size:18px\">50+150=200 vậy đáp án là 200</span></p>', 'Phép Cộng 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietlophoc_monhoc`
--

CREATE TABLE `chitietlophoc_monhoc` (
  `id` int(11) NOT NULL,
  `id_monhoc` int(11) NOT NULL,
  `id_lophoc` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietlophoc_monhoc`
--

INSERT INTO `chitietlophoc_monhoc` (`id`, `id_monhoc`, `id_lophoc`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-05-09 17:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, '2019-05-09 17:00:00', '0000-00-00 00:00:00'),
(3, 1, 2, '2019-05-09 17:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dapan`
--

CREATE TABLE `dapan` (
  `id` int(11) NOT NULL,
  `id_chitietbaihoc` int(11) NOT NULL,
  `dapan` tinyint(1) NOT NULL,
  `luachon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dapan`
--

INSERT INTO `dapan` (`id`, `id_chitietbaihoc`, `dapan`, `luachon`) VALUES
(1, 3, 0, '200'),
(2, 3, 1, '100'),
(3, 1, 1, '70'),
(4, 1, 0, '60'),
(5, 1, 0, '80'),
(6, 1, 0, '90'),
(7, 4, 1, '200'),
(8, 4, 0, '300'),
(9, 5, 1, '200');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitracnghiem`
--

CREATE TABLE `loaitracnghiem` (
  `id` int(11) NOT NULL,
  `tenloai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaitracnghiem`
--

INSERT INTO `loaitracnghiem` (`id`, `tenloai`) VALUES
(1, 'Trắc Nghiệm'),
(2, 'Điền');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `id` int(11) NOT NULL,
  `tenlophoc` text NOT NULL,
  `anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`id`, `tenlophoc`, `anh`) VALUES
(1, 'LỚP 1', ''),
(2, 'LỚP 2', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `id` int(11) NOT NULL,
  `tenmonhoc` text NOT NULL,
  `anh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`id`, `tenmonhoc`, `anh`) VALUES
(1, 'Toán', '0'),
(2, 'Văn', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mucdo`
--

CREATE TABLE `mucdo` (
  `id` int(11) NOT NULL,
  `tenmucdo` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `mucdo`
--

INSERT INTO `mucdo` (`id`, `tenmucdo`, `created_at`, `updated_at`) VALUES
(1, 'Dễ', '2019-05-10 17:00:00', '0000-00-00 00:00:00'),
(2, 'Bình Thường', '2019-05-11 04:34:50', '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihoc`
--
ALTER TABLE `baihoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietbaihoc`
--
ALTER TABLE `chitietbaihoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietlophoc_monhoc`
--
ALTER TABLE `chitietlophoc_monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dapan`
--
ALTER TABLE `dapan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaitracnghiem`
--
ALTER TABLE `loaitracnghiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mucdo`
--
ALTER TABLE `mucdo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihoc`
--
ALTER TABLE `baihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `chitietbaihoc`
--
ALTER TABLE `chitietbaihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `chitietlophoc_monhoc`
--
ALTER TABLE `chitietlophoc_monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `dapan`
--
ALTER TABLE `dapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `mucdo`
--
ALTER TABLE `mucdo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
