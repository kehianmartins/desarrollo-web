
// This

// This es una palabra reservada que hace referencia al objeto mismo.

const reservacion = {
    nombre: 'Juan',
    apellido: 'De la Torre',
    total: 5000,
    pagado: false,
    informacion: function() {
        console.log(`-- Reservación --
                     \n- Cliente: ${this.nombre}
                     \n- Total: ${this.total}`);
    }
}

// No puede ser un arrow function porque el arrow function
// hace referencia a la ventana global. Va a marcar las variables
// como 'undefined'.

console.log(reservacion.nombre);

