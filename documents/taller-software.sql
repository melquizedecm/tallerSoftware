-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 23-11-2018 a las 17:34:00
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller-software`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`) VALUES
(3, 'Salones', 'Poltronas mesas'),
(4, 'Perfumes', 'Encuentra perfumes de todas las fragancias'),
(5, 'Celulares', 'Encuentra celulares de todas las gamas'),
(6, 'Camas', 'Encuentra la cama que desees'),
(7, 'Almohadas', 'Encuentra almohadas ortopedicas'),
(8, 'Inmuebles', 'Encuentra desde casas hasta mansiones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comision`
--

CREATE TABLE `comision` (
  `id` int(11) NOT NULL,
  `porcentaje` varchar(191) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comision`
--

INSERT INTO `comision` (`id`, `porcentaje`, `fecha`) VALUES
(1, '0.01', '2015-04-09 05:00:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`id`, `id_producto`, `cantidad`, `id_factura`) VALUES
(1, 66, 4, 1),
(6, 65, 1, 7),
(8, 68, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) UNSIGNED NOT NULL,
  `id_comision` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` varchar(30) NOT NULL DEFAULT 'pendiente',
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `id_cliente`, `id_comision`, `fecha`, `estado`, `total`) VALUES
(1, 1, 1, '2015-04-10 23:46:20', 'enviado', 50000),
(7, 11, 1, '2015-04-11 04:53:28', 'aprobado', 5000),
(9, 11, 1, '2015-04-14 02:57:50', 'aprobado', 45000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permiso_gestionar_usuarios` tinyint(1) DEFAULT NULL,
  `permiso_vender` tinyint(1) DEFAULT NULL,
  `permiso_gestionar_perfiles` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nombre`, `permiso_gestionar_usuarios`, `permiso_vender`, `permiso_gestionar_perfiles`) VALUES
(1, 'Admin', 1, 1, 1),
(2, 'Default', 0, 1, 0),
(9, 'Super Admin', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `usuario_username` varchar(30) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `valor_unitario` int(5) NOT NULL,
  `estado` varchar(30) NOT NULL DEFAULT 'En venta',
  `usuario_id` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `usuario_username`, `categoria_id`, `nombre`, `cantidad`, `valor_unitario`, `estado`, `usuario_id`) VALUES
(65, 'camv', 7, 'Cama', 1, 45000, 'En venta', NULL),
(66, 'juanTwo', 3, 'Nevecon', 12, 120000, 'En venta', NULL),
(67, 'juanTwo', 5, 'Licuadora grande', 4, 120000, 'En venta', NULL),
(68, 'juanTwo', 3, 'Lapicero', 12, 1200, 'En venta', NULL),
(69, 'camv', 4, 'televisor', 1, 35000, 'En venta', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_usuario` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_perfil` int(11) DEFAULT '2',
  `estado` int(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `email`, `nombre_usuario`, `password`, `tipo_perfil`, `estado`) VALUES
(1, 'Juanito', 'Velasquez', 'Velasquez94@hotmail.com', 'juanTwo', '1234asdf', 2, 1),
(5, 'Oscar', 'Morocho', 'morocho@oscar.com', 'morochoscar', 'morocho', 2, 1),
(9, 'Pepeto', 'pepone', 'vadfgdfgsfdg', 'popocho', 'poposito', 2, 1),
(10, 'Barrera', 'Sebastian', 'barreroide@barrera', 'barreroide', 'barreroide', 2, 1),
(11, 'Carlos Andres', 'Moreno', 'camv_123@hotmail.com', 'camv', 'camv', 1, 1),
(12, 'Viviana', 'Zuluaga', 'vazuluagab@gmail.com', 'vazb', 'vazb', 1, 1),
(13, 'Ana', 'Perez', 'anaperez@gmail.com', 'ana', 'ana', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueNombre` (`nombre`);

--
-- Indices de la tabla `comision`
--
ALTER TABLE `comision`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_producto` (`id_producto`),
  ADD KEY `fk_id_factura` (`id_factura`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_comision` (`id_comision`),
  ADD KEY `fk_id_cliente` (`id_cliente`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria_id` (`categoria_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `comision`
--
ALTER TABLE `comision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `fk_id_factura` FOREIGN KEY (`id_factura`) REFERENCES `factura` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `fk_id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_comision` FOREIGN KEY (`id_comision`) REFERENCES `comision` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
