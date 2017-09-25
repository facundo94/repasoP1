<?php

/*VenderProducto.php recibe por get el nombre del producto y la cantidad, hace llamdas a metodos
y retorna el precio total a pagar*/

include "Producto.php";

$listaProductos = Producto::RetornarArrayDeProductos();

$_nombreProducto = $_GET["nombre"];
$cantidad = $_GET["cantidad"];

foreach($listaProductos as &$producto){
    if($producto->getNombre() == $_nombreProducto){
        echo "Cantidad: $cantidad - Producto: $_nombreProducto - Precio final: ".($producto->PrecioMasIva()*$cantidad);
    }
}


?>