

-- RIGHT JOIN (o RIGHT OUTER JOIN)
-- Devuelve todas las filas de la tabla izquierda, y las coincidencias de la tabla derecha.

SELECT * FROM citas
RIGHT JOIN clientes ON clientes.id = citas.clienteId