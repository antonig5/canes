<?php

  session_start();
  require("../conexiones/conexion.php");

  $tip=$_SESSION['tip'];
  $nombre=$_SESSION['nomb'];
  $apellido=$_SESSION['apel'];
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
    <title>Administrador</title>
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
        h1{
          font-size:25px;
          margin-top:40px;
        }
        h2{
          margin-top:10px;
          font-size:25px;
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
        <li><a href="../cerrar.php">Cerrar sesion</a></li>      
      </ul>
    </div>
  </div>
</nav>

<div>
<center>  <h1><?php echo $tip ?></h1></center>

  <center><h2><?php echo $nombre?> <?php echo $apellido?></h2></center>
  <center><div id="fecha"><a id="a" align="center"> <h2 id="h2">Ha ingresado el</h2><?php include ("../fecha.php"); echo fechas();?></a></div></center>

</div>
</body>
</html>