<?php
    include_once('peti.php');

    class peti2
    {
        function getAll()
        {
            $usuario = new usuario();
            $usuario= array();
            $usuario['usuario'] = array();

            $result= $usuario-> GETorden();
            if ($result->rowCount()) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $item= array(
                        "id_usu"=> $row['id_usu'],
                        "id_tipo" =>$row['id_tipo'],
                        "nombre_usu"=>$row['nombre_usu'],
                        "apellido_usu"=>$row['apellido_usu'],
                        "usuario"=>$row['usuario'],
                        "correo" => $row['correo'],
                        "clave" => $row['clave'],
                    );
                    array_push($usuario["usuario"], $item);
                }
                echo json_encode($usuario);
            }else {
                echo json_encode(array('Mensaje'=>'No hay elementos'));
            }
        }
    }
?>