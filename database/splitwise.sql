-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2025 at 02:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `splitwise`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(7, '2025_03_28_135040_create_bills_table', 2),
(8, '2025_03_28_140658_add_missing_columns_to_users_table', 3),
(9, '2025_03_28_141800_drop_name_column_from_users_table', 4);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2y9zeh7lgnKdSo1VXN2a7zr1UopbtHzQaWVaWYd6', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 OPR/117.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYkRCRDZwb0RrUmlZeVFuQXpVNFM4eGJVWGY1SzhpMWZlT3doT2ZPaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1743171730),
('4zXcZTcFEGsWEMo0WRw0ifBMVEaPrilSEXPSsn6l', 14, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNzVudjg4UElIbTdhUnBKaUhuSVF2MFEyU0o5OW1sUUJXOHJmZnpYZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE0O30=', 1743210282),
('MaCrGmHksTlmwoPcBxRsKkV72jgT5fgplJy3oIL1', 13, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTTRwbU1ndFRVRHZHandMMkxFYWZlZ0hnNzZEY1dGUjh5S0Y1a2NtaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjEzO30=', 1743176753);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `last_name`, `first_name`, `nickname`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Channy', 'Wr', 'Wrchan', 'wrchanny', 'channity.wr@gmail.com', NULL, '$2y$12$mlS31N7rIWKkSPxl6DhnJuTZG5IsJp5y7Ik0FdUlz0I88vb38iaTC', NULL, '2025-03-28 05:26:04', '2025-03-28 05:26:04'),
(2, 'Abendan', 'Christian James', 'Unichan', 'Chan', 'chrisbend2004@gmail.com', NULL, '$2y$12$/jEk2WAxPF6DNTkV53g8tuHS0YodeVguHrJbm7zaCz8rQHtlJN8pq', NULL, '2025-03-28 05:45:05', '2025-03-28 05:45:05'),
(3, 'Arquilos', 'Cj', 'Mesjah', 'cj', 'Cj@gmail.com', NULL, '$2y$12$vKpzW1CXCeMkrvI.wR/kruiu9v6IaZfqzo87FifXsXCJlwpi8MRzK', NULL, '2025-03-28 05:46:02', '2025-03-28 05:46:02'),
(4, 'Mcpherson', 'Lars', 'Evangeline Campbell', 'dapocy', 'fala@mailinator.com', NULL, '$2y$12$MifuiTXHMBqJ7jD82KfCduwvUwA1zeUaDukcOAYgDfEboM4sZcXia', NULL, '2025-03-28 06:26:49', '2025-03-28 06:26:49'),
(5, 'Alston', 'Oleg', 'Brian Lewis', 'tuzyguq', 'gamingcea10@gmail.com', NULL, '$2y$12$5ZrVJwCAOc/YMPo3R0nYUO513Amqb..wFrVBso1UfF9CZXb2ZByn2', NULL, '2025-03-28 07:27:14', '2025-03-28 07:27:14'),
(6, 'Payne', 'Jordan', 'Garth Macdonald', 'necixosy', 'gamingcea02@gmail.com', NULL, '$2y$12$j8XOYvLp.AnoPfR2zl83RORo9oQsE8KeHMGTm9gbV01L7ft4TuuXy', NULL, '2025-03-28 07:28:40', '2025-03-28 07:28:40'),
(7, 'Donovan', 'Britanney', 'Yvette Graves', 'fawaxumire', 'gamingcea30@gmail.com', NULL, '$2y$12$7QdRqdcoKWGru0S7QUJ4gOkAlaGDHlYB3ER6WRZK1/u.HlXtlM6Fy', NULL, '2025-03-28 07:29:11', '2025-03-28 07:29:11'),
(8, 'Lawson', 'Anne', 'Amela Medina', 'zojehahopo', 'gamingcea00@gmail.com', NULL, '$2y$12$l7Cvm1Jih7PH7L8sNiJJR.mZPSAkQXKFKB.7c6GBdI9oLZAEDKlRe', NULL, '2025-03-28 07:36:09', '2025-03-28 07:36:09'),
(9, 'Brennan', 'Emma', 'Ima Mckee', 'kejunygad', 'mytidut@mailinator.com', NULL, '$2y$12$M7WQSSxyj4FianhUYXEkCOdatYZbwsX/aGZhB2klpUYhDdsEMJKfC', NULL, '2025-03-28 07:39:05', '2025-03-28 07:39:05'),
(10, 'Sellers', 'Uriah', 'Mollie Hardin', 'xijesoja', 'katemi@mailinator.com', NULL, '$2y$12$1Z6bvAc0iqjoote8w8o6POTGf7w2Kx4RP9C.RBOE8N/WXk/AXxnHy', NULL, '2025-03-28 07:40:59', '2025-03-28 07:40:59'),
(11, 'Stokes', 'Audra', 'Audrey Potter', 'myzuhu', 'sehige@mailinator.com', NULL, '$2y$12$fd0sL44kEOtghfOfspcEDuFM7QAgbtz2DrnYKwnQL4ykHtSDTrrCy', NULL, '2025-03-28 07:44:11', '2025-03-28 07:44:11'),
(12, 'Harrison', 'Skyler', 'Kirk Monroe', 'zyjyd', 'lotin@mailinator.com', NULL, '$2y$12$XumHBd/N7WnU.js4oDQ5eOot7g9kQw9kWVeeaLh4E5Oirg/wZgI9a', NULL, '2025-03-28 07:45:37', '2025-03-28 07:45:37'),
(13, 'Berry', 'Tarik', 'Carolyn Chapman', 'lelomy', 'wuhinaxek@mailinator.com', NULL, '$2y$12$5hTAty5bFZZI.DMkHhK8Zuxqg0Gr5IAKJsSGqlCeAuBKKp.ilqEQm', NULL, '2025-03-28 07:45:53', '2025-03-28 07:45:53'),
(14, 'Mosley', 'Adria', 'Wynne Turner', 'sycutac', 'kujisonufi@mailinator.com', NULL, '$2y$12$jyZPqDT19/WRZSZpZwaEvOic5fGupPHvtXJKtMwOFD1NdsUzTPQbK', NULL, '2025-03-28 16:29:11', '2025-03-28 16:29:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
