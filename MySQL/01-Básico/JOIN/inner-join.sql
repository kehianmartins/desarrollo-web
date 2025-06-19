
-- INNER JOIN
-- Devuelve solo las filas que tienen coincidencias en ambas tablas.

SELECT * FROM citas
INNER JOIN clientes ON clientes.id = citas.clienteId