-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2023 pada 05.54
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
  `id` bigint(255) UNSIGNED NOT NULL,
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
(1, 'Luna', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 08:57:34', '2023-02-13 08:57:34'),
(2, 'Luna', 'Logout Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 08:59:36', '2023-02-13 08:59:36'),
(3, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 08:59:45', '2023-02-13 08:59:45'),
(4, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:33:09', '2023-02-13 09:33:09'),
(5, 'Nicho', 'Logout Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:33:11', '2023-02-13 09:33:11'),
(6, 'Luna', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:33:40', '2023-02-13 09:33:40'),
(7, 'Luna', 'Logout Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:33:53', '2023-02-13 09:33:53'),
(8, 'Luna', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:35:40', '2023-02-13 09:35:40'),
(9, 'Luna', 'Logout Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:36:45', '2023-02-13 09:36:45'),
(10, 'Luna', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:37:59', '2023-02-13 09:37:59'),
(11, 'Luna', 'Logout Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:38:05', '2023-02-13 09:38:05'),
(12, 'Luna', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:51:51', '2023-02-13 09:51:51'),
(13, 'Luna', 'Logout Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:52:09', '2023-02-13 09:52:09'),
(14, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 09:52:26', '2023-02-13 09:52:26'),
(15, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 19:28:19', '2023-02-13 19:28:19'),
(16, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 19:28:57', '2023-02-13 19:28:57'),
(17, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 19:30:37', '2023-02-13 19:30:37'),
(18, 'Nicho', 'Logout Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 20:47:26', '2023-02-13 20:47:26'),
(19, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-13 21:34:13', '2023-02-13 21:34:13'),
(20, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-14 00:35:37', '2023-02-14 00:35:37'),
(21, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-14 21:16:49', '2023-02-14 21:16:49'),
(22, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-15 18:22:48', '2023-02-15 18:22:48'),
(23, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-15 22:15:31', '2023-02-15 22:15:31'),
(24, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-16 20:14:08', '2023-02-16 20:14:08'),
(25, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-16 22:28:05', '2023-02-16 22:28:05'),
(26, 'Luna', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-18 19:59:56', '2023-02-18 19:59:56'),
(27, 'Luna', 'Logout Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-18 20:00:18', '2023-02-18 20:00:18'),
(28, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-18 20:00:33', '2023-02-18 20:00:33'),
(29, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-18 20:04:06', '2023-02-18 20:04:06'),
(30, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-19 23:47:48', '2023-02-19 23:47:48'),
(31, 'Nicho', 'Logout Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-20 00:46:59', '2023-02-20 00:46:59'),
(32, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-20 00:47:05', '2023-02-20 00:47:05'),
(33, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-20 01:56:39', '2023-02-20 01:56:39'),
(34, 'Nicho', 'Login Berhasil', '127.0.0.1', 'Chrome', 'Windows 10', '2023-02-20 19:27:19', '2023-02-20 19:27:19');

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

--
-- Dumping data untuk tabel `depo`
--

INSERT INTO `depo` (`tanggal`, `no_transaksi`, `nama_penerima`, `nama_pengirim`, `nama_barang`, `no_resi`, `no_container`) VALUES
('2023-02-20', 'TC23-02-001', 'Dicaprio', 'Dicaprio', 'Gula', '102', '1'),
('2023-02-20', 'TC23-02-002', 'Leo', 'Leo', 'T-Virus', '108', '1'),
('2023-02-20', 'TC23-02-002', 'Leo', 'Leo', 'T-Virus', '110', '1'),
('2023-02-20', 'TC23-02-004', 'nicho', 'nicho', 'A', '12345', '1');

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
('C001', 'CabangSurabaya', '4', 'Ngagel Jaya no 3', 'Jawa Barat', 'Bandung', '61213', '08113190080', 'https://afrotransmaritim.co.id/', 'admin@gmail.com', '1', '2023-02-13 08:55:02', '2023-02-14 00:37:41', NULL);

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

--
-- Dumping data untuk tabel `master_tcustomer`
--

INSERT INTO `master_tcustomer` (`id_customer`, `id_cabang`, `nama_customer`, `npwp`, `jalan`, `provinsi`, `kode_pos`, `telpon`, `email`, `pajak`, `status_hutang`, `total_hutang`, `batas_pembayaran`, `no_rekening`, `metode_pembayaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
('CU001', 'C001', 'alex', '23423', 'Kabupaten Rembang no 4', 'Jawa Timur', '3334534', '08113190080', 'admin@gmail.com', 'Tidak Kena Pajak', 'Off', NULL, '', NULL, NULL, '2023-02-13 09:00:39', '2023-02-14 00:37:03', NULL),
('CU002', 'C001', 'Nicholas', '123', 'Surabaya', 'Jawa Timur', '61213', '123456', 'nicho@gmail.com', 'Tidak Kena Pajak', 'Off', '', '', '', '', '2023-02-13 21:39:13', '2023-02-13 21:39:13', NULL),
('CU003', 'C001', 'Nicholas', '123', 'Sidoarjo', 'Jawa Timur', '61213', '123456', 'lala@gmail.com', 'Tidak Kena Pajak', 'Off', '', '', '', '', '2023-02-13 22:24:14', '2023-02-13 22:24:14', NULL);

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

--
-- Dumping data untuk tabel `master_tjenis`
--

INSERT INTO `master_tjenis` (`tipe`, `jenis_harga`, `nominal`, `created_at`, `updated_at`) VALUES
('A', 'Volume', '10000', NULL, NULL),
('B', 'Volume', '-10000', NULL, NULL),
('C', 'Berat', '35', NULL, NULL);

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
  `nohp_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `master_tpegawai` (`id_pegawai`, `id_cabang`, `nama_pegawai`, `npwp_pegawai`, `alamat_pegawai`, `provinsi_pegawai`, `kota_pegawai`, `kodepos_pegawai`, `nohp_pegawai`, `telp_pegawai`, `email_pegawai`, `role_pegawai`, `created_at`, `updated_at`, `deleted_at`) VALUES
('P001', 'C001', 'Nicho', '23423', 'Kabupaten Cikalang no 5', 'Jawa Timur', 'Surabaya', '3334534', '324234', '08113190080', 'admin@gmail.com', 'Super Admin', '2023-02-13 08:55:32', '2023-02-13 08:55:32', NULL),
('P002', 'C001', 'Luna', '23423', 'Kabupaten Cikalang no 10', 'Jawa Barat', 'Bandung', '3423423', '3423432', '08113190080', 'admi5n@gmail.com', 'Admin', '2023-02-13 08:56:15', '2023-02-13 08:56:15', NULL);

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_02_08_150257_create_migration', 1);

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
(1, 'Master Cabang', 0, 0, 0),
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
  `nomor_resi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penerima` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_penerima` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp_penerima` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_penerima` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nominal_ukuran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kapal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_kubik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_tambahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_potongan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_container` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_barang` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_segel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_manifest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `link_foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`nomor_transaksi`, `nomor_resi`, `nama_pengirim`, `alamat_pengirim`, `nohp_pengirim`, `email_pengirim`, `nama_penerima`, `alamat_penerima`, `nohp_penerima`, `email_penerima`, `nama_barang`, `jenis_ukuran`, `nominal_ukuran`, `rute`, `nama_kapal`, `jenis_harga`, `harga_kubik`, `harga`, `harga_tambahan`, `harga_potongan`, `total_harga`, `nomor_container`, `status_barang`, `nomor_segel`, `nomor_manifest`, `tanggal`, `link_foto`, `created_at`, `updated_at`, `deleted_at`) VALUES
('TC23-02-001', NULL, 'Rudi', NULL, NULL, NULL, 'Rudi', NULL, NULL, NULL, 'Ale', NULL, NULL, NULL, 'Titanic', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '1', '1', '2023-02-20', NULL, '2023-02-20 01:33:11', '2023-02-20 01:53:52', NULL),
('TC23-02-002', NULL, 'Lula', NULL, NULL, NULL, 'Lula', NULL, NULL, NULL, 'Kapak', NULL, NULL, NULL, 'Titanic', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, '1', '1', '2023-02-20', NULL, '2023-02-20 01:37:48', '2023-02-20 01:53:52', NULL),
('TC23-02-003', '31', 'Sasuke', NULL, NULL, NULL, 'Sasuke', NULL, NULL, NULL, 'Kunai', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23', NULL, NULL, NULL, '2023-02-20', NULL, '2023-02-20 01:38:46', '2023-02-20 01:38:46', NULL),
('TC23-02-004', NULL, 'teje', NULL, NULL, NULL, 'teje', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-21', NULL, '2023-02-20 19:28:25', '2023-02-20 19:28:25', NULL);

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
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`nomor_transaksi`),
  ADD UNIQUE KEY `nomor_resi` (`nomor_resi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity`
--
ALTER TABLE `activity`
  MODIFY `id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `master_tcustomer`
--
ALTER TABLE `master_tcustomer`
  ADD CONSTRAINT `master_tcustomer_id_cabang_foreign` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
