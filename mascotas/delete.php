
    
<?php
include("../conexiones/conexion.php");
$id= $_GET['id'];

$eliminar = "DELETE  FROM mascota WHERE id_mascota = '$id' ";
$elimina = $base_de_datos->query($eliminar);

if($elimina){
    header("Location:tablaM.php");
}else{
    echo "<script>alert('No se pudo eliminar el registro'); window.history.go(-1);</script>";
}

?>