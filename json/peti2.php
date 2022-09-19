<?php
    include_once('peti.php');

    class peti2
    {
        function getAll()
        {
            $usuari = new usuario();
            $usuario= array();
            $usuario['usuario'] = array();

            $result= $usuari-> GETorden();
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

        function getById($id)
        {
            $user = new usuario();
            $users = array();   
            $users['users'] = array();
    
            $res2 = $user->GETorden($id);
    
    
            if ($res2->rowCount() == 1) {
                $row = $res2->fetch();
    
                $item= array(
                    "id_usu"=> $row['id_usu'],
                    "id_tipo" =>$row['id_tipo'],
                    "nombre_usu"=>$row['nombre_usu'],
                    "apellido_usu"=>$row['apellido_usu'],
                    "usuario"=>$row['usuario'],
                    "correo" => $row['correo'],
                    "clave" => $row['clave'],
                );
                array_push($user["usuario"], $item);
                $this->printJSON($users);
            } else {
                echo json_encode(array('mensaje' => 'No hay elementos'));
            }
        }
    
    
        function error($mensaje)
        {
            echo json_encode(array('mensaje' => $mensaje));
        }
    
        function printJSON($array)
        {
            echo '<code>' . json_encode($array) . '</code>';
        }
    }
?>