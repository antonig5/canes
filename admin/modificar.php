<?php
    require("../conexiones/conexion.php");


    $id=$_GET['id'];
    $tip=$_GET['tip'];
    $email=$_GET['email'];
    $nombre=$_GET['nomb'];
    $apellido=$_GET['apel'];
    $user=$_GET['usua'];

    try {
        $sql="UPDATE usuario SET  id_tipo=:tip, nombre_usu=:nomb, apellido_usu=:ape, usuario=:usu, correo=:corr WHERE id_usu=:id";
        $resul=$base_de_datos->prepare($sql);
        $resul->execute(array(":id" =>$id, ":tip"=> $tip,":nomb"=>$nombre,":ape"=>$apellido, ":usu" =>$user, ":corr"=>$email ));
        echo"<script>alert('Se actualizarion los datos')</script>";
        echo "<script>window.location='user.php'</script>";

        $resul->closeCursor();
    } catch (\Throwable $th) {
        echo"<script>alert('No se pudo actualizar')</script>";
        echo "<script>window.location='user.php'</script>";
    }finally{
        $base_de_datos=null;
    }

?>