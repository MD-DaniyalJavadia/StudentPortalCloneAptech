-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2025 at 02:08 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginstudentportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

DROP TABLE IF EXISTS `attendences`;
CREATE TABLE IF NOT EXISTS `attendences` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `StudentId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AttendanceMonth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classesHeld` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classesAttended` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MonthlyPercntage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ExtraPoint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `examdetails`
--

DROP TABLE IF EXISTS `examdetails`;
CREATE TABLE IF NOT EXISTS `examdetails` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `studentId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `M7` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `R1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `R2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `R3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `R4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `R5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `E1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Proj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Percentage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ExtraPoint` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examdetails`
--

INSERT INTO `examdetails` (`id`, `studentId`, `M1`, `M2`, `M3`, `M4`, `M5`, `M6`, `M7`, `R1`, `R2`, `R3`, `R4`, `R5`, `E1`, `Proj`, `Percentage`, `ExtraPoint`, `created_at`, `updated_at`) VALUES
(1, '6913', '16', '16', '18', '15', '12', '', '', '15', '15', '', '', '', '28', '75', '45%', '150 point extra\r\n', NULL, NULL),
(2, '7297', '16', '10', '16', '14', '14', '', '', '10', '18', '16', '26', '', '68', '68', '83%', '150 point extra\r\n', NULL, NULL),
(3, '8292', '8', '9', '', '', '', '', '', '15', '12', '', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_09_29_172002_create_student_logins_table', 1),
(5, '2024_11_09_122441_create_attendences_table', 1),
(6, '2024_11_09_125416_create_examdetails_table', 1),
(7, '2024_11_09_133651_create_semesterdetails_table', 1),
(8, '2024_11_09_142458_create_semeter_nos_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesterdetails`
--

DROP TABLE IF EXISTS `semesterdetails`;
CREATE TABLE IF NOT EXISTS `semesterdetails` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semeter_nos`
--

DROP TABLE IF EXISTS `semeter_nos`;
CREATE TABLE IF NOT EXISTS `semeter_nos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Semester1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Semester2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Semester3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Semester4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Semester5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Semester6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semeter_nos`
--

INSERT INTO `semeter_nos` (`id`, `Semester1`, `Semester2`, `Semester3`, `Semester4`, `Semester5`, `Semester6`, `created_at`, `updated_at`) VALUES
(1, 'Semester 1\r\n', 'Semester 2', 'Semester 3', 'Semester 4', 'Semester 5', 'Semester 6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XL4VegDsUTZZsjHLf7N7EEK1DoDuzvJKmuuDwgpi', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUXFpVkxkSnpBTWg0QjFqRHBxeGNPczdXUDJmWTVKbkhKSzdyT0g3VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742709246),
('ngk2njIREnlymSfLf7JutlTVffFwYhI4VkFVLHpz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS2FkdjRKWjY4VDRtcmZnU3cwVW1DWTRWRkVYNFBxRGM5aTlLTDhjdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbi1wYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1742710322),
('Dnt1FVAiAP6wq1m4ZXeYae5RjOGrJxnEehL7GZl6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibW0xaTlzREVXVmF3YmU1bGpDMFg0cFljQVRlWEJDMDlBd1NwbXpEbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9leGFtLWZldGNoIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748159169),
('Ehmpw66yTprFipoEv2rs5m3DDAIt2zgWyoItvTyE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjB5Smgxa3ZFVzl2RHczR0VmSWU2STRWNlNIN1JxcWQ3SENJa3dyZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbi1wYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748166987),
('AXFrz0yB7Yv8a668IcUSghJ2kNJiYco4mNXEGo98', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY2R3YmZwaEdnWE9KRDJ2YXU0YmVXcmM5UGlLT21acUFNbWZscUtNVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbi1wYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748167035);

-- --------------------------------------------------------

--
-- Table structure for table `student_logins`
--

DROP TABLE IF EXISTS `student_logins`;
CREATE TABLE IF NOT EXISTS `student_logins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userPassword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_logins`
--

INSERT INTO `student_logins` (`id`, `userEmail`, `userPassword`, `created_at`, `updated_at`) VALUES
(1, 'daniyal@gmail.com', 'daniyal123', '2025-03-23 05:57:27', '2025-03-23 05:57:27'),
(2, 'sufiyan@gmail.com', 'sufiyan123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
