-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 05:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_auth_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `addblogs_tbl`
--

CREATE TABLE `addblogs_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `blogtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addblog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogdate` date NOT NULL,
  `blogimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addblogs_tbl`
--

INSERT INTO `addblogs_tbl` (`id`, `blogtitle`, `addblog`, `blogdate`, `blogimage`, `created_at`, `updated_at`) VALUES
(1, 'Apple Iphone 11 Pro', 'Apple Iphone is world\'s best smartphone ever.', '2023-03-15', '2099695820.jpg', '2023-03-08 10:23:25', '2023-03-08 10:23:25'),
(2, 'Apple Iphone', 'Apple Iphone is best smartphone ever in the world.', '2023-03-08', '577886282.jpg', '2023-03-08 10:23:53', '2023-03-08 10:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `addgallery_tbl`
--

CREATE TABLE `addgallery_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `galleryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploadimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addgallery_tbl`
--

INSERT INTO `addgallery_tbl` (`id`, `galleryname`, `uploadimage`, `created_at`, `updated_at`) VALUES
(1, 'Apple', '620544987.jpg', NULL, NULL),
(2, 'Range Rover Car', '340277908.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `addproducts_tbl`
--

CREATE TABLE `addproducts_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productcategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_category_tbl`
--

CREATE TABLE `add_category_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_category_tbl`
--

INSERT INTO `add_category_tbl` (`id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', '2023-03-08 10:24:02', '2023-03-08 10:24:02'),
(2, 'Fashion', '2023-03-08 10:24:11', '2023-03-08 10:24:11');

-- --------------------------------------------------------

--
-- Table structure for table `add_products_tbl`
--

CREATE TABLE `add_products_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `subcat_id` int(10) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_oldprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_newprice` double(8,2) NOT NULL,
  `pro_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_products_tbl`
--

INSERT INTO `add_products_tbl` (`id`, `cat_id`, `subcat_id`, `pro_name`, `pro_image`, `pro_details`, `pro_oldprice`, `pro_newprice`, `pro_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Bluestar 1.5 Ton 3 star Inverter AC', '1862743080.jpg', 'Bluestar Air Conditioner', '30000', 25000.00, 1, '2023-03-08 10:25:17', '2023-03-08 10:25:17'),
(2, 2, 2, 'Mens Shirt M-Size', '142167186.jpg', 'Mufti Mens Shirt', '2000', 1500.00, 1, '2023-03-08 10:26:22', '2023-03-08 10:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `add_subcategory_tbl`
--

CREATE TABLE `add_subcategory_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `subcat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_subcategory_tbl`
--

INSERT INTO `add_subcategory_tbl` (`id`, `cat_id`, `subcat_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Air conditioner', '2023-03-08 10:24:21', '2023-03-08 10:24:21'),
(2, 2, 'Menswear', '2023-03-08 10:24:32', '2023-03-08 10:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `contactus_tbl`
--

CREATE TABLE `contactus_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` bigint(20) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus_tbl`
--

INSERT INTO `contactus_tbl` (`id`, `fname`, `lname`, `number`, `city`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kishan', 'Patel', 9090909090, 'Rajkot', 'kishankanani59@gmail.com', 'I want to create E-commerce website for mens clothing. Please Quote us Best Offer so we can make a deal.', '2023-03-08 10:21:55', '2023-03-08 10:21:55'),
(2, 'Kishan', 'Kanani', 9624194952, 'Rajkot,Gujarat', 'kishankanani59@gmail.com', 'I want to make a website.', '2023-03-08 10:35:00', '2023-03-08 10:35:00');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_19_164308_create_addgallery_tbl', 1),
(6, '2023_02_20_113546_create_addblogs_tbl', 1),
(7, '2023_02_21_092427_create_addproducts_tbl', 1),
(8, '2023_02_28_092344_create_add_category_tbl', 1),
(9, '2023_02_28_092551_create_add_subcategory_tbl', 1),
(10, '2023_02_28_092613_create_add_products_tbl', 1),
(11, '2023_02_28_092632_create_view_cart_tbl', 1),
(12, '2023_03_07_091929_create_contactus_tbl', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'kishan', 'kpkishanpatel990@gmail.com', NULL, '$2y$10$5KbfaSK1BnVyzn7GKZ6XreP4J.1dkcTpIE/cEEz4Rjo5Wzsux1NjC', NULL, '2023-03-08 07:58:52', '2023-03-08 07:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `view_cart_tbl`
--

CREATE TABLE `view_cart_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `pro_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `sub_total` double(8,2) NOT NULL,
  `grand_total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addblogs_tbl`
--
ALTER TABLE `addblogs_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addgallery_tbl`
--
ALTER TABLE `addgallery_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addproducts_tbl`
--
ALTER TABLE `addproducts_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_category_tbl`
--
ALTER TABLE `add_category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_products_tbl`
--
ALTER TABLE `add_products_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_products_tbl_cat_id_foreign` (`cat_id`),
  ADD KEY `add_products_tbl_subcat_id_foreign` (`subcat_id`);

--
-- Indexes for table `add_subcategory_tbl`
--
ALTER TABLE `add_subcategory_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_subcategory_tbl_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `contactus_tbl`
--
ALTER TABLE `contactus_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `view_cart_tbl`
--
ALTER TABLE `view_cart_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `view_cart_tbl_user_id_foreign` (`user_id`),
  ADD KEY `view_cart_tbl_pro_id_foreign` (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addblogs_tbl`
--
ALTER TABLE `addblogs_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addgallery_tbl`
--
ALTER TABLE `addgallery_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addproducts_tbl`
--
ALTER TABLE `addproducts_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_category_tbl`
--
ALTER TABLE `add_category_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_products_tbl`
--
ALTER TABLE `add_products_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_subcategory_tbl`
--
ALTER TABLE `add_subcategory_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus_tbl`
--
ALTER TABLE `contactus_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `view_cart_tbl`
--
ALTER TABLE `view_cart_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_products_tbl`
--
ALTER TABLE `add_products_tbl`
  ADD CONSTRAINT `add_products_tbl_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `add_category_tbl` (`id`),
  ADD CONSTRAINT `add_products_tbl_subcat_id_foreign` FOREIGN KEY (`subcat_id`) REFERENCES `add_subcategory_tbl` (`id`);

--
-- Constraints for table `add_subcategory_tbl`
--
ALTER TABLE `add_subcategory_tbl`
  ADD CONSTRAINT `add_subcategory_tbl_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `add_category_tbl` (`id`);

--
-- Constraints for table `view_cart_tbl`
--
ALTER TABLE `view_cart_tbl`
  ADD CONSTRAINT `view_cart_tbl_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `add_products_tbl` (`id`),
  ADD CONSTRAINT `view_cart_tbl_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
