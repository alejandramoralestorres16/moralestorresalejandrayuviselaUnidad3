-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2023 a las 20:44:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbshu2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_productos`
--

CREATE TABLE `tabla_productos` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(4) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `stock` varchar(10) NOT NULL,
  `fecha_registro` date NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_productos`
--

INSERT INTO `tabla_productos` (`id_producto`, `codigo`, `descripcion`, `precio`, `stock`, `fecha_registro`, `imagen`) VALUES
(1, '200', 'HP Stream 14 2022', '$5,980.52', '20', '2023-06-24', 0x68702d73747265616d2d31342d323032322e6a7067),
(2, '205', 'HP Laptop 14 FQ1005LA', '$9,999.00', '25', '2023-06-24', 0x68702d31342d6671313030356c612e6a7067),
(3, '210', 'HP AIO 22 21.5', 'US$499.00', '30', '2023-06-24', 0x68702d61696f2d32322d32312e352e6a7067),
(4, '215', 'Lenovo Laptop Legion5 15\"', '$25,292.00', '35', '2023-06-24', 0x6c656e6f766f2d6c6170746f702d6c6567696f6e352d31352e6a7067),
(5, '220', 'Laptop Dell Latitude 7490 14.1', '$6.999.00', '40', '2023-06-24', 0x6c6170746f702d64656c6c2d6c617469747564652d373439302d31342e312e6a7067),
(6, '225', 'Acer Nitro 5-15.6\"', '$27,172.15', '45', '2023-06-24', 0x6c6170746f702d616365722d6e6974726f2d352d31352e362e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_users`
--

CREATE TABLE `tabla_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pswd` varchar(40) NOT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tabla_users`
--

INSERT INTO `tabla_users` (`id_user`, `username`, `email`, `pswd`, `estatus`) VALUES
(1, 'gdelgado', 'gerxim7865@gmail.com', '12345', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_productos`
--
ALTER TABLE `tabla_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `tabla_users`
--
ALTER TABLE `tabla_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_productos`
--
ALTER TABLE `tabla_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tabla_users`
--
ALTER TABLE `tabla_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
