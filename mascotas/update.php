<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
require("../conexiones/conexion.php");

    $id=$_GET["id"];
    $raza=$_GET["raza"];
    $docC=$_GET["cliente"];
	$nomM= $_GET["nomM"];
    $color= $_GET['color'];
	
    

try{
$sql="UPDATE mascota SET nombre_mascota=:nomb,id_raza=:raz, id_cliente=:docC,color=:co  WHERE id_mascota=:id";
$resultado=$base_de_datos->prepare($sql);  //$base guarda la conexión a la base de datos
$resultado->execute(array(":id"=>$id,":nomb"=>$nomM, ":raz"=>$raza ,":docC"=>$docC ,":co"=>$color));//asigno las variables a los marcadores
header('Location:tablaM.php');

$resultado->closeCursor();
}catch(Exception $e){
    //die("Error: ". $e->GetMessage());
    echo "F " . $id;
}finally{
    $base_de_datos=null;//vaciar memoria
}


?>
</body>
</html>