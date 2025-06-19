<?php 
declare(strict_types=1); // hace que los tipos de dato deban ser estrictos, no se puede ingresar un
                         // parámetro de string donde requiera un integer
include 'includes/header.php';


// Coloca valores por default
// Colocando el tipo de dato se asegura que debe ser de tipo entero
function sumar(int $numero1 = 0, int $numero2 = 0) {
    echo $numero1 + $numero2;
}

sumar(10, 20);



include 'includes/footer.php';