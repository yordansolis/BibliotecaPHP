-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2023 a las 22:35:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ipschichijay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(10) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `segundo_nombre` varchar(30) DEFAULT NULL,
  `primer_apellido` varchar(30) NOT NULL,
  `segundo_apellido` varchar(30) NOT NULL,
  `fecha_nacimiento` varchar(100) NOT NULL,
  `cuidad` varchar(30) DEFAULT NULL,
  `departamento` varchar(30) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefono` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `usuario`, `nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `cuidad`, `departamento`, `sexo`, `telefono`, `password`, `email`, `rol`) VALUES
(1, 'jsolis', 'jordan', 'andres', 'asprilla', 'mena', '1997-11-12', 'Quibdo', 'choco', 'masculino', '3113636658', 'admin', 'jordy@gmail.com', 'administrador'),
(3, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '[value-9]', '[value-10]', '', '[value-12]', '[value-13]', '[value-14]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamentos`
--

CREATE TABLE `medicamentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `imagen` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medicamentos`
--

INSERT INTO `medicamentos` (`id`, `nombre`, `imagen`, `precio`, `cantidad`) VALUES
(4, ' JavaScritp', 'libroScript.pngimagen_643f0b702d840.jpg', 8000, 122),
(5, ' Python', 'd00745b45b7c4ab809d74d435c0b566e.webpimagen_643f0bf7ad4ee.jpg', 20000, 122),
(6, ' Juego js', 'logicadeProgramacion.pngimagen_643f0cafcbb2f.jpg', 45000, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_contactos`
--

CREATE TABLE `tb_contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id_trabajadores` int(10) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `segundo_nombre` varchar(30) DEFAULT NULL,
  `primer_apellido` varchar(30) NOT NULL,
  `segundo_apellido` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `cuidad` varchar(30) DEFAULT NULL,
  `departamento` varchar(30) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telefono` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id_trabajadores`, `usuario`, `nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `cuidad`, `departamento`, `sexo`, `telefono`, `password`, `email`, `rol`) VALUES
(1, 'jmena', 'mena', 'ma', 'maa', 'mqq', '2023-01-25', 'choco', 'Bajo Buado', 'masculino', '12122', 'mena@masn', '698d51a19d8a121ce581499d7b701668', 'trabajador'),
(4, 'jsebas', 'm', 'm', 'm', 'm', '2023-01-24', 'choco', 'Bajo Buado', 'masculino', '311121', 'jmena@gmail.com', '202cb962ac59075b964b07152d234b70', 'trabajador'),
(5, 'jorlando', 'a', 'a', 'as', 'a', '1998-12-12', 'choco', 'Bajo Buado', 'masculino', '12', 'emai@ema', 'c4ca4238a0b923820dcc509a6f75849b', 'trabajador'),
(6, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '0000-00-00', '[value-8]', '[value-9]', '[value-10]', '', '[value-12]', '[value-13]', '[value-14]'),
(7, 'sdsdd', 'wsdwsd', 'wd', 'dwsds', 'sdsd', '2023-02-01', 'choco', 'Tado', 'masculino', 'wsdwsd', '$2y$04$ks6n.2Cy400enV0AtrYGYuOIFGhPtHr03/jPVZ0lX0h6aQXJODQdC', 'ym@main.com', 'trabajador'),
(8, 'javiw', 'sadas', 'dasdsad', 'asdasd', 'sadasd', '2023-01-10', 'choco', 'Quibdo', 'masculino', '3131sddsd', '$2y$04$4GcY15T/ijXeuPgfztwnyuiu1wpC8XJXNlaZfQIKjQ6l35LAWFAqK', 'ssadasdad@gmail.com', 'trabajador'),
(9, 'tocayo', 'cristoba', 'tocayo', 'asprilla', 'tocayo', '2016-06-29', 'choco', 'Quibdo', 'masculino', '311363611', '$2y$04$2M5tLbJLwqb6RghkbBhL7.Nmnyzr0oe87NHYx3IVJ5aMfbHfXRNym', 'tocay@gmil.com', 'trabajador'),
(10, 'josen ', 'asasas', 'asasa', 'sas', 'asas', '2023-01-04', 'choco', 'Quibdo', 'femenino', '312211', '$2y$04$l7BG6HH/TOBImz.BnOf5XeD5PAsoTzXPeuIt.vrEDw0tbRjps6rdO', 'josemn@mauc', 'trabajador'),
(12, 'jnancy', 'Nancy', 'idfndfn', 'ineofndonf', 'ºenfondo', '2023-02-01', 'choco', 'Bajo Buado', 'masculino', '32556', '$2y$04$qPUx2G7RDPxICnDynRoTlOKBAKWvimv5EF6SY0rkrl2JF568rA3/O', 'djj@gmail.com', 'trabajador'),
(13, 'fpepe', 'pepe', '', 'antonio', 'mena', '2007-06-21', 'choco', 'Bajo Buado', 'masculino', '3113636659', '$2y$04$UPeAAEzj25kp69.ZbWign.FtBE5EoutIJPsIcbK3AZqYdVhysIYra', 'pepe@mail.com', 'trabajador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `id_admin` (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_contactos`
--
ALTER TABLE `tb_contactos`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  ADD PRIMARY KEY (`id_trabajadores`),
  ADD UNIQUE KEY `id_trabajadores` (`id_trabajadores`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `medicamentos`
--
ALTER TABLE `medicamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tb_contactos`
--
ALTER TABLE `tb_contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id_trabajadores` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
