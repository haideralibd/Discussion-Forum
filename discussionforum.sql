-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 06:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `discussionforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Music', '2020-10-27 01:36:56', '2020-10-27 01:36:56'),
(2, 'Tech', '2020-10-27 01:37:03', '2020-10-27 01:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 16, 6, 'Rerum incidunt aliquam optio consequatur distinctio vel officia. Assumenda quod mollitia quod. Omnis dolorum omnis ut qui. Illo ducimus voluptates illum rerum autem pariatur placeat sed.', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(2, 18, 7, 'Voluptatem ut totam aut perspiciatis voluptates non. Labore voluptatibus fugit enim corporis officia rem iusto cumque. Necessitatibus vero repellat sunt.', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(3, 20, 8, 'Fugiat nobis odio molestias consectetur ducimus iste. Omnis cum reiciendis dolor quam beatae ut. Quas soluta deserunt cupiditate voluptatem.', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(4, 22, 9, 'Animi fuga explicabo numquam mollitia deserunt molestiae. Qui eum ab qui omnis minima. Voluptatem similique modi corporis.', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(5, 24, 10, 'Quisquam omnis consequatur quaerat recusandae quis voluptatem. Unde molestiae autem cumque dolor voluptate. Et et blanditiis officiis vero veniam fugit.', '2020-10-13 23:48:15', '2020-10-13 23:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_14_060501_create_comments_table', 2),
(5, '2020_06_17_093202_create_categories_table', 3),
(6, '2020_06_17_085451_add_category_id_to_posts', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `category_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 11, 'Eum aliquid unde esse cupiditate.', 'Amet neque dolorum et repellendus consequatur repellendus. Error voluptas et esse rerum qui ipsum.', NULL, NULL, '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(2, 12, 'Molestiae libero nisi laboriosam saepe laudantium.', 'Ea suscipit cumque quo eveniet autem dolor. Aut dolorem repellat debitis unde est provident quia cum. Nam voluptatem laborum reprehenderit et dolores mollitia officiis.', NULL, NULL, '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(3, 13, 'Aut corrupti doloribus laudantium facere odit eum eius.', 'Non ea repudiandae error voluptatem quia voluptatem. Enim doloribus molestiae optio odio libero ut. Aut recusandae ab suscipit qui fugiat et reiciendis.', NULL, NULL, '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(4, 14, 'Non eius voluptatem minima quidem voluptatum iure.', 'Consequatur et ratione cumque veritatis explicabo ut. Sint deserunt praesentium ut quaerat sint ut. Totam impedit esse est et.', NULL, NULL, '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(5, 15, 'Debitis sint beatae voluptas omnis quia.', 'Temporibus illo non dolores consequatur ipsum ut debitis. Ipsam similique dolorum praesentium nobis voluptates. Sequi similique neque quibusdam ullam fugit exercitationem enim optio.', NULL, NULL, '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(6, 17, 'Autem ad ipsa et quod fugiat ut quia provident.', 'Voluptas quod et quisquam alias iusto. Vitae quibusdam vero iure illo dignissimos. Rerum quo nam porro inventore deleniti.', NULL, NULL, '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(7, 19, 'Sed id rerum esse eligendi perferendis et consequatur.', 'Ut earum placeat soluta eveniet tempora. Dignissimos quia vero et. Quia sed aut non id.', NULL, NULL, '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(8, 21, 'Cumque nisi numquam dolorum accusamus.', 'Et harum autem impedit. Pariatur ab est nisi unde voluptatem nisi sit. Voluptate sed voluptatem autem molestiae sed debitis.', NULL, NULL, '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(9, 23, 'Cum qui nesciunt ipsam velit qui est eius.', 'Fuga quo officiis id fuga nihil aspernatur. Ut fugit et fugit nam beatae vitae nihil magnam. Nemo voluptas suscipit est labore soluta. Qui rem omnis autem distinctio.', NULL, NULL, '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(10, 25, 'Minus error odit pariatur cupiditate ipsum.', 'Minus maxime nisi in. Esse officia sed aperiam debitis. Libero omnis enim id ut beatae quas ut alias. Quo consectetur saepe consequatur fugiat magni odio.', NULL, NULL, '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(11, 26, 'adf', '<p>asdas</p>', 2, 'images/VMK2I4V8oM2V7QwlKrEDtU3Yg2oVHtvh6vZdRNc6.jpeg', '2020-10-27 02:28:07', '2020-10-27 02:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Beulah Collins', 'brandyn.ernser@example.net', '2020-10-13 23:44:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CPykGhcwhA', '2020-10-13 23:44:26', '2020-10-13 23:44:26'),
(2, 'Dr. Abigail Nienow', 'maurine41@example.org', '2020-10-13 23:44:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'y1pcK7y7SF', '2020-10-13 23:44:26', '2020-10-13 23:44:26'),
(3, 'Ava Fritsch', 'pbahringer@example.org', '2020-10-13 23:44:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Hb0NWacs7m', '2020-10-13 23:44:26', '2020-10-13 23:44:26'),
(4, 'Prof. Lonzo Krajcik MD', 'uherzog@example.com', '2020-10-13 23:44:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RUFUvABOvD', '2020-10-13 23:44:26', '2020-10-13 23:44:26'),
(5, 'Devon Hauck', 'deontae59@example.net', '2020-10-13 23:44:26', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fpW35uCVXx', '2020-10-13 23:44:26', '2020-10-13 23:44:26'),
(6, 'Paul Willms', 'wskiles@example.org', '2020-10-13 23:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '0QdmIG91PY', '2020-10-13 23:44:36', '2020-10-13 23:44:36'),
(7, 'Rocky Durgan', 'javonte28@example.org', '2020-10-13 23:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6GpTuGnSn8', '2020-10-13 23:44:36', '2020-10-13 23:44:36'),
(8, 'Vella VonRueden', 'west.gina@example.net', '2020-10-13 23:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'uSL8sjUeZw', '2020-10-13 23:44:36', '2020-10-13 23:44:36'),
(9, 'Elna Hagenes', 'hconsidine@example.org', '2020-10-13 23:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Rl20QSXRGh', '2020-10-13 23:44:36', '2020-10-13 23:44:36'),
(10, 'Prof. Dillon Turcotte DVM', 'okon.rylee@example.com', '2020-10-13 23:44:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5XrlPupCxN', '2020-10-13 23:44:36', '2020-10-13 23:44:36'),
(11, 'Isidro Senger', 'aiyana29@example.net', '2020-10-13 23:48:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HikrGS66PT', '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(12, 'Aileen Ernser', 'lheller@example.org', '2020-10-13 23:48:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'v32r1tWgR6', '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(13, 'Mikayla Mitchell', 'etha20@example.org', '2020-10-13 23:48:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'eGHZ2HUrLe', '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(14, 'Emmanuelle Bauch', 'grimes.lavonne@example.org', '2020-10-13 23:48:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CyfOdfo0Wm', '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(15, 'Prof. Jackeline Herzog', 'alexandrine80@example.com', '2020-10-13 23:48:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'oUltDD78l2', '2020-10-13 23:48:00', '2020-10-13 23:48:00'),
(16, 'Elisha Schamberger', 'vglover@example.com', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4zulkmkntA', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(17, 'Hunter Nolan', 'dibbert.seth@example.org', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'FkwG48yuTK', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(18, 'Rafael Denesik IV', 'aida.doyle@example.net', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HWSMpE7nYQ', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(19, 'Miss Abigayle Bode', 'magali68@example.net', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tSRTuGHtHb', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(20, 'Dr. Julio Davis Jr.', 'paul84@example.org', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'sNfjuQV4WO', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(21, 'Cara Lindgren', 'orlando.yundt@example.org', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Km7YkjhpS7', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(22, 'Nona Abshire', 'kennith75@example.com', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'hPxIoVLQPu', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(23, 'Hal Collins', 'sterling.anderson@example.net', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'vf6q9LW68T', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(24, 'Miss Alanna Abshire', 'nathanial37@example.org', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fyNkYuWt90', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(25, 'Dr. Marquis Lockman', 'xlockman@example.com', '2020-10-13 23:48:15', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qvfHQb4U5A', '2020-10-13 23:48:15', '2020-10-13 23:48:15'),
(26, 'Haider Ali', 'h@g.com', NULL, '$2y$10$v9r/l7tDfmjX.4BKaZIk9e4T3blctQaNO2UVkKiicYdQvby/3V9z2', NULL, '2020-10-27 01:36:24', '2020-10-27 01:36:24'),
(27, 'Kamal Hossain', 'titu@modemakersltd.com', NULL, '$2y$10$2i/yZIkMj2nenKvYVMiVkOGMypLOzRL5eDmTLX60DtwoTJoghBUlK', NULL, '2021-02-04 04:50:12', '2021-02-04 04:50:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
