
-- Numeros y Enteros

INT --       -2100 millones a 2100 millones | UNSIGNED: 0 a 4200+ millones
TINYINT --   -128 a 127                     | UNSIGNED: 0 a 255
SMALLINT --  -32.768 A 32.767               | UNSIGNED: 0 a 65.535
MEDIUMINT -- -8.3 millones a 8.3 millones   | UNSIGNED: 0 a 16.7 millones
BIGINT --    -2⁶³ a 2⁶³-1                   | UNSIGNED: 0 a 2⁶⁴-1


-- Numeros con decimales

FLOAT -- decimales
DOUBLE -- decimales muy grandes
DECIMAL -- valores donde no se acepta redondos (ej: dinero)


-- Texto y Datos Binarios

VARCHAR -- texto corto o que varía en su extensión (255 caracteres)
CHAR    -- texto corto, de extesión fija
TEXT    -- texto largo
ENUM    -- una lista enumerada, valores que definimos
BLOB    -- imagenes, sonidos y archivos comprimidos


-- Fecha y Hora

DATE      -- AAAA-MM-DD
TIME      -- hh:mm:ss
DATETIME  -- AAAA-MM-DD hh:mm:ss
TIMESTAMP -- AAAA-MM-DD hh:mm:ss
YEAR      -- AAAA