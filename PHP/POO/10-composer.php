<?php include 'includes/header.php';

// Soluciona dependencias mucho más sencillo
require '../vendor/autoload.php';

use App\Cliente;
use App\Detalles;

$detalle = new Detalles();
$cliente = new Cliente();

include 'includes/footer.php';