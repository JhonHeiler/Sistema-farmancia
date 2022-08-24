-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2019 a las 19:07:19
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `contenido_id` int(11) NOT NULL,
  `modulo` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`contenido_id`, `modulo`, `titulo`, `contenido`) VALUES
(5, 'inicio', 'adasdasadasda', '<!DOCTYPE html>\r\n<html>\r\n<head>\r\n</head>\r\n<body>\n<h1>asdasdasd&lt;sdch&lt;zbcpx&lt;hzxbci&lt;zbcxiu</h1>\n<p>=============sssdssss</p>\n<p>+sssss</p>\n<p><iframe src=\"//www.youtube.com/embed/lXnILclaMt4?list=PLWSm4rvcFX1k43gPxeLkGjzBabClb80rD&amp;index=2&amp;t=0s\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>\n<p>------&amp;&amp;&amp;&amp;&amp;&amp;&amp;&amp;-</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p>&nbsp;</p>\n<p><img src=\"https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2019/05/visual-studio-online.jpg?itok=JmzraVZM\" alt=\"\" width=\"473\" height=\"315\" /></p>\n</body>\r\n</html>'),
(6, 'mision', 'Esta es la misiÃ³n', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p>Mi ni&ntilde;a yudi</p>\n<p style=\"text-align: justify;\">La DROGUER&Iacute;A NI&Ntilde;A YUDI de alto baudo somos una farmacia conformada por un equipo de personas motivadas a dar lo mejor de s&iacute;, orientada a brindar un servicio que satisfaga los clientes y usuarios, sustentados en sistema de gesti&oacute;n de calidad y en el mejoramiento continuo de sus procesos con criterios de responsabilidad y profesionalismo con todos nuestros usuarios.</p>\n</body>\n</html>'),
(12, 'vision', 'Esta es la visiÃ³n', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p>&nbsp;</p>\n<p><strong>Mi ni&ntilde;a yudi</strong></p>\n<p style=\"text-align: justify;\">La DROGUER&Iacute;A NI&Ntilde;A YUDI. De alto baudo, trabajamos en un equipo de forma productiva y eficiente, mejorando cada d&iacute;a para ser reconocidos por la comunidad como farmacia de mayor confianza, y mejor calidad de la regi&oacute;n extendi&eacute;ndonos en todos los puntos importantes del municipio de alto baudo En los pr&oacute;ximos 10 a&ntilde;os pretendemos ser de las m&aacute;s reconocidas droguer&iacute;as de alto baudo en la prestaci&oacute;n de venta y suministro de medicamentos en nuestro municipio, y tambi&eacute;n de otros municipios aleda&ntilde;os al nuestro.</p>\n</body>\n</html>'),
(14, 'presentacion', 'Esta es la presentaciÃ³n', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p style=\"color: #626262;\">&nbsp;</p>\n<p style=\"color: #626262;\"><span style=\"font-weight: bold;\">Presentaci&oacute;n</span></p>\n<p style=\"text-align: justify;\">Somos una empresa alto baudoce&ntilde;a que inicio sus labores en la comunidad de puerto Echeverry, Estamos presentes en el mercado y especialmente en el departamento del choco municipio de Quibd&oacute;, alto Baudo mediante los servicios farmac&eacute;uticos, con distribuci&oacute;n de medicamentos gen&eacute;ricos, PORTAFOLIO DE SERVICIOS: droguer&iacute;a ni&ntilde;a yudi NIT. 1075020392-1. La imagen de LA DROGUER&Iacute;A NI&Ntilde;A YUDI es reconocida en Quibd&oacute; y alto Baudo a pesar de su corta vida comercial y de servicios, manteniendo una posici&oacute;n de liderazgo y prestigio ante las instituciones administradores del r&eacute;gimen subsidiado, por la calidad de sus productos y el buen servicio prestado a sus usuarios. LA DROGUER&Iacute;A NI&Ntilde;A YUDI. Fue certificada por las Secretarias de Salud del Choco para prestar servicios farmac&eacute;uticos con buenas pr&aacute;cticas de Manufactura, lo que le permitir&aacute; en el siglo XXI continuar ofreciendo medicamentos de excelente calidad, seguros y confiables al sistema de salud del alto baudo.</p>\n</body>\n</html>'),
(16, 'servicio', 'Este es el servicio ', ''),
(17, 'sede', 'Esta es la sede', '<!DOCTYPE html>\n<html>\n<head>\n</head>\n<body>\n<p>sdoivhsdoiv&lt;hzoixvh&lt;zoix</p>\n</body>\n</html>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE `kardex` (
  `id_kardex` int(11) NOT NULL,
  `cantidad_maxima` int(20) NOT NULL,
  `cantidad_minima` int(20) NOT NULL,
  `fecha` date NOT NULL,
  `entrada` varchar(30) NOT NULL,
  `salida` varchar(30) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `quien_hace_pedido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `kardex`
--

INSERT INTO `kardex` (`id_kardex`, `cantidad_maxima`, `cantidad_minima`, `fecha`, `entrada`, `salida`, `id_producto`, `quien_hace_pedido`) VALUES
(12, 100, 50, '2019-02-02', 'no', 'si', 27, 'Sebastian'),
(13, 200, 100, '2019-01-01', 'si', 'no', 32, 'Alex');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `id_laboratorio` int(11) NOT NULL,
  `nombre_laboratorio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`id_laboratorio`, `nombre_laboratorio`) VALUES
(1, 'Caplin Pointe'),
(2, 'Genfarr'),
(3, 'MK'),
(4, 'Ibarra'),
(5, 'esto es un ejemplo'),
(6, 'esto es otro ejemplo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo_accion`
--

CREATE TABLE `modulo_accion` (
  `id_modulo_accion` int(11) NOT NULL,
  `modulo` varchar(80) NOT NULL,
  `accion` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `modulo_accion`
--

INSERT INTO `modulo_accion` (`id_modulo_accion`, `modulo`, `accion`) VALUES
(15, 'contenido', 'agregar'),
(18, 'contenido', 'cargar-datos'),
(17, 'contenido', 'eliminar'),
(14, 'contenido', 'listar'),
(16, 'contenido', 'modificar'),
(13, 'contenido', 'ver'),
(31, 'modulo_accion', 'agregar'),
(32, 'modulo_accion', 'cargar-datos'),
(33, 'modulo_accion', 'eliminar'),
(34, 'modulo_accion', 'listar'),
(35, 'modulo_accion', 'modificar'),
(36, 'modulo_accion', 'ver'),
(9, 'permiso_rol', 'agregar'),
(12, 'permiso_rol', 'cargar-datos'),
(11, 'permiso_rol', 'eliminar'),
(8, 'permiso_rol', 'listar'),
(10, 'permiso_rol', 'modificar'),
(7, 'permiso_rol', 'ver'),
(3, 'persona', 'agregar'),
(6, 'persona', 'cargar-datos'),
(5, 'persona', 'eliminar'),
(2, 'persona', 'listar'),
(4, 'persona', 'modificar'),
(1, 'persona', 'ver'),
(25, 'persona_rol', 'agregar'),
(26, 'persona_rol', 'cargar-datos'),
(27, 'persona_rol', 'eliminar'),
(28, 'persona_rol', 'listar'),
(29, 'persona_rol', 'modificar'),
(30, 'persona_rol', 'ver'),
(19, 'rol', 'agregar'),
(20, 'rol', 'cargar-datos'),
(21, 'rol', 'eliminar'),
(22, 'rol', 'listar'),
(23, 'rol', 'modificar'),
(24, 'rol', 'ver');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_pedido_producto` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_persona`, `id_pedido_producto`, `fecha_pedido`) VALUES
(1, 39, 0, '0000-00-00'),
(2, 40, 0, '0000-00-00'),
(11, 39, 0, '0000-00-00'),
(12, 39, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_producto`
--

CREATE TABLE `pedido_producto` (
  `id_pedido_poducto` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `valor_unitario` decimal(30,0) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `iva` decimal(20,0) NOT NULL,
  `lote_vencim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso_rol`
--

CREATE TABLE `permiso_rol` (
  `id_permiso_rol` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `modulo` varchar(80) NOT NULL,
  `accion` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso_rol`
--

INSERT INTO `permiso_rol` (`id_permiso_rol`, `id_rol`, `modulo`, `accion`) VALUES
(1, 1, 'persona', 'ver'),
(2, 1, 'persona', 'modificar'),
(3, 1, 'persona', 'listar'),
(4, 1, 'persona', 'eliminar'),
(5, 1, 'persona', 'cargar-datos'),
(6, 1, 'persona', 'agregar'),
(7, 2, 'permiso_rol', 'ver'),
(8, 2, 'permiso_rol', 'modificar'),
(9, 2, 'permiso_rol', 'listar'),
(10, 2, 'permiso_rol', 'eliminar'),
(11, 2, 'permiso_rol', 'cargar-datos'),
(12, 2, 'permiso_rol', 'agregar'),
(13, 1, 'permiso_rol', 'ver'),
(14, 1, 'permiso_rol', 'listar'),
(15, 1, 'permiso_rol', 'cargar-datos'),
(16, 2, 'contenido', 'ver'),
(17, 2, 'contenido', 'modificar'),
(18, 2, 'contenido', 'listar'),
(19, 2, 'contenido', 'eliminar'),
(20, 2, 'contenido', 'cargar-datos'),
(21, 2, 'contenido', 'agregar'),
(22, 1, 'rol', 'ver'),
(23, 1, 'rol', 'modificar'),
(24, 1, 'rol', 'listar'),
(25, 1, 'rol', 'eliminar'),
(26, 1, 'rol', 'cargar-datos'),
(27, 1, 'rol', 'agregar'),
(28, 1, 'modulo_accion', 'ver'),
(29, 1, 'modulo_accion', 'modificar'),
(30, 1, 'modulo_accion', 'listar'),
(31, 1, 'modulo_accion', 'eliminar'),
(32, 1, 'modulo_accion', 'cargar-datos'),
(33, 1, 'modulo_accion', 'agregar'),
(34, 1, 'permiso_rol', 'ver'),
(35, 1, 'permiso_rol', 'modificar'),
(36, 1, 'permiso_rol', 'listar'),
(37, 1, 'permiso_rol', 'eliminar'),
(38, 1, 'permiso_rol', 'cargar-datos'),
(39, 1, 'permiso_rol', 'agregar'),
(40, 1, 'persona_rol', 'ver'),
(41, 1, 'persona_rol', 'modificar'),
(42, 1, 'persona_rol', 'listar'),
(43, 1, 'persona_rol', 'eliminar'),
(44, 1, 'persona_rol', 'cargar-datos'),
(45, 1, 'persona_rol', 'agregar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre_gerente` varchar(50) NOT NULL,
  `apellido_gerente` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `identificacion` int(15) NOT NULL,
  `tipo_identificacion_id` int(11) NOT NULL,
  `clave` varchar(45) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre_gerente`, `apellido_gerente`, `telefono`, `identificacion`, `tipo_identificacion_id`, `clave`) VALUES
(42, 'grupo', '8', '3205736418', 1077448790, 1, 'alex'),
(43, 'Luis', 'Mosquera', '123', 1234, 2, '1234'),
(48, 'ddd', 'dddd', '222', 1212121, 1, ''),
(51, '1111', 'lastre', '1111111', 1111, 3, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_rol`
--

CREATE TABLE `persona_rol` (
  `id_persona_rol` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona_rol`
--

INSERT INTO `persona_rol` (`id_persona_rol`, `id_persona`, `id_rol`) VALUES
(1, 42, 1),
(2, 43, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `nombre_producto` varchar(20) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(30) NOT NULL,
  `id_laboratorio` int(11) NOT NULL,
  `presentacion_producto_id` int(11) NOT NULL,
  `lote_producto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_pedido`, `nombre_producto`, `descripcion`, `fecha`, `cantidad`, `id_laboratorio`, `presentacion_producto_id`, `lote_producto`) VALUES
(27, 2, 'Dolex', 'Pastilla para el dolor de cabeza', '2019-10-02', 5, 2, 0, ''),
(32, 0, 'fvsv', 'sdfsdf', '2019-02-02', 6999, 4, 0, ''),
(34, 0, 'asaasas', 'aasas', '1111-11-11', 1, 1, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'USUARIO BASICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_identificacion`
--

CREATE TABLE `tipo_identificacion` (
  `tipo_identificacion_id` int(11) NOT NULL,
  `nombre_tipo_identificacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_identificacion`
--

INSERT INTO `tipo_identificacion` (`tipo_identificacion_id`, `nombre_tipo_identificacion`) VALUES
(1, 'cedula de ciudadania'),
(2, 'cedula de extranjeria'),
(3, 'tarjeta de identidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_presentacion`
--

CREATE TABLE `tipo_presentacion` (
  `id_tipo_presentacion` int(11) NOT NULL,
  `nombre_tipo_presentacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_presentacion`
--

INSERT INTO `tipo_presentacion` (`id_tipo_presentacion`, `nombre_tipo_presentacion`) VALUES
(1, 'tableta'),
(2, 'inyecciÃ³n2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`contenido_id`),
  ADD UNIQUE KEY `modulo_UNIQUE` (`modulo`);

--
-- Indices de la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`id_kardex`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`id_laboratorio`);

--
-- Indices de la tabla `modulo_accion`
--
ALTER TABLE `modulo_accion`
  ADD PRIMARY KEY (`id_modulo_accion`),
  ADD UNIQUE KEY `modulo` (`modulo`,`accion`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `Id_facturada` (`id_persona`);

--
-- Indices de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD PRIMARY KEY (`id_pedido_poducto`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `permiso_rol`
--
ALTER TABLE `permiso_rol`
  ADD PRIMARY KEY (`id_permiso_rol`),
  ADD KEY `permiso_rol_fk1_idx` (`id_rol`),
  ADD KEY `permiso_rol_ibfk_2` (`modulo`,`accion`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD KEY `tipo_identificacion_id` (`tipo_identificacion_id`);

--
-- Indices de la tabla `persona_rol`
--
ALTER TABLE `persona_rol`
  ADD PRIMARY KEY (`id_persona_rol`),
  ADD KEY `persona_rol_fk1_idx` (`id_rol`),
  ADD KEY `persona_rol_fk2_idx` (`id_persona`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_laboratorio` (`id_laboratorio`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `presentacion_producto_id` (`presentacion_producto_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  ADD PRIMARY KEY (`tipo_identificacion_id`);

--
-- Indices de la tabla `tipo_presentacion`
--
ALTER TABLE `tipo_presentacion`
  ADD PRIMARY KEY (`id_tipo_presentacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `contenido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `kardex`
--
ALTER TABLE `kardex`
  MODIFY `id_kardex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `id_laboratorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `modulo_accion`
--
ALTER TABLE `modulo_accion`
  MODIFY `id_modulo_accion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  MODIFY `id_pedido_poducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permiso_rol`
--
ALTER TABLE `permiso_rol`
  MODIFY `id_permiso_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `persona_rol`
--
ALTER TABLE `persona_rol`
  MODIFY `id_persona_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_identificacion`
--
ALTER TABLE `tipo_identificacion`
  MODIFY `tipo_identificacion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_presentacion`
--
ALTER TABLE `tipo_presentacion`
  MODIFY `id_tipo_presentacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD CONSTRAINT `pedido_producto_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `pedido_producto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `permiso_rol`
--
ALTER TABLE `permiso_rol`
  ADD CONSTRAINT `permiso_rol_ibfk_2` FOREIGN KEY (`modulo`,`accion`) REFERENCES `modulo_accion` (`modulo`, `accion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`tipo_identificacion_id`) REFERENCES `tipo_identificacion` (`tipo_identificacion_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `persona_rol`
--
ALTER TABLE `persona_rol`
  ADD CONSTRAINT `persona_rol_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
