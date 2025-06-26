<?php include 'includes/header.php';

interface TransporteInterfaz {
    public function getInfo() : string;
    public function getRuedas() : int;
}

abstract class Transporte implements TransporteInterfaz{

    public function __construct(protected int $ruedas, protected int $capacidad)
    {   
    }

    public function getInfo() : string {
        return 'El transporte tiene ' . $this->ruedas . ' y una capacidad de ' . $this->capacidad . ' personas';
    }

    public function getRuedas(): int {
        return $this->ruedas;
    }
}

class Automovil extends Transporte implements TransporteInterfaz {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {   
    }

    public function getInfo(): string {
        return 'El transporte tiene ' . $this->ruedas . ' y una capacidad de ' . $this->capacidad . ' personas' . 
        'y es de color ' . $this->color;
    }
}

include 'includes/footer.php';