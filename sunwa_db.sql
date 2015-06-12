-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2015 at 10:21 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sunwa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE IF NOT EXISTS `buildings` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `latitude` float NOT NULL,
  `langitude` float NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `debt` float NOT NULL,
  `building_img` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `address`, `latitude`, `langitude`, `date_added`, `debt`, `building_img`) VALUES
(14, 'b1', 'av.', 10.4548, -66.7928, '2015-01-13 15:17:35', 3, ''),
(15, '0', '0', 0, 0, '2015-06-07 23:11:58', 0, ''),
(16, 'pepe', '3, Venezuela', 11.0059, -68.5272, '2015-06-07 23:12:24', 0, ''),
(17, '0', '0', 0, 0, '2015-06-07 23:12:27', 0, ''),
(18, '0', '0', 0, 0, '2015-06-07 23:18:17', 0, ''),
(19, '0', '0', 0, 0, '2015-06-07 23:19:58', 0, ''),
(20, 'ASD', 'Carretera La victoria - Colonia Tovar, Venezuela', 10.3527, -67.2968, '2015-06-09 00:37:11', 36, ''),
(21, 'casita', 'Carretera Vía La Arenosa, Barrerita, Venezuela', 9.96885, -68.0988, '2015-06-09 00:37:44', 36, ''),
(22, 'c2', 'Calle Marino, Ocumare del Tuy, Venezuela', 10.0608, -66.687, '2015-06-09 00:39:47', 36, ''),
(23, 'c4', 'Parcela San Benito, Villa De Cura, Venezuela', 10.0013, -67.5439, '2015-06-09 00:41:38', 0, ''),
(24, 'nueva', 'Macaira - Buena Vista, Venezuela', 10.0338, -66.2585, '2015-06-09 00:42:16', 0, ''),
(25, 'ss', 'Pedro Camejo, Venezuela', 10.2825, -68.5272, '2015-06-11 01:07:18', 0, ''),
(26, 'prueba2', 'Carretera Morón - San Felipe, Urama, Venezuela', 10.4014, -68.3405, '2015-06-11 02:51:19', 0, NULL),
(27, '2121', 'Avenida Principal Ureros, Venezuela', 10.639, -68.6646, '2015-06-11 02:51:46', 0, NULL),
(28, 'prueba3', '3, Venezuela', 10.7416, -68.4503, '2015-06-11 02:53:20', 0, NULL),
(29, 'cccc', 'Calle el Pilar, Venezuela', 10.9628, -68.7909, '2015-06-11 03:11:44', 0, NULL),
(30, 'asd1', '3, Venezuela', 11.0598, -68.9941, '2015-06-12 00:50:03', 0, NULL);

--
-- Triggers `buildings`
--
DROP TRIGGER IF EXISTS `delete_inventory_building`;
DELIMITER //
CREATE TRIGGER `delete_inventory_building` AFTER DELETE ON `buildings`
 FOR EACH ROW DELETE FROM inventory WHERE inventory.building_id = old.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE IF NOT EXISTS `floors` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `building_id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Triggers `floors`
--
DROP TRIGGER IF EXISTS `delete_floor_inventory`;
DELIMITER //
CREATE TRIGGER `delete_floor_inventory` AFTER DELETE ON `floors`
 FOR EACH ROW DELETE FROM inventory WHERE inventory.floor_id = old.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `role_id` int(5) NOT NULL,
  `floor_id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `role_id`, `floor_id`) VALUES
(9, 'GRUPO1', 3, '2014-12-02 17:15:05'),
(10, 'CONTABILIDAD', 3, '2014-12-16 14:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `sub_type` varchar(55) NOT NULL,
  `layer_id` int(11) NOT NULL,
  `sub_layer_id` int(11) NOT NULL,
  `building_id` int(5) NOT NULL,
  `floor_id` int(5) NOT NULL,
  `office_id` int(5) NOT NULL,
  `jobname` varchar(55) NOT NULL,
  `engineername` varchar(55) NOT NULL,
  `from` varchar(55) NOT NULL,
  `to` varchar(55) NOT NULL,
  `brand` varchar(55) NOT NULL,
  `model` varchar(55) NOT NULL,
  `serial` varchar(55) NOT NULL,
  `description` varchar(55) NOT NULL,
  `divestiture` varchar(55) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `type`, `sub_type`, `layer_id`, `sub_layer_id`, `building_id`, `floor_id`, `office_id`, `jobname`, `engineername`, `from`, `to`, `brand`, `model`, `serial`, `description`, `divestiture`, `date_added`) VALUES
(37, 'goods', 'location', 7, 27, 0, 0, 0, '', '', '', '', 'ibm', 'rs34', '231232312', 'laptop', '', '2014-12-16 13:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_logs`
--

CREATE TABLE IF NOT EXISTS `inventory_logs` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `inventory_id` int(5) NOT NULL,
  `image` varchar(55) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `inventory_logs`
--

INSERT INTO `inventory_logs` (`id`, `inventory_id`, `image`, `description`, `date_uploaded`) VALUES
(2, 0, 'marker1.png', '', '2014-11-25 15:13:56'),
(3, 0, 'marker2.png', '', '2014-11-25 15:21:15'),
(4, 4, 'marker11.png', '', '2014-11-28 13:44:33'),
(7, 3, 'marker51.png', '', '2014-11-28 14:00:16'),
(9, 3, 'error.png', '', '2014-12-02 17:27:49'),
(10, 26, 'estacion_tren.png', '', '2014-12-02 22:54:11'),
(11, 4, 'error1.png', '', '2014-12-02 22:55:57'),
(12, 4, 'error2.png', '', '2014-12-02 22:56:40'),
(13, 4, 'remove_comments_metronic1.png', '', '2014-12-02 22:56:56'),
(14, 4, 'remove_comments_metronic2.png', '', '2014-12-02 22:57:14'),
(15, 4, '38724392.png', '', '2014-12-02 22:58:00'),
(16, 4, '387243921.png', '', '2014-12-02 22:58:08'),
(17, 25, '387243922.png', '', '2014-12-03 00:24:59'),
(21, 37, 'scaner.png', '', '2014-12-16 13:56:28'),
(26, 37, 'Algarve-Train-Station-Icon.png', '', '2014-12-16 16:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `layers`
--

CREATE TABLE IF NOT EXISTS `layers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `layer_name` varchar(55) NOT NULL,
  `layer_icon` varchar(1000) NOT NULL,
  `layer_description` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `layers`
--

INSERT INTO `layers` (`id`, `layer_name`, `layer_icon`, `layer_description`, `date_added`) VALUES
(1, 'building', 'marker1.png', 'This is the first building layer', '2014-11-20 14:57:16'),
(25, 'CASAS', 'house-icon1.png', 'CASAS EN VENTA', '2015-01-13 00:24:51');

--
-- Triggers `layers`
--
DROP TRIGGER IF EXISTS `layers_items_delete`;
DELIMITER //
CREATE TRIGGER `layers_items_delete` AFTER DELETE ON `layers`
 FOR EACH ROW DELETE FROM layers_items WHERE layers_items.layer_id = old.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `layers_items`
--

CREATE TABLE IF NOT EXISTS `layers_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `layer_id` int(11) NOT NULL,
  `item_name` varchar(55) NOT NULL,
  `item_address` varchar(255) NOT NULL,
  `item_latitude` float NOT NULL,
  `item_longitude` float NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=234 ;

--
-- Dumping data for table `layers_items`
--

INSERT INTO `layers_items` (`id`, `layer_id`, `item_name`, `item_address`, `item_latitude`, `item_longitude`, `date_added`) VALUES
(51, 1, 'test building', 'test address, Carretera Principal Los Naranjos, Los Naranjos, Venezuela', 10.0716, -67.1484, '2015-01-10 08:24:03'),
(87, 1, 'test', 'test, Avenida Mariscal Sucre, Caracas, Venezuela', 10.512, -66.8964, '2015-01-10 14:58:43'),
(105, 25, 'Casa 1', 'Av. Principal la Carlota', 10.4953, -66.8323, '2015-01-13 00:27:09'),
(120, 1, 'fff', 'Carretera Carayaca - Junquito, Venezuela', 10.4554, -67.1759, '2015-06-07 23:56:17'),
(154, 1, 'zxzx', 'Avenida Principal de Caricuao, Caracas, Venezuela', 10.4446, -66.9891, '2015-06-08 13:41:19'),
(156, 1, 'cccc', 'Carretera Via La Mariposa, Tocuyito, Venezuela', 10.0933, -68.0493, '2015-06-08 13:41:36'),
(158, 25, 'nnnn', 'Guatopo National Park, Carretera La Marinera - Cerro Pelón, Venezuela', 10.0284, -66.1597, '2015-06-08 13:41:59'),
(178, 1, 'xxxxx', '3, Venezuela', 11.3239, -68.9996, '2015-06-09 00:32:40'),
(184, 0, '0', '0', 0, 0, '2015-06-09 00:39:48'),
(185, 0, '0', '0', 0, 0, '2015-06-09 00:40:22'),
(186, 0, '0', '0', 0, 0, '2015-06-09 00:41:25'),
(187, 0, '0', '0', 0, 0, '2015-06-09 00:41:40'),
(188, 0, '0', '0', 0, 0, '2015-06-09 00:42:17'),
(189, 0, '0', '0', 0, 0, '2015-06-09 22:47:55'),
(190, 0, '0', '0', 0, 0, '2015-06-09 22:59:14'),
(191, 0, '0', '0', 0, 0, '2015-06-10 23:55:16'),
(192, 0, '0', '0', 0, 0, '2015-06-11 00:32:45'),
(193, 0, '0', '0', 0, 0, '2015-06-11 00:35:02'),
(194, 0, '0', '0', 0, 0, '2015-06-11 00:35:42'),
(195, 0, '0', '0', 0, 0, '2015-06-11 00:50:11'),
(196, 0, '0', '0', 0, 0, '2015-06-11 00:50:57'),
(197, 0, '0', '0', 0, 0, '2015-06-11 00:55:34'),
(198, 0, '0', '0', 0, 0, '2015-06-11 00:56:00'),
(199, 0, '0', '0', 0, 0, '2015-06-11 01:03:32'),
(200, 0, '0', '0', 0, 0, '2015-06-11 01:04:00'),
(201, 0, '0', '0', 0, 0, '2015-06-11 01:05:12'),
(202, 0, '0', '0', 0, 0, '2015-06-11 01:05:33'),
(203, 0, '0', '0', 0, 0, '2015-06-11 01:06:51'),
(204, 0, '0', '0', 0, 0, '2015-06-11 01:07:19'),
(205, 0, '0', '0', 0, 0, '2015-06-11 01:33:55'),
(206, 0, '0', '0', 0, 0, '2015-06-11 01:39:55'),
(207, 0, '0', '0', 0, 0, '2015-06-11 01:40:50'),
(208, 0, '0', '0', 0, 0, '2015-06-11 01:41:16'),
(209, 0, '0', '0', 0, 0, '2015-06-11 01:45:33'),
(210, 0, '0', '0', 0, 0, '2015-06-11 01:45:57'),
(211, 0, '0', '0', 0, 0, '2015-06-11 02:50:53'),
(212, 0, '0', '0', 0, 0, '2015-06-11 02:51:20'),
(213, 0, '0', '0', 0, 0, '2015-06-11 02:51:47'),
(214, 0, '0', '0', 0, 0, '2015-06-11 02:52:53'),
(215, 0, '0', '0', 0, 0, '2015-06-11 02:53:21'),
(216, 0, '0', '0', 0, 0, '2015-06-11 03:00:12'),
(217, 0, '0', '0', 0, 0, '2015-06-11 03:11:21'),
(218, 0, '0', '0', 0, 0, '2015-06-11 03:11:46'),
(219, 1, 'v1', 'Colectora, Venezuela', 9.94721, -64.9347, '2015-06-11 03:13:06'),
(220, 0, '0', '0', 0, 0, '2015-06-11 03:13:08'),
(221, 0, '0', '0', 0, 0, '2015-06-12 00:31:06'),
(222, 0, '0', '0', 0, 0, '2015-06-12 00:47:12'),
(223, 0, '0', '0', 0, 0, '2015-06-12 00:47:33'),
(224, 1, 'asd', 'Calle el Pilar, Venezuela', 10.7686, -68.6041, '2015-06-12 00:49:27'),
(225, 0, '0', '0', 0, 0, '2015-06-12 00:49:29'),
(226, 0, '0', '0', 0, 0, '2015-06-12 00:50:05'),
(227, 0, '0', '0', 0, 0, '2015-06-12 00:55:00'),
(228, 0, '0', '0', 0, 0, '2015-06-12 02:40:46'),
(229, 0, '0', '0', 0, 0, '2015-06-12 02:43:43'),
(230, 0, '0', '0', 0, 0, '2015-06-12 02:44:18'),
(231, 0, '0', '0', 0, 0, '2015-06-12 02:49:49'),
(232, 0, '0', '0', 0, 0, '2015-06-12 02:50:05'),
(233, 0, '0', '0', 0, 0, '2015-06-12 02:50:21');

--
-- Triggers `layers_items`
--
DROP TRIGGER IF EXISTS `inventory_delete`;
DELIMITER //
CREATE TRIGGER `inventory_delete` AFTER DELETE ON `layers_items`
 FOR EACH ROW DELETE FROM inventory WHERE inventory.layer_id = old.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE IF NOT EXISTS `office` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `building_id` int(5) NOT NULL,
  `floor_id` int(5) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Triggers `office`
--
DROP TRIGGER IF EXISTS `delete_inventory_office`;
DELIMITER //
CREATE TRIGGER `delete_inventory_office` AFTER DELETE ON `office`
 FOR EACH ROW DELETE FROM inventory WHERE inventory.office_id = old.id
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `data_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `data_added`) VALUES
(1, 'admin', 'all previllages', '2014-11-26 11:44:45'),
(2, 'writer', 'write only permission', '2014-11-26 12:06:27'),
(3, 'read', 'read only permission', '2014-12-02 12:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_label`
--

CREATE TABLE IF NOT EXISTS `tbl_label` (
  `label_id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(1000) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  PRIMARY KEY (`label_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_label`
--

INSERT INTO `tbl_label` (`label_id`, `label`, `icon`) VALUES
(1, 'restaurant', 'marker1.png'),
(2, 'bar', 'marker2.png'),
(3, 'house', 'marker3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `language` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `group_id` int(5) NOT NULL,
  `cargo` varchar(55) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `language`, `email`, `group_id`, `cargo`, `date_added`) VALUES
(17, 'admin', '0192023a7bbd73250516f069df18b500', 'english', 'david@gmailnow.com', 6, 'testnow', '2014-11-07 13:13:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
