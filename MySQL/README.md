# Curso de SQL con MySQL

Este repositorio contiene una colección de archivos organizados por temas fundamentales para aprender SQL utilizando MySQL. Está dividido en dos grandes módulos: conceptos básicos y normalización.

## 📁 Estructura

### `01-Básico/`

Contiene los fundamentos esenciales de SQL divididos en subtemas:

#### 🔹 Base de Datos
- [`01-create.sql`](01-Básico/Base%20de%20Datos/01-create.sql): Crear una base de datos.
- [`02-show.sql`](01-Básico/Base%20de%20Datos/02-show.sql): Mostrar bases de datos existentes.

#### 🔹 Tablas
- [`01-create.sql`](01-Básico/Tablas/01-create.sql): Crear tablas.
- [`02-drop.sql`](01-Básico/Tablas/02-drop.sql): Eliminar tablas.

##### ▸ Modificar Tablas
- [`add.sql`](01-Básico/Tablas/Modificar%20Tablas/add.sql): Agregar columnas.
- [`change.sql`](01-Básico/Tablas/Modificar%20Tablas/change.sql): Cambiar tipo de dato o nombre.
- [`drop.sql`](01-Básico/Tablas/Modificar%20Tablas/drop.sql): Eliminar columnas.

##### ▸ Relaciones
- [`01-relacionar-dos-tablas.sql`](01-Básico/Tablas/Relaciones/01-relacionar-dos-tablas.sql): Relaciones simples 1:N o N:M.
- [`02-tabla-pivote.sql`](01-Básico/Tablas/Relaciones/02-tabla-pivote.sql): Uso de tabla intermedia para relaciones N:M.

#### 🔹 Sentencias SQL
- [`inser-into.sql`](01-Básico/Sentencias%20SQL/inser-into.sql): Insertar datos.
- [`(insertar-muchos-datos).sql`](01-Básico/Sentencias%20SQL/(insertar-muchos-datos).sql): Insertar múltiples filas.
- [`select.sql`](01-Básico/Sentencias%20SQL/select.sql): Seleccionar datos.
- [`update.sql`](01-Básico/Sentencias%20SQL/update.sql): Actualizar registros.
- [`delete.sql`](01-Básico/Sentencias%20SQL/delete.sql): Eliminar registros.
- [`buscar-rango.sql`](01-Básico/Sentencias%20SQL/buscar-rango.sql): Filtrar con rangos.
- [`tipos-de-datos.sql`](01-Básico/Sentencias%20SQL/tipos-de-datos.sql): Tipos de datos comunes en MySQL.

##### ▸ Selectores
- [`buscar.sql`](01-Básico/Sentencias%20SQL/selectores/buscar.sql): Búsqueda con `WHERE`.
- [`concatenar.sql`](01-Básico/Sentencias%20SQL/selectores/concatenar.sql): Concatenar columnas.
- [`count.sql`](01-Básico/Sentencias%20SQL/selectores/count.sql): Contar registros.
- [`min-max.sql`](01-Básico/Sentencias%20SQL/selectores/min-max.sql): Mínimo y máximo.
- [`mult-condiciones.sql`](01-Básico/Sentencias%20SQL/selectores/mult-condiciones.sql): Condiciones múltiples (`AND`, `OR`).
- [`sum.sql`](01-Básico/Sentencias%20SQL/selectores/sum.sql): Sumar valores.

#### 🔹 JOIN
- [`inner-join.sql`](01-Básico/JOIN/inner-join.sql): INNER JOIN.
- [`left-join.sql`](01-Básico/JOIN/left-join.sql): LEFT JOIN.
- [`right-join.sql`](01-Básico/JOIN/right-join.sql): RIGHT JOIN.
- [`mul-join.sql`](01-Básico/JOIN/mul-join.sql): JOIN con más de dos tablas.
- [`mas-tablas.sql`](01-Básico/JOIN/mas-tablas.sql): Casos avanzados con múltiples tablas.

---

### `02-Normalización/`

#### 📄 Documentación
- [`26-Normalización.pdf`](02-Normalización/26-Normalización.pdf): Explicación teórica del proceso de normalización.

#### 💾 Ejemplo
- [`normalizado.sql`](02-Normalización/normalizado.sql): Script SQL con tablas ya normalizadas.

---

## 🧠 Recomendaciones

- Ejecuta los scripts paso a paso para comprender mejor cómo funciona cada operación.
- Acompaña la práctica con diagramas entidad-relación si estás trabajando con relaciones.
- Usa un entorno como **MySQL Workbench**, **DBeaver** o **phpMyAdmin** para visualizar los resultados.

---
