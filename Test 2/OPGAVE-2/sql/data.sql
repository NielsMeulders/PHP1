# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38-0ubuntu0.12.04.1)
# Database: phples
# Generation Time: 2015-04-28 10:02:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table AJAX_v15
# ------------------------------------------------------------

DROP TABLE IF EXISTS `AJAX_v15`;

CREATE TABLE `AJAX_v15` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `blogtext` text,
  `author` varchar(100) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `AJAX_v15` WRITE;
/*!40000 ALTER TABLE `AJAX_v15` DISABLE KEYS */;

INSERT INTO `AJAX_v15` (`id`, `blogtext`, `author`, `title`)
VALUES
	(1,'Interactive voice technology (IVR) has evolved over the past few decades. Companies no longer require dedicated hardware to implement a voice-based customer experience.\n\nA new breed of cloud communication platforms typically combine a pay-per-use cost model characteristic of cloud services together with simple telephony Application Program Interface (API) tools, simplifying how developers can integrate IVR into their applications. The result is a low operational cost and easier, faster implementation.','JAMIE TOLENTINO','Building a hardware-free voice-based customer experience'),
	(2,'Not everybody is happy with our new design (now in beta), but there?s a happy ending to this movie?','DIMITRI','Dimitri is not happy with the TNW redesign, but there?s a happy ending');

/*!40000 ALTER TABLE `AJAX_v15` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
