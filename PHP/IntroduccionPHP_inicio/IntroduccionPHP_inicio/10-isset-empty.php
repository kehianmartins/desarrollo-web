<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Kehian",
    "tipo" => "admin",
    "saldo" => 200
];
$clientes1 = [];
$clientes2 = array();
$clientes3 = array("Juan", "Pedro", "Carlos");

// Empty
// - Evalúa si el array está vacío
var_dump( empty($clientes1) ); // true
var_dump( empty($clientes2) ); // true
var_dump( empty($clientes3) ); // false

// Isset
// - Revisar si un arreglo esta creado o una propiedad está definida
var_dump( isset($clientes4) ); // false
var_dump( isset($clientes1) ); // true
var_dump( isset($clientes2) ); // false
var_dump( isset($clientes3) ); // false

// verificar propiedad
var_dump( $cliente["nombre"] ); // true
var_dump( $cliente["codigo"] ); // false

// verificar si un índice existe
var_dump( $clientes3[100] ); // false

include 'includes/footer.php';