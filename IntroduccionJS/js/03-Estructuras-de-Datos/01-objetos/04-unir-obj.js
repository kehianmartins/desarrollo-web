const producto = {
    nombre : "Monitor de 20 Pulgadas",
    precio : 300,
    disponible : true
};

const medidas = {
    peso : "1kg",
    tamaño : "1m"
};

// Es una buena práctica no modificar los obj ya existentes

const nuevoProducto = {...producto, ...medidas}; // unir dos objetos