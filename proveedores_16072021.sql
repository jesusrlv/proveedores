-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-07-2021 a las 22:56:25
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proveedores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `id` int(11) NOT NULL,
  `banco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_cuenta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `no_clabe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sucursal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `concepto` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_ext` int(11) NOT NULL,
  `validacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `banco`
--

INSERT INTO `banco` (`id`, `banco`, `no_cuenta`, `no_clabe`, `sucursal`, `concepto`, `id_ext`, `validacion`) VALUES
(1, 'banorte', '1', '1', '1', 'tahona', 12, 2),
(2, 'BANORTE', '123456789', 'A1W32E4E', '1', 'pago en banco', 12, 2),
(3, 'BANREGIO', '123456789', 'QQA133ED4', 'tahona', 'Zacatecas', 12, 2),
(4, '2', '1', '1', '2', 'uno', 13, 1),
(5, 'BANORTE', '61762826354372828', '8384784573', 'tahona', 'pago en banco', 13, 2),
(6, 'BANREGIO', '61762826354372828', 'A1W32E4E', '1', 'Zacatecas', 13, 1),
(7, 'BANORTE', '123456789', '8384784573', '1', 'pago en banco', 13, 0),
(8, 'BBVA BANCOMER', '5454332344555', '333224555', 'ZACATECAS', 'PAGO', 13, 0),
(9, 'BANBAJÃO', '00987U654', '4567ER', 'TAHONA', 'PAGO EN LÃNEA', 1, 0),
(10, 'BANBAJÃO', '5454332344555', '8384784573', 'ZACATECAS', 'Zacatecas', 1, 0),
(11, 'BANORTE', '00987U654', 'QQA133ED4', 'TAHONA', 'PAGO EN LÃNEA', 1, 0),
(13, 'BANBAJÃO', '5454332344555', '999999991', 'TAHONA', 'PAGO EN LÃNEA', 14, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `fisc_apellido` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fisc_nombre` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fisc_curp` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rfc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moral_razon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moral_denominacion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `moral_archivo_acta` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_usr` int(11) NOT NULL,
  `validacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `id_ext`, `fisc_apellido`, `fisc_nombre`, `fisc_curp`, `rfc`, `moral_razon`, `moral_denominacion`, `moral_archivo_acta`, `tipo_usr`, `validacion`) VALUES
(1, 1, 'leañso', 'jesus', 'LEVJ810924', 'LEVJ810924', '', '', '', 1, 0),
(2, 2, 'LeaÃ±os Villegas', 'JESUS RODOLFO', 'LEVJ810924HZSXLS04', 'LEVJ8109248K3', '', '', '', 1, 0),
(3, 6, 'LeaÃ±os Villegas', 'JESUS RODOLFO', 'LEVJ810924HZSXLS04', 'LEVJ8109248K3', '', '', '', 1, 0),
(4, 7, 'LeaÃ±os Villegas', 'JESUS RODOLFO', 'LEVJ810924HZSXLS04', 'LEVJ8109248K3', '', '', '', 1, 0),
(20, 12, '', '', '', 'LEVJ8109248K3', 'X', 'x', 'archivos/acta_personas_morales_12.pdf', 2, 1),
(21, 13, 'LeaÃ±os Villegas', 'JESUS RODOLFO', 'LEVJ810924HZSXLS04', 'LEVJ8109248K3', 'a', 'a', '', 1, 1),
(25, 14, '', '', '', 'LEVJ8109248K3', 'Jesus Rodolfo', 'Rodolfo LeaÃ±os', 'archivos/acta_personas_morales_14.pdf', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `colonia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(11) NOT NULL,
  `n_int` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `n_ext` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tel_of` int(11) DEFAULT NULL,
  `tel_cel` int(11) DEFAULT NULL,
  `validacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `id_ext`, `colonia`, `cp`, `n_int`, `n_ext`, `email`, `tel_of`, `tel_cel`, `validacion`) VALUES
(1, 12, 'xss', 999999, '99999', '99999', 'jesusrlvrojo@gmail.com', 99999, 99999, 1),
(4, 14, 'El Carmen', 98608, '12', 'A', 'jesusrlvrojo@gmail.com', 99999, 99999, 1),
(5, 13, 'xss33', 98608, '99997', '12', 'jesusrlvrojo@gmail.com', 492, 7777777, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docs`
--

CREATE TABLE `docs` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `ruta` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `validacion` int(11) NOT NULL,
  `observaciones` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `vigencia` date DEFAULT NULL,
  `fecha_agregado` datetime NOT NULL,
  `fecha_actualizado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `docs`
--

INSERT INTO `docs` (`id`, `id_ext`, `ruta`, `tipo_doc`, `validacion`, `observaciones`, `vigencia`, `fecha_agregado`, `fecha_actualizado`) VALUES
(25, 12, '../archivos/archivo3_12.pdf', 3, 0, '', NULL, '2021-03-25 15:55:50', '0000-00-00 00:00:00'),
(26, 12, '../archivos/archivo4_12.pdf', 4, 0, '', NULL, '2021-03-25 15:55:55', '0000-00-00 00:00:00'),
(27, 12, '../archivos/archivo5_12.pdf', 5, 1, '', NULL, '2021-03-25 15:55:59', '0000-00-00 00:00:00'),
(28, 12, '../archivos/archivo6_12.pdf', 6, 1, '', NULL, '2021-03-25 15:56:03', '0000-00-00 00:00:00'),
(29, 12, '../archivos/archivo7_12.pdf', 7, 1, '', NULL, '2021-03-25 15:56:06', '0000-00-00 00:00:00'),
(30, 12, '../archivos/archivo1_12.pdf', 1, 1, '', NULL, '2021-03-25 15:56:40', '0000-00-00 00:00:00'),
(31, 12, '../archivos/archivo2_12.pdf', 2, 1, '', NULL, '2021-03-25 15:56:43', '0000-00-00 00:00:00'),
(32, 12, '../archivos/archivo8_12.pdf', 8, 1, '', NULL, '2021-03-25 16:06:04', '0000-00-00 00:00:00'),
(33, 14, '../archivos/archivo1_14.pdf', 1, 1, '', NULL, '2021-06-28 10:02:59', '0000-00-00 00:00:00'),
(34, 14, '../archivos/archivo2_14.pdf', 2, 1, '', NULL, '2021-06-28 10:03:04', '0000-00-00 00:00:00'),
(35, 14, '../archivos/archivo3_14.pdf', 3, 1, '', NULL, '2021-06-28 10:03:11', '0000-00-00 00:00:00'),
(36, 14, '../archivos/archivo4_14.pdf', 4, 1, '', NULL, '2021-06-28 10:03:16', '0000-00-00 00:00:00'),
(37, 14, '../archivos/archivo5_14.pdf', 5, 1, '', NULL, '2021-06-28 10:03:20', '0000-00-00 00:00:00'),
(38, 14, '../archivos/archivo6_14.pdf', 6, 1, '', NULL, '2021-06-28 10:03:24', '0000-00-00 00:00:00'),
(39, 14, '../archivos/archivo7_14.pdf', 7, 1, '', NULL, '2021-06-28 10:03:35', '0000-00-00 00:00:00'),
(40, 14, '../archivos/archivo8_14.pdf', 8, 1, '', NULL, '2021-06-28 10:03:57', '0000-00-00 00:00:00'),
(65, 13, 'archivos/archivo1_13.pdf', 1, 1, '', NULL, '2021-07-01 14:59:41', '0000-00-00 00:00:00'),
(66, 13, 'archivos/archivo2_13.pdf', 2, 1, '', '2021-07-02', '2021-07-01 14:59:45', '0000-00-00 00:00:00'),
(67, 13, 'archivos/archivo3_13.pdf', 3, 1, '', NULL, '2021-07-01 15:00:02', '0000-00-00 00:00:00'),
(68, 13, 'archivos/archivo4_13.pdf', 4, 1, '', NULL, '2021-07-01 15:00:10', '0000-00-00 00:00:00'),
(69, 13, 'archivos/archivo5_13.pdf', 5, 1, '', NULL, '2021-07-01 15:00:14', '0000-00-00 00:00:00'),
(70, 13, 'archivos/archivo6_13.pdf', 6, 1, '', NULL, '2021-07-01 15:00:18', '0000-00-00 00:00:00'),
(71, 13, 'archivos/archivo7_13.pdf', 7, 1, '', '2021-07-30', '2021-07-01 15:00:22', '0000-00-00 00:00:00'),
(72, 13, 'archivos/archivo8_13.pdf', 8, 1, '', '2021-07-03', '2021-07-01 15:00:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `rcb1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cedula_prov` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `const_fiscal` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `comp_domicilio` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `caratula_edo_cuenta` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ine` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `formato_d32` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `opinion_estatal` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `observaciones` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `validacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `a_h_ref` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `observaciones`
--

CREATE TABLE `observaciones` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `observaciones` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `seccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `observaciones`
--

INSERT INTO `observaciones` (`id`, `id_ext`, `observaciones`, `seccion`) VALUES
(1, 14, 'observaciÃ³n secciÃ³n 1', 1),
(2, 14, 'secciÃ³n 2', 2),
(3, 14, 'secciÃ³n 3', 3),
(4, 14, 'secciÃ³n 4', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `nombre`, `usuario`, `pwd`, `perfil`) VALUES
(1, 'uno', 'jesusrlv@correo.com', '123456789', 1),
(2, 'Rodolfo LeaÃ±os', '', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(6, 'Rodolfo LeaÃ±os', 'jesusrl@gmail.com.mx', '9a0c3013dbacdda1873e4a153346dc5c', 1),
(12, 'JesusRLV', 'jesusr@gmail.com', '18a9f76e9e5f5d1237a02a27a3246a1c', 1),
(13, 'Proveedor 1', 'jesusrlv_rojo@hotmail.com', '123456789qwerty', 1),
(14, 'Proveedor 2', 'jesusrlv@hotmail.com', '123456789qwerty', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validacion`
--

CREATE TABLE `validacion` (
  `id` int(11) NOT NULL,
  `id_ext` int(11) NOT NULL,
  `tipo` int(11) NOT NULL COMMENT '1 para datos, 2 para dirección, 3 para cuentas, 4 para documentos',
  `validacion` int(11) NOT NULL COMMENT '0 para no validado, 1 en revisión, 2 validado',
  `observaciones` varchar(700) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `validacion`
--

INSERT INTO `validacion` (`id`, `id_ext`, `tipo`, `validacion`, `observaciones`) VALUES
(6, 13, 1, 2, NULL),
(19, 1, 3, 0, NULL),
(20, 1, 4, 0, NULL),
(21, 14, 1, 1, NULL),
(22, 14, 2, 1, NULL),
(24, 14, 4, 2, NULL),
(34, 13, 2, 2, NULL),
(35, 14, 3, 1, NULL),
(36, 13, 4, 2, NULL),
(37, 13, 3, 2, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docs`
--
ALTER TABLE `docs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `validacion`
--
ALTER TABLE `validacion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `docs`
--
ALTER TABLE `docs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `observaciones`
--
ALTER TABLE `observaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `validacion`
--
ALTER TABLE `validacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
