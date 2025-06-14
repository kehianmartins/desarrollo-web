
-- Buscar rangos de precio

-- mayores de 90
SELECT * FROM servicios WHERE precio > 90;


-- mayores e iguales a 80
SELECT * FROM servicios WHERE precio >= 80;


-- entre 100 y 200
SELECT * FROM servicios WHERE precio BETWEEN 100 AND 200;
