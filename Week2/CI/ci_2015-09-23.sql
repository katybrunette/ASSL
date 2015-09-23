# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: ci
# Generation Time: 2015-09-23 23:40:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tricks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tricks`;

CREATE TABLE `tricks` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(80) DEFAULT NULL,
  `filename` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tricks` WRITE;
/*!40000 ALTER TABLE `tricks` DISABLE KEYS */;

INSERT INTO `tricks` (`id`, `title`, `filename`)
VALUES
	(1,'allegra','allegra.jpg'),
	(2,'batman','batman.jpg'),
	(3,'bridgedhandstand','bridgedhandstand.jpg'),
	(4,'cocoon','cocoon.jpg'),
	(5,'deathlay','deathlay.jpg'),
	(6,'dove','dove.jpg'),
	(7,'dramaqueen','dramaqueen.jpg'),
	(8,'flag','flag.jpg'),
	(9,'frog','frog.jpg'),
	(10,'ironX','ironX.jpg'),
	(11,'layback','layback.jpg'),
	(12,'pencil','pencil.jpg'),
	(13,'rainbow','rainbow.jpg'),
	(14,'rocket','rocket.jpg'),
	(15,'splash','splash.jpg'),
	(16,'stag','stag.jpg'),
	(17,'superman','superman.jpg');

/*!40000 ALTER TABLE `tricks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_favorites
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_favorites`;

CREATE TABLE `user_favorites` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `trick_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_favorites` WRITE;
/*!40000 ALTER TABLE `user_favorites` DISABLE KEYS */;

INSERT INTO `user_favorites` (`id`, `user_id`, `trick_id`)
VALUES
	(1,1,3),
	(2,1,8),
	(3,1,14);

/*!40000 ALTER TABLE `user_favorites` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(80) DEFAULT NULL,
  `lname` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`)
VALUES
	(61,'Katy','Brunette','katy@katy.com','pass'),
	(63,'Dave','Johnson','djohnson@dave.com','dave'),
	(69,'Johnny','Depp','johnny@depp.com','depparoo'),
	(70,NULL,NULL,NULL,NULL),
	(71,NULL,NULL,NULL,NULL),
	(72,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
