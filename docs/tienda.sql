-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-10-2020 a las 14:27:15
-- Versión del servidor: 5.6.13
-- Versión de PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--
CREATE DATABASE IF NOT EXISTS `tienda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tienda`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `foto_producto` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `edad` int(3) NOT NULL,
  `precio_entrada` int(3) NOT NULL,
  `artista` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `animacion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_evento` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_evento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`foto_producto`, `nombre`, `fecha`, `edad`, `precio_entrada`, `artista`, `animacion`, `id_evento`) VALUES
('/dist/img/JUEVES.png', 'MEGAFARRA UNIVERSITARIA', '2020-11-05', 18, 10, 'RickyRF', 'Vaca', 1),
('/dist/img/Viernes.png', 'ETE SEECH', '2020-11-06', 18, 10, 'RickyRF', 'Tematica', 2),
('/dist/img/SABADO.png', 'Reggaeton Classics', '2020-10-31', 18, 10, 'Pepe', 'vacaPantera', 7),
('/dist/img/SABADO.png', 'dsfdsfdsfsdfs', '2020-11-07', 10, 10, 'Pepe', 'tematico', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE IF NOT EXISTS `listas` (
  `nombreRRPP` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nombreCliente` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `acomp` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`nombreRRPP`, `nombreCliente`, `acomp`, `fecha`) VALUES
('gabrigomezayuso', 'pepe', 4, '2022-07-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(2) NOT NULL COMMENT 'AUTO_INCREMENT',
  `rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `first_name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(2) NOT NULL,
  `foto_perfil` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `rol_usuario` (`rol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`first_name`, `last_name`, `mail`, `username`, `phone`, `password`, `rol_id`, `foto_perfil`, `id`) VALUES
('admin', 'admin', 'admin@admin.com', 'admin', 0, '@Admin1234', 2, '', 1),
('Gabi', 'Gomez', 'ggomezayuso@gmail.com', 'gabrigomezayuso', 647278200, 'AAAaaa123', 1, 'https://icon-library.com/images/default-profile-icon/default-profile-icon-16.jpg', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `rol_usuario` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
