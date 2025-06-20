<?php require 'includes/header.php';

// require: cuando se necesita si o si -- es más grave, 'error fatal'
// require_once: lo incluye solo si el archivo no fue aún incluido
// include: cuando se quiera incluir 

require '15-funciones.php';

sumar(35, 10);

// es mejor poner las funciones en otros archivos

include 'includes/footer.php';