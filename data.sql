CREATE DATABASE IF NOT EXISTS isc;

USE isc;
CREATE TABLE `programadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lenguajes` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pais` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `salario` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

ALTER TABLE `programadores`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `programadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;