
// Herencia

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

// Hereda nombre y precio de Producto, Libro es un producto

class Libro extends Producto{

    constructor(nombre, precio, isbn) {
        super(nombre, precio);
        this.isbn = isbn;
    }

    formatearProducto() {
        // Concatena la cadena retornada por la función de la clase padre Prodcuto
        // .formatearProducto con el nuevo return con el ISBN agregado.
        return `${super.formatearProducto()}y su ISBN es: ${this.isbn}`;
    }
}

const producto = new Producto('Tablet', 500);
const libro = new Libro('JavaScript la Revolución', 120, '3984923894283');

console.log(producto.formatearProducto());
console.log(libro.formatearProducto());
