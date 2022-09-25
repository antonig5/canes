<?php
include("../conexiones/conexion.php");
if(isset($_GET['Registrar'])){
       
        $nomM = $_GET['nomM'];
        $raza = $_GET['mascota'];
        $color = $_GET['colorM'];
        $docC = $_GET['cliente'];
    
        ?>
        
        <?php 
        $sql="INSERT INTO mascota ( id_raza, id_cliente,nombre_mascota,color) values (:idR, :idC, :nomM, :colorM)";
        $resultado=$base_de_datos->prepare($sql);//$base es el nombre de la conexión
        $resultado->execute(array( ":idR"=>$raza, ":idC"=>$docC, ":nomM"=>$nomM, ":colorM"=>$color));

        echo"<script>alert('Se realizo su exito correcto.')</script>";
        echo"<script>window.location='tablaM.php'</script>";
    
     
    }
?>