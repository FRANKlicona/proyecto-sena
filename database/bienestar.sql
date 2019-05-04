-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2019 a las 01:57:01
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
(4, 'Clasificacion Socio-Demografica', 5),
(5, 'Caracterizacon de Ambientes', 4),
(6, 'Zonales de Liderasgo', 4),
(7, 'Jornada de prevencion a enfermedades de trasminsio', 6),
(8, 'Jornada de prevencion a embarazos prematuros', 6),
(9, 'Misa pre semana santa', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `checkit` enum('SI','NO','VENCIDA') NOT NULL DEFAULT 'NO',
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `poblation` enum('Grupal','Induvidual') NOT NULL,
  `token_id` int(11) NOT NULL,
  `action_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `date`, `checkit`, `date_create`, `poblation`, `token_id`, `action_id`) VALUES
(1, '2019-03-13', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(2, '2019-03-21', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 3),
(11, '2019-03-29', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 4),
(12, '2019-02-27', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(13, '2019-02-20', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 4),
(15, '2019-03-26', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(18, '2019-03-19', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(19, '2019-03-19', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(20, '2019-03-12', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(21, '2019-03-20', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(22, '2019-03-05', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(23, '2019-03-07', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 3),
(27, '2019-03-07', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(29, '2019-04-11', 'SI', '2019-04-03 14:44:32', 'Grupal', 1, 5),
(30, '2019-04-07', 'VENCIDA', '2019-04-03 14:44:32', 'Grupal', 1, 5),
(31, '2019-04-17', 'VENCIDA', '2019-04-03 14:44:32', 'Grupal', 1, 3),
(33, '2019-04-02', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 4),
(39, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 4),
(40, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 2),
(41, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 5),
(42, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 4),
(43, '0000-00-00', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 3),
(44, '2019-04-25', 'VENCIDA', '2019-04-03 14:44:32', 'Grupal', 2, 4),
(45, '2019-04-10', 'VENCIDA', '2019-04-03 14:45:10', 'Grupal', 2, 5),
(46, '2019-04-01', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 1, 3),
(47, '2019-04-03', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 2, 2),
(48, '2019-04-05', 'VENCIDA', '2019-04-04 21:13:19', 'Grupal', 2, 2),
(50, '2019-03-06', 'VENCIDA', '2019-04-04 22:40:47', 'Grupal', 2, 2),
(55, '0000-00-00', 'VENCIDA', '2019-04-05 14:46:32', 'Grupal', 1, 3),
(56, '0000-00-00', 'VENCIDA', '2019-04-05 14:48:26', 'Grupal', 1, 3),
(57, '0000-00-00', 'VENCIDA', '2019-04-05 14:54:29', 'Grupal', 2, 2),
(58, '0000-00-00', 'VENCIDA', '2019-04-05 14:59:33', 'Grupal', 2, 4),
(59, '0000-00-00', 'VENCIDA', '2019-04-06 18:23:31', 'Grupal', 2, 5),
(60, '0000-00-00', 'VENCIDA', '2019-04-06 18:58:27', 'Grupal', 2, 2),
(61, '0000-00-00', 'VENCIDA', '2019-04-07 16:40:37', 'Grupal', 2, 4),
(62, '0000-00-00', 'VENCIDA', '2019-04-08 12:13:22', 'Grupal', 2, 4),
(63, '2019-04-09', 'VENCIDA', '2019-04-08 20:03:59', 'Grupal', 1, 3),
(64, '2019-04-09', 'VENCIDA', '2019-04-08 20:04:27', 'Grupal', 2, 3),
(65, '0000-00-00', 'VENCIDA', '2019-04-08 20:05:05', 'Grupal', 2, 3),
(66, '2019-04-09', 'VENCIDA', '2019-04-09 12:20:36', 'Grupal', 2, 7),
(67, '2019-04-09', 'VENCIDA', '2019-04-09 12:21:21', 'Grupal', 1, 4),
(68, '0000-00-00', 'VENCIDA', '2019-04-11 22:16:10', 'Grupal', 2, 3),
(69, '0000-00-00', 'VENCIDA', '2019-04-11 22:17:30', 'Grupal', 1, 7),
(70, '0000-00-00', 'VENCIDA', '2019-04-19 16:51:40', 'Grupal', 1, 8),
(71, '0000-00-00', 'VENCIDA', '2019-04-19 16:57:56', 'Grupal', 2, 7),
(72, '0000-00-00', 'VENCIDA', '2019-04-19 17:16:32', 'Grupal', 2, 8),
(73, '0000-00-00', 'VENCIDA', '2019-04-19 17:36:43', 'Grupal', 1, 8),
(74, '0000-00-00', 'VENCIDA', '2019-04-19 17:55:22', 'Grupal', 1, 4),
(75, '0000-00-00', 'VENCIDA', '2019-04-19 23:06:49', 'Grupal', 1, 2),
(76, '0000-00-00', 'VENCIDA', '2019-04-22 17:39:54', 'Grupal', 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

CREATE TABLE `asistentes` (
  `id` int(11) NOT NULL,
  `registry_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beneficiados`
--

CREATE TABLE `beneficiados` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `form_request` varchar(255) NOT NULL,
  `files_pdf` varchar(255) NOT NULL,
  `type` enum('apoyo socioeconomico','bono alimenticio') NOT NULL,
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
(6, 'Salud'),
(7, 'Zero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `id` int(11) NOT NULL,
  `region` varchar(10) NOT NULL,
  `munipality` varchar(40) NOT NULL,
  `edificication` varchar(100) NOT NULL,
  `age` char(2) NOT NULL,
  `training_modality` enum('presencial','virtual','a distancia') NOT NULL,
  `gender_id` char(1) NOT NULL,
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
  `status` enum('En Formacion','Retirado','Matricula Cancelada') NOT NULL,
  `cell` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `HR` enum('O+','O-','A+','A-','B+','B-','AB+','AB-') NOT NULL,
  `identification` varchar(11) NOT NULL,
  `token_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `name`, `last_name`, `gender`, `age`, `status`, `cell`, `email`, `HR`, `identification`, `token_id`) VALUES
(1, 'Mateo Abril', 'Alcala Sotelo', 'Masculino', '16', 'En Formacion', '678856886', 'meza.joseantonio@hotmail.es', 'A-', '1309471650', 2),
(2, 'Sandra Joan', 'Cerda Madera', 'Masculino', '17', 'En Formacion', '+34 609-83', 'vescobar@live.com', 'A-', '1225416721', 1),
(3, 'Gabriel Álvaro', 'Pacheco Atencio', 'Masculino', '22', 'En Formacion', '963304545', 'taranda@gmail.com', 'AB+', '1051932517', 1),
(4, 'Berta Naiara', 'Salas Carrera', 'Masculino', '22', 'En Formacion', '+34 641208', 'yago14@hotmail.es', 'B+', '1443373948', 2),
(5, 'Adrián Santiago', 'Otero Saavedra', 'Masculino', '19', 'En Formacion', '673-524582', 'gmota@yahoo.es', 'AB-', '1214295562', 2),
(6, 'Lara Lara', 'Saucedo Simón', 'Femenino', '17', 'En Formacion', '628-023252', 'carrero.alejandra@hotmail.es', 'A-', '1138659838', 2),
(7, 'Guillem David', 'Benítez Tello', 'Femenino', '20', 'En Formacion', '+34 908 85', 'angel06@hispavista.com', 'A-', '1038505045', 1),
(8, 'Celia Carla', 'Mora Longoria', 'Masculino', '21', 'En Formacion', '+34 658-39', 'sjasso@yahoo.es', 'B+', '1010898475', 1),
(9, 'Gabriel Raúl', 'Menchaca Guzmán', 'Femenino', '18', 'En Formacion', '615-55-680', 'marguello@gmail.com', 'O-', '1010286769', 1),
(10, 'Hugo Sandra', 'Concepción Domínquez', 'Masculino', '19', 'En Formacion', '+34 659987', 'ellorente@hispavista.com', 'A+', '1115654085', 2),
(11, 'Oriol Luis', 'Valencia Ulloa', 'Femenino', '21', 'En Formacion', '+34 944 32', 'ysanabria@gmail.com', 'O+', '1482667321', 1),
(12, 'Jana Emma', 'Concepción Rubio', 'Femenino', '25', 'En Formacion', '951 693487', 'mara.aguilar@latinmail.com', 'B+', '1303295621', 2),
(13, 'Ismael Jorge', 'Altamirano Sanz', 'Masculino', '17', 'En Formacion', '+34 984 04', 'josemanuel46@yahoo.es', 'A-', '1449471907', 1),
(14, 'Luna Isabel', 'Paz Llorente', 'Femenino', '19', 'En Formacion', '+34 995730', 'ibanez.nayara@yahoo.com', 'O+', '1362281339', 2),
(15, 'Nicolás Mar', 'Madrigal Guevara', 'Femenino', '25', 'En Formacion', '906-337949', 'samuel.gaytan@gmail.com', 'AB+', '1100539466', 1),
(16, 'Anna Patricia', 'Cano Jiménez', 'Masculino', '17', 'En Formacion', '988 628924', 'padilla.victoria@gmail.com', 'O-', '1390440870', 2),
(17, 'Sandra Alicia', 'Alaniz Almonte', 'Femenino', '19', 'En Formacion', '666 16 008', 'manuel80@hispavista.com', 'AB+', '1355250864', 1),
(18, 'Rodrigo Nerea', 'Guerrero Puig', 'Femenino', '23', 'En Formacion', '947-916948', 'nahia74@hispavista.com', 'AB+', '1320873602', 2),
(19, 'José Antonio Marc', 'Olivo Reynoso', 'Femenino', '19', 'En Formacion', '929577286', 'alexia64@gmail.com', 'A+', '1092418254', 1),
(20, 'Salma Olivia', 'Puente Matías', 'Masculino', '19', 'En Formacion', '693 139975', 'rocio13@terra.com', 'B+', '1175306919', 1),
(21, 'Pol Nadia', 'Olivares Chacón', 'Masculino', '16', 'En Formacion', '+34 917-09', 'gonzalo03@hotmail.com', 'A-', '1177954649', 1),
(22, 'Santiago Alex', 'Valenzuela Quintero', 'Femenino', '24', 'En Formacion', '+34 690 16', 'anna25@yahoo.com', 'A+', '1136662328', 2),
(23, 'Rodrigo Lola', 'Jáquez Raya', 'Masculino', '19', 'En Formacion', '+34 636-49', 'helena73@gmail.com', 'A-', '1292485871', 2),
(24, 'Gael Mar', 'Jimínez Bernal', 'Femenino', '17', 'En Formacion', '680-00-784', 'villanueva.elsa@hispavista.com', 'A-', '1420120289', 1),
(25, 'Victoria Adriana', 'Viera Zamudio', 'Femenino', '19', 'En Formacion', '+34 965 17', 'ncasares@hispavista.com', 'O-', '1427957524', 2),
(26, 'Alejandra Diego', 'Holguín Malave', 'Femenino', '18', 'En Formacion', '+34 923891', 'ncortes@hotmail.es', 'A-', '1077073340', 2),
(27, 'Arnau Omar', 'Rael Ordóñez', 'Masculino', '25', 'En Formacion', '611774899', 'casarez.zoe@hotmail.com', 'B-', '1115005640', 2),
(28, 'Lara Salma', 'Castellanos Cepeda', 'Femenino', '24', 'En Formacion', '915-520976', 'barela.nil@latinmail.com', 'AB+', '1178337256', 2),
(29, 'Carla Gael', 'Santillán Munguía', 'Femenino', '21', 'En Formacion', '657 48 843', 'paola.rico@hotmail.es', 'AB-', '1063574118', 1),
(30, 'Lucía Pablo', 'Ocasio Borrego', 'Femenino', '24', 'En Formacion', '624-60-814', 'helena.ros@hotmail.com', 'B-', '1281704189', 2),
(31, 'Africa Noelia', 'Yáñez Aguirre', 'Masculino', '19', 'En Formacion', '989-20-226', 'eduardo74@hotmail.es', 'AB+', '1329727097', 2),
(32, 'Aitor Alejandro', 'Linares Lázaro', 'Masculino', '25', 'En Formacion', '+34 938-53', 'guerra.ruben@hispavista.com', 'AB-', '1174065697', 2),
(33, 'Enrique Andrés', 'Duran Cortés', 'Masculino', '22', 'En Formacion', '+34 641 50', 'candela.barrios@hispavista.com', 'A-', '1349458945', 2),
(34, 'Hugo Lucía', 'Anguiano Ocampo', 'Femenino', '20', 'En Formacion', '964-918038', 'cordero.franciscojavier@latinmail.com', 'AB-', '1311891213', 2),
(35, 'Silvia Yeray', 'Mata Sisneros', 'Femenino', '23', 'En Formacion', '961 33 855', 'francisco.flores@live.com', 'A+', '1294204016', 1),
(36, 'Iván Rafael', 'Parra Zapata', 'Femenino', '21', 'En Formacion', '907-445073', 'tflorez@live.com', 'B+', '1217168302', 2),
(37, 'Iker Francisco', 'Espinal Marco', 'Masculino', '19', 'En Formacion', '+34 640-93', 'betancourt.guillem@hotmail.es', 'O+', '1094798094', 1),
(38, 'Jana Unai', 'Guevara Quiroz', 'Femenino', '18', 'En Formacion', '967 383461', 'jana55@yahoo.com', 'A-', '1351733811', 2),
(39, 'Rodrigo María', 'Alcántar Castellanos', 'Masculino', '25', 'En Formacion', '913 65 548', 'mara.bonilla@gmail.com', 'A+', '1426699449', 1),
(40, 'Rocío Erika', 'Urías Peralta', 'Masculino', '21', 'En Formacion', '+34 671578', 'serra.irene@hotmail.es', 'A-', '1057608569', 2),
(41, 'Aitor Martina', 'Gutiérrez Llamas', 'Femenino', '18', 'En Formacion', '+34 697-47', 'delarosa.paola@gmail.com', 'O-', '1076956112', 1),
(42, 'Noa Miguel Ángel', 'Riera Rosas', 'Masculino', '18', 'En Formacion', '+34 954 51', 'mireia.blanco@hispavista.com', 'A-', '1364972825', 1),
(43, 'Cristina Lidia', 'Verdugo Olivera', 'Masculino', '19', 'En Formacion', '+34 960-20', 'villalobos.marc@yahoo.es', 'AB+', '1157509514', 1),
(44, 'Alejandro Carlota', 'Cazares Rosario', 'Masculino', '18', 'En Formacion', '619-12-672', 'ruben31@hotmail.com', 'A-', '1034763821', 2),
(45, 'Adam Celia', 'Antón Balderas', 'Femenino', '17', 'En Formacion', '+34 634217', 'marc59@latinmail.com', 'A-', '1431254983', 2),
(46, 'Elsa Ander', 'Becerra Toro', 'Masculino', '25', 'En Formacion', '+34 631-99', 'vorellana@hispavista.com', 'B-', '1460010668', 1),
(47, 'Víctor Eric', 'Trujillo Archuleta', 'Masculino', '18', 'En Formacion', '924974815', 'oliver60@yahoo.com', 'A-', '1343161512', 1),
(48, 'Natalia Jaime', 'Ibarra Barrios', 'Femenino', '22', 'En Formacion', '965-698399', 'rayan78@yahoo.es', 'O+', '1310643686', 2),
(49, 'Oliver Marina', 'Pacheco Zepeda', 'Femenino', '25', 'En Formacion', '675-95-130', 'wdiaz@latinmail.com', 'A-', '1040155935', 2),
(50, 'Lucía Blanca', 'Segovia Meza', 'Femenino', '22', 'En Formacion', '920-085827', 'david66@terra.com', 'O+', '1002516932', 2),
(51, 'Erika Nora', 'Verduzco Rentería', 'Femenino', '20', 'En Formacion', '913 591818', 'abotello@hispavista.com', 'B-', '1081136250', 1),
(52, 'Mario Alexandra', 'Hernándes Regalado', 'Femenino', '16', 'En Formacion', '978-61-776', 'armendariz.noelia@terra.com', 'O-', '1220640019', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias`
--

CREATE TABLE `evidencias` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `url` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `registry_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
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
  `journey` enum('MAÑANA','MIXTA','NOCTURNA') NOT NULL,
  `status` enum('Etapa Lectiva','Etapa Productiva','Finalizada') NOT NULL,
  `place` enum('CCyS','Emprender','Petroquimico','Nautico') NOT NULL,
  `formation_level` enum('Tecnico','Tecnologo','Curso corto') NOT NULL,
  `pass_code` varchar(3) NOT NULL,
  `program_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fichas`
--

INSERT INTO `fichas` (`id`, `name`, `student`, `date_start`, `date_finish`, `journey`, `status`, `place`, `formation_level`, `pass_code`, `program_id`) VALUES
(1, '1503847', 26, '2017-09-25', '2019-09-25', 'MAÑANA', 'Etapa Lectiva', 'CCyS', 'Tecnico', 'E43', 3),
(2, '1402659', 36, '2018-04-23', '2020-04-23', 'MAÑANA', 'Etapa Lectiva', 'CCyS', 'Tecnico', 'RT4', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `id` int(11) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `requester` enum('Vocero','Instructor') NOT NULL,
  `email` varchar(120) NOT NULL,
  `checkit` enum('SI','NO','RECHAZADA') NOT NULL DEFAULT 'NO',
  `no_reff` varchar(13) NOT NULL,
  `reasons` enum('R1','R2','R3') NOT NULL,
  `poblation` enum('Grupal','Indivudual') NOT NULL,
  `action_id` int(11) NOT NULL,
  `token_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id`, `date_create`, `requester`, `email`, `checkit`, `no_reff`, `reasons`, `poblation`, `action_id`, `token_id`) VALUES
(25, '2019-04-17 17:00:01', 'Vocero', '3l33f3@gmail.com', 'SI', '2019-04-17BPV', 'R1', 'Grupal', 4, 1),
(26, '2019-04-19 11:08:48', 'Instructor', 'r@r.com', 'SI', '2019-04-195IG', 'R1', 'Grupal', 2, 1),
(28, '2019-04-19 11:09:33', 'Vocero', '3l33f3@gmail.com', 'NO', '2019-04-193BV', 'R1', 'Grupal', 9, 2),
(30, '2019-04-19 11:10:19', 'Instructor', 'f.a.licona@hotmail.com', 'SI', '2019-04-19DXQ', 'R1', 'Grupal', 8, 2),
(31, '2019-04-19 11:10:51', 'Instructor', 'tatitorres31@gmail.com', 'SI', '2019-04-191W1', 'R1', 'Grupal', 6, 1),
(32, '2019-04-19 12:31:46', 'Vocero', 'eli@eli.com', 'SI', '2019-04-19KHH', 'R1', 'Grupal', 8, 1),
(33, '2019-04-22 12:20:48', 'Vocero', 'f.a.licona@hotmail.com', 'NO', '2019-04-22JIV', 'R1', 'Grupal', 4, 1),
(34, '2019-04-22 13:09:23', 'Instructor', '3l33f3@gmail.com', 'NO', '2019-04-22OE7', 'R1', 'Grupal', 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `status` enum('Activo','Inactivo') NOT NULL,
  `mode` enum('Virtual','Presencial','A distancia') NOT NULL DEFAULT 'Presencial',
  `type` enum('Articulacion con la media','Programa Sena') NOT NULL DEFAULT 'Programa Sena',
  `agreement` enum('IDER','TECNAR','Ninguno') NOT NULL DEFAULT 'Ninguno'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `name`, `status`, `mode`, `type`, `agreement`) VALUES
(3, 'ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION', 'Activo', 'Presencial', 'Programa Sena', 'Ninguno'),
(4, 'CONTADURIA Y FINANZAS', 'Inactivo', 'Presencial', 'Programa Sena', 'Ninguno'),
(5, 'MULTIMEDIA', 'Activo', 'Presencial', 'Programa Sena', 'Ninguno'),
(6, 'MANTENIMIENTO DE EQUIPOS DE COMPUTO', 'Activo', 'Presencial', 'Programa Sena', 'Ninguno');

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
  `activity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `students`, `men`, `women`, `duration`, `activity_id`) VALUES
(7, 28, 19, 9, '02:00:00', 1),
(8, 39, 20, 19, '02:00:00', 2),
(9, 30, 13, 17, '02:00:00', 12),
(10, 31, 12, 19, '02:00:00', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remisiones`
--

CREATE TABLE `remisiones` (
  `id` int(11) NOT NULL,
  `date_create` date NOT NULL,
  `n_orden` int(11) NOT NULL,
  `reason_referal` text NOT NULL,
  `instructor_name` varchar(80) NOT NULL,
  `instructor_email` varchar(100) NOT NULL,
  `student_ide` varchar(11) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `phase` enum('Remision','Visita','Evaluacion') NOT NULL,
  `situation_found` text,
  `promises` text,
  `date_promises` date DEFAULT NULL,
  `date_eval` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `estatus` enum('abierto','pausado','cerrado') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `remisiones`
--

INSERT INTO `remisiones` (`id`, `date_create`, `n_orden`, `reason_referal`, `instructor_name`, `instructor_email`, `student_ide`, `student_email`, `phase`, `situation_found`, `promises`, `date_promises`, `date_eval`, `user_id`, `estatus`) VALUES
(1, '2019-04-21', 2019042100, 'dqlswkdnswqldnk', 'miguel romero', 'f.a.licona@hmail.com', '1309471650', '', 'Remision', NULL, NULL, NULL, NULL, NULL, NULL);

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
  `enable` enum('SI','NO','BLOCK') NOT NULL DEFAULT 'NO',
  `dimension_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `tell`, `email`, `password`, `enable`, `dimension_id`) VALUES
(2, 'Frank', 'Licona', '3196663494', 'f.a.licona@hotmail.com', '97062755', 'NO', 7),
(3, 'admin', 'admin', '345678', 'admin@admin.com', 'adminadmin', 'NO', 5),
(4, 'tatiana', 'torres', '64545645', 'tatitorres31@gmail.com', '12341234', 'NO', 4),
(5, 'gilipola', 'gilipollon', 'wserw', 't@t.com', '987654321', 'NO', 6),
(6, 'sdfsdf', 'sdfsdfs', 'dfggffsdfs', 'sdfsdf@edfdf', '43344334', 'NO', 2),
(7, 'efe', 'ele', '3006086090', '3l33f3@gmail.com', '97062755', 'NO', 2);

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
-- Indices de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registry_id` (`registry_id`),
  ADD KEY `student_id` (`student_id`);

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
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `register_id` (`register_id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identification` (`identification`),
  ADD KEY `token_id` (`token_id`);

--
-- Indices de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registry_id` (`registry_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pass_code` (`pass_code`),
  ADD KEY `program_id` (`program_id`);

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_id` (`action_id`),
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
  ADD KEY `activity_id` (`activity_id`);

--
-- Indices de la tabla `remisiones`
--
ALTER TABLE `remisiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_ide` (`student_ide`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dimension` (`dimension_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `beneficiados`
--
ALTER TABLE `beneficiados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dimensiones`
--
ALTER TABLE `dimensiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `remisiones`
--
ALTER TABLE `remisiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Filtros para la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD CONSTRAINT `asistentes_ibfk_1` FOREIGN KEY (`registry_id`) REFERENCES `registros` (`id`),
  ADD CONSTRAINT `asistentes_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `estudiantes` (`id`);

--
-- Filtros para la tabla `beneficiados`
--
ALTER TABLE `beneficiados`
  ADD CONSTRAINT `beneficiados_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `estudiantes` (`id`);

--
-- Filtros para la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD CONSTRAINT `encuestas_ibfk_1` FOREIGN KEY (`register_id`) REFERENCES `registros` (`id`);

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`token_id`) REFERENCES `fichas` (`id`);

--
-- Filtros para la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD CONSTRAINT `evidencias_ibfk_1` FOREIGN KEY (`registry_id`) REFERENCES `registros` (`id`),
  ADD CONSTRAINT `evidencias_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `fichas_ibfk_1` FOREIGN KEY (`program_id`) REFERENCES `programas` (`id`);

--
-- Filtros para la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD CONSTRAINT `peticiones_ibfk_4` FOREIGN KEY (`action_id`) REFERENCES `acciones` (`id`),
  ADD CONSTRAINT `peticiones_ibfk_5` FOREIGN KEY (`token_id`) REFERENCES `fichas` (`id`);

--
-- Filtros para la tabla `registros`
--
ALTER TABLE `registros`
  ADD CONSTRAINT `registros_ibfk_5` FOREIGN KEY (`activity_id`) REFERENCES `actividades` (`id`);

--
-- Filtros para la tabla `remisiones`
--
ALTER TABLE `remisiones`
  ADD CONSTRAINT `remisiones_ibfk_1` FOREIGN KEY (`student_ide`) REFERENCES `estudiantes` (`identification`),
  ADD CONSTRAINT `remisiones_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`dimension_id`) REFERENCES `dimensiones` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
