-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2018 a las 22:45:26
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cargamentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `folios`
--

CREATE TABLE `folios` (
  `id` int(10) NOT NULL,
  `Folio` varchar(12) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Cliente` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `Destino` varchar(50) NOT NULL,
  `Servicio` varchar(50) NOT NULL,
  `FH_Carga` datetime NOT NULL,
  `Estatus` varchar(50) NOT NULL,
  `FH_Cedic` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usuario1` varchar(50) NOT NULL,
  `Cortina` int(10) NOT NULL,
  `FH_Arribo` datetime DEFAULT NULL,
  `Usuario2` varchar(50) DEFAULT NULL,
  `Estatus2` varchar(50) NOT NULL,
  `FH_Inicio_CarDesc` datetime DEFAULT NULL,
  `Usuario3` varchar(50) DEFAULT NULL,
  `Estatus3` varchar(50) NOT NULL,
  `FH_Conclu_CarDesc` datetime DEFAULT NULL,
  `Usuario4` varchar(50) DEFAULT NULL,
  `Estatus4` varchar(50) NOT NULL,
  `FH_Salida_Caseta` datetime DEFAULT NULL,
  `Usuario5` varchar(50) DEFAULT NULL,
  `Estatus5` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `folios`
--

INSERT INTO `folios` (`id`, `Folio`, `Area`, `Cliente`, `Marca`, `Cantidad`, `Destino`, `Servicio`, `FH_Carga`, `Estatus`, `FH_Cedic`, `Usuario1`, `Cortina`, `FH_Arribo`, `Usuario2`, `Estatus2`, `FH_Inicio_CarDesc`, `Usuario3`, `Estatus3`, `FH_Conclu_CarDesc`, `Usuario4`, `Estatus4`, `FH_Salida_Caseta`, `Usuario5`, `Estatus5`, `Observaciones`) VALUES
(1, 'AFAF562', 'Proyectos', 'Juanito', 'Polaroid', 100, 'Valle de Bravo, Mex', 'Devolucion', '2018-10-25 18:00:00', 'Por arribar', '2018-10-19 19:53:44', 'Rafa', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', ''),
(2, 'L1B001', 'Libre', 'Pedro', 'TCL', 40, 'DF, Mex', 'Devolucion', '2018-10-26 13:45:00', 'Por arribar', '2018-10-26 18:43:44', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', 'Hola'),
(3, 'L1B000001', 'Libre', 'Pedrito', 'Microsoft Xbox', 1000, 'Cuatitlan, Méx', '1', '2018-10-31 21:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(4, 'L1B000002', 'Libre', 'Silvia Alfaro', 'TCL', 10000, 'Toluca', '1', '2018-10-31 20:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(5, 'MV000123', 'L1bre', 'Prueba', 'Prueba', 12, 'Prueba', '1', '2018-11-01 13:50:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', 'Registro de prueba'),
(6, 'L1B000003', 'Libre', 'Pedrito', 'Prueba', 16, 'Toluca', '1', '2018-10-31 21:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(7, 'L1B000004', 'L1bre', 'Silvia Alfaro', 'Prueba', 1000, 'Prueba', 'Recibo', '2018-10-31 21:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(8, 'L1B000263', 'Libre', 'Pedrito', 'Microsoft Xbox', 10000, 'Toluca', 'Carga', '2018-10-31 20:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(9, 'L1B000005', 'Libre', 'Pedrito', 'Prueba', 1000, 'Toluca', 'Carga', '2018-10-31 21:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(10, 'L1B000006', 'L1bre', 'Pedrito', 'Prueba', 1000, 'Toluca', 'Carga', '2018-10-31 21:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(11, 'L1B000007', 'L1bre', 'Silvia Alfaro', 'Prueba', 1000, 'Toluca', 'Carga', '2018-10-31 21:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(12, 'L1B000007', 'L1bre', 'Pedrito', 'Microsoft Xbox', 1000, 'Toluca', 'Carga', '2018-10-31 21:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(13, 'L1B000008', 'Libre', 'Silvia Alfaro', 'Microsoft Xbox', 1000, 'Toluca', 'Carga', '2018-10-31 21:00:00', 'Por arribar', '2018-11-01 02:18:18', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', 'Registro de prueba'),
(14, 'HJH44', 'aaa', 'walmart', 'marquita', 10, 'MONTERREY', 'Carga', '2018-10-01 15:00:00', 'Por arribar', '2018-11-01 21:12:46', 'DIEGO', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', 'FUI AL BAÑO'),
(15, 'AFAF562', 'Proyectos', 'Juanito', 'Polaroid', 100, 'Valle de Bravo, Mex', 'Carga', '2018-10-25 18:00:00', 'Por arribar', '2018-11-02 01:35:58', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(16, 'L1B000010', 'L1bre', 'Prueba', 'Prueba', 10000, 'Toluca', 'Carga', '2018-11-02 21:00:00', 'Por arribar', '2018-11-02 17:27:56', '<br />\r\n<b>Notice</b>:  Undefined variable: user i', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-'),
(17, 'L1B0000011', 'Libre', 'Pedrito', 'Microsoft Xbox', 10000, 'Cuatitlan, Méx', 'Carga', '2018-11-02 21:00:00', 'Por arribar', '2018-11-02 17:48:24', 'Diego', 0, NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', NULL, NULL, '', '-');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `pass`) VALUES
(1, 'Diego', '123456'),
(2, 'Jose', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `folios`
--
ALTER TABLE `folios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `folios`
--
ALTER TABLE `folios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
