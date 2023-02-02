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

/*Table structure for table `master_jabatan` */

DROP TABLE IF EXISTS `master_jabatan`;

CREATE TABLE `master_jabatan` (
  `id_jabatan` varchar(255) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `status_jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_jabatan` */

/*Table structure for table `master_tcabang` */

DROP TABLE IF EXISTS `master_tcabang`;

CREATE TABLE `master_tcabang` (
  `id_cabang` varchar(255) NOT NULL,
  `nama_cabang` varchar(255) NOT NULL,
  `jum_cabang` varchar(255) NOT NULL,
  `alamat_cabang` varchar(255) NOT NULL,
  `provinsi_cabang` varchar(255) NOT NULL,
  `kota_cabang` varchar(255) NOT NULL,
  `kecamatan_cabang` varchar(255) NOT NULL,
  `kelurahan_cabang` varchar(255) NOT NULL,
  `kodepos_cabang` varchar(255) NOT NULL,
  `gmaps_cabang` varchar(255) NOT NULL,
  `email_cabang` varchar(255) NOT NULL,
  `status_cabang` varchar(2) NOT NULL,
  `kode_customer` varchar(5) NOT NULL,
  `kode_pegawai` varchar(5) NOT NULL,
  PRIMARY KEY (`id_cabang`),
  KEY `kode_customer` (`kode_customer`),
  KEY `kode_pegawai` (`kode_pegawai`),
  CONSTRAINT `master_tcabang_ibfk_1` FOREIGN KEY (`kode_customer`) REFERENCES `master_tcustomer` (`id_customer`),
  CONSTRAINT `master_tcabang_ibfk_2` FOREIGN KEY (`kode_pegawai`) REFERENCES `master_tpegawai` (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_tcabang` */

/*Table structure for table `master_tcustomer` */

DROP TABLE IF EXISTS `master_tcustomer`;

CREATE TABLE `master_tcustomer` (
  `id_customer` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `alamat_customer` varchar(255) NOT NULL,
  `total_hutang` varchar(255) NOT NULL,
  `batas_pembayaran` varchar(255) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_tcustomer` */

/*Table structure for table `master_tkompetitor` */

DROP TABLE IF EXISTS `master_tkompetitor`;

CREATE TABLE `master_tkompetitor` (
  `id_kompetitor` varchar(255) NOT NULL,
  `nama_kompetitor` varchar(255) NOT NULL,
  `npwp_kompetitor` varchar(255) NOT NULL,
  `alamat_kompetitor` varchar(255) NOT NULL,
  `provinsi_kompetitor` varchar(255) NOT NULL,
  `kota_kompetitor` varchar(255) NOT NULL,
  `kecamatan_kompetitor` varchar(255) NOT NULL,
  `kelurahan_kompetitor` varchar(255) NOT NULL,
  `kodepos_kompetitor` varchar(255) NOT NULL,
  `nohp_kompetitor` varchar(255) NOT NULL,
  `telp_kompetitor` varchar(255) NOT NULL,
  `email_kompetitor` varchar(255) NOT NULL,
  `rute_kompetitor` varchar(255) NOT NULL,
  `namabank_kompetitor` varchar(255) NOT NULL,
  `norek_kompetitor` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kompetitor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_tkompetitor` */

/*Table structure for table `master_tpegawai` */

DROP TABLE IF EXISTS `master_tpegawai`;

CREATE TABLE `master_tpegawai` (
  `id_pegawai` varchar(255) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `npwp_pegawai` varchar(255) NOT NULL,
  `alamat_pegawai` varchar(255) NOT NULL,
  `provinsi_pegawai` varchar(255) NOT NULL,
  `kota_pegawai` varchar(255) NOT NULL,
  `kecamatan_pegawai` varchar(255) NOT NULL,
  `kelurahan_pegawai` varchar(255) NOT NULL,
  `kodepos_pegawai` varchar(255) NOT NULL,
  `nohp_pegawai` varchar(255) NOT NULL,
  `telp_pegawai` varchar(255) NOT NULL,
  `emaill_pegawai` varchar(255) NOT NULL,
  `role_pegawai` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_tpegawai` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
