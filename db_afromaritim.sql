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
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `activity` */

insert  into `activity`(`id`,`user`,`activity`,`ip_address`,`browser`,`os`,`created_at`,`updated_at`) values 
(35,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-09 11:30:02','2023-03-09 11:30:02'),
(36,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-09 11:31:40','2023-03-09 11:31:40'),
(37,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-09 11:31:44','2023-03-09 11:31:44'),
(38,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-09 11:53:31','2023-03-09 11:53:31'),
(39,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-09 12:02:26','2023-03-09 12:02:26'),
(40,'Andi','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-09 12:02:32','2023-03-09 12:02:32'),
(41,'Andi','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:02:03','2023-03-14 03:02:03'),
(42,'Andi','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:02:33','2023-03-14 03:02:33'),
(43,'Andi','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:02:48','2023-03-14 03:02:48'),
(44,'Andi','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:03:03','2023-03-14 03:03:03'),
(45,'Andi','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:03:51','2023-03-14 03:03:51'),
(46,'Andi','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:10:50','2023-03-14 03:10:50'),
(47,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:10:54','2023-03-14 03:10:54'),
(48,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:11:32','2023-03-14 03:11:32'),
(49,'Andi','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:11:40','2023-03-14 03:11:40'),
(50,'Andi','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:12:09','2023-03-14 03:12:09'),
(51,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:12:17','2023-03-14 03:12:17'),
(52,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:55:42','2023-03-14 03:55:42'),
(53,'Budi','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 03:55:55','2023-03-14 03:55:55'),
(54,'Budi','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 04:23:02','2023-03-14 04:23:02'),
(55,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-14 04:23:14','2023-03-14 04:23:14'),
(56,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-16 03:31:24','2023-03-16 03:31:24'),
(57,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-16 04:20:26','2023-03-16 04:20:26'),
(58,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-28 05:39:19','2023-03-28 05:39:19'),
(59,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-28 07:02:28','2023-03-28 07:02:28'),
(60,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-28 12:25:31','2023-03-28 12:25:31'),
(61,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-28 16:32:00','2023-03-28 16:32:00'),
(62,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-28 16:44:19','2023-03-28 16:44:19'),
(63,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-28 16:51:08','2023-03-28 16:51:08'),
(64,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-28 16:54:24','2023-03-28 16:54:24'),
(65,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-29 02:00:55','2023-03-29 02:00:55'),
(66,'Andi','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-29 12:39:26','2023-03-29 12:39:26');

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
('C001','CabangMakassar','4','Jl Makassar no 1','Sulawesi Selatan','Makassar','61213','08113190080','https://afrotransmaritim.co.id/','cabang1@gmail.com','1','2023-02-13 08:55:02','2023-02-14 00:37:41',NULL),
('C002','CabangSurabaya','4','Jl Surabaya no 1','Jawa Timur','Surabaya','61213','08113190080','https://afrotransmaritim.co.id/','cabang2@gmail.com','1','2023-02-13 08:55:02','2023-02-14 00:37:41',NULL);

/*Table structure for table `master_tcontainer` */

DROP TABLE IF EXISTS `master_tcontainer`;

CREATE TABLE `master_tcontainer` (
  `nomor_container` varchar(255) NOT NULL,
  `nama_container` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nomor_container`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_tcontainer` */

insert  into `master_tcontainer`(`nomor_container`,`nama_container`,`status`,`created_at`,`updated_at`,`deleted_at`) values 
('CO001','A','1','2023-03-02 07:52:07','2023-03-06 08:58:03',NULL),
('CO002','B','1','2023-03-02 07:52:07','2023-03-02 07:52:07',NULL);

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
('CU001','C001','Jeffrey','923217421','jalan ngagel jaya tengah no 73-77','Jawa Barat','63432','028349328042390','cabangsba@gmail.com','Tidak Kena Pajak','Off','','','','','2023-03-06 08:58:46','2023-03-06 08:58:46',NULL);

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
('A','Berat','1000',NULL,NULL);

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
  `npwp_pegawai` varchar(255) DEFAULT NULL,
  `alamat_pegawai` varchar(255) NOT NULL,
  `provinsi_pegawai` varchar(255) DEFAULT NULL,
  `kota_pegawai` varchar(255) DEFAULT NULL,
  `kodepos_pegawai` varchar(255) DEFAULT NULL,
  `telp_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `password_pegawai` varchar(255) NOT NULL,
  `role_pegawai` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `master_tpegawai_id_cabang_foreign` (`id_cabang`),
  CONSTRAINT `master_tpegawai_id_cabang_foreign` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `master_tpegawai` */

insert  into `master_tpegawai`(`id_pegawai`,`id_cabang`,`nama_pegawai`,`npwp_pegawai`,`alamat_pegawai`,`provinsi_pegawai`,`kota_pegawai`,`kodepos_pegawai`,`telp_pegawai`,`email_pegawai`,`password_pegawai`,`role_pegawai`,`created_at`,`updated_at`,`deleted_at`) values 
('P001','C001','Nicho','23423','Kabupaten Cikalang no 5','Sulawesi Selatan','Makassar','3334534','08113190080','superadmin@gmail.com','$2y$10$Zp0lqCGIVRvCnG04gOfQjeNFOP7dYHcqXXSt2qx0Se4JvT58sek2S','Super Admin','2023-03-09 11:18:58','2023-03-09 11:18:58',NULL),
('P002','C001','Andi','231312','Jln. Ngagel Jaya no 4','Jawa Timur','Surabaya','231233','08113190080','admin2@gmail.com','$2y$10$u2kFoMtHRiPAjDip5XOS.OL80e4d6R2hFXUBS3rih2m5ft29gRGUm','Admin Surabaya','2023-03-09 11:26:09','2023-03-09 11:26:09',NULL),
('P003','C001','Budi',NULL,'Jln Makassar no  3','Sulawesi Selatan',NULL,NULL,'08113190080','admin3@gmail.com','$2y$10$4ePJhFYMr6HL/7S8MCuZ2OC9LKbJ2wRcz2cSspdep9v5yz.8cFrQ.','Admin Makassar','2023-03-14 03:54:39','2023-03-14 03:54:39',NULL),
('P004','C001','Dodi','12312312','Jln Makassar no  10','Sulawesi Selatan','Makassar','34234234','08113190080','kurir1@gmail.com','$2y$10$L9snZUSYNy7IqswAyGZJve/ZWhkqqiHiiQJqBlM/ncdFBFWidHqWu','Kurir','2023-03-16 04:27:18','2023-03-16 04:27:18',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2023_02_08_150257_create_migration',1);

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
  `adminmakassar` tinyint(1) DEFAULT NULL,
  `adminsurabaya` tinyint(1) DEFAULT NULL,
  `accounting` tinyint(1) DEFAULT NULL,
  `kurir` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `permission` */

insert  into `permission`(`id`,`daftar_berita`,`adminmakassar`,`adminsurabaya`,`accounting`,`kurir`) values 
(1,'Master Cabang',0,0,0,0),
(2,'Master Pegawai',0,0,0,0),
(3,'Master Customer',0,0,0,0),
(4,'Master Kompetitor',0,0,0,0),
(5,'Master Jenis Harga',0,0,0,0),
(6,'Transaksi',0,0,0,0),
(7,'History Transaksi',0,0,0,0),
(8,'Master Container',0,0,0,0),
(9,'Depo',0,0,0,0),
(10,'Status Barang',0,0,0,0),
(11,'Master Team Pengiriman',0,0,0,0),
(12,'Gudang',0,0,0,0),
(13,'Master Piutang',0,0,0,0);

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

/*Table structure for table `provinces` */

DROP TABLE IF EXISTS `provinces`;

CREATE TABLE `provinces` (
  `prov_id` int(11) NOT NULL AUTO_INCREMENT,
  `prov_nama` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`prov_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

/*Data for the table `provinces` */

insert  into `provinces`(`prov_id`,`prov_nama`,`status`) values 
(1,'ACEH',1),
(2,'SUMATERA UTARA',1),
(3,'SUMATERA BARAT',1),
(4,'RIAU',1),
(5,'JAMBI',1),
(6,'SUMATERA SELATAN',1),
(7,'BENGKULU',1),
(8,'LAMPUNG',1),
(9,'KEPULAUAN BANGKA BELITUNG',1),
(10,'KEPULAUAN RIAU',1),
(11,'DKI JAKARTA',1),
(12,'JAWA BARAT',1),
(13,'JAWA TENGAH',1),
(14,'DI YOGYAKARTA',1),
(15,'JAWA TIMUR',1),
(16,'BANTEN',1),
(17,'BALI',1),
(18,'NUSA TENGGARA BARAT',1),
(19,'NUSA TENGGARA TIMUR',1),
(20,'KALIMANTAN BARAT',1),
(21,'KALIMANTAN TENGAH',1),
(22,'KALIMANTAN SELATAN',1),
(23,'KALIMANTAN TIMUR',1),
(24,'KALIMANTAN UTARA',1),
(25,'SULAWESI UTARA',1),
(26,'SULAWESI TENGAH',1),
(27,'SULAWESI SELATAN',1),
(28,'SULAWESI TENGGARA',1),
(29,'GORONTALO',1),
(30,'SULAWESI BARAT',1),
(31,'MALUKU',1),
(32,'MALUKU UTARA',1),
(33,'PAPUA',1),
(34,'PAPUA BARAT',1);

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `nomor_manifest` varchar(255) DEFAULT NULL,
  `nomor_resi` varchar(255) NOT NULL,
  `nomor_segel` varchar(255) DEFAULT NULL,
  `nama_pengirim` varchar(255) DEFAULT NULL,
  `alamat_pengirim` varchar(255) DEFAULT NULL,
  `nohp_pengirim` varchar(255) DEFAULT NULL,
  `email_pengirim` varchar(255) DEFAULT NULL,
  `nama_penerima` varchar(255) DEFAULT NULL,
  `alamat_penerima` varchar(255) DEFAULT NULL,
  `nohp_penerima` varchar(255) DEFAULT NULL,
  `email_penerima` varchar(255) DEFAULT NULL,
  `jenis_barang` varchar(255) DEFAULT NULL,
  `jumlah_barang` varchar(255) DEFAULT NULL,
  `jenis_volume` varchar(255) DEFAULT NULL,
  `volume` varchar(255) DEFAULT NULL,
  `jenis_harga` varchar(255) DEFAULT NULL,
  `rute` varchar(255) DEFAULT NULL,
  `nama_kapal` varchar(255) DEFAULT NULL,
  `harga_kubik` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `harga_tambahan` varchar(255) DEFAULT NULL,
  `harga_potongan` varchar(255) DEFAULT NULL,
  `total_harga` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nomor_container` varchar(255) DEFAULT NULL,
  `link_foto` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `status_barang` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nomor_resi`),
  KEY `transaksi_nomor_container_foreign` (`nomor_container`),
  CONSTRAINT `transaksi_nomor_container_foreign` FOREIGN KEY (`nomor_container`) REFERENCES `master_tcontainer` (`nomor_container`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksi` */

insert  into `transaksi`(`nomor_manifest`,`nomor_resi`,`nomor_segel`,`nama_pengirim`,`alamat_pengirim`,`nohp_pengirim`,`email_pengirim`,`nama_penerima`,`alamat_penerima`,`nohp_penerima`,`email_penerima`,`jenis_barang`,`jumlah_barang`,`jenis_volume`,`volume`,`jenis_harga`,`rute`,`nama_kapal`,`harga_kubik`,`harga`,`harga_tambahan`,`harga_potongan`,`total_harga`,`tanggal`,`nomor_container`,`link_foto`,`catatan`,`status_barang`,`created_at`,`updated_at`,`deleted_at`) values 
(NULL,'1',NULL,'Kevin',NULL,NULL,NULL,'Jeffrey',NULL,NULL,NULL,'Daging','4',NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-03-07','CO001',NULL,NULL,'Depo','2023-03-07 16:20:31','2023-03-07 16:20:31',NULL),
(NULL,'27',NULL,'Nicholas','Makasar','2302001','lala@gmail.com','Hwe','Makasar','23','lala@gmail.com','Giutar','15',NULL,'10','-,-,0',NULL,'Boa','1999','0','500','1000','0','2023-03-24',NULL,NULL,NULL,'Kantor SBY','2023-03-29 02:37:13','2023-03-29 02:37:13',NULL),
(NULL,'32323','44','Rudi','Surabaya','3434343','lala@gmail.com','Ayam','Surabaya','43434343','lala@gmail.com',NULL,'','Berat',NULL,'A,Berat,1000','Makassar','Poseidon','44444','16789743212','3434343','434343','16792743212','2023-03-15','CO001',NULL,NULL,'Depo SBY','2023-03-02 08:29:23','2023-03-29 02:17:50',NULL),
(NULL,'5',NULL,'Jeffrey',NULL,NULL,NULL,'Nicho',NULL,NULL,NULL,'Mie','4',NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-03-07','CO001',NULL,NULL,'Depo','2023-03-07 16:21:23','2023-03-29 02:10:56','2023-03-29 02:10:56'),
(NULL,'60',NULL,'rudi','Makasar','081321','lala@gmail.com','bambang','Makasar','0812312','lala@gmail.com','Kopu',NULL,NULL,'500','-,-,0','Makassar','Sunken Ship','500','0','2000','100','0','2023-03-29',NULL,NULL,NULL,'Kantor SBY','2023-03-29 02:25:38','2023-03-29 02:25:38',NULL),
(NULL,'61',NULL,'rudi','Makasar','081321','lala@gmail.com','bambang','Makasar','0812312','lala@gmail.com','Kopu',NULL,NULL,'500','-,-,0','Makassar','Sunken Ship','500','0','2000','100','0','2023-03-29',NULL,NULL,NULL,'Kantor SBY','2023-03-29 02:26:36','2023-03-29 02:26:36',NULL);

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
