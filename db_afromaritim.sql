/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.27-MariaDB : Database - db_afromaritim
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_afromaritim` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `db_afromaritim`;

/*Table structure for table `activity` */

DROP TABLE IF EXISTS `activity`;

CREATE TABLE `activity` (
  `id` bigint(255) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `activity` */

insert  into `activity`(`id`,`user`,`activity`,`ip_address`,`browser`,`os`,`created_at`,`updated_at`) values 
(1,'Luna','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 15:57:34','2023-02-13 15:57:34'),
(2,'Luna','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 15:59:36','2023-02-13 15:59:36'),
(3,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 15:59:45','2023-02-13 15:59:45'),
(4,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:33:09','2023-02-13 16:33:09'),
(5,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:33:11','2023-02-13 16:33:11'),
(6,'Luna','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:33:40','2023-02-13 16:33:40'),
(7,'Luna','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:33:53','2023-02-13 16:33:53'),
(8,'Luna','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:35:40','2023-02-13 16:35:40'),
(9,'Luna','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:36:45','2023-02-13 16:36:45'),
(10,'Luna','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:37:59','2023-02-13 16:37:59'),
(11,'Luna','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:38:05','2023-02-13 16:38:05'),
(12,'Luna','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:51:51','2023-02-13 16:51:51'),
(13,'Luna','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:52:09','2023-02-13 16:52:09'),
(14,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-13 16:52:26','2023-02-13 16:52:26'),
(15,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-14 02:28:19','2023-02-14 02:28:19'),
(16,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-14 02:28:57','2023-02-14 02:28:57'),
(17,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-14 02:30:37','2023-02-14 02:30:37'),
(18,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-14 03:47:26','2023-02-14 03:47:26'),
(19,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-14 04:34:13','2023-02-14 04:34:13'),
(20,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-14 07:35:37','2023-02-14 07:35:37'),
(21,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-15 04:16:49','2023-02-15 04:16:49'),
(22,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-16 01:22:48','2023-02-16 01:22:48'),
(23,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-16 05:15:31','2023-02-16 05:15:31'),
(24,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-17 03:14:08','2023-02-17 03:14:08'),
(25,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-17 05:28:05','2023-02-17 05:28:05'),
(26,'Luna','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-19 02:59:56','2023-02-19 02:59:56'),
(27,'Luna','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-19 03:00:18','2023-02-19 03:00:18'),
(28,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-19 03:00:33','2023-02-19 03:00:33'),
(29,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-19 03:04:06','2023-02-19 03:04:06'),
(30,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-20 06:47:48','2023-02-20 06:47:48'),
(31,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-20 07:46:59','2023-02-20 07:46:59'),
(32,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-20 07:47:05','2023-02-20 07:47:05'),
(33,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-20 08:56:39','2023-02-20 08:56:39'),
(34,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-02-21 02:27:19','2023-02-21 02:27:19');

/*Table structure for table `depo` */

DROP TABLE IF EXISTS `depo`;

CREATE TABLE `depo` (
  `tanggal` date DEFAULT NULL,
  `no_transaksi` varchar(255) DEFAULT NULL,
  `nama_penerima` varchar(40) DEFAULT NULL,
  `nama_pengirim` varchar(40) DEFAULT NULL,
  `nama_barang` varchar(40) DEFAULT NULL,
  `no_resi` varchar(255) NOT NULL,
  `no_container` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`no_resi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `depo` */

insert  into `depo`(`tanggal`,`no_transaksi`,`nama_penerima`,`nama_pengirim`,`nama_barang`,`no_resi`,`no_container`) values 
('2023-02-20','TC23-02-001','Dicaprio','Dicaprio','Gula','102','1'),
('2023-02-20','TC23-02-002','Leo','Leo','T-Virus','108','1'),
('2023-02-20','TC23-02-002','Leo','Leo','T-Virus','110','1'),
('2023-02-20','TC23-02-004','nicho','nicho','A','12345','1');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `master_tcabang` */

DROP TABLE IF EXISTS `master_tcabang`;

CREATE TABLE `master_tcabang` (
  `id_cabang` varchar(255) NOT NULL,
  `nama_cabang` varchar(255) NOT NULL,
  `jum_cabang` varchar(255) NOT NULL,
  `alamat_cabang` varchar(255) NOT NULL,
  `provinsi_cabang` varchar(255) NOT NULL,
  `kota_cabang` varchar(255) NOT NULL,
  `kodepos_cabang` varchar(255) NOT NULL,
  `telpon_cabang` varchar(255) NOT NULL,
  `gmaps_cabang` varchar(255) NOT NULL,
  `email_cabang` varchar(255) NOT NULL,
  `status_cabang` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_tcabang` */

insert  into `master_tcabang`(`id_cabang`,`nama_cabang`,`jum_cabang`,`alamat_cabang`,`provinsi_cabang`,`kota_cabang`,`kodepos_cabang`,`telpon_cabang`,`gmaps_cabang`,`email_cabang`,`status_cabang`,`created_at`,`updated_at`,`deleted_at`) values 
('C001','CabangSurabaya','4','Ngagel Jaya no 3','Jawa Barat','Bandung','61213','08113190080','https://afrotransmaritim.co.id/','admin@gmail.com','1','2023-02-13 15:55:02','2023-02-14 07:37:41',NULL);

/*Table structure for table `master_tcustomer` */

DROP TABLE IF EXISTS `master_tcustomer`;

CREATE TABLE `master_tcustomer` (
  `id_customer` varchar(255) NOT NULL,
  `id_cabang` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `jalan` varchar(255) NOT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kode_pos` varchar(255) DEFAULT NULL,
  `telpon` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pajak` varchar(255) NOT NULL,
  `status_hutang` varchar(255) NOT NULL,
  `total_hutang` varchar(255) DEFAULT NULL,
  `batas_pembayaran` varchar(255) DEFAULT NULL,
  `no_rekening` varchar(255) DEFAULT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_customer`),
  KEY `master_tcustomer_id_cabang_foreign` (`id_cabang`),
  CONSTRAINT `master_tcustomer_id_cabang_foreign` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_tcustomer` */

insert  into `master_tcustomer`(`id_customer`,`id_cabang`,`nama_customer`,`npwp`,`jalan`,`provinsi`,`kode_pos`,`telpon`,`email`,`pajak`,`status_hutang`,`total_hutang`,`batas_pembayaran`,`no_rekening`,`metode_pembayaran`,`created_at`,`updated_at`,`deleted_at`) values 
('CU001','C001','alex','23423','Kabupaten Rembang no 4','Jawa Timur','3334534','08113190080','admin@gmail.com','Tidak Kena Pajak','Off',NULL,'',NULL,NULL,'2023-02-13 16:00:39','2023-02-14 07:37:03',NULL),
('CU002','C001','Nicholas','123','Surabaya','Jawa Timur','61213','123456','nicho@gmail.com','Tidak Kena Pajak','Off','','','','','2023-02-14 04:39:13','2023-02-14 04:39:13',NULL),
('CU003','C001','Nicholas','123','Sidoarjo','Jawa Timur','61213','123456','lala@gmail.com','Tidak Kena Pajak','Off','','','','','2023-02-14 05:24:14','2023-02-14 05:24:14',NULL);

/*Table structure for table `master_tjenis` */

DROP TABLE IF EXISTS `master_tjenis`;

CREATE TABLE `master_tjenis` (
  `tipe` varchar(255) NOT NULL,
  `jenis_harga` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tipe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_tjenis` */

insert  into `master_tjenis`(`tipe`,`jenis_harga`,`nominal`,`created_at`,`updated_at`) values 
('A','Volume','10000',NULL,NULL),
('B','Volume','-10000',NULL,NULL),
('C','Berat','35',NULL,NULL);

/*Table structure for table `master_tkompetitor` */

DROP TABLE IF EXISTS `master_tkompetitor`;

CREATE TABLE `master_tkompetitor` (
  `id_kompetitor` varchar(255) NOT NULL,
  `nama_kompetitor` varchar(255) NOT NULL,
  `npwp_kompetitor` varchar(255) NOT NULL,
  `alamat_kompetitor` varchar(255) NOT NULL,
  `provinsi_kompetitor` varchar(255) NOT NULL,
  `kodepos_kompetitor` varchar(255) NOT NULL,
  `telp_kompetitor` varchar(255) NOT NULL,
  `email_kompetitor` varchar(255) NOT NULL,
  `rute_kompetitor` varchar(255) NOT NULL,
  `namabank_kompetitor` varchar(255) NOT NULL,
  `norek_kompetitor` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_tkompetitor` */

/*Table structure for table `master_tpegawai` */

DROP TABLE IF EXISTS `master_tpegawai`;

CREATE TABLE `master_tpegawai` (
  `id_pegawai` varchar(255) NOT NULL,
  `id_cabang` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `npwp_pegawai` varchar(255) NOT NULL,
  `alamat_pegawai` varchar(255) NOT NULL,
  `provinsi_pegawai` varchar(255) NOT NULL,
  `kota_pegawai` varchar(255) NOT NULL,
  `kodepos_pegawai` varchar(255) NOT NULL,
  `nohp_pegawai` varchar(255) NOT NULL,
  `telp_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `role_pegawai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_tpegawai` */

insert  into `master_tpegawai`(`id_pegawai`,`id_cabang`,`nama_pegawai`,`npwp_pegawai`,`alamat_pegawai`,`provinsi_pegawai`,`kota_pegawai`,`kodepos_pegawai`,`nohp_pegawai`,`telp_pegawai`,`email_pegawai`,`role_pegawai`,`created_at`,`updated_at`,`deleted_at`) values 
('P001','C001','Nicho','23423','Kabupaten Cikalang no 5','Jawa Timur','Surabaya','3334534','324234','08113190080','admin@gmail.com','Super Admin','2023-02-13 15:55:32','2023-02-13 15:55:32',NULL),
('P002','C001','Luna','23423','Kabupaten Cikalang no 10','Jawa Barat','Bandung','3423423','3423432','08113190080','admi5n@gmail.com','Admin','2023-02-13 15:56:15','2023-02-13 15:56:15',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(11,'2014_10_12_000000_create_users_table',1),
(12,'2014_10_12_100000_create_password_resets_table',1),
(13,'2019_08_19_000000_create_failed_jobs_table',1),
(14,'2019_12_14_000001_create_personal_access_tokens_table',1),
(15,'2023_02_08_150257_create_migration',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pengiriman` */

DROP TABLE IF EXISTS `pengiriman`;

CREATE TABLE `pengiriman` (
  `no` int(11) NOT NULL,
  `nama_kurir` varchar(25) NOT NULL,
  `no_transaksi` varchar(255) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `status_barang` varchar(15) DEFAULT NULL,
  `link foto` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `pengiriman` */

/*Table structure for table `permission` */

DROP TABLE IF EXISTS `permission`;

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `daftar_berita` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `accounting` tinyint(1) DEFAULT NULL,
  `kurir` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `permission` */

insert  into `permission`(`id`,`daftar_berita`,`admin`,`accounting`,`kurir`) values 
(1,'Master Cabang',0,0,0),
(2,'Master Pegawai',0,0,0),
(3,'Master Customer',0,0,0),
(4,'Master Kompetitor',0,0,0),
(5,'Master Jenis Harga',0,0,0),
(6,'Transaksi',0,0,0),
(7,'History Transaksi',0,0,0);

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `nomor_transaksi` varchar(255) NOT NULL,
  `nomor_segel` varchar(255) DEFAULT NULL,
  `nama_pengirim` varchar(255) DEFAULT NULL,
  `alamat_pengirim` varchar(255) DEFAULT NULL,
  `nohp_pengirim` varchar(255) DEFAULT NULL,
  `email_pengirim` varchar(255) DEFAULT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `alamat_penerima` varchar(255) DEFAULT NULL,
  `nohp_penerima` varchar(255) DEFAULT NULL,
  `email_penerima` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `jenis_ukuran` varchar(255) DEFAULT NULL,
  `nominal_ukuran` varchar(255) DEFAULT NULL,
  `rute` varchar(255) DEFAULT NULL,
  `nama_kapal` varchar(255) DEFAULT NULL,
  `jenis_harga` varchar(255) DEFAULT NULL,
  `harga_kubik` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `harga_tambahan` varchar(255) DEFAULT NULL,
  `harga_potongan` varchar(255) DEFAULT NULL,
  `total_harga` varchar(255) DEFAULT NULL,
  `nomor_container` varchar(255) DEFAULT NULL,
  `nomor_resi` varchar(255) DEFAULT NULL,
  `status_barang` varchar(25) DEFAULT NULL,
  `nomor_manifest` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `link_foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nomor_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksi` */

insert  into `transaksi`(`nomor_transaksi`,`nomor_segel`,`nama_pengirim`,`alamat_pengirim`,`nohp_pengirim`,`email_pengirim`,`nama_penerima`,`alamat_penerima`,`nohp_penerima`,`email_penerima`,`nama_barang`,`jenis_ukuran`,`nominal_ukuran`,`rute`,`nama_kapal`,`jenis_harga`,`harga_kubik`,`harga`,`harga_tambahan`,`harga_potongan`,`total_harga`,`nomor_container`,`nomor_resi`,`status_barang`,`nomor_manifest`,`tanggal`,`link_foto`,`created_at`,`updated_at`,`deleted_at`) values 
('TC23-02-001','1','Rudi',NULL,NULL,NULL,'Rudi',NULL,NULL,NULL,'Ale',NULL,NULL,NULL,'Titanic',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,'1','2023-02-20',NULL,'2023-02-20 08:33:11','2023-02-20 08:53:52',NULL),
('TC23-02-002','1','Lula',NULL,NULL,NULL,'Lula',NULL,NULL,NULL,'Kapak',NULL,NULL,NULL,'Titanic',NULL,NULL,NULL,NULL,NULL,NULL,'1',NULL,NULL,'1','2023-02-20',NULL,'2023-02-20 08:37:48','2023-02-20 08:53:52',NULL),
('TC23-02-003',NULL,'Sasuke',NULL,NULL,NULL,'Sasuke',NULL,NULL,NULL,'Kunai',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'23','31',NULL,NULL,'2023-02-20',NULL,'2023-02-20 08:38:46','2023-02-20 08:38:46',NULL),
('TC23-02-004',NULL,'teje',NULL,NULL,NULL,'teje',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2023-02-21',NULL,'2023-02-21 02:28:25','2023-02-21 02:28:25',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
