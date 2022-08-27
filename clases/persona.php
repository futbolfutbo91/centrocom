<?php
class persona{
    public $nombre,$edad,$celular;

    public function __construct($nombre,$edad,$celular){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->celular  = $celular;
    }

    public function setComprar($producto){
        $this->producto = $producto;
    }

    public function getComprar(){
        return "Compra se ha realizado producto: $this->producto";
    }
}
?>