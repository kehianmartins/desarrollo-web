<?php include 'includes/header.php';

$nombre_cliente = "Kehian Martins ";

// Longitud
// -----------------------------------
echo strlen($nombre_cliente); // 15


// Eliminar espacios en blanco
// -----------------------------------
$texto_sin_espacios = trim($nombre_cliente); 

echo $texto_sin_espacios; // 14 caracteres


// Convertir a mayusculas
// -----------------------------------
$mayusculas = strtoupper($nombre_cliente); 

echo $mayusculas;

// Convertir a minisculas
// -----------------------------------
$minusculas = strtolower($nombre_cliente);

echo $minusculas;


// Remplazar
// -----------------------------------
$remplazar = str_replace("Kehian", "K.", $nombre_cliente);

echo $remplazar; // K. Martins

// Buscar string
// -----------------------------------
$buscar_posicion = strpos($nombre_cliente, "Martins");

echo $buscar_posicion;


// Concatenar
// -----------------------------------
$tipo_cliente = "Premium";

// 1)
echo "El cliente " . $nombre_cliente . " es " . $tipo_cliente; // se concatena con un "."

// 2)
echo "El cliente {$nombre_cliente} es {$tipo_cliente}"; // se concatena con un "."
include 'includes/footer.php';