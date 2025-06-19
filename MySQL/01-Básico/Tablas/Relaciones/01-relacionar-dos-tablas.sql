
-- Relacionar dos tablas

/*
CREATE TABLE clientes (
    id INT(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    apellido VARCHAR(20) NOT NULL,
    telefono VARCHAR(9) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    PRIMARY KEY (id)
);
*/

CREATE Citas (
    id INT(11) NOT NULL AUTO_INCREMENT,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    clienteId INT(11) NOT NULL,
    PRIMARY KEY (id),
    -- colocar la FK
    KEY cienteId (clienteId),
    CONSTRAINT cliente_FK 
    FOREIGN KEY (clienteId)
    REFERENCES clientes (id)
);

-- ejemplo de insert
INSERT INTO Citas ( fecha, hora, clienteId ) VALUES
    ('2025-06-19', '19:20:00', 1)