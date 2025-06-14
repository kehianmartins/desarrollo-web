
// For

// Se usa cuando se sabe el número de iteraciones

for ( let i = 0; i < 11; i++) {
    console.log(i);
}

for ( let i = 0; i <= 10; i++) {
    if (i % 2 === 0) {
        console.log(`El Número ${i} es PAR`);
    } else {
        console.log(`El Número ${i} es IMPAR`);
    }
}


// Ejemplo de objetos

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

for (let i = 0; carrito.length; i++) {
    console.log(carrito[i]);
}

// Recorre el Array
for (const producto of carrito) {
    console.log(producto);
    
}
