-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 02:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meet` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(999) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maps_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `maps_3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `logo`, `icon`, `name_1`, `name_2`, `name_3`, `meet`, `service`, `desk_1`, `desk_2`, `desk_3`, `alamat_1`, `alamat_2`, `alamat_3`, `maps_1`, `maps_2`, `maps_3`, `created_at`, `updated_at`) VALUES
(1, 'logoMMF.png', 'iconMMF.png', 'PT Merpati Maintenance Facility', 'The Capitol Group', NULL, '<p>We are a leading MRO (Maintenance, Repair, and Overhaul) company committed to providing the best aircraft maintenance solutions. With excellence in quality and reliable services, we have become a trusted partner to customers in the aviation industry. With a focus on optimal performance and uncompromising safety, we deliver aircraft maintenance solutions that meet the highest standards.</p>\r\n<p>Our facilities across the Indonesian archipelago equip MMF to be a vetted, trusted and reliable MRO partner to suit your aircraft essentials. Our team at MMF possesses invaluable experiences in aircraft inspection for both military and civil aviation clientele. Our work covers a broad scope ranging from general heavy maintenance overhauls and modifications, workshop repairs, to calibration and other specialized services.</p>', 'MMF is an Approved Maintenance Organization (AMO) certified and approved in accordance with all applicable requirements of part 145 of Indonesia’s Civil Aviation Safety Regulation (CASR) and Indonesia’s Defense Airworthiness Authority (IDAA). All works performed are in compliance with all specified requirements by Indonesia’s DGCA, IDAA, and also foreign regulators such as the CAA in the Philippines and Bangladesh.', 'Office & Hanggar', 'Representative Office Jakarta', NULL, 'Juanda International Airport, Sidoarjo, Indonesia', 'Gedung Graha Anugerah Lt. 5 Jl. Teluk Betung No.42, Kebon Melati - Tanah Abang, Jakarta Pusat 10230', NULL, 'embed?pb=!1m18!1m12!1m3!1d3305.5085532771973!2d112.765996269736!3d-7.38067332356022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e503c2d9bc91%3A0x12a131326afc5bc7!2sMerpati%20Maintenance%20Facility!5e0!3m2!1sid!2sid!4v1684224359756!5m2!1sid!2sid', 'embed?pb=!1m14!1m8!1m3!1d7933.015907391572!2d106.821295!3d-6.196512!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f421d13a88a5%3A0xbadbf38fed9995d6!2sJl.%20Teluk%20Betung%20No.42%2C%20RT.4%2FRW.1%2C%20Kb.%20Melati%2C%20Kecamatan%20Tanah%20Abang%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010230!5e0!3m2!1sid!2sid!4v1685652681288!5m2!1sid!2sid', NULL, '2023-06-22 01:32:20', '2023-06-22 20:17:28');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Certificate of Regristration', 'ISO', 'ISO.png', '2023-06-14 21:31:12', '2023-06-15 00:01:27'),
(2, 'Akreditasi', 'CAAP', 'CAAP.png', '2023-06-19 19:15:39', '2023-06-19 19:15:39'),
(3, 'KAN1', 'KAN', 'KAN1.png', '2023-06-19 19:18:08', '2023-06-19 19:18:08'),
(4, 'KAN2', 'KAN', 'KAN2.png', '2023-06-19 19:18:32', '2023-06-19 19:18:32'),
(5, 'KAN3', 'KAN', 'KAN3.png', '2023-06-19 19:18:55', '2023-06-19 19:18:55'),
(6, 'lambangja', 'LAMBANGJA', 'lambangja.png', '2023-06-19 19:19:33', '2023-06-19 19:19:33'),
(7, 'ART', 'ART', 'ART.png', '2023-06-19 19:20:03', '2023-06-19 19:20:03'),
(8, 'AMO1', 'AMO', 'AMO1.png', '2023-06-19 19:20:33', '2023-06-19 19:20:33'),
(9, 'AMO2', 'AMO', 'AMO2.png', '2023-06-19 19:20:52', '2023-06-19 19:20:52'),
(10, 'AMO3', 'AMO', 'AMO3.png', '2023-06-19 19:21:09', '2023-06-19 19:21:09'),
(11, 'AMO4', 'AMO', 'AMO4.png', '2023-06-19 19:21:27', '2023-06-19 19:21:27'),
(12, 'AMO5', 'AMO', 'AMO5.png', '2023-06-19 19:22:01', '2023-06-19 19:22:01'),
(13, 'AMO6', 'AMO', 'AMO6.png', '2023-06-19 19:22:20', '2023-06-19 19:22:20'),
(14, 'AMO7', 'AMO', 'AMO7.png', '2023-06-19 19:25:19', '2023-06-19 19:25:19'),
(15, 'AMO8', 'AMO', 'AMO8.png', '2023-06-19 19:26:03', '2023-06-19 19:26:03'),
(16, 'AMO9', 'AMO', 'AMO9.png', '2023-06-19 19:26:24', '2023-06-19 19:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bali Internasional Flight Academy', 'Acedemy', 'c1.png', '2023-06-19 19:44:39', '2023-06-19 19:44:39'),
(2, 'NAM AIR', 'Penerbangan', 'c3.png', '2023-06-19 19:45:28', '2023-06-19 19:45:28'),
(3, 'Wings Air', 'Penerbangan', 'c5.png', '2023-06-19 19:45:52', '2023-06-19 19:45:52'),
(4, 'Pilipinas Hukbong Himpapawid', 'Pertahanan', 'c2.png', '2023-06-19 19:46:26', '2023-06-19 19:46:26'),
(5, 'Dirgantara', 'Pertahanan', 'c7.png', '2023-06-19 19:46:57', '2023-06-19 19:47:09'),
(6, 'Jalakaca', 'Pertahanan', 'c4.png', '2023-06-19 19:47:37', '2023-06-19 19:47:37'),
(7, 'Trans Nusa', 'Penerbangan', 'C10.png', '2023-06-19 19:48:08', '2023-06-19 19:48:08'),
(8, 'Sukhoi', 'Produsen', 'c8.png', '2023-06-19 19:48:39', '2023-06-19 19:48:39'),
(9, 'Viking', 'Penerbangan', 'C9.png', '2023-06-19 19:50:14', '2023-06-19 19:50:14'),
(10, 'Pegasus', 'MRO', 'c13.png', '2023-06-19 19:50:36', '2023-06-19 19:50:36'),
(11, 'Asialink', 'Penerbangan', 'c14.png', '2023-06-19 19:51:08', '2023-06-19 19:51:08'),
(12, 'Boeing', 'Produsen', 'c12.png', '2023-06-19 19:51:33', '2023-06-19 19:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mmf` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `mmf`, `email_1`, `email_2`, `email_3`, `email_4`, `wa_1`, `wa_2`, `wa_3`, `wa_4`, `linkedin`, `ig_1`, `ig_2`, `created_at`, `updated_at`) VALUES
(1, '<p>Merpati Maintenance Facility is an Approved Maintenance Organization with Certificate No. 145D-093 by DGCA. Our Vision to become the preferred Trusted, Reliable, Partner MRO (Maintenance, Repair, Overhoul).</p>\r\n<p>All works performed are in compliance with all specified requirements such as Hangars and Facilites, Tools, Materials, Technical Data, and also supported by Qualified Personnels.</p>', 'marketing@ptmmf.co.id', 'sekretariat@ptmmf.co.id', 'marketingjkt@ptmmf.co.id', NULL, '62318686482', '62318686500', '622122909914', NULL, 'merpati-maintenance-facility', 'ptmmf', NULL, '2023-06-14 00:27:29', '2023-06-22 00:33:02');

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
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'steril-area', 'Sterilisasi Arean Aircraft', 'pf4.jpg', '2023-06-14 21:29:19', '2023-06-14 21:29:40'),
(3, 'pf3', 'Mesin', 'pf3.jpg', '2023-06-19 19:27:21', '2023-06-19 19:27:21'),
(4, 'pf2', 'cek', 'pf2.jpg', '2023-06-19 19:27:48', '2023-06-19 19:27:48'),
(5, 'pf5', 'five', 'pf5.jpg', '2023-06-19 19:32:11', '2023-06-19 19:32:11'),
(6, 'pf6', 'six', 'pf6.jpg', '2023-06-19 19:35:10', '2023-06-19 19:35:10'),
(7, 'serv', 'serv', 'serv.jpg', '2023-06-19 19:35:51', '2023-06-19 19:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `nama`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'MMF Surabaya', 'https://goo.gl/maps/qndzZEENBJEbCYRg6', 'surabaya.jpg', '2023-06-16 01:22:00', '2023-06-19 23:40:48'),
(2, 'MMF Manado', 'https://goo.gl/maps/XpqnbFxnZ6mmfrCk7', 'manado.jpg', '2023-06-19 19:54:59', '2023-06-19 23:43:22'),
(3, 'MMF Biak', 'https://goo.gl/maps/9ZvSNkou9CRuiSeB7', 'biak.jpg', '2023-06-19 19:55:30', '2023-06-19 23:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `name`, `position`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ROWIN H. MANGKOESOEBROTO', 'PRESIDENT DIRECTOR', 'More than 40 years of experience in Business Project Management, Corporate Level Engineering Program Management, HR Development. Former Director Operation & Production at Merpati Maintenance Facility, Chairman at Indonesian Aircraft Maintenance Services Association, Project Coordination Officer at Aerospace Programme for Education Research and Technology, Deputy Director at IPTN – Directorate of Technology, KLM Royal Dutch Airlines, and Fokker Aircraft BV.', 'm1.png', '2023-06-13 19:10:23', '2023-06-13 19:10:23'),
(2, 'ZARIEF BACHTOMMI', 'PRODUCTION DIRECTOR', 'More than 25 years of experience in technical, engineering, and maintenance production. Former General Manager at Merpati Maintenance Facility, Director at Aerotek Rotorasia Indonesia, Technical Director and Procurement Manager at WhiteskyAviation, and Chief Inspector at Kura Kura Aviation.', 'm2.png', '2023-06-13 19:12:16', '2023-06-13 19:33:54'),
(4, 'MASRURI A. HAKIM', 'QUALITY & SAFETY', 'More than 40 years of experience in Business Project Management, Corporate Level Engineering Program Management, HR Development. Former Director Operation & Production at Merpati Maintenance Facility, Chairman at Indonesian Aircraft Maintenance Services Association, Project Coordination Officer at Aerospace Programme for Education Research and Technology, Deputy Director at IPTN – Directorate of Technology, KLM Royal Dutch Airlines, and Fokker Aircraft BV.', 'm3.png', '2023-06-19 19:04:00', '2023-06-19 19:04:00'),
(5, 'BAMBANG HERU PRAKOSO', 'BASE MAINTENANCE', 'With over 20 years of expertise in the aviation industry, Mr. Bambang background encompasses serving as a Fleet Technical Advisor for Airbus A320, A340, and B777-300 aircraft at Kuwait Airways Corporation, Department of Aviation Operations. Mr. Bambang have also held roles such as Line Maintenance Manager for 2 years at PT Merpati Nusantara, Maintenance & Engineering Dept. in Jakarta Base, and Manager for Heavy Maintenance for 3 years, also at Jakarta Base.', 'm4.png', '2023-06-19 19:04:37', '2023-06-19 19:04:37'),
(6, 'IRWAN RUSWANDONO', 'CORPORATE SECRETARY', 'With a wealth of two decades of experience in the aviation field, Mr. Irwan expertise lies in handling operations at both airports and offices of PT Merpati Nusantara. Additionally, Mr. Irwan have a proven track record as a sales manager at Sriwijaya Air in the Surabaya district, where he served for 7 years.', 'm5.png', '2023-06-19 19:05:34', '2023-06-19 19:05:34');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2022_03_17_073213_create_sliders_table', 1),
(30, '2022_03_21_121227_create_services_table', 1),
(31, '2022_03_21_125701_create_testimonials_table', 1),
(32, '2022_03_21_130752_create_portfolios_table', 1),
(33, '2022_03_21_133048_create_clients_table', 1),
(34, '2022_03_21_140850_create_teams_table', 1),
(35, '2022_03_21_152418_create_contact_table', 1),
(36, '2022_03_22_094513_create_about_table', 1),
(37, '2023_06_06_012843_create_aircraft_table', 2),
(38, '2023_06_06_012848_create_aircraft_table', 3),
(39, '2023_06_07_085345_create_component_table', 4),
(40, '2023_06_07_155326_create_spesialized_table', 4),
(41, '2023_06_07_155750_create_calibration_table', 4),
(42, '2023_06_07_161346_create_calibrations_table', 5),
(43, '2023_06_07_085345_create_components_table', 6),
(44, '2023_06_07_155326_create_spesializeds_table', 6),
(45, '2023_06_08_042153_create_news_table', 7),
(46, '2023_06_14_012710_create_management_table', 8),
(47, '2023_06_14_012713_create_management_table', 9),
(48, '2023_06_14_032146_create_news_table', 10),
(49, '2023_06_14_094513_create_about_table', 11),
(50, '2023_06_14_094510_create_about_table', 12),
(51, '2023_06_14_152418_create_contact_table', 13),
(52, '2023_06_15_125701_create_certificates_table', 14),
(53, '2023_06_15_125701_create_certificate_table', 15),
(54, '2023_06_15_130752_create_gallery_table', 16),
(55, '2023_06_16_133048_create_location_table', 17),
(56, '2023_06_18_133048_create_clients_table', 18),
(57, '2023_06_17_073213_create_sliders_table', 19),
(58, '2023_06_18_121227_create_services_table', 19),
(59, '2023_05_12_000000_create_users_table', 20),
(60, '2023_05_12_100000_create_password_resets_table', 20),
(61, '2023_05_19_000000_create_failed_jobs_table', 20),
(62, '2023_05_20_000001_create_personal_access_tokens_table', 20),
(63, '2023_06_19_133048_create_clients_table', 21),
(64, '2023_06_14_094520_create_about_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `date`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Penandatanganan Kerjasama Operasi (KSO) antara GMF dan MMF', '2016-11-12', 'Hari ini Sabtu, (12/11/2016) bertempat di hangar PT. Merpati Maintenance Facility (MMF) yang berlokasi disekitar Bandar Udara Juanda Surabaya, PT. Garuda Maintenance Facility Aero Asia (GMF) dan PT. Merpati Maintenance Facility (MMF) melakukan penandatanganan kerjasama operasi (KSO) untuk maintenance pesawat ATR 72-600 milik Garuda Indonesia.\r\nPenandatangan ini dihadiri oleh beberapa petinggi dari kedua perusahaan MRO tersebut yaitu Direktur Utama Merpati Capt Asep Nugraha, Direktur Utama MMF Suharto, Direktur Operasi MMF Saptono Widodo, Direktur Utama GMF Juliandra Nurtjahjo dan Muhammad Alwi selaku komisaris PT. GMF.\r\n“DI MMF kita juga meng-handle pesawat Boeing, Fokker 27, Fokker 50, karena MMF mempunyai kemampuan disitu. Kami bersinergi karena ini merupakan instruksi dari menteri BUMN agar marketnya akan lebih besar. Dua raksasa ini jika digabung tentunya akan menjadi sebuah produk yang besar” menurut Dirut MMF Suharto.\r\n“GMF punya visi untuk masuk sektor General Aviation karena selama ini hanya fokus dalam fasilitas pesawat jet. Dua fasilitas ini (GMF & MMF) bersinergi bersama-sama memperbesar size-nya dengan melalui kerjasama. Merpati punya brand dan quality system dan GMF juga akan masuk disitu ” tutur Dirut GMF Juliandra Nurtjahjo. (Hr/Ad)', 'news2.jpg', '2023-06-13 20:42:59', '2023-06-13 20:46:54'),
(2, 'Perawatan Pesawat Militer Philippines Air Force', '2023-05-30', 'PT Merpati Maintenance Facility (MMF) sebagai organisasi MRO (Maintenance, Repair, and Overhaul) sudah memiliki sertifikat CAAP (Civil Aviation Authority of Philippines) sejak tahun 2011. Sejak MMF berdiri kembali pada tanggal 27 Januari 2016, MMF sudah melaksanakan perawatan pesawat militer milik Philippines Air Force sebanyak tujuh (7) kali.\r\nPT Merpati Maintenance Facility (MMF) sebagai organisasi MRO (Maintenance, Repair, and Overhaul) sudah memiliki sertifikat CAAP (Civil Aviation Authority of Philippines) sejak tahun 2011. Sejak MMF berdiri kembali pada tanggal 27 Januari 2016, MMF sudah melaksanakan perawatan pesawat militer milik Philippines Air Force sebanyak tujuh (7) kali.Pada bulan Mei 2016, MMF melakukan perawatan repair pesawat Fokker-27 di Legazpi dengan No. registrasi 10-669 yang mengalami kerusakan setelah mengalami bally landing. Pada Desember 2018, MMF kembali melaksanakan perawatan pesawat Fokker-27 No. registrasi 10-259 di Filipina yang mengalami kendala berupa keretakan pada pada wing fitting attachment, sehingga tidak dapat diterbangkan ke Indonesia untuk melaksanakan perawatan Inspeksi D-Check. Sehingga tim MMF memberangkatkan personelnya untuk melaksanakan perbaikan pada wing attachment pesawat di Filipina, hingga pesawat dinyatakan airworthy sehingga bisa dilanjutkan dengan pelaksanaan Inspeksi D- Check di Hangar MMF Surabaya, Indonesia.\r\nPada Maret 2020, Pesawat PAF berjenis Fokker-27 No. registrasi 10-669 tiba di Hangar MMF SUB untuk melaksanakan perawatan pesawat Inspeksi D-Check yang kemudian kembali ke Filipina pada tahun 2021. Namun dikarenakan adanya peristiwa bencana angin topan Odette pada Oktober 2022 yang menyebabkan pesawat tersebut mengalami kerusakan pada Flight Control, tim MMF diberangkatkan ke Mactan (Filipina) untuk melaksanakan perbaikan Flight Control pada pesawat tersebut, hingga pesawat dinyatakan layak terbang kembali.\r\nPada tahun 2021, PAF kembali mengirimkan pesawat Fokker-27 No. Registrasi 10-620 ke Hangar MMF SUB untuk melaksanakan perawatan Inspeksi D-Check.\r\nTahun 2023, MMF telah meningkatkan capability list perawatan pesawat C-295 oleh Kementerian Pertahanan RI, dan telah mendapatkan kepercayaan dari PAF untuk melaksanakan perawatan pesawat berjenis C-295.\r\nTerjadinya bencana angin topan Odette di Mactan, Filipina menyebabkan pesawat milik PAF berjenis C295 No. registrasi 140 mengalami kerusakan pada Flight Control, sehingga pada bulan Maret 2023, tim MMF kembali mengirimkan personelnya untuk melaksanakan perbaikan Flight Control di Mactan, Fillipina. Selanjutnya pesawat tersebut nantinya akan diberangkatkan ke Hangar MMF SUB untuk melaksanaan perawatan berkala.\r\nPada tanggal 17 Mei 2023, pesawat C-295 milik PAF dengan No. registrasi 142 tiba di Hangar MMF untuk melaksanakan perawatan pesawat inspeksi 2C Check and 8 years C295. Setelah perawatan pesawat C295 selesai, maka MMF akan mendapatkan tugas untuk merawat pesawat C295 yang lainnya.', 'news1.jpeg', '2023-06-13 20:56:50', '2023-06-13 20:56:50');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Aircraft Maintenancess', 'Merpati Maintenance Facility is an organization specializing in Maintenance Repair Overhaul (MRO), operating under CASR 145. Our certification by DGCA and IDAA allows us to provide aircraft maintenance services for civil and military aircraft. Additionally, we are certified by CAAP and CAAB to support international aircraft maintenance. Our services include inspection, heavy maintenance, modifications, and Aircraft On Ground (AOG) support, provided by our experienced team.</p>\r\n<p>With 3 hangars located in Juanda-Surabaya, Biak, and Manado, we have the capacity to accommodate narrow body jet aircraft, propeller transport, propeller training, business & executive jet, and helicopters as listed in our capability list. Our workshop is equipped with advanced equipment and a Test Cell for Lycoming and Continental engine maintenance.</p>\r\n<p>As a leader in the Lower Segments of MRO, we are committed to providing tailored aircraft maintenance solutions to meet your needs. Our approach and experience enable us to deliver effective solutions at competitive costs. We take pride in offering maximum service quality by our skilled team to ensure your aircraft maintenance requirements are met efficiently. In the future, we will continue to add international certifications to our collection, further enhancing our capabilities as a modern MRO. So, you can trust us to provide the best aircraft maintenance services with competitive costs.</p>', 's1.jpg', '2023-06-19 19:10:17', '2023-06-22 23:24:32'),
(2, 'Component Services', '<p>Components play a crucial role in ensuring the airworthiness of an aircraft. Without sufficient supporting factors, the aircraft cannot be authorized to fly. As a result, Merpati Maintenance Facility is prepared to provide assistance and deliver top-quality services tailored to your requirements. We have a comprehensive capability list for maintaining and repairing aircraft components, both for military and civilian aircraft, including B737, F27, F28, F100, CASA 212, CN 235, and other aircraft models listed in our latest capability list. Moreover, Merpati Maintenance Facility is certified by PUSLAIKLAMBANGJAAU for the maintenance of B-737, CN-235, C-295, and CASA-212 aircraft components, as outlined in our capability list.</p>\r\n<p>As the aviation industry continues to advance, technology plays a significant role in driving progress, particularly in avionic component repairs such as CVR and FDR, which have transitioned from manual to digital systems. With our extensive experience and knowledge, we are committed to providing assurance and satisfaction to our valued customers. Additionally, our personnel are certified by COMA, ensuring that they possess the necessary skills in their respective fields of expertise. Please note that PUSLAIKLAMBANGJAAU and COMA are Indonesian aviation certifications, and B-737, CN-235, C-295, CASA-212, CVR, and FDR are common aviation acronyms used in the industry.</p>', 's2.jpg', '2023-06-19 19:11:24', '2023-06-19 19:11:24'),
(3, 'Specialized Services', '<p>Not all aircraft maintenance, repair, and overhaul (MRO) providers are capable of performing specialized services. As an MRO that continuously strives to meet the demands of our domestic and international customers. Merpati Maintenance Facility is always innovating to develop specialized services in our MRO capabilities. Currently, the specialized services that we offer are not limited to Non-Destructive Testing (NDT), Ramp Test, Swing Compass, Sheet & Composite Metal Repair, Cockpit Voice Recorder (CVR) & Flight Data Recorder (FDR) Read Out, Weigh and Balancing, Borescope, Aircraft Painting, Hydrostatic Test, Tail Modification, and Welding. For painting work, our hangar is equipped with dedicated painting facilities and segregated with barriers.</p> \r\n<p>This ensures that you can have confidence in us to carry out painting work in our hangar without any hesitation. Note: MRO stands for Maintenance, Repair, and Overhaul. NDT refers to methods of testing that do not damage the material being tested. CVR records audio in the cockpit, while FDR records flight data. Hangar is a facility for aircraft maintenance and repair. Welding is the process of joining materials using heat and/or pressure. NDT, Ramp Test, Swing Compass, Sheet & Composite Metal Repair, Weigh and Balancing, Borescope, Hydrostatic Test, and Tail Modification are specialized services related to aircraft maintenance and repair. Painting involves applying paint to an aircraft for protection and aesthetics.</p>', 's3.jpg', '2023-06-19 19:12:39', '2023-06-21 00:56:00'),
(4, 'Calibration Services', '<p>Calibration is an essential process that verifies the compliance of a measuring instrument with its design and functional specifications. By conducting calibration, we can determine the deviation value of the measuring instrument and ensure that it aligns with its specifications.</p>\r\n<p>As time progresses, the performance of a measuring instrument inevitably declines, and it becomes necessary to calibrate it to preserve its function and performance.</p>\r\n<p>The advantages of calibrating a measuring instrument include preserving its function and performance, preventing product defects, maintaining the instrument’s condition to align with its specifications, avoiding hazardous risks, and minimizing work accidents to ensure workplace safety.</p>', 's4.jpg', '2023-06-19 19:13:56', '2023-06-19 19:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'do', 'We offer nose-to-tail solutions that cover the diverse maintenance, repair and overhaul needs of the world’s airlines. We have the resources, the team and the experience to deliver.', 'aircraft.svg', '2023-06-19 18:54:36', '2023-06-21 20:56:53'),
(2, 'service', 'Example of Services in MMF', 'services.png', '2023-06-19 18:56:36', '2023-06-19 18:56:36'),
(3, 'MRO', 'Delivering Unmatched Quality and Precision in MRO Services', 'bg.svg', '2023-06-19 18:59:09', '2023-06-21 20:52:30'),
(4, 'Capability', 'MMF is a licensed Approved Maintenance Organization (AMO) certified under part 145 of Indonesia’s Civil Aviation Safety Regulation (CASR) protocol.', 'a1.png', '2023-06-19 19:00:22', '2023-06-21 20:37:08'),
(5, 'Experience', 'MMF’s experiences have been trusted, verified and proven to fulfill a broad range of services to both local and international clientele from our hangars in Indonesia. Further, our portfolio details services that cover various aircraft series, including but not limited to the Bell-412, B-737 Classic, B737- NG, C212, CN235, F-27, and F-28.', 'a2.png', '2023-06-19 19:00:57', '2023-06-21 20:37:31'),
(6, 'Certification', 'MMF is a licensed Maintenance Repair and Overhaul (MRO) facility approved by Indonesia’s civil and military aircraft worthiness authorities, the DGCA and MoD Worthiness center respectively. Our international certifications include the Philippines, Bangladesh, etc. MMF is also certified by the International Standard Organization (ISO 9001: 2000).', 'a3.png', '2023-06-19 19:01:25', '2023-06-21 20:37:52'),
(7, 'login', 'img-login', 'log.jpg', '2023-06-22 20:43:13', '2023-06-22 20:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'MMFSurabaya', 'Hangar MMF in Surabaya', 'surabaya.jpg', '2023-06-13 07:57:17', '2023-06-13 07:57:17'),
(2, 'MMFManado', 'Hangar MMF in Manado', 'manado.jpg', '2023-06-13 07:57:58', '2023-06-13 07:57:58'),
(3, 'MMFBiak', 'Hangar MMF in Biak', 'biak.jpg', '2023-06-13 07:58:27', '2023-06-13 07:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'Andyka', '25andykas@gmail.com', NULL, '$2y$10$OOZyvt6Qbhjp1hpZxEzMFefM5Vz9LAymDQDgg5iaDyJJYkyq9Nqdi', NULL, '2023-06-19 18:34:14', '2023-06-19 18:34:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
