
CREATE DATABASE appsalon;

USE appsalon;

-- Después de crear la BD

CREATE TABLE servicios (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(60) NOT NULL,
    precio DECIMAL(6,2) NOT NULL -- numeros como: 1000.00
    PRIMARY KEY (id)
);