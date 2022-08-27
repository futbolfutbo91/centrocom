<?php

require_once('persona.php');


class cliente extends persona {
    public $categorias;

    public function setCategoria($categorias, $cargo){
        $this->categorias = $categorias;
        $this->cargo = $cargo;
    }

    public function getCategorias(){
        return "categoria: $this->categorias <br/> Cargo: $this->cargo";
    }
}






?>