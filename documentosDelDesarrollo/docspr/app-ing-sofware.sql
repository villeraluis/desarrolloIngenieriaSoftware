-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2020 a las 07:49:04
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app-ing-sofware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_proyecto`
--

CREATE TABLE `datos_proyecto` (
  `Titulo_pro` varchar(200) NOT NULL,
  `Nombres_integrantes` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `link` varchar(700) DEFAULT NULL,
  `datos_Usuarios_correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_proyecto`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios`
--

CREATE TABLE `datos_usuarios` (
  `correo` varchar(200) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `id_estudiante` varchar(45) DEFAULT NULL,
  `pasword` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_video`
--

CREATE TABLE `datos_video` (
  `numero_u` int(11) NOT NULL,
  `nombres_integrantes` varchar(200) DEFAULT NULL,
  `link` varchar(1000) DEFAULT NULL,
  `datos_Usuarios_correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_video`
--



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_proyecto`
--
ALTER TABLE `datos_proyecto`
  ADD PRIMARY KEY (`Titulo_pro`);

--
-- Indices de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `datos_video`
--
ALTER TABLE `datos_video`
  ADD PRIMARY KEY (`numero_u`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
