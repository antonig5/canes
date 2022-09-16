
<?php 
require("../conexion/conexion.php");

$codigo=						$_POST['codigo'];
$nombre=						$_POST['nombre'];
$apellido=						$_POST['apellido'];
$direccion=						$_POST['usuario'];
$celular=						$_POST['correo'];


$sql="INSERT INTO clientes (id_cliente, nombre_cliente, apellido_cliente, direccion, celular) values (:id,:no,:ape,:usu,:em)";
$resultado=$base->prepare($sql);//$base es el nombre de la conexión
$resultado->execute(array(":id"=>$codigo, ":no"=>$nombre, ":ape"=>$apellido, ":usu"=>$direccion, ":em"=>$celular));

if($codigo==" " && $nombre==" "){
	echo json_encode("Error");
}else{echo json_encode("<table border='1'>
	<tr><h3>Datos Registrados<h3></tr>
	<tr><td>Código</td><td>Nombre</td><td>Apellido</td><td>Dirección</td><td>Celular</td></tr>
	
	
	<tr><td>$codigo</td><td>$nombre</td><td>$apellido</td><td>$direccion</td><td>$celular</td></tr></table>");
}




	