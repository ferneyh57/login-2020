-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2020 a las 03:43:41
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancoviernes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_tarjeta`
--

CREATE TABLE `tipo_tarjeta` (
  `id_tipo_tarjeta` int(10) UNSIGNED NOT NULL,
  `nombre_tarjeta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_tarjeta`
--

INSERT INTO `tipo_tarjeta` (`id_tipo_tarjeta`, `nombre_tarjeta`) VALUES
(1, 'VISA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `primer_nombre` varchar(45) NOT NULL,
  `primer_apellido` varchar(45) NOT NULL,
  `numero_identificacion` varchar(45) NOT NULL,
  `tipo_tarjeta_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(45) NOT NULL,
  `numero_tarjeta` varchar(14) NOT NULL,
  `contra` varchar(45) NOT NULL,
  `dinero_cuenta` int(10) NOT NULL DEFAULT 0,
  `dinero_tarjeta` int(10) NOT NULL DEFAULT 2000000
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `primer_nombre`, `primer_apellido`, `numero_identificacion`, `tipo_tarjeta_id`, `email`, `numero_tarjeta`, `contra`, `dinero_cuenta`, `dinero_tarjeta`) VALUES
(10, 'ferney', 'hurtado', '1192713025', 1, 'ferneyh57@gmail.com', '12345678912345', 'db6ebd0566994d14a1767f14eb6fba81', 0, 2000000),
(11, 'sergio', 'arias', '12345678910', 1, 'sergio@gmail.com', '11111111111111', 'db6ebd0566994d14a1767f14eb6fba81', 0, 2000000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipo_tarjeta`
--
ALTER TABLE `tipo_tarjeta`
  ADD PRIMARY KEY (`id_tipo_tarjeta`),
  ADD UNIQUE KEY `id_tipo_documento_UNIQUE` (`id_tipo_tarjeta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`,`tipo_tarjeta_id`),
  ADD UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`),
  ADD KEY `fk_usuario_tipo_tarjeta_idx` (`tipo_tarjeta_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipo_tarjeta`
--
ALTER TABLE `tipo_tarjeta`
  MODIFY `id_tipo_tarjeta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_tipo_tarjeta` FOREIGN KEY (`tipo_tarjeta_id`) REFERENCES `tipo_tarjeta` (`id_tipo_tarjeta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
