-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2021 at 10:41 PM
-- Server version: 8.0.23
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humg`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`) VALUES
(1, 'Gioi thieu', NULL),
(2, 'Tuyen sinh', NULL),
(3, 'Thu ngo', 1),
(4, 'Ve chung toi', 1),
(5, 'Tin tuc', NULL),
(6, 'Thong bao', 5),
(7, 'Ban Tin', 5);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `category_id`) VALUES
(1, 'DỰ ÁN NCKH CỦA NHÓM SINH VIÊN KHOA DẦU KHÍ NHẬN ĐƯỢC SỰ QUAN TÂM CỦA CÁC NHÀ CHUYÊN MÔN VÀ BÁO GIỚI\r\n', 'Năm 2020, cuộc thi Ý tưởng khởi nghiệp SV của HUMG sau khi kết thúc vòng thi sơ khảo đã chọn ra 8 ý tưởng dự thi chung kết cấp trường. Sau đó, tiếp tục chọn ra 01 ý tưởng cùng với 69 ý tưởng xuất sắc trên toàn quốc để tham gia cuộc thi Ý tưởng khởi nghiệp SV cấp quốc gia (SV_STARTUP 2020)\r\n\r\n\r\n🧬Đó là ý tưởng “Sản xuất đồ bảo hộ y tế tự hủy” của nhóm sinh viên Khoa Dầu khí gồm các em: Lê Thị Mát, Bùi Thu Thủy, Vũ Đình Khiêm, Đoàn Tâm Anh, ngành Công nghệ kỹ thuật hóa học, bộ môn Lọc hóa dầu, khoa Dầu khí. Dự án được Ban Tổ chức nhận xét là rất tiềm năng; Đã nhận được sự quan tâm của Ban Lãnh đạo trường, sự cổ vũ của các bạn sinh viên nên nhóm đã tiếp tục nghiên cứu và triển khai dự án sau đó.\r\n\r\n', '2021-08-19 21:43:50', 5),
(2, 'Covid 19 xxxx', 'That dang buon', '2021-08-27 22:09:48', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
