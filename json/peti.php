<?php
    include ('../conexiones/conexion.php');

    class usuario extends Database
    {
        function GETorden(){
            $query = $this->connect()->query('SELECT * FROM usuario');
            return $query;
        }
    }
?>