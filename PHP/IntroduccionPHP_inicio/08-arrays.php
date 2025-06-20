<?php include 'includes/header.php';

// Arrays

$carrito = ["Tablet", "Television", "Computadora"];
$clientes = array("Juan", "Carlos", "Eduardo"); // forma dos de crear array, mas utilizada en wordpress

echo "<pre>"; // formatea mejor el var_dump
var_dump($carrito);
echo "</pre>";


// Acceder a un elemento de un array
echo $carrito[1]; // "Tablet"

// Añadir elementos
$carrito[3] = "Tostadora";

// Añade un elemento al inicio
array_unshift($carrito, "Smartwatch");

// Añade un elemento al final
array_push($carrito, "Audifonos");

include 'includes/footer.php';