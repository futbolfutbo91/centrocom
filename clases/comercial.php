<?php 

class centrocomercial {
    public $ubicacion, $lonarea, $nombre;

    public function __construct($ubicacion, $lonarea, $nombre){
        $this->ubicacion = $ubicacion;
        $this->lonarea = $lonarea;
        $this->nombre = $nombre;
    }

    function setPrecio($producto, $precio){
        $this->producto = $producto;
        $this->precio = $precio;
    }

    function getPrecio(){
        $this->suma = $this->precio + 100000;
        return ("El precio de $this->producto es de  $" . $this->suma );
    }
}






?>