
const nombreProducto = "Monitor 20 Pulgadas";
const precio = 300;
const disponible = true;

const producto = {
    nombre : "Monitor de 20 Pulgadas",
    precio : 300,
    disponible : true
};

// Acceder a propiedades del obj

console.log(producto.nombre); // Monitor de 20 Pulgadas
console.log(producto.precio); // 300
console.log(producto.disponible); // true

// también se puede acceder de forma:

console.log(producto["precio"]);

// Agregar propiedades
producto.imagen = "imagen.jpg";

// Eliminar propiedades
delete producto.disponible;
