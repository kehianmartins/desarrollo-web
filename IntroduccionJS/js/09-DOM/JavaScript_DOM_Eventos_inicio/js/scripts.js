
// querySelector

const heading = document.querySelector('.header__texto h2'); // 0 o 1 elemento

heading.textContent = "Blog del café"
console.log(heading);

// querySelectorAll

const enlaces = document.querySelectorAll('.navegacion a');
enlaces[0].textContent = 'Nosotros!'
enlaces[0].classList.add('nueva-clase');
enlaces[0].classList.remove('nueva-clase');

// getElementById

const heading2 = document.getElementById(heading);

// Generar un nuevo enlace

const nuevoEnlace = document.createElement('A');

// Agregar href
nuevoEnlace.href = 'nuevo-enlace.html';

// Agregar texto
nuevoEnlace.textContent = 'Productos';

// Agregar la clase
nuevoEnlace.classList.add('navegacion__enlace');

console.log(nuevoEnlace)

const navegacion = document.querySelector('.navegacion');

navegacion.appendChild(nuevoEnlace);


// -- Eventos --

// window.addEventListener('load', () => {
//     alert('ventana cargada')
// });

// se ejecuta primero el dom
// document.addEventListener('DOMContentLoaded', () => {
//     alert('documento cargado')
// });

// click

Notification.requestPermission();

const btnEnviar = document.querySelector('.boton--primario');

btnEnviar.addEventListener('click', (evento) => {
    evento.preventDefault();
    new Notification('Esta es una notificación', {
        icon: '~/Descargas/utu',
        body: 'Formulario enviado'
    })
})


const nombre = document.querySelector('#nombre');

nombre.addEventListener('input', imprimirLargoValor);

function imprimirLargoValor(evt) {
    let largo = this.textLength;
    let cont = evt.target.value;
    console.log(`largo: ${largo}, cont: ${cont}`);
}


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

// evento de submit

const form = document.querySelector('.formulario');

// Es buena práctica utilizar un submit cuando se maneja un formulario
form.addEventListener('submit', (evt) => {
    evt.preventDefault;

    console.log('Enviando formulario')
})