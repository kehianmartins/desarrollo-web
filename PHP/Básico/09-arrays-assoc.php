<?php include 'includes/header.php';

$cliente = [
    "nombre" => "Kehian",
    "saldo"  => 200,
    "informacion" => [
        "tipo" => "premium",
        "telefono" => "092132939"
    ]
];

echo "<pre>";
var_dump($cliente["nombre"]);
echo "</pre>";

echo $cliente["nombre"];
echo $cliente["saldo"];
echo $cliente["informacion"]["tipo"];
echo $cliente["informacion"]["telefono"];


// Agregar propiedad
$cliente["codigo"] = 19238912839;

include 'includes/footer.php';