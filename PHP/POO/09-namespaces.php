<?php include 'includes/header.php';


use App\Cliente;
use App\Detalles;

function mi_autoload($clase) {
    // Separa un string entre un separador, en este caso '\' (se debe poner dos veces porque el \ sirve para escapar de la comilla)
    $partes = explode('\\', $clase);
    // Los separa en un array, donde quedara en el [0] = 'App', y [1] = '<clase>'
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}

spl_autoload_register('mi_autoload');


// Con los namespaces colocados en las clases, debemos indicarle al autoload que 
// ahora las clases se encuentran en 'App\<clase>'.

// $detalle = new App\Detalles();
// $cliente = new App\Cliente();

// Al colocar 'use' con el namepspace y la clase a utilizar, podemos eliminar el 'App\' cuando creemos una nueva instancia
$detalle = new Detalles();
$cliente = new Cliente();

include 'includes/footer.php';