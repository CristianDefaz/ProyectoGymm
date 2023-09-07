-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2023 a las 23:28:22
-- Versión del servidor: 10.4.27-MariaDB
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
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE `auditoria` (
  `id_historial` int(11) NOT NULL,
  `detalle` varchar(255) NOT NULL,
  `cli_nombre` varchar(30) NOT NULL,
  `cli_apellido` varchar(30) NOT NULL,
  `cli_fecha_nacimiento` date NOT NULL,
  `cli_genero` varchar(40) NOT NULL,
  `cli_altura` varchar(40) NOT NULL,
  `cli_peso` varchar(40) NOT NULL,
  `cli_telefono` varchar(40) NOT NULL,
  `cli_direccion` varchar(40) NOT NULL,
  `cli_email` varchar(40) NOT NULL,
  `cli_contrasena` varchar(40) NOT NULL,
  `em_nombre` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `nom_tabla` varchar(40) NOT NULL,
  `operacion_tabla` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `auditoria`
--

INSERT INTO `auditoria` (`id_historial`, `detalle`, `cli_nombre`, `cli_apellido`, `cli_fecha_nacimiento`, `cli_genero`, `cli_altura`, `cli_peso`, `cli_telefono`, `cli_direccion`, `cli_email`, `cli_contrasena`, `em_nombre`, `usuario`, `nom_tabla`, `operacion_tabla`) VALUES
(23, 'SE ELIMINO UN REGISTRO ', 'aaaa', 'sdsd', '2023-08-10', 'Masculino', '22', '2', '33', 'iii', 'kevin@g.com', '$2y$10$MxA/zmCb3jd4OPK7tPBZo.juePjubPUL7', 'Jhonny ', 'Jhonny ', 'cliente', 'DELETE'),
(24, 'SE ACTUALIZÓ UN REGISTRO ', 'ssss', 'Gregorio', '2023-08-01', 'Masculino', '1.64', '38', '998674117', 'Quito', 'crissssz191@gmail.com', '$2y$10$RhU/H3VYBwhoj9h6kc.oreZ7P9vA5q8bI', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(25, 'SE ACTUALIZÓ UN REGISTRO', 'dddd', 'Gregorio', '2023-08-01', 'Masculino', '1.64', '38', '998674117', 'Quito', 'crissssz191@gmail.com', '$2y$10$o9TnwXnOatKLeVt9S1K6COqze3MIWfl5B', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(26, 'SE ELIMINO UN REGISTRO', 'keev', 'sa', '2023-08-09', 'Femenino', '1.60', '38', '9999999999', 'Sueño de bolivar', 'kevin@g.com', '$2y$10$rkx7irAiOf42cBDsPmJVmOHnLV3W9fwzj', 'keev', 'keev', 'cliente', 'DELETE'),
(27, 'SE ACTUALIZÓ UN REGISTRO', 'Cristiad', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$g1fzmzCHXH8y2UHfCnBp2.rtf68a9pDdN', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(28, 'SE ACTUALIZÓ UN REGISTRO', 'Cristian', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$ZqIxBPXw9pivZ8JU2ZwsUunx1mTGZSqTs', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(29, 'SE ACTUALIZÓ UN REGISTRO', 'keev', 'sa', '2023-08-24', 'Masculino', '1.60', '38', '9999999999', 'Sueño de bolivar', 'kevinsan16@gmail.com', '$2y$10$YVUQdQICSpoU47uXBI1jF.6zRERvKzBxv', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(30, 'SE ACTUALIZÓ UN REGISTRO', 'Cristian', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$g1J69l7GGAb9.ooZ9.qOK.pi66PuWa6Tl', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(31, 'SE ACTUALIZÓ UN REGISTRO', 'Cristian', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$uhB37BTu4I8FnLmhsfFA2e3CEBlhmAV9y', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(32, 'SE ACTUALIZÓ UN REGISTRO', 'Cristian', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$AUk5yc1qRkRL.IcsXFeWKelUBsHU/HW6Z', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(33, 'SE ACTUALIZÓ UN REGISTRO', 'Cristian', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$Mslyr/8NzDO.GCEBQKk3/eAzlNwDomxCj', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(34, 'SE ACTUALIZÓ UN REGISTRO', 'Cristian', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$k.tDYbG3oy3eyU1XSmxsIehOOLkW8NkUK', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(35, 'SE ACTUALIZÓ UN REGISTRO', 'Cristian', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$svvvPkDM4nuwTA9G3uGyDuelO8dcREHso', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(36, 'SE ELIMINO UN REGISTRO', 'dddd', 'Gregorio', '2023-08-01', 'Masculino', '1.64', '38', '998674117', 'Quito', 'crissssz191@gmail.com', '$2y$10$o9TnwXnOatKLeVt9S1K6COqze3MIWfl5B', 'Jhonny ', 'Jhonny ', 'cliente', 'DELETE'),
(37, 'SE ACTUALIZÓ UN REGISTRO', 'Cristian', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$.6EzqDRuI2WqVhTIKWkYhOzNo419GvkCo', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(38, 'SE ACTUALIZÓ UN REGISTRO', 'Juan', 'Vizcaino', '2023-08-04', 'Masculino', '1.65', '45', '0995583271', 'Santo Domingo', 'dylandefaz426@gmail.com', '$2y$10$S0sRUGR9f.NSmHO.zVef6OQn768Wlv4CV', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(39, 'SE ELIMINO UN REGISTRO', 'keev', 'sa', '2023-08-24', 'Masculino', '1.60', '38', '9999999999', 'Sueño de bolivar', 'kevinsan16@gmail.com', '$2y$10$YVUQdQICSpoU47uXBI1jF.6zRERvKzBxv', 'Jhonny ', 'Jhonny ', 'cliente', 'DELETE'),
(40, 'SE ACTUALIZÓ UN REGISTRO', 'Ariel', 'Llerena', '2023-08-11', 'Masculino', '1.65', '45', '0995583271', 'puyo', 'arielllerena2001@outlook.com', '$2y$10$mDtq2rUZgXIoVkZX5nLrGOYSqkEmiH51c', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(41, 'SE ELIMINO UN REGISTRO', 'Ariel', 'Llerena', '2023-08-11', 'Masculino', '1.65', '45', '0995583271', 'puyo', 'arielllerena2001@outlook.com', '$2y$10$mDtq2rUZgXIoVkZX5nLrGOYSqkEmiH51c', 'Jhonny ', 'Jhonny ', 'cliente', 'DELETE'),
(42, 'SE ACTUALIZÓ UN REGISTRO', 'Jhonny', 'Miranda', '2023-08-11', 'Masculino', '1.80', '45', '998674117', 'Sueño de bolivar', 'miranda3791167@gmail.com', '$2y$10$E9H.Low8xpr19lVvN.1euuryDE4vsDl.1', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(43, 'SE ACTUALIZÓ UN REGISTRO', 'Rita', 'Diaz', '2001-07-30', 'Femenino', '1.65', '68', '0999979129', 'Ambato', 'ritadiazv@gmail.com', '$2y$10$TvEeV0a.aiN896CB.xT0yOtHU1B88MMc8', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(44, 'SE ACTUALIZÓ UN REGISTRO', 'Rita', 'Diaz', '2001-07-30', 'Femenino', '1.65', '68', '0999979129', 'Ambato', 'ritadiazv@gmail.com', '$2y$10$II9Jr0kElylgsUuk7cqGKunXyB2YgegHE', 'Jhonny ', 'Jhonny ', 'cliente', 'UPDATE'),
(45, 'SE ELIMINO UN REGISTRO', 'Juan', 'Vizcaino', '2023-08-04', 'Masculino', '1.65', '45', '0995583271', 'Santo Domingo', 'dylandefaz426@gmail.com', '$2y$10$S0sRUGR9f.NSmHO.zVef6OQn768Wlv4CV', 'Jhonny ', 'Jhonny ', 'cliente', 'DELETE'),
(46, 'SE ACTUALIZÓ UN REGISTRO', 'Ariel', 'Llerena', '2023-09-01', 'Masculino', '1.54', '38', '0995583271', 'puyo', 'arielllerena2001@outlook.com', '$2y$10$pqKOYqziUMFNpo0oXzuLPe25u1M.az9iS', 'Ariel', 'Ariel', 'cliente', 'UPDATE'),
(47, 'SE ELIMINO UN REGISTRO', 'Ariel', 'Llerena', '2023-09-01', 'Masculino', '1.54', '38', '0995583271', 'puyo', 'arielllerena2001@outlook.com', '$2y$10$pqKOYqziUMFNpo0oXzuLPe25u1M.az9iS', 'Ariel', 'Ariel', 'cliente', 'DELETE'),
(48, 'SE ELIMINO UN REGISTRO', 'Dylan', 'Zambrano', '2023-09-06', 'Masculino', '1.70', '25', '45614641', 'Santo Domingo', 'dylandefaz426@gmail.com', '$2y$10$Aq0qTu4.wI8Snmo10nPx3esWMDVbxS3M1', 'Registro', 'Registro', 'cliente', 'DELETE'),
(49, 'SE ELIMINO UN REGISTRO', 'Dylan', 'Zambrano', '2023-10-04', 'Masculino', '1.60', '38', '0995583271', 'puyo', 'dylandefaz426@gmail.com', '$2y$10$d7JuYI2ONFRbJ1LwwSGlpOSIlTeO9gTYD', 'Registro', 'Registro', 'cliente', 'DELETE'),
(50, 'SE ELIMINO UN REGISTRO', 'Rita', 'Diaz', '2001-07-30', 'Femenino', '1.65', '68', '0999979129', 'Ambato', 'ritadiazv@gmail.com', '$2y$10$II9Jr0kElylgsUuk7cqGKunXyB2YgegHE', 'Jhonny ', 'Jhonny ', 'cliente', 'DELETE'),
(51, 'SE ELIMINO UN REGISTRO', 'Ariel', 'Llerena', '2023-09-22', 'Masculino', '1.54', '38', '987456321', 'puyo', 'arielllerena2001@outlook.com', '$2y$10$Xt8a2ioGBxDtC/udM6lZqOioWKpxsCQPc', 'Registro', 'Registro', 'cliente', 'DELETE'),
(52, 'SE ELIMINO UN REGISTRO', 'Jhonny', 'Miranda', '2023-08-11', 'Masculino', '1.80', '45', '998674117', 'Sueño de bolivar', 'miranda3791167@gmail.com', '$2y$10$E9H.Low8xpr19lVvN.1euuryDE4vsDl.1', 'Jhonny ', 'Jhonny ', 'cliente', 'DELETE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria2`
--

CREATE TABLE `auditoria2` (
  `id_auditoria2` int(11) NOT NULL,
  `detalle` varchar(255) NOT NULL,
  `em_nombre` varchar(40) DEFAULT NULL,
  `cli_nombre` varchar(40) NOT NULL,
  `usuario` varchar(40) NOT NULL,
  `nom_tabla` varchar(40) NOT NULL,
  `operacion_tabla` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `auditoria2`
--

INSERT INTO `auditoria2` (`id_auditoria2`, `detalle`, `em_nombre`, `cli_nombre`, `usuario`, `nom_tabla`, `operacion_tabla`) VALUES
(9, 'SE ACTUALIZÓ UNA FACTURA', 'Jhonny ', 'Cristiad Defaz', 'Jhonny ', 'factura', 'UPDATE'),
(10, 'SE CREÓ UNA FACTURA - ID Factura: 25 - Cliente: keev sa - Fecha: 2023-08-25 - Monto Total: 20 - Creada por Empleado: Jhonny ', 'Jhonny ', 'keev sa', 'Jhonny ', 'factura', 'INSERT'),
(11, 'SE ACTUALIZÓ UNA FACTURA', 'Jhonny ', 'Cristiad Defaz', 'Jhonny ', 'factura', 'UPDATE'),
(12, 'SE ACTUALIZÓ UNA FACTURA', 'Jhonny ', 'Cristiad Defaz', 'Jhonny ', 'factura', 'UPDATE'),
(13, 'SE ELIMINÓ UNA FACTURA', 'Ariel', 'dddd Gregorio', 'Ariel', 'factura', 'DELETE'),
(14, 'SE ELIMINÓ UNA FACTURA', 'Jhonny ', 'Cristiad Defaz', 'Jhonny ', 'factura', 'DELETE'),
(15, 'SE CREÓ UNA FACTURA - ID Factura: 26 - Cliente: keev sa - Fecha: 2023-08-15 - Monto Total: 240 - Creada por Empleado: Jhonny ', 'Jhonny ', 'keev sa', 'Jhonny ', 'factura', 'INSERT'),
(16, 'SE CREÓ UNA FACTURA - ID Factura: 27 - Cliente: keev sa - Fecha: 2023-08-15 - Monto Total: 20 - Creada por Empleado: Jhonny ', 'Jhonny ', 'keev sa', 'Jhonny ', 'factura', 'INSERT'),
(17, 'SE ELIMINÓ UNA FACTURA', 'Jhonny ', 'keev sa', 'Jhonny ', 'factura', 'DELETE'),
(18, 'SE ELIMINÓ UNA FACTURA', 'Jhonny ', 'keev sa', 'Jhonny ', 'factura', 'DELETE'),
(19, 'SE ELIMINÓ UNA FACTURA', 'Jhonny ', 'keev sa', 'Jhonny ', 'factura', 'DELETE'),
(20, 'SE ELIMINÓ UNA FACTURA', 'Jhonny ', 'Cristian Defaz', 'Jhonny ', 'factura', 'DELETE'),
(21, 'SE CREÓ UNA FACTURA - ID Factura: 28 - Cliente: Rita Diaz - Fecha: 2023-08-30 - Monto Total: 120 - Creada por Empleado: Jhonny ', 'Jhonny ', 'Rita Diaz', 'Jhonny ', 'factura', 'INSERT'),
(22, 'SE CREÓ UNA FACTURA - ID Factura: 29 - Cliente: Juan Vizcaino - Fecha: 2023-08-25 - Monto Total: 20 - Creada por Empleado: Jhonny ', 'Jhonny ', 'Juan Vizcaino', 'Jhonny ', 'factura', 'INSERT'),
(23, 'SE ELIMINÓ UNA FACTURA', 'Jhonny ', 'Juan Vizcaino', 'Jhonny ', 'factura', 'DELETE'),
(24, 'SE ELIMINÓ UNA FACTURA', 'Jhonny ', 'Rita Diaz', 'Jhonny ', 'factura', 'DELETE'),
(25, 'SE CREÓ UNA FACTURA - ID Factura: 30 - Cliente: Cristian Defaz - Fecha: 2023-09-30 - Monto Total: 20 - Creada por Empleado: Jhonny ', 'Jhonny ', 'Cristian Defaz', 'Jhonny ', 'factura', 'INSERT'),
(26, 'SE CREÓ UNA FACTURA - ID Factura: 31 - Cliente: Dylan Zambrano - Fecha: 2023-09-16 - Monto Total: 120 - Creada por Empleado: Jhonny ', 'Jhonny ', 'Dylan Zambrano', 'Jhonny ', 'factura', 'INSERT'),
(27, 'SE ELIMINÓ UNA FACTURA', 'Jhonny ', 'Cristian Defaz', 'Jhonny ', 'factura', 'DELETE'),
(28, 'SE CREÓ UNA FACTURA - ID Factura: 32 - Cliente: Cristian Defaz - Fecha: 2023-09-01 - Monto Total: 120 - Creada por Empleado: Jhonny ', 'Jhonny ', 'Cristian Defaz', 'Jhonny ', 'factura', 'INSERT');

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
  `cli_telefono` varchar(25) NOT NULL,
  `cli_direccion` varchar(50) NOT NULL,
  `cli_email` varchar(50) NOT NULL,
  `cli_contrasena` varchar(255) NOT NULL,
  `id_empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cliente_id`, `cli_cedula`, `cli_nombre`, `cli_apellido`, `cli_fecha_nacimiento`, `cli_genero`, `cli_altura`, `cli_peso`, `cli_telefono`, `cli_direccion`, `cli_email`, `cli_contrasena`, `id_empleado`) VALUES
(34, '1721664090', 'Cristian', 'Defaz', '2023-08-12', 'Masculino', '1.65', '45', '099558327', 'Santo domingo', 'cristiandefaz191@gmail.com', '$2y$10$.6EzqDRuI2WqVhTIKWkYhOzNo419GvkCoUROPRRViS5QFY3jEiLIm', 1),
(63, '1720713112', 'Dylan', 'Zambrano', '2023-10-04', 'Masculino', '1.60', '38', '0995583271', 'puyo', 'dylandefaz426@gmail.com', '$2y$10$QozTRikgqZMIO9J38ABrgOjjmsviEWje.WFgD.PNfEiefKAzhdjF6', 60),
(64, '0604899732', 'Kevin', 'Sanchez', '2023-09-06', 'Masculino', '1.64', '45', '987456321', 'Ambato', 'keevsanchez37@gmail.com', '$2y$10$0EZ5rRgJDG21s3IhPDKCZu9qW96WBsmjFEHPzJLLaEz1XCKJJykwG', 1),
(65, '0602559817', 'Pedro', 'Gregorio', '2023-09-06', 'Masculino', '1.70', '65', '0987452163', 'Quito', ' kevinsan16@gmail.com', '$2y$10$HnjKqc7HtXZHEt2gUKwsEu1cOgip8EQF2ODB7miEdHLfWoy4eLJ/e', 1),
(66, '2300035421', 'Jhonny', 'Miranda', '2000-06-10', 'Masculino', '1.82', '56', '0986532741', 'Santo Domingo', 'miranda3791167@gmail.com', '$2y$10$V94ZfvhraaPJyc04da9Aouw9Q6Lf6Sad2t0shxJAf1prF1JrYa.h.', 1),
(67, '0605996669', 'Karen', 'Torrez', '2003-04-13', 'Femenino', '1.54', '50', '0965874132', 'Puyo', 'kevinsan1835@gmail.com', '$2y$10$dkJdksWkHFb8cpojKjRPTuc7q0es4vxOzj/a3P51yymHsuPwenxTe', 1),
(68, '1600618381', 'Ariel', 'Llerena', '2004-02-20', 'Masculino', '1.60', '55', '0936528745', 'Puyo', 'arielllerena9@gmail.com', '$2y$10$WSevfqz3MuhrlWq1i5uMY.PXnzvIpf1mcCDija17MUCotwiyAi65i', 1),
(69, '1600095564', 'Margoth', 'Robbie', '1987-11-06', 'Femenino', '1.55', '50', '0996325874', 'Santo domingo', 'margoth555@live.com', '$2y$10$mynPTwpSujVADdZp7pWmb.yTtEaTwG.vkSElImCWLnYWk.oB0MXrm', 1),
(70, '1715395479', 'German', 'Montenegro', '1985-06-01', 'Masculino', '1.65', '67', '0995685674', 'Loja', 'crisferd.2004@hotmail.com', '$2y$10$VfqJyCUUxmQCkhzf8JvOrew/WMgjEwfz0dp.89E8vIato/a3b8RHW', 1);

--
-- Disparadores `cliente`
--
DELIMITER $$
CREATE TRIGGER `AUDITORIA_ACTUALIZAR_CLIENTE` AFTER UPDATE ON `cliente` FOR EACH ROW BEGIN
    DECLARE empleado_nombre VARCHAR(255);
    SELECT em_nombre INTO empleado_nombre
    FROM empleado
    WHERE em_id = NEW.id_empleado;

    INSERT INTO auditoria (
        detalle,
        em_nombre,
        cli_nombre,
        cli_apellido,
        cli_fecha_nacimiento,
        cli_genero,
        cli_altura,
        cli_peso,
        cli_telefono,
        cli_direccion,
        cli_email,
        cli_contrasena,
        usuario,
        nom_tabla,
        operacion_tabla
    )
    VALUES (
        CONCAT(
            'SE ACTUALIZÓ UN REGISTRO'
        ),
        empleado_nombre,
        NEW.cli_nombre,
        NEW.cli_apellido,
        NEW.cli_fecha_nacimiento,
        NEW.cli_genero,
        NEW.cli_altura,
        NEW.cli_peso,
        NEW.cli_telefono,
        NEW.cli_direccion,
        NEW.cli_email,
        NEW.cli_contrasena,
        empleado_nombre,
        'cliente',
        'UPDATE'
    );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `AUDITORIA_ELIMINAR` AFTER DELETE ON `cliente` FOR EACH ROW BEGIN
    DECLARE empleado_nombre VARCHAR(255);
    SELECT em_nombre INTO empleado_nombre
    FROM empleado
    WHERE em_id = OLD.id_empleado;

    INSERT INTO auditoria (
        detalle,
        em_nombre,
        cli_nombre,
        cli_apellido,
        cli_fecha_nacimiento,
        cli_genero,
        cli_altura,
        cli_peso,
        cli_telefono,
        cli_direccion,
        cli_email,
        cli_contrasena,
        usuario,
        nom_tabla,
        operacion_tabla
    )
    VALUES (
        CONCAT(
            'SE ELIMINO UN REGISTRO'
        ),
        empleado_nombre,
        OLD.cli_nombre,
        OLD.cli_apellido,
        OLD.cli_fecha_nacimiento,
        OLD.cli_genero,
        OLD.cli_altura,
        OLD.cli_peso,
        OLD.cli_telefono,
        OLD.cli_direccion,
        OLD.cli_email,
        OLD.cli_contrasena,
        empleado_nombre,
        'cliente',
        'DELETE'
    );
END
$$
DELIMITER ;

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
(32, 'Ariel', 'LLerena', '1600618381', '0896523147', 'ariel', '$2y$10$EB9PM9CDF.QhMaxbD6ZPPuQECq1hHEFWbLND91xLfncDFqJoxEUJC', 2),
(40, 'Cristian', 'Defaz', '1721664090', '0987654321', 'cristian', '$2y$10$td4vNMi2pobtCxc96Y1MJeErL5X1cKz0ONjgwwDhuWSnzJJmkePKe', 1),
(59, 'keev', 'sa', '0604899732', '9999999999', 'kevin@gmail.com', '$2y$10$nnqaXyE2OHgSuKOTx/r6sOSFlNDTdS//EOzAMnWg3uYO2qHntjmmC', 2),
(60, 'Registro', ' Clientes', '1600095564', '0987654321', 'Clientes', '$2y$10$EIUaeeVSLSpQIt9t2L6Em.h9aiZn4jL4q7UxetmlMtnKg9aBzHoFW', 1);

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
(31, 63, '2023-09-16', 4, 120, 1),
(32, 34, '2023-09-01', 4, 120, 1);

--
-- Disparadores `facturas`
--
DELIMITER $$
CREATE TRIGGER `AUDITORIA_ACTUALIZAR_FACTURA` AFTER UPDATE ON `facturas` FOR EACH ROW BEGIN
    DECLARE empleado_nombre VARCHAR(255);
    DECLARE cliente_nombre VARCHAR(255);

    SELECT em_nombre INTO empleado_nombre
    FROM empleado
    WHERE em_id = NEW.id_empleado;

    SELECT CONCAT(cli_nombre, ' ', cli_apellido) INTO cliente_nombre
    FROM cliente
    WHERE cliente_id = NEW.cli_id;

    INSERT INTO auditoria2 (
        detalle,
        em_nombre,
        cli_nombre,
        usuario,
        nom_tabla,
        operacion_tabla
    )
    VALUES (
        CONCAT(
            'SE ACTUALIZÓ UNA FACTURA'
        ),
        empleado_nombre,
        cliente_nombre,
        empleado_nombre,
        'factura',
        'UPDATE'
    );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `AUDITORIA_CREAR_FACTURA` AFTER INSERT ON `facturas` FOR EACH ROW BEGIN
    DECLARE empleado_nombre VARCHAR(255);
    DECLARE cliente_nombre VARCHAR(255);
    
    SELECT em_nombre INTO empleado_nombre
    FROM empleado
    WHERE em_id = NEW.id_empleado;

    SELECT CONCAT(cli_nombre, ' ', cli_apellido) INTO cliente_nombre
    FROM cliente
    WHERE cliente_id = NEW.cli_id;

    INSERT INTO auditoria2 (
        detalle,
        em_nombre,
        cli_nombre,
        usuario,
        nom_tabla,
        operacion_tabla
    )
    VALUES (
        CONCAT(
            'SE CREÓ UNA FACTURA - ID Factura: ', NEW.factura_id,
            ' - Cliente: ', cliente_nombre,
            ' - Fecha: ', NEW.fa_fecha,
            ' - Monto Total: ', NEW.fa_montol_total,
            ' - Creada por Empleado: ', empleado_nombre
        ),
        empleado_nombre,
        cliente_nombre,
        empleado_nombre,
        'factura',
        'INSERT'
    );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `AUDITORIA_ELIMINAR_FACTURA` AFTER DELETE ON `facturas` FOR EACH ROW BEGIN
    DECLARE empleado_nombre VARCHAR(255);
    DECLARE cliente_nombre VARCHAR(255);
    
    SELECT em_nombre INTO empleado_nombre
    FROM empleado
    WHERE em_id = OLD.id_empleado;

    SELECT CONCAT(cli_nombre, ' ', cli_apellido) INTO cliente_nombre
    FROM cliente
    WHERE cliente_id = OLD.cli_id;

    INSERT INTO auditoria2 (
        detalle,
        em_nombre,
        cli_nombre,
        usuario,
        nom_tabla,
        operacion_tabla
    )
    VALUES (
        CONCAT(
            'SE ELIMINÓ UNA FACTURA'
        ),
        empleado_nombre,
        cliente_nombre,
        empleado_nombre,
        'factura',
        'DELETE'
    );
END
$$
DELIMITER ;

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
(99, 34, 3, '2023-09-06 09:34:00', '2023-10-06 09:34:00', 'Activo'),
(100, 63, 4, '2023-09-06 09:34:00', '2024-03-06 09:34:00', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibos_membresia`
--

CREATE TABLE `recibos_membresia` (
  `id_recibo` int(11) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `fa_fecha` date NOT NULL,
  `men_id` int(11) NOT NULL,
  `fa_montol_total` float NOT NULL,
  `estado` varchar(30) NOT NULL,
  `imagen` varchar(256) NOT NULL,
  `id_empleado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `recibos_membresia`
--

INSERT INTO `recibos_membresia` (`id_recibo`, `cli_id`, `fa_fecha`, `men_id`, `fa_montol_total`, `estado`, `imagen`, `id_empleado`) VALUES
(52, 34, '2023-09-01', 3, 20, 'Activo', '../../../facturas/MR WINGS LOGO.png', NULL),
(53, 58, '2023-08-30', 4, 120, 'Activo', '../../../facturas/MR LOGO 2.png', NULL);

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
-- Indices de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`id_historial`);

--
-- Indices de la tabla `auditoria2`
--
ALTER TABLE `auditoria2`
  ADD PRIMARY KEY (`id_auditoria2`);

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
  ADD UNIQUE KEY `cliente_id_2` (`cliente_id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `tipo_id` (`tipo_id`);

--
-- Indices de la tabla `recibos_membresia`
--
ALTER TABLE `recibos_membresia`
  ADD PRIMARY KEY (`id_recibo`),
  ADD KEY `cli_id` (`cli_id`,`men_id`),
  ADD KEY `men_id` (`men_id`);

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
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `id_historial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `auditoria2`
--
ALTER TABLE `auditoria2`
  MODIFY `id_auditoria2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `em_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `factura_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `membresia`
--
ALTER TABLE `membresia`
  MODIFY `men_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `recibos_membresia`
--
ALTER TABLE `recibos_membresia`
  MODIFY `id_recibo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
