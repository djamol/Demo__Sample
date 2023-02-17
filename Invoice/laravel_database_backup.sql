-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2023 at 04:43 PM
-- Server version: 10.5.18-MariaDB-0+deb11u1
-- PHP Version: 7.2.34-38+0~20230214.79+debian11~1.gbp74d00c

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor` varchar(255) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `customer_other_details` text DEFAULT NULL,
  `vendor_other_details` text DEFAULT NULL,
  `item` text DEFAULT NULL,
  `item_count` int(11) DEFAULT NULL,
  `total_bill` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `vendor`, `customer`, `customer_other_details`, `vendor_other_details`, `item`, `item_count`, `total_bill`, `created_at`, `updated_at`) VALUES
(2, 'vendorname33333', 'customer name@@3', '{\"address\":\"streecust3\",\"city\":\"city3\",\"zip\":\"33333\",\"phone\":\"33333333\",\"email\":\"cust@gmail.com\"}', '{\"address\":\"streetvendor3\",\"city\":null,\"zip\":null,\"phone\":null,\"email\":null}', '[{\"id\":1,\"name\":\"Item 1\",\"desc\":\"item one desc price 1rs\",\"price\":1,\"qty\":\"3\",\"total\":3},{\"id\":2,\"name\":\"Item 2\",\"desc\":\"item 2 description 2 price 2\",\"price\":2,\"qty\":\"5\",\"total\":10}]', 2, 13, '2023-02-16 13:25:31', '2023-02-17 04:30:21'),
(3, 'vendorname', 'customer name5', '{\"address\":null,\"city\":null,\"zip\":null,\"phone\":null,\"email\":null}', '{\"address\":\"streetvendor\",\"city\":\"cityvendor\",\"zip\":\"44444\",\"phone\":\"999999999\",\"email\":\"email@gmail.com\"}', NULL, NULL, NULL, '2023-02-16 13:29:44', '2023-02-16 14:19:28'),
(4, 'vendorname', 'customer name5', '{\"address\":null,\"city\":null,\"zip\":null,\"phone\":null,\"email\":null}', '{\"address\":\"streetvendor\",\"city\":\"cityvendor\",\"zip\":\"44444\",\"phone\":\"999999999\",\"email\":\"email@gmail.com\"}', NULL, NULL, NULL, '2023-02-16 13:43:05', '2023-02-17 04:47:53'),
(18, 'vendorname99', 'customer name9', '{\"address\":\"custmstree9\",\"city\":\"custcity9\",\"zip\":\"9743231\",\"phone\":\"9999999999\",\"email\":\"cust9email@gmail.com\"}', '{\"address\":\"streetvendor99\",\"city\":\"cityvendor99\",\"zip\":\"2309382\",\"phone\":\"999999999\",\"email\":\"email@gmail.com\"}', '[{\"id\":1,\"name\":\"Item 1\",\"desc\":\"item one desc price 1rs\",\"price\":1,\"qty\":\"5\",\"total\":5},{\"id\":2,\"name\":\"Item 2\",\"desc\":\"item 2 description 2 price 2\",\"price\":2,\"qty\":\"6\",\"total\":12}]', 2, 17, '2023-02-17 04:58:24', '2023-02-17 04:59:59'),
(19, 'VenName5', 'Customer 6Name', '{\"address\":\"street\",\"city\":\"city customer\",\"zip\":\"329732\",\"phone\":\"8732932978\",\"email\":\"customermail@gmail.com\"}', '{\"address\":\"Hudco\",\"city\":\"Pune\",\"zip\":\"431000\",\"phone\":\"999999999\",\"email\":\"vendor@vendor.com\"}', '[{\"id\":1,\"name\":\"Item 1\",\"desc\":\"item one desc price 1rs\",\"price\":1,\"qty\":\"4\",\"total\":4},{\"id\":7,\"name\":\"Novilla Queen Mattress\",\"desc\":\"10 inch Gel Memory Foam Queen Size Mattress for Cool Sleep\",\"price\":400,\"qty\":\"4\",\"total\":1600},{\"id\":9,\"name\":\"Metal Storage Cabinets\",\"desc\":\"LUCYPAL Metal Storage Cabinets with Wheels\",\"price\":2300,\"qty\":\"2\",\"total\":4600},{\"id\":8,\"name\":\"Drawer Chest of Drawers\",\"desc\":\"Signature Design by Ashley Shawburn Modern Farmhouse 5 Drawer Chest of Drawers\",\"price\":1500,\"qty\":\"10\",\"total\":15000}]', 4, 21204, '2023-02-17 05:25:19', '2023-02-17 05:26:03'),
(20, 'VenName6', 'customer name6', '{\"address\":\"custmstree6\",\"city\":\"custcity6\",\"zip\":\"327893\",\"phone\":\"9888888888\",\"email\":\"cust6email@gmail.com\"}', '{\"address\":\"streetvendor6\",\"city\":\"cityvendor6\",\"zip\":\"532732\",\"phone\":\"999999999\",\"email\":\"vendo6r@vendor.com\"}', '[{\"id\":1,\"name\":\"Item 1\",\"desc\":\"item one desc price 1rs\",\"price\":1,\"qty\":\"5\",\"total\":5},{\"id\":7,\"name\":\"Novilla Queen Mattress\",\"desc\":\"10 inch Gel Memory Foam Queen Size Mattress for Cool Sleep\",\"price\":400,\"qty\":\"6\",\"total\":2400},{\"id\":8,\"name\":\"Drawer Chest of Drawers\",\"desc\":\"Signature Design by Ashley Shawburn Modern Farmhouse 5 Drawer Chest of Drawers\",\"price\":1500,\"qty\":\"2\",\"total\":3000},{\"id\":9,\"name\":\"Metal Storage Cabinets\",\"desc\":\"LUCYPAL Metal Storage Cabinets with Wheels\",\"price\":2300,\"qty\":\"2\",\"total\":4600},{\"id\":10,\"name\":\"Convertible Sofa Bed\",\"desc\":\"Sofa Size (Serta Rane ) : 66.1\\\" W x 33.1\\\" D x 29.5\",\"price\":3200,\"qty\":\"3\",\"total\":9600}]', 5, 19605, '2023-02-17 05:33:13', '2023-02-17 05:33:58');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Item 1', 1, 'item one desc price 1rs', NULL, NULL),
(2, 'Item 2', 2, 'item 2 description 2 price 2', NULL, NULL),
(7, 'Novilla Queen Mattress', 400, '10 inch Gel Memory Foam Queen Size Mattress for Cool Sleep', NULL, NULL),
(8, 'Drawer Chest of Drawers', 1500, 'Signature Design by Ashley Shawburn Modern Farmhouse 5 Drawer Chest of Drawers', NULL, NULL),
(9, 'Metal Storage Cabinets', 2300, 'LUCYPAL Metal Storage Cabinets with Wheels', NULL, NULL),
(10, 'Convertible Sofa Bed', 3200, 'Sofa Size (Serta Rane ) : 66.1\" W x 33.1\" D x 29.5', NULL, NULL);

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2023_02_16_130834_create_items_table', 1),
(23, '2023_02_16_163922_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
