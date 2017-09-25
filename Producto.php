<?php

/*Posee dos atributos privados. implementa la interface Ivendible con el metodo PrecioMasIva
y tiene un metodo que se llama RetornarArrayDeProductos que retorna un array ocn cinco productos*/

include "/IVendible.php";

class Producto implements IVendible{
    private $_nombre;
    private $_precio;

    function Producto($nombre, $precio){
        $this->_nombre = $nombre;
        $this->_precio = $precio;
    }

    function getNombre(){
        return $this->_nombre;
    }

    function PrecioMasIva(){
        return $this->_precio * 1.21;
    }

    static function RetornarArrayDeProductos(){
        $productos = array();
        $productos[] = new Producto("galletitas", 20);
        $productos[] = new Producto("otras galletitas", 21);
        $productos[] = new Producto("mas galletitas", 22);
        $productos[] = new Producto("Galletitas de nuevo", 23);
        $productos[] = new Producto("no de nuevo decia", 24);

        return $productos;
    }

}

?>