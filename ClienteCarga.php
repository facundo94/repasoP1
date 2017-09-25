<?php

/*recibe por get nombre, mail, clave y sexo, crea el objeto de tipo cliente y guarda en el 
archivo CLientes/clientesActuales.txt*/

include "Cliente.php";

$nombre = $_GET["nombre"];
$mail = $_GET["mail"];
$clave = $_GET["clave"];
$sexo = $_GET["sexo"];

$cliente = new Cliente($nombre, $mail, $clave, $sexo);

$nombre_archivo = "clientesActuales.txt";

if($archivo = fopen("Clientes/".$nombre_archivo, "a"))
{
    if(fwrite($archivo, $cliente->ToString(). "\n"))
    {
        echo "Se ha ejecutado correctamente";
    }
    else
    {
        echo "Ha habido un problema al crear el archivo";
    }

    fclose($archivo);
}

?>