-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2025 at 10:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--
CREATE DATABASE IF NOT EXISTS `laravel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `laravel`;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_05_09_035418_create_products_table', 1),
(6, '2025_05_09_072604_add_level_to_users_table', 2),
(7, '2025_05_13_004024_update_create_products_table_structure', 2),
(8, '2025_05_20_015630_remove_columns_from_users_table', 3),
(9, '2025_05_20_023153_drop_unused_tables', 4);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meeting_location` varchar(255) DEFAULT NULL,
  `meeting_title` varchar(255) DEFAULT NULL,
  `meeting_time` datetime DEFAULT NULL,
  `organized_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `meeting_location`, `meeting_title`, `meeting_time`, `organized_by`) VALUES
(4, '2025-05-20 20:35:59', '2025-05-20 20:35:59', 'lop', 'lop', '2025-05-21 10:35:00', 'lop'),
(5, '2025-05-20 20:55:09', '2025-05-20 20:55:09', 'lop', 'lop', '2025-05-20 14:55:00', 'lop'),
(6, '2025-05-20 20:55:43', '2025-05-20 20:55:43', 'ok', 'lop', '2025-05-16 10:55:00', 'okeer'),
(7, '2025-05-20 20:56:00', '2025-05-20 20:56:00', 'okee', 'okee', '2025-05-24 10:55:00', 'okeer'),
(8, '2025-05-20 20:56:41', '2025-05-20 20:56:41', 'lop', 'okee', '2025-05-21 10:58:00', 'ok'),
(9, '2025-05-21 01:30:01', '2025-05-21 01:30:01', 'Okeeee', 'Okee', '2025-05-10 15:29:00', 'wowowow'),
(10, '2025-05-22 01:52:21', '2025-05-22 01:52:21', 'kooo', 'kooo', '2025-05-22 17:52:00', 'okyy'),
(11, '2025-05-22 17:12:26', '2025-05-22 17:12:26', 'ok', 'ok', '2025-05-23 07:12:00', 'wowowow'),
(12, '2025-05-22 17:18:37', '2025-05-22 17:18:37', 'ok', 'ok', '2025-05-23 07:12:00', 'wowowow'),
(13, '2025-05-22 17:19:39', '2025-05-22 17:19:39', 'lop', 'ok', '2025-05-23 07:22:00', 'okee'),
(14, '2025-05-22 17:20:11', '2025-05-22 17:20:11', 'Okeeee', 'okee', '2025-05-23 10:22:00', 'sa'),
(15, '2025-05-22 17:21:11', '2025-05-22 17:21:11', 'Okeeee', 'okee', '2025-05-24 13:22:00', 'sa'),
(16, '2025-05-22 17:54:44', '2025-05-22 17:54:44', 'Okeeee', 'lop', '2025-05-30 11:54:00', 'wowowow');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'asd@asd.com', '$2y$12$OaWqi//hKDWG6B2FTmvyPe.mIrALZpkEZ/VB32Vlx/VePncpGvvwW', '2025-05-09 01:42:14', '2025-05-09 01:42:14'),
(3, 'ase', 'asd@ase.com', '$2y$12$CHB.aaQQb35aNJsYHa.TT.kfMMgZwoOlnt0XBtvZ6xo0gBNHVCNR.', '2025-05-09 02:25:34', '2025-05-09 02:25:34'),
(4, 'alamak', 'alamak@alamak', '$2y$12$0VJFOQc.Wrn8shTHPJgUUe2pG/mTrII4/DhQiZQ4wPII8hx7wSYC.', '2025-05-12 20:15:33', '2025-05-12 20:15:33'),
(6, 'alamak', 'alamak@alamak.com', '$2y$12$4fYO6BqCi.3YvK6kf5kvmeACSZHgTEmafUYeRc7yC4r8WGs7OLIQC', '2025-05-12 20:16:15', '2025-05-12 20:16:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
