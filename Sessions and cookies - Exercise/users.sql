-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия на сървъра:            10.1.25-MariaDB - mariadb.org binary distribution
-- ОС на сървъра:                Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for users_app
CREATE DATABASE IF NOT EXISTS `users_app` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `users_app`;

-- Дъмп структура за таблица users_app.emails
CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `FK__users` (`user_id`),
  CONSTRAINT `FK__users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Дъмп данни за таблица users_app.emails: ~2 rows (approximately)
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` (`id`, `user_id`, `email`) VALUES
	(8, 13, 'anton77@abv.bg'),
	(9, 13, 'anton@abv.bg'),
	(10, 13, 'anton.donchev@ldc.com');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;

-- Дъмп структура за таблица users_app.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `born_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Дъмп данни за таблица users_app.users: ~6 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `born_on`) VALUES
	(1, 'mimihova', '$2y$10$UebRqKdZ2lAyvUU2QzJY4ePFoX9RwENZl2SJ3dL4ujKTNC157AidW', 'Marry', 'Alice', '1990-01-19 00:00:00'),
	(2, 'nacheto', '$2y$10$mtOyGUPyDulWuRQlvjaGIOTC8rpCCmVi.zqfQ1L0hvAy0kQ80gFXS', 'Atanas', 'Ganchev', '1991-01-24 00:00:00'),
	(4, 'mm3', '$2y$10$CjsE00FsyS3AplBwGyVe6OytWcsUDwA9FZc8j1UN.0p0qC3eBqbS2', 'Mariya', 'Alice', '0000-00-00 00:00:00'),
	(5, 'mp', '$2y$10$y2ZAAsELbgSwDaq2AN4p9uFpOV1DNZL06Gjs9/LUbuVRNc2VT9kmO', 'Mihail', 'Paev', '1982-07-30 00:00:00'),
	(9, 'marry', '$2y$10$9cyVL0XI1E.OWtbOEYz8rOWtCIjaXh6JOgBr1Y9ogc0qOd5Mare8G', 'Mariya', 'Lavender', '0000-00-00 00:00:00'),
	(11, 'mg', '$2y$10$ASI6gIHN5KnALYfScxht6.E.QueoCi0cawXLv52T/4M25qcCLOLlq', 'Mariya', 'Gancheva', '0000-00-00 00:00:00'),
	(13, 'aa', '$2y$10$CNnGP97fLbfeUbxzHNZQ4uZPFOQkqB71n.sLVkbCnpZLffTj6igjO', 'Anton', 'Donchev', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
