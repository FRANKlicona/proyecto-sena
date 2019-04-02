-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2019 a las 14:05:35
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

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`id`, `name`, `dimension_id`) VALUES
(2, 'Reclutamiento', 2),
(3, 'Eleccion de vocero', 4),
(4, 'Clasificacion Socio-Demografica', 5),
(5, 'Caracterizacon de Ambientes', 4);

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `date`, `checkit`, `token_id`, `action_id`) VALUES
(1, '2019-03-13', 'NO', 1, 2),
(2, '2019-03-21', 'NO', 1, 3),
(11, '2019-03-29', 'NO', 1, 4),
(12, '2019-02-27', 'NO', 1, 2),
(13, '2019-02-20', 'NO', 1, 4),
(15, '2019-03-26', 'NO', 1, 2),
(18, '2019-03-19', 'NO', 1, 2),
(19, '2019-03-19', 'NO', 1, 2),
(20, '2019-03-12', 'NO', 1, 2),
(21, '2019-03-20', 'NO', 1, 2),
(22, '2019-03-05', 'NO', 1, 2),
(23, '2019-03-07', 'NO', 1, 3),
(27, '2019-03-07', 'NO', 1, 2),
(28, '2019-04-09', 'NO', 1, 2);

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
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id`, `name`, `student`, `date_start`, `date_finish`, `journey`, `pass_code`, `program_id`) VALUES
(1, '1503847', 26, '2017-09-25', '2019-09-25', 'MAÑANA', 'E43', 3);

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id`, `date_create`, `requester`, `action_id`, `token_id`) VALUES
(1, '2019-03-20 20:27:59', 'Vocero', 3, 1),
(3, '2019-03-27 16:50:10', 'Instructor', 2, 1);

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `name`, `status`) VALUES
(3, 'ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION', 'Activo'),
(4, 'CONTADURIA Y FINANZAS', 'Inactivo'),
(5, 'MULTIMEDIA', 'Activo'),
(6, 'MANTENIMIENTO DE EQUIPOS DE COMPUTO', 'Activo');

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `students`, `men`, `women`, `duration`, `activity_id`, `program_id`, `token_id`) VALUES
(1, 26, 19, 7, '02:00:00', 1, 3, 1),
(2, 18, 14, 4, '02:00:00', 2, 3, 1);

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Lider'),
(3, 'Funcionario');

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
