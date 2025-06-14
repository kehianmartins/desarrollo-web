// Métodos de objetos

const producto = {
    nombre : "Monitor de 20 Pulgadas",
    precio : 300,
    disponible : true
};


// .freeze
// 'Congelar' un obj. Hacer que no se pueda modificar el contenido

Object.freeze(producto); 

console.log(Object.isFrozen(producto));


producto.imagen = "imagen.jpg"; // No hace nada, no se puede agregar ni eliminar propiedades

// .seal
// 'Congelar' un obj. A diferencia del 'freeze', este si permite la modificación
// de propiedades ya existentes.






