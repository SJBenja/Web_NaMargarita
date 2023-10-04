-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2021 a las 02:49:07
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juanbsandoval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombreCate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombreCate`) VALUES
(1, 'Yerba'),
(2, 'Vinos'),
(3, 'Dulces'),
(4, 'Aderezos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `usuario_id`, `direccion`, `telefono`, `codigo_postal`, `ciudad`) VALUES
(1, 2, 'prueba 123', '4794630', 3400, 'corrientes'),
(2, 3, 'Estados Unidos 769', '3794794630', 3400, 'Corrientes'),
(3, 4, 'Av Centenario 7230', '3794794630', 3400, 'Corrientes'),
(5, 1, 'Administrador', '12345678', 3400, 'Corrientes'),
(7, 1, '', '', 0, ''),
(8, 1, '', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consulta` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `mensaje` mediumtext NOT NULL,
  `fecha` date DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `usuario`, `correo`, `perfil_id`, `mensaje`, `fecha`, `estado`) VALUES
(1, 'juan', 'juan@gmail.com', 3, 'quisiera saber si cuentan con promociones por compras al por mayor', '2021-06-13', 1),
(2, 'benjamin', 'benjamin@live.com', 3, 'quisiera saber si cuentan con yerba don bosco de 1/2 kilo ', '2021-06-15', 1),
(3, 'juan', 'juan@gmail.com', 3, 'quisiera saber si cuentan con mermeladas', '2021-06-15', 1),
(4, 'prueba', 'sapo@pepe.com', 3, 'quisiera saber si cuentan con stock de vinos', '2021-06-15', 1),
(5, 'Ada', 'ays@gmail.com', 3, 'quisiera saber si cuentan con stock de aderezos', '2021-06-15', 1),
(6, 'prueba, Prueba', 'prueba@prueba.com', 2, 'quisiera saber si cuentan con stock de aderezos', '2021-06-15', 1),
(7, 'prueba, Prueba', 'prueba@prueba.com', 2, 'quisiera saber si cuentan con miel', '2021-06-15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `perfilTipo` varchar(50) NOT NULL,
  `descripcion` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `perfilTipo`, `descripcion`) VALUES
(1, 'admin', 'Administrador del sitio para ABM(Altas-Bajas-Modificaciones)'),
(2, 'cliente', 'Usuario Registrado para poder compara'),
(3, 'visitante', 'Usuario del sitio sin registrar en la base de datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(999) NOT NULL,
  `precio` decimal(5,0) NOT NULL,
  `stock` int(100) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `categoria_id`, `nombre`, `descripcion`, `precio`, `stock`, `imagen`, `estado`) VALUES
(1, 1, 'Yerba Don Bosco', 'Yerba de 1kg. Elaborada con palos', '330', 15, '1-Yerba.jpg', 1),
(2, 2, 'Otro Loco Mas ICE', 'Vino Blanco 750ml', '220', 15, '2-OtroLocoMasIce.jpg', 1),
(3, 2, 'Lambrusco Maestri \"Don Bosco\"', 'Vino de 750ml Cabernet ', '260', 15, '2-LambruscoMaestri.jpg', 1),
(4, 2, 'Malbec Bosco ', 'Vino de 750ml Malbec', '260', 15, '2-Malbec.jpg', 1),
(5, 4, 'PimentonDulceAhumado', 'Condimento a base de pimentón dulce con sabor ahumado 90g', '190', 15, '4-PimentonDulceAhumado.jpg', 1),
(6, 4, 'PimentonDulceAhumado', 'Condimento a base de pimentón dulce con sabor ahumado 90g', '190', 0, '4-PimentonDulceAhumado.jpg', 0),
(7, 4, 'PimentonDulceAhumado', 'Condimento a base de pimentón dulce con sabor ahumado 90g', '190', 0, '4-PimentonDulceAhumado.jpg', 0),
(8, 4, 'Salsa Criolla', 'Etiqueta Negra, libre de gluten - sin tacc', '200', 15, '4-SalsaCriolla.jpg', 1),
(9, 3, 'Dulce de Leche', ' Dulce de leche Don Bosco 440g', '245', 15, '3-DulceDeLeche.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `idPerfil` int(2) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `correo`, `usuario`, `pass`, `idPerfil`, `estado`) VALUES
(1, 'Administrador', 'Administrador', 'admin@admin.com', 'Administrador', 'MTIzNDU2Nzg=', 1, 1),
(2, 'Prueba', 'prueba', 'prueba@prueba.com', 'prueba', 'MTIzNDU2Nzg=', 2, 1),
(3, 'Juan', 'Sandoval', 'jsandoval@gmail.com', 'jbs', 'MTIzNDU2Nzg=', 2, 1),
(4, 'Natalia', 'Rios', 'natalia@hotmail.com', 'nsr', 'MTIzNDU2Nzg=', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_cabecera`
--

CREATE TABLE `ventas_cabecera` (
  `id_ventas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `total_venta` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_cabecera`
--

INSERT INTO `ventas_cabecera` (`id_ventas`, `fecha`, `usuario_id`, `total_venta`) VALUES
(1, '2021-06-17', 2, 1030.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_detalle`
--

CREATE TABLE `ventas_detalle` (
  `id_detalle` int(11) NOT NULL,
  `venta_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas_detalle`
--

INSERT INTO `ventas_detalle` (`id_detalle`, `venta_id`, `producto_id`, `cantidad`, `precio`, `total`) VALUES
(1, 1, 1, 1, 330.00, 330.00),
(2, 1, 2, 2, 220.00, 440.00),
(3, 1, 4, 1, 260.00, 260.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `idPerfil` (`idPerfil`);

--
-- Indices de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  ADD PRIMARY KEY (`id_ventas`);

--
-- Indices de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  ADD PRIMARY KEY (`id_detalle`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas_cabecera`
--
ALTER TABLE `ventas_cabecera`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas_detalle`
--
ALTER TABLE `ventas_detalle`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
