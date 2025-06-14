
// Constructor de objeto

// Objeto Literal
const producto = {
    nombre: 'Tablet',
    precio: 500
};


// Objeto Constructor

function Producto(nombre, precio) {
    this.nombre = nombre;
    this.precio = precio;
}


const producto2 = new Producto('Monitor de 20 Pulgadas', 600);
const producto3 = new Producto('Laptop', 300);

function formatearProducto(producto) {
    return `El producto ${producto.nombre} tiene un precio de $${producto.precio}`
}