

<?php
// Clase Artículo
class Articulo
{
    protected $nombre;
    protected $precio;
    protected  bool $disponibilidad;
    protected $categoria;

    public function __construct($nombre, $precio, $disponibilidad, $categoria)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponibilidad = $disponibilidad;
        $this->categoria = $categoria;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public static function filtrarDisponibilidad($articulos) {
        $disponibles = [];
        foreach ($articulos as $articulo) {
            if ($articulo->getDisponibilidad()) {
                $disponibles[] = $articulo;
            }
        }
        return $disponibles;
    }
}
