-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 02:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `valorador`
--

-- --------------------------------------------------------

--
-- Table structure for table `antecedentes_docentes`
--

CREATE TABLE `antecedentes_docentes` (
  `id_ant_doc` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_ant_doc` varchar(100) NOT NULL,
  `fecha` int(11) NOT NULL,
  `id_detalle_doc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antecedentes_docentes`
--

INSERT INTO `antecedentes_docentes` (`id_ant_doc`, `id_valoracion`, `detalle_ant_doc`, `fecha`, `id_detalle_doc`) VALUES
(21, 156, 'xzxzz', 3, 2),
(22, 157, 'erere', 2, 2),
(23, 158, 'dfdfd', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `antecedentes_laborales`
--

CREATE TABLE `antecedentes_laborales` (
  `id_ant_lab` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_ant_lab` varchar(50) NOT NULL,
  `fecha` int(11) NOT NULL,
  `id_detalle_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antecedentes_laborales`
--

INSERT INTO `antecedentes_laborales` (`id_ant_lab`, `id_valoracion`, `detalle_ant_lab`, `fecha`, `id_detalle_lab`) VALUES
(21, 156, 'zxxzx', 4, 2),
(22, 157, 'ereer', 7, 1),
(23, 158, 'ddfd', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `capacitacion`
--

CREATE TABLE `capacitacion` (
  `id_capacitacion` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_capacitacion` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_detalle_capacitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `capacitacion`
--

INSERT INTO `capacitacion` (`id_capacitacion`, `id_valoracion`, `detalle_capacitacion`, `fecha`, `id_detalle_capacitacion`) VALUES
(46, 156, 'assa', '2021-01-01', 2),
(47, 157, 'fdfdfd', '2019-06-18', 2),
(48, 158, 'dffdf', '2021-01-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `nombre_carrera`) VALUES
(1, 'Tecnicatura Superior en Desarrollo de Software'),
(2, 'Energías Rebovables');

-- --------------------------------------------------------

--
-- Table structure for table `condicion_docente`
--

CREATE TABLE `condicion_docente` (
  `id_condicion` int(11) NOT NULL,
  `detalle_condicion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `condicion_docente`
--

INSERT INTO `condicion_docente` (`id_condicion`, `detalle_condicion`) VALUES
(1, 'Docente'),
(2, 'Habilitante');

-- --------------------------------------------------------

--
-- Table structure for table `detalle_ant_doc`
--

CREATE TABLE `detalle_ant_doc` (
  `id_detalle_doc` int(11) NOT NULL,
  `detalle_ant_doc` varchar(100) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detalle_ant_doc`
--

INSERT INTO `detalle_ant_doc` (`id_detalle_doc`, `detalle_ant_doc`, `puntaje`) VALUES
(1, 'Antiguedad en el espacio curricular o equivalente en el nivel Superior Técnico.', 1.5),
(2, 'Antiguedad en otros espacios curriculares del nivel Superior Técnico.', 1),
(3, 'Antiguedad en otros espacios curriculares del nivel Superior Técnico.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `detalle_ant_lab`
--

CREATE TABLE `detalle_ant_lab` (
  `id_detalle_lab` int(11) NOT NULL,
  `detalle_ant_lab` varchar(100) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detalle_ant_lab`
--

INSERT INTO `detalle_ant_lab` (`id_detalle_lab`, `detalle_ant_lab`, `puntaje`) VALUES
(1, 'Antecedentes en empreas, PyMes, organismos del estado no mayor a 15 años a la fecha de postulación.', 0.5),
(2, 'Antecedentes en empreas, PyMes, y/o emprendimientos propios no mayor a 15 años a la fecha de postula', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detalle_capacitacion`
--

CREATE TABLE `detalle_capacitacion` (
  `id_detalle_capacitacion` int(11) NOT NULL,
  `detalle` varchar(50) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detalle_capacitacion`
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
-- Table structure for table `docente`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docente`
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
-- Table structure for table `dynamic_inputs_table`
--

CREATE TABLE `dynamic_inputs_table` (
  `id` int(11) NOT NULL,
  `input_value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dynamic_inputs_table`
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
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(20) NOT NULL,
  `cuatrimestre` int(11) NOT NULL,
  `id_carrera_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `cuatrimestre`, `id_carrera_materia`) VALUES
(1, 'Programacion I', 1, 1),
(2, 'Sistemas de Informac', 1, 1),
(20, 'Programacion I', 1, 1),
(32, 'Energías Renovables', 1, 2),
(33, 'Energía Fotovoltáica', 2, 2),
(34, 'desarrollo de softwa', 1, 1),
(35, 'ambiente empresarial', 0, 1),
(36, 'ingles', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `nuevo_dato` int(11) NOT NULL,
  `opciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persons`
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
-- Table structure for table `tabla1`
--

CREATE TABLE `tabla1` (
  `id_tabla1` int(11) NOT NULL,
  `nombre1` varchar(20) NOT NULL,
  `apellido1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabla1`
--

INSERT INTO `tabla1` (`id_tabla1`, `nombre1`, `apellido1`) VALUES
(1, 'pepe', 'gomez'),
(2, 'qq', 'ww'),
(3, '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tabla2`
--

CREATE TABLE `tabla2` (
  `id_tabla2` int(11) NOT NULL,
  `nombre2` varchar(20) NOT NULL,
  `apellido2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabla2`
--

INSERT INTO `tabla2` (`id_tabla2`, `nombre2`, `apellido2`) VALUES
(1, 'ana', 'lopez'),
(2, 'alb', 'alb2'),
(3, 'eee', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `titulos`
--

CREATE TABLE `titulos` (
  `id_titulo` int(11) NOT NULL,
  `detalle_titulo` varchar(50) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titulos`
--

INSERT INTO `titulos` (`id_titulo`, `detalle_titulo`, `puntaje`) VALUES
(1, 'Título de Nivel Superior de cuatro años o más.', 9),
(2, 'Título de Nivel Superior de Bibliotecario de 3 año', 7),
(3, 'Títutlo de Fruticultor Enólogode Escuela de Enolog', 7);

-- --------------------------------------------------------

--
-- Table structure for table `titulos_postgrado`
--

CREATE TABLE `titulos_postgrado` (
  `id_titulo_postgrado` int(11) NOT NULL,
  `detalle_postgrado` varchar(50) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `titulos_postgrado`
--

INSERT INTO `titulos_postgrado` (`id_titulo_postgrado`, `detalle_postgrado`, `puntaje`) VALUES
(1, 'doctorado', 4),
(2, 'maestria', 3),
(3, 'especializacion', 1.5),
(4, 'diplomatura', 1);

-- --------------------------------------------------------

--
-- Table structure for table `valoracion`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valoracion`
--

INSERT INTO `valoracion` (`id_valoracion`, `dni`, `id_titulo`, `j1`, `j2`, `j3`, `id_materia_valoracion`, `id_condicion`) VALUES
(156, 555, 2, 1, 2, 3, 34, 1),
(157, 444, 1, 1, 2, 3, 34, 1),
(158, 666, 1, 1, 2, 3, 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `valoracion_postgrado`
--

CREATE TABLE `valoracion_postgrado` (
  `id_postgrado` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_valoracion_postgrado` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_titulo_postgrado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valoracion_postgrado`
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
(89, 137, 'www', '2020-01-01', 2),
(92, 146, 'wewew', '2020-02-02', 3),
(93, 147, 'wewew', '2020-01-02', 2),
(94, 147, 'ewewe', '2020-01-01', 2),
(95, 148, 'wewe', '2020-01-02', 2),
(96, 148, 'sdsds', '2020-01-02', 2),
(97, 149, 'diplomatura en ciberseguridad', '2018-01-01', 4),
(98, 149, 'diplomatura en desarrollo seguro', '2020-01-01', 4),
(99, 150, 'asasasa', '2020-01-01', 3),
(100, 150, 'csscs', '2020-01-02', 1),
(101, 151, 'maest', '2020-01-01', 2),
(102, 151, 'docccc', '2022-01-01', 1),
(103, 152, '', '0000-00-00', 1),
(104, 153, 'wewew', '2020-01-01', 2),
(105, 154, 'wwew', '2020-01-01', 3),
(106, 155, 'ssddsds', '2020-04-01', 2),
(107, 156, 'aaas', '2020-01-02', 2),
(108, 157, 'sddsds', '2020-01-01', 4),
(109, 158, 'dffd', '2020-01-01', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antecedentes_docentes`
--
ALTER TABLE `antecedentes_docentes`
  ADD PRIMARY KEY (`id_ant_doc`);

--
-- Indexes for table `antecedentes_laborales`
--
ALTER TABLE `antecedentes_laborales`
  ADD PRIMARY KEY (`id_ant_lab`);

--
-- Indexes for table `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`id_capacitacion`);

--
-- Indexes for table `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indexes for table `condicion_docente`
--
ALTER TABLE `condicion_docente`
  ADD PRIMARY KEY (`id_condicion`);

--
-- Indexes for table `detalle_ant_doc`
--
ALTER TABLE `detalle_ant_doc`
  ADD PRIMARY KEY (`id_detalle_doc`);

--
-- Indexes for table `detalle_ant_lab`
--
ALTER TABLE `detalle_ant_lab`
  ADD PRIMARY KEY (`id_detalle_lab`);

--
-- Indexes for table `detalle_capacitacion`
--
ALTER TABLE `detalle_capacitacion`
  ADD PRIMARY KEY (`id_detalle_capacitacion`);

--
-- Indexes for table `dynamic_inputs_table`
--
ALTER TABLE `dynamic_inputs_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`),
  ADD KEY `id_carrera_materia` (`id_carrera_materia`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabla1`
--
ALTER TABLE `tabla1`
  ADD PRIMARY KEY (`id_tabla1`);

--
-- Indexes for table `tabla2`
--
ALTER TABLE `tabla2`
  ADD PRIMARY KEY (`id_tabla2`);

--
-- Indexes for table `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id_titulo`);

--
-- Indexes for table `titulos_postgrado`
--
ALTER TABLE `titulos_postgrado`
  ADD PRIMARY KEY (`id_titulo_postgrado`);

--
-- Indexes for table `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`id_valoracion`);

--
-- Indexes for table `valoracion_postgrado`
--
ALTER TABLE `valoracion_postgrado`
  ADD PRIMARY KEY (`id_postgrado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antecedentes_docentes`
--
ALTER TABLE `antecedentes_docentes`
  MODIFY `id_ant_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `antecedentes_laborales`
--
ALTER TABLE `antecedentes_laborales`
  MODIFY `id_ant_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `id_capacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `condicion_docente`
--
ALTER TABLE `condicion_docente`
  MODIFY `id_condicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detalle_ant_doc`
--
ALTER TABLE `detalle_ant_doc`
  MODIFY `id_detalle_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detalle_ant_lab`
--
ALTER TABLE `detalle_ant_lab`
  MODIFY `id_detalle_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detalle_capacitacion`
--
ALTER TABLE `detalle_capacitacion`
  MODIFY `id_detalle_capacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dynamic_inputs_table`
--
ALTER TABLE `dynamic_inputs_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tabla1`
--
ALTER TABLE `tabla1`
  MODIFY `id_tabla1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabla2`
--
ALTER TABLE `tabla2`
  MODIFY `id_tabla2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `titulos_postgrado`
--
ALTER TABLE `titulos_postgrado`
  MODIFY `id_titulo_postgrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `valoracion_postgrado`
--
ALTER TABLE `valoracion_postgrado`
  MODIFY `id_postgrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`id_carrera_materia`) REFERENCES `carreras` (`id_carrera`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
