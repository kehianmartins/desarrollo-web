
-- CHANGE

/* Modificar una columna*/

/*                                    (nuevonombre)*/
ALTER TABLE servicios CHANGE descripcion notas;

/* No se puede cambiar el tipo de dato, pero si su longitud (salvo que sean compatibles)*/

ALTER TABLE servicios CHANGE notas descripcion VARCHAR(200) NOT NULL;