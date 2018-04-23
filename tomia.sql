-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2018 at 05:11 AM
-- Server version: 5.7.19
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tomia`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengunjung` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `isi`, `penulis`, `gambar`, `pengunjung`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Negeri diatas Awan', 'keren gan pemandangan negeri diats awan yang sangat fenomenal ya guuyys', 'Admin', '01 (small).jpg', 0, NULL, '2018-04-05 01:03:49', '2018-04-05 01:03:49'),
(4, 'Gadjah Mada', 'merupakan salah satu universitas terbaik di indonesia yang memproklamirkan program KKN-PPM. semoga dana semakin banyak dan selalu enjoy', 'Admin', '02 (small).jpg', 0, NULL, '2018-04-05 01:31:48', '2018-04-05 01:32:24'),
(5, 'Perjalanan Menuju Tomia', 'Perjalanan ini dimulai dengan mengendarai bus menuju surabaya aslinya bandara juanda surabaya ya gaes. karena biar lebih murah. \r\n\r\ndan ini adalah foto ketika sudah sampai di laut tomia yang sangat membahana. mantap jiwa', 'Admin', '03 (small).jpg', 0, NULL, '2018-04-06 19:33:42', '2018-04-06 19:35:38'),
(6, 'Bulan sabit di pantai Dete', 'Melihat Bulan Sabit merupakan kegiatan yang sangat mengasikkkan untuk mengusi sore hari  untuk menyambut datangnya malam kelabu. disana suasana hangat dan sejuk oke punya pokoknya', 'Admin', '04 (small).jpg', NULL, NULL, '2018-04-18 08:10:15', '2018-04-18 08:12:51'),
(7, 'Berjemur di pantai Kulati', 'Dengan panas yang extra hot menjadikan kegiatan mengeringkan baju menjadi sangat cepat. sangat worth it untuk yang suka berjemur haha', 'Admin', '05 (small).jpg', NULL, NULL, '2018-04-18 08:14:07', '2018-04-18 08:14:07'),
(8, 'Awan di Langit Tomia', 'Awan yang sangat cerah menyelimuti perjalanan kami menuju pulai terbaik seindonesia. Perjalanan yang baru ertama kali kami tempuh ini sangat sangat istimewa', 'Admin', '06 (small).jpg', NULL, NULL, '2018-04-18 08:23:19', '2018-04-18 08:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `fiturs`
--

CREATE TABLE `fiturs` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fiturs`
--

INSERT INTO `fiturs` (`id`, `judul`, `deskripsi`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Plan Your Trip', 'Read about practical information on how to get to Greenland, how to get around, when to travel or where to stay in here.', 'air-transport.svg', NULL, '2018-04-15 01:52:30', '2018-04-17 21:38:20'),
(4, 'Destinations', 'Explore the regions and towns around Greenland and dig deeper into the experiences in each destination.', 'island-with-palm-trees.svg', NULL, '2018-04-15 01:53:14', '2018-04-15 01:53:14'),
(5, 'Things To Do', 'Browse culture and nature (outdoor, hunting, fishing, cruises) related activities, as well as combination of both types.', 'swimming-silhouette.svg', NULL, '2018-04-14 21:56:43', '2018-04-14 21:56:43'),
(6, 'About Tomia', 'All about art, music, history, as well as animals, climate change and other interesting information about Greenland.', 'open-book.svg', NULL, '2018-04-15 01:54:15', '2018-04-15 01:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `gambar`, `thumbnail`, `judul`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, '01.jpg', '01 (Small).jpg', 'Galeri Foto 1', NULL, '2018-04-17 04:17:12', '2018-04-17 04:17:12'),
(4, '02.jpg', '02 (Small).jpg', 'Galeri Foto 2', NULL, '2018-04-17 04:17:36', '2018-04-17 04:17:36'),
(5, '03.jpg', '03 (Small).jpg', 'Galeri Foto 3', NULL, '2018-04-17 04:17:59', '2018-04-17 04:17:59'),
(6, '04.jpg', '04 (Small).jpg', 'Galeri Foto 4', NULL, '2018-04-17 04:18:20', '2018-04-17 04:18:20'),
(7, '05.jpg', '05 (Small).jpg', 'Galeri Foto 5', NULL, '2018-04-17 04:18:47', '2018-04-17 04:18:47'),
(8, '06.jpg', '06 (Small).jpg', 'Galeri Foto 6', NULL, '2018-04-17 04:19:19', '2018-04-17 04:19:19'),
(9, '07.jpg', '07 (Small).jpg', 'Galeri Foto 7', NULL, '2018-04-17 04:19:45', '2018-04-17 04:19:45'),
(10, '08.jpg', '08 (Small).jpg', 'Galeri Foto 8', NULL, '2018-04-17 04:20:05', '2018-04-17 04:20:05');

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
(3, '2018_03_03_080504_artikels', 2),
(4, '2018_04_06_121817_paket', 3),
(5, '2018_04_14_025938_db_slider', 4),
(6, '2018_04_15_020410_db_galeri', 5),
(7, '2018_04_15_043635_db_fitur', 6),
(8, '2018_04_15_043807_db_plan', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` int(10) UNSIGNED NOT NULL,
  `paket` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `paket`, `fasilitas`, `harga`, `deskripsi`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Barcelona', 'Barcelona STadium, Hotel Barcelona Keren, Jalan jalan di pusat pemerintahan', '2.000.000', 'Deskripsi 1, Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, assumenda? At placeat nesciunt sapiente aperiam voluptas quos velit.', NULL, NULL, NULL),
(7, 'Goa', 'Jalan jalan ke pulau terpencil goa, Mengina selama 1 bulan, makan okee.', '1.000.000', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, assumenda? At placeat nesciunt sapiente aperiam voluptas quos velit.', NULL, NULL, NULL),
(12, 'Paris', 'eifel, museum nasional paris, airbus inc, menginap hoteal bintang 5', '50.000.000', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, assumenda? At placeat nesciunt sapiente aperiam voluptas quos velit.', NULL, '2018-04-17 20:54:15', '2018-04-17 21:01:48');

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `judul`, `deskripsi`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'How To Get There', 'Commercial airlines are the only way for travelers to get to Greenland, served by airports in Denmark and Iceland unless you arrive with a cruise ship. gambar gak', 'air-transport-white.svg', NULL, '2018-04-15 01:56:46', '2018-04-17 21:58:59'),
(2, 'Culinary Destination', 'Read about foot, traditional foot and best restaurant that tie the country together in a web of sea and air connections operated by both large and small scale operators.', 'plate-fork-and-knife.svg', NULL, '2018-04-15 01:58:04', '2018-04-15 01:58:04'),
(3, 'Where To Sleep', 'Read about accommodation possibilities in Greenland - where is it possible to stay for longer or shorter period of time.', 'bed-zzz.svg', NULL, '2018-04-15 01:59:19', '2018-04-15 01:59:19');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `gambar`, `judul`, `deskripsi`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, '01.jpg', 'Judul Satu', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita rerum error ipsam nam? Consectetur illum ea ipsa quod optio nostrum tempora illo. Dicta atque sapiente quaerat alias quia sint necessitatibus? bagus', NULL, '2018-04-17 04:13:08', '2018-04-17 21:27:31'),
(4, '02.jpg', 'Judul Dua', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita rerum error ipsam nam? Consectetur illum ea ipsa quod optio nostrum tempora illo. Dicta atque sapiente quaerat alias quia sint necessitatibus?', NULL, '2018-04-17 04:13:26', '2018-04-17 04:13:26'),
(5, '03.jpg', 'Judul Tiga', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita rerum error ipsam nam? Consectetur illum ea ipsa quod optio nostrum tempora illo. Dicta atque sapiente quaerat alias quia sint necessitatibus?', NULL, '2018-04-17 04:13:53', '2018-04-17 04:13:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$/oSsdxO2DvU1xw9hiMR.Q.vVBVdJAahJlgUs0oqcgjaCOm3zLKbfK', 'RGJw0gRnkMEZnTOlajFdFN6oemPNqh7fuBJOKreIVlbLMtOhBiYobG01T7YS', '2018-04-05 00:25:30', '2018-04-05 00:25:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fiturs`
--
ALTER TABLE `fiturs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fiturs`
--
ALTER TABLE `fiturs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
