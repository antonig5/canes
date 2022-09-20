<?php
    include_once("../conexiones/conexion.php");
    class cliente extends Database
{
    function Getcliente(){
        $query = $this->connect()->query("SELECT * FROM clientes");
        return $query;
    }
}
?>