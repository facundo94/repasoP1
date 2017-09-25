<?php
/*Recibe post nombre, precio y una foto del producto, guardar la foto con el nombre*/

$nombreProducto = $_POST["nombre"];
$precioProducto = $_POST["precio"];

$im = imagecreatefrompng($_FILES["imagen"]["tmp_name"]);
imagepng($im , "img/$nombreProducto.png"); 

?>