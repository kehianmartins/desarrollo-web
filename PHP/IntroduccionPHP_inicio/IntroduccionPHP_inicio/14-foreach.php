<?php include 'includes/header.php';

$clientes = ['Pedro', 'Juan', 'Carlos'];


// For each

foreach ($clientes as $cliente) {
    echo $cliente . "<br>";
}


// Sobre array asociativo

$cliente = [
    "nombre" => "Kehian",
    "saldo"  => 200,
    "tipo"   => "Premium" 
];

// valores de las llaves
foreach ($cliente as $valor) {
    echo $valor . "<br>";
}


// valores de las llaves y su valor
foreach ($cliente as $key => $valor) {
    echo $key . " : " . $valor . "<br>";
}


// Ejemplo real
// suponiendo tenemos una bd producto

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

// Es mejor php en html que html en php.
// Se cierra php y se abre dentro

foreach($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre']?></p>
        <p>Precio: <?php echo "$" . $producto['precio']?></p>
        <p>Disponible: <?php echo ($producto['disponible'] ? 'Si' : 'No');?></p>
    </li>

    <?php
}

include 'includes/footer.php';