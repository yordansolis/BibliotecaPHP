-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2023 a las 10:18:34
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
-- Base de datos: `todotable`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `todotabla`
--

CREATE TABLE `todotabla` (
  `id` int(11) NOT NULL,
  `texto` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `todotabla`
--

INSERT INTO `todotabla` (`id`, `texto`, `timestamp`) VALUES
(1, 'comer', '2023-03-22 02:18:54'),
(2, 'cantar', '2023-03-22 02:24:34'),
(3, 'bailar', '2023-03-22 02:24:37'),
(4, 'peliar', '2023-03-22 02:24:40'),
(5, 'cocinar', '2023-03-22 02:24:48'),
(6, 'Bacelona', '2023-03-22 02:26:24'),
(7, 'trapeaer', '2023-03-22 02:26:36'),
(25, 'yyy', '2023-03-22 03:27:12'),
(26, 'pepe', '2023-03-22 03:27:17'),
(27, 'pepe', '2023-03-22 03:27:53'),
(28, 'pepe', '2023-03-22 03:29:12'),
(29, 'pepe', '2023-03-22 03:29:48'),
(30, 'Hola estas en linea?', '2023-03-22 04:28:58'),
(31, 'si porque ?', '2023-03-22 04:29:33'),
(32, 'esto no funciona bn', '2023-03-22 04:29:43'),
(33, 'sera?', '2023-03-22 04:29:54'),
(34, 'esperame miro bn', '2023-03-22 04:30:03'),
(35, 'sas', '2023-03-22 04:30:18'),
(36, 'mami', '2023-03-22 04:30:24'),
(37, 'enviamelo', '2023-03-22 04:30:29'),
(38, 'casi me vee', '2023-03-22 04:30:39'),
(39, 'hola munfo', '2023-03-22 12:50:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `todotabla`
--
ALTER TABLE `todotabla`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `todotabla`
--
ALTER TABLE `todotabla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
