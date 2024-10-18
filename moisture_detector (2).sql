-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2024 at 08:03 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moisture_detector`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `formulaires`
--

CREATE TABLE `formulaires` (
  `id` bigint UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mini_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `adv_and_carac` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manual` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulaires`
--

INSERT INTO `formulaires` (`id`, `photo`, `title`, `mini_description`, `description`, `adv_and_carac`, `manual`, `created_at`, `updated_at`) VALUES
(1, 'IMG-20231115-WA0057.jpg', 'carte aduino wafo', 'NE PEUT ETRE MODIFIE SEUL LE CREATEUR DU SITE A DROIT AU DROIT ECRITURE SUR CETTE PARTIE DE LA PAGE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Temporibus molestiae nam officia iste facilis tenetur qui assumenda voluptatum nesciunt ea vel veritatis corrupti, in distinctio inventore ex soluta! Quod, numquam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Libero maiores distinctio facere suscipit quibusdam tempore fugiat nulla iure facilis totam Repudiandae in beatae numquam voluptatum autem Sit unde voluptatum aliquam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Temporibus molestiae nam officia iste facilis tenetur qui assumenda voluptatum nesciunt ea vel veritatis corrupti, in distinctio inventore ex soluta! Quod, numquam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Libero maiores distinctio facere suscipit quibusdam tempore fugiat nulla iure facilis totam Repudiandae in beatae numquam voluptatum autem Sit unde voluptatum aliquam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Temporibus molestiae nam officia iste facilis tenetur qui assumenda voluptatum nesciunt ea vel veritatis corrupti, in distinctio inventore ex soluta! Quod, numquam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Libero maiores distinctio facere suscipit quibusdam tempore fugiat nulla iure facilis totam Repudiandae in beatae numquam voluptatum autem Sit unde voluptatum aliquam.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.', '-Lorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\n-Lorem ipsum dolor sit amet consectetur adipisicing elit Temporibus molestiae nam officia iste facilis tenetur qui assumenda voluptatum nesciunt ea vel veritatis corrupti, in distinctio inventore ex soluta! Quod, numquam.\r\n-Lorem ipsum dolor sit amet consectetur adipisicing elit Libero maiores distinctio facere suscipit quibusdam tempore fugiat nulla iure facilis totam Repudiandae in beatae numquam voluptatum autem Sit unde voluptatum aliquam.\r\n-Lorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\n-Lorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\n-Lorem ipsum dolor sit amet consectetur adipisicing elit Temporibus molestiae nam officia iste facilis tenetur qui assumenda voluptatum nesciunt ea vel veritatis corrupti, in distinctio inventore ex soluta! Quod, numquam.\r\n-Lorem ipsum dolor sit amet consectetur adipisicing elit Libero maiores distinctio facere suscipit quibusdam tempore fugiat nulla iure facilis totam Repudiandae in beatae numquam voluptatum autem Sit unde voluptatum aliquam.\r\n-Lorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.', '1-Lorem ipsum dolor sit amet consectetur adipisicing elit Temporibus molestiae nam officia iste facilis tenetur qui assumenda voluptatum nesciunt ea vel veritatis corrupti, in distinctio inventore ex soluta! Quod, numquam.\r\n2-Lorem ipsum dolor sit amet consectetur adipisicing elit Libero maiores distinctio facere suscipit quibusdam tempore fugiat nulla iure facilis totam Repudiandae in beatae numquam voluptatum autem Sit unde voluptatum aliquam.\r\n3-Lorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\n4-Lorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.\r\n5-Lorem ipsum dolor sit amet consectetur adipisicing elit Temporibus molestiae nam officia iste facilis tenetur qui assumenda voluptatum nesciunt ea vel veritatis corrupti, in distinctio inventore ex soluta! Quod, numquam.\r\n6-Lorem ipsum dolor sit amet consectetur adipisicing elit Libero maiores distinctio facere suscipit quibusdam tempore fugiat nulla iure facilis totam Repudiandae in beatae numquam voluptatum autem Sit unde voluptatum aliquam.\r\n7-Lorem ipsum dolor sit amet consectetur adipisicing elit Culpa totam, saepe praesentium iste alias consectetur asperiores maxime voluptatum voluptates, esse amet enim unde, vitae harum Incidunt et adipisci illo iste.', NULL, '2024-10-12 22:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `package` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `application` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `specificite` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `documentation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prix` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `image`, `about`, `nom`, `presentation`, `package`, `application`, `specificite`, `documentation`, `created_at`, `updated_at`, `prix`) VALUES
(1, '', '', 'carte arduino', '', '', '', '', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_30_122108_create_homes_table', 2),
(6, '2024_10_04_222419_add_prix', 3),
(7, '2024_10_04_222523_prix', 4),
(8, '2024_10_04_223137_add_prix_to_homes', 5),
(9, '2024_10_04_231731_add_prix_to_homes', 6),
(10, '2024_10_10_231327_create_formulaires_table', 6),
(11, '2024_10_14_221401_create_result_circuits_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result_circuits`
--

CREATE TABLE `result_circuits` (
  `id` bigint UNSIGNED NOT NULL,
  `temperature` double(8,2) NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
(1, 'wafo', 'wafoarold@gmail.com', NULL, '$2y$12$FSohlzA2FJZ3X20is6QtmuoJNu7U24WlzcH1Vw2MBIK85ycEfuv1m', 'Gsrslt7Uko1gxIr6yvcByoxo4koPjVTnim3c8WbzvUgi7czV4iFOcLgFdV53', '2024-10-10 20:13:34', '2024-10-10 20:13:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `formulaires`
--
ALTER TABLE `formulaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `result_circuits`
--
ALTER TABLE `result_circuits`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formulaires`
--
ALTER TABLE `formulaires`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result_circuits`
--
ALTER TABLE `result_circuits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
