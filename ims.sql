-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2019 at 04:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `customer_email`, `customer_address`, `customer_pass`, `created_at`, `updated_at`) VALUES
(1, 'Customer-1', 'customer1@gmail.com', 'Kalkata', '1234', '2019-04-11 18:20:34', '2019-04-11 18:20:34'),
(2, 'Customer-2', 'customer2@gmail.com', 'Dellhi', '1234', '2019-04-11 18:24:15', '2019-04-11 18:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `daily_sells`
--

CREATE TABLE `daily_sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sells_point_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` double NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_paid` double NOT NULL,
  `amount_left` double NOT NULL,
  `total_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_sells`
--

INSERT INTO `daily_sells` (`id`, `sells_point_name`, `product_name`, `quantity`, `rate`, `customer_name`, `amount_paid`, `amount_left`, `total_amount`, `created_at`, `updated_at`) VALUES
(2, 'Kalkata', 'Product-2', 100, 10, 'Customer-1', 500, 500, 1000, '2019-04-08 18:25:17', NULL),
(3, 'Mumbai', 'Product-2', 20, 600, 'xyz', 200, 1000, 12000, '2019-04-11 14:41:11', NULL),
(4, 'Pune', 'Product-3', 1000, 10, 'abc', 10000, 0, 10000, '2019-04-11 14:43:23', NULL),
(5, 'Dellhi', 'Product-1', 200, 10, 'Customer-2', 1000, 1000, 2000, '2019-04-11 17:27:12', NULL),
(6, 'Kolkata', 'Product-1', 100, 10, 'Customer-1', 1000, 0, 1000, '2019-04-12 02:43:54', NULL),
(7, 'Pune', 'Product-1', 100, 10, 'Customer-2', 900, 100, 1000, '2019-04-12 03:37:42', NULL),
(8, 'Bangalore', 'Product-4', 1000, 10, 'Customer-2', 1000, 9000, 10000, '2019-04-12 04:28:15', NULL),
(9, 'Dellhi', 'Product-4', 100, 100, 'Customer-2', 9000, 1000, 10000, '2019-04-13 13:23:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `factory`
--

CREATE TABLE `factory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `factory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `factory_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory`
--

INSERT INTO `factory` (`id`, `factory_name`, `factory_address`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Factory-1', 'Dhaka, BD', '01755555555', '2019-04-13 05:26:46', '2019-04-13 05:26:46'),
(2, 'Factory-12', 'Comilla, BD', '01819484848', '2019-04-13 14:05:29', '2019-04-13 14:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `factory_raw_materials`
--

CREATE TABLE `factory_raw_materials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `factory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assign_date` date NOT NULL,
  `materials_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total_cost` double NOT NULL,
  `production_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `factory_raw_materials`
--

INSERT INTO `factory_raw_materials` (`id`, `factory_name`, `assign_date`, `materials_name`, `quantity`, `price`, `total_cost`, `production_type`, `created_at`, `updated_at`) VALUES
(1, 'Factory-1', '2019-04-13', 'm-1', 1000, 10, 10000, 'type-1', '2019-04-13 06:15:59', '2019-04-13 06:15:59'),
(2, 'Factory-12', '2019-04-13', 'm-1', 70, 15, 1050, 'type-2', '2019-04-13 14:26:57', '2019-04-13 14:26:57');

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
(1, '2019_04_07_145007_create_users_table', 1),
(2, '2019_04_08_173523_create_daily_sells_table', 2),
(3, '2019_04_11_173738_create_transferred_into_b_d_table', 3),
(4, '2019_04_11_181135_create_customers_table', 4),
(6, '2019_04_12_015953_create_products_table', 5),
(7, '2019_04_13_045913_create_factory_table', 6),
(8, '2019_04_13_053831_create_factory_raw_materials_table', 7),
(10, '2019_04_13_065929_create_shipement_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `available_product` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `quantity`, `available_product`, `created_at`, `updated_at`) VALUES
(1, 'Product-1', 1100, 1000, NULL, NULL),
(2, 'Product-2', 1000, 1000, NULL, NULL),
(3, 'Product-3', 1000, 1000, NULL, NULL),
(5, 'Product-4', 12000, 10900, '2019-04-12 03:48:35', '2019-04-12 03:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `send_date` date NOT NULL,
  `receive_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `product_name`, `quantity`, `send_date`, `receive_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Product-4', 1000, '2019-04-13', '2019-04-13', 1, NULL, NULL),
(2, 'Product-1', 10000, '2019-04-13', '2019-04-13', 1, NULL, NULL),
(3, 'Product-2', 10000, '2019-04-13', '2019-04-13', 0, NULL, NULL),
(4, 'Product-3', 10000, '2019-04-13', '2019-04-13', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transferredintobd`
--

CREATE TABLE `transferredintobd` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receiver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `transfer_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transferredintobd`
--

INSERT INTO `transferredintobd` (`id`, `receiver_name`, `amount`, `transfer_date`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1234, '2019-04-11', '2019-04-10 18:00:00', NULL),
(2, 'admin', 121212, '2019-04-13', '2019-04-13 14:28:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pass`, `location`, `type`, `created_at`, `updated_at`) VALUES
(1, 'seller', '1234', 'India', 'Admin', '2019-04-07 14:56:19', '2019-04-07 14:56:19'),
(2, 'admin', '1234', 'Bangladesh', 'Admin', '2019-04-08 17:29:09', '2019-04-08 17:29:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_sells`
--
ALTER TABLE `daily_sells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory`
--
ALTER TABLE `factory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `factory_raw_materials`
--
ALTER TABLE `factory_raw_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transferredintobd`
--
ALTER TABLE `transferredintobd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `daily_sells`
--
ALTER TABLE `daily_sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `factory`
--
ALTER TABLE `factory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `factory_raw_materials`
--
ALTER TABLE `factory_raw_materials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transferredintobd`
--
ALTER TABLE `transferredintobd`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
