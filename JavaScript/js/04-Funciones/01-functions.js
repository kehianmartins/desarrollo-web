
// Declaración de Función

function sumar() {
    console.log(10 * 10);
}

function sumar1() {
    return 10 * 10;
}

function sumar2(a, b) {
    return a + b;
}

const sumarConst = function() {
    console.log(2 + 2);
};

// Las funciones asignadas a variables deben tener ";"

// IIFE
(function(){
    console.log('Esto se ejecuta automaticamente');
})();

// Las IIFE sirven para limitar el acceso de variables
// desde otros archivos.

// Por ejemplo, accediendo a la variable 'contrasena' de otro-archivo.js

console.log(contrasena);

// Devuelve 12345678