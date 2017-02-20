-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-02-2017 a las 02:49:32
-- Versión del servidor: 5.5.53-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `trigo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_line_1` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `address_line_2` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `number` int(5) NOT NULL,
  `country` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `state` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `zip_code` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `address`
--

INSERT INTO `address` (`id`, `address_line_1`, `address_line_2`, `number`, `country`, `state`, `zip_code`) VALUES
(3, 'c/hermanas mirabal', '', 35, 'Republica Dominicana', 'Monte Plata', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `cellphone` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `adress_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `cellphone` varchar(12) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `department_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `position_id` int(11) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `adress_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `tax` double NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `order_detail_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `prdoduct_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `id_category` int(5) NOT NULL,
  `last_entry` datetime NOT NULL,
  `entry_date` datetime NOT NULL,
  `price` double NOT NULL,
  `reorder_level` int(5) NOT NULL,
  `barcode` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `charge_tax` tinyint(1) NOT NULL,
  `mesurement_unit` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `barcode_symbol` varchar(1000) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `suplier_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `image_url`, `id_category`, `last_entry`, `entry_date`, `price`, `reorder_level`, `barcode`, `charge_tax`, `mesurement_unit`, `barcode_symbol`, `suplier_id`, `status`) VALUES
(1, 'Cocacolas', 'asdasd', 'good-course7.jpg', 3, '0000-00-00 00:00:00', '2017-02-14 04:14:22', 11, 0, NULL, 0, '0', NULL, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `description`) VALUES
(2, 'Postre', 'Muy dulce\r\n'),
(3, 'Bebidas', 'Para beber');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `RNC` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(250) CHARACTER SET latin1 NOT NULL,
  `contact_name` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Details` varchar(500) CHARACTER SET latin1 NOT NULL,
  `address_id` int(11) NOT NULL,
  `telephone` varchar(12) CHARACTER SET latin1 NOT NULL,
  `cellphone` varchar(12) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `RNC`, `email`, `contact_name`, `Details`, `address_id`, `telephone`, `cellphone`) VALUES
(2, 'Williams', '84358', 'anthonyparajuegos@gmail.com', 'williams', 'Supplidor de comida.', 3, '8098856917', '8498853554');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `user_role`
--

INSERT INTO `user_role` (`id`, `name`, `description`) VALUES
(3, 'Cajero', 'Manejo de caja'),
(4, 'Usuario', 'Usuario común'),
(5, 'Adminitrador', 'Aministrador del sistema'),
(6, 'Supervisor', 'Supervisor del sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `status`, `user_role_id`, `employee_id`) VALUES
(1, 'admin', 'admin', 'Activo', 5, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
