-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2018 at 05:48 PM
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
  `kategori` int(2) NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengunjung` int(11) DEFAULT NULL,
  `tampilkan` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `kategori`, `isi`, `penulis`, `gambar`, `pengunjung`, `tampilkan`, `created_at`, `updated_at`) VALUES
(1, 'Negeri diatas Awan', 3, 'keren gan pemandangan negeri diats awan yang sangat fenomenal ya guuyys', 'Admin', '01 (small).jpg', 3, 1, '2018-04-05 01:03:49', '2018-06-01 19:40:20'),
(4, 'Gadjah Mada', 0, 'merupakan salah satu universitas terbaik di indonesia yang memproklamirkan program KKN-PPM. semoga dana semakin banyak dan selalu enjoy', 'Admin', '02 (small).jpg', 0, 0, '2018-04-05 01:31:48', '2018-04-05 01:32:24'),
(5, 'Perjalanan Menuju Tomia', 0, 'Perjalanan ini dimulai dengan mengendarai bus menuju surabaya aslinya bandara juanda surabaya ya gaes. karena biar lebih murah. \r\n\r\ndan ini adalah foto ketika sudah sampai di laut tomia yang sangat membahana. mantap jiwa', 'Admin', '03 (small).jpg', 1, 0, '2018-04-06 19:33:42', '2018-04-24 19:05:01'),
(6, 'Bulan sabit di pantai Dete', 0, 'Melihat Bulan Sabit merupakan kegiatan yang sangat mengasikkkan untuk mengusi sore hari  untuk menyambut datangnya malam kelabu. disana suasana hangat dan sejuk oke punya pokoknya', 'Admin', '04 (small).jpg', 2, 0, '2018-04-18 08:10:15', '2018-05-11 23:18:55'),
(7, 'Berjemur di pantai Kulati', 3, 'Dengan panas yang extra hot menjadikan kegiatan mengeringkan baju menjadi sangat cepat. sangat worth it untuk yang suka berjemur haha', 'Admin', '05 (small).jpg', 2, 1, '2018-04-18 08:14:07', '2018-06-01 01:05:46'),
(8, 'Awan di Langit Tomia', 0, 'Awan yang sangat cerah menyelimuti perjalanan kami menuju pulai terbaik seindonesia. Perjalanan yang baru ertama kali kami tempuh ini sangat sangat istimewa', 'Admin', '06 (small).jpg', 0, 0, '2018-04-18 08:23:19', '2018-05-13 06:38:43'),
(9, 'Lautku sangat kaya', 3, 'Laut indonesia sangat kaya dalam hal apapun semua orang suka main ke laut untuk mengusir kebosanana pekerjaan. Laut su,ner ppritein yang sangat baik bagi nusa bangsa dan agama, saya sangat senang bisa melihat laut indonesia yang amat kaya.', 'Edward', '07 (small).jpg', 0, 1, '2018-04-23 16:03:01', '2018-05-27 01:31:47'),
(10, 'Samudra nan Indah', 2, 'Laut indonesia sangat kaya dalam hal apapun semua orang suka main ke laut untuk mengusir kebosanana pekerjaan. Laut su,ner ppritein yang sangat baik bagi nusa bangsa dan agama, saya sangat senang bisa melihat laut indonesia yang amat kaya.', 'Bagus', '08 (small).jpg', NULL, 1, '2018-04-23 16:03:27', '2018-06-01 19:50:02'),
(11, 'Indonesia Negeri Kelautan', 1, 'Laut indonesia sangat kaya dalam hal apapun semua orang suka main ke laut untuk mengusir kebosanana pekerjaan. Laut su,ner ppritein yang sangat baik bagi nusa bangsa dan agama, saya sangat senang bisa melihat laut indonesia yang amat kaya.', 'Jessica', '09 (small).jpg', 1, 1, '2018-04-23 16:04:01', '2018-05-27 01:17:46'),
(13, 'Artikel Keren Oleh Pak B', 3, 'Matahari sangat bermanfaat untuk kehidupan. Matahari sangat bermanfaat untuk kehidupan Matahari sangat bermanfaat untuk kehidupan Matahari sangat bermanfaat untuk kehidupan Matahari sangat bermanfaat untuk kehidupanMatahari sangat bermanfaat untuk kehidupanMatahari sangat bermanfaat untuk kehidupan Matahari sangat bermanfaat untuk kehidupan Matahari sangat bermanfaat untuk kehidupan', 'bayu', '0bb871bb77e0889d000da63f79458e55.gif', 2, 1, '2018-05-23 19:34:45', '2018-06-01 01:33:19'),
(14, 'Artikel Keren Oleh Pak B2', 2, 'ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes. ini sudah malam gaes.', 'bayu', '203b6b89158f46ac036a151688fa8326.jpg', NULL, 0, '2018-05-23 19:38:00', '2018-05-25 01:51:16'),
(16, 'UGM Yogyakarta', 0, 'Kampus setuja umat dengan segala keberagaman budayanya menjadikan daya tarik tersendir untuk semua mahasiswa Kampus setuja umat dengan segala keberagaman budayanya menjadikan daya tarik tersendir untuk semua mahasiswa Kampus setuja umat dengan segala keberagaman budayanya menjadikan daya tarik tersendir untuk semua mahasiswa Kampus setuja umat dengan segala keberagaman budayanya menjadikan daya tarik tersendir untuk semua mahasiswa', 'admin', '5528d69c6ea834dd7a8b456c.jpeg', 1, 1, '2018-06-01 19:34:23', '2018-06-01 19:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `asu`
--

CREATE TABLE `asu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `desas`
--

CREATE TABLE `desas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panj` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desas`
--

INSERT INTO `desas` (`id`, `nama`, `sing`, `panj`, `maps`, `created_at`, `updated_at`) VALUES
(1, 'Dete', 'Deskripsi desa, luas wilayah, penduduk, dan kondisi lingkungan sekitar alam Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at consequuntur harum dicta fuga officiis aut expedita doloremque alias accusamus dolore.', 'Deksripsi lebih lanjut, Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus voluptatem, delectus expedita assumenda dolorem adipisci. Repellat sed fuga architecto consequuntur nesciunt? Libero temporibus nulla perspiciatis quaerat recusandae soluta? Veniam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo quos, tenetur libero porro sed omnis commodi dolores repudiandae qui perspiciatis sint est quis error consequuntur similique reprehenderit, illo cumque ratione.\r\n\r\nDeskripsi desa, luas wilayah, penduduk, dan kondisi lingkungan Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at consequuntur harum dicta fuga officiis aut expedita doloremque alias accusamus dolore.', 'main.svg', '2018-05-31 21:46:56', '2018-05-31 22:05:07'),
(2, 'Tiroau', 'Deskripsi desa, luas wilayah, penduduk, dan kondisi lingkungan Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at consequuntur harum dicta fuga officiis aut expedita doloremque alias accusamus dolore.', 'Deksripsi lebih lanjut, Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus voluptatem, delectus expedita assumenda dolorem adipisci. Repellat sed fuga architecto consequuntur nesciunt? Libero temporibus nulla perspiciatis quaerat recusandae soluta? Veniam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo quos, tenetur libero porro sed omnis commodi dolores repudiandae qui perspiciatis sint est quis error consequuntur similique reprehenderit, illo cumque ratione.\r\n\r\nDeskripsi desa, luas wilayah, penduduk, dan kondisi lingkungan Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at consequuntur harum dicta fuga officiis aut expedita doloremque alias accusamus dolore.', 'main.svg', '2018-05-31 22:08:29', '2018-05-31 22:08:29'),
(3, 'Kulati', 'Deskripsi desa, luas wilayah, penduduk, dan kondisi lingkungan Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at consequuntur harum dicta fuga officiis aut expedita doloremque alias accusamus dolore.', 'Deksripsi lebih lanjut, Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloribus voluptatem, delectus expedita assumenda dolorem adipisci. Repellat sed fuga architecto consequuntur nesciunt? Libero temporibus nulla perspiciatis quaerat recusandae soluta? Veniam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo quos, tenetur libero porro sed omnis commodi dolores repudiandae qui perspiciatis sint est quis error consequuntur similique reprehenderit, illo cumque ratione.\r\n\r\nDeskripsi desa, luas wilayah, penduduk, dan kondisi lingkungan Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at consequuntur harum dicta fuga officiis aut expedita doloremque alias accusamus dolore.', 'main.svg', '2018-05-31 22:08:57', '2018-05-31 22:08:57');

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
(10, '08.jpg', '08 (Small).jpg', 'Galeri Foto 8', NULL, '2018-04-17 04:20:05', '2018-04-17 04:20:05'),
(11, '10.jpg', '10.jpg', 'UGM Yogyakarta', NULL, '2018-06-01 19:26:45', '2018-06-01 19:26:45');

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
(3, '2018_03_03_080504_artikels', 2),
(4, '2018_04_06_121817_paket', 3),
(5, '2018_04_14_025938_db_slider', 4),
(6, '2018_04_15_020410_db_galeri', 5),
(7, '2018_04_15_043635_db_fitur', 6),
(8, '2018_04_15_043807_db_plan', 6),
(21, '2014_10_12_000000_create_users_table', 7),
(22, '2014_10_12_100000_create_password_resets_table', 7),
(23, '2018_05_12_071042_order', 8),
(24, '2018_05_14_083931_create_roles_table', 9),
(25, '2018_05_14_084325_add_column_role_id_to_users', 9),
(26, '2018_06_01_030909_desas', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pembelian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket` int(2) NOT NULL,
  `nama_pemesan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(2) NOT NULL,
  `tgl_keberangkatan` date NOT NULL,
  `status` int(2) NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_pembelian`, `id_paket`, `nama_pemesan`, `email`, `no_hp`, `jumlah`, `tgl_keberangkatan`, `status`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'UWx16', 12, 'Melwa febian', 'melwa@gmail.com', '08123457612345', 2, '2018-07-21', 0, NULL, '2018-05-12 00:32:18', '2018-05-12 00:32:18'),
(2, 'L8rIR', 6, 'awit', 'ashil@ashil.me', '08123457612345', 1, '2018-05-10', 2, '1194985162469795488bus1_jarno_vasamaa_01.svg.hi.png', '2018-05-14 07:13:35', '2018-06-01 17:16:42'),
(3, 'SEK9d', 7, 'hafizh', 'hafizh@gmail.com', '0984112118', 2, '2018-05-31', 2, '203b6b89158f46ac036a151688fa8326.jpg', '2018-05-20 22:26:13', '2018-06-07 02:12:42'),
(4, '17reA', 12, 'Nuwas', 'nuwasdzarrin3@gmail.com', '098755412', 1, '2018-05-26', 0, NULL, '2018-05-22 02:29:54', '2018-05-22 02:29:54'),
(5, 'zRs0h', 6, 'Tantowi', 'tantowidz@gmail.com', '08785858888', 3, '2018-07-28', 0, NULL, '2018-05-22 03:09:27', '2018-05-22 03:09:27'),
(6, 'aO68J', 7, 'Nanda', 'nanda@gmail.com', '0984112118', 3, '2018-07-20', 0, NULL, '2018-05-29 23:55:19', '2018-05-29 23:55:19'),
(7, 'FlpWx', 6, 'Kusun Sanjaya', 'ichsan@gmail.com', '0984112118', 5, '2018-08-25', 2, '5847eb8bcef1014c0b5e4851.png', '2018-06-01 16:52:43', '2018-06-07 02:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` int(10) UNSIGNED NOT NULL,
  `paket` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(50) NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `paket`, `fasilitas`, `harga`, `deskripsi`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Barcelona', 'Barcelona STadium, Hotel Barcelona Keren, Jalan jalan di pusat pemerintahan', 2000000, 'Deskripsi 1, Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, assumenda? At placeat nesciunt sapiente aperiam voluptas quos velit.', NULL, NULL, NULL),
(7, 'Goa', 'Jalan jalan ke pulau terpencil goa, Mengina selama 1 bulan, makan okee.', 1000000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, assumenda? At placeat nesciunt sapiente aperiam voluptas quos velit.', NULL, NULL, NULL),
(12, 'Paris', 'eifel, museum nasional paris, airbus inc, menginap hoteal bintang 5', 50000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, assumenda? At placeat nesciunt sapiente aperiam voluptas quos velit.', NULL, '2018-04-17 20:54:15', '2018-04-17 21:01:48');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `full_name`, `created_at`, `updated_at`) VALUES
(1, 'super_admin', 'Super Admin', '2018-05-14 01:47:58', '2018-05-14 01:47:58'),
(2, 'admin', 'Admin', '2018-05-14 01:47:58', '2018-05-14 01:47:58'),
(3, 'user', 'User', '2018-05-14 01:47:58', '2018-05-14 01:47:58');

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
  `role_id` int(11) NOT NULL DEFAULT '3',
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

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@gmail.com', '$2y$10$HetXxxsQL7HZK4CUTX/5W.08t6g7mdQ4qctlXvNPyZvjzA5B7Ql82', '92odbzOXakNdGD5SJjZXyVTANSmvqbAjDij0mWw0LMmSQjik4VzuQdpjvUiX', '2018-05-12 00:28:45', '2018-05-12 00:28:45'),
(2, 3, 'edward', 'edward@gmail.com', '$2y$10$Be70Qtg3sL8kVVQBxvdOdOJcjhcpWUHnHF.K7hTninvrfGNjxumGe', 'B1bzaBKWdNY5uv7TPIgIhPgk9YugLvOX7cGiCetwwtstzHTX4svbNAs8dU2f', '2018-05-14 01:56:45', '2018-05-14 01:56:45'),
(3, 3, 'kusun', 'kusun@gmail.com', '$2y$10$JM9gJDY12YbHKuqTSRcw1.khAUz01MxwUPkZY.1Od6YiC8OlFgTNO', '4vRkyLSpsOdh5SuKRo004y5ILnXd74u2LpSe9jAETsAYlPDZcjS8eFPAVHjp', '2018-05-23 17:09:19', '2018-05-23 17:09:19'),
(4, 3, 'bayu', 'bayu@gmail.com', '$2y$10$gsPZWAciIeb02wKpsDGVSu6o9X2lyczqDsPuk6pEsAPlfPw2dlBca', 'Hm8X3KqclriHbUbNCQ45BsEb3CLffx1LVa4OOcT53XNNtZqsZRJliEyKhsjM', '2018-05-23 17:36:58', '2018-05-23 17:36:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asu`
--
ALTER TABLE `asu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `asu_email_unique` (`email`);

--
-- Indexes for table `desas`
--
ALTER TABLE `desas`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_id_pembelian_unique` (`id_pembelian`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `asu`
--
ALTER TABLE `asu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `desas`
--
ALTER TABLE `desas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fiturs`
--
ALTER TABLE `fiturs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
