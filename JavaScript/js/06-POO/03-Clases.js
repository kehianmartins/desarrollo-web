
// Clases

class Producto {

    constructor(nombre, precio) {
        this.nombre = nombre;
        this.precio = precio;
    }

    formatearProducto() {
        return `El producto ${this.nombre} vale $${this.precio}`;
    }

    obtenerPrecio() {
        return this.precio;
    }
}

const producto = new Producto('Tablet', 500);