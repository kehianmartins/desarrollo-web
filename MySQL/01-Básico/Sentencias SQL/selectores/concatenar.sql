
-- Concatenar Columnas

-- En reservaciones el nombre y apellido están el columnas separadas

SELECT CONCAT(nombre, ' ', apellido) AS nombreCompleto FROM reservaciones;
-- concatena un nombre, un espacio y el appelido: "'Kehian'' ''Martins'"