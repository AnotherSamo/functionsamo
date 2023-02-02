-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2023 a las 04:27:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

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
(15, 16, '32e2517', '4491253245', 1, 3),
(17, 17, '3d6da81', '', 0, 3),
(18, 17, '268656d', '', 0, 3),
(19, 17, 'ee6169d', '', 0, 3),
(20, 17, '8d3661e', '', 0, 3),
(21, 17, '3862666', '', 0, 3),
(22, 18, '27006d0', '', 0, 3),
(23, 18, 'd0d6306', '', 0, 3),
(24, 18, '06620d6', '', 0, 3),
(25, 18, '680d230', '', 0, 3),
(26, 18, '320e606', '449409718', 1, 3),
(27, 19, '6427f0d', '', 0, 3),
(28, 19, '08566ed', '', 0, 3),
(29, 19, '65b6d93', '', 0, 3),
(30, 19, '2dbbe06', '', 0, 3),
(31, 19, 'd6e0be3', '', 0, 3),
(32, 20, '1346696', '', 0, 3),
(33, 20, '112169d', '', 0, 3),
(34, 20, '962642e', '', 0, 3),
(35, 20, '3d42221', '', 0, 3),
(36, 20, 'c262617', '', 0, 3),
(37, 21, '8486d02', '', 0, 3),
(38, 21, '609826d', '', 0, 3),
(39, 21, '5663822', '', 0, 3),
(40, 21, '258d3a6', '', 0, 3),
(41, 21, '028e3b2', '', 0, 3),
(42, 22, 'ae9fb2d', '', 0, 3),
(43, 22, 'b621dda', '', 0, 3),
(44, 22, 'd62bcad', '', 0, 3),
(45, 22, 'b6dd20d', '', 0, 3),
(46, 22, 'd263bed', '', 0, 3),
(47, 23, '68a36a2', '', 0, 3),
(48, 23, 'd2ae26a', '', 0, 3),
(49, 23, 'dfa623d', '', 0, 3),
(50, 23, '20a62da', '', 0, 3),
(51, 23, '322d336', '', 0, 3),
(52, 24, '43464db', '', 0, 3),
(53, 24, 'f47d269', '', 0, 3),
(54, 24, 'd23bf76', '', 0, 3),
(55, 24, '66f2345', '', 0, 3),
(56, 24, '7362265', '', 0, 3),
(57, 25, '83d26c7', '', 0, 3),
(58, 25, '36c6d37', '', 0, 3),
(59, 25, '2cd667b', '', 0, 3),
(60, 25, '26c97e3', '', 0, 3),
(61, 25, '2f16dd3', '', 0, 3),
(62, 26, 'd23c3d3', '', 0, 3),
(63, 26, '2363620', '', 0, 3),
(64, 26, '062d347', '', 0, 3),
(65, 26, 'd6632d8', '', 0, 3),
(66, 26, 'dd33266', '', 0, 3),
(67, 27, 'd126388', '', 0, 3),
(68, 27, '376d4c8', '', 0, 3),
(69, 27, '72c333e', '', 0, 3),
(70, 27, '8d32277', '', 0, 3),
(71, 27, 'ec6e822', '', 0, 3),
(72, 28, 'd379b8e', '', 0, 3),
(73, 28, '76ede23', '', 0, 3),
(74, 28, 'ebdd7d3', '', 0, 3),
(75, 28, 'edd8d10', '', 0, 3),
(76, 28, '335e768', '', 0, 3),
(77, 29, 'c24cb7a', '', 0, 3),
(78, 29, '3866bc7', '', 0, 3),
(79, 29, '70163dc', '', 0, 3),
(80, 29, '71cb33d', '', 0, 3),
(81, 29, '67dbbcc', '', 0, 3),
(82, 30, '9441711', '', 0, 3),
(83, 30, '67a79d1', '', 0, 3),
(84, 30, '6197d11', '', 0, 3),
(85, 30, '161419e', '', 0, 3),
(86, 30, '7421c16', '', 0, 3),
(87, 31, '82d95c6', '', 0, 3),
(88, 31, 'd85f2a3', '', 0, 3),
(89, 31, 'f93b6ba', '', 0, 3),
(90, 31, '69d5aaf', '', 0, 3),
(91, 31, 'bb6ea59', '', 0, 3),
(92, 32, '656a309', '', 0, 3),
(93, 32, '1f93fd1', '', 0, 3),
(94, 32, 'fe5067d', '', 0, 3),
(95, 32, 'da7376d', '', 0, 3),
(96, 32, '5fe3456', '', 0, 3),
(97, 33, 'dddedf9', '', 0, 3),
(98, 33, 'c5d2596', '', 0, 3),
(99, 33, '5efddf6', '', 0, 3),
(100, 33, '64d3efb', '', 0, 3),
(101, 33, 'cd5fa23', '', 0, 3),
(102, 34, 'e6ac661', '', 0, 3),
(103, 34, '21f667d', '', 0, 3),
(104, 34, 'f669cb6', '', 0, 3),
(105, 34, '31c7d96', '', 0, 3),
(106, 34, '962361c', '', 0, 3),
(107, 35, 'af19ffb', '', 0, 3),
(108, 35, 'fe166f9', '', 0, 3),
(109, 35, '6239f9d', '', 0, 3),
(110, 35, '3ff6bff', '', 0, 3),
(111, 35, '9bc63d6', '', 0, 3),
(112, 36, '0ede346', '', 0, 3),
(113, 36, 'f3170ab', '', 0, 3),
(114, 36, 'b640a85', '', 0, 3),
(115, 36, 'fd83060', '', 0, 3),
(116, 36, '38bd61f', '', 0, 3),
(117, 37, 'd23eda7', '', 0, 3),
(118, 37, 'ac1ad60', '', 0, 3),
(119, 37, '030d5d7', '', 0, 3),
(120, 37, '9961cdd', '', 0, 3),
(121, 37, '716acdb', '', 0, 3),
(122, 38, '68063de', '', 0, 3),
(123, 38, '60f68e8', '', 0, 3),
(124, 38, 'f9e36aa', '', 0, 3),
(125, 38, '8fdb7ae', '', 0, 3),
(126, 38, '820460a', '', 0, 3),
(127, 39, '0cde3ca', '', 0, 3),
(128, 39, 'c856dea', '', 0, 3),
(129, 39, '6a2bd38', '', 0, 3),
(130, 39, '32adca0', '', 0, 3),
(131, 39, '1ecbcd3', '', 0, 3),
(132, 40, 'a08aa63', '', 0, 3),
(133, 40, 'a6f0613', '', 0, 3),
(134, 40, '60db59a', '', 0, 3),
(135, 40, '260ae63', '', 0, 3),
(136, 40, '70e6afd', '', 0, 3),
(137, 41, '7adfe13', '', 0, 3),
(138, 41, '3e6d557', '', 0, 3),
(139, 41, '2e6d176', '', 0, 3),
(140, 41, '76e7125', '', 0, 3),
(141, 41, '1a51b37', '', 0, 3),
(142, 42, 'be1e3d6', '', 0, 3),
(143, 42, 'd63e0e6', '', 0, 3),
(144, 42, 'd8d3650', '', 0, 3),
(145, 42, 'deb916e', '', 0, 3),
(146, 42, 'd6ee2d6', '', 0, 3);

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
  `current_pages` int(11) DEFAULT NULL,
  `total_pages` int(11) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `created_at` date NOT NULL,
  `user_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `password`, `name`, `package`, `current_pages`, `total_pages`, `address`, `created_at`, `user_rol`) VALUES
(3, 'lalo', '12345', 'Eduardo', 'PhotoBook 40 Hojas', NULL, NULL, 'AV', '2023-01-11', 2),
(7, 'MASTER', '12345', 'Bartolo Diaz', '', NULL, NULL, 'AV', '2023-01-18', 1),
(8, 'prueba1', '12345', 'PRUEBAAAAAA', 'PhotoBook 100 Hojas', NULL, NULL, 'alv', '2023-01-18', 2),
(14, 'lalangas', '12345', 'EDUARDO CORDOVA', 'PhotoBook 30 Hojas', NULL, NULL, 'ergvdfgvfd', '2023-01-20', 2),
(15, 'samu', '12345', 'SAMUEL', 'PhotoBook 30 Hojas', NULL, NULL, 'EDFASDFASDF', '2023-01-20', 2),
(41, 'sasa', '12345', 'sasa', 'PhotoBook 30 Hojas', 0, 30, 'sasa', '2023-02-01', 2),
(42, 'kike', '12345', 'kike', 'PhotoBook 100 Hojas', 0, 100, '12345', '2023-02-02', 2);

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
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
