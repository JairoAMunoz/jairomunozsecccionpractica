-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-08-2022 a las 18:33:01
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base1`
--
CREATE DATABASE IF NOT EXISTS `base1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `base1`;

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `base2` ()  CREATE DATABASE IF NOT EXISTS base1 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `datos11` (`nombrea` VARCHAR(20), `cedulaa` INT(11))   BEGIN 
DECLARE contador INT;
SET contador = 1;
WHILE contador <= 100 DO
INSERT INTO tabla1(nombre, cedula) VALUES (nombrea, cedulaa+contador);
if contador>=50 THEN
INSERT INTO tabla2(nombre, cedula) VALUES (nombrea, cedulaa+contador);
END IF;
SET contador = contador + 1;
 END WHILE;
SET contador = 1;
WHILE contador <= 20 DO
DELETE FROM tabla1 WHERE tabla1.id = contador;
SET contador = contador + 1;
 END WHILE;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla1`
--

CREATE TABLE `tabla1` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabla1`
--

INSERT INTO `tabla1` (`id`, `nombre`, `cedula`) VALUES
(21, 'JAIRO', 144),
(22, 'JAIRO', 145),
(23, 'JAIRO', 146),
(24, 'JAIRO', 147),
(25, 'JAIRO', 148),
(26, 'JAIRO', 149),
(27, 'JAIRO', 150),
(28, 'JAIRO', 151),
(29, 'JAIRO', 152),
(30, 'JAIRO', 153),
(31, 'JAIRO', 154),
(32, 'JAIRO', 155),
(33, 'JAIRO', 156),
(34, 'JAIRO', 157),
(35, 'JAIRO', 158),
(36, 'JAIRO', 159),
(37, 'JAIRO', 160),
(38, 'JAIRO', 161),
(39, 'JAIRO', 162),
(40, 'JAIRO', 163),
(41, 'JAIRO', 164),
(42, 'JAIRO', 165),
(43, 'JAIRO', 166),
(44, 'JAIRO', 167),
(45, 'JAIRO', 168),
(46, 'JAIRO', 169),
(47, 'JAIRO', 170),
(48, 'JAIRO', 171),
(49, 'JAIRO', 172),
(50, 'JAIRO', 173),
(51, 'JAIRO', 174),
(52, 'JAIRO', 175),
(53, 'JAIRO', 176),
(54, 'JAIRO', 177),
(55, 'JAIRO', 178),
(56, 'JAIRO', 179),
(57, 'JAIRO', 180),
(58, 'JAIRO', 181),
(59, 'JAIRO', 182),
(60, 'JAIRO', 183),
(61, 'JAIRO', 184),
(62, 'JAIRO', 185),
(63, 'JAIRO', 186),
(64, 'JAIRO', 187),
(65, 'JAIRO', 188),
(66, 'JAIRO', 189),
(67, 'JAIRO', 190),
(68, 'JAIRO', 191),
(69, 'JAIRO', 192),
(70, 'JAIRO', 193),
(71, 'JAIRO', 194),
(72, 'JAIRO', 195),
(73, 'JAIRO', 196),
(74, 'JAIRO', 197),
(75, 'JAIRO', 198),
(76, 'JAIRO', 199),
(77, 'JAIRO', 200),
(78, 'JAIRO', 201),
(79, 'JAIRO', 202),
(80, 'JAIRO', 203),
(81, 'JAIRO', 204),
(82, 'JAIRO', 205),
(83, 'JAIRO', 206),
(84, 'JAIRO', 207),
(85, 'JAIRO', 208),
(86, 'JAIRO', 209),
(87, 'JAIRO', 210),
(88, 'JAIRO', 211),
(89, 'JAIRO', 212),
(90, 'JAIRO', 213),
(91, 'JAIRO', 214),
(92, 'JAIRO', 215),
(93, 'JAIRO', 216),
(94, 'JAIRO', 217),
(95, 'JAIRO', 218),
(96, 'JAIRO', 219),
(97, 'JAIRO', 220),
(98, 'JAIRO', 221),
(99, 'JAIRO', 222),
(100, 'JAIRO', 223);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla2`
--

CREATE TABLE `tabla2` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `cedula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabla2`
--

INSERT INTO `tabla2` (`id`, `nombre`, `cedula`) VALUES
(1, 'JAIRO', 173),
(2, 'JAIRO', 174),
(3, 'JAIRO', 175),
(4, 'JAIRO', 176),
(5, 'JAIRO', 177),
(6, 'JAIRO', 178),
(7, 'JAIRO', 179),
(8, 'JAIRO', 180),
(9, 'JAIRO', 181),
(10, 'JAIRO', 182),
(11, 'JAIRO', 183),
(12, 'JAIRO', 184),
(13, 'JAIRO', 185),
(14, 'JAIRO', 186),
(15, 'JAIRO', 187),
(16, 'JAIRO', 188),
(17, 'JAIRO', 189),
(18, 'JAIRO', 190),
(19, 'JAIRO', 191),
(20, 'JAIRO', 192),
(21, 'JAIRO', 193),
(22, 'JAIRO', 194),
(23, 'JAIRO', 195),
(24, 'JAIRO', 196),
(25, 'JAIRO', 197),
(26, 'JAIRO', 198),
(27, 'JAIRO', 199),
(28, 'JAIRO', 200),
(29, 'JAIRO', 201),
(30, 'JAIRO', 202),
(31, 'JAIRO', 203),
(32, 'JAIRO', 204),
(33, 'JAIRO', 205),
(34, 'JAIRO', 206),
(35, 'JAIRO', 207),
(36, 'JAIRO', 208),
(37, 'JAIRO', 209),
(38, 'JAIRO', 210),
(39, 'JAIRO', 211),
(40, 'JAIRO', 212),
(41, 'JAIRO', 213),
(42, 'JAIRO', 214),
(43, 'JAIRO', 215),
(44, 'JAIRO', 216),
(45, 'JAIRO', 217),
(46, 'JAIRO', 218),
(47, 'JAIRO', 219),
(48, 'JAIRO', 220),
(49, 'JAIRO', 221),
(50, 'JAIRO', 222),
(51, 'JAIRO', 223),
(52, 'JAIRO', 144);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `cedula` int(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `cedula`, `nombre`, `correo`, `pass`) VALUES
(1, 123, 'jairo', 'ingjama@ya', '123456'),
(4, 765, 'antonio', 'kdid@yahoo.es', '6543'),
(5, 7643, 'oscar', 'oscar@yahoo.es', '9494'),
(6, 9876, 'chata', 'chata@hotmail.com', '4a5a062217abffbdda8a550968a24c7a'),
(7, 5827, 'ANTONIO MUNOZ', 'ingjama@yahoo.es', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla1`
--
ALTER TABLE `tabla1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla2`
--
ALTER TABLE `tabla2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla1`
--
ALTER TABLE `tabla1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `tabla2`
--
ALTER TABLE `tabla2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
