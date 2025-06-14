
// Tipos de funciones

// Asignadas a una variable:

sumar1(); // Funciona, por el hoisting

function sumar1 (a, b) {
    return a + b;
}

sumar2(); // Error, porque la constante aún no está inicializada

const sumar2 = function(a, b) {
    return a + b;
};

/**
 * Hoisting:
 * 
 * Es un comportamiento del motor del lenguaje que mueve las
 * declaraciones al inicio de ámbito. Se eleva:
 * 
 * - Declaraciones de variables (var): solo la declaración, no la inicialización.
 * 
 * - Declaraciones de funciones (function).
 * 
 * - No se aplica igual a let, const ni a funciones flecha (=>).
 */