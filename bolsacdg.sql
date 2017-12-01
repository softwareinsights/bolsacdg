-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2017 a las 00:33:18
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bolsacdg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciudad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado_idestado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo`
--

CREATE TABLE `empleo` (
  `idempleo` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `sueldo` float DEFAULT NULL,
  `dias` varchar(45) NOT NULL,
  `horas` varchar(45) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo_has_carrera`
--

CREATE TABLE `empleo_has_carrera` (
  `empleo_idempleo` int(11) NOT NULL,
  `carrera_idcarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo_has_categoria`
--

CREATE TABLE `empleo_has_categoria` (
  `empleo_idempleo` int(11) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `tipo` varchar(15) NOT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `egresado` tinyint(1) DEFAULT NULL,
  `estudiante` tinyint(1) DEFAULT NULL,
  `carrera` int(11) DEFAULT NULL,
  `foto` varchar(145) DEFAULT NULL,
  `curriculum` varchar(145) DEFAULT NULL,
  `ciudad_idciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_has_carrera`
--

CREATE TABLE `usuario_has_carrera` (
  `usuario_idusuario` int(11) NOT NULL,
  `carrera_idcarrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idcarrera`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciudad`),
  ADD KEY `fk_ciudad_estado_idx` (`estado_idestado`);

--
-- Indices de la tabla `empleo`
--
ALTER TABLE `empleo`
  ADD PRIMARY KEY (`idempleo`);

--
-- Indices de la tabla `empleo_has_carrera`
--
ALTER TABLE `empleo_has_carrera`
  ADD PRIMARY KEY (`empleo_idempleo`,`carrera_idcarrera`),
  ADD KEY `fk_empleo_has_carrera_carrera1_idx` (`carrera_idcarrera`),
  ADD KEY `fk_empleo_has_carrera_empleo1_idx` (`empleo_idempleo`);

--
-- Indices de la tabla `empleo_has_categoria`
--
ALTER TABLE `empleo_has_categoria`
  ADD PRIMARY KEY (`empleo_idempleo`,`categoria_idcategoria`),
  ADD KEY `fk_empleo_has_categoria_categoria1_idx` (`categoria_idcategoria`),
  ADD KEY `fk_empleo_has_categoria_empleo1_idx` (`empleo_idempleo`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_ciudad1_idx` (`ciudad_idciudad`);

--
-- Indices de la tabla `usuario_has_carrera`
--
ALTER TABLE `usuario_has_carrera`
  ADD PRIMARY KEY (`usuario_idusuario`,`carrera_idcarrera`),
  ADD KEY `fk_usuario_has_carrera_carrera1_idx` (`carrera_idcarrera`),
  ADD KEY `fk_usuario_has_carrera_usuario1_idx` (`usuario_idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idcarrera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleo`
--
ALTER TABLE `empleo`
  MODIFY `idempleo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciudad_estado` FOREIGN KEY (`estado_idestado`) REFERENCES `estado` (`idestado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleo_has_carrera`
--
ALTER TABLE `empleo_has_carrera`
  ADD CONSTRAINT `fk_empleo_has_carrera_carrera1` FOREIGN KEY (`carrera_idcarrera`) REFERENCES `carrera` (`idcarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleo_has_carrera_empleo1` FOREIGN KEY (`empleo_idempleo`) REFERENCES `empleo` (`idempleo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleo_has_categoria`
--
ALTER TABLE `empleo_has_categoria`
  ADD CONSTRAINT `fk_empleo_has_categoria_categoria1` FOREIGN KEY (`categoria_idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_empleo_has_categoria_empleo1` FOREIGN KEY (`empleo_idempleo`) REFERENCES `empleo` (`idempleo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_ciudad1` FOREIGN KEY (`ciudad_idciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_has_carrera`
--
ALTER TABLE `usuario_has_carrera`
  ADD CONSTRAINT `fk_usuario_has_carrera_carrera1` FOREIGN KEY (`carrera_idcarrera`) REFERENCES `carrera` (`idcarrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_carrera_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
