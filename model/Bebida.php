<?php
// Clase Bebida que hereda de Artículo
class Bebida extends Articulo {
    protected $cantidad;
    protected $precio;
    protected bool $tamaño = false;

  public function __construct($nombre, $precio, $disponibilidad, $categoria, $cantidad) {
    parent::__construct($nombre, $precio, $disponibilidad, $categoria);
    $this->cantidad = $cantidad;
    $this->tamaño;

  }
  
  public function getCantidad() {
    return $this->cantidad;
  }
  
  public function setCantidad($cantidad) {
    $this->cantidad = $cantidad;
  }

  public function getTamaño() {
    return $this->tamaño;
  }
  
  public function setTamaño($tamaño) {
    $this->tamaño = $tamaño;
  }


}


?>