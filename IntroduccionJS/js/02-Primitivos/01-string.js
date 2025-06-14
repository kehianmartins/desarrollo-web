// String o cadenas de texto

const producto = "Monitor de 20 pulgadas";
const producto1 = "Monitor de 27\""
const producto2 = 'Monito de 20"'
const prodcuto3 = String('Monitor de 30 pulgadas'); // No se usan
const producto4 = new String('Monitor de 50 pulgadas'); // No se usan

// Lenght 
let largo_string = producto.length; // 4

// IndexOf: Retorna posición
let buscarElemento = producto.indexOf('pulgadas'); // 3

// Includes: Retorna true o false
let buscarElemento1 = producto.includes('20'); // true


/** 
 * Concatenación
*/


const nombre = 'Juan';
const email = 'correo@correo.com';

// Concatenación
console.log(nombre + " " + email);
console.log(nombre, " ", email);

// Template Strings (template = plantillas)
console.log(`Nombre Cliente: ${nombre}, Email: ${email}`);
