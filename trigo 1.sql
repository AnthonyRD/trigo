-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2017 at 09:00 PM
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
(28, '700 FUlton ST apt c2', '700 FUlton ST apt c2', 15, 'Dominican Republic', 'NEW YORK', '11735'),
(29, '700 FUlton ST apt c2', '700 FUlton ST apt c2', 15, 'Dominican Republic', 'NEW YORK', '11735'),
(30, 'Jacobo Majluta Av', 'Jacobo Majluta Av', 15, 'Dominican Republic', 'NEW YORK', '11735'),
(31, 'Jacobo Majluta Av', 'Jacobo Majluta Av', 15, 'Dominican Republic', 'NEW YORK', '11735'),
(32, '700 FUlton ST apt c2', '700 FUlton ST apt c2', 0, '', 'NEW YORK', '11735');

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
(1, 'Servicio al cliente', 'Servicio al cliente', 'A'),
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
  `address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `last_name`, `telephone`, `cellphone`, `email`, `department_id`, `start_date`, `status`, `position_id`, `image_url`, `address_id`) VALUES
(1, 'Victor Manuel', 'Suarez', '80952481569', '6467014946', 'vsuarez3@gmail.com', 1, '2017-02-22', 'A', 1, '', 27),
(2, 'luisa', 'NINOSKA', '6467014946', '6467014946', 'ninoskavictoria@hotmail.com', 1, '2017-02-21', 'A', 1, '', 28),
(3, 'luisa 1', 'NINOSKA', '6467014946', '6467014946', 'ninoskavictoria@hotmail.com', 1, '2017-02-21', 'A', 1, '', 29),
(4, 'Victor Manuel', 'Suarez', '6467014946', '6467014946', 'vsuarez3@gmail.com', 1, '2017-02-21', 'A', 1, '', 30),
(5, 'Jose ', 'Madero', '6467014946', '6467014946', 'vsuarez3@gmail.com', 0, '2017-02-23', '0', 0, '', 31),
(6, 'luisa NINOSKA111', 'NINOSKA', '6467014946', '6467014946', 'ninoskavictoria@hotmail.com', 0, '2017-02-28', '0', 0, '', 32);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `tax` double NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `prdoduct_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `price` double NOT NULL,
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
(1, 'Cocacola', 'Nuevo Producto', 'good-course7.jpg', 3, '0000-00-00 00:00:00', '2017-02-14 04:14:22', 11, 0, NULL, 0, '0', NULL, 2, '', 0, 0);

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
(2, 'Postre', 'Dulces\r\n'),
(3, 'Bebidas', 'Bebidas'),
(4, 'Sopas', 'Sopas');

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
(4, 'luisa NINOSKA', '', 'ninoskavictoria@hotmail.com', 'luisa', 'nueva', 5, '6467014946', '6467014946');

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
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `status`, `user_role_id`, `employee_id`) VALUES
(1, 'admin', 'admin', 'A', 5, 1),
(3, 'vsuarez3', '123', 'A', 5, 1),
(4, 'vsuarez4', '123', 'A', 4, 1);

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
(5, 'Adminitrador', 'Aministrador del sistema'),
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `payment_type_id` (`payment_type_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_type` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
