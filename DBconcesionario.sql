-- Estructura de tabla para la tabla `concesionario`
DROP TABLE `coche`;
DROP TABLE `clientes`;
DROP TABLE `encargos`;


CREATE TABLE `coche` (
  `idcoche` INT(10) NOT NULL AUTO_INCREMENT,
  `modelo` VARCHAR(100),
  `marca` VARCHAR(50),
  `precio` INT(20),
  `stock` INT(20),
  PRIMARY KEY (`idcoche`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `clientes` (
  `idcliente` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `ciudad` VARCHAR(100) NOT NULL,
  `gestado` FLOAT(50,2) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `encargos` (
  `idencargos` int(10) NOT NULL AUTO_INCREMENT,
  `idcoche` int(10),
  `idcliente` int(10),
  `cantidad` int(20),
  `fecha` date,
  PRIMARY KEY (`idencargos`),
  FOREIGN KEY (`idcoche`) REFERENCES `coche`(`idcoche`),
  FOREIGN KEY (`idcliente`) REFERENCES `clientes`(`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

