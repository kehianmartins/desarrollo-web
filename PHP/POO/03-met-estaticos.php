<?php include 'includes/header.php';

// Métodos estáticos

class Producto
{

    public $imagen;
    public static $imagenPlaceholder = "Imagen.jpg";

    public function __construct(protected string $nombre, protected int $precio, protected bool $disponible, string $imagen) 
    {
        if($imagen) {
            self::$imagenPlaceholder = $imagen;
        }
        // Si no se ingresa una imagen, entonces se aplica el ImagenPlaceholder de forma predeterminada.
    }

    // es static, no requiere instanciación
    public static function obtenerProducto() {
        echo "Obteniendo datos de producto...";
    }

    public static function obtenerImgProducto() {
        return self::$imagen; // self : para acceder a atributos de la clase
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

echo Producto::obtenerProducto(); // se usa "::" para llamar a métodos estáticos.
echo Producto::obtenerImgProducto();
echo Producto::$imagen; // no se recomienda accede directamente a una variable

include 'includes/footer.php';