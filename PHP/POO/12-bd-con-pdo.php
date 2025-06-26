<?php include 'includes/header.php';

// Conectar a la BD con PDO
$db = new PDO('mysql:host=localhost; dbname=appsalon', 'root', '57184203');

$query = 'SELECT nombre, precio FROM servicios';

// Consultar a la DB
// $propiedades = $db->query($query)->fetchAll();
// - no recomendable, abierto a inyecciones de SQL

// Con consultas preparadas
$stmt = $db->prepare($query); // se suele usar $stmt como abreviatura a statement

$stmt->execute();

// fetchAll(): trae los resultados en un array, con un array de posición y uno asociativo con el resultado
// Pero se le puede indicar en que formato se quiere
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC); // se trae solo un arreglo asosiativo

foreach($resultado as $propiedad):
    echo $propiedad['nombre'];
    echo ' - ';
    echo $propiedad['precio'];
    echo '<br>';
endforeach;

include 'includes/footer.php';