-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 02:09 PM
-- Server version: 5.0.45-community-nt
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ujian_ukk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcomments`
--

CREATE TABLE `tbcomments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbtags`
--

CREATE TABLE `tbtags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi_tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar_tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbtag_comments`
--

CREATE TABLE `tbtag_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbtag_tweet`
--

CREATE TABLE `tbtag_tweet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi_tagtweet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar_tagtweet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_tagtweet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbtweets`
--

CREATE TABLE `tbtweets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `isi_posting` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar_posting` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_posting` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbtweets`
--

INSERT INTO `tbtweets` (`id`, `isi_posting`, `gambar_posting`, `file_posting`, `created_at`, `updated_at`) VALUES
(18, 'ada', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'abcd', 'abcd@gmail.com', NULL, 'e2fc714c4727ee9395f324cd2e7f331f', '', NULL, NULL, NULL),
(10, 'aaa', 'aaa@gmail.com', NULL, '47bce5c74f589f4867dbd57e9ca9f808', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcomments`
--
ALTER TABLE `tbcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtags`
--
ALTER TABLE `tbtags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtag_comments`
--
ALTER TABLE `tbtag_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtag_tweet`
--
ALTER TABLE `tbtag_tweet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtweets`
--
ALTER TABLE `tbtweets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcomments`
--
ALTER TABLE `tbcomments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL auto_increment;

--
-- AUTO_INCREMENT for table `tbtags`
--
ALTER TABLE `tbtags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL auto_increment;

--
-- AUTO_INCREMENT for table `tbtag_comments`
--
ALTER TABLE `tbtag_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL auto_increment;

--
-- AUTO_INCREMENT for table `tbtag_tweet`
--
ALTER TABLE `tbtag_tweet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL auto_increment;

--
-- AUTO_INCREMENT for table `tbtweets`
--
ALTER TABLE `tbtweets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL auto_increment, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL auto_increment, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
