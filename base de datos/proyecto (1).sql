-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2024 a las 21:44:54
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(20) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `password` varchar(150) NOT NULL,
  `rol` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `email`, `Telefono`, `password`, `rol`) VALUES
(4, 'Alexandra', 'todo@hotmail.com', 320876567, '123', 1),
(5, 'maico', 'yineddiaz75@hotmail.com', 2147483647, '12345', 1),
(6, 'maicol', 'a@hotmail.com', 333333, '123', 1),
(8, 'prueba', 'prueba@hotmail.com', 1111111, '122', 1),
(9, 'nora', 'prueba2@hotmail.com', 3333333, '123', 1),
(17, 'Juan Pérez', 'juan.perez@example.com', 2147483647, '123', 1),
(20, 'yined', 'exito772@gmail.com', 320234567, '2435', 1),
(21, 'maicol', 'yineddiaz@hotmail.com', 320345678, 'contraseena123', 1),
(22, 'andres', 'andromeda@hotmail.com', 2147483647, 'contraseena123', 1),
(26, 'wilber', 'aqwe@hotmail.com', 320123123, '123', 1),
(27, 'wilber', 'aqwe@hotmail.com', 320123123, '123', 1),
(30, 'Lurdes', 'lur@hotmail.com', 329876543, '123', 1),
(31, 'Juancarlos', 'algomas@hotmail.com', 320987654, 'contraseena123', 1),
(32, 'Juancarlos', 'algomas@hotmail.com', 320987654, 'contraseena123', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
