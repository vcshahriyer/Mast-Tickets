-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 02:56 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mast_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `dept_date` date NOT NULL,
  `my_seats` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booked_seats` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cs_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cs_mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cs_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cs_pass` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `bus_id`, `dept_date`, `my_seats`, `booked_seats`, `pay_status`, `cs_name`, `cs_mobile`, `cs_email`, `cs_pass`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-12-07', 'A_1,A_2,B_1,B_2', '3', 'false', 'Raghib Shahriyer', '01638414864', 'vcshahriyer@gmail.com', 'admin', NULL, NULL),
(2, 2, '2018-11-07', 'A1,A2', '2', 'false', 'Sohag Rana', '01638414865', 'sohag@gmail.com', 'admin', NULL, NULL),
(3, 1, '2018-11-06', 'A3,B3', '2', 'false', 'Sohag Rana', '01638414865', 'sohag@gmail.com', 'admin', NULL, NULL),
(4, 2, '2018-11-06', 'A3', '1', 'false', 'Raghib Shahriyer', '01638414864', 'vcshahriyer@gmail.com', 'admin', NULL, NULL),
(5, 2, '2018-11-06', 'B4', '1', 'false', 'Raghib Shahriyer', '01638414864', 'vcshahriyer@gmail.com', 'admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `bus_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_from` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_time` time NOT NULL,
  `arr_time` time NOT NULL,
  `seats` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `company_id`, `bus_model`, `bus_type`, `route_from`, `route_to`, `dept_time`, `arr_time`, `seats`, `fare`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hino, AK1J Super Plus', 'Non AC', 'Dhaka', 'Chittagong', '17:00:00', '12:00:00', 36, 480, NULL, NULL),
(2, 2, '21, E CLASS', 'Non AC', 'Dhaka', 'Chittagong', '05:30:00', '11:30:00', 36, 480, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `owner`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Hanif Enterprise', 'Mr. Sirajul Islam Hanif', '', NULL, NULL),
(2, 'Shyamoli NR Travels', 'Ganesh Chandra Ghosh', '', NULL, NULL),
(3, 'Orchid', 'Rana', '', '2018-12-03 14:09:42', '2018-12-03 14:09:42'),
(4, 'Orchid', 'Rana', '', '2018-12-03 14:15:48', '2018-12-03 14:15:48'),
(5, 'mast', 'Raghib shahriyer', '', '2018-12-05 03:11:55', '2018-12-05 03:11:55'),
(6, 'mast', 'Raghib shahriyer', 'badda', '2018-12-05 07:22:25', '2018-12-05 07:22:25');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2018_11_03_074246_create_companies_table', 1),
(28, '2018_11_03_074338_create_buses_table', 1),
(29, '2018_11_03_074429_create_statuses_table', 1),
(30, '2018_11_03_074444_create_bookings_table', 1),
(31, '2018_12_02_112616_create_compamies_table', 2),
(32, '2018_12_02_120313_add_address_to_companies', 3),
(33, '2018_12_02_121434_add_address_to_companies', 4),
(34, '2018_12_02_122000_add_company_to_users', 5),
(35, '2018_12_05_125926_add_company_image_to_users', 6),
(36, '2018_12_05_130123_add_address_to_companies', 6);

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
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `available` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from` date DEFAULT NULL,
  `till` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `bus_id`, `available`, `from`, `till`, `created_at`, `updated_at`) VALUES
(1, 1, 'true', NULL, NULL, NULL, NULL),
(2, 2, 'false', '2018-11-04', '2018-11-05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `company`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Orchid Sohag', '', '', 'Orchid@rana.com', NULL, '$2y$10$Whd8YrrCPnRIKJwikdNpQ.oyYhW1GaujG4SJahQZW2k9E29kN6DDK', 'eLRDDAxod021BWNwHTtdtnQZglU1W9fmkV6swDgKvXxPfLrLFApNAtxSvQ4x', '2018-12-03 13:43:11', '2018-12-03 13:43:11'),
(4, 'Sohag', '', '', 'Shg@ranaa.com', NULL, '$2y$10$Mqfx51hOEDeUpsKm.NP3l.H9JIgts6/xJgVu1hQg0ynqWGXieEDK2', NULL, '2018-12-03 14:06:19', '2018-12-03 14:06:19'),
(5, 'Sohag', '', '', 'Shgg@rana.com', NULL, '$2y$10$INpoFkAbIXgh30Yp.DdR6.f/8eXvRMYjbsMbjtY1frclKv0M7DuCO', '5fHr9Kq29MWB7IifumT7egqL8xB0JqwGQDRoXJjDlBVViEnJ1CfqG3J9cy1k', '2018-12-03 14:09:42', '2018-12-03 14:09:42'),
(6, 'Sohag', '', '', 'Shhg@rana.com', NULL, '$2y$10$D9ITn1/p12zd8uSnkCdhrOr9TgP3SkOKOqQOyymX9CKJIZCwYn1se', 'HzKCX3AIyCYs4arv4K6t2b2efYkbgFLn6LZMpCgLnf9wSskHdEzg4HCaCkOp', '2018-12-03 14:15:48', '2018-12-03 14:15:48'),
(7, 'Raghib', '', '', 'raghib@rana.com', NULL, '$2y$10$zdc.j4uO1braf7IkY2Uw8OncNGuiWj57sTXba/MVNLeh6J//MUgGC', 'sioR6k8DEGrI0IyVRmqRwMTwoWLZECDCP7SxuWHzi9BcK2v8dJohqLiRF6IS', '2018-12-05 03:11:55', '2018-12-05 03:11:55'),
(8, 'Sohag', 'img/Users/1544016145image-1465348_960_720.jpg', 'mast', 'raghibb@rana.com', NULL, '$2y$10$4KjN0ELF0wK/n3QcRzplN.ZYTa2vfhQ1Kiqs2u29mxKg4ryjk/iuu', 'gPBtwyuQCMV5gWLyzg5sOksSAlj41rn60YVdfQzhx8hAf0eHcUvfDBybeiYJ', '2018-12-05 07:22:25', '2018-12-05 07:22:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_bus_id_foreign` (`bus_id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buses_company_id_foreign` (`company_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
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
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statuses_bus_id_foreign` (`bus_id`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`);

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `statuses`
--
ALTER TABLE `statuses`
  ADD CONSTRAINT `statuses_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
