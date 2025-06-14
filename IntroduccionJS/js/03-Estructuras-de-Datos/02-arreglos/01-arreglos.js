// Arreglos o arrays

const numeros = [10, 20, 30, 40, 50];
console.table(numeros); // Formatea en una tabla el arreglo para hacerlo más facil de ver

const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
console.table(meses);

const arreglo = ["Hola", 1, false, null, "si", true, 1.2]; // se pueden poner todo tipo de datos

console.log(meses[1]); // Febrero


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

resultado = carrito.filter( producto => producto.precio > 400);