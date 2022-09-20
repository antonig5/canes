<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
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
                        <th scope="col"> Actions</th>
                    </tr>
                </thead>
                <tbody id="contenido">

                </tbody>
            </table>
        </div>
    </div>

    <script>
        var contenido = document.querySelector('#contenido')





        fetch('../json/ordenes.php')
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
                    <td><a class="btnBorrar" type="button">Eliminar</a></td>
                </tr>
                
                `
                }
            })
        const on = (element, event, selector, handler) => {
            //console.log(element)
            //console.log(event)
            //console.log(selector)
            //console.log(handler)
            element.addEventListener(event, e => {
                if (e.target.closest(selector)) {
                    handler(e)
                }
            })
        }
        on(document, 'click', '.btnBorrar', e => {
            const fila = e.target.parentNode.parentNode
            const id = fila.firstElementChild.innerHTML
            alertify.confirm("This is a confirm dialog.",
                function() {
                    fetch('../json/ordenes.php?numero_orden' + id, {
                            method: 'DELETE'
                        })
                        .then(res => res.json())
                        .then(() => location.reload())
                    //alertify.success('Ok')
                },
                function() {
                    alertify.error('Cancel')
                })
        })
    </script>


</body>

</html>