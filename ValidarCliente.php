<?php
/*Validarcliennte.php recibe por post correo y clave(CLientes/clientesActuales.txt). 
Si coincide se crea un objeto*/

include "Cliente.php";

$mail = $_POST["mail"];
$nombre_archivo = "Clientes/clientesActuales.txt";
$listaClientes = array();
$cliente;

$file = fopen($nombre_archivo, "r") or exit("Unable to open file!");
while(!feof($file))
{
    $linea = fgets($file); 
        
    /*var_dump($cliente);
    die();*/
    $clienteString = explode("/",$linea);

    //var_dump($clienteString);
    //$listaClientes[] = new Cliente($clienteString[0], $clienteString[1], $clienteString[2], $clienteString[3]);
    if($clienteString[1] == $mail){
        $cliente = new Cliente($clienteString[0], $clienteString[1], $clienteString[2], $clienteString[3]);
        break;
    }
}
fclose($file);

var_dump($cliente);
die();
/*foreach($listaClientes as &$cliente){
    if($cliente->getMail() == $mail){

    }
}*/

?>