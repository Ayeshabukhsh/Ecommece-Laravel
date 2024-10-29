-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 06:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productid` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `customerid` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `productid`, `quantity`, `customerid`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, '2024-08-15 13:22:00', '2024-08-15 13:22:00'),
(5, 1, 1, 1, '2024-08-16 15:42:45', '2024-08-16 15:42:45'),
(7, 2, 1, 1, '2024-08-16 15:45:35', '2024-08-16 15:45:35'),
(13, 5, 1, 1, '2024-08-22 23:07:40', '2024-08-22 23:07:40'),
(14, 4, 1, 1, '2024-08-24 14:38:15', '2024-08-24 14:38:15'),
(16, 1, 1, 1, '2024-08-24 16:56:01', '2024-08-24 16:56:01'),
(17, 8, 1, 2, '2024-08-24 21:48:20', '2024-08-24 21:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Hand Bag', '1723702252.jpg', 'Hand Bag', '2024-08-15 13:10:52', '2024-08-15 13:10:52'),
(2, 'Ring', '1723797148.jpg', 'Finger Ring', '2024-08-16 15:32:28', '2024-08-16 15:32:28'),
(3, 'Cusmetic Category', '1723797250.jpg', 'Cusmetic  libGloss  Category', '2024-08-16 15:34:10', '2024-08-16 15:34:44'),
(4, 'Man Walllets', '1723798964.jpg', 'Man Wallets', '2024-08-16 16:02:44', '2024-08-16 16:02:44'),
(5, 'Man Watch', '1724131880.jpg', 'Man Watches', '2024-08-20 12:31:20', '2024-08-20 12:31:20'),
(6, 'TeDdy Bear', '1724132367.jpg', 'Blue TedDy Bear', '2024-08-20 12:39:27', '2024-08-20 12:39:27'),
(7, 'Grils Watches', '1724341903.jpg', 'Girls Wacthe', '2024-08-22 22:51:43', '2024-08-22 22:51:43'),
(8, 'Paint Brush', '1724342098.jpg', 'Painting Brush', '2024-08-22 22:54:58', '2024-08-22 22:54:58'),
(9, 'Gift Card', '1724348241.jpg', 'Gift Card', '2024-08-23 00:37:21', '2024-08-23 00:37:21'),
(10, 'Hand Bag', '1724348419.jpg', 'Hand bags', '2024-08-23 00:40:19', '2024-08-23 00:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `customer_addresses`
--

CREATE TABLE `customer_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `zip` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `fproduct` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `image`, `city`, `fproduct`, `gender`, `experience`, `created_at`, `updated_at`, `Message`) VALUES
(1, 'AYESHA KHAN', 'ayeshakhan@gmail.com', '1723702797.jpeg', 'Karachi', 'Golden RinGs and Hand BagS', 'Female', 'EXELLENT', '2024-08-15 13:19:57', '2024-08-15 13:19:57', 'Elegant Gift Shope'),
(2, 'NIMRA KHAN', 'nimra@gmail.com', '1723798100.jpeg', 'korangi Karachi', 'CosMetic Product', 'Female', 'GOOD', '2024-08-16 15:48:20', '2024-08-16 15:48:20', 'Cusmetic Poduct Is Elegant');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `email`, `location`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'ayeshakhan@gmail.com', 'karachi', '03283295899', '2024-08-15 13:16:45', '2024-08-15 13:17:14'),
(2, 'nimra@gmail.com', 'Korangi Karachi', '03492307483', '2024-08-16 15:41:03', '2024-08-16 15:41:03'),
(3, 'urooj@gmail.com', 'Lahore', '03348578468', '2024-08-22 23:02:04', '2024-08-22 23:02:04');

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
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(22, '2023_11_11_030631_create_categories_table', 1),
(23, '2023_11_11_095036_create_products_table', 1),
(24, '2023_11_14_045631_create_teams_table', 1),
(25, '2023_11_22_093813_create_feedback_table', 1),
(26, '2023_11_22_134524_update_feedback_table', 1),
(27, '2023_11_27_044421_create_offers_table', 1),
(28, '2023_11_27_092405_create_infos_table', 1),
(29, '2023_11_29_101633_create_sellers_table', 1),
(30, '2023_12_05_190208_update_products_table', 1),
(31, '2023_12_10_101003_create_customer_addresses_table', 1),
(32, '2023_12_11_033429_create_carts_table', 1),
(33, '2023_12_11_090509_create_orderitems_table', 1),
(34, '2023_12_11_090633_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer`, `created_at`, `updated_at`) VALUES
(2, 'Cusmetic Product', '2024-08-20 12:41:57', '2024-08-20 12:41:57'),
(3, 'Girls Watches', '2024-08-22 23:01:11', '2024-08-22 23:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productid` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` double(8,2) NOT NULL DEFAULT 0.00,
  `orderid` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `productid`, `quantity`, `price`, `orderid`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 458.00, 2, '2024-08-20 12:35:23', '2024-08-20 12:35:23'),
(2, 4, 1, 5600.00, 2, '2024-08-20 12:35:23', '2024-08-20 12:35:23'),
(3, 4, 1, 5600.00, 3, '2024-08-21 16:13:30', '2024-08-21 16:13:30'),
(4, 8, 1, 6000.00, 9, '2024-08-24 14:42:43', '2024-08-24 14:42:43'),
(5, 9, 1, 5600.00, 9, '2024-08-24 14:42:43', '2024-08-24 14:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerid` int(11) NOT NULL,
  `bill` double(8,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customerid`, `bill`, `status`, `firstname`, `lastname`, `email`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 2, 458.00, 'paid', 'Ayesha', 'Khan', 'ayeshakhan@gmail.com', 'Karachi', '02383927326', '2024-08-20 12:24:35', '2024-08-20 12:24:35'),
(2, 2, 6058.00, 'paid', 'Nimra', 'Khan', 'nimra@gmial.com', 'korangi karachi', '0237238497', '2024-08-20 12:35:23', '2024-08-20 12:35:23'),
(3, 2, 5600.00, 'paid', 'Urooj', 'Khan', 'urooj@gmail.com', 'Korangi', '037489234', '2024-08-21 16:13:29', '2024-08-21 16:13:29'),
(9, 2, 11600.00, 'paid', 'Ayesha', 'khan', 'ayeshakhan@gmail.com', 'Islamabad', '09784989', '2024-08-24 14:42:43', '2024-08-24 14:42:43');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sdescription` varchar(255) NOT NULL,
  `ldescription` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `barcode`, `image`, `category_id`, `sdescription`, `ldescription`, `status`, `created_at`, `updated_at`, `qty`) VALUES
(1, 'Girls Hand Bag', 458, '6015493053', '1723798589.jpg', 1, 'Hand Bag', 'BagHand  BagHand BagHand BagHand BagHand Bag', '0', '2024-08-15 13:11:32', '2024-08-16 16:04:36', 1),
(2, 'Cusmetic Product', 4500, '3684932141', '1723797464.jpg', 3, 'Cusmetic Product', 'ProductCusmetic ProductCusmetic ProductCusmetic', '0', '2024-08-16 15:37:44', '2024-08-16 16:04:48', 1),
(3, 'Man Walllets', 250, '1802712786', '1723799023.jpg', 4, 'Man Wallets', 'WalletsMan WalletsMan WalletsMan Wallets Man Wallets', '0', '2024-08-16 16:03:43', '2024-08-16 16:05:29', 1),
(5, 'TeDdy Bear3', 3400, '5095175182', '1724132436.jpg', 6, 'TedDy Bear', 'TedDy BearTedDy BearTedDy BearTedDy BearTedDy BearTedDy Bear', '0', '2024-08-20 12:40:36', '2024-08-20 12:40:36', 1),
(6, 'Girls Watches', 5600, '1691302519', '1724342000.jpg', 7, 'Girls  Watches', 'Girls  WatchesGirls  WatchesGirls  WatchesGirls  WatchesGirls  WatchesGirls  Watches', '0', '2024-08-22 22:53:20', '2024-08-22 22:53:20', 1),
(7, 'Paint Brush', 4900, '9226591030', '1724342183.jpg', 8, 'Painting Brush', 'Painting BrushPainting BrushPainting BrushPainting BrushPainting Brush', '0', '2024-08-22 22:56:23', '2024-08-22 22:56:23', 1),
(8, 'Gift Card', 6000, '8035811074', '1724348300.jpg', 9, 'Gift Card', 'Gift CardGift CardGift CardGift CardGift CardGift CardGift CardGift Card', '0', '2024-08-23 00:38:20', '2024-08-23 00:38:20', 1),
(9, 'Hand Bags', 5600, '3318256661', '1724348477.jpg', 10, 'Hand Bag', 'Hand BagHand BagHand BagHand BagHand BagHand Bag', '0', '2024-08-23 00:41:17', '2024-08-23 00:41:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'AYESHA KHAN', '1724342282.jpeg', 'AYESHA KHAN', '2024-08-15 13:13:22', '2024-08-22 22:58:02'),
(2, 'NIMRA KHAN', '1724342366.jpg', 'NIMRA KHAN', '2024-08-16 15:40:17', '2024-08-22 22:59:26'),
(3, 'WANIYA KHAN', '1724342260.jpeg', 'Waniya Khan', '2024-08-20 12:41:32', '2024-08-22 22:57:40'),
(4, 'Urooj Khan', '1724342439.jpg', 'UROoOJ KHAN', '2024-08-22 23:00:39', '2024-08-22 23:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `usertype`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AYESHA', 'ayeshakhan@gmail.com', NULL, 'admin', '$2y$10$PRn0Rc.Z/UA13vw7L77jjuAcJ.Nl/OR/NVLMWtlZjDYGS4hry0DHO', NULL, '2024-08-15 13:09:51', '2024-08-17 00:54:48'),
(2, 'User', 'user@gmail.com', NULL, 'user', '$2y$10$OLW13U8LqwBBJuVHAbIOMu4SUS6v.FOOEKNaC.ZVGYMbVWuPk4lBi', NULL, '2024-08-15 13:24:35', '2024-08-15 13:24:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feedback_email_unique` (`email`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `infos_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_addresses`
--
ALTER TABLE `customer_addresses`
  ADD CONSTRAINT `customer_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
