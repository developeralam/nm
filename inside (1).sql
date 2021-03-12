-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 05:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inside`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `video_link`, `video_thumbnail`, `banner1`, `banner2`, `banner3`, `banner4`, `created_at`, `updated_at`) VALUES
(4, 'We’ve been triumphing all these 38 years. Sacrifices are made up with success.', '<p>Mitech takes into consideration every little detail to make sure the system run smoothly and responsively. Mitech employs a new technique called Minified Technology for securing customers’ database &amp; building up highly confidential firewalls.</p>', 'https://www.youtube.com/watch?v=mbGotk3zW8g', 'uploads/aboutus/1PTeiqoj0yjBV6Bd7wxF6GTO18nXIhUbI02bROWp.jpg', 'uploads/aboutus/4OT9BnnUFFtJYAcki7OoRIbuRRxcpJqgtVhQYF0J.jpg', 'uploads/aboutus/3Z2O6FsiRjNUalityVAassLi7nKwMxiZNrtM4oHs.jpg', 'uploads/aboutus/AkUcBbwDrz8BD9yxWtti4zjK4dC7EcqyZ6f0b8Mm.jpg', 'uploads/aboutus/R9W3vz57hmZoZGFyBBHucpLd1YuVv9ee9ZfwGmoi.jpg', '2021-03-08 17:04:20', '2021-03-08 17:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `link`, `created_at`, `updated_at`) VALUES
(3, 'uploads/client/5naeWHNdTE8uJISBvxQGUDCFCMiXU8rndlCv6jgF.jpg', 'http://pro-alam.com', '2021-03-10 13:33:48', '2021-03-10 13:33:48'),
(4, 'uploads/client/Xc8dIgvW0HAWFGB3wwZZo0pgs3UYTJId9UlSFgjM.jpg', 'http://pro-alam.com', '2021-03-10 13:43:52', '2021-03-10 13:43:52'),
(5, 'uploads/client/6sYLkArJBzveeEj4UWRbZTcsmPVuzoF9n3QkfNk7.jpg', 'http://pro-alam.com', '2021-03-10 13:44:14', '2021-03-10 13:44:14'),
(6, 'uploads/client/8nvfDl6aFYrAYyG63Oe8xeaEkpZOgNE8eS8V6O1s.jpg', 'http://pro-alam.com', '2021-03-10 13:44:58', '2021-03-10 13:44:58'),
(7, 'uploads/client/62oafK9GwHVPKRoA471Lna3iOlGyXUYNmjfZbUNd.jpg', 'http://pro-alam.com', '2021-03-10 13:45:23', '2021-03-10 13:45:23');

-- --------------------------------------------------------

--
-- Table structure for table `client_reviews`
--

CREATE TABLE `client_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`id`, `img`, `title`, `caption`, `alt`, `created_at`, `updated_at`) VALUES
(5, 'uploads/hero/6cmJSv6IeHPIgU4bQGaJIohiH7aWf65G5nN8nn82.jpg', 'Inside It', 'Inside it - Best Web Solutions Company', 'Home Services', '2021-03-03 17:35:47', '2021-03-03 17:35:47'),
(6, 'uploads/hero/ABkGUEBcuV5lDhgL1HIOqmpIL6PBKcpWrK6zdugr.jpg', 'Web Solutions', 'Inside it - Best Web Solutions Company', 'Software Company', '2021-03-03 17:41:14', '2021-03-03 17:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(3, 'md alam', 'admin@gmail.com', 'sdafdaf', 'test', 1, '2021-03-10 16:22:47', '2021-03-10 17:46:08');

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
(16, '2021_03_01_082131_create_site_configs_table', 3),
(17, '2021_03_01_090146_create_heroes_table', 4),
(18, '2021_03_01_082153_create_seos_table', 5),
(19, '2021_03_01_082438_create_products_table', 5),
(20, '2021_03_01_082906_create_services_table', 5),
(21, '2021_03_01_082933_create_photo_galleries_table', 5),
(22, '2021_03_01_083224_create_video_galleries_table', 5),
(23, '2021_03_01_083521_create_client_reviews_table', 6),
(25, '2021_03_01_084640_create_teams_table', 6),
(28, '2021_03_06_053926_create_proud_projects_table', 6),
(29, '2021_03_01_084124_create_about_us_table', 7),
(30, '2021_03_01_094456_create_clients_table', 8),
(31, '2021_03_01_104206_create_socials_table', 9),
(32, '2021_03_09_103447_create_messages_table', 10),
(33, '2021_03_11_142908_create_progress_table', 11);

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
-- Table structure for table `photo_galleries`
--

CREATE TABLE `photo_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `alt`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Diagnostic Managemeny System', 'uploads/product/0FIOwIA2DLmyTUZyaBWDRlo8M4VlV77h1ZgbAvcu.png', 'Diagnostic Managemeny System', '<p>please take it seriously this qustion answer its protect your website from cross site scripting excecution.for example if user save his name but he puted script alert.then if you using core php and not handling the strip tags then this script excution when page laod</p><p>so i give you some more harmful example 1)like i puted my name as script or in a about section and in script i write some code who get the browser cookies of open website and curl request for saving on my server.</p><p>so you understand this whats happen if i got the each user cookies by curl and i just puted a cross script in about filed and its saved in database.</p>', '2021-03-06 18:26:50', '2021-03-06 18:26:50'),
(3, 'Pharmecy Management System', 'uploads/product/3YHbpKRQqX3QVK25mkgGrnw4zrPywZMCpcMXkuFF.png', 'Pharmecy Management System', '<p>please take it seriously this qustion answer its protect your website from cross site scripting excecution.for example if user save his name but he puted script alert.then if you using core php and not handling the strip tags then this script excution when page laod</p><p>so i give you some more harmful example 1)like i puted my name as script or in a about section and in script i write some code who get the browser cookies of open website and curl request for saving on my server.</p><p>so you understand this whats happen if i got the each user cookies by curl and i just puted a cross script in about filed and its saved in database.</p>', '2021-03-06 18:27:21', '2021-03-06 18:27:21'),
(4, 'VEHICLE TRACKING SOFTWARE', 'uploads/product/SqwStOHH1bmSJpUD1rpzuxAlCM5T0TCXHS7KdpeC.png', 'VEHICLE TRACKING SOFTWARE', '<p>tracking platform is built with advanced GPS technology for user-friendly, complete reporting system and various mapping facilities. Our vehicles tracking system builds the most powerful tools for managing your vehicles, trailers or whatever your assets might be. our tracking platform, you will found vehicle real-time tracking, real-time notifications, engine on/off status, over-speed alert, auto email alerts, mileage information, idle time, fuel level status etc.</p>', '2021-03-06 18:30:45', '2021-03-06 18:30:45'),
(5, 'HOSPITAL MANAGEMENT SOFTWARE', 'uploads/product/gh9VgGVIyNBFLuj0CjCT6FQxWAxlUckfh5zxrqKY.png', 'HOSPITAL MANAGEMENT SOFTWARE', '<p>is offering the best Hospital Management Software in Bangladesh. It\'s a complete management solution which provides the best result for you., better administration, best patient care, cost minimization &amp; more profit. The regular hospital activities like full indoor service, full outdoor service, lab management, pharmacy management, Accounts and finance, HRM, patient details, doctors, and all reports. We are providing high-quality management software for hospital management solution in Bangladesh.</p>', '2021-03-06 18:31:57', '2021-03-06 18:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `experience` int(11) DEFAULT NULL,
  `project` int(11) DEFAULT NULL,
  `professionals` int(11) DEFAULT NULL,
  `customer` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `experience`, `project`, `professionals`, `customer`, `created_at`, `updated_at`) VALUES
(1, 3534, 12456, 4245, 32564, '2021-03-11 23:27:55', '2021-03-12 00:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `proud_projects`
--

CREATE TABLE `proud_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `analitics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `alt`, `description`, `created_at`, `updated_at`) VALUES
(7, 'Web Design & Development', 'uploads/service/oIGWgywDLL2Z1trA3VAKOxSaZXTp7mrCR1JhlOsU.jpg', 'Web Design & Development', '<p>Innovation and change define the mobile landscape, and Apple’s iOS is at the forefront. Our iOS team embraces change, and as the iOS ecosystem has grown we have incorporated every new feature and technology. We understand how the iPhone, iPad, Apple Watch, and Apple TV can work together, and know how to leverage each of their strengths to create solutions spanning all of Apple’s mobile offerings.</p>', '2021-03-10 22:58:00', '2021-03-10 22:58:00'),
(8, 'IOS APP DEVELOPMENT', 'uploads/service/YYYLI46qfJUzF4ic0DCosq66BWZUn9mwcUlVOo9Y.png', 'IOS APP DEVELOPMENT', '<p>Innovation and change define the mobile landscape, and Apple’s iOS is at the forefront. Our iOS team embraces change, and as the iOS ecosystem has grown we have incorporated every new feature and technology. We understand how the iPhone, iPad, Apple Watch, and Apple TV can work together, and know how to leverage each of their strengths to create solutions spanning all of Apple’s mobile offerings.</p>', '2021-03-10 23:00:28', '2021-03-10 23:00:28'),
(9, 'ANDROID APP DEVELOPMENT', 'uploads/service/gfeHNFGA9jCOySQN5IDJyiKWwcwXERpk4XOpBZ7o.jpg', 'ANDROID APP DEVELOPMENT', '<p>The foundation of Android development is built on Java – both a blessing and a curse for companies looking to create an Android app. Java is one of the most popular languages and is often one of the first taught to developers in school. What this translates to is a sea of developers that all claim to understand and be proficient in Java. This volume makes it difficult to differentiate between merely competent and highly talented Android developers. Many of the times Android App development projects fail for the incompetence of developers. Dream71 Bangladesh Ltd is one of the leading Android <a href=\"http://www.dream71.com/\"><strong>App Development companies in Bangladesh</strong> </a>which comes with the promise of understanding the requirement and delivering in the most finest possible manner.</p>', '2021-03-10 23:01:54', '2021-03-10 23:01:54'),
(10, 'SOFTWARE DEVELOPMENT', 'uploads/service/Ll6WhTvWcBoaq66D7m0qBrDQfUe77kJ1Ho2QUFtY.png', 'SOFTWARE DEVELOPMENT', '<p>The foundation of Android development is built on Java – both a blessing and a curse for companies looking to create an Android app. Java is one of the most popular languages and is often one of the first taught to developers in school. What this translates to is a sea of developers that all claim to understand and be proficient in Java. This volume makes it difficult to differentiate between merely competent and highly talented Android developers.</p>', '2021-03-10 23:04:21', '2021-03-10 23:04:21'),
(11, 'DIGITAL MARKETING', 'uploads/service/kzA0h2NqL8d7NSJUfupHKoxQQRUYMRy8w0lPufQU.jpg', 'DIGITAL MARKETING', '<p>We’re in a world that changes by the minute, where free media has greater reach and credibility than paid media and where prospects talk about you and your competition 24/7.It’s a world where not just desktops and mobile phones – but TV programs, billboards and newspapers are going digital.</p><p>A world where industrial era practices of command-and-control or even Kotler-type 4P approaches simply don’t cut it anymore.</p>', '2021-03-10 23:07:28', '2021-03-10 23:07:28'),
(12, 'GAME DEVELOPMENT', 'uploads/service/ASNH81Wj3eD04JYRmGMDKWj1aTjK8zApeNizL5oy.jpg', 'GAME DEVELOPMENT', '<p>The foundation of Android development is built on Java – both a blessing and a curse for companies looking to create an Android app. Java is the one of the most popular languages, and is often one of the first taught to developers in school. What this translates to is a sea of developers that all claim to understand and be proficient in Java. This volume makes it difficult to differentiate between merely competent and highly talented Android developers.</p>', '2021-03-10 23:09:40', '2021-03-10 23:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `site_configs`
--

CREATE TABLE `site_configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `httext` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_configs`
--

INSERT INTO `site_configs` (`id`, `logo`, `favicon`, `company_name`, `company_title`, `address`, `email`, `phone`, `httext`, `created_at`, `updated_at`) VALUES
(1, 'uploads/site-config/aKhhJe0Zjc9EeBOFozwIJmtHuDOddR4FA5Za6qZD.png', 'uploads/site-config/m57gU4sijaxyDyEX5vlbIJ5TKZoJs7mpJMEjmyCn.jpg', 'Inside It', 'Technology IT Web Solutions', 'Mohammadpur, Dhaka, Bangladesh', 'admin@insideit.com', '01706668403', '<p><a href=\"facebook.com\">Now Hiring</a><a href=\"http://127.0.0.1:8000/#\">:</a> Are you a driven and motivated 1st Line IT Support Engineer?</p>', '2021-03-02 13:58:42', '2021-03-11 12:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_page` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `facebook_page`, `created_at`, `updated_at`) VALUES
(1, 'facebook.com/developeralam', 'facebook.com/developeralam', 'facebook.com/developeralam', 'facebook.com/developeralam', 'youtube.com', 'https://www.facebook.com/insideitbd', '2021-03-09 18:07:09', '2021-03-10 16:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `image`, `facebook`, `twitter`, `linkedin`, `instagram`, `created_at`, `updated_at`) VALUES
(2, 'Sheikh Mozibur Rahman', 'Political Leader', 'uploads/team/vFxVhtjwXNnCTfHnYYVqMnRBwu1tnVqBWb4c1mPX.jpg', 'facebook.com/developeralam', 'facebook.com/developeralam', 'facebook.com/developeralam', 'facebook.com/developeralam', '2021-03-09 14:55:14', '2021-03-09 14:55:14');

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
(1, 'Inside It', 'admin@insideit.com', NULL, '$2y$10$yJuh/e2gBtqZG.BGB1/n7OPHIs4RQq6MAPcxakSPyEpbiJwFHo1M6', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_reviews`
--
ALTER TABLE `client_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `heroes`
--
ALTER TABLE `heroes`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proud_projects`
--
ALTER TABLE `proud_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_configs`
--
ALTER TABLE `site_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `client_reviews`
--
ALTER TABLE `client_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `photo_galleries`
--
ALTER TABLE `photo_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proud_projects`
--
ALTER TABLE `proud_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `site_configs`
--
ALTER TABLE `site_configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
