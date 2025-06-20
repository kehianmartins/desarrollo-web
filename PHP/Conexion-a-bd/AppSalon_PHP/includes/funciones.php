
<?php

function obtener_servicios() {
    try {
        // Importar las credenciales
        require 'includes/database.php';


        // Consulta SQL
        $sql = "SELECT * FROM servicios";

        // Realizar la consulta
        $consulta = mysqli_query($db, $sql);

        // Acceder a los resultados
        // echo '<pre>';
        // var_dump( mysqli_fetch_assoc($consulta) );
        // echo '</pre>';

        // fetch_all: muestra todos los resultados

        return $consulta; // la retorna para utilziarla en el index.php

        // Cerrar la conexión
        $closing = mysqli_close($db);
        // devuelve 1 si se cerro, 0 si no
        // es opcional porque si php termina de leer el archivo
        // y hay una conexión a una bd abierta, automaticamente la cierra
    } catch (\Throwable $th){
        var_dump($th);
    }
}