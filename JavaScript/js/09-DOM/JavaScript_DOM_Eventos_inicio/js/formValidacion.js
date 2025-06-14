
// Validación del formulario
const form = document.querySelector('.formulario');
const nombre = document.querySelector('#nombre');
const email = document.querySelector('#email');
const mensaje = document.querySelector('#mensaje');

const datos = {
    nombre: '',
    email: '',
    mensaje: ''
};

/**
 * 
 * Función que lee los datos de la entrada
 * del formulario.
 * 
 * @param {*} evt evento que se le asignará 
 */
function leerDatos(evt) {
    // Llenar datos
    datos[evt.target.id] = evt.target.value
    // recibe la id, ya que tienen el mismo nombres que las propiedades del objeto


}


form.addEventListener('submit', (evt) => {
    evt.preventDefault();


    const { nombre, email, mensaje} = datos;

    if(nombre === '' || email === '' || mensaje === '') {
        mostrarAlerta('Todos los campos son obligatorios', true);
        return;
    }

    mostrarAlerta('Formulario enviado con éxito');
})

function mostrarAlerta(msj, error = null) {
    const alerta = document.createElement('P');
    alerta.textContent = msj;

    if(error) {
        alerta.classList.add('error');
    } else {
        alerta.classList.add('correcto');
    }

    form.appendChild(alerta);

    // form.reset();
    setTimeout(() => {
        alerta.remove();
    }, 3000);
}

nombre.addEventListener('input', leerDatos);
email.addEventListener('input', leerDatos);
mensaje.addEventListener('input', leerDatos);