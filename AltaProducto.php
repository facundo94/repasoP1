<?php
/*Recibe post nombre, precio y una foto del producto, guardar la foto con el nombre*/

include "Producto.php";

$nombreProducto = $_POST["nombre"];
$precioProducto = $_POST["precio"];
$producto = new Producto($nombreProducto, $precioProducto);

$im = imagecreatefrompng($_FILES["imagen"]["tmp_name"]);
imagepng($im , "img/$nombreProducto.png"); 

echo "Producto cargado con exito!";

?>