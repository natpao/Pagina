-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 03:40:47
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chefcito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(3) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidoPaterno` varchar(30) DEFAULT NULL,
  `apellidoMaterno` varchar(30) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `telefono`, `direccion`, `usuario`, `password`, `estado`) VALUES
(1, 'Nataly Paola', 'Avila ', 'Pineda', '7721063982', 'Pachuca', 'Nataly21', '1234', 1),
(2, 'Axel', 'Martínez', 'Sanjuan', '7721063982', 'San Pablo Oxtotipan', 'AMS21', '1234', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(3) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidoPaterno` varchar(30) DEFAULT NULL,
  `apellidoMaterno` varchar(30) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `horaEntrada` time DEFAULT NULL,
  `horaSalida` time DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `telefono`, `direccion`, `horaEntrada`, `horaSalida`, `usuario`, `password`, `estado`) VALUES
(1, 'Jacim', 'Vera', 'Fortiz', '7721141525', 'Pachuca de soto', '08:00:00', '17:30:00', 'Jacim2001', '1234', 1),
(2, 'Axel', 'Martínez', 'Sanjuan', '7721063982', 'San Pablo Oxtotipan', '00:00:00', '00:00:00', 'AMS21', '', 1),
(3, 'Nataly Paola', 'Avila', 'Pineda', '7721063990', 'Pachuca', '23:05:00', '01:05:00', 'Nataly21', '', 1),
(4, 'Gustavo Alfonso', 'Trejo', 'Lugo', '7721141966', 'Ixmiquilpan, el Mandho', '08:00:00', '17:00:00', 'Gus17', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillo`
--

CREATE TABLE `platillo` (
  `idPlatillo` int(3) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `precio` float(10,2) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `platillo`
--

INSERT INTO `platillo` (`idPlatillo`, `nombre`, `descripcion`, `precio`, `stock`, `estado`) VALUES
(1, 'Spaguetti', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quae totam reiciendis laborum numquam ea, rem, veniam quasi, ex suscipit porro provident corporis. Voluptatem officiis, nisi beatae accusamus ducimus magni quasi dolor sequi non placeat', 65.00, 20, 1),
(2, 'Pizza', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ducimus ipsum, repudiandae nemo quod id repellendus excepturi blanditiis atque aspernatur ex eum provident perferendis illum, autem nihil corporis aperiam consequuntur.', 99.00, 10, 1),
(3, 'Arroz Blanco', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ducimus ipsum, repudiandae nemo quod id repellendus excepturi blanditiis atque aspernatur ex eum provident perferendis illum, autem nihil corporis aperiam consequuntur.', 76.00, 10, 1),
(4, 'Sushi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ducimus ipsum, repudiandae nemo quod id repellendus excepturi blanditiis atque aspernatur ex eum provident perferendis illum, autem nihil corporis aperiam consequuntur.', 130.00, 10, 1),
(5, 'Chile Ahogado', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ducimus ipsum, repudiandae nemo quod id repellendus excepturi blanditiis atque aspernatur ex eum provident perferendis illum, autem nihil corporis aperiam consequuntur.', 56.00, 10, 1),
(6, 'Tacos en salsa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ducimus ipsum, repudiandae nemo quod id repellendus excepturi blanditiis atque aspernatur ex eum provident perferendis illum, autem nihil corporis aperiam consequuntur.', 35.00, 10, 1),
(7, 'Banana Split', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ducimus ipsum, repudiandae nemo quod id repellendus excepturi blanditiis atque aspernatur ex eum provident perferendis illum, autem nihil corporis aperiam consequuntur.', 23.00, 10, 1),
(8, 'Pastel de chocolate', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ducimus ipsum, repudiandae nemo quod id repellendus excepturi blanditiis atque aspernatur ex eum provident perferendis illum, autem nihil corporis aperiam consequuntur.', 100.00, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idVenta` int(3) NOT NULL,
  `idCliente` int(3) DEFAULT NULL,
  `idPlatillo` int(3) DEFAULT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` float(10,2) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idVenta`, `idCliente`, `idPlatillo`, `fecha`, `cantidad`, `total`, `estado`) VALUES
(1, 1, 1, '2020-12-02', 2, 200.00, 1),
(2, 1, 6, '2020-12-17', 2, 70.00, 1),
(3, 2, 1, '2020-12-03', 2, 70.00, 1),
(4, 1, 8, '2020-12-09', 2, 200.00, 1),
(5, 2, 3, '2020-12-03', 2, 50.00, 1),
(6, 1, 2, '2020-12-03', 2, 200.00, 1),
(7, 1, 4, '2020-12-17', 2, 70.00, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `platillo`
--
ALTER TABLE `platillo`
  ADD PRIMARY KEY (`idPlatillo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `platillo`
--
ALTER TABLE `platillo`
  MODIFY `idPlatillo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idVenta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
