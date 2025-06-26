<?php include '/home/kehian/Documentos/Curso/PHP/POO/includes/header.php';

// Conectar a la BD con MySQLi
$db = new mysqli('localhost', 'root', '57184203', 'appsalon');
$query = 'SELECT nombre, precio FROM servicios';

// Consulta normal --
$result = $db->query($query);

$nombres = [];

while ($row = $result->fetch_assoc()) {
    array_push($nombres, $row);
}

echo '<pre>';
var_dump($nombres);
echo '</pre>';


echo '<hr>';
// Consultas preparadas --

// Preparamos el query
$statement = $db->prepare($query);

// Lo ejecutamos
$statement->execute(); // ejecuta la consulta preparada

// Creamos la variable
$statement->bind_result($nombre, $precio); // debemos indicarle una variable donde debe guardar los resultados

// Asignamos el resultado 

while ($statement->fetch()) {
    echo 'El servicio ' . $nombre . ' vale $' . $precio . '<br>'; 
}




include '/home/kehian/Documentos/Curso/PHP/POO/includes/footer.php';