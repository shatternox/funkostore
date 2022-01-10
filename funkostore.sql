-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 06:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funkostore`
--

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2021-12-07 22:55:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AZ4EzFXL0zU2yMKFnEtAfcIgvhtS2F09f2TOcmsohouoyAm3UFWx6RMNo8nu', NULL, '1721536458281747.jpeg', '2021-12-07 22:55:08', '2022-01-09 20:25:05');

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'Funko Home', 'funko-home', 'upload/brand/1718556465928843.png', NULL, NULL),
(2, 'Nendoroid', 'nendoroid', 'upload/brand/1718556524481719.png', NULL, NULL);

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(29, 1, 8, 1, NULL, NULL);

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_icon`, `created_at`, `updated_at`) VALUES
(1, 'Cartoon', 'cartoon', 'fab fa-angellist', NULL, NULL),
(2, 'Anime', 'anime', 'fas fa-grin-alt', NULL, NULL),
(3, 'Movie', 'movie', 'fas fa-film', NULL, NULL);

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
(41, 6, 'upload/product/multi_image/1718561300148935.jpg', '2021-12-08 00:16:13', NULL);

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
(7, 2, 2, 1, 'Roxy Migurdia', 'roxy-migurdia', 'ROX8711', 30, 'Lorem,Ipsum,Amet', '200', NULL, '<p>Lorem ipsum dolor sit amet,</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718558132749998.jpg', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:25:52', '2022-01-09 20:06:31', NULL),
(8, 2, 2, 1, 'Nendoroid Doll Nezuko Kamado', 'nendoroid-doll-nezuko-kamado', 'DS1667', 11, 'Lorem,Ipsum,Amet', '73', NULL, '<p>Lorem ipsum dolor sit amet,</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718558236023591.jpg', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:27:31', '2022-01-09 22:39:19', NULL);

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bluFaYigNT6VCmCBydmVTgq8a4r3u6xquWK6HhPR', NULL, '192.168.1.248', 'Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieW5zcFVueDUwWllkTGc1cGhOdzVkNUR6Z2ViODdUWWRjUkFyclA5NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xOTIuMTY4LjEuMTkyOjgwMDAvYWRtaW4vZGFzaGJvYXJkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1641793443),
('DJTMVIU8OvqtXDaGGce2D15u2Ptlo8hPXXJn5Apd', NULL, '192.168.1.248', 'Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3lVSjNub0dHQmZnUmh2Yk5SeWdUUXA1RzNVb01GbnZkVnR3NTI5SCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xOTIuMTY4LjEuMTkyOjgwMDAvY2hlY2tvdXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1641786328),
('MfexXE1sQxvoLwdfwAxpRIZXYb1tOWsclv8DIjHi', NULL, '192.168.1.248', 'Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaE9uUHFOdWlYRTN1bmNzRktuSVNJeThBQWtGVERzcUVvMnY1YmtlUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xOTIuMTY4LjEuMTkyOjgwMDAvYWRtaW4vbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1641790774),
('NPHU37hCN25Jy5uTo6NZXzeiWgV10ORElVcNKM1X', NULL, '192.168.1.248', 'Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWIycEI5ckhiN3liUHJRVDV3amZCVTVadkhYR2R2TmNVanU0UzI3VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xOTIuMTY4LjEuMTkyOjgwMDAvYWRtaW4vbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1641793443),
('yF67ksMUrJpfVHLmZJQXCeaEH1y4Lf8noCnakMNM', 1, '192.168.1.248', 'Mozilla/5.0 (X11; Linux x86_64; rv:78.0) Gecko/20100101 Firefox/78.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNDBCMnZPM0l4Z21FcVFHQm1mdlh3cXh1NW1PWHpBTHVncm1jWk9QbyI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRwSHluLnpvSWxSOVJuWnR2NGVsTkllQlRiRUV5NE5UYWFJWWdwRjRRRm9DckxKSjk3WDVRdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xOTIuMTY4LjEuMTkyOjgwMDAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1641793499);

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(1, 2, 'Nendo', 'sub-1', NULL, '2021-12-21 09:36:05'),
(2, 1, 'Mini Funko', 'sub-2', NULL, '2021-12-21 09:36:16'),
(3, 3, 'Action', 'sub-3', NULL, '2021-12-21 09:36:25');

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `product_id`, `user_id`, `quantity`, `date_purchased`, `total_price`, `payment_type`, `invoice`, `order_status`, `transaction_proof`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 1, '2022-01-10 03:35:15', 273, 'visa', 'FNK61DB9896A3549', 'Rejected', 'upload/transaction_proofs/FNK61DB9896A3549.php', NULL, '2022-01-09 20:35:15'),
(2, 8, 1, 1, '2022-01-10 03:35:15', 273, 'visa', 'FNK61DB9896A3549', 'Rejected', 'upload/transaction_proofs/FNK61DB9896A3549.php', NULL, '2022-01-09 20:35:15'),
(3, 8, 1, 1, '2022-01-10 03:35:18', 73, '<script> alert(1) </script>', 'FNK61DB9DB90DD82', 'Rejected', 'upload/transaction_proofs/FNK61DB9DB90DD82.jpg', NULL, '2022-01-09 20:35:18'),
(4, 5, 1, 1, '2022-01-10 03:35:20', 12, 'paypal', 'FNK61DBA2C9A50EC', 'Rejected', 'upload/transaction_proofs/FNK61DBA2C9A50EC.jpg', NULL, '2022-01-09 20:35:20'),
(5, 7, 1, 1, '2022-01-10 03:35:23', 200, 'visa', 'FNK61DBA8B6B2609', 'Rejected', 'upload/transaction_proofs/FNK61DBA8B6B2609.jpeg', NULL, '2022-01-09 20:35:23'),
(6, 5, 1, 1, '2022-01-09 20:35:51', 12, 'visa', 'FNK61DBA997E227F', 'On Going', 'upload/transaction_proofs/FNK61DBA997E227F.jpeg', NULL, NULL),
(7, 6, 1, 1, '2022-01-09 20:39:45', 57, 'visa', 'FNK61DBAA81133F0', 'On Going', 'upload/transaction_proofs/FNK61DBAA81133F0.php', NULL, NULL),
(8, 5, 1, 1, '2022-01-09 20:43:38', 12, 'visa', 'FNK61DBAB6A09D15', 'On Going', 'upload/transaction_proofs/FNK61DBAB6A09D15.php', NULL, NULL),
(9, 1, 1, 1, '2022-01-09 20:47:38', 15, 'visa', 'FNK61DBAC5ADFFD7', 'On Going', 'upload/transaction_proofs/FNK61DBAC5ADFFD7.php', NULL, NULL),
(10, 1, 1, 1, '2022-01-09 20:49:15', 15, 'visa', 'FNK61DBACBB4FB1B', 'On Going', 'upload/transaction_proofs/FNK61DBACBB4FB1B.php', NULL, NULL),
(11, 2, 1, 1, '2022-01-09 21:08:25', 15, 'visa', 'FNK61DBB139ED3B0', 'On Going', 'upload/transaction_proofs/FNK61DBB139ED3B0.php', NULL, NULL),
(12, 2, 1, 1, '2022-01-09 21:09:53', 15, 'visa', 'FNK61DBB191E547C', 'On Going', 'upload/transaction_proofs/FNK61DBB191E547C.php', NULL, NULL),
(13, 1, 1, 1, '2022-01-09 21:14:59', 15, 'paypal', 'FNK61DBB2C396E52', 'On Going', 'upload/transaction_proofs/FNK61DBB2C396E52.php', NULL, NULL),
(14, 1, 1, 1, '2022-01-09 21:16:47', 27, 'paypal', 'FNK61DBB32FC5BBB', 'On Going', 'upload/transaction_proofs/FNK61DBB32FC5BBB.php', NULL, NULL),
(15, 5, 1, 1, '2022-01-09 21:16:47', 27, 'paypal', 'FNK61DBB32FC5BBB', 'On Going', 'upload/transaction_proofs/FNK61DBB32FC5BBB.php', NULL, NULL),
(16, 6, 1, 1, '2022-01-10 05:43:30', 57, 'paypal', 'FNK61DBB5F44D82D', 'Finished', 'upload/transaction_proofs/FNK61DBB5F44D82D.pgif', NULL, '2022-01-09 22:43:30'),
(17, 2, 1, 1, '2022-01-09 21:34:29', 15, 'visa', 'FNK61DBB755266A8', 'On Going', 'upload/transaction_proofs/FNK61DBB755266A8.php', NULL, NULL),
(18, 5, 1, 1, '2022-01-09 21:38:15', 12, 'visa', 'FNK61DBB8375D10B', 'On Going', 'upload/transaction_proofs/FNK61DBB8375D10B.jpg', NULL, NULL),
(19, 8, 1, 1, '2022-01-09 21:39:13', 73, 'visa', 'FNK61DBB87197D4F', 'On Going', 'upload/transaction_proofs/FNK61DBB87197D4F.php', NULL, NULL),
(20, 7, 1, 1, '2022-01-09 21:40:02', 200, 'visa', 'FNK61DBB8A201AB5', 'On Going', 'upload/transaction_proofs/FNK61DBB8A201AB5.jpg', NULL, NULL),
(21, 6, 1, 1, '2022-01-09 21:51:27', 57, 'visa', 'FNK61DBBB4F400B5', 'On Going', 'upload/transaction_proofs/FNK61DBBB4F400B5.', NULL, NULL),
(22, 6, 1, 1, '2022-01-09 21:53:30', 57, 'visa', 'FNK61DBBBCA85697', 'On Going', 'upload/transaction_proofs/FNK61DBBBCA85697.php', NULL, NULL),
(23, 7, 1, 1, '2022-01-09 21:54:08', 200, 'visa', 'FNK61DBBBF0760F0', 'On Going', 'upload/transaction_proofs/FNK61DBBBF0760F0.jpg', NULL, NULL),
(24, 8, 1, 1, '2022-01-09 21:55:05', 73, 'visa', 'FNK61DBBC298EE81', 'On Going', 'upload/transaction_proofs/FNK61DBBC298EE81.php%20', NULL, NULL),
(25, 6, 1, 1, '2022-01-09 21:56:32', 57, 'visa', 'FNK61DBBC803D4A4', 'On Going', 'upload/transaction_proofs/FNK61DBBC803D4A4.jpg', NULL, NULL),
(26, 8, 1, 1, '2022-01-09 21:58:48', 73, 'visa', 'FNK61DBBD085F6CC', 'On Going', 'upload/transaction_proofs/FNK61DBBD085F6CC.php\'', NULL, NULL);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, '</strong> !@#$%^&*()_+:\";\'%0a<script> alert(1) </script> <strong>', 'asdf@gmail.com', 'asdfasdf', NULL, '$2y$10$pHyn.zoIlR9RnZtv4elNIeBTbEEy4NTaaIYgpF4QFoCrLJJ97X5Qu', NULL, NULL, NULL, NULL, '1721536825894703.jpeg', '2021-12-26 22:49:10', '2022-01-09 20:54:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
