-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2019 a las 21:58:50
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id_mantenimiento` int(11) NOT NULL,
  `No_interno_maquina` int(11) NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`id_mantenimiento`, `No_interno_maquina`, `Descripcion`, `Fecha`) VALUES
(1, 1, 'Hola', '2019-06-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinas`
--

CREATE TABLE `maquinas` (
  `id_maquina` int(11) NOT NULL,
  `No_consecutivo` int(11) NOT NULL,
  `No_interno_maquina` int(11) NOT NULL,
  `Tipo_maquina` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(100) NOT NULL,
  `No_serie` varchar(50) NOT NULL,
  `Propiedad` varchar(10) NOT NULL,
  `Supervisor` varchar(50) NOT NULL,
  `id_supervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `maquinas`
--

INSERT INTO `maquinas` (`id_maquina`, `No_consecutivo`, `No_interno_maquina`, `Tipo_maquina`, `Marca`, `Modelo`, `No_serie`, `Propiedad`, `Supervisor`, `id_supervisor`) VALUES
(1, 1, 1, 'OVER LOCK', 'YAMATO', 'AZ-6020H-Y5DF', 'YK84837(104)', 'KDA', 'Moises', 1),
(2, 2, 2, 'OVER LOCK', 'YAMATO', 'AZ-6020G-Y5DF', 'SM13574(26)', 'KDA', 'Juana', 3),
(3, 3, 3, 'OVER LOCK', 'SIRUBA 4 HILOS', '737-F-504M2-04', '228513L', 'KDA', 'Carolina', 2),
(4, 4, 4, 'OVER LOCK', 'PEGASUS 4 HILOS', 'M-652-52-2X4', '9569116', 'KDA', 'Juana', 3),
(5, 5, 5, 'OVER LOCK', 'YAMATO', 'AZ-620H-105DF', 'YK84575(74)', 'KDA', 'Juana', 3),
(6, 6, 6, 'OVER LOCK', 'PEGASUS 4 HILOS', 'E256-130', 'S/N', 'KDA', 'Juana', 3),
(7, 7, 7, 'OVER LOCK', 'YAMATO', 'AZ-6020H-Y5DF', 'SM13407(7)', 'KDA', 'Moises', 1),
(8, 8, 8, 'OVER LOCK', 'YAMATO', 'AZ-6020H-Y5DF', 'YK84536(54)', 'KDA', 'Carolina', 2),
(9, 9, 9, 'OVER LOCK', 'YAMATO', 'AZ-6020H-Y5DF', 'YK84480(38)', 'KDA', 'Juana', 3),
(10, 10, 10, 'OVER LOCK', 'YAMATO', 'AZ-6020H-Y5DF', 'Y84503(45)', 'KDA', 'Moises', 1),
(11, 11, 11, 'OVER LOCK', 'YAMATO', 'AZ-6020H-Y5DF', 'YK84502(44)', 'KDA', 'Juana', 3),
(12, 12, 12, 'OVER LOCK', 'YAMATO', 'AZ-6020H-Y5DF', 'YK84424(48)', 'KDA', 'Moises', 1),
(13, 13, 13, 'OVER LOCK', 'YAMATO', 'AZ-6020H-Y5DF', 'YK84523(47)', 'KDA', 'Juana', 3),
(14, 14, 14, 'OVER LOCK', 'YAMATO', 'AZ-6020G-Y5DF', 'N13458(10)', 'KDA', 'Juana', 3),
(15, 15, 15, 'OVER LOCK', 'YAMATO', 'AZ-6020G-Y5DF', 'N13585(29)', 'KDA', 'Juana', 3),
(16, 16, 16, 'OVER LOCK', 'SIRUBA', '737S-504M2-24', '400052', 'KDA', 'Taller', 4),
(17, 17, 17, 'OVER LOCK', 'SIRUBA', '737S-504M2-24', '222470', 'KDA', 'Taller', 4),
(18, 18, 18, 'OVER LOCK', 'SIRUBA', '737S-504M2-24', '222745', 'KDA', 'Taller', 4),
(19, 19, 19, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '2005131', 'KDA', 'Juana', 3),
(20, 20, 20, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '590768', 'KDA', 'Carolina', 2),
(21, 21, 21, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '582462', 'KDA', 'Carolina', 2),
(22, 22, 22, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '1010443', 'KDA', 'Taller', 4),
(23, 23, 23, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '1008577', 'KDA', 'Carolina', 2),
(24, 24, 24, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '559870', 'KDA', 'Carolina', 2),
(25, 25, 25, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '550783', 'KDA', 'Carolina', 2),
(26, 26, 26, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '510188', 'KDA', 'Carolina', 2),
(27, 27, 27, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '2004832', 'KDA', 'Juana', 3),
(28, 28, 28, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '582039', 'KDA', 'Carolina', 2),
(29, 29, 29, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '1009675', 'KDA', 'Carolina', 2),
(30, 30, 30, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '2004829', 'KDA', 'Juana', 3),
(31, 31, 31, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '582311', 'KDA', 'Carolina', 2),
(32, 32, 32, 'OVER LOCK', 'SIRUBA', '747F-514M2-24', '582372', 'KDA', 'Carolina', 2),
(33, 33, 33, 'OVER LOCK', 'FOMAX', 'FX8500-CS-DF', 'KA26450', 'KDA', 'Taller', 4),
(34, 34, 34, 'OVER LOCK', 'FOMAX', 'FX8500-CS-DF', 'KA26462', 'KDA', 'Taller', 4),
(35, 35, 35, 'OVER LOCK', 'JUKI', 'MO-3743', 'MOOXJ29742', 'KDA', 'Taller', 4),
(36, 36, 36, 'OVER LOCK', 'JUKI', 'MO3916', 'MOOXC15973', 'KDA', 'Juana', 3),
(37, 37, 37, 'OVER LOCK', 'JUKI', 'MO3743', 'MOOWB181523', 'KDA', 'Taller', 4),
(38, 38, 38, 'OVER LOCK', 'PEGASUS', 'M652-52-2X4', '9577688', 'KDA', 'Juana', 3),
(39, 39, 39, 'OVER LOCK', 'PEGASUS', '5K-516-426-5X5', '8591160', 'KDA', 'Carolina', 2),
(40, 40, 40, 'OVER LOCK', 'PEGASUS', 'M652-52-2X4', '9580550', 'KDA', 'Carolina', 2),
(41, 41, 41, 'OVER LOCK', 'PEGASUS', 'M652-52-2X4', '9579094', 'KDA', 'Juana', 3),
(42, 42, 42, 'COVER', 'YAMATO', 'VC-2700-156-M', 'N857977(32)', 'KDA', 'Carolina', 2),
(43, 43, 43, 'COVER', 'YAMATO', 'VE-2713', 'VE74169(10)', 'KDA', 'Moises', 1),
(44, 44, 44, 'COVER', 'YAMATO', 'VC-2700-156-M', 'N92764(59)', 'KDA', 'Carolina', 2),
(45, 45, 45, 'COVER', 'YAMATO', 'VC-2700-156-M', 'N92815(82)', 'KDA', 'Carolina', 2),
(46, 46, 46, 'COVER', 'YAMATO', 'VC-2700-156-M', 'N92791(70)', 'KDA', 'Carolina', 2),
(47, 47, 47, 'COVER', 'YAMATO', 'VC-2700-156-M', 'N92755(56)', 'KDA', 'Taller', 4),
(48, 48, 48, 'COVER', 'YAMATO', 'VC-2700-156-M', 'N83267(20)', 'KDA', 'Carolina', 2),
(49, 49, 50, 'COVER', 'SIRUBA', 'COOO7EW162-364', '1132283', 'KDA', 'Moises', 1),
(50, 50, 51, 'COVER', 'SIRUBA', 'COOO7EW162-364', '1132313', 'KDA', 'Taller', 4),
(51, 51, 52, 'COVER', 'SIRUBA', 'COOO7EW162-364', '1132396', 'KDA', 'Juana', 3),
(52, 52, 53, 'COVER', 'SIRUBA', 'COOO7EW162-364', '1132387', 'KDA', 'Taller', 4),
(53, 53, 54, 'COVER', 'SIRUBA', 'COOO7EW162-364', '1132374', 'KDA', 'Carolina', 2),
(54, 54, 55, 'COVER', 'SIRUBA', 'COOO7EW162-364', '1132238', 'KDA', 'Moises', 1),
(55, 55, 56, 'COVER', 'SIRUBA', 'COOO7EW162-364', '1132411', 'KDA', 'Moises', 1),
(56, 56, 57, 'COVER', 'SIRUBA', 'COOO7EW162-364', '1132402', 'KDA', 'Taller', 4),
(57, 57, 58, 'COVER', 'SIRUBA', 'COOO7EW162-364', '1132276', 'KDA', 'Moises', 1),
(58, 58, 59, 'COVER', 'KANSAI SPECIAL ', 'RX-9803-A', 'KS925452K', 'KDA', 'Moises', 1),
(59, 59, 60, 'COVER', 'KANSAI SPECIAL ', 'RX-9803-A', 'KS928272K', 'KDA', 'Taller', 4),
(60, 60, 65, 'COVER', 'KANSAI SPECIAL ', 'RX-9803-A', 'KS925457K', 'KDA', 'Juana', 3),
(61, 61, 62, 'COVER', 'KANSAI SPECIAL ', 'RX-9803-A', 'KS928266K', 'KDA', 'Carolina', 2),
(62, 62, 63, 'COVER', 'KANSAI SPECIAL ', 'RX-9803-A', 'KS928289K', 'KDA', 'Juana', 3),
(63, 63, 64, 'COVER', 'KANSAI SPECIAL ', 'RX-9803-A', 'KS925475K', 'KDA', 'Carolina', 2),
(64, 64, 61, 'COVER', 'KANSAI SPECIAL ', 'RX-9803-A', 'KS925442K', 'KDA', 'Taller', 4),
(65, 65, 66, 'RECTA', 'SUNSTAR', 'KM-205-A-75', '31115655', 'KDA', 'Carolina', 2),
(66, 66, 67, 'RECTA', 'SUNSTAR', 'KM-235-AS', '33039887(93)', 'KDA', 'Moises', 1),
(67, 67, 68, 'RECTA', 'SUNSTAR', 'KM-235-AS', '33039985(103)', 'KDA', 'Moises', 1),
(68, 68, 70, 'RECTA', 'SUNSTAR', 'KM-235-AS', '33039867(87)', 'KDA', 'Carolina', 2),
(69, 69, 71, 'RECTA', 'SUNSTAR', 'KM-235-AS', '31123415', 'KDA', 'Moises', 1),
(70, 70, 72, 'RECTA', 'SUNSTAR', 'KM-235-AS', '96096640', 'KDA', 'Juana', 3),
(71, 71, 73, 'RECTA', 'SUNSTAR', 'KM-235-AS', '33032309(67)', 'KDA', 'Moises', 1),
(72, 72, 74, 'RECTA', 'SUNSTAR', 'KM-235-AS', '33038321(125)', 'KDA', 'Moises', 1),
(73, 73, 75, 'RECTA', 'SUNSTAR', 'KM-235-AS', '96096639', 'KDA', 'Juana', 3),
(74, 74, 76, 'RECTA', 'SUNSTAR', 'KM-235-AS', '33032273(62)', 'KDA', 'Juana', 3),
(75, 75, 77, 'RECTA', 'SUNSTAR', 'KM-235-AS', '33032329(123)', 'KDA', 'Carolina', 2),
(76, 76, 78, 'RECTA', 'SUNSTAR', 'KM-235-AS', '33039870(90)', 'KDA', 'Moises', 1),
(77, 77, 79, 'RECTA', 'SUNSTAR', 'KM-235-AS', '33032164(50)', 'KDA', 'Juana', 3),
(78, 78, 80, 'RECTA', 'SUNSTAR', 'KM-235-AS', '96096578', 'KDA', 'Moises', 1),
(79, 79, 81, 'RECTA', 'SUNSTAR', 'KM-235-AS', '96096635', 'KDA', 'Carolina', 2),
(80, 80, 82, 'RECTA', 'SUNSTAR', 'KM-235-AS', '96096636', 'KDA', 'Carolina', 2),
(81, 81, 83, 'RECTA', 'UNICORN', 'LS2H5100', '99010226', 'KDA', 'Taller', 4),
(82, 82, 84, 'RECTA', 'UNICORN', 'LS2H5100', '99010227', 'KDA', 'Carolina', 2),
(83, 83, 85, 'RECTA', 'UNICORN', 'LS2H5100', '99010223', 'KDA', 'Moises', 1),
(84, 84, 86, 'RECTA', 'UNICORN', 'LS2H5100', '99010218', 'KDA', 'Moises', 1),
(85, 85, 87, 'RECTA', 'UNICORN', 'LS2H5100', '99010219', 'KDA', 'Taller', 4),
(86, 86, 88, 'RECTA', 'UNICORN', 'LS2H5100', '99010217', 'KDA', 'Taller', 4),
(87, 87, 91, 'RECTA', 'BROTHER', 'DB2-B755-3A', 'B7077692', 'KDA', 'Carolina', 2),
(88, 88, 92, 'RECTA', 'BROTHER', 'DB2-B755-3A', 'B7074506', 'KDA', 'Juana', 3),
(89, 89, 93, 'RECTA', 'BROTHER', 'DB2-B755-3A', 'B7078027', 'KDA', 'Taller', 4),
(90, 90, 94, 'RECTA 2 AGUJAS', 'SINGER', '312', 'S/N', 'KDA', 'Juana', 3),
(91, 91, 95, 'RECTA 2 AGUJAS', 'SINGER', '312', 'S/N', 'KDA', 'Moises', 1),
(92, 92, 96, 'RECTA', 'JUKI', 'DDL5550-6', 'DDLUG80500', 'KDA', 'Taller', 4),
(93, 93, 97, 'RECTA', 'JUKI', 'DDL5550-6', 'DDLVA37945', 'KDA', 'Moises', 1),
(94, 94, 98, 'RECTA 2 AGUJAS', 'S/N', 'S/N', 'VERDE', 'KDA', 'Moises', 1),
(95, 95, 99, 'PRESILLA', 'BROTHER', 'S/N', 'S/N', 'KDA', 'Taller', 4),
(96, 96, 100, 'PRESILLA', 'BROTHER', 'KE-430C-02', 'M2125589', 'KDA', 'Moises', 1),
(97, 97, 101, 'PRESILLA', 'BROTHER', 'KE-430C-02', 'J9577887', 'KDA', 'Moises', 1),
(98, 98, 103, 'OJILLO DE METAL', 'TEKWING', 'T.K.M', '#4', 'KDA', 'Taller', 4),
(99, 99, 104, 'OJILLO DE METAL', 'TEKWING', 'T.K.M', '#5', 'KDA', 'Juana', 3),
(100, 100, 106, 'CODO', 'BROTHER', 'DTG-D926', 'S/N', 'KDA', 'Taller', 4),
(101, 101, 107, 'PRESILLA', 'JUKI', 'LK-1852', 'LKOUG12995', 'KDA', 'Juana', 3),
(102, 102, 108, 'MULTIAGUJAS', 'KANSAI SPECIAL ', 'DF-1404P', 'KS106013A', 'KDA', 'Taller', 4),
(103, 103, 109, 'CORTADORA', 'KM MACK', 'KS-AUS', '211241', 'KDA', 'Taller', 4),
(104, 104, 110, 'CORTADORA', 'EASTMAN (KVIFE SAVE)', 'UF306', 'E27140', 'KDA', 'Taller', 4),
(105, 105, 111, 'CORTADORA', 'EASTMAN (KVIFE SAVE)', 'UY274', 'D84677', 'KDA', 'Taller', 4),
(106, 106, 112, 'RECTA 2 AGUJAS', 'SUNSTAR', 'KM-740', '33039324', 'MEX MODE', 'Juana', 3),
(107, 107, 113, 'RECTA 2 AGUJAS', 'SUNSTAR', 'KM-740', '33039329(9)', 'MEX MODE', 'Juana', 3),
(108, 108, 114, 'RECTA 2 AGUJAS', 'SUNSTAR', 'KM-790', '32076255(6)', 'MEX MODE', 'Juana', 3),
(109, 109, 115, 'RECTA 2 AGUJAS', 'SUNSTAR', 'KM-790', '33039512(11)', 'MEX MODE', 'Moises', 1),
(110, 110, 116, 'RECTA ELECTRONICA', 'BROTHER EXEDRA', 'DB2-B737-413', 'H3590067', 'KDA', 'Moises', 1),
(111, 111, 117, 'RECTA ELECTRONICA', 'BROTHER EXEDRA', 'DB2-B737-413', 'D9570669', 'KDA', 'Moises', 1),
(112, 112, 118, 'RECTA ELECTRONICA', 'BROTHER EXEDRA', 'DB2-B737-413', 'S/N', 'KDA', 'Moises', 1),
(113, 113, 120, 'RECTA ELECTRONICA', 'TAIKO', 'TK-505-50', '94105546', 'KDA', 'Juana', 3),
(114, 114, 121, 'RECTA', 'SUNSTAR', 'KM-235', '32088050(27)', 'KDA', 'Carolina', 2),
(115, 115, 122, 'RECTA', 'SUNSTAR', 'KM-235', '33032330(14)', 'KDA', 'Moises', 1),
(116, 116, 123, 'RECTA', 'SUNSTAR', 'KM-235', '33039919(96)', 'KDA', 'Moises', 1),
(119, 0, 0, 'Tipo_maquina', 'Marca', 'Modelo', 'No_serie', 'Propiedad', 'Supervisor', 0),
(120, 0, 0, '', '', '', '', '', '', 0),
(121, 0, 0, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `produccion`
--

CREATE TABLE `produccion` (
  `id_produccion` int(11) NOT NULL,
  `Cantidad` varchar(50) NOT NULL,
  `id_superv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(45) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_proveedor`, `telefono`, `correo`) VALUES
(1, 'Juan', '246-105-9503', 'juan@proveedor.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisor`
--

CREATE TABLE `supervisor` (
  `id_supervisor` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `ap_paterno` varchar(45) DEFAULT NULL,
  `ap_materno` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `supervisor`
--

INSERT INTO `supervisor` (`id_supervisor`, `Nombre`, `ap_paterno`, `ap_materno`) VALUES
(1, 'Moises', 'Perez', 'Arce'),
(2, 'Carolina', 'Arroyo', 'Hernandez'),
(3, 'Juana', 'Deita', 'Sanchez'),
(4, 'Taller', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `ap_paterno` varchar(45) NOT NULL,
  `ap_materno` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `id_roluser` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `ap_paterno`, `ap_materno`, `email`, `password`, `id_roluser`) VALUES
(1, 'Administrador', 'Admin', 'Admin', 'administrador@kda.com', 'ac9689e2272427085e35b9d3e3e8bed88cb3434828b43b86fc0596cad4c6e270', 1),
(2, 'Empleado', 'Emp', 'Emp', 'empleado@kda.com', '0f0955f7fd0f7fe99be2bbf5a314bea63f486c0d97b38ba4f35b7e2c51a492fc', 2),
(3, 'Moises', 'Pérez', 'Arce', 'moises@kda.com', '5a5ce99ba7a482c8694a1634f5e15c8ab9635ef1ccc8ad23d0a1f7058cd52830', 3),
(4, 'Carolina', 'Arroyo', 'Herández', 'carolina@kda.com', '70715745f1c1126c644b041fe8962b88ccd873ffada8fee15912238602e80445', 4),
(5, 'Juana', 'Deita', 'Sánchez', 'juana@kda.com', '5e026d60d4f0f507116e10f3cd0e676f0b4687cc1320382360932957c3699f94', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`id_mantenimiento`);

--
-- Indices de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  ADD PRIMARY KEY (`id_maquina`);

--
-- Indices de la tabla `produccion`
--
ALTER TABLE `produccion`
  ADD PRIMARY KEY (`id_produccion`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id_supervisor`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  MODIFY `id_maquina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT de la tabla `produccion`
--
ALTER TABLE `produccion`
  MODIFY `id_produccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
