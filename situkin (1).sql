-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2022 at 01:44 PM
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
-- Database: `situkin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin__module`
--

CREATE TABLE `admin__module` (
  `id` char(36) NOT NULL,
  `app` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin__module`
--

INSERT INTO `admin__module` (`id`, `app`, `tag`, `name`, `title`, `subtitle`, `color`, `menu`, `url`, `created_at`, `updated_at`) VALUES
('9775bf52-0420-40ed-9f3b-25becb237f58', 'Admin', 'Si Tukiman-Admin', 'Si Tukiman', 'Si Tukiman', 'Admin', '#4863A0', 'Admin', 'admin/master-data/pegawai', '2022-10-09 05:49:27', '2022-10-09 05:49:27'),
('9775c234-a83c-40ea-b495-169c69a8b77e', 'Kajur', 'Si Tukiman-Kajur', 'Si Tukiman', 'Si Tukiman', 'Kajur', '#819FB3', 'Kajur', 'kajur/beranda', '2022-10-09 05:57:31', '2022-10-09 05:57:31'),
('9775c2a7-807b-4fd9-b47f-abbcfe7f0355', 'Pegawai', 'Si Tukiman-Pegawai', 'Si Tukiman', 'Si Tukiman', 'Pegawai', '#6D9384', 'Pegawai', 'pegawai/beranda', '2022-10-09 05:58:47', '2022-10-09 06:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `admin__pegawai`
--

CREATE TABLE `admin__pegawai` (
  `id` char(36) NOT NULL,
  `status_pegawai` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin__pegawai`
--

INSERT INTO `admin__pegawai` (`id`, `status_pegawai`, `nip`, `nama`, `foto`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('9775bd1d-3359-4c1c-ad2a-09ee6c31b5e4', 'Admin', '17171717171717171', 'Arief Muhammad Akrom', 'app/images/pegawai/9775bd1d-3359-4c1c-ad2a-09ee6c31b5e4-1665319397-A0Y8R.jpg', 'Laki-laki', 'Islam', 'Ketapang', '2022-10-10', '089531231715', 'akrommm', 'katente168@gmail.com', '$2y$10$VkiYse8A5FNvLBitv9bejOzFzCXmCuunpjQvgo9AAPo2xARAwLJjG', NULL, '2022-10-09 05:43:17', '2022-10-09 05:43:17'),
('9775c08b-01cb-4efb-acf3-d52ea24269d8', 'Jurusan', '12121212121212121', 'Jemi Firmansah', 'app/images/pegawai/9775c08b-01cb-4efb-acf3-d52ea24269d8-1665319973-FyDLz.jpg', 'Laki-laki', 'Islam', 'KKU', '2022-10-20', '082192137717', 'jemi', 'jemi@gmail.com', '$2y$10$gOET2kJHzJ3EXZKC6CvgaeR3E5xRGnEL9OYrm4YLFvZMe.Lg2Riz.', NULL, '2022-10-09 05:52:53', '2022-10-09 05:52:53'),
('9775c163-e3ed-4e26-8ba1-9f4168d16c61', 'Pegawai', '13131313131313131', 'Irsyad Husain Jauhari', 'app/images/pegawai/9775c163-e3ed-4e26-8ba1-9f4168d16c61-1665320115-q7Q5e.jpg', 'Laki-laki', 'Islam', 'Ketapang', '2022-10-27', '089615251515', 'irsad', 'irsyad@gmail.com', '$2y$10$7KrBu5kJvjZKZz8kZM1L4uf2GsAioe0BKlL2rnESzzlxnQhJVW0lu', NULL, '2022-10-09 05:55:15', '2022-10-09 05:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `admin__role`
--

CREATE TABLE `admin__role` (
  `id` char(36) NOT NULL,
  `id_pegawai` char(36) NOT NULL,
  `id_module` char(36) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin__role`
--

INSERT INTO `admin__role` (`id`, `id_pegawai`, `id_module`, `created_at`, `updated_at`) VALUES
('9775bf6c-4378-40fb-a050-e561d35e0ef9', '9775bd1d-3359-4c1c-ad2a-09ee6c31b5e4', '9775bf52-0420-40ed-9f3b-25becb237f58', '2022-10-09 05:49:45', '2022-10-09 05:49:45'),
('9775c2c4-37dc-4fe1-89f8-4374ee3d9286', '9775c08b-01cb-4efb-acf3-d52ea24269d8', '9775c234-a83c-40ea-b495-169c69a8b77e', '2022-10-09 05:59:06', '2022-10-09 05:59:06'),
('9775c782-4b14-4b3f-b622-b771e313d58c', '9775bd1d-3359-4c1c-ad2a-09ee6c31b5e4', '9775c234-a83c-40ea-b495-169c69a8b77e', '2022-10-09 06:12:21', '2022-10-09 06:12:21'),
('9775c7a0-66e7-403a-bc00-35b5248ef29c', '9775c163-e3ed-4e26-8ba1-9f4168d16c61', '9775c2a7-807b-4fd9-b47f-abbcfe7f0355', '2022-10-09 06:12:41', '2022-10-09 06:12:41'),
('9775c7b6-6134-478a-9e9f-4cce25380366', '9775bd1d-3359-4c1c-ad2a-09ee6c31b5e4', '9775c2a7-807b-4fd9-b47f-abbcfe7f0355', '2022-10-09 06:12:55', '2022-10-09 06:12:55'),
('9775cc58-eeec-4b1b-9bbf-c97b51c63439', '9775c08b-01cb-4efb-acf3-d52ea24269d8', '9775c2a7-807b-4fd9-b47f-abbcfe7f0355', '2022-10-09 06:25:53', '2022-10-09 06:25:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin__module`
--
ALTER TABLE `admin__module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__pegawai`
--
ALTER TABLE `admin__pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__role`
--
ALTER TABLE `admin__role`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
