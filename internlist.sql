-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 04:20 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `internlist`
--

CREATE TABLE `internlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intern_start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intern_end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required_hours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `internlist`
--

INSERT INTO `internlist` (`id`, `last_name`, `first_name`, `date_of_birth`, `address`, `contact_number`, `email_address`, `department`, `position`, `intern_start`, `intern_end`, `required_hours`, `created_at`, `updated_at`) VALUES
(1, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ines Bulakan, Bulacan', '09327977469', 'shainaagbayani251@gmail.com', 'Commercial Department', 'Web Development Intern', '2021-08-05', '2021-10-05', '250 hours', '2021-08-17 02:42:38', '2021-08-17 02:42:38'),
(2, 'Santos', 'Mary Joy', '2000-07-07', 'Malolos Bulacan', '99', 'snssnn@fffff.comm', 'Commercial Department', 'Web Development Intern', '2021-08-05', '2021-10-05', '250 hours', '2021-08-17 08:02:40', '2021-08-17 08:02:40'),
(4, 'Santos', 'Ela Jane', '2021-12-31', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'ttyty', 'qq', '2021-12-31', '2021-12-30', '250 hours', '2021-08-17 08:52:43', '2021-08-17 08:52:43'),
(5, 'Santos', 'Ela Jane', '2021-12-31', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'ttyty', 'qq', '2021-12-31', '2021-12-30', '250 hours', '2021-08-17 08:52:46', '2021-08-17 08:52:46'),
(6, 'Santos', 'Ela Jane', '2021-12-31', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'ttyty', 'qq', '2021-12-31', '2021-12-30', '250 hours', '2021-08-17 08:52:47', '2021-08-17 08:52:47'),
(7, 'Santos', 'Ela Jane', '2021-12-31', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'ttyty', 'qq', '2021-12-31', '2021-12-30', '250 hours', '2021-08-17 08:53:34', '2021-08-17 08:53:34'),
(8, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:08', '2021-08-17 18:13:08'),
(9, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:15', '2021-08-17 18:13:15'),
(10, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:15', '2021-08-17 18:13:15'),
(11, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:16', '2021-08-17 18:13:16'),
(12, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:17', '2021-08-17 18:13:17'),
(13, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:17', '2021-08-17 18:13:17'),
(14, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:18', '2021-08-17 18:13:18'),
(15, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:19', '2021-08-17 18:13:19'),
(16, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:19', '2021-08-17 18:13:19'),
(17, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:20', '2021-08-17 18:13:20'),
(18, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:13:50', '2021-08-17 18:13:50'),
(19, 'Agbayani', 'Ma. Shaina', '2000-05-11', 'Santa Ana Bulakan, Bulacan', '09327977469', 'rog@gmail.com', 'Commercial Department', 'qq', '2021-10-30', '2022-12-31', '250 hours', '2021-08-17 18:14:03', '2021-08-17 18:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_08_17_094717_create_internlist_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `internlist`
--
ALTER TABLE `internlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internlist`
--
ALTER TABLE `internlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
