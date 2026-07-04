-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2026 at 09:00 PM
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
-- Database: `laiba_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Laiba Rafique', 'admin@laiba.dev', '$2y$12$pwh0DoQOb5fU6aa3mWfhhOIYIQOupc2PpTOwOZ0iCayAlc1zWXpg2', NULL, '2026-07-04 11:36:34', '2026-07-04 11:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laiba_rafique_portfolio_cache_setting.cv_file', 's:53:\"settings/5IksEipkyU4oAOc424iNodXVrD4WLrDbl7itRtxg.pdf\";', 2098547088),
('laiba_rafique_portfolio_cache_setting.cv_url', 's:0:\"\";', 2098546885),
('laiba_rafique_portfolio_cache_setting.email', 's:24:\"laibarafiqueee@gmail.com\";', 2098547088),
('laiba_rafique_portfolio_cache_setting.github_url', 's:34:\"https://github.com/laibarafique25/\";', 2098547088),
('laiba_rafique_portfolio_cache_setting.hero_greeting', 's:21:\"Hi, I\'m Laiba Rafique\";', 2098543005),
('laiba_rafique_portfolio_cache_setting.hero_intro', 's:115:\"I build responsive, scalable and user-focused web applications using PHP, Laravel, MySQL, JavaScript and Bootstrap.\";', 2098543005),
('laiba_rafique_portfolio_cache_setting.hero_role', 's:31:\"Junior Full Stack Web Developer\";', 2098543005),
('laiba_rafique_portfolio_cache_setting.linkedin_url', 's:52:\"https://www.linkedin.com/in/laiba-rafique-6745623b9/\";', 2098547088),
('laiba_rafique_portfolio_cache_setting.profile_image', 's:53:\"settings/aoAx2STl2a3St7OWtvsD3xswauR5qJJUmA8VpBWm.jpg\";', 2098546833),
('laiba_rafique_portfolio_cache_setting.site_name', 's:13:\"Laiba Rafique\";', 2098547088);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `certificate_image` varchar(255) DEFAULT NULL,
  `credential_file` varchar(255) DEFAULT NULL,
  `credential_link` varchar(255) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title`, `organization`, `description`, `certificate_image`, `credential_file`, `credential_link`, `issue_date`, `featured`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Frontend Development Internship', 'DecodeLabs', 'DecodeLabs Virtual Internship Program in Frontend Development.', 'certificates/8JbZNeiCUWRGHxs6bzvk31jYqHeV74KC5N1uJVNz.jpg', NULL, 'https://www.linkedin.com/posts/laiba-rafique-6745623b9_frontenddeveloper-decodelabs-internship-share-7473317969700397056-jPUT/?utm_source=share&utm_medium=member_desktop&rcm=ACoAAGYQQzgBUN6fFPcY8ZS2VwKH_hQEq3GPmKY', '2026-05-21', 1, 0, '2026-07-04 11:36:35', '2026-07-04 11:45:43'),
(2, 'Backend Development Internship', 'CodeAlpha', 'CodeAlpha Virtual Internship Program in Backend Development.', 'certificates/00gCf8xKWNyezPmtHyqDkfR8Hhc36Brzkm9bf68Q.jpg', NULL, 'https://www.linkedin.com/posts/laiba-rafique-6745623b9_backenddevelopment-php-codealpha-ugcPost-7467270181531303936-f6lV/?utm_source=share&utm_medium=member_desktop&rcm=ACoAAGYQQzgBUN6fFPcY8ZS2VwKH_hQEq3GPmKY', '2026-06-01', 1, 1, '2026-07-04 11:36:35', '2026-07-04 11:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `institution_website` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `in_progress` tinyint(1) NOT NULL DEFAULT 0,
  `period` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree`, `institution`, `institution_website`, `start_date`, `end_date`, `in_progress`, `period`, `description`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'ADSE (Advance Diploma in Software Engineering)', 'Aptech Computer Education', 'https://aptech-education.com.pk/courses-adse/', '2026-07-20', '2028-08-04', 1, 'Jul 2026 – Present', 'Currently pursuing ADSE (Advance Diploma in Software Engineering) under the ACCP AI Prime program at Aptech Computer Education. Focused on Full Stack Web Development, Software Engineering, Database Management, and modern web technologies including HTML, CSS, JavaScript, PHP, MySQL, and Laravel.', 0, '2026-07-04 11:36:35', '2026-07-04 13:29:00'),
(2, 'Associate Degree in Arts (ADA)', 'University of Karachi', 'https://www.uok.edu.pk/', '2021-08-04', '2023-10-04', 0, 'Aug 2021 – Oct 2023', 'Earned an Associate Degree in Arts (ADA) from the University of Karachi. Specialized in Islamic Studies, Mass Communication, and Education, gaining valuable communication, teaching, and research skills that complement my current journey in software development.', 1, '2026-07-04 13:36:07', '2026-07-04 13:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `period` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `role`, `company`, `location`, `period`, `description`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science Teacher', 'Dar-e-Arqam Schools', 'Pakistan', 'May 2026 — Present', 'Teaching CS fundamentals and web technologies.', 0, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(2, 'Frontend Developer Intern', 'DecodeLabs', 'Remote', 'Apr 2026 — Jun 2026', 'Built responsive UIs across real-world projects.', 1, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(3, 'Backend Developer Intern', 'CodeAlpha', 'Remote', 'Apr 2026 — May 2026', 'Developed PHP + MySQL backend modules and REST endpoints.', 2, '2026-07-04 11:36:35', '2026-07-04 11:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2026_01_01_000001_create_admins_table', 1),
(2, '2026_01_01_000002_create_projects_table', 1),
(3, '2026_01_01_000003_create_skills_table', 1),
(4, '2026_01_01_000004_create_experiences_table', 1),
(5, '2026_01_01_000005_create_certificates_table', 1),
(6, '2026_01_01_000006_create_education_table', 1),
(7, '2026_01_01_000007_create_messages_table', 1),
(8, '2026_01_01_000008_create_settings_table', 1),
(9, '2026_07_04_163222_create_sessions_table', 2),
(10, '2026_07_04_163352_create_cache_table', 3),
(11, '2026_07_04_000009_add_institution_website_and_dates_to_education_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `stack` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`stack`)),
  `github_url` varchar(255) DEFAULT NULL,
  `live_url` varchar(255) DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `tagline`, `description`, `image`, `stack`, `github_url`, `live_url`, `featured`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'EventraX', 'Smart Event Registration Platform', NULL, NULL, '[\"PHP\",\"MySQL\",\"Bootstrap\"]', 'https://github.com/laibarafique25/eventrx-event-registration-system', 'https://www.linkedin.com/posts/laiba-rafique-6745623b9_webdevelopment-php-mysql-activity-7466523970662457344-52Ut?utm_source=share&utm_medium=member_desktop&rcm=ACoAAGYQQzgBUN6fFPcY8ZS2VwKH_hQEq3GPmKY', 1, 0, '2026-07-04 11:36:34', '2026-07-04 13:11:23'),
(2, 'Bella Vista', 'Restaurant Management System', NULL, NULL, '[\"PHP\",\"MySQL\",\"JavaScript\"]', 'https://github.com/laibarafique25/bella-vista-restaurant-admin', 'https://bellavistaadmin.42web.io/?i=1', 1, 1, '2026-07-04 11:36:34', '2026-07-04 13:08:49'),
(3, 'Address Book', 'E-Commerce Platform', NULL, NULL, '[\"PHP\",\"MySQL\"]', 'https://github.com/laibarafique25/AddressBook-Ecommerce-PHP-MySQL', NULL, 1, 2, '2026-07-04 11:36:34', '2026-07-04 13:10:41'),
(4, 'URL Shortener', 'Link Management Tool', NULL, NULL, '[\"PHP\",\"PDO\",\"MySQL\"]', 'https://github.com/laibarafique25/CodeAlpha_URL_Shortener', 'https://www.linkedin.com/posts/laiba-rafique-6745623b9_webdevelopment-php-mysql-activity-7466526606166171648-FQsD?utm_source=share&utm_medium=member_desktop&rcm=ACoAAGYQQzgBUN6fFPcY8ZS2VwKH_hQEq3GPmKY', 1, 3, '2026-07-04 11:36:34', '2026-07-04 13:10:04'),
(5, 'TaskFlow', 'JavaScript Productivity App', NULL, NULL, '[\"JavaScript\",\"CSS\",\"HTML\"]', 'https://github.com/laibarafique25/DecodeLabs_Internship/tree/main/week-03-taskflow', 'https://laibarafique25.github.io/DecodeLabs_Internship/week-03-taskflow/', 0, 4, '2026-07-04 11:36:35', '2026-07-04 13:07:51'),
(6, 'AuraForm', 'AI Powered Onboarding Experience', NULL, NULL, '[\"HTML\",\"CSS5\",\"Bootstrap\",\"JavaScript\"]', 'https://github.com/laibarafique25/DecodeLabs_Internship/tree/main/week-04-auraform', 'https://laibarafique25.github.io/DecodeLabs_Internship/week-04-auraform/', 0, 5, '2026-07-04 11:36:35', '2026-07-04 13:06:45'),
(7, 'Wanderlane', 'Travel Agency Website', NULL, NULL, '[\"HTML\",\"CSS\",\"JavaScript\"]', 'https://github.com/laibarafique25/DecodeLabs_Internship/tree/main/week-01-wanderlane', 'https://laibarafique25.github.io/DecodeLabs_Internship/week-01-wanderlane/', 0, 6, '2026-07-04 11:36:35', '2026-07-04 12:55:33'),
(8, 'Dreamweaver Moments', 'Camera E-Commerce Website', NULL, NULL, '[\"PHP\",\"MySQL\"]', 'https://github.com/laibarafique25/project_moment', 'https://laibarafique25.github.io/project_moment/', 0, 7, '2026-07-04 11:36:35', '2026-07-04 12:52:44'),
(9, 'Harrington & Associates', 'Corporate Law Firm Landing Page', NULL, NULL, '[\"HTML5 \\u2022 CSS3 \\u2022 JavaScript \\u2022 CSS Grid \\u2022 Flexbox\"]', 'https://github.com/laibarafique25/DecodeLabs_Internship/tree/main/week-02-law-firm', 'https://laibarafique25.github.io/DecodeLabs_Internship/week-02-law-firm/', 0, 8, '2026-07-04 13:04:18', '2026-07-04 13:04:18');

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
('o1YWlVyr8XSoW3DYWRvUJ5e70lNPhZqB7zDwtSQR', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0JsbDd4eVpkUVhPUndYN0xYeUNpc1BVM0poRFlQRllZTnJ1OG9TdCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3QvbGFpYmEtcG9ydGZvbGlvLWxhcmF2ZWwvcHVibGljIjtzOjU6InJvdXRlIjtzOjQ6ImhvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1783190541),
('x7yUdM8yCh99ogaSrWAECKADQlQNTsPVQz2gFJsq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTXdwdE96Z3dTZHVBajl5TG5Ld2JFcDhTRmRVVjRPblVVd2lGYVhTVCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9tZXNzYWdlcyI7czo1OiJyb3V0ZSI7czoyMDoiYWRtaW4ubWVzc2FnZXMuaW5kZXgiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1783190322);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Laiba Rafique', '2026-07-04 11:36:34', '2026-07-04 11:36:34'),
(2, 'hero_greeting', 'Hi, I\'m Laiba Rafique', '2026-07-04 11:36:34', '2026-07-04 11:36:34'),
(3, 'hero_role', 'Junior Full Stack Web Developer', '2026-07-04 11:36:34', '2026-07-04 11:36:34'),
(4, 'hero_intro', 'I build responsive, scalable and user-focused web applications using PHP, Laravel, MySQL, JavaScript and Bootstrap.', '2026-07-04 11:36:34', '2026-07-04 11:36:34'),
(5, 'cv_url', '', '2026-07-04 11:36:34', '2026-07-04 11:36:34'),
(6, 'email', 'laibarafiqueee@gmail.com', '2026-07-04 11:36:34', '2026-07-04 12:41:24'),
(7, 'github_url', 'https://github.com/laibarafique25/', '2026-07-04 11:36:34', '2026-07-04 11:36:34'),
(8, 'linkedin_url', 'https://www.linkedin.com/in/laiba-rafique-6745623b9/', '2026-07-04 11:36:34', '2026-07-04 11:36:34'),
(9, 'profile_image', 'settings/aoAx2STl2a3St7OWtvsD3xswauR5qJJUmA8VpBWm.jpg', '2026-07-04 11:36:34', '2026-07-04 12:40:32'),
(10, 'cv_file', 'settings/5IksEipkyU4oAOc424iNodXVrD4WLrDbl7itRtxg.pdf', '2026-07-04 12:44:48', '2026-07-04 12:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` enum('frontend','backend','tools') NOT NULL DEFAULT 'frontend',
  `level` tinyint(3) UNSIGNED NOT NULL DEFAULT 80,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `category`, `level`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'HTML5', 'frontend', 95, 0, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(2, 'CSS3', 'frontend', 92, 1, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(3, 'Bootstrap 5', 'frontend', 90, 2, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(4, 'JavaScript', 'frontend', 85, 3, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(5, 'PHP', 'backend', 88, 4, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(6, 'Laravel', 'backend', 82, 5, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(7, 'MySQL', 'backend', 85, 6, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(8, 'Git', 'tools', 85, 7, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(9, 'GitHub', 'tools', 88, 8, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(10, 'VS Code', 'tools', 95, 9, '2026-07-04 11:36:35', '2026-07-04 11:36:35'),
(11, 'XAMPP', 'tools', 90, 10, '2026-07-04 11:36:35', '2026-07-04 11:36:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
