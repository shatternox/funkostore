-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2022 at 03:19 PM
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
(42, 11, 'upload/product/multi_image/1721667274355295.jpg', '2022-01-11 07:04:21', NULL),
(43, 12, 'upload/product/multi_image/1721667446114487.jpg', '2022-01-11 07:07:04', NULL),
(44, 17, 'upload/product/multi_image/1721667625098840.jpg', '2022-01-11 07:09:55', NULL),
(45, 16, 'upload/product/multi_image/1721667731355163.png', '2022-01-11 07:11:37', NULL),
(46, 14, 'upload/product/multi_image/1721667840545195.jpg', '2022-01-11 07:13:21', NULL),
(47, 9, 'upload/product/multi_image/1721667916517790.jpg', '2022-01-11 07:14:33', NULL),
(48, 10, 'upload/product/multi_image/1721667990920635.jpg', '2022-01-11 07:15:44', NULL),
(49, 15, 'upload/product/multi_image/1721668074373566.png', '2022-01-11 07:17:04', NULL),
(50, 18, 'upload/product/multi_image/1721668119809721.jpg', '2022-01-11 07:17:47', NULL),
(51, 13, 'upload/product/multi_image/1721668172333127.jpg', '2022-01-11 07:18:37', NULL);

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
(9, 1, 3, 3, 'Spider-Man (Integrated Suit)', 'spider-man-(integrated-suit)', '913', 5, 'Marvel', '200', '0', '<h1>Funko Pop! Marvel: Spider-Man: No Way Home - Spider-Man in Integrated Suit</h1>', '<h1>Funko Pop! Marvel: Spider-Man: No Way Home - Spider-Man in Integrated Suit</h1>', 'upload/product/thumbnail/1721667910930527.jpg', NULL, 1, NULL, NULL, 1, '2022-01-10 02:45:35', '2022-01-11 07:14:28', NULL),
(10, 1, 3, 3, 'Spider-Man in Black and Gold Suit', 'spider-man-in-black-and-gold-suit', '911', 27, 'Marvel', '33', '0', '<h1>Funko POP! Spider-Man No Way Home - Spiderman Black and Gold Suit</h1>', '<ul>\r\n	<li>Product Type :Toys And Games</li>\r\n	<li>Package Dimensions :3.5&quot; L X4.5&quot; W X6.25&quot; H</li>\r\n	<li>Country Of Origin :Viet Nam</li>\r\n	<li>Package Weight :0.25Lbs</li>\r\n</ul>', 'upload/product/thumbnail/1721667985618147.jpg', NULL, 1, NULL, NULL, 1, '2022-01-10 03:03:26', '2022-01-11 07:15:39', NULL),
(11, 1, 3, 3, 'Funko POP! Marvel - Blacklight - Ant-Man Black Light Neon Exc', 'funko-pop!-marvel---blacklight---ant-man-black-light-neon-exc', '910', 9, 'Marvel', '26', '10', '<h1>POP Funko Marvel Ant-Man Black Light Target Exclusive</h1>', '<ul>\r\n	<li>Pop Marvel Avengers 3.75 Inch Action Figure Exclusive - Ant-Man Black Light #910</li>\r\n	<li>Pop</li>\r\n	<li>Funko</li>\r\n	<li>3.75 Inch</li>\r\n</ul>', 'upload/product/thumbnail/1721667282161410.jpg', NULL, NULL, 1, NULL, 1, '2022-01-11 07:04:59', '2022-01-11 07:04:59', NULL),
(12, 1, 3, 3, 'Funko Pop! Marvel: Venom 2 Let There Be Carnage - Venom', 'funko-pop!-marvel:-venom-2-let-there-be-carnage---venom', '888', 11, 'Marvel', '29', '0', '<h1>Funko Pop! Marvel: Venom 2 Let There Be Carnage - Venom</h1>', '<ul>\r\n	<li>Package weight : 0.25 Lbs</li>\r\n	<li>Figure stands 3 3/4 inches and comes in a window display box.</li>\r\n	<li>Be sure to collect all Venom figures from Funko!</li>\r\n	<li>Country of origin : Viet Nam</li>\r\n</ul>', 'upload/product/thumbnail/1721667434409401.jpg', NULL, 1, NULL, NULL, 1, '2022-01-11 07:05:46', '2022-01-11 07:06:53', NULL),
(13, 1, 3, 3, 'Zombie Hunter Spidey', 'zombie-hunter-spidey', '945', 11, 'Marvel', '26.25', '10', '<h1>Funko Pop! Marvel: What If? Zombie Hunter Spidey</h1>', '<ul>\r\n	<li>In the endless possibilities, venture to wonder and explore with Marvel&#39;s What If&hellip;? animated series.</li>\r\n	<li>Collect Pop! Zombie Hunter Spidey to complete your What If&hellip;? set.</li>\r\n	<li>Vinyl bobblehead is approximately 3.75-inches tall.</li>\r\n</ul>', 'upload/product/thumbnail/1721668166493998.jpg', 1, NULL, 1, NULL, 1, '2022-01-10 03:12:09', '2022-01-11 07:18:31', NULL),
(14, 1, 3, 3, 'Poison Spider-Man', 'poison-spider-man', '966', 3, 'Marvel', '39.99', '5', '<h1>Funko Pop! Marvel Venom Poison Spider-Man Entertainment Earth Exclusive Figure #966</h1>', '<h1>Funko Pop! Marvel Venom Poison Spider-Man Entertainment Earth Exclusive Figure #966</h1>', 'upload/product/thumbnail/1721667834185571.jpg', 1, NULL, NULL, NULL, 1, '2022-01-11 07:12:56', '2022-01-11 07:13:15', NULL),
(15, 1, 3, 3, 'Squirrelpool 10', 'squirrelpool-10', '967', 4, 'Marvel', '80.00', '10', '<p>Marvel - Deadpool Squirrelpool 30th Anniversary 10&quot; Flocked Pop! Vinyl Figure</p>', '<p>Three decades ago, Deadpool first appeared in the legendary NEW MUTANTS #98 by Rob Liefeld and Fabian Nicieza, and the comic book world has never been the same! Three decades later and the success of the Merc with a Mouth has led to a number of video game appearances, cartoon appearances and his own feature films.</p>\r\n\r\n<p>This super-sized 10&quot; Pop! features Squirrelpool and comes with a flocked finish. Add him to your collection today!</p>\r\n\r\n<ul>\r\n	<li>Size: 10&quot; tall approx</li>\r\n	<li>Material: Plastic/Vinyl</li>\r\n</ul>', 'upload/product/thumbnail/1721668068746489.jpg', NULL, 1, NULL, NULL, 1, '2022-01-10 03:32:21', '2022-01-11 07:16:58', NULL),
(16, 1, 3, 3, 'Loki', 'loki', '895', 13, 'Marvel', '39.99', '0', '<h1>Funko Pop! Marvel: Loki - Loki 3.75 inches</h1>', '<ul>\r\n	<li>Package Dimensions: 3.5 L x6.25 H x4.5 W (&quot;)</li>\r\n	<li>Package Weight: 0.25 Lbs</li>\r\n	<li>Country of Origin : Viet Nam</li>\r\n	<li>Product type :TOYS AND GAMES</li>\r\n</ul>', 'upload/product/thumbnail/1721667725746016.png', NULL, 1, NULL, NULL, 1, '2022-01-10 03:34:14', '2022-01-11 07:11:31', NULL),
(17, 1, 3, 3, 'Halloween Wanda', 'halloween-wanda', '715', 33, 'Marvel', '16', '0', '<h1>Funko Pop! Marvel: WandaVision - Halloween Wanda Vinyl Figure</h1>', '<ul>\r\n	<li>From Marvel&#39;s WandaVision is Halloween Wanda as a stylized Pop! vinyl figure.</li>\r\n	<li>For Halloween this year Wanda has dressed up in the original comic book version of Scarlet Witch&#39;s costume.</li>\r\n	<li>Yet things seem to have gone topsy turvy and she needs your help finding Vision and the rest of their Marvel comrades in your WandaVision collection.</li>\r\n	<li>Vinyl bobblehead is approximately 4.15-inches tall.</li>\r\n</ul>', 'upload/product/thumbnail/1721667618435230.jpg', NULL, 1, NULL, NULL, 1, '2022-01-11 07:08:34', '2022-01-11 07:09:49', NULL),
(18, 1, 3, 3, 'The Winter Soldier', 'the-winter-soldier', '838', 2, 'Marvel', '49.99', '15', '<h1>POP Marvel: Year of The Shield - The Winter Soldier</h1>', '<ul>\r\n	<li>Funko presents Marvel Year of the Shield, the subscription collectible series exclusively available here. This series is made to celebrate heroes who wield shields to protect the innocent from villains whether they appear in the Marvel comics, movies, or both.</li>\r\n	<li>Expand your Marvel collection by grabbing the first figure in our Year of the Shield series. A new figure is released every other month, starting with our first figure of this 8-part series, The Winter Soldier.</li>\r\n	<li>This Pop! features Bucky Barnes as the Winter Soldier, holding Captain America&rsquo;s battle worn shield as seen in their fight scene from the movie Captain America: The Winter Soldier.</li>\r\n	<li>Bucky Barnes was a close friend to Captain America (Steve Rogers) when they were growing up, but at some point, Bucky was captured and brainwashed into becoming the Winter Soldier. Your Marvel collection would not be complete without the Winter Soldier to stand beside Captain America. Cap will help Bucky recover his memories.</li>\r\n	<li>Vinyl figure is approximately 3.75-inches tall and comes in a window display box.</li>\r\n</ul>', 'upload/product/thumbnail/1721668114138206.jpg', 1, NULL, NULL, NULL, 1, '2022-01-10 03:55:06', '2022-01-11 07:17:42', NULL);

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(1, 2, 'Nendo', 'sub-1', NULL, '2021-12-21 09:36:05'),
(2, 1, 'Mini Funko', 'sub-2', NULL, '2021-12-21 09:36:16'),
(3, 3, 'Action', 'sub-3', NULL, '2021-12-21 09:36:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
