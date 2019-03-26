-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2019 a las 06:52:06
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
-- Base de datos: `bienestar`
--
CREATE DATABASE IF NOT EXISTS `bienestar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bienestar`;

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
--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `name`, `status`) VALUES
(3, 'ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION', 'Activo'),
(4, 'CONTADURIA Y FINANZAS', 'Inactivo'),
(5, 'MULTIMEDIA', 'Activo'),
(6, 'MANTENIMIENTO DE EQUIPOS DE COMPUTO', 'Activo');
--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Lider'),
(3, 'Funcionario');
--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`id`, `name`, `dimension_id`) VALUES
(2, 'Reclutamiento', 2),
(3, 'Eleccion de vocero', 4),
(4, 'Clasificacion Socio-Demgrafica', 5),
(5, 'Caracterizacon de Ambientes', 4);



--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id`, `name`, `student`, `date_start`, `date_finish`, `journey`, `pass_code`, `program_id`) VALUES
(1, '1503847', 26, '2017-09-25', '2019-09-25', 'MAÑANA', 'E43', 3);
--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `date`, `checkit`, `token_id`, `action_id`) VALUES
(1, '2019-03-13', 'SI', 1, 2),
(2, '2019-03-21', 'SI', 1, 3),
(4, '0000-00-00', 'SI', 1, 2),
(11, '2019-03-29', 'SI', 1, 4),
(12, '2019-02-27', 'SI', 1, 2),
(13, '2019-02-20', 'SI', 1, 4),
(14, '0000-00-00', 'SI', 1, 4),
(15, '0000-00-00', 'SI', 1, 2),
(16, '0000-00-00', 'SI', 1, 2);

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id`, `date_create`, `requester`, `pass_code`, `action_id`, `token_id`) VALUES
(1, '2019-03-20 20:27:59', 'Vocero', 'E43', 3, 1);


--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `students`, `men`, `women`, `duration`, `activity_id`, `program_id`, `token_id`) VALUES
(1, 26, 19, 7, '02:00:00', 1, 3, 1),
(2, 18, 14, 4, '02:00:00', 2, 3, 1);


--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `tell`, `email`, `password`, `dimension_id`, `rol_id`) VALUES
(2, 'Frank', 'Licona', '3196663494', 'f.a.licona@hotmail.com', '97062755', 6, 1),
(3, 'admin', 'admin', '345678', 'admin@admin.com', 'admin', 1, 1),
(4, 'tatiana', 'torres', '64545645', 'tatitorres31@gmail.com', '1234', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
