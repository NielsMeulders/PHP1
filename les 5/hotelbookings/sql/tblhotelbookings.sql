/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.1.30-community : Database - php4wa
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`php4wa` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

/*Table structure for table `tblhotelbookings` */

DROP TABLE IF EXISTS `tblhotelbookings`;

CREATE TABLE `tblhotelbookings` (
  `pk_booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_first_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_from_day` int(11) DEFAULT NULL,
  `booking_from_month` int(11) DEFAULT NULL,
  `booking_to_day` int(11) DEFAULT NULL,
  `booking_to_month` int(11) DEFAULT NULL,
  `booking_hotel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pk_booking_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
