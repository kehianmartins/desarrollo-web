<?php 
declare(strict_types=1);
include 'includes/header.php';


function sumar(int $numero1 = 0, int $numero2 = 0) {
    echo $numero1 + $numero2;
}

// Se especifica a qué parámetro se le pasa el valor
// se le llama -parámetro nombrado-
sumar(numero2: 10, numero1: 20);



include 'includes/footer.php';