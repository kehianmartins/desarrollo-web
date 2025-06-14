
-- UPDATE

/* Actualizar datos */

UPDATE servicios SET precio = 70 WHERE id = 2;
UPDATE servicios SET nombre = "Peinado Actualizado" WHERE id = 4;

UPDATE servicios SET precio = 70 WHERE nombre = "Peinado hombre";

-- Actualizar más de una columna a la vez

UPDATE servicios SET nombre = "Corte actualizado", precio = 130 WHERE id = 1;