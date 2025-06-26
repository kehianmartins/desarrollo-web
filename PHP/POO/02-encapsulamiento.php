<?php include 'includes/header.php';

// Modificadores de acceso

// - Public    : se puede acceder y modificar desde cualquier lugar
// - Protected : se puede acceder unicamente en la clase
// - Private   : solo miembros de la misma clase pueden acceder a el (herencia)

class Producto
{

    public function __construct(protected string $nombre, protected int $precio, protected bool $disponible) 
    {
    }

    public function mostrarProducto() : void {
        echo 'El producto es ' . $this->nombre . 'y su precio es de $' . $this->precio;
    }

    public function getNombre() : string{
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre;
    }
}

$producto = new Producto('Tablet', 300, true);
$producto->mostrarProducto();

// $producto->nombre = 'Nuevo nombre'; -- no se puede, el atributo es protected
$producto->setNombre('Nuevo nombre');

include 'includes/footer.php';