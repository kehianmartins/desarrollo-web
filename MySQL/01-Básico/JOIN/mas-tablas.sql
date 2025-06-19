
-- Hacer JOIN a 2 o más tablas

SELECT * FROM citasServicios
LEFT JOIN citas ON citas.id = citasServicios.citaId
LEFT JOIN servicios ON servicio.id = citasServicios.servicioId;