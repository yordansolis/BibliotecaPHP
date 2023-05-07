-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-05-2023 a las 23:09:40
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
-- Base de datos: `api`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_contactos`
--

CREATE TABLE `tb_contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tb_contactos`
--

INSERT INTO `tb_contactos` (`id`, `nombre`, `correo`, `created_at`, `updated_at`) VALUES
(1, 'Leon', 'reyleon@gmail.com', '2023-04-29', '2023-04-30 01:00:35'),
(2, 'heina', 'hiena@gmail.com', '2023-04-29', '2023-04-30 01:00:47'),
(3, 'popeye', 'jsolis@gmail.com', '2023-04-30', '2023-04-30 08:00:57'),
(4, 'Lola', 'lola@gmail.com', '2023-04-30', '2023-04-30 08:48:43'),
(8, 'admin', 'admin@gmail.com', '2023-04-30', '2023-04-30 08:49:09'),
(15, 'Yordan solis', 'jsolisito@gmail.com', '2023-04-30', '2023-04-30 09:26:36'),
(16, 'popeye', 'jsolis@gmail.com', '2023-05-07', '2023-05-08 04:06:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_contactos`
--
ALTER TABLE `tb_contactos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_contactos`
--
ALTER TABLE `tb_contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
