
// Aynsc / await

function descargarNuevosClientes() {
    return new Promise( resolve => {
        console.log('Descargando clientes... espere...');
        
        setTimeout( () => {
            resolve('Los clientes fueron cargados')
        }, 5000)
    })
}

async function app() {
    try {
        const resultado = await descargarNuevosClientes();
        console.log(resultado);
        
    } catch (error) {
        console.log(error);
    }
}

app();

console.log('La ejecución sigue.'); 

// El async-await hace que la función app() se esté ejecutando, pero
// a la vez la ejecución de resto del código sigue.



// setTimeout( function() {
//     console.log('se esperaron 5 segundos...');
// }, 5000) // en ms

// setInterval( function() {
//     console.log('se repite cada 3 segundos, es un intervalo');
// }, 3000) // e ms