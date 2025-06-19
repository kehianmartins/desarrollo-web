
-- Una tabla pivote es una tabla intermedia en una relación entre dos tablas

CREATE TABLE citasServicios (
    id INT(11) AUTO_INCREMENT,
    citaId INT(11) NOT NULL,
    servicioId INT(11) NOT NULL,
    PRIMARY KEY (id),
    -- fk citas
    KEY citaId (citaId),
    CONSTRAINT citas_FK
    FOREIGN KEY (citaId)
    REFERENCES citas (id),
    -- fk servicios
    KEY servicioId (servicioId),
    CONSTRAINT servicios_FK
    FOREIGN KEY (servicioId)
    REFERENCES servicios (id)
);

INSERT INTO citasServicios ( citaId, servicioId ) VALUES(2, 4);

-- Para insertar más de un servicio a una cita, se vuelve a aplicar a la cita 2, pero con los servicios que se necesiten

INSERT INTO citasServicios ( citaId, servicioId ) VALUES(2, 2);
INSERT INTO citasServicios ( citaId, servicioId ) VALUES(2, 3);
INSERT INTO citasServicios ( citaId, servicioId ) VALUES(2, 7);
-- Por lo que se crea una tupla para cada servicio que se solicitó en la cita 2.
-- Esto se hace por la normalización, donde debe haber un valor en cada cuadro de la tabla.