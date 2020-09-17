SET NAMES utf8;
SET time_zone = '-04:00';

SET NAMES utf8mb4;

CREATE DATABASE `mvcPHP`;
USE `mvcPHP`;

DROP TABLE IF EXISTS `panes`;
CREATE TABLE `panes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_de_pan` VARCHAR(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` VARCHAR(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pais_de_origen` VARCHAR(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tamano_promedio` DOUBLE(65,1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_de_creacion` DATETIME NOT NULL,
  `fecha_de_edicion` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

