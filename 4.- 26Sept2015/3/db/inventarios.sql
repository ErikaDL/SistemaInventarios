-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2015 a las 23:30:08
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inventarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
`id_categoria` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(1, 'Herramientas'),
(2, 'Papeleria'),
(3, 'Varios'),
(4, 'Comida'),
(5, 'Refacciones'),
(6, 'nueva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE IF NOT EXISTS `entradas` (
`id_entrada` int(11) NOT NULL,
  `fecha_entrada` date DEFAULT NULL,
  `entrada_folio` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `entrada_cantidad` double(4,2) DEFAULT NULL,
  `entrada_producto` int(11) DEFAULT NULL,
  `entrada_desc` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `proveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id_entrada`, `fecha_entrada`, `entrada_folio`, `entrada_cantidad`, `entrada_producto`, `entrada_desc`, `proveedor`) VALUES
(1, '2015-09-02', '5485556', 20.00, 3, 'Se compraron más', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`id_producto` int(11) NOT NULL,
  `producto` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `costo` double(8,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `producto`, `costo`) VALUES
(1, 'Pinzas de corte', 60.00),
(2, 'Paquete de hojas tamaño carta', 80.00),
(3, 'Café y dulces', 180.00),
(4, 'Desarmador de paleta', 35.00),
(6, 'Tornillos', 10.00),
(7, 'sdfsdfsdf', 35.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_categorias`
--

CREATE TABLE IF NOT EXISTS `productos_categorias` (
`id_prods_categs` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_categ` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos_categorias`
--

INSERT INTO `productos_categorias` (`id_prods_categs`, `id_prod`, `id_categ`) VALUES
(4, 3, 3),
(5, 3, 4),
(6, 7, 1),
(7, 7, 2),
(8, 7, 3),
(9, 7, 4),
(10, 7, 5),
(11, 6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
`id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`) VALUES
(1, 'Peñoles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish_ci DEFAULT 'sinfoto.png',
  `email` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `alias` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `password`, `foto`, `email`, `alias`) VALUES
(1, 'Isaac', 'Fraire Heredia', '$2y$10$i3W6SOoHpomkgqZSpOjADeB1XYA0/f1C/1ZVpO5WSzhYj37DsWTZK', 'sinfoto.png', 'isaac.fraire@thinksoft.com.mx', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
 ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
 ADD PRIMARY KEY (`id_entrada`), ADD KEY `rel_proveedor_idx` (`proveedor`), ADD KEY `rel_producto_idx` (`entrada_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
 ADD PRIMARY KEY (`id_prods_categs`), ADD KEY `rel_productos_idx` (`id_prod`), ADD KEY `rel_categorias_idx` (`id_categ`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
 ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
MODIFY `id_entrada` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
MODIFY `id_prods_categs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
ADD CONSTRAINT `rel_producto` FOREIGN KEY (`entrada_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `rel_proveedor` FOREIGN KEY (`proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos_categorias`
--
ALTER TABLE `productos_categorias`
ADD CONSTRAINT `rel_categorias` FOREIGN KEY (`id_categ`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `rel_productos` FOREIGN KEY (`id_prod`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
