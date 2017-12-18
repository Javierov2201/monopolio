-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2017 a las 01:10:57
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `monopolio`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `comboPreguntas` ()  NO SQL
Select ID_pregunta,pregunta from preguntas$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locaciones`
--

CREATE TABLE `locaciones` (
  `id_locacion` int(11) NOT NULL,
  `edit` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `locaciones`
--

INSERT INTO `locaciones` (`id_locacion`, `edit`, `nombre`) VALUES
(1, 0, 'GO'),
(2, 1, 'Ing. Industrial'),
(3, 0, 'Arca Comunal'),
(4, 1, 'Ing. Economica'),
(5, 1, 'Paga al Orce'),
(6, 1, 'Comedor UNI'),
(7, 1, 'Ing. Geologica'),
(8, 0, 'Chance'),
(9, 1, 'Ing. Civil'),
(10, 1, 'Ing. de Minas'),
(11, 0, 'Visita la carcel'),
(12, 1, 'Ing. de Petroleo'),
(13, 1, 'CTIC'),
(14, 1, 'Ing. Petroquimica'),
(15, 1, 'Ing. Textil'),
(16, 1, 'Gimnasio UNI'),
(17, 1, 'Quimica Pura'),
(18, 0, 'Arca comunal'),
(19, 1, 'Fisica Pura'),
(20, 1, 'Matematica'),
(21, 1, 'Pabellon central'),
(22, 1, 'Ing. Mecanica'),
(23, 0, 'Chance'),
(24, 1, 'Ing. Mecanico Electrica'),
(25, 1, 'Ing. Mecatronica'),
(26, 1, 'Coliseo UNI'),
(27, 1, 'Ing. Electrica'),
(28, 1, 'Ing. Electronica'),
(29, 1, 'Biblioteca Central'),
(30, 1, 'Ing. de Telec.'),
(31, 0, 'A la carcel'),
(32, 1, 'Arquitectura'),
(33, 1, 'Ing. Sanitaria'),
(34, 0, 'Arca comunal'),
(35, 1, 'Ing. Ambiental'),
(36, 1, 'Estadio Uni'),
(37, 0, 'Chance'),
(38, 1, 'Ing. Sistemas'),
(39, 1, 'Paga al ORCE'),
(40, 1, 'Ciencias de la computacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `ID_pregunta` int(11) NOT NULL,
  `pregunta` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `alternativa1` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `alternativa2` varchar(100) CHARACTER SET latin1 NOT NULL,
  `alternativa3` varchar(100) CHARACTER SET latin1 NOT NULL,
  `alternativa4` varchar(100) CHARACTER SET latin1 NOT NULL,
  `respuesta` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`ID_pregunta`, `pregunta`, `alternativa1`, `alternativa2`, `alternativa3`, `alternativa4`, `respuesta`) VALUES
(1, 'Â¿QuÃ© alternativa no qweqwees una forma de codificaciÃ³n del conocimiento?', 'rwwqeqwe ', 'werwqwe', 'rewqweqwe', 'werqweqwe', 'a2'),
(3, '11111', '1 ', '1', '1', '1', 'a1'),
(4, 'truytu', 'rwqe', 'ee', 'tyu', 'tyu', 'a2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `locaciones`
--
ALTER TABLE `locaciones`
  ADD PRIMARY KEY (`id_locacion`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`ID_pregunta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `locaciones`
--
ALTER TABLE `locaciones`
  MODIFY `id_locacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `ID_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
