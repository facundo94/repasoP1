<?php
/*si se recibe un nombre por get, retorna si el producto esta en la lista.
si lo recibe por post con el parametro "que debo hacer?"  = borrar se debe borrar
al producto  mover la foto al subdirectorio productos borrados con el nombre formado por
el producto y la fecha de borrado */

include "Producto.php";

$listaProducto = Producto::RetornarArrayDeProductos();
$nombre;
$accion;

if(isset($_POST["nombre"])){

    $nombre = $_POST["nombre"];
    $accion = $_POST["queDeboHacer"];
    $productoBorrado;

    foreach($listaProducto as &$producto){
        if($producto->getNombre() == $nombre && $accion == "borrar"){
            $productoBorrado = array_search($producto, $listaProducto);
            unset($listaProducto[$productoBorrado]);

            $origen = "img/$nombre.png";
            $destino = 'imagenesBorradas/';
            copy($origen, $destino."$nombre.png");
            unlink("img/$nombre.png");
            break;
        }
    }

    

    

}else if(isset($_GET["nombre"])){
    $nombre = $_GET["nombre"];

    foreach($listaProducto as &$producto){
        if($producto->getNombre() == $nombre){
            echo "El producto se encuentra en la lista!";
            break;
        }
    }
}

?>