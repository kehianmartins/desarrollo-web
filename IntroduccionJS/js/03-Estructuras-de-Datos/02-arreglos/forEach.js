
// forEach

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

// Sirve para iterar sobre un arreglo
carrito.forEach( producto => console.log(producto));