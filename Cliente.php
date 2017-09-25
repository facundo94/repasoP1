<?php

class Cliente{

    private $_nombre;
    private $_mail;
    private $_clave;
    private $_sexo;

    function Cliente($nombre, $mail, $clave, $sexo){
        $this->_nombre = $nombre;
        $this->_mail = $mail;
        $this->_clave = $clave;
        $this->_sexo = $sexo;
    }

    function getNombre(){
        return $this->_nombre;
    }

    function getMail(){
        return $this->_mail;
    }

    function getClave(){
        return $this->_clave;
    }

    function getSexo(){
        return $this->_sexo;
    }

    function ToString(){
        $cadena = $this->getNombre()."/";
        $cadena .= $this->getMail()."/";
        $cadena .= $this->getClave()."/";
        $cadena .= $this->getSexo()."/";
        return $cadena;
    }

}

?>