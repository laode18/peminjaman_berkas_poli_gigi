-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 04:38 PM
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
-- Database: `peminjaman_berkas_poli_gigi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `id_berkas` int(11) NOT NULL,
  `id_pasien` int(11) DEFAULT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `tanggal_pinjam` varchar(50) DEFAULT NULL,
  `tanggal_kembali` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`id_berkas`, `id_pasien`, `id_dokter`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(4, 3, 200, '10-08-2022', '20-08-2022'),
(5, 1, 200, '26-08-2022', '26-09-2022'),
(6, 1, 505, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(30) DEFAULT NULL,
  `spesialis` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `name`, `jenis_kelamin`, `spesialis`, `alamat`, `email`, `password`) VALUES
(200, 'Nur Laily, M.Kes', 'Perempuan', 'Dokter Gigi Geraham', 'Bandung', 'laily@gmail.com', '12345678'),
(505, 'Dr. Samsudin', 'Laki-Laki', 'Rahang', 'Surabaya', 'sams@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `tb_landingpage_navpic`
--

CREATE TABLE `tb_landingpage_navpic` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(50) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_landingpage_navpic`
--

INSERT INTO `tb_landingpage_navpic` (`id`, `nama_gambar`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Gambar 1', '62ffb1768b3d5back1.png', NULL, NULL),
(2, 'Gambar 2', '62ffb19bb3459back21.jpg', NULL, NULL),
(3, 'Gambar 3', '62ffb1ba22095back3.jpg', NULL, NULL),
(5, 'Gambar 4', '62fffd734a091business-img.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_landingpage_predata`
--

CREATE TABLE `tb_landingpage_predata` (
  `id` int(11) NOT NULL,
  `judul_data` varchar(50) DEFAULT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_landingpage_predata`
--

INSERT INTO `tb_landingpage_predata` (`id`, `judul_data`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Pasien', 'fas fa-users', NULL, NULL),
(2, 'Laki-Laki', 'fas fa-male', NULL, NULL),
(3, 'Perempuan', 'fas fa-female', NULL, NULL),
(4, 'Jumlah File', 'fas fa-file', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu_petugas`
--

CREATE TABLE `tb_menu_petugas` (
  `id` int(11) NOT NULL,
  `nama_menu` varchar(50) DEFAULT NULL,
  `icon` varchar(150) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_menu_petugas`
--

INSERT INTO `tb_menu_petugas` (`id`, `nama_menu`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'fas fa-fw fa-tachometer-alt', 'enabled', NULL, NULL),
(2, 'Data Pasien', 'fas fa-users', 'enabled', NULL, NULL),
(3, 'Data Berkas', 'fas fa-file', 'enabled', NULL, NULL),
(4, 'Laporan Data', 'fas fa-file-arrow-down', 'enabled', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rm` varchar(30) DEFAULT NULL,
  `nama_pasien` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `diagnosa` varchar(30) DEFAULT NULL,
  `tindakan` varchar(30) DEFAULT NULL,
  `tanggal_berobat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `no_rm`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `diagnosa`, `tindakan`, `tanggal_berobat`) VALUES
(1, 'RM-001', 'Michele', 'Perempuan', 'Padalarang', '01-12-2000', 'Sakit Gigi', 'Pengecekkan', '10-08-2022'),
(3, 'RM-002', 'John', 'Laki-Laki', 'Padasuka', '09-12-2001', 'Gigi Berlubang', 'Perawatan', '02-08-2022');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `name`, `email`, `password`, `jenis_kelamin`, `no_hp`) VALUES
(5, 'Petugas', 'petugas1@gmail.com', '12345678', 'Perempuan', '0948547576'),
(6, 'Petugas 3', 'petugas3@gmail.com', '12345678', 'Perempuan', '085486785476');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$FRd9y9Jqwi3B4leToVT7Y./GbsLOL5YZN9TyZu4xc6F6aCanJkQL.', 'admin', NULL, '2022-08-19 13:13:42', '2022-08-19 13:13:42'),
(2, 'Kepala RS', 'kepalars@gmail.com', NULL, '$2y$10$FRd9y9Jqwi3B4leToVT7Y./GbsLOL5YZN9TyZu4xc6F6aCanJkQL.', 'kepala', NULL, NULL, NULL),
(5, 'Petugas', 'petugas1@gmail.com', NULL, '$2y$10$z3prLNwS.Cxk52Z.HoyyTu8CLa9APV1rHdQnbDElYskVviBEx8cSC', 'petugas', NULL, '2022-08-19 07:37:38', '2022-08-19 07:37:38'),
(6, 'Petugas 3', 'petugas3@gmail.com', NULL, '$2y$10$M.8x/dvMBiw7NxlsYTEftuez3.1yTsFvB44Dn5O14L/q2/l2N17V6', 'petugas', NULL, '2022-08-22 11:58:25', '2022-08-22 11:58:25'),
(200, 'Nur Laily, M.Kes', 'laily@gmail.com', NULL, '$2y$10$FRd9y9Jqwi3B4leToVT7Y./GbsLOL5YZN9TyZu4xc6F6aCanJkQL.', 'dokter', NULL, NULL, NULL),
(505, 'Dr. Samsudin', 'sams@gmail.com', NULL, '$2y$10$1a4/DosW4k9V6S1eVBglxeGw8Ob0xV.skVlMtjC8ULFWat8j.BJke', 'dokter', NULL, '2022-08-22 11:50:02', '2022-08-22 11:50:02');

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
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_landingpage_navpic`
--
ALTER TABLE `tb_landingpage_navpic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_landingpage_predata`
--
ALTER TABLE `tb_landingpage_predata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu_petugas`
--
ALTER TABLE `tb_menu_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;

--
-- AUTO_INCREMENT for table `tb_landingpage_navpic`
--
ALTER TABLE `tb_landingpage_navpic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_landingpage_predata`
--
ALTER TABLE `tb_landingpage_predata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_menu_petugas`
--
ALTER TABLE `tb_menu_petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=506;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
