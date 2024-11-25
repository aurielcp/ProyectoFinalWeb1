DROP SCHEMA IF EXISTS `Ico`;
-- Crear la base de datos
CREATE SCHEMA IF NOT EXISTS `Ico` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

use `Ico`; 

DROP TABLE IF EXISTS `Ico`;
CREATE TABLE `alumno`(
    `no_cuenta` int(9) not null,
    `nombre` varchar(40) not null,
    `apellido` varchar(20) not null
    `direccion` text not null,
    `telefono` varchar(10) not null,
    `email` text not null,
    `contraseña` varchar(10) not null,
    `fecha_registro` datetime not null default current_timestamp,
    );
    
    ALTER TABLE alumno ADD PRIMARY KEY (`no_cuenta`);