-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2026 at 11:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukrain_relief_funds`
--

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Disaster Relief', '2026-01-14 23:45:52', '2026-01-14 23:45:52'),
(2, 'Healthcare Support', '2026-01-14 23:45:52', '2026-01-14 23:45:52'),
(3, 'Clean Water & Sanitation', '2026-01-14 23:45:52', '2026-01-14 23:45:52'),
(4, 'Education & Empowerment', '2026-01-14 23:45:52', '2026-01-14 23:45:52'),
(5, 'Community Development', '2026-01-14 23:45:52', '2026-01-14 23:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `donation` decimal(10,2) NOT NULL,
  `goal` decimal(10,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `content_one` text NOT NULL,
  `content_two` text NOT NULL,
  `sub_topic` varchar(255) DEFAULT NULL,
  `content_three` text DEFAULT NULL,
  `content_four` text DEFAULT NULL,
  `content_five` text DEFAULT NULL,
  `content_six` text DEFAULT NULL,
  `content_seven` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_one` varchar(255) DEFAULT NULL,
  `image_two` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `slug`, `title`, `donation`, `goal`, `category_id`, `content_one`, `content_two`, `sub_topic`, `content_three`, `content_four`, `content_five`, `content_six`, `content_seven`, `image`, `image_one`, `image_two`, `created_at`, `updated_at`) VALUES
(1, 'delivering-clean-water-to-rural-communities', 'Delivering Clean Water to Rural Communities', 3850.00, 11000.00, 3, 'Millions of people living in rural communities struggle daily with access to clean and safe drinking water. Women and children often walk long distances to fetch water from unsafe sources.', 'This project focuses on drilling boreholes, installing water purification systems, and educating communities on proper water hygiene practices to prevent waterborne diseases.', 'Why Clean Water Matters', 'Clean water reduces child mortality, improves school attendance, and boosts local economic activities by freeing time spent searching for water.', 'Your donation directly funds infrastructure, maintenance training, and local water committees to ensure sustainability.', 'Each completed water project can serve over 500 people for more than 15 years.', 'Transparency is key—regular reports and photos are shared so donors can track progress.', '', 'donation-01-416x300.png', 'donation-d-1-3-1.jpg', 'donation-d-1-2-1.jpg', '2026-01-14 23:45:52', '2026-01-14 23:45:52'),
(2, 'emergency-medical-aid-for-underserved-areas', 'Emergency Medical Aid for Underserved Areas', 4230.00, 9000.00, 2, 'In many underserved regions, basic medical care is either unavailable or unaffordable.', 'This initiative provides emergency medical supplies, mobile clinics, and volunteer healthcare professionals to areas in urgent need.', 'Saving Lives Through Access', 'Timely medical intervention drastically reduces preventable deaths from malaria, infections, and childbirth complications.', 'Funds are used for medications, diagnostic equipment, and transportation for emergency cases.', 'We partner with local hospitals to strengthen long-term healthcare delivery.', 'Your support ensures dignity, care, and hope for vulnerable families.', '', 'donation-07-416x300.png', '', '', '2026-01-14 23:45:52', '2026-01-14 23:45:52'),
(3, 'nutrition-support-for-vulnerable-children', 'Nutrition Support for Vulnerable Children', 7000.00, 10000.00, 1, 'Child malnutrition remains a critical challenge in disaster-affected and low-income communities.', 'This program delivers nutrient-rich food packages, supplements, and nutrition education to families.', 'Building Healthy Futures', 'Proper nutrition improves brain development, immunity, and school performance.', 'We work with community health workers to monitor child growth and recovery.', 'Each contribution feeds a child for weeks.', 'Long-term food security solutions are integrated into every intervention.', '', 'donation-02-416x300.png', '', '', '2026-01-14 23:45:52', '2026-01-14 23:45:52'),
(4, 'education-access-for-displaced-children', 'Education Access for Displaced Children', 6000.00, 10000.00, 4, 'Displaced children often lose access to formal education due to conflict or disasters.', 'This campaign builds temporary learning centers and supplies educational materials.', 'Learning Without Limits', 'Education restores normalcy and hope for children affected by crisis.', 'Funds support teachers, books, digital tools, and safe classrooms.', 'We prioritize inclusivity for girls and children with disabilities.', 'Education is the strongest foundation for rebuilding communities.', '', 'donation-03-416x300.png', '', '', '2026-01-14 23:45:52', '2026-01-14 23:45:52'),
(5, 'community-rebuilding-after-natural-disasters', 'Community Rebuilding After Natural Disasters', 5000.00, 10000.00, 5, 'Natural disasters leave families homeless and communities shattered.', 'This initiative focuses on rebuilding homes, schools, and essential infrastructure.', 'Restoring Hope', 'Safe shelter is the first step toward recovery and dignity.', 'Local artisans and workers are employed to boost the economy.', 'Every structure is built with resilience and sustainability in mind.', 'Your donation helps families start anew.', 'Community rebuilding is about restoring hope. It is about ensuring children return to safe schools, families return to secure homes, and neighborhoods regain their sense of unity. This initiative stands as a testament to human resilience and compassion. When communities are rebuilt with care, dignity, and foresight, they emerge stronger than before. Your support is not just rebuilding structures—it is rebuilding futures.', 'donation-04-416x300.png', '', '', '2026-01-14 23:45:52', '2026-01-14 23:45:52'),
(6, 'empowering-women-through-skill-acquisition', 'Empowering Women Through Skill Acquisition', 5000.00, 10000.00, 5, 'Women are powerful drivers of economic growth when given the right opportunities.', 'This project provides vocational training, startup kits, and mentorship.', 'Economic Independence', 'Skills training increases household income and community stability.', 'Participants receive business guidance and access to micro-financing.', 'Empowered women uplift entire families.', 'Your support creates lasting generational impact.', '', 'donation-05-416x300.png', '', '', '2026-01-14 23:45:52', '2026-01-14 23:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `mode` enum('online','offline') NOT NULL,
  `option` varchar(255) DEFAULT NULL,
  `donation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `first_name`, `last_name`, `email`, `amount`, `mode`, `option`, `donation_id`, `created_at`, `updated_at`) VALUES
(1, 'Dubai Emit', 'sammy', 'emibank@gmail.com', 100.00, 'online', 'eth', 6, '2026-01-14 23:54:25', '2026-01-14 23:54:25');

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
(4, '2026_01_15_002820_create_categories_table', 1),
(5, '2026_01_15_002820_create_donations_table', 1),
(6, '2026_01_15_004242_create_payment_methods_table', 1),
(7, '2026_02_14_185759_create_donors_table', 1);

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `network` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `show` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `slug`, `address`, `network`, `image`, `show`, `created_at`, `updated_at`) VALUES
(1, 'Bitcoin', 'bitcoin', '3452-23423-234234', 'bep2055', 'bitcoin.png', 1, '2026-01-14 23:45:52', '2026-01-15 21:53:29'),
(3, 'Dubai Emit sammy', 'dubai-emit-sammy', 'No 36, new road, warri, delta state', 'BTC9999', NULL, 1, '2026-01-15 21:54:03', '2026-01-15 21:54:28');

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
('WLJjMetzU6v7X30pZE43ePLoOKweWKdAXJib4436', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3huSk80eTNOaEsyU3FFWTRNZXUwZ3FwcHNLa0FLNGNZVTlWdnU0RiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9mYXEiO3M6NToicm91dGUiO3M6MzoiZmFxIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1768557525);

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
(1, 'Test User', 'test@example.com', '2026-01-14 23:45:52', '$2y$12$bBP1wWlJk8iVd6iLMPNvbuYmDBzs8zQWuoHFVCxEVideiGVKgziw.', 'OhLBMbWHj7', '2026-01-14 23:45:52', '2026-01-14 23:45:52');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donations_slug_unique` (`slug`),
  ADD KEY `donations_category_id_foreign` (`category_id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donors_donation_id_foreign` (`donation_id`);

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
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_methods_name_unique` (`name`),
  ADD UNIQUE KEY `payment_methods_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `donors`
--
ALTER TABLE `donors`
  ADD CONSTRAINT `donors_donation_id_foreign` FOREIGN KEY (`donation_id`) REFERENCES `donations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
