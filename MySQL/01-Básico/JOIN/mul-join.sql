
-- Múltiples JOINS

SELECT * FROM citasServicios
LEFT JOIN citas ON citas.id = citasServicios.citaId
LEFT JOIN clientes ON citas.clienteId = clientes.id
LEFT JOIN servicios ON servicios.id = citasServicios.servicioId;