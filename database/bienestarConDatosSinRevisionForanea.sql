-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2019 a las 20:56:54
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET FOREIGN_KEY_CHECKS=0;
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
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dimension_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acciones`
--

INSERT INTO `acciones` (`id`, `name`, `dimension_id`) VALUES
(2, 'Reclutamiento', 2),
(3, 'Eleccion de vocero', 4),
(4, 'Clasificacion Socio-Demgrafica', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `token_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `date`, `token_id`, `action_id`) VALUES
(1, '2019-03-13', 1, 2),
(2, '2019-03-21', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiados`
--

CREATE TABLE `beneficiados` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `form_request` varchar(255) NOT NULL,
  `files_pdf` varchar(255) NOT NULL,
  `type` enum('apoyo socioeconomico','bono alimenticio','','') NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `edificication` varchar(100) NOT NULL,
  `age` char(2) NOT NULL,
  `training_modality` enum('presencial','virtual','a distancia') NOT NULL,
  `gender_id` char(1) NOT NULL,
  `register_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `gender` enum('Masculino','Femenino','No Especificado') NOT NULL,
  `age` char(2) NOT NULL,
  `status` enum('En Formacion','Returado','Matricula Cancelada') NOT NULL,
  `cell` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `identification` varchar(15) NOT NULL,
  `HR` enum('O+','O-','A+','A-','B+','B-','AB+','AB-') NOT NULL,
  `token_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas`
--

CREATE TABLE `fichas` (
  `id` int(11) NOT NULL,
  `name` varchar(7) NOT NULL,
  `student` int(3) NOT NULL,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL,
  `pass_code` varchar(3) NOT NULL,
  `journey_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id`, `name`, `student`, `date_start`, `date_finish`, `pass_code`, `journey_id`, `program_id`) VALUES
(1, '1503847', 25, '2017-09-25', '2019-09-25', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `id` int(11) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `requester` enum('Vocero','Instructor') NOT NULL,
  `pass_code` char(3) NOT NULL,
  `action_id` int(11) NOT NULL,
  `token_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id`, `date_create`, `requester`, `pass_code`, `action_id`, `token_id`) VALUES
(1, '2019-03-20 20:27:59', 'Vocero', 'E43', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `status` enum('Activo','Inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `name`, `status`) VALUES
(3, 'ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION', 'Activo'),
(4, 'CONTADURIA Y FINANZAS', 'Inactivo'),
(5, 'MULTIMEDIA', 'Activo'),
(6, 'MANTENIMIENTO DE EQUIPOS DE COMPUTO', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `students` tinyint(3) NOT NULL,
  `men` tinyint(3) DEFAULT NULL,
  `women` tinyint(3) DEFAULT NULL,
  `duration` time NOT NULL,
  `activity_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `token_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `students`, `men`, `women`, `duration`, `activity_id`, `program_id`, `token_id`) VALUES
(1, 26, 19, 7, '02:00:00', 1, 3, 1),
(2, 18, 14, 4, '02:00:00', 2, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remisiones`
--

CREATE TABLE `remisiones` (
  `id` int(11) NOT NULL,
  `referal_type` enum('trabajo_social','psicologia','','') NOT NULL,
  `date_create` date NOT NULL,
  `n_orden` int(11) NOT NULL,
  `reason_referal` text NOT NULL,
  `instructor_name` varchar(120) NOT NULL,
  `instructor firm` longblob NOT NULL,
  `situation_found` text NOT NULL,
  `promises` text NOT NULL,
  `psico_firm_before` longblob NOT NULL,
  `student_firm` longblob NOT NULL,
  `date_eval` date NOT NULL,
  `eval_track` enum('si','no','','') NOT NULL,
  `date_promises` date NOT NULL,
  `psico_firm_after` longblob NOT NULL,
  `stutent_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Lider'),
(3, 'Funcionario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `tell` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `dimension_id` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `tell`, `email`, `password`, `dimension_id`, `rol_id`) VALUES
(2, 'Frank', 'Licona', '3196663494', 'f.a.licona@hotmail.com', '97062755', 6, 1),
(3, 'admin', 'admin', '345678', 'admin@admin.com', 'admin', 1, 1),
(4, 'tatiana', 'torres', '64545645', 'tatitorres31@gmail.com', '1234', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dimensiones` (`dimension_id`);

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_id` (`action_id`),
  ADD KEY `token_id` (`token_id`);

--
-- Indices de la tabla `beneficiados`
--
ALTER TABLE `beneficiados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

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
  ADD KEY `register_id` (`register_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `token_id` (`token_id`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `pass_code` (`pass_code`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `journey_id` (`journey_id`);

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pass_code_id_2` (`pass_code`),
  ADD KEY `activity_id` (`action_id`),
  ADD KEY `pass_code_id` (`pass_code`),
  ADD KEY `token_id` (`token_id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_id` (`activity_id`),
  ADD KEY `token_id` (`token_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indices de la tabla `remisiones`
--
ALTER TABLE `remisiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stutent_id` (`stutent_id`),
  ADD KEY `program_id` (`program_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dimension` (`dimension_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `beneficiados`
--
ALTER TABLE `beneficiados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD CONSTRAINT `acciones_ibfk_1` FOREIGN KEY (`dimension_id`) REFERENCES `dimensiones` (`id`);

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `acciones` (`id`),
  ADD CONSTRAINT `actividades_ibfk_2` FOREIGN KEY (`token_id`) REFERENCES `fichas` (`id`);

--
-- Filtros para la tabla `beneficiados`
--
ALTER TABLE `beneficiados`
  ADD CONSTRAINT `beneficiados_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `estudiantes` (`id`);

--
-- Filtros para la tabla `encuentas`
--
ALTER TABLE `encuentas`
  ADD CONSTRAINT `encuentas_ibfk_1` FOREIGN KEY (`register_id`) REFERENCES `registros` (`id`),
  ADD CONSTRAINT `encuentas_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `programas` (`id`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`token_id`) REFERENCES `fichas` (`id`);

--
-- Filtros para la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `fichas_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programas` (`id`),
  ADD CONSTRAINT `fichas_ibfk_2` FOREIGN KEY (`journey_id`) REFERENCES `jornadas` (`id`);

--
-- Filtros para la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD CONSTRAINT `peticiones_ibfk_2` FOREIGN KEY (`token_id`) REFERENCES `fichas` (`id`),
  ADD CONSTRAINT `peticiones_ibfk_4` FOREIGN KEY (`action_id`) REFERENCES `acciones` (`id`);

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_ibfk_2` FOREIGN KEY (`token_id`) REFERENCES `fichas` (`id`),
  ADD CONSTRAINT `registros_ibfk_4` FOREIGN KEY (`program_id`) REFERENCES `programas` (`id`),
  ADD CONSTRAINT `registros_ibfk_5` FOREIGN KEY (`activity_id`) REFERENCES `actividades` (`id`);

--
-- Filtros para la tabla `remisiones`
--
ALTER TABLE `remisiones`
  ADD CONSTRAINT `remisiones_ibfk_1` FOREIGN KEY (`stutent_id`) REFERENCES `estudiantes` (`id`),
  ADD CONSTRAINT `remisiones_ibfk_2` FOREIGN KEY (`program_id`) REFERENCES `programas` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`dimension_id`) REFERENCES `dimensiones` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
