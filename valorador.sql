-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2024 a las 22:23:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `valorador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_docentes`
--

CREATE TABLE `antecedentes_docentes` (
  `id_ant_doc` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_ant_doc` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_detalle_doc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes_docentes`
--

INSERT INTO `antecedentes_docentes` (`id_ant_doc`, `id_valoracion`, `detalle_ant_doc`, `fecha`, `id_detalle_doc`) VALUES
(4, 133, '0', '2023-01-02', 0),
(5, 134, '0', '2023-01-01', 2),
(6, 135, 'docee', '2023-01-01', 2),
(7, 137, 'eee', '2022-01-01', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_laborales`
--

CREATE TABLE `antecedentes_laborales` (
  `id_ant_lab` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_ant_lab` varchar(50) NOT NULL,
  `fecha` int(11) NOT NULL,
  `id_detalle_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `antecedentes_laborales`
--

INSERT INTO `antecedentes_laborales` (`id_ant_lab`, `id_valoracion`, `detalle_ant_lab`, `fecha`, `id_detalle_lab`) VALUES
(3, 137, 'qaqaqa', 2023, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitacion`
--

CREATE TABLE `capacitacion` (
  `id_capacitacion` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_capacitacion` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_detalle_capacitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `capacitacion`
--

INSERT INTO `capacitacion` (`id_capacitacion`, `id_valoracion`, `detalle_capacitacion`, `fecha`, `id_detalle_capacitacion`) VALUES
(18, 127, 'dededeeded', '2023-01-01', 4),
(19, 128, 'eeded', '2020-01-02', 3),
(20, 129, 'wewew', '2020-01-03', 2),
(21, 130, 'eeee', '2020-01-03', 3),
(22, 131, 'dddd', '2020-02-02', 3),
(23, 132, 'wewewe', '2021-02-02', 4),
(24, 132, '', '2023-01-01', 0),
(25, 133, 'wqwqw', '2021-02-02', 3),
(26, 134, 'wwe', '2021-01-01', 2),
(27, 135, 'qqq', '2021-01-01', 3),
(28, 137, 'ww', '2021-01-01', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `nombre_carrera`) VALUES
(1, 'Tecnicatura Superior en Desarrollo de Software'),
(2, 'Energías Rebovables');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion_docente`
--

CREATE TABLE `condicion_docente` (
  `id_condicion` int(11) NOT NULL,
  `detalle_condicion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `condicion_docente`
--

INSERT INTO `condicion_docente` (`id_condicion`, `detalle_condicion`) VALUES
(1, 'Docente'),
(2, 'Habilitante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ant_doc`
--

CREATE TABLE `detalle_ant_doc` (
  `id_detalle_doc` int(11) NOT NULL,
  `detalle_ant_doc` varchar(100) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_ant_doc`
--

INSERT INTO `detalle_ant_doc` (`id_detalle_doc`, `detalle_ant_doc`, `puntaje`) VALUES
(1, 'Antiguedad en el espacio curricular o equivalente en el nivel Superior Técnico.', 0),
(2, 'Antiguedad en otros espacios curriculares del nivel Superior Técnico.', 10),
(3, 'Antiguedad en otros espacios curriculares del nivel Superior Técnico.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ant_lab`
--

CREATE TABLE `detalle_ant_lab` (
  `id_detalle_lab` int(11) NOT NULL,
  `detalle_ant_lab` varchar(100) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_ant_lab`
--

INSERT INTO `detalle_ant_lab` (`id_detalle_lab`, `detalle_ant_lab`, `puntaje`) VALUES
(1, 'Antecedentes en empreas, PyMes, organismos del estado no mayor a 15 años a la fecha de postulación.', 0.5),
(2, 'Antecedentes en empreas, PyMes, y/o emprendimientos propios no mayor a 15 años a la fecha de postula', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_capacitacion`
--

CREATE TABLE `detalle_capacitacion` (
  `id_detalle_capacitacion` int(11) NOT NULL,
  `detalle` varchar(50) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_capacitacion`
--

INSERT INTO `detalle_capacitacion` (`id_detalle_capacitacion`, `detalle`, `puntaje`) VALUES
(1, 'con evaluación, con un mínimo de 30 hs.', 0.25),
(2, 'con evaluación, con menos de 30 hs.', 0.15),
(3, 'con evaluación, donde se detallan días y no horas.', 0.15),
(4, 'sin evaluación, con un mínimo de 30 hs.', 0.15),
(5, 'sin evaluación, con menos o sin especificar las ho', 0.05),
(6, 'sin evaluación, donde se detallan días y no horas', 0.1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id`, `nombre`, `apellido`, `dni`, `mail`, `estado`, `usuario`, `clave`) VALUES
(1, ' MARCELO HUMBERTO', 'ABALLAY SORIA', '25714353', '', 0, '', ''),
(2, ' ALICIA NOEMI', 'CELAYES FLORES', '30157746', '', 0, '', ''),
(3, ' MARIA CELINA', 'COTO HIDALGO', '37741589', '', 0, '', ''),
(4, ' ANALIA DEL PILAR', 'DELGADO', '20805413', '', 0, '', ''),
(5, ' SERGIO GASTON', 'GARBEROGLIO ELIZONDO', '27269774', '', 0, '', ''),
(6, ' ANALIA VERONICA', 'HEREDIA', '23922369', '', 0, '', ''),
(7, ' JUAN DE DIOS', 'LOPEZ', '30725012', '', 0, '', ''),
(8, ' EDUARDO MARCELO', 'MAURIN', '20130177', '', 0, '', ''),
(9, ' RAQUEL EUGENIA', 'MICHALEK FORQUERA', '28262995', '', 0, '', ''),
(10, ' VERÓNICA NOELIA', 'MOLINA ATENCIO', '32007429', '', 0, '', ''),
(11, ' JOSE RUBEN', 'MOLL', '29588455', '', 0, '', ''),
(12, ' LAURA EMILIA', 'ROMERO', '31642634', '', 0, '', ''),
(13, ' VIVIANA EDITH', 'SANCHEZ', '29177212', '', 0, '', ''),
(14, ' MARIA CECILIA DEL ROSARIO', 'SILVA IBAÑEZ', '35188938', '', 0, '', ''),
(15, ' LUIS FERNANDO NICOLAS', 'ZALAZAR GARCIA', '28773900', '', 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dynamic_inputs_table`
--

CREATE TABLE `dynamic_inputs_table` (
  `id` int(11) NOT NULL,
  `input_value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dynamic_inputs_table`
--

INSERT INTO `dynamic_inputs_table` (`id`, `input_value`) VALUES
(232, ''),
(233, ''),
(234, ''),
(235, ''),
(236, ''),
(237, ''),
(238, ''),
(239, ''),
(240, ''),
(241, ''),
(242, ''),
(243, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(20) NOT NULL,
  `cuatrimestre` int(11) NOT NULL,
  `id_carrera_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `cuatrimestre`, `id_carrera_materia`) VALUES
(1, 'Programacion I', 1, 1),
(2, 'Sistemas de Informac', 1, 1),
(20, 'Programacion I', 1, 1),
(32, 'Energías Renovables', 1, 2),
(33, 'Energía Fotovoltáica', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `nuevo_dato` int(11) NOT NULL,
  `opciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persons`
--

INSERT INTO `persons` (`id`, `dni`, `nombre`, `apellido`, `edad`, `nuevo_dato`, `opciones`) VALUES
(1, 2222, 'pepe', 'gas', 22, 0, 0),
(23, 3, 'po', 'lk', 45, 2, 0),
(24, 1, 'tgt', 'yyy', 56, 4, 0),
(25, 2, 'eee', 'ddd', 33, 3, 0),
(26, 1, 'www', 'eee', 22, 4, 0),
(27, 2, 'eee', 'ddd', 23, 3, 0),
(28, 1, 'ooo', 'pppp', 12, 4, 0),
(29, 1, 'ooo', 'pppp', 12, 4, 0),
(30, 1, 'ooo', 'pppp', 12, 4, 0),
(31, 1, 'ooo', 'pppp', 12, 4, 0),
(32, 1, 'ooo', 'pppp', 12, 4, 0),
(33, 1, 'qqq', 'www', 0, 4, 0),
(34, 1, 'www', 'ssss', 22, 4, 3),
(35, 1, 'www', 'ssss', 22, 4, 2),
(36, 1, 'qqq', 'aaaa', 222, 4, 2),
(37, 1, 'qqq', 'aaaa', 222, 4, 2),
(38, 1, 'qqq', 'aaaa', 222, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla1`
--

CREATE TABLE `tabla1` (
  `id_tabla1` int(11) NOT NULL,
  `nombre1` varchar(20) NOT NULL,
  `apellido1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla1`
--

INSERT INTO `tabla1` (`id_tabla1`, `nombre1`, `apellido1`) VALUES
(1, 'pepe', 'gomez'),
(2, 'qq', 'ww'),
(3, '1', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla2`
--

CREATE TABLE `tabla2` (
  `id_tabla2` int(11) NOT NULL,
  `nombre2` varchar(20) NOT NULL,
  `apellido2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla2`
--

INSERT INTO `tabla2` (`id_tabla2`, `nombre2`, `apellido2`) VALUES
(1, 'ana', 'lopez'),
(2, 'alb', 'alb2'),
(3, 'eee', 'dddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `id_titulo` int(11) NOT NULL,
  `detalle_titulo` varchar(50) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`id_titulo`, `detalle_titulo`, `puntaje`) VALUES
(1, 'Título de Nivel Superior de cuatro años o más.', 9),
(2, 'Título de Nivel Superior de Bibliotecario de 3 año', 7),
(3, 'Títutlo de Fruticultor Enólogode Escuela de Enolog', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos_postgrado`
--

CREATE TABLE `titulos_postgrado` (
  `id_titulo_postgrado` int(11) NOT NULL,
  `detalle_postgrado` varchar(50) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `titulos_postgrado`
--

INSERT INTO `titulos_postgrado` (`id_titulo_postgrado`, `detalle_postgrado`, `puntaje`) VALUES
(1, 'doctorado', 4),
(2, 'maestria', 3),
(3, 'especializacion', 1.5),
(4, 'diplomatura', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id_valoracion` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `id_titulo` int(11) NOT NULL,
  `j1` int(11) NOT NULL,
  `j2` int(11) NOT NULL,
  `j3` int(11) NOT NULL,
  `id_materia_valoracion` int(11) NOT NULL,
  `id_condicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id_valoracion`, `dni`, `id_titulo`, `j1`, `j2`, `j3`, `id_materia_valoracion`, `id_condicion`) VALUES
(86, 22, 1, 2, 2, 2, 1, 1),
(87, 2323, 1, 4, 4, 3, 2, 1),
(88, 121, 1, 2, 3, 0, 1, 1),
(89, 111, 1, 1, 22, 2, 0, 1),
(90, 1, 1, 1, 2, 3, 0, 1),
(91, 111, 1, 222, 333, 111, 0, 1),
(92, 11, 2, 22, 33, 44, 0, 1),
(93, 1, 1, 2, 3, 4, 0, 1),
(94, 27269774, 1, 11, 22, 33, 0, 2),
(112, 29112233, 2, 1, 2, 3, 33, 1),
(113, 30996655, 2, 1, 2, 3, 2, 1),
(114, 45002255, 2, 1, 2, 3, 2, 1),
(115, 45789456, 2, 1, 2, 3, 2, 0),
(116, 12112, 1, 1, 2, 3, 2, 1),
(117, 112, 1, 1, 1, 1, 1, 1),
(118, 11, 1, 22, 33, 44, 1, 1),
(119, 111, 1, 22, 33, 11, 2, 1),
(120, 111, 1, 2, 3, 4, 2, 1),
(121, 111, 1, 2, 3, 4, 2, 1),
(122, 111, 1, 2, 3, 4, 2, 1),
(123, 111, 1, 2, 3, 4, 2, 1),
(124, 111, 1, 2, 3, 4, 2, 1),
(125, 111, 1, 2, 3, 4, 2, 1),
(126, 111, 1, 2, 3, 4, 2, 1),
(127, 11, 2, 1, 1, 1, 1, 1),
(128, 232, 2, 1, 1, 1, 2, 1),
(129, 1, 1, 2, 3, 4, 2, 1),
(130, 1, 1, 2, 3, 4, 2, 1),
(131, 1111, 1, 1, 2, 3, 1, 1),
(132, 1111, 1, 1, 2, 3, 1, 1),
(133, 111, 1, 1, 2, 3, 2, 1),
(134, 1212, 1, 1, 2, 3, 2, 1),
(135, 1111, 2, 1, 2, 3, 20, 1),
(136, 111, 1, 1, 2, 3, 1, 1),
(137, 111, 1, 1, 2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion_postgrado`
--

CREATE TABLE `valoracion_postgrado` (
  `id_postgrado` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_valoracion_postgrado` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_titulo_postgrado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `valoracion_postgrado`
--

INSERT INTO `valoracion_postgrado` (`id_postgrado`, `id_valoracion`, `detalle_valoracion_postgrado`, `fecha`, `id_titulo_postgrado`) VALUES
(63, 0, 'wewew', '2020-01-01', 2),
(64, 0, 'wwew', '2020-01-02', 2),
(65, 0, 'wewe', '2020-01-02', 2),
(66, 0, 'sds', '2020-01-02', 2),
(67, 0, 'wee', '2020-01-02', 2),
(68, 0, 'erere', '2020-01-02', 2),
(70, 95, 'siplo', '2020-01-02', 4),
(71, 114, 'wewew', '2020-01-02', 3),
(72, 114, 'sdsd', '2022-01-02', 2),
(73, 115, 'maestriiiii', '2020-01-01', 2),
(74, 115, 'diplo', '2022-01-01', 4),
(75, 116, 'especiali', '2023-01-01', 3),
(76, 117, 'eree', '2020-01-01', 2),
(77, 118, 'wewew', '2020-01-01', 2),
(78, 119, 'wew', '2020-01-02', 2),
(79, 126, 'ewew', '2020-01-02', 2),
(80, 127, 'ssd', '2020-01-02', 2),
(81, 128, 'wewe', '2020-01-02', 2),
(82, 129, 'sds', '2020-01-02', 2),
(83, 130, 'sdsd', '2020-01-02', 2),
(84, 131, 'sdsds', '2020-01-01', 2),
(85, 132, 'wewe', '2021-01-01', 2),
(86, 133, 'qqwqw', '2020-01-01', 3),
(87, 134, 'qwqwq', '2020-01-01', 2),
(88, 135, 'eee', '2021-01-01', 3),
(89, 137, 'www', '2020-01-01', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antecedentes_docentes`
--
ALTER TABLE `antecedentes_docentes`
  ADD PRIMARY KEY (`id_ant_doc`);

--
-- Indices de la tabla `antecedentes_laborales`
--
ALTER TABLE `antecedentes_laborales`
  ADD PRIMARY KEY (`id_ant_lab`);

--
-- Indices de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`id_capacitacion`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `condicion_docente`
--
ALTER TABLE `condicion_docente`
  ADD PRIMARY KEY (`id_condicion`);

--
-- Indices de la tabla `detalle_ant_doc`
--
ALTER TABLE `detalle_ant_doc`
  ADD PRIMARY KEY (`id_detalle_doc`);

--
-- Indices de la tabla `detalle_ant_lab`
--
ALTER TABLE `detalle_ant_lab`
  ADD PRIMARY KEY (`id_detalle_lab`);

--
-- Indices de la tabla `detalle_capacitacion`
--
ALTER TABLE `detalle_capacitacion`
  ADD PRIMARY KEY (`id_detalle_capacitacion`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dynamic_inputs_table`
--
ALTER TABLE `dynamic_inputs_table`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`),
  ADD KEY `id_carrera_materia` (`id_carrera_materia`);

--
-- Indices de la tabla `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla1`
--
ALTER TABLE `tabla1`
  ADD PRIMARY KEY (`id_tabla1`);

--
-- Indices de la tabla `tabla2`
--
ALTER TABLE `tabla2`
  ADD PRIMARY KEY (`id_tabla2`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id_titulo`);

--
-- Indices de la tabla `titulos_postgrado`
--
ALTER TABLE `titulos_postgrado`
  ADD PRIMARY KEY (`id_titulo_postgrado`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id_valoracion`);

--
-- Indices de la tabla `valoracion_postgrado`
--
ALTER TABLE `valoracion_postgrado`
  ADD PRIMARY KEY (`id_postgrado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antecedentes_docentes`
--
ALTER TABLE `antecedentes_docentes`
  MODIFY `id_ant_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `antecedentes_laborales`
--
ALTER TABLE `antecedentes_laborales`
  MODIFY `id_ant_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `id_capacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `condicion_docente`
--
ALTER TABLE `condicion_docente`
  MODIFY `id_condicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_ant_doc`
--
ALTER TABLE `detalle_ant_doc`
  MODIFY `id_detalle_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_ant_lab`
--
ALTER TABLE `detalle_ant_lab`
  MODIFY `id_detalle_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_capacitacion`
--
ALTER TABLE `detalle_capacitacion`
  MODIFY `id_detalle_capacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `dynamic_inputs_table`
--
ALTER TABLE `dynamic_inputs_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `tabla1`
--
ALTER TABLE `tabla1`
  MODIFY `id_tabla1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tabla2`
--
ALTER TABLE `tabla2`
  MODIFY `id_tabla2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `titulos_postgrado`
--
ALTER TABLE `titulos_postgrado`
  MODIFY `id_titulo_postgrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT de la tabla `valoracion_postgrado`
--
ALTER TABLE `valoracion_postgrado`
  MODIFY `id_postgrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`id_carrera_materia`) REFERENCES `carreras` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
