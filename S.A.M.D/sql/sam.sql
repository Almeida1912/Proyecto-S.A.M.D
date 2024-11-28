-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2024 a las 14:00:04
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `id_alqui` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `horario` time NOT NULL,
  `espacio` int(11) NOT NULL,
  `imagen` varchar(70) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`id_alqui`, `precio`, `fecha`, `horario`, `espacio`, `imagen`) VALUES
(1, 13000, '2024-11-29', '13:30:00', 1, 'fulbo7.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `esp`
--

CREATE TABLE `esp` (
  `id_esp` int(11) NOT NULL,
  `espaci` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `esp`
--

INSERT INTO `esp` (`id_esp`, `espaci`) VALUES
(1, 'futbol7'),
(2, 'futbol5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamiento`
--

CREATE TABLE `estacionamiento` (
  `id_est` int(11) NOT NULL,
  `lugar` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `precio` int(25) NOT NULL,
  `alqui` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `gmail` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `usuario` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `id_sector` int(11) NOT NULL,
  `sector` int(11) NOT NULL,
  `tipo` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `precio` int(20) NOT NULL,
  `estacionamiento` int(11) NOT NULL,
  `alquiler` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`id_alqui`),
  ADD UNIQUE KEY `id_alqui` (`id_alqui`),
  ADD KEY `id_alqui_2` (`id_alqui`),
  ADD KEY `esp_esp` (`espacio`);

--
-- Indices de la tabla `esp`
--
ALTER TABLE `esp`
  ADD PRIMARY KEY (`id_esp`);

--
-- Indices de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  ADD PRIMARY KEY (`id_est`),
  ADD KEY `id_est` (`id_est`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`id_sector`),
  ADD KEY `id_alqui` (`alquiler`),
  ADD KEY `id_est` (`estacionamiento`),
  ADD KEY `id_esp` (`sector`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `id_alqui` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `esp`
--
ALTER TABLE `esp`
  MODIFY `id_esp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estacionamiento`
--
ALTER TABLE `estacionamiento`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `id_sector` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD CONSTRAINT `esp_esp` FOREIGN KEY (`espacio`) REFERENCES `esp` (`id_esp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sector`
--
ALTER TABLE `sector`
  ADD CONSTRAINT `id_est` FOREIGN KEY (`estacionamiento`) REFERENCES `estacionamiento` (`id_est`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
