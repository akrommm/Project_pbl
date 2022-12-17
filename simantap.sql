-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2022 at 09:20 PM
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
-- Table structure for table `admin__absensi`
--

CREATE TABLE `admin__absensi` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `id_pegawai` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `id_unitkerja` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bulan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_kehadiran` int NOT NULL,
  `jumlah_sakit` int NOT NULL,
  `jumlah_izin` int NOT NULL,
  `jumlah_alfa` int DEFAULT NULL,
  `jumlah_kerja` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__absensi`
--

INSERT INTO `admin__absensi` (`id`, `id_pegawai`, `id_unitkerja`, `nama`, `jabatan`, `nip`, `bulan`, `jumlah_kehadiran`, `jumlah_sakit`, `jumlah_izin`, `jumlah_alfa`, `jumlah_kerja`, `created_at`, `updated_at`) VALUES
('98009b07-f9cf-456e-89bc-c3be75215257', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Arief Muhammad Akrom', 'Dosen', '921029012', 'Oktober', 23, 0, 0, 1, 24, '2022-12-17 13:28:04', '2022-12-17 13:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `admin__cuti`
--

CREATE TABLE `admin__cuti` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_pegawai` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_unitkerja` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nip` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `masa_kerja` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenis_cuti` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `telp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `lamanya_cuti` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dari_tanggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sampai_tanggal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan_ak` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_kj` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_ak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nip_ak` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nip_kj` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qr` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qr_kj` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qr_ak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_kj` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status_ak` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__cuti`
--

INSERT INTO `admin__cuti` (`id`, `id_pegawai`, `id_unitkerja`, `nama`, `nip`, `pangkat`, `masa_kerja`, `jenis_cuti`, `alamat`, `telp`, `lamanya_cuti`, `dari_tanggal`, `sampai_tanggal`, `keterangan`, `keterangan_ak`, `alasan`, `jabatan`, `nama_kj`, `nama_ak`, `nip_ak`, `nip_kj`, `qr`, `qr_kj`, `qr_ak`, `status_kj`, `status_ak`, `status`, `created_at`, `updated_at`) VALUES
('9801081c-49ac-4f1e-968b-28398ea5434c', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Arief Muhammad Akrom', '921029012', '7', '5 Tahun', 'Cuti Tahunan', 'hahsh', '089531231716', '30 Hari', '18-12-2022', '26-12-2022', 'WKWKWK', 'iii', 'wjwj', 'Dosen', 'Eka Wahyudi', 'Arief Muhammad Akrom', '921029012', '23232323', 'app/SiMantapQR/pegawai/cuti/69JkJ.png', 'app/SiMantapQR/kajur/cuti/Orkv0.png', 'app/SiMantapQR/kepegawaian/cuti/QqZGP.png', 'SETUJUI', 'DITANGGUHKAN.', 0, '2022-12-17 18:33:04', '2022-12-17 20:24:17'),
('98010e38-1c8f-4aa5-9571-0b6f2212f2a1', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Arief Muhammad Akrom', '921029012', '7', '5 Tahun', 'Cuti Melahirkan', 'kakak', '089531231716', '30 Hari', '10-04-2022', '08-11-2022', 'J', NULL, 'JJJJ', 'Dosen', 'Eka Wahyudi', NULL, NULL, '23232323', 'app/SiMantapQR/pegawai/cuti/b9hXq.png', 'app/SiMantapQR/kajur/cuti/4wPiU.png', NULL, 'TIDAK DISETUJUI', NULL, 0, '2022-12-17 18:50:09', '2022-12-17 18:50:24'),
('98012276-5e6c-4745-a5c8-127cdf9d4fdc', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Arief Muhammad Akrom', '921029012', '7', '12 tahun', 'Cuti Besar', 'hahsh', '089531231716', '30 Hari', '18-12-2022', '19-12-2022', 'iya kah', NULL, 'wkkw', 'Dosen', 'Eka Wahyudi', NULL, NULL, '23232323', 'app/SiMantapQR/pegawai/cuti/Zz8Nu.png', 'app/SiMantapQR/kajur/cuti/1V7VB.png', NULL, 'SETUJUI', NULL, 0, '2022-12-17 19:46:45', '2022-12-17 19:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin__dinas`
--

CREATE TABLE `admin__dinas` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_pegawai` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_unitkerja` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nip` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `surat` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `perihal` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__dinas`
--

INSERT INTO `admin__dinas` (`id`, `id_pegawai`, `id_unitkerja`, `nama`, `nip`, `surat`, `perihal`, `keterangan`, `jabatan`, `status`, `created_at`, `updated_at`) VALUES
('9800a173-618b-4ddd-be8e-d482ea6def9d', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Arief Muhammad Akrom', '921029012', 'app/SiMantapsurat/pegawai/9800a173-618b-4ddd-be8e-d482ea6def9d-1671284761-PRk91.pdf', 'Pemohonan Izin Perjalanan Dinas Luar Ke KKU', 'IYAA', 'Dosen', 'Menyetujui', '2022-12-17 13:46:01', '2022-12-17 20:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `admin__izin`
--

CREATE TABLE `admin__izin` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_pegawai` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_unitkerja` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nip_ak` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pangkat` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `selama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `perihal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_ak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qr` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qr_ak` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__izin`
--

INSERT INTO `admin__izin` (`id`, `id_pegawai`, `id_unitkerja`, `nama`, `nip`, `nip_ak`, `pangkat`, `waktu`, `selama`, `perihal`, `alasan`, `keterangan`, `jabatan`, `nama_ak`, `qr`, `qr_ak`, `status`, `created_at`, `updated_at`) VALUES
('9800aa8b-dbf9-4d94-8f5b-05dea8fe8b32', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Arief Muhammad Akrom', '921029012', '921029012', '9', '08-12-2022', '3 jam', 'terlambat datang masuk kerja', 'akkak', 'kk', 'Dosen', 'Arief Muhammad Akrom', 'app/SiMantapQR/pegawai/izin/JoLgg.png', 'app/SiMantapQR/kepegawaian/izin/ocOoP.png', 'Menyetujui', '2022-12-17 14:11:27', '2022-12-17 14:23:52'),
('9800b0d4-3fac-4964-adb4-369b22d7284c', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Arief Muhammad Akrom', '921029012', '921029012', '7', '17-12-2022', '4 jam', 'tidak masuk bekerja', 'kwkw', 'wjj', 'Dosen', 'Arief Muhammad Akrom', 'app/SiMantapQR/pegawai/izin/oMNQ9.png', 'app/SiMantapQR/kepegawaian/izin/7peTS.png', 'Tidak Menyetujui', '2022-12-17 14:29:01', '2022-12-17 14:30:58'),
('9801353b-f6f8-44f8-a750-b330f23f1320', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Arief Muhammad Akrom', '921029012', NULL, '7', '18-12-2022', '4 jam', 'izin pulang lebih cepat dari waktu kepulangan kerja', 'jjjjjj', NULL, 'Dosen', NULL, 'app/SiMantapQR/pegawai/izin/OW9Ex.png', NULL, '2', '2022-12-17 20:39:15', '2022-12-17 20:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `admin__module`
--

CREATE TABLE `admin__module` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `app` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__module`
--

INSERT INTO `admin__module` (`id`, `app`, `tag`, `name`, `title`, `subtitle`, `color`, `menu`, `url`, `created_at`, `updated_at`) VALUES
('9775bf52-0420-40ed-9f3b-25becb237f58', 'Admin', 'SIMANTAP - Admin', 'SIMANTAP', 'SIMANTAP', 'Admin', '#ED553B', 'Admin', 'admin/master-data/pegawai', '2022-10-09 05:49:27', '2022-10-31 09:00:04'),
('9775c234-a83c-40ea-b495-169c69a8b77e', 'Kajur', 'SIMANTAP - Kajur', 'SIMANTAP', 'SIMANTAP', 'Kajur', '#F6D55C', 'Kajur', 'kajur/beranda', '2022-10-09 05:57:31', '2022-11-10 02:14:51'),
('9775c2a7-807b-4fd9-b47f-abbcfe7f0355', 'Pegawai', 'SIMANTAP - Pegawai', 'SIMANTAP', 'SIMANTAP', 'Pegawai', '#3CAEA3', 'Pegawai', 'pegawai/beranda', '2022-10-09 05:58:47', '2022-10-31 08:59:00'),
('97997c1d-8ac4-451c-8239-dbe4a26b648d', 'Kepegawaian', 'SIMANTAP - Kepegawaian', 'SIMANTAP', 'SIMANTAP', 'Kepegawaian', '#20639B', 'Kepegawaian', 'kepegawaian/beranda', '2022-10-27 00:11:21', '2022-10-31 08:58:33'),
('97a668e8-b438-4721-b355-29ae40105022', 'QR', 'SIMANTAP - QR', 'SIMANTAP', 'SIMANTAP', 'QR', '#288BA8', 'Qr', 'simantap/qr', '2022-11-02 10:23:24', '2022-11-02 10:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `admin__pegawai`
--

CREATE TABLE `admin__pegawai` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_unitkerja` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_unitdetail` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gelar_depan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gelar_belakang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__pegawai`
--

INSERT INTO `admin__pegawai` (`id`, `id_unitkerja`, `id_unitdetail`, `nip`, `nik`, `nama`, `foto`, `agama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `jabatan`, `username`, `gelar_depan`, `gelar_belakang`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('977fd25a-4ab4-4a95-a818-aa996f91ee3e', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', NULL, '19191919191919191', NULL, 'Admin', 'app/images/pegawai/977fd25a-4ab4-4a95-a818-aa996f91ee3e-1666690879-iVJkw.jpg', '', 'Laki-laki', 'Ketapang', '2022-10-13', 'Admin', 'admin', NULL, 'amd', 'admin@gmail.com', '$2y$10$iQ6py9S0iojytOdFoHihzu35yi2UjYButdHVfh6fvV6B3uv8.GSL2', NULL, '2022-10-14 06:00:57', '2022-11-11 02:40:19'),
('97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', NULL, '921029012', NULL, 'Arief Muhammad Akrom', 'app/images/pegawai/97fdbe59-a15f-453d-a6d0-7e4ee14aeb69-1671161278-QcfP3.png', 'Islam', 'Laki-laki', 'Ketapang', '2022-12-16', 'Dosen', 'akrommm', NULL, 'Amd.Kom', 'akrommm@gmail.com', '$2y$10$oyMGISGjzVjSs0di1Dh62OW/UF.oT7XmqRvx8fdiwav7vHTHmIcyW', NULL, '2022-12-16 03:19:20', '2022-12-16 03:27:58'),
('97fdbeea-5517-49bb-9328-eb03ed42ec90', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', NULL, '12190291029', NULL, 'Fathurrahmi', NULL, NULL, 'Laki-laki', 'Ketapang', '2022-12-16', 'Administrasi', 'fathurrahmi', NULL, 'S.Pd., M.Cs', 'Fathurrahmi@gmail.com', '$2y$10$TtPJsOJhiZEZwLv3ia2MCuDidI2FZ/.hPGYmvrKR5OKfj5G9vVYR2', NULL, '2022-12-16 03:20:55', '2022-12-16 03:20:55'),
('97fdbf2e-1086-4503-b308-dd5567ebaddd', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', NULL, '23232323', '232323', 'Eka Wahyudi', NULL, NULL, 'Laki-laki', 'Mekar Asri', '2022-12-16', 'Ketua Jurusan', 'eka', NULL, 'S.Pd., M.Cs', 'eka@gmail.com', '$2y$10$pVSEe6wtynMMJ2oiLRKYnOBmFICPHAkXz6ckdnHrvPN1o3cN8PQP2', NULL, '2022-12-16 03:21:39', '2022-12-16 03:21:39'),
('97fdc445-5bdd-4ee7-90f4-4e9fd6156cd6', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', NULL, '32332323', '2313123', 'Jemi Billar', 'app/images/pegawai/97fdc445-5bdd-4ee7-90f4-4e9fd6156cd6-1671164542-876PF.jpg', NULL, 'Laki-laki', 'Mekar Asri', '2022-12-16', 'Dosen', 'jemi', NULL, 'A.Md.Kom', 'jemi@gmail.com', '$2y$10$q9o2zosUG7avi7kuhff3DeD6Ta0O9H.X/NVz.wpSkqr0mz9T8Cfqu', NULL, '2022-12-16 03:35:54', '2022-12-16 04:22:22'),
('97ffa66f-38d2-4b52-806e-cb0a4af58e47', '977fd4a3-1c66-400b-ba68-816dffe46253', NULL, '12190291029', '989898', 'Selsa Reva Adinda', NULL, NULL, 'Perempuan', 'Ketapang', '2022-12-17', 'Dosen', 'selsa', NULL, 'Amd.Kom', 'selsa@gmail.com', '$2y$10$usfnz2BBYshD9EWcWVkLHukjd2YI24bkfZXf43U6UHMTqDieSAu.u', NULL, '2022-12-17 02:04:07', '2022-12-17 02:04:07'),
('97ffafaf-dd39-4e13-8640-1b121149a7b3', '977fd4a3-1c66-400b-ba68-816dffe46253', NULL, '89832938', '898329', 'alvia', NULL, NULL, 'Perempuan', 'Ketapang', '2022-12-17', 'Ketua Jurusan', 'alvia', NULL, 'Amd.Kom', 'alvia@gmail.com', '$2y$10$PETqtXbHmJPl1tqJO7LE8.W8ij2ucx2prpcEZKIl.1HUomT4pYmoq', NULL, '2022-12-17 02:29:59', '2022-12-17 02:29:59'),
('97ffb077-1e2e-4350-9441-2bc3fbc85057', '977fd392-8837-44b7-b7f5-d90ec6b8e1b1', NULL, '3829389', '92382983', 'Handoko', NULL, NULL, 'Laki-laki', 'Ketapang', '2022-12-17', 'Ketua Jurusan', 'handoko', NULL, 'A.Md.Kom', 'handoko@gmail.com', '$2y$10$gsBDTXZiky6k3M3psmyAf.Gn21kR57fOQ5p1xGzOpS9h2zXccUCzm', NULL, '2022-12-17 02:32:10', '2022-12-17 02:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `admin__pegawai1`
--

CREATE TABLE `admin__pegawai1` (
  `id` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik_ktp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gelar_depan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gelar_belakang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__pegawai1`
--

INSERT INTO `admin__pegawai1` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `created_at`, `updated_at`) VALUES
('02b2a632-7432-4eaa-9898-b2ea879ff373', NULL, '19780803 201509 168', NULL, NULL, 'Heri Darmawan', NULL, 'S.T', 'Ketapang', '1978-08-03', 'Laki-laki', '', '$2y$10$y6l3HQt7AXMjpmsAcCpZV.gbZlUngvW./3VAWZ9qot5SW2Q6ZTHea', '2022-10-13 22:43:08', '2022-10-13 22:43:08'),
('02fb52d1-876d-4dca-83d5-a8d769842eb5', NULL, '19890614 201302 129', NULL, NULL, 'M. Riduan', NULL, 'A.Md', 'Ketapang', '1989-06-14', 'Laki-laki', 'Islam', '$2y$10$z0agwL1ZIU4v6YCmNbqblOicUnvWmrqzEppsgQD3JE3Hbvqj7e31u', '2022-10-13 22:43:08', '2022-10-13 22:43:08'),
('03968e4c-1c63-4e6e-8d6a-4c31651cb5ac', '19850516 202121 2 004', NULL, NULL, NULL, 'Eva Susana', NULL, 'A.Md', 'Ketapang', '1985-05-16', 'Perempuan', '', '$2y$10$.s5QDoEKN87wKM8mkIdqF.3X46.xM4GVBVdjXMzyIwmS6BSjo5RSu', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('03c8bbe4-15b5-4fa5-8024-dcc8abd2f9ac', NULL, NULL, NULL, NULL, 'Vensya Aswal Anugerah Panca Poetri', NULL, 'A.Md', 'Pontianak', '1993-03-31', 'Perempuan', 'Islam', '$2y$10$rSZtuVjEvqMJB.oxjQ3K1eHamV1pKY/KVvwNXUk/1hOy1CbXBlO4S', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('045cfd08-9a76-4c18-a1eb-b43a99f48c57', NULL, '19920717 201512 174', NULL, NULL, 'Devi Elvira', NULL, 'S.Pd', 'Ketapang', '1992-07-17', 'Perempuan', '', '$2y$10$hv8e7E5J7niC1keQcBJ1j.BOjLVRc6isv9..Rk4rezgesSvoMb5GC', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('0854e795-2c48-484e-b919-675b7be7dc7c', '19830917 202121 1 001', NULL, NULL, NULL, 'Adha Panca Wardanu', NULL, 'S.TP.,M.P', 'Pontianak', '1983-09-17', 'Laki-laki', 'Islam', '$2y$10$AzBc1iBbkAbvHs4adbpBBunGHipuXQ5VRjs2ww6WlpWYYCgNAmqZG', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('093cca9b-a773-4867-a5f6-a665467f791b', NULL, '19890622 201601 95', NULL, NULL, 'Juniarti', NULL, 'A.Md', 'Ketapang', '1989-06-22', 'Perempuan', '', '$2y$10$IjdGivRL34tcRYC7JU1vAe.Ptj.Dk15cPpQCRJJlv8HPII8I1vJ4u', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('0a89879b-7875-4420-ab42-4ec9cb00e86e', '19910217 202121 1 002', NULL, NULL, NULL, 'Fajar Pebriyono', NULL, 'A. Md', 'Ketapang', '1991-02-17', 'Laki-laki', '', '$2y$10$KikbjMBnf6sLUfp9CJq.M.J.Bw3IUyZHCMF6v477iQhno3y29edWm', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('0ed02966-83fd-4b68-b3e6-077f75582dd2', NULL, '19961119 202107 260', '6171035911960020', NULL, 'Dyah Novia Nugraheni', NULL, 'S.Tr.Ak.,M.Ak.', 'pontianak', '1996-11-19', 'Perempuan', 'Islam', '$2y$10$vRfDSLEwsvf7witC5bRy8O9KHomJbHuHOr8/kiVh7JPTgwC4nTS7.', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('13c7279b-9d2e-4afa-a641-ca2ebc14f151', NULL, NULL, NULL, NULL, 'Moh Rokim', NULL, '', 'Purworejo', '1970-01-01', 'Laki-laki', '', '$2y$10$/0JJj5cTVLmZnFD0lor0FeF.CfghFjUiwWzT/SKs2NIyXKqZIKHCq', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('13dd745d-221f-421f-b78b-138131893d28', NULL, NULL, NULL, NULL, 'Dedi Kurniadi', NULL, '', 'Ketapang', '1970-01-01', 'Laki-laki', '', '$2y$10$qoIVrnyZlhJhVWc3IoB0DOYYbfC3B6F8Sh7XlqVX19/qrQyM6ISAS', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('143f2dec-fc53-45e6-a700-989bdf50c019', '19851008 202121 1 005', NULL, NULL, NULL, 'Erick Radwitya', NULL, 'S.ST., MT', 'Ketapang', '1985-10-08', 'Laki-laki', 'Islam', '$2y$10$kADr8tbolWbVBw3B1g0Gl.Zi8dR8QpGUYehnthqzktsGdIzlwzMdS', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('14e636c6-3ca1-4e24-9072-3b0b707abc99', NULL, NULL, NULL, NULL, 'M. Randi Hardiyanto', NULL, '', 'Ketapang', '1993-05-25', 'Laki-laki', '', '$2y$10$7ay/mUFpF4vbHrxWN5sYLeP872JH0J.ZhBLW/YvqvZKK4v/KViB4e', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('15417e2f-797e-43fe-ac3f-54b550f683ad', '19710324 202121 1 001', NULL, NULL, NULL, 'Molyadi', NULL, 'A.Md', 'Ketapang', '1971-03-24', 'Laki-laki', 'Islam', '$2y$10$45yAud6wqz4iPDWP5DnfCu6qiOA5cbnJ3p.L6NfecEf2TWExNyxLm', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('159c1ff3-499e-4acc-84c2-bc844f8da135', '19820310 202121 1 003', NULL, NULL, NULL, 'Trian Adimarta', NULL, 'S.TP., M.Sc', 'Surabaya', '1982-03-10', 'Laki-laki', 'Islam', '$2y$10$Mb4y5MP0.Q2XK/tlrmXquOJtN0YlkDFIgDwDI.vA7eRc.g/R3VXCG', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('16cb2f5a-392a-48bf-b846-bcf548ded51f', NULL, '19920521 201512 175', NULL, NULL, 'Muhamad Reza Lukmana', NULL, 'A.Md', 'Ketapang', '1992-05-21', 'Laki-laki', 'Islam', '$2y$10$ZRtMJxGxVCC9NlSHQ2iiSudLpeAqzZHkGOvbVmvb5j8OdaZQSl5Gi', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('18413e6f-09d1-4ae5-b32e-cb0d2c2f4427', NULL, NULL, NULL, NULL, 'Supiandi', NULL, '', 'Ketapang', '1980-06-09', 'Laki-laki', '', '$2y$10$6NMVPYxMGaDZ74Q.pIiHLu1ohEeJXPU/hESpXVbdHOVeI7v8SmAfe', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('18514bb6-0287-4061-b323-05247b4132c4', '19720918 202121 2 002', NULL, NULL, NULL, 'Heni Haryani', NULL, NULL, 'Ketapang', '1972-09-18', 'Perempuan', '', '$2y$10$B2px0bdHtoYEibwFcgGo8.LuVwulZYsAEG4b646MTY/XVRGfwcM5S', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('189bd94f-5fd1-451a-8a00-031840e9a07a', NULL, NULL, NULL, NULL, 'Khairil', NULL, 'S.P.,M.P', 'Samili', '1981-09-17', 'Laki-laki', 'Islam', '$2y$10$aLDCANBaRdlvcqEj3/S.Duzf7McNaRHwfKjbCsZq.YaTzhHjoslYa', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('18eebaa7-84fd-48ac-9c61-81dfe56e8074', '19770221 200803 1 001', NULL, NULL, NULL, 'Uti Rustam Efendi', NULL, 'S.T., M.T', NULL, '1977-02-21', 'Laki-laki', 'Islam', '$2y$10$kz2a11QI/QFRkuDBZBVbJuT0ZK9RpFmoC.HIVE8vkmX7JGUOC6W1u', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('193ca687-65a0-4711-b0c0-1927043c277d', NULL, '19930528 201603 202', NULL, NULL, 'Fachrul Rozie', NULL, 'S.T, M.Tr.T', 'Ketapang', '1993-05-28', 'Laki-laki', 'Islam', '$2y$10$YIhUH71gOh53y24e5FTQ4eZ3BlcZy7AGTgjL8hgeT1Mfm7UTTGQvK', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1a3344f4-7b24-487e-a9fb-5ad326c13fff', '19900802 201903 1 003', NULL, NULL, NULL, 'Kondhang Dhika Kusuma', NULL, 'A.Md', 'Surakarta', '1990-08-02', 'Laki-laki', 'Islam', '$2y$10$8ptt6aEg1GufsObOFaulvOHBMxWeW.nXdlc57WgbaoTbN2b6Av/CW', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1a9c1f07-2017-4492-a4f6-0dc243e7d999', '19911112 201903 1 014', NULL, NULL, NULL, 'Kasrianto Wijaya', NULL, 'A.Md', 'Palopo', '1991-11-12', 'Laki-laki', 'Islam', '$2y$10$oBH5K8sj3s4timtmy5HU2eYuplsI0jZSgMeSllCK7CR6XZHQsUdIi', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1b0267f4-d517-4512-a4c3-301a96372d12', '19890623 201903 2 015', NULL, NULL, NULL, 'Syarifah Aqla', NULL, 'S.Pd.,M.T', 'Pontianak', '1989-06-23', 'Perempuan', 'Islam', '$2y$10$d7HCqw8sOLtSLRkWLZBlpOiruECjAZHAeBvZm/S0wYh377NfJGyIu', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1b483074-16f8-4c4a-908a-ba3e3ee8e7e1', '19780511 202121 1 003', NULL, NULL, NULL, 'Helanianto', NULL, 'S.T.,M.T', 'Randau', '1978-05-11', 'Laki-laki', 'Katholik', '$2y$10$R0fLxQY2cpW.cH.dpxgI2eYHM.q4NLgUm0vp.4SZukaIR9sY5jciW', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1ba7321f-8186-4fbb-8cff-ff1d597d4336', '19760921 202121 1 002', NULL, NULL, NULL, 'Normansyah', NULL, 'S.T.,M.T', 'Ketapang', '1976-09-21', 'Laki-laki', 'Islam', '$2y$10$SnyDzU8vpKVaQF1J4rqp..i2L9wAM6hlRp5JapkZ07d1/iM.hWjVK', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1d5b7688-73c1-4142-99f3-94bbae58ed79', '19880501 201903 1 007', NULL, NULL, NULL, 'Budi Pratomo Sibuea', NULL, 'S.ST.,M.ST', 'Tebing Karimun', '1988-05-01', 'Laki-laki', 'Kristen', '$2y$10$oUzl3VogiUVjDWdMi2TCC.Y5GAC3EBlLZnMJc3D6qmRHFMO/WBz1K', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1e0985f8-2c11-4f3f-845b-6bf9a09c3b2d', NULL, '19930128 201609 210', NULL, NULL, 'Ar-Razy Muhammad', NULL, 'S.T', 'Pontianak', '1993-01-28', 'Laki-laki', 'Islam', '$2y$10$p7zbAq/XYOwde2h2KhIS2eOZzwSmwaq0BJS8YXlZHMJges5j6iMp.', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('1e9dc080-4487-494e-9225-72b737e726c3', NULL, '19880328 201802 230', NULL, NULL, 'Muhammad Fadli', NULL, 'A.Md', 'Semarang', '1988-03-28', 'Laki-laki', 'Islam', '$2y$10$rgK1kn0G7De.A0tUHobM/O6cDsrboVLHN44byFcPpFJspMWlFoXfq', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('1f160b23-2073-4ad4-9ffc-1e417dc85cc9', NULL, '19900109 201512 171', NULL, NULL, 'Sarwendah Ratnawati Hermanto', NULL, 'S.Pd., M.Sc', 'Surakarta', '1990-01-09', 'Perempuan', 'Islam', '$2y$10$xgsYMODDOa7FYoNvq9sco.aXqtmfrodpOWtmHGYy9amLN/GXtHQ/C', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('20ab0593-f9f5-405f-86ff-a3f3c50d804b', NULL, '19910413 201509 161', NULL, NULL, 'Rika Fitry Ramanda', NULL, 'M.P', 'Ketapang', '1991-04-13', 'Perempuan', 'Islam', '$2y$10$r5LWz9/JuaSjUSmhPtrve.jsOrffT4wgrU9Yzx6/4m7PE2GAWF/76', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('20c6f98d-f528-4fc2-9016-ef526e32b7ba', NULL, '19830327 201701 215', NULL, NULL, 'Uray Sriyani', NULL, '', 'Balai Karangan', '1983-03-27', 'Perempuan', '', '$2y$10$rz3i4mjDpNyEiOtvTNwGi.Jk6xKNEshnGctThQdt4Nxm4vlBBhlOS', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('2189d7cd-773e-4845-84a5-fffaa1ea901f', '19880315 201903 2 011', NULL, NULL, NULL, 'Maya Santi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-03-15', 'Perempuan', 'Islam', '$2y$10$yUFSb2OShyTOTfETyeZoPOMHHSCroJ2gAmJIk8AWrOXyMsJI.7IiG', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('22bf31f9-6306-425e-9d54-89ace70ccda4', '19880424 201903 2 012', NULL, NULL, NULL, 'Hurul\'ain', 'Ir.', 'S.T.,M.T', 'Pemangkat', '1988-04-24', 'Perempuan', 'Islam', '$2y$10$aq5fuSRLzOP250ioMBkZVebNfLECPIJag54rl8q1HXLzXG95gfsx.', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('22e45ac1-e10f-4134-8739-23fd2faa507c', '19840605 202121 1 005', NULL, NULL, NULL, 'Effendi', NULL, ' A.Md', 'Ketapang', '1984-06-05', 'Laki-laki', '', '$2y$10$SJXCZRIEEASEGW1j7nVbEu.t4w0xIB0P0tx2q6NpvPSfMqcX.eKkm', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('252e762f-e81d-4c33-8aae-11b68c651c17', NULL, NULL, NULL, NULL, 'Ibnu Hajar', NULL, '', 'Ketapang', '1969-01-29', 'Laki-laki', '', '$2y$10$b7ieGRQs2oq4FO0cI0ejluZrlnmp9YO9LGVhnVyNHTbUYh8wp/bnS', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('26f5893c-c355-4040-9ae4-6e53187c725f', '19740722 202121 1 005', NULL, NULL, NULL, 'Muh Anhar', NULL, 'S.T.,M.T', 'Boyolali', '1974-07-22', 'Laki-laki', 'Islam', '$2y$10$PoL/4XDqC7NerF8h3p4ViejV2CV8XmwJT/j398/FcmyQXIb7ybsje', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('28e2a56e-3c76-4d19-844f-a3092954f0b7', '19850217 201504 2 002', NULL, NULL, NULL, 'Encik Eko Rifkowaty', NULL, 'S.TP.,M.P', 'Pontianak', '1985-02-17', 'Perempuan', 'Islam', '$2y$10$hjfqjOlr3thyoiBOLdPuB.Rq5QW5IotPRBkRh4sOtpGzfPv/NNdly', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('29157361-a115-43a4-86ed-fbe66964c0d7', '19810521 202121 1 006', NULL, NULL, NULL, 'Dedi Sartono', NULL, 'A.Md', 'Ketapang', '1981-05-21', 'Laki-laki', '', '$2y$10$NZkIkcQd3W6c27ygaeZ/Set3EulkxNASEsBGB0mxJBBVYFKdeEApC', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('295e592a-3426-40a6-899c-8860e5929164', NULL, '19911010 201507 155', NULL, NULL, 'Lita Nurpuspita Sari', NULL, 'S.Sos.', 'Singkawang', '1991-10-10', 'Perempuan', 'Islam', '$2y$10$tEjQIMmR5k0tKLaNy1Uuu.Gwv2a6Inz7T2wDs1ZHMnRngmS5kF04C', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('29cb26c6-4361-4341-971d-07be567f2a6f', NULL, '19820601 201602 198', NULL, NULL, 'Lusia Romana', NULL, 'S.IP', 'Pantan', '1982-06-01', 'Perempuan', '', '$2y$10$B1jlSgcMtQaaYTRrLw5QVOYqdC0tVxUX1F0oCOxCJ4AdjyE.MQFCG', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('30ccea2e-48be-4213-ae9a-379abd41a42c', NULL, '19821217 201509 164', NULL, NULL, 'Beny Setiawan', NULL, 'S.TP.,M.P', 'Pontianak', '1982-12-17', 'Laki-laki', 'Islam', '$2y$10$HtJK.rObKj9K0bEH8ILzCun4Cso.4UnZ84mtnVf1DTNO7/7SOV1I.', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('30f2648e-3a3a-45a0-bdc2-e984af4abb7f', '19890705 202121 1 002', NULL, NULL, NULL, 'M. Iwan Toro', NULL, 'A.Md.', 'Pebihingan', '1989-07-05', 'Laki-laki', 'Islam', '$2y$10$gjOtao0Ni6bjfgjBtDcrLeQCa.nLcPfnoRWQfYgYd4zJDqYfIiy1W', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('31236e8b-5191-4433-95a9-0390e1e13ac1', NULL, '19931213 201601 183', NULL, NULL, 'Yunita', NULL, 'A.Md', 'Ketapang', '1993-12-13', 'Perempuan', 'Islam', '$2y$10$sFtscuqwxln5dVjlkF66weombCvNYuLKFGz9ND32yjfurVpbDqU4C', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('321326cb-17cd-4634-bdc8-619c26d4aea3', NULL, '19911112 201411 146', NULL, NULL, 'Winda Arlianty', NULL, 'S.Kom.', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$g6RAWXZd98D15yMvj2ok3OZLcUkz.o8bSK.0NozFMPf2oNtA0pIOq', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('32d16bd7-58b5-487a-aab3-66cbb4801605', '19761218 202121 1 004', NULL, NULL, NULL, 'Abang Suryadi', NULL, 'A.Md', 'Putussibau', '1976-12-18', 'Laki-laki', 'Islam', '$2y$10$P./HFx6m3hAiewhXuBcC0OOgoC2SL4iWInFGVrhZHWNojCg8NDmLq', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('35a66251-da37-4d69-b652-7eee40512ca2', '19820521 202121 1 003', NULL, NULL, NULL, 'Refid Ruhibnur', NULL, 'S.ST., M.M.', 'Pontianak', '1982-05-21', 'Laki-laki', 'Islam', '$2y$10$UZpXsIGTvZYy4Ma15k07dOaJ9RWGIHYwszdnBfDlcP.kyOwXLKMUW', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('384a1c52-c826-4a58-9dac-effcab2e701a', NULL, '19901117 201604 205', NULL, NULL, 'Uci Novianti', NULL, 'S.Pd', 'Ketapang', '1990-11-17', 'Perempuan', '', '$2y$10$eqAX56afEb7pJDciv6GobuQHMWZriTid2sP52pqoE3pxjNcSSqKTe', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('38e42c98-b490-4f03-a289-35939e035cfa', NULL, '19900123 201601 178', NULL, NULL, 'Irfan Cholid', NULL, 'S.P.,M.MA', 'Ketapang', '1990-01-23', 'Laki-laki', 'Islam', '$2y$10$VTnG.YTo/ez5874aX6sD9O5py5bao3./5K8aM.pEuctifPq9WELZy', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3a1f1872-c67a-4bc7-9f92-0c852f44e1ec', NULL, NULL, NULL, NULL, 'Agus Sudrajat', NULL, '', 'Banyumas', '1979-06-08', 'Laki-laki', '', '$2y$10$N89VlUPi7Nv7UUsGOqFLkuVwurY/wBbkMU583/GeXi0YThzGGi/j6', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3ae1bb68-15ef-4eaa-a153-0d7dd87c6654', NULL, NULL, NULL, NULL, 'Rosnila', NULL, '', 'Sembelangaan', '1967-01-05', 'Perempuan', '', '$2y$10$KbxeWGsU/hvD4thBPOgsOuSXM4ubrRAoqRz4VwwSSrPu0xh0fdQNm', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3bb510ed-d9cc-4ae5-bf83-ecb726cbc832', '19640914 198601 1 003', NULL, NULL, NULL, 'Temy Akhyar', NULL, NULL, NULL, NULL, 'Laki-laki', 'Islam', '$2y$10$BkiNCvLLA/rnZx9g2toGUu8gVGc38vAL9W//mZVQDCUfyGUNFTa1C', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3c7a9d69-339d-4ee3-9943-b9acec923fc5', NULL, '19871107 201507 156', NULL, NULL, 'Lukman Faisal', NULL, 'S.H.', 'Singkawang', '1987-11-07', 'Laki-laki', 'Islam', '$2y$10$5jUK6.UZWxeRZQZuJuiaqevv3nW3WxvVjZ4z2FuLvesl04xBMWaL2', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3eeb6e49-8f87-483b-b811-e7b91dc94a8d', NULL, '19911121 201701 214', NULL, NULL, 'Anugrah Bayu Saputra', NULL, 'A.Md', 'Pontianak', '1991-11-21', 'Laki-laki', 'Islam', '$2y$10$TjC/dL0uHsYI1tvxU0DC8OL20bmLjHOGYE7WeNIT2RnzDB6jZQUnS', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('3f60bbb2-e5e2-4297-b003-62fe2ffebf43', NULL, '19980609 202104 252', '6104120906980003', 'junaidiju4109@gmail.com', 'Junaidi', NULL, 'A.Md.Kom', 'Ketapang', '1998-06-09', 'Laki-laki', 'Islam', '$2y$10$yGElTLXgSQpJRF7ACRwxaej3s/GWkKQuzYRqHIuJsNXzshL05nld2', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('42e5ae5d-611b-4c00-833e-ea735145b325', NULL, '19930216 201809 240', NULL, NULL, 'Ira Arianti', NULL, 'S.P.,M.P', 'Ketapang', '1993-02-16', 'Perempuan', '', '$2y$10$qAF5dTHbs5/9evXi3IvLQeHqp1E/UEv4wLEhMdcVRNEpzqkmwpUHC', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('436521dd-c443-4db6-89ae-9e237e349402', '19791002 202121 2 008', NULL, NULL, NULL, 'Erma Novita', NULL, 'A.Md', 'Ketapang', '1979-10-02', 'Perempuan', 'Islam', '$2y$10$r5brSn97Bw4/c1hoThphW.rR/Tf52F64bOorWuGdTMG61rVrHGlIq', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('43a2c3e2-6794-4fe3-a410-260d71bec47d', NULL, '19840207 201001 092', NULL, NULL, 'M. Hanif Faisal', NULL, 'M.T.', 'Pontianak', '1984-02-07', 'Laki-laki', '', '$2y$10$j6ladsXTzas1GLkyC/BSXe3yMLU1Q85.7bYXHvZrty1W7VV9uIlny', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('4408ed64-f04d-48df-ba7f-9b082c9438fc', NULL, NULL, NULL, NULL, 'Ary Rubiyanto', NULL, '', 'Ketapang', '1989-02-18', 'Laki-laki', '', '$2y$10$uiEoOt77CMfYEYFOCK54k.OPoa0MKLC8b3gHIND6vfV1zJRBFFSoe', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('44c7b811-eae2-42cb-b1d6-243f09822b99', '19890816 201903 1 002', NULL, NULL, NULL, 'Ahmad Ravi', NULL, 'S.Pd.,M.Pd', 'Masamba', '1989-08-16', 'Laki-laki', 'Islam', '$2y$10$OR.PSmO8NEfczwDudgn7KOB0je.c.HLpGTPYkrcXVzby1m6N8m//C', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('458c592c-348c-46d1-b344-b792fb64d42c', NULL, '19980908 202008 241', '6104174809980004', NULL, 'Shela Krisdayanti', NULL, 'A.Md.P', NULL, '1998-09-08', 'Perempuan', 'Islam', '$2y$10$9rg17LuplDAJwFQxr.SVI.uInAmulbb7L/v7zKpWqjOGFmqmUpdT6', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('47ceee1a-b33b-4239-9a46-1e58b5a672ad', NULL, '19830627 201512 176', NULL, NULL, 'Wienda Soesanti Putri', NULL, 'SE', 'Surabaya', '1983-06-27', 'Perempuan', 'Islam', '$2y$10$qH6xfgn9djalGAbfl02OQ.6trsB4ov12ywkhUcuiPpA3vSFcWQonq', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('4839ee6d-2c3e-426a-9354-7db9e48ae439', '19880808 202121 1 001', NULL, NULL, NULL, 'Erwin', NULL, 'A.Md', 'Ketapang', '1988-08-08', 'Laki-laki', 'Islam', '$2y$10$snz10mI94juk.WdN0Qnu5OQ2KYlrJGaAJ.jLB3lh/mxPjvNJlsHhm', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('488fb59f-f26b-48f9-96a9-fad9e800e4d1', '19891023 202121 1 001', NULL, NULL, NULL, 'A.Yani', NULL, 'SP', 'Ketapang', '1989-10-23', 'Laki-laki', 'Islam', '$2y$10$9oXwEdP3svpOwrBIFrZAOeHmfjst/I5Ujky0eOPILGBLX9XaXUsES', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('49ce6c30-837f-45c3-8e2c-6f9870ebc2e9', '19750116 202121 1 003', NULL, NULL, NULL, 'Tardi Kurniawan', NULL, 'S.Sos,.M.Si', 'Pontianak', '1975-01-16', 'Laki-laki', 'Islam', '$2y$10$jNvetPQ.pPSFeONUDkkrzOrvgXWnme9AaebfcKRKHlx5W6jUCpiyC', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('4c3d0071-440e-4e4a-837f-59eea1cc348e', NULL, NULL, NULL, NULL, 'Sy. Adly', NULL, '', 'Ketapang', '1980-09-04', 'Laki-laki', '', '$2y$10$d..d4CbHUyHomQvdNOSPluy.q3gey4ezPogzEJpphLRSn6ns9J8we', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('4d744851-78a2-40b9-ada0-0a17f50d990e', '19790626 202121 1 006', NULL, NULL, NULL, 'Sy. Ishak Alkadri', NULL, 'S.ST., M.T', 'Pontianak', '1979-06-26', 'Laki-laki', 'Islam', '$2y$10$9soIESykeGfMxwW2M8wwGOugdfLGP4obn8qOGncNGE4O8pqRAZlYW', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('4e441045-7e87-46c6-8f0c-68298b2934ae', NULL, '19770627 201601 187', NULL, NULL, 'Masyhudi', NULL, 'SE', 'Jakarta', '1977-06-27', 'Laki-laki', 'Islam', '$2y$10$Vs6aK1iIDXjTokgeD.A4ReQ0COT9w5439TiTaol0RsFyolhefG/he', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('4eae5a1d-bc44-4301-afd8-833a1bd0f6cf', '19880919 201903 1 014', NULL, NULL, NULL, 'Herman', NULL, 'S.Si.,M.T', 'Singkawang', '1988-09-19', 'Laki-laki', 'Budha', '$2y$10$wAnquvyCX4DO2nOXv9jpKO3zxtPd2Go/4JlRPs162G/T9uCB3ba6C', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('50660972-640c-49bd-b4f3-b988cfa241ec', '19910414 201903 1 008', NULL, NULL, NULL, 'Sy. Muhammad Zaki', NULL, 'SST', 'Ketapang', '1991-04-14', 'Laki-laki', 'Islam', '$2y$10$zaNXbzd6QV/QgNBd6J30Yuqq4XoTQleEllbqlHoc8LWyn1MAbW4jy', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('5123ac8d-c8fb-436a-b417-28a153cf6c16', '19921021 201903 2 017', NULL, NULL, NULL, 'Diani Dwi Oktavianti', NULL, 'S.ST', 'Putussibau', '1992-10-21', 'Perempuan', 'Islam', '$2y$10$evY4aPmIbcnbfqKNuXQdtua5dBlYEY8yzU8Wu101/URcRqWvI0DGu', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('51a80ae5-f512-4310-8243-2a4abe75a345', NULL, NULL, NULL, NULL, 'Sy. Abdurrahman', NULL, '', 'Pontianak', '1980-05-09', 'Laki-laki', '', '$2y$10$HlsoT7dVhJ2/iWeDC1a4T.H0zdC/AOJzu2o0pipaDdnP6PfY4HNI.', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('53765b6c-4322-4c67-956a-12f6b811fdbc', NULL, '19910102 201406 134', NULL, NULL, 'Januarso', NULL, 'S.P.', 'Ketapang', '1991-01-02', 'Laki-laki', 'Islam', '$2y$10$.soHxn5fRmjTDN2wkmjRUe1c.7LcGpHmQPcElCjGbI47Jqicupa9K', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('54981c04-da78-4aa6-93db-6b30fb625794', NULL, NULL, NULL, NULL, 'Uti Nailul Auhar', NULL, '', 'Ketapang', '1983-06-16', 'Laki-laki', '', '$2y$10$kbNz/qIde48U76JXb6K.HOQqyTz7vYXc5qTbr3lyOKyW8iuJAVyrG', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('56391bb3-7220-4c57-97d8-c5e72987d775', NULL, NULL, NULL, NULL, 'Zulinda', NULL, '', 'Ketapang', '1979-09-28', 'Laki-laki', '', '$2y$10$D4r1sTgGlFlWcx0Pixcn/uFaImqX0cNVMNrsaW1uQ76dvC2rXNSp.', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('56d27921-8de3-4a64-8db0-fa30ec6d9a85', '19820701 202121 2 009', NULL, NULL, NULL, 'Novia Dhian Yulita', NULL, 'A.Md', 'Ketapang', '1982-07-01', 'Perempuan', 'Islam', '$2y$10$hhCdXbcKHHrzoSpCp6hK9.FPYVaX50uS.9JKYle.g.hSOavGE7xea', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('57e7dded-12ef-41c3-a728-71bee06f9526', NULL, '19941011 201803 239', NULL, NULL, 'Alan Purtanto', 'Ir.', 'M.T', 'Sintang', '1994-10-11', 'Laki-laki', 'Katholik', '$2y$10$mwt01StFfejgO3pzxx7V7uklExW3rayKgAPoentXsnvDDIxsYtJni', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('58563118-abc4-4d1b-93a4-58e327972409', NULL, NULL, NULL, NULL, 'Desy Putri Syafrianti', NULL, 'S.Kom', 'Sekadau', '1991-12-02', 'Perempuan', 'Islam', '$2y$10$pbWIIBpk29KR.m1Riq5Zo.jOjg9yY8KSdodJ/M.9tYYZw3pPJcwOS', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('589661c7-7bc4-4517-aeda-812297d91c0c', '19940812 201903 2 019', NULL, NULL, NULL, 'Fionna Araminta Fabiola', NULL, 'S.E', 'Ketapang', '1994-08-12', 'Perempuan', 'Islam', '$2y$10$ZRpwBFs0odQNmi6fmOTmjOPdHMo2lDYRQCSkx6L3FIKuDnaM1zdBG', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('5997603c-54d6-4b59-bb77-0fda630ee588', NULL, '19910127 201509 166', NULL, NULL, 'Pusparini Akhmad', NULL, 'S.Si', 'Palembang', '1987-01-27', 'Perempuan', 'Islam', '$2y$10$RwmTixerGBUwUHlAvkfgxOTjOc64FB0YKJOPTvpjEU18yKBEgKDAG', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('5cde66a2-643d-46ea-83b0-7b1de9399637', NULL, '19890404 201512 117', NULL, NULL, 'Irfan', NULL, 'A.Md', 'Teluk Melano', '1989-04-04', 'Laki-laki', '', '$2y$10$FibgMOwQF6SLIBD91.nNNeSFXU4JSLky3t2lDoU.a1PLqkXhKeQBS', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5e418a66-3916-43d2-aabb-6ff1908d25f4', '19741026 202121 2 003', NULL, NULL, NULL, 'Utin Ida Fitriana', NULL, 'SE', 'Ketapang', '1974-10-26', 'Perempuan', 'Islam', '$2y$10$7Ol/bS4gKoPaXuBpU12NXO9zc0zZCV1drPVpj8GxHX4gt7o0wSkjG', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5e636dc2-6006-420e-88ac-18b7521e50bb', NULL, '19961218 202008 250', '6104175812960003', NULL, 'AMANDA TIARA REZKI', NULL, 'SM', NULL, '1996-12-18', 'Perempuan', 'Islam', '$2y$10$ao6d7RuA4I58Ebb8DzZuyuvuZHH3r4tIdiw/3BVFC3/Wjg.oJLju.', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5eb61db0-c4dc-4013-b48d-7aaafd73b9b6', NULL, NULL, NULL, NULL, 'Suherman', NULL, '', 'Ketapang', '1988-10-12', 'Laki-laki', '', '$2y$10$wp6s4VEEwIY.9Mq7zy0yTO4gQh7NSMYA8SlwcaL7Ja33Ltyhy1r1u', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5fb62dca-5b17-44ef-8849-257eaf4c8cc2', '19840105 202121 1 003', NULL, NULL, NULL, 'Epriyandi', NULL, 'S.T.,M.T', 'Ketapang', '1984-01-05', 'Laki-laki', 'Islam', '$2y$10$w755IEOBbME2.91C4iXTQ.LDJganJnGrO3.F0be2vX6ps.8rkKKfy', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5ffd6435-601b-4276-8c73-53c7cecdd701', '19801126 202121 2 005', NULL, NULL, NULL, 'Novitawati', NULL, 'A.Md', 'Ketapang', '1980-11-26', 'Perempuan', 'Islam', '$2y$10$GmEmXzRCo1hxflKZZQnqSe6aBg99dl4iLX4myiEX.CyCpjgR26H1W', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6351842b-6db4-4549-94c6-587f7e8d3883', '19840425 202121 1 001', NULL, NULL, NULL, 'Khairul Muttaqin', NULL, 'S.Pd.I.,M.Ag.', 'Singkawang', '1984-04-25', 'Laki-laki', 'Islam', '$2y$10$AFOCWlQka39B6QluPM2k0.1PyZoUze8lCqxHcrwu5z703pV3assgO', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('643a252e-3129-4f67-aba4-8ad6cbaca0c8', '19930818 201903 2 026', NULL, NULL, NULL, 'Firmanilah Kamil', NULL, ' S.Pd.,M.Pd', 'Malang', '1993-08-18', 'Perempuan', '', '$2y$10$vFPwz/V3GpMeouHaQkb.qeHabbnQonN.PLzOQ5wIjJ.QWZAVgqtku', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('652d3790-71e1-449e-88fb-a380428c0135', '19900619 202121 1 001', NULL, NULL, NULL, 'Zulpandi', NULL, 'A.Md', 'Ketapang', '1990-06-19', 'Laki-laki', 'Islam', '$2y$10$mqc15vWAWkZFe33JFnHTju1sdHUJGHI.HtOOOulJGEzAtGeJ9S4mq', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('68117ca1-bd03-47f2-849f-08f9d7c0d593', NULL, '19870311 201601 179', NULL, NULL, 'Sopiana', NULL, 'S.P.,M.Si', 'Mentibar', '1987-03-11', 'Perempuan', 'Islam', '$2y$10$2nptY5fxgz73RhewiQBeIuV2/JrRck5U17oRP1PdE4A2clzw7xQTu', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6885f19d-bc29-4b2b-9062-c2fedf8efc79', NULL, '19820623 201509 169', NULL, NULL, 'Saifudin Usman', NULL, 'S.T., M.Tr.Kom', 'Pontianak', '1982-06-23', 'Laki-laki', 'Islam', '$2y$10$.JLh4T5D0F.K8Ov7Ty1RnuPByBtwYaIe3.Hg05LNqHUjjbPIFu36q', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6c395ad5-e91f-47f3-aa21-bc294c185ada', '19880830 201803 2 001', NULL, NULL, NULL, 'Venti Jatsiyah', NULL, 'S.P.,M.Si', 'Sambas', '1988-08-30', 'Perempuan', '', '$2y$10$TLmsYIOpIJpoBRyQ.rtWcevH5Dv.xWdZyEGVZOIU1bgyXJwPDRqzO', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6d42c4a4-f4de-4a38-9b96-bc7f1ee1bea4', NULL, '19790731 201211 123', NULL, NULL, 'Henny Yulianti', NULL, 'A.Md.', 'Ketapang', '1979-07-31', 'Perempuan', 'Islam', '$2y$10$mauQNx3c2PBB2fcEz7C8mObBX1WoPyDfE8t..5OcH9fyQU2xDqp3O', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6da9d71f-9c64-40cf-b6b7-2d0657767ca4', '19771006 199703 1 003', NULL, NULL, NULL, 'Untoro Budi Harjanto', NULL, NULL, 'Yogyakarta', '1977-10-06', 'Laki-laki', 'Islam', '$2y$10$ZJdKAVcROKCCgJZ8uPk6kOJZuf97Tpx7YPtApen96WIM/.Lzw0zMy', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('6ed6b0f9-dc4b-4b84-90b6-099cfdd2e1c2', '19721212 202121 2 006', NULL, NULL, NULL, 'Utin Aimanul Habasiah', NULL, 'S.Sos', 'Ketapang', '1972-12-12', 'Perempuan', 'Islam', '$2y$10$KjZo2zhS/8dtj1v65hCUjetH5HJiEU0QjtK1t6LEowysfa/9cBJb6', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('6f6de946-5158-424c-8bfe-aa4b8a9c4df6', '19811225 201503 1 001', NULL, NULL, NULL, 'M. Rangga CH', NULL, 'S.Kom', 'Ketapang', '1981-12-25', 'Laki-laki', 'Islam', '$2y$10$g8TqhxyhOzx6zFHavecyIublKzp5wR5cRNEMxzgDGnPDnu6yFPLVq', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('709b3b4e-969a-4c04-9e92-5e5654ea1172', '19861031 202121 1 001', NULL, NULL, NULL, 'M. Jimi Rizaldi', NULL, 'S.ST.,M.T', 'Ketapang', '1986-10-31', 'Laki-laki', 'Islam', '$2y$10$JqulM6Amol7yfQdVnBfIvOKHqHBSgHri41FdwpmTI3Ci5NyIlUYmS', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('71b2657e-188b-4504-b605-6a488d35875a', NULL, '19871218 201512 173', NULL, NULL, 'Assrorudin', NULL, 'S.Pd.,M.Pd', 'Sidoarejo', '1987-12-18', 'Laki-laki', 'Islam', '$2y$10$TonFTfWmV9jYBkcAX.JGzOx9GZ7BDRpIIVM3USnlFG41wZ0YXRWGi', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('73d67075-744c-43c1-b3db-90e635121b08', NULL, NULL, NULL, NULL, 'Almiana', NULL, '', 'Ketapang', '1974-05-07', 'Perempuan', '', '$2y$10$KLhwbVYqCjcuEblHwMhto.KNA.D4P6M8wScmJntXbyiuOmUFMKBP6', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('769cc3ea-a955-4af8-9d8b-1509351aded3', '19910704 201903 1 015', NULL, NULL, NULL, 'Darmanto', NULL, 'M.Kom', 'Ngawi', '1991-07-04', 'Laki-laki', 'Islam', '$2y$10$ZND1NVp2ZFtRAi7DU1DYQ.aABqRKK/J0bgMvhQ5p6TnUPQChejVe2', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('78b3c200-ec4f-427c-be1e-eb899e259673', '19810822 202121 1 002', NULL, NULL, NULL, 'Awang Roy Lesmana', NULL, 'A.Md', 'Pontianak', '1981-08-22', 'Laki-laki', '', '$2y$10$mjbeZC02mFT/aSYMW4NGvu2KcLTl/C68Vj5T8jstL8UxPkmNtUZ56', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('792d0bfd-2dc1-4f35-8a26-83a306dacfdc', '19900921 202203 1 005', '19900920 201603 201', NULL, NULL, 'Ivan Suwanda', NULL, 'M.T', 'Pontianak', '1990-09-20', 'Laki-laki', 'Islam', '$2y$10$v2JnOsKgWj/eXxkorUjgeenl8cS8M8/UL8xYpc7JJDR23KTnmnmDa', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('799b456b-0e87-49de-8367-d2e78e9e74ae', NULL, '19841114 200801 047', NULL, NULL, 'Ningrum Dwi Hastuti', NULL, 'S.TP.,M.P', 'Klaten', '1984-11-14', 'Perempuan', '', '$2y$10$vkIuV5gMwtKNQYTNoicNqOUY7ni4Pdo5ovgoYo/OI1Xlq7Sfl.bha', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('79ae72a0-23be-4b20-ba79-703fb35a5eca', '19840504 201903 1 007', NULL, NULL, NULL, 'AKHDIYATUL', NULL, 'S.ST.,M.T', 'Ketapang', '1984-05-04', 'Laki-laki', 'Islam', '$2y$10$ZP7Z5trgPzWhBnBaRK6.9eNf7x.eXpQOndD0mzRE56Akkv1ZX1wRO', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('7a8c08a9-467b-4afe-8abf-07f6c2431afb', NULL, '19860615 200810 025', NULL, NULL, 'Endi', NULL, 'SE', 'Mambuk', '1986-07-15', 'Laki-laki', 'Islam', '$2y$10$2mlT1adRFqJtS.cksJ5pbu0rt1NR28d2OSXhYw.kVbgXNbg6MrafC', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('7acb40e6-5725-40ae-a4ec-02f6ed63bd94', '19830526 201504 1 001', NULL, NULL, NULL, 'Anto Susanto', NULL, 'SST, M.P', 'Bandung', '1983-05-26', 'Laki-laki', 'Islam', '$2y$10$I6q5v3c4Q51WZPk1bA7C1O0jL5F2ufSvAm3vWB7SLhPAanntt42UO', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('7bd1033c-7dfe-4f83-9aad-e11c292b1d84', NULL, NULL, NULL, NULL, 'Satira', NULL, '', 'Ketapang', '1974-09-06', 'Perempuan', '', '$2y$10$oz.yJFNuG5/wKfxm.9xWxujNaG8aGO3rnZoJaEn4ua8qiaLgId8zm', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('7bea437a-8777-4c94-bf63-8e0ca9651691', '19640610 202121 1 004', NULL, NULL, NULL, 'Uti Sahibul Hekmi', NULL, 'A.Md', 'Ketapang', '1964-06-10', 'Laki-laki', 'Islam', '$2y$10$EJY2n2vPQnU55WFGiGJseuYb4v1RWNE1HVkj3RGsUaaugcsxQc4oy', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('7c7c26c8-47b9-48b3-8499-7ef04f7564ec', '19831001 202121 2 004', NULL, NULL, NULL, 'Nely Kurnila', NULL, 'S.Pd., M.Pd', 'Ketapang', '1983-10-01', 'Perempuan', 'Katholik', '$2y$10$p0oCCTVa7d4VBRitagaoLutIEXabnlMY5JcmKuc1qe1FlilsHPKxe', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('7e03dfc9-498e-4b16-8bce-d4823ce87ba8', NULL, '19860710 201204 118', NULL, NULL, 'Mustapa', NULL, ' A. Md', 'Ketapang', '1986-07-10', 'Laki-laki', '', '$2y$10$Zc430cDFQ38wbuoxnTp63.tLNjAyFBRgSnf4vYg.8HoJXp.4CCo5q', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8084ae53-5ac6-40a7-9f5f-dea40fa2aab5', '19870114 201903 1 007', NULL, NULL, NULL, 'Eka Wahyudi', NULL, 'S.Pd., M.Cs', 'Mekar Asri', '1987-01-14', 'Laki-laki', 'Islam', '$2y$10$LSFNgho6vrERX1sBSqq6eemzbUr0j9vZnrIP.DazwnAECd7wmhwsW', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('86f15cfc-fcb7-47a6-ae81-5129f6ef4ddc', '19910310 202121 1 001', NULL, NULL, NULL, 'Sarijanto', NULL, 'A.Md', 'Ketapang', '1991-03-10', 'Laki-laki', '', '$2y$10$NRM.ZUBlTyZNYQatwcb4I.Hk7P1yDViNU7Wbg6RXm3fFlf8tV1cZi', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('87284e92-8239-44a0-86cd-2040f3406f47', '19870716 202121 1 001', NULL, NULL, NULL, 'Deden Nugraha', NULL, 'S.P', 'Sukaresmi', '1987-07-16', 'Laki-laki', 'Islam', '$2y$10$E/I8Hc9qFqTPUGGccAhnCeK9DaUMJfSqyebQqvP/7aDdKwIH.DKl2', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8784ed8e-9d88-44a6-bb02-3f085de35b8c', NULL, '19890124 201512 172', NULL, NULL, 'Firman', NULL, 'S.Pd., M.P.Fis', 'Ketapang', '1989-01-24', 'Laki-laki', 'Islam', '$2y$10$pKFFkxtPHWQvcYklRGlI5OXOVLzg.nN3H0EliK4y1o/NvdzQLPCoW', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('891f6a6b-8bd9-4ad4-bdd6-13c7b2d46782', NULL, '19950704 201708 222', NULL, NULL, 'Utin Kurnia Putri', NULL, 'A.Md', 'Semarang', '1995-07-04', 'Perempuan', 'Islam', '$2y$10$t62rfybk8eYB0u.fdOotPeTOsFGh8X5Lk0UHjb1.1267979tHSysy', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('89286b3a-69ef-47dc-8038-34175938abbc', NULL, '19880611 201601 196', NULL, NULL, 'Maya Andriana', NULL, 'SE', 'Teluk Melano', '1988-06-11', 'Perempuan', '', '$2y$10$oe1VCThIcxpOXLfMNv.EfO9iVZSsxXz/k6TrBbnBrf4ezW6fEn4G2', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8961f1e3-2848-4d15-b6b9-d79fdaa8a107', NULL, NULL, NULL, NULL, 'Karmila', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$RzOhcIUrgyqVG4ugp6Mm7O7ag5YDYXVzBEOElHNL7NHNPfdbj/eFu', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8a2a0fc9-7adb-47bc-978f-a12b9db859aa', '19860414 201903 2 011', NULL, NULL, NULL, 'Rosmalinda', NULL, 'S.ST.,M.P', 'Karang Baru', '1986-04-14', 'Perempuan', 'Islam', '$2y$10$mMgTnQQEVOCqTvRa8HWvkeffEtMlVRYuv07yj/AdMmTuZZ79rrISS', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8a593376-eea9-4931-b0d7-86b72fd79b74', NULL, NULL, NULL, NULL, 'Henni', NULL, '', 'Ketapang', '1985-07-05', 'Perempuan', '', '$2y$10$asiO1ZEIjLz0bHthAfN5tu4aJfOKhgQFgAi0oPRMCpkVtWGDArAiC', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8a75b21c-c073-4a58-8bf6-de1a0f9b5438', '19860125 201803 1 001', NULL, NULL, NULL, 'Yusuf', NULL, 'S.ST., M.T', 'Ketapang', '1986-01-25', 'Laki-laki', 'Islam', '$2y$10$lOcfHg8dt0.vQP99ERLDQ.UyxhDxXLvbMDv8wqju/5DCuysuhk0Z2', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8c2e117d-01ad-4da2-a049-5490e078db83', '19770906 202121 1 003', NULL, NULL, NULL, 'Edi Rahmanto', NULL, ' SE', 'Kelampai', '1977-09-06', 'Laki-laki', '', '$2y$10$rI9Kek6mOkM7.0F/ip7slub6tSzc3880mNh0MNPrDSpNyfyveLmpO', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8c6fdd85-dccf-4df8-888d-61910ca28761', '19891028 201903 2 011', NULL, NULL, NULL, 'Roida Oktovia Sihombing', NULL, 'SE', 'Pontianak', '1989-10-28', 'Perempuan', 'Kristen', '$2y$10$gyj0jbOCrsxho.IDlmdpq.eBqHMpNyJLzkndTT0UsTEdNBnNpTmPa', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8d1a9392-ee5b-4086-a103-c86dbf04d2c6', NULL, NULL, NULL, NULL, 'ADMIN EVENT', NULL, NULL, 'BUMI', '2021-01-01', 'Laki-laki', 'Islam', '$2y$10$b1FeFS4ZeG/iP0uQ3.ikiu9/PRee397pLUv39XXsS3jDkBE1phxuG', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8da944a0-f7df-43a4-8bda-cc6c2b01cb5f', '19841207 201903 1 005', NULL, NULL, NULL, 'Munawar Kholil', NULL, 'S.Si.,M.Pd', 'Pamekasan', '1984-12-07', 'Laki-laki', 'Islam', '$2y$10$m6gL.Haa0.jBkJUjV.6CCOjKapzD5Ref5O2JtdXRr4Vbc5KsYJaxm', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8dbaf7b4-fdc6-4664-ad8f-28925262baaf', NULL, '19900126 201409 141', NULL, NULL, 'Syarifah Mastura', NULL, 'S.Pd.', 'Ketapang', '1990-01-26', 'Perempuan', 'Islam', '$2y$10$Mv4g0yK8pLjyiWdgCIROv.sB/YnGudrvWJ3JckMxKoPDs3a0qgXiK', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8e33ce55-5330-4cb2-836e-a22a0800b01c', '19890424 202121 1 002', NULL, NULL, NULL, 'Halimansyah', NULL, 'A.Md.', 'Kendawangan', '1989-04-24', 'Laki-laki', '', '$2y$10$oDyJurzi6t2x27b1T7wE/Oa7.Jgf7IsJ3p240DI/kImvEQsa.sBOe', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8eea1d3b-f883-435d-a8a9-453e46053607', '19831217 201903 2 008', NULL, NULL, NULL, 'Alfath Desita Jumiar', NULL, 'S.P.,M.Si', 'Pontianak', '1983-12-17', 'Perempuan', 'Islam', '$2y$10$u6rstidgFcnGYUk8g90CN.8O4gwDwxg5yrch9VrS1I9VJ7is77Zg6', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8fdecaee-a3ef-4096-9165-26476c4e4753', '19710814 200604 1 005', NULL, NULL, NULL, 'Hidayat', NULL, NULL, 'Ketapang', '1971-08-14', 'Laki-laki', 'Islam', '$2y$10$4UeRkIHFESFR81B9TGe88uo6X8ssMJNanAai2ofGgnOz6bsmvP2C6', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8ffd423c-6a57-454d-b643-d1f134117073', NULL, '19780510 200801 055', NULL, NULL, 'Asep Ruchiyat', NULL, 'S.T.,M.T', 'Bengkayang', '1978-05-10', 'Laki-laki', 'Islam', '$2y$10$MjLhWTXPNse7xKNNGpvzSuDD8OFWeVtmfVvf0rmUi7qvBQi0S0aMO', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('908b7dcc-8b5f-4d2a-b745-3caacb11c1c9', '19900614 202121 2 001', NULL, NULL, NULL, 'Kurnia Dewi Permata Sari', NULL, ' A.Md', 'Ketapang', '1990-06-14', 'Perempuan', '', '$2y$10$7vXUrJzy3UA6LjOI4/wtEuKwbqdj7jOB0p88nBP9l8tIOxi6k.dJe', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('92408291-4e21-41bc-ba91-b632dbc03201', '19630804 198601 1 005', NULL, NULL, NULL, 'Safi\'ie', NULL, 'SE', NULL, '1963-08-04', 'Laki-laki', 'Islam', '$2y$10$alLoLsWsJRbLQxKHtxbt2u9qfMtj9loLzOLxDvFUE5xVYrZi3zKWW', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('966bb315-7f59-470d-aaae-c9a60336c823', NULL, NULL, '3318091606890003', NULL, 'Rois Indriawan', NULL, NULL, 'Pati', '1989-06-16', 'Laki-laki', 'Islam', '$2y$10$ZEBQlyFqZkf4MlxM7lpAAO0yf5iGS/BEH9p9NcQnRpKDEGAMIz0WW', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('966bb413-e9b5-46d7-9d60-6361134df0ea', NULL, NULL, '6172016207870003', NULL, 'Dewi Nurmayasari', NULL, NULL, NULL, NULL, 'Perempuan', '', '$2y$10$jTB63dNAlqzeQB.5o4jkK.37qNXaF9RpSuB//JEZzYtk6fda.A1XO', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('968a0145-7799-46f2-b501-e4a26899ac9a', NULL, '19881026 201707 221', NULL, NULL, 'Redika Maulidya', NULL, 'ST', 'Ketapang', '1988-10-26', 'Perempuan', '', '$2y$10$DCBQY1RsIXocwCR7jZ/msOAdqpm8h4oZT8GLGs/xIBFvXZx.SyxMu', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9736c4da-27f2-4170-bde8-c2e35cd7acaa', '19960628 202203 1 015', NULL, NULL, NULL, 'Muhammad Juni Rian Effendi', NULL, 'A.Md.Kom', 'Ketapang', '1996-06-28', 'Laki-laki', 'Islam', '$2y$10$nxyu7NlUohdphFC0Wvehsui992In9DYZeFqP/rMTOJKikiq0lHhky', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('97693558-91bc-4335-b3cb-0311f337a795', '19631008 199603 1 003', NULL, NULL, NULL, 'Suratmin', 'Ir.', 'M.T', 'Ketapang', '1963-10-08', 'Laki-laki', 'Islam', '$2y$10$Lolh6YJNlCD1lb68Duktmu1W926iyzFAtJ1IhMmvLeRGc/bct0i3q', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('98ae6c59-c188-498e-83e4-e511251529b7', NULL, '19840310 200801 017', NULL, NULL, 'Rustiarni', NULL, 'M.H', 'Ketapang', '1984-03-10', 'Perempuan', 'Islam', '$2y$10$4qd03B3UExbMkqhUSgnClOdtFIvcxkl8eXY50ARaUnQf5h5wigUpC', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('98baf7ed-28bf-4a5d-8f4b-c0e789081d91', NULL, NULL, NULL, NULL, 'Muhammad Sa\'ari', NULL, '', 'Ketapang', '1963-06-23', 'Laki-laki', '', '$2y$10$u.T.BZ8feMhArLDe1E5Iqe7h7F6UJZBaO3VRWon3pL/6v7j0noKOi', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('98db1f9b-7be6-446f-a5ab-46208a47867b', '19861109 201903 1 005', NULL, NULL, NULL, 'Rosi Arrasyid', NULL, 'A.Md', 'Sentebang', '1986-11-09', 'Laki-laki', 'Islam', '$2y$10$oCmXxF8Z1EstIyqFxHvQo.HWEfWknAyJ2gYs8nrJBIfLHXO470/BO', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('99bba172-f59c-4bf4-a7df-31b6d3b00050', '19860923 201903 1 005', NULL, NULL, NULL, 'Yudi Chandra', NULL, 'S.ST., M.T', 'Ketapang', '1986-09-23', 'Laki-laki', 'Islam', '$2y$10$9vDfNCV8rvvoNFSWBapUbe4pjRtn5/UunVWHBq9oCrnU451UX7j7C', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9a8e0752-f115-4c47-a7bc-49f8c1a862b4', '19880901 201903 1 010', NULL, NULL, NULL, 'Sy. Indra Septiansyah', NULL, 'S.Si.,M.T', 'Pontianak', '1988-09-01', 'Laki-laki', 'Islam', '$2y$10$oiZZfpJkCUtsE.j2GLOLTObIiPY/8nVguII2blN1m2KzAy3.11GQq', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9b26a021-e661-4f49-ab22-6f49afe9cd9b', NULL, '19790910 200801 058', NULL, NULL, 'Hairian Rahmadi', NULL, 'S.T.,M.T', 'Sungai Jaga B', '1979-09-10', 'Laki-laki', 'Islam', '$2y$10$EcV.DItIAWSE3YC0qBgukOJxrrbEQ5tz68v2C2ilpHexgiWJY83l6', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9b7afb74-0772-48e9-acee-2720557d1384', NULL, NULL, NULL, NULL, 'Ahmad Riduan', NULL, '', 'Ketapang', '1996-02-24', 'Laki-laki', '', '$2y$10$lCh4mG1fJdqZS9tVNCa7.eo30sCZGaTCoeg1YjBPKZtKV6t5/kMva', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9cc7f277-d556-4fae-8d75-68e64bcfcad4', NULL, '19820404 201611 213', NULL, NULL, 'Nurhayati', NULL, 'S.P.,M.Si', 'Pedada', '1982-04-04', 'Perempuan', 'Islam', '$2y$10$9iABMVNpOS2bePR4B/NOYOKny0HAMbe1c6OzNLsljTeoWS5.atjaW', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9ebea3d2-60b0-4817-9e36-661f71d69e73', NULL, '19950203 202107 259', '6104174302950003', NULL, 'Heni Rahmadianingsih', NULL, 'M.Pd', NULL, NULL, 'Perempuan', '', '$2y$10$VZFxVY9z9Oh7MX8RQUSNPu1k7d8j6biQ0cc1FnstFwSweBg9.dyhO', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9faa86a0-147d-4657-9592-160f9bb9d06f', '19850805 202121 2 009', NULL, NULL, NULL, 'Nur Aida', NULL, 'S.Pd.,M. Pd', 'Ketapang', '1985-08-05', 'Perempuan', 'Islam', '$2y$10$6JyxAACFAXgfggmkIZXeMON.TIg59ToREECGxGLEvjGCa.zRtWuhK', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('a12f6e04-c76b-44d0-ad59-7427ac275be8', '19931228 201903 1 012', NULL, NULL, NULL, 'Rahmat Aryanto', NULL, 'A.Md', 'Ketapang', '1993-12-28', 'Laki-laki', 'Islam', '$2y$10$MA5VlP7z/L3KYgg2SDR5eOeXTJWI/xC4EwBJHVGHuDlbIat5C32iq', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a15ebfc3-4700-4231-b982-f6fd6f150f1f', NULL, NULL, NULL, NULL, 'Evi Mellianti', NULL, 'SST', 'Ketapang', '1993-06-02', 'Perempuan', 'Islam', '$2y$10$KKR5aQmI1U7fGL2.zXsUOevfTArJ1qe2IwMcBk7/i9DrNxO3e20Ta', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a1c5ae62-36d7-4d2e-b207-999afa6a6103', NULL, '19740401 201311 132', NULL, NULL, 'Ahmadin', NULL, 'S.Sos.', 'Pontianak', '1974-04-01', 'Laki-laki', '', '$2y$10$Ey.fFsyuRdI5tSpQab0/COKg.60XqfLyCsZnsoF8LF4SvnmC3CpKa', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a1f6271f-46a8-4f4d-ad97-b11ed9ecca1b', NULL, '19860505 201602 203', NULL, NULL, 'Ade Herlinda', NULL, 'S.Pd', 'Ketapang', '1986-05-05', 'Perempuan', 'Islam', '$2y$10$XBcfgRGlPlXi9UFC7CkJX.GapW2QJJUAY3SkDYwawOMtM6JoHFGsS', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a382ad5f-65c0-11ed-9521-c018505bb2ee', '19191919191919191', NULL, NULL, 'admin@gmail.com', 'Admin', NULL, 'amd', 'ketapang', '2022-10-13', 'laki-laki', 'islam', '$2y$10$iQ6py9S0iojytOdFoHihzu35yi2UjYButdHVfh6fvV6B3uv8.GSL2', '2022-10-14 06:00:57', '2022-11-11 02:40:19'),
('a3cf6b37-c6e0-411e-ab87-9333e5f9e84a', '19800518 202121 1 007', NULL, NULL, NULL, 'Fathurrahmi', NULL, 'SE.,MM.', 'Ketapang', '1980-05-18', 'Laki-laki', 'Islam', '$2y$10$GrdJVgidq84Xj/6zGcMPSeidnc57lMhee6GYryTsRIxPqFAuXOaQG', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a64ec6c9-f25d-40c9-acf2-f8054184f6c5', '19820520 202121 1 005', NULL, NULL, NULL, 'Ardiansyah Putra', NULL, 'A.Md.', 'Pontianak', '1982-05-20', 'Laki-laki', 'Islam', '$2y$10$eSnWswgK0zmNIJf2zkWFiOKO1eg7PkhwMq80VpzhivulOBk87FvQq', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a7ab3156-4a6a-4d34-b4fd-ecdee3e951de', '19840926 201903 1 008', NULL, NULL, NULL, 'Irianto SP', NULL, 'S.ST.,M.MA', 'Pontianak', '1984-09-26', 'Laki-laki', 'Islam', '$2y$10$ONLyVia0R2pprd5C7g3I..q6cQmtVH9KBE4.jkrmXEZ8yo2KtoOSe', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a8025fce-d1b8-4acf-80c2-ace804464787', NULL, NULL, NULL, NULL, 'Andri Gunawan', NULL, '', 'Ketapang', '1988-01-01', 'Laki-laki', '', '$2y$10$YWotF.yi6zDBctViZR71v.i3rREaa2kfBasGFvNL03bq3OnQ2j0vS', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('ac0df63f-204d-400a-83bd-66b7fc7d1d8d', '19770503 202121 1 004', NULL, NULL, NULL, 'Yudi Adlia', NULL, 'SE', 'Ketapang', '1977-05-03', 'Laki-laki', 'Islam', '$2y$10$xED04n5A29BWKaFx0noCoO0OPJEJe71wT3P8FkMzLEe/1kmJZWtIG', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('aeb5d395-09f4-42b1-8680-75663045684e', NULL, NULL, NULL, NULL, 'Supardi', NULL, '', 'Ketapang', '1979-01-17', 'Laki-laki', '', '$2y$10$qlsyNKXGLfcM94Vh9cMrO.m2U/NKpil7XZztesYmbzT1zdTWd82G.', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('af76d150-7435-4f3a-bf5f-3fb3d991c626', '19920106 201903 2 015', NULL, NULL, NULL, 'Betti Ses Eka Polonia', NULL, 'S.Pd.,M.Pd', 'Lamongan', '1992-01-06', 'Perempuan', 'Islam', '$2y$10$yATiULWKFpLUKfHLTtZHK.DfIQuh0ZQIk0ZFgS43LpUtnY4Xd75Lu', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('b14b7e81-2fc3-45e5-adc1-750cc73f0fb2', NULL, '19740510 200801 041', NULL, NULL, 'Isye Selvianti', NULL, 'SH.,M.AP', 'Solo', '1974-05-10', 'Perempuan', 'Islam', '$2y$10$V2QlcUpWfEqGfzCMWAiEA.vFoofhRBfyAm.fJaNxXPBq9jM4al3WG', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('b2035d20-b83c-479d-a032-ecdef5bf9eb0', '19780324 202121 1 005', NULL, NULL, NULL, 'Rodiansyah', NULL, 'A.Md', 'Ketapang', '1978-03-24', 'Laki-laki', 'Islam', '$2y$10$9Bpf5u6YFA3TxIXyHBNvXeY2dZeIOemTJ4JwWFurcRFffKmVc3qS2', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('b2c740a8-348b-4e2e-9713-38c9712fe1d8', '19910617 201903 2 022', NULL, NULL, NULL, 'Saima Putrini R Harahap', NULL, 'S.Pd.,M.Pd', 'Padang Sidimpuan', '1991-06-17', 'Perempuan', 'Islam', '$2y$10$d3BlaTrv6vC3IZTlaEYFkOCCV8NnvsEqB6Aw.19iWEwTlTltxhMV2', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('b2f3b1cc-0b55-4c9d-9e5b-0e6c7fac9c8b', '19750619 202121 2 006', NULL, NULL, NULL, 'Rohyati', NULL, 'A.Md', 'Trenggalek', '1975-06-19', 'Perempuan', '', '$2y$10$5DZ46rGGsbJVhfwdjR.VRu3512fz5A2jtgBJirZEQ7ATcEswiFwV.', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b3b814f5-e354-47b3-a000-156679809080', '19901105 201903 1 007', NULL, NULL, NULL, 'A. Nova Zulfahmi', NULL, 'S.Pi.,M.Sc', 'Kediri', '1990-11-05', 'Laki-laki', 'Islam', '$2y$10$h/UddW4qQObYKiXupxt1/.SRdx8sTlmGHVKBgiQjhxUbxIFLefvoe', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b5f4d025-952e-4260-a45b-ab50e561a491', NULL, '19890730 201601 189', NULL, NULL, 'Nurhanudin', NULL, 'A.Md', 'Ketapang', '1989-07-30', 'Laki-laki', 'Islam', '$2y$10$D4lz9KNfKVQvrE5ZTHcXHewCJbLc6XzMwAY84U7RsvUWtuN/MaMIe', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b6308b4f-7569-47c1-980f-f266d255b293', '19780926 202121 1 003', NULL, NULL, NULL, 'Martanto', NULL, 'ST., MT', 'Sleman', '1978-09-26', 'Laki-laki', 'Islam', '$2y$10$3hoz4KBy3Ku4qrxmC2/Bnu6MlEBiPOkcF5Ro409XfFf52A7J6wNgu', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b674c34c-18d8-4f2e-b78d-ba263ecb6f03', NULL, '19890711 201601 188', NULL, NULL, 'Nanang Hartoni', NULL, 'A.Md', 'Ketapang', '1989-07-11', 'Laki-laki', 'Islam', '$2y$10$iuYPK1CbZ0BfMs.qrIyY..iu7e1beGG71IeK3UjLb8KUIT6pGcMhC', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b67e1667-7681-4ba7-8eb7-49df4cae2eed', '19890316 202121 1 001', NULL, NULL, NULL, 'Faisal', NULL, 'A.Md.', 'Ketapang', '1989-03-16', 'Laki-laki', 'Islam', '$2y$10$rYcLd9m7ha1wsD8BT2SPUeLTigLxTOrkvjqam32LV58y4WtdIMJwK', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b7369622-3dd7-487f-8add-b67d8512a6c3', NULL, '19911112 201601 184', NULL, NULL, 'Eva Prawinda', NULL, 'S.Pd', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$t9Nb1c7iAlVf1lCl299zqe.kvPwwPm4C9/ExFJH6x6w.aFysiEUwa', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b77f8f84-beb9-4d27-8a5f-475ac4fd520b', '19900228 202121 2 001', NULL, NULL, NULL, 'Nisa Zahara', NULL, 'A.Md', 'Ketapang', '1990-02-28', 'Perempuan', 'Islam', '$2y$10$b7qVENHp8mkNTiPPqCBjWeYxEOzI862YwueUrVEArFX2xZW7/3Ovm', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b83e233a-d9b4-459d-93de-d33523c566b0', NULL, '19890424 201509 165', NULL, NULL, 'Indra Pratiwi', NULL, 'M.Pd', 'Ketapang', '1989-04-24', 'Perempuan', 'Islam', '$2y$10$nvSaaQQt7ZpqF9/xNLVWgus622xBenwApT97dbUE/rn6BZnW0L/u2', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b95679cb-9866-4c31-8c5b-960b8ecec93c', NULL, NULL, NULL, NULL, 'Reino Muhammad', NULL, 'ST., M.Cs', 'Indonesia', '1945-08-18', 'Perempuan', '', '$2y$10$E8DsdoLGxmNcpiWZV2iQbuhTzz0MY5B5XACXJhW9NvDF8zBOL80bK', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('bc1f265d-00ef-485c-867a-a32b2899a4e8', NULL, '19951222 202104 253', '6104182212950004', NULL, 'Teguh Eko Saputra', NULL, 'A.Md.Kom', 'Mayak', '1995-12-22', 'Laki-laki', 'Islam', '$2y$10$XE15LVyB7bB3HHqJHkYLGu9nU3dSVG2ayGLatiBEiutj/yMLPoR/K', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('c0a53e24-a714-47cc-8651-1f413b8b72fe', NULL, '19881113 201601 182', NULL, NULL, 'Noprizan Azmi', NULL, 'ST', 'Simpang Empat', '1988-11-13', 'Laki-laki', 'Islam', '$2y$10$dpDRDABQ.TYQT2RPTJNqiOnohn3LTYgFwujnv7Y6x4udozSm8599K', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('c37724c8-36bf-4bbf-82ad-bac50ce9078a', NULL, '19940929 201601 193', NULL, NULL, 'Lia Kurnia', NULL, 'SP', 'Ketapang', '1994-09-29', 'Perempuan', 'Islam', '$2y$10$ljZrdjbze5ilSca8Tiux0ewn0R1zT5okD7Tp0JRCYZYyxH0Kf/bZe', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('c5bc3f89-addd-4737-bd78-ac8b414679da', '19750808 202121 1 005', NULL, NULL, NULL, 'Sahardi', NULL, 'SE', 'Ketapang', '1975-08-08', 'Laki-laki', '', '$2y$10$eLiQZdT4J1bGfwjA/m0ibeto5Z.4/6hnPApw8v6WiUkgb9iXZiUne', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('cc37bab9-4d25-4dff-9ac9-3552e5921705', NULL, '19890424 201507 158', NULL, NULL, 'Aprianda Ibrahim', NULL, 'S.Kom', NULL, '1989-04-24', 'Laki-laki', 'Islam', '$2y$10$Pc4KfgxYOCEFjtiv9usad.8Yn0OWwQcySR/5ansNwQfPrpsgAqQR.', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('cda69cea-4502-4db3-9954-70f92c28f2f1', NULL, '19860410 201502 153', NULL, NULL, 'Arman', NULL, 'A.Md.', 'Ketapang', '1986-04-10', 'Laki-laki', 'Islam', '$2y$10$7nuaTIWuzvJy6hTFiFYgv.CEBOPm7K8owo9vx5ahwci9Wuyq9KUE.', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('cda9609b-0bed-49c5-96cc-e46831985dc7', NULL, '19950219 201708 220', NULL, NULL, 'Rahmadi', NULL, 'A.Md', 'Ketapang', '1995-02-19', 'Laki-laki', 'Islam', '$2y$10$Hc3uLqPurbdLmT/xrz4hzuUWJc5F9EaiHGAFpoew2HOlz7UGdkkh2', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('cdb42c37-d361-44aa-9d90-85dc5c02cc4c', NULL, '19891220 201404 133', NULL, NULL, 'Emy Arahman', NULL, 'S.Pd., M.Pd', 'Pontianak', '1989-12-20', 'Perempuan', 'Islam', '$2y$10$HoP0r0dR0k9wJBBEWm3AZe5flmbfA/9psJPKwqq7a3s93tVSSpUmS', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d039bc2d-7c92-4349-ae77-e67fd4dcea7f', '19830501 202121 1 002', NULL, NULL, NULL, 'Muhammad Rizal', NULL, 'A.Md', 'Ketapang', '1983-05-01', 'Laki-laki', 'Islam', '$2y$10$Av8YAPmb/NJEkPRRt/6v9uSqTy6APzBLecGkColFbOVEkopeeyWQS', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d04a0a35-e772-4766-abc3-d90346ecc0a9', NULL, NULL, NULL, NULL, 'Zulkarnaen', NULL, '', 'Ketapang', '1988-09-24', 'Laki-laki', '', '$2y$10$HpoVujsylpqTLKK6gcseTOakPxpe9UHYNrQoU4Hg3cCJFCr.ZGh3q', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d2bc54ef-e3ec-46ae-adcf-8f856bbd35fc', '19901230 202121 1 001', NULL, NULL, NULL, 'Nasriadi', NULL, 'A.Md.', 'Watampone', '1990-12-30', 'Laki-laki', 'Islam', '$2y$10$C6LXZorNIQJo8vSa22iEjeSsQsimKdTByzELGY.qscbWfd9/iynOO', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d307a54a-f25e-4a3b-95e5-75c0a78fe2e2', NULL, '19890807 201302 128', NULL, NULL, 'Diah Chairunisa', NULL, 'SE.', 'Ketapang', '1989-08-07', 'Perempuan', 'Islam', '$2y$10$mHh9IO4Bu9uHJdfa0I5ZfeFCQMdqw8gk8qsMQ6sxHOsd7J1X6z8T2', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d399b985-7411-4a15-8eed-fbdb43b44dbc', '19891109 201803 2 001', NULL, NULL, NULL, 'Rizqia Lestika Atimi', NULL, 'S.T., M.T', 'Pontianak', '1989-11-09', 'Perempuan', 'Islam', '$2y$10$N2VEIJ.NOlHC8n7QmvlGxei0jCUt4saeRsQOeadUHaZ.YKpsdrirS', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d4845c8d-dcda-421c-99ec-545bf9527ca1', NULL, '19940130 201601 185', NULL, NULL, 'Utin Asiyatin Nur', NULL, 'SE', 'Ketapang', '1994-01-30', 'Perempuan', 'Islam', '$2y$10$yFp5Ul37JrH7OpEXmDXArOADJzSszBN3iu6S97dPxS20f8fIi.QeC', '2022-10-13 22:43:22', '2022-10-13 22:43:22');
INSERT INTO `admin__pegawai1` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `created_at`, `updated_at`) VALUES
('d5090102-10f3-42ae-903d-0e583097ed02', NULL, '19911222 201409 144', NULL, NULL, 'Ningli Diniyati', NULL, 'S, ST', 'Teluk Melano', '1991-12-22', 'Perempuan', 'Islam', '$2y$10$skCf5mIG9m/Kh7obQfcuLee3WwaIWSG43gQj20bIsrVM/cumbTAFa', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d8987bf5-6238-4cc0-9be7-305f922cc657', NULL, NULL, NULL, NULL, 'Ernawati', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$FjO7j/V/MAdbKojvR15ONeQIJomY3DIYDeTGDi0p/9vVezv0awPtO', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('da2352ee-66c7-41f4-b95a-ebfbc4f231ad', '19821107 202121 2 007', NULL, NULL, NULL, 'Dian Fitriarni', NULL, 'S.ST.,M.Sc', 'Ketapang', '1982-11-07', 'Perempuan', 'Islam', '$2y$10$Ifnu61a4kQBE0OycfSxsJObkyxSlSYWBF4bWQbIsBiRhF.Pdxk6Hq', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('da94c955-4436-4ea5-bb45-b8fce9a4b154', NULL, '19910219 201507 154', NULL, NULL, 'Kharisma', NULL, 'S.Kom. M.Kom', 'Ketapang', '1991-02-19', 'Laki-laki', '', '$2y$10$PbvlkAn65P82Mlgn9RNuauyjS2tF9KSubkOhNs1ysQ9fE32D92Zsy', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('db6d49db-22b0-409f-8450-1beb34250905', '19901111 201903 2 018', NULL, NULL, NULL, 'Novi Indah Pradasari', NULL, 'S.Kom., M.Kom', 'Ketapang', '1990-11-11', 'Perempuan', 'Islam', '$2y$10$YzsZPkP3051N81Ol51xPN.wOKIHQtPyRaJsNOgtYucAeldI6juadm', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('dc497585-9080-4954-8417-89be283b4665', '19881104 201903 1 004', NULL, NULL, NULL, 'Idris Herkan Afandi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-11-04', 'Laki-laki', 'Islam', '$2y$10$W7h4MhwNbOlTwvsB67eg9OzpCA5jug4H1aky5KhA1U./dklDeBjgC', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('de4b9779-eb40-42bf-8bfd-6bb1125c1703', NULL, '19840327 201110 103', NULL, NULL, 'Muhammad Taufik', NULL, ' S.T', 'Mempawah', '1984-03-27', 'Laki-laki', '', '$2y$10$L9T9/ob6ZgMnnWAtwS5wRup0xPFfnRcAO4RuQ768Yyxm0r5TLJ7ea', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('de9a5fdb-117c-45fe-8b46-ae4ce536270f', NULL, 'NIP.1985 070720 080', NULL, NULL, 'Julyan Purnomo', NULL, 'S.ST., M.T.', 'Ketapang', '1985-07-07', 'Laki-laki', '', '$2y$10$7ECVWzouqMh6/ez.v/KAWeuRNZlAbvHjmUx5H23kjVdLRfSOWYhtu', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('dee9fbb6-7eda-4464-8d26-1a41838a13d5', NULL, '19940702 201709 223', NULL, NULL, 'Agung Iswandi', NULL, 'ST', 'Ketapang', '1994-07-02', 'Laki-laki', 'Islam', '$2y$10$kiXfocPMi7Oakpp5iDbpm.yDkLKlF9aUf1OEPjdibVEXq8i0IRxSK', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e22b1a40-7094-48a7-8a1b-a7407d679e4c', '19771010 200811 1 024', NULL, NULL, NULL, 'Harsusani', NULL, 'S.T., M.T', NULL, '1970-01-01', 'Perempuan', '', '$2y$10$lNVs8jd1GLpuTmyU2nct1.Jr2kO546enHNEpxThbcgNxAUeNl7cFC', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e32d5a13-49c3-481a-9485-2ad0789512cc', '19880513 202121 1 001', NULL, NULL, NULL, 'Citro Handoyo', NULL, 'S.T', 'Pontianak', '1988-05-13', 'Laki-laki', 'Islam', '$2y$10$Osm4aBMwyrB899MXrgLlEejVYWu3lBXKNHk8jKj3iGE.IuFXBVY3e', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e3825cea-49cf-4e22-8b9e-6927099e859f', NULL, NULL, NULL, NULL, 'Syarif Niswah', NULL, '', 'Ketapang', '1975-05-05', 'Laki-laki', '', '$2y$10$D6yeu67Bf/8QiUBDbAgkEeR1LZo3BqTnntQ8XX8Sfk1aepHyIu/gK', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e6ba9e74-e855-4438-b2de-32099b533aa2', NULL, '19880402 201601 191', NULL, NULL, 'Mulyo Hadi Santoso', NULL, ' A.Md', 'Jelai Hulu', '1988-04-02', 'Laki-laki', '', '$2y$10$Ix5BhWUASFXe.sHvs0uiluwucM3mxBSeQppAyVfUaaeAnwmPasiau', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e70044c4-9afe-4ba9-88dc-67ece46c36f8', NULL, NULL, NULL, NULL, 'Nurmalawati', NULL, '', 'Ketapang', '1973-04-13', 'Perempuan', '', '$2y$10$pO/MD3D4MI//OCOdf9XNC.Lgvl9bsfzWojAH3Jpl7keUtygTdevgS', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e8e2dbb1-c651-4a0a-8dea-0926135e428b', '19900121 201803 2 001', NULL, NULL, NULL, 'Sartika', NULL, 'S.Si.,M.T', 'Pontianak', '1990-01-21', 'Perempuan', 'Islam', '$2y$10$K7CYYM47sGZzEiMH7/kgwO3tlkjzOI2lE/NPilB48oi9Zw5BMqP5q', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e8fd3915-260d-4079-8962-6608c6550e77', '19901203 202121 1 001', NULL, NULL, NULL, 'Wahyu Iswanto', NULL, 'A.Md', 'Ketapang', '1990-12-03', 'Laki-laki', 'Islam', '$2y$10$Fr6vm7xz4z8pnyYSleQ5Ee2FAXO9vF1dVt50.c.OMgDSl14LZ/KKa', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e9b3eaac-e378-4e61-a660-c06a4f47490a', '19820310 202121 2 011', NULL, NULL, NULL, 'Nenengsih Verawati', NULL, 'S.TP.,M.P', 'Bima', '1982-03-10', 'Perempuan', 'Islam', '$2y$10$mS4SCzg4eCVyceYPwg0os.phpekeFo3BJxExv2VlWSJy9s.zmXxmO', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('eb09439a-7370-4b1e-b765-252298ab31a8', NULL, NULL, NULL, NULL, 'M. Hidayat', NULL, '', 'Ketapang', '1978-10-26', 'Laki-laki', '', '$2y$10$p8IHb8FewIWusFdG7jSPP.KBFfUiIJUl3ge2bhWK6mQ.McCnhAfWa', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('ed7828d3-b34d-4d25-8378-7e3b75a08f66', NULL, '19850220 201601 192', NULL, NULL, 'Abdul Hafid', NULL, 'S.T', 'Nanga Tayap', '1985-02-20', 'Laki-laki', 'Islam', '$2y$10$XVk8MiWVNhWvLXpLkug0PuJH90dgkKSB5za8llk2FIZypAFyw/h8y', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('ef103381-4e22-4d34-a141-83dfeb98340f', '19741101 202121 2 005', NULL, NULL, NULL, 'Sri Handayani', NULL, 'A.Md', 'Ketapang', '1974-11-01', 'Perempuan', 'Islam', '$2y$10$gHiz0Lwd8qYbQPWNShjjmuI8gkBYzWbehaKRoiz0IKyuN/34dScRW', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f34be033-0f08-4655-b2ba-b68f4139017f', '19770505 202121 1 007', NULL, NULL, NULL, 'Ismael Marjuki', NULL, 'S.T.,M.T', 'Ampalu Tinggi', '1977-05-05', 'Laki-laki', 'Islam', '$2y$10$4NAfa1FPDn9JGKSEjXhtLeLuwTruBFiruxChqatQQvIrPAJy.FCf2', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f585f46a-98ed-4663-9f26-28891e3127cc', NULL, '19900611 201604 204', NULL, NULL, 'Ari Budiansyah', NULL, 'SE', 'Ketapang', '1990-06-11', 'Laki-laki', 'Islam', '$2y$10$1sajliyVL0JPInXZ3tPTp.Xca.J60rrZ2BsBZxL2hlHUc/NTBscce', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f59fa54b-a4e7-4bc2-90c3-6ec9f03a928b', '19681030 200112 1 002', NULL, NULL, NULL, 'Endang Kusmana', NULL, 'S.E.,M.M.,Ak,CA', 'Ciamis', '1968-10-30', 'Laki-laki', 'Islam', '$2y$10$/7s8KrRI4k8RHlN1v5Ap3.D8bU80eDejEKhG1OatJ0d0UBIq3gXzC', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f7c75340-cf0b-4402-963f-e8aca8e5936b', NULL, '19920917 202104 251', '6104171709920003', NULL, 'M. Alpiani', NULL, 'S.T', NULL, NULL, 'Laki-laki', '', '$2y$10$kesdNRSI67uto3ResUPZm.BaMd/o1KhT3.VEjTUbhBI2xUTCKjhF2', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f851e7bd-cc56-49dc-ab9b-97944d6041cd', NULL, '19810817 200801 042', NULL, NULL, 'Syf. Umi Kalsum', NULL, 'S.Sos.,M.AP', 'Ketapang', '1981-08-17', 'Perempuan', 'Islam', '$2y$10$1gM8FiltZBQI5BMoUXBLJOPpLvRmY9v/9rMM9hzMQtLM.oJipW0PC', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f97a9a05-82df-4dea-af31-c8014d4ca784', NULL, NULL, NULL, NULL, 'Rico Anugrah', NULL, '', 'Ketapang', '1994-09-01', 'Laki-laki', '', '$2y$10$D3LFssX5bkQXqYyoI3wlXucEEtpIVRNb18pRVpX9N33/Xnfu21HR6', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('fcf015d0-91e5-4808-8aa3-a8cf44bd547b', '19891017 202121 2 001', NULL, NULL, NULL, 'Tri Kumala', NULL, 'SP', 'Ketapang', '1989-10-17', 'Perempuan', 'Islam', '$2y$10$6UcAv4CI4JJRFB5s7KXQCeCR8yQXwdnJSJSJ8oNlFuzVinFdEmuYC', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('fd63b679-ae5a-46da-9ac2-3759ece0eac6', '19920414 201903 2 025', NULL, NULL, NULL, 'Mia Anggreini', NULL, 'A.Md', 'Nanga Keduai', '1992-04-14', 'Perempuan', 'Islam', '$2y$10$zUQAyFB6YE5Nz0hOWxeE1eFaWp0jbgkd2Ta21LjZp6jxjiqqxXKk.', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('fea080ab-8d56-4ba0-99f2-5ed8f0d4e1d5', NULL, '19811111 200801 012', NULL, NULL, 'Marisa Nopriyanti', NULL, 'STP., M.P.', 'Ketapang', '1981-11-11', 'Perempuan', 'Islam', '$2y$10$6U0zybvP3r2V4e3K71K./e7/zj/gfnw5rm13MrD5Fz.0N32THPlpe', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('fed5ef8b-675f-46be-9dc4-947c09e14dac', NULL, '19911104 201601 190', NULL, NULL, 'Nurimansyah', NULL, ' SP', 'Ketapang', '1991-11-04', 'Laki-laki', '', '$2y$10$dWA.GXrEY5xbzbrSAGZ0gO5S.0EMWRuLUUGGrWmELGGaG3E1b37Xi', '2022-10-13 22:43:25', '2022-10-13 22:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `admin__role`
--

CREATE TABLE `admin__role` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `id_pegawai` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `id_module` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__role`
--

INSERT INTO `admin__role` (`id`, `id_pegawai`, `id_module`, `created_at`, `updated_at`) VALUES
('671bdcaf-7e50-11ed-b3a0-c018505bb2ee', 'a382ad5f-65c0-11ed-9521-c018505bb2ee', '9775bf52-0420-40ed-9f3b-25becb237f58', '2022-12-15 21:17:47', '2022-12-17 21:17:47'),
('977fe633-ad24-47f2-8cbb-05c737b75278', '977fd25a-4ab4-4a95-a818-aa996f91ee3e', '9775bf52-0420-40ed-9f3b-25becb237f58', '2022-10-14 06:56:27', '2022-10-14 06:56:27'),
('97cf8477-eb52-4bfe-a7ab-753fb46106fe', '977fd25a-4ab4-4a95-a818-aa996f91ee3e', '97a668e8-b438-4721-b355-29ae40105022', '2022-11-23 03:49:24', '2022-11-23 03:49:24'),
('97fdbccf-b5db-4cc5-8f8a-e6f81de7b957', '977fd25a-4ab4-4a95-a818-aa996f91ee3e', '9775c2a7-807b-4fd9-b47f-abbcfe7f0355', '2022-12-16 03:15:02', '2022-12-16 03:15:02'),
('97fdc0dd-8935-45dd-969c-6db85856c9a9', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '9775c2a7-807b-4fd9-b47f-abbcfe7f0355', '2022-12-16 03:26:22', '2022-12-16 03:26:22'),
('97fdc0f8-b6e0-4ac1-a764-1c70d8730309', '97fdbeea-5517-49bb-9328-eb03ed42ec90', '97997c1d-8ac4-451c-8239-dbe4a26b648d', '2022-12-16 03:26:40', '2022-12-16 03:26:40'),
('97fdc10d-7eaa-4575-ac58-4105eb169916', '97fdbf2e-1086-4503-b308-dd5567ebaddd', '9775c234-a83c-40ea-b495-169c69a8b77e', '2022-12-16 03:26:54', '2022-12-16 03:26:54'),
('97fdc19a-9fb8-4fef-a432-4c673244a220', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '97a668e8-b438-4721-b355-29ae40105022', '2022-12-16 03:28:26', '2022-12-16 03:28:26'),
('97fdc1ac-6191-4acb-b958-c54163c17cdc', '97fdbeea-5517-49bb-9328-eb03ed42ec90', '97a668e8-b438-4721-b355-29ae40105022', '2022-12-16 03:28:38', '2022-12-16 03:28:38'),
('97fdc1b6-83c2-406d-9f84-19e10b4872cb', '97fdbf2e-1086-4503-b308-dd5567ebaddd', '97a668e8-b438-4721-b355-29ae40105022', '2022-12-16 03:28:44', '2022-12-16 03:28:44'),
('97fe0288-d593-40a6-9e87-2725b04ef9b6', '97fdc445-5bdd-4ee7-90f4-4e9fd6156cd6', '9775c2a7-807b-4fd9-b47f-abbcfe7f0355', '2022-12-16 06:30:00', '2022-12-16 06:30:00'),
('97fe2348-9c05-4223-839f-d75ae913aa89', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '9775bf52-0420-40ed-9f3b-25becb237f58', '2022-12-16 08:01:34', '2022-12-16 08:01:34'),
('97ffa82e-f064-4ae8-a3cb-9ea6cb0432c2', '97ffa66f-38d2-4b52-806e-cb0a4af58e47', '9775c2a7-807b-4fd9-b47f-abbcfe7f0355', '2022-12-17 02:09:01', '2022-12-17 02:09:01'),
('97ffafd1-417d-4eea-96f1-3320c73b8622', '97ffafaf-dd39-4e13-8640-1b121149a7b3', '9775c234-a83c-40ea-b495-169c69a8b77e', '2022-12-17 02:30:21', '2022-12-17 02:30:21'),
('97ffb092-222b-4aff-85e0-9b1f6c1c3791', '97ffb077-1e2e-4350-9441-2bc3fbc85057', '9775c234-a83c-40ea-b495-169c69a8b77e', '2022-12-17 02:32:28', '2022-12-17 02:32:28'),
('98000399-72fb-4045-a884-8c9a8bf27eaf', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '97997c1d-8ac4-451c-8239-dbe4a26b648d', '2022-12-17 06:24:38', '2022-12-17 06:24:38'),
('9800b22a-9e5c-40cf-8856-cd995c7bab3b', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '9775c234-a83c-40ea-b495-169c69a8b77e', '2022-12-17 14:32:45', '2022-12-17 14:32:45');

-- --------------------------------------------------------

--
-- Table structure for table `admin__unitkerja`
--

CREATE TABLE `admin__unitkerja` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_unit` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__unitkerja`
--

INSERT INTO `admin__unitkerja` (`id`, `nama_unit`, `created_at`, `updated_at`) VALUES
('977fd392-8837-44b7-b7f5-d90ec6b8e1b1', 'JURUSAN TEKNIK MESIN', '2022-10-14 06:04:22', '2022-10-14 06:04:22'),
('977fd42e-a5a9-4ec4-bb29-7c221e147c68', 'JURUSAN TEKNIK PERTAMBANGAN', '2022-10-14 06:06:04', '2022-10-14 06:06:04'),
('977fd451-f737-4442-b5ce-e59124f9b183', 'JURUSAN PENGELOLAAN HASIL PERKEBUNAN', '2022-10-14 06:06:27', '2022-10-14 06:06:27'),
('977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'JURUSAN TEKNOLOGI INFORMASI', '2022-10-14 06:06:45', '2022-10-14 06:06:45'),
('977fd486-c9e1-4870-9173-12a69f9483fa', 'JURUSAN TEKNIK ELEKTRO', '2022-10-14 06:07:02', '2022-10-14 06:07:02'),
('977fd4a3-1c66-400b-ba68-816dffe46253', 'JURUSAN TEKNIK SIPIL', '2022-10-14 06:07:21', '2022-10-14 06:07:21'),
('97a78672-1004-4df1-a580-96b256c6b048', 'KEPEGAWAIAN', '2022-11-02 23:41:49', '2022-11-02 23:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `admin__unitkerja__detail`
--

CREATE TABLE `admin__unitkerja__detail` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `id_pegawai` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `id_unitkerja` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__unitkerja__detail`
--

INSERT INTO `admin__unitkerja__detail` (`id`, `id_pegawai`, `id_unitkerja`, `jabatan`, `created_at`, `updated_at`) VALUES
('97ffa5e8-3dd7-49d3-8ef5-ff6f24881ea1', '97fdbe59-a15f-453d-a6d0-7e4ee14aeb69', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Dosen', '2022-12-17 02:02:39', '2022-12-17 02:02:39'),
('97ffa60a-2803-45aa-a002-e9e9bd81f6b6', '97fdbf2e-1086-4503-b308-dd5567ebaddd', '977fd46d-5eb2-47d4-ba72-e155a1ec6d89', 'Ketua Jurusan', '2022-12-17 02:03:01', '2022-12-17 02:03:01'),
('97ffa763-549d-4de6-bb41-8154400d5e3a', '97ffa66f-38d2-4b52-806e-cb0a4af58e47', '977fd4a3-1c66-400b-ba68-816dffe46253', 'Dosen', '2022-12-17 02:06:47', '2022-12-17 02:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `connection` text COLLATE utf8mb4_general_ci NOT NULL,
  `queue` text COLLATE utf8mb4_general_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2022_10_14_054307_create_simadu_pegawai_table', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(6, '2022_10_30_191341_create_admin__izin1_table', 3),
(7, '2022_10_30_192040_create_admin__izin1_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_general_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `simadu__pegawai`
--

CREATE TABLE `simadu__pegawai` (
  `id` varchar(36) COLLATE utf8mb4_general_ci NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nup` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nik_ktp` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `gelar_depan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gelar_belakang` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `simadu__pegawai`
--

INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `created_at`, `updated_at`) VALUES
('02b2a632-7432-4eaa-9898-b2ea879ff373', NULL, '19780803 201509 168', NULL, NULL, 'Heri Darmawan', NULL, 'S.T', 'Ketapang', '1978-08-03', 'Laki-laki', '', '$2y$10$y6l3HQt7AXMjpmsAcCpZV.gbZlUngvW./3VAWZ9qot5SW2Q6ZTHea', '2022-10-13 22:43:08', '2022-10-13 22:43:08'),
('02fb52d1-876d-4dca-83d5-a8d769842eb5', NULL, '19890614 201302 129', NULL, NULL, 'M. Riduan', NULL, 'A.Md', 'Ketapang', '1989-06-14', 'Laki-laki', 'Islam', '$2y$10$z0agwL1ZIU4v6YCmNbqblOicUnvWmrqzEppsgQD3JE3Hbvqj7e31u', '2022-10-13 22:43:08', '2022-10-13 22:43:08'),
('03968e4c-1c63-4e6e-8d6a-4c31651cb5ac', '19850516 202121 2 004', NULL, NULL, NULL, 'Eva Susana', NULL, 'A.Md', 'Ketapang', '1985-05-16', 'Perempuan', '', '$2y$10$.s5QDoEKN87wKM8mkIdqF.3X46.xM4GVBVdjXMzyIwmS6BSjo5RSu', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('03c8bbe4-15b5-4fa5-8024-dcc8abd2f9ac', NULL, NULL, NULL, NULL, 'Vensya Aswal Anugerah Panca Poetri', NULL, 'A.Md', 'Pontianak', '1993-03-31', 'Perempuan', 'Islam', '$2y$10$rSZtuVjEvqMJB.oxjQ3K1eHamV1pKY/KVvwNXUk/1hOy1CbXBlO4S', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('045cfd08-9a76-4c18-a1eb-b43a99f48c57', NULL, '19920717 201512 174', NULL, NULL, 'Devi Elvira', NULL, 'S.Pd', 'Ketapang', '1992-07-17', 'Perempuan', '', '$2y$10$hv8e7E5J7niC1keQcBJ1j.BOjLVRc6isv9..Rk4rezgesSvoMb5GC', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('0854e795-2c48-484e-b919-675b7be7dc7c', '19830917 202121 1 001', NULL, NULL, NULL, 'Adha Panca Wardanu', NULL, 'S.TP.,M.P', 'Pontianak', '1983-09-17', 'Laki-laki', 'Islam', '$2y$10$AzBc1iBbkAbvHs4adbpBBunGHipuXQ5VRjs2ww6WlpWYYCgNAmqZG', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('093cca9b-a773-4867-a5f6-a665467f791b', NULL, '19890622 201601 95', NULL, NULL, 'Juniarti', NULL, 'A.Md', 'Ketapang', '1989-06-22', 'Perempuan', '', '$2y$10$IjdGivRL34tcRYC7JU1vAe.Ptj.Dk15cPpQCRJJlv8HPII8I1vJ4u', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('0a89879b-7875-4420-ab42-4ec9cb00e86e', '19910217 202121 1 002', NULL, NULL, NULL, 'Fajar Pebriyono', NULL, 'A. Md', 'Ketapang', '1991-02-17', 'Laki-laki', '', '$2y$10$KikbjMBnf6sLUfp9CJq.M.J.Bw3IUyZHCMF6v477iQhno3y29edWm', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('0ed02966-83fd-4b68-b3e6-077f75582dd2', NULL, '19961119 202107 260', '6171035911960020', NULL, 'Dyah Novia Nugraheni', NULL, 'S.Tr.Ak.,M.Ak.', 'pontianak', '1996-11-19', 'Perempuan', 'Islam', '$2y$10$vRfDSLEwsvf7witC5bRy8O9KHomJbHuHOr8/kiVh7JPTgwC4nTS7.', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('13c7279b-9d2e-4afa-a641-ca2ebc14f151', NULL, NULL, NULL, NULL, 'Moh Rokim', NULL, '', 'Purworejo', '1970-01-01', 'Laki-laki', '', '$2y$10$/0JJj5cTVLmZnFD0lor0FeF.CfghFjUiwWzT/SKs2NIyXKqZIKHCq', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('13dd745d-221f-421f-b78b-138131893d28', NULL, NULL, NULL, NULL, 'Dedi Kurniadi', NULL, '', 'Ketapang', '1970-01-01', 'Laki-laki', '', '$2y$10$qoIVrnyZlhJhVWc3IoB0DOYYbfC3B6F8Sh7XlqVX19/qrQyM6ISAS', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('143f2dec-fc53-45e6-a700-989bdf50c019', '19851008 202121 1 005', NULL, NULL, NULL, 'Erick Radwitya', NULL, 'S.ST., MT', 'Ketapang', '1985-10-08', 'Laki-laki', 'Islam', '$2y$10$kADr8tbolWbVBw3B1g0Gl.Zi8dR8QpGUYehnthqzktsGdIzlwzMdS', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('14e636c6-3ca1-4e24-9072-3b0b707abc99', NULL, NULL, NULL, NULL, 'M. Randi Hardiyanto', NULL, '', 'Ketapang', '1993-05-25', 'Laki-laki', '', '$2y$10$7ay/mUFpF4vbHrxWN5sYLeP872JH0J.ZhBLW/YvqvZKK4v/KViB4e', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('15417e2f-797e-43fe-ac3f-54b550f683ad', '19710324 202121 1 001', NULL, NULL, NULL, 'Molyadi', NULL, 'A.Md', 'Ketapang', '1971-03-24', 'Laki-laki', 'Islam', '$2y$10$45yAud6wqz4iPDWP5DnfCu6qiOA5cbnJ3p.L6NfecEf2TWExNyxLm', '2022-10-13 22:43:09', '2022-10-13 22:43:09'),
('159c1ff3-499e-4acc-84c2-bc844f8da135', '19820310 202121 1 003', NULL, NULL, NULL, 'Trian Adimarta', NULL, 'S.TP., M.Sc', 'Surabaya', '1982-03-10', 'Laki-laki', 'Islam', '$2y$10$Mb4y5MP0.Q2XK/tlrmXquOJtN0YlkDFIgDwDI.vA7eRc.g/R3VXCG', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('16cb2f5a-392a-48bf-b846-bcf548ded51f', NULL, '19920521 201512 175', NULL, NULL, 'Muhamad Reza Lukmana', NULL, 'A.Md', 'Ketapang', '1992-05-21', 'Laki-laki', 'Islam', '$2y$10$ZRtMJxGxVCC9NlSHQ2iiSudLpeAqzZHkGOvbVmvb5j8OdaZQSl5Gi', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('18413e6f-09d1-4ae5-b32e-cb0d2c2f4427', NULL, NULL, NULL, NULL, 'Supiandi', NULL, '', 'Ketapang', '1980-06-09', 'Laki-laki', '', '$2y$10$6NMVPYxMGaDZ74Q.pIiHLu1ohEeJXPU/hESpXVbdHOVeI7v8SmAfe', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('18514bb6-0287-4061-b323-05247b4132c4', '19720918 202121 2 002', NULL, NULL, NULL, 'Heni Haryani', NULL, NULL, 'Ketapang', '1972-09-18', 'Perempuan', '', '$2y$10$B2px0bdHtoYEibwFcgGo8.LuVwulZYsAEG4b646MTY/XVRGfwcM5S', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('189bd94f-5fd1-451a-8a00-031840e9a07a', NULL, NULL, NULL, NULL, 'Khairil', NULL, 'S.P.,M.P', 'Samili', '1981-09-17', 'Laki-laki', 'Islam', '$2y$10$aLDCANBaRdlvcqEj3/S.Duzf7McNaRHwfKjbCsZq.YaTzhHjoslYa', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('18eebaa7-84fd-48ac-9c61-81dfe56e8074', '19770221 200803 1 001', NULL, NULL, NULL, 'Uti Rustam Efendi', NULL, 'S.T., M.T', NULL, '1977-02-21', 'Laki-laki', 'Islam', '$2y$10$kz2a11QI/QFRkuDBZBVbJuT0ZK9RpFmoC.HIVE8vkmX7JGUOC6W1u', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('193ca687-65a0-4711-b0c0-1927043c277d', NULL, '19930528 201603 202', NULL, NULL, 'Fachrul Rozie', NULL, 'S.T, M.Tr.T', 'Ketapang', '1993-05-28', 'Laki-laki', 'Islam', '$2y$10$YIhUH71gOh53y24e5FTQ4eZ3BlcZy7AGTgjL8hgeT1Mfm7UTTGQvK', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1a3344f4-7b24-487e-a9fb-5ad326c13fff', '19900802 201903 1 003', NULL, NULL, NULL, 'Kondhang Dhika Kusuma', NULL, 'A.Md', 'Surakarta', '1990-08-02', 'Laki-laki', 'Islam', '$2y$10$8ptt6aEg1GufsObOFaulvOHBMxWeW.nXdlc57WgbaoTbN2b6Av/CW', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1a9c1f07-2017-4492-a4f6-0dc243e7d999', '19911112 201903 1 014', NULL, NULL, NULL, 'Kasrianto Wijaya', NULL, 'A.Md', 'Palopo', '1991-11-12', 'Laki-laki', 'Islam', '$2y$10$oBH5K8sj3s4timtmy5HU2eYuplsI0jZSgMeSllCK7CR6XZHQsUdIi', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1b0267f4-d517-4512-a4c3-301a96372d12', '19890623 201903 2 015', NULL, NULL, NULL, 'Syarifah Aqla', NULL, 'S.Pd.,M.T', 'Pontianak', '1989-06-23', 'Perempuan', 'Islam', '$2y$10$d7HCqw8sOLtSLRkWLZBlpOiruECjAZHAeBvZm/S0wYh377NfJGyIu', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1b483074-16f8-4c4a-908a-ba3e3ee8e7e1', '19780511 202121 1 003', NULL, NULL, NULL, 'Helanianto', NULL, 'S.T.,M.T', 'Randau', '1978-05-11', 'Laki-laki', 'Katholik', '$2y$10$R0fLxQY2cpW.cH.dpxgI2eYHM.q4NLgUm0vp.4SZukaIR9sY5jciW', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1ba7321f-8186-4fbb-8cff-ff1d597d4336', '19760921 202121 1 002', NULL, NULL, NULL, 'Normansyah', NULL, 'S.T.,M.T', 'Ketapang', '1976-09-21', 'Laki-laki', 'Islam', '$2y$10$SnyDzU8vpKVaQF1J4rqp..i2L9wAM6hlRp5JapkZ07d1/iM.hWjVK', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1d5b7688-73c1-4142-99f3-94bbae58ed79', '19880501 201903 1 007', NULL, NULL, NULL, 'Budi Pratomo Sibuea', NULL, 'S.ST.,M.ST', 'Tebing Karimun', '1988-05-01', 'Laki-laki', 'Kristen', '$2y$10$oUzl3VogiUVjDWdMi2TCC.Y5GAC3EBlLZnMJc3D6qmRHFMO/WBz1K', '2022-10-13 22:43:10', '2022-10-13 22:43:10'),
('1e0985f8-2c11-4f3f-845b-6bf9a09c3b2d', NULL, '19930128 201609 210', NULL, NULL, 'Ar-Razy Muhammad', NULL, 'S.T', 'Pontianak', '1993-01-28', 'Laki-laki', 'Islam', '$2y$10$p7zbAq/XYOwde2h2KhIS2eOZzwSmwaq0BJS8YXlZHMJges5j6iMp.', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('1e9dc080-4487-494e-9225-72b737e726c3', NULL, '19880328 201802 230', NULL, NULL, 'Muhammad Fadli', NULL, 'A.Md', 'Semarang', '1988-03-28', 'Laki-laki', 'Islam', '$2y$10$rgK1kn0G7De.A0tUHobM/O6cDsrboVLHN44byFcPpFJspMWlFoXfq', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('1f160b23-2073-4ad4-9ffc-1e417dc85cc9', NULL, '19900109 201512 171', NULL, NULL, 'Sarwendah Ratnawati Hermanto', NULL, 'S.Pd., M.Sc', 'Surakarta', '1990-01-09', 'Perempuan', 'Islam', '$2y$10$xgsYMODDOa7FYoNvq9sco.aXqtmfrodpOWtmHGYy9amLN/GXtHQ/C', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('20ab0593-f9f5-405f-86ff-a3f3c50d804b', NULL, '19910413 201509 161', NULL, NULL, 'Rika Fitry Ramanda', NULL, 'M.P', 'Ketapang', '1991-04-13', 'Perempuan', 'Islam', '$2y$10$r5LWz9/JuaSjUSmhPtrve.jsOrffT4wgrU9Yzx6/4m7PE2GAWF/76', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('20c6f98d-f528-4fc2-9016-ef526e32b7ba', NULL, '19830327 201701 215', NULL, NULL, 'Uray Sriyani', NULL, '', 'Balai Karangan', '1983-03-27', 'Perempuan', '', '$2y$10$rz3i4mjDpNyEiOtvTNwGi.Jk6xKNEshnGctThQdt4Nxm4vlBBhlOS', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('2189d7cd-773e-4845-84a5-fffaa1ea901f', '19880315 201903 2 011', NULL, NULL, NULL, 'Maya Santi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-03-15', 'Perempuan', 'Islam', '$2y$10$yUFSb2OShyTOTfETyeZoPOMHHSCroJ2gAmJIk8AWrOXyMsJI.7IiG', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('22bf31f9-6306-425e-9d54-89ace70ccda4', '19880424 201903 2 012', NULL, NULL, NULL, 'Hurul\'ain', 'Ir.', 'S.T.,M.T', 'Pemangkat', '1988-04-24', 'Perempuan', 'Islam', '$2y$10$aq5fuSRLzOP250ioMBkZVebNfLECPIJag54rl8q1HXLzXG95gfsx.', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('22e45ac1-e10f-4134-8739-23fd2faa507c', '19840605 202121 1 005', NULL, NULL, NULL, 'Effendi', NULL, ' A.Md', 'Ketapang', '1984-06-05', 'Laki-laki', '', '$2y$10$SJXCZRIEEASEGW1j7nVbEu.t4w0xIB0P0tx2q6NpvPSfMqcX.eKkm', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('252e762f-e81d-4c33-8aae-11b68c651c17', NULL, NULL, NULL, NULL, 'Ibnu Hajar', NULL, '', 'Ketapang', '1969-01-29', 'Laki-laki', '', '$2y$10$b7ieGRQs2oq4FO0cI0ejluZrlnmp9YO9LGVhnVyNHTbUYh8wp/bnS', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('26f5893c-c355-4040-9ae4-6e53187c725f', '19740722 202121 1 005', NULL, NULL, NULL, 'Muh Anhar', NULL, 'S.T.,M.T', 'Boyolali', '1974-07-22', 'Laki-laki', 'Islam', '$2y$10$PoL/4XDqC7NerF8h3p4ViejV2CV8XmwJT/j398/FcmyQXIb7ybsje', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('28e2a56e-3c76-4d19-844f-a3092954f0b7', '19850217 201504 2 002', NULL, NULL, NULL, 'Encik Eko Rifkowaty', NULL, 'S.TP.,M.P', 'Pontianak', '1985-02-17', 'Perempuan', 'Islam', '$2y$10$hjfqjOlr3thyoiBOLdPuB.Rq5QW5IotPRBkRh4sOtpGzfPv/NNdly', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('29157361-a115-43a4-86ed-fbe66964c0d7', '19810521 202121 1 006', NULL, NULL, NULL, 'Dedi Sartono', NULL, 'A.Md', 'Ketapang', '1981-05-21', 'Laki-laki', '', '$2y$10$NZkIkcQd3W6c27ygaeZ/Set3EulkxNASEsBGB0mxJBBVYFKdeEApC', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('295e592a-3426-40a6-899c-8860e5929164', NULL, '19911010 201507 155', NULL, NULL, 'Lita Nurpuspita Sari', NULL, 'S.Sos.', 'Singkawang', '1991-10-10', 'Perempuan', 'Islam', '$2y$10$tEjQIMmR5k0tKLaNy1Uuu.Gwv2a6Inz7T2wDs1ZHMnRngmS5kF04C', '2022-10-13 22:43:11', '2022-10-13 22:43:11'),
('29cb26c6-4361-4341-971d-07be567f2a6f', NULL, '19820601 201602 198', NULL, NULL, 'Lusia Romana', NULL, 'S.IP', 'Pantan', '1982-06-01', 'Perempuan', '', '$2y$10$B1jlSgcMtQaaYTRrLw5QVOYqdC0tVxUX1F0oCOxCJ4AdjyE.MQFCG', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('30ccea2e-48be-4213-ae9a-379abd41a42c', NULL, '19821217 201509 164', NULL, NULL, 'Beny Setiawan', NULL, 'S.TP.,M.P', 'Pontianak', '1982-12-17', 'Laki-laki', 'Islam', '$2y$10$HtJK.rObKj9K0bEH8ILzCun4Cso.4UnZ84mtnVf1DTNO7/7SOV1I.', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('30f2648e-3a3a-45a0-bdc2-e984af4abb7f', '19890705 202121 1 002', NULL, NULL, NULL, 'M. Iwan Toro', NULL, 'A.Md.', 'Pebihingan', '1989-07-05', 'Laki-laki', 'Islam', '$2y$10$gjOtao0Ni6bjfgjBtDcrLeQCa.nLcPfnoRWQfYgYd4zJDqYfIiy1W', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('31236e8b-5191-4433-95a9-0390e1e13ac1', NULL, '19931213 201601 183', NULL, NULL, 'Yunita', NULL, 'A.Md', 'Ketapang', '1993-12-13', 'Perempuan', 'Islam', '$2y$10$sFtscuqwxln5dVjlkF66weombCvNYuLKFGz9ND32yjfurVpbDqU4C', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('321326cb-17cd-4634-bdc8-619c26d4aea3', NULL, '19911112 201411 146', NULL, NULL, 'Winda Arlianty', NULL, 'S.Kom.', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$g6RAWXZd98D15yMvj2ok3OZLcUkz.o8bSK.0NozFMPf2oNtA0pIOq', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('32d16bd7-58b5-487a-aab3-66cbb4801605', '19761218 202121 1 004', NULL, NULL, NULL, 'Abang Suryadi', NULL, 'A.Md', 'Putussibau', '1976-12-18', 'Laki-laki', 'Islam', '$2y$10$P./HFx6m3hAiewhXuBcC0OOgoC2SL4iWInFGVrhZHWNojCg8NDmLq', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('35a66251-da37-4d69-b652-7eee40512ca2', '19820521 202121 1 003', NULL, NULL, NULL, 'Refid Ruhibnur', NULL, 'S.ST., M.M.', 'Pontianak', '1982-05-21', 'Laki-laki', 'Islam', '$2y$10$UZpXsIGTvZYy4Ma15k07dOaJ9RWGIHYwszdnBfDlcP.kyOwXLKMUW', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('384a1c52-c826-4a58-9dac-effcab2e701a', NULL, '19901117 201604 205', NULL, NULL, 'Uci Novianti', NULL, 'S.Pd', 'Ketapang', '1990-11-17', 'Perempuan', '', '$2y$10$eqAX56afEb7pJDciv6GobuQHMWZriTid2sP52pqoE3pxjNcSSqKTe', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('38e42c98-b490-4f03-a289-35939e035cfa', NULL, '19900123 201601 178', NULL, NULL, 'Irfan Cholid', NULL, 'S.P.,M.MA', 'Ketapang', '1990-01-23', 'Laki-laki', 'Islam', '$2y$10$VTnG.YTo/ez5874aX6sD9O5py5bao3./5K8aM.pEuctifPq9WELZy', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3a1f1872-c67a-4bc7-9f92-0c852f44e1ec', NULL, NULL, NULL, NULL, 'Agus Sudrajat', NULL, '', 'Banyumas', '1979-06-08', 'Laki-laki', '', '$2y$10$N89VlUPi7Nv7UUsGOqFLkuVwurY/wBbkMU583/GeXi0YThzGGi/j6', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3ae1bb68-15ef-4eaa-a153-0d7dd87c6654', NULL, NULL, NULL, NULL, 'Rosnila', NULL, '', 'Sembelangaan', '1967-01-05', 'Perempuan', '', '$2y$10$KbxeWGsU/hvD4thBPOgsOuSXM4ubrRAoqRz4VwwSSrPu0xh0fdQNm', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3bb510ed-d9cc-4ae5-bf83-ecb726cbc832', '19640914 198601 1 003', NULL, NULL, NULL, 'Temy Akhyar', NULL, NULL, NULL, NULL, 'Laki-laki', 'Islam', '$2y$10$BkiNCvLLA/rnZx9g2toGUu8gVGc38vAL9W//mZVQDCUfyGUNFTa1C', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3c7a9d69-339d-4ee3-9943-b9acec923fc5', NULL, '19871107 201507 156', NULL, NULL, 'Lukman Faisal', NULL, 'S.H.', 'Singkawang', '1987-11-07', 'Laki-laki', 'Islam', '$2y$10$5jUK6.UZWxeRZQZuJuiaqevv3nW3WxvVjZ4z2FuLvesl04xBMWaL2', '2022-10-13 22:43:12', '2022-10-13 22:43:12'),
('3eeb6e49-8f87-483b-b811-e7b91dc94a8d', NULL, '19911121 201701 214', NULL, NULL, 'Anugrah Bayu Saputra', NULL, 'A.Md', 'Pontianak', '1991-11-21', 'Laki-laki', 'Islam', '$2y$10$TjC/dL0uHsYI1tvxU0DC8OL20bmLjHOGYE7WeNIT2RnzDB6jZQUnS', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('3f60bbb2-e5e2-4297-b003-62fe2ffebf43', NULL, '19980609 202104 252', '6104120906980003', 'junaidiju4109@gmail.com', 'Junaidi', NULL, 'A.Md.Kom', 'Ketapang', '1998-06-09', 'Laki-laki', 'Islam', '$2y$10$yGElTLXgSQpJRF7ACRwxaej3s/GWkKQuzYRqHIuJsNXzshL05nld2', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('42e5ae5d-611b-4c00-833e-ea735145b325', NULL, '19930216 201809 240', NULL, NULL, 'Ira Arianti', NULL, 'S.P.,M.P', 'Ketapang', '1993-02-16', 'Perempuan', '', '$2y$10$qAF5dTHbs5/9evXi3IvLQeHqp1E/UEv4wLEhMdcVRNEpzqkmwpUHC', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('436521dd-c443-4db6-89ae-9e237e349402', '19791002 202121 2 008', NULL, NULL, NULL, 'Erma Novita', NULL, 'A.Md', 'Ketapang', '1979-10-02', 'Perempuan', 'Islam', '$2y$10$r5brSn97Bw4/c1hoThphW.rR/Tf52F64bOorWuGdTMG61rVrHGlIq', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('43a2c3e2-6794-4fe3-a410-260d71bec47d', NULL, '19840207 201001 092', NULL, NULL, 'M. Hanif Faisal', NULL, 'M.T.', 'Pontianak', '1984-02-07', 'Laki-laki', '', '$2y$10$j6ladsXTzas1GLkyC/BSXe3yMLU1Q85.7bYXHvZrty1W7VV9uIlny', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('4408ed64-f04d-48df-ba7f-9b082c9438fc', NULL, NULL, NULL, NULL, 'Ary Rubiyanto', NULL, '', 'Ketapang', '1989-02-18', 'Laki-laki', '', '$2y$10$uiEoOt77CMfYEYFOCK54k.OPoa0MKLC8b3gHIND6vfV1zJRBFFSoe', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('44c7b811-eae2-42cb-b1d6-243f09822b99', '19890816 201903 1 002', NULL, NULL, NULL, 'Ahmad Ravi', NULL, 'S.Pd.,M.Pd', 'Masamba', '1989-08-16', 'Laki-laki', 'Islam', '$2y$10$OR.PSmO8NEfczwDudgn7KOB0je.c.HLpGTPYkrcXVzby1m6N8m//C', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('458c592c-348c-46d1-b344-b792fb64d42c', NULL, '19980908 202008 241', '6104174809980004', NULL, 'Shela Krisdayanti', NULL, 'A.Md.P', NULL, '1998-09-08', 'Perempuan', 'Islam', '$2y$10$9rg17LuplDAJwFQxr.SVI.uInAmulbb7L/v7zKpWqjOGFmqmUpdT6', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('47ceee1a-b33b-4239-9a46-1e58b5a672ad', NULL, '19830627 201512 176', NULL, NULL, 'Wienda Soesanti Putri', NULL, 'SE', 'Surabaya', '1983-06-27', 'Perempuan', 'Islam', '$2y$10$qH6xfgn9djalGAbfl02OQ.6trsB4ov12ywkhUcuiPpA3vSFcWQonq', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('4839ee6d-2c3e-426a-9354-7db9e48ae439', '19880808 202121 1 001', NULL, NULL, NULL, 'Erwin', NULL, 'A.Md', 'Ketapang', '1988-08-08', 'Laki-laki', 'Islam', '$2y$10$snz10mI94juk.WdN0Qnu5OQ2KYlrJGaAJ.jLB3lh/mxPjvNJlsHhm', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('488fb59f-f26b-48f9-96a9-fad9e800e4d1', '19891023 202121 1 001', NULL, NULL, NULL, 'A.Yani', NULL, 'SP', 'Ketapang', '1989-10-23', 'Laki-laki', 'Islam', '$2y$10$9oXwEdP3svpOwrBIFrZAOeHmfjst/I5Ujky0eOPILGBLX9XaXUsES', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('49ce6c30-837f-45c3-8e2c-6f9870ebc2e9', '19750116 202121 1 003', NULL, NULL, NULL, 'Tardi Kurniawan', NULL, 'S.Sos,.M.Si', 'Pontianak', '1975-01-16', 'Laki-laki', 'Islam', '$2y$10$jNvetPQ.pPSFeONUDkkrzOrvgXWnme9AaebfcKRKHlx5W6jUCpiyC', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('4c3d0071-440e-4e4a-837f-59eea1cc348e', NULL, NULL, NULL, NULL, 'Sy. Adly', NULL, '', 'Ketapang', '1980-09-04', 'Laki-laki', '', '$2y$10$d..d4CbHUyHomQvdNOSPluy.q3gey4ezPogzEJpphLRSn6ns9J8we', '2022-10-13 22:43:13', '2022-10-13 22:43:13'),
('4d744851-78a2-40b9-ada0-0a17f50d990e', '19790626 202121 1 006', NULL, NULL, NULL, 'Sy. Ishak Alkadri', NULL, 'S.ST., M.T', 'Pontianak', '1979-06-26', 'Laki-laki', 'Islam', '$2y$10$9soIESykeGfMxwW2M8wwGOugdfLGP4obn8qOGncNGE4O8pqRAZlYW', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('4e441045-7e87-46c6-8f0c-68298b2934ae', NULL, '19770627 201601 187', NULL, NULL, 'Masyhudi', NULL, 'SE', 'Jakarta', '1977-06-27', 'Laki-laki', 'Islam', '$2y$10$Vs6aK1iIDXjTokgeD.A4ReQ0COT9w5439TiTaol0RsFyolhefG/he', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('4eae5a1d-bc44-4301-afd8-833a1bd0f6cf', '19880919 201903 1 014', NULL, NULL, NULL, 'Herman', NULL, 'S.Si.,M.T', 'Singkawang', '1988-09-19', 'Laki-laki', 'Budha', '$2y$10$wAnquvyCX4DO2nOXv9jpKO3zxtPd2Go/4JlRPs162G/T9uCB3ba6C', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('50660972-640c-49bd-b4f3-b988cfa241ec', '19910414 201903 1 008', NULL, NULL, NULL, 'Sy. Muhammad Zaki', NULL, 'SST', 'Ketapang', '1991-04-14', 'Laki-laki', 'Islam', '$2y$10$zaNXbzd6QV/QgNBd6J30Yuqq4XoTQleEllbqlHoc8LWyn1MAbW4jy', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('5123ac8d-c8fb-436a-b417-28a153cf6c16', '19921021 201903 2 017', NULL, NULL, NULL, 'Diani Dwi Oktavianti', NULL, 'S.ST', 'Putussibau', '1992-10-21', 'Perempuan', 'Islam', '$2y$10$evY4aPmIbcnbfqKNuXQdtua5dBlYEY8yzU8Wu101/URcRqWvI0DGu', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('51a80ae5-f512-4310-8243-2a4abe75a345', NULL, NULL, NULL, NULL, 'Sy. Abdurrahman', NULL, '', 'Pontianak', '1980-05-09', 'Laki-laki', '', '$2y$10$HlsoT7dVhJ2/iWeDC1a4T.H0zdC/AOJzu2o0pipaDdnP6PfY4HNI.', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('53765b6c-4322-4c67-956a-12f6b811fdbc', NULL, '19910102 201406 134', NULL, NULL, 'Januarso', NULL, 'S.P.', 'Ketapang', '1991-01-02', 'Laki-laki', 'Islam', '$2y$10$.soHxn5fRmjTDN2wkmjRUe1c.7LcGpHmQPcElCjGbI47Jqicupa9K', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('54981c04-da78-4aa6-93db-6b30fb625794', NULL, NULL, NULL, NULL, 'Uti Nailul Auhar', NULL, '', 'Ketapang', '1983-06-16', 'Laki-laki', '', '$2y$10$kbNz/qIde48U76JXb6K.HOQqyTz7vYXc5qTbr3lyOKyW8iuJAVyrG', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('56391bb3-7220-4c57-97d8-c5e72987d775', NULL, NULL, NULL, NULL, 'Zulinda', NULL, '', 'Ketapang', '1979-09-28', 'Laki-laki', '', '$2y$10$D4r1sTgGlFlWcx0Pixcn/uFaImqX0cNVMNrsaW1uQ76dvC2rXNSp.', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('56d27921-8de3-4a64-8db0-fa30ec6d9a85', '19820701 202121 2 009', NULL, NULL, NULL, 'Novia Dhian Yulita', NULL, 'A.Md', 'Ketapang', '1982-07-01', 'Perempuan', 'Islam', '$2y$10$hhCdXbcKHHrzoSpCp6hK9.FPYVaX50uS.9JKYle.g.hSOavGE7xea', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('57e7dded-12ef-41c3-a728-71bee06f9526', NULL, '19941011 201803 239', NULL, NULL, 'Alan Purtanto', 'Ir.', 'M.T', 'Sintang', '1994-10-11', 'Laki-laki', 'Katholik', '$2y$10$mwt01StFfejgO3pzxx7V7uklExW3rayKgAPoentXsnvDDIxsYtJni', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('58563118-abc4-4d1b-93a4-58e327972409', NULL, NULL, NULL, NULL, 'Desy Putri Syafrianti', NULL, 'S.Kom', 'Sekadau', '1991-12-02', 'Perempuan', 'Islam', '$2y$10$pbWIIBpk29KR.m1Riq5Zo.jOjg9yY8KSdodJ/M.9tYYZw3pPJcwOS', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('589661c7-7bc4-4517-aeda-812297d91c0c', '19940812 201903 2 019', NULL, NULL, NULL, 'Fionna Araminta Fabiola', NULL, 'S.E', 'Ketapang', '1994-08-12', 'Perempuan', 'Islam', '$2y$10$ZRpwBFs0odQNmi6fmOTmjOPdHMo2lDYRQCSkx6L3FIKuDnaM1zdBG', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('5997603c-54d6-4b59-bb77-0fda630ee588', NULL, '19910127 201509 166', NULL, NULL, 'Pusparini Akhmad', NULL, 'S.Si', 'Palembang', '1987-01-27', 'Perempuan', 'Islam', '$2y$10$RwmTixerGBUwUHlAvkfgxOTjOc64FB0YKJOPTvpjEU18yKBEgKDAG', '2022-10-13 22:43:14', '2022-10-13 22:43:14'),
('5cde66a2-643d-46ea-83b0-7b1de9399637', NULL, '19890404 201512 117', NULL, NULL, 'Irfan', NULL, 'A.Md', 'Teluk Melano', '1989-04-04', 'Laki-laki', '', '$2y$10$FibgMOwQF6SLIBD91.nNNeSFXU4JSLky3t2lDoU.a1PLqkXhKeQBS', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5e418a66-3916-43d2-aabb-6ff1908d25f4', '19741026 202121 2 003', NULL, NULL, NULL, 'Utin Ida Fitriana', NULL, 'SE', 'Ketapang', '1974-10-26', 'Perempuan', 'Islam', '$2y$10$7Ol/bS4gKoPaXuBpU12NXO9zc0zZCV1drPVpj8GxHX4gt7o0wSkjG', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5e636dc2-6006-420e-88ac-18b7521e50bb', NULL, '19961218 202008 250', '6104175812960003', NULL, 'AMANDA TIARA REZKI', NULL, 'SM', NULL, '1996-12-18', 'Perempuan', 'Islam', '$2y$10$ao6d7RuA4I58Ebb8DzZuyuvuZHH3r4tIdiw/3BVFC3/Wjg.oJLju.', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5eb61db0-c4dc-4013-b48d-7aaafd73b9b6', NULL, NULL, NULL, NULL, 'Suherman', NULL, '', 'Ketapang', '1988-10-12', 'Laki-laki', '', '$2y$10$wp6s4VEEwIY.9Mq7zy0yTO4gQh7NSMYA8SlwcaL7Ja33Ltyhy1r1u', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5fb62dca-5b17-44ef-8849-257eaf4c8cc2', '19840105 202121 1 003', NULL, NULL, NULL, 'Epriyandi', NULL, 'S.T.,M.T', 'Ketapang', '1984-01-05', 'Laki-laki', 'Islam', '$2y$10$w755IEOBbME2.91C4iXTQ.LDJganJnGrO3.F0be2vX6ps.8rkKKfy', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('5ffd6435-601b-4276-8c73-53c7cecdd701', '19801126 202121 2 005', NULL, NULL, NULL, 'Novitawati', NULL, 'A.Md', 'Ketapang', '1980-11-26', 'Perempuan', 'Islam', '$2y$10$GmEmXzRCo1hxflKZZQnqSe6aBg99dl4iLX4myiEX.CyCpjgR26H1W', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6351842b-6db4-4549-94c6-587f7e8d3883', '19840425 202121 1 001', NULL, NULL, NULL, 'Khairul Muttaqin', NULL, 'S.Pd.I.,M.Ag.', 'Singkawang', '1984-04-25', 'Laki-laki', 'Islam', '$2y$10$AFOCWlQka39B6QluPM2k0.1PyZoUze8lCqxHcrwu5z703pV3assgO', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('643a252e-3129-4f67-aba4-8ad6cbaca0c8', '19930818 201903 2 026', NULL, NULL, NULL, 'Firmanilah Kamil', NULL, ' S.Pd.,M.Pd', 'Malang', '1993-08-18', 'Perempuan', '', '$2y$10$vFPwz/V3GpMeouHaQkb.qeHabbnQonN.PLzOQ5wIjJ.QWZAVgqtku', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('652d3790-71e1-449e-88fb-a380428c0135', '19900619 202121 1 001', NULL, NULL, NULL, 'Zulpandi', NULL, 'A.Md', 'Ketapang', '1990-06-19', 'Laki-laki', 'Islam', '$2y$10$mqc15vWAWkZFe33JFnHTju1sdHUJGHI.HtOOOulJGEzAtGeJ9S4mq', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('68117ca1-bd03-47f2-849f-08f9d7c0d593', NULL, '19870311 201601 179', NULL, NULL, 'Sopiana', NULL, 'S.P.,M.Si', 'Mentibar', '1987-03-11', 'Perempuan', 'Islam', '$2y$10$2nptY5fxgz73RhewiQBeIuV2/JrRck5U17oRP1PdE4A2clzw7xQTu', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6885f19d-bc29-4b2b-9062-c2fedf8efc79', NULL, '19820623 201509 169', NULL, NULL, 'Saifudin Usman', NULL, 'S.T., M.Tr.Kom', 'Pontianak', '1982-06-23', 'Laki-laki', 'Islam', '$2y$10$.JLh4T5D0F.K8Ov7Ty1RnuPByBtwYaIe3.Hg05LNqHUjjbPIFu36q', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6c395ad5-e91f-47f3-aa21-bc294c185ada', '19880830 201803 2 001', NULL, NULL, NULL, 'Venti Jatsiyah', NULL, 'S.P.,M.Si', 'Sambas', '1988-08-30', 'Perempuan', '', '$2y$10$TLmsYIOpIJpoBRyQ.rtWcevH5Dv.xWdZyEGVZOIU1bgyXJwPDRqzO', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6d42c4a4-f4de-4a38-9b96-bc7f1ee1bea4', NULL, '19790731 201211 123', NULL, NULL, 'Henny Yulianti', NULL, 'A.Md.', 'Ketapang', '1979-07-31', 'Perempuan', 'Islam', '$2y$10$mauQNx3c2PBB2fcEz7C8mObBX1WoPyDfE8t..5OcH9fyQU2xDqp3O', '2022-10-13 22:43:15', '2022-10-13 22:43:15'),
('6da9d71f-9c64-40cf-b6b7-2d0657767ca4', '19771006 199703 1 003', NULL, NULL, NULL, 'Untoro Budi Harjanto', NULL, NULL, 'Yogyakarta', '1977-10-06', 'Laki-laki', 'Islam', '$2y$10$ZJdKAVcROKCCgJZ8uPk6kOJZuf97Tpx7YPtApen96WIM/.Lzw0zMy', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('6ed6b0f9-dc4b-4b84-90b6-099cfdd2e1c2', '19721212 202121 2 006', NULL, NULL, NULL, 'Utin Aimanul Habasiah', NULL, 'S.Sos', 'Ketapang', '1972-12-12', 'Perempuan', 'Islam', '$2y$10$KjZo2zhS/8dtj1v65hCUjetH5HJiEU0QjtK1t6LEowysfa/9cBJb6', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('6f6de946-5158-424c-8bfe-aa4b8a9c4df6', '19811225 201503 1 001', NULL, NULL, NULL, 'M. Rangga CH', NULL, 'S.Kom', 'Ketapang', '1981-12-25', 'Laki-laki', 'Islam', '$2y$10$g8TqhxyhOzx6zFHavecyIublKzp5wR5cRNEMxzgDGnPDnu6yFPLVq', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('709b3b4e-969a-4c04-9e92-5e5654ea1172', '19861031 202121 1 001', NULL, NULL, NULL, 'M. Jimi Rizaldi', NULL, 'S.ST.,M.T', 'Ketapang', '1986-10-31', 'Laki-laki', 'Islam', '$2y$10$JqulM6Amol7yfQdVnBfIvOKHqHBSgHri41FdwpmTI3Ci5NyIlUYmS', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('71b2657e-188b-4504-b605-6a488d35875a', NULL, '19871218 201512 173', NULL, NULL, 'Assrorudin', NULL, 'S.Pd.,M.Pd', 'Sidoarejo', '1987-12-18', 'Laki-laki', 'Islam', '$2y$10$TonFTfWmV9jYBkcAX.JGzOx9GZ7BDRpIIVM3USnlFG41wZ0YXRWGi', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('73d67075-744c-43c1-b3db-90e635121b08', NULL, NULL, NULL, NULL, 'Almiana', NULL, '', 'Ketapang', '1974-05-07', 'Perempuan', '', '$2y$10$KLhwbVYqCjcuEblHwMhto.KNA.D4P6M8wScmJntXbyiuOmUFMKBP6', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('769cc3ea-a955-4af8-9d8b-1509351aded3', '19910704 201903 1 015', NULL, NULL, NULL, 'Darmanto', NULL, 'M.Kom', 'Ngawi', '1991-07-04', 'Laki-laki', 'Islam', '$2y$10$ZND1NVp2ZFtRAi7DU1DYQ.aABqRKK/J0bgMvhQ5p6TnUPQChejVe2', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('78b3c200-ec4f-427c-be1e-eb899e259673', '19810822 202121 1 002', NULL, NULL, NULL, 'Awang Roy Lesmana', NULL, 'A.Md', 'Pontianak', '1981-08-22', 'Laki-laki', '', '$2y$10$mjbeZC02mFT/aSYMW4NGvu2KcLTl/C68Vj5T8jstL8UxPkmNtUZ56', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('792d0bfd-2dc1-4f35-8a26-83a306dacfdc', '19900921 202203 1 005', '19900920 201603 201', NULL, NULL, 'Ivan Suwanda', NULL, 'M.T', 'Pontianak', '1990-09-20', 'Laki-laki', 'Islam', '$2y$10$v2JnOsKgWj/eXxkorUjgeenl8cS8M8/UL8xYpc7JJDR23KTnmnmDa', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('799b456b-0e87-49de-8367-d2e78e9e74ae', NULL, '19841114 200801 047', NULL, NULL, 'Ningrum Dwi Hastuti', NULL, 'S.TP.,M.P', 'Klaten', '1984-11-14', 'Perempuan', '', '$2y$10$vkIuV5gMwtKNQYTNoicNqOUY7ni4Pdo5ovgoYo/OI1Xlq7Sfl.bha', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('79ae72a0-23be-4b20-ba79-703fb35a5eca', '19840504 201903 1 007', NULL, NULL, NULL, 'AKHDIYATUL', NULL, 'S.ST.,M.T', 'Ketapang', '1984-05-04', 'Laki-laki', 'Islam', '$2y$10$ZP7Z5trgPzWhBnBaRK6.9eNf7x.eXpQOndD0mzRE56Akkv1ZX1wRO', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('7a8c08a9-467b-4afe-8abf-07f6c2431afb', NULL, '19860615 200810 025', NULL, NULL, 'Endi', NULL, 'SE', 'Mambuk', '1986-07-15', 'Laki-laki', 'Islam', '$2y$10$2mlT1adRFqJtS.cksJ5pbu0rt1NR28d2OSXhYw.kVbgXNbg6MrafC', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('7acb40e6-5725-40ae-a4ec-02f6ed63bd94', '19830526 201504 1 001', NULL, NULL, NULL, 'Anto Susanto', NULL, 'SST, M.P', 'Bandung', '1983-05-26', 'Laki-laki', 'Islam', '$2y$10$I6q5v3c4Q51WZPk1bA7C1O0jL5F2ufSvAm3vWB7SLhPAanntt42UO', '2022-10-13 22:43:16', '2022-10-13 22:43:16'),
('7bd1033c-7dfe-4f83-9aad-e11c292b1d84', NULL, NULL, NULL, NULL, 'Satira', NULL, '', 'Ketapang', '1974-09-06', 'Perempuan', '', '$2y$10$oz.yJFNuG5/wKfxm.9xWxujNaG8aGO3rnZoJaEn4ua8qiaLgId8zm', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('7bea437a-8777-4c94-bf63-8e0ca9651691', '19640610 202121 1 004', NULL, NULL, NULL, 'Uti Sahibul Hekmi', NULL, 'A.Md', 'Ketapang', '1964-06-10', 'Laki-laki', 'Islam', '$2y$10$EJY2n2vPQnU55WFGiGJseuYb4v1RWNE1HVkj3RGsUaaugcsxQc4oy', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('7c7c26c8-47b9-48b3-8499-7ef04f7564ec', '19831001 202121 2 004', NULL, NULL, NULL, 'Nely Kurnila', NULL, 'S.Pd., M.Pd', 'Ketapang', '1983-10-01', 'Perempuan', 'Katholik', '$2y$10$p0oCCTVa7d4VBRitagaoLutIEXabnlMY5JcmKuc1qe1FlilsHPKxe', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('7e03dfc9-498e-4b16-8bce-d4823ce87ba8', NULL, '19860710 201204 118', NULL, NULL, 'Mustapa', NULL, ' A. Md', 'Ketapang', '1986-07-10', 'Laki-laki', '', '$2y$10$Zc430cDFQ38wbuoxnTp63.tLNjAyFBRgSnf4vYg.8HoJXp.4CCo5q', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8084ae53-5ac6-40a7-9f5f-dea40fa2aab5', '19870114 201903 1 007', NULL, NULL, NULL, 'Eka Wahyudi', NULL, 'S.Pd., M.Cs', 'Mekar Asri', '1987-01-14', 'Laki-laki', 'Islam', '$2y$10$LSFNgho6vrERX1sBSqq6eemzbUr0j9vZnrIP.DazwnAECd7wmhwsW', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('86f15cfc-fcb7-47a6-ae81-5129f6ef4ddc', '19910310 202121 1 001', NULL, NULL, NULL, 'Sarijanto', NULL, 'A.Md', 'Ketapang', '1991-03-10', 'Laki-laki', '', '$2y$10$NRM.ZUBlTyZNYQatwcb4I.Hk7P1yDViNU7Wbg6RXm3fFlf8tV1cZi', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('87284e92-8239-44a0-86cd-2040f3406f47', '19870716 202121 1 001', NULL, NULL, NULL, 'Deden Nugraha', NULL, 'S.P', 'Sukaresmi', '1987-07-16', 'Laki-laki', 'Islam', '$2y$10$E/I8Hc9qFqTPUGGccAhnCeK9DaUMJfSqyebQqvP/7aDdKwIH.DKl2', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8784ed8e-9d88-44a6-bb02-3f085de35b8c', NULL, '19890124 201512 172', NULL, NULL, 'Firman', NULL, 'S.Pd., M.P.Fis', 'Ketapang', '1989-01-24', 'Laki-laki', 'Islam', '$2y$10$pKFFkxtPHWQvcYklRGlI5OXOVLzg.nN3H0EliK4y1o/NvdzQLPCoW', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('891f6a6b-8bd9-4ad4-bdd6-13c7b2d46782', NULL, '19950704 201708 222', NULL, NULL, 'Utin Kurnia Putri', NULL, 'A.Md', 'Semarang', '1995-07-04', 'Perempuan', 'Islam', '$2y$10$t62rfybk8eYB0u.fdOotPeTOsFGh8X5Lk0UHjb1.1267979tHSysy', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('89286b3a-69ef-47dc-8038-34175938abbc', NULL, '19880611 201601 196', NULL, NULL, 'Maya Andriana', NULL, 'SE', 'Teluk Melano', '1988-06-11', 'Perempuan', '', '$2y$10$oe1VCThIcxpOXLfMNv.EfO9iVZSsxXz/k6TrBbnBrf4ezW6fEn4G2', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8961f1e3-2848-4d15-b6b9-d79fdaa8a107', NULL, NULL, NULL, NULL, 'Karmila', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$RzOhcIUrgyqVG4ugp6Mm7O7ag5YDYXVzBEOElHNL7NHNPfdbj/eFu', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8a2a0fc9-7adb-47bc-978f-a12b9db859aa', '19860414 201903 2 011', NULL, NULL, NULL, 'Rosmalinda', NULL, 'S.ST.,M.P', 'Karang Baru', '1986-04-14', 'Perempuan', 'Islam', '$2y$10$mMgTnQQEVOCqTvRa8HWvkeffEtMlVRYuv07yj/AdMmTuZZ79rrISS', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8a593376-eea9-4931-b0d7-86b72fd79b74', NULL, NULL, NULL, NULL, 'Henni', NULL, '', 'Ketapang', '1985-07-05', 'Perempuan', '', '$2y$10$asiO1ZEIjLz0bHthAfN5tu4aJfOKhgQFgAi0oPRMCpkVtWGDArAiC', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8a75b21c-c073-4a58-8bf6-de1a0f9b5438', '19860125 201803 1 001', NULL, NULL, NULL, 'Yusuf', NULL, 'S.ST., M.T', 'Ketapang', '1986-01-25', 'Laki-laki', 'Islam', '$2y$10$lOcfHg8dt0.vQP99ERLDQ.UyxhDxXLvbMDv8wqju/5DCuysuhk0Z2', '2022-10-13 22:43:17', '2022-10-13 22:43:17'),
('8c2e117d-01ad-4da2-a049-5490e078db83', '19770906 202121 1 003', NULL, NULL, NULL, 'Edi Rahmanto', NULL, ' SE', 'Kelampai', '1977-09-06', 'Laki-laki', '', '$2y$10$rI9Kek6mOkM7.0F/ip7slub6tSzc3880mNh0MNPrDSpNyfyveLmpO', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8c6fdd85-dccf-4df8-888d-61910ca28761', '19891028 201903 2 011', NULL, NULL, NULL, 'Roida Oktovia Sihombing', NULL, 'SE', 'Pontianak', '1989-10-28', 'Perempuan', 'Kristen', '$2y$10$gyj0jbOCrsxho.IDlmdpq.eBqHMpNyJLzkndTT0UsTEdNBnNpTmPa', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8d1a9392-ee5b-4086-a103-c86dbf04d2c6', NULL, NULL, NULL, NULL, 'ADMIN EVENT', NULL, NULL, 'BUMI', '2021-01-01', 'Laki-laki', 'Islam', '$2y$10$b1FeFS4ZeG/iP0uQ3.ikiu9/PRee397pLUv39XXsS3jDkBE1phxuG', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8da944a0-f7df-43a4-8bda-cc6c2b01cb5f', '19841207 201903 1 005', NULL, NULL, NULL, 'Munawar Kholil', NULL, 'S.Si.,M.Pd', 'Pamekasan', '1984-12-07', 'Laki-laki', 'Islam', '$2y$10$m6gL.Haa0.jBkJUjV.6CCOjKapzD5Ref5O2JtdXRr4Vbc5KsYJaxm', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8dbaf7b4-fdc6-4664-ad8f-28925262baaf', NULL, '19900126 201409 141', NULL, NULL, 'Syarifah Mastura', NULL, 'S.Pd.', 'Ketapang', '1990-01-26', 'Perempuan', 'Islam', '$2y$10$Mv4g0yK8pLjyiWdgCIROv.sB/YnGudrvWJ3JckMxKoPDs3a0qgXiK', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8e33ce55-5330-4cb2-836e-a22a0800b01c', '19890424 202121 1 002', NULL, NULL, NULL, 'Halimansyah', NULL, 'A.Md.', 'Kendawangan', '1989-04-24', 'Laki-laki', '', '$2y$10$oDyJurzi6t2x27b1T7wE/Oa7.Jgf7IsJ3p240DI/kImvEQsa.sBOe', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8eea1d3b-f883-435d-a8a9-453e46053607', '19831217 201903 2 008', NULL, NULL, NULL, 'Alfath Desita Jumiar', NULL, 'S.P.,M.Si', 'Pontianak', '1983-12-17', 'Perempuan', 'Islam', '$2y$10$u6rstidgFcnGYUk8g90CN.8O4gwDwxg5yrch9VrS1I9VJ7is77Zg6', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8fdecaee-a3ef-4096-9165-26476c4e4753', '19710814 200604 1 005', NULL, NULL, NULL, 'Hidayat', NULL, NULL, 'Ketapang', '1971-08-14', 'Laki-laki', 'Islam', '$2y$10$4UeRkIHFESFR81B9TGe88uo6X8ssMJNanAai2ofGgnOz6bsmvP2C6', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('8ffd423c-6a57-454d-b643-d1f134117073', NULL, '19780510 200801 055', NULL, NULL, 'Asep Ruchiyat', NULL, 'S.T.,M.T', 'Bengkayang', '1978-05-10', 'Laki-laki', 'Islam', '$2y$10$MjLhWTXPNse7xKNNGpvzSuDD8OFWeVtmfVvf0rmUi7qvBQi0S0aMO', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('908b7dcc-8b5f-4d2a-b745-3caacb11c1c9', '19900614 202121 2 001', NULL, NULL, NULL, 'Kurnia Dewi Permata Sari', NULL, ' A.Md', 'Ketapang', '1990-06-14', 'Perempuan', '', '$2y$10$7vXUrJzy3UA6LjOI4/wtEuKwbqdj7jOB0p88nBP9l8tIOxi6k.dJe', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('92408291-4e21-41bc-ba91-b632dbc03201', '19630804 198601 1 005', NULL, NULL, NULL, 'Safi\'ie', NULL, 'SE', NULL, '1963-08-04', 'Laki-laki', 'Islam', '$2y$10$alLoLsWsJRbLQxKHtxbt2u9qfMtj9loLzOLxDvFUE5xVYrZi3zKWW', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('966bb315-7f59-470d-aaae-c9a60336c823', NULL, NULL, '3318091606890003', NULL, 'Rois Indriawan', NULL, NULL, 'Pati', '1989-06-16', 'Laki-laki', 'Islam', '$2y$10$ZEBQlyFqZkf4MlxM7lpAAO0yf5iGS/BEH9p9NcQnRpKDEGAMIz0WW', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('966bb413-e9b5-46d7-9d60-6361134df0ea', NULL, NULL, '6172016207870003', NULL, 'Dewi Nurmayasari', NULL, NULL, NULL, NULL, 'Perempuan', '', '$2y$10$jTB63dNAlqzeQB.5o4jkK.37qNXaF9RpSuB//JEZzYtk6fda.A1XO', '2022-10-13 22:43:18', '2022-10-13 22:43:18'),
('968a0145-7799-46f2-b501-e4a26899ac9a', NULL, '19881026 201707 221', NULL, NULL, 'Redika Maulidya', NULL, 'ST', 'Ketapang', '1988-10-26', 'Perempuan', '', '$2y$10$DCBQY1RsIXocwCR7jZ/msOAdqpm8h4oZT8GLGs/xIBFvXZx.SyxMu', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9736c4da-27f2-4170-bde8-c2e35cd7acaa', '19960628 202203 1 015', NULL, NULL, NULL, 'Muhammad Juni Rian Effendi', NULL, 'A.Md.Kom', 'Ketapang', '1996-06-28', 'Laki-laki', 'Islam', '$2y$10$nxyu7NlUohdphFC0Wvehsui992In9DYZeFqP/rMTOJKikiq0lHhky', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('97693558-91bc-4335-b3cb-0311f337a795', '19631008 199603 1 003', NULL, NULL, NULL, 'Suratmin', 'Ir.', 'M.T', 'Ketapang', '1963-10-08', 'Laki-laki', 'Islam', '$2y$10$Lolh6YJNlCD1lb68Duktmu1W926iyzFAtJ1IhMmvLeRGc/bct0i3q', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('977fc8ac-55c2-4a01-8a64-9dd3644fbebb', '18181818181818181', '18181818181818181', '18181818181818181', 'admin@gmail.com', 'Admin', '-', '-', 'Ketapang', '2022-10-15', 'Laki-laki', 'Islam', '$2y$10$B5GT5Xwyu29HHUYjvmZfqu4pm9Qww2.mTXTwBmgNuemFoz8LHXUQS', '2022-10-14 05:33:53', '2022-10-14 05:33:53'),
('98ae6c59-c188-498e-83e4-e511251529b7', NULL, '19840310 200801 017', NULL, NULL, 'Rustiarni', NULL, 'M.H', 'Ketapang', '1984-03-10', 'Perempuan', 'Islam', '$2y$10$4qd03B3UExbMkqhUSgnClOdtFIvcxkl8eXY50ARaUnQf5h5wigUpC', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('98baf7ed-28bf-4a5d-8f4b-c0e789081d91', NULL, NULL, NULL, NULL, 'Muhammad Sa\'ari', NULL, '', 'Ketapang', '1963-06-23', 'Laki-laki', '', '$2y$10$u.T.BZ8feMhArLDe1E5Iqe7h7F6UJZBaO3VRWon3pL/6v7j0noKOi', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('98db1f9b-7be6-446f-a5ab-46208a47867b', '19861109 201903 1 005', NULL, NULL, NULL, 'Rosi Arrasyid', NULL, 'A.Md', 'Sentebang', '1986-11-09', 'Laki-laki', 'Islam', '$2y$10$oCmXxF8Z1EstIyqFxHvQo.HWEfWknAyJ2gYs8nrJBIfLHXO470/BO', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('99bba172-f59c-4bf4-a7df-31b6d3b00050', '19860923 201903 1 005', NULL, NULL, NULL, 'Yudi Chandra', NULL, 'S.ST., M.T', 'Ketapang', '1986-09-23', 'Laki-laki', 'Islam', '$2y$10$9vDfNCV8rvvoNFSWBapUbe4pjRtn5/UunVWHBq9oCrnU451UX7j7C', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9a8e0752-f115-4c47-a7bc-49f8c1a862b4', '19880901 201903 1 010', NULL, NULL, NULL, 'Sy. Indra Septiansyah', NULL, 'S.Si.,M.T', 'Pontianak', '1988-09-01', 'Laki-laki', 'Islam', '$2y$10$oiZZfpJkCUtsE.j2GLOLTObIiPY/8nVguII2blN1m2KzAy3.11GQq', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9b26a021-e661-4f49-ab22-6f49afe9cd9b', NULL, '19790910 200801 058', NULL, NULL, 'Hairian Rahmadi', NULL, 'S.T.,M.T', 'Sungai Jaga B', '1979-09-10', 'Laki-laki', 'Islam', '$2y$10$EcV.DItIAWSE3YC0qBgukOJxrrbEQ5tz68v2C2ilpHexgiWJY83l6', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9b7afb74-0772-48e9-acee-2720557d1384', NULL, NULL, NULL, NULL, 'Ahmad Riduan', NULL, '', 'Ketapang', '1996-02-24', 'Laki-laki', '', '$2y$10$lCh4mG1fJdqZS9tVNCa7.eo30sCZGaTCoeg1YjBPKZtKV6t5/kMva', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9cc7f277-d556-4fae-8d75-68e64bcfcad4', NULL, '19820404 201611 213', NULL, NULL, 'Nurhayati', NULL, 'S.P.,M.Si', 'Pedada', '1982-04-04', 'Perempuan', 'Islam', '$2y$10$9iABMVNpOS2bePR4B/NOYOKny0HAMbe1c6OzNLsljTeoWS5.atjaW', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9ebea3d2-60b0-4817-9e36-661f71d69e73', NULL, '19950203 202107 259', '6104174302950003', NULL, 'Heni Rahmadianingsih', NULL, 'M.Pd', NULL, NULL, 'Perempuan', '', '$2y$10$VZFxVY9z9Oh7MX8RQUSNPu1k7d8j6biQ0cc1FnstFwSweBg9.dyhO', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('9faa86a0-147d-4657-9592-160f9bb9d06f', '19850805 202121 2 009', NULL, NULL, NULL, 'Nur Aida', NULL, 'S.Pd.,M. Pd', 'Ketapang', '1985-08-05', 'Perempuan', 'Islam', '$2y$10$6JyxAACFAXgfggmkIZXeMON.TIg59ToREECGxGLEvjGCa.zRtWuhK', '2022-10-13 22:43:19', '2022-10-13 22:43:19'),
('a12f6e04-c76b-44d0-ad59-7427ac275be8', '19931228 201903 1 012', NULL, NULL, NULL, 'Rahmat Aryanto', NULL, 'A.Md', 'Ketapang', '1993-12-28', 'Laki-laki', 'Islam', '$2y$10$MA5VlP7z/L3KYgg2SDR5eOeXTJWI/xC4EwBJHVGHuDlbIat5C32iq', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a15ebfc3-4700-4231-b982-f6fd6f150f1f', NULL, NULL, NULL, NULL, 'Evi Mellianti', NULL, 'SST', 'Ketapang', '1993-06-02', 'Perempuan', 'Islam', '$2y$10$KKR5aQmI1U7fGL2.zXsUOevfTArJ1qe2IwMcBk7/i9DrNxO3e20Ta', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a1c5ae62-36d7-4d2e-b207-999afa6a6103', NULL, '19740401 201311 132', NULL, NULL, 'Ahmadin', NULL, 'S.Sos.', 'Pontianak', '1974-04-01', 'Laki-laki', '', '$2y$10$Ey.fFsyuRdI5tSpQab0/COKg.60XqfLyCsZnsoF8LF4SvnmC3CpKa', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a1f6271f-46a8-4f4d-ad97-b11ed9ecca1b', NULL, '19860505 201602 203', NULL, NULL, 'Ade Herlinda', NULL, 'S.Pd', 'Ketapang', '1986-05-05', 'Perempuan', 'Islam', '$2y$10$XBcfgRGlPlXi9UFC7CkJX.GapW2QJJUAY3SkDYwawOMtM6JoHFGsS', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a3cf6b37-c6e0-411e-ab87-9333e5f9e84a', '19800518 202121 1 007', NULL, NULL, NULL, 'Fathurrahmi', NULL, 'SE.,MM.', 'Ketapang', '1980-05-18', 'Laki-laki', 'Islam', '$2y$10$GrdJVgidq84Xj/6zGcMPSeidnc57lMhee6GYryTsRIxPqFAuXOaQG', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a64ec6c9-f25d-40c9-acf2-f8054184f6c5', '19820520 202121 1 005', NULL, NULL, NULL, 'Ardiansyah Putra', NULL, 'A.Md.', 'Pontianak', '1982-05-20', 'Laki-laki', 'Islam', '$2y$10$eSnWswgK0zmNIJf2zkWFiOKO1eg7PkhwMq80VpzhivulOBk87FvQq', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a7ab3156-4a6a-4d34-b4fd-ecdee3e951de', '19840926 201903 1 008', NULL, NULL, NULL, 'Irianto SP', NULL, 'S.ST.,M.MA', 'Pontianak', '1984-09-26', 'Laki-laki', 'Islam', '$2y$10$ONLyVia0R2pprd5C7g3I..q6cQmtVH9KBE4.jkrmXEZ8yo2KtoOSe', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('a8025fce-d1b8-4acf-80c2-ace804464787', NULL, NULL, NULL, NULL, 'Andri Gunawan', NULL, '', 'Ketapang', '1988-01-01', 'Laki-laki', '', '$2y$10$YWotF.yi6zDBctViZR71v.i3rREaa2kfBasGFvNL03bq3OnQ2j0vS', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('ac0df63f-204d-400a-83bd-66b7fc7d1d8d', '19770503 202121 1 004', NULL, NULL, NULL, 'Yudi Adlia', NULL, 'SE', 'Ketapang', '1977-05-03', 'Laki-laki', 'Islam', '$2y$10$xED04n5A29BWKaFx0noCoO0OPJEJe71wT3P8FkMzLEe/1kmJZWtIG', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('aeb5d395-09f4-42b1-8680-75663045684e', NULL, NULL, NULL, NULL, 'Supardi', NULL, '', 'Ketapang', '1979-01-17', 'Laki-laki', '', '$2y$10$qlsyNKXGLfcM94Vh9cMrO.m2U/NKpil7XZztesYmbzT1zdTWd82G.', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('af76d150-7435-4f3a-bf5f-3fb3d991c626', '19920106 201903 2 015', NULL, NULL, NULL, 'Betti Ses Eka Polonia', NULL, 'S.Pd.,M.Pd', 'Lamongan', '1992-01-06', 'Perempuan', 'Islam', '$2y$10$yATiULWKFpLUKfHLTtZHK.DfIQuh0ZQIk0ZFgS43LpUtnY4Xd75Lu', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('b14b7e81-2fc3-45e5-adc1-750cc73f0fb2', NULL, '19740510 200801 041', NULL, NULL, 'Isye Selvianti', NULL, 'SH.,M.AP', 'Solo', '1974-05-10', 'Perempuan', 'Islam', '$2y$10$V2QlcUpWfEqGfzCMWAiEA.vFoofhRBfyAm.fJaNxXPBq9jM4al3WG', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('b2035d20-b83c-479d-a032-ecdef5bf9eb0', '19780324 202121 1 005', NULL, NULL, NULL, 'Rodiansyah', NULL, 'A.Md', 'Ketapang', '1978-03-24', 'Laki-laki', 'Islam', '$2y$10$9Bpf5u6YFA3TxIXyHBNvXeY2dZeIOemTJ4JwWFurcRFffKmVc3qS2', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('b2c740a8-348b-4e2e-9713-38c9712fe1d8', '19910617 201903 2 022', NULL, NULL, NULL, 'Saima Putrini R Harahap', NULL, 'S.Pd.,M.Pd', 'Padang Sidimpuan', '1991-06-17', 'Perempuan', 'Islam', '$2y$10$d3BlaTrv6vC3IZTlaEYFkOCCV8NnvsEqB6Aw.19iWEwTlTltxhMV2', '2022-10-13 22:43:20', '2022-10-13 22:43:20'),
('b2f3b1cc-0b55-4c9d-9e5b-0e6c7fac9c8b', '19750619 202121 2 006', NULL, NULL, NULL, 'Rohyati', NULL, 'A.Md', 'Trenggalek', '1975-06-19', 'Perempuan', '', '$2y$10$5DZ46rGGsbJVhfwdjR.VRu3512fz5A2jtgBJirZEQ7ATcEswiFwV.', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b3b814f5-e354-47b3-a000-156679809080', '19901105 201903 1 007', NULL, NULL, NULL, 'A. Nova Zulfahmi', NULL, 'S.Pi.,M.Sc', 'Kediri', '1990-11-05', 'Laki-laki', 'Islam', '$2y$10$h/UddW4qQObYKiXupxt1/.SRdx8sTlmGHVKBgiQjhxUbxIFLefvoe', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b5f4d025-952e-4260-a45b-ab50e561a491', NULL, '19890730 201601 189', NULL, NULL, 'Nurhanudin', NULL, 'A.Md', 'Ketapang', '1989-07-30', 'Laki-laki', 'Islam', '$2y$10$D4lz9KNfKVQvrE5ZTHcXHewCJbLc6XzMwAY84U7RsvUWtuN/MaMIe', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b6308b4f-7569-47c1-980f-f266d255b293', '19780926 202121 1 003', NULL, NULL, NULL, 'Martanto', NULL, 'ST., MT', 'Sleman', '1978-09-26', 'Laki-laki', 'Islam', '$2y$10$3hoz4KBy3Ku4qrxmC2/Bnu6MlEBiPOkcF5Ro409XfFf52A7J6wNgu', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b674c34c-18d8-4f2e-b78d-ba263ecb6f03', NULL, '19890711 201601 188', NULL, NULL, 'Nanang Hartoni', NULL, 'A.Md', 'Ketapang', '1989-07-11', 'Laki-laki', 'Islam', '$2y$10$iuYPK1CbZ0BfMs.qrIyY..iu7e1beGG71IeK3UjLb8KUIT6pGcMhC', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b67e1667-7681-4ba7-8eb7-49df4cae2eed', '19890316 202121 1 001', NULL, NULL, NULL, 'Faisal', NULL, 'A.Md.', 'Ketapang', '1989-03-16', 'Laki-laki', 'Islam', '$2y$10$rYcLd9m7ha1wsD8BT2SPUeLTigLxTOrkvjqam32LV58y4WtdIMJwK', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b7369622-3dd7-487f-8add-b67d8512a6c3', NULL, '19911112 201601 184', NULL, NULL, 'Eva Prawinda', NULL, 'S.Pd', 'Ketapang', '1991-11-12', 'Perempuan', 'Islam', '$2y$10$t9Nb1c7iAlVf1lCl299zqe.kvPwwPm4C9/ExFJH6x6w.aFysiEUwa', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b77f8f84-beb9-4d27-8a5f-475ac4fd520b', '19900228 202121 2 001', NULL, NULL, NULL, 'Nisa Zahara', NULL, 'A.Md', 'Ketapang', '1990-02-28', 'Perempuan', 'Islam', '$2y$10$b7qVENHp8mkNTiPPqCBjWeYxEOzI862YwueUrVEArFX2xZW7/3Ovm', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b83e233a-d9b4-459d-93de-d33523c566b0', NULL, '19890424 201509 165', NULL, NULL, 'Indra Pratiwi', NULL, 'M.Pd', 'Ketapang', '1989-04-24', 'Perempuan', 'Islam', '$2y$10$nvSaaQQt7ZpqF9/xNLVWgus622xBenwApT97dbUE/rn6BZnW0L/u2', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('b95679cb-9866-4c31-8c5b-960b8ecec93c', NULL, NULL, NULL, NULL, 'Reino Muhammad', NULL, 'ST., M.Cs', 'Indonesia', '1945-08-18', 'Perempuan', '', '$2y$10$E8DsdoLGxmNcpiWZV2iQbuhTzz0MY5B5XACXJhW9NvDF8zBOL80bK', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('bc1f265d-00ef-485c-867a-a32b2899a4e8', NULL, '19951222 202104 253', '6104182212950004', NULL, 'Teguh Eko Saputra', NULL, 'A.Md.Kom', 'Mayak', '1995-12-22', 'Laki-laki', 'Islam', '$2y$10$XE15LVyB7bB3HHqJHkYLGu9nU3dSVG2ayGLatiBEiutj/yMLPoR/K', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('c0a53e24-a714-47cc-8651-1f413b8b72fe', NULL, '19881113 201601 182', NULL, NULL, 'Noprizan Azmi', NULL, 'ST', 'Simpang Empat', '1988-11-13', 'Laki-laki', 'Islam', '$2y$10$dpDRDABQ.TYQT2RPTJNqiOnohn3LTYgFwujnv7Y6x4udozSm8599K', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('c37724c8-36bf-4bbf-82ad-bac50ce9078a', NULL, '19940929 201601 193', NULL, NULL, 'Lia Kurnia', NULL, 'SP', 'Ketapang', '1994-09-29', 'Perempuan', 'Islam', '$2y$10$ljZrdjbze5ilSca8Tiux0ewn0R1zT5okD7Tp0JRCYZYyxH0Kf/bZe', '2022-10-13 22:43:21', '2022-10-13 22:43:21'),
('c5bc3f89-addd-4737-bd78-ac8b414679da', '19750808 202121 1 005', NULL, NULL, NULL, 'Sahardi', NULL, 'SE', 'Ketapang', '1975-08-08', 'Laki-laki', '', '$2y$10$eLiQZdT4J1bGfwjA/m0ibeto5Z.4/6hnPApw8v6WiUkgb9iXZiUne', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('cc37bab9-4d25-4dff-9ac9-3552e5921705', NULL, '19890424 201507 158', NULL, NULL, 'Aprianda Ibrahim', NULL, 'S.Kom', NULL, '1989-04-24', 'Laki-laki', 'Islam', '$2y$10$Pc4KfgxYOCEFjtiv9usad.8Yn0OWwQcySR/5ansNwQfPrpsgAqQR.', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('cda69cea-4502-4db3-9954-70f92c28f2f1', NULL, '19860410 201502 153', NULL, NULL, 'Arman', NULL, 'A.Md.', 'Ketapang', '1986-04-10', 'Laki-laki', 'Islam', '$2y$10$7nuaTIWuzvJy6hTFiFYgv.CEBOPm7K8owo9vx5ahwci9Wuyq9KUE.', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('cda9609b-0bed-49c5-96cc-e46831985dc7', NULL, '19950219 201708 220', NULL, NULL, 'Rahmadi', NULL, 'A.Md', 'Ketapang', '1995-02-19', 'Laki-laki', 'Islam', '$2y$10$Hc3uLqPurbdLmT/xrz4hzuUWJc5F9EaiHGAFpoew2HOlz7UGdkkh2', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('cdb42c37-d361-44aa-9d90-85dc5c02cc4c', NULL, '19891220 201404 133', NULL, NULL, 'Emy Arahman', NULL, 'S.Pd., M.Pd', 'Pontianak', '1989-12-20', 'Perempuan', 'Islam', '$2y$10$HoP0r0dR0k9wJBBEWm3AZe5flmbfA/9psJPKwqq7a3s93tVSSpUmS', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d039bc2d-7c92-4349-ae77-e67fd4dcea7f', '19830501 202121 1 002', NULL, NULL, NULL, 'Muhammad Rizal', NULL, 'A.Md', 'Ketapang', '1983-05-01', 'Laki-laki', 'Islam', '$2y$10$Av8YAPmb/NJEkPRRt/6v9uSqTy6APzBLecGkColFbOVEkopeeyWQS', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d04a0a35-e772-4766-abc3-d90346ecc0a9', NULL, NULL, NULL, NULL, 'Zulkarnaen', NULL, '', 'Ketapang', '1988-09-24', 'Laki-laki', '', '$2y$10$HpoVujsylpqTLKK6gcseTOakPxpe9UHYNrQoU4Hg3cCJFCr.ZGh3q', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d2bc54ef-e3ec-46ae-adcf-8f856bbd35fc', '19901230 202121 1 001', NULL, NULL, NULL, 'Nasriadi', NULL, 'A.Md.', 'Watampone', '1990-12-30', 'Laki-laki', 'Islam', '$2y$10$C6LXZorNIQJo8vSa22iEjeSsQsimKdTByzELGY.qscbWfd9/iynOO', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d307a54a-f25e-4a3b-95e5-75c0a78fe2e2', NULL, '19890807 201302 128', NULL, NULL, 'Diah Chairunisa', NULL, 'SE.', 'Ketapang', '1989-08-07', 'Perempuan', 'Islam', '$2y$10$mHh9IO4Bu9uHJdfa0I5ZfeFCQMdqw8gk8qsMQ6sxHOsd7J1X6z8T2', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d399b985-7411-4a15-8eed-fbdb43b44dbc', '19891109 201803 2 001', NULL, NULL, NULL, 'Rizqia Lestika Atimi', NULL, 'S.T., M.T', 'Pontianak', '1989-11-09', 'Perempuan', 'Islam', '$2y$10$N2VEIJ.NOlHC8n7QmvlGxei0jCUt4saeRsQOeadUHaZ.YKpsdrirS', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d4845c8d-dcda-421c-99ec-545bf9527ca1', NULL, '19940130 201601 185', NULL, NULL, 'Utin Asiyatin Nur', NULL, 'SE', 'Ketapang', '1994-01-30', 'Perempuan', 'Islam', '$2y$10$yFp5Ul37JrH7OpEXmDXArOADJzSszBN3iu6S97dPxS20f8fIi.QeC', '2022-10-13 22:43:22', '2022-10-13 22:43:22');
INSERT INTO `simadu__pegawai` (`id`, `nip`, `nup`, `nik_ktp`, `email`, `nama`, `gelar_depan`, `gelar_belakang`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `password`, `created_at`, `updated_at`) VALUES
('d5090102-10f3-42ae-903d-0e583097ed02', NULL, '19911222 201409 144', NULL, NULL, 'Ningli Diniyati', NULL, 'S, ST', 'Teluk Melano', '1991-12-22', 'Perempuan', 'Islam', '$2y$10$skCf5mIG9m/Kh7obQfcuLee3WwaIWSG43gQj20bIsrVM/cumbTAFa', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('d8987bf5-6238-4cc0-9be7-305f922cc657', NULL, NULL, NULL, NULL, 'Ernawati', NULL, '', 'Ketapang', '1970-01-01', 'Perempuan', '', '$2y$10$FjO7j/V/MAdbKojvR15ONeQIJomY3DIYDeTGDi0p/9vVezv0awPtO', '2022-10-13 22:43:22', '2022-10-13 22:43:22'),
('da2352ee-66c7-41f4-b95a-ebfbc4f231ad', '19821107 202121 2 007', NULL, NULL, NULL, 'Dian Fitriarni', NULL, 'S.ST.,M.Sc', 'Ketapang', '1982-11-07', 'Perempuan', 'Islam', '$2y$10$Ifnu61a4kQBE0OycfSxsJObkyxSlSYWBF4bWQbIsBiRhF.Pdxk6Hq', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('da94c955-4436-4ea5-bb45-b8fce9a4b154', NULL, '19910219 201507 154', NULL, NULL, 'Kharisma', NULL, 'S.Kom. M.Kom', 'Ketapang', '1991-02-19', 'Laki-laki', '', '$2y$10$PbvlkAn65P82Mlgn9RNuauyjS2tF9KSubkOhNs1ysQ9fE32D92Zsy', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('db6d49db-22b0-409f-8450-1beb34250905', '19901111 201903 2 018', NULL, NULL, NULL, 'Novi Indah Pradasari', NULL, 'S.Kom., M.Kom', 'Ketapang', '1990-11-11', 'Perempuan', 'Islam', '$2y$10$YzsZPkP3051N81Ol51xPN.wOKIHQtPyRaJsNOgtYucAeldI6juadm', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('dc497585-9080-4954-8417-89be283b4665', '19881104 201903 1 004', NULL, NULL, NULL, 'Idris Herkan Afandi', NULL, 'S.Pd.,M.T', 'Ketapang', '1988-11-04', 'Laki-laki', 'Islam', '$2y$10$W7h4MhwNbOlTwvsB67eg9OzpCA5jug4H1aky5KhA1U./dklDeBjgC', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('de4b9779-eb40-42bf-8bfd-6bb1125c1703', NULL, '19840327 201110 103', NULL, NULL, 'Muhammad Taufik', NULL, ' S.T', 'Mempawah', '1984-03-27', 'Laki-laki', '', '$2y$10$L9T9/ob6ZgMnnWAtwS5wRup0xPFfnRcAO4RuQ768Yyxm0r5TLJ7ea', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('de9a5fdb-117c-45fe-8b46-ae4ce536270f', NULL, 'NIP.1985 070720 080', NULL, NULL, 'Julyan Purnomo', NULL, 'S.ST., M.T.', 'Ketapang', '1985-07-07', 'Laki-laki', '', '$2y$10$7ECVWzouqMh6/ez.v/KAWeuRNZlAbvHjmUx5H23kjVdLRfSOWYhtu', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('dee9fbb6-7eda-4464-8d26-1a41838a13d5', NULL, '19940702 201709 223', NULL, NULL, 'Agung Iswandi', NULL, 'ST', 'Ketapang', '1994-07-02', 'Laki-laki', 'Islam', '$2y$10$kiXfocPMi7Oakpp5iDbpm.yDkLKlF9aUf1OEPjdibVEXq8i0IRxSK', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e22b1a40-7094-48a7-8a1b-a7407d679e4c', '19771010 200811 1 024', NULL, NULL, NULL, 'Harsusani', NULL, 'S.T., M.T', NULL, '1970-01-01', 'Perempuan', '', '$2y$10$lNVs8jd1GLpuTmyU2nct1.Jr2kO546enHNEpxThbcgNxAUeNl7cFC', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e32d5a13-49c3-481a-9485-2ad0789512cc', '19880513 202121 1 001', NULL, NULL, NULL, 'Citro Handoyo', NULL, 'S.T', 'Pontianak', '1988-05-13', 'Laki-laki', 'Islam', '$2y$10$Osm4aBMwyrB899MXrgLlEejVYWu3lBXKNHk8jKj3iGE.IuFXBVY3e', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e3825cea-49cf-4e22-8b9e-6927099e859f', NULL, NULL, NULL, NULL, 'Syarif Niswah', NULL, '', 'Ketapang', '1975-05-05', 'Laki-laki', '', '$2y$10$D6yeu67Bf/8QiUBDbAgkEeR1LZo3BqTnntQ8XX8Sfk1aepHyIu/gK', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e6ba9e74-e855-4438-b2de-32099b533aa2', NULL, '19880402 201601 191', NULL, NULL, 'Mulyo Hadi Santoso', NULL, ' A.Md', 'Jelai Hulu', '1988-04-02', 'Laki-laki', '', '$2y$10$Ix5BhWUASFXe.sHvs0uiluwucM3mxBSeQppAyVfUaaeAnwmPasiau', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e70044c4-9afe-4ba9-88dc-67ece46c36f8', NULL, NULL, NULL, NULL, 'Nurmalawati', NULL, '', 'Ketapang', '1973-04-13', 'Perempuan', '', '$2y$10$pO/MD3D4MI//OCOdf9XNC.Lgvl9bsfzWojAH3Jpl7keUtygTdevgS', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e8e2dbb1-c651-4a0a-8dea-0926135e428b', '19900121 201803 2 001', NULL, NULL, NULL, 'Sartika', NULL, 'S.Si.,M.T', 'Pontianak', '1990-01-21', 'Perempuan', 'Islam', '$2y$10$K7CYYM47sGZzEiMH7/kgwO3tlkjzOI2lE/NPilB48oi9Zw5BMqP5q', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e8fd3915-260d-4079-8962-6608c6550e77', '19901203 202121 1 001', NULL, NULL, NULL, 'Wahyu Iswanto', NULL, 'A.Md', 'Ketapang', '1990-12-03', 'Laki-laki', 'Islam', '$2y$10$Fr6vm7xz4z8pnyYSleQ5Ee2FAXO9vF1dVt50.c.OMgDSl14LZ/KKa', '2022-10-13 22:43:23', '2022-10-13 22:43:23'),
('e9b3eaac-e378-4e61-a660-c06a4f47490a', '19820310 202121 2 011', NULL, NULL, NULL, 'Nenengsih Verawati', NULL, 'S.TP.,M.P', 'Bima', '1982-03-10', 'Perempuan', 'Islam', '$2y$10$mS4SCzg4eCVyceYPwg0os.phpekeFo3BJxExv2VlWSJy9s.zmXxmO', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('eb09439a-7370-4b1e-b765-252298ab31a8', NULL, NULL, NULL, NULL, 'M. Hidayat', NULL, '', 'Ketapang', '1978-10-26', 'Laki-laki', '', '$2y$10$p8IHb8FewIWusFdG7jSPP.KBFfUiIJUl3ge2bhWK6mQ.McCnhAfWa', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('ed7828d3-b34d-4d25-8378-7e3b75a08f66', NULL, '19850220 201601 192', NULL, NULL, 'Abdul Hafid', NULL, 'S.T', 'Nanga Tayap', '1985-02-20', 'Laki-laki', 'Islam', '$2y$10$XVk8MiWVNhWvLXpLkug0PuJH90dgkKSB5za8llk2FIZypAFyw/h8y', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('ef103381-4e22-4d34-a141-83dfeb98340f', '19741101 202121 2 005', NULL, NULL, NULL, 'Sri Handayani', NULL, 'A.Md', 'Ketapang', '1974-11-01', 'Perempuan', 'Islam', '$2y$10$gHiz0Lwd8qYbQPWNShjjmuI8gkBYzWbehaKRoiz0IKyuN/34dScRW', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f34be033-0f08-4655-b2ba-b68f4139017f', '19770505 202121 1 007', NULL, NULL, NULL, 'Ismael Marjuki', NULL, 'S.T.,M.T', 'Ampalu Tinggi', '1977-05-05', 'Laki-laki', 'Islam', '$2y$10$4NAfa1FPDn9JGKSEjXhtLeLuwTruBFiruxChqatQQvIrPAJy.FCf2', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f585f46a-98ed-4663-9f26-28891e3127cc', NULL, '19900611 201604 204', NULL, NULL, 'Ari Budiansyah', NULL, 'SE', 'Ketapang', '1990-06-11', 'Laki-laki', 'Islam', '$2y$10$1sajliyVL0JPInXZ3tPTp.Xca.J60rrZ2BsBZxL2hlHUc/NTBscce', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f59fa54b-a4e7-4bc2-90c3-6ec9f03a928b', '19681030 200112 1 002', NULL, NULL, NULL, 'Endang Kusmana', NULL, 'S.E.,M.M.,Ak,CA', 'Ciamis', '1968-10-30', 'Laki-laki', 'Islam', '$2y$10$/7s8KrRI4k8RHlN1v5Ap3.D8bU80eDejEKhG1OatJ0d0UBIq3gXzC', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f7c75340-cf0b-4402-963f-e8aca8e5936b', NULL, '19920917 202104 251', '6104171709920003', NULL, 'M. Alpiani', NULL, 'S.T', NULL, NULL, 'Laki-laki', '', '$2y$10$kesdNRSI67uto3ResUPZm.BaMd/o1KhT3.VEjTUbhBI2xUTCKjhF2', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f851e7bd-cc56-49dc-ab9b-97944d6041cd', NULL, '19810817 200801 042', NULL, NULL, 'Syf. Umi Kalsum', NULL, 'S.Sos.,M.AP', 'Ketapang', '1981-08-17', 'Perempuan', 'Islam', '$2y$10$1gM8FiltZBQI5BMoUXBLJOPpLvRmY9v/9rMM9hzMQtLM.oJipW0PC', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('f97a9a05-82df-4dea-af31-c8014d4ca784', NULL, NULL, NULL, NULL, 'Rico Anugrah', NULL, '', 'Ketapang', '1994-09-01', 'Laki-laki', '', '$2y$10$D3LFssX5bkQXqYyoI3wlXucEEtpIVRNb18pRVpX9N33/Xnfu21HR6', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('fcf015d0-91e5-4808-8aa3-a8cf44bd547b', '19891017 202121 2 001', NULL, NULL, NULL, 'Tri Kumala', NULL, 'SP', 'Ketapang', '1989-10-17', 'Perempuan', 'Islam', '$2y$10$6UcAv4CI4JJRFB5s7KXQCeCR8yQXwdnJSJSJ8oNlFuzVinFdEmuYC', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('fd63b679-ae5a-46da-9ac2-3759ece0eac6', '19920414 201903 2 025', NULL, NULL, NULL, 'Mia Anggreini', NULL, 'A.Md', 'Nanga Keduai', '1992-04-14', 'Perempuan', 'Islam', '$2y$10$zUQAyFB6YE5Nz0hOWxeE1eFaWp0jbgkd2Ta21LjZp6jxjiqqxXKk.', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('fea080ab-8d56-4ba0-99f2-5ed8f0d4e1d5', NULL, '19811111 200801 012', NULL, NULL, 'Marisa Nopriyanti', NULL, 'STP., M.P.', 'Ketapang', '1981-11-11', 'Perempuan', 'Islam', '$2y$10$6U0zybvP3r2V4e3K71K./e7/zj/gfnw5rm13MrD5Fz.0N32THPlpe', '2022-10-13 22:43:24', '2022-10-13 22:43:24'),
('fed5ef8b-675f-46be-9dc4-947c09e14dac', NULL, '19911104 201601 190', NULL, NULL, 'Nurimansyah', NULL, ' SP', 'Ketapang', '1991-11-04', 'Laki-laki', '', '$2y$10$dWA.GXrEY5xbzbrSAGZ0gO5S.0EMWRuLUUGGrWmELGGaG3E1b37Xi', '2022-10-13 22:43:25', '2022-10-13 22:43:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin__absensi`
--
ALTER TABLE `admin__absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_unitkerja` (`id_unitkerja`);

--
-- Indexes for table `admin__cuti`
--
ALTER TABLE `admin__cuti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_unitkerja` (`id_unitkerja`);

--
-- Indexes for table `admin__dinas`
--
ALTER TABLE `admin__dinas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_unitkerja` (`id_unitkerja`);

--
-- Indexes for table `admin__izin`
--
ALTER TABLE `admin__izin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_unitkerja` (`id_unitkerja`);

--
-- Indexes for table `admin__module`
--
ALTER TABLE `admin__module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__pegawai`
--
ALTER TABLE `admin__pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_unitkerja` (`id_unitkerja`),
  ADD KEY `id_unitdetail` (`id_unitdetail`);

--
-- Indexes for table `admin__pegawai1`
--
ALTER TABLE `admin__pegawai1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__role`
--
ALTER TABLE `admin__role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_module` (`id_module`);

--
-- Indexes for table `admin__unitkerja`
--
ALTER TABLE `admin__unitkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__unitkerja__detail`
--
ALTER TABLE `admin__unitkerja__detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_unitkerja` (`id_unitkerja`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `simadu__pegawai`
--
ALTER TABLE `simadu__pegawai`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin__absensi`
--
ALTER TABLE `admin__absensi`
  ADD CONSTRAINT `admin__absensi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `admin__pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin__cuti`
--
ALTER TABLE `admin__cuti`
  ADD CONSTRAINT `admin__cuti_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `admin__pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin__cuti_ibfk_2` FOREIGN KEY (`id_unitkerja`) REFERENCES `admin__unitkerja` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin__dinas`
--
ALTER TABLE `admin__dinas`
  ADD CONSTRAINT `admin__dinas_ibfk_1` FOREIGN KEY (`id_unitkerja`) REFERENCES `admin__unitkerja` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin__izin`
--
ALTER TABLE `admin__izin`
  ADD CONSTRAINT `admin__izin_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `admin__pegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin__izin_ibfk_2` FOREIGN KEY (`id_unitkerja`) REFERENCES `admin__unitkerja` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin__pegawai`
--
ALTER TABLE `admin__pegawai`
  ADD CONSTRAINT `admin__pegawai_ibfk_1` FOREIGN KEY (`id_unitkerja`) REFERENCES `admin__unitkerja` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin__pegawai_ibfk_2` FOREIGN KEY (`id_unitdetail`) REFERENCES `admin__unitkerja__detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin__role`
--
ALTER TABLE `admin__role`
  ADD CONSTRAINT `admin__role_ibfk_1` FOREIGN KEY (`id_module`) REFERENCES `admin__module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
