<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin) {
    echo "Usuario autenticado como administrador";
} else if($cliente) {
    echo "Usuario autenticado.";
} else {
    echo "Usuario no autenticado";
}


$cliente = [
    'nombre' => 'Kehian',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium',
        'tel' => 91283982
    ]
];


echo "<br>";
if( !empty($cliente) ) {
    echo "El array de cliente no está vacio";

    if ($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo disponible";
    } else {
        echo "El cliente no tiene saldo disponible";
    }
}

// switch

$tecnologia = 'PHP';

switch($tecnologia) {
    case 'PHP':
        echo 'PHP, un excelente lenguaje';
        break;
    case 'JavaScript':
        echo 'Lenguaje de la web';
        break;
    default:
        echo 'Algun lenguaje que no se cual es';
        break;
}

include 'includes/footer.php';