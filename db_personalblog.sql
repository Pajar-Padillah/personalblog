-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 02:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pjrcnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Odit perferendis rerum hic ipsa.', 'eligendi-dolores-quis-qui-harum-soluta', '230708054729.jpg', 'Sed beatae similique earum accusantium modi. Sit quis culpa id praesentium. Aperiam molestiae aliquid quasi delectus eum.Qui dolorem maxime et qui qui...', '<div>Sed beatae similique earum accusantium modi. Sit quis culpa id praesentium. Aperiam molestiae aliquid quasi delectus eum.Qui dolorem maxime et qui quia sint dolorem. Officiis eligendi ut eum mollitia non ea eos. Enim occaecati porro et dolor. Dicta voluptatem et impedit odio quibusdam laborum illum quia.Cumque libero sint expedita. Provident qui fuga quae est eos tempore sit. Vero saepe enim laboriosam et libero quis. Consectetur reprehenderit eum aspernatur quas vitae.Beatae assumenda incidunt eaque et praesentium. Tempore voluptatem qui sapiente.Ea vitae provident aperiam et voluptatem quaerat ut. Placeat facilis est odio totam.Eaque illo esse numquam asperiores delectus ratione incidunt. Tenetur id officiis unde consequatur et ad hic. Ullam impedit qui sequi assumenda. Enim fugiat ullam saepe asperiores dolorem.Vel nesciunt omnis quo nihil cum sint. Et est voluptas ea praesentium a corporis saepe eos. Alias possimus ut nihil aperiam optio dolores. Vitae qui alias sed.Quia veniam deleniti ut totam aliquam dolor et. Aut praesentium ipsam omnis impedit quia quam rerum sed. Animi optio consequatur accusamus blanditiis dolores. Tenetur molestiae dicta occaecati iste voluptatum.Quisquam ut vitae voluptates. Mollitia sint illo nihil ducimus maiores voluptatum. Neque quasi optio itaque veniam.<br><br></div>', NULL, '2023-07-01 07:07:02', '2023-07-07 22:47:29'),
(2, 1, 1, 'Qui velit qui.', 'non-minus-qui-et-inventore', '230708054738.jpg', 'Omnis officia unde fugit molestias ut nisi quia. Non fugiat temporibus quasi excepturi ab.Qui voluptates odit eligendi qui asperiores tempora aut quia...', '<div>Omnis officia unde fugit molestias ut nisi quia. Non fugiat temporibus quasi excepturi ab.Qui voluptates odit eligendi qui asperiores tempora aut quia. Dolorum est eaque illum. Eveniet et fuga in cupiditate est maxime laudantium explicabo. Eos qui incidunt expedita unde quis.Qui ipsam a rerum. Earum corrupti nemo dignissimos sunt. Nesciunt minima sed laudantium similique laboriosam cum sit.Dolorem dolorem quisquam magni eaque. Nobis ea placeat tempore reprehenderit sit amet. Totam exercitationem corporis molestias magni eligendi magni id. Placeat ab eaque officia magnam deleniti illo.Odit quo expedita quidem. Ullam nesciunt eveniet quam ut. Eos vel doloribus enim porro. Dolores voluptatum eos quod eaque.Aut nihil ut velit in. Tempora animi doloribus praesentium est molestiae animi est. A alias velit dolores non accusamus ipsum. Fuga ex omnis repudiandae voluptatibus tenetur.<br><br></div>', NULL, '2023-07-01 07:07:02', '2023-07-07 22:47:38'),
(3, 1, 1, 'Et ullam eum impedit ratione.', 'quia-quia-saepe-iste-aut-quibusdam', '230708054656.jpg', 'Quidem provident sit est quisquam iure ex officiis. Voluptas nisi quisquam aut et accusantium pariatur aut. Cumque mollitia autem molestias eos qui et...', '<div>Quidem provident sit est quisquam iure ex officiis. Voluptas nisi quisquam aut et accusantium pariatur aut. Cumque mollitia autem molestias eos qui et.Illo dolor alias repellendus at sit illum reiciendis. Ipsa alias sit sint impedit totam cumque occaecati.Minima dignissimos mollitia nulla consequatur consectetur unde libero. Mollitia ut ipsum ab voluptatem reiciendis quis. Pariatur veniam repellendus ab necessitatibus corporis. Voluptas sint provident iure temporibus tempora nostrum suscipit.Rem qui cupiditate qui atque. Voluptatem non et sit est explicabo. Eum corrupti odio aut. Optio earum et ut quia mollitia repudiandae.Voluptatem hic sunt autem voluptatem excepturi odio. Numquam deleniti quo doloremque ipsa ullam saepe et. Et earum similique cum et nam. Voluptatem veniam vitae sed temporibus ea architecto.Ullam fugiat perferendis culpa cum est amet qui omnis. Optio est vel ut excepturi vitae. Dolores esse eos recusandae non porro quia minus. Assumenda expedita et eaque porro cum earum.Consequatur qui inventore vel minima nihil magni. Consequatur labore nihil quia quasi sequi temporibus. Maiores repudiandae accusamus qui et. Quia ipsam atque ea autem mollitia laudantium et facere.Perspiciatis eum veritatis nulla fuga cupiditate animi et. Quia voluptatem ut enim delectus est voluptatibus. Iusto sit ea est unde ex voluptas aut. Voluptatibus soluta harum suscipit eos quis aut.Nobis fugiat et ut error quisquam. Eos ut aliquam hic aut deserunt. Molestiae eligendi aut deserunt voluptas.<br><br></div>', NULL, '2023-07-01 07:07:03', '2023-07-07 22:46:56'),
(4, 1, 1, 'Et ducimus ut reprehenderit quia saepe.', 'pariatur-similique-quia-ab-expedita', '230708054706.jpg', 'Velit perspiciatis aut in dicta provident cum. Ut enim laudantium perferendis vel veniam aut sed. Et iste inventore molestias et similique. Aut quam n...', '<div>Velit perspiciatis aut in dicta provident cum. Ut enim laudantium perferendis vel veniam aut sed. Et iste inventore molestias et similique. Aut quam numquam magnam.Reprehenderit eveniet omnis error perferendis fugiat est. Dolores nam inventore facilis aut ad. Omnis reprehenderit consequatur earum unde aut ut aut occaecati. Earum veritatis perferendis impedit perferendis a ea.Repudiandae aut ea fugit est illum nam doloremque. Tempore praesentium delectus necessitatibus. Iusto quam est et nihil et voluptatem ut. Delectus earum natus ut alias nobis fugiat sed culpa.Expedita at ipsa corporis vero sed nulla vel. Et ut id ea et officia sunt est. Illum non nulla quam ut repellat magni. Mollitia sed tempore officiis placeat.Porro expedita et quasi est et. At porro ut commodi ut. Quaerat provident unde sequi qui. Autem corporis quas et.Culpa dignissimos animi officiis voluptate. Quibusdam consequatur quaerat pariatur sunt nam placeat. Ratione cum delectus vel quis omnis.In exercitationem ipsa ea qui beatae qui. Veniam et id et. Est qui aut totam perspiciatis.Provident accusantium repellat voluptates non. Nihil animi rerum amet delectus. Et eius quam id nesciunt sit quibusdam repudiandae.Maiores voluptas qui aut non. Atque odio eveniet deleniti et est unde consequatur. Quibusdam a aliquid est nisi praesentium tempora et tempora. Similique voluptatem perspiciatis fuga dicta quaerat error.Rerum sint omnis nobis eos eveniet. Ratione voluptate deleniti officiis molestiae. Laboriosam quo autem adipisci aliquid et et.<br><br></div>', NULL, '2023-07-01 07:07:03', '2023-07-07 22:47:06'),
(5, 1, 1, 'Et recusandae dolor nihil.', 'et-soluta-distinctio-sit-voluptates', '230708054715.jpg', 'Est labore necessitatibus facilis eos non sit. Dolorem sit possimus qui inventore culpa excepturi sed sunt. Voluptas et et officia cum aliquid.Accusam...', '<div>Est labore necessitatibus facilis eos non sit. Dolorem sit possimus qui inventore culpa excepturi sed sunt. Voluptas et et officia cum aliquid.Accusamus eius natus ex debitis nihil sequi. Voluptas dolores expedita eveniet autem. Neque et et recusandae voluptas.Sed sunt porro esse doloremque accusamus magni. Dolor cum quis et aut. Dolores assumenda aut eos ea eos sit.Quod modi aut tenetur et ad. Et et veritatis impedit fugit soluta laboriosam. Non eum dolore similique.Et officiis ex dicta tempore quia aut. Unde sit aut aliquam et illo. Ullam consequatur autem nobis temporibus assumenda officia. Et non omnis nemo id dolor. Magnam perferendis laborum molestiae cumque.Odio corrupti cupiditate aut repellat id omnis. Hic laborum tempore rem praesentium consequatur nostrum. Libero quam accusamus est ut. Ad saepe est ea harum est.Distinctio assumenda eum omnis ullam. Dolore rem quis sed rem. Sed id nihil non alias quia quisquam asperiores. Aut consequatur in sunt velit temporibus enim veniam.<br><br></div>', NULL, '2023-07-01 07:07:03', '2023-07-07 22:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Birthday', 'birthday', '2023-07-01 07:07:02', '2023-07-01 07:07:02'),
(2, 'Traveling', 'traveling', '2023-07-01 07:07:02', '2023-07-01 07:07:02');

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Quisquam rem qui.', '230708054449.jpg', '<div>Minima vitae sed eum cupiditate totam sint cum enim rerum officia.</div>', '2023-07-01 07:07:02', '2023-07-07 22:44:49'),
(2, 'Et autem.', '230708054500.jpg', '<div>Earum at qui laudantium est qui sit ut est illum ab sunt quam.</div>', '2023-07-01 07:07:02', '2023-07-07 22:45:00'),
(3, 'Voluptas nostrum.', '230708054509.jpg', '<div>Eveniet ab deserunt consequatur a rerum.</div>', '2023-07-01 07:07:02', '2023-07-07 22:45:09'),
(4, 'Ut pariatur et.', '230708054520.jpg', '<div>Omnis omnis aliquam voluptate beatae eius quas.</div>', '2023-07-01 07:07:02', '2023-07-07 22:45:20'),
(5, 'Est molestiae.', '230708054530.jpg', '<div>Delectus itaque quae voluptas voluptas voluptas voluptatibus qui.</div>', '2023-07-01 07:07:02', '2023-07-07 22:45:30'),
(6, 'test', '230708054555.jpg', '<div>test</div>', '2023-07-07 22:45:55', '2023-07-07 22:45:55'),
(7, 'test', '230708055234.jpg', '<div>test</div>', '2023-07-07 22:52:34', '2023-07-07 22:52:34'),
(8, 'test', '230708055304.jpg', '<div>test</div>', '2023-07-07 22:53:04', '2023-07-07 22:53:04');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_13_074219_create_categories_table', 1),
(6, '2023_06_13_090858_create_blog_table', 1),
(7, '2023_06_14_130724_create_gallery_table', 1);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pajar Padillah', 'pajar@gmail.com', 'pajar', '230703120440.jpg', NULL, '$2y$10$cQfZopxzMQmX4DFsz7nfyuw9ME4U4S9/UGmJAYWPL93BCtxUnRpxe', NULL, '2023-07-01 07:07:02', '2023-07-07 22:48:02'),
(2, 'Cindy Yuniasaki', 'cindy@gmail.com', 'cindy', '230703120658.jpg', NULL, '$2y$10$i/uzOWXN8nCcL/f4OXOF9e8CwBvpN.ejQCZmxV2rTWN7f.nnYCAae', NULL, '2023-07-01 07:07:02', '2023-07-03 05:06:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
