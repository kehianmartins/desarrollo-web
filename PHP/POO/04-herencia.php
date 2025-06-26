<?php include 'includes/header.php';

class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {   
    }

    public function getInfo() : string {
        return 'El transporte tiene ' . $this->ruedas . ' y una capacidad de ' . $this->capacidad . ' personas';
    }
}


// Palabra reservada para herencia: 'extends'
class Bicicleta extends Transporte {

    public function getInfo() : string {
        return 'El transporte tiene ' . $this->ruedas . ' y una capacidad de ' . $this->capacidad . ' personas y no usa gasolina';
    }
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {   
    }

    public function getTransmision() : string {
        return $this->transmision;
    }
}


$automovil = new Automovil(4, 5, 'Manual');
echo $bicicleta->getInfo();

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getInfo();

include 'includes/footer.php';