<?php
    include_once("../conexiones/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    <title>Clientes</title>
</head>
<body>
    <h3>PANEL DE OPCIONES CLIENTES</h3>
    <form method="post" action="buscar.php">
        <div id="nim">
            <a href="./insertar.php">
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
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Celular</th>
                    <th colspan="2">Accion</th>
                </tr>
            </thead>
            <tbody id="contenido">
            </tbody>
        </table>
       
        <script>
        var contenido = document.querySelector('#contenido')

            // console.log(datos)
            fetch('clientes.php')
                .then(res => res.json())
                .then(datos => {
                    
                    
                    console.log(datos);
                    
            for(var valor of datos.cliente){
                console.log(valor.nombre)
                contenido.innerHTML += `
                
                <tr>
                    <th scope="row">${ valor.id_cliente }</th>
                    <td>${ valor.nombre_cliente }</td>
                    <td>${ valor.apellido_cliente }</td>
                    <td>${ valor.direccion  }</td>
                    <td>${ valor.celular  }</td>
                    <td> <a href="./insertar.php">borrar</a></td>
                    <td> <a href="./insertar.php">modificar</a></td>
                </tr>
                
                `
            }
                })
            
        

    </script>
        </div>
    </form>
</body>
</html>
        
                    

                