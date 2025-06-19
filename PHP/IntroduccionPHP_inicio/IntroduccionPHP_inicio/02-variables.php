<?php include 'includes/header.php';

// variables
$nombre = "Juan";
$edad = 18;

echo $nombre;

var_dump($nombre);


// constantes

define("constante", "este es el valor de la constante"); // no se crea una variable en si

echo constante;

const constante2 = "Hola 2"; // no se utiliza tanto

include 'includes/footer.php';