# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: listings-feed
# Generation Time: 2021-05-11 21:43:20 +0000
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
  `AGENT_REF` varchar(50) DEFAULT NULL,
  `ADDRESS_1` varchar(50) DEFAULT NULL,
  `ADDRESS_2` varchar(50) DEFAULT NULL,
  `TOWN` varchar(50) DEFAULT NULL,
  `POSTCODE` varchar(50) DEFAULT NULL,
  `DESCRIPTION` varchar(30000) DEFAULT NULL,
  `BEDROOMS` int(20) DEFAULT NULL,
  `PRICE` int(100) DEFAULT NULL,
  `IMAGE` varchar(200) DEFAULT NULL,
  `TYPE` tinyint(1) DEFAULT NULL,
  `STATUS` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `listings` WRITE;
/*!40000 ALTER TABLE `listings` DISABLE KEYS */;

INSERT INTO `listings` (`id`, `AGENT_REF`, `ADDRESS_1`, `ADDRESS_2`, `TOWN`, `POSTCODE`, `DESCRIPTION`, `BEDROOMS`, `PRICE`, `IMAGE`, `TYPE`, `STATUS`)
VALUES
	(1,'CSL123','46','Plough Hill Road','Nuneaton','CV11 6PE','Stinky house with no electrical sockets',1,34000,NULL,2,4),
	(2,'CSL234','22','Garden Road','Nuneaton','CV4 2PS','Broken windows with airy facade',2,120000,NULL,1,1),
	(3,'CSL345','12','Junk Yard','Nuneaton','CV10 3PQ','Lots of rubbish littering the front yard',3,100000,NULL,1,2),
	(4,'CSL444','75','Cow Close','Nuneaton','CV9 4TT','Mouldy and heating doesn\'t work properly',3,90000,NULL,2,3);

/*!40000 ALTER TABLE `listings` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
