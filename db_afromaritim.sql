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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_afromaritim` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

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
  `telpon_cabang` varchar(255) NOT NULL,
  `gmaps_cabang` varchar(255) NOT NULL,
  `email_cabang` varchar(255) NOT NULL,
  `status_cabang` varchar(2) NOT NULL,
  PRIMARY KEY (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_tcabang` */

insert  into `master_tcabang`(`id_cabang`,`nama_cabang`,`jum_cabang`,`alamat_cabang`,`provinsi_cabang`,`kota_cabang`,`kecamatan_cabang`,`kelurahan_cabang`,`kodepos_cabang`,`telpon_cabang`,`gmaps_cabang`,`email_cabang`,`status_cabang`) values 
('C001','CabangSby','4','Ngagel Jaya no 3','Jawa Timur','Surabaya','Sidoarjo','Kediri','34234','34534534534','https://afrotransmaritim.co.id/','admi5n@gmail.com','1'),
('C002','Sudi','2','Lontar Raya 2','Jawa Barat','Surabaya','Sidoarjo','Batu','34234','43534534534','https://afrotransmaritim.co.id/','admi5n@gmail.com','1');

/*Table structure for table `master_tcustomer` */

DROP TABLE IF EXISTS `master_tcustomer`;

CREATE TABLE `master_tcustomer` (
  `id_customer` varchar(255) NOT NULL,
  `id_cabang` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `jalan` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `kode_pos` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status_hutang` varchar(255) DEFAULT NULL,
  `total_hutang` varchar(255) DEFAULT NULL,
  `batas_pembayaran` varchar(255) DEFAULT NULL,
  `no_rekening` varchar(255) DEFAULT NULL,
  `metode_pembayaran` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_customer`),
  KEY `fk_customer` (`id_cabang`),
  CONSTRAINT `fk_customer` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_tcustomer` */

insert  into `master_tcustomer`(`id_customer`,`id_cabang`,`nama_customer`,`npwp`,`jalan`,`provinsi`,`kota`,`kecamatan`,`kelurahan`,`kode_pos`,`telpon`,`email`,`status_hutang`,`total_hutang`,`batas_pembayaran`,`no_rekening`,`metode_pembayaran`) values 
('CU004','C001','Gradi','1234','Ngagel Jaya TImur','Jawa Timur','Bandung','Sidoarjo','Batu','601','08951111','teje@gmail.com',NULL,NULL,NULL,NULL,NULL),
('CU005','C001','Godamte','1111','Ngagel Jaya TImur','Jawa Timur','Surabaya','Sidoarjo','Blitar','602','08951112','godamte1@gmail.com',NULL,NULL,NULL,NULL,NULL);

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

insert  into `master_tkompetitor`(`id_kompetitor`,`nama_kompetitor`,`npwp_kompetitor`,`alamat_kompetitor`,`provinsi_kompetitor`,`kota_kompetitor`,`kecamatan_kompetitor`,`kelurahan_kompetitor`,`kodepos_kompetitor`,`nohp_kompetitor`,`telp_kompetitor`,`email_kompetitor`,`rute_kompetitor`,`namabank_kompetitor`,`norek_kompetitor`) values 
('K001','Dono','12312312','Candi tempel no 5','Jawa Timur','Bandung','Sidoarjo','Blitar','3334534','234234','3434545','admi5n@gmail.com','Jalan Tengah','BCA','2234234234');

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
  `kecamatan_pegawai` varchar(255) NOT NULL,
  `kelurahan_pegawai` varchar(255) NOT NULL,
  `kodepos_pegawai` varchar(255) NOT NULL,
  `nohp_pegawai` varchar(255) NOT NULL,
  `telp_pegawai` varchar(255) NOT NULL,
  `email_pegawai` varchar(255) NOT NULL,
  `role_pegawai` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `fk_pegawai` (`id_cabang`),
  CONSTRAINT `fk_pegawai` FOREIGN KEY (`id_cabang`) REFERENCES `master_tcabang` (`id_cabang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `master_tpegawai` */

insert  into `master_tpegawai`(`id_pegawai`,`id_cabang`,`nama_pegawai`,`npwp_pegawai`,`alamat_pegawai`,`provinsi_pegawai`,`kota_pegawai`,`kecamatan_pegawai`,`kelurahan_pegawai`,`kodepos_pegawai`,`nohp_pegawai`,`telp_pegawai`,`email_pegawai`,`role_pegawai`) values 
('P001','C001','Jojo','23423','sad','Jawa Timur','Surabaya','Sidoarjo','Blitar','3423423','324234','3434545','admi5n@gmail.com','Super Admin');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `nomor_transaksi` varchar(255) NOT NULL,
  `id_customer` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `id_admin` varchar(255) NOT NULL,
  `ukuran` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `rute` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jenis_harga` varchar(255) NOT NULL,
  `tonase` varchar(255) NOT NULL,
  `harga_tambahan` varchar(255) NOT NULL,
  `persentase` varchar(255) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `nama_kapal` varchar(255) NOT NULL,
  `nomor_container` varchar(255) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  PRIMARY KEY (`nomor_transaksi`),
  KEY `id_customer` (`id_customer`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `master_tcustomer` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `transaksi` */

insert  into `transaksi`(`nomor_transaksi`,`id_customer`,`nama_barang`,`id_admin`,`ukuran`,`volume`,`berat`,`rute`,`harga`,`jenis_harga`,`tonase`,`harga_tambahan`,`persentase`,`total_harga`,`nama_kapal`,`nomor_container`,`tanggal_berangkat`) values 
('TC002','CU004','Ayam','admin','2','10','1','Surabaya-Malang','20000','2','1','10000','10','20000','Hwe Ship','4','2023-02-03');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
