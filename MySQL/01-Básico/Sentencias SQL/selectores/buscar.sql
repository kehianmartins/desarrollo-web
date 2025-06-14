
-- Búsquedas en SQL

-- busca todos los nombres que contengan "corte" al inicio
SELECT * FROM servicios WHERE nombre LIKE "Corte%"; 
-- el % al final indica que la palabra que buscamos inicia con la palabra "corte"

-- busca todos los nombres que contengan "pelo" al final
SELECT * FROM servicios WHERE nombre LIKE "%pelo";
-- el % al inicio indica que la palabra que buscamos inicia con la palabra "corte"

-- busca todos los nombres que contengan "pelo"
SELECT * FROM servicios WHERE nombre LIKE "%pelo%";
-- el % al inicio y al final indica que la palabra que buscamos está en el nombre


-- Busca, en la concatenación, el cliente "Ana Preciado"
SELECT * FROM reservaciones WHERE CONCAT(nombre, " ", apellido) LIKE "%Ana Preciado%";

-- Buscar con un "alias" (se crea otra tabla)
-- donde muestra la hora, fecha, y el nombre completo concatenado
SELECT hora, fecha, CONCAT(nombre, " ", apellido) AS "Nombre Completo"
    FROM reservaciones
    WHERE CONCAT(nombre, " ", apellido)
    LIKE "%Ana Preciado%";



