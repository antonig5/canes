
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/clientes.css">
    <title>Clientes</title>
</head>
<body>
<?php
	
	include("../conexiones/conexion.php");

	
	//--------------paginación-------------
	$registros=3;//indica que se van a ver 3 registro por página
	if(isset($_GET["pagina"])){
		if($_GET["pagina"]==1){
			header("Location:./index.php");
		}else{
			$pagina=$_GET["pagina"];
		}
	}else{
		$pagina=1;//muestra página en la que estamos cuando se carga por primera vez
	}
	
	$empieza=($pagina-1)*$registros;//registro desde el cual va a empezar a mostrar
	$sql_total="SELECT * FROM clientes";//muestra los 3 primeros, primer parametro indica en que posición impieza en este caso posición 0, el segundo parametro cuantos registros quiere mostrar en este caso 3 registros

	$resultado=$base->prepare($sql_total);

	$resultado->execute(array());
	$numfilas=$resultado->rowCount();//cuantos registros hay en total
	$totalpagina=ceil($numfilas/$registros);

	$registros=$base->query("SELECT * FROM clientes  LIMIT $empieza, $registros")->fetchALL(PDO::FETCH_OBJ);
	
?>
	
<h3>PANEL DE OPCIONES CLIENTES</h3>
    <form method="post" action="buscar.php">
        <div id="nim">
            <a href="registrar.php">
                <button type="button">
                    Registrar
                </button>
            </a>
        </div>
        <input class="buscar"  type="search" name="busca"  id="" placeholder="Buscar" required> 
        <button id="but" class="uno">buscar</button>
        <br> <br>
        <div id="tag">
        <table  class="table">
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Celular</th>
            <th colspan="2">Accion</th>
        </tr>
        <?php
            foreach ($registros as $move) {
        ?>
        <tr>
            <td><?php echo $move->id_cliente;?></td>
            <td><?php echo $move->nombre_cliente?></td>
            <td><?php echo $move->apellido_cliente?></td>
            <td><?php echo $move->direccion?></td>
            <td><?php echo $move->celular?></td>
            <td>
                <a id="q1" href="eliminar.php?id=<?php echo $move->id_empleado?> & nomb=<?php echo $move->nombre_emp?>">
					<img src="./borrar.png" alt="eliminar">
                </a>
            </td>
            <td>
                <a id="q2" href="modificar.php?id=<?php echo $move->id_empleado?> & nomb=<?php echo $move->nombre_emp?>">
					<img src="./lapiz.png" alt="modificar">
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </div>
    </table class="dos">
		<td>
			<a href="../administrador/index.php" onmouseup="window.close()">
                <input  id="bot" type="button" value="cerrar" name="cerrar" >
            </a>
		</td>
	</table>
    </form>
    <div id="pagina">
        <nav>
            <ul>
                <li <?php  echo $_GET['pagina']=1?>>
                    <a href="index.php?pagina=<?php echo $_GET['pagina']=1 ?>">Anterior</a>
                </li>
                <?php
                for($i=0; $i<$totalpagina; $i++):?>
                <li  <?php echo $_GET ['pagina']==$i+1? 'active': ''?>">
                    <a href="index.php?pagina=<?php echo $i+1?>"><?php echo $i+1?></a>
                </li>
                <?php endfor?>
                <li <?php  echo $_GET['pagina']>=$totalpagina? 'disabled' : '' ?> ">
                    <a  href="index.php?pagina=<?php echo $_GET['pagina']+1 ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</body>
</html>
    