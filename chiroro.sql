-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2016 at 04:07 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chiroro`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `furigana` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `contact_way` varchar(255) DEFAULT NULL,
  `language` char(4) DEFAULT NULL,
  `comment` text,
  `reader` tinyint(2) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(2) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `locale` char(4) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `locale`, `name`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'vi', 'Tiếng Việt', 0, '2015-12-29 17:00:00', '2015-12-29 17:00:00'),
(2, 'en', 'English', 0, '2015-12-29 17:00:00', '2015-12-29 17:00:00'),
(3, 'ja', '日本語', 0, '2015-12-29 17:00:00', '2015-12-29 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recruit`
--

CREATE TABLE `recruit` (
  `id` int(11) NOT NULL,
  `locale` char(4) NOT NULL,
  `position` varchar(100) NOT NULL,
  `content` text,
  `publish` tinyint(4) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_desc` varchar(255) DEFAULT NULL,
  `title_logo` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `meta_key`, `meta_desc`, `title_logo`, `site_logo`, `email`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Chiroro-Net Viet', 'chiroro-net viet', 'Chiroro-Net Viet', '/favicon/favicon.png', '/logo/logo_site.png', 'dao.tta@chiroro.com.vn', 0, '2016-01-16 02:37:43', '2016-01-15 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `signature`
--

CREATE TABLE `signature` (
  `id` int(11) NOT NULL,
  `content` text,
  `locale` char(8) DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signature`
--

INSERT INTO `signature` (`id`, `content`, `locale`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\r\n安藤 究真 / Kyuma ANDO [kyuma@chiroro.com.vn]\r\nGiám đốc / Director\r\n────────────────────────────────\r\nCÔNG TY TNHH CHIRORO-NET VIỆT / Chiroro-Net Viet Co.,Ltd.\r\nĐC : 187/7 Điện Biên Phủ, Phường Đa Kao, Quận 1, TPHCM\r\nĐT : 08-44540020 FAX : 08-38230599 Mobi : 094-2396902\r\nWebsite : http://www.chiroro.com.vn/\r\n━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━', 'vi', 0, '2016-01-15 02:22:09', '2016-01-14 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `full_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `furigana` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `last_login`, `full_name`, `furigana`, `status`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@chiroro.com.vn', '$2y$10$ICSobrhOXgJytLqGgfSgpeX1KrBLPSfRLZUvRKdcwE2TwdM5waojq', 'F5hgdKqJKlpdgMky8IpHb98z6PNYv1t39ojcM3M9FOMmbLWfs9tmfl0dfaEv', '2016-01-17 15:04:38', 'Admin', NULL, 1, 1, '2015-12-28 17:00:00', '2016-01-17 15:04:38'),
(4, 'staff', 'staff@chiroro.com.vn', '$2y$10$XlfqDRLubO9dylbFrhUeMeWallHVPM9Ec4L1r7DpL9XOOks6CGwD2', '61qJ6ZVUVf7LMJKR07tfPh3M68rCtLKKqQMQAUzLXPcOsqEdq2H1K3WoNXaW', '2016-01-17 15:13:34', 'Staff', NULL, 1, 0, '2016-01-14 17:00:00', '2016-01-17 15:13:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruit`
--
ALTER TABLE `recruit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signature`
--
ALTER TABLE `signature`
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
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recruit`
--
ALTER TABLE `recruit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `signature`
--
ALTER TABLE `signature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
