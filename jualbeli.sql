-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 05:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jualbeli`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_jenis` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `writer`, `summary`, `price`, `photo`, `created_at`, `updated_at`, `id_jenis`) VALUES
(1, '213132', 'weqeqw', '312', 321, '4.pdf', '2022-07-31 09:11:37', '2022-07-31 09:11:37', 1),
(2, 'dassad', 'sadsad', 'sdasad', 132, 'logo.jpg', '2022-08-01 04:31:51', '2022-08-01 04:31:51', 1),
(3, 'dassad', 'sadsad', 'sdasad', 132, 'logo.jpg', '2022-08-01 04:34:15', '2022-08-01 04:34:15', 1),
(5, '132', '321', '132', 132, 'gambar.png', '2022-08-04 19:09:10', '2022-08-04 19:09:10', 1),
(7, '321321', '132', '321', 321, 'gambar.png', '2022-08-04 19:25:48', '2022-08-04 19:25:48', 3),
(8, 'fsas', 'sad', 'fas', 123, 'gambar.png', '2022-08-04 19:26:47', '2022-08-04 19:26:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `identity`
--

CREATE TABLE `identity` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_identity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identity`
--

INSERT INTO `identity` (`id`, `nama_identity`, `created_at`, `updated_at`) VALUES
(3, 'Pemrograman Desktop', '2022-07-31 09:11:04', '2022-07-31 09:11:04'),
(4, 'Pemrograman Hybrd', '2022-07-31 09:11:04', '2022-07-31 09:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `identity_book`
--

CREATE TABLE `identity_book` (
  `id_book` int(10) UNSIGNED NOT NULL,
  `id_identity` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identity_book`
--

INSERT INTO `identity_book` (`id_book`, `id_identity`, `created_at`, `updated_at`) VALUES
(2, 3, '2022-08-01 04:31:51', '2022-08-01 04:31:51'),
(5, 3, '2022-08-04 19:09:10', '2022-08-04 19:09:10'),
(5, 4, '2022-08-04 19:09:10', '2022-08-04 19:09:10'),
(8, 3, '2022-08-04 19:26:47', '2022-08-04 19:26:47'),
(8, 4, '2022-08-04 19:26:47', '2022-08-04 19:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `isbn`
--

CREATE TABLE `isbn` (
  `id_isbn` int(10) UNSIGNED NOT NULL,
  `no_isbn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `isbn`
--

INSERT INTO `isbn` (`id_isbn`, `no_isbn`, `created_at`, `updated_at`) VALUES
(1, '321', '2022-07-31 09:11:37', '2022-07-31 09:11:37'),
(2, 'qew', '2022-08-01 04:31:51', '2022-08-01 04:31:51'),
(5, '213', '2022-08-04 19:09:10', '2022-08-04 19:09:10'),
(8, 'saf', '2022-08-04 19:26:47', '2022-08-04 19:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `jenisbuku`
--

CREATE TABLE `jenisbuku` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis_buku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenisbuku`
--

INSERT INTO `jenisbuku` (`id`, `jenis_buku`, `created_at`, `updated_at`) VALUES
(1, 'Fisika1', NULL, '2022-08-04 19:01:11'),
(3, 'fisika 2', '2022-08-04 19:01:27', '2022-08-04 19:01:27');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_28_012422_create_table_books', 1),
(6, '2022_07_31_132441_create_table_isbn', 1),
(7, '2022_07_31_141450_create_table_jenis_buku', 1),
(8, '2022_07_31_145114_create_table_identity', 1),
(9, '2022_07_31_145148_create_table_identity_book', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_id_jenis_foreign` (`id_jenis`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `identity`
--
ALTER TABLE `identity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identity_book`
--
ALTER TABLE `identity_book`
  ADD PRIMARY KEY (`id_book`,`id_identity`),
  ADD KEY `identity_book_id_book_index` (`id_book`),
  ADD KEY `identity_book_id_identity_index` (`id_identity`);

--
-- Indexes for table `isbn`
--
ALTER TABLE `isbn`
  ADD PRIMARY KEY (`id_isbn`),
  ADD UNIQUE KEY `isbn_no_isbn_unique` (`no_isbn`);

--
-- Indexes for table `jenisbuku`
--
ALTER TABLE `jenisbuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identity`
--
ALTER TABLE `identity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenisbuku`
--
ALTER TABLE `jenisbuku`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_id_jenis_foreign` FOREIGN KEY (`id_jenis`) REFERENCES `jenisbuku` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `identity_book`
--
ALTER TABLE `identity_book`
  ADD CONSTRAINT `identity_book_id_book_foreign` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `identity_book_id_identity_foreign` FOREIGN KEY (`id_identity`) REFERENCES `identity` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `isbn`
--
ALTER TABLE `isbn`
  ADD CONSTRAINT `isbn_id_isbn_foreign` FOREIGN KEY (`id_isbn`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
