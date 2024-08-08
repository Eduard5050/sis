-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2024 a las 10:52:36
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `type_media` varchar(255) NOT NULL,
  `original_headers` text DEFAULT NULL,
  `english_headers` text DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `url_testigo` varchar(255) DEFAULT NULL,
  `tier` varchar(50) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `ad_value_pesos` decimal(10,2) DEFAULT NULL,
  `ad_value_dolares` decimal(10,2) DEFAULT NULL,
  `reach` int(11) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reports`
--

INSERT INTO `reports` (`id`, `country`, `date`, `type_media`, `original_headers`, `english_headers`, `author`, `url`, `url_testigo`, `tier`, `pdf`, `notes`, `ad_value_pesos`, `ad_value_dolares`, `reach`, `topic`) VALUES
(1, 'mexico', '2023-06-27', 'hola', 'mucho', 'yes', 'yaki', 'https://www.google.com/search?client=firefox-b-d&q=como+cambiar+el+color+de+la+letra+css', 'https://www.google.com/search?client=firefox-b-d&q=como+cambiar+el+color+de+la+letra+css', 'mucho', 'aquiyahora', 'muchas', '49999.99', '2500.00', 66, 'muchisimo'),
(2, 'mexico', '2023-06-27', 'hola', '', '', '', '', '', '', '', '', '0.00', '0.00', 0, ''),
(3, 'mexico', '2024-07-28', 'hola', 'quiebu', 'uno', 'dos', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'cinco', 'unodos', 'sip', '500000.00', '2500.00', 500, 'muchisoc'),
(4, 'mexico', '2024-07-28', 'hola', 'siempre', 'alguno', 'hola', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'sip', 'unodos', 'siempre', '500000.00', '25000.00', 60, 'alguno'),
(5, 'mexico', '2024-07-28', 'medio', 'muchis', 'ingles', 'japon', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'mucho', 'muchito', 'muhcas', '50000.00', '2500.00', 65, 'sintema'),
(6, 'mexico', '2024-07-28', 'medio', 'muchis', 'ingles', 'japon', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'mucho', 'muchito', 'muhcas', '50000.00', '2500.00', 65, 'sintema'),
(7, 'mexico', '2024-07-28', 'medio', 'muchis', 'ingles', 'japon', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'mucho', 'muchito', 'muhcas', '50000.00', '2500.00', 65, 'sintema'),
(8, 'mexico', '2025-08-29', 'medio', 'hols', '', 'hola', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'https://es.stackoverflow.com/questions/551783/como-poner-color-de-fondo-a-un-boton', 'mucho', 'unodos', 'muchias', '50000.00', '2500.00', 65, 'sintema'),
(9, 'pakistan', '2000-07-04', 'retra', 'retra', 'fuck', 'lalo', 'fgteurbdoñjkd.com', 'retrardado', 'risas', 'go.pdf', 'tiposd ', '54739.00', '453637.00', 3476354, 'jaguar'),
(10, 'mexico', '2024-08-31', 'medio', 'muchos', 'algunosd', 'thor', 'https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://actiontalesfanfict.fandom.com/es/wiki/Or%25C3%25A1culo&ved=2ahUKEwiewIebls6HAxXM38kDHcABH4MQFnoECBkQAQ&usg=AOvVaw3YbjVP51GDyTX8d653qKgw', 'https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://actiontalesfanfict.fandom.com/es/wiki/Or%25C3%25A1culo&ved=2ahUKEwiewIebls6HAxXM38kDHcABH4MQFnoECBkQAQ&usg=AOvVaw3YbjVP51GDyTX8d653qKgw', 'mucho algo', 'siempre', 'maso', '500000.00', '2500.00', 16, 'Muchocisis¿mo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','client') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'eduard5000', '$2y$10$gbN6aozsF3TXnfzmH2p7q.g6Mp96QTMBhzL9p5XqOzNKHewuj8SrK', 'admin'),
(4, 'muler', '$2y$10$3q8taIGXgMg1cwReA5LXjOAFczVUbSUrpLkFE.3Rqdrn4SE3IqtdC', 'admin'),
(5, 'jane', '$2y$10$BBMrN7W1UWbtAOsnx83JYOmChCKEMYiUvfFzMeXtNj040O/Q.1bhW', 'client'),
(6, 'jane', '$2y$10$Rz5sJal9rr//DyySu8gONurMrN85mW84ceFlQoKZMQfGnipTJcVXq', 'client'),
(7, 'miguelguapo', '$2y$10$CjSTuNI9dAuLewGaFf80OuWWboci1PgfcZPMZHYjecGG.HZpJm2Q.', 'client');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
