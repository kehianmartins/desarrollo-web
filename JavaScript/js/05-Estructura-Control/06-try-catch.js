
// Try-catch

const numero1 = 20;
const numero3 = 30;

try {
    console.log(numero2); // no existe, lanza error
} catch (error) {
    console.log(error); // 'agarra' el error
} finally {
    console.log('Este código siempre se ejecutra');
    
}

console.log(numero3); // y sigue la ejecución
