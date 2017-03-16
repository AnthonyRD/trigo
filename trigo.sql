-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2017 at 10:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trigo`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address_line_1` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `address_line_2` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `number` int(5) DEFAULT NULL,
  `country` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `state` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `zip_code` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `address_line_1`, `address_line_2`, `number`, `country`, `state`, `zip_code`) VALUES
(3, 'c/hermanas mirabal', '', 35, 'Republica Dominicana', 'Monte Plata', 'asd'),
(4, 'Jacobo Majluta Av', 'Jacobo Majluta Av', 0, 'Dominican Republic', 'asd', 'sda'),
(5, '700 FUlton ST apt c2', '700 FUlton ST apt c2', 0, '', 'NEW YORK', '11735'),
(6, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Jacobo Majluta Av', 'Jacobo Majluta Av', 0, 'Dominican Republic', 'asd', 'ads'),
(25, 'Jacobo Majluta Av', 'Jacobo Majluta Av', 0, 'Dominican Republic', 'asd', 'asd'),
(26, 'Jacobo Majluta Av', 'Jacobo Majluta Av', 0, 'Dominican Republic', 'asd', 'asd'),
(27, 'Jacobo Majluta Av', 'Jacobo Majluta Av', 0, 'Dominican Republic', 'asd', 'asd'),
(35, '700 FUlton ST apt c21', '700 FUlton ST apt c2', 0, '', 'NEW YORK', '11735'),
(36, 'Jacobo Majluta Av', 'Jacobo Majluta Av', 0, 'Dominican Republic', '', ''),
(37, '700 FUlton ST apt c2', '700 FUlton ST apt c2', 0, '', 'NEW YORK', '11735');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `cellphone` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `last_name`, `telephone`, `cellphone`, `email`, `type`, `origin`, `birthdate`, `address_id`) VALUES
(1, 'Default', 'Default', 'Default', 'Default', 'Default', 'Default', 'Default', '2017-03-10', 1),
(2, 'Victor', 'Suarez', '', '', 'vsuarez3@gmail.com', '', 'Nacional', '0000-00-00', 36),
(3, 'luisa', 'NINOSKA', '6467014946', '6467014946', 'ninoskavictoria@hotmail.com', '', 'Nacional', '0000-00-00', 37);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`, `status`) VALUES
(1, 'Servicio al cliente', 'Servicio al cliente', 'I'),
(2, 'Gerencia', 'Gerencia', 'A'),
(3, 'Departament 2', 'Department 21', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `telephone` varchar(12) NOT NULL,
  `cellphone` varchar(12) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `department_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `status` varchar(1) NOT NULL,
  `position_id` int(11) NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `address_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `last_name`, `telephone`, `cellphone`, `email`, `department_id`, `start_date`, `status`, `position_id`, `image_url`, `address_id`, `location_id`) VALUES
(1, 'Victor', 'Suarez', '6467014946', '6467014946', 'vsuarez3@gmail.com', 1, '2017-03-08', 'A', 3, '', 27, 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `description`) VALUES
(1, 'Principal', 'Nueva');

-- --------------------------------------------------------

--
-- Table structure for table `measurement_unit`
--

CREATE TABLE `measurement_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `measurement_unit`
--

INSERT INTO `measurement_unit` (`id`, `name`, `description`) VALUES
(1, 'Unidad', 'Unidad'),
(2, 'Pedazo', 'Pedazo'),
(3, 'Libra', 'Libra');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `oder_type_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `customer_id`, `subtotal`, `tax`, `payment_type_id`, `payment_date`, `status`, `username`, `oder_type_id`, `location_id`) VALUES
(33, '2017-03-13 10:46:08', 1, '120.00', '21.60', 1, '2017-03-13', 'completada', 'admin', 1, 1),
(35, '2017-03-13 10:49:41', 1, '120.00', '21.60', 1, '2017-03-13', 'completada', 'admin', 2, 1),
(36, '2017-03-13 14:52:30', 1, '1485.00', '267.30', 1, '2017-03-13', 'completada', 'admin', 1, 1),
(37, '2017-03-15 02:40:52', 1, '125.00', '22.50', 1, '2017-03-15', 'completada', 'admin', 2, 1),
(38, '2017-03-15 02:41:07', 1, '125.00', '22.50', 1, '2017-03-15', 'completada', 'admin', 2, 1),
(39, '2017-03-16 10:44:57', 2, '325.00', '58.50', 3, '2017-03-16', 'completada', 'admin', 2, 1),
(42, '2017-03-16 10:48:30', 1, '75.00', '13.50', 1, '2017-03-16', 'completada', 'admin', 2, 1),
(44, '2017-03-16 10:50:19', 1, '50.00', '9.00', 1, '2017-03-16', 'completada', 'admin', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(22, 33, 8, 2),
(23, 35, 8, 2),
(24, 36, 8, 3),
(25, 36, 9, 5),
(26, 36, 10, 4),
(27, 36, 11, 2),
(28, 36, 16, 3),
(29, 36, 12, 2),
(30, 36, 18, 3),
(31, 36, 19, 3),
(32, 36, 17, 2),
(33, 36, 4, 2),
(34, 36, 7, 2),
(35, 36, 13, 1),
(36, 36, 15, 1),
(37, 37, 3, 1),
(38, 37, 6, 1),
(39, 37, 4, 1),
(40, 38, 3, 1),
(41, 38, 6, 1),
(42, 38, 4, 1),
(43, 39, 10, 3),
(44, 39, 16, 2),
(45, 39, 14, 1),
(46, 39, 2, 1),
(47, 42, 3, 1),
(48, 42, 8, 1),
(49, 44, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_type`
--

CREATE TABLE `order_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_type`
--

INSERT INTO `order_type` (`id`, `name`, `description`, `active`) VALUES
(1, 'Para llevar', 'Para llevar', 1),
(2, 'Comer Aqui', 'Comer Aqui', 1),
(3, 'Dlivery', 'Dlivery', 1),
(4, 'Drive Through', 'Drive Through', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE `payment_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_type`
--

INSERT INTO `payment_type` (`id`, `name`, `description`, `status`) VALUES
(1, 'Cash', 'En Efectivo', 'A'),
(2, 'Credit/Debit', 'Tarjetas', 'A'),
(3, 'A Crédito', 'Para pagar en fecha posterior a la orden.', 'A'),
(4, 'GIft Card', 'Tarjeta de relago o cupones', 'A'),
(5, 'Paypal', 'Paypal', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`, `description`, `status`) VALUES
(1, 'Servicio en Caja', 'Servicio en Caja', 'A'),
(2, 'Gerente', 'Gerente', 'A'),
(3, 'Puesto 22', 'Puesto 22', '0'),
(4, 'el nuevo', 'nuevo1', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `image_url` varchar(300) NOT NULL,
  `id_category` int(5) NOT NULL,
  `last_entry` datetime NOT NULL,
  `entry_date` datetime NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `reorder_level` int(5) NOT NULL,
  `barcode` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `charge_tax` tinyint(1) NOT NULL,
  `measurement_unit_id` int(11) NOT NULL,
  `barcode_symbol` varchar(1000) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `suplier_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `cantidad_en_existencia` int(11) NOT NULL,
  `cantidad_ultima_entrada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `image_url`, `id_category`, `last_entry`, `entry_date`, `price`, `reorder_level`, `barcode`, `charge_tax`, `measurement_unit_id`, `barcode_symbol`, `suplier_id`, `status`, `cantidad_en_existencia`, `cantidad_ultima_entrada`) VALUES
(2, 'Empanada de Pollo', 'Empanada de Pollo', 'empanda.jpg', 7, '2017-03-14 01:53:32', '2017-03-10 16:43:04', '50.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(3, 'Galleta Rellena de Chocolate', 'Galleta Rellena de Chocolate', '11d8f28844ba79c9240100806f82001e.jpg', 2, '2017-03-15 02:20:14', '2017-03-10 16:57:26', '25.00', 0, NULL, 0, 1, NULL, 3, '', 0, 0),
(4, 'Croquetas de Pollo', 'Croquetas de Pollo', '53b8edaac5908-300x300.jpg', 7, '2017-03-15 02:21:07', '2017-03-10 16:59:31', '45.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(5, 'Botella de Agua ', 'Botella de Agua ', 'botella_de_agua.jpg', 3, '2017-03-15 02:21:45', '2017-03-10 17:00:07', '30.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(6, 'Refresco en Lata', 'Refresco en Lata', 'coca_cola.jpg', 3, '2017-03-15 02:22:24', '2017-03-10 17:01:46', '55.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(7, 'Croasant', 'Croasant', 'croasant.jpg', 7, '2017-03-15 02:23:00', '2017-03-10 17:02:19', '35.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(8, 'Cupcake de Fresa', 'Cupcake de Fresa', 'cupcake.jpg', 2, '2017-03-15 02:23:55', '2017-03-10 17:02:52', '50.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(9, 'Galleta de Mantequilla y Canela', 'Galleta de Mantequilla y Canela', 'galelta_de_mantequilla.jpg', 2, '2017-03-15 02:24:31', '2017-03-10 17:03:17', '25.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(10, 'Galleta de Avena', 'Galleta de Avena', 'galleta_de_avena.jpg', 2, '2017-03-15 02:25:09', '2017-03-10 17:03:42', '35.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(11, 'Galletas de Limon', 'Galletas de Limon', 'galleta_de_limon.jpg', 2, '2017-03-15 02:25:39', '2017-03-10 17:04:11', '50.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(12, 'Galleta de Nueces y Chocolate', 'Galleta de Nueces y Chocolate', 'galleta_de_nueces.jpg', 2, '2017-03-15 02:27:34', '2017-03-10 17:04:41', '48.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(13, 'Galleta Azucarada', 'Galleta Azucarada', 'galletas.jpg', 2, '2017-03-15 02:28:31', '2017-03-10 17:05:16', '35.00', 0, NULL, 0, 1, NULL, 2, '', 0, 0),
(14, 'Jugo de Limon', 'Jugo de Limon', 'jugo_de_limon.jpg', 3, '2017-03-15 02:29:07', '2017-03-10 17:05:51', '30.00', 0, NULL, 0, 1, NULL, 3, '', 0, 0),
(15, 'Jugo de Naranja', 'Jugo de Naranja', 'jugo_de_naranja.jpg', 3, '2017-03-15 02:30:01', '2017-03-10 17:06:19', '35.00', 0, NULL, 0, 1, NULL, 3, '', 0, 0),
(16, 'Bizcocho de Chocolate y Nueces', 'Bizcocho de Chocolate y Nueces', 'pastel_chocolate.jpg', 2, '2017-03-15 02:31:30', '2017-03-10 17:10:57', '70.00', 0, NULL, 0, 2, NULL, 2, '', 0, 0),
(17, 'Pastel relleno', 'Empanada de Res', 'pastel_de_cafe.jpg', 2, '2017-03-15 02:32:06', '2017-03-10 17:13:40', '50.00', 0, NULL, 0, 2, NULL, 2, '', 0, 0),
(18, 'Pie de Calabaza', 'Pie de Calabaza', 'pie.jpg', 2, '2017-03-15 02:32:44', '2017-03-10 17:15:12', '65.00', 0, NULL, 0, 2, NULL, 2, '', 0, 0),
(19, 'Bizcocho de coco', 'Bizcocho de coco', 'pastel_de_coco.jpg', 2, '2017-03-15 02:33:52', '2017-03-10 17:16:02', '50.00', 0, NULL, 0, 2, NULL, 2, '', 0, 0),
(20, 'Sopa de Pollo', 'Sopa de Pollo', 'Crock-Pot-Chicken3.jpg', 4, '0000-00-00 00:00:00', '2017-03-16 10:03:32', '45.00', 0, NULL, 0, 1, NULL, 3, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `description` varchar(200) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `description`) VALUES
(2, 'Postres', 'Dulces\r\n'),
(3, 'Bebidas', 'Bebidas'),
(4, 'Sopas', 'Sopas'),
(5, 'Entradas', 'Entradas'),
(6, 'Almuerzo', 'Almuerzo'),
(7, 'Picadera', 'Picadera');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET latin1 NOT NULL,
  `RNC` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(250) CHARACTER SET latin1 NOT NULL,
  `contact_name` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Details` varchar(500) CHARACTER SET latin1 NOT NULL,
  `address_id` int(11) NOT NULL,
  `telephone` varchar(12) CHARACTER SET latin1 NOT NULL,
  `cellphone` varchar(12) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `RNC`, `email`, `contact_name`, `Details`, `address_id`, `telephone`, `cellphone`) VALUES
(2, 'Williams', '84358', 'anthonyparajuegos@gmail.com', 'williams', 'Supplidor de comida.', 3, '8098856917', '8498853554'),
(3, 'Victor Suarez', '', 'vsuarez3@gmail.com', 'Victor', 'Nuevo', 4, '6467014946', ''),
(4, 'luisa NINOSKA', '', 'ninoskavictoria@hotmail.com', 'luisa', 'nueva', 5, '6467014946', '6467014946'),
(5, 'luisa NINOSKA 12', '12', 'ninoskavictoria@hotmail.com', 'luisa', 'Test', 35, '6467014946', '6467014946');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL,
  `user_role_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `status`, `user_role_id`, `employee_id`, `location_id`) VALUES
(1, 'admin', 'admin', 'A', 5, 1, 0),
(3, 'vsuarez3', '123', 'A', 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`, `description`) VALUES
(3, 'Cajero', 'Manejo de caja'),
(4, 'Usuario', 'Usuario común'),
(5, 'Administrador', 'Aministrador del sistema'),
(6, 'Supervisor', 'Supervisor del sistema');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_order_detail`
-- (See below for the actual view)
--
CREATE TABLE `vw_order_detail` (
`orden` int(11)
,`fecha_orden` datetime
,`producto` varchar(100)
,`cantidad` int(11)
,`precio` decimal(10,2)
,`ITBIS_Producto` decimal(26,6)
,`usuario` varchar(100)
,`subtotal` decimal(10,2)
,`ITBIS_Orden` decimal(10,2)
,`status` varchar(20)
,`nombre_cliente` varchar(150)
,`apellido_cliente` varchar(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_order_list`
-- (See below for the actual view)
--
CREATE TABLE `vw_order_list` (
`orden` int(11)
,`fecha` datetime
,`subtotal` decimal(10,2)
,`tax` decimal(10,2)
,`tipo_pago` varchar(50)
,`status` varchar(20)
,`usuario` varchar(100)
,`tipo_orden` varchar(50)
,`tienda` varchar(200)
,`nombre_cliente` varchar(150)
,`apellido_cliente` varchar(200)
,`username` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_order_detail`
--
DROP TABLE IF EXISTS `vw_order_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_order_detail`  AS  select `o`.`id` AS `orden`,`o`.`date` AS `fecha_orden`,`p`.`name` AS `producto`,`od`.`quantity` AS `cantidad`,`p`.`price` AS `precio`,((`od`.`quantity` * `p`.`price`) * (18 / 100)) AS `ITBIS_Producto`,`o`.`username` AS `usuario`,`o`.`subtotal` AS `subtotal`,`o`.`tax` AS `ITBIS_Orden`,`o`.`status` AS `status`,`c`.`name` AS `nombre_cliente`,`c`.`last_name` AS `apellido_cliente` from (((`order_detail` `od` left join `orders` `o` on((`od`.`order_id` = `o`.`id`))) left join `product` `p` on((`od`.`product_id` = `p`.`id`))) left join `customer` `c` on((`o`.`customer_id` = `c`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_order_list`
--
DROP TABLE IF EXISTS `vw_order_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_order_list`  AS  select `o`.`id` AS `orden`,`o`.`date` AS `fecha`,`o`.`subtotal` AS `subtotal`,`o`.`tax` AS `tax`,`pt`.`name` AS `tipo_pago`,`o`.`status` AS `status`,`o`.`username` AS `usuario`,`ot`.`name` AS `tipo_orden`,`lo`.`name` AS `tienda`,`c`.`name` AS `nombre_cliente`,`c`.`last_name` AS `apellido_cliente`,`o`.`username` AS `username` from ((((`orders` `o` left join `customer` `c` on((`o`.`customer_id` = `c`.`id`))) left join `payment_type` `pt` on((`o`.`payment_type_id` = `pt`.`id`))) left join `order_type` `ot` on((`o`.`oder_type_id` = `ot`.`id`))) left join `location` `lo` on((`o`.`location_id` = `lo`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurement_unit`
--
ALTER TABLE `measurement_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`username`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `payment_type_id` (`payment_type_id`),
  ADD KEY `oder_type_id` (`oder_type_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_type`
--
ALTER TABLE `order_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_type`
--
ALTER TABLE `payment_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_measurement_unit` (`measurement_unit_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `measurement_unit`
--
ALTER TABLE `measurement_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `order_type`
--
ALTER TABLE `order_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment_type`
--
ALTER TABLE `payment_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_type` (`id`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`oder_type_id`) REFERENCES `order_type` (`id`),
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`location_id`) REFERENCES `location` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_measurement_unit` FOREIGN KEY (`measurement_unit_id`) REFERENCES `measurement_unit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
