
async function obtenerEmpleados() {
    
    const archivo = 'js/08-Fetch-API/empleados.json'
    
    // fetch(archivo)
    //     .then( resultado => resultado.json()) // resultado estandar de la API
    //     .then( datos => {
    
    //         const { empleados } = datos;
    //         // console.log(empleados);
            
    //         empleados.forEach( empleado => {
    //             console.log(empleado.id);
    //             console.log(empleado.nombre);
    //             console.log(empleado.puesto);

    //         });
    //     })

    const resultado = await fetch(archivo);
    const datos = await resultado.json;

    const { empleados } = datos;

    empleados.forEach( empleado => {
        console.log(empleado.id);
        console.log(empleado.nombre);
        console.log(empleado.puesto);
    });
}

obtenerEmpleados();