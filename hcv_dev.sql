-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2021 at 06:15 PM
-- Server version: 5.6.33-log
-- PHP Version: 5.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `solimaq_dev`
--
CREATE DATABASE IF NOT EXISTS `hcv_upd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `hcv_upd`;

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE IF NOT EXISTS `access` (
  `id_group` int(11) NOT NULL,
  `id_module` int(11) NOT NULL,
  ` is_cat` tinyint(1) NOT NULL,
  `create_a` tinyint(1) NOT NULL,
  `read_a` tinyint(1) NOT NULL,
  `update_a` tinyint(1) NOT NULL,
  `delete_a` tinyint(1) NOT NULL,
  KEY `id_group` (`id_group`),
  KEY `id_module` (`id_module`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `access`
--

INSERT INTO `access` (`id_group`, `id_module`, ` is_cat`, `create_a`, `read_a`, `update_a`, `delete_a`) VALUES
(1, 1, 1, 0, 1, 0, 0),
(1, 6, 1, 1, 1, 1, 0),
(1, 47, 0, 1, 1, 1, 1),
(1, 125, 1, 1, 1, 1, 1),
(1, 108, 1, 1, 1, 1, 1),
(1, 127, 1, 1, 1, 1, 0),
(1, 129, 0, 1, 1, 1, 1),
(1, 128, 0, 0, 1, 0, 0),
(1, 130, 0, 1, 1, 1, 1),
(1, 131, 0, 1, 1, 1, 1),
(1, 136, 0, 1, 1, 0, 1),
(1, 137, 0, 1, 1, 1, 1),
(1, 138, 0, 1, 1, 1, 1),
(1, 139, 0, 1, 1, 1, 1),
(1, 140, 0, 1, 1, 1, 1),
(44, 141, 0, 1, 1, 1, 1),
(1, 141, 0, 1, 1, 1, 1),
(1, 143, 0, 1, 1, 1, 1),
(1, 144, 0, 1, 1, 1, 1),
(1, 151, 0, 1, 1, 1, 1),
(1, 152, 0, 1, 1, 1, 1),
(1, 153, 0, 1, 1, 1, 1),
(1, 154, 0, 1, 1, 1, 1),
(3, 47, 0, 1, 1, 1, 1),
(3, 1, 0, 1, 1, 1, 1),
(3, 108, 0, 1, 1, 1, 1),
(3, 127, 0, 1, 1, 1, 1),
(3, 130, 0, 1, 1, 1, 1),
(3, 137, 0, 1, 1, 1, 1),
(3, 143, 0, 1, 1, 1, 1),
(3, 153, 0, 1, 1, 1, 1),
(2, 128, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `id_bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `bitacora_descripcion` text,
  PRIMARY KEY (`id_bitacora`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `bitacora`
--

INSERT INTO `bitacora` (`id_bitacora`, `bitacora_descripcion`) VALUES
(1, '20210203230028'),
(2, 'Se ingreso el usuario Ulises Rodriquezen el dia y hora 2021-02-03 23:06:13'),
(3, 'Se ingreso el usuario Alexis Ricardoen el dia y hora 2021-02-04 15:01:16'),
(4, 'Se ingreso el usuario Eduardoen el dia y hora 2021-02-04 18:53:57'),
(5, 'Se ingreso el usuario Omar Cruz Pozosen el dia y hora 2021-02-08 16:37:16'),
(6, 'Se ingreso el usuario Omar Cruz Pozosen el dia y hora 2021-02-08 16:38:41'),
(7, 'Se ingreso el usuario Omar Cruz Pozosen el dia y hora 2021-02-08 16:39:06'),
(8, 'Se ingreso el usuario Omar Cruz Pozosen el dia y hora 2021-02-08 16:39:34'),
(9, 'Se ingreso el usuario Omar Cruz Pozosen el dia y hora 2021-02-08 16:44:00'),
(10, 'Se ingreso el usuario Omar Cruz Pozosen el dia y hora 2021-02-09 14:38:33'),
(11, 'Se ingreso el usuario Roque Ubaldoen el dia y hora 2021-02-17 20:50:23'),
(12, 'Se ingreso el usuario Black Sabbaten el dia y hora 2021-02-18 12:59:47'),
(13, 'Se ingreso el usuario Dumm-een el dia y hora 2021-03-02 14:56:14'),
(14, 'Se ingreso el usuario Samen el dia y hora 2021-03-03 14:43:13'),
(15, 'Se ingreso el usuario Sergio floresen el dia y hora 2021-04-16 12:46:36'),
(16, 'Se ingreso el usuario ffffen el dia y hora 2021-04-16 13:15:51'),
(17, 'Se ingreso el usuario rrrren el dia y hora 2021-04-16 13:47:43'),
(18, 'Se ingreso el usuario giovannien el dia y hora 2021-04-21 14:35:03'),
(19, 'Se ingreso el usuario giovannien el dia y hora 2021-04-21 14:56:02'),
(20, 'Se ingreso el usuario Luis en el dia y hora 2021-04-21 16:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE IF NOT EXISTS `business` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `business_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `business_name`, `address`) VALUES
(1, 'WebCorp', 'Col. Del Valle'),
(2, 'Solimaq', 'Xochimilco'),
(9, 'Yodono', 'Eje central Lázaro Cárdenas'),
(11, 'ICT', 'Tlalnepantla'),
(12, 'CCC', 'Circuito interior s/n'),
(13, 'BDB', 'Benito Juarez'),
(14, 'So company', 'Revolucion'),
(15, 'Evolet', 'AJusco s/n prolongación peri'),
(16, 'Grupo esencia', 'Parque México s/n'),
(17, 'Proyecto 21', 'Coyoacán 23 esquina del rio'),
(20, 'Webcorp', 'aniceto ortega 107'),
(21, 'Coca cola', 'Naucalpan de Juarez'),
(25, 'dfewfcew', 'ewfew');

-- --------------------------------------------------------

--
-- Table structure for table `cat_payments`
--

CREATE TABLE IF NOT EXISTS `cat_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `cat_payments`
--

INSERT INTO `cat_payments` (`id`, `name`, `description`) VALUES
(5, 'Anticipo', 'Pago minimo de 40% al firmar contrato.'),
(15, 'liquidacion', 'se realiza a la entrega de la maquina'),
(16, 'A envio', 'Maquinaria en camino % 20');

-- --------------------------------------------------------

--
-- Table structure for table `cat_products`
--

CREATE TABLE IF NOT EXISTS `cat_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `media_path` varchar(255) NOT NULL,
  `su_price` double NOT NULL,
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `cat_products`
--

INSERT INTO `cat_products` (`id`, `name`, `description`, `media_path`, `su_price`, `c_date`) VALUES
(7, 'prueba', 'el archivo esta vacio', '1613678260_ba7c245d01c36371844d.jpg', 123, '0000-00-00 00:00:00'),
(10, 'Maquina de recliclaje seria A-22', 'Especificaciones de Maquina', '1617146960_3be785abf0950c6fe49a.png', 1000000, '2021-03-30 06:29:20'),
(12, 'pokemon', 'peluche', '1614105581_e4dd540b2c47b9c709de.png', 4000, '2021-02-23 12:39:41'),
(13, 'sin foto', 'no hay foto', 'default.jpg', 1200, '2021-02-23 12:43:42'),
(14, 'react', 'un nuevo producto', '1614107256_748cc206b21da91c835f.png', 789, '2021-02-23 01:07:36'),
(15, 'pruaba', 'prueba', 'default.jpg', 789, '2021-02-23 01:45:17'),
(18, 'Pokemon', 'carta', '1614113270_9643ef4684c0fbe30875.png', 500, '2021-02-23 02:47:50'),
(19, 'chacis', 'moto', '1614111708_55acf614f5b492d207e2.jpg', 100, '2021-02-23 02:21:48'),
(20, 'carrro', 'Marca Mazda\r\nmodelo 2021', '1614113545_89a567fff72e03c075a8.jpg', 78, '0000-00-00 00:00:00'),
(22, 'Test', 'test', '1617069757_78276e98c37e2e167e65.webp', 50000, '2021-03-30 06:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `cat_sales_stages`
--

CREATE TABLE IF NOT EXISTS `cat_sales_stages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cat_sales_stages`
--

INSERT INTO `cat_sales_stages` (`id`, `name`, `description`, `position`) VALUES
(3, 'En fabricación', 'Primera etapa de proceso de venta, el producto se ordena con el proveedor y se comienza a fabricar.', 1),
(4, 'Por embarcar', 'Segunda etapa de proceso de venta, el producto esta en espera de ser enviado.', 2),
(5, 'En tránsito', 'Tercera etapa de proceso de venta, el producto se encuentra en camino hacia el comprador.', 3),
(6, 'En trámite aduanal', 'Cuarta etapa de proceso de venta, el producto se encuentra en proceso de aprobación para su entrada al país.', 4),
(7, 'En logistica terrestre', 'Qiunta etapa de proceso de venta, el producto ya se encuentra en tierra y en camino para ser enviado a la ubicación del cliente.', 5),
(8, 'Entregada', 'Sexta y ultima etapa de proceso de venta, el producto fue recibido por el cliente.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `clients_data`
--

CREATE TABLE IF NOT EXISTS `clients_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `rfc` varchar(20) DEFAULT NULL,
  `adress_country` varchar(255) DEFAULT NULL,
  `adress_city` varchar(255) DEFAULT NULL,
  `adress_county` varchar(255) DEFAULT NULL,
  `adress_street` varchar(255) DEFAULT NULL,
  `adress_postal_code` varchar(255) DEFAULT NULL,
  `adress_number` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user-client_idx` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `clients_data`
--

INSERT INTO `clients_data` (`id`, `name`, `rfc`, `adress_country`, `adress_city`, `adress_county`, `adress_street`, `adress_postal_code`, `adress_number`, `id_user`) VALUES
(2, 'Omar Cruz Pozos', 'RFCDEOMAR', 'MEXICO', 'CIUDAD DE MEXICO', 'ECATEPEC', 'ALCATRAZ', '55070', '146', 26),
(3, 'Ubaldo', 'RFCUBALDO', 'MEXICO', 'CIUDAD DE LOS QUIEN', 'ECATEPEC', 'GERANIOS', '55070', '146', 27);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE IF NOT EXISTS `contracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `rfc` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `wyswyg` text,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `id_user`, `name`, `rfc`, `description`, `wyswyg`) VALUES
(1, 16, 'Sergio Flores', 'FOGS', NULL, '<p>Buenos dias {name} con rfc {rfc}</p>\r\n'),
(2, 16, 'Ulises', 'UlisesA', NULL, '<p>Buenos noches {name} con rfc {rfc}</p>\r\n'),
(3, 16, 'Geovani', 'RFCGEO', NULL, '<p>Hola Se&ntilde;or {name} con el rfc {rfc}</p>\r\n'),
(4, 16, 'Maquina 1', '', NULL, '<p>hola {name} mi rfc es: {rfc}</p>\r\n'),
(5, 16, 'Maquinaria de prueba', '', NULL, '<p>Hola este es un contrato echo por el vendedor {name} en la fecha de {fecha} para el cliente {cliente} con un monto de {monto} total de venta</p>\r\n\r\n<p>{venta}</p>\r\n'),
(6, 16, 'Contrato final de puebla ', '', NULL, '<p>El dia de hoy</p>\r\n\r\n<p>{fecha} el vendedor</p>\r\n\r\n<p>{name}</p>\r\n\r\n<p>con el monto de</p>\r\n\r\n<p>{monto} para el cliente</p>\r\n\r\n<p>{cliente} genera este contrato</p>\r\n'),
(7, 16, '', '', NULL, '<p>este es el rfc del cliente&nbsp;{rfc} nombre del vendedor&nbsp;{name} nombre del cliente&nbsp;{cliente} el monto es de ${monto} de la fecha {fecha}</p>\r\n'),
(8, 16, 'Contrato con select', NULL, NULL, '<p>{cliente} esta encargado el dia de hoy</p>\r\n\r\n<p>{fecha} con su</p>\r\n\r\n<p>{rfc} tener un acuerdo con el vendedor</p>\r\n\r\n<p>{name}</p>\r\n'),
(9, 16, 'prueba', '', NULL, '<p>{name}</p>\r\n\r\n<p>{name}</p>\r\n\r\n<p>{name}</p>\r\n\r\n<p>{fecha}</p>\r\n\r\n<p>{cliente}</p>\r\n\r\n<p>{cliente}</p>\r\n\r\n<p>{monto}</p>\r\n\r\n<p>{monto}</p>\r\n'),
(10, 16, 'Contrato_rodrigo', '', NULL, '<p>Buenas tardes&nbsp; {name} y el rfc:&nbsp;{rfc}</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cotization`
--

CREATE TABLE IF NOT EXISTS `cotization` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_vendor` int(11) NOT NULL,
  `id_user_client` int(11) NOT NULL,
  `global_percent` double NOT NULL,
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ID` (`id`),
  KEY `id_user_vendor` (`id_user_vendor`),
  KEY `id_user_client` (`id_user_client`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `cotization`
--

INSERT INTO `cotization` (`id`, `id_user_vendor`, `id_user_client`, `global_percent`, `c_date`) VALUES
(11, 16, 26, 20, '2021-03-08 15:02:38'),
(12, 16, 26, 10, '2021-03-12 14:29:59'),
(14, 26, 27, 10, '2021-03-23 14:58:41'),
(15, 16, 26, 0, '2021-03-29 18:57:18');

-- --------------------------------------------------------

--
-- Table structure for table `cotization_x_products`
--

CREATE TABLE IF NOT EXISTS `cotization_x_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cat_products` int(11) NOT NULL,
  `id_cotization` int(11) NOT NULL,
  `price` double NOT NULL DEFAULT '0',
  `percent` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cat_products` (`id_cat_products`),
  KEY `id_cotization` (`id_cotization`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `cotization_x_products`
--

INSERT INTO `cotization_x_products` (`id`, `id_cat_products`, `id_cotization`, `price`, `percent`) VALUES
(39, 7, 11, 123, 23),
(40, 18, 11, 500, 20),
(50, 12, 11, 10, 10),
(56, 18, 11, 500, 50),
(57, 13, 14, 1200, 20),
(59, 19, 14, 100, 20),
(60, 19, 14, 20, 50),
(61, 20, 14, 78, 10),
(62, 7, 11, 123, 20);

-- --------------------------------------------------------

--
-- Table structure for table `employs_data`
--

CREATE TABLE IF NOT EXISTS `employs_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `salary` double DEFAULT NULL,
  `job_description` varchar(45) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employ-user_idx` (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `employs_data`
--

INSERT INTO `employs_data` (`id`, `salary`, `job_description`, `id_user`) VALUES
(3, 5000, 'telefonia ', 16),
(4, 8000, 'prueba3', 34),
(5, 5500, 'prueba2', 16),
(6, NULL, NULL, NULL),
(8, 4888, 'hello world', 16);

-- --------------------------------------------------------

--
-- Table structure for table `files_sales`
--

CREATE TABLE IF NOT EXISTS `files_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_id` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `files_sales`
--

INSERT INTO `files_sales` (`id`, `sales_id`, `path`) VALUES
(10, 1, '../public/Sales/prueba.pdf'),
(11, 18, '../public/Sales/applogo.png'),
(12, 21, '../public/Sales/contrato.jpg'),
(13, 0, '../public/Sales/156813111_117889643617130_4754647635639370529_n.jpg'),
(14, 0, '../public/Sales/solimaq.docx'),
(15, 1, '../public/Sales/nombres.txt'),
(17, 26, '../public/Sales/prueba.pdf'),
(18, 27, '/var/www/html/solimaq/public/Contratos/archivo.pdf'),
(19, 27, '../public/Contratos/archivo.pdf'),
(20, 1, '../public/Contratos/archivo.pdf'),
(21, 27, '../public/Contratos/27628042021.pdf'),
(22, 27, '../public/Contratos/271228042021.pdf'),
(23, 27, '../public/Contratos/27728042021.pdf'),
(24, 27, '../public/Contratos/27628042021.pdf'),
(25, 27, '../public/Contratos/271328042021.pdf'),
(26, 27, '../public/Contratos/27828042021.pdf'),
(27, 1, '../public/Contratos/11428042021.pdf'),
(28, 27, '../public/Contratos/271228042021.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `file_patments`
--

CREATE TABLE IF NOT EXISTS `file_patments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payments_id` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `file_patments`
--

INSERT INTO `file_patments` (`id`, `payments_id`, `path`) VALUES
(1, 13, '../public/Payments/mpdf.pdf'),
(2, 14, '../public/Payments/solimaq.docx'),
(3, 15, '../public/Payments/mpdf.pdf'),
(4, 16, '../public/Payments/nombres.txt'),
(5, 17, '../public/Payments/mpdf(1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `active` smallint(6) NOT NULL DEFAULT '0',
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`, `active`, `c_date`) VALUES
(1, 'Administrador', 'Grupo de Administradores', 1, '2021-02-08 16:36:49'),
(2, 'Clientes', 'Grupo Clientes', 1, '2021-02-02 00:00:00'),
(3, 'Vendedor', 'Grupo Vendedores ', 1, '2021-02-07 00:00:00'),
(4, 'Proveedor', 'Grupo Proveedor', 1, '2021-03-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `group_modules`
--

CREATE TABLE IF NOT EXISTS `group_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `group_modules`
--

INSERT INTO `group_modules` (`id`, `name`, `description`, `icon`) VALUES
(1, 'ADMIN', 'BALANCE GENERAL', '<i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>'),
(2, 'VENTAS', 'PROCESO DE VENTA', '<i class="fa fa-signal"></i>'),
(3, 'CLIENTE', 'MODULO PUBLICO DE CLIENTE', '<i class="fa fa-handshake-o" aria-hidden="true"></i>'),
(4, 'LEGAL', 'Modulo legal de la empresa', '<i class="fa fa-gavel"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_campaigns`
--

CREATE TABLE IF NOT EXISTS `marketing_campaigns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `budget` double NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `channel` varchar(255) NOT NULL,
  `leads` double NOT NULL,
  `id_producto` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_create_user` int(11) NOT NULL,
  `id_asigned_user` int(11) NOT NULL,
  `c_date` datetime NOT NULL,
  `u_date` datetime NOT NULL,
  `d_date` datetime NOT NULL,
  `total_cost` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_producto` (`id_producto`,`id_create_user`,`id_asigned_user`),
  KEY `fk_user_create` (`id_create_user`),
  KEY `fk_user_asigned` (`id_asigned_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `marketing_campaigns`
--

INSERT INTO `marketing_campaigns` (`id`, `name`, `budget`, `date_start`, `date_end`, `channel`, `leads`, `id_producto`, `status`, `id_create_user`, `id_asigned_user`, `c_date`, `u_date`, `d_date`, `total_cost`) VALUES
(20, 'Test4', 56, '2021-03-30 00:00:00', '2021-04-08 00:00:00', 'Test4', 1, 22, 1, 16, 34, '2021-03-30 06:48:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 456789),
(23, 'Test', 546, '2021-04-09 00:00:00', '2021-04-10 00:00:00', 'test', 3, 14, 1, 16, 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 50000),
(25, 'test5', 20, '2021-04-30 00:00:00', '2021-05-31 00:00:00', 'ventas', 200, 10, 1, 16, 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 600),
(26, 'test6', 2000, '2021-04-02 00:00:00', '2021-04-30 00:00:00', 'test5', 300, 19, 1, 16, 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2999.99);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_group_module` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `controller` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `phase` int(11) NOT NULL,
  `show_in_menu` tinyint(1) NOT NULL DEFAULT '0',
  `parent` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_group_module` (`id_group_module`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=155 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `id_group_module`, `name`, `description`, `controller`, `active`, `phase`, `show_in_menu`, `parent`) VALUES
(1, 2, 'PAGOS', 'TIPOS DE PAGO', 'payments', 1, 3, 1, NULL),
(6, 1, 'USUARIOS', 'UARIOS REGISTRADOS', 'users', 1, 3, 1, NULL),
(47, 2, 'MARKETING', 'ADMINISTRACION DE CAMPAÑAS11', 'marketing', 1, 3, 1, NULL),
(108, 2, 'PRODUCTOS', 'PRODUCTOS A LA VENTA', 'products', 1, 3, 1, NULL),
(125, 1, 'MODULOS', 'ADMINISTRACION DE MODULOS', 'modules', 0, 0, 1, NULL),
(127, 2, 'PROVEEDORES', 'MODULO DE PROVEEDORES SOLIMAQ', 'proveedores', 0, 0, 1, 'prueba'),
(128, 3, 'SEGUIMIENTO', 'SEGUIMIENTO DE PAQUETES', 'logistic', 0, 0, 1, NULL),
(129, 1, 'PERFILES', 'ADMINISTRACION DE PERMISOS', 'profiles', 0, 0, 1, NULL),
(130, 2, 'ETAPAS DE VENTA', 'MODULO DE ETAPAS DE VENTA', 'sales_stage', 0, 0, 1, NULL),
(131, 1, 'INICIO', 'INICIO', 'inicio', 1, 3, 1, NULL),
(136, 1, 'GRUPOS', 'Grupos de usuarios', 'groups', 0, 0, 1, NULL),
(137, 2, 'COTIZACIONES', 'cotizaciones', 'cotizaciones', 0, 0, 1, NULL),
(138, 2, 'COTIZACIONES_PRODUCTOS', 'productos', 'Cotizacion_products', 0, 0, 0, NULL),
(139, 2, 'LISTA FACTURACION', 'LISTA DE PDFS', 'list_facturation', 0, 0, 0, NULL),
(140, 1, 'EMPRESAS', 'Modulo de empresas', 'Empresas', 0, 0, 0, NULL),
(141, 1, 'NOTIFICACIONES', 'Notificaciones', 'Notificaciones', 0, 0, 0, NULL),
(143, 2, 'EMPLEADOS', 'Datos generales de empleados', 'Empleados', 0, 0, 1, NULL),
(144, 4, 'CONTRATOS', 'Este modulo es para la generación de contratos', 'Contratos', 0, 0, 1, NULL),
(151, 2, 'UPLOADS FILES', 'CARGA DE ARCHIVOS', 'uploads_files', 0, 0, 0, NULL),
(152, 1, 'prueba', 'prueba', 'prueba', 0, 0, 0, NULL),
(153, 2, 'VENTAS', 'MODULO DE VENTAS', 'ventas', 0, 0, 1, NULL),
(154, 2, 'ESTADOS MARKETING', 'Gráficos de marketing', 'MarketingGraphs', 1, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL,
  `id_user_emisor` int(11) DEFAULT NULL,
  `id_user_receptor` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_receiver` (`id_user_emisor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `id_type`, `state`, `id_user_emisor`, `id_user_receptor`, `date`) VALUES
(7, 1, 1, 41, 16, '2021-04-28 06:07:07'),
(8, 2, 1, 41, 16, '2021-04-27 03:11:14'),
(9, 2, 1, 26, 16, '2021-04-29 08:12:13'),
(10, 1, 1, 27, 16, '2021-04-28 04:11:13'),
(11, 2, 1, 34, 41, '2021-04-28 04:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sales` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `c_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `id_cat_payments` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payment-cat-payment_idx` (`id_cat_payments`),
  KEY `payment-sales_idx` (`id_sales`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `id_sales`, `amount`, `status`, `c_date`, `id_cat_payments`) VALUES
(1, NULL, 500.12, 'En espera', '2021-04-23 11:35:01', 16),
(3, 1, 787.96, 'Pendiente', '2021-04-26 01:02:35', 5),
(4, 1, 400, 'pagado', '2021-04-26 12:31:37', 15),
(5, 1, 100.27, 'envio', '2021-04-26 01:07:50', 16),
(7, 21, 200, 'primer pago', '2021-04-27 02:42:31', 5),
(9, 21, 400, 'Pendiente', '2021-04-27 02:48:43', 15),
(10, 21, 500, 'envio', '2021-04-27 02:50:46', 5),
(11, 21, 100, 'Pendiente', '2021-04-27 02:57:37', 5),
(12, 21, 100, 'Pendiente', '2021-04-27 02:58:45', 5),
(13, 21, 10, 'Pendiente', '2021-04-27 03:04:04', 5),
(14, 1, 500, 'En espera', '2021-04-27 03:13:42', 5),
(15, 1, 500, 'pagado', '2021-04-27 03:18:17', 5),
(17, 26, 8000, 'pagado', '2021-04-27 03:34:37', 5);

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `name_proveedor` varchar(100) DEFAULT NULL,
  `p_address_country` varchar(255) DEFAULT NULL,
  `p_address_city` varchar(255) DEFAULT NULL,
  `p_address_county` varchar(255) DEFAULT NULL,
  `p_address_street` varchar(255) DEFAULT NULL,
  `p_address_postal_code` varchar(255) DEFAULT NULL,
  `p_address_number` varchar(255) DEFAULT NULL,
  `rfc` varchar(100) DEFAULT NULL,
  `description_proveedor` text,
  `c_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `name_proveedor`, `p_address_country`, `p_address_city`, `p_address_county`, `p_address_street`, `p_address_postal_code`, `p_address_number`, `rfc`, `description_proveedor`, `c_date`) VALUES
(17, 'ZAVALA CORTES NUEVO', 'mexico', 'mexico', 'tlahuac', 'canal de chalco ', '7896', '15', '45', NULL, '2021-03-08 03:22:31'),
(38, 'crono30', '789', 'prueba', 'prueba', '789', '1234', '123', 'ASDFGHJ', NULL, '2021-04-16 03:36:22'),
(47, 'test', 'mexico', 'mexico', 'tlahuac', '78', '124587', '147', '147852', NULL, '2021-04-23 03:36:22'),
(48, 'hhh', 'hh', 'hh', 'hh', 'hh', 'hh', 'hh', 'g', NULL, '2021-04-23 03:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `proveedor_x_products`
--

CREATE TABLE IF NOT EXISTS `proveedor_x_products` (
  `id_product` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `supplier_price` double NOT NULL,
  KEY `id_product` (`id_product`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proveedor_x_products`
--

INSERT INTO `proveedor_x_products` (`id_product`, `id_proveedor`, `supplier_price`) VALUES
(10, 17, 456),
(14, 38, 100),
(13, 38, 7888),
(18, 38, 3257),
(20, 38, 5000),
(19, 38, 654),
(14, 17, 100);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cotizacion` int(11) DEFAULT NULL,
  `id_user_vendor` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `tax` double DEFAULT NULL,
  `c_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `sales-user_idx` (`id_cotizacion`),
  KEY `sales-user_idx1` (`id_user_vendor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `id_cotizacion`, `id_user_vendor`, `subtotal`, `tax`, `c_date`) VALUES
(1, 14, 16, 1120.2, 15, '2021-04-16 12:56:09'),
(18, 15, 16, 0, 15, '2021-04-16 01:53:35'),
(21, 11, 16, 753.71, 15, '2021-04-19 11:05:56'),
(22, 14, 16, 1120.2, 15, '2021-04-20 04:36:56'),
(25, 11, 16, 753.71, 15, '2021-04-20 05:36:27'),
(26, 11, 41, 753.71, 15, '2021-04-21 04:16:12'),
(27, 14, 41, 1120.2, 15, '2021-04-21 06:20:27'),
(28, 11, 41, 852.11, 15, '2021-04-29 02:45:21'),
(29, 14, 16, 1120.2, 15, '2021-04-29 02:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `sale_product_activity`
--

CREATE TABLE IF NOT EXISTS `sale_product_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cotization_x_products` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `id_stage` int(11) DEFAULT NULL,
  `c_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `cotization-c_x_p_idx` (`id_cotization_x_products`),
  KEY `spa-users_idx` (`id_user`),
  KEY `spa-stage_idx` (`id_stage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `selected_button`
--

CREATE TABLE IF NOT EXISTS `selected_button` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_table` varchar(100) DEFAULT NULL,
  `column_name` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `selected_button`
--

INSERT INTO `selected_button` (`id`, `name_table`, `column_name`, `name`) VALUES
(1, 'users', 'user_name', 'nombre de usuario'),
(2, 'clients_data', 'name', 'nombre de cliente'),
(3, 'clients_data', 'adress_country', 'pais'),
(4, 'sales', 'subtotal', 'monto'),
(5, 'temporary', 'temporary', 'fecha'),
(6, 'clients_data', 'clients_data', 'rfc');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_notification`
--

CREATE TABLE IF NOT EXISTS `type_of_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo` varchar(50) NOT NULL,
  `Mensaje` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `type_of_notification`
--

INSERT INTO `type_of_notification` (`id`, `Tipo`, `Mensaje`) VALUES
(1, 'Cotizacion ', 'Se realizo una Cotizacion de '),
(2, 'Venta', 'Se realizo una nueva venta de ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_group` int(11) NOT NULL,
  `c_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text,
  `activation_token` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id_group` (`id_group`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_group`, `c_date`, `user_name`, `email`, `password`, `activation_token`, `about`, `created_at`, `updated_at`, `deleted_at`, `active`) VALUES
(16, 1, '2021-02-04 03:01:19', 'Alexis Ricardo', 'alexis@webcorp.com.mx', '$2y$10$LQnMqLNsmKXkjwGD8oChz.wS8B2n/8AZD1FBa3T6n/49Glpk0X85C', '$2y$10$Ko6HYl/5x9lljVf1BPOAnu.sCwd3xSNU4nLn7mEISfsyutd6nQvE6', 'Soy Alexis', NULL, NULL, NULL, 0);
--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `trigger_user`;
DELIMITER //
CREATE TRIGGER `trigger_user` AFTER INSERT ON `users`
 FOR EACH ROW begin
declare message text;
set message=concat('Se ingreso el usuario ',new.user_name,'en el dia y hora ',now());
insert into bitacora (bitacora_descripcion) values(message);
end
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
