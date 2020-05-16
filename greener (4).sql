-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2020 a las 20:53:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `greener`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `challenge`
--

CREATE TABLE `challenge` (
  `title` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidence`
--

CREATE TABLE `evidence` (
  `pic` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `userName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `otherschallenge`
--

CREATE TABLE `otherschallenge` (
  `title` varchar(50) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `status` enum('completed','pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `othersevidence`
--

CREATE TABLE `othersevidence` (
  `title` varchar(50) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `status` enum('approved','rejected') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ownchallenge`
--

CREATE TABLE `ownchallenge` (
  `userName` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `status` enum('completed','pending') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `history` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`email`, `userName`, `pic`, `password`, `points`, `history`) VALUES
('vir.ospitaletche@gmail.com', 'Ana', 'ana.PNG', '9ef1afbefde2115f24152b9fb7fb3131', NULL, NULL),
('gondor@me.com', 'Aragorn', '', '942a501c9bb0dd5dd13c5894dd202116', NULL, NULL),
('arwen@me.com', 'Arwen', 'arwen.jpg', 'cde81aca70824fd27072f2d901bac979', NULL, NULL),
('baggins@shire.com', 'Frodo', 'frodo.jpg', 'f0f8820ee817181d9c6852a097d70d8d', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`title`);

--
-- Indices de la tabla `evidence`
--
ALTER TABLE `evidence`
  ADD KEY `userName` (`userName`),
  ADD KEY `title` (`title`);

--
-- Indices de la tabla `otherschallenge`
--
ALTER TABLE `otherschallenge`
  ADD KEY `userName` (`userName`),
  ADD KEY `title` (`title`);

--
-- Indices de la tabla `othersevidence`
--
ALTER TABLE `othersevidence`
  ADD KEY `userName` (`userName`),
  ADD KEY `title` (`title`);

--
-- Indices de la tabla `ownchallenge`
--
ALTER TABLE `ownchallenge`
  ADD KEY `userName` (`userName`),
  ADD KEY `title` (`title`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userName`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evidence`
--
ALTER TABLE `evidence`
  ADD CONSTRAINT `evidence_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `user` (`userName`),
  ADD CONSTRAINT `evidence_ibfk_2` FOREIGN KEY (`title`) REFERENCES `challenge` (`title`);

--
-- Filtros para la tabla `otherschallenge`
--
ALTER TABLE `otherschallenge`
  ADD CONSTRAINT `otherschallenge_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `user` (`userName`),
  ADD CONSTRAINT `otherschallenge_ibfk_2` FOREIGN KEY (`title`) REFERENCES `challenge` (`title`);

--
-- Filtros para la tabla `othersevidence`
--
ALTER TABLE `othersevidence`
  ADD CONSTRAINT `othersevidence_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `user` (`userName`),
  ADD CONSTRAINT `othersevidence_ibfk_2` FOREIGN KEY (`title`) REFERENCES `challenge` (`title`);

--
-- Filtros para la tabla `ownchallenge`
--
ALTER TABLE `ownchallenge`
  ADD CONSTRAINT `ownchallenge_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `user` (`userName`),
  ADD CONSTRAINT `ownchallenge_ibfk_2` FOREIGN KEY (`title`) REFERENCES `challenge` (`title`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
