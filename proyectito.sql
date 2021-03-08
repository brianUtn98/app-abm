-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2021 a las 03:08:58
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `legajo` int(10) NOT NULL,
  `calle` varchar(20) NOT NULL,
  `numero` int(5) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `materias` int(2) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`nombre`, `apellido`, `legajo`, `calle`, `numero`, `telefono`, `mail`, `materias`, `id_alumno`) VALUES
('Brian', 'Monroy', 1685260, 'Balboa', 4250, '1156050595', 'brian.gmonroy98@gmai', 15, 1),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 2),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 3),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 4),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 5),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 6),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 7),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 8),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 9),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 10),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 11),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 12),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 13),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 14),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 15),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 16),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 17),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 18),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 19),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 20),
('Leila', 'Roldan', 141234123, 'Bauness', 300, '12312312312', 'adasdasda@gmail.com', 3232, 21),
('Juan', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 22),
('Juan', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 23),
('Juan', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 24),
('Juan', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 25),
('Juan', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 26),
('Brian', 'Monroy', 111231232, 'avenida siempre viva', 1234, '12312341', 'mail@mail.com', 4, 27),
('Brian', 'Monroy', 123123, '13213', 123123, '1232131', '123123', 0, 28),
('Brian', 'Monroy', 123123, '13213', 123123, '1232131', '123123', 0, 29),
('asdasdas', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 30),
('asdasdas', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 31),
('asdasdas', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 32),
('asdasdas', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 33),
('asdasdas', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 34),
('asdasdas', 'Garcia', 123, 'Zeppelin', 123, '123123123', 'luchito@mail.com', 7, 35),
('13123', '123123', 123123, '123123', 123123, '123123', '13212312', 4, 37),
('juan', 'caceres', 123, '123', 123, '123', '123', 1, 38),
('123', '123', 123, '123', 123, '123', '123', 2, 39),
('Brian Gabriel', 'caceres', 123, 'avenida siempre viva', 123123, '12312341', 'brian.gmonroy98@gmai', 1, 40),
('}', 'Monroy', 123, 'avenida siempre viva', 123, '12312341', 'brian.gmonroy98@gmai', 0, 41);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
