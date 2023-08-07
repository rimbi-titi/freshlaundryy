-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 04:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freshlaundry`
--

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
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(21, '2023_07_26_012532_create_users_table', 1),
(22, '2023_08_06_075244_create_services_table', 1),
(23, '2023_08_06_075307_create_statuses_table', 1),
(24, '2023_08_06_075315_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `bobot` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama`, `telepon`, `service_id`, `alamat`, `bobot`, `harga`, `status_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Siti Aisyah', '085678912345', 1, 'Jl. Diponegoro No. 15, Surabaya', 20, 80000, 1, 1, '2023-08-06 05:45:01', '2023-08-06 06:16:27'),
(2, 'Ahmad Ibrahim', '083212345678', 1, 'Jl. Raya Darmo Permai III, Surabaya', 9, 36000, 2, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(3, 'Andi Wijaya', '081234567890', 1, 'Jl. HR. Muhammad No. 11, Sidoarjo', 14, 56000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(4, 'Lina Sari', '081298765432', 2, 'Jl. Raya Jemursari No. 8, Surabaya', 7, 21000, 2, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(5, 'Rudi Santoso', '082134567890', 3, 'Jl. Ahmad Yani No. 75, Gresik', 3, 15000, 3, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(6, 'Treva Dietrich', '+15125449146', 4, '3229 Darby Islands\nShaniefurt, ME 10692-5475', 4, 16000, 3, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(7, 'Declan Stiedemann', '+18453561611', 2, '251 Mekhi Curve\nSouth Sammy, LA 16537-2175', 6, 18000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(8, 'Mr. Kennedi Marquardt', '+13106259616', 4, '98627 Turcotte Village Apt. 754\nEast Claudie, MD 94140', 3, 12000, 3, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(9, 'Travis Stroman', '+17406793376', 2, '479 Chaim Island Apt. 934\nSabrynaville, TX 21288', 6, 18000, 2, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(10, 'Kareem Schimmel', '+16076873312', 3, '382 Lacey Pines Suite 393\nDaneside, IL 63050-5884', 12, 60000, 2, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(11, 'Anabel King', '+12034440634', 1, '176 Hauck Stravenue Apt. 020\nLake Martin, OH 29176-9570', 13, 52000, 1, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(12, 'Clint Schroeder', '+18208585408', 3, '5930 West Shore Apt. 078\nSouth Marian, ND 51603-0449', 15, 75000, 3, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(13, 'Mrs. Pasquale Ferry', '+13478493403', 1, '62506 Toy Parkway\nUllrichside, NC 62863', 15, 60000, 2, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(14, 'Flossie Reichel', '+13615162902', 3, '6452 Gerlach Ford\nNorth Rhoda, OR 72894-3581', 7, 35000, 3, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(15, 'Mrs. Alia King', '+18703330266', 3, '79908 Elouise Flat Apt. 492\nLake Mylesland, CT 36383', 10, 50000, 1, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(16, 'Mrs. Taya Lang II', '+13606637563', 2, '349 Lawrence Squares\nEast Annalise, CO 75005-4226', 7, 21000, 3, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(17, 'Tavares Sporer Jr.', '+12486127862', 2, '22017 Cory Views Suite 559\nSouth Antonettaberg, DE 38630', 9, 27000, 2, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(18, 'Cristobal Kozey', '+16282453766', 4, '4353 Schuster Glen\nEast Urielview, NH 95832', 7, 28000, 2, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(19, 'Odessa Kovacek', '+14698547071', 3, '298 Toy Harbors Apt. 557\nStiedemannchester, KY 14572', 6, 30000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(20, 'Prof. Jake Marks', '+12566387680', 1, '98949 Yost Row Suite 373\nGreenfelderside, NY 52309', 10, 40000, 3, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(21, 'Stone Ledner', '+14803506873', 1, '7697 Keebler Ridge Suite 835\nDibbertmouth, OH 07037', 15, 60000, 2, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(22, 'Mr. Blaze Moen III', '+14637187189', 4, '784 Hills Falls\nNorth Ivahfort, WI 46272', 9, 36000, 1, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(23, 'Coleman McLaughlin', '+13473393005', 2, '19674 Yoshiko Lodge Apt. 294\nSchroederburgh, IA 57480-2428', 14, 42000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(24, 'Gilda Romaguera III', '+14302445363', 3, '6533 Gerlach Lane Apt. 415\nWest Jeanne, AL 32615-1954', 12, 60000, 2, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(25, 'Katharina Jones', '+16057888420', 2, '84650 Spencer Cove\nPort Maggie, WI 07896-9627', 10, 30000, 1, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(26, 'Charles Konopelski', '+16027591708', 1, '387 Murray Route\nNew Kenton, NH 51169-5202', 7, 28000, 1, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(27, 'Shemar Von PhD', '+18626211646', 3, '897 Nick Center\nYundtland, WI 88276', 8, 40000, 3, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(28, 'Aliza Treutel', '+16515852065', 3, '89956 Stamm Hill Apt. 547\nLake Tremaine, NY 79033-1531', 5, 25000, 1, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(29, 'Murl Reinger II', '+15206204239', 3, '39881 Grady Parkway\nVerniceberg, AL 61304-8806', 2, 10000, 2, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(30, 'Trent Bauch IV', '+15407573058', 1, '74174 Octavia Inlet Apt. 727\nNorth Dina, DC 58851', 4, 16000, 3, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(31, 'Edd Torp', '+15678078001', 2, '923 Cecelia Ports Apt. 286\nJakubowskiton, NV 34145', 2, 6000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(32, 'Dr. Adolfo Larson DVM', '+19498096977', 4, '97009 Georgianna Ferry Apt. 303\nNew Mackenzie, IA 50513-6501', 11, 44000, 3, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(33, 'Mrs. Maye Cormier V', '+18784362488', 3, '6774 Fahey Cliffs Suite 534\nNew Emmanuelleberg, ME 31239', 1, 5000, 3, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(34, 'Janie Rice', '+13083305747', 2, '2737 Brad Stream\nBlickland, ME 83644-1027', 15, 45000, 3, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(35, 'Jodie Eichmann', '+19856810963', 1, '35178 Greg Falls\nJesseborough, CT 44699', 14, 56000, 2, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(36, 'Mckayla Pollich', '+13044899388', 4, '215 Trantow Station Suite 993\nHesselchester, IL 58266-6895', 11, 44000, 2, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(37, 'Denis Tillman', '+17023355224', 2, '2984 Dayton Fort\nPort Macie, IN 19646-7037', 14, 42000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(38, 'Dr. Burley Tillman', '+19478128250', 4, '2573 Kub Inlet Suite 923\nBergnaummouth, SC 18771', 6, 24000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(39, 'Mr. Larry Thompson I', '+13123983159', 2, '73802 Homenick Keys Suite 497\nNew Kenyatta, DC 22009', 1, 3000, 2, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(40, 'Dolores Pacocha', '+19415697177', 4, '3633 Ziemann Route\nWeberside, DE 48985', 5, 20000, 3, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(41, 'Ona Koss', '+16677592167', 4, '496 Ian Knoll\nPiperville, KY 74610-7322', 9, 36000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(42, 'Dr. Dan Walsh', '+19362530203', 1, '95598 Fritsch Flat Suite 489\nHayleyfort, ME 22918-7624', 14, 56000, 2, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(43, 'Hilbert Price Jr.', '+12233907271', 3, '713 Metz Brooks Suite 269\nNorth Kaylie, MO 90666-4310', 14, 70000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(44, 'Pamela Torp', '+13302604134', 2, '430 Alene Centers\nPort Bria, MS 91702-2426', 14, 42000, 3, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(45, 'Jeanne Frami Jr.', '+15408214207', 3, '416 Greenholt Streets Apt. 539\nNew Nikko, LA 37857-7681', 15, 75000, 3, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(46, 'Pearlie Baumbach', '+18705574490', 2, '122 Eric Expressway\nEast Feliciamouth, CO 00358', 1, 3000, 1, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(47, 'Dr. Brendan Weissnat', '+16807575715', 2, '9800 Feil Center Suite 300\nLucasfurt, NE 99408-0702', 15, 45000, 1, 3, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(48, 'Mr. Efrain Eichmann I', '+12037748998', 2, '672 Agustina Spur\nNikkoside, KS 04822-0982', 4, 12000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(49, 'Joan Lemke', '+13376841973', 4, '10752 Hills Cape Suite 465\nNew Derecktown, DC 95024', 8, 32000, 1, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(50, 'Jarred Baumbach', '+16125170290', 4, '87466 Hodkiewicz Fall\nLake Enosview, NM 77824', 3, 12000, 3, 2, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(51, 'Muhammad Satria', '087802776756', 4, 'JL. Gubeng', 30, 120000, 1, 1, '2023-08-06 06:05:56', '2023-08-06 06:05:56');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `price_per_kg` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `code`, `service`, `price_per_kg`, `created_at`, `updated_at`) VALUES
(1, 'CK', 'Cuci Kering', 4000, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(2, 'CB', 'Cuci Basah', 3000, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(3, 'CS', 'Cuci Setrika', 5000, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(4, 'S', 'Setrika', 4000, '2023-08-06 05:45:01', '2023-08-06 05:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PCS', 'Proses', '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(2, 'KRM', 'Dikirim', '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(3, 'SLS', 'Selesai', '2023-08-06 05:45:01', '2023-08-06 05:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 1, '$2y$10$bBIL2vZfKJ8acjonJkdCnelgZlrOk2dX9eg.ZgeRaGI4NMeM91Ojy', NULL, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(2, 'rimbi', 'rimbi@gmail.com', NULL, 0, '$2y$10$boNfMgBdMo8MB4mfH5SL..sBEudSed6y6Jia7.K3IGwPw9Q7C/c02', NULL, '2023-08-06 05:45:01', '2023-08-06 05:45:01'),
(3, 'Rahayu', 'rahayu@gmail.com', NULL, 0, '$2y$10$57q7.5FT.nUzChZNoQ6QQeJUgoNc5ZimYpLkiw5YEYY0cOG2bBCIi', NULL, '2023-08-06 05:45:01', '2023-08-06 05:45:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_service_id_foreign` (`service_id`),
  ADD KEY `orders_status_id_foreign` (`status_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  ADD CONSTRAINT `orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
