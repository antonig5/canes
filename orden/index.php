<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



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
                        <th scope="col">Total</th>
                        <th scope="col">Total</th>

                    </tr>
                </thead>
                <tbody id="contenido">

                </tbody>
            </table>
        </div>
    </div>


    <script>
        var url = 'https://2vnbp27n.directus.app/items/auxiliar';
        fetch(url, {
                method: "GET",
                headers: {
                    'Content-Type': 'application/json'

                },
            })
            .then(response => response.json())
            .then(data => {
                console.log(data)
                let body = "";
                for (var i = 0; i < data.length; i++) {
                    body += `<tr>
                    <td>${data[i].documento}</td>
                    <td>${data[i].username}</td>
                    <td>${data[i].email}</td></tr>`
                }
                document.getElementById('contenido').innerHTML = body
            })
            .catch(error => console.log(error))
    </script>
</body>

</html>