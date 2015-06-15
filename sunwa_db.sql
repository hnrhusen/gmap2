-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2015 at 07:51 PM
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
  `tipo_contribuyente` varchar(2) NOT NULL,
  `rif_ci` varchar(200) NOT NULL,
  `tipo_inmueble` varchar(100) NOT NULL,
  `tipo_propiedad` varchar(100) NOT NULL,
  `nivel` varchar(5) NOT NULL,
  `npiso` int(11) NOT NULL,
  `unidad` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `address`, `latitude`, `langitude`, `date_added`, `debt`, `building_img`, `tipo_contribuyente`, `rif_ci`, `tipo_inmueble`, `tipo_propiedad`, `nivel`, `npiso`, `unidad`) VALUES
(14, 'b1', 'av.', 10.4548, -66.7928, '2015-01-13 15:17:35', 3, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(15, '0', '0', 0, 0, '2015-06-07 23:11:58', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(16, 'pepe', '3, Venezuela', 11.0059, -68.5272, '2015-06-07 23:12:24', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(17, '0', '0', 0, 0, '2015-06-07 23:12:27', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(18, '0', '0', 0, 0, '2015-06-07 23:18:17', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(19, '0', '0', 0, 0, '2015-06-07 23:19:58', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(20, 'ASD', 'Carretera La victoria - Colonia Tovar, Venezuela', 10.3527, -67.2968, '2015-06-09 00:37:11', 36, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(21, 'casita', 'Carretera Vía La Arenosa, Barrerita, Venezuela', 9.96885, -68.0988, '2015-06-09 00:37:44', 36, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(22, 'c2', 'Calle Marino, Ocumare del Tuy, Venezuela', 10.0608, -66.687, '2015-06-09 00:39:47', 36, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(23, 'c4', 'Parcela San Benito, Villa De Cura, Venezuela', 10.0013, -67.5439, '2015-06-09 00:41:38', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(24, 'nueva', 'Macaira - Buena Vista, Venezuela', 10.0338, -66.2585, '2015-06-09 00:42:16', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(25, 'ss', 'Pedro Camejo, Venezuela', 10.2825, -68.5272, '2015-06-11 01:07:18', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(26, 'prueba2', 'Carretera Morón - San Felipe, Urama, Venezuela', 10.4014, -68.3405, '2015-06-11 02:51:19', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(27, '2121', 'Avenida Principal Ureros, Venezuela', 10.639, -68.6646, '2015-06-11 02:51:46', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(28, 'prueba3', '3, Venezuela', 10.7416, -68.4503, '2015-06-11 02:53:20', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(29, 'cccc', 'Calle el Pilar, Venezuela', 10.9628, -68.7909, '2015-06-11 03:11:44', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(30, 'asd1', '3, Venezuela', 11.0598, -68.9941, '2015-06-12 00:50:03', 0, './././uploads/buildings/casa2.jpeg', '', '', '', '', '', 0, ''),
(31, 'LIDERA C.A', 'UD 304ZONA IND LOS PINOS  MANZ  26', 8.27163, -62.7947, '2015-06-14 23:28:42', 0, './././uploads/buildings/casa2.jpeg', 'J', '317492544', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA 13'),
(32, 'MERCAPAN S.A', 'UD 304ZONA LOS PINOS MANZ  26', 8.27199, -62.7943, '2015-06-14 23:28:42', 0, './././uploads/buildings/casa2.jpeg', 'J', '310693277', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA 01'),
(33, 'SUPER AUTOS PUERTO ORDAZ C.A [ SUCURSAL ]', 'UD 304ZONA IND LOS PINOS MANZ  27', 8.2709, -62.7938, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '308536725', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  19 P\\O'),
(34, 'F.H TRANSMISIONES S.A', 'UD 304ZONA IND LOS PINOS MANZ  27-14', 8.26942, -62.794, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '003349593', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'GALPON 02'),
(35, 'BELLAAUTO C.A', 'UD 304ZONA IND LOS PINOS MANZ 27', 8.27056, -62.7927, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '306893644', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA 05'),
(36, 'DFE C.A', 'UD 304ZONA IND LOS PINOS MANZ  35', 8.27087, -62.7924, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '309695185', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  7Y8  GALPON 8'),
(37, 'IRON STEEL DE GUAYANA   C.A', 'UD 304ZONA IND LOS PINOS MANZ 35', 8.271, -62.7916, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '308148288', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  05'),
(38, 'SECADO E INSTALACIONES  DE REFRACTARIOS', 'UD 304ZONA IND LOS PINOS MANZ  36', 8.26815, -62.7949, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '311412760', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  3'),
(39, 'ALUMINIO MECANIZADO C.A', 'UD 304ZONA IND LOS PINOS MANZ 25', 8.26775, -62.7953, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '306680470', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  03'),
(40, 'ENDURIDE VENEZUELA C.A', 'UD 304ZONA IND LOS PINOS MANZ  25', 8.26799, -62.7958, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '311801782', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  10  GALPON  04'),
(41, 'INVERSIONES  CERCRA C.A', 'UD 304ZONA LOS PINOS MANZ  22', 8.26694, -62.7961, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '304790783', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA 13 A GALPON  10-2'),
(42, 'FRESAS Y TORNOS C.A', 'UD 304ZONA LOS PINOS MANZ   CALLE 07', 8.26842, -62.7961, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '095151344', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'LOCAL  22-13'),
(43, 'DISTRIBUIDORA  DE LACTEO LA LLOVIZNA C.A', 'UD 304ZONA LOS PINOS MANZ  22CALLE 06', 8.26882, -62.7971, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '303089895', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  01'),
(44, 'LACTEO  LOS PINOS  DEL CARONI C.A', 'UD 304ZONA LOS PINOS MANZ  22 CALLE 6', 8.2689, -62.797, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '299229261', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'GALPON 02'),
(45, 'E.S EMPRESA  DE SERVICIO  C.A', 'UD 304ZONA LOS PINOS MANZ 10 CALE 6', 8.269, -62.7982, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '304237596', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  27'),
(46, 'ENGINE KTMC.A', 'UD 304ZONA LOS PINOS MANZ  11', 8.26763, -62.7996, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '298179074', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'CASA NUMERO  16 PO'),
(47, 'REPRESENTACIONES  ANGOTURA C.A', 'UD 304ZONA LOS PINOS MANZ  11', 8.2674, -62.7991, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '080280580', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  14 GALPON  1-A'),
(48, 'CONFLUVENSA S..A', 'UD 304ZONA LOS PINOS MANZ 11NO 14 ENTRANDO POR AUTO LAVADO LOS PINOS ALL', 8.26739, -62.7991, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '296373868', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'GALPON 1 _B SIN PATENTE'),
(49, 'PROYECTOS  Y CONSTRUCCIONES  PAYLOADER PADRE & HIJOS C.A', 'UD 304ZONA IND LOS PINOS MANZ 10', 8.26798, -62.797, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '303756603', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'GALPON  SIN NUMERO'),
(50, 'CONGELADOS PRIMAVERA C.A', 'UD 304ZONA LOS PINOS MANZ  24', 8.26621, -62.7961, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '315081733', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  8  GALPON  03'),
(51, 'ROMILCA', 'UD 304ZONA IND LOS PINOS MANZ  37', 8.2658, -62.7962, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '095090744', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'GALPON 08'),
(52, 'ROMIPLAST C,A', 'UD 304ZONA LOS PINOS MANZ  37', 8.26582, -62.7962, '2015-06-14 23:28:43', 0, './././uploads/buildings/casa2.jpeg', 'J', '310068348', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  08 GALPON  08'),
(53, 'TRUMARCA TRUCK MACHINERY C.A', 'AV CARACAS EDIFICIO  TRUMACA', 8.26966, -62.7913, '2015-06-14 23:28:43', 245, './././uploads/buildings/casa.jpg', 'J', '316643255', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'LOCAL  46'),
(54, 'MB CAMIONES DE GUAYANA C.A', 'UD 304ZONA LOS PINOS  AV CARACAS MANZ  36', 8.27177, -62.7892, '2015-06-14 23:28:43', 246, './././uploads/buildings/casa.jpg', 'J', '314820389', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  38'),
(55, 'SUPER  AUTOS CAMIONES PUERTO ORDAZ  C.A', 'UD 304ZONA LOS PINOS', 8.27449, -62.7869, '2015-06-14 23:28:43', 247, './././uploads/buildings/casa.jpg', 'J', '294950566', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  30-21, A LA 30-28,P.O'),
(56, 'YUMAGLIS GOURMET  C.A', 'UD 304ZONA LOS PINOS  CC AUTANA', 8.2754, -62.786, '2015-06-14 23:28:44', 248, './././uploads/buildings/casa.jpg', 'J', '296179255', 'COMERCIAL', 'HORIZONTAL', 'PB', 0, 'LOCAL  01'),
(57, 'PETRO SERVICIOS C.A', 'UD 506 ZONA IND  MATANZAS AVDA  NORTE  SUR 07', 8.26241, -62.8141, '2015-06-14 23:28:44', 249, './././uploads/buildings/casa.jpg', 'J', '315166380', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  01-03'),
(58, 'BANCO DEL  SUR C.A [SULCUSAL CARBONORCA]', 'UD 508 ZONA IND  MATANZAS', 8.26582, -62.8186, '2015-06-14 23:28:44', 250, './././uploads/buildings/casa.jpg', 'J', '095039897', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'AL LADO  DE CARBONORCA'),
(59, 'CORPORACION  S.P.S C.A', 'ZONA IND MATANZAS  [AL LADO DE PIAMECA]', 8.27525, -62.8073, '2015-06-14 23:28:44', 251, './././uploads/buildings/casa.jpg', 'J', '314777246', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'SIN NUMERO'),
(60, 'TALLER INDUSTRIAL METALURGICO ANTONIO, C.A.', 'UD-503 ZONA INDUSTRIAL MATANZAS, CALLE NORTE-SUR,  ESTRE DSD Y HIERRO VE', 8.27573, -62.8008, '2015-06-14 23:28:44', 252, './././uploads/buildings/casa.jpg', 'J', '095003159', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'SIN NUMERO'),
(61, 'EL GUSTICO ORIENTAL, C.A.', 'UD-504 ZONA INDUSTRIAL MATANZAS,  AVENIDA FUERZAS ARMADAS', 8.27234, -62.8054, '2015-06-14 23:28:44', 253, './././uploads/buildings/casa.jpg', 'J', '315655845', 'COMERCIAL', 'HORIZONTAL', 'PB', 0, 'LOCAL  S/N ,P/O'),
(62, 'SERVICAUCHOS BARINAS, C.A.', 'ZONA INDUSTRIAL MATANZAS, CALLE EL PARDILLO', 8.27575, -62.7989, '2015-06-14 23:28:44', 254, './././uploads/buildings/casa.jpg', 'J', '310632782', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'LOCAL  10'),
(63, 'SERVICIO TECNICO DIESEL PUERTO ORDAZ, C.A.', 'ZONA INDUSTRIAL MATANZAS, CALLE EL SAMAN', 8.27694, -62.7978, '2015-06-14 23:28:44', 255, './././uploads/buildings/casa.jpg', 'J', '302046750', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  14'),
(64, 'TRANSPORTE SANCHEZ POLO DE VENEZUELA, C.A.', 'ZONA INDUSTRIAL MATANZAS,  MANZANA  00', 8.2774, -62.7973, '2015-06-14 23:28:44', 256, './././uploads/buildings/casa.jpg', 'J', '002822309', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA 14'),
(65, 'VIDRIOS ORINOKIA C.A', 'ZONA INDUSTRIAL MATANZAS,  CALLE  PARDILLO', 8.27816, -62.7966, '2015-06-14 23:28:44', 257, './././uploads/buildings/casa.jpg', 'J', '313197718', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'GALPON 1'),
(66, 'EN RUEDAS, C.A', 'ZONA INDUSTRIAL MATANZAS,  CALLE PARDILLO,  PARCELA 17', 8.27863, -62.7962, '2015-06-14 23:28:44', 258, './././uploads/buildings/casa.jpg', 'J', '316928926', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'GALPON  04'),
(67, 'COMERCIALIZADORA DE METALES CUYUNI, C.A.', 'ZONA INDUSTRIAL MATANZAS, MANZANA NRO.  06', 8.27915, -62.7977, '2015-06-14 23:28:44', 259, './././uploads/buildings/casa.jpg', 'J', '306419349', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'GALPON  S/N'),
(68, 'PDSA INDUSTRIAL [PROBASIN]', 'ZONA IND MATANZAS  CALLE PARDILLO  MANZ  04', 8.28313, -62.7921, '2015-06-14 23:28:44', 261, './././uploads/buildings/casa.jpg', 'J', '295355971', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  1-2'),
(69, 'MULTIACERO C.A', 'ZONA IND MATANZAS  ESQ  DE LA CALLE  PARDILLO', 8.28609, -62.7901, '2015-06-14 23:28:44', 262, './././uploads/buildings/casa.jpg', 'J', '305993343', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'LOCAL  SIN NUMERO'),
(70, 'TRANSPORTE  CHIRICA C.A', 'UD 508 ZONA IND MATANZAS  CARRERA  EL SAMAN  EDIFICIO  SIMPCA   ZONA IND MATANZAS  MANZ  02', 8.29052, -62.7945, '2015-06-14 23:28:44', 263, './././uploads/buildings/casa.jpg', 'J', '095092097', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  59'),
(71, 'TRANSPORTE CHIRICA C.A.', 'UD 502 ZONA IND MATANZAS CALLE EL SAMAN  MANZ  02', 8.29053, -62.7945, '2015-06-14 23:28:44', 264, './././uploads/buildings/casa.jpg', 'J', '080008723', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  59'),
(72, 'ASOCIACIÓN  COOPERATIVA CAURA AZUL  R.L', 'ZONA IND MATANZAS  CALLE EL SAMAN  EDIFICIO  MULTISERVICIO', 8.28815, -62.7921, '2015-06-14 23:28:44', 265, './././uploads/buildings/casa.jpg', 'J', '296412065', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'GALPON  4-A PISO 1 OFICINA  03'),
(73, 'LEAL HERNANDEZ MARIELA', 'ZONA IND MATANZAS  CALLE EL  PADILLO CON ARBOLEDA', 8.28897, -62.7864, '2015-06-14 23:28:44', 266, './././uploads/buildings/casa.jpg', 'V', '101944669', 'COMERCIAL', 'HORIZONTAL', 'PB', 0, 'KIOSCO SIN NUMERO'),
(74, 'SEGURIDAD  INDUSTRIAL  FELMAR C.A', 'ZONA IND MATANZAS  CALLE  LA ARBOLEDA MANZ  00', 8.28915, -62.7866, '2015-06-14 23:28:44', 267, './././uploads/buildings/casa.jpg', 'J', '401826423', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'LOCAL  NUMERO 06'),
(75, 'INVERSIONES  VALISAEK, C.A', 'ZONA IND MATANZAS  CALLE  ARBOLEDA FRENTE H.WELLS', 8.28909, -62.7872, '2015-06-14 23:28:44', 268, './././uploads/buildings/casa.jpg', 'J', '095195562', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  26'),
(76, 'ROLINI CONSTRUCTORS C.A', 'ZONA IND MATANZAS  CALLE ARBOLEDA', 8.28978, -62.7878, '2015-06-14 23:28:44', 269, './././uploads/buildings/casa.jpg', 'J', '304327382', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'MANZ  00- PARCELA  36'),
(77, 'VENEZOLANA DE CEMENTOS (SUCURSAL ]', 'ZONA IND MATANZAS  , CALLE ARBOLEDA  MANZ  00', 8.29225, -62.7904, '2015-06-14 23:28:44', 270, './././uploads/buildings/casa.jpg', 'J', '000388393', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  22'),
(78, 'GERENPRO, C.A', 'UD 502-00-20 Y 21, ZONA IND MATANZAS  CRRA ARBOLEDA EDIFICIO  GERENPRO', 8.29294, -62.791, '2015-06-14 23:28:45', 271, './././uploads/buildings/casa.jpg', 'J', '309968793', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  502_00-20 Y502-00-21'),
(79, 'SOCIEDAD  DE CONSTRUCCIONES  SOMOR C.A', 'zONA IND MATANZAS  C/ARBOLEEDA MANZ  00', 8.29727, -62.7943, '2015-06-14 23:28:45', 272, './././uploads/buildings/casa.jpg', 'J', '095017249', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  79'),
(80, 'MAQUIMOR C.A', 'ZONA IND MATANZAS C/ARBOLEEDA  MANZ  00', 8.29729, -62.7943, '2015-06-14 23:28:45', 273, './././uploads/buildings/casa.jpg', 'J', '095060993', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  79'),
(81, 'CORPORACION SOMOR MAQUIMOR C.A', 'ZONA IND MATANZAS  CALLE ARBOLEDA MANZ  00', 8.29717, -62.7942, '2015-06-14 23:28:45', 274, './././uploads/buildings/casa.jpg', 'J', '310307830', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  79'),
(82, 'PDVSA EMPRESA NACIONAL DE TRANSPORTE  S.A', 'ZONA IND MATANZAS  CALLE  EL EMPARME AVENIDA LIBERTADOR  EDIFICIO  PETROLERO', 8.28456, -62.7909, '2015-06-14 23:28:45', 275, './././uploads/buildings/casa.jpg', 'J', '296633029', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA 061 HASTA LA 065'),
(83, 'SURAL C.A', 'ZONA IND MATANZAS', 8.26504, -62.819, '2015-06-14 23:28:45', 276, './././uploads/buildings/casa.jpg', 'J', '000946906', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'PARCELA  506-01-05'),
(84, 'COOPERATIVA ADMINISTRADORA TEPUY VII, R.L.', 'ZONA IND MATANZAS PARCELA 01 Y 02', 8.26264, -62.8162, '2015-06-14 23:28:45', 277, './././uploads/buildings/casa.jpg', 'J', '297567488', 'INDUSTRIAL', 'HORIZONTAL', 'PB', 0, 'AVDA NORTE SUR FRENTE');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=262 ;

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
(233, 0, '0', '0', 0, 0, '2015-06-12 02:50:21'),
(234, 0, '0', '0', 0, 0, '2015-06-14 23:14:07'),
(235, 0, '0', '0', 0, 0, '2015-06-14 23:16:51'),
(236, 0, '0', '0', 0, 0, '2015-06-14 23:17:02'),
(237, 0, '0', '0', 0, 0, '2015-06-14 23:27:57'),
(238, 0, '0', '0', 0, 0, '2015-06-14 23:28:51'),
(239, 0, '0', '0', 0, 0, '2015-06-14 23:35:33'),
(240, 0, '0', '0', 0, 0, '2015-06-14 23:35:56'),
(241, 0, '0', '0', 0, 0, '2015-06-14 23:36:23'),
(242, 0, '0', '0', 0, 0, '2015-06-14 23:36:35'),
(243, 0, '0', '0', 0, 0, '2015-06-14 23:36:54'),
(244, 0, '0', '0', 0, 0, '2015-06-14 23:37:49'),
(245, 0, '0', '0', 0, 0, '2015-06-14 23:39:37'),
(246, 0, '0', '0', 0, 0, '2015-06-14 23:40:49'),
(247, 0, '0', '0', 0, 0, '2015-06-14 23:41:30'),
(248, 0, '0', '0', 0, 0, '2015-06-14 23:44:11'),
(249, 0, '0', '0', 0, 0, '2015-06-14 23:45:23'),
(250, 0, '0', '0', 0, 0, '2015-06-14 23:47:16'),
(251, 0, '0', '0', 0, 0, '2015-06-14 23:48:29'),
(252, 0, '0', '0', 0, 0, '2015-06-14 23:50:25'),
(253, 0, '0', '0', 0, 0, '2015-06-14 23:54:23'),
(254, 0, '0', '0', 0, 0, '2015-06-14 23:55:38'),
(255, 0, '0', '0', 0, 0, '2015-06-15 00:09:19'),
(256, 0, '0', '0', 0, 0, '2015-06-15 00:11:08'),
(257, 0, '0', '0', 0, 0, '2015-06-15 00:13:40'),
(258, 0, '0', '0', 0, 0, '2015-06-15 00:14:33'),
(259, 0, '0', '0', 0, 0, '2015-06-15 00:15:35'),
(260, 0, '0', '0', 0, 0, '2015-06-15 00:17:04'),
(261, 0, '0', '0', 0, 0, '2015-06-15 00:20:58');

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
