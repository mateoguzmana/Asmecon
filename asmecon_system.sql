-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-06-2016 a las 11:14:36
-- Versión del servidor: 5.0.96-community
-- Versión de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `asmecon_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Areas`
--

CREATE TABLE IF NOT EXISTS `Areas` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Codigo` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Areas`
--

INSERT INTO `Areas` (`Id`, `Nombre`, `Codigo`, `Muestra`) VALUES
(1, 'LINEAL', '1', 0),
(2, 'ÁNGULAR', '2', 0),
(3, 'OFIMATICA', '3', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Calibracionins`
--

CREATE TABLE IF NOT EXISTS `Calibracionins` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Foto` varchar(255) NOT NULL,
  `Instrumento` int(11) NOT NULL,
  `Certificado` varchar(255) NOT NULL,
  `Incertidumbre` varchar(255) NOT NULL,
  `Desviacion` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `FechaVence` date NOT NULL,
  `Resultado` varchar(255) NOT NULL,
  `Responsable` varchar(255) NOT NULL,
  `ToleranciaProceso` varchar(255) NOT NULL,
  `DesviacionMaxima` varchar(255) NOT NULL,
  `ToleranciaDesviacion` varchar(255) NOT NULL,
  `Medicion` varchar(255) NOT NULL,
  `Unidad` varchar(255) NOT NULL,
  `RangoMedicion` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CatMediciones`
--

CREATE TABLE IF NOT EXISTS `CatMediciones` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Codigo` varchar(255) NOT NULL,
  `Linea` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `CatMediciones`
--

INSERT INTO `CatMediciones` (`Id`, `Nombre`, `Codigo`, `Linea`, `Muestra`) VALUES
(1, 'MEDIDA DIRECTA', '1', '1', 0),
(2, 'MEDIDA INDIRECTA', '2', '1', 0),
(3, 'MEDIDA DIRECTA', '1', '2', 0),
(4, 'MEDIDA INDIRECTA', '2', '2', 0),
(5, 'MEDIDA DIRECTA', '1', '3', 0),
(6, 'MEDIDA INDIRECTA', '2', '3', 0),
(7, 'JUAN JOSE', '33166', '1', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Certificado`
--

CREATE TABLE IF NOT EXISTS `Certificado` (
  `Id` int(11) NOT NULL auto_increment,
  `Idservicio` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `Certificado`
--

INSERT INTO `Certificado` (`Id`, `Idservicio`, `Nombre`) VALUES
(8, 4, 'ASEGURAMIENTO METROLOGÍA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CertificadoDureza`
--

CREATE TABLE IF NOT EXISTS `CertificadoDureza` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Cliente` int(11) NOT NULL,
  `OrdenCompra` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Material` varchar(255) NOT NULL,
  `Trazabilidad` varchar(255) NOT NULL,
  `Uk` varchar(255) NOT NULL,
  `TipoDureza` varchar(255) NOT NULL,
  `CargaAplicada` varchar(255) NOT NULL,
  `Medidas` int(11) NOT NULL,
  `Puntos` int(11) NOT NULL,
  `Promedio` varchar(255) NOT NULL,
  `Desviacion` varchar(255) NOT NULL,
  `Resultado` varchar(255) NOT NULL,
  `Req1` varchar(255) NOT NULL,
  `Req2` varchar(255) NOT NULL,
  `Req3` varchar(255) NOT NULL,
  `Req4` varchar(255) NOT NULL,
  `Req5` varchar(255) NOT NULL,
  `Req6` varchar(255) NOT NULL,
  `Obt1` varchar(255) NOT NULL,
  `Obt2` varchar(255) NOT NULL,
  `Obt3` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CertificadoDurezaItem1`
--

CREATE TABLE IF NOT EXISTS `CertificadoDurezaItem1` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcertificado` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Promedio` varchar(255) NOT NULL,
  `Desviacion` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CertificadoDurezaItem2`
--

CREATE TABLE IF NOT EXISTS `CertificadoDurezaItem2` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcertificado` int(11) NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Promedio` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CertificadoDurezaItems`
--

CREATE TABLE IF NOT EXISTS `CertificadoDurezaItems` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcertificado` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Valor` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CertificadoMetrologico`
--

CREATE TABLE IF NOT EXISTS `CertificadoMetrologico` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Cliente` int(11) NOT NULL,
  `Rip` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Proveedor` int(11) NOT NULL,
  `OrdenTrabajo` varchar(255) NOT NULL,
  `Temperatura` varchar(255) NOT NULL,
  `UK` varchar(255) NOT NULL,
  `OrdenCompra` varchar(255) NOT NULL,
  `Codigo` varchar(255) NOT NULL,
  `Plano` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Material` varchar(255) NOT NULL,
  `DurezaObtenida` varchar(255) NOT NULL,
  `Interior1` varchar(255) NOT NULL,
  `Interior2` varchar(255) NOT NULL,
  `Interior3` varchar(255) NOT NULL,
  `Interior4` varchar(255) NOT NULL,
  `Exterior1` varchar(255) NOT NULL,
  `Exterior2` varchar(255) NOT NULL,
  `Exterior3` varchar(255) NOT NULL,
  `Exterior4` varchar(255) NOT NULL,
  `Longitud1` varchar(255) NOT NULL,
  `Longitud2` varchar(255) NOT NULL,
  `Longitud3` varchar(255) NOT NULL,
  `Longitud4` varchar(255) NOT NULL,
  `Chaflanes` varchar(255) NOT NULL,
  `Radios` varchar(255) NOT NULL,
  `Roscas` varchar(255) NOT NULL,
  `Entalladura` varchar(255) NOT NULL,
  `Cantidad` varchar(255) NOT NULL,
  `Revisadas` varchar(255) NOT NULL,
  `Aceptadas` varchar(255) NOT NULL,
  `Rechazadas` varchar(255) NOT NULL,
  `Conforme` varchar(255) NOT NULL,
  `Dimensiones` varchar(255) NOT NULL,
  `Geometria` varchar(255) NOT NULL,
  `Acabados` varchar(255) NOT NULL,
  `ValConforme` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientes`
--

CREATE TABLE IF NOT EXISTS `Clientes` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Razon` varchar(255) NOT NULL,
  `Cedula` varchar(255) NOT NULL,
  `Cod` varchar(2) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Celular` varchar(255) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Celcontacto` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Retencion` double NOT NULL,
  `Rut` varchar(255) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `Clientes`
--

INSERT INTO `Clientes` (`Id`, `Nombre`, `Razon`, `Cedula`, `Cod`, `Ciudad`, `Dir`, `Telefono`, `Celular`, `Contacto`, `Celcontacto`, `Email`, `Retencion`, `Rut`, `Contrasena`, `Muestra`) VALUES
(1, 'SOMBREROS AGUADAS', 'SOMBREROS AGUADAS', '71216799', '2', 'MEDELLIN', 'CR 43 # 10 16', '3017247256', '3017247555', 'JUAN ALEJANDRO', '3017247256', 'juan@webevolution.com.co', 2, '1.jpg', '123456', 0),
(2, 'METALCORP', 'METALCORP SAS', '71256663', '9', 'MEDELLIN', 'CARRERA 24 A SUR #54-35', '3017247255', '3017247257', 'NATALIA TABORDA', '3154525623', 'juanalejandroz@gmail.com', 2, '2.jpg', '123456', 0),
(5, 'CAMIONES JS', 'CAMIONES JS', '43504033', '4', '', '', '', '', 'PEDRO REYES', '3424324234242', 'juanalejandroz@gmail.com', 0, '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientesde`
--

CREATE TABLE IF NOT EXISTS `Clientesde` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Razon` varchar(255) NOT NULL,
  `Cedula` varchar(255) NOT NULL,
  `Cod` varchar(2) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Celular` varchar(255) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Celcontacto` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Retencion` double NOT NULL,
  `Rut` varchar(255) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Clientesde`
--

INSERT INTO `Clientesde` (`Id`, `Idcliente`, `Nombre`, `Razon`, `Cedula`, `Cod`, `Ciudad`, `Dir`, `Telefono`, `Celular`, `Contacto`, `Celcontacto`, `Email`, `Retencion`, `Rut`, `Contrasena`, `Muestra`) VALUES
(1, 1, 'LUBRICORP SAS', 'LUBRICORP SAS', '77887799', '2', 'MEDELLIN', '7569 NW 70 TH ST', '7863262678', '214748364', 'RAUL YEPES', '3017247256', 'info@juanalejandro.com', 2, '1.jpg', '4g7wx0lwzn', 0),
(2, 2, 'CARNELY', 'CARNELY', '65343333', '3', 'POBLADO', 'CARRERA 24 A SUR #54-35', '301724725', '301724755', 'JUAN CARLOS', '214748364', 'juan@webevolution.com.co', 3, '2.jpg', '4g7wx0lwzn', 0),
(3, 2, 'CAZAJA DELIVERY', 'CAZAJA DELIVERY', '435040363', '8', 'MIAMI', '7569 NW 70 TH ST', '301724725', '301724755', 'RAUL YEPES', '214748364', 'info@juanalejandro.com', 3, '', '123456', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Clientex`
--

CREATE TABLE IF NOT EXISTS `Clientex` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Razon` varchar(255) NOT NULL,
  `Cedula` varchar(255) NOT NULL,
  `Cod` varchar(2) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Celular` varchar(255) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Celcontacto` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Retencion` double NOT NULL,
  `Rut` varchar(255) NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Clientex`
--

INSERT INTO `Clientex` (`Id`, `Nombre`, `Razon`, `Cedula`, `Cod`, `Ciudad`, `Dir`, `Telefono`, `Celular`, `Contacto`, `Celcontacto`, `Email`, `Retencion`, `Rut`, `Contrasena`, `Muestra`) VALUES
(1, 'METALMECANICA', 'METALMECANICA', '8782124545', '8', '', '', '', '', 'DIEGO CORREA', '8754552121', 'info@grupoip.com.co', 0, '', '', 0),
(2, 'CAMIONES JS', 'CAMIONES JS', '43504033', '4', '', '', '', '', 'PEDRO REYES', '3424324234242', 'juanalejandroz@gmail.com', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cotizacionasmecon`
--

CREATE TABLE IF NOT EXISTS `Cotizacionasmecon` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcotiz` int(6) unsigned zerofill NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Sinaprobacion` varchar(10) NOT NULL,
  `Enviado` varchar(50) NOT NULL,
  `Fechaenvio` date NOT NULL,
  `Aprobada` varchar(10) NOT NULL,
  `Medioaprobacion` varchar(50) NOT NULL,
  `Nombreaprueba` varchar(255) NOT NULL,
  `Fechaaprueba` date NOT NULL,
  `Motivonoaprueba` longtext NOT NULL,
  `Precio` varchar(255) NOT NULL,
  `Tiempoentrega` varchar(255) NOT NULL,
  `Dispocision` varchar(255) NOT NULL,
  `Lugar` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Medionoaprobacion` varchar(255) NOT NULL,
  `Fechanoaprueba` date NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Cotizacionasmecon`
--

INSERT INTO `Cotizacionasmecon` (`Id`, `Idcotiz`, `Nombre`, `Sinaprobacion`, `Enviado`, `Fechaenvio`, `Aprobada`, `Medioaprobacion`, `Nombreaprueba`, `Fechaaprueba`, `Motivonoaprueba`, `Precio`, `Tiempoentrega`, `Dispocision`, `Lugar`, `Usuario`, `Medionoaprobacion`, `Fechanoaprueba`) VALUES
(1, 000001, 'LEANDRO', 'SI', 'E-MAIL', '2016-04-26', 'SI', 'E-MAIL', 'LEANDRO', '2016-04-26', '', '', '', '', '', '', '', '0000-00-00'),
(2, 000002, 'DIEGO CARDONA', 'SI', 'E-MAIL', '2016-04-01', 'SI', 'E-MAIL', 'LEANDRO', '2016-04-06', '', '', '', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cotizacionasmeconexp`
--

CREATE TABLE IF NOT EXISTS `Cotizacionasmeconexp` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcotiz` int(6) unsigned zerofill NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Sinaprobacion` varchar(10) NOT NULL,
  `Enviado` varchar(50) NOT NULL,
  `Fechaenvio` date NOT NULL,
  `Aprobada` varchar(10) NOT NULL,
  `Medioaprobacion` varchar(50) NOT NULL,
  `Nombreaprueba` varchar(255) NOT NULL,
  `Fechaaprueba` date NOT NULL,
  `Motivonoaprueba` longtext NOT NULL,
  `Precio` varchar(255) NOT NULL,
  `Tiempoentrega` varchar(255) NOT NULL,
  `Dispocision` varchar(255) NOT NULL,
  `Lugar` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Medionoaprobacion` varchar(255) NOT NULL,
  `Fechanoaprueba` date NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cotizaciones`
--

CREATE TABLE IF NOT EXISTS `Cotizaciones` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Cliente` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Fax` varchar(255) NOT NULL,
  `Servicio` varchar(255) NOT NULL,
  `Idserv` int(11) NOT NULL,
  `Asunto` varchar(255) NOT NULL,
  `Informacion` varchar(255) NOT NULL,
  `Alcance` longtext NOT NULL,
  `Condiciones1` longtext NOT NULL,
  `Condiciones2` longtext NOT NULL,
  `Condiciones3` longtext NOT NULL,
  `Condiciones4` longtext NOT NULL,
  `Condiciones5` longtext NOT NULL,
  `Condiciones6` longtext NOT NULL,
  `Condiciones7` longtext NOT NULL,
  `Nota` longtext NOT NULL,
  `Fecha` datetime NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Estado` varchar(4) NOT NULL,
  `Orden` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Cotizaciones`
--

INSERT INTO `Cotizaciones` (`Id`, `Cliente`, `Nit`, `Contacto`, `Telefono`, `Direccion`, `Ciudad`, `Email`, `Fax`, `Servicio`, `Idserv`, `Asunto`, `Informacion`, `Alcance`, `Condiciones1`, `Condiciones2`, `Condiciones3`, `Condiciones4`, `Condiciones5`, `Condiciones6`, `Condiciones7`, `Nota`, `Fecha`, `Usuario`, `Estado`, `Orden`) VALUES
(000001, 'SOMBREROS AGUADAS', '71216799', '', '3017247256', 'CR 43 # 10 16', 'MEDELLIN', 'juan@webevolution.com.co', '', 'ASEGURAMIENTO METROLOGÍA', 4, 'VERIFICACIÓN ELEMENTOS', 'PLANO', 'ELEMTE', 'CERTIFICADO', 'ASMECON', 'ASMECON', 'AMSEOCN', '30 DIAS', '30 DIAS', '5 DIAS', '', '2016-04-21 10:29:41', '71216799', 'SI', '000001'),
(000002, 'SOMBREROS AGUADAS', '71216799', '', '3017247256', 'CR 43 # 10 16', 'MEDELLIN', 'juan@webevolution.com.co', '', 'INGENIERÍA Y DISEÑO', 3, 'VERIFICACIÓN ELEMENTOS', 'PLANO', 'ELEMTE', 'CERTIFICADO', 'ASMECON', 'ASMECON', 'AMSEOCN', '30 DIAS', '30 DIAS', '5 DIAS', '', '2016-04-21 10:38:27', '71216799', 'SI', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cotizacionesexp`
--

CREATE TABLE IF NOT EXISTS `Cotizacionesexp` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Cliente` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Fax` varchar(255) NOT NULL,
  `Idserv` int(11) NOT NULL,
  `Servicio` varchar(255) NOT NULL,
  `Asunto` varchar(255) NOT NULL,
  `Informacion` varchar(255) NOT NULL,
  `Alcance` longtext NOT NULL,
  `Condiciones1` longtext NOT NULL,
  `Condiciones2` longtext NOT NULL,
  `Condiciones3` longtext NOT NULL,
  `Condiciones4` longtext NOT NULL,
  `Condiciones5` longtext NOT NULL,
  `Condiciones6` longtext NOT NULL,
  `Condiciones7` longtext NOT NULL,
  `Nota` longtext NOT NULL,
  `Fecha` datetime NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Estado` varchar(4) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cotizacionesitem`
--

CREATE TABLE IF NOT EXISTS `Cotizacionesitem` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcotiz` int(6) unsigned zerofill NOT NULL,
  `Cant` int(11) NOT NULL,
  `Plano` varchar(255) NOT NULL,
  `Descripcion` longtext character set utf8 collate utf8_spanish2_ci NOT NULL,
  `Valor` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Cotizacionesitem`
--

INSERT INTO `Cotizacionesitem` (`Id`, `Idcotiz`, `Cant`, `Plano`, `Descripcion`, `Valor`, `Total`) VALUES
(1, 000001, 120, 'A4-00015', 'ANÁLOGO  0 - 150 MM.', 70000, 8400000),
(2, 000002, 120, 'A4-00015', 'ANÁLOGO  0 - 150 MM.', 70000, 8400000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cotizacionesitemexp`
--

CREATE TABLE IF NOT EXISTS `Cotizacionesitemexp` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcotiz` int(6) unsigned zerofill NOT NULL,
  `Cant` int(11) NOT NULL,
  `Plano` varchar(255) NOT NULL,
  `Descripcion` longtext character set utf8 collate utf8_spanish2_ci NOT NULL,
  `Valor` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ctaspagar`
--

CREATE TABLE IF NOT EXISTS `Ctaspagar` (
  `Id` int(5) unsigned zerofill NOT NULL auto_increment,
  `Idobra` int(11) NOT NULL,
  `Idprov` int(11) NOT NULL,
  `Obra` varchar(255) NOT NULL,
  `Proveedor` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Factura` varchar(255) NOT NULL,
  `Fechavence` date NOT NULL,
  `Valor` double NOT NULL,
  `Rte` double NOT NULL,
  `Total` double NOT NULL,
  `Comentarios` longtext NOT NULL,
  `Estado` int(11) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Fechacrea` date NOT NULL,
  `Anulado` int(11) NOT NULL,
  `Fechaanula` date NOT NULL,
  `Usuarioanula` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cuentas`
--

CREATE TABLE IF NOT EXISTS `Cuentas` (
  `Id` int(11) NOT NULL auto_increment,
  `Idforma` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Cuenta` double NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `Cuentas`
--

INSERT INTO `Cuentas` (`Id`, `Idforma`, `Nombre`, `Cuenta`, `Muestra`, `Pos`) VALUES
(1, 3, 'BANCOLOMBIA', 10787041689, 0, 0),
(2, 1, 'LÍNEAS DE TRANSMISIÓN', 43504036, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Descripcion`
--

CREATE TABLE IF NOT EXISTS `Descripcion` (
  `Id` int(11) NOT NULL auto_increment,
  `Idservicio` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `Descripcion`
--

INSERT INTO `Descripcion` (`Id`, `Idservicio`, `Nombre`, `Muestra`, `Activo`) VALUES
(19, 3, 'BARRAS PATRON DE PUESTA ACERO', 0, 0),
(2, 2, 'BLOQUE PATRON', 0, 0),
(17, 2, 'CALIBRADOR DE ALTURAS', 0, 0),
(20, 2, 'BARRAS PATRON DE PUESTA ACERO', 0, 0),
(21, 2, 'COMPARADORES DE CARATULA', 0, 0),
(22, 2, 'DUROMETRO SHORE A', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Documentacion`
--

CREATE TABLE IF NOT EXISTS `Documentacion` (
  `Id` int(11) NOT NULL auto_increment,
  `Idservicio` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DocumentosListado`
--

CREATE TABLE IF NOT EXISTS `DocumentosListado` (
  `Id` int(11) NOT NULL auto_increment,
  `Idlis` int(6) unsigned zerofill NOT NULL,
  `Tam` varchar(255) NOT NULL,
  `Numero` varchar(255) NOT NULL,
  `Hoja` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Estado`
--

CREATE TABLE IF NOT EXISTS `Estado` (
  `Id` int(11) NOT NULL auto_increment,
  `Idservicio` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Cant` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Facturacion`
--

CREATE TABLE IF NOT EXISTS `Facturacion` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Razon` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Fechafact` date NOT NULL,
  `Fechalim` date NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Valor` double NOT NULL,
  `Total` double NOT NULL,
  `Iva` double NOT NULL,
  `Estado` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Facturacionmov`
--

CREATE TABLE IF NOT EXISTS `Facturacionmov` (
  `Id` int(11) NOT NULL auto_increment,
  `Idfact` int(11) NOT NULL,
  `Idobra` int(5) unsigned zerofill NOT NULL,
  `Obra` varchar(255) NOT NULL,
  `Cant` int(11) NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Neto` double NOT NULL,
  `Valor` double NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Facturas`
--

CREATE TABLE IF NOT EXISTS `Facturas` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Idorden` varchar(50) NOT NULL,
  `Idcotiz` varchar(50) NOT NULL,
  `Nit` int(11) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `Razon` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Valor` int(11) NOT NULL,
  `Iva` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Fechaf` date NOT NULL,
  `Fechau` date NOT NULL,
  `Estado` varchar(255) NOT NULL,
  `Formapago` varchar(255) NOT NULL,
  `Nrocheque` varchar(255) NOT NULL,
  `Fechapago` date NOT NULL,
  `Rte` double NOT NULL,
  `Ica` double NOT NULL,
  `Rteiva` double NOT NULL,
  `Valorreal` double NOT NULL,
  `Notas` varchar(255) NOT NULL,
  `Recibo` varchar(255) NOT NULL,
  `Banco` varchar(255) NOT NULL,
  `Servicios` varchar(255) NOT NULL,
  `Clase` varchar(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Fechacrea` datetime NOT NULL,
  `Anular` int(11) NOT NULL,
  `Motivo` longtext NOT NULL,
  `Fechaanula` datetime NOT NULL,
  `Usuarioanula` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Facturas`
--

INSERT INTO `Facturas` (`Id`, `Idorden`, `Idcotiz`, `Nit`, `Codigo`, `Razon`, `Direccion`, `Telefono`, `Ciudad`, `Valor`, `Iva`, `Total`, `Fechaf`, `Fechau`, `Estado`, `Formapago`, `Nrocheque`, `Fechapago`, `Rte`, `Ica`, `Rteiva`, `Valorreal`, `Notas`, `Recibo`, `Banco`, `Servicios`, `Clase`, `Usuario`, `Fechacrea`, `Anular`, `Motivo`, `Fechaanula`, `Usuarioanula`) VALUES
(000001, '000001', '000001', 71216799, 2, 'SOMBREROS AGUADAS', 'CR 43 # 10 16', '3017247256', 'MEDELLIN', 70000, 11200, 81200, '2016-04-01', '2016-04-30', 'CANCELADA', 'Transferencia', '', '2016-04-03', 0, 0, 0, 81200, '', '767', 'Santander', '1', 'ASEGURAMIENTO METROLOGÍA', '71216799', '2016-04-21 10:45:51', 0, '', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Fdimensional`
--

CREATE TABLE IF NOT EXISTS `Fdimensional` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Idcotiz` varchar(255) NOT NULL,
  `Idorden` varchar(255) NOT NULL,
  `Idfact` varchar(255) NOT NULL,
  `Idrecep` varchar(255) NOT NULL,
  `Cliente` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Rip` varchar(255) NOT NULL,
  `Orden` varchar(255) NOT NULL,
  `Plano` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Proveedor` varchar(255) NOT NULL,
  `Subcliente` varchar(255) character set utf8 collate utf8_spanish_ci NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Dureza` varchar(255) NOT NULL,
  `Obtenida` varchar(255) NOT NULL,
  `Material` varchar(255) NOT NULL,
  `Diagrama` varchar(255) NOT NULL,
  `Observaciones` longtext NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Fdimensionalitems`
--

CREATE TABLE IF NOT EXISTS `Fdimensionalitems` (
  `Id` int(11) NOT NULL auto_increment,
  `Idformato` int(6) unsigned zerofill NOT NULL,
  `Piezas` int(11) NOT NULL,
  `Medidas` int(11) NOT NULL,
  `Procedimiento` int(11) NOT NULL,
  `Tolerancia` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Fdimensionalitemsc`
--

CREATE TABLE IF NOT EXISTS `Fdimensionalitemsc` (
  `Id` int(11) NOT NULL auto_increment,
  `Idformato` int(11) NOT NULL,
  `Idformaitem` int(11) NOT NULL,
  `Pieza` int(11) NOT NULL,
  `Medida` int(11) NOT NULL,
  `Ref` double NOT NULL,
  `Desde` double NOT NULL,
  `Hasta` double NOT NULL,
  `Valor` double NOT NULL,
  `Resultado` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Impuestos`
--

CREATE TABLE IF NOT EXISTS `Impuestos` (
  `Id` int(11) NOT NULL auto_increment,
  `Iva` double NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Impuestos`
--

INSERT INTO `Impuestos` (`Id`, `Iva`) VALUES
(1, 0.16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Informacion`
--

CREATE TABLE IF NOT EXISTS `Informacion` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Identificacion` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pais` varchar(255) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Codigo` varchar(255) NOT NULL,
  `Telefono` varchar(255) NOT NULL,
  `Celular` varchar(255) NOT NULL,
  `Fax` varchar(255) NOT NULL,
  `Logo` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Urlseguimiento` longtext NOT NULL,
  `Banco` varchar(255) NOT NULL,
  `Tipocuenta` varchar(255) NOT NULL,
  `Nrocuenta` varchar(255) NOT NULL,
  `Nombrecuenta` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Casillero` text NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Informacion`
--

INSERT INTO `Informacion` (`Id`, `Nombre`, `Identificacion`, `Email`, `Pais`, `Ciudad`, `Dir`, `Codigo`, `Telefono`, `Celular`, `Fax`, `Logo`, `Url`, `Urlseguimiento`, `Banco`, `Tipocuenta`, `Nrocuenta`, `Nombrecuenta`, `Nit`, `Casillero`) VALUES
(1, 'ASMECON S.A.S', '00000001', 'info@juanalejandro.com', 'COLOMBIA', 'MEDELLIN', 'CALLE 48 Nº 65-10 - OFICINA 204', '', '260-96-58', '230-16-30', '260-96-58', '1.jpg', 'http://enviamipaquete.rapibox.net/', 'www.asmecon.com', '', '', '', '', '66554433-2', 'ENVI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Instrumentos`
--

CREATE TABLE IF NOT EXISTS `Instrumentos` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `TipoInstrumento` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Instrumentos`
--

INSERT INTO `Instrumentos` (`Id`, `Nombre`, `TipoInstrumento`, `Foto`, `Muestra`, `Activo`) VALUES
(000001, 'BALANZA', '19', '000001.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `InstrumentosDOS`
--

CREATE TABLE IF NOT EXISTS `InstrumentosDOS` (
  `Id` int(3) unsigned zerofill NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `TipoInstrumento` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Responsable` varchar(255) NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Denominacion` varchar(255) NOT NULL,
  `Codigo` varchar(255) NOT NULL,
  `Serie` varchar(255) NOT NULL,
  `Manual` varchar(255) NOT NULL,
  `Fabricante` varchar(255) NOT NULL,
  `Modelo` varchar(255) NOT NULL,
  `FabricadoEn` varchar(255) NOT NULL,
  `FechaServicio` varchar(255) NOT NULL,
  `EstadoFisico` varchar(255) NOT NULL,
  `ValorComercial` varchar(255) NOT NULL,
  `Aplicacion` varchar(255) NOT NULL,
  `Observaciones` varchar(255) NOT NULL,
  `RangoIntervalo` varchar(255) NOT NULL,
  `IntervaloMedida` varchar(255) NOT NULL,
  `Resolucion` varchar(255) NOT NULL,
  `DivisionEscala` varchar(255) NOT NULL,
  `ClaseExactitud` varchar(255) NOT NULL,
  `Indicacion` varchar(255) NOT NULL,
  `Tipo` varchar(255) NOT NULL,
  `Accesorios` varchar(255) NOT NULL,
  `Procedimiento` varchar(205) NOT NULL,
  `Laboratorio` varchar(255) NOT NULL,
  `Frecuencia` varchar(255) NOT NULL,
  `Criterio` varchar(255) NOT NULL,
  `Repetibilidad` varchar(255) NOT NULL,
  `Desviacion` varchar(255) NOT NULL,
  `ErrorIncertidumbre` varchar(255) NOT NULL,
  `Linea` int(11) NOT NULL,
  `Categoria` int(11) NOT NULL,
  `SubCategoria` int(11) NOT NULL,
  `Opcion` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Interes`
--

CREATE TABLE IF NOT EXISTS `Interes` (
  `Id` int(11) NOT NULL auto_increment,
  `Texto1` longtext NOT NULL,
  `Texto2` longtext NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ListadoPlanos`
--

CREATE TABLE IF NOT EXISTS `ListadoPlanos` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `OrdenTrabajo` int(6) unsigned zerofill NOT NULL,
  `Factura` int(6) unsigned zerofill NOT NULL,
  `Rip` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Cliente` varchar(255) NOT NULL,
  `Instalacion` varchar(255) NOT NULL,
  `Sistema` varchar(255) NOT NULL,
  `Subsistema` varchar(255) NOT NULL,
  `Equipo` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Requerimiento` varchar(255) NOT NULL,
  `Cod_sap` varchar(255) NOT NULL,
  `Codigocon` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Observaciones` varchar(255) NOT NULL,
  `A` date NOT NULL,
  `B` date NOT NULL,
  `C` date NOT NULL,
  `Longitud` varchar(255) NOT NULL,
  `Exterior` varchar(255) NOT NULL,
  `Interior` varchar(255) NOT NULL,
  `Angulos` varchar(255) NOT NULL,
  `PiezaPlano` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Listaprecios`
--

CREATE TABLE IF NOT EXISTS `Listaprecios` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(50) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `Listaprecios`
--

INSERT INTO `Listaprecios` (`Id`, `Nombre`, `Muestra`, `Activo`) VALUES
(1, 'PIE DE REY', 0, 0),
(2, 'FLEXÓMETRO', 0, 0),
(3, 'MICRÓMETROS', 0, 0),
(11, 'INSTRUMENTOS', 0, 0),
(5, 'REGLAS', 0, 0),
(6, 'INDICADORES', 0, 0),
(7, 'ESCUADRAS', 0, 1),
(8, 'CALIBRADORES ALTURA', 0, 1),
(9, 'CALIBRADORES', 0, 1),
(12, 'CALIBRADORES', 0, 0),
(13, 'CALIBRADORES ALTURA', 0, 0),
(14, 'ESCUADRAS', 0, 0),
(15, 'ASEGURAMIENTO', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Listrapreciositem`
--

CREATE TABLE IF NOT EXISTS `Listrapreciositem` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcat` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Valor` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `Listrapreciositem`
--

INSERT INTO `Listrapreciositem` (`Id`, `Idcat`, `Nombre`, `Valor`, `Muestra`, `Activo`) VALUES
(1, 1, 'ANÁLOGO  0 - 150 MM.', 70000, 0, 0),
(3, 1, 'Digital 0 - 150 mm.', 70000, 0, 0),
(4, 1, 'Caratula 0 - 150 mm.', 70000, 0, 0),
(5, 1, 'ANÁLOGO  0 - 300 MM.', 70000, 0, 0),
(6, 1, 'Digital 0 - 300 mm.', 70000, 0, 0),
(7, 1, 'Caratula 0 - 300 mm.', 70000, 0, 0),
(8, 2, '0 - 3 000 mm.', 65000, 1, 1),
(9, 2, '0 - 5 000 mm.', 70000, 0, 0),
(10, 3, 'Para Interiores 0 - 1 000 mm', 70000, 0, 0),
(11, 3, 'Para Interiores 1 000 - 1 500 mm', 80000, 0, 0),
(12, 3, 'PARA EXTERIORES ANALAGO 0 - 300 MM', 70000, 0, 0),
(13, 3, 'PARA EXTERIORES ANALOGO 300 - 1 500 MM', 80000, 0, 0),
(14, 3, 'Para Exteriores barras intercambiables', 80000, 0, 0),
(15, 3, 'Para Exteriores 0 - 12 Pulgadas', 70000, 0, 0),
(16, 5, 'METALICAS 0 - 1 000 MM', 70000, 0, 0),
(17, 6, 'Caratula 0 - 10 mm.', 70000, 0, 0),
(18, 14, '90º, UNIVERSAL, ESPALDÓN', 70000, 0, 0),
(19, 13, 'Altura 0 - 1 000 mm.', 70000, 0, 0),
(20, 9, 'Juego Komatsu', 120000, 1, 1),
(21, 11, 'PIE DE REY', 75000, 0, 0),
(22, 9, 'LEANDRO', 5000, 1, 1),
(23, 2, '0 - 3 000 MM.', 65000, 0, 0),
(24, 12, 'JUANA', 50000, 1, 1),
(25, 15, 'BUJE', 20000, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `Id` int(11) NOT NULL auto_increment,
  `Usuario` varchar(255) NOT NULL,
  `Fecha` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180 ;

--
-- Volcado de datos para la tabla `Login`
--

INSERT INTO `Login` (`Id`, `Usuario`, `Fecha`) VALUES
(1, '1', '2015-03-02 23:13:40'),
(2, '1', '2015-03-03 08:09:22'),
(3, '2', '2015-03-03 08:11:22'),
(4, '1', '2015-03-03 08:11:37'),
(5, '1', '2015-03-03 11:06:08'),
(6, '1', '2015-03-03 14:14:20'),
(7, '1', '2015-03-03 22:55:00'),
(8, '1', '2015-03-04 10:56:28'),
(9, '1', '2015-03-04 21:55:42'),
(10, '1', '2015-03-05 08:02:54'),
(11, '1', '2015-03-06 07:51:58'),
(12, '1', '2015-03-10 08:21:23'),
(13, '1', '2015-03-29 22:47:08'),
(14, '1', '2015-03-29 23:04:33'),
(15, '1', '2015-03-30 14:00:14'),
(16, '1', '2015-03-30 14:42:57'),
(17, '1', '2015-03-31 13:35:42'),
(18, '1', '2015-03-31 22:21:15'),
(19, '1', '2015-04-05 02:56:50'),
(20, '1', '2015-04-05 16:01:04'),
(21, '1', '2015-04-06 08:33:54'),
(22, '1', '2015-04-06 11:13:13'),
(23, '1', '2015-04-06 21:47:27'),
(24, '1', '2015-04-20 22:13:08'),
(25, '1', '2015-04-22 09:31:28'),
(26, '1', '2015-04-23 01:26:38'),
(27, '1', '2015-04-23 08:00:13'),
(28, '1', '2015-04-23 11:09:02'),
(29, '6', '2015-04-23 11:18:40'),
(30, '1', '2015-04-23 11:19:03'),
(31, '1', '2015-05-06 15:04:34'),
(32, '1', '2015-05-23 22:49:51'),
(33, '1', '2015-05-23 23:36:46'),
(34, '1', '2015-05-24 23:07:15'),
(35, '1', '2015-05-25 10:40:31'),
(36, '1', '2015-05-25 15:03:09'),
(37, '1', '2015-05-25 22:11:37'),
(38, '1', '2015-05-26 07:30:09'),
(39, '1', '2015-05-26 17:06:03'),
(40, '1', '2015-05-26 22:35:41'),
(41, '1', '2015-05-26 23:27:50'),
(42, '1', '2015-05-26 23:38:38'),
(43, '6', '2015-05-27 10:45:14'),
(44, '1', '2015-05-27 13:09:40'),
(45, '7', '2015-05-27 15:06:32'),
(46, '1', '2015-06-22 13:33:54'),
(47, '1', '2015-06-22 23:00:45'),
(48, '1', '2015-06-23 08:52:46'),
(49, '1', '2015-06-24 09:21:06'),
(50, '1', '2015-06-24 13:13:03'),
(51, '1', '2015-06-24 15:59:40'),
(52, '1', '2015-06-25 08:31:57'),
(53, '1', '2015-06-25 09:13:55'),
(54, '1', '2015-06-25 09:20:31'),
(55, '1', '2015-06-25 13:06:57'),
(56, '1', '2015-06-26 08:56:19'),
(57, '1', '2015-06-29 09:21:37'),
(58, '1', '2015-06-30 09:57:20'),
(59, '1', '2015-07-06 09:46:21'),
(60, '1', '2015-07-07 09:01:23'),
(61, '7', '2015-07-07 11:55:22'),
(62, '1', '2015-07-08 09:15:15'),
(63, '1', '2015-07-08 13:01:48'),
(64, '1', '2015-07-08 13:04:48'),
(65, '1', '2015-07-08 16:07:22'),
(66, '1', '2015-07-09 09:01:57'),
(67, '1', '2015-07-09 11:04:59'),
(68, '1', '2015-07-09 11:06:38'),
(69, '1', '2015-07-09 11:09:35'),
(70, '1', '2015-07-09 11:10:55'),
(71, '1', '2015-07-09 11:48:06'),
(72, '1', '2015-07-09 13:03:01'),
(73, '1', '2015-07-09 14:24:12'),
(74, '1', '2015-07-09 14:27:51'),
(75, '1', '2015-07-09 16:20:05'),
(76, '1', '2015-07-09 16:23:02'),
(77, '1', '2015-07-09 16:24:00'),
(78, '1', '2015-07-09 16:40:53'),
(79, '1', '2015-07-10 09:04:07'),
(80, '1', '2015-07-10 10:15:06'),
(81, '1', '2015-07-10 10:37:36'),
(82, '1', '2015-07-12 19:48:39'),
(83, '1', '2015-07-27 12:05:27'),
(84, '1', '2015-08-05 10:54:08'),
(85, '7', '2015-08-12 08:50:23'),
(86, '1', '2015-08-24 09:04:42'),
(87, '1', '2015-08-24 10:44:30'),
(88, '1', '2015-08-25 08:54:27'),
(89, '1', '2015-08-26 16:10:45'),
(90, '1', '2015-08-28 13:18:13'),
(91, '1', '2015-08-28 13:23:33'),
(92, '1', '2015-08-31 09:29:45'),
(93, '1', '2015-09-01 09:06:19'),
(94, '1', '2015-09-02 08:58:44'),
(95, '1', '2015-09-02 17:53:49'),
(96, '1', '2015-09-03 09:09:57'),
(97, '1', '2015-09-04 10:27:00'),
(98, '1', '2015-09-04 11:01:54'),
(99, '1', '2015-09-07 09:05:21'),
(100, '1', '2015-09-08 09:22:24'),
(101, '1', '2015-09-09 09:05:51'),
(102, '1', '2015-09-09 12:05:53'),
(103, '1', '2015-09-09 16:30:03'),
(104, '1', '2015-09-10 09:06:45'),
(105, '1', '2015-09-10 15:59:24'),
(106, '1', '2015-09-10 22:19:19'),
(107, '1', '2015-09-11 08:14:07'),
(108, '1', '2015-09-11 09:02:28'),
(109, '7', '2015-09-12 12:39:23'),
(110, '1', '2015-09-14 12:48:40'),
(111, '1', '2015-09-14 13:55:08'),
(112, '1', '2015-09-14 17:59:18'),
(113, '1', '2015-09-15 09:12:20'),
(114, '1', '2015-09-16 09:03:19'),
(115, '1', '2015-09-17 09:12:42'),
(116, '1', '2015-09-17 11:02:42'),
(117, '1', '2015-09-18 08:56:20'),
(118, '1', '2015-09-24 09:13:39'),
(119, '1', '2015-09-25 09:01:32'),
(120, '1', '2015-09-25 23:06:44'),
(121, '1', '2015-09-28 08:56:19'),
(122, '1', '2015-09-29 08:58:52'),
(123, '1', '2015-09-29 09:16:14'),
(124, '7', '2015-09-30 07:22:27'),
(125, '1', '2015-09-30 09:16:20'),
(126, '1', '2015-10-01 11:14:49'),
(127, '1', '2015-10-09 10:07:23'),
(128, '1', '2015-10-09 14:21:58'),
(129, '1', '2015-10-14 09:37:06'),
(130, '1', '2015-10-14 10:46:48'),
(131, '1', '2015-10-15 09:25:43'),
(132, '1', '2015-10-16 09:50:27'),
(133, '1', '2015-10-19 08:59:50'),
(134, '1', '2015-10-20 09:03:36'),
(135, '1', '2015-10-20 09:22:59'),
(136, '1', '2015-10-20 13:26:36'),
(137, '1', '2015-10-21 09:00:24'),
(138, '1', '2015-10-22 09:01:20'),
(139, '1', '2015-10-22 10:14:39'),
(140, '1', '2015-10-22 10:14:43'),
(141, '1', '2015-10-23 09:01:24'),
(142, '1', '2015-10-23 13:51:34'),
(143, '1', '2015-10-23 14:47:43'),
(144, '7', '2015-10-26 09:50:59'),
(145, '1', '2015-10-27 11:13:36'),
(146, '1', '2015-10-28 11:24:21'),
(147, '1', '2015-10-28 12:10:19'),
(148, '1', '2015-10-29 11:03:37'),
(149, '1', '2015-10-29 11:08:42'),
(150, '1', '2015-10-30 08:03:26'),
(151, '1', '2015-11-03 09:10:01'),
(152, '1', '2015-11-04 09:00:24'),
(153, '1', '2015-11-05 09:19:33'),
(154, '1', '2015-11-06 09:11:34'),
(155, '1', '2015-11-06 14:07:19'),
(156, '1', '2015-11-09 09:06:22'),
(157, '1', '2015-11-12 10:13:22'),
(158, '1', '2015-11-12 11:20:49'),
(159, '1', '2015-11-12 12:16:06'),
(160, '1', '2015-11-13 09:03:48'),
(161, '1', '2015-11-17 09:02:21'),
(162, '1', '2015-11-17 13:45:10'),
(163, '1', '2015-11-18 09:02:37'),
(164, '1', '2015-11-19 09:07:53'),
(165, '1', '2015-11-20 15:12:55'),
(166, '1', '2015-11-24 14:15:48'),
(167, '7', '2015-12-04 09:11:47'),
(168, '1', '2015-12-14 11:25:42'),
(169, '1', '2015-12-14 12:13:56'),
(170, '1', '2015-12-15 09:12:47'),
(171, '7', '2016-01-28 07:55:32'),
(172, '7', '2016-02-13 10:08:16'),
(173, '7', '2016-03-10 09:24:13'),
(174, '1', '2016-03-10 09:25:30'),
(175, '7', '2016-03-10 09:26:43'),
(176, '7', '2016-03-10 09:27:05'),
(177, '7', '2016-04-21 10:14:06'),
(178, '1', '2016-04-21 10:15:24'),
(179, '1', '2016-06-12 10:46:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mensajes`
--

CREATE TABLE IF NOT EXISTS `Mensajes` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Texto` longtext NOT NULL,
  `Fecha` datetime NOT NULL,
  `Estado` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Menu`
--

CREATE TABLE IF NOT EXISTS `Menu` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `Menu`
--

INSERT INTO `Menu` (`Id`, `Nombre`, `Url`, `Pos`) VALUES
(1, 'Inicio', 'zona.php', 1),
(2, 'Maestros', '#', 2),
(6, 'Parametros', '#', 3),
(3, 'Cotizaciones', '#', 4),
(8, 'Recepción', '#', 5),
(9, 'Contabilidad', '#', 6),
(10, 'Metrología', '#', 7),
(11, 'Instrumentos', '#', 6),
(12, 'Ingenieria', '#', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Menuopc`
--

CREATE TABLE IF NOT EXISTS `Menuopc` (
  `Id` int(11) NOT NULL auto_increment,
  `Idmenu` int(11) NOT NULL,
  `Idsub` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Volcado de datos para la tabla `Menuopc`
--

INSERT INTO `Menuopc` (`Id`, `Idmenu`, `Idsub`, `Nombre`, `Url`, `Pos`) VALUES
(1, 2, 1, 'Ingresar', 'ing-usuario.php', 1),
(2, 2, 1, 'Actualizar / Eliminar', 'act-usuario.php', 2),
(3, 2, 2, 'Ingresar', 'ing-cliente.php', 1),
(4, 2, 2, 'Actualizar / Eliminar', 'act-cliente.php', 2),
(5, 2, 3, 'Ingresar', 'ing-proveedor.php', 1),
(6, 2, 3, 'Actualizar / Eliminar', 'act-proveedor.php', 2),
(17, 6, 17, 'Actualizar / Eliminar', 'act-instru.php', 2),
(16, 6, 17, 'Ingresar', 'add-instru.php', 1),
(9, 2, 5, 'Ingresar', 'add-tipo.php', 1),
(10, 2, 5, 'Actualizar / Eliminar', 'act-tipo.php', 2),
(11, 2, 5, 'Permisos', 'act-permisos.php', 3),
(12, 2, 7, 'Ingresar', 'add-serv.php', 1),
(13, 2, 7, 'Actualizar / Eliminar', 'act-serv.php', 2),
(14, 6, 8, 'Asignar', 'add-certificado.php', 1),
(18, 6, 9, 'Ingresar', 'add-descrip.php', 1),
(19, 6, 9, 'Actualizar / Eliminar', 'act-descrip.php', 2),
(20, 2, 16, 'Ingresar', 'ing-clientex.php', 1),
(21, 2, 16, 'Actualizar / Eliminar', 'act-clientex.php', 2),
(22, 6, 18, 'Ingresar', 'ing-soporte.php', 1),
(23, 6, 18, 'Actualizar / Eliminar', 'act-soporte.php', 2),
(24, 6, 19, 'Ingresar', 'ing-estado.php', 1),
(25, 6, 19, 'Actualizar / Eliminar', 'act-estado.php', 2),
(26, 6, 20, 'Ingresar', 'ing-instrumento.php', 1),
(27, 6, 20, 'Actualizar / Eliminar', 'act-instrumento.php', 2),
(28, 6, 21, 'Ingresar', 'ing-documento.php', 1),
(29, 6, 21, 'Actualizar / Eliminar', 'act-documento.php', 2),
(30, 3, 22, 'Ingresar', 'ing-lista.php', 1),
(31, 3, 22, 'Actualizar / Eliminar', 'act-lista.php', 2),
(32, 3, 23, 'Ingresar', 'ing-asigna.php', 1),
(33, 3, 23, 'Actualizar / Eliminar', 'act-asigna.php', 2),
(34, 3, 24, 'Ingresar', 'ing-cotizacion.php', 1),
(35, 3, 24, 'Actualizar / Eliminar', 'act-cotizacion.php', 2),
(36, 3, 25, 'Ingresar', 'add-exporadica.php', 1),
(37, 3, 25, 'Actualizar / Eliminar', 'act-exporadica.php', 2),
(38, 8, 26, 'Ingresar', 'add-recepcion.php', 1),
(39, 8, 26, 'Actualizar / Salir', 'act-recepcion.php', 2),
(43, 9, 28, 'Actualizar / Eliminar', 'act-orden.php', 2),
(42, 9, 28, 'Ingresar', 'add-orden.php', 1),
(44, 9, 29, 'Ingresar', 'add-factura.php', 1),
(45, 9, 29, 'Actualizar / Eliminar', 'act-factura.php', 2),
(46, 10, 30, 'Ingresar', 'add-formato-d.php', 1),
(47, 10, 30, 'Actualizar / Eliminar', 'act-formato-d.php', 2),
(48, 2, 31, 'Ingresar', 'add-procedimiento.php', 1),
(49, 2, 31, 'Actualizar / Eliminar', 'act-procedimiento.php', 2),
(50, 2, 32, 'Ingresar', 'add-tolerancia.php', 1),
(51, 2, 32, 'Actualizar / Eliminar', 'act-tolerancia.php', 2),
(52, 2, 33, 'Ingresar', 'add-rango.php', 1),
(53, 2, 33, 'Actualizar / Eliminar', 'act-rango.php', 2),
(54, 2, 34, 'Ingresar', 'ing-subcliente.php', 1),
(55, 2, 34, 'Actualizar / Eliminar', 'act-subcliente.php', 2),
(56, 11, 37, 'Ingresar', 'ing-areas.php', 1),
(57, 11, 37, 'Actualizar / Eliminar', 'act-areas.php', 2),
(58, 11, 38, 'Ingresar', 'ing-catmedidas.php', 1),
(59, 11, 38, 'Actualizar / Eliminar', 'act-catmedidas.php', 2),
(60, 11, 39, 'Ingresar', 'ing-submedidas.php', 1),
(61, 11, 39, 'Actualizar / Eliminar', 'act-submedidas.php', 2),
(62, 11, 40, 'Ingresar', 'ing-opcmedidas.php', 1),
(63, 11, 40, 'Actualizar / Eliminar', 'act-opcmedidas.php', 2),
(64, 10, 41, 'Ingresar', 'ing-cert-metro.php', 1),
(65, 10, 41, 'Actualizar / Eliminar', 'act-cert-metro.php', 2),
(66, 10, 42, 'Ingresar', 'ing-cert-dureza.php', 1),
(67, 10, 42, 'Actualizar / Eliminar', 'act-cert-dureza.php', 2),
(68, 2, 43, 'Ingresar', 'ing-tipodureza.php', 2),
(69, 2, 43, 'Actualizar / Eliminar', 'act-tipodureza.php', 2),
(70, 12, 44, 'Ingresar', 'ing-list-general.php', 1),
(71, 12, 44, 'Actualizar / Eliminar', 'act-list-general.php', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Menusub`
--

CREATE TABLE IF NOT EXISTS `Menusub` (
  `Id` int(11) NOT NULL auto_increment,
  `Idmenu` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Url` varchar(255) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `Menusub`
--

INSERT INTO `Menusub` (`Id`, `Idmenu`, `Nombre`, `Url`, `Pos`) VALUES
(1, 2, 'Usuarios', '#', 3),
(2, 2, 'Clientes', '#', 4),
(3, 2, 'Proveedores', '#', 7),
(19, 6, 'Estado', '#', 5),
(5, 2, 'Tipo de Usuarios', '#', 2),
(6, 2, 'Informacion', 'informacion.php', 1),
(7, 2, 'Servicios', '#', 8),
(8, 6, 'Certificado', '#', 1),
(9, 6, 'Descripción', '#', 2),
(24, 3, 'Cotizar', '#', 3),
(14, 7, 'Cuentas por Pagar', '#', 1),
(18, 6, 'Soporte', '#', 4),
(17, 6, 'Tipo Instrumento', '#', 3),
(15, 7, 'Cuentas por Cobrar', '#', 2),
(16, 2, 'Clientes Esporádicos', '#', 6),
(20, 6, 'Instrumentos', '#', 7),
(21, 6, 'Documentación', '#', 6),
(22, 3, 'Lista de Precios', '#', 1),
(23, 3, 'Asignar Precios', '#', 2),
(25, 3, 'Exporadicas', '#', 4),
(26, 8, 'Ingresos / Salidas', '#', 1),
(28, 9, 'Ordenes de Trabajo', '#', 1),
(29, 9, 'Facturación', '#', 2),
(30, 10, 'Formato Dimensional', '#', 1),
(31, 2, 'Tipo Procedimiento', '#', 9),
(32, 2, 'Tolerancia', '#', 10),
(33, 2, 'Rangos', '#', 11),
(34, 2, 'Sub Clientes', '#', 5),
(35, 11, 'Ingresar instrumento', 'ing-instrumentodos.php', 7),
(36, 11, 'Actualizar / Eliminar', 'act-instrumentodos.php', 8),
(37, 11, 'Lineas', '#', 3),
(38, 11, 'Categorias', '#', 4),
(39, 11, 'Sub-categorias', '#', 5),
(40, 11, 'Opciones', '#', 6),
(41, 10, 'Certificado metrologico', '#', 2),
(42, 10, 'Certificado de dureza', '#', 3),
(43, 2, 'Tipo Dureza', '#', 12),
(44, 12, 'Listado General', '#', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Notificaciones`
--

CREATE TABLE IF NOT EXISTS `Notificaciones` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Texto` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Obras`
--

CREATE TABLE IF NOT EXISTS `Obras` (
  `Id` int(5) unsigned zerofill NOT NULL auto_increment,
  `Idcliente` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Fechainicio` date NOT NULL,
  `Fechafin` date NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Ubicacion` varchar(255) NOT NULL,
  `Valor` double NOT NULL,
  `Utilidad` double NOT NULL,
  `Estado` int(11) NOT NULL,
  `Fechareal` date NOT NULL,
  `Usuariofin` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Obrasgastos`
--

CREATE TABLE IF NOT EXISTS `Obrasgastos` (
  `Id` int(11) NOT NULL auto_increment,
  `Idobra` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Descripcion` longtext NOT NULL,
  `Valor` double NOT NULL,
  `Tipo` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Fechacrea` datetime NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Obrasprov`
--

CREATE TABLE IF NOT EXISTS `Obrasprov` (
  `Id` int(11) NOT NULL auto_increment,
  `Idobra` int(11) NOT NULL,
  `Proveedor` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OpcMediciones`
--

CREATE TABLE IF NOT EXISTS `OpcMediciones` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Codigo` varchar(255) NOT NULL,
  `Inicial` varchar(255) NOT NULL,
  `Linea` int(11) NOT NULL,
  `Categoria` int(11) NOT NULL,
  `SubCategoria` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `OpcMediciones`
--

INSERT INTO `OpcMediciones` (`Id`, `Nombre`, `Codigo`, `Inicial`, `Linea`, `Categoria`, `SubCategoria`, `Muestra`) VALUES
(1, 'TRANSPORTADOR SIMPLE', '', 'BP', 1, 1, 1, 0),
(2, 'CINTAS O REGLAS GRADUADAS', '', 'FL', 3, 6, 5, 0),
(3, 'TODO CALIBRADOR CON ESCALA VERNIER', '', 'FL', 2, 4, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ordenes`
--

CREATE TABLE IF NOT EXISTS `Ordenes` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Idcotiz` int(6) unsigned zerofill NOT NULL,
  `Fechaord` varchar(255) NOT NULL,
  `Fechaentrega` varchar(255) NOT NULL,
  `Valororg` int(11) NOT NULL,
  `Valor` int(11) NOT NULL,
  `Ordencte` varchar(50) NOT NULL,
  `Factura` int(6) unsigned zerofill NOT NULL,
  `Fechafact` date NOT NULL,
  `Fechafin` date NOT NULL,
  `Aprobo` varchar(255) NOT NULL,
  `Fechacrea` datetime NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Ordenes`
--

INSERT INTO `Ordenes` (`Id`, `Idcotiz`, `Fechaord`, `Fechaentrega`, `Valororg`, `Valor`, `Ordencte`, `Factura`, `Fechafact`, `Fechafin`, `Aprobo`, `Fechacrea`, `Usuario`) VALUES
(000001, 000001, '2016-04-21', '2016-04-26', 70000, 70000, '125456', 000001, '2016-04-01', '2016-04-30', '71216799', '2016-04-21 10:36:04', '71216799');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ordenesitem`
--

CREATE TABLE IF NOT EXISTS `Ordenesitem` (
  `Id` int(11) NOT NULL auto_increment,
  `Idcotiz` int(6) unsigned zerofill NOT NULL,
  `Idorden` int(6) unsigned zerofill NOT NULL,
  `Operacion` varchar(255) NOT NULL,
  `Cant` int(11) NOT NULL,
  `Opc` varchar(255) NOT NULL,
  `Unidad` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `Ordenesitem`
--

INSERT INTO `Ordenesitem` (`Id`, `Idcotiz`, `Idorden`, `Operacion`, `Cant`, `Opc`, `Unidad`, `Total`) VALUES
(11, 000001, 000001, 'CALIBRACIÓN INSTRUMENTOS', 1, 'SIC', 3500, 3500),
(10, 000001, 000001, 'ENSAYOS', 0, 'UDEA', 0, 0),
(9, 000001, 000001, 'TRANSPORTE', 1, 'transporte', 14000, 14000),
(8, 000001, 000001, 'INGENIERÍA DE PLANOS', 1, 'Geometria', 0, 0),
(7, 000001, 000001, 'METROLOGIA BÁSICA', 1, 'Medición', 49000, 49000),
(12, 000001, 000001, 'INFORMES GENERADOS', 1, 'Icontec', 3500, 3500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Permisos`
--

CREATE TABLE IF NOT EXISTS `Permisos` (
  `Id` int(11) NOT NULL auto_increment,
  `Idtipo` int(11) NOT NULL,
  `Men` int(11) NOT NULL,
  `Submenu` int(11) NOT NULL,
  `Opciones` int(11) NOT NULL,
  `Mos` int(11) NOT NULL,
  `Agr` int(11) NOT NULL,
  `Act` int(11) NOT NULL,
  `Del` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3492 ;

--
-- Volcado de datos para la tabla `Permisos`
--

INSERT INTO `Permisos` (`Id`, `Idtipo`, `Men`, `Submenu`, `Opciones`, `Mos`, `Agr`, `Act`, `Del`) VALUES
(3377, 1, 12, 0, 0, 1, 0, 0, 0),
(3376, 1, 10, 42, 67, 1, 1, 1, 1),
(3375, 1, 10, 42, 66, 1, 1, 1, 1),
(3374, 1, 10, 42, 0, 1, 0, 0, 0),
(3373, 1, 10, 41, 65, 1, 1, 1, 1),
(3372, 1, 10, 41, 64, 1, 1, 1, 1),
(3371, 1, 10, 41, 0, 1, 0, 0, 0),
(3370, 1, 10, 30, 47, 1, 1, 1, 1),
(3369, 1, 10, 30, 46, 1, 1, 1, 1),
(3368, 1, 10, 30, 0, 1, 0, 0, 0),
(3367, 1, 10, 0, 0, 1, 0, 0, 0),
(3366, 1, 11, 36, 0, 1, 1, 1, 1),
(3365, 1, 11, 35, 0, 1, 1, 1, 1),
(3364, 1, 11, 40, 63, 1, 1, 1, 1),
(3363, 1, 11, 40, 62, 1, 1, 1, 1),
(3362, 1, 11, 40, 0, 1, 0, 0, 0),
(3361, 1, 11, 39, 61, 1, 1, 1, 1),
(3360, 1, 11, 39, 60, 1, 1, 1, 1),
(3359, 1, 11, 39, 0, 1, 0, 0, 0),
(3358, 1, 11, 38, 59, 1, 1, 1, 1),
(3478, 2, 10, 0, 0, 1, 0, 0, 0),
(3477, 2, 11, 36, 0, 1, 1, 1, 1),
(3476, 2, 11, 35, 0, 1, 1, 1, 1),
(3475, 2, 11, 40, 63, 1, 1, 1, 1),
(3474, 2, 11, 40, 62, 1, 1, 1, 1),
(3473, 2, 11, 40, 0, 1, 0, 0, 0),
(3472, 2, 11, 39, 61, 1, 1, 1, 1),
(3471, 2, 11, 39, 60, 1, 1, 1, 1),
(3470, 2, 11, 39, 0, 1, 0, 0, 0),
(3469, 2, 11, 38, 59, 1, 1, 1, 1),
(3468, 2, 11, 38, 58, 1, 1, 1, 1),
(3467, 2, 11, 38, 0, 1, 0, 0, 0),
(3466, 2, 11, 37, 57, 1, 1, 1, 1),
(3465, 2, 11, 37, 56, 1, 1, 1, 1),
(3464, 2, 11, 37, 0, 1, 0, 0, 0),
(3463, 2, 11, 0, 0, 1, 0, 0, 0),
(3462, 2, 9, 29, 45, 1, 1, 1, 1),
(3461, 2, 9, 29, 44, 1, 1, 1, 1),
(3460, 2, 9, 29, 0, 1, 0, 0, 0),
(3459, 2, 9, 28, 43, 1, 1, 1, 1),
(3357, 1, 11, 38, 58, 1, 1, 1, 1),
(3356, 1, 11, 38, 0, 1, 0, 0, 0),
(3355, 1, 11, 37, 57, 1, 1, 1, 1),
(3354, 1, 11, 37, 56, 1, 1, 1, 1),
(3353, 1, 11, 37, 0, 1, 0, 0, 0),
(3352, 1, 11, 0, 0, 1, 0, 0, 0),
(3351, 1, 9, 29, 45, 1, 1, 1, 1),
(3350, 1, 9, 29, 44, 1, 1, 1, 1),
(3349, 1, 9, 29, 0, 1, 0, 0, 0),
(3348, 1, 9, 28, 43, 1, 1, 1, 1),
(3347, 1, 9, 28, 42, 1, 1, 1, 1),
(3346, 1, 9, 28, 0, 1, 0, 0, 0),
(3345, 1, 9, 0, 0, 1, 0, 0, 0),
(3344, 1, 8, 26, 39, 1, 1, 1, 1),
(3343, 1, 8, 26, 38, 1, 1, 1, 1),
(3342, 1, 8, 26, 0, 1, 0, 0, 0),
(3341, 1, 8, 0, 0, 1, 0, 0, 0),
(3340, 1, 3, 25, 37, 1, 1, 1, 1),
(3339, 1, 3, 25, 36, 1, 1, 1, 1),
(3338, 1, 3, 25, 0, 1, 0, 0, 0),
(3337, 1, 3, 24, 35, 1, 1, 1, 1),
(3336, 1, 3, 24, 34, 1, 1, 1, 1),
(3335, 1, 3, 24, 0, 1, 0, 0, 0),
(3334, 1, 3, 23, 33, 1, 1, 1, 1),
(3333, 1, 3, 23, 32, 1, 1, 1, 1),
(3332, 1, 3, 23, 0, 1, 0, 0, 0),
(3331, 1, 3, 22, 31, 1, 1, 1, 1),
(3330, 1, 3, 22, 30, 1, 1, 1, 1),
(3329, 1, 3, 22, 0, 1, 0, 0, 0),
(3328, 1, 3, 0, 0, 1, 0, 0, 0),
(3327, 1, 6, 20, 27, 1, 1, 1, 1),
(3326, 1, 6, 20, 26, 1, 1, 1, 1),
(3325, 1, 6, 20, 0, 1, 0, 0, 0),
(3324, 1, 6, 21, 29, 1, 1, 1, 1),
(3323, 1, 6, 21, 28, 1, 1, 1, 1),
(3322, 1, 6, 21, 0, 1, 0, 0, 0),
(3321, 1, 6, 19, 25, 1, 1, 1, 1),
(3320, 1, 6, 19, 24, 1, 1, 1, 1),
(3319, 1, 6, 19, 0, 1, 0, 0, 0),
(3318, 1, 6, 18, 23, 1, 1, 1, 1),
(3317, 1, 6, 18, 22, 1, 1, 1, 1),
(3316, 1, 6, 18, 0, 1, 0, 0, 0),
(3315, 1, 6, 17, 17, 1, 1, 1, 1),
(3314, 1, 6, 17, 16, 1, 1, 1, 1),
(3313, 1, 6, 17, 0, 1, 0, 0, 0),
(3312, 1, 6, 9, 19, 1, 1, 1, 1),
(3311, 1, 6, 9, 18, 1, 1, 1, 1),
(3310, 1, 6, 9, 0, 1, 0, 0, 0),
(1065, 11, 1, 0, 0, 1, 1, 1, 1),
(1066, 11, 2, 0, 0, 0, 0, 0, 0),
(1067, 11, 2, 6, 0, 0, 0, 0, 0),
(1068, 11, 2, 5, 0, 0, 0, 0, 0),
(1069, 11, 2, 5, 9, 0, 0, 0, 0),
(1070, 11, 2, 5, 10, 0, 0, 0, 0),
(1071, 11, 2, 5, 11, 0, 0, 0, 0),
(1072, 11, 2, 1, 0, 0, 0, 0, 0),
(1073, 11, 2, 1, 1, 0, 0, 0, 0),
(1074, 11, 2, 1, 2, 0, 0, 0, 0),
(1075, 11, 2, 2, 0, 0, 0, 0, 0),
(1076, 11, 2, 2, 3, 0, 0, 0, 0),
(1077, 11, 2, 2, 4, 0, 0, 0, 0),
(1078, 11, 2, 16, 0, 0, 0, 0, 0),
(1079, 11, 2, 16, 20, 0, 0, 0, 0),
(1080, 11, 2, 16, 21, 0, 0, 0, 0),
(1081, 11, 2, 3, 0, 0, 0, 0, 0),
(1082, 11, 2, 3, 5, 0, 0, 0, 0),
(1083, 11, 2, 3, 6, 0, 0, 0, 0),
(1084, 11, 2, 7, 0, 0, 0, 0, 0),
(1085, 11, 2, 7, 12, 0, 0, 0, 0),
(1086, 11, 2, 7, 13, 0, 0, 0, 0),
(1087, 11, 6, 0, 0, 1, 0, 0, 0),
(1088, 11, 6, 8, 0, 1, 0, 0, 0),
(1089, 11, 6, 8, 14, 1, 1, 1, 1),
(1090, 11, 6, 9, 0, 0, 0, 0, 0),
(1091, 11, 6, 9, 18, 0, 0, 0, 0),
(1092, 11, 6, 9, 19, 0, 0, 0, 0),
(1093, 11, 6, 17, 0, 0, 0, 0, 0),
(1094, 11, 6, 17, 16, 0, 0, 0, 0),
(1095, 11, 6, 17, 17, 0, 0, 0, 0),
(1096, 11, 6, 18, 0, 0, 0, 0, 0),
(1097, 11, 6, 18, 22, 0, 0, 0, 0),
(1098, 11, 6, 18, 23, 0, 0, 0, 0),
(1099, 11, 6, 19, 0, 0, 0, 0, 0),
(1100, 11, 6, 19, 24, 0, 0, 0, 0),
(1101, 11, 6, 19, 25, 0, 0, 0, 0),
(1102, 11, 6, 21, 0, 0, 0, 0, 0),
(1103, 11, 6, 21, 28, 0, 0, 0, 0),
(1104, 11, 6, 21, 29, 0, 0, 0, 0),
(1105, 11, 6, 20, 0, 0, 0, 0, 0),
(1106, 11, 6, 20, 26, 0, 0, 0, 0),
(1107, 11, 6, 20, 27, 0, 0, 0, 0),
(1108, 11, 3, 0, 0, 0, 0, 0, 0),
(1109, 11, 3, 22, 0, 0, 0, 0, 0),
(1110, 11, 3, 22, 30, 0, 0, 0, 0),
(1111, 11, 3, 22, 31, 0, 0, 0, 0),
(1112, 11, 3, 23, 0, 0, 0, 0, 0),
(1113, 11, 3, 23, 32, 0, 0, 0, 0),
(1114, 11, 3, 23, 33, 0, 0, 0, 0),
(1115, 11, 3, 24, 0, 0, 0, 0, 0),
(1116, 11, 3, 24, 34, 0, 0, 0, 0),
(1117, 11, 3, 24, 35, 0, 0, 0, 0),
(1118, 11, 3, 25, 0, 0, 0, 0, 0),
(1119, 11, 3, 25, 36, 0, 0, 0, 0),
(1120, 11, 3, 25, 37, 0, 0, 0, 0),
(1121, 11, 8, 0, 0, 0, 0, 0, 0),
(1122, 11, 8, 26, 0, 0, 0, 0, 0),
(1123, 11, 8, 26, 38, 0, 0, 0, 0),
(1124, 11, 8, 26, 39, 0, 0, 0, 0),
(1125, 11, 9, 0, 0, 0, 0, 0, 0),
(1126, 11, 9, 28, 0, 0, 0, 0, 0),
(1127, 11, 9, 28, 42, 0, 0, 0, 0),
(1128, 11, 9, 28, 43, 0, 0, 0, 0),
(1129, 11, 9, 29, 0, 0, 0, 0, 0),
(1130, 11, 9, 29, 44, 0, 0, 0, 0),
(1131, 11, 9, 29, 45, 0, 0, 0, 0),
(1132, 11, 10, 0, 0, 0, 0, 0, 0),
(3309, 1, 6, 8, 14, 1, 1, 1, 1),
(3308, 1, 6, 8, 0, 1, 0, 0, 0),
(3307, 1, 6, 0, 0, 1, 0, 0, 0),
(3306, 1, 2, 43, 69, 1, 1, 1, 1),
(3305, 1, 2, 43, 68, 1, 1, 1, 1),
(3304, 1, 2, 43, 0, 1, 0, 0, 0),
(3303, 1, 2, 33, 53, 1, 1, 1, 1),
(3302, 1, 2, 33, 52, 1, 1, 1, 1),
(3301, 1, 2, 33, 0, 1, 0, 0, 0),
(3300, 1, 2, 32, 51, 1, 1, 1, 1),
(3299, 1, 2, 32, 50, 1, 1, 1, 1),
(3298, 1, 2, 32, 0, 1, 0, 0, 0),
(3458, 2, 9, 28, 42, 1, 1, 1, 1),
(3457, 2, 9, 28, 0, 1, 0, 0, 0),
(3456, 2, 9, 0, 0, 1, 0, 0, 0),
(3455, 2, 8, 26, 39, 1, 1, 1, 1),
(3454, 2, 8, 26, 38, 1, 1, 1, 1),
(3453, 2, 8, 26, 0, 1, 0, 0, 0),
(3452, 2, 8, 0, 0, 1, 0, 0, 0),
(3451, 2, 3, 25, 37, 1, 1, 1, 1),
(3450, 2, 3, 25, 36, 1, 1, 1, 1),
(3449, 2, 3, 25, 0, 1, 0, 0, 0),
(3448, 2, 3, 24, 35, 1, 1, 1, 1),
(3447, 2, 3, 24, 34, 1, 1, 1, 1),
(3446, 2, 3, 24, 0, 1, 0, 0, 0),
(3445, 2, 3, 23, 33, 1, 1, 1, 1),
(3444, 2, 3, 23, 32, 1, 1, 1, 1),
(3443, 2, 3, 23, 0, 1, 0, 0, 0),
(3442, 2, 3, 22, 31, 1, 1, 1, 1),
(3441, 2, 3, 22, 30, 1, 1, 1, 1),
(3440, 2, 3, 22, 0, 1, 0, 0, 0),
(3439, 2, 3, 0, 0, 1, 0, 0, 0),
(3438, 2, 6, 20, 27, 1, 1, 1, 1),
(3437, 2, 6, 20, 26, 1, 1, 1, 1),
(3436, 2, 6, 20, 0, 1, 0, 0, 0),
(3435, 2, 6, 21, 29, 1, 1, 1, 1),
(3434, 2, 6, 21, 28, 1, 1, 1, 1),
(3433, 2, 6, 21, 0, 1, 0, 0, 0),
(3432, 2, 6, 19, 25, 1, 1, 1, 1),
(3431, 2, 6, 19, 24, 1, 1, 1, 1),
(3430, 2, 6, 19, 0, 1, 0, 0, 0),
(3429, 2, 6, 18, 23, 1, 1, 1, 1),
(3428, 2, 6, 18, 22, 1, 1, 1, 1),
(3427, 2, 6, 18, 0, 1, 0, 0, 0),
(3426, 2, 6, 17, 17, 1, 1, 1, 1),
(3425, 2, 6, 17, 16, 1, 1, 1, 1),
(3424, 2, 6, 17, 0, 1, 0, 0, 0),
(3423, 2, 6, 9, 19, 1, 1, 1, 1),
(3422, 2, 6, 9, 18, 1, 1, 1, 1),
(3421, 2, 6, 9, 0, 1, 0, 0, 0),
(3420, 2, 6, 8, 14, 1, 1, 1, 1),
(3419, 2, 6, 8, 0, 1, 0, 0, 0),
(3418, 2, 6, 0, 0, 1, 0, 0, 0),
(3417, 2, 2, 43, 69, 1, 1, 1, 1),
(3416, 2, 2, 43, 68, 1, 1, 1, 1),
(3415, 2, 2, 43, 0, 1, 0, 0, 0),
(3414, 2, 2, 33, 53, 1, 1, 1, 1),
(3413, 2, 2, 33, 52, 1, 1, 1, 1),
(3412, 2, 2, 33, 0, 1, 0, 0, 0),
(3411, 2, 2, 32, 51, 1, 1, 1, 1),
(3410, 2, 2, 32, 50, 1, 1, 1, 1),
(3409, 2, 2, 32, 0, 1, 0, 0, 0),
(3408, 2, 2, 31, 49, 1, 1, 1, 1),
(3407, 2, 2, 31, 48, 1, 1, 1, 1),
(3406, 2, 2, 31, 0, 1, 0, 0, 0),
(3405, 2, 2, 7, 13, 1, 1, 1, 1),
(3404, 2, 2, 7, 12, 1, 1, 1, 1),
(3403, 2, 2, 7, 0, 1, 0, 0, 0),
(3402, 2, 2, 3, 6, 1, 1, 1, 1),
(3401, 2, 2, 3, 5, 1, 1, 1, 1),
(3400, 2, 2, 3, 0, 1, 0, 0, 0),
(3399, 2, 2, 16, 21, 1, 1, 1, 1),
(3297, 1, 2, 31, 49, 1, 1, 1, 1),
(3296, 1, 2, 31, 48, 1, 1, 1, 1),
(3295, 1, 2, 31, 0, 1, 0, 0, 0),
(3294, 1, 2, 7, 13, 1, 1, 1, 1),
(3293, 1, 2, 7, 12, 1, 1, 1, 1),
(3292, 1, 2, 7, 0, 1, 0, 0, 0),
(3291, 1, 2, 3, 6, 1, 1, 1, 1),
(3290, 1, 2, 3, 5, 1, 1, 1, 1),
(3289, 1, 2, 3, 0, 1, 0, 0, 0),
(3288, 1, 2, 16, 21, 1, 1, 1, 1),
(3287, 1, 2, 16, 20, 1, 1, 1, 1),
(3286, 1, 2, 16, 0, 1, 0, 0, 0),
(3285, 1, 2, 34, 55, 1, 1, 1, 1),
(3284, 1, 2, 34, 54, 1, 1, 1, 1),
(3283, 1, 2, 34, 0, 1, 0, 0, 0),
(3282, 1, 2, 2, 4, 1, 1, 1, 1),
(3281, 1, 2, 2, 3, 1, 1, 1, 1),
(3280, 1, 2, 2, 0, 1, 0, 0, 0),
(3398, 2, 2, 16, 20, 1, 1, 1, 1),
(3397, 2, 2, 16, 0, 1, 0, 0, 0),
(3396, 2, 2, 34, 55, 1, 1, 1, 1),
(3395, 2, 2, 34, 54, 1, 1, 1, 1),
(3394, 2, 2, 34, 0, 1, 0, 0, 0),
(3393, 2, 2, 2, 4, 1, 1, 1, 1),
(3392, 2, 2, 2, 3, 1, 1, 1, 1),
(3391, 2, 2, 2, 0, 1, 0, 0, 0),
(3390, 2, 2, 1, 2, 1, 1, 1, 1),
(3389, 2, 2, 1, 1, 1, 1, 1, 1),
(3388, 2, 2, 1, 0, 1, 0, 0, 0),
(3387, 2, 2, 5, 11, 1, 1, 1, 1),
(3386, 2, 2, 5, 10, 1, 1, 1, 1),
(3385, 2, 2, 5, 9, 1, 1, 1, 1),
(3384, 2, 2, 5, 0, 1, 0, 0, 0),
(3383, 2, 2, 6, 0, 1, 1, 1, 1),
(3382, 2, 2, 0, 0, 1, 0, 0, 0),
(3381, 2, 1, 0, 0, 1, 1, 1, 1),
(3279, 1, 2, 1, 2, 1, 1, 1, 1),
(3278, 1, 2, 1, 1, 1, 1, 1, 1),
(3277, 1, 2, 1, 0, 1, 0, 0, 0),
(3276, 1, 2, 5, 11, 1, 1, 1, 1),
(3275, 1, 2, 5, 10, 1, 1, 1, 1),
(3274, 1, 2, 5, 9, 1, 1, 1, 1),
(3273, 1, 2, 5, 0, 1, 0, 0, 0),
(3272, 1, 2, 6, 0, 1, 1, 1, 1),
(3271, 1, 2, 0, 0, 1, 0, 0, 0),
(3270, 1, 1, 0, 0, 1, 1, 1, 1),
(3378, 1, 12, 44, 0, 1, 0, 0, 0),
(3379, 1, 12, 44, 70, 1, 1, 1, 1),
(3380, 1, 12, 44, 71, 1, 1, 1, 1),
(3479, 2, 10, 30, 0, 1, 0, 0, 0),
(3480, 2, 10, 30, 46, 1, 1, 1, 1),
(3481, 2, 10, 30, 47, 1, 1, 1, 1),
(3482, 2, 10, 41, 0, 1, 0, 0, 0),
(3483, 2, 10, 41, 64, 1, 1, 1, 1),
(3484, 2, 10, 41, 65, 1, 1, 1, 1),
(3485, 2, 10, 42, 0, 1, 0, 0, 0),
(3486, 2, 10, 42, 66, 1, 1, 1, 1),
(3487, 2, 10, 42, 67, 1, 1, 1, 1),
(3488, 2, 12, 0, 0, 1, 0, 0, 0),
(3489, 2, 12, 44, 0, 1, 0, 0, 0),
(3490, 2, 12, 44, 70, 1, 1, 1, 1),
(3491, 2, 12, 44, 71, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proveedores`
--

CREATE TABLE IF NOT EXISTS `Proveedores` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Razon` varchar(255) NOT NULL,
  `Cedula` varchar(255) NOT NULL,
  `Cod` int(11) NOT NULL,
  `Ciudad` varchar(255) NOT NULL,
  `Dir` varchar(255) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Contacto` varchar(255) NOT NULL,
  `Celcontacto` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Retencion` double NOT NULL,
  `Contrasena` varchar(255) NOT NULL,
  `Rut` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `Proveedores`
--

INSERT INTO `Proveedores` (`Id`, `Nombre`, `Razon`, `Cedula`, `Cod`, `Ciudad`, `Dir`, `Telefono`, `Celular`, `Contacto`, `Celcontacto`, `Email`, `Retencion`, `Contrasena`, `Rut`, `Muestra`) VALUES
(1, 'CONACEROS', '', '43504036', 0, 'MEDELLIN', 'CL 10 A', 4600400, 2147483647, 'NATALIA TABORDA', 2147483647, 'info@juanalejandro.com', 2, '%eg]hT*6M(&.', '', 1),
(2, 'WEB EVOLUTION', '', '71216799', 0, 'MEDELLIN', 'CR 43 # 10 16', 2147483647, 2147483647, 'RAUL YEPES', 2147483647, 'info@juanalejandro.com', 2, '%eg]hT*6M(&.', '', 0),
(3, 'CHONETO', 'ZAPATOS', '11111111', 2, 'MIAMI', '7569 NW 70 TH ST', 2147483647, 2147483647, 'JUAN CARLOS', 2147483647, 'info@grupoip.com.co', 34, '4g7wx0lwzn', '3.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Recepcion`
--

CREATE TABLE IF NOT EXISTS `Recepcion` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Idservicio` int(6) unsigned zerofill NOT NULL,
  `Fecha` date NOT NULL,
  `Cotizacion` varchar(50) NOT NULL,
  `Cliente` varchar(255) NOT NULL,
  `Nit` varchar(255) NOT NULL,
  `Foto` varchar(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL,
  `Tipoinst` varchar(255) NOT NULL,
  `Identificacion` varchar(255) NOT NULL,
  `Soporte` varchar(255) NOT NULL,
  `Nrosopo` varchar(255) NOT NULL,
  `Unidades` varchar(255) NOT NULL,
  `Comentarios` longtext NOT NULL,
  `Fechahora` datetime NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Salida` int(11) NOT NULL,
  `Usuariosaca` varchar(255) NOT NULL,
  `Fechasale` date NOT NULL,
  `Certificado` varchar(255) NOT NULL,
  `Observaciones` longtext NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `Recepcion`
--

INSERT INTO `Recepcion` (`Id`, `Idservicio`, `Fecha`, `Cotizacion`, `Cliente`, `Nit`, `Foto`, `Descripcion`, `Tipoinst`, `Identificacion`, `Soporte`, `Nrosopo`, `Unidades`, `Comentarios`, `Fechahora`, `Usuario`, `Salida`, `Usuariosaca`, `Fechasale`, `Certificado`, `Observaciones`) VALUES
(000001, 000004, '2016-04-01', '000001', 'SOMBREROS AGUADAS', '71216799', '000001.jpg', '', '', 'A4-001548', '2', '123', '5', '', '2016-04-21 10:42:52', '71216799', 0, '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Recepciondocument`
--

CREATE TABLE IF NOT EXISTS `Recepciondocument` (
  `Id` int(11) NOT NULL auto_increment,
  `Idrecep` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Valor` varchar(255) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Recepcionestados`
--

CREATE TABLE IF NOT EXISTS `Recepcionestados` (
  `Id` int(11) NOT NULL auto_increment,
  `Idrecep` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Valor` varchar(255) NOT NULL,
  `Cant` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Servicios`
--

CREATE TABLE IF NOT EXISTS `Servicios` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Activo` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Servicios`
--

INSERT INTO `Servicios` (`Id`, `Nombre`, `Activo`, `Muestra`) VALUES
(2, 'LABORATORIO Y CALIBRACIÓN', 0, 0),
(3, 'INGENIERÍA Y DISEÑO', 0, 0),
(4, 'ASEGURAMIENTO METROLOGÍA', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Soporte`
--

CREATE TABLE IF NOT EXISTS `Soporte` (
  `Id` int(11) NOT NULL auto_increment,
  `Idservicio` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `Soporte`
--

INSERT INTO `Soporte` (`Id`, `Idservicio`, `Nombre`, `Muestra`, `Activo`) VALUES
(2, 4, 'PRUEBA', 0, 0),
(3, 3, 'PRUEBA', 0, 0),
(4, 2, 'PRUEBA', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SubMediciones`
--

CREATE TABLE IF NOT EXISTS `SubMediciones` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Codigo` varchar(255) NOT NULL,
  `Linea` int(11) NOT NULL,
  `Categoria` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `SubMediciones`
--

INSERT INTO `SubMediciones` (`Id`, `Nombre`, `Codigo`, `Linea`, `Categoria`, `Muestra`) VALUES
(1, 'CON TRAZOS O DIVISIONES', '3', 1, '1', 0),
(2, 'CON DIMENSIÓN FIJA', '2', 0, '1', 0),
(3, 'LANZA', 'H', 2, '4', 0),
(4, 'CON TORNILLO MICROMETRO', '2', 1, '1', 0),
(5, 'MRL', '20', 2, '6', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoDureza`
--

CREATE TABLE IF NOT EXISTS `TipoDureza` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `TipoDureza`
--

INSERT INTO `TipoDureza` (`Id`, `Nombre`, `Muestra`) VALUES
(000001, 'SHORE A', 0),
(000002, 'SHORE B', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipoinstrumento`
--

CREATE TABLE IF NOT EXISTS `Tipoinstrumento` (
  `Id` int(11) NOT NULL auto_increment,
  `Idservicio` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  `Activo` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `Tipoinstrumento`
--

INSERT INTO `Tipoinstrumento` (`Id`, `Idservicio`, `Nombre`, `Muestra`, `Activo`) VALUES
(26, 2, 'DIGIMATIC', 0, 0),
(25, 2, 'ANALOGO', 0, 0),
(19, 2, 'CARATULA', 0, 0),
(16, 3, 'TIPOINSTRUMENTO', 1, 1),
(17, 2, 'TIPOINSTRUMENTO', 1, 1),
(22, 2, 'DIGITAL', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipoproced`
--

CREATE TABLE IF NOT EXISTS `Tipoproced` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `Tipoproced`
--

INSERT INTO `Tipoproced` (`Id`, `Nombre`, `Muestra`) VALUES
(1, 'MAQUINADO', 0),
(2, 'CAUCHOS / PLASTICO', 0),
(3, 'CALDERER / FUNDICION', 0),
(4, 'TESTO', 1),
(5, 'FINA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipoprocedopc`
--

CREATE TABLE IF NOT EXISTS `Tipoprocedopc` (
  `Id` int(11) NOT NULL auto_increment,
  `Idtipoproc` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `Tipoprocedopc`
--

INSERT INTO `Tipoprocedopc` (`Id`, `Idtipoproc`, `Nombre`, `Muestra`) VALUES
(1, 1, 'FINA', 0),
(2, 1, 'MEDIA', 0),
(3, 2, 'BURDA', 0),
(4, 3, 'MUY BURDA', 0),
(5, 3, 'COCO', 1),
(6, 5, 'COCO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipouser`
--

CREATE TABLE IF NOT EXISTS `Tipouser` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Activo` int(11) NOT NULL,
  `Pos` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `Tipouser`
--

INSERT INTO `Tipouser` (`Id`, `Nombre`, `Activo`, `Pos`) VALUES
(1, 'ADMINISTRADOR', 0, 1),
(2, 'GERENCIA', 0, 2),
(3, 'CONTABILIDAD', 1, 0),
(4, 'JUAN JOSES', 1, 0),
(5, 'OKSEE', 1, 0),
(6, 'JUAN JOSE', 1, 0),
(7, 'JUAN JOSE', 1, 0),
(8, 'JUAN JOSE', 1, 0),
(9, 'JUAN JOSE', 1, 0),
(10, 'JUAN ALEJANDRO', 1, 0),
(11, 'CONTABILIDAD', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tolerancia`
--

CREATE TABLE IF NOT EXISTS `Tolerancia` (
  `Id` int(11) NOT NULL auto_increment,
  `Idtipoproc` int(11) NOT NULL,
  `Idtipoprocopc` int(11) NOT NULL,
  `Desde` int(11) NOT NULL,
  `Hasta` int(11) NOT NULL,
  `Tolerancia` double NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `Tolerancia`
--

INSERT INTO `Tolerancia` (`Id`, `Idtipoproc`, `Idtipoprocopc`, `Desde`, `Hasta`, `Tolerancia`, `Muestra`) VALUES
(1, 1, 1, 0, 3, 0.05, 0),
(2, 1, 1, 3, 6, 0.05, 0),
(3, 1, 1, 6, 30, 0.1, 0),
(4, 1, 1, 30, 120, 0.15, 0),
(5, 1, 1, 120, 400, 0.2, 0),
(6, 1, 2, 0, 3, 0.1, 0),
(7, 1, 2, 3, 6, 0.2, 0),
(8, 1, 2, 6, 30, 0.2, 0),
(9, 1, 2, 120, 400, 0.5, 1),
(10, 1, 2, 30, 120, 0.3, 0),
(11, 1, 2, 120, 400, 0.5, 0),
(12, 1, 1, 600, 800, 0.22, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `Id` int(11) NOT NULL auto_increment,
  `Nombre` varchar(255) NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Clave` varchar(10) NOT NULL,
  `Tipo` int(11) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`Id`, `Nombre`, `Cedula`, `Email`, `Clave`, `Tipo`, `Muestra`) VALUES
(1, 'JUAN ALEJANDRO ZAPATA', 71216799, 'info@juanalejandro.com', '654321', 1, 0),
(2, 'JUAN AEJO', 7125666, 'info@juanalejandro.com', '123456', 2, 1),
(3, 'JUAN JOOSEW', 43504036, 'info@juanalejandro.comd', '123456', 2, 1),
(4, 'JUAN JOSE', 43504036, 'juan@webevolution.com.co', '112233', 2, 1),
(5, 'DIEGO CARDONA', 72216799, 'juan@webevolution.com.co', '123456', 2, 0),
(6, 'LENADRO', 71216798, 'leandro0329@gmail.com', '123456', 11, 1),
(7, 'LEANDRO', 1093214056, 'aseguramiento@asmecon.com', '123456', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Verificacionins`
--

CREATE TABLE IF NOT EXISTS `Verificacionins` (
  `Id` int(6) unsigned zerofill NOT NULL auto_increment,
  `Instrumento` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Proxima` date NOT NULL,
  `Frecuencia` varchar(255) NOT NULL,
  `Accion` varchar(255) NOT NULL,
  `Actividad` varchar(255) NOT NULL,
  `Observacion` text NOT NULL,
  `Responsable` varchar(255) NOT NULL,
  `Muestra` int(11) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
