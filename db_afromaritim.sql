-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Feb 2023 pada 08.52
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_afromaritim`
--
CREATE DATABASE IF NOT EXISTS `db_afromaritim` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_afromaritim`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE `activity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity`
--

INSERT INTO `activity` (`id`, `user`, `activity`, `ip_address`, `browser`, `os`, `created_at`, `updated_at`) VALUES
(1, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-27 23:52:05', '2023-02-27 23:52:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `depo`
--

DROP TABLE IF EXISTS `depo`;
CREATE TABLE `depo` (
  `tanggal` date DEFAULT NULL,
  `no_transaksi` varchar(255) DEFAULT NULL,
  `nama_penerima` varchar(40) DEFAULT NULL,
  `nama_pengirim` varchar(40) DEFAULT NULL,
  `nama_barang` varchar(40) DEFAULT NULL,
  `no_resi` varchar(255) NOT NULL,
  `no_container` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
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
-- Struktur dari tabel `master_tcabang`
--

DROP TABLE IF EXISTS `master_tcabang`;
CREATE TABLE `master_tcabang` (
  `id_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jum_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmaps_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_tcabang`
--

INSERT INTO `master_tcabang` (`id_cabang`, `nama_cabang`, `jum_cabang`, `alamat_cabang`, `provinsi_cabang`, `kota_cabang`, `kodepos_cabang`, `telpon_cabang`, `gmaps_cabang`, `email_cabang`, `status_cabang`, `created_at`, `updated_at`, `deleted_at`) VALUES
('C001', 'CabangSurabaya', '4', 'Ngagel Jaya no 3', 'Jawa Barat', 'Bandung', '61213', '08113190080', 'https://afrotransmaritim.co.id/', 'admin@gmail.com', '1', '2023-02-13 01:55:02', '2023-02-13 17:37:41', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tcontainer`
--

DROP TABLE IF EXISTS `master_tcontainer`;
CREATE TABLE `master_tcontainer` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_container` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_container` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_tcontainer`
--

INSERT INTO `master_tcontainer` (`id`, `no_container`, `nama_container`, `created_at`, `updated_at`, `deleted_at`) VALUES
('CTR001', 'CTR001', 'Kontainer 1', NULL, NULL, NULL),
('CTR002', 'CTR002', 'Kontainer 2', NULL, NULL, NULL),
('CTR003', 'CTR003', 'Kontainer 3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tcustomer`
--

DROP TABLE IF EXISTS `master_tcustomer`;
CREATE TABLE `master_tcustomer` (
  `id_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jalan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_pos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pajak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_hutang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_hutang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batas_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tjenis`
--

DROP TABLE IF EXISTS `master_tjenis`;
CREATE TABLE `master_tjenis` (
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tkompetitor`
--

DROP TABLE IF EXISTS `master_tkompetitor`;
CREATE TABLE `master_tkompetitor` (
  `id_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rute_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namabank_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek_kompetitor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_tpegawai`
--

DROP TABLE IF EXISTS `master_tpegawai`;
CREATE TABLE `master_tpegawai` (
  `id_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepos_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `master_tpegawai`
--

INSERT INTO `master_tpegawai` (`id_pegawai`, `id_cabang`, `nama_pegawai`, `npwp_pegawai`, `alamat_pegawai`, `provinsi_pegawai`, `kota_pegawai`, `kodepos_pegawai`, `telp_pegawai`, `email_pegawai`, `role_pegawai`, `created_at`, `updated_at`, `deleted_at`) VALUES
('P001', 'C001', 'Nicho', '23423', 'Kabupaten Cikalang no 5', 'Jawa Timur', 'Surabaya', '3334534', '08113190080', 'admin@gmail.com', 'Super Admin', '2023-02-13 01:55:32', '2023-02-13 01:55:32', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_02_08_150257_create_migration', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

DROP TABLE IF EXISTS `pengiriman`;
CREATE TABLE `pengiriman` (
  `no` int(11) NOT NULL,
  `nama_kurir` varchar(25) NOT NULL,
  `no_transaksi` varchar(255) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `status_barang` varchar(15) DEFAULT NULL,
  `link foto` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission`
--

DROP TABLE IF EXISTS `permission`;
CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `daftar_berita` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `accounting` tinyint(1) DEFAULT NULL,
  `kurir` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `permission`
--

INSERT INTO `permission` (`id`, `daftar_berita`, `admin`, `accounting`, `kurir`) VALUES
(1, 'Master Cabang', 1, 0, 0),
(2, 'Master Pegawai', 0, 0, 0),
(3, 'Master Customer', 0, 0, 0),
(4, 'Master Kompetitor', 0, 0, 0),
(5, 'Master Jenis Harga', 0, 0, 0),
(6, 'Transaksi', 0, 0, 0),
(7, 'History Transaksi', 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
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
-- Struktur dari tabel `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `nomor_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_customer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_tambahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_container` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_berangkat` date NOT NULL,
  `nomor_manifest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
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
-- Indeks untuk tabel `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `depo`
--
ALTER TABLE `depo`
  ADD PRIMARY KEY (`no_resi`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `master_tcabang`
--
ALTER TABLE `master_tcabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indeks untuk tabel `master_tcontainer`
--
ALTER TABLE `master_tcontainer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `master_tcustomer`
--
ALTER TABLE `master_tcustomer`
  ADD PRIMARY KEY (`id_customer`),
  ADD KEY `master_tcustomer_id_cabang_foreign` (`id_cabang`);

--
-- Indeks untuk tabel `master_tjenis`
--
ALTER TABLE `master_tjenis`
  ADD PRIMARY KEY (`tipe`);

--
-- Indeks untuk tabel `master_tkompetitor`
--
ALTER TABLE `master_tkompetitor`
  ADD PRIMARY KEY (`id_kompetitor`);

--
-- Indeks untuk tabel `master_tpegawai`
--
ALTER TABLE `master_tpegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `master_tpegawai_id_cabang_foreign` (`id_cabang`);

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
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`nomor_transaksi`),
  ADD KEY `transaksi_id_customer_foreign` (`id_customer`),
  ADD KEY `transaksi_id_container_foreign` (`id_container`);

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
-- AUTO_INCREMENT untuk tabel `activity`
--
ALTER TABLE `activity`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `master_tcustomer`
--
ALTER TABLE `master_tcustomer`
  ADD CONSTRAINT `master_tcustomer_id_cabang_foreign` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`);

--
-- Ketidakleluasaan untuk tabel `master_tpegawai`
--
ALTER TABLE `master_tpegawai`
  ADD CONSTRAINT `master_tpegawai_id_cabang_foreign` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_id_container_foreign` FOREIGN KEY (`id_container`) REFERENCES `master_tcontainer` (`id`),
  ADD CONSTRAINT `transaksi_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `master_tcustomer` (`id_customer`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
