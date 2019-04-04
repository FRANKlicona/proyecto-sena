--datos--
INSERT INTO `acciones` (`id`, `name`, `dimension_id`) VALUES
(2, 'Reclutamiento', 2),
(3, 'Eleccion de vocero', 4);



INSERT INTO `actividades` (`id`, `date`, `token_id`, `action_id`) VALUES
(1, '2019-03-13', 1, 2),
(2, '2019-03-21', 1, 3);


INSERT INTO `dimensiones` (`id`, `name`) VALUES
(1, 'Apoyo y Sostenimiento'),
(2, 'Cultura'),
(3, 'Desporte Y Recracion'),
(4, 'Liderazgo'),
(5, 'Psicologia'),
(6, 'Salud');




INSERT INTO `fichas` (`id`, `name`, `student`, `date_start`, `date_finish`, `pass_code`, `journey_id`, `program_id`) VALUES
(1, '1503847', 25, '2017-09-25', '2019-09-25', '', 1, 1);







INSERT INTO `programas` (`id`, `name`, `status`) VALUES
(3, 'ANALISIS Y DESARROLLO DE SISTEMAS DE INFORMACION', 'Activo'),
(4, 'CONTADURIA Y FINANZAS', 'Inactivo'),
(5, 'MULTIMEDIA', 'Activo'),
(6, 'MANTENIMIENTO DE EQUIPOS DE COMPUTO', 'Activo');




INSERT INTO `registros` (`id`, `students`, `men`, `women`, `duration`, `activity_id`, `program_id`, `token_id`) VALUES
(1, 26, 19, 7, '02:00:00', 1, 3, 1),
(2, 18, 14, 4, '02:00:00', 2, 3, 1);

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Administrador'),
(2, 'Lider'),
(3, 'Funcionario');





INSERT INTO `users` (`id`, `name`, `last_name`, `tell`, `email`, `password`, `dimension_id`, `rol_id`) VALUES
(2, 'Frank', 'Licona', '3196663494', 'f.a.licona@hotmail.com', '97062755', 6, 1);