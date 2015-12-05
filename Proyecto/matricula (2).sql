-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2015 a las 00:58:38
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `matricula`
--
CREATE DATABASE IF NOT EXISTS `matricula` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `matricula`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicial`
--
-- Creación: 19-10-2015 a las 22:12:18
--

DROP TABLE IF EXISTS `inicial`;
CREATE TABLE IF NOT EXISTS `inicial` (
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DNI` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `genero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nivel` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `distrito` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `primaria`
--
-- Creación: 19-10-2015 a las 21:59:11
--

DROP TABLE IF EXISTS `primaria`;
CREATE TABLE IF NOT EXISTS `primaria` (
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DNI` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `genero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `seccion` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `distrito` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secundaria`
--
-- Creación: 19-10-2015 a las 22:04:58
--

DROP TABLE IF EXISTS `secundaria`;
CREATE TABLE IF NOT EXISTS `secundaria` (
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DNI` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `genero` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `seccion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `distrito` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inicial`
--
ALTER TABLE `inicial`
 ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `primaria`
--
ALTER TABLE `primaria`
 ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `secundaria`
--
ALTER TABLE `secundaria`
 ADD PRIMARY KEY (`DNI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
