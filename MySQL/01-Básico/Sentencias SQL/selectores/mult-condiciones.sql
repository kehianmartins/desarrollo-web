
-- Buscar por múltiples registros a la vez

-- muestra los registros con las id 1 y 3
SELECT * FROM reservaciones WHERE Id IN(1,3);

-- evlua dos condiciones, fecha e id.
SELECT * FROM reservaciones WHERE fecha = "2021-06-28" AND id = 1;