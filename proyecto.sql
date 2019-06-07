-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2017 a las 14:27:15
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `comentario_id` int(11) NOT NULL,
  `comentario_usuario` int(11) NOT NULL,
  `comentario_publicacion` int(11) NOT NULL,
  `comentario_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comentario_contenido` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`comentario_id`, `comentario_usuario`, `comentario_publicacion`, `comentario_fecha`, `comentario_contenido`) VALUES
(1, 17, 1, '2017-07-26 03:30:10', '55'),
(2, 17, 2, '2017-07-26 03:30:35', '66');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `megusta`
--

CREATE TABLE `megusta` (
  `megusta_id` int(11) NOT NULL,
  `megusta_usuario` int(11) NOT NULL,
  `megusta_publicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `megusta`
--

INSERT INTO `megusta` (`megusta_id`, `megusta_usuario`, `megusta_publicacion`) VALUES
(1, 17, 7),
(2, 17, 9),
(3, 17, 9),
(10, 17, 8),
(11, 17, 1),
(12, 17, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `publicacion_id` int(11) NOT NULL,
  `publicacion_usuario` int(11) NOT NULL,
  `publicacion_titulo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `publicacion_texto` text COLLATE utf8_unicode_ci NOT NULL,
  `publicacion_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `publicacion_imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`publicacion_id`, `publicacion_usuario`, `publicacion_titulo`, `publicacion_texto`, `publicacion_fecha`, `publicacion_imagen`) VALUES
(1, 1, 'publicacion', 'asfsafasfandsafjdsnfjdsnfkjsadnfksd', '2017-07-25 02:26:32', ''),
(2, 3, 'publicacion juan', 'juan juan njuan juan juan juan juan jjuan jauna juanjaujuajn', '2017-07-25 02:45:21', ''),
(3, 3, 'publicacion juan', 'juan juan njuan juan juan juan juan jjuan jauna juanjaujuajn', '2017-07-25 02:45:28', ''),
(4, 4, 'miguel4', 'miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4miguel4', '2017-07-25 15:25:33', ''),
(5, 17, 'aaaaaaa', 'assssssssssssssssssss', '2017-07-25 23:55:21', ''),
(6, 17, 'aa', 'aaaaa', '0000-00-00 00:00:00', ''),
(7, 17, 'sss', 'sss', '0000-00-00 00:00:00', ''),
(8, 17, 'dd', 'dd', '2017-07-26 00:24:52', ''),
(9, 17, 'eee', ' rrrr', '2017-07-26 00:38:22', 'imagenes/publicaciones/bty4c4.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_correo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_clave` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_rol` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'normal',
  `usuario_imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_nombre`, `usuario_apellido`, `usuario_correo`, `usuario_clave`, `usuario_rol`, `usuario_imagen`) VALUES
(1, 'Miguel', 'Acosta', 'acostalugo.m@gmail.com', '123456', 'administrador', ''),
(2, 'miguel', 'vertigo', 'acosta@gmail.com', '12345', 'normal', ''),
(3, 'juan', 'colmenares', 'juan@gmail.com', '123', 'normal', ''),
(4, 'miguel', 'lugo', 'lugo@vigitrack', '54321', 'normal', ''),
(5, 'miguel', 'angel', 'angel@gmail.com', '1234', 'normal', ''),
(6, 'a', 's', 'd', '23', 'normal', ''),
(7, '', '', '', '', 'normal', ''),
(8, 'miguelfffff', 'ffffff', '1234', '1234', 'normal', ''),
(9, 'aa', 'aa', 'aa', 'aa', 'normal', ''),
(10, 'aad', 'aad', 'aad', 'aad', 'normal', ''),
(11, 'aad', 'aad', 'aad', 'aad', 'normal', ''),
(12, 'aad', 'aad', 'aad', 'aad', 'normal', ''),
(13, 'aad', 'aad', 'aad', 'aad', 'normal', ''),
(14, 'aad', 'aad', 'aad', 'aad', 'normal', ''),
(15, 'aad', 'aad', 'aad', 'aad', 'normal', 'imagenes/perfil/9AF.jpg'),
(16, 'qq', 'qq', 'qq', 'qq', 'normal', 'imagenes/perfil/15202600_1809365289322930_64418196'),
(17, 'ee', 'ee', 'ee', 'ee', 'normal', 'imagenes/perfil/15135983_1352079298157000_5648567966056344468_n.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`comentario_id`),
  ADD KEY `comentario_usuario` (`comentario_usuario`),
  ADD KEY `comentario_publicacion` (`comentario_publicacion`);

--
-- Indices de la tabla `megusta`
--
ALTER TABLE `megusta`
  ADD PRIMARY KEY (`megusta_id`),
  ADD KEY `megusta_usuario` (`megusta_usuario`),
  ADD KEY `megusta_publicacion` (`megusta_publicacion`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`publicacion_id`),
  ADD KEY `publicacion_usuario` (`publicacion_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `comentario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `megusta`
--
ALTER TABLE `megusta`
  MODIFY `megusta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `publicacion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`comentario_usuario`) REFERENCES `usuario` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`comentario_publicacion`) REFERENCES `publicacion` (`publicacion_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `megusta`
--
ALTER TABLE `megusta`
  ADD CONSTRAINT `megusta_ibfk_1` FOREIGN KEY (`megusta_usuario`) REFERENCES `usuario` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `megusta_ibfk_2` FOREIGN KEY (`megusta_publicacion`) REFERENCES `publicacion` (`publicacion_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`publicacion_usuario`) REFERENCES `usuario` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
