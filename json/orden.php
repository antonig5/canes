<?php
include_once 'conexion.php';

class Orden extends Database
{
    function GETOrden()
    {
        $query = $this->connect()->query('SELECT * FROM orden_servicio');
        return $query;
    }
}
