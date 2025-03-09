-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2025 a las 03:32:19
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
-- Base de datos: `ordenes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `IDOrden` int(50) NOT NULL,
  `Documento` varchar(50) NOT NULL,
  `NoDocumento` varchar(50) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Celular` varchar(50) NOT NULL,
  `Correo` varchar(60) NOT NULL,
  `NumeroMesa` int(11) NOT NULL,
  `Servicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`IDOrden`, `Documento`, `NoDocumento`, `Name`, `Celular`, `Correo`, `NumeroMesa`, `Servicio`) VALUES
(6, 'CC', '6565', 'Soy un crack', '311111111', 'durfayplay@gmail.com', 1, 'llevar'),
(7, 'CC', '45616541', 'sara', '313131', 'dianita-samueldavid@hotmail.com', 4, 'restaurante'),
(8, 'CC', '45616541', 'este si', '45451', 'durfayplay@gmail.com', 7, 'restaurante'),
(9, 'CC', '6333333', 'este si', '45451', 'vixpreme+083@gmail.com', 8, 'restaurante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`IDOrden`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `IDOrden` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
