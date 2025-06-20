<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";


//---------------------------------------------
// Mayor que
//---------------------------------------------
$mayor_que = $numero1 > $numero2; // false

var_dump($mayor_que);
echo "<br/>"; // hace un salto de línea


//---------------------------------------------
// Mayor o igual que
//---------------------------------------------
$mayor__igual = $numero1 >= $numero2; // false

var_dump($mayor_que);

echo "<br/>";


//---------------------------------------------
// Menor que
//---------------------------------------------
$menor_que = $numero1 < $numero2; // true

var_dump($mayor_que);
echo "<br/>"; 


//---------------------------------------------
// Menor o igual que
//---------------------------------------------
$mayor__igual = $numero1 <= $numero2; // true

var_dump($mayor_que);
echo "<br/>";


//---------------------------------------------
// Igual
//---------------------------------------------
$mayor_que = $numero3 == $numero4; // true

var_dump($mayor_que);
echo "<br/>"; 


//---------------------------------------------
// Igual estricto
//---------------------------------------------
$mayor_que = $numero3 === $numero4; // false

var_dump($mayor_que);
echo "<br/>";

//---------------------------------------------
// <=>
//---------------------------------------------
$mayor_que = $numero1 <=> $numero2; // -1
$mayor_que = $numero2 <=> $numero1; //  1
$mayor_que = $numero2 <=> $numero2; //  0

// Devuelve;
// -1 : si el número de la -izquierda- es menor al de la -derecha-
//  1 : si el número de la -izquierda- es mayor al de la -derecha-
//  0 : si son iguales

var_dump($mayor_que);
echo "<br/>";




include 'includes/footer.php';