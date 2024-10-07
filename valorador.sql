-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 01:51 AM
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
(23, 158, 'dfdfd', 2, 2),
(24, 159, 'sdssdsdsds', 2, 2),
(25, 159, 'dfdf', 2, 3),
(26, 160, 'erer', 10, 1),
(27, 161, '', 0, 1),
(28, 162, '', 0, 1),
(29, 163, '', 0, 1),
(30, 164, '', 0, 1),
(31, 165, 'wewew', 2, 1),
(32, 166, '', 0, 1),
(33, 167, '', 0, 1),
(34, 168, '', 0, 1),
(35, 169, '', 0, 1),
(36, 170, '', 0, 1),
(37, 171, '', 0, 1),
(38, 172, '', 0, 1),
(39, 173, '', 0, 1),
(40, 175, '', 0, 1),
(41, 176, '', 0, 1),
(42, 177, '', 0, 1),
(43, 178, '', 0, 1),
(44, 180, '', 0, 1),
(45, 181, '', 0, 1),
(46, 184, '', 0, 1),
(47, 185, '', 0, 1),
(48, 186, '', 0, 1),
(49, 187, '', 0, 1),
(50, 188, '', 0, 1),
(51, 189, '', 0, 1),
(52, 190, '', 0, 1),
(53, 191, '', 0, 1),
(54, 192, '', 0, 1),
(55, 202, '', 0, 1),
(56, 203, '', 0, 1),
(57, 204, '', 0, 1),
(58, 205, '', 0, 1),
(59, 206, '', 0, 1),
(60, 207, '', 0, 1),
(61, 208, 'ccc', 2, 1),
(62, 209, 'sds', 2, 2),
(63, 210, 'fdfd', 2, 1),
(64, 211, 'ddfd', 2, 1),
(65, 212, 'wewe', 2, 1),
(66, 213, 'erere', 2, 1);

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
(23, 158, 'ddfd', 2, 2),
(24, 159, 'erere', 2, 1),
(25, 160, 'sds', 10, 1),
(26, 161, '', 0, 1),
(27, 162, '', 0, 1),
(28, 163, '', 0, 1),
(29, 164, '', 0, 1),
(30, 165, 'e33', 2, 1),
(31, 166, '', 0, 1),
(32, 167, '', 0, 1),
(33, 168, '', 0, 1),
(34, 169, '', 0, 1),
(35, 170, '', 0, 1),
(36, 171, '', 0, 1),
(37, 172, '', 0, 1),
(38, 173, '', 0, 1),
(39, 175, '', 0, 1),
(40, 176, '', 0, 1),
(41, 177, '', 0, 1),
(42, 178, '', 0, 1),
(43, 180, '', 0, 1),
(44, 181, '', 0, 1),
(45, 184, '', 0, 1),
(46, 185, '', 0, 1),
(47, 186, '', 0, 1),
(48, 186, '', 0, 1),
(49, 187, '', 0, 1),
(50, 188, '', 0, 1),
(51, 189, '', 0, 1),
(52, 190, '', 0, 1),
(53, 191, '', 0, 1),
(54, 192, '', 0, 1),
(55, 202, '', 0, 1),
(56, 203, '', 0, 1),
(57, 204, '', 0, 1),
(58, 205, '', 0, 1),
(59, 206, '', 0, 1),
(60, 207, '', 0, 1),
(61, 208, '', 0, 1),
(62, 209, 'edeed', 2, 2),
(63, 210, 'dfdfd', 2, 1),
(64, 211, 'dfdfd', 2, 1),
(65, 212, 'ddf', 2, 1),
(66, 213, 'erer', 2, 1);

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
(48, 158, 'dffdf', '2021-01-01', 2),
(49, 159, 'eeere', '2020-01-02', 1),
(50, 159, 'wewew', '2019-02-02', 3),
(51, 160, 'erer', '2020-01-01', 1),
(69, 178, '', '0000-00-00', 1),
(70, 180, 'dfdd', '2021-01-01', 2),
(94, 229, 'con eval,d dias y no horas', '2024-10-03', 3),
(95, 230, '', '0000-00-00', 1),
(96, 231, '', '0000-00-00', 1);

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
(2, 'Energías Renovables');

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
-- Table structure for table `detalle_formacion_ofrecida`
--

CREATE TABLE `detalle_formacion_ofrecida` (
  `id_formacion_ofrecida` int(11) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detalle_formacion_ofrecida`
--

INSERT INTO `detalle_formacion_ofrecida` (`id_formacion_ofrecida`, `detalle`, `puntaje`) VALUES
(1, 'Cursos,seminarios,foros,etc.Con normativa de aval de organismo oficial. Más de 81 hs.', 0.25),
(2, 'Cursos,seminarios,foros,etc.Con normativa de aval de organismo oficial. Entre 41 y 80 hs.', 0.2),
(3, 'Cursos,seminarios,foros,etc.Con normativa de aval de organismo oficial. Entre 21 y 40 hs.', 0.15),
(4, 'Cursos,seminarios,foros,etc.Con normativa de aval de organismo oficial. Hasta 20 hs.', 0.1),
(5, 'Cursos,seminarios,foros,etc.Sin normativa de aval de organismo oficial. Por certificación.', 0.05),
(6, 'Congresos y Simposios.Eventos internacionales.Coordinador/moderador.', 0.25),
(7, 'Congresos y Simposios.Eventos internacionales.Expositor/Distante.', 0.3),
(9, 'Congresos y Simposios.Eventos nacionales.Coordinaodr/Moderador.', 0.2),
(10, 'Congresos y Simposios.Eventos nacionales.Expositor/Disertante.', 0.25),
(11, 'Congresos y Simposios.Eventos provinciales.Coordinador/moderador.', 0.1),
(12, 'Congresos y Simposios.Eventos provinciales.Expositor/Disertante.', 0.15),
(13, 'Congresos y Simposios.Eventos departamentales.Coordinador/moderador.', 0.05),
(14, 'Congresos y Simposios.Eventos departamentales.Expositor/Disertante.', 0.03),
(15, 'Congresos y Simposios.Eventos departamentales.Coordinador/moderador.', 0.05),
(16, 'Congresos y Simposios.Eventos departamentales.Expositor/Disertante.', 0.1),
(17, 'Congresos y Simposios.Eventos institucionales.Coordinador/moderador.', 0.03),
(18, 'Congresos y Simposios.Eventos institucionales.Expositor/Disertante.', 0.05);

-- --------------------------------------------------------

--
-- Table structure for table `detalle_investigacion`
--

CREATE TABLE `detalle_investigacion` (
  `id_detalle_investigacion` int(11) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detalle_investigacion`
--

INSERT INTO `detalle_investigacion` (`id_detalle_investigacion`, `detalle`, `puntaje`) VALUES
(1, 'Proyecto de investigación relacionado con el espacio curricular y/o la carrera.', 1),
(2, 'Publicaciones científicas y/o académcias.Libro.Autor', 0.5),
(3, 'Publicaciones científicas y/o académcias.Libro.Co-Autor', 0.25),
(4, 'Publicaciones científicas y/o académcias.Libro.Compilador', 0.1),
(5, 'Publicaciones científicas y/o académcias.Capítulo.Autor.', 0.25),
(6, 'Publicaciones científicas y/o académcias.Capítulo.Co-Autor.', 0.15),
(7, 'Publicaciones científicas y/o académcias.Capítulo.Compilador.', 0.1),
(8, 'Publicaciones científicas y/o académcias.Artículo.Autor.', 0.15),
(9, 'Publicaciones científicas y/o académcias.Artículo.Co-Autor.', 0.1),
(10, 'Publicaciones científicas y/o académcias.Artículo.Compilador.', 0.05),
(11, 'Otras publicaciones relativas a la especificidad de la carrera.', 0.2);

-- --------------------------------------------------------

--
-- Table structure for table `detalle_otros_ant_doc`
--

CREATE TABLE `detalle_otros_ant_doc` (
  `id_detalle_otro_ant` int(11) NOT NULL,
  `detalle_otros_ant` varchar(100) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detalle_otros_ant_doc`
--

INSERT INTO `detalle_otros_ant_doc` (`id_detalle_otro_ant`, `detalle_otros_ant`, `puntaje`) VALUES
(1, 'Expositor y/o autor de trabajos presentados en congresos, simposios,etc.', 0.7),
(2, 'Publicaciones relacionadas al espacio curricular a la carrera, de los últimos 5 años.Con referato', 1),
(3, 'Publicaciones relacionadas al espacio curricular a la carrera, de los últimos 5 años.Sin referato', 0.25),
(4, 'Participación en la elaboración de diseños curriculares de carreras de Nivel Superior Técnico en los', 1);

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
(9, ' RAQUEL EUGENIA', 'MICHALEK FORQUERA', '28262995', '', 0, '', ''),
(10, ' VERÓNICA NOELIA', 'MOLINA ATENCIO', '32007429', '', 0, '', ''),
(11, ' JOSE RUBEN', 'MOLL', '29588455', '', 0, '', ''),
(12, ' LAURA EMILIA', 'ROMERO', '31642634', '', 0, '', ''),
(13, ' VIVIANA EDITH', 'SANCHEZ', '29177212', '', 0, '', ''),
(14, ' MARIA CECILIA DEL ROSARIO', 'SILVA IBAÑEZ', '35188938', '', 0, '', ''),
(1, ' MARCELO HUMBERTO', 'ABALLAY SORIA', '25714353', '', 0, '', ''),
(2, ' ALICIA NOEMI', 'CELAYES FLORES', '30157746', '', 0, '', ''),
(3, ' MARIA CELINA', 'COTO HIDALGO', '37741589', '', 0, '', ''),
(4, ' ANALIA DEL PILAR', 'DELGADO', '20805413', '', 0, '', ''),
(5, ' SERGIO GASTON', 'GARBEROGLIO ELIZONDO', '27269774', '', 0, '', ''),
(6, ' ANALIA VERONICA', 'HEREDIA', '23922369', '', 0, '', ''),
(7, ' JUAN DE DIOS', 'LOPEZ', '30725012', '', 0, '', ''),
(9, ' RAQUEL EUGENIA', 'MICHALEK FORQUERA', '28262995', '', 0, '', ''),
(10, ' VERÓNICA NOELIA', 'MOLINA ATENCIO', '32007429', '', 0, '', ''),
(11, ' JOSE RUBEN', 'MOLL', '29588455', '', 0, '', ''),
(12, ' LAURA EMILIA', 'ROMERO', '31642634', '', 0, '', ''),
(13, ' VIVIANA EDITH', 'SANCHEZ', '29177212', '', 0, '', ''),
(14, ' MARIA CECILIA DEL ROSARIO', 'SILVA IBAÑEZ', '35188938', '', 0, '', ''),
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
(15, ' LUIS FERNANDO NICOLAS', 'ZALAZAR GARCIA', '28773900', '', 0, '', ''),
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
(15, ' LUIS FERNANDO NICOLAS', 'ZALAZAR GARCIA', '28773900', '', 0, '', ''),
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
(15, ' LUIS FERNANDO NICOLAS', 'ZALAZAR GARCIA', '28773900', '', 0, '', ''),
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
-- Table structure for table `formacion_ofrecida`
--

CREATE TABLE `formacion_ofrecida` (
  `id_formacion` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_formacion` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_formacion_ofrecida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `investigacion`
--

CREATE TABLE `investigacion` (
  `id_investigacion` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_investigacion` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_detalle_investigacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(40) NOT NULL,
  `cuatrimestre` int(11) NOT NULL,
  `id_carrera_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `cuatrimestre`, `id_carrera_materia`) VALUES
(1, 'Programacion I', 1, 1),
(2, 'Sistemas de Información I', 1, 1),
(20, 'Programacion I', 1, 2),
(32, 'Energías Renovables', 1, 2),
(33, 'Energía Fotovoltáica', 2, 2),
(34, 'desarrollo de software I', 1, 1),
(35, 'ambiente empresarial', 2, 1),
(36, 'inglés', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `otros_antecedentes_docentes`
--

CREATE TABLE `otros_antecedentes_docentes` (
  `id_detalle_ant` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_otros_ant_doc` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_detalle_otros_ant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otros_antecedentes_docentes`
--

INSERT INTO `otros_antecedentes_docentes` (`id_detalle_ant`, `id_valoracion`, `detalle_otros_ant_doc`, `fecha`, `id_detalle_otros_ant`) VALUES
(1, 202, 'rrrr', '2020-01-01', 0),
(2, 202, 'tttt', '2022-02-01', 0),
(3, 203, 'rtrtr', '2024-08-05', 0),
(4, 203, 'yyyyy', '2024-08-26', 0),
(5, 204, 'rrrr', '2024-08-06', 1),
(6, 204, 'ggg', '2024-08-19', 0),
(7, 205, 'ddd', '2024-08-21', 1),
(8, 205, 'fff', '2024-08-11', 4),
(9, 206, '', '0000-00-00', 1),
(10, 207, 'qqqq', '2024-08-12', 1),
(11, 207, 'dddd', '2024-08-06', 4),
(17, 227, 'public', '2024-10-01', 2),
(18, 228, '', '0000-00-00', 1),
(19, 228, '', '0000-00-00', 1),
(20, 229, 'public', '2024-10-01', 2),
(21, 230, 'public', '2024-10-01', 2),
(22, 231, 'public', '2024-10-01', 2);

-- --------------------------------------------------------

--
-- Table structure for table `otros_titulos`
--

CREATE TABLE `otros_titulos` (
  `id_otros_titulos` int(11) NOT NULL,
  `detalle_otros_titulos` varchar(200) NOT NULL,
  `puntaje` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otros_titulos`
--

INSERT INTO `otros_titulos` (`id_otros_titulos`, `detalle_otros_titulos`, `puntaje`) VALUES
(1, 'Docente de nivel superior universitario.', 2),
(2, 'Docente de nuvel superior.(No universitario)', 2),
(3, 'No docente de nivel superior universitario.', 1.5),
(4, 'No docene de nivel superior.(Intermedio Universitario, Tecnicaturas No Universitarias o denominación', 0.5),
(5, 'Otros (expedidospor instituciones oficailes contempladas por la formaciónsuperior o equivalente y qu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `edad`) VALUES
(0, 'trtrtttt', 'rtrtr', 222),
(0, 'trtrtttt', 'rtrtr', 222),
(0, 'trtrtttt', 'rtrtr', 222),
(0, 'trtrtttt', 'rtrtr', 222),
(0, 'trtrtttt', 'rtrtr', 222),
(0, 'pepe', 'honguito', 20),
(0, 'pepe', 'honguito', 20),
(0, 'Cintia', 'Moll', 55),
(0, 'Cintia', 'Moll', 20),
(0, 'duque', 'honguito', 36);

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
(1, 'Docente', 9),
(2, 'Habilitante', 7),
(3, 'Supletorio', 7);

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
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `contrasena`, `fecha_registro`) VALUES
(1, 'admin', '123', '2024-04-29 22:11:43');

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
  `id_materia_valoracion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valoracion`
--

INSERT INTO `valoracion` (`id_valoracion`, `dni`, `id_titulo`, `j1`, `j2`, `j3`, `id_materia_valoracion`) VALUES
(156, 28773900, 2, 1, 2, 3, 34),
(157, 444, 1, 1, 2, 3, 34),
(158, 666, 1, 1, 2, 3, 34),
(159, 232, 1, 323, 4343, 343, 1),
(160, 32887912, 1, 11, 11, 11, 1),
(161, 6666, 1, 34, 12, 43, 1),
(162, 555, 1, 343, 2323, 232, 1),
(163, 4554, 1, 444, 555, 444, 1),
(164, 222, 1, 445, 666, 22344, 1),
(182, 4545, 1, 445, 2323, 3434, 1),
(183, 4545, 1, 445, 2323, 3434, 1),
(184, 4545, 1, 445, 2323, 3434, 1),
(206, 30725012, 1, 1, 1, 1, 1),
(208, 20130177, 1, 1, 2, 3, 1),
(209, 21, 1, 2, 2, 2, 1),
(210, 27269774, 1, 1, 2, 3, 1),
(211, 30725012, 1, 34, 343, 343, 20),
(212, 27269774, 1, 343, 334, 343, 1),
(213, 5628000, 1, 12, 23, 34, 2),
(214, 1111111, 1, 1, 2, 3, 34),
(215, 232323, 1, 1, 2, 3, 33),
(216, 232323, 1, 1, 2, 3, 32),
(217, 232323, 1, 1, 2, 3, 32),
(218, 99999, 1, 1, 2, 3, 32),
(219, 27269774, 1, 1, 2, 3, 1),
(220, 27269774, 1, 1, 2, 3, 1),
(221, 27269774, 1, 1, 2, 3, 1),
(222, 27269774, 1, 1, 2, 3, 1),
(223, 27269773, 1, 1, 2, 3, 36),
(224, 27269779, 1, 1, 2, 3, 35),
(225, 27269774, 1, 1, 2, 3, 1),
(226, 1111111, 2, 1, 2, 3, 1),
(227, 232323, 1, 1, 2, 3, 1),
(228, 27269773, 1, 1, 2, 3, 1),
(229, 99999, 1, 1, 2, 3, 1),
(230, 27269774, 3, 1, 2, 3, 1),
(231, 27269774, 2, 1, 2, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `valoracion_otros_titulos`
--

CREATE TABLE `valoracion_otros_titulos` (
  `id_otros_t` int(11) NOT NULL,
  `id_valoracion` int(11) NOT NULL,
  `detalle_otros_titulos` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `id_otros_titulos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valoracion_otros_titulos`
--

INSERT INTO `valoracion_otros_titulos` (`id_otros_t`, `id_valoracion`, `detalle_otros_titulos`, `fecha`, `id_otros_titulos`) VALUES
(1, 184, '', '2024-08-07', 1),
(2, 184, '', '2024-06-04', 4),
(3, 185, '', '2024-07-27', 3),
(4, 185, '', '2024-07-02', 4),
(5, 186, '', '2024-08-06', 1),
(6, 186, '', '2024-08-12', 3),
(7, 187, '', '2024-08-12', 2),
(8, 188, '', '2024-08-13', 2),
(9, 189, '', '2024-08-19', 3),
(10, 190, '', '2024-08-06', 2),
(11, 191, '', '2024-08-05', 2),
(12, 192, 'aaaaaaa', '2024-08-14', 3),
(13, 202, '', '0000-00-00', 1),
(14, 203, '', '0000-00-00', 1),
(15, 204, '', '0000-00-00', 1),
(16, 205, '', '0000-00-00', 1),
(17, 206, 'eeee', '2024-08-06', 1),
(18, 206, 'fffff', '2024-08-14', 3),
(19, 207, '', '0000-00-00', 1),
(20, 208, 'sss', '2024-08-12', 1),
(21, 209, 'dsds', '2024-09-09', 3),
(22, 210, 'fdfdf', '2024-09-02', 2),
(23, 211, 'dgd', '2024-09-04', 2),
(24, 1, '1', '2020-01-01', 1),
(25, 1, '1', '2020-01-01', 1),
(26, 1, '1', '2020-01-01', 1);

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
(148, 217, 'diplo', '2024-10-01', 4),
(149, 218, 'maestria en ciber', '2020-03-04', 2),
(150, 219, 'doctorado1', '2024-10-01', 1),
(151, 219, 'diplomatura', '2024-10-02', 4),
(152, 220, 'doctorado1', '2024-10-01', 1),
(153, 220, 'diplomatura2221', '2024-10-03', 4),
(154, 221, 'mastria1', '2024-10-01', 2),
(155, 222, 'doctorado12', '2024-10-01', 2),
(156, 223, 'doctorado1', '2024-10-01', 2),
(157, 224, 'maestria en cibersegu88888', '2024-10-02', 3),
(158, 225, 'mastria1', '2024-10-01', 2),
(159, 226, 'doctorado1', '2024-10-03', 2),
(160, 227, 'mastria1', '2024-10-01', 2),
(161, 228, '', '0000-00-00', 1),
(162, 228, '', '0000-00-00', 1),
(163, 229, 'mastria1', '2024-10-01', 2),
(164, 230, 'mastria1', '2024-10-01', 2),
(165, 231, 'mastria1', '2024-10-01', 2);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `detalle_otros_ant_doc`
--
ALTER TABLE `detalle_otros_ant_doc`
  ADD PRIMARY KEY (`id_detalle_otro_ant`);

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
-- Indexes for table `otros_antecedentes_docentes`
--
ALTER TABLE `otros_antecedentes_docentes`
  ADD PRIMARY KEY (`id_detalle_ant`);

--
-- Indexes for table `otros_titulos`
--
ALTER TABLE `otros_titulos`
  ADD PRIMARY KEY (`id_otros_titulos`);

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
-- Indexes for table `valoracion_otros_titulos`
--
ALTER TABLE `valoracion_otros_titulos`
  ADD PRIMARY KEY (`id_otros_t`);

--
-- Indexes for table `valoracion_postgrado`
--
ALTER TABLE `valoracion_postgrado`
  ADD PRIMARY KEY (`id_postgrado`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `id_capacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

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
-- AUTO_INCREMENT for table `detalle_otros_ant_doc`
--
ALTER TABLE `detalle_otros_ant_doc`
  MODIFY `id_detalle_otro_ant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dynamic_inputs_table`
--
ALTER TABLE `dynamic_inputs_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `otros_antecedentes_docentes`
--
ALTER TABLE `otros_antecedentes_docentes`
  MODIFY `id_detalle_ant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `otros_titulos`
--
ALTER TABLE `otros_titulos`
  MODIFY `id_otros_titulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `valoracion_otros_titulos`
--
ALTER TABLE `valoracion_otros_titulos`
  MODIFY `id_otros_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `valoracion_postgrado`
--
ALTER TABLE `valoracion_postgrado`
  MODIFY `id_postgrado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

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
