<?php include 'includes/header.php';

$i = 0; // Inicialización

// Se pueden escribir sin llaves:

while($i > 10):

    echo $i . "<br>";

    $i++; 
endwhile;




// While

while($i > 10) {

    echo $i . "<br>";

    $i++;
}

// do While

do {

    echo $i . "<br>";

    $i++;
} while( $i > 10 );

// for
for ($indice=0; $indice < 10; $indice++) { 
    echo $i . "<br>";
}


// Fizzz - Buzz
// Fizz - si es divisible entre 3
// Buzz - si es divisible entre 5
// FizzBuzz - si lo es entre ambos

for ($i=1; $i < 100; $i++) { 
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "FizzBuzz <br>";
    } else if ($i % 5 === 0){
        echo $i . "Buzz <br>";
    } else if ($i % 3 === 0) {
        echo $i . "Fizz <br>";
    }
    
}

include 'includes/footer.php';