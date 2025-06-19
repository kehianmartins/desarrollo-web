<?php include 'includes/header.php';

$carrito = ["Tablet", "Television", "Computadora"];


// Buscar si existe un elemento
// - in_array() -----------------------------------
var_dump( in_array("Tabet", $carrito) ); // trie
var_dump( in_array("Audifonos", $carrito) ); // false


// Ordenar elementos de un arreglo
// - sort() ---------------------------------------

$numeros = [1, 3, 4, 7, 2, 9, 5];

sort($numeros);  // de menor a mayor
rsort($numeros); // de mayor a menor


echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar array asosiativo
// - sort ---------------------------------------

$cliente = [
    "nombre" => "Kehian",
    "tipo" => "Premium",
    "saldo" => 200
];

asort($cliente); // ordena por valores, numeros > strings (en orden alfabetico)
arsort($cliente); // ordena por valores, numeros > strings (en orden alfabetico), pero al revés

ksort($cliente); // ordena por llaves, nombre > saldo > tipo (en orden alfabetico)
krsort($cliente); // ordena por llaves, nombre > saldo > tipo (en orden alfabetico), pero al revés

echo "<pre>";
var_dump($cliente);
echo "</pre>";

// Cantidad de espacios
// - count ---------------------------------------

echo sizeof($numeros); // 7

include 'includes/footer.php';