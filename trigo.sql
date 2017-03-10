-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2017 at 10:20 PM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `subtotal` double NOT NULL,
  `tax` double NOT NULL,
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
(3, '2017-03-10 15:16:54', 1, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(4, '2017-03-10 15:19:35', 1, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(5, '2017-03-10 15:21:21', 1, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(6, '2017-03-10 15:22:53', 1, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(7, '2017-03-10 15:23:49', 1, 33, 5.9399999999999995, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(8, '2017-03-10 15:34:47', 1, 33, 5.9399999999999995, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(9, '2017-03-10 15:35:38', 1, 33, 5.9399999999999995, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(10, '2017-03-10 15:38:55', 1, 33, 5.9399999999999995, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(11, '2017-03-10 15:47:55', 1, 33, 5.9399999999999995, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(12, '2017-03-10 15:49:38', 1, 33, 5.9399999999999995, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(13, '2017-03-10 15:58:11', 1, 33, 5.9399999999999995, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(14, '2017-03-10 16:07:07', 1, 44, 7.92, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(15, '2017-03-10 16:08:08', 1, 44, 7.92, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(16, '2017-03-10 16:09:06', 1, 44, 7.92, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(17, '2017-03-10 16:11:29', 1, 44, 7.92, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(18, '2017-03-10 16:11:41', 1, 44, 7.92, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(19, '2017-03-10 16:13:59', 1, 44, 7.92, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(20, '2017-03-10 16:14:28', 1, 44, 7.92, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(21, '2017-03-10 16:28:41', 1, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(22, '2017-03-10 16:29:29', 1, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(23, '2017-03-10 16:30:40', 1, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 3, 1),
(24, '2017-03-10 16:33:59', 1, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 2, 1),
(25, '2017-03-10 16:57:39', 1, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 2, 1),
(26, '2017-03-10 20:44:13', NULL, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 2, 1),
(27, '2017-03-10 20:55:17', NULL, 44, 7.92, 1, '2017-03-10', 'completada', 'admin', 2, 1),
(28, '2017-03-10 21:05:05', NULL, 22, 3.96, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(29, '2017-03-10 21:06:44', NULL, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(30, '2017-03-10 16:11:48', NULL, 11, 1.98, 1, '2017-03-10', 'completada', 'admin', 1, 1),
(31, '2017-03-10 16:14:09', NULL, 44, 7.92, 1, '2017-03-10', 'completada', 'admin', 2, 1),
(32, '2017-03-10 16:15:56', 1, 22, 3.96, 1, '2017-03-10', 'completada', 'admin', 1, 1);

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
(1, 5, 1, 0),
(2, 6, 1, 0),
(3, 7, 1, 0),
(4, 15, 1, 4),
(5, 16, 1, 4),
(6, 17, 1, 4),
(7, 18, 1, 4),
(8, 19, 1, 4),
(9, 20, 1, 4),
(10, 21, 1, 1),
(11, 22, 1, 1),
(12, 23, 1, 1),
(13, 24, 1, 1),
(14, 25, 1, 1),
(15, 26, 1, 1),
(16, 27, 1, 4),
(17, 28, 1, 2),
(18, 29, 1, 1),
(19, 30, 1, 1),
(20, 31, 1, 4),
(21, 32, 1, 2);

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
  `mesurement_unit` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `barcode_symbol` varchar(1000) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `suplier_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `cantidad_en_existencia` int(11) NOT NULL,
  `cantidad_ultima_entrada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `image_url`, `id_category`, `last_entry`, `entry_date`, `price`, `reorder_level`, `barcode`, `charge_tax`, `mesurement_unit`, `barcode_symbol`, `suplier_id`, `status`, `cantidad_en_existencia`, `cantidad_ultima_entrada`) VALUES
(1, 'Cocacola Light', 'Nuevo Producto1', 'good-course7.jpg', 3, '0000-00-00 00:00:00', '2017-02-14 04:14:22', '11.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(2, 'Cocacola Light', 'Nuevo Producto1', 'empanda.jpg', 3, '0000-00-00 00:00:00', '2017-03-10 16:43:04', '11.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(3, 'Cocacola Light', 'Nuevo Producto1', '11d8f28844ba79c9240100806f82001e.jpg', 3, '0000-00-00 00:00:00', '2017-03-10 16:57:26', '11.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(4, 'Croquetas de pollo', '', '53b8edaac5908-300x300.jpg', 7, '0000-00-00 00:00:00', '2017-03-10 16:59:31', '20.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(5, 'Botella de agua', '', 'botella_de_agua.jpg', 3, '0000-00-00 00:00:00', '2017-03-10 17:00:07', '25.00', 0, NULL, 0, '1', NULL, 4, '', 0, 0),
(6, 'Coca Cola', '', 'coca_cola.jpg', 3, '0000-00-00 00:00:00', '2017-03-10 17:01:46', '40.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(7, 'Croasant', '', 'croasant.jpg', 7, '0000-00-00 00:00:00', '2017-03-10 17:02:19', '50.00', 0, NULL, 0, '1', NULL, 4, '', 0, 0),
(8, 'Cupcake', '', 'cupcake.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:02:52', '60.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(9, 'Galleta de Mantequilla', '', 'galelta_de_mantequilla.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:03:17', '25.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(10, 'Galleta de Avena', '', 'galleta_de_avena.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:03:42', '60.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(11, 'Galleta de LImon', '', 'galleta_de_limon.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:04:11', '25.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(12, 'Galleta de Nueces', '', 'galleta_de_nueces.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:04:41', '30.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(13, 'Galleta', '', 'galletas.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:05:16', '30.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(14, 'Jugo de Limon', '', 'jugo_de_limon.jpg', 3, '0000-00-00 00:00:00', '2017-03-10 17:05:51', '25.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(15, 'JUgo de Naranja', '', 'jugo_de_naranja.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:06:19', '50.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(16, 'Bizcocho de Chocolate', '', 'pastel_chocolate.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:10:57', '50.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(17, 'Pastel de Cafe', '', 'pastel_de_cafe.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:13:40', '50.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(18, 'Pie', '', 'pie.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:15:12', '60.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0),
(19, 'Bizcocho de Coco', '', 'pastel_de_coco.jpg', 2, '0000-00-00 00:00:00', '2017-03-10 17:16:02', '60.00', 0, NULL, 0, '1', NULL, 2, '', 0, 0);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
