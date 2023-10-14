-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2023 a las 07:18:28
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_especies`
--

CREATE TABLE `tbl_especies` (
  `id_especie` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `creado_por` int(11) NOT NULL,
  `actualizado_por` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_especies`
--

INSERT INTO `tbl_especies` (`id_especie`, `nombre`, `estado`, `creado_por`, `actualizado_por`, `fecha`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(1, 'Perros', 1, 1, 1, '2023-09-21', '2023-09-22 05:42:28', '2023-09-22 05:42:28'),
(2, 'Gatos', 1, 2, 2, '2023-09-21', '2023-09-22 05:43:13', '2023-09-22 05:43:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pacientes`
--

CREATE TABLE `tbl_pacientes` (
  `id_paciente` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `enfermedades` text NOT NULL,
  `vacunas` text NOT NULL,
  `id_raza` int(11) NOT NULL,
  `imagen` text NOT NULL,
  `fecha` date NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  `creado_por` int(11) NOT NULL,
  `actualizado_por` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_pacientes`
--

INSERT INTO `tbl_pacientes` (`id_paciente`, `nombre`, `enfermedades`, `vacunas`, `id_raza`, `imagen`, `fecha`, `fecha_creacion`, `fecha_actualizacion`, `creado_por`, `actualizado_por`) VALUES
(1, 'Mimi', 'rabia', 'Distemper', 3, 'imagenes/xq2cpj1el8.jpg', '2023-10-14', '2023-10-14 06:50:11', '2023-10-14 07:09:12', 1, 1),
(4, 'Pompom', 'rabia, gripe', 'rabia', 3, 'imagenes/lrqmani82f.webp', '2023-10-14', '2023-10-14 06:59:07', '2023-10-14 07:13:59', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_razas`
--

CREATE TABLE `tbl_razas` (
  `id_raza` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `creado_por` int(11) NOT NULL,
  `actualizado_por` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  `id_especie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_razas`
--

INSERT INTO `tbl_razas` (`id_raza`, `nombre`, `estado`, `creado_por`, `actualizado_por`, `fecha`, `fecha_creacion`, `fecha_actualizacion`, `id_especie`) VALUES
(3, 'Mezclado', 1, 1, 1, '2023-09-21', '2023-09-22 05:44:11', '2023-10-14 06:48:21', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--
-- Error leyendo la estructura de la tabla veterinaria.tbl_roles: #1932 - Table &#039;veterinaria.tbl_roles&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla veterinaria.tbl_roles: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `veterinaria`.`tbl_roles`&#039; en la linea 1

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
