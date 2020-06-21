-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2020 a las 10:18:29
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(6) UNSIGNED NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `autor` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `descripcion`, `fecha`, `autor`, `status`) VALUES
(1, 'Favorito', 'Cancion', '2020-03-03', 'Camilo Echeverry', 0),
(2, 'Casa de Papel', 'Serie', '2020-06-05', 'Netflix', 0),
(3, 'Bloodshot', 'Pelicula', '2020-01-02', 'Kevin VanHook', 0),
(4, 'Falsa Identidad', 'Novela', '2020-02-28', 'Perla Farias', 0),
(5, 'Inteligencia Emocional', 'Libro', '2020-04-18', 'Daniel Goleman', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usr` int(11) UNSIGNED NOT NULL COMMENT 'AUTO_INCREMENT',
  `nombre_usr` varchar(100) NOT NULL,
  `telefono_usr` varchar(20) NOT NULL,
  `direccion_ust` varchar(150) NOT NULL,
  `correo_ust` varchar(100) NOT NULL,
  `password_usr` varchar(15) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usr`, `nombre_usr`, `telefono_usr`, `direccion_ust`, `correo_ust`, `password_usr`, `status`) VALUES
(0, 'Oli', '123456', 'Prueba', 'oli@hotmail.com', '123456', 1),
(1, 'Barbara', '12345', 'Prueba', 'barbara@hotmail.com', '12345', 0),
(2, 'Ana', '123456', 'Prueba', 'ana@hotmail.com', '123456', 0),
(3, 'Susi', '1238496', 'Prueba', 'susi@hotmail.com', '1245', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usr`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
