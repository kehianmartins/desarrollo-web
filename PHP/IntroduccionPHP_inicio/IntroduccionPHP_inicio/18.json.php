<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"',
        'precio' => 400,
        'disponible' => true
    ],
    [
        'nombre' => 'Celular',
        'precio' => 100,
        'disponible' => false
    ]
];

// convierte el array asosiativo a un archivo json
$json = json_encode($productos, JSON_UNESCAPED_UNICODE); // JSON_UNESCAPED_UNICODE : convierte la codificación para aceptar a tildes

$array = json_decode($json);



include 'includes/footer.php';