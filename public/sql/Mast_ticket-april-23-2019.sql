-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 04:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 1, '2018-12-07', 'A_1,A_2,B_1,B_2', '4', 'false', 'Raghib Shahriyer', '01638414864', 'vcshahriyer@gmail.com', 'admin', NULL, NULL),
(2, 2, '2018-12-07', 'A_1,A_2', '2', 'false', 'Sohag Rana', '01638414865', 'sohag@gmail.com', 'admin', NULL, NULL),
(3, 1, '2018-11-06', 'A_3,B_3', '2', 'false', 'Sohag Rana', '01638414865', 'sohag@gmail.com', 'admin', NULL, NULL),
(4, 2, '2018-11-06', 'A_3', '1', 'false', 'Raghib Shahriyer', '01638414864', 'vcshahriyer@gmail.com', 'admin', NULL, NULL),
(5, 2, '2018-11-06', 'B_4', '1', 'false', 'Raghib Shahriyer', '01638414864', 'vcshahriyer@gmail.com', 'admin', NULL, NULL);

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
  `available` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `company_id`, `bus_model`, `bus_type`, `route_from`, `route_to`, `dept_time`, `arr_time`, `seats`, `fare`, `available`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hino, AK1J Super Plus', 'Non AC', 'Dhaka', 'Chittagong', '17:00:00', '12:00:00', 36, 480, 'true', NULL, NULL),
(2, 2, '21, E CLASS', 'Non AC', 'Dhaka', 'Chittagong', '05:30:00', '11:30:00', 36, 480, 'true', NULL, NULL),
(4, 8, '6, Hyundai Universe', 'AC', 'Dhaka', 'Sherpur', '05:00:00', '12:30:00', 36, 500, 'true', '2018-12-06 11:04:07', '2018-12-06 11:04:07'),
(5, 9, 'Hundai, AK1 Super Plus', 'AC', 'Dhaka', 'Khulna', '10:10:00', '16:10:00', 35, 600, 'true', '2019-04-19 05:10:48', '2019-04-19 05:10:48');

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
(1, 'Hanif Enterprise', 'Mr. Sirajul Islam Hanif', 'Gabtoli bus stand', NULL, NULL),
(2, 'Shyamoli NR Travels', 'Ganesh Chandra Ghosh', 'Mirpur-10, Bus stand', NULL, NULL),
(8, 'Sonar Bangla', 'Raghib', 'Badda', '2018-12-06 05:05:30', '2018-12-06 05:05:30'),
(9, 'Soudia', 'Raghib Shahriyer', 'Sherpur, Dhaka', '2018-12-06 05:08:47', '2018-12-06 05:08:47');

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
(36, '2018_12_05_130123_add_address_to_companies', 6),
(37, '2018_12_06_152003_add_default_value_to_status_table', 7),
(38, '2018_12_06_165410_add_column_available_to_buses_table', 8),
(39, '2018_12_06_165502_remove_column_available_from_status_table', 8);

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
  `from` date DEFAULT '2000-11-04',
  `till` date DEFAULT '2018-11-04',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `bus_id`, `from`, `till`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-11-04', '2018-11-05', NULL, NULL),
(2, 2, '2018-11-04', '2018-11-05', NULL, NULL);

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
(8, 'Sohag', 'img/Users/1544016145image-1465348_960_720.jpg', 'mast', 'raghibb@rana.com', NULL, '$2y$10$4KjN0ELF0wK/n3QcRzplN.ZYTa2vfhQ1Kiqs2u29mxKg4ryjk/iuu', 'gPBtwyuQCMV5gWLyzg5sOksSAlj41rn60YVdfQzhx8hAf0eHcUvfDBybeiYJ', '2018-12-05 07:22:25', '2018-12-05 07:22:25'),
(10, 'Sohag', 'img/Users/1544094330my-profile.jpg', 'Sonar Bangla', 'sohag@gmail.com', NULL, '$2y$10$DjoKhART3ycv8P.pJpDYVuFW8XA6dUjpUKjYb5UP4DV1V5JzTDimC', 'kVRAzCyopHpd3KUQxcXLjcQHGUPjY0VHAiCZ4w39hSV0ImVlMevNd5pz3FKM', '2018-12-06 05:05:30', '2018-12-06 05:05:30'),
(11, 'Raghib', 'img/Users/1544094527admin2.jpg', 'Soudia', 'vcshahriyer@gmail.com', NULL, '$2y$10$nCafI7.AQp/4X7F7zgNcveZGt8gDePbxFgIbY.vR0V54agnebQDii', '41Ou4r9MT9MZ1uuiZws022YxSAAP1HPvMgmVR8SQDDpKgREtVgGOtzBbLBFo', '2018-12-06 05:08:47', '2019-04-19 03:11:57');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
