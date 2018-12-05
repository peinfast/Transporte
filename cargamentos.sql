-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2018 a las 18:19:07
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
  `CantidadUnidades` int(11) NOT NULL,
  `Destino` varchar(50) NOT NULL,
  `Servicio` varchar(50) NOT NULL,
  `FH_Carga` datetime NOT NULL,
  `Estatus` varchar(50) NOT NULL,
  `FH_Cedic` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usuario1` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL,
  `Cortina` int(10) NOT NULL,
  `FH_Arribo` datetime NOT NULL,
  `Usuario2` varchar(50) NOT NULL,
  `Estatus2` varchar(50) NOT NULL,
  `Observaciones2` text NOT NULL,
  `FH_Inicio_CarDesc` datetime NOT NULL,
  `Usuario3` varchar(50) NOT NULL,
  `Estatus3` varchar(50) NOT NULL,
  `Observaciones3` text NOT NULL,
  `FH_Conclu_CarDesc` datetime NOT NULL,
  `Usuario4` varchar(50) NOT NULL,
  `Estatus4` varchar(50) NOT NULL,
  `EstatusProducto` varchar(50) NOT NULL,
  `Observaciones4` text NOT NULL,
  `FH_Salida_Caseta` datetime NOT NULL,
  `Usuario5` varchar(50) NOT NULL,
  `Estatus5` varchar(50) NOT NULL,
  `Observaciones5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `folios`
--

INSERT INTO `folios` (`id`, `Folio`, `Area`, `Cliente`, `Marca`, `CantidadUnidades`, `Destino`, `Servicio`, `FH_Carga`, `Estatus`, `FH_Cedic`, `Usuario1`, `Observaciones`, `Cortina`, `FH_Arribo`, `Usuario2`, `Estatus2`, `Observaciones2`, `FH_Inicio_CarDesc`, `Usuario3`, `Estatus3`, `Observaciones3`, `FH_Conclu_CarDesc`, `Usuario4`, `Estatus4`, `EstatusProducto`, `Observaciones4`, `FH_Salida_Caseta`, `Usuario5`, `Estatus5`, `Observaciones5`) VALUES
(91, 'UPS15455', 'L1bre', 'UPS', 'VARIOS', 0, 'CEDIC', 'Recibo', '2018-11-25 14:00:00', 'Por arribar', '2018-11-27 01:45:34', '', '', 6, '2018-11-27 10:03:34', 'Diego Garcia Cruz', 'En patio', 'Todo OK', '2018-11-27 10:05:02', 'Jose Maria Pedraza Torres', 'En proceso de Carga y Descarga', 'Todo OK', '2018-11-27 10:05:37', 'Jose Maria Pedraza Torres', 'Carga/Descarga Concluida', 'Validado', 'Todo OK', '2018-11-27 10:06:38', 'Jose Maria Pedraza Torres', 'Liberado de Cedic', 'Sayonara'),
(92, 'UPS15456', 'L1bre', 'UPS', 'VARIOS', 0, 'CEDIC', 'Recibo', '2018-11-25 14:00:01', 'Por arribar', '2018-11-27 01:45:34', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '2018-11-27 10:18:54', 'Jose Maria Pedraza Torres', 'Liberado de Cedic', 'Sayonara'),
(95, 'UPS15459', 'L1bre', 'UPS', 'VARIOS', 0, 'CEDIC', 'Recibo', '2018-11-27 14:00:04', 'Por arribar', '2018-11-27 01:45:34', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '2018-11-27 10:24:36', 'Jose Maria Pedraza Torres', 'Liberado de Cedic', 'Sayonara'),
(96, 'L1b0001', 'L1bre', 'TELCEL', 'VARIOS', 1, 'Liverpool', 'Carga', '2018-11-29 18:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Pedro Fernandez Perez', 'Konnichiwa', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(99, 'L1b00040', 'L1bre', 'COSTCO', 'VARIOS', 5, 'Elektra', 'Carga', '2018-12-05 17:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Pedro Fernandez Perez', 'Konnichiwa', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(102, 'MOV0001', 'Movilidad', 'WALMART', 'VARIOS', 0, 'R8 MERIDA', 'Recibo', '2018-11-25 14:00:00', 'Por arribar', '2018-11-27 01:50:38', '', '', 4, '2018-12-03 15:16:22', 'Jose Maria Pedraza Torres', 'En patio', 'Todo OK', '2018-12-03 15:16:43', 'Jose Maria Pedraza Torres', 'En proceso de Carga y Descarga', 'Todo OK', '2018-12-03 15:17:03', 'Jose Maria Pedraza Torres', 'Carga/Descarga Concluida', 'Validado', 'Todo OK', '2018-12-03 15:17:35', 'Jose Maria Pedraza Torres', 'Liberado de Cedic', 'Sayonara'),
(103, 'MOV0002', 'Movilidad', 'MIXTECAS', 'VARIOS', 0, 'MIXTECAS', 'Recibo', '2018-11-25 14:00:01', 'Por arribar', '2018-11-27 01:50:38', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(104, 'MOV0003', 'Movilidad', 'WALMART', 'VARIOS', 0, 'CUAUTITLAN ', 'Recibo', '2018-11-25 14:00:02', 'Por arribar', '2018-11-27 01:50:38', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(105, 'MOV0004', 'Movilidad', 'TELCEL', 'VARIOS', 0, 'HIDALGO', 'Recibo', '2018-11-25 14:00:03', 'Por arribar', '2018-11-27 01:50:38', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(106, 'MOV0005', 'Movilidad', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Recibo', '2018-11-27 18:00:04', 'Por arribar', '2018-11-27 01:50:38', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(107, 'MOV0006', 'Movilidad', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Carga', '2018-11-27 18:00:05', 'Por arribar', '2018-11-27 01:50:38', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(108, 'MOV0007', 'Movilidad', 'MIXTECAS', 'VARIOS', 0, 'Liverpool', 'Carga', '2018-11-27 18:00:06', 'Por arribar', '2018-11-27 01:50:38', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(109, 'MOV0008', 'Movilidad', 'WALMART', 'VARIOS', 0, 'Elektra', 'Carga', '2018-11-27 18:00:07', 'Por arribar', '2018-11-27 01:50:38', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(110, 'MOV0009', 'Movilidad', 'COSCO', 'VARIOS', 0, 'Elektra', 'Carga', '2018-11-27 18:00:08', 'Por arribar', '2018-11-27 01:50:38', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(111, 'MOV0010', 'Movilidad', 'WALMART', 'VARIOS', 0, 'Walmart', 'Carga', '2018-11-27 18:00:09', 'Por arribar', '2018-11-27 01:50:38', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(113, 'LI0001', 'Logistica Inversa', 'WALMART', 'VARIOS', 0, 'R8 MERIDA', 'Recibo', '2018-11-25 14:00:00', 'Por arribar', '2018-11-27 01:55:01', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(114, 'LI0002', 'Logistica Inversa', 'MIXTECAS', 'VARIOS', 0, 'MIXTECAS', 'Recibo', '2018-11-25 14:00:01', 'Por arribar', '2018-11-27 01:55:01', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(115, 'LI0003', 'Logistica Inversa', 'WALMART', 'VARIOS', 0, 'CUAUTITLAN ', 'Devolucion', '2018-11-25 17:00:02', 'Por arribar', '2018-11-27 01:55:02', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(116, 'LI0004', 'Logistica Inversa', 'TELCEL', 'VARIOS', 0, 'HIDALGO', 'Devolucion', '2018-11-25 17:00:03', 'Por arribar', '2018-11-27 01:55:02', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(117, 'LI0005', 'Logistica Inversa', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Devolucion', '2018-11-25 17:00:04', 'Por arribar', '2018-11-27 01:55:02', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(118, 'LI0006', 'Logistica Inversa', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Devolucion', '2018-11-25 17:00:05', 'Por arribar', '2018-11-27 01:55:02', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(119, 'LI0007', 'Logistica Inversa', 'MIXTECAS', 'VARIOS', 0, 'Liverpool', 'Devolucion', '2018-11-25 19:00:06', 'Por arribar', '2018-11-27 01:55:02', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(120, 'LI0008', 'Logistica Inversa', 'WALMART', 'VARIOS', 0, 'Elektra', 'Devolucion', '2018-11-25 19:00:07', 'Por arribar', '2018-11-27 01:55:02', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(121, 'LI0009', 'Logistica Inversa', 'COSCO', 'VARIOS', 0, 'Elektra', 'Devolucion', '2018-11-25 19:00:08', 'Por arribar', '2018-11-27 01:55:02', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(122, 'LI0010', 'Logistica Inversa', 'WALMART', 'VARIOS', 0, 'Walmart', 'Devolucion', '2018-11-25 19:00:09', 'Por arribar', '2018-11-27 01:55:02', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(125, 'L1B00023', '', 'MIXTECAS', 'VARIOS', 1, 'MIXTECAS', 'Carga', '2018-11-29 14:00:00', 'Por arribar', '0000-00-00 00:00:00', '', 'Konnichiwa', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(126, 'PX0003', 'Gerente', 'WALMART', 'VARIOS', 1, 'CUAUTITLAN ', 'Carga', '2018-11-29 17:00:02', 'Por arribar', '0000-00-00 00:00:00', 'Juan Pablo Robles Beltran', 'Konnichiwa', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(127, 'PX0004', 'Proyectos', 'TELCEL', 'VARIOS', 0, 'HIDALGO', 'Recibo', '2018-11-27 17:00:03', 'Por arribar', '2018-11-27 01:57:26', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(128, 'PX0005', 'Proyectos', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Recibo', '2018-11-27 17:00:04', 'Por arribar', '2018-11-27 01:57:26', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(129, 'PX0006', 'Proyectos', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Carga', '2018-11-27 17:00:05', 'Por arribar', '2018-11-27 01:57:26', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(130, 'PX0007', 'Proyectos', 'MIXTECAS', 'VARIOS', 0, 'Liverpool', 'Carga', '2018-11-27 17:00:06', 'Por arribar', '2018-11-27 01:57:26', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(131, 'PX0008', 'Proyectos', 'WALMART', 'VARIOS', 0, 'Elektra', 'Carga', '2018-11-27 17:00:07', 'Por arribar', '2018-11-27 01:57:26', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(132, 'PX0009', 'Proyectos', 'COSCO', 'VARIOS', 0, 'Elektra', 'Carga', '2018-11-27 17:00:08', 'Por arribar', '2018-11-27 01:57:26', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(135, 'RT00001', 'Retail', 'Prueba', 'Prueba', 3, 'Prueba', 'Carga', '2018-11-27 12:00:00', 'Por arribar', '2018-11-27 14:44:45', '<br />\r\n<b>Notice</b>:  Undefined variable: row in', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(136, 'RT00001', 'Retail', 'Prueba', 'Prueba', 3, 'Prueba', 'Carga', '2018-11-27 12:00:00', 'Por arribar', '2018-11-27 14:54:28', '<br />\r\n<b>Notice</b>:  Undefined variable: row in', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(138, 'RT00002', 'Retail', 'Prueba', 'Prueba', 1, 'Prueba', 'Carga', '2018-11-27 10:00:00', 'Por arribar', '2018-11-27 15:24:11', '', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(139, 'RT00003', 'Retail', 'Prueba', 'Prueba', 2, 'Prueba', 'Carga', '2018-11-30 14:00:00', 'Por arribar', '2018-11-27 15:28:15', '', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(140, 'RT00004', 'Retail', 'Prueba', 'Prueba', 3, 'Prueba', 'Recibo', '2018-11-30 10:00:00', 'Por arribar', '2018-11-27 15:29:59', '<br />\r\n<b>Notice</b>:  Array to string conversion', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(141, 'RT00005', 'Retail', 'Pedrito', 'Prueba', 8, 'Prueba', 'Recibo', '2018-11-27 10:00:00', 'Por arribar', '2018-11-27 15:31:52', '<br />\r\n<b>Warning</b>:  mysqli_fetch_array() expe', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(142, 'RT00006', 'Retail', 'Pedrito', 'Prueba', 4, 'Prueba', 'Recibo', '2018-11-27 11:00:00', 'Por arribar', '2018-11-27 15:35:21', '', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(143, 'RT00007', 'Retail', 'Prueba', 'Prueba', 8, 'Prueba', 'Recibo', '2018-11-27 12:00:00', 'Por arribar', '2018-11-27 15:38:41', '', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(144, 'RT00008', 'Retail', 'Prueba', 'Prueba', 3, 'Prueba', 'Recibo', '2018-11-27 13:00:00', 'Por arribar', '2018-11-27 15:41:38', '', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(145, 'F001001', 'Recibo', 'Prueba', 'Prueba', 1, 'Prueba', 'Carga', '2018-11-30 14:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Aldo', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(149, 'PX0004', 'Gerente', 'TELCEL', 'VARIOS', 1, 'HIDALGO', 'Carga', '2018-11-27 17:00:03', 'Por arribar', '2018-11-28 22:44:59', 'Juan Pablo Robles Beltran', 'Konnichiwa', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(150, 'PX0001', 'Gerente', 'WALMART', 'VARIOS', 4, 'R8 MERIDA', 'Carga', '2018-11-25 14:00:00', 'Por arribar', '2018-11-29 00:34:09', 'Juan Pablo Robles Beltran', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(151, 'PX0001', 'Gerente', 'WALMART', 'VARIOS', 4, 'R8 MERIDA', 'Recibo', '2018-11-25 14:00:00', 'Por arribar', '2018-11-29 00:42:27', 'Juan Pablo Robles Beltran', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(152, 'PX0001', 'Gerente', 'WALMART', 'VARIOS', 4, 'R8 MERIDA', 'Carga', '2018-11-25 14:00:00', 'Por arribar', '2018-11-29 00:54:34', 'Juan Pablo Robles Beltran', 'Konnichiwa', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(154, 'L1B0012', 'L1bre', 'MIXTECAS', 'VARIOS', 0, 'MIXTECAS', 'Recibo', '2018-12-05 16:00:01', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(155, 'L1B0013', 'L1bre', 'WALMART', 'VARIOS', 0, 'CUAUTITLAN ', 'Recibo', '2018-12-05 16:00:02', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(156, 'L1B0014', 'L1bre', 'TELCEL', 'VARIOS', 0, 'HIDALGO', 'Recibo', '2018-12-05 16:00:03', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(157, 'L1B0015', 'L1bre', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Recibo', '2018-12-05 16:00:04', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(158, 'L1B0016', 'L1bre', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Carga', '2018-12-05 16:00:05', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(159, 'L1B0017', 'L1bre', 'MIXTECAS', 'VARIOS', 0, 'Liverpool', 'Carga', '2018-12-05 16:00:06', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(160, 'L1B0018', 'L1bre', 'WALMART', 'VARIOS', 0, 'Elektra', 'Carga', '2018-12-05 16:00:07', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(161, 'L1B0019', 'L1bre', 'COSCO', 'VARIOS', 0, 'Elektra', 'Carga', '2018-12-05 16:00:08', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(162, 'L1B0020', 'L1bre', 'WALMART', 'VARIOS', 0, 'Walmart', 'Carga', '2018-12-05 16:00:09', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(163, 'FO00011', 'Recibo', 'WALMART', 'VARIOS', 0, 'R8 MERIDA', 'Recibo', '2018-12-05 16:00:09', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(164, 'FO00012', 'Recibo', 'MIXTECAS', 'VARIOS', 0, 'MIXTECAS', 'Recibo', '2018-12-05 16:00:10', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(165, 'FO00013', 'Recibo', 'WALMART', 'VARIOS', 0, 'CUAUTITLAN ', 'Recibo', '2018-12-05 16:00:11', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(166, 'FO00014', 'Recibo', 'TELCEL', 'VARIOS', 0, 'HIDALGO', 'Recibo', '2018-12-05 16:00:12', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(167, 'FO00015', 'Recibo', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Recibo', '2018-12-05 16:00:13', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(168, 'FO00016', 'Recibo', 'TELCEL', 'VARIOS', 0, 'Liverpool', 'Recibo', '2018-12-05 16:00:14', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(169, 'FO00017', 'Recibo', 'MIXTECAS', 'VARIOS', 0, 'Liverpool', 'Recibo', '2018-12-05 16:00:15', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(170, 'FO00018', 'Recibo', 'WALMART', 'VARIOS', 0, 'Elektra', 'Recibo', '2018-12-05 16:00:16', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(171, 'FO00019', 'Recibo', 'COSCO', 'VARIOS', 0, 'Elektra', 'Recibo', '2018-12-05 16:00:17', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
(172, 'FO00020', 'Recibo', 'WALMART', 'VARIOS', 0, 'Walmart', 'Carga', '2018-12-05 16:00:18', 'Por arribar', '2018-12-04 00:28:58', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '');

--
-- Disparadores `folios`
--
DELIMITER $$
CREATE TRIGGER `after_update` AFTER UPDATE ON `folios` FOR EACH ROW INSERT INTO respaldo
   SET
    Folio=OLD.Folio,
     Area=OLD.Area, 
     Cliente=OLD.Cliente,
     Marca=OLD.Marca, 
     CantidadUnidades=OLD.CantidadUnidades, 
     Destino=OLD.Destino, 
     Servicio=OLD.Servicio, 
     FH_Carga=OLD.FH_Carga, 
     Estatus=OLD.Estatus, 
     FH_Cedic=OLD.FH_cedic, 
     Usuario1=OLD.Usuario1, 
     Observaciones=OLD.Observaciones, 
     Cortina=OLD.Cortina, 
     FH_Arribo=OLD.FH_Arribo, 
     Usuario2=OLD.Usuario2, 
     Estatus2=OLD.Estatus2, 
     Observaciones2=OLD.Observaciones2, 
     FH_Inicio_CarDesc=OLD.FH_Inicio_CarDesc, 
     Usuario3=OLD.Usuario3, 
     Estatus3=OLD.Estatus3, 
     Observaciones3=OLD.Observaciones3, 
     FH_Conclu_CarDesc=OLD.FH_Conclu_CarDesc, 
     Usuario4=OLD.Usuario4, 
     Estatus4=OLD.Estatus4, 
     EstatusProducto=OLD.EstatusProducto, 
     Observaciones4=OLD.Observaciones4, 
     FH_Salida_Caseta=OLD.FH_Salida_Caseta, 
     Usuario5=OLD.Usuario5, 
     Estatus5=OLD.Estatus5, 
     Observaciones5=OLD.Observaciones5,
     NFolio=NEW.Folio,
     NArea=NEW.Area, 
     NCliente=NEW.Cliente,
     NMarca=NEW.Marca, 
     NCantidadUnidades=NEW.CantidadUnidades, 
     NDestino=NEW.Destino, 
     NServicio=NEW.Servicio, 
     NFH_Carga=NEW.FH_Carga, 
     NEstatus=NEW.Estatus, 
     NFH_Cedic=NEW.FH_cedic, 
     NUsuario1=NEW.Usuario1, 
     NObservaciones=NEW.Observaciones, 
     NCortina=NEW.Cortina, 
     NFH_Arribo=NEW.FH_Arribo, 
     NUsuario2=NEW.Usuario2, 
     NEstatus2=NEW.Estatus2, 
     NObservaciones2=NEW.Observaciones2, 
     NFH_Inicio_CarDesc=NEW.FH_Inicio_CarDesc, 
     NUsuario3=NEW.Usuario3, 
     NEstatus3=NEW.Estatus3, 
     NObservaciones3=NEW.Observaciones3, 
     NFH_Conclu_CarDesc=NEW.FH_Conclu_CarDesc, 
     NUsuario4=NEW.Usuario4, 
     NEstatus4=NEW.Estatus4, 
     NEstatusProducto=NEW.EstatusProducto, 
     NObservaciones4=NEW.Observaciones4, 
     NFH_Salida_Caseta=NEW.FH_Salida_Caseta, 
     NUsuario5=NEW.Usuario5, 
     NEstatus5=NEW.Estatus5, 
     NObservaciones5=NEW.Observaciones5
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `delete_folio` AFTER DELETE ON `folios` FOR EACH ROW insert into respaldo 
     SET 
     Folio=OLD.Folio,
     Area=OLD.Area, 
     Cliente=OLD.Cliente,
     Marca=OLD.Marca, 
     CantidadUnidades=OLD.CantidadUnidades, 
     Destino=OLD.Destino, 
     Servicio=OLD.Servicio, 
     FH_Carga=OLD.FH_Carga, 
     Estatus=OLD.Estatus, 
     FH_Cedic=OLD.FH_cedic, 
     Usuario1=OLD.Usuario1, 
     Observaciones=OLD.Observaciones, 
     Cortina=OLD.Cortina, 
     FH_Arribo=OLD.FH_Arribo, 
     Usuario2=OLD.Usuario2, 
     Estatus2=OLD.Estatus2, 
     Observaciones2=OLD.Observaciones2, 
     FH_Inicio_CarDesc=OLD.FH_Inicio_CarDesc, 
     Usuario3=OLD.Usuario3, 
     Estatus3=OLD.Estatus3, 
     Observaciones3=OLD.Observaciones3, 
     FH_Conclu_CarDesc=OLD.FH_Conclu_CarDesc, 
     Usuario4=OLD.Usuario4, 
     Estatus4=OLD.Estatus4, 
     EstatusProducto=OLD.EstatusProducto, 
     Observaciones4=OLD.Observaciones4, 
     FH_Salida_Caseta=OLD.FH_Salida_Caseta, 
     Usuario5=OLD.Usuario5, 
     Estatus5=OLD.Estatus5, 
     Observaciones5=OLD.Observaciones5
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldo`
--

CREATE TABLE `respaldo` (
  `FechaActual` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Folio` varchar(12) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Cliente` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `CantidadUnidades` int(11) NOT NULL,
  `Destino` varchar(50) NOT NULL,
  `Servicio` varchar(50) NOT NULL,
  `FH_Carga` datetime NOT NULL,
  `Estatus` varchar(50) NOT NULL,
  `FH_Cedic` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Usuario1` varchar(50) NOT NULL,
  `Observaciones` text NOT NULL,
  `Cortina` int(10) NOT NULL,
  `FH_Arribo` datetime NOT NULL,
  `Usuario2` varchar(50) NOT NULL,
  `Estatus2` varchar(50) NOT NULL,
  `Observaciones2` text NOT NULL,
  `FH_Inicio_CarDesc` datetime NOT NULL,
  `Usuario3` varchar(50) NOT NULL,
  `Estatus3` varchar(50) NOT NULL,
  `Observaciones3` text NOT NULL,
  `FH_Conclu_CarDesc` datetime NOT NULL,
  `Usuario4` varchar(50) NOT NULL,
  `Estatus4` varchar(50) NOT NULL,
  `EstatusProducto` varchar(50) NOT NULL,
  `Observaciones4` text NOT NULL,
  `FH_Salida_Caseta` datetime NOT NULL,
  `Usuario5` varchar(50) NOT NULL,
  `Estatus5` varchar(50) NOT NULL,
  `Observaciones5` text NOT NULL,
  `NFolio` varchar(12) NOT NULL,
  `NArea` varchar(50) NOT NULL,
  `NCliente` varchar(50) NOT NULL,
  `NMarca` varchar(50) NOT NULL,
  `NCantidadUnidades` int(11) NOT NULL,
  `NDestino` varchar(50) NOT NULL,
  `NServicio` varchar(50) NOT NULL,
  `NFH_Carga` datetime NOT NULL,
  `NEstatus` varchar(50) NOT NULL,
  `NFH_Cedic` datetime NOT NULL,
  `NUsuario1` varchar(50) NOT NULL,
  `NObservaciones` text NOT NULL,
  `NCortina` int(10) NOT NULL,
  `NFH_Arribo` datetime NOT NULL,
  `NUsuario2` varchar(50) NOT NULL,
  `NEstatus2` varchar(50) NOT NULL,
  `NObservaciones2` text NOT NULL,
  `NFH_Inicio_CarDesc` datetime NOT NULL,
  `NUsuario3` varchar(50) NOT NULL,
  `NEstatus3` varchar(50) NOT NULL,
  `NObservaciones3` text NOT NULL,
  `NFH_Conclu_CarDesc` datetime NOT NULL,
  `NUsuario4` varchar(50) NOT NULL,
  `NEstatus4` varchar(50) NOT NULL,
  `NEstatusProducto` varchar(50) NOT NULL,
  `NObservaciones4` text NOT NULL,
  `NFH_Salida_Caseta` datetime NOT NULL,
  `NUsuario5` varchar(50) NOT NULL,
  `NEstatus5` varchar(50) NOT NULL,
  `NObservaciones5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respaldo`
--

INSERT INTO `respaldo` (`FechaActual`, `Folio`, `Area`, `Cliente`, `Marca`, `CantidadUnidades`, `Destino`, `Servicio`, `FH_Carga`, `Estatus`, `FH_Cedic`, `Usuario1`, `Observaciones`, `Cortina`, `FH_Arribo`, `Usuario2`, `Estatus2`, `Observaciones2`, `FH_Inicio_CarDesc`, `Usuario3`, `Estatus3`, `Observaciones3`, `FH_Conclu_CarDesc`, `Usuario4`, `Estatus4`, `EstatusProducto`, `Observaciones4`, `FH_Salida_Caseta`, `Usuario5`, `Estatus5`, `Observaciones5`, `NFolio`, `NArea`, `NCliente`, `NMarca`, `NCantidadUnidades`, `NDestino`, `NServicio`, `NFH_Carga`, `NEstatus`, `NFH_Cedic`, `NUsuario1`, `NObservaciones`, `NCortina`, `NFH_Arribo`, `NUsuario2`, `NEstatus2`, `NObservaciones2`, `NFH_Inicio_CarDesc`, `NUsuario3`, `NEstatus3`, `NObservaciones3`, `NFH_Conclu_CarDesc`, `NUsuario4`, `NEstatus4`, `NEstatusProducto`, `NObservaciones4`, `NFH_Salida_Caseta`, `NUsuario5`, `NEstatus5`, `NObservaciones5`) VALUES
('2018-12-04 16:49:40', 'L1b00030', 'L1bre', 'WALMART', 'VARIOS', 1, 'Elektra', 'Carga', '2018-11-27 14:00:07', 'Por arribar', '0000-00-00 00:00:00', 'Pedro Fernandez Perez', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
('2018-12-04 16:49:40', 'L1B0011', 'L1bre', 'WALMART', 'VARIOS', 0, 'R8 MERIDA', 'Recibo', '2018-12-05 16:00:00', 'Por arribar', '2018-12-03 22:06:03', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
('2018-12-04 16:49:40', 'L1B00021', 'L1bre', 'Prueba', 'Prueba', 1, 'Prueba', 'Carga', '2018-11-29 19:30:00', 'Por arribar', '0000-00-00 00:00:00', 'Pedro Fernandez Perez', 'Registro de prueba', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
('2018-12-04 16:49:40', 'L1b0004', 'L1bre', 'COSCO', 'VARIOS', 0, 'Elektra', 'Carga', '2018-11-27 14:00:08', 'Por arribar', '2018-11-27 01:45:34', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', 'L1b00040', 'L1bre', 'COSTCO', 'VARIOS', 5, 'Elektra', 'Carga', '2018-12-05 17:00:00', 'Por arribar', '0000-00-00 00:00:00', 'Pedro Fernandez Perez', 'Konnichiwa', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', ''),
('2018-12-04 16:49:40', 'L1b0005', 'L1bre', 'ESI', 'VARIOS', 0, 'Walmart', 'Carga', '2018-11-27 14:00:09', 'Por arribar', '2018-11-27 01:45:34', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', 0, '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '', '', '', '', '0000-00-00 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `area` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `pass`, `area`, `tipo`) VALUES
(1, 'Diego Garcia Cruz', 'Diego', '123456', 'Caseta', ''),
(2, 'Jose Maria Pedraza Torres', 'Jose', '123456', 'Prevension', ''),
(3, 'Juan Pablo Robles Beltran', 'Juan', '123456', 'Gerente', ''),
(4, 'Pedro Fernandez Perez', 'Pedro', '123456', 'L1bre', ''),
(5, 'Josmar Ortega Cabañas', 'JosOrt', 'Prevension23', 'Prevension', ''),
(6, 'Jose Carlos Trujillo Mendiola', 'Trujillo133', 'Balantay133', 'Prevension', ''),
(7, 'Rutilo Amador Rodriguez', 'Amador', 'Cabo23', 'Prevension', ''),
(8, 'Luis David Maldonado Ruiz', 'LuisMaldonado', 'Maldonado123', 'Prevension', ''),
(9, 'Alondra Ortega Cabañas', 'AlondraOrtega', 'Ortega23', 'Prevension', ''),
(10, 'Yazmin del Carmen Rivero Jara', 'JaraYazmin', 'Rivero123', 'Prevension', ''),
(11, 'Krissia Casandra del Rivero Sanchez', 'KrissiaSanchez', 'Sanchez00', 'Prevension', ''),
(12, 'Nicolas San Juan', 'mxsann01', 'Bruno1410', 'Gerente', ''),
(13, 'Carlos Gonzalez', 'Carlos', '123456', 'Logistica Inversa', ''),
(14, 'Abigail Estevez', 'Abi', '123456', 'Proyectos', ''),
(15, 'Karla', 'Karla', '123456', 'Movilidad', ''),
(16, 'Aldo', 'Aldo', '123456', 'Recibo', ''),
(17, 'Maria', 'Maria', '123456', 'Retail', ''),
(18, 'Silvia Alfaro', 'mxalfs00', 'Ingramcedic18', 'L1bre', ''),
(19, 'Jaime Ortega', 'mxortj03', 'Mateo070817', 'L1bre', ''),
(20, 'Arely Dominguez Anaya', 'mxdoma00', 'Cedic.24', 'Movilidad', ''),
(21, 'Luis Alberto Roman Garcia', 'mxroml00', 'Welcome18', 'Movilidad', ''),
(22, 'Jesus Alberto Cuevas Cruz', 'mxcuea01', 'Cedic.20', 'Movilidad', ''),
(23, 'Christian Perez', 'mxperec0', 'Ingram2019', 'Recibo', ''),
(24, 'Aldo de Jesus', 'mxdeja00', 'Ingram2019', 'Recibo', ''),
(25, 'Daniela Chagolla', 'mxchad00', 'Ingram27', 'Retail', ''),
(26, 'Antonio Izquierdo', 'mxizqa01', 'Cedic.11', 'Retail', ''),
(27, 'Monserrat Garcia', 'mxgarm01', 'Cedic.18', 'Retail', ''),
(28, 'Leobardo Martinez', 'mxmarl03', 'Striker.18', 'Proyectos', ''),
(29, 'Edgar Reyes', 'mxreye01', 'Cedic.18', 'Proyectos', ''),
(30, 'Carlos Diaz Estrada', 'mxdiac00', 'Ingram.101', 'Movilidad', 'Leer'),
(31, 'Daniel Hernandez Facio', 'mxherd01', 'Cedic.2019', 'Movilidad', 'Leer'),
(32, 'Jose Luis Islas Perez', 'mxislj02', 'Cedic019', 'Movilidad', 'Leer'),
(33, 'Oliver Olivares Espinoza', 'mxolio00', 'Cedic.2019', 'Movilidad', 'Leer'),
(34, 'Salvador de la Cruz', 'MXDELS01', 'Cedic', 'Caseta', '');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
