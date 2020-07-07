-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2020 a las 22:42:43
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
  `id_cat_fk` int(11) NOT NULL,
  `status` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `descripcion`, `fecha`, `autor`, `id_cat_fk`, `status`) VALUES
(13, '108 costuras', 'Pelicula', '2020-06-18', 'Netflix', 1, 1),
(14, 'Favorita', 'Cancion ', '2020-06-02', 'Camilo', 3, 1),
(16, 'Un equipo muy especial', 'Pelicula', '2020-07-01', 'Sin autor', 0, 1);

--
-- Disparadores `blog`
--
DELIMITER $$
CREATE TRIGGER `TD_LOG` AFTER DELETE ON `blog` FOR EACH ROW INSERT INTO logs (fuente_log, mensaje_log) VALUES ('BLOG', CONCAT(' Se ha eliminado el registro ' , old.titulo))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TI_LOG` AFTER INSERT ON `blog` FOR EACH ROW INSERT INTO logs (fuente_log, mensaje_log)VALUES('blog', CONCAT('Se ha registrado el valor ', new.titulo, ' dentro de la tabla BLOG'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TU_LOG` AFTER UPDATE ON `blog` FOR EACH ROW INSERT INTO logs (fuente_log, mensaje_log) VALUES ('BLOG', CONCAT(' Se ha editado el registro ', old.titulo, ' con el nuevo valor ', new.titulo))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(6) UNSIGNED NOT NULL,
  `nombre_titulo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre_titulo`, `status`) VALUES
(1, 'Libro', 0),
(2, 'Netflix', 0),
(3, 'YouTube', 0),
(8, 'Programa', 0),
(9, 'Telenovela', 0),
(14, 'Serie', 4);

--
-- Disparadores `categorias`
--
DELIMITER $$
CREATE TRIGGER `TD_CAT` AFTER DELETE ON `categorias` FOR EACH ROW INSERT INTO logs (fuente_log, mensaje_log) VALUES('CATEGORIA', CONCAT('Se ha eliminado el registro ', old.nombre_titulo))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TI_CAT` AFTER INSERT ON `categorias` FOR EACH ROW INSERT INTO logs (fuente_log, mensaje_log) VALUES ('CATEGORIAS', CONCAT ('Se ha registrado el siguiente valor de categorias: ', new.nombre_titulo))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TU_CAT` BEFORE UPDATE ON `categorias` FOR EACH ROW INSERT INTO logs (fuente_log, mensaje_log) VALUES ('CATEGORIAS', CONCAT ('Se ha editado el registro ', old.nombre_titulo, ' con el nuevo valor ', new.nombre_titulo))
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL,
  `fuente_log` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `mensaje_log` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `fecha_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id_log`, `fuente_log`, `mensaje_log`, `fecha_log`) VALUES
(1, 'BLOG', 'Se ha eliminado el registroPrueba', '2020-07-07 01:01:23'),
(2, 'BLOG', 'Se ha editado el registro Favoritocon el nuevo valor Favorita', '2020-07-07 01:02:08'),
(3, 'BLOG', 'Se ha registrado el valor Un equipo muy especial dentro de la tabla BLOG', '2020-07-07 01:23:02'),
(5, 'BLOG', ' Se ha eliminado el registro Un equipo muy especial', '2020-07-07 20:22:28'),
(6, 'BLOG', 'Se ha eliminado del siguiente registro de usuarios: Sol', '2020-07-07 20:27:10'),
(7, 'USUARIOS', ' Se ha editado el registro de usuarios anacon el nuevo valor Ana', '2020-07-07 20:28:49'),
(8, 'USUARIOS', ' Se ha registrado el nuevo valor de usuarios Fernanda dentro de la tabla USUARIOS', '2020-07-07 20:30:01'),
(9, 'USUARIOS', 'Se ha eliminado del siguiente registro de usuarios: Barbara', '2020-07-07 20:30:39'),
(10, 'BLOG', 'Se ha eliminado el registro Serie', '2020-07-07 20:36:02'),
(11, 'CATEGORIAS', 'Se ha editado el registro Serie con el nuevo valor Programa ', '2020-07-07 20:36:12'),
(12, 'BLOG', 'Se ha eliminado el registro Programa ', '2020-07-07 20:36:50'),
(13, 'CATEGORIAS', 'Se ha registrado el siguiente valor de categorias: Serie', '2020-07-07 20:37:44'),
(14, 'CATEGORIAS', 'Se ha registrado el siguiente valor de categorias: Serie', '2020-07-07 20:37:47'),
(15, 'CATEGORIA', 'Se ha eliminado el registro Serie', '2020-07-07 20:38:01');

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
(6, 'Ana', '123456', 'tec', 'ana@tec.mx', 'tec1', 1),
(10, 'Fernanda', '99826281', 'Gran Plaza', 'fernanda@unid.mx', '987654unid', 1);

--
-- Disparadores `usuarios`
--
DELIMITER $$
CREATE TRIGGER `TD_USUARIOS` AFTER DELETE ON `usuarios` FOR EACH ROW INSERT INTO logs (fuente_log, mensaje_log) VALUES ('USUARIOS', CONCAT ('Se ha eliminado del siguiente registro de usuarios: ' , old.nombre_usr))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TI_USUARIOS` AFTER INSERT ON `usuarios` FOR EACH ROW INSERT INTO logs (fuente_log, mensaje_log) VALUES ('USUARIOS', CONCAT(' Se ha registrado el nuevo valor de usuarios ' , new.nombre_usr, ' dentro de la tabla USUARIOS'))
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `TU_USUARIOS` AFTER UPDATE ON `usuarios` FOR EACH ROW INSERT INTO logs (fuente_log, mensaje_log) VALUES ('USUARIOS', CONCAT (' Se ha editado el registro de usuarios ', old.nombre_usr, 'con el nuevo valor ', new.nombre_usr))
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`);

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
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usr` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENT', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
