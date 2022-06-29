-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Jun 2022 pada 22.01
-- Versi server: 5.7.36
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akrilikl_mekarlaser`
--
CREATE DATABASE IF NOT EXISTS `akrilikl_mekarlaser` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `akrilikl_mekarlaser`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_slug`, `blog_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Prototype IOT', 'prototype-iot', 'ini adalah prototype IOT', 'iot.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2022_06_26_040115_create_teams_table', 2),
(28, '2014_10_12_000000_create_users_table', 3),
(29, '2014_10_12_100000_create_password_resets_table', 3),
(30, '2019_08_19_000000_create_failed_jobs_table', 3),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(32, '2022_06_26_020734_create_services_table', 3),
(33, '2022_06_26_035631_create_portfolios_table', 3),
(34, '2022_06_26_091657_create_teams_table', 3),
(35, '2022_06_26_135822_create_blogs_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `portfolios`
--

INSERT INTO `portfolios` (`id`, `judul_produk`, `slug`, `gambar`, `lokasi`, `nama_kategori`, `client`, `created_at`, `updated_at`) VALUES
(1, 'SMK YPT 1 PURBALINGGA', 'smk-ypt-1-purbalingga', 'desain3.jpeg', 'Jl. Mayjen Sungkono No. Km.3, Selabaya, Kec. Kalimanah, Kab. Purbalingga', 'huruf timbul', 'SMK YPT 1 PURBALINGGA', NULL, NULL),
(2, 'FOTO BALI', 'foto-bali', '3.png', 'Jl. Letnan Suparto, Purbalingga, Purbalingga Lor, Kec. Purbalingga, kab. Purbalingga', 'huruf timbul', 'FOTO STUDIO BALI', NULL, NULL),
(3, 'NEON BOX SMK', 'neon-box-smk', 'neonbox.jpg', 'Jl. Mayjen Sungkono, Selabaya, Kec. Kalimanah, Kab. Purbalingga', 'neon box', 'SMK NEGERI 1 PURBALINGGA', NULL, NULL),
(4, 'Web instansi', 'web-instansi', 'web.png', 'Kalikabong, Kec. Kalimanah, Kabupaten Purbalingga', 'website', 'CV. Mekar Cutting Digital', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kutipan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `judul_service`, `slug`, `jenis_service`, `gambar`, `kutipan`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Pembuatan Website', 'pembuatan-website', 'digital creative', 'web.jpg', 'Website menjadi fasilitas sangat penting untuk pemasaran dan scale up bisnis di era digital ini. Miliki sekarang!', 'Website dengan domain berbayar dapat meningkatkan kepercayaan konsumen dan calon konsumen. Bayangkan apabila Anda seorang pengusaha yang memiliki produk bagus namun dalam praktek digital marketing hanya menggunakan blog gratisan seperti blogspot, apa kata dunia? Bahkan seorang blogger pemula sekarang ini sudah menggunakan website dengan domain yang berbayar. Nah, maka dari itu sangat penting bagi Anda yang bahkan seorang penguasaha pemula memulai bisnis dengan menggunakan domain premium yang akan jasa pembuatan website Purbalingga urus semuanya.', NULL, NULL),
(2, 'Pembuatan Prototype IOT', 'pembuatan-prototype-iot', 'digital creative', 'iot.jpg', 'Masa sekarang yang serba canggih yang membuat kita mengontrol dari\r\n                                    jarak jauh. Perancangan IOT (Internet of Think)\r\n                                    yang memberi kemudahan bagi kita di masa sekarang. Mudah dan fleksibel. Miliki\r\n                                    sekarang!', 'Masa sekarang yang serba canggih yang membuat kita mengontrol dari\r\n                                    jarak jauh. Perancangan IOT (Internet of Think)\r\n                                    yang memberi kemudahan bagi kita di masa sekarang. Mudah dan fleksibel. Miliki\r\n                                    sekarang!', NULL, NULL),
(3, 'Produksi Papan Reklame', 'pembuatan-papan-reklame', 'advertising', 'reklame.jpg', 'Papan reklame, papan iklan, atau baliho merupakan salah satu media\r\n                                    luar ruang yang memiliki tujuan menyampaikan pesan mengenai suatu produk atau jasa\r\n                                    bahkan individu-individu yang ingin mendongkrak popularitas.', 'Papan reklame, papan iklan, atau baliho merupakan salah satu media\r\n                                    luar ruang yang memiliki tujuan menyampaikan pesan mengenai suatu produk atau jasa\r\n                                    bahkan individu-individu yang ingin mendongkrak popularitas.\r\n\r\nJasa pembuatan papan reklame tentunya bisa menjadi pilihan terbaik untuk anda lakukan. karena dengan papan reklame iklan yang banyak diminati untuk mempromosikan produk dan lainnya. Namun masih bingung dengan memilih jasa pembuatan neon box berkualitas. Masih bingung memilih jasa berkualitas. Kami hadir untuk anda yang membutuhkan papan reklame. Desian sesuai keinginan anda dan juga harga yang sangat terjangkau.', NULL, NULL),
(4, 'Produksi Neon Box', 'pembuatan-neon-box', 'advertising', 'neonbox.jpg', 'Neon box merupakan produk paling penting yang harus dimiliki setiap\r\n                pengusaha baik pemula maupun profesional. Miliki sekarang!', 'Jasa pembuatan neon box tentunya bisa menjadi pilihan terbaik untuk anda lakukan. Karena neon box adalah salah satu media iklan yang banyak diminati untuk mempromosikan produk yang dimiliki. Namun, masih ada sebagian orang yang masih kebingungan dalam memilih jasa pembuatan neon box berkualitas. Untuk itu, di bawah ini akan dipaparkan bagaimana cara memilih jasa berkualitas yang sesuai dengan kebutuhan.\r\n\r\nApabila saat ini Anda sedang bingung mencari tempat untuk Jasa Neon Box (Akrilik / Banner / NeonSign / Letterbox), Anda telah berada di tempat yang tepat. Tepat sekali, kami adalah profesional dalam bidang yang memproduksi berbagai macam kebutuhan Neon Box Anda mulai dari Outdoor sampai Indoor, Insya Allah hasilnya sangat memuaskan dan harga neonbox nya terjangkau.', NULL, NULL),
(5, 'Produksi huruf timbul', 'pembuatan-huruf-timbul', 'advertising', '/3.png', '/3.png', 'Jasa Pembuatan Huruf Timbul dan Tulisan Timbul – Pada saat ini huruf timbul sudah sangat sering dijumpai di sebagian besar perusahaan hingga restoran, bahkan masjid sekalipun kota-kota besar. Nah, untuk membuat huruf timbul ini, tentunya dibutuhkan jasa pembuatan huruf timbul murah agar tampilan yang dihasilkan bisa sesuai dengan keinginan. Menurut harga dan bentuknya, huruf timbul atau biasa juga disebut letter sign / letter box terbuat dari bahan yang berbeda. Untuk mengetahui lebih jelasnya mengenai bahan-bahan yang digunakan, langsung saja berikut pembahasan pembuatan letter timbul selengkapnya.\r\nKami mampu memproduksi dengan berbagai macam desain logo tulisan timbul serta berbagai macam bahan. Beberapa bahan yang biasanya digunakan untuk membuat huruf timbul yaitu, acrylic ( akrilik ), stainless ( stenlis ), galvanis ( galvanil ), kuningan, MDF dan kayu. Kami hanya membuat huruf timbul dengan kualitas yang terbaik namun dengan harga huruf timbul murah. Kami tidak jual membuat tulisan timbul atau letter timbul dengan kualitas jelek dan tanpa garansi. Semua hasil pembuatan kami bergaransi!', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `teams`
--

INSERT INTO `teams` (`id`, `nama`, `gambar`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Deddy Suwito.jpeg', 'pakdedy.jpeg', 'Senior Software Developer', NULL, NULL),
(2, 'Ardianto Putra Pratomo', 'ardianto.jpeg', 'Full-Stack Web Developer', NULL, NULL),
(3, 'Tresnanda Agsifa Cakra Buana', 'tresnanda.png', 'Full-Stack Web Developer', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
