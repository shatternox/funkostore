-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 09:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2021-12-07 22:55:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'I2mmL4Xsbz', NULL, NULL, '2021-12-07 22:55:08', '2021-12-07 22:55:08');

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'Funko Home', 'funko-home', 'upload/brand/1718556465928843.png', NULL, NULL),
(2, 'Nendoroid', 'nendoroid', 'upload/brand/1718556524481719.png', NULL, NULL);

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

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `product_name`, `product_slug`, `product_code`, `product_qty`, `product_tags`, `selling_price`, `discount`, `short_description`, `long_description`, `product_thumbnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'Thanos Gingerbread - Marvel', 'thanos-gingerbread---marvel', 'MV-029', 30, 'Lorem,Ipsum,Amet', '15', NULL, '<p>Lorem ipsum dolor sit amet,&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557039863010.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:08:30', NULL),
(2, 1, 1, 2, 'AANG - AVATAR: THE LAST AIRBENDER', 'aang---avatar:-the-last-airbender', 'AAA-2000', 100, 'Lorem,Ipsum,Amet', '15', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna.&nbsp;</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557179996195.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:10:44', NULL),
(3, 1, 2, 1, 'DODORIA - DRAGON BALL Z', 'dodoria---dragon-ball-z', 'DD-9090', 20, 'Lorem,Ipsum,Amet',  '15', '20', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557325965756.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:13:03', NULL),
(4, 1, 3, 3, 'RED MILLER - MANDY', 'red-miller---mandy', 'RD78', 20, 'Lorem,Ipsum,Amet',  '12', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557561680822.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:16:48', NULL),
(5, 1, 3, 3, 'DOC WITH HELMET - BACK TO THE FUTURE', 'doc-with-helmet---back-to-the-future', 'DOC78', 60, 'Lorem,Ipsum,Amet',  '12', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718557722867748.png', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:19:21', NULL),
(6, 2, 2, 1, 'Nendoroid Itachi Uchiha: Anbu Black Ops Ver', 'nendoroid-itachi-uchiha:-anbu-black-ops-ver', 'NAR090', 10, 'Lorem,Ipsum,Amet',  '57', NULL, '<p>Lorem ipsum dolor sit amet,</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718558009993712.jpg', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:23:55', NULL),
(7, 2, 2, 1, 'Roxy Migurdia', 'roxy-migurdia', 'ROX8711', 20, 'Lorem,Ipsum,Amet',  '200', NULL, '<p>Lorem ipsum dolor sit amet,</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718558132749998.jpg', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:25:52', NULL),
(8, 2, 2, 1, 'Nendoroid Doll Nezuko Kamado', 'nendoroid-doll-nezuko-kamado', 'DS1667', 10, 'Lorem,Ipsum,Amet',  '73', NULL, '<p>Lorem ipsum dolor sit amet,</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu lectus mauris. Duis accumsan diam eget eleifend dapibus. Praesent a egestas urna. Vivamus quis lectus sed nisl scelerisque bibendum. Nam varius, dolor sit amet dictum feugiat, quam metus eleifend nulla, a mollis ante leo sed mauris. Nunc sed lobortis tellus, et condimentum dui. Maecenas ac lectus turpis. Nulla at efficitur dui. Morbi non maximus lacus. Nulla facilisi. Vivamus luctus, lorem vitae ultrices convallis, diam est ornare massa, in scelerisque purus nibh ac mauris. Nam dictum sollicitudin tortor, quis volutpat lectus maximus vitae. Phasellus porta leo non dui consequat aliquet. Vivamus in ante nec augue tincidunt posuere. Aliquam odio tortor, porta ac vestibulum tincidunt, fermentum eu urna. In convallis mauris sed tellus luctus, sed accumsan est feugiat.</p>', 'upload/product/thumbnail/1718558236023591.jpg', NULL, NULL, NULL, NULL, 1, '2021-12-07 23:27:31', NULL);

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Aiz6AM2OJ1dgJMI8MJATPpGD6rM0sUk87E6aKHmq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0NHMlA1VHozOGc1MnkxeDZLeFlEVnRoU2phV3JEak9jRnZaN1J0eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1638948198),
('wteBmvjTduNRlyP1xpDOQMekaIazYecMkm31TJHP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.55 Safari/537.36 Edg/96.0.1054.43', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSHFDbmVQZlNmZnhtaVZsZUR5SjZnWTVLbXE3MElDUE9vdzg4VUplNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9kdWN0L2VkaXQvNiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1638947881);

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sub 1', 'sub-1', NULL, NULL),
(2, 1, 'Sub 2', 'sub-2', NULL, NULL),
(3, 3, 'Sub 3', 'sub-3', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
