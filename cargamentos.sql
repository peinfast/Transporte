-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2018 a las 01:54:01
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
  `Estatus` varchar(15) NOT NULL,
  `FH_Cedic` datetime NOT NULL,
  `Usuario1` varchar(50) NOT NULL,
  `Cortina` varchar(50) NOT NULL,
  `FH_Arribo` datetime NOT NULL,
  `Usuario2` varchar(50) NOT NULL,
  `FH_Inicio_CarDesc` datetime NOT NULL,
  `Usuario3` varchar(50) NOT NULL,
  `FH_Conclu_CarDesc` datetime NOT NULL,
  `Usuario4` varchar(50) NOT NULL,
  `FH_Salida_Caseta` int(11) NOT NULL,
  `Usuario5` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `folios`
--

INSERT INTO `folios` (`id`, `Folio`, `Area`, `Cliente`, `Marca`, `Cantidad`, `Destino`, `Servicio`, `FH_Carga`, `Estatus`, `FH_Cedic`, `Usuario1`, `Cortina`, `FH_Arribo`, `Usuario2`, `FH_Inicio_CarDesc`, `Usuario3`, `FH_Conclu_CarDesc`, `Usuario4`, `FH_Salida_Caseta`, `Usuario5`, `Observaciones`) VALUES
(1, 'AFAF562', 'Proyectos', 'Juanito', 'Polaroid', 100, 'Valle de Bravo, Mex', 'Devolucion', '2018-10-25 18:00:00', 'En patio', '2018-10-19 14:53:44', 'Rafa', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0, '', '');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
