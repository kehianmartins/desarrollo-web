
-- Select

SELECT * FROM servicios;

-- * muestra todo

SELECT nombre FROM servicios;
SELECT precio FROM servicios;
SELECT id FROM servicios;

SELECT id, nombre FROM servicios;
SELECT id, nombre, precio FROM servicios;

-- Seleccionar registro específico
SELECT id, nombre, precio FROM servicios WHERE id = 3;
/* Muestra el registro con el id 3*/

-- LIMIT
/* Muestra una cantidad limitada de resgistros */
SELECT id, nombre, precio FROM servicios LIMIT 2;


-- ORDER BY

-- Muestra de menor a mayor.
SELECT id, nombres, precio FROM servicios ORDER BY precio;
SELECT id, nombres, precio FROM servicios ORDER BY precio ASC; -- ascendente

-- Muestra de mayor a menor
SELECT id, nombres, precio FROM servicios ORDER BY precio DESC; -- ascendente

