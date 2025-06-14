const producto = {
    nombre : "Monitor de 20 Pulgadas",
    precio : 300,
    disponible : true
};

// Forma anterior
const precioProducto = producto.precio;
const nombreProducto = producto.nombreProducto;

// Destructuring
// const {precio} = producto; // Extrae la propiedad 'precio'
// const {nombre} = producto; // Extrae la propiedad 'nombre'

const {nombre, precio} = producto; // Extrae las propiedades 'nombre' y 'precio'

console.log(nombre, precio);
