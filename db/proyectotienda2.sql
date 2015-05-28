-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-05-2015 a las 12:13:15
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectotienda2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(1, 'jean', 'jean tanto para hombre como para mujer'),
(2, 'camiseta', 'camiseta deportiva para mujer y camiseta para hombre'),
(3, 'blusa', 'blusa para mujer'),
(4, 'camisa', 'camisa elegante para hombre'),
(5, 'bufanda', 'bufanda para mujer '),
(6, 'accesorio', 'accesorio para hombre y para hombre: como correas y/o lentes'),
(7, 'zapato', 'zapatos elegantes y deportivos para hombre y para mujer'),
(8, 'bolso', 'bolsos elegantes y deportivos, de mano y de colgar ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nombre`) VALUES
(1, 'bogota'),
(2, 'guatavita'),
(3, 'zipaquira'),
(4, 'cota'),
(5, 'la calera'),
(6, 'chia'),
(7, 'la vega'),
(8, 'girardot');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(20) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `id_ciudad_cliente` int(11) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `numerodocumento` varchar(65) NOT NULL,
  `nombreusuario` varchar(45) DEFAULT NULL,
  `categoriacliente` int(11) DEFAULT NULL,
  `correoelectronico` varchar(120) DEFAULT NULL,
  `contrasena` varchar(60) NOT NULL,
  `id_genero_cliente` int(11) NOT NULL,
  `link` varchar(120) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `id_ciudad_cliente`, `direccion`, `telefono`, `id_tipo_documento`, `numerodocumento`, `nombreusuario`, `categoriacliente`, `correoelectronico`, `contrasena`, `id_genero_cliente`, `link`) VALUES
(1, 'andrea', 'marulanda quiceno', 1, 'crr 50 # 40-33', '3345624', 1, '1054892444', 'andrea', 2, 'andrea@hotmail.com', 'andrea', 1, NULL),
(2, 'sandra', 'cardona', 1, 'calle 40 # 34-44', '3456675', 1, '76930454', 'sandra', 2, 'sandra@gmail.com', 'sandra', 1, NULL),
(3, 'juan carlos', 'velez tascon', 3, 'av suba # 45-56', '3425688', 1, '10232555', 'juancarlos', 2, 'juancarlos@hotmail.com', 'juancarlos', 2, NULL),
(4, 'beatriz eugenia', 'quiceno trujillo', 2, 'av 101 ## 34B-45', NULL, 1, '30677223', 'beatrizeugenia', 2, 'beatrizeugenia@hotmail.com', 'beatrizeugenia', 1, NULL),
(5, 'julian', 'lopez ceron', 5, 'av ciudad de cali # 67-87', '3166573398', 1, '1053892999', 'julian', 2, 'julian@gmail.com', 'julian', 2, NULL),
(6, 'samara', 'sepulveda osorio', 5, 'calle 34 # 67A-39', '5865544', 1, '1054076822', 'samara', 2, 'samara@gmail.com', 'samara', 1, NULL),
(7, 'admin', 'admin', 1, 'no aplica', '', 3, '10298389', 'admin', 1, 'admon@gmail.com', 'admin', 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `id_color` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id_color`, `nombre`) VALUES
(1, 'rojo'),
(2, 'verde'),
(3, 'azul'),
(4, 'gris'),
(5, 'blanco'),
(6, 'negro'),
(7, 'cafe'),
(8, 'fucsia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE IF NOT EXISTS `detalleventa` (
  `id_detalleventa` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `numeroventa` int(11) NOT NULL,
  `precio` int(30) NOT NULL,
  `cantidad` int(30) NOT NULL,
  `subtotal` int(100) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `fecha` text NOT NULL,
  `id_venta_detalleventa` int(20) NOT NULL,
  `id_producto_detalleventa` int(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalleventa`
--

INSERT INTO `detalleventa` (`id_detalleventa`, `nombre`, `numeroventa`, `precio`, `cantidad`, `subtotal`, `cliente`, `fecha`, `id_venta_detalleventa`, `id_producto_detalleventa`) VALUES
(1, 'camiseta levis', 1, 80000, 1, 80000, 'andrea', '2015-05-28', 1, 2),
(2, 'Billetera de mano mujer', 1, 55000, 3, 165000, 'andrea', '2015-05-28', 1, 5),
(3, 'camiseta levis', 2, 80000, 1, 80000, 'sandra', '', 2, 2),
(4, 'bolso corto mujer', 2, 120000, 1, 120000, 'sandra', '', 2, 6),
(5, 'Camiseta deportiva', 3, 85000, 2, 170000, 'julian', '2015-05-28', 3, 4),
(6, 'zapato elegante', 3, 120000, 1, 120000, 'julian', '2015-05-28', 3, 10),
(7, 'camiseta cell hombre', 3, 90000, 1, 90000, 'julian', '2015-05-28', 3, 9),
(8, 'Zapato elegante cafe', 4, 120000, 6, 720000, 'julian', '2015-05-28', 4, 1),
(9, 'camiseta cell hombre', 4, 90000, 1, 90000, 'julian', '2015-05-28', 4, 9),
(10, 'camiseta cell hombre', 5, 90000, 1, 90000, 'andrea', '2015-05-28', 5, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE IF NOT EXISTS `genero` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `nombre`) VALUES
(1, 'femenino'),
(2, 'masculino'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(30) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(120) DEFAULT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `precio` int(30) NOT NULL,
  `stock` int(30) DEFAULT NULL,
  `id_talla_producto` int(11) NOT NULL,
  `id_color_producto` int(11) NOT NULL,
  `id_categoria_producto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `foto`, `precio`, `stock`, `id_talla_producto`, `id_color_producto`, `id_categoria_producto`) VALUES
(1, 'Zapato elegante cafe', 'Zapato elegante en cuero sintetico para hombre', 'web/images/thumbs/c1.jpg', 120000, 10, 3, 1, 7),
(2, 'camiseta levis', 'Camiseta de algodón para hombre blanca, deportiva y con estampado de la marca rojo. Perfecto para ocasiones informales. ', 'web/images/thumbs/pic2.jpg', 80000, 40, 4, 6, 2),
(3, 'camiseta levis', 'Camiseta de algodón para hombre blanca, deportiva y con estampado de la marca rojo.', 'web/images/thumbs/slider1.png', 80000, 30, 2, 6, 2),
(4, 'Camiseta deportiva', 'Camiseta deportiva para hombre y para mujer', 'web/images/thumbs/pic3.jpg', 85000, 60, 3, 4, 2),
(5, 'Billetera de mano mujer', 'Billetera de mano mujer negra perfecta para ocasiones formales.', 'web/images/thumbs/pic4.jpg', 55000, 25, 6, 6, 8),
(6, 'bolso corto mujer', 'bolso de cuero para mujer ', 'web/images/thumbs/w_pic4.jpg', 120000, 15, 6, 5, 8),
(7, 'camiseta cell hombre', 'camiseta en algodon para hombre', 'web/images/thumbs/pic6.jpg', 90000, 10, 3, 6, 2),
(8, 'camiseta cell hombre', 'camiseta en algodon para hombre', 'web/images/thumbs/slider4.png', 90000, 25, 4, 6, 2),
(9, 'camiseta cell hombre', 'camiseta en algodon para hombre', 'web/images/thumbs/c2.jpg', 90000, 25, 5, 6, 2),
(10, 'zapato elegante', 'zapato elegante en cuero sintetico para mujer', 'web/images/thumbs/shoe_pic5.jpg', 120000, 20, 4, 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE IF NOT EXISTS `talla` (
  `id_talla` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(120) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`id_talla`, `nombre`, `descripcion`) VALUES
(1, 'XS', 'equivale para los zapatos a las tallas 32-33'),
(2, 'S', 'equivale para los zapatos a las tallas 34-35'),
(3, 'M', 'equivale para los zapatos a las tallas 36-37'),
(4, 'L', 'equivale para los zapatos a las tallas 38-39'),
(5, 'XL', 'equivale para los zapatos a las tallas 40-41'),
(6, 'UNICA', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE IF NOT EXISTS `tipodocumento` (
  `id_tipodocumento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`id_tipodocumento`, `nombre`) VALUES
(1, 'cedula de ciudadania'),
(2, 'cedula de extranjeria'),
(3, 'NIT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id_venta` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente_venta` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_tipodocumento_cliente_idx` (`id_tipo_documento`),
  ADD KEY `id_genero_cliente_idx` (`id_genero_cliente`),
  ADD KEY `id_ciudad_cliente_idx` (`id_ciudad_cliente`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`id_detalleventa`),
  ADD KEY `id_venta_detalleventa_idx` (`id_venta_detalleventa`),
  ADD KEY `id_producto_detalleventa_idx` (`id_producto_detalleventa`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_talla_producto_idx` (`id_talla_producto`),
  ADD KEY `id_color_producto_idx` (`id_color_producto`),
  ADD KEY `id_categoria_producto_idx` (`id_categoria_producto`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`id_talla`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`id_tipodocumento`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `id_detalleventa` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `id_talla` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
