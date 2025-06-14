
-- COUNT

/* Cuantos registros hay */

-- Muestra los dias que más citas hay
-- group by: agrupa por una columna
SELECT COUNT(id), fecha FROM reservaciones 
    GROUP BY fecha -- agrupa los id con fechas comunes
    ORDER BY COUNT(id) DESC; -- ordena de mayor a menor