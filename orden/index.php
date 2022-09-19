<?php

include 'conexion.php';
?>


<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>ORDEN</title>
</head>

<body>
    <div class="container my-5 text-center">

        <div class="mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Orden Nº</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Auxiliar</th>
                        <th scope="col">Recepcionista</th>
                    </tr>
                </thead>
                <tbody id="contenido">

                </tbody>
            </table>
        </div>
    </div>

    <script>
        var contenido = document.querySelector('#contenido')

        var orden = "ordenes.php";


        // console.log(datos)
        fetch('ordenes.php')
            .then(res => res.json())
            .then(datos => {


                console.log(datos);

                for (var valor of datos.ordenes) {
                    console.log(valor.nombre)
                    contenido.innerHTML += `
                
                <tr>
                    <th scope="row">${ valor.OrdenN }</th>
                    <td>${ valor.cliente }</td>
                    <td>${ valor.auxiliar }</td>
                    <td>${ valor.recepcionista  }</td>
                </tr>
                
                `
                }
            })
    </script>


</body>

</html>