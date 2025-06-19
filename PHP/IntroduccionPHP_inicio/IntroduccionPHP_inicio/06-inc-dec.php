<?php include 'includes/header.php';

// Incrementar en uno
$numero1 = 0;
$numero1++; // 1

// imprimir
echo $numero1++; // 2
// imprime 1, imprime y después incrementa
echo ++$numero1; // 3
// imprime 3, incrementa y después imprime

// Decrementar en uno
$numero2 = 3;

$numero1--; // 2

// imprimir
echo $numero1--; // 1
// imprime 2, imprime y después decrementa
echo --$numero1; // 0
// imprime 0, decrementa y después imprime



include 'includes/footer.php';