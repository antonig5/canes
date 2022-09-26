<?php
    require("../conexiones/conexion.php");

    if (isset($_GET['mod'])) {
        
    $id=$_GET['id'];
    $tip=$_GET['tip'];
    $usu=$_GET['usua'];
    $clave=$_GET['clave'];
    $pass_cifrado=password_hash($clave,PASSWORD_DEFAULT,array("clave"=>12));
    $nomb=$_GET['nomb'];
    $apel=$_GET['apel'];
    $email=$_GET['email'];

    
    $sql="INSERT INTO usuario (id_usu, id_tipo, nombre_usu, apellido_usu,usuario, correo,clave) values(?,?,?,?,?,?,?)";
    $result= $base_de_datos->prepare($sql);
    $result->execute(array($id,$tip,$nomb,$apel,$usu,$email,$pass_cifrado));
    echo"<script>alert('Se insertaron los datos')</script>";
    echo"<script>window.location='user.php'</script>";
    }

?>