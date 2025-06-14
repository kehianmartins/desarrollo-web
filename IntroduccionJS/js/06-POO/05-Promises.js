
// Promises (promesas)
// En un promise se pasan dos parámetros:
// resolve y reject, ambos son funciones

// resolve se ejecutra cuando el promise se cumple.

// reject se ejecuta cuando no se cumple.

const usuarioAutenticado = new Promise( (resolve, reject) => {
    const auth = true;

    if(auth) {
        resolve('Usuario autenticado');
    } else {
        reject('No se pudo iniciar sesión');
    }
});


console.log(usuarioAutenticado); // devuelve {fullfilled, 'Usuario Autenticado'}

// Acceder a los valores de Promse
usuarioAutenticado
    // se ejecuta desde el Promise
    .then( resultado => console.log(resultado))
    // devuelve el resultado cuando es resolve.

    // El rejected funciona como excepción, así que se debe usar catch
    .catch( error => console.log(error));


// En los Promises existen 3 valores
// Pending : No se ha cumplido pero tampoco se ha rechazado, pendiente.
// Fullfilled : Ya se cumplió.
// Rejected : Se ha rechazado. No se cumplió.