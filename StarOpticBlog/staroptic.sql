-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 08:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staroptic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `name`, `route`, `icon`) VALUES
(24, 'Kontrolna tabla', 'admin.dash', 'fa-solid fa-gauge'),
(25, 'Postovi i komentari', 'admin.comments', 'fa-brands fa-blogger-b'),
(26, 'Korisnici', 'admin.users.registered', 'fa-solid fa-users'),
(27, 'Poruke', 'admin.contact', 'fa-solid fa-inbox'),
(28, 'Aktivnosti', 'admin.activity', 'fa-solid fa-heart-pulse'),
(29, 'Resetovane lozinke', 'admin.users.forgotten', 'fa-solid fa-key'),
(30, 'Kreiranje admina', 'admin.create', 'fa-solid fa-user-plus'),
(31, 'Kreiranje postova', 'post.create', 'fa-solid fa-circle-plus'),
(32, 'Kreiranje kategorija', 'categories.create', 'fa-solid fa-square-plus'),
(33, 'Početna', 'home', 'fa-solid fa-home'),
(34, 'Odjavi se', 'logout', 'fa-solid fa-right-from-bracket');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'DIOPTRIJSKE NAOČARE', '2022-03-13 12:50:56', '2022-03-13 12:50:56'),
(7, 'SUNČANE NAOČARE', '2022-03-13 12:51:02', '2022-03-13 12:51:02'),
(8, 'ZAŠTITA', '2022-03-13 12:51:08', '2022-03-13 12:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kristina', 'Test', 'kimap963@gmail.com', '0616134441', 'Test', '2022-03-13 14:04:36', '2022-03-13 14:04:36'),
(2, 'Test', 'Test', 'test123@ict.edu.rs', '0616134441', 'Test Poruka', '2022-03-13 15:46:52', '2022-03-13 15:46:52'),
(3, 'Test', 'Test', 'test123@ict.edu.rs', '0654646465', 'Poruka', '2022-03-13 15:48:36', '2022-03-13 15:48:36');

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
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naslov` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `podnaslov` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slika` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `naslov`, `podnaslov`, `text`, `slika`, `alt`, `updated_at`, `created_at`) VALUES
(1, 'SUNČANE NAOČARE', 'Da li su sunčane naočare samo modni detalj?', 'Da li samo pratimo modne trendove ili znamo zašto su baš u ovom trenutku aktuelni određeni oblici i boje?', '1.jpg', 'sunglasses', '2022-03-12 00:40:21', '2022-03-12 00:40:21'),
(2, 'DIOPTRIJSKE NAOČARE', 'Naočare sa najviše benefita', 'Ako imamo problem sa vidom, bez njih ne možemo zamisliti dan', '2.jpg', 'dioptricglasses', '2022-03-12 00:40:21', '2022-03-12 00:40:21'),
(3, 'ZAŠTITA', 'Veliki broj različitih zaštitinih slojeva', 'Više nego ikada pre naše oči su izložene nepovoljnim uticajima kako iz prirode, tako i od tehnologije koja je svuda oko nas.', '3.jpg', 'modernglasses', '2022-03-12 00:40:21', '2022-03-12 00:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `route`) VALUES
(1, 'Početna', 'home'),
(2, 'Blog', 'posts'),
(3, 'Kontakt', 'contact'),
(4, 'Autor', 'author');

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
(1, '2022_03_04_182926_create_roles_table', 1),
(2, '2016_10_12_000000_create_users_table', 2),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(4, '2019_08_19_000000_create_failed_jobs_table', 3),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(6, '2022_03_01_000106_create_homes_table', 3),
(7, '2022_03_01_012025_create_menus_table', 3),
(8, '2022_03_01_094221_create_contacts_table', 3),
(9, '2022_03_09_000000_create_categories_table', 4),
(10, '2022_03_04_182342_create_posts_table', 5),
(11, '2022_03_06_160147_create_admin_menus_table', 5),
(12, '2022_03_09_213010_create_comments_table', 5),
(13, '2022_03_11_155017_create_password_resets_table', 6),
(14, '2022_03_12_130523_add_post_status_to_post_table', 7),
(15, '2022_03_12_173305_create_user_activity_logs_table', 8),
(16, '2022_03_11_173305_create_user_activity_logs_table', 9),
(17, '2022_03_10_173305_create_user_activity_logs_table', 10),
(18, '2022_03_09_173305_create_user_activity_logs_table', 11),
(19, '2022_03_08_152816_create_activity_log_table', 12),
(20, '2022_03_08_173305_create_user_activity_logs_table', 13),
(21, '2022_03_11_173306_create_user_activity_logs_table', 14),
(22, '2022_03_11_173307_create_user_activity_logs_table', 15),
(23, '2022_03_11_173317_create_user_activity_logs_table', 16),
(24, '2022_03_11_173327_create_user_activity_logs_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kimap963@gmail.com', '$2y$10$oynrhntaVdodBrL3pjCyZu/6X7YK9J.vBXW4WpoFWNUXG7TRj/csW', '2022-03-13 16:05:29');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_text1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_text2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_photo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_count` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Neobjavljeno'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `main_text`, `subtitle`, `subtitle_text1`, `subtitle_text2`, `quote`, `main_photo`, `alt`, `visit_count`, `user_id`, `category_id`, `created_at`, `updated_at`, `status`) VALUES
(17, 'Zašto je važno da nosimo naočare?', '<p>Dinamika i zahtevi svakodnevnog života doneli su nam potrebu za boljim i kvalitetnijim vidom.&nbsp;</p>\r\n\r\n<p>Često čujemo: &quot;Odjednom mi se desilo da slabije vidim!&quot;</p>\r\n\r\n<p>Naravno, može se desiti da kvalitet vida odjednom padne, ali na sreću to su retke situacije i zahtevaju hitno javljanje oftalmologu.</p>\r\n\r\n<p>O tome će Vam pisati&nbsp; kasnije doktor.</p>', 'Odjednom slabije vidim!', '<p>Manje opasan, ali ne manje važan pad vida odjednom u stvari nikada ne dolazi odjednom, samo ga mi osetimo i doživimo tako.</p>\r\n\r\n<p>Za&scaron;to imamo takav utisak?</p>\r\n\r\n<p>Vid polako slabi, ili već imamo malu dioptriju, a nismo toga svesni.</p>\r\n\r\n<p>Mi ustvari gledamo mozgom, a oči sprovode informacije do njega.</p>\r\n\r\n<p>Ni&scaron;ta nas ne boli ako malo mutnije vidimo, tj. mozak prihvata takvu sliku.</p>\r\n\r\n<p>Sa svakim&nbsp; narednim danom: vožnja, gledanje u kompjuter, telefon, vi&scaron;esatni rad na blizu...</p>', '<p>Sa svakim&nbsp; narednim danom: vožnja, gledanje u kompjuter, telefon, vi&scaron;esatni rad na blizu...</p>\r\n\r\n<p>Učiniće da na&scaron;e oko bude sve umornije u borbi da mozgu po&scaron;alje &scaron;to jasniju sliku.</p>\r\n\r\n<p>I onda, odjednom, umori se...Vi&scaron;e nema nazad.</p>', NULL, '1647180445_1.jpg', 'blog post', 3, 4, 6, '2022-03-13 13:07:25', '2022-03-13 13:15:39', 'Objavljeno'),
(18, 'Dioptrijski ram kao modni detalj', '<p>Utisak koji smo stekli tokom dugogodi&scaron;njeg rada je da često klijenti biraju ram koji je u trendu ne želeći da uzmu u obzir funkcionalnost izabranog rama.</p>\r\n\r\n<p>Pa onda dođemo u situaciju da je ram ili preveliki ili premali i ne odgovara nam.</p>', 'Trend i funkcionalnost', '<p>Dizajneri ramova ne biraju slučajno oblike i veličine koji će biti u trendu.</p>\r\n\r\n<p>Oko kao i koža oko njega je osetljiva, tj. poenta je za&scaron;tititi kako oko tako i taj deo lica.</p>\r\n\r\n<p>Nije uvek moguće uskladiti te dve stvari zato &scaron;to niko nije isti.</p>', NULL, NULL, '1647180911_2.jpg', 'blog post', 3, 4, 6, '2022-03-13 13:15:11', '2022-03-13 16:54:25', 'Objavljeno'),
(19, 'Ram kao detalj na licu', '<p>Prvo kada nekog pogledamo vidimo lice i sve &scaron;to je na njemu.</p>\r\n\r\n<p>Naravno, oči su na prvom mestu. &hearts;</p>', 'Biranje rama po uzoru?', '<p>Kada vidimo slike na modelima uvek pomislimo kako njima divno stoje.</p>\r\n\r\n<p>A zaboravljamo da sve slike prolaze kroz filtere i da se fotografije prave iz najboljeg ugla.</p>\r\n\r\n<p>Vi ste realna slika i bitno je da se sebi sviđate kada se pogledate u ogledalo.</p>', NULL, 'Pravilno odabran ram ima moć da istakne boju i oblik očiju.', '1647181240_3.jpg', 'blog post', 3, 4, 6, '2022-03-13 13:20:40', '2022-03-13 16:54:22', 'Objavljeno'),
(20, 'Zaštita ili moda?', '<p>Kada biramo sunčane naočare, možemo se igrati i sa veličinama i bojama. Danas, pa skoro sve sunčane naočare imaju za&scaron;titu, naravno bolje za&scaron;tite ko&scaron;taju vi&scaron;e.</p>', 'Zašto koštaju više?', '<p>Sunčano staklo koje ima vi&scaron;e nivoa za&scaron;tita zahteva bolje sirovine, duži period izrade koji im pruža kvalitet.</p>\r\n\r\n<p>Sunčani ramovi boljeg kvaliteta su takođe skuplji, a cenu im dodaje i brend.</p>', NULL, NULL, '1647181509_4.jpg', 'blog post', 5, 4, 7, '2022-03-13 13:25:09', '2022-03-13 16:54:19', 'Objavljeno'),
(21, 'Koliko boja rama ide uz karakter?', '<p>Ljudi koji imaju neutralni stil najče&scaron;će biraju naočare za svaku priliku, tj. neutralne.<br />\r\nOni koji vole da se ističu izabraće upadljiv ram da pokažu svoju ličnost.</p>', 'Koje boje idu uz sve?', '<p><strong>Crna</strong> - kao boja rama koju možete nositi i uz patike i uz odelo</p>\r\n\r\n<p><strong>Bež</strong> - slaže se sa bojom lica i neupadljiva je</p>\r\n\r\n<p><strong>Crvena</strong> - kao ba&scaron; dobar detalj</p>\r\n\r\n<p><strong>Žuta, zelena</strong> - za ba&scaron; hrabre</p>', NULL, NULL, '1647181909_7.jpg', 'blog post', 21, 4, 6, '2022-03-13 13:31:49', '2022-03-13 17:06:04', 'Objavljeno'),
(22, 'Dioptrijske naočare nisu zaštitne naočare', '<p>O&scaron;tećenja na dioptrijskim staklima često nastaju zato &scaron;to ih koristimo pri poslovima koji mogu izazvati fizička o&scaron;tećenja.</p>', 'Zaštitne maske', '<p>Postoje za&scaron;titne maske koje imaju dodatak u koji se mogu ugraditi dioptrijska stakla i njih koristimo pri radu.</p>', NULL, 'Dioptrijska stakla nisu čudesni materijali koji su neuništivi.', '1647182302_6.jpg', 'blog post', 12, 4, 8, '2022-03-13 13:38:22', '2022-03-13 16:59:49', 'Objavljeno'),
(24, 'post za delete test', '<p>asdasdads</p>', 'sadasd', '<p>dsaasd</p>', '<p>dasasddas</p>', 'sadasd', '1647182826_5.jpg', 'blog post', 4, 4, 7, '2022-03-13 13:47:06', '2022-03-13 17:07:03', 'Neobjavljeno');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'Admin'),
(2, NULL, NULL, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `created_at`, `updated_at`, `role_id`, `remember_token`) VALUES
(4, 'Kristina', 'Glisovic', 'kimix', 'kimap963@gmail.com', '$2y$10$Qt5OWEWrwRicffc8c.9hNeS.VPg19rpPvm5tuwjDJaKPSKir5wmoG', NULL, NULL, '2022-03-12 00:05:50', '2022-03-13 09:26:55', 1, NULL),
(9, 'Testt', 'Testt', 'testt', 'test123@ict.edu.rs', '$2y$10$qODczcyOpUgoEHUFEf1NpehdMcEoHAas/fqmqx.M2kNnlMgO8DuCK', NULL, NULL, '2022-03-12 11:58:15', '2022-03-13 09:23:52', 2, NULL),
(10, 'Hristina', 'Adzic', 'h.adzic', 'hristina.adzic@gmail.com', '$2y$10$H1zg/TeFaLi8ayOP3gua6.AoltmFydLdsHGQ5hd/.mk8JPDoTireu', NULL, NULL, '2022-03-12 16:23:30', '2022-03-13 13:54:38', 2, NULL),
(16, 'User', 'ICT', 'UserICT', 'test1234@ict.edu.rs', '$2y$10$HEbpoD4CEObYq4hX2a58B.ktbYTGnXmRGwIQJdVb9kiEZd9.OSMLS', NULL, NULL, '2022-03-13 17:09:27', '2022-03-13 17:09:55', 2, NULL),
(17, 'Admin', 'ICT', 'AdminICT', 'adminict123@gmail.com', '$2y$10$iLx5yDD3Fu.U0EtOTCIFQujbXnlmZJIe1r3Wcd87g8Qu7gm5U64Xq', NULL, NULL, '2022-03-13 17:11:33', '2022-03-13 17:11:33', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_activity_logs`
--

CREATE TABLE `user_activity_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_activity_logs`
--

INSERT INTO `user_activity_logs` (`id`, `username`, `email`, `role_name`, `activity`, `created_at`) VALUES
(1, 'kimix', 'kimap9631@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 10:23:32'),
(2, 'testt', 'test123@ict.edu.rs', 'User', 'Izmenjena uloga', '2022-03-13 10:23:52'),
(3, 'kimix', 'kimap9631@gmail.com', 'User', 'Izmenjena uloga', '2022-03-13 10:26:55'),
(4, 'SAOIFASOI', 'kglisovic@yahoo.com', 'Admin', 'Izmenjena uloga', '2022-03-13 10:27:03'),
(5, 'SAOIFASOI', 'kglisovic@yahoo.com', 'Admin', 'Izmenjena uloga', '2022-03-13 10:28:18'),
(6, 'h.adzic', 'hristina.adzic@gmail.com', 'Admin', 'Izmenjena uloga', '2022-03-13 10:29:03'),
(7, 'SAOIFASOI', 'kglisovic@yahoo.com', 'User', 'Izmenjena uloga', '2022-03-13 10:29:07'),
(8, 'SAOIFASOI', 'kglisovic@yahoo.com', 'User', 'Izmenjena uloga', '2022-03-13 10:30:29'),
(9, 'SAOIFASOI', 'kglisovic@yahoo.com', 'Admin', 'Izmenjena uloga', '2022-03-13 10:30:33'),
(10, 'SAOIFASOI', 'kglisovic@yahoo.com', 'User', 'Izmenjena uloga', '2022-03-13 10:30:36'),
(11, 'SAOIFASOI', 'kglisovic@yahoo.com', 'Admin', 'Izmenjena uloga', '2022-03-13 10:31:06'),
(12, 'kimix', 'kimap9631@gmail.com', 'Admin', 'Komentarisao', '2022-03-13 14:47:51'),
(13, 'kimix', 'kimap9631@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 14:47:55'),
(14, 'userict', 'usertestictemail@gmail.com', 'User', 'Registrovan', '2022-03-13 14:48:27'),
(15, 'userict', 'usertestictemail@gmail.com', 'User', 'Prijavljen', '2022-03-13 14:48:57'),
(16, 'userict', 'usertestictemail@gmail.com', 'User', 'Komentarisao', '2022-03-13 14:49:25'),
(17, 'userict', 'usertestictemail@gmail.com', 'User', 'Komentarisao', '2022-03-13 14:49:33'),
(18, 'userict', 'usertestictemail@gmail.com', 'User', 'Izlogovan', '2022-03-13 14:49:42'),
(19, 'kimix', 'kimap9631@gmail.com', 'User', 'Prijavljen', '2022-03-13 14:51:39'),
(20, 'kimix', 'kimap9631@gmail.com', 'User', 'Izlogovan', '2022-03-13 14:51:43'),
(21, 'kimix', 'kimap9631@gmail.com', 'User', 'Prijavljen', '2022-03-13 14:51:45'),
(22, 'kimix', 'kimap9631@gmail.com', 'User', 'Izlogovan', '2022-03-13 14:53:16'),
(23, 'kimix', 'kimap9631@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 14:53:17'),
(24, 'adminICT', 'adminict@gmail.com', 'Admin', 'Registrovan', '2022-03-13 14:54:21'),
(25, 'h.adzic', 'hristina.adzic@gmail.com', 'User', 'Izmenjena uloga', '2022-03-13 14:54:38'),
(26, 'SAOIFASOI', 'kglisovic@yahoo.com', 'User', 'Izmenjena uloga', '2022-03-13 14:54:41'),
(27, 'kimix', 'kimap9631@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 15:02:58'),
(28, 'kimix', 'kimap963@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 15:03:48'),
(29, 'kimix', 'kimap963@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 15:04:51'),
(30, 'kimix', 'kimap963@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 15:51:18'),
(31, 'kimix', 'kimap963@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 16:21:17'),
(32, 'kimix', 'kimap963@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 16:30:46'),
(33, 'kimix', 'kimap963@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 16:37:28'),
(34, 'kimix', 'kimap963@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 16:38:47'),
(35, 'kimix', 'kimap963@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 16:51:30'),
(36, 'kimix', 'kimap963@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 16:55:28'),
(37, 'kimix', 'kimap963@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 16:55:39'),
(38, 'kimix', 'kimap963@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 17:10:24'),
(39, 'adminICT', 'adminict@gmail.com', 'Admin', 'Izmenjena uloga', '2022-03-13 17:20:02'),
(40, 'adminICT', 'adminict@gmail.com', 'User', 'Izmenjena uloga', '2022-03-13 17:20:04'),
(41, 'kimix', 'kimap963@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 17:44:37'),
(42, 'kimix', 'kimap963@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 17:59:57'),
(43, 'kimix', 'kimap963@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 18:00:11'),
(44, 'userict1', 'test1234@ict.edu.rs', 'User', 'Registrovan', '2022-03-13 18:01:20'),
(45, 'userict1', 'test1234@ict.edu.rs', 'User', 'Prijavljen', '2022-03-13 18:01:32'),
(46, 'userict1', 'test1234@ict.edu.rs', 'User', 'Komentarisao', '2022-03-13 18:04:32'),
(47, 'userict1', 'test1234@ict.edu.rs', 'User', 'Izlogovan', '2022-03-13 18:06:06'),
(48, 'userict1', 'test1234@ict.edu.rs', 'User', 'Prijavljen', '2022-03-13 18:06:09'),
(49, 'userict1', 'test1234@ict.edu.rs', 'User', 'Izlogovan', '2022-03-13 18:06:11'),
(50, 'kimix', 'kimap963@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 18:06:14'),
(51, 'userict', 'usertestictemail@gmail.com', 'User', 'Obrisan', '2022-03-13 18:07:44'),
(52, 'SAOIFASOI', 'kglisovic@yahoo.com', 'User', 'Obrisan', '2022-03-13 18:07:49'),
(53, 'userict1', 'test1234@ict.edu.rs', 'User', 'Obrisan', '2022-03-13 18:07:52'),
(54, 'UserICT', 'test1234@ict.edu.rs', 'Admin', 'Registrovan', '2022-03-13 18:09:27'),
(55, 'UserICT', 'test1234@ict.edu.rs', 'User', 'Izmenjena uloga', '2022-03-13 18:09:55'),
(56, 'adminICT', 'adminict@gmail.com', 'User', 'Obrisan', '2022-03-13 18:11:03'),
(57, 'AdminICT', 'adminict123@gmail.com', 'Admin', 'Registrovan', '2022-03-13 18:11:34'),
(58, 'kimix', 'kimap963@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 18:48:04'),
(59, 'UserICT', 'test1234@ict.edu.rs', 'User', 'Prijavljen', '2022-03-13 18:48:19'),
(60, 'UserICT', 'test1234@ict.edu.rs', 'User', 'Izlogovan', '2022-03-13 18:48:22'),
(61, 'AdminICT', 'adminict123@gmail.com', 'Admin', 'Prijavljen', '2022-03-13 18:48:36'),
(62, 'AdminICT', 'adminict123@gmail.com', 'Admin', 'Izlogovan', '2022-03-13 18:48:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `homes_naslov_unique` (`naslov`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_title_unique` (`title`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_activity_logs`
--
ALTER TABLE `user_activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_activity_logs`
--
ALTER TABLE `user_activity_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
