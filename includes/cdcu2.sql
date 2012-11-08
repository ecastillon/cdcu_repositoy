-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-07-2012 a las 22:57:33
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cdcu2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientos`
--

CREATE TABLE IF NOT EXISTS `asientos` (
  `id_asiento` int(12) NOT NULL AUTO_INCREMENT,
  `fila` varchar(3) DEFAULT NULL,
  `columna` int(5) DEFAULT NULL,
  `id_localidad` int(12) DEFAULT NULL,
  `observacion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_asiento`),
  KEY `id_localidad` (`id_localidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `asientos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descuento`
--

CREATE TABLE IF NOT EXISTS `descuento` (
  `id_descuento` int(12) NOT NULL AUTO_INCREMENT,
  `id_tarjeta` int(12) NOT NULL,
  `descuento` int(10) NOT NULL,
  `motivo` varchar(50) DEFAULT NULL,
  `fecha_descuento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_usuario` int(12) NOT NULL,
  PRIMARY KEY (`id_descuento`),
  KEY `id_tarjeta` (`id_tarjeta`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `descuento`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad`
--

CREATE TABLE IF NOT EXISTS `entidad` (
  `id_entidad` int(12) NOT NULL AUTO_INCREMENT,
  `nombre_entidad` varchar(50) NOT NULL,
  `fono_entidad` varchar(20) NOT NULL,
  `direccion_entidad` varchar(50) NOT NULL,
  `email_entidad` varchar(50) NOT NULL,
  `tipo_entidad` int(1) NOT NULL,
  PRIMARY KEY (`id_entidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `entidad`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad_tarjeta`
--

CREATE TABLE IF NOT EXISTS `entidad_tarjeta` (
  `id_entidad` int(12) NOT NULL,
  `id_tarjeta` int(12) NOT NULL,
  PRIMARY KEY (`id_entidad`,`id_tarjeta`),
  KEY `id_tarjeta` (`id_tarjeta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `entidad_tarjeta`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE IF NOT EXISTS `localidad` (
  `id_localidad` int(12) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_localidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `localidad`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad_precio`
--

CREATE TABLE IF NOT EXISTS `localidad_precio` (
  `id_loc_precio` int(12) NOT NULL AUTO_INCREMENT,
  `id_localidad` int(12) NOT NULL,
  `fecha_precio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `valor` int(10) NOT NULL,
  `id_usuario` int(12) NOT NULL,
  PRIMARY KEY (`id_loc_precio`),
  KEY `id_localidad` (`id_localidad`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `localidad_precio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modificacion_tarjeta`
--

CREATE TABLE IF NOT EXISTS `modificacion_tarjeta` (
  `id_modificacion` int(12) NOT NULL AUTO_INCREMENT,
  `fecha_modificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_tarjeta` int(12) NOT NULL,
  `comentario` varchar(50) NOT NULL,
  PRIMARY KEY (`id_modificacion`),
  KEY `id_tarjeta` (`id_tarjeta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `modificacion_tarjeta`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE IF NOT EXISTS `pago` (
  `id_pago` int(12) NOT NULL AUTO_INCREMENT,
  `id_tarjeta` int(12) NOT NULL,
  `fecha_pago` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `valor_pago` int(10) NOT NULL,
  `forma_pago` int(1) NOT NULL,
  `nro_documento` varchar(20) NOT NULL,
  `banco` varchar(30) NOT NULL,
  `fecha_documento` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_usuario` int(12) NOT NULL,
  `nro_comprobante` int(12) NOT NULL,
  PRIMARY KEY (`id_pago`),
  KEY `id_tarjeta` (`id_tarjeta`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `pago`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE IF NOT EXISTS `socio` (
  `id_socio` int(12) NOT NULL AUTO_INCREMENT,
  `rut_socio` varchar(10) DEFAULT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellido_paterno` varchar(50) DEFAULT NULL,
  `apellido_materno` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono_movil` varchar(20) DEFAULT NULL,
  `telefono_fijo` varchar(20) DEFAULT NULL,
  `fecha_inscripcion` timestamp NULL DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `fecha_nacimiento` timestamp NULL DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_socio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `socio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE IF NOT EXISTS `tarjeta` (
  `id_tarjeta` int(12) NOT NULL AUTO_INCREMENT,
  `id_asiento` int(12) NOT NULL,
  `id_socio` int(12) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id_tarjeta`),
  KEY `id_asiento` (`id_asiento`),
  KEY `id_socio` (`id_socio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `tarjeta`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(12) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nivel_acceso` int(1) NOT NULL,
  `rut_empleado` varchar(12) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `usuario`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD CONSTRAINT `asientos_ibfk_1` FOREIGN KEY (`id_localidad`) REFERENCES `localidad` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `descuento`
--
ALTER TABLE `descuento`
  ADD CONSTRAINT `descuento_ibfk_1` FOREIGN KEY (`id_tarjeta`) REFERENCES `tarjeta` (`id_tarjeta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `descuento_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entidad_tarjeta`
--
ALTER TABLE `entidad_tarjeta`
  ADD CONSTRAINT `entidad_tarjeta_ibfk_1` FOREIGN KEY (`id_tarjeta`) REFERENCES `tarjeta` (`id_tarjeta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `entidad_tarjeta_ibfk_2` FOREIGN KEY (`id_entidad`) REFERENCES `entidad` (`id_entidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `localidad_precio`
--
ALTER TABLE `localidad_precio`
  ADD CONSTRAINT `localidad_precio_ibfk_1` FOREIGN KEY (`id_localidad`) REFERENCES `localidad` (`id_localidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `localidad_precio_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `modificacion_tarjeta`
--
ALTER TABLE `modificacion_tarjeta`
  ADD CONSTRAINT `modificacion_tarjeta_ibfk_1` FOREIGN KEY (`id_tarjeta`) REFERENCES `tarjeta` (`id_tarjeta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`id_tarjeta`) REFERENCES `tarjeta` (`id_tarjeta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pago_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `tarjeta_ibfk_1` FOREIGN KEY (`id_asiento`) REFERENCES `asientos` (`id_asiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tarjeta_ibfk_2` FOREIGN KEY (`id_socio`) REFERENCES `socio` (`id_socio`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
