-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2019 a las 15:47:30
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bienestar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuentas`
--

CREATE TABLE `encuentas` (
  `id` int(11) NOT NULL,
  `region` varchar(10) NOT NULL,
  `munipality` varchar(40) NOT NULL,
  `edificication` varchar(100) NOT NULL,
  `program_id` int(11) NOT NULL,
  `age` int(2) NOT NULL,
  `gender_id` char(1) NOT NULL,
  `training_modality` enum('presencial','virtual','a distancia') NOT NULL,
  `register_id` int(11) NOT NULL,
  `question_1` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL,
  `question_2` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL,
  `question_3` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL,
  `question_4` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL,
  `question_5` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL,
  `question_6` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL,
  `question_7` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL,
  `question_8` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL,
  `question_9` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL,
  `question_10` enum('en desacuerdo','ni en acuerdo ni en desacuerdo','de acuerdo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuentas`
--
ALTER TABLE `encuentas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `register_id` (`register_id`),
  ADD KEY `program_id` (`program_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuentas`
--
ALTER TABLE `encuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `encuentas`
--
ALTER TABLE `encuentas`
  ADD CONSTRAINT `encuentas_ibfk_1` FOREIGN KEY (`register_id`) REFERENCES `registros` (`id`),
  ADD CONSTRAINT `encuentas_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `programas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
