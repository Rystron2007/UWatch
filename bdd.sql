-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 11:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc2020c2`
--
DROP DATABASE IF EXISTS `mvc2020c2`;
CREATE DATABASE IF NOT EXISTS `mvc2020c2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mvc2020c2`;

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(30) NOT NULL,
  `cat_descripcion` varchar(100) NOT NULL,
  `cat_estado` int(1) NOT NULL,
  `cat_usuarioActualizacion` varchar(12) NOT NULL,
  `cat_fechaActualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nombre`, `cat_descripcion`, `cat_estado`, `cat_usuarioActualizacion`, `cat_fechaActualizacion`) VALUES
(1, 'Víveres', 'Víveres en general', 1, '', '2021-02-01 15:50:44'),
(2, 'Productos de limpieza', 'Productos de limpieza para el hogar', 1, '', '2021-02-17 15:55:58'),
(3, 'Zapatos', 'zapatos deportivos y casuales', 1, '', '2021-02-19 12:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `prod_id` int(11) NOT NULL,
  `prod_codigo` varchar(10) NOT NULL,
  `prod_nombre` varchar(50) NOT NULL,
  `prod_descripcion` varchar(200) NOT NULL,
  `prod_estado` int(11) NOT NULL,
  `prod_precio` int(11) NOT NULL,
  `prod_idCategoria` int(11) NOT NULL,
  `prod_usuarioActualizacion` varchar(12) NOT NULL,
  `prod_fechaActualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`prod_id`, `prod_codigo`, `prod_nombre`, `prod_descripcion`, `prod_estado`, `prod_precio`, `prod_idCategoria`, `prod_usuarioActualizacion`, `prod_fechaActualizacion`) VALUES
(1, 'PR-001', 'ARROZ INTEGRAL', 'FUNDAS 2 1/2 kg', 0, 100, 1, 'usuario', '2021-02-19 23:15:21'),
(2, 'PR-002', 'AZUCAR', 'FUNDAS DE 2KG                    ', 1, 78, 1, 'usuario', '2021-02-19 22:41:54'),
(3, 'PR-003', 'ACEITE', 'FUNDAS 2LTS', 1, 111, 1, 'PRUEBA', '2021-02-03 08:06:03'),
(4, 'PR-003', 'COCA COLA', 'BOTELLA 3LTS', 0, 0, 1, '', '0000-00-00 00:00:00'),
(5, 'PR-8979', 'NUEVO PRODUCTO', 'PRODUCTO', 0, 0, 1, '', '0000-00-00 00:00:00'),
(6, 'PR-0909', 'OTRA PRUEBA', '  PRUEBA  a  dada', 0, 0, 1, '', '0000-00-00 00:00:00'),
(7, 'PRO-0200', 'LAPTOP', 'LAPTOP DELL', 1, 0, 1, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_usuario` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_german2_ci NOT NULL,
  `usu_clave` varchar(12) NOT NULL,
  `usu_clavemd5` varchar(50) NOT NULL,
  `usu_clavesha` varchar(150) NOT NULL,
  `usu_estado` int(1) NOT NULL,
  `usu_fechaActualizacion` datetime NOT NULL DEFAULT '1000-01-01 00:00:00',
  `usu_usuarioActualizacion` varchar(12) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usu_usuario`, `usu_clave`, `usu_clavemd5`, `usu_clavesha`, `usu_estado`, `usu_fechaActualizacion`, `usu_usuarioActualizacion`) VALUES
('PRUEBA', 'CLAVE', '230554a3a50cbfa648f233d46df9ca36', '7687cc2fc15f339f867518c049387fb98f2bcaf1', 1, '2021-01-21 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `fk_categoria` (`prod_idCategoria`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`prod_idCategoria`) REFERENCES `categoria` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
