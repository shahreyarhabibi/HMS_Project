-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 10:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
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
(5, '2024_07_22_142556_create_patient_records_table', 2);

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
-- Table structure for table `registryform`
--

CREATE TABLE `registryform` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `FATHERNAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(50) DEFAULT NULL,
  `AGE` int(3) NOT NULL,
  `MAINRESIDENCE` varchar(150) DEFAULT NULL,
  `CURRENTRESIDENCE` varchar(150) DEFAULT NULL,
  `DISEASE` varchar(20) NOT NULL,
  `SEX` varchar(10) NOT NULL,
  `PHONENUMBER` varchar(15) NOT NULL,
  `ADDRESS` varchar(150) NOT NULL,
  `DOCTORNAME` varchar(50) DEFAULT NULL,
  `ATTENDDATE` varchar(20) NOT NULL,
  `LASTATTEND` varchar(20) DEFAULT NULL,
  `COMPLAINS` varchar(255) DEFAULT NULL,
  `DIAGNOSIS` varchar(11) DEFAULT NULL,
  `PRESCRIPTION` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registry_form`
--

CREATE TABLE `registry_form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `FATHERNAME` varchar(255) NOT NULL,
  `LASTNAME` varchar(255) DEFAULT NULL,
  `AGE` int(11) NOT NULL,
  `MAINRESIDENCE` varchar(255) DEFAULT NULL,
  `CURRENTRESIDENCE` varchar(255) DEFAULT NULL,
  `DISEASE` varchar(255) NOT NULL,
  `SEX` varchar(255) NOT NULL,
  `PHONENUMBER` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `DOCTORNAME` varchar(255) DEFAULT NULL,
  `ATTENDDATE` date NOT NULL,
  `LASTATTEND` date DEFAULT NULL,
  `COMPLAINS` text DEFAULT NULL,
  `DIAGNOSIS` text DEFAULT NULL,
  `PRESCRIPTION` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registry_form`
--

INSERT INTO `registry_form` (`id`, `NAME`, `FATHERNAME`, `LASTNAME`, `AGE`, `MAINRESIDENCE`, `CURRENTRESIDENCE`, `DISEASE`, `SEX`, `PHONENUMBER`, `ADDRESS`, `DOCTORNAME`, `ATTENDDATE`, `LASTATTEND`, `COMPLAINS`, `DIAGNOSIS`, `PRESCRIPTION`, `created_at`, `updated_at`) VALUES
(9, 'علی رضا', 'عنایت', 'حبیبی', 22, NULL, NULL, 'داخله', 'مرد', '+93730951336', 'کابل دارالامان', NULL, '2023-04-25', NULL, NULL, NULL, NULL, NULL, '2024-11-10 16:33:13'),
(10, 'قاسم', 'عبدالله', 'رحیمی', 30, NULL, NULL, 'دندان', 'مرد', '+93756982150', 'کابل خوشحال خان', NULL, '2022-01-15', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'مریم', 'محمد', 'عزیزی', 24, NULL, NULL, 'سایر', 'زن', '+93780459563', 'کابل کارته چهار', NULL, '2023-01-06', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'مصطفی', 'محمد حسین', 'عزیزی', 15, NULL, NULL, 'گوش و گلو', 'مرد', '+93790300299', 'کابل قوای مرکز', NULL, '2024-04-01', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'مژگان', 'محمد شاکر', 'لطیفی', 45, NULL, NULL, 'جلدی', 'زن', '+937784502236', 'هرات چوک گلها', NULL, '2023-12-08', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'نرگس', 'نور محمد', 'رسولی', 20, NULL, NULL, 'اورتوپیدی', 'زن', '+93774585993', 'بلخ کود برق', NULL, '2024-05-19', NULL, NULL, NULL, NULL, NULL, '2024-07-25 03:48:05'),
(15, 'نازنین', 'عبدالرحمن', 'نوروزی', 19, 'بلخ', 'کابل', 'داخله', 'زن', '+93745125498', 'هرات جبرییل', 'داکتر محمد علیزاده', '2024-07-10', NULL, NULL, NULL, NULL, '2024-07-25 03:41:22', '2024-07-25 03:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Ali Reza', 'ali@gmail.com', NULL, '$2y$10$QU7TDDR01QsPoqqCSwYBT.6fDe5VQveQ2Wnq5Vrp96xhKWzpF1tSO', NULL, NULL, NULL);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registryform`
--
ALTER TABLE `registryform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registry_form`
--
ALTER TABLE `registry_form`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registryform`
--
ALTER TABLE `registryform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registry_form`
--
ALTER TABLE `registry_form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
