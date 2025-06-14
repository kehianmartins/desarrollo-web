const empleados = ["Juan", "Maria", "Jose"];

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

// forEach
carrito.forEach( producto => {
    console.log(producto);
    
});

carrito.forEach( mes => {
    if (mes == 'Jose') {
        console.log('Jose existe.');
    }
});


// Includes (arreglo normal)
let resultado = empleados.includes("Juan"); // True

const resultado2 = carrito.includes("Laptop"); // False, no sirve en obj


// Some (ideal para arreglo de obj)
resultado = carrito.some(producto => producto.nombre === 'Celular');

console.log(resultado);


// Reduce
resultado = carrito.reduce( (total, producto) => total + producto.precio, 0);


// Filter
resultado = carrito.filter( producto => producto.precio > 400);