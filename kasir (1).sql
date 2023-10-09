-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 06:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gudangs`
--

CREATE TABLE `gudangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal_id` bigint(20) UNSIGNED NOT NULL,
  `toko_id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gudangs`
--

INSERT INTO `gudangs` (`id`, `personal_id`, `toko_id`, `kode_barang`, `nama_barang`, `stock`, `harga`, `created_at`, `updated_at`) VALUES
(8, 1, 1, 'B001', 'BESI', 4, 5000, '2023-09-22 10:33:34', '2023-10-01 08:47:59'),
(9, 1, 1, 'KAWAT', 'KAWAT 1/2', 9, 10000, '2023-09-22 11:20:37', '2023-10-01 03:55:14'),
(10, 1, 1, 'SMN3RODA', 'SEMEN 3 RODA 1 KG', 40, 30000, '2023-09-22 11:20:50', '2023-10-01 09:10:44'),
(11, 1, 1, 'BAUT', 'BAUT 1/2', 80, 500, '2023-09-22 11:23:59', '2023-10-01 03:57:07'),
(12, 1, 1, 'BTK', 'BATAKO PUTIH', 279, 1000, '2023-09-22 11:24:21', '2023-10-01 06:01:57'),
(13, 1, 1, 'GTNG', 'GENTENG', 982, 2000, '2023-09-22 11:25:38', '2023-09-24 05:47:35'),
(14, 1, 1, 'KRMK4X4', 'KERAMIK UKURAN 40 X 40 CM', 164, 2500, '2023-09-22 11:41:32', '2023-10-01 09:09:49'),
(15, 5, 1, 'LEDPHILIP', 'LAMPU LED PHILIP', 1000, 25000, '2023-09-29 02:38:51', '2023-09-29 03:30:46'),
(19, 6, 2, 'SKLR', 'SAKLAR BROKO', 90, 15000, '2023-09-29 04:26:35', '2023-09-29 07:10:07'),
(20, 6, 2, 'KBL1MM', 'KABEL 1 MM', 170, 700, '2023-09-29 04:27:54', '2023-09-29 06:28:47'),
(21, 6, 2, 'HNDLPINTU', 'HANDLE PINTU', 9, 32000, '2023-09-29 04:28:27', '2023-09-29 04:36:13'),
(22, 1, 1, 'LMPPHILIP10W', 'LAMPU PHILIP 10 WATT', 4, 20000, '2023-10-01 03:59:20', '2023-10-01 09:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` varchar(255) NOT NULL,
  `total_harga` int(225) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `toko_id` int(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `total_harga`, `user_id`, `toko_id`, `created_at`, `updated_at`) VALUES
('INV00000013', 505000, 3, 1, '2023-09-24 02:39:32', '2023-09-24 02:39:32'),
('INV00000023', 33000, 3, 1, '2023-09-24 02:40:56', '2023-09-24 02:40:56'),
('INV00000033', 32000, 3, 1, '2023-09-24 02:43:18', '2023-09-24 02:43:18'),
('INV00000043', 11000, 3, 1, '2023-09-24 02:52:15', '2023-09-24 02:52:15'),
('INV00000053', 4000, 3, 1, '2023-09-24 04:20:41', '2023-09-24 04:20:41'),
('INV00000063', 10000, 3, 1, '2023-09-24 04:21:53', '2023-09-24 04:21:53'),
('INV00000073', 30000, 3, 1, '2023-09-24 04:37:06', '2023-09-24 04:37:06'),
('INV00000083', 3000, 3, 1, '2023-09-24 04:38:33', '2023-09-24 04:38:33'),
('INV00000093', 2500, 3, 1, '2023-09-24 04:41:19', '2023-09-24 04:41:19'),
('INV00000103', 2500, 3, 1, '2023-09-24 04:41:34', '2023-09-24 04:41:34'),
('INV00000113', 1000, 3, 1, '2023-09-24 05:46:03', '2023-09-24 05:46:03'),
('INV00000123', 2000, 3, 1, '2023-09-24 05:47:41', '2023-09-24 05:47:41'),
('INV00000133', 0, 3, 1, '2023-09-24 06:20:45', '2023-09-24 06:20:45'),
('INV00000143', 2500, 3, 1, '2023-09-24 06:29:10', '2023-09-24 06:29:10'),
('INV00000153', 2500, 3, 1, '2023-09-24 06:30:55', '2023-09-24 06:30:55'),
('INV00000163', 2500, 3, 1, '2023-09-24 06:31:31', '2023-09-24 06:31:31'),
('INV00000173', 2500, 3, 1, '2023-09-24 06:32:03', '2023-09-24 06:32:03'),
('INV00000183', 0, 3, 1, '2023-09-24 06:32:03', '2023-09-24 06:32:03'),
('INV00000193', 0, 3, 1, '2023-09-24 06:32:04', '2023-09-24 06:32:04'),
('INV00000203', 2500, 3, 1, '2023-09-24 06:34:13', '2023-09-24 06:34:13'),
('INV00000213', 2500, 3, 1, '2023-09-24 06:35:32', '2023-09-24 06:35:32'),
('INV00000223', 2500, 3, 1, '2023-09-24 06:43:48', '2023-09-24 06:43:48'),
('INV00000233', 2500, 3, 1, '2023-09-24 06:44:45', '2023-09-24 06:44:45'),
('INV00000243', 2500, 3, 1, '2023-09-24 06:45:01', '2023-09-24 06:45:01'),
('INV00000253', 2500, 3, 1, '2023-09-24 06:49:50', '2023-09-24 06:49:50'),
('INV00000263', 5000, 3, 1, '2023-09-24 07:58:07', '2023-09-24 07:58:07'),
('INV00000273', 2500, 3, 1, '2023-09-24 07:58:50', '2023-09-24 07:58:50'),
('INV00000283', 2500, 3, 1, '2023-09-24 07:59:13', '2023-09-24 07:59:13'),
('INV00000293', 2500, 3, 1, '2023-09-24 07:59:33', '2023-09-24 07:59:33'),
('INV00000303', 2500, 3, 1, '2023-09-24 08:00:13', '2023-09-24 08:00:13'),
('INV00000313', 2500, 3, 1, '2023-09-24 08:01:13', '2023-09-24 08:01:13'),
('INV00000323', 2500, 3, 1, '2023-09-24 08:01:40', '2023-09-24 08:01:40'),
('INV00000333', 2500, 3, 1, '2023-09-24 08:02:12', '2023-09-24 08:02:12'),
('INV00000343', 0, 3, 1, '2023-09-26 01:46:14', '2023-09-26 01:46:14'),
('INV00000353', 0, 3, 1, '2023-09-26 01:53:18', '2023-09-26 01:53:18'),
('INV00000363', 61000, 3, 1, '2023-09-26 04:53:48', '2023-09-26 04:53:48'),
('INV00000373', 30000, 3, 1, '2023-10-06 03:25:29', '2023-10-06 03:25:29'),
('INV00000383', 40000, 3, 1, '2023-10-06 03:28:47', '2023-10-06 03:28:47'),
('INV00000393', 100000000, 3, 1, '2023-09-29 01:06:24', '2023-09-29 01:06:24'),
('INV00000404', 423000, 4, 2, '2023-09-29 04:39:18', '2023-09-29 04:39:18'),
('INV00000414', 70000, 4, 2, '2023-09-29 07:10:20', '2023-09-29 07:10:20'),
('INV00000423', 192000, 3, 1, '2023-10-01 03:57:30', '2023-10-01 03:57:30'),
('INV00000433', 564000, 3, 1, '2023-10-01 06:02:53', '2023-10-01 06:02:53'),
('INV00000443', 70000, 3, 1, '2023-10-01 09:10:47', '2023-10-01 09:10:47');

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
(51, '2014_10_12_000000_create_users_table', 1),
(52, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(53, '2019_08_19_000000_create_failed_jobs_table', 1),
(54, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(55, '2023_09_04_000407_create_gudangs_table', 1),
(56, '2023_09_04_000553_create_personals_table', 1),
(57, '2023_09_04_000658_create_positions_table', 1),
(58, '2023_09_04_000715_create_tokos_table', 1),
(59, '2023_09_04_000733_create_pembelians_table', 1),
(60, '2023_09_04_000740_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pembelians`
--

CREATE TABLE `pembelians` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` varchar(255) NOT NULL,
  `gudang_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembelians`
--

INSERT INTO `pembelians` (`id`, `invoice_id`, `gudang_id`, `user_id`, `qty`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 'INV00000013', 8, 3, 3, 15000, '2023-09-22 13:07:28', '2023-09-22 13:07:28'),
(2, 'INV00000013', 10, 3, 6, 180000, '2023-09-22 23:37:43', '2023-09-22 23:37:43'),
(3, 'INV00000013', 14, 3, 4, 40000, '2023-09-22 23:38:18', '2023-09-22 23:38:18'),
(4, 'INV00000013', 13, 3, 10, 20000, '2023-09-23 00:16:22', '2023-09-23 00:16:22'),
(5, 'INV00000013', 11, 3, 10, 5000, '2023-09-23 00:16:52', '2023-09-23 00:16:52'),
(6, 'INV00000013', 12, 3, 100, 100000, '2023-09-23 00:17:18', '2023-09-23 00:17:18'),
(7, 'INV00000013', 9, 3, 4, 40000, '2023-09-23 00:17:34', '2023-09-23 00:17:34'),
(8, 'INV00000013', 8, 3, 1, 5000, '2023-09-23 00:25:18', '2023-09-23 00:25:18'),
(9, 'INV00000013', 12, 3, 100, 100000, '2023-09-23 00:25:30', '2023-09-23 00:25:30'),
(10, 'INV00000023', 9, 3, 3, 30000, '2023-09-24 02:40:43', '2023-09-24 02:40:43'),
(11, 'INV00000023', 12, 3, 3, 3000, '2023-09-24 02:40:52', '2023-09-24 02:40:52'),
(12, 'INV00000033', 10, 3, 1, 30000, '2023-09-24 02:43:08', '2023-09-24 02:43:08'),
(13, 'INV00000033', 12, 3, 2, 2000, '2023-09-24 02:43:17', '2023-09-24 02:43:17'),
(14, 'INV00000043', 11, 3, 2, 1000, '2023-09-24 02:45:01', '2023-09-24 02:45:01'),
(15, 'INV00000043', 13, 3, 5, 10000, '2023-09-24 02:51:42', '2023-09-24 02:51:42'),
(16, 'INV00000053', 13, 3, 2, 4000, '2023-09-24 04:20:39', '2023-09-24 04:20:39'),
(17, 'INV00000063', 14, 3, 4, 10000, '2023-09-24 04:21:50', '2023-09-24 04:21:50'),
(18, 'INV00000073', 10, 3, 1, 30000, '2023-09-24 04:22:38', '2023-09-24 04:22:38'),
(20, 'INV00000093', 14, 3, 1, 2500, '2023-09-24 04:41:17', '2023-09-24 04:41:17'),
(21, 'INV00000103', 14, 3, 1, 2500, '2023-09-24 04:41:33', '2023-09-24 04:41:33'),
(22, 'INV00000113', 12, 3, 1, 1000, '2023-09-24 05:46:02', '2023-09-24 05:46:02'),
(23, 'INV00000123', 13, 3, 1, 2000, '2023-09-24 05:47:35', '2023-09-24 05:47:35'),
(24, 'INV00000123', 14, 3, 1, 2500, '2023-09-24 06:20:44', '2023-09-24 06:20:44'),
(25, 'INV00000143', 14, 3, 1, 2500, '2023-09-24 06:25:16', '2023-09-24 06:25:16'),
(26, 'INV00000153', 14, 3, 1, 2500, '2023-09-24 06:30:53', '2023-09-24 06:30:53'),
(27, 'INV00000163', 14, 3, 1, 2500, '2023-09-24 06:31:29', '2023-09-24 06:31:29'),
(28, 'INV00000173', 14, 3, 1, 2500, '2023-09-24 06:32:01', '2023-09-24 06:32:01'),
(29, 'INV00000203', 14, 3, 1, 2500, '2023-09-24 06:34:11', '2023-09-24 06:34:11'),
(30, 'INV00000213', 14, 3, 1, 2500, '2023-09-24 06:35:31', '2023-09-24 06:35:31'),
(31, 'INV00000223', 14, 3, 1, 2500, '2023-09-24 06:43:47', '2023-09-24 06:43:47'),
(32, 'INV00000233', 14, 3, 1, 2500, '2023-09-24 06:44:44', '2023-09-24 06:44:44'),
(33, 'INV00000243', 14, 3, 1, 2500, '2023-09-24 06:45:00', '2023-09-24 06:45:00'),
(34, 'INV00000253', 14, 3, 1, 2500, '2023-09-24 06:49:48', '2023-09-24 06:49:48'),
(35, 'INV00000263', 14, 3, 2, 5000, '2023-09-24 07:58:05', '2023-09-24 07:58:05'),
(36, 'INV00000273', 14, 3, 1, 2500, '2023-09-24 07:58:49', '2023-09-24 07:58:49'),
(37, 'INV00000283', 14, 3, 1, 2500, '2023-09-24 07:59:10', '2023-09-24 07:59:10'),
(38, 'INV00000293', 14, 3, 1, 2500, '2023-09-24 07:59:32', '2023-09-24 07:59:32'),
(39, 'INV00000303', 14, 3, 1, 2500, '2023-09-24 08:00:09', '2023-09-24 08:00:09'),
(40, 'INV00000313', 14, 3, 1, 2500, '2023-09-24 08:01:09', '2023-09-24 08:01:09'),
(41, 'INV00000323', 14, 3, 1, 2500, '2023-09-24 08:01:38', '2023-09-24 08:01:38'),
(42, 'INV00000333', 14, 3, 1, 2500, '2023-09-24 08:02:10', '2023-09-24 08:02:10'),
(43, 'INV00000363', 14, 3, 3, 7500, '2023-09-26 02:22:45', '2023-09-26 02:22:45'),
(44, 'INV00000363', 12, 3, 4, 4000, '2023-09-26 03:36:36', '2023-09-26 03:36:36'),
(45, 'INV00000363', 14, 3, 3, 7500, '2023-09-26 04:53:44', '2023-09-26 04:53:44'),
(46, 'INV00000373', 10, 3, 1, 30000, '2023-10-06 03:25:20', '2023-10-06 03:25:20'),
(47, 'INV00000383', 14, 3, 4, 10000, '2023-10-06 03:28:13', '2023-10-06 03:28:13'),
(49, 'INV00000404', 19, 4, 3, 45000, '2023-09-29 04:36:04', '2023-09-29 04:36:04'),
(50, 'INV00000404', 21, 4, 3, 96000, '2023-09-29 04:36:13', '2023-09-29 04:36:13'),
(64, 'INV00000414', 20, 4, 10, 7000, '2023-09-29 06:28:41', '2023-09-29 06:28:41'),
(66, 'INV00000423', 9, 3, 4, 40000, '2023-10-01 03:55:14', '2023-10-01 03:55:14'),
(67, 'INV00000423', 11, 3, 8, 4000, '2023-10-01 03:57:07', '2023-10-01 03:57:07'),
(68, 'INV00000433', 22, 3, 5, 100000, '2023-10-01 05:56:08', '2023-10-01 05:56:08'),
(69, 'INV00000433', 12, 3, 8, 8000, '2023-10-01 06:01:57', '2023-10-01 06:01:57'),
(70, 'INV00000443', 8, 3, 2, 10000, '2023-10-01 08:47:58', '2023-10-01 08:47:58'),
(71, 'INV00000443', 14, 3, 4, 10000, '2023-10-01 09:09:49', '2023-10-01 09:09:49'),
(72, 'INV00000443', 22, 3, 1, 20000, '2023-10-01 09:10:14', '2023-10-01 09:10:14'),
(73, 'INV00000443', 10, 3, 1, 30000, '2023-10-01 09:10:44', '2023-10-01 09:10:44');

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

CREATE TABLE `personals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `toko_id` bigint(20) UNSIGNED NOT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`id`, `user_id`, `toko_id`, `position_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, '2023-09-21 13:07:47', '2023-09-21 13:07:47'),
(2, 3, 1, 3, '2023-09-22 02:03:43', '2023-09-22 02:03:43'),
(4, 4, 2, 3, '2023-09-29 01:57:08', '2023-09-29 01:57:45'),
(5, 5, 1, 2, '2023-09-29 02:37:57', '2023-09-29 02:37:57'),
(6, 6, 2, 2, '2023-09-29 04:25:51', '2023-09-29 04:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_posisi` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `nama_posisi`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 1, '2023-09-21 12:43:55', '2023-09-21 12:43:55'),
(2, 'Gudang', 1, '2023-09-21 12:46:33', '2023-09-21 12:46:33'),
(3, 'Kasir', 1, '2023-09-21 12:46:38', '2023-09-21 12:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `tokos`
--

CREATE TABLE `tokos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokos`
--

INSERT INTO `tokos` (`id`, `nama_toko`, `alamat`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'toko mejobo', 'mejobo', 1, '2023-09-21 13:02:32', '2023-09-21 13:02:32'),
(2, 'toko jambean', 'jambean', 1, '2023-09-21 13:05:56', '2023-09-21 13:05:56'),
(3, 'toko sabang', 'sabang', 1, '2023-09-21 13:06:08', '2023-09-21 13:06:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alexander', 'alexander', '$2y$10$xUaDt9h54d1rC4H3Zkd1BOLA.YCJ.m5AS5v2S8D3wbTZhrV3ziK2q', 1, NULL, '2023-09-21 12:40:27', '2023-09-21 12:40:27'),
(2, 'Harry', 'harry', '$2y$10$jctxva/9qHdEwM9uzTN9DeHJgO8mcTkAxmHgFdQzwQZeZ3ZeqSGaq', 2, NULL, '2023-09-21 12:47:01', '2023-09-21 12:47:01'),
(3, 'Tania', 'tania', '$2y$10$o1Do0OUwspazoj2Ppn8C9e715DyV6EXueSb6BnSoPBiTfhzgPMV4O', 3, NULL, '2023-09-21 12:51:27', '2023-09-21 12:51:27'),
(4, 'Sania', 'sania', '$2y$10$6t1MzJBA9J.f7nYyeapgRe/9FVPebeJA9BgIjG5pgpgsQ.BM6VqKW', 3, 'UrS5xMcNw6YD6HQxkKCL3LB3DX3WBdmCzziv7qHLlrHZ0CH4Lt8MHN4APZcV', '2023-09-29 01:19:14', '2023-09-29 03:43:29'),
(5, 'joko', 'joko', '$2y$10$x1Rl7540kV23tHkcp.PqDesKK0gTSDeqebSib6EBXCdQASbtUO.SC', 2, NULL, '2023-09-29 02:36:07', '2023-09-29 02:36:07'),
(6, 'paijo', 'paijo', '$2y$10$rXxgWbeFWeYmlvVczYsAHeZxGSDfpoin7wPYXH44LTRFtNl8RS6wK', 2, NULL, '2023-09-29 04:25:22', '2023-09-29 04:25:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gudangs`
--
ALTER TABLE `gudangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gudangs_kode_barang_unique` (`kode_barang`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personals`
--
ALTER TABLE `personals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokos`
--
ALTER TABLE `tokos`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gudangs`
--
ALTER TABLE `gudangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `personals`
--
ALTER TABLE `personals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
