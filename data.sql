CREATE DATABASE IF NOT EXISTS isc;

USE isc;
CREATE TABLE `programadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `lenguajes` int(11) NOT NULL,
  `pais` int(11) NOT NULL,
  `salario` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

CREATE TABLE `paises`(
	`id` int(11) NOT NULL,
	`nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL	
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;;

CREATE TABLE `lenguajes`(
	`id` int(11) NOT NULL,
	`nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL	
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;;

ALTER TABLE `programadores`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `programadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `paises`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `paises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `lenguajes`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `lenguajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;