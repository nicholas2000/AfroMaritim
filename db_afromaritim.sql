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
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `activity` */

insert  into `activity`(`id`,`user`,`activity`,`ip_address`,`browser`,`os`,`created_at`,`updated_at`) values 
(1,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-01 07:48:30','2023-03-01 07:48:30');

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

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
('C001','CabangSurabaya','4','Ngagel Jaya no 3','Jawa Barat','Bandung','61213','08113190080','https://afrotransmaritim.co.id/','admin@gmail.com','1','2023-02-13 08:55:02','2023-02-14 00:37:41',NULL);

/*Table structure for table `master_tcontainer` */

DROP TABLE IF EXISTS `master_tcontainer`;

CREATE TABLE `master_tcontainer` (
  `id` varchar(255) NOT NULL,
  `no_container` varchar(255) NOT NULL,
  `nama_container` varchar(255) NOT NULL,
  `status` varchar(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_tcontainer` */

insert  into `master_tcontainer`(`id`,`no_container`,`nama_container`,`status`,`created_at`,`updated_at`,`deleted_at`) values 
('1','CO001','A','1','2023-03-01 08:36:20','2023-03-01 10:09:01',NULL),
('2','CO002','B','0','2023-03-01 08:36:28','2023-03-01 10:07:34',NULL);

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kompetitor`)
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
  `telp_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `role_pegawai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `master_tpegawai_id_cabang_foreign` (`id_cabang`),
  CONSTRAINT `master_tpegawai_id_cabang_foreign` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_tpegawai` */

insert  into `master_tpegawai`(`id_pegawai`,`id_cabang`,`nama_pegawai`,`npwp_pegawai`,`alamat_pegawai`,`provinsi_pegawai`,`kota_pegawai`,`kodepos_pegawai`,`telp_pegawai`,`email_pegawai`,`role_pegawai`,`created_at`,`updated_at`,`deleted_at`) values 
('P001','C001','Nicho','23423','Kabupaten Cikalang no 5','Jawa Timur','Surabaya','3334534','08113190080','admin@gmail.com','Super Admin','2023-02-13 08:55:32','2023-02-13 08:55:32',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(6,'2014_10_12_000000_create_users_table',1),
(7,'2014_10_12_100000_create_password_resets_table',1),
(8,'2019_08_19_000000_create_failed_jobs_table',1),
(9,'2019_12_14_000001_create_personal_access_tokens_table',1),
(10,'2023_02_08_150257_create_migration',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pengiriman` */

DROP TABLE IF EXISTS `pengiriman`;

CREATE TABLE `pengiriman` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kurir` varchar(25) NOT NULL,
  `no_transaksi` varchar(255) DEFAULT NULL,
  `tanggal_pengiriman` date DEFAULT NULL,
  `status_barang` varchar(15) DEFAULT NULL,
  `link foto` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `pengiriman` */

/*Table structure for table `permission` */

DROP TABLE IF EXISTS `permission`;

CREATE TABLE `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `daftar_berita` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `accounting` tinyint(1) DEFAULT NULL,
  `kurir` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `permission` */

insert  into `permission`(`id`,`daftar_berita`,`admin`,`accounting`,`kurir`) values 
(1,'Master Cabang',1,0,0),
(2,'Master Pegawai',0,0,0),
(3,'Master Customer',0,0,0),
(4,'Master Kompetitor',0,0,0),
(5,'Master Jenis Harga',0,0,0),
(6,'Transaksi',0,0,0),
(7,'History Transaksi',0,0,0);

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `nomor_transaksi` varchar(255) NOT NULL,
  `id_customer` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `berat` varchar(255) DEFAULT NULL,
  `rute` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jenis_harga` varchar(255) NOT NULL,
  `harga_tambahan` varchar(255) DEFAULT NULL,
  `persentase` varchar(255) DEFAULT NULL,
  `total_harga` varchar(255) NOT NULL,
  `id_container` varchar(255) NOT NULL,
  `nama_kapal` varchar(255) DEFAULT NULL,
  `tanggal_berangkat` date NOT NULL,
  `nomor_manifest` varchar(255) DEFAULT NULL,
  `link_foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nomor_transaksi`),
  KEY `transaksi_id_customer_foreign` (`id_customer`),
  KEY `transaksi_id_container_foreign` (`id_container`),
  CONSTRAINT `transaksi_id_container_foreign` FOREIGN KEY (`id_container`) REFERENCES `master_tcontainer` (`id`),
  CONSTRAINT `transaksi_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `master_tcustomer` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksi` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
