<?php
include_once 'conexion.php';

class Mascotas extends Database
{
    function GETMascotas()
    {
        $query = $this->connect()->query('SELECT * FROM mascota');
        return $query;
    }
    function GETMascotas1($id)
    {
        $query = $this->connect()->prepare ('SELECT FROM mascota WHERE id_mascota= :id');
        $query->execute(['id' => $id]);
        return $query;
    }
}

