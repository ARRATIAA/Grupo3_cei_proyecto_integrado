-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2021 a las 01:17:57
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_brigada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base`
--

CREATE TABLE `base` (
  `nombre` varchar(45) NOT NULL,
  `zona` varchar(20) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `unidad_clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brigadistas`
--

CREATE TABLE `brigadistas` (
  `rut` varchar(15) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fono` int(11) DEFAULT NULL,
  `empresa_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `brigadistas`
--

INSERT INTO `brigadistas` (`rut`, `nombre`, `fono`, `empresa_codigo`) VALUES
('20.868.102-4', 'pedro leal', 222222, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`codigo`, `nombre`) VALUES
(1, 'Agesa'),
(2, 'Agrifor'),
(3, 'Bagaro'),
(4, 'Codema'),
(5, 'Arauco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movil`
--

CREATE TABLE `movil` (
  `patente` varchar(10) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_brigada`
--

CREATE TABLE `tipo_brigada` (
  `codigo` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `personas` int(11) DEFAULT NULL,
  `capacidad_maxima` int(11) DEFAULT NULL,
  `unidad_clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_operativa`
--

CREATE TABLE `unidad_operativa` (
  `clave` int(11) NOT NULL,
  `motosierra` varchar(45) DEFAULT NULL,
  `motobomba` varchar(45) DEFAULT NULL,
  `stock_espuma` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `kit_meteorologico` varchar(45) DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_fin` time DEFAULT NULL,
  `stock_combustible` varchar(45) DEFAULT NULL,
  `movil_patente` varchar(10) NOT NULL,
  `actividad_codigo` int(11) NOT NULL,
  `unidad_clave` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_operativa_has_brigadistas`
--

CREATE TABLE `unidad_operativa_has_brigadistas` (
  `unidad_operativa_clave` int(11) NOT NULL,
  `brigadistas_rut` varchar(15) NOT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('arratia', '0'),
('arratia', '0'),
('arratia', '0'),
('arratia', '0'),
('jp', '0'),
('jp', '0'),
('jp', '$2y$10$Ofu4cBjTR4LYD0ROic7Xc.l36YBSny8fFiaBNGu1qhPYyhU6J8GzK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`nombre`),
  ADD KEY `fk_base_unidad1_idx` (`unidad_clave`);

--
-- Indices de la tabla `brigadistas`
--
ALTER TABLE `brigadistas`
  ADD PRIMARY KEY (`rut`),
  ADD KEY `fk_brigadistas_empresa1_idx` (`empresa_codigo`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `movil`
--
ALTER TABLE `movil`
  ADD PRIMARY KEY (`patente`);

--
-- Indices de la tabla `tipo_brigada`
--
ALTER TABLE `tipo_brigada`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_tipo_brigada_unidad1_idx` (`unidad_clave`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`clave`);

--
-- Indices de la tabla `unidad_operativa`
--
ALTER TABLE `unidad_operativa`
  ADD PRIMARY KEY (`clave`),
  ADD KEY `fk_unidad_operativa_movil1_idx` (`movil_patente`),
  ADD KEY `fk_unidad_operativa_actividad1_idx` (`actividad_codigo`),
  ADD KEY `fk_unidad_operativa_unidad1_idx` (`unidad_clave`);

--
-- Indices de la tabla `unidad_operativa_has_brigadistas`
--
ALTER TABLE `unidad_operativa_has_brigadistas`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `fk_unidad_operativa_has_brigadistas_brigadistas1_idx` (`brigadistas_rut`),
  ADD KEY `fk_unidad_operativa_has_brigadistas_unidad_operativa_idx` (`unidad_operativa_clave`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `clave` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `unidad_operativa_has_brigadistas`
--
ALTER TABLE `unidad_operativa_has_brigadistas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `base`
--
ALTER TABLE `base`
  ADD CONSTRAINT `fk_base_unidad1` FOREIGN KEY (`unidad_clave`) REFERENCES `unidad` (`clave`);

--
-- Filtros para la tabla `brigadistas`
--
ALTER TABLE `brigadistas`
  ADD CONSTRAINT `fk_brigadistas_empresa1` FOREIGN KEY (`empresa_codigo`) REFERENCES `empresa` (`codigo`);

--
-- Filtros para la tabla `tipo_brigada`
--
ALTER TABLE `tipo_brigada`
  ADD CONSTRAINT `fk_tipo_brigada_unidad1` FOREIGN KEY (`unidad_clave`) REFERENCES `unidad` (`clave`);

--
-- Filtros para la tabla `unidad_operativa`
--
ALTER TABLE `unidad_operativa`
  ADD CONSTRAINT `fk_unidad_operativa_actividad1` FOREIGN KEY (`actividad_codigo`) REFERENCES `actividad` (`codigo`),
  ADD CONSTRAINT `fk_unidad_operativa_movil1` FOREIGN KEY (`movil_patente`) REFERENCES `movil` (`patente`),
  ADD CONSTRAINT `fk_unidad_operativa_unidad1` FOREIGN KEY (`unidad_clave`) REFERENCES `unidad` (`clave`);

--
-- Filtros para la tabla `unidad_operativa_has_brigadistas`
--
ALTER TABLE `unidad_operativa_has_brigadistas`
  ADD CONSTRAINT `fk_unidad_operativa_has_brigadistas_brigadistas1` FOREIGN KEY (`brigadistas_rut`) REFERENCES `brigadistas` (`rut`),
  ADD CONSTRAINT `fk_unidad_operativa_has_brigadistas_unidad_operativa` FOREIGN KEY (`unidad_operativa_clave`) REFERENCES `unidad_operativa` (`clave`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
