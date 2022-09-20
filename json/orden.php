<?php
include_once '../conexiones/conexion.php';

class Orden extends Database
{
    function GETOrden()
    {
        $query = $this->connect()->query('SELECT * FROM orden_servicio');
        return $query;
    }
    function GETOrdenes($id)
    {
        $query = $this->connect()->prepare('SELECT * FROM orden_servicio WHERE numero_orden = :id');
        $query->execute(['id' => $id]);
        return $query;
    }
}
