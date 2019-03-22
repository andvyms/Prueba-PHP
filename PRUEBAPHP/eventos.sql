-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2019 a las 03:49:53
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(20) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellidos` varchar(10) NOT NULL,
  `sesion` varchar(20) NOT NULL,
  `fcin` date NOT NULL,
  `ffin` date NOT NULL,
  `asistencia` int(11) NOT NULL,
  `telefono` int(20) NOT NULL,
  `direccion` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE `lista` (
  `event` text NOT NULL,
  `sesion` int(11) NOT NULL,
  `parts` int(11) NOT NULL,
  `fcin` date NOT NULL,
  `ffin` date NOT NULL,
  `disp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lista`
--

INSERT INTO `lista` (`event`, `sesion`, `parts`, `fcin`, `ffin`, `disp`) VALUES
('0', 2, 10, '0000-00-00', '0000-00-00', 5),
('0', 2, 15, '0000-00-00', '0000-00-00', 4),
('HTML', 2, 20, '2019-06-12', '2019-06-14', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_evento` int(11) NOT NULL,
  `event` varchar(30) NOT NULL,
  `fcin` date NOT NULL,
  `hini` varchar(11) NOT NULL,
  `ffin` date NOT NULL,
  `hfin` varchar(11) NOT NULL,
  `partic` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `nums` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `direccion` (`direccion`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_evento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
