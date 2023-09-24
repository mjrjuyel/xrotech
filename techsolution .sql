-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 01:01 PM
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
-- Database: `techsolution`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(100) DEFAULT NULL,
  `about_subtitle` varchar(30) DEFAULT NULL,
  `about_description` text DEFAULT NULL,
  `about_pic` varchar(100) DEFAULT NULL,
  `about_elem1` varchar(100) DEFAULT NULL,
  `about_elem2` varchar(100) DEFAULT NULL,
  `about_elem3` varchar(100) DEFAULT NULL,
  `about_elem4` varchar(100) DEFAULT NULL,
  `about_slug` varchar(255) NOT NULL,
  `about_editor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_title`, `about_subtitle`, `about_description`, `about_pic`, `about_elem1`, `about_elem2`, `about_elem3`, `about_elem4`, `about_slug`, `about_editor`, `created_at`, `updated_at`) VALUES
(1, 'Mission Is To Bring The Power Of ML To Every Business', 'About Us', 'We are a growing global AI based IT consulting platform on our way to becoming a leading digital transformation winner. We are here to provide a fulfilling and high-quality solutions for our customers.\r\n\r\n            Working with us gives companies a competitive advantage. Let us be your competitive advantage too!\r\n            \r\n            Tekseer is a new breed of AI based technology company providing end-to-end digital transformation services across tech enablement, integration, and development together with strategy and consulting. We help enterprises in building their robust solutions with diverse programming language, data science and AI. Whether it is a consumer-oriented app or a transformative enterprise-class solution, the company leads the process from ideation and concept to delivery. Our mission is to support our clients in accelerating adoption of new technologies, untangle complex issues, emerge digital evolution, and orchestrate ongoing innovation. We are a team with deep industry expertise, consolidating a business vision and technical skillfulness to elevate your growth and provide your business a competitive advantage.', 'about-650d1a65e4903.png', 'Advance Advisory Team', 'Experienced Software Developers', 'Customer Centric', 'High-Quality Solution', 'about-650c262dd43a8', 1, '2023-09-21 11:17:01', '2023-09-22 04:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `ais`
--

CREATE TABLE `ais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ai_title` varchar(255) NOT NULL,
  `ai_slug` varchar(255) NOT NULL,
  `ai_main` int(11) NOT NULL,
  `ai_creator` int(11) NOT NULL,
  `ai_editor` int(11) DEFAULT NULL,
  `ai_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ais`
--

INSERT INTO `ais` (`id`, `ai_title`, `ai_slug`, `ai_main`, `ai_creator`, `ai_editor`, `ai_status`, `created_at`, `updated_at`) VALUES
(1, 'Robust motivating project', 'ai-650c262e08d5d', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(2, 'Intuitive interactive customerloyalty', 'ai-650c262e0902c', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(3, 'Proactive 24/7 task-force', 'ai-650c262e091f5', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(4, 'Cross-platform impactful throughput', 'ai-650c262e0939c', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(5, 'Cloned systematic leverage', 'ai-650c262e09535', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(6, 'Open-architected fresh-thinking capacity', 'ai-650c262e096c2', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(7, 'Proactive 24hour capability', 'ai-650c262e0984a', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(8, 'Versatile object-oriented neural-net', 'ai-650c262e099d5', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(9, 'Reduced dedicated application', 'ai-650c262e09b5d', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(10, 'Reverse-engineered didactic model', 'ai-650c262e09ce3', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(11, 'Exclusive tangible website', 'ai-650c262e09e68', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(12, 'Re-engineered', 'ai-650c262e09fed', 1, 1, 1, 1, '2023-09-21 11:17:02', '2023-09-22 04:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `ai_mains`
--

CREATE TABLE `ai_mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ai_main_title` varchar(255) NOT NULL,
  `ai_main_subtitle` varchar(255) NOT NULL,
  `ai_main_creator` int(11) NOT NULL,
  `ai_main_editor` int(11) DEFAULT NULL,
  `ai_main_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ai_mains`
--

INSERT INTO `ai_mains` (`id`, `ai_main_title`, `ai_main_subtitle`, `ai_main_creator`, `ai_main_editor`, `ai_main_status`, `created_at`, `updated_at`) VALUES
(1, 'Benefits for Your Business', 'AI Services Implementation', 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ban_title` varchar(100) DEFAULT NULL,
  `ban_pic` varchar(100) DEFAULT NULL,
  `ban_btn` varchar(25) DEFAULT NULL,
  `ban_slug` varchar(255) NOT NULL,
  `ban_editor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `ban_title`, `ban_pic`, `ban_btn`, `ban_slug`, `ban_editor`, `created_at`, `updated_at`) VALUES
(1, 'Accelerate Business Growth With Custom AI-Powered Solutions', 'ban-650d60e70a92f.png', 'Get Started', 'ban-650c262dce6db', 2, '2023-09-22 09:39:51', '2023-09-22 09:39:51');

-- --------------------------------------------------------

--
-- Table structure for table `basics`
--

CREATE TABLE `basics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basic_Mlogo` varchar(50) DEFAULT NULL,
  `basic_Flogo` varchar(50) DEFAULT NULL,
  `basic_favIcon` varchar(50) DEFAULT NULL,
  `basic_description` text DEFAULT NULL,
  `basic_copy` varchar(255) DEFAULT NULL,
  `basic_slug` varchar(255) NOT NULL,
  `basic_creator` int(11) NOT NULL,
  `basic_editor` int(11) DEFAULT NULL,
  `basic_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basics`
--

INSERT INTO `basics` (`id`, `basic_Mlogo`, `basic_Flogo`, `basic_favIcon`, `basic_description`, `basic_copy`, `basic_slug`, `basic_creator`, `basic_editor`, `basic_status`, `created_at`, `updated_at`) VALUES
(1, 'Main-Logo-650d25aea783e-.png', 'Footer-Logo-650d25bbb928f-.png', 'Favicon-650d25aeabd38-.png', 'Tekseer is an AI based software development company providing end-to-end digital transformation services to diverse ventures. We help enterprises in building their robust solutions with diverse programming language, data science', '©2022 Xcrotech Software Solutions.', 'basic-650c262dc0c59', 1, 1, 1, '2023-09-21 11:17:01', '2023-09-22 05:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `cat_data`
--

CREATE TABLE `cat_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filter_data_id` bigint(20) UNSIGNED NOT NULL,
  `filter_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `choose_mains`
--

CREATE TABLE `choose_mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cho_main_title` varchar(100) NOT NULL,
  `cho_main_subtitle` varchar(100) NOT NULL,
  `cho_main_pic` varchar(100) DEFAULT NULL,
  `cho_main_creator` int(11) NOT NULL,
  `cho_main_editor` int(11) DEFAULT NULL,
  `cho_main_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choose_mains`
--

INSERT INTO `choose_mains` (`id`, `cho_main_title`, `cho_main_subtitle`, `cho_main_pic`, `cho_main_creator`, `cho_main_editor`, `cho_main_status`, `created_at`, `updated_at`) VALUES
(1, 'Our Platform Takes Away The Hard Process Of Creating Your Solution', 'Why Choose Us', 'Chose-650d1bcc7b762-.png', 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-22 04:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `choose_us`
--

CREATE TABLE `choose_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cho_title` varchar(50) NOT NULL,
  `cho_detail` text NOT NULL,
  `cho_icon` varchar(30) NOT NULL,
  `cho_slug` varchar(255) NOT NULL,
  `cho_main` int(11) NOT NULL,
  `cho_creator` int(11) NOT NULL,
  `cho_editor` int(11) DEFAULT NULL,
  `cho_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choose_us`
--

INSERT INTO `choose_us` (`id`, `cho_title`, `cho_detail`, `cho_icon`, `cho_slug`, `cho_main`, `cho_creator`, `cho_editor`, `cho_status`, `created_at`, `updated_at`) VALUES
(1, 'Quality and expertise:', 'Our perfectionism and aspiration for quality motivates us to hone our expertiseon daily basis, and is the reason behind our choice of technology.', 'icofont-live-support', 'role-650d1b7f006aa', 1, 1, NULL, 1, '2023-09-22 04:43:43', '2023-09-22 04:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cm_name` varchar(20) NOT NULL,
  `cm_email` varchar(50) NOT NULL,
  `cm_phone` varchar(20) DEFAULT NULL,
  `cm_subject` varchar(50) DEFAULT NULL,
  `cm_message` text DEFAULT NULL,
  `cm_slug` varchar(255) NOT NULL,
  `cm_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `cm_name`, `cm_email`, `cm_phone`, `cm_subject`, `cm_message`, `cm_slug`, `cm_status`, `created_at`, `updated_at`) VALUES
(1, 'Dr.', 'lilyan.bechtelar@yahoo.com', '+1-838-372-9224', 'Block, Langosh and Fay', 'Ullam libero est distinctio. Ea dolorem suscipit dicta cum velit odit et. Quam mollitia sed est ea possimus qui ipsam quod. Ea et omnis occaecati a. Non nihil temporibus inventore at minus modi.', 'cm-650c262de862c', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(2, 'Prof.', 'daugherty.wyman@yahoo.com', '+1-781-854-4945', 'Friesen, Walker and Rippin', 'Consequatur dolor nemo qui quisquam. Sit et occaecati est tempora ratione. Dolor fugit ut id sed et. Ipsum quidem ullam aliquam incidunt beatae qui. Debitis et totam sunt corrupti at non architecto.', 'cm-650c262de88ba', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(3, 'Ms.', 'pmurray@quitzon.info', '765.777.8017', 'Oberbrunner, Renner and Lynch', 'Saepe inventore at velit assumenda unde voluptatem optio. Officiis odio minima voluptatem quis. Ea rem maxime quos earum odit.', 'cm-650c262de8a95', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(4, 'Dr.', 'mellie81@dietrich.com', '(337) 588-8026', 'Walker, Koelpin and Von', 'Labore amet consequatur cumque veniam consequatur. Libero non sint est dolore tempore omnis blanditiis.', 'cm-650c262de8c63', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(5, 'Mr.', 'lorine08@hotmail.com', '+1-862-973-5392', 'VonRueden-Renner', 'Est reprehenderit nisi a ea. Magni quis neque eum iure. Laborum inventore alias est quasi ea dolorem. Sit vel et totam non.', 'cm-650c262de8e1a', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(6, 'Miss', 'barton.haley@yahoo.com', '(682) 363-2003', 'Ernser Ltd', 'Ipsum voluptate architecto nisi autem expedita maiores. Esse provident sit tenetur et dolores quia architecto. Rerum odio excepturi facere et eaque asperiores.', 'cm-650c262de8fea', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(7, 'Dr.', 'angus79@yahoo.com', '(479) 498-7034', 'Steuber-Pacocha', 'Possimus qui quasi ad vitae quia suscipit laborum veniam. Ut autem architecto cumque excepturi magni. Voluptatem sequi eius quas et nostrum impedit officiis. Nulla quis maxime sed qui distinctio.', 'cm-650c262de91ec', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(8, 'Ms.', 'khegmann@gmail.com', '563-394-4011', 'Skiles-Crona', 'Dolorem sit aut harum enim ipsam minus eum. Repudiandae architecto repudiandae veniam magni. Deserunt natus nihil odio laudantium iste expedita eligendi.', 'cm-650c262de93ab', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(9, 'Dr.', 'stroman.lionel@hotmail.com', '(203) 467-8739', 'Rippin, Kerluke and Osinski', 'Totam quia minima aut at. Ducimus est ullam non ex. Distinctio dolorem voluptatum voluptatum saepe. Nesciunt commodi dolorum optio atque aut quia sed.', 'cm-650c262de9570', 0, '2023-09-21 11:17:01', '2023-09-21 12:47:44'),
(10, 'Dr.', 'mariam.reichert@hotmail.com', '(757) 894-4695', 'Fay-Romaguera', 'Ut accusamus sunt dolores molestiae. Assumenda nihil quod impedit. Eos maxime maiores beatae facere voluptatem veritatis ut consectetur.', 'cm-650c262de9724', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(11, 'Juyel', 'juyel@gmail.com', 'fffff', NULL, 'efefef', 'cm-650d1ac608f27', 1, '2023-09-22 04:40:38', '2023-09-22 04:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cu_number1` varchar(20) DEFAULT NULL,
  `cu_number2` varchar(20) DEFAULT NULL,
  `cu_number3` varchar(20) DEFAULT NULL,
  `cu_number4` varchar(20) DEFAULT NULL,
  `cu_email1` varchar(35) DEFAULT NULL,
  `cu_email2` varchar(35) DEFAULT NULL,
  `cu_email3` varchar(35) DEFAULT NULL,
  `cu_email4` varchar(35) DEFAULT NULL,
  `cu_address1` varchar(50) DEFAULT NULL,
  `cu_address2` varchar(50) DEFAULT NULL,
  `cu_address3` varchar(50) DEFAULT NULL,
  `cu_address4` varchar(50) DEFAULT NULL,
  `cu_editor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `cu_number1`, `cu_number2`, `cu_number3`, `cu_number4`, `cu_email1`, `cu_email2`, `cu_email3`, `cu_email4`, `cu_address1`, `cu_address2`, `cu_address3`, `cu_address4`, `cu_editor`, `created_at`, `updated_at`) VALUES
(1, '+31 687 857 9666', '999', '111111', '2222', 'info.tekseer@gmail.com', 'rasel@gmail.com', 'rasel@gmail.com', 'rasel@gmail.com', 'Amsterdam (the Netherlands)', 'Jaipur (India)', 'vgfvgfgfub', NULL, 2, '2023-09-21 11:17:01', '2023-09-22 09:40:59');

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
-- Table structure for table `filter_data`
--

CREATE TABLE `filter_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fil_title` varchar(50) NOT NULL,
  `fil_detail` varchar(200) NOT NULL,
  `fil_pic` varchar(50) DEFAULT NULL,
  `fil_slug` varchar(255) NOT NULL,
  `fil_cat` int(11) NOT NULL,
  `fil_creator` int(11) NOT NULL,
  `fil_editor` int(11) DEFAULT NULL,
  `fil_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filter_data`
--

INSERT INTO `filter_data` (`id`, `fil_title`, `fil_detail`, `fil_pic`, `fil_slug`, `fil_cat`, `fil_creator`, `fil_editor`, `fil_status`, `created_at`, `updated_at`) VALUES
(1, 'Layla Herzog III', 'Dolores blanditiis quaerat explicabo.', NULL, 'fil-650c262e18985', 5, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(2, 'Mr. Milan Green', 'Aut voluptas dolorem iure totam officia tempora fuga.', NULL, 'fil-650c262e18cc6', 2, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(3, 'Hoyt Fay PhD', 'Officia impedit sit neque et quia omnis voluptatibus.', NULL, 'fil-650c262e18f0c', 6, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(4, 'Queen Cole', 'Sint aperiam odit ipsam sed molestias.', NULL, 'fil-650c262e1911b', 3, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(5, 'Brad Ziemann', 'Nobis blanditiis ipsum molestiae dolor quibusdam.', NULL, 'fil-650c262e19320', 4, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(6, 'Dr. Lessie Stehr I', 'Harum id vel commodi perferendis sunt rerum nulla.', NULL, 'fil-650c262e1953b', 1, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(7, 'Frieda Romaguera', 'Voluptatem quis sed rem eligendi consequuntur deleniti nam.', NULL, 'fil-650c262e19743', 2, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(8, 'Eldon Koss', 'Excepturi ab laborum quaerat a totam eum voluptatibus.', NULL, 'fil-650c262e19948', 3, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(9, 'Ericka Hane I', 'Voluptate fugit quia voluptas laboriosam consectetur.', NULL, 'fil-650c262e19b62', 4, 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(10, 'Nelda', 'Sunt dolor quisquam', 'ban-650d1dd755743.png', 'fil-650c262e19d55', 6, 1, 1, 1, '2023-09-21 11:17:02', '2023-09-22 04:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `filter_types`
--

CREATE TABLE `filter_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fil_type_title` varchar(50) NOT NULL,
  `fil_type_btn` varchar(25) NOT NULL,
  `fil_type_slug` varchar(255) NOT NULL,
  `fil_type_creator` int(11) NOT NULL,
  `fil_type_editor` int(11) DEFAULT NULL,
  `fil_type_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filter_types`
--

INSERT INTO `filter_types` (`id`, `fil_type_title`, `fil_type_btn`, `fil_type_slug`, `fil_type_creator`, `fil_type_editor`, `fil_type_status`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Lucie Price', 'Lucius', 'fil_t-650c262e1259e', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(2, 'Leola Bergstrom', 'Destin', 'fil_t-650c262e12794', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(3, 'Athena Bins DVM', 'Quinn', 'fil_t-650c262e128fe', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(4, 'Lauren Bernier DDS', 'Albert', 'fil_t-650c262e12a5a', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(5, 'Ms. Melissa Kohler', 'Dewayne', 'fil_t-650c262e12ba0', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(6, 'Oma Bergnaum', 'Gene', 'fil_t-650c262e12cf7', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `get_touches`
--

CREATE TABLE `get_touches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `get_title` varchar(100) NOT NULL,
  `get_sub` varchar(70) NOT NULL,
  `get_pic` varchar(50) DEFAULT NULL,
  `get_creator` int(11) NOT NULL,
  `get_editor` int(11) DEFAULT NULL,
  `get_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `get_touches`
--

INSERT INTO `get_touches` (`id`, `get_title`, `get_sub`, `get_pic`, `get_creator`, `get_editor`, `get_status`, `created_at`, `updated_at`) VALUES
(1, 'Are you Ready for a Better, more Productive Business?', 'GET IN TOUCH with us', 'get-650d1aa9bb2b3.png', 1, 1, 1, '2023-09-22 04:40:09', '2023-09-22 04:40:09');

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
(5, '2023_09_14_155020_create_roles_table', 1),
(6, '2023_09_15_023953_create_contact_messages_table', 1),
(7, '2023_09_15_165714_create_basics_table', 1),
(8, '2023_09_16_131135_create_contact_us_table', 1),
(9, '2023_09_16_145652_create_banners_table', 1),
(10, '2023_09_16_170429_create_services_table', 1),
(11, '2023_09_17_191706_create_technologies_table', 1),
(12, '2023_09_17_204406_create_about_us_table', 1),
(13, '2023_09_19_011925_create_choose_us_table', 1),
(14, '2023_09_19_211656_create_choose_mains_table', 1),
(15, '2023_09_20_124737_create_ais_table', 1),
(16, '2023_09_20_135031_create_ai_mains_table', 1),
(17, '2023_09_20_152531_create_portfolios_table', 1),
(18, '2023_09_20_162917_create_filter_types_table', 1),
(19, '2023_09_20_180445_create_filter_data_table', 1),
(20, '2023_09_21_104417_create_processes_table', 1),
(21, '2023_09_21_120252_create_process_mains_table', 1),
(22, '2023_09_21_132024_create_get_touches_table', 1);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `port_title` varchar(100) NOT NULL,
  `port_sub_1` varchar(70) NOT NULL,
  `port_sub_2` varchar(70) NOT NULL,
  `port_pic` varchar(50) DEFAULT NULL,
  `port_creator` int(11) NOT NULL,
  `port_editor` int(11) DEFAULT NULL,
  `port_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `port_title`, `port_sub_1`, `port_sub_2`, `port_pic`, `port_creator`, `port_editor`, `port_status`, `created_at`, `updated_at`) VALUES
(1, 'WE WORK TO INNOVATE & ARE PROUD OF WHAT WE\'VE CREATED.', 'OUR PORTFOLIO - BREAKTHROUGH PROJECTS', 'YOU’LL LOVE TO SEE SOME OF OUR BEST PROJECTS. TAKE A LOOK!', NULL, 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

CREATE TABLE `processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_title` varchar(40) DEFAULT NULL,
  `pro_elem1` varchar(100) DEFAULT NULL,
  `pro_elem2` varchar(100) DEFAULT NULL,
  `pro_elem3` varchar(100) DEFAULT NULL,
  `pro_elem4` varchar(100) DEFAULT NULL,
  `pro_main` int(11) NOT NULL,
  `pro_slug` varchar(255) NOT NULL,
  `pro_creator` int(11) NOT NULL,
  `pro_editor` int(11) DEFAULT NULL,
  `pro_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `pro_title`, `pro_elem1`, `pro_elem2`, `pro_elem3`, `pro_elem4`, `pro_main`, `pro_slug`, `pro_creator`, `pro_editor`, `pro_status`, `created_at`, `updated_at`) VALUES
(1, 'Christy Grant Jr.', 'Self-enabling dedicated focusgroup', 'Mandatory 24/7 alliance', 'Versatile static benchmark', 'Exclusive regional complexity', 1, 'Process650c262e24174', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(2, 'Theresa Rice MD', 'Enterprise-wide didactic internetsolution', 'Polarised context-sensitive securedline', 'Right-sized global attitude', 'De-engineered tangible service-desk', 1, 'Process650c262e24536', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(3, 'Prof. Cathy Gleichner DDS', 'Front-line zerotolerance superstructure', 'Fundamental intangible customerloyalty', 'Multi-lateral solution-oriented throughput', 'User-friendly contextually-based analyzer', 1, 'Process650c262e246e7', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(4, 'Nikita Cassin', 'Phased disintermediate moratorium', 'Universal regional workforce', 'Synchronised transitional standardization', 'Ergonomic 5thgeneration solution', 1, 'Process650c262e2485d', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02'),
(5, 'Ricky Farrell', 'Enterprise-wide asynchronous encryption', 'Synergized object-oriented flexibility', 'Managed methodical knowledgebase', 'Intuitive value-added throughput', 1, 'Process650c262e249bf', 1, NULL, 1, '2023-09-21 11:17:02', '2023-09-21 11:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `process_mains`
--

CREATE TABLE `process_mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_main_title` varchar(255) NOT NULL,
  `pro_main_subtitle` varchar(255) NOT NULL,
  `pro_main_creator` int(11) NOT NULL,
  `pro_main_editor` int(11) DEFAULT NULL,
  `pro_main_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `process_mains`
--

INSERT INTO `process_mains` (`id`, `pro_main_title`, `pro_main_subtitle`, `pro_main_creator`, `pro_main_editor`, `pro_main_status`, `created_at`, `updated_at`) VALUES
(1, 'AI-Driven Software Development Process', 'Process', 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_title` varchar(50) NOT NULL,
  `role_slug` varchar(255) DEFAULT NULL,
  `role_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_title`, `role_slug`, `role_status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'role-650c262da8525', 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(2, 'Admin', 'role-650c40efc1ee4', 1, '2023-09-21 13:11:11', '2023-09-21 13:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ser_title` varchar(40) DEFAULT NULL,
  `ser_icon` varchar(50) DEFAULT NULL,
  `ser_elem1` varchar(100) DEFAULT NULL,
  `ser_elem3` varchar(100) DEFAULT NULL,
  `ser_elem2` varchar(100) DEFAULT NULL,
  `ser_slug` varchar(255) NOT NULL,
  `ser_creator` int(11) NOT NULL,
  `ser_editor` int(11) DEFAULT NULL,
  `ser_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `ser_title`, `ser_icon`, `ser_elem1`, `ser_elem3`, `ser_elem2`, `ser_slug`, `ser_creator`, `ser_editor`, `ser_status`, `created_at`, `updated_at`) VALUES
(1, 'Ipsa molestias qui aut.', 'flaticon-predictive-chart', 'Organized eco-centric methodology', 'Profit-focused eco-centric capacity', 'Team-oriented bandwidth-monitored website', 'ser-650c262df2468', 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-21 11:17:01'),
(2, 'Deleniti ducimus esse.', 'flaticon-predictive-chart', 'Re-engineered executive orchestration', 'Decentralized well-modulated data-warehouse', 'Visionary leadingedge service-desk', 'ser-650c262df2895', 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-21 11:17:02'),
(3, 'Reprehenderit sit reiciendis.', 'flaticon-predictive-chart', 'Proactive homogeneous neural-net', 'Balanced 3rdgeneration processimprovement', 'Open-source upward-trending orchestration', 'ser-650c262df2bb8', 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-21 11:17:02'),
(4, 'Voluptas nulla non in.', 'flaticon-predictive-chart', 'Multi-layered global capacity', 'Total interactive groupware', 'Organized motivating software', 'ser-650c262df2eca', 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-21 11:17:02'),
(5, 'Ea soluta voluptates.', 'flaticon-predictive-chart', 'Synergized client-server opensystem', 'Persistent user-facing budgetarymanagement', 'Optional intermediate flexibility', 'ser-650c262df33ab', 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-21 11:17:02'),
(6, 'Saepe reprehenderit quos quisquam et.', 'flaticon-predictive-chart', 'Organic zerotolerance opensystem', 'Cross-platform user-facing flexibility', 'Re-contextualized background architecture', 'ser-650c262df37e1', 1, NULL, 1, '2023-09-21 11:17:01', '2023-09-21 11:17:02'),
(7, 'Deep Learning & NLP', 'flaticon-processor', 'Short Video', 'dsfdsf', 'E-Commerce', 'role-650d18147a1a4', 1, NULL, 0, '2023-09-22 04:29:08', '2023-09-22 04:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `technologies`
--

CREATE TABLE `technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tech_title` varchar(30) NOT NULL,
  `tech_icon` varchar(100) DEFAULT NULL,
  `tech_description` text NOT NULL,
  `tech_slug` varchar(255) NOT NULL,
  `tech_creator` int(11) NOT NULL,
  `tech_editor` int(11) DEFAULT NULL,
  `tech_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `technologies`
--

INSERT INTO `technologies` (`id`, `tech_title`, `tech_icon`, `tech_description`, `tech_slug`, `tech_creator`, `tech_editor`, `tech_status`, `created_at`, `updated_at`) VALUES
(1, 'Computer Vision', 'flaticon-machine-learning-1', 'From biometric authentication to CCTV monitoring and live video analysis, we develop AI solutions that accurately recognize and interpret visual information.', 'tech-650c4470bbaf0', 1, NULL, 1, '2023-09-21 13:26:08', '2023-09-21 13:26:08'),
(2, 'Data Engineering', 'flaticon-processor', 'Our team of qualified and experienced Data Engineers and Consultants will create\r\n                                    large scale big data solution and trun them into valuable business insight', 'tech-650d19a250dbc', 1, NULL, 1, '2023-09-22 04:35:46', '2023-09-22 04:35:46');

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
(1, 'Juyel Rana', 'juyel@gmail.com', NULL, '$2y$10$cZriimC7TUBjROWL2YrbMOKySTNW9mVRB/AOJ/dOPuUund/UA6wdC', NULL, '2023-09-21 11:17:01', '2023-09-22 06:06:31'),
(2, 'Sohel', 'forhad@gmail.com', NULL, '$2y$10$rhlatXE3BLSOGJ/Nuh1wtOTxIBNiwyJzDzuvt9TRnPABbK1eAp74u', NULL, '2023-09-21 16:16:19', '2023-09-21 16:16:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ais`
--
ALTER TABLE `ais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ai_mains`
--
ALTER TABLE `ai_mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basics`
--
ALTER TABLE `basics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_data`
--
ALTER TABLE `cat_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_data_filter_data_id_foreign` (`filter_data_id`),
  ADD KEY `cat_data_filter_type_id_foreign` (`filter_type_id`);

--
-- Indexes for table `choose_mains`
--
ALTER TABLE `choose_mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choose_us`
--
ALTER TABLE `choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filter_data`
--
ALTER TABLE `filter_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filter_types`
--
ALTER TABLE `filter_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_touches`
--
ALTER TABLE `get_touches`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processes`
--
ALTER TABLE `processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_mains`
--
ALTER TABLE `process_mains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_role_title_unique` (`role_title`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologies`
--
ALTER TABLE `technologies`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ais`
--
ALTER TABLE `ais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ai_mains`
--
ALTER TABLE `ai_mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basics`
--
ALTER TABLE `basics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cat_data`
--
ALTER TABLE `cat_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choose_mains`
--
ALTER TABLE `choose_mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `choose_us`
--
ALTER TABLE `choose_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filter_data`
--
ALTER TABLE `filter_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `filter_types`
--
ALTER TABLE `filter_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `get_touches`
--
ALTER TABLE `get_touches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `processes`
--
ALTER TABLE `processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `process_mains`
--
ALTER TABLE `process_mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cat_data`
--
ALTER TABLE `cat_data`
  ADD CONSTRAINT `cat_data_filter_data_id_foreign` FOREIGN KEY (`filter_data_id`) REFERENCES `filter_data` (`id`),
  ADD CONSTRAINT `cat_data_filter_type_id_foreign` FOREIGN KEY (`filter_type_id`) REFERENCES `filter_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
