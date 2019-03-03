-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2019 a las 06:07:23
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cliente`
--
CREATE DATABASE IF NOT EXISTS `cliente` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cliente`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `token` varchar(8) NOT NULL,
  `program` varchar(120) NOT NULL,
  `date` date NOT NULL,
  `duration` time NOT NULL,
  `dimension_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoyo`
--

CREATE TABLE `apoyo` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `token` varchar(8) DEFAULT NULL,
  `program` varchar(120) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `duration` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `apoyo`
--

INSERT INTO `apoyo` (`id`, `name`, `token`, `program`, `date`, `duration`) VALUES
(1, 'Reclutamiento', '1503847', 'ADSI(Analisis y Desarrollo de Sistemas de informacion)', '2019-03-06', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimensiones`
--

CREATE TABLE `dimensiones` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dimensiones`
--

INSERT INTO `dimensiones` (`id`, `name`) VALUES
(1, 'Apoyo y Sostenimiento'),
(2, 'Cultura'),
(3, 'Desporte Y Recracion'),
(4, 'Liderazgo'),
(5, 'Psicologia'),
(6, 'Salud');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuentas`
--

CREATE TABLE `encuentas` (
  `id` int(11) NOT NULL,
  `region` varchar(10) NOT NULL,
  `munipality` varchar(40) NOT NULL,
  `edficication` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender_id` char(1) NOT NULL,
  `register_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `id` int(11) NOT NULL,
  `name` varchar(7) NOT NULL,
  `estudent` int(3) NOT NULL,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL,
  `journey_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornadas`
--

CREATE TABLE `jornadas` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `estudents` tinyint(3) NOT NULL,
  `men` tinyint(3) DEFAULT NULL,
  `women` tinyint(3) DEFAULT NULL,
  `activity_id` int(11) NOT NULL,
  `token_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `tell` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_dimension` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dimensiones` (`dimension_id`);

--
-- Indices de la tabla `apoyo`
--
ALTER TABLE `apoyo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dimensiones`
--
ALTER TABLE `dimensiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuentas`
--
ALTER TABLE `encuentas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `register_id` (`register_id`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `journey_id` (`journey_id`);

--
-- Indices de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_id` (`activity_id`),
  ADD KEY `token_id` (`token_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dimension` (`id_dimension`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `apoyo`
--
ALTER TABLE `apoyo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `dimensiones`
--
ALTER TABLE `dimensiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `encuentas`
--
ALTER TABLE `encuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `jornadas`
--
ALTER TABLE `jornadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`dimension_id`) REFERENCES `dimensiones` (`id`);

--
-- Filtros para la tabla `encuentas`
--
ALTER TABLE `encuentas`
  ADD CONSTRAINT `encuentas_ibfk_1` FOREIGN KEY (`register_id`) REFERENCES `registros` (`id`);

--
-- Filtros para la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `fichas_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programas` (`id`),
  ADD CONSTRAINT `fichas_ibfk_2` FOREIGN KEY (`journey_id`) REFERENCES `jornadas` (`id`);

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `actividades` (`id`),
  ADD CONSTRAINT `registros_ibfk_2` FOREIGN KEY (`token_id`) REFERENCES `fichas` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_dimension`) REFERENCES `dimensiones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
