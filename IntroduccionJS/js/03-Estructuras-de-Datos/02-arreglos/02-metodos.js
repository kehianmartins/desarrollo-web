// Métodos de arrays

const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];


// .length
// El largo del array
console.log(meses.length); // 12

// .forEach
// Iterar sobre cada item del arreglo
meses.forEach( (mes) => {
    console.log(mes);
});



const empleados = ["Juan", "Maria", "Jose"];


// .push y .unshift
// Agregar elementos a un arreglo

// Forma no convencional
empleados[4] = "Eduardo"; // Al no existir el índice 4, lo agrega con el elemento "Eduardo"

// Mejor forma
empleados.push("Alexander"); // Agrega un nuevo elemento al final
empleados.unshift("Victor"); // Agrega un elemento al inicio de arreglo
// -> hoy en día no se recomienda modificar los arreglos originales

// .pop
// Eliminar un elemento

empleados.pop(); // Elimina el último elemento
empleados.shift(); // Elimina el primer elemento

empleados.splice(2, 1); // Avanza hasta el segundo valor ('2') y elimina siguiente ('1')

// -> desventajas: modiica el array original
