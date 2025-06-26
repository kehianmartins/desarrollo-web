<?php include 'includes/header.php';

// _________________________
// Forma antigua
// _________________________
// class Producto {

//     public $nombre;
//     public $precio;
//     public $disponible;

//     public function __construct(string $nombre, $precio, $disponible)
//     {
//         $this->nombre = $nombre;
//         $this->precio = $precio;
//         $this->disponible = $disponible;
//     }
// }

// Nueva forma, PHP 8
class Producto
{

    public function __construct(public string $nombre, public int $precio, public bool $disponible) 
    {
    }

    public function mostrarProducto() {
        echo 'El producto es ' . $this->nombre . 'y su precio es de $' . $this->precio;
    }
}

$producto = new Producto('Tablet', 300, true);
$producto->mostrarProducto();

include 'includes/footer.php';