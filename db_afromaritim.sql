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
) ENGINE=InnoDB AUTO_INCREMENT=288 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(66,'Andi','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-03-29 12:39:26','2023-03-29 12:39:26'),
(67,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-11 11:59:21','2023-04-11 11:59:21'),
(68,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-11 11:59:22','2023-04-11 11:59:22'),
(69,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-11 11:59:42','2023-04-11 11:59:42'),
(70,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-11 12:11:27','2023-04-11 12:11:27'),
(71,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 02:39:08','2023-04-12 02:39:08'),
(72,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:05:11','2023-04-12 04:05:11'),
(73,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:05:11','2023-04-12 04:05:11'),
(74,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:06:07','2023-04-12 04:06:07'),
(75,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:06:08','2023-04-12 04:06:08'),
(76,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:06:35','2023-04-12 04:06:35'),
(77,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:06:36','2023-04-12 04:06:36'),
(78,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:06:36','2023-04-12 04:06:36'),
(79,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:06:37','2023-04-12 04:06:37'),
(80,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:06:39','2023-04-12 04:06:39'),
(81,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:06:40','2023-04-12 04:06:40'),
(82,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:06:54','2023-04-12 04:06:54'),
(83,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:18:37','2023-04-12 04:18:37'),
(84,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:18:37','2023-04-12 04:18:37'),
(85,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:24:02','2023-04-12 04:24:02'),
(86,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:24:03','2023-04-12 04:24:03'),
(87,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:24:03','2023-04-12 04:24:03'),
(88,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:24:04','2023-04-12 04:24:04'),
(89,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:40:52','2023-04-12 04:40:52'),
(90,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:40:54','2023-04-12 04:40:54'),
(91,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:40:54','2023-04-12 04:40:54'),
(92,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:48:15','2023-04-12 04:48:15'),
(93,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 04:48:17','2023-04-12 04:48:17'),
(94,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 11:53:36','2023-04-12 11:53:36'),
(95,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 11:54:21','2023-04-12 11:54:21'),
(96,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 11:55:29','2023-04-12 11:55:29'),
(97,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 11:55:30','2023-04-12 11:55:30'),
(98,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 11:56:36','2023-04-12 11:56:36'),
(99,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 11:58:22','2023-04-12 11:58:22'),
(100,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:00:29','2023-04-12 12:00:29'),
(101,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:05:07','2023-04-12 12:05:07'),
(102,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:37:03','2023-04-12 12:37:03'),
(103,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:37:27','2023-04-12 12:37:27'),
(104,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:37:56','2023-04-12 12:37:56'),
(105,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:38:11','2023-04-12 12:38:11'),
(106,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:38:14','2023-04-12 12:38:14'),
(107,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:38:27','2023-04-12 12:38:27'),
(108,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:38:57','2023-04-12 12:38:57'),
(109,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:40:31','2023-04-12 12:40:31'),
(110,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:41:27','2023-04-12 12:41:27'),
(111,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:42:11','2023-04-12 12:42:11'),
(112,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:42:13','2023-04-12 12:42:13'),
(113,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:42:14','2023-04-12 12:42:14'),
(114,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:42:30','2023-04-12 12:42:30'),
(115,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:42:55','2023-04-12 12:42:55'),
(116,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:43:06','2023-04-12 12:43:06'),
(117,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:43:22','2023-04-12 12:43:22'),
(118,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:43:33','2023-04-12 12:43:33'),
(119,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:43:49','2023-04-12 12:43:49'),
(120,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:44:07','2023-04-12 12:44:07'),
(121,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:46:28','2023-04-12 12:46:28'),
(122,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:46:57','2023-04-12 12:46:57'),
(123,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:48:32','2023-04-12 12:48:32'),
(124,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:48:33','2023-04-12 12:48:33'),
(125,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:48:38','2023-04-12 12:48:38'),
(126,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:48:43','2023-04-12 12:48:43'),
(127,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:48:54','2023-04-12 12:48:54'),
(128,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:48:55','2023-04-12 12:48:55'),
(129,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:50:51','2023-04-12 12:50:51'),
(130,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:50:58','2023-04-12 12:50:58'),
(131,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:51:02','2023-04-12 12:51:02'),
(132,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:51:03','2023-04-12 12:51:03'),
(133,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:51:11','2023-04-12 12:51:11'),
(134,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:51:50','2023-04-12 12:51:50'),
(135,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:51:52','2023-04-12 12:51:52'),
(136,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:51:57','2023-04-12 12:51:57'),
(137,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:52:02','2023-04-12 12:52:02'),
(138,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:52:13','2023-04-12 12:52:13'),
(139,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:52:42','2023-04-12 12:52:42'),
(140,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:52:47','2023-04-12 12:52:47'),
(141,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:52:49','2023-04-12 12:52:49'),
(142,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:52:56','2023-04-12 12:52:56'),
(143,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:53:23','2023-04-12 12:53:23'),
(144,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:53:31','2023-04-12 12:53:31'),
(145,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:53:43','2023-04-12 12:53:43'),
(146,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:53:51','2023-04-12 12:53:51'),
(147,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:54:10','2023-04-12 12:54:10'),
(148,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:54:34','2023-04-12 12:54:34'),
(149,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:54:41','2023-04-12 12:54:41'),
(150,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:54:46','2023-04-12 12:54:46'),
(151,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:54:56','2023-04-12 12:54:56'),
(152,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:55:09','2023-04-12 12:55:09'),
(153,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:56:02','2023-04-12 12:56:02'),
(154,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:56:08','2023-04-12 12:56:08'),
(155,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:57:03','2023-04-12 12:57:03'),
(156,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:57:12','2023-04-12 12:57:12'),
(157,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:57:19','2023-04-12 12:57:19'),
(158,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:57:23','2023-04-12 12:57:23'),
(159,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:57:40','2023-04-12 12:57:40'),
(160,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:58:04','2023-04-12 12:58:04'),
(161,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:58:09','2023-04-12 12:58:09'),
(162,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:58:12','2023-04-12 12:58:12'),
(163,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:58:15','2023-04-12 12:58:15'),
(164,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:59:06','2023-04-12 12:59:06'),
(165,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:59:19','2023-04-12 12:59:19'),
(166,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:59:28','2023-04-12 12:59:28'),
(167,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:59:39','2023-04-12 12:59:39'),
(168,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 12:59:47','2023-04-12 12:59:47'),
(169,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:00:05','2023-04-12 13:00:05'),
(170,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:00:14','2023-04-12 13:00:14'),
(171,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:00:56','2023-04-12 13:00:56'),
(172,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:00:58','2023-04-12 13:00:58'),
(173,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:01:04','2023-04-12 13:01:04'),
(174,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:01:11','2023-04-12 13:01:11'),
(175,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:01:15','2023-04-12 13:01:15'),
(176,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:01:20','2023-04-12 13:01:20'),
(177,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:01:25','2023-04-12 13:01:25'),
(178,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:02:25','2023-04-12 13:02:25'),
(179,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:02:59','2023-04-12 13:02:59'),
(180,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:03:23','2023-04-12 13:03:23'),
(181,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:03:31','2023-04-12 13:03:31'),
(182,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:06:07','2023-04-12 13:06:07'),
(183,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:06:33','2023-04-12 13:06:33'),
(184,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:06:58','2023-04-12 13:06:58'),
(185,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:07:14','2023-04-12 13:07:14'),
(186,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:07:25','2023-04-12 13:07:25'),
(187,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:07:33','2023-04-12 13:07:33'),
(188,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:07:51','2023-04-12 13:07:51'),
(189,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:08:04','2023-04-12 13:08:04'),
(190,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:08:21','2023-04-12 13:08:21'),
(191,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:08:28','2023-04-12 13:08:28'),
(192,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:08:55','2023-04-12 13:08:55'),
(193,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:09:12','2023-04-12 13:09:12'),
(194,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:09:18','2023-04-12 13:09:18'),
(195,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:10:08','2023-04-12 13:10:08'),
(196,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:21:05','2023-04-12 13:21:05'),
(197,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:21:06','2023-04-12 13:21:06'),
(198,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:22:05','2023-04-12 13:22:05'),
(199,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:22:06','2023-04-12 13:22:06'),
(200,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:22:09','2023-04-12 13:22:09'),
(201,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:22:09','2023-04-12 13:22:09'),
(202,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:23:09','2023-04-12 13:23:09'),
(203,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:23:11','2023-04-12 13:23:11'),
(204,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:23:11','2023-04-12 13:23:11'),
(205,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:24:48','2023-04-12 13:24:48'),
(206,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:24:49','2023-04-12 13:24:49'),
(207,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:24:53','2023-04-12 13:24:53'),
(208,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:24:53','2023-04-12 13:24:53'),
(209,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:25:04','2023-04-12 13:25:04'),
(210,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:25:05','2023-04-12 13:25:05'),
(211,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:25:31','2023-04-12 13:25:31'),
(212,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:25:32','2023-04-12 13:25:32'),
(213,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:27:18','2023-04-12 13:27:18'),
(214,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:27:19','2023-04-12 13:27:19'),
(215,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:27:46','2023-04-12 13:27:46'),
(216,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:27:47','2023-04-12 13:27:47'),
(217,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:28:02','2023-04-12 13:28:02'),
(218,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:28:02','2023-04-12 13:28:02'),
(219,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:28:53','2023-04-12 13:28:53'),
(220,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:28:54','2023-04-12 13:28:54'),
(221,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:29:50','2023-04-12 13:29:50'),
(222,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-12 13:29:51','2023-04-12 13:29:51'),
(223,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:08:13','2023-04-13 03:08:13'),
(224,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:08:16','2023-04-13 03:08:16'),
(225,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:09:55','2023-04-13 03:09:55'),
(226,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:09:55','2023-04-13 03:09:55'),
(227,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:12:15','2023-04-13 03:12:15'),
(228,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:12:16','2023-04-13 03:12:16'),
(229,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:13:37','2023-04-13 03:13:37'),
(230,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:13:39','2023-04-13 03:13:39'),
(231,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:13:49','2023-04-13 03:13:49'),
(232,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:13:49','2023-04-13 03:13:49'),
(233,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:14:49','2023-04-13 03:14:49'),
(234,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:16:23','2023-04-13 03:16:23'),
(235,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:18:34','2023-04-13 03:18:34'),
(236,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:18:48','2023-04-13 03:18:48'),
(237,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:18:48','2023-04-13 03:18:48'),
(238,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:22:37','2023-04-13 03:22:37'),
(239,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:22:39','2023-04-13 03:22:39'),
(240,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:35:40','2023-04-13 03:35:40'),
(241,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:38:38','2023-04-13 03:38:38'),
(242,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:41:31','2023-04-13 03:41:31'),
(243,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:41:52','2023-04-13 03:41:52'),
(244,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:44:15','2023-04-13 03:44:15'),
(245,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:44:27','2023-04-13 03:44:27'),
(246,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:44:30','2023-04-13 03:44:30'),
(247,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:46:46','2023-04-13 03:46:46'),
(248,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:47:26','2023-04-13 03:47:26'),
(249,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:47:28','2023-04-13 03:47:28'),
(250,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:48:18','2023-04-13 03:48:18'),
(251,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:48:28','2023-04-13 03:48:28'),
(252,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:48:52','2023-04-13 03:48:52'),
(253,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:49:08','2023-04-13 03:49:08'),
(254,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:49:33','2023-04-13 03:49:33'),
(255,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:49:40','2023-04-13 03:49:40'),
(256,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:50:10','2023-04-13 03:50:10'),
(257,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:51:23','2023-04-13 03:51:23'),
(258,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:51:53','2023-04-13 03:51:53'),
(259,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:54:04','2023-04-13 03:54:04'),
(260,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:55:09','2023-04-13 03:55:09'),
(261,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:55:17','2023-04-13 03:55:17'),
(262,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:55:45','2023-04-13 03:55:45'),
(263,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:55:52','2023-04-13 03:55:52'),
(264,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:56:02','2023-04-13 03:56:02'),
(265,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:57:23','2023-04-13 03:57:23'),
(266,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:58:08','2023-04-13 03:58:08'),
(267,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 03:59:15','2023-04-13 03:59:15'),
(268,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 04:02:33','2023-04-13 04:02:33'),
(269,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 04:19:55','2023-04-13 04:19:55'),
(270,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 04:20:13','2023-04-13 04:20:13'),
(271,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 04:20:39','2023-04-13 04:20:39'),
(272,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 04:21:44','2023-04-13 04:21:44'),
(273,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 05:05:46','2023-04-13 05:05:46'),
(274,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-04-13 05:08:52','2023-04-13 05:08:52'),
(275,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-01 05:28:12','2023-05-01 05:28:12'),
(276,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-01 05:38:46','2023-05-01 05:38:46'),
(277,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-02 02:16:59','2023-05-02 02:16:59'),
(278,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-02 02:19:07','2023-05-02 02:19:07'),
(279,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-16 02:25:57','2023-05-16 02:25:57'),
(280,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-16 05:50:36','2023-05-16 05:50:36'),
(281,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-19 03:04:28','2023-05-19 03:04:28'),
(282,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-23 03:45:51','2023-05-23 03:45:51'),
(283,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-24 01:07:00','2023-05-24 01:07:00'),
(284,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-25 01:25:57','2023-05-25 01:25:57'),
(285,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-25 01:26:20','2023-05-25 01:26:20'),
(286,'Nicho','Logout Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-25 01:26:21','2023-05-25 01:26:21'),
(287,'Nicho','Login Berhasil','127.0.0.1','Chrome','Windows 10','2023-05-25 01:26:32','2023-05-25 01:26:32');

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

/*Table structure for table `loguser` */

DROP TABLE IF EXISTS `loguser`;

CREATE TABLE `loguser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `berita` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `loguser` */

insert  into `loguser`(`id`,`berita`,`status`,`created_at`,`updated_at`) values 
(1,'Super Admin Insert Barang','0','2023-04-12 20:19:42','2023-04-12 20:19:44'),
(2,'Delete Barang','0','2023-04-12 20:19:46','2023-04-12 20:19:47'),
(3,'Nicho Berhasil menambahkan landraa','0','2023-04-13 03:33:06','2023-04-13 03:33:06'),
(4,'Nicho Berhasil menambahkan QWe','0','2023-04-13 04:21:33','2023-04-13 04:21:33'),
(5,'Nicho Berhasil menambahkan cabang Cabang Sidoarjo','0','2023-05-01 05:39:24','2023-05-01 05:39:24'),
(6,'Nicho Berhasil Update kurir ','0','2023-05-16 02:26:24','2023-05-16 02:26:24'),
(7,'Nicho Berhasil Update kurir ','0','2023-05-16 02:26:24','2023-05-16 02:26:24'),
(8,'Nicho Berhasil Update kurir ','0','2023-05-16 02:26:24','2023-05-16 02:26:24'),
(9,'Nicho Berhasil Update kurir ','0','2023-05-16 02:27:58','2023-05-16 02:27:58'),
(10,'Nicho Berhasil Update kurir ','0','2023-05-16 02:27:58','2023-05-16 02:27:58'),
(11,'Nicho Berhasil Update kurir ','0','2023-05-16 02:27:58','2023-05-16 02:27:58'),
(12,'Nicho Berhasil Update kurir ','0','2023-05-16 02:27:58','2023-05-16 02:27:58'),
(13,'Nicho Berhasil Update kurir ','0','2023-05-16 02:27:58','2023-05-16 02:27:58'),
(14,'Nicho Berhasil Update kurir Dodi','0','2023-05-16 02:28:12','2023-05-16 02:28:12'),
(15,'Nicho Berhasil Update kurir Dodi','0','2023-05-16 02:28:12','2023-05-16 02:28:12'),
(16,'Nicho Berhasil Update kurir Dodi','0','2023-05-16 02:28:12','2023-05-16 02:28:12'),
(17,'Nicho Berhasil Update kurir Dodi','0','2023-05-16 02:28:12','2023-05-16 02:28:12'),
(18,'Nicho Berhasil Update kurir Dodi','0','2023-05-16 02:28:12','2023-05-16 02:28:12'),
(19,'Nicho Berhasil menambahkan barang Gula','0','2023-05-16 05:51:26','2023-05-16 05:51:26'),
(20,'Nicho Berhasil menambahkan barang Gitar Listrik','0','2023-05-16 06:11:50','2023-05-16 06:11:50'),
(21,'Nicho Berhasil update nomor kapal Titanic','0','2023-05-16 06:38:35','2023-05-16 06:38:35'),
(22,'Nicho Berhasil delete history 32323','0','2023-05-16 06:41:00','2023-05-16 06:41:00'),
(23,'Nicho Berhasil update nomor kapal Titanic','0','2023-05-16 07:18:06','2023-05-16 07:18:06'),
(24,'Nicho Berhasil Update kurir Dodi','0','2023-05-16 08:11:50','2023-05-16 08:11:50'),
(25,'Nicho Berhasil Update kurir Dodi','0','2023-05-16 08:11:50','2023-05-16 08:11:50'),
(26,'Nicho Berhasil Update kurir Dodi','0','2023-05-16 08:11:50','2023-05-16 08:11:50'),
(27,'Nicho Berhasil mengedit barang Daging','0','2023-05-19 04:11:50','2023-05-19 04:11:50'),
(28,'Nicho Berhasil mengedit barang Daging','0','2023-05-19 04:11:59','2023-05-19 04:11:59'),
(29,'Nicho Berhasil mengedit barang Daging','0','2023-05-19 04:13:43','2023-05-19 04:13:43'),
(30,'Nicho Berhasil delete barang 1','0','2023-05-19 04:14:05','2023-05-19 04:14:05'),
(31,'Nicho Berhasil mengedit barang Gula','0','2023-05-19 04:32:39','2023-05-19 04:32:39'),
(32,'Nicho Berhasil mengedit barang Gula','0','2023-05-19 04:34:11','2023-05-19 04:34:11'),
(33,'Nicho Berhasil delete history 61','0','2023-05-19 04:34:27','2023-05-19 04:34:27'),
(34,'Nicho Berhasil update nomor kapal Juanda','0','2023-05-19 04:35:45','2023-05-19 04:35:45'),
(35,'Nicho Berhasil mengedit barang Gula','0','2023-05-23 03:48:23','2023-05-23 03:48:23'),
(36,'Nicho Berhasil menambahkan barang Tenis','0','2023-05-23 03:49:56','2023-05-23 03:49:56'),
(37,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:29:15','2023-05-23 04:29:15'),
(38,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:30:36','2023-05-23 04:30:36'),
(39,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:34:47','2023-05-23 04:34:47'),
(40,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:34:47','2023-05-23 04:34:47'),
(41,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:35:44','2023-05-23 04:35:44'),
(42,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:36:08','2023-05-23 04:36:08'),
(43,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:41:26','2023-05-23 04:41:26'),
(44,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:44:20','2023-05-23 04:44:20'),
(45,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:50:29','2023-05-23 04:50:29'),
(46,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:50:29','2023-05-23 04:50:29'),
(47,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:51:19','2023-05-23 04:51:19'),
(48,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:51:19','2023-05-23 04:51:19'),
(49,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:53:44','2023-05-23 04:53:44'),
(50,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 04:53:44','2023-05-23 04:53:44'),
(51,'Nicho Berhasil Update kurir ','0','2023-05-23 05:00:05','2023-05-23 05:00:05'),
(52,'Nicho Berhasil Update kurir ','0','2023-05-23 05:00:05','2023-05-23 05:00:05'),
(53,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 05:05:03','2023-05-23 05:05:03'),
(54,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 05:05:03','2023-05-23 05:05:03'),
(55,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 05:05:03','2023-05-23 05:05:03'),
(56,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 05:07:24','2023-05-23 05:07:24'),
(57,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 05:07:50','2023-05-23 05:07:50'),
(58,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 05:21:28','2023-05-23 05:21:28'),
(59,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 05:21:28','2023-05-23 05:21:28'),
(60,'Nicho Berhasil Update kurir Dodi','0','2023-05-23 05:21:28','2023-05-23 05:21:28'),
(61,'Nicho Berhasil menambahkan barang Penggaris','0','2023-05-25 01:42:07','2023-05-25 01:42:07'),
(62,'Nicho Berhasil menambahkan barang Gentong','0','2023-05-25 01:43:25','2023-05-25 01:43:25');

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
('C002','CabangSurabaya','4','Jl Surabaya no 1','Jawa Timur','Surabaya','61213','08113190080','https://afrotransmaritim.co.id/','cabang2@gmail.com','1','2023-02-13 08:55:02','2023-02-14 00:37:41',NULL),
('C003','Cabang Sidoarjo','12','Sidoarjo','Jawa Timur','Surabaya','61213','123456','www.google.com','lala@gmail.com','1','2023-05-01 05:39:24','2023-05-01 05:39:24',NULL);

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
('CO001','A','1','2023-03-02 07:52:07','2023-05-23 04:00:33',NULL),
('CO002','B','1','2023-03-02 07:52:07','2023-05-23 04:00:34',NULL);

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
('P004','C001','Dodi','12312312','Jln Makassar no  10','Sulawesi Selatan','Makassar','34234234','08113190080','kurir1@gmail.com','$2y$10$L9snZUSYNy7IqswAyGZJve/ZWhkqqiHiiQJqBlM/ncdFBFWidHqWu','Kurir','2023-03-16 04:27:18','2023-03-16 04:27:18',NULL),
('P005','C001','admmakasar','12341241','arif rahmat hakim','Sulawesi Selatan','Makassar','2312341','1231234124','admadmMakasar@gmail.com','$2y$10$FsiNI54wb9KYmhaAO1YJg.Vp/PgNKoqM3tkhvZ2sHhkQxjfbCyppm','Admin Makassar','2023-04-12 02:40:16','2023-04-12 02:40:16',NULL),
('P006','C002','admadmMksr','123123414123','CAKAKLANG MAKASAR','Sulawesi Selatan','Makassar','1234','31284789','admadmMksr@gmail.com','$2y$10$0PCUaYj.6VlNK/KTeo0U8eHhzvsqXAwphOiXG01I9Y6loyARtSD2G','Admin Makassar','2023-04-12 02:44:28','2023-04-12 02:44:28',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksi` */

insert  into `transaksi`(`nomor_manifest`,`nomor_resi`,`nomor_segel`,`nama_pengirim`,`alamat_pengirim`,`nohp_pengirim`,`email_pengirim`,`nama_penerima`,`alamat_penerima`,`nohp_penerima`,`email_penerima`,`jenis_barang`,`jumlah_barang`,`jenis_volume`,`volume`,`jenis_harga`,`rute`,`nama_kapal`,`harga_kubik`,`harga`,`harga_tambahan`,`harga_potongan`,`total_harga`,`tanggal`,`nomor_container`,`link_foto`,`catatan`,`kurir`,`status_barang`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'1','1','Kevin',NULL,NULL,NULL,'Jeffrey',NULL,NULL,NULL,'Daging','5',NULL,'10',NULL,NULL,'Titanic','0','0','0','0','0','2023-03-07',NULL,NULL,NULL,NULL,'','2023-03-07 16:20:31','2023-05-19 04:14:05',NULL),
(10,'111',NULL,'Budi',NULL,NULL,NULL,'Hartono',NULL,NULL,NULL,'Penggaris','21',NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-05-24','CO001',NULL,NULL,NULL,'Depo','2023-05-25 01:42:07','2023-05-25 01:42:07',NULL),
(11,'112',NULL,'Nelson',NULL,NULL,NULL,'Liam',NULL,NULL,NULL,'Gentong','12',NULL,'5',NULL,NULL,NULL,'0','0','0','0','0','2023-05-15','CO001',NULL,NULL,NULL,'Depo','2023-05-25 01:43:25','2023-05-25 01:43:25',NULL),
(3,'123','323','Leo',NULL,NULL,NULL,'Pak Budi',NULL,NULL,NULL,'Gitar Listrik','23',NULL,NULL,NULL,NULL,'Juanda','0','0','0','0','0','2023-05-16',NULL,NULL,NULL,NULL,'Depo','2023-05-16 06:11:50','2023-05-19 04:35:45',NULL),
(4,'27',NULL,'Nicholas','Makasar','2302001','lala@gmail.com','Hwe','Makasar','23','lala@gmail.com','Giutar','15',NULL,'10','-,-,0',NULL,'Boa','1999','0','500','1000','0','2023-03-24',NULL,NULL,NULL,NULL,'Kantor SBY','2023-03-29 02:37:13','2023-05-16 02:28:12',NULL),
(5,'32323','44','Rudi','Surabaya','3434343','lala@gmail.com','Ayam','Surabaya','43434343','lala@gmail.com','Air Jordan','23','Berat',NULL,'A,Berat,1000',NULL,'Poseidon','44444','16789743212','3434343','434343','16792743212','2023-03-15',NULL,NULL,NULL,'Dodi','Kantor SBY','2023-03-02 08:29:23','2023-05-23 05:21:28',NULL),
(6,'5',NULL,'Jeffrey',NULL,NULL,NULL,'Nicho',NULL,NULL,NULL,'Mie','4',NULL,'10',NULL,NULL,NULL,'0','0','0','0','0','2023-03-07',NULL,NULL,NULL,'Dodi','Depo','2023-03-07 16:21:23','2023-05-23 05:21:28',NULL),
(7,'60',NULL,'chalz','Makasar','081321','lala@gmail.com','bambang','Makasar','0812312','lala@gmail.com','Kopu','5',NULL,'500','-,-,0',NULL,'Sunken Ship','500','0','2000','100','0','2023-03-29',NULL,NULL,NULL,NULL,'Kantor SBY','2023-03-29 02:25:38','2023-05-19 04:21:26',NULL),
(8,'61',NULL,'rudi','Makasar','081321','lala@gmail.com','bambang','Makasar','0812312','lala@gmail.com','Kopu','23','Berat','500','A,Berat,1000','Makassar','Sunken Ship','500','2750000','2000','100','2751900','2023-03-29',NULL,NULL,NULL,NULL,'Depo SBY','2023-03-29 02:26:36','2023-05-23 03:47:18',NULL),
(9,'998',NULL,'Beni',NULL,NULL,NULL,'Bedu',NULL,NULL,NULL,'Tenis','10',NULL,'20',NULL,NULL,NULL,'0','0','0','0','0','2023-05-24','CO002',NULL,NULL,NULL,'Depo','2023-05-23 03:49:56','2023-05-23 04:30:36',NULL);

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
