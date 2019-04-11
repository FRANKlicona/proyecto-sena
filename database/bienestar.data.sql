-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2019 a las 15:56:52
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
(5, 'Caracterizacon de Ambientes', 4),
(6, 'Zonales de Liderasgo', 4),
(7, 'Jornada de prevencion a enfermedades de trasminsio', 6),
(8, 'Jornada de prevencion a embarazos prematuros', 6),
(9, 'Misa pre semana santa', 2);

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `date`, `checkit`, `date_create`, `token_id`, `action_id`) VALUES
(1, '2019-03-13', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(2, '2019-03-21', 'VENCIDA', '2019-04-04 22:40:47', 1, 3),
(11, '2019-03-29', 'VENCIDA', '2019-04-04 22:40:47', 1, 4),
(12, '2019-02-27', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(13, '2019-02-20', 'VENCIDA', '2019-04-04 22:40:47', 1, 4),
(15, '2019-03-26', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(18, '2019-03-19', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(19, '2019-03-19', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(20, '2019-03-12', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(21, '2019-03-20', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(22, '2019-03-05', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(23, '2019-03-07', 'VENCIDA', '2019-04-04 22:40:47', 1, 3),
(27, '2019-03-07', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(29, '2019-04-11', 'SI', '2019-04-03 14:44:32', 1, 5),
(30, '2019-04-07', 'VENCIDA', '2019-04-03 14:44:32', 1, 5),
(31, '2019-04-17', 'NO', '2019-04-03 14:44:32', 1, 3),
(33, '2019-04-02', 'VENCIDA', '2019-04-04 22:40:47', 1, 4),
(39, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 1, 4),
(40, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 1, 2),
(41, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 1, 5),
(42, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 1, 4),
(43, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 1, 3),
(44, '2019-04-25', 'NO', '2019-04-03 14:44:32', 2, 4),
(45, '2019-04-10', 'VENCIDA', '2019-04-03 14:45:10', 2, 5),
(46, '2019-04-01', 'VENCIDA', '2019-04-04 22:40:47', 1, 3),
(47, '2019-04-03', 'VENCIDA', '2019-04-04 22:40:47', 2, 2),
(48, '2019-04-05', 'VENCIDA', '2019-04-04 21:13:19', 2, 2),
(50, '2019-03-06', 'VENCIDA', '2019-04-04 22:40:47', 2, 2),
(55, '0000-00-00', 'VENCIDA', '2019-04-05 14:46:32', 1, 3),
(56, '0000-00-00', 'VENCIDA', '2019-04-05 14:48:26', 1, 3),
(57, '0000-00-00', 'VENCIDA', '2019-04-05 14:54:29', 2, 2),
(58, '0000-00-00', 'VENCIDA', '2019-04-05 14:59:33', 2, 4),
(59, '0000-00-00', 'VENCIDA', '2019-04-06 18:23:31', 2, 5),
(60, '0000-00-00', 'VENCIDA', '2019-04-06 18:58:27', 2, 2),
(61, '0000-00-00', 'VENCIDA', '2019-04-07 16:40:37', 2, 4),
(62, '0000-00-00', 'VENCIDA', '2019-04-08 12:13:22', 2, 4),
(63, '2019-04-09', 'VENCIDA', '2019-04-08 20:03:59', 1, 3),
(64, '2019-04-09', 'VENCIDA', '2019-04-08 20:04:27', 2, 3),
(65, '0000-00-00', 'VENCIDA', '2019-04-08 20:05:05', 2, 3),
(66, '2019-04-09', 'VENCIDA', '2019-04-09 12:20:36', 2, 7),
(67, '2019-04-09', 'VENCIDA', '2019-04-09 12:21:21', 1, 4);

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
(1, '1503847', 26, '2017-09-25', '2019-09-25', 'MAÑANA', 'E43', 3),
(2, '1402659', 36, '2018-04-23', '2020-04-23', 'MAÑANA', 'RT4', 4);

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id`, `date_create`, `requester`, `action_id`, `token_id`) VALUES
(14, '2019-04-07 11:41:59', 'Vocero', 3, 2);

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

INSERT INTO `registros` (`id`, `students`, `men`, `women`, `duration`, `activity_id`) VALUES
(7, 28, 19, 9, '02:00:00', 1),
(8, 39, 20, 19, '02:00:00', 2),
(9, 30, 13, 17, '02:00:00', 12),
(10, 31, 12, 19, '02:00:00', 29);

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
(4, 'tatiana', 'torres', '64545645', 'tatitorres31@gmail.com', '1234', 1, 1),
(5, 'gilipola', 'gilipollon', 'wserw', 't@t.com', '987654321', 2, 1),
(6, 'sdfsdf', 'sdfsdfs', 'dfggffsdfs', 'sdfsdf@edfdf', '43344334', 2, 1),
(7, 'efe', 'ele', '3006086090', '3l33f3@gmail.com', '97062755', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
