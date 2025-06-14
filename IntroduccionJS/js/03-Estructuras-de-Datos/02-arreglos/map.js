
// map

const carrito = [
    { nombre:'Monitor 20 Pulgadas', precio: 500},
    { nombre:'Televisión 50 Pulgadas', precio: 500 },
    { nombre:'Tablet', precio: 300},
    { nombre:'Audifonos', precio: 150},
    { nombre:'Teclado', precio: 50},
    { nombre:'Celular', precio: 500},
    { nombre:'Parlante', precio: 300},
    { nombre:'Laptop', precio: 800},
];

// .map: sirve para crear nuevos arreglos mapeando otros
const nomProductos = carrito.map( producto => producto.nombre);

// Ejemplo formateado
const nomProductosFormateado = carrito.map( producto => `${producto.nombre} - ${producto.precio}`);