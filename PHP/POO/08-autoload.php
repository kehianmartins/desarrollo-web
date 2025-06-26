<?php include 'includes/header.php';

// Incluir las otras clases

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';


// Un autoload permite importar múltiples clases facil y rápidamente
function mi_autoload($clase) {
    echo $clase;
    require __DIR__ . '/clases/' . $clase . '.php';
}
// El autoload, importa automaticamente las clases a medida que instanciamos
// una clase. So hago una instancia de 'Cliente', busca una clase 'Cliente'
// Registrar el autoload
spl_autoload_register('mi_autoload');

$detalle = new App\Detalles();
$cliente = new App\Cliente();

include 'includes/footer.php';