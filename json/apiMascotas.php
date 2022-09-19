<?php
include_once 'mascotas.php';


class ApiMascota
{


    function getAll()
    {

        $mascot = new Mascotas();
        $mascoticas = array();
        $mascoticas['mascota'] = array();

        $res2 = $mascot->GETMascotas();
        if ($res2->rowCount()) {


            while ($row = $res2->fetch(PDO::FETCH_ASSOC)) {
                $item2 = array(
                    "Id mascota" => $row['id_mascota'],
                    "Raza" => $row['id_raza'],
                    "Id cliente" => $row['id_cliente'],
                    "Nombre mascota" => $row['nombre_mascota'],
                    "Color" => $row['color'],
                    //datos que mostraremos en la tabla de contenido 
                    
                );

                array_push($mascoticas["mascotas"], $item2);
            }


            echo json_encode("mascota");
        } else {
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}
