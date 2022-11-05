-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 18:46:20
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ine22xxx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discountPercent` double(8,2) NOT NULL,
  `discountStart_at` datetime DEFAULT NULL,
  `discountEnd_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `company_id`, `name`, `description`, `imgUrl`, `price`, `discountPercent`, `discountStart_at`, `discountEnd_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Asus ROG Strix GeForce RTX 3090 Gaming OC 24GB GDDR6X', 'Tarjeta Gráfica NVIDIA RTX serie 3000 con arquitectura Ampere de gama extrema', 'img/000001.png', 1199.00, 25.00, '2022-10-24 00:00:00', '2022-11-15 00:00:00', '2022-10-26 06:47:07', '2022-11-04 07:47:07'),
(2, 2, 'Corsair iCUE 4000X RGB Cristal Templado USB 3.1 RGB Negro', 'Caja de Cristal Templado con 3 Ventiladores RGB incluidos, espaciosa y preparada para todo tu hardware y una gestión sencilla de cables', 'img/000002.png', 129.99, 0.00, NULL, NULL, '2022-10-26 08:51:04', '2022-11-02 23:00:00'),
(3, 5, 'MSI GeForce RTX 4090 SUPRIM X 24GB GDDR6X', 'Tarjeta Gráfica NVIDIA RTX serie 4000 con arquitectura Ada Lovelace de gama extrema', 'img/000003.png', 1999.95, 10.00, '2022-10-23 00:00:00', '2022-10-29 00:00:00', '2022-10-26 08:55:55', '2022-10-26 08:55:55'),
(4, 3, 'AMD Ryzen 5 7600X sin Cooler 4.7 GHz Box', 'Procesador AMD ZEN4 series 7000 de gama media', 'img/000004.png', 369.99, 0.00, NULL, NULL, '2022-10-26 09:00:50', '2022-10-26 09:00:50'),
(5, 4, 'G.Skill Trident Z5 RGB Plata DDR5 6000MHz 32 GB 2x16GB CL40', 'Memorias RAM DDR5 6000 Mhz CL40 con soporte INTEL XMP 3.0 y AMD EXPO', 'img/000005.png', 254.99, 15.00, '2022-10-15 00:00:00', '2022-11-15 00:00:00', '2022-10-26 09:04:20', '2022-10-26 09:04:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_imgurl_unique` (`imgUrl`),
  ADD KEY `products_company_id_foreign` (`company_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
