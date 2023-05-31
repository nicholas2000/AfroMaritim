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

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `nomor_manifest` int(255) NOT NULL AUTO_INCREMENT,
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
  `berat` varchar(255) DEFAULT NULL,
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
  `kurir` varchar(100) DEFAULT NULL,
  `status_barang` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`nomor_resi`),
  KEY `transaksi_nomor_container_foreign` (`nomor_container`),
  KEY `nomor_manifest` (`nomor_manifest`),
  CONSTRAINT `transaksi_nomor_container_foreign` FOREIGN KEY (`nomor_container`) REFERENCES `master_tcontainer` (`nomor_container`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksi` */

insert  into `transaksi`(`nomor_manifest`,`nomor_resi`,`nomor_segel`,`nama_pengirim`,`alamat_pengirim`,`nohp_pengirim`,`email_pengirim`,`nama_penerima`,`alamat_penerima`,`nohp_penerima`,`email_penerima`,`jenis_barang`,`jumlah_barang`,`jenis_volume`,`berat`,`volume`,`jenis_harga`,`rute`,`nama_kapal`,`harga_kubik`,`harga`,`harga_tambahan`,`harga_potongan`,`total_harga`,`tanggal`,`nomor_container`,`link_foto`,`catatan`,`kurir`,`status_barang`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'1',NULL,'Kevin',NULL,NULL,NULL,'Jeffrey',NULL,NULL,NULL,'Daging','5',NULL,NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-03-07','CO001',NULL,NULL,NULL,'Stuffing','2023-03-07 16:20:31','2023-05-25 06:20:25',NULL),
(10,'111',NULL,'Budi',NULL,NULL,NULL,'Hartono',NULL,NULL,NULL,'Penggaris','21',NULL,NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-05-24','CO001',NULL,NULL,NULL,'Depo','2023-05-25 01:42:07','2023-05-25 01:42:07',NULL),
(11,'112',NULL,'Nelson',NULL,NULL,NULL,'Liam',NULL,NULL,NULL,'Gentong','12',NULL,NULL,'5',NULL,NULL,NULL,'0','0','0','0','0','2023-05-15','CO001',NULL,NULL,NULL,'Depo','2023-05-25 01:43:25','2023-05-25 01:43:25',NULL),
(3,'123',NULL,'Leo',NULL,NULL,NULL,'Pak Budi',NULL,NULL,NULL,'Gitar Listrik','23',NULL,NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-05-16',NULL,NULL,NULL,NULL,'Stuffing','2023-05-16 06:11:50','2023-05-25 06:20:25',NULL),
(13,'124',NULL,'Pak Bambang',NULL,NULL,NULL,'Nicho',NULL,NULL,NULL,'Daging','4',NULL,NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-05-01','CO001',NULL,NULL,NULL,'Depo','2023-05-25 04:19:49','2023-05-25 04:19:49',NULL),
(4,'27',NULL,'Nicholas','Makasar','2302001','lala@gmail.com','Hwe','Makasar','23','lala@gmail.com','Giutar','15',NULL,NULL,'10','-,-,0',NULL,'Boa','1999','0','500','1000','0','2023-03-24',NULL,NULL,NULL,NULL,'Stuffing','2023-03-29 02:37:13','2023-05-25 06:20:25',NULL),
(5,'32323','44','Rudi','Surabaya','3434343','lala@gmail.com','Ayam','Surabaya','43434343','lala@gmail.com','Air Jordan','23','Berat',NULL,'10','A,Berat,1000',NULL,'Poseidon','44444','16789743212','3434343','434343','16792743212','2023-03-15',NULL,NULL,NULL,'Dodi','','2023-03-02 08:29:23','2023-05-25 06:19:57',NULL),
(6,'5',NULL,'Jeffrey',NULL,NULL,NULL,'Nicho',NULL,NULL,NULL,'Mie','4',NULL,NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-03-07',NULL,NULL,NULL,'Dodi','Depo','2023-03-07 16:21:23','2023-05-23 05:21:28',NULL),
(14,'567',NULL,'sf',NULL,NULL,NULL,'Jeffrey',NULL,NULL,NULL,'Daging','4',NULL,NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-05-02','CO001',NULL,NULL,NULL,'Stuffing','2023-05-25 04:21:04','2023-05-25 04:21:22',NULL),
(7,'60',NULL,'chaler','Makasar','081321','lala@gmail.com','bambang','Makasar','0812312','lala@gmail.com','Kopu','5','Volume','0','6','A,Berat,1000',NULL,'Sunken Ship','500','2750000','2000','100','2751900','2023-03-29',NULL,NULL,NULL,NULL,'Depo SBY','2023-03-29 02:25:38','2023-05-25 07:58:54',NULL),
(8,'61',NULL,'rudi','Makasar','081321','lala@gmail.com','bambang','Makasar','0812312','lala@gmail.com','Kopu','23','Berat',NULL,'500','A,Berat,1000','Makassar','Sunken Ship','500','2750000','2000','100','2751900','2023-03-29',NULL,NULL,NULL,NULL,'Depo SBY','2023-03-29 02:26:36','2023-05-23 03:47:18',NULL),
(15,'763',NULL,'Pak Bambang',NULL,NULL,NULL,'Jeffrey',NULL,NULL,NULL,'Mie','199',NULL,NULL,NULL,NULL,NULL,NULL,'0','0','0','0','0',NULL,NULL,NULL,NULL,NULL,NULL,'2023-05-25 06:19:41','2023-05-25 06:19:41',NULL),
(9,'998',NULL,'Beni',NULL,NULL,NULL,'Bedu',NULL,NULL,NULL,'Tenis','10',NULL,NULL,'20',NULL,NULL,NULL,'0','0','0','0','0','2023-05-24','CO002',NULL,NULL,NULL,'Depo','2023-05-23 03:49:56','2023-05-23 04:30:36',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
