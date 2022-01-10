-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 11:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sxcommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2021-12-07 22:55:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'I2mmL4Xsbz', NULL, NULL, '2021-12-07 22:55:08', '2021-12-07 22:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'Funko Home', 'funko-home', 'upload/brand/1718556465928843.png', NULL, NULL),
(2, 'Nendoroid', 'nendoroid', 'upload/brand/1718556524481719.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_icon`, `created_at`, `updated_at`) VALUES
(1, 'Cartoon', 'cartoon', 'fab fa-angellist', NULL, NULL),
(2, 'Anime', 'anime', 'fas fa-grin-alt', NULL, NULL),
(3, 'Movie', 'movie', 'fas fa-film', NULL, NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_02_02_212221_create_admins_table', 1),
(7, '2021_10_04_011541_create_sessions_table', 1),
(8, '2021_10_08_145949_create_brands_table', 1),
(9, '2021_10_14_160454_create_categories_table', 1),
(10, '2021_10_15_162458_create_sub_categories_table', 1),
(11, '2021_10_21_095838_create_products_table', 1),
(12, '2021_10_21_100708_create_multi_imgs_table', 1),
(13, '2021_12_02_111518_create_sliders_table', 1),
(14, '2021_12_09_072711_create_carts_table', 1),
(15, '2021_12_11_125729_create_transactions_table', 1),
(16, '2021_12_11_141457_create_wishlists_table', 1),
(17, '2021_12_21_074117_product_softdelete', 1);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `product_id`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'upload/product/multi_image/1718557040357983.png', '2021-12-07 23:08:30', NULL),
(2, 2, 'upload/product/multi_image/1718557180526593.png', '2021-12-07 23:10:44', NULL),
(3, 2, 'upload/product/multi_image/1718557180746636.jpg', '2021-12-07 23:10:44', NULL),
(4, 3, 'upload/product/multi_image/1718557326212173.png', '2021-12-07 23:13:03', NULL),
(5, 3, 'upload/product/multi_image/1718557326433478.jpg', '2021-12-07 23:13:03', NULL),
(6, 4, 'upload/product/multi_image/1718557561949065.png', '2021-12-07 23:16:48', NULL),
(7, 5, 'upload/product/multi_image/1718557723072432.png', '2021-12-07 23:19:22', NULL),
(13, 7, 'upload/product/multi_image/1718558132933319.webp', '2021-12-07 23:25:53', NULL),
(14, 7, 'upload/product/multi_image/1718558133555864.jpg', '2021-12-07 23:25:53', NULL),
(15, 7, 'upload/product/multi_image/1718558133735954.jpg', '2021-12-07 23:25:53', NULL),
(16, 7, 'upload/product/multi_image/1718558133915533.jpg', '2021-12-07 23:25:53', NULL),
(17, 7, 'upload/product/multi_image/1718558134095028.jpg', '2021-12-07 23:25:53', NULL),
(18, 8, 'upload/product/multi_image/1718558236253392.jpg', '2021-12-07 23:27:31', NULL),
(19, 8, 'upload/product/multi_image/1718558236702516.webp', '2021-12-07 23:27:31', NULL),
(20, 8, 'upload/product/multi_image/1718558236969855.jpg', '2021-12-07 23:27:32', NULL),
(37, 6, 'upload/product/multi_image/1718561299370226.jpg', '2021-12-08 00:16:12', NULL),
(38, 6, 'upload/product/multi_image/1718561299555958.jpg', '2021-12-08 00:16:12', NULL),
(39, 6, 'upload/product/multi_image/1718561299744420.jpg', '2021-12-08 00:16:12', NULL),
(40, 6, 'upload/product/multi_image/1718561299933442.jpg', '2021-12-08 00:16:13', NULL),
(41, 6, 'upload/product/multi_image/1718561300148935.jpg', '2021-12-08 00:16:13', NULL),
(42, 9, 'upload/product/multi_image/1721560397806458.PNG', '2022-01-10 02:45:35', NULL),
(43, 10, 'upload/product/multi_image/1721561520651734.PNG', '2022-01-10 03:03:26', NULL),
(44, 11, 'upload/product/multi_image/1721561701221458.jpg', '2022-01-10 03:06:18', NULL),
(45, 12, 'upload/product/multi_image/1721561839540372.PNG', '2022-01-10 03:08:30', NULL),
(46, 13, 'upload/product/multi_image/1721562069596767.PNG', '2022-01-10 03:12:10', NULL),
(47, 14, 'upload/product/multi_image/1721562198224481.PNG', '2022-01-10 03:14:12', NULL),
(48, 15, 'upload/product/multi_image/1721563340198336.PNG', '2022-01-10 03:32:21', NULL),
(49, 16, 'upload/product/multi_image/1721563458528521.PNG', '2022-01-10 03:34:14', NULL),
(50, 17, 'upload/product/multi_image/1721564657618295.PNG', '2022-01-10 03:53:18', NULL),
(51, 18, 'upload/product/multi_image/1721564771729677.PNG', '2022-01-10 03:55:07', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT NULL,
  `special_offer` int(11) DEFAULT NULL,
  `special_deals` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `product_name`, `product_slug`, `product_code`, `product_qty`, `product_tags`, `selling_price`, `discount`, `short_description`, `long_description`, `product_thumbnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 2, 'Thanos Gingerbread - Marvel', 'thanos-gingerbread---marvel', 'MV-029', 30, 'Lorem,Ipsum,Amet', '15', NULL, '<p>Lorem ipsum dolor sit amet,&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557039863010.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:08:30', NULL, NULL),
(2, 1, 1, 2, 'AANG - AVATAR: THE LAST AIRBENDER', 'aang---avatar:-the-last-airbender', 'AAA-2000', 100, 'Lorem,Ipsum,Amet', '15', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna.&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557179996195.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:10:44', NULL, NULL),
(3, 1, 2, 1, 'DODORIA - DRAGON BALL Z', 'dodoria---dragon-ball-z', 'DD-9090', 20, 'Lorem,Ipsum,Amet', '15', '20', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557325965756.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:13:03', NULL, NULL),
(4, 1, 3, 3, 'RED MILLER - MANDY', 'red-miller---mandy', 'RD78', 20, 'Lorem,Ipsum,Amet', '12', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557561680822.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:16:48', NULL, NULL),
(5, 1, 3, 3, 'DOC WITH HELMET - BACK TO THE FUTURE', 'doc-with-helmet---back-to-the-future', 'DOC78', 60, 'Lorem,Ipsum,Amet', '12', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557722867748.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:19:21', NULL, NULL),
(6, 2, 2, 1, 'Nendoroid Itachi Uchiha: Anbu Black Ops Ver', 'nendoroid-itachi-uchiha:-anbu-black-ops-ver', 'NAR090', 10, 'Lorem,Ipsum,Amet', '57', NULL, '<p>Lorem ipsum dolor sit amet,</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718558009993712.jpg', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:23:55', NULL, NULL),
(7, 2, 2, 1, 'Roxy Migurdia', 'roxy-migurdia', 'ROX8711', 20, 'Lorem,Ipsum,Amet', '200', NULL, '<p>Lorem ipsum dolor sit amet,</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718558132749998.jpg', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:25:52', NULL, NULL),
(8, 2, 2, 1, 'Nendoroid Doll Nezuko Kamado', 'nendoroid-doll-nezuko-kamado', 'DS1667', 10, 'Lorem,Ipsum,Amet', '73', NULL, '<p>Lorem ipsum dolor sit amet,</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718558236023591.jpg', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:27:31', NULL, NULL),
(9, 1, 3, 3, 'Spider-Man (Integrated Suit)', 'spider-man-(integrated-suit)', '913', 5, 'Marvel', '200', '0', '<h1>Funko Pop! Marvel: Spider-Man: No Way Home - Spider-Man in Integrated Suit</h1>', '<h1>Funko Pop! Marvel: Spider-Man: No Way Home - Spider-Man in Integrated Suit</h1>', 'upload/product/thumbnail/1721560397435191.PNG', NULL, 1, NULL, NULL, 1, '2022-01-10 02:45:35', NULL, NULL),
(10, 1, 3, 3, 'Spider-Man in Black and Gold Suit', 'spider-man-in-black-and-gold-suit', '911', 27, 'Marvel', '33', '0', '<h1>Funko POP! Spider-Man No Way Home - Spiderman Black and Gold Suit</h1>', '<ul>\r\n	<li>Product Type :Toys And Games</li>\r\n	<li>Package Dimensions :3.5&quot; L X4.5&quot; W X6.25&quot; H</li>\r\n	<li>Country Of Origin :Viet Nam</li>\r\n	<li>Package Weight :0.25Lbs</li>\r\n</ul>', 'upload/product/thumbnail/1721561520204322.PNG', NULL, 1, NULL, NULL, 1, '2022-01-10 03:03:26', NULL, NULL),
(11, 1, 3, 3, 'Funko POP! Marvel - Blacklight - Ant-Man Black Light Neon Exc', 'funko-pop!-marvel---blacklight---ant-man-black-light-neon-exc', '910', 9, 'Marvel', '26.25', '10', '<h1>POP Funko Marvel Ant-Man Black Light Target Exclusive</h1>', '<ul>\r\n	<li>Pop Marvel Avengers 3.75 Inch Action Figure Exclusive - Ant-Man Black Light #910</li>\r\n	<li>Pop</li>\r\n	<li>Funko</li>\r\n	<li>3.75 Inch</li>\r\n</ul>', 'upload/product/thumbnail/1721561701016552.jpg', NULL, NULL, 1, NULL, 1, '2022-01-10 03:06:18', NULL, NULL),
(12, 1, 3, 3, 'Funko Pop! Marvel: Venom 2 Let There Be Carnage - Venom', 'funko-pop!-marvel:-venom-2-let-there-be-carnage---venom', '888', 11, 'Marvel', '29.99', '0', '<h1>Funko Pop! Marvel: Venom 2 Let There Be Carnage - Venom</h1>', '<ul>\r\n	<li>Package weight : 0.25 Lbs</li>\r\n	<li>Figure stands 3 3/4 inches and comes in a window display box.</li>\r\n	<li>Be sure to collect all Venom figures from Funko!</li>\r\n	<li>Country of origin : Viet Nam</li>\r\n</ul>', 'upload/product/thumbnail/1721561839248571.PNG', NULL, 1, NULL, NULL, 1, '2022-01-10 03:08:30', NULL, NULL),
(13, 1, 3, 3, 'Zombie Hunter Spidey', 'zombie-hunter-spidey', '945', 11, 'Marvel', '26.25', '10', '<h1>Funko Pop! Marvel: What If? Zombie Hunter Spidey</h1>', '<ul>\r\n	<li>In the endless possibilities, venture to wonder and explore with Marvel&#39;s What If&hellip;? animated series.</li>\r\n	<li>Collect Pop! Zombie Hunter Spidey to complete your What If&hellip;? set.</li>\r\n	<li>Vinyl bobblehead is approximately 3.75-inches tall.</li>\r\n</ul>', 'upload/product/thumbnail/1721562069158450.PNG', 1, NULL, 1, NULL, 1, '2022-01-10 03:12:09', NULL, NULL),
(14, 1, 3, 3, 'Poison Spider-Man', 'poison-spider-man', '966', 3, 'Marvel', '39.99', '0', '<h1>Funko Pop! Marvel Venom Poison Spider-Man Entertainment Earth Exclusive Figure #966</h1>', '<h1>Funko Pop! Marvel Venom Poison Spider-Man Entertainment Earth Exclusive Figure #966</h1>', 'upload/product/thumbnail/1721562197863204.PNG', 1, NULL, NULL, NULL, 1, '2022-01-10 03:14:12', NULL, NULL),
(15, 1, 3, 3, 'Squirrelpool 10', 'squirrelpool-10', '967', 4, 'Marvel', '80.00', '10', '<p>Marvel - Deadpool Squirrelpool 30th Anniversary 10&quot; Flocked Pop! Vinyl Figure</p>', '<p>Three decades ago, Deadpool first appeared in the legendary NEW MUTANTS #98 by Rob Liefeld and Fabian Nicieza, and the comic book world has never been the same! Three decades later and the success of the Merc with a Mouth has led to a number of video game appearances, cartoon appearances and his own feature films.</p>\r\n\r\n<p>This super-sized 10&quot; Pop! features Squirrelpool and comes with a flocked finish. Add him to your collection today!</p>\r\n\r\n<ul>\r\n	<li>Size: 10&quot; tall approx</li>\r\n	<li>Material: Plastic/Vinyl</li>\r\n</ul>', 'upload/product/thumbnail/1721563339772948.PNG', NULL, 1, NULL, NULL, 1, '2022-01-10 03:32:21', NULL, NULL),
(16, 1, 3, 3, 'Loki', 'loki', '895', 13, 'Marvel', '39.99', '0', '<h1>Funko Pop! Marvel: Loki - Loki 3.75 inches</h1>', '<ul>\r\n	<li>Package Dimensions: 3.5 L x6.25 H x4.5 W (&quot;)</li>\r\n	<li>Package Weight: 0.25 Lbs</li>\r\n	<li>Country of Origin : Viet Nam</li>\r\n	<li>Product type :TOYS AND GAMES</li>\r\n</ul>', 'upload/product/thumbnail/1721563458259333.PNG', NULL, 1, NULL, NULL, 1, '2022-01-10 03:34:14', NULL, NULL),
(17, 1, 3, 3, 'Halloween Wanda', 'halloween-wanda', '715', 33, 'Marvel', '16.25', '0', '<h1>Funko Pop! Marvel: WandaVision - Halloween Wanda Vinyl Figure</h1>', '<ul>\r\n	<li>From Marvel&#39;s WandaVision is Halloween Wanda as a stylized Pop! vinyl figure.</li>\r\n	<li>For Halloween this year Wanda has dressed up in the original comic book version of Scarlet Witch&#39;s costume.</li>\r\n	<li>Yet things seem to have gone topsy turvy and she needs your help finding Vision and the rest of their Marvel comrades in your WandaVision collection.</li>\r\n	<li>Vinyl bobblehead is approximately 4.15-inches tall.</li>\r\n</ul>', 'upload/product/thumbnail/1721564657237622.PNG', NULL, 1, NULL, NULL, 1, '2022-01-10 03:53:17', NULL, NULL),
(18, 1, 3, 3, 'The Winter Soldier', 'the-winter-soldier', '838', 2, 'Marvel', '49.99', '15', '<h1>POP Marvel: Year of The Shield - The Winter Soldier</h1>', '<ul>\r\n	<li>Funko presents Marvel Year of the Shield, the subscription collectible series exclusively available here. This series is made to celebrate heroes who wield shields to protect the innocent from villains whether they appear in the Marvel comics, movies, or both.</li>\r\n	<li>Expand your Marvel collection by grabbing the first figure in our Year of the Shield series. A new figure is released every other month, starting with our first figure of this 8-part series, The Winter Soldier.</li>\r\n	<li>This Pop! features Bucky Barnes as the Winter Soldier, holding Captain America&rsquo;s battle worn shield as seen in their fight scene from the movie Captain America: The Winter Soldier.</li>\r\n	<li>Bucky Barnes was a close friend to Captain America (Steve Rogers) when they were growing up, but at some point, Bucky was captured and brainwashed into becoming the Winter Soldier. Your Marvel collection would not be complete without the Winter Soldier to stand beside Captain America. Cap will help Bucky recover his memories.</li>\r\n	<li>Vinyl figure is approximately 3.75-inches tall and comes in a window display box.</li>\r\n</ul>', 'upload/product/thumbnail/1721564771443747.PNG', 1, NULL, NULL, NULL, 1, '2022-01-10 03:55:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Q4H5qC1dWCPuTj0OHDn1t7HKxKgUrFrSJekhIJOI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR1RpdjZIZTFCcjA1eXVsakEyQ1JkY2lxcTFiY3NnN2lWbTc2VE15OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0L21hbmFnZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1641812107),
('TISKypNDpG619DWdxuKXDVrv7SAo5gkN60JjSdtW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNzlzSUtBU0NETUF6SFRaTTVtU21YN1BmaWZxa0xlV3g4Mm9XSkdGaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1641797944);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(1, 2, 'Nendo', 'sub-1', NULL, '2021-12-21 09:36:05'),
(2, 1, 'Mini Funko', 'sub-2', NULL, '2021-12-21 09:36:16'),
(3, 3, 'Action', 'sub-3', NULL, '2021-12-21 09:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_purchased` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total_price` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_proof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `multi_imgs`
--
ALTER TABLE `multi_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
