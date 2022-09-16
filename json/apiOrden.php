<?php
include_once 'orden.php';


class ApiOrden
{


    function getAll()
    {

        $nomina = new Orden();
        $nominas = array();
        $nominas['ordenes'] = array();

        $res2 = $nomina->GETOrden();
        if ($res2->rowCount()) {


            while ($row = $res2->fetch(PDO::FETCH_ASSOC)) {
                $item2 = array(
                    "OrdenN" => $row['numero_orden'],
                    "cliente" => $row['id_cliente'],
                    "auxiliar" => $row['id_auxiliar'],
                    "recepcionista" => $row['id_recepcionista'],
                    "fecha" => $row['fecha'],
                    "total" => $row['total'],
                   
                );

                array_push($nominas["ordenes"], $item2);
            }


            echo json_encode($nominas);
        } else {
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}
