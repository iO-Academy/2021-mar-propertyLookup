# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: listings-feed
# Generation Time: 2021-05-12 09:02:50 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table listings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listings`;

CREATE TABLE `listings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `agent_ref` varchar(50) DEFAULT NULL,
  `address_1` varchar(50) DEFAULT NULL,
  `address_2` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `postcode` varchar(50) DEFAULT NULL,
  `description` varchar(30000) DEFAULT NULL,
  `bedrooms` int(20) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `listings` WRITE;
/*!40000 ALTER TABLE `listings` DISABLE KEYS */;

INSERT INTO `listings` (`id`, `agent_ref`, `address_1`, `address_2`, `town`, `postcode`, `description`, `bedrooms`, `price`, `image`, `type`, `status`)
VALUES
	(1,'CSL123_100259','Hill Farm','Plough Hill Road','Nuneaton','CV11 6PE','This is a rare opportunity...',6,355000,'CSL123_100327_IMG_00.JPG',1,1),
	(5,'CSL123_100266','22','Grim Road','Nuneaton','CV11 2PQ','Utter hole with no running water and mould.',2,80000,NULL,2,3);

/*!40000 ALTER TABLE `listings` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
