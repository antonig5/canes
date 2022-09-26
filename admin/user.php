<?php
  
    require("../conexiones/conexion.php");

    $consult="SELECT * FROM usuario,tipo_usu WHERE usuario.id_tipo=tipo_usu.id_tipo";
    $rest= $base_de_datos->prepare($consult);
    $rest->execute();
    $camb=$rest->fetchAll();
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
    <title>Usuarios</title>
    <style>
        a{
            color:white;
        }
        a:hover{
            color:aqua;
        }
        #a{
            color:black;
        }
        table{
            margin-top:20px;
            width:230px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <li class="nav-item">
        <a  href="index.php">Inicio</a></li>
        
        <li class="nav-item">
            <a href="#">Recepcionistas</a></li>
    
        <li class="nav-item">
        <a href="user.php">Usuarios</a></li>
        
        <li class="nav-item">
        <a href="#">Crear promociones</a></li>
        
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li><a href="#">Cerrar sesion</a></li>      
      </ul>
    </div>
  </div>
</nav>

    <?php
        session_start();
        require('../conexiones/conexion.php');
        ?>
        <form action="crearu.php">
            <input class="btn btn-primary" type="submit" value="Crear users">
        </form>
       
        <table class="table">
            <tr>
                <th>Codigo</th>
                <th>Tipo de usuario</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Clave</th>
                <th>Accion</th>
            </tr>
            <?php
            foreach ($camb as $user) {
                ?>
                <tr>
                    <td><?php echo $user->id_usu?></td>
                    <td><?php echo $user->tipo?></td>
                    <td><?php echo $user->usuario?></td>
                    <td><?php echo $user->nombre_usu?></td>
                    <td><?php echo $user->apellido_usu?></td>
                    <td><?php echo /*$heren->passeord*/"XXXX"?></td>
                    <td><a id="a" href="editar.php?id=<?php echo $user->id_usu?> &tip=<?php echo $user->id_tipo ?> &tip1=<?php echo $user->tipo?> &nomb=<?php echo $user->nombre_usu?> &apel=<?php echo $user->apellido_usu?> &usua=<?php echo $user->usuario?> &email=<?php echo $user->correo?> "><input class="btn btn-primary" type="submit" value="Editar"></a></td>
                </tr>
                <?php
            }
        ?>
        <tr></tr>
        </table>


</body>
</html>