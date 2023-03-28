-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-03-2023 a las 05:29:55
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cineclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

DROP TABLE IF EXISTS `generos`;
CREATE TABLE IF NOT EXISTS `generos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `nombre`, `updated_at`, `created_at`) VALUES
(1, 'Acción', '0000-00-00 00:00:00', '2023-03-28 05:26:21'),
(2, 'Drama', '0000-00-00 00:00:00', '2023-03-28 05:26:21'),
(3, 'Comedia', '0000-00-00 00:00:00', '2023-03-28 05:26:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos_pelicula`
--

DROP TABLE IF EXISTS `generos_pelicula`;
CREATE TABLE IF NOT EXISTS `generos_pelicula` (
  `id_genero` int NOT NULL,
  `id_pelicula` int NOT NULL,
  KEY `id_genero` (`id_genero`),
  KEY `id_pelicula` (`id_pelicula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(64) NOT NULL,
  `año` tinyint NOT NULL,
  `id_genero` int NOT NULL,
  `poster` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `duracion` tinyint NOT NULL,
  `director` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_genero` (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `titulo`, `año`, `id_genero`, `poster`, `duracion`, `director`, `updated_at`, `created_at`) VALUES
(7, 'Baby Driver', 17, 1, NULL, 123, 'Edgar Wright', '2023-03-28 10:46:40', '2023-03-28 10:46:40'),
(8, 'Spiderman', 2, 1, NULL, 123, 'Sam Raimi', '2023-03-28 10:48:04', '2023-03-28 10:48:04'),
(9, 'Tren Bala', 22, 3, NULL, 123, 'David Leitch', '2023-03-28 10:48:51', '2023-03-28 10:48:51'),
(10, 'Nope', 22, 2, NULL, 90, 'Jordan Peele', '2023-03-28 11:20:34', '2023-03-28 11:20:34');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `generos_pelicula`
--
ALTER TABLE `generos_pelicula`
  ADD CONSTRAINT `generos_pelicula_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `generos_pelicula_ibfk_2` FOREIGN KEY (`id_pelicula`) REFERENCES `peliculas` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
