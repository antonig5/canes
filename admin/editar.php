<?php
    require('../conexiones/conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <!-- CSS only -->
              <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href=" https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css">
    <title>Editar</title>
</head>
<body>
    <?php
    $id=$_GET['id'];
    $email=$_GET['email'];
    $nombre=$_GET['nomb'];
    $apellido=$_GET['apel'];
    $user=$_GET['usua'];
   
    ?>

    <form action="modificar.php" method="get">
    <div>
        <input type="text" name="id" value="<?php echo $id?>" readonly>

                    <select id="tip" name="tip" scope="col">
                            <option >Seleccione..</option>
                            <?php
		                        $sql= "SELECT * FROM tipo_usu WHERE id_tipo = 1"; 
		                        $resultado=$base_de_datos->prepare($sql);
		                        $resultado->execute(array());
		                        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
		                            ?> 
                                    <option value="<?php echo($registro['id_tipo'])?>"> <?php echo($registro['tipo'])?>
                                <?php 
                                }
                                ?>
                    </select>
                    <input type="text" name="usua" value="<?php echo $user?>" readonly>
                    <input type="text" name="nomb" value="<?php echo $nombre?>" >
                    
                    <input type="teñxt" name="apel" value="<?php echo $apellido?>">
                    <input type="text" name="email" value="<?php echo  $email?>">
                    <input type="submit" class="btn btn-primary" name="mod" value="Modificar">
                    
                  
    </div>
    </form>
</body>
</html>