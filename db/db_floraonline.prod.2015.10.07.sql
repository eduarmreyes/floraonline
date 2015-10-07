-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4994
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for db_floraonline
CREATE DATABASE IF NOT EXISTS `db_floraonline` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_floraonline`;


-- Dumping structure for table db_floraonline.flo_pagos
CREATE TABLE IF NOT EXISTS `flo_pagos` (
  `pag_id` int(11) NOT NULL AUTO_INCREMENT,
  `pag_productos` text NOT NULL,
  `pag_usuario_nombre` varchar(250) NOT NULL,
  `pag_usuario_apellido` varchar(250) NOT NULL,
  `pag_usuario_telefono` varchar(250) NOT NULL,
  `pag_usuario_email` varchar(250) NOT NULL,
  `pag_usuario_localidad` varchar(250) NOT NULL,
  `pag_usuario_numero_tarjeta` varchar(250) NOT NULL,
  `pag_usuario_direccion` varchar(250) NOT NULL,
  `pag_updated_at` datetime NOT NULL,
  `pag_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`pag_id`),
  KEY `pag_active` (`pag_active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Pagos procesados por Flora Online';

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
