
// if-else

const puntaje = 1000;

if(puntaje === 1000) {
    console.log(('El puntaje es 1000'));
} else {
    console.log('El puntaje no es 1000');
}

// Existen dos operadores de igualdad:

// '==': compara dos datos, sin importar el tipo
// '===': compara dos datos, y deben coincidir incluso os tipos

// Al igual que la negación

// '!=': compara dos datos, sin importar el tipo
// '!==': compara dos datos, y deben coincidir incluso os tipos

// Se puede usar

// < o >
// <= o >=
// && (AND)
// || (OR)

// -- Ejemplo --

const rol = 'ADMINISTRADOR';

if  (rol === 'ADMINISTRADOR') {
    console.log('Acceso a todo el sistema');
} else if (rol === 'EDITOR') {
    console.log('Acceso a la edición');
} else {
    console.log('No tienes acceso');
}