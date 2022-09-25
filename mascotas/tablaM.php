<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="#">
    <title>Panel  de  registros de mascotas</title>
</head>
<header>
    
    <nav>
        <ul>
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
            <li><a href="#">#</a></li>
            <li></li>
        </ul>
    </nav>
</header>
<body>
    <?php
    
    include("../conexiones/conexion.php");

    
    //--------------paginación-------------
    $registros=3;//indica que se van a ver 3 registro por página
    if(isset($_GET["pagina"])){
        if($_GET["pagina"]==1){
            header("Location:tablaM.php");
        }else{
            $pagina=$_GET["pagina"];
        }
    }else{
        $pagina=1;//muestra página en la que estamos cuando se carga por primera vez
    }
    
    $empieza=($pagina-1)*$registros;
        $sql_total="SELECT * FROM mascota";

        $resultado=$base_de_datos->prepare($sql_total);

        $resultado->execute(array());
        $numfilas=$resultado->rowCount();
        $totalpagina=ceil($numfilas/$registros);

        $registros=$base_de_datos->query("SELECT * FROM mascota LIMIT $empieza,$registros")->fetchALL(PDO::FETCH_OBJ);
    

    ?>
    
    <h3 align="center">Panel  de mascotas</h3>
    <form action=" " method="post" autocomplete="off">
        <table border="2" align="center">
 
                <tr>
                    <th>Documento de mascota</th>
                    <th>id_raza</th>
                    <th>id_cliente</th>
                    <th>Nombre de mascota</th>
                    <th>color</th>
                
                </tr>
           
                <?php
                    foreach ($registros as $mascota) :
                    ?>
                    <tr>
                        <td><?php echo $mascota->id_mascota?></td>
                    
                    
                        <td><?php echo $mascota->id_raza?></td>
                    
                    
                        <td><?php echo $mascota->id_cliente?></td>
                    
                    
                        <td><?php echo $mascota->nombre_mascota?></td>
                    
                    
                        <td><?php echo $mascota->color?></td>
                        <td>
				            <a href="delete.php?id=<?php echo $mascota->id_mascota?>" class="elimina">
					            <input type="button"  name="elimina" value="Eliminar">
				            </a>
                        </td>
                        <td>
				            <a href="editar.php?id=<?php echo $mascota->id_mascota?>" class="editar">
					            <input type="button"  name="editar" value="Editar">
				            </a>
                        </td>
                    </tr>

                    <?php
			            endforeach;
		
			        ?>
  
        </table>

    </form>
    <div class="formulario" align="center">
        <form action="registrar.php" method="get" >
            <h1>registre  su  mascota</h1>
            <br>
            
            Ingrese su  nombre:
            <input type="varchar" name="nomM" required><br>
            
            Seleccione su raza:
            <select name="mascota">
			<?php
            $sql= "SELECT * FROM raza"; 
			$resultado=$base_de_datos->prepare($sql);
			$resultado->execute(array());
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			?>
			?>
            <option value="<?php echo $registro['id_raza'];?>"><?php echo $registro['nombre_raza']?></option>
				<?php
				}
            ?>
            </select><br>
            Ingrese el color:
            <input type="varchar" name="colorM" required><br>
            Seleccione su cliente:
            <select name="cliente">
			<?php
            $sql3= "SELECT * FROM clientes"; 
			$res=$base_de_datos->prepare($sql3);
			$res->execute(array());
			while($reg=$res->fetch(PDO::FETCH_ASSOC)){
			?>
            <option value="<?php echo $reg['id_cliente'];?>"><?php echo $reg['nombre_cliente']?></option>
				<?php
				}
            ?>
            
            <br><input  type="submit" class="button" name="Registrar" value="Registrar">
            

        </form>
    </div>
    <script src="confirmacion.js"></script>
</body>

</html>
        

