
// Prototipos
// Nos permite crear funciones que solo se utilizan en un objeto específico

function Producto(nombre, precio) {
    this.nombre = nombre;
    this.precio = precio;
}

// Solamente asociado a Producto
Producto.prototype.formatearProducto = function() {
    return `El producto ${producto.nombre} tiene un precio de $${producto.precio}`;
}

Producto.prototype.obtenerPrecio = function() {
    return `El precio es de ${this.precio}`;
}

// Se puede utilizar en otros objetos, es una función
function formatearProducto(producto) {
    return `El producto ${producto.nombre} tiene un precio de $${producto.precio}`;
}

// Evita que las funciones de estos se utilicen en otros obj

const producto = new Producto('Celular', 300);

console.log(producto.formatearProducto());


