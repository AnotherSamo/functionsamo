-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2023 a las 00:59:16
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `foto_libro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id_student` int(11) NOT NULL,
  `id_user_student` int(11) NOT NULL,
  `code_student` varchar(10) NOT NULL,
  `cel_id` varchar(10) NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `student_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id_student`, `id_user_student`, `code_student`, `cel_id`, `activo`, `student_rol`) VALUES
(1, 14, '13201d1', '4494806529', 1, 3),
(2, 14, '1ab08c3', '4491253245', 1, 3),
(3, 14, '1286138', '4491253245', 1, 3),
(4, 14, '06bc117', '4494806528', 1, 3),
(5, 14, '13aba01', '4491280142', 1, 3),
(6, 15, '6220caf', '4490123450', 1, 3),
(7, 15, 'ffec3ad', '4491253245', 1, 3),
(8, 15, 'ae2ee0c', '4491253245', 1, 3),
(9, 15, 'bb1620a', '4491253245', 1, 3),
(10, 15, 'a2ca066', '4491253245', 1, 3),
(11, 16, '6a4150c', '4491253245', 1, 3),
(12, 16, '5332ae6', '4491253245', 1, 3),
(13, 16, 'c723a6c', '4491253245', 1, 3),
(14, 16, '503e1a2', '4491253245', 1, 3),
(15, 16, '32e2517', '4491253245', 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `package` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `created_at` date NOT NULL,
  `user_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `password`, `name`, `package`, `address`, `created_at`, `user_rol`) VALUES
(3, 'lalo', '12345', 'Eduardo', 'PhotoBook 40 Hojas', 'AV', '2023-01-11', 2),
(7, 'MASTER', '12345', 'Bartolo Diaz', '', 'AV', '2023-01-18', 1),
(8, 'prueba1', '12345', 'PRUEBAAAAAA', 'PhotoBook 100 Hojas', 'alv', '2023-01-18', 2),
(14, 'lalangas', '12345', 'EDUARDO CORDOVA', 'PhotoBook 30 Hojas', 'ergvdfgvfd', '2023-01-20', 2),
(15, 'samu', '12345', 'SAMUEL', 'PhotoBook 30 Hojas', 'EDFASDFASDF', '2023-01-20', 2),
(16, 'kike', '12345', 'Enrique', 'PhotoBook 30 Hojas', 'dfadsfads', '2023-01-20', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
