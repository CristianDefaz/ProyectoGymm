-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2023 a las 15:22:10
-- Versión del servidor: 10.4.27-MariaDB-log
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_gym_dos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `cliente_id` int(11) NOT NULL,
  `cli_cedula` varchar(10) NOT NULL,
  `cli_nombre` varchar(30) NOT NULL,
  `cli_apellido` varchar(30) NOT NULL,
  `cli_fecha_nacimiento` date NOT NULL,
  `cli_genero` varchar(30) NOT NULL,
  `cli_altura` varchar(20) NOT NULL,
  `cli_peso` varchar(20) NOT NULL,
  `cli_telefono` int(10) NOT NULL,
  `cli_direccion` varchar(50) NOT NULL,
  `id_empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cli_cedula`, `cli_nombre`, `cli_apellido`, `cli_fecha_nacimiento`, `cli_genero`, `cli_altura`, `cli_peso`, `cli_telefono`, `cli_direccion`, `id_empleado`) VALUES
(2, '1600618381', 'Ariel', 'Llerena', '2022-11-03', 'Masculino', '1.60', '38', 998674117, 'Sueño de bolivar', 40),
(22, '1720713112', 'Maria ', 'Santana', '2023-06-01', 'Femenino', '1.54', '45', 987456321, 'Quito', 40),
(25, '1715395479', 'Melany', 'Vizcaino', '2002-02-07', 'Femenino', '1.54', '25', 987451569, 'Santo domingo', 40),
(26, '1804233151', 'luis', 'Llerena', '2023-07-08', 'Masculino', '1.70', '45', 987456321, 'Loja', 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `em_id` int(11) NOT NULL,
  `em_nombre` varchar(30) NOT NULL,
  `em_apellido` varchar(30) NOT NULL,
  `em_cedula` varchar(10) NOT NULL,
  `em_telefono` varchar(10) NOT NULL,
  `em_correo` varchar(20) NOT NULL,
  `em_contrasena` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`em_id`, `em_nombre`, `em_apellido`, `em_cedula`, `em_telefono`, `em_correo`, `em_contrasena`, `rol_id`) VALUES
(1, 'Jhonny ', 'Miranda', '2300035421', '023791167', 'admin', '$2y$10$HyKl/4mJKK9vkjf5I5MW1Ok/qF08fd7h3NOSGJnT8qHX7H/OgUo0a', 1),
(32, 'Ariel', 'LLerena', '1600618381', '0896523147', 'ariel', '$2y$10$Je9xZDTaPyknWTJLH5lotODxhjDT597qz8Z3mq4tQD9b1x.j2sZji', 2),
(40, 'Cristian', 'Defaz', '1721664090', '0987654321', 'cristian', '$2y$10$td4vNMi2pobtCxc96Y1MJeErL5X1cKz0ONjgwwDhuWSnzJJmkePKe', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `factura_id` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `fa_fecha` date NOT NULL,
  `men_id` int(11) NOT NULL,
  `fa_montol_total` float NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`factura_id`, `cli_id`, `fa_fecha`, `men_id`, `fa_montol_total`, `id_empleado`) VALUES
(15, 2, '2023-07-06', 3, 20, 40),
(16, 25, '2023-07-09', 4, 120, 40),
(17, 26, '2023-07-07', 3, 20, 40);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `membresia`
--

CREATE TABLE `membresia` (
  `men_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `men_fecha_inicio` datetime NOT NULL,
  `men_fecha_fin` datetime NOT NULL,
  `men_estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `membresia`
--

INSERT INTO `membresia` (`men_id`, `cliente_id`, `tipo_id`, `men_fecha_inicio`, `men_fecha_fin`, `men_estado`) VALUES
(33, 2, 3, '2023-07-05 23:21:00', '2023-08-05 23:21:00', 'Activo'),
(35, 25, 4, '2023-07-06 00:22:00', '2024-01-06 00:22:00', 'Activo'),
(36, 22, 6, '2023-07-06 22:42:00', '2023-07-06 22:43:00', 'Expirado'),
(37, 26, 6, '2023-07-07 10:05:00', '2023-07-07 10:06:00', 'Expirado'),
(38, 26, 3, '2023-07-07 10:06:00', '2023-08-07 10:06:00', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `rol_nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol_nombre`) VALUES
(1, 'Administrador '),
(2, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_menbresia`
--

CREATE TABLE `tipo_menbresia` (
  `tipo_id` int(11) NOT NULL,
  `tipo_menbresia` varchar(30) NOT NULL,
  `tipo_descripcion` varchar(50) NOT NULL,
  `tipo_duracion` int(11) NOT NULL,
  `tipo_precio_mensual` float NOT NULL,
  `tipo_costo` float NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_menbresia`
--

INSERT INTO `tipo_menbresia` (`tipo_id`, `tipo_menbresia`, `tipo_descripcion`, `tipo_duracion`, `tipo_precio_mensual`, `tipo_costo`, `id_empleado`) VALUES
(3, 'Mensual', 'Membresia valida por 1 mes', 1, 20, 20, 1),
(4, 'Semestral', 'Membresia valida por 6 meses', 6, 20, 120, 1),
(5, 'Anual', 'Membresia valida por 1 año', 12, 20, 240, 1),
(6, '1 minuto', 'dura 1 minuto', 1, 5, 5, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cliente_id`),
  ADD UNIQUE KEY `cli_cedula` (`cli_cedula`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`em_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`factura_id`),
  ADD KEY `men_id` (`cli_id`),
  ADD KEY `em_id` (`id_empleado`),
  ADD KEY `cli_id` (`cli_id`),
  ADD KEY `men_id_2` (`men_id`);

--
-- Indices de la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD PRIMARY KEY (`men_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `tipo_id` (`tipo_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tipo_menbresia`
--
ALTER TABLE `tipo_menbresia`
  ADD PRIMARY KEY (`tipo_id`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `factura_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `membresia`
--
ALTER TABLE `membresia`
  MODIFY `men_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_menbresia`
--
ALTER TABLE `tipo_menbresia`
  MODIFY `tipo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`em_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`em_id`),
  ADD CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cliente_id`),
  ADD CONSTRAINT `facturas_ibfk_3` FOREIGN KEY (`men_id`) REFERENCES `tipo_menbresia` (`tipo_id`);

--
-- Filtros para la tabla `membresia`
--
ALTER TABLE `membresia`
  ADD CONSTRAINT `membresia_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `membresia_ibfk_2` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_menbresia` (`tipo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo_menbresia`
--
ALTER TABLE `tipo_menbresia`
  ADD CONSTRAINT `tipo_menbresia_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`em_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
