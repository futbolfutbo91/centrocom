<?php




require_once('clases/comercial.php');
require_once('clases/persona.php');
require_once('clases/clientes.php');

$andino = new centrocomercial('Medellin', 235, "Centro comercial panorama");
$andino->setPrecio("moto", 1298890);

$personau = new persona('Susana', 18, 3288789687);

$persona = new cliente('Laura', 37, 3227896527);
$persona->setCategoria("General","gerente");

echo "Datos de cliente <br/><br/> Nombre: $persona->nombre <br/> Edad: $persona->edad <br/> Celular: $persona->celular <br/>" . $persona->getCategorias();

echo "<br/><br/> Datos cliente <br/> <br/> Nombre: $personau->nombre <br/><br/> Edad: $personau->edad <br/> Celular: $personau->celular <br/> <br/> ";

echo "Datos Centro Comercial <br/> <br/> Ubicacion: $andino->ubicacion <br/><br/> Tamaño: $andino->lonarea km2      <br/> Nombre: $andino->nombre    <br/><br/> Producto: $andino->producto <br/>"  . $andino->getPrecio()


?>