-- Adminer 4.8.1 MySQL 8.0.40-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `payment_pdam`;
CREATE DATABASE `payment_pdam` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `payment_pdam`;

DROP TABLE IF EXISTS `inquiry_logs`;
CREATE TABLE `inquiry_logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idpel` int NOT NULL,
  `nominal` int NOT NULL,
  `waktu` text NOT NULL,
  `ref2` varchar(255) NOT NULL,
  `pdamname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `customername` varchar(255) NOT NULL,
  `customeraddress` text NOT NULL,
  `monthperiod1` int NOT NULL,
  `yearperiod1` int NOT NULL,
  `firstmeterread1` int NOT NULL,
  `lastmeterread1` int NOT NULL,
  `billamount1` int NOT NULL,
  `penalty1` int NOT NULL,
  `miscamount1` int NOT NULL,
  `monthperiod2` int NOT NULL,
  `yearperiod2` int NOT NULL,
  `firstmeterread2` int NOT NULL,
  `lastmeterread2` int NOT NULL,
  `billamount2` int NOT NULL,
  `penalty2` int NOT NULL,
  `miscamount2` int NOT NULL,
  `monthperiod3` int NOT NULL,
  `yearperiod3` int NOT NULL,
  `firstmeterread3` int NOT NULL,
  `lastmeterread3` int NOT NULL,
  `billamount3` int NOT NULL,
  `penalty3` int NOT NULL,
  `miscamount3` int NOT NULL,
  `monthperiod4` int NOT NULL,
  `yearperiod4` int NOT NULL,
  `firstmeterread4` int NOT NULL,
  `lastmeterread4` int NOT NULL,
  `billamount4` int NOT NULL,
  `penalty4` int NOT NULL,
  `miscamount4` int NOT NULL,
  `monthperiod5` int NOT NULL,
  `yearperiod5` int NOT NULL,
  `firstmeterread5` int NOT NULL,
  `lastmeterread5` int NOT NULL,
  `billamount5` int NOT NULL,
  `penalty5` int NOT NULL,
  `miscamount5` int NOT NULL,
  `monthperiod6` int NOT NULL,
  `yearperiod6` int NOT NULL,
  `firstmeterread6` int NOT NULL,
  `lastmeterread6` int NOT NULL,
  `billamount6` int NOT NULL,
  `penalty6` int NOT NULL,
  `miscamount6` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idpel` (`idpel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `inquiry_logs`;
INSERT INTO `inquiry_logs` (`id`, `idpel`, `nominal`, `waktu`, `ref2`, `pdamname`, `customername`, `customeraddress`, `monthperiod1`, `yearperiod1`, `firstmeterread1`, `lastmeterread1`, `billamount1`, `penalty1`, `miscamount1`, `monthperiod2`, `yearperiod2`, `firstmeterread2`, `lastmeterread2`, `billamount2`, `penalty2`, `miscamount2`, `monthperiod3`, `yearperiod3`, `firstmeterread3`, `lastmeterread3`, `billamount3`, `penalty3`, `miscamount3`, `monthperiod4`, `yearperiod4`, `firstmeterread4`, `lastmeterread4`, `billamount4`, `penalty4`, `miscamount4`, `monthperiod5`, `yearperiod5`, `firstmeterread5`, `lastmeterread5`, `billamount5`, `penalty5`, `miscamount5`, `monthperiod6`, `yearperiod6`, `firstmeterread6`, `lastmeterread6`, `billamount6`, `penalty6`, `miscamount6`) VALUES
(8,	1002676,	294500,	'20240527093725',	'2818150891',	'PDAM SIDOARJO',	'PERM. BUMI CITRA FAJ',	'SEKAWAN SEJUK C.16A',	5,	2014,	0,	0,	40500,	7500,	0,	6,	2014,	0,	0,	40500,	7500,	0,	7,	2014,	0,	0,	42500,	7500,	0,	8,	2014,	0,	0,	43500,	7500,	0,	9,	2014,	0,	0,	44500,	7500,	0,	10,	2014,	0,	0,	45500,	0,	0),
(9,	1002676,	294500,	'20240527093725',	'2818150891',	'PDAM SIDOARJO',	'PERM. BUMI CITRA FAJ',	'SEKAWAN SEJUK C.16A',	5,	2014,	0,	0,	40500,	7500,	0,	6,	2014,	0,	0,	40500,	7500,	0,	7,	2014,	0,	0,	42500,	7500,	0,	8,	2014,	0,	0,	43500,	7500,	0,	9,	2014,	0,	0,	44500,	7500,	0,	10,	2014,	0,	0,	45500,	0,	0);

DROP TABLE IF EXISTS `payment_logs`;
CREATE TABLE `payment_logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idpel` int NOT NULL,
  `pdamname` varchar(255) NOT NULL,
  `nominal` int NOT NULL,
  `waktu` datetime NOT NULL,
  `customername` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

TRUNCATE `payment_logs`;
INSERT INTO `payment_logs` (`id`, `idpel`, `pdamname`, `nominal`, `waktu`, `customername`) VALUES
(20,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(21,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(22,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(23,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(24,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(25,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(26,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(27,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(28,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(29,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(30,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(31,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(32,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(33,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(34,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(35,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(36,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(37,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(38,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(39,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(40,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(41,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(42,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(43,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(44,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(45,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(46,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(47,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(48,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(49,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(50,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(51,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(52,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(53,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(54,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(55,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(56,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(57,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(58,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ'),
(59,	1002676,	'PDAM SIDOARJO',	294500,	'2024-05-27 09:39:41',	'PERM. BUMI CITRA FAJ');

-- 2024-12-12 03:35:28
